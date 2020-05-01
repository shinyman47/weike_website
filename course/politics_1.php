<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>政治</title>
    <link rel="stylesheet" href="../CSS/color.css">
    <link rel="stylesheet" href="../bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../CSS/forwenke.css">
    <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
    <script src="../bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
</head>
<body>

<?php
include_once "top.php";
$top = new top();
$top->show();
?>

<div class="k" id="rt">
    <nav>
        <ul>
            <li><a href="politics.php">第一章</a></li>
            <li><a href="politics_1.php">第二章</a></li>
            <li><a href="">第三章</a></li>
            <li><a href="">第四章</a></li>
            <li><a href="">第五章</a></li>


        </ul>
    </nav>
</div>
<div class="k" id="main">
    <div class="wenzhang">
        <h3>一、马克思主义中国化的第一个重大理论成果</h3>
        <p>毛泽东是马克思主义中国化的伟大开拓者，是毛泽东思想的主要创立者。在中国共产党历史上，毛泽东第一个明确提出了“马克思主义中国化”的科学命题和重大任务，深刻论证了马克思主义中国化的必要性和极端重要性，系统阐述了马克思主义中国化的科学内涵和实现马克思主义中国化的正确途径，开辟了马克思主义在中国发展的宽广道路，为党领导的革命和建设事业的发展奠定了坚实的思想理论基础。毛泽东思想是马克思主义中国化第一次历史性飞跃的理论成果，以独创性的理论丰富和发展了马克思列宁主义。实事求是、群众路线、独立自主是毛泽东把辩证唯物主义和历史唯物主义运用到中国革命和建设实践中所形成的具有中国共产党人鲜明特色的立场、观点、方法，是我们党进行革命、建设和改革的出发点、根本点和立足点。</p>
        <h3>二、中国革命和建设的科学指南</h3>
        <p>毛泽东思想是被实践证明了的关于中国革命和建设的正确的理论原则和经验总结。在毛泽东思想指引下，我们党领导全国人民，找到了一条新民主主义革命的正确道路，完成了反对帝国主义、封建主义、官僚资本主义的任务，结束了中国半殖民地半封建社会的历史，建立了中华人民共和国；找到了一条从新民主主义向社会主义过渡的道路，确立了社会主义基本制度，实现了中国历史上最深刻最伟大的社会变革。毛泽东对适合中国国情的社会主义道路进行了艰苦探索，他领导我们建立起独立的比较完整的工业体系和国民经济体系，为社会主义现代化建设奠定了重要的物质技术基础，为在中国这样落后的东方大国进行社会主义建设积累了重要经验。</p>
    </div>

    <form action="../question_answer/check_answer.php" method="post">
        <?php
        session_start();
        $_SESSION['lesson'] = 'politics';
        include '../question_answer/print_question.php';
        $lesson = 'politics';
        $tb = 'tb_politics_question';
        $mark = 'politics_mark';
        $print = new give_question();
        $print->print_q_a($lesson,$tb,$mark);
        ?>
    </form>

</div>
</body>

</html>