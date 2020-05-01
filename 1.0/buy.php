<?php
session_start();
if(!isset($_COOKIE['username'])){
    echo "<script type='text/javascript'>alert('购买请先登录');</script>";
    header("Refresh:1;url=login.php");
}else{
    include_once "conn/conn.php";
    $user=$_COOKIE['username'];
    $sql = "select money from tb_user where name='$user'";
    $result = mysqli_query($conn,$sql);
    $check = mysqli_fetch_row($result);
    $money = $check[0];
    $sql1 = "select point from tb_user where name='$user'";
    $result1 = mysqli_query($conn,$sql1);
    $check1 = mysqli_fetch_row($result1);
    $point = $check1[0];

    $_SESSION['money'] = $money;
    $_SESSION['point'] = $point;

    $sql2 = "select sp_lesson from tb_user where name='$user'";
    $result2 = mysqli_query($conn,$sql2);
    $check2 = mysqli_fetch_row($result2);

    $check3 = 0;


    if($check2[0]!=$check3){
        echo "<script type='text/javascript'>alert('您已经有C语言这门课了');</script>";
        header("Refresh:0;url=course.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>购买</title>
    <link rel="stylesheet" href="CSS/color.css">
    <link rel="stylesheet" href="CSS/forbuy.css">
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
<div class="main" align="center">
    <div class="study clearfix">
       <img src="img/C.jpg"   width="300" height="300"  class="shadow" tabindex="0">
        <p class="advantage">
            c语言可有趣了，大家快来学啊！
        </p>
    </div>

    <br>
<br>

<div  align="center" >
    <form method="post" action="buy_do.php">
        <table>
            <tr>
                <td><font face="隶书" size="3" color="">金币售价：50</font></td>
                <td>&nbsp;</td>
                <td> <font face="隶书" size="3">你的余额：</font><?php if($money<50){ ?><strong><font color="red"><?php echo $money;?></font></strong><?php }else{
                        ?>
                        <strong><font color="blue"><?php echo $money;?></font></strong>
                        <?php
                    }
                    ?>
                </td>
                <td>
                    <input type="radio" name="choice" value="1">
                </td>
            </tr>

            <tr>
                <td><font face="隶书" size="3">积分售价：90</font></td>
                <td>&nbsp;</td>
                <td><font face="隶书" size="3">你的积分：</font><?php if($point<90){ ?><strong><font color="red"><?php echo $point;?></font></strong><?php }else{
                        ?>
                        <strong><font color="blue"><?php echo $point;?></font></strong>
                        <?php
                    }
                    ?>
                </td>
                <td>
                    <input type="radio" name="choice" value="2">
                </td>
            </tr>
            <tr>
                <td> <input type="submit" value="购买" class="bu"></td>
                <td>&nbsp;</td>
                <td><a href="charge.php" class="buy">充值</a></td>
            </tr>
    </form>
</div>
</div>

</body>
</html>