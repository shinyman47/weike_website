<?php
    session_start();
    include_once "conn/conn.php";
    $point = $_SESSION['point'];
    $money = $_SESSION['money'];

    $user = $_COOKIE['username'];

    $choice = $_POST['choice'];
    if($choice==1){
        $money_left = $money-50;
        $sql0 = "update  tb_user set money='$money_left' where name='$user'";
        $result0 = mysqli_query($conn, $sql0);
        $sql1 = "update tb_user set sp_lesson='1' where name='$user'";
        $result1 = mysqli_query($conn, $sql1);
        echo "<script type='text/javascript'>alert('购买完毕');</script>";
        header("Refresh:1;url=course.php");
    }else if($choice==2){
        $point_left = $point-90;
        $sql2 = "update  tb_user set point='$point_left' where name='$user'";
        $result2 = mysqli_query($conn, $sql2);
        $sql3 = "update tb_user set sp_lesson='1' where name='$user'";
        $result3 = mysqli_query($conn, $sql3);
        echo "<script type='text/javascript'>alert('购买完毕');</script>";
        header("Refresh:1;url=course.php");
    }
