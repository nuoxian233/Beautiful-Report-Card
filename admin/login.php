<?php
include "../config.php";

if ($_COOKIE['cookie'] === md5($admin_password)) {
    header("Location: ./");
    exit;
}

if (isset($_POST['login'])) {
    // 先创建个cookie

    if (isset($_POST['password']) == $admin_password) {
        // 设置cookie的状态
        setcookie('cookie', md5($admin_password), time()+3600*24);
        header('Location: ./');
    } else {
        die ("<script>alert('密码输入错误！');location='./';</script>");
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="user-scalable=no">
    <title>学生电子成绩后台系统</title>
</head>
<body>
    <form method="POST">
        <input name="password" type="password" placeholder="请输入您的密码" required>
        <input name="login" type="submit" value="登录">
    </form>
</body>
</html>
