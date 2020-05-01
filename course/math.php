
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>数学</title>
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
        $_SESSION['lesson'] = 'math';
        include '../question_answer/print_question.php';
        $lesson = 'math';
        $tb = 'tb_math_question';
        $mark = 'math_mark';
        $print = new give_question();
        $print->print_q_a($lesson,$tb,$mark);
        ?>

    </form>

</div>
</body>
</html>