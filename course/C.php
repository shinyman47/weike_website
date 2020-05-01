<?php
if(!isset($_COOKIE['username'])){
    echo "<script type='text/javascript'>alert('请先登录查看是否拥有此课');</script>";
    header("Refresh:1;url=../login.php");
}else{
    include_once "../conn/conn.php";
    $user=$_COOKIE['username'];
    $sql = "select sp_lesson from tb_user where name='$user'";
    $result = mysqli_query($conn,$sql)or die(mysqli_error($conn));
    $check = mysqli_fetch_array($result);


    $check1 = 0;


    if($check[0]==$check1){
        echo "<script type='text/javascript'>alert('您未购买此课程，请先购买');</script>";
        header("Refresh:1;url=../buy.php");
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>C语言</title>
    <link rel="stylesheet" href="../CSS/color.css">
    <link rel="stylesheet" href="../bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../CSS/forlike.css">
    <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
    <script src="../bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
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
<br>
<br>
<div align="center">
<video src="" controls="controls" height="500" width="800"></video>
</div>

<br>
<br>
<br>
<br>
<br>
<br>




<div class="formxuanze" align="center">
<form action="../question_answer/check_answer.php" method="post"  >
        <?php
        session_start();
        $_SESSION['lesson'] = 'C';
        include '../question_answer/print_question.php';
        $lesson = 'C';
        $tb = 'tb_c_question';
        $mark = 'C_mark';
        $print = new give_question();
        $print->print_q_a($lesson,$tb,$mark);
        ?>

        </form>

</div>
</body>
</html>