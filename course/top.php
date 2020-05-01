<?php
    class top{
        function show(){
            ?>
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="navbar-header">
        <a class="navbar-brand" href="../main.html">微课</a>
    </div>
    <ul class="nav navbar-nav">
        <li>
            <a href="../course.php">全部课程</a>
        </li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                编程语言类 <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
                <li><a href="C.php">C</a></li>
                <li><a href="#">Java</a></li>
                <li><a href="#">Python</a></li>
                <li><a href="#">PHP</a></li>
                <li><a href="#">C#</a></li>
            </ul>
        </li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                文科 <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
                <li><a href="#">语文</a></li>
                <li><a href="#">英语</a></li>
                <li><a href="politics.php">政治</a></li>
                <li><a href="#">地理</a></li>
                <li><a href="#">历史</a></li>
            </ul>
        </li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                理科 <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
                <li><a href="math.php">数学</a></li>
                <li><a href="#">化学</a></li>
                <li><a href="#">物理</a></li>
                <li><a href="#">生物</a></li>
                <li><a href="#">计算机</a></li>
            </ul>
        </li>
    </ul>

    <?php
    session_start();
    if($_SESSION['login']!=1||!isset($_SESSION['login'])){
        ?>
        <form class="navbar-form navbar-right" role="search">
            <div class="btn-group btn-group-sm">
                <button type="button" class="btn btn-default"><b><a href="../login.php">登录</a></b></button>
                <button type="button" class="btn btn-default"><b><a href="../register.php">注册</a></b></button>

            </div>
        </form>
        <?php
    }else{
        ?>
        <form class="navbar-form navbar-right" role="search">
            <div class="btn-group btn-group-sm">
                <button type="button" class="btn btn-default"><b><a href="../personal_info.php"><strong><font color="red"><?php echo $_COOKIE['username']?></font></strong></a></b></button>
                <button type="button" class="btn btn-default"><b><a href="../charge.php">充值</a></b></button>
                <button type="button" class="btn btn-default"><b><a href="../buy.php">购买</a></b></button>
                <button type="button" class="btn btn-default"><b><a href="../log_out.php">登出</a></b></button>

            </div>
        </form>

        <?php
    }
    ?>
</nav>
<?php
        }
    }