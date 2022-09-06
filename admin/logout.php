<?php
require "../config.php";

// 判断是否拥有token且符合密码
if (isset($_COOKIE['cookie']) && $_COOKIE['cookie'] == md5($admin_password)) {
    setcookie("cookie", "" ,time()-1);
    header("Location: ./login.php");
} else {
    header("Location: ./");
}
?>