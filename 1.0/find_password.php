<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>登录</title>
    <link rel="stylesheet" href="CSS/color.css">
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
    <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
</head>
<body class="login_body">

<!--导航栏-->
<?php
session_start();
$_SESSION['login_register']=2;
include_once "top.php";
$top = new top();
$top->show();
?>


<script type="text/javascript">

    function checkpassword()
    {
        var myform = document.getElementById("form1");
        var password = myform.password.value.length;
        if(password < 8)
        {
            errpassword.innerHTML = "<font color='red'>密码不符合要求</font>";
            return false;
        }else{
            errpassword.innerHTML = "<font color='green'>密码符合要求</font>";
            return true;
        }
    }
    function checkpasswordagain()
    {
        var myform = document.getElementById("form1");
        var repassword = myform.repassword.value;
        var password = myform.password.value;
        if(password!=repassword)
        {
            errrepassword.innerHTML = "<font color='red'>两次密码输入不一致</font>";
            return false;
        }
        else if(repassword.length==0){
            errrepassword.innerHTML = "<font color='red'>密码输入不合法</font>";
            return false;


        }

        else{
            errrepassword.innerHTML = "<font color='green'>密码符合要求</font>";
            return true;
        }
    }



    function checkpin()
    {
        var myform = document.getElementById("form1");
        var safecode = myform.safecode.value;
        var safecodelength = myform.safecode.value.length;
        if(safecode!= parseInt(safecode))
        {
            errpin.innerHTML = "<font color='red'>pin不符合要求</font>";
            return false;
        }else{
            errpin.innerHTML = "<font color='green'>pin符合要求</font>";
            return true;
        }
    }


    function checkform()
    {
        checkpin();
        checkpasswordagain();
        checkpassword();

        if(checkpassword()&&checkpasswordagain()&&checkpin())
        {
            return true;
        }else{
            return false;
        }


    }
</script>

<form action="login_register_do.php" method="post" id="form1" onsubmit="return checkform()">
    <table class="login_register_table">
        <tr><td><strong><font size="3" color="white">用户名</font></strong></td><td>&nbsp;</td><td><input type="text" name="user2" class="form-control"></td></tr>
        <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
        <tr><td><strong><font size="3" color="white">PIN</font></strong></td><td>&nbsp;</td><td><input type="text" name="safecode" class="form-control"></td><td><div id="errpin" align="center"></div></td></tr>
        <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
        <tr><td><strong><font size="3" color="white">新密码</font></strong></td><td>&nbsp;</td><td><input type="password" name="password" class="form-control"></td><td><div id="errpassword" align="center"></div></td></tr>
        <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
        <tr><td><strong><font size="3" color="white">重复密码</font></strong></td><td>&nbsp;</td><td><input type="password" name="repassword" class="form-control"></td><td><div id="errrepassword" align="center"></div></td></tr>
        <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
        <tr><td><input type="submit" class="btn btn-primary" value="修改" /></td><td>&nbsp;</td><td><a href="register.php">注册</a></td><td>&nbsp;</td><td>&nbsp;</td></tr>
    </table>
</form>
</body>
</html>