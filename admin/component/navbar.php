<?php
include "./../init.php";
$dir = get_absolute_path(dirname($_SERVER['SCRIPT_NAME']));
?>
<header class="mdui-appbar mdui-appbar-fixed">
    <div class="mdui-toolbar mdui-color-black">
        <span class="mdui-btn mdui-btn-icon mdui-ripple mdui-ripple-white" mdui-drawer="{target: '#menu', swipe: true}"><i class="mdui-icon material-icons">menu</i></span>
        <a href="<?php echo $dir; ?>" class="mdui-typo-headline mdui-hidden-xs">学生电子成绩管理系统</a>
        <div class="mdui-toolbar-spacer"></div>
        <a href="<?php echo $dir."logout.php" ?>" class="mdui-btn mdui-btn-icon" mdui-tooltip="{content: '退出'}"><i class="mdui-icon material-icons">exit_to_app</i></a>
    </div>
</header>
<div class="mdui-drawer" id="menu">
    <div class="mdui-list">
        <br/><br/>
        <a href="<?php echo $dir; ?>" class="mdui-list-item">
            <i class="mdui-menu-item-icon mdui-icon material-icons">help_outline</i>
            <div class="mdui-list-item-content">关于管理系统</div>
        </a>
        <a href="<?php echo $dir."query.php" ?>" class="mdui-list-item">
            <i class="mdui-menu-item-icon mdui-icon material-icons">face</i>
            <div class="mdui-list-item-content">查询学生信息</div>
        </a>
        <a href="<?php echo $dir."action/Add.php" ?>" class="mdui-list-item">
            <i class="mdui-menu-item-icon mdui-icon material-icons">library_add</i>
            <div class="mdui-list-item-content">添加学生信息</div>
        </a>
    </div>
</div>