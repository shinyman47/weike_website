<?php
    session_start();
    $user = setcookie ("username", "", time() - 3600);
    $pass = setcookie ("password", "", time() - 3600);

    if($user&&$pass){
        unset($_SESSION['login']);
        echo "<script type='text/javascript'>alert('注销成功，返回主页面');</script>";
        header("location:main.html");
    }
