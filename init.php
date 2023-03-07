<?php
error_reporting(E_ALL & ~E_NOTICE); // 报告 E_NOTICE 之外的错误
date_default_timezone_set('PRC'); // 设置 PRC 时区
define('TIME', time()); // 定义 TIME 为 time() 函数
// 获取完全路径，如果获取不存在，则抛出错误
!defined('ROOT') && define('ROOT', str_replace("\\","/", dirname(__FILE__)) . '/');

// 获取当前大概路径，从init.php开始回去后方路径
function get_absolute_path($path) {
    $path = str_replace(array('/', '\\', '//'), '/', $path);
    $parts = array_filter(explode('/', $path), 'strlen');
    $absolutes = array();
    foreach ($parts as $part) {
        if ('.' == $part) continue;
        if ('..' == $part) {
            array_pop($absolutes);
        } else {
            $absolutes[] = $part;
        }
    }
    return str_replace('//','/','/'.implode('/', $absolutes).'/');
}
?>