
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>充值</title>
    <link rel="stylesheet" href="CSS/color.css">
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
    <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
</head>
<body>
<?php
include_once "top.php";
$top = new top();
$top->show();
?>

<br>
<br>
<br>
<br>
<br>
<br>

<div align="center"><img src="img/er.png"   width="300" height="300" ></div>
<div  align="center">
    <form method="post" action="charge_do.php">
        <p>充值账号</p><input type="text" class="user" name="user" placeholder="请选择您要充值的账号">
        <p>充值金额</p><input type="text" class="money" name="money" placeholder="请选择您要充值的金额"><br>
        <br>
        <input class="btn btn-danger" type="submit" value="充值">
    </form>
</div>


</body>
</html>