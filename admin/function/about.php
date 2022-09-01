<?php
    include "../../config.php";

    // 判断是否存在cookie且符合密码
    if (isset($_COOKIE['cookie']) && $_COOKIE['cookie'] === md5($admin_password)) {
        
    } else {
        header("Location: ../login.php");
        exit();
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>关于我们 - 学生电子成绩管理系统</title>
    <meta name="author" content="nuoxian">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no"/>
    <meta name="renderer" content="webkit"/>
    <meta name="force-rendering" content="webkit"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    
    <link rel="icon" type="image/x-icon" href="../favicon.ico">
    <link href="https://lf3-cdn-tos.bytecdntp.com/cdn/expire-1-M/mdui/1.0.2/css/mdui.min.css" type="text/css" rel="stylesheet" />
</head>
<body class="mdui-theme-primary-indigo mdui-theme-accent-pink">
    <div class="mdui-toolbar mdui-color-black">
        <a href="javascript:;" class="mdui-btn mdui-btn-icon" mdui-menu="{target: '#menu'}"><i class="mdui-icon material-icons">menu</i></a>
        <ul class="mdui-menu mdui-menu-cascade" id="menu">
            <li class="mdui-menu-item">
                <a href="./query.php" class="mdui-ripple">
                    <i class="mdui-menu-item-icon mdui-icon material-icons">face</i>
                    查询学生信息
                </a>
            </li>
            <li class="mdui-menu-item">
                <a href="./action/Add.php" class="mdui-ripple">
                    <i class="mdui-menu-item-icon mdui-icon material-icons">library_add</i>
                    添加学生信息
                </a>
            </li>
            <li class="mdui-menu-item">
                <a href="#" class="mdui-ripple">
                    <i class="mdui-menu-item-icon mdui-icon material-icons">help_outline</i>
                    关于管理系统
                </a>
            </li>
        </ul>
        <span class="mdui-typo-title">学生电子成绩管理系统</span>
        <div class="mdui-toolbar-spacer"></div>
        <a href="./logout.php" class="mdui-btn mdui-btn-icon" mdui-tooltip="{content: '退出'}"><i class="mdui-icon material-icons">exit_to_app</i></a>
    </div>
    <div class="mdui-typo" style="text-align: center;">
        <h2>关于我们</h2>
        <p><b>作者：</b><abbr title="作者网站：https://nuoxiana.cn">nuoxian</abbr>（学习，还是学习。做一个知识分子！）</p>
        <p>这是我学习PHP的第一个练习项目，可能有部分不完善或有风险。使用PHP+MYSQL开发的学生电子成绩查询系统，输入学号和身份证号即可查询信息，欢迎体验。</p>
        <div class="mdui-typo">
            <hr/>
        </div>
        <h4 style="margin: 30px auto">系统信息</h4>
    </div>
        <ul class="mdui-list mdui-center mdui-shadow-3 mdui-center">
            <li class="mdui-list-item mdui-ripple">
                <i class="mdui-list-item-icon mdui-icon material-icons">info</i>&nbsp;
                学生电子成绩管理系统程序版本
                <div class="mdui-list-item-content">Ver 0.0.7 UTF-8</div>
            </li>
            <li class="mdui-list-item mdui-ripple">
                <i class="mdui-list-item-icon mdui-icon material-icons">cloud</i>&nbsp;
                学生电子成绩管理系统最新版本
                <div class="mdui-list-item-content">Ver 9.9.9 UTF-8</div>
            </li>
            <li class="mdui-list-item mdui-ripple">
                <i class="mdui-list-item-icon mdui-icon material-icons">public</i>&nbsp;
                当前服务器PHP版本
                <div class="mdui-list-item-content"><?php echo substr(PHP_VERSION,0,3); ?></div>
            </li>
            <li class="mdui-list-item mdui-ripple">
                <i class="mdui-list-item-icon mdui-icon material-icons">pie_chart</i>&nbsp;
                服务器 MYSQL 版本
                <div class="mdui-list-item-content"><?php $link = @mysqli_connect($host,$username,$password,$dbname,$port); printf(substr($link -> server_info,0,3)); ?></div>
            </li>
        </ul>
    <script src="https://lf3-cdn-tos.bytecdntp.com/cdn/expire-1-M/mdui/1.0.2/js/mdui.min.js" type="application/javascript"></script>
</body>
</html>