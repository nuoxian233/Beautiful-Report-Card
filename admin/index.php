<?php
    require "./../config.php";

    // 判断是否存在cookie且符合密码
    if ($_COOKIE['cookie'] === md5($admin_password)) {
        header("Location: ./function/about.php");
    } else {
        header("Location: ./login.php");
        exit();
    }
?>