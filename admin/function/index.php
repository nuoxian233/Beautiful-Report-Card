<?php
    require "./../../config.php";

    // 判断是否存在cookie且符合密码
    if (isset($_COOKIE['cookie']) && $_COOKIE['cookie'] === md5($admin_password)) {
        header("Location: ./about.php");
    } else {
        header("Location: ../../login.php");
        exit();
    }
?>