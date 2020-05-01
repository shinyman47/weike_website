<?php
    class login_register_class{
        function for_login($get_user,$get_password){
            $conn = mysqli_connect("localhost", "root", "root", "db_database10") or die("连接数据库服务器失败！".mysqli_error());
            mysqli_query($conn,"set names 'utf8'");
            $user = $get_user;
            $password = $get_password;
            $root = 'root';
            $root_pass = 'root';

            if($user==$root&&$password==$root_pass){
                header("location:Root/root.php");
            }else{
                session_start();
                $sql1 = "select name from tb_user where name='$user'";
                $check = mysqli_query($conn, $sql1);
                $rows = mysqli_fetch_array($check);
                $num = count($rows);
                if ($num > 0) {
                    $sql2 = "select pwd from tb_user where name='$user'";
                    $check1 = mysqli_query($conn,$sql2);
                    $pass = mysqli_fetch_row($check1);
                    if($pass[0]==$password){
                        $_SESSION['login'] = 1;
                        setcookie("username",$user);
                        setcookie("password",$password);
                        echo "登录成功，2秒后跳转至课程页面";
                        header("Refresh:2;url=course.php");
                    }else{
                        echo "密码错误，2秒后重新登录";
                        header("Refresh:2;url=login.php");
                    }
                }else{
                    echo "没有这个用户，2秒后重新登录";
                    header("Refresh:2;url=login.php");
                }
            }

        }

        function for_register($username,$pass,$qq1,$safe){
            $conn = mysqli_connect("localhost", "root", "root", "db_database10") or die("连接数据库服务器失败！".mysqli_error());
            mysqli_query($conn,"set names 'utf8'");
            $user=$username;
            $password=$pass;
            $qq=$qq1;
            $safecode=$safe;

            $sql1 = "select name from tb_user where name='$user'";
            $check = mysqli_query($conn, $sql1);
            $rows = mysqli_fetch_array($check);
            $num = count($rows);
            if ($num > 0) {
                echo "<script type='text/javascript'>alert('用户名已存在，请重新写');location='javascript:history.back()';</script>";
            }
            else {
                $sql1 = "insert into tb_user(name,pwd,qq,pin) values('$user','$password','$qq','$safecode')";
                $result = $conn->query($sql1);
                $sql2 = "insert into tb_score(name) values('$user') ";
                $result1 = $conn->query($sql2);
                $key ="ALTER  TABLE  tb_user DROP id";
                mysqli_query($conn,$key);
                $key_do = "ALTER  TABLE  tb_user ADD id mediumint(6) PRIMARY KEY NOT NULL AUTO_INCREMENT FIRST";
                mysqli_query($conn,$key_do);
                if ($result&&$result1) {
                    echo "添加成功,2秒后返回登入界面";
                    header("Refresh:2;url=login.php");
                } else {
                    echo "注册失败,2秒后返回注册界面";
                    header("Refresh:2;url=register.php");
                }

            }
        }

        function for_find($user2,$pin,$password2){

            $conn = mysqli_connect("localhost", "root", "root", "db_database10") or die("连接数据库服务器失败！".mysqli_error());
            mysqli_query($conn,"set names 'utf8'");

            $user = $user2;
            $safecode = $pin;
            $new_password = $password2;

            $sql1 = "select name from tb_user where name='$user'";
            $check = mysqli_query($conn, $sql1);
            $rows = mysqli_fetch_array($check);
            $num = count($rows);

            $sql2 = "select pin from tb_user where name='$user'";
            $check2 = mysqli_query($conn, $sql2);
            $rows2 = mysqli_fetch_row($check2);


            if ($num==0) {
                echo "<script type='text/javascript'>alert('用户名不存在');location='javascript:history.back()';</script>";
            }else if($safecode!=$rows2[0]){
                echo "<script type='text/javascript'>alert('PIN不正确');location='javascript:history.back()';</script>";
            }else{
                $sql3 = "update tb_user set pwd='$new_password' where name='$user'";
                if(mysqli_query($conn, $sql3) or die(mysqli_error($conn)) ){
                    echo "<script type='text/javascript'>alert('修改成功，2秒进入登录界面');</script>";
                    header("Refresh:2;url=login.php");
                }
            }


        }
    }