<?php
    include_once "conn/conn.php";
    $user = $_POST['user'];
    $money = $_POST['money'];
    $sql0 = "select * from tb_user where name='$user'";
    $result0 = mysqli_query($conn,$sql0);
    $row = mysqli_fetch_row($result0);
    if(count($row)>0){
        $sql = "update tb_user set money=money+$money where name='$user'";
        $result = mysqli_query($conn,$sql);
        if($result){
            echo "<script type='text/javascript'>alert('充值成功！');</script>";
            header( "Refresh:1;url=charge.php");
        }
    }else{
        echo "<script type='text/javascript'>alert('没有这个账号！');</script>";
        header( "Refresh:1;url=charge.php");
    }
