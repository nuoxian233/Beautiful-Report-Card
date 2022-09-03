<?php
    require "./../config.php";

    if ($_COOKIE['cookie'] === md5($admin_password)) {
        header("Location: ./");
        exit;
    }

    if ($_POST['submit'] == 'login') {
        // 先创建个临时session会话
        session_start();
        
        // 将登录包含的文本加入变量
        $pwd = $_POST['pwd'];

        if (empty($pwd)) {
            echo "<script>alert('密码输入为空，请重新输入！');</script>";
        } else {
            if ($pwd === $admin_password) {
                // 设置cookie的状态，并跳转
                setcookie('cookie', md5($admin_password), time()+3600*24);
                header("Location: ./");
            } else {
                echo "<script>alert('密码输入错误！');</script>";
            }
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>学生电子成绩后台系统 - 登录</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no"/>

    <link href="https://lf3-cdn-tos.bytecdntp.com/cdn/expire-1-M/mdui/1.0.2/css/mdui.min.css" type="text/css" rel="stylesheet" />
    <script src="https://lf3-cdn-tos.bytecdntp.com/cdn/expire-1-M/mdui/1.0.2/js/mdui.min.js" type="application/javascript"></script>
</head>
<body class="mdui-theme-primary-indigo mdui-theme-accent-pink">
    <header class="mdui-appbar mdui-color-theme-300">
        <div class="mdui-toolbar mdui-color-black"> 
            <div class="mdui-toolbar mdui-container mdui-typo-headline">
                登录
            </div>
            <div class="mdui-toolbar-spacer"></div>
            <a href="./../index.php" class="mdui-btn mdui-btn-icon" mdui-tooltip="{content: '主页'}"><i class="mdui-icon material-icons">&#xe88a;</i></a>
        </div>
    </header>

    <div class="mdui-container-fluid">
        <div class="mdui-col-md-6 mdui-col-offset-md-3">
            <center><h4 class="mdui-typo-display-2-opacity">系统管理</h4></center>
            <form method="POST">
                <div class="mdui-textfield mdui-textfield-floating-label">
                    <i class="mdui-icon material-icons">https</i>
                    <label class="mdui-textfield-label">密码</label>
                    <input name="pwd" class="mdui-textfield-input mdui-theme-primary" type="password"/>
                </div>
                <br>
                <button value="login" name="submit" type="submit" class="mdui-center mdui-btn mdui-btn-raised mdui-ripple mdui-color-black">
		  	    <i class="mdui-icon material-icons">fingerprint</i>
		  	    登录
		        </button>
            </form>
        </div>
    </div>
</body>
</html>
