<?php
    include "./../../../config.php";

    // 判断是否存在cookie且符合密码
    if (isset($_COOKIE['cookie']) && $_COOKIE['cookie'] === md5($admin_password)) {
        
    } else {
        header("Location: ../../login.php");
        exit();
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>添加学生 - 学生电子成绩管理系统</title>
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
                <a href="../query.php" class="mdui-ripple">
                    <i class="mdui-menu-item-icon mdui-icon material-icons">face</i>
                    查询学生信息
                </a>
            </li>
            <li class="mdui-menu-item">
                <a href="#" class="mdui-ripple">
                    <i class="mdui-menu-item-icon mdui-icon material-icons">library_add</i>
                    添加学生信息
                </a>
            </li>
            <li class="mdui-menu-item">
                <a href="../about.php" class="mdui-ripple">
                    <i class="mdui-menu-item-icon mdui-icon material-icons">help_outline</i>
                    关于管理系统
                </a>
            </li>
        </ul>
        <span class="mdui-typo-title">学生电子成绩管理系统</span>
        <div class="mdui-toolbar-spacer"></div>
            <a href="../../logout.php" class="mdui-btn mdui-btn-icon" mdui-tooltip="{content: '退出'}"><i class="mdui-icon material-icons">exit_to_app</i></a>
        </div>
        <div class="mdui-typo">
            <h2 style="margin: 30px 30px auto;">添加学生信息</h2>
        </div>

        <div style="margin: 20px 50px auto;">
            <div class="mdui-textfield">
                <label class="mdui-textfield-label">学生姓名</label>
                <input class="mdui-textfield-input" maxlength="12"/>
                <div class="mdui-textfield-error">学生姓名不能为空</div>
            </div>

            <div class="mdui-textfield">
                <label class="mdui-textfield-label">考生证号/学号</label>
                <input class="mdui-textfield-input" maxlength="24"/>
                <div class="mdui-textfield-error">考生证号/学号不能为空</div>
            </div>

            <div class="mdui-textfield">
                <label class="mdui-textfield-label">身份证后六位</label>
                <input class="mdui-textfield-input" maxlength="6"/>
                <div class="mdui-textfield-error">身份证后六位不能为空</div>
            </div>

            <div class="mdui-textfield">
                <label class="mdui-textfield-label">老师批语或备注</label>
                <textarea class="mdui-textfield-input" placeholder="Description"></textarea>
            </div>

            <div class="mdui-textfield">
                <label class="mdui-textfield-label"><?php echo $Custom_text3; ?></label>
                <input class="mdui-textfield-input" />
                <div class="mdui-textfield-error"><?php echo $Custom_text3; ?>不能为空</div>
            </div>

            <div class="mdui-textfield">
                <label class="mdui-textfield-label"><?php echo $Custom_text4; ?></label>
                <input class="mdui-textfield-input" />
                <div class="mdui-textfield-error"><?php echo $Custom_text4; ?>不能为空</div>
            </div>

            <div class="mdui-textfield">
                <label class="mdui-textfield-label"><?php echo $Custom_text5; ?></label>
                <input class="mdui-textfield-input" />
                <div class="mdui-textfield-error"><?php echo $Custom_text5; ?>不能为空</div>
            </div>

            <div class="mdui-textfield">
                <label class="mdui-textfield-label"><?php echo $Custom_text6; ?></label>
                <input class="mdui-textfield-input" />
                <div class="mdui-textfield-error"><?php echo $Custom_text6; ?>不能为空</div>
            </div>

            <div class="mdui-textfield">
                <label class="mdui-textfield-label"><?php echo $Custom_text7; ?></label>
                <input class="mdui-textfield-input" />
                <div class="mdui-textfield-error"><?php echo $Custom_text7; ?>不能为空</div>
            </div>

            <div class="mdui-textfield">
                <label class="mdui-textfield-label"><?php echo $Custom_text8; ?></label>
                <input class="mdui-textfield-input" />
                <div class="mdui-textfield-error"><?php echo $Custom_text8; ?>不能为空</div>
            </div>

            <div class="mdui-textfield">
                <label class="mdui-textfield-label"><?php echo $Custom_text9; ?></label>
                <input class="mdui-textfield-input" />
                <div class="mdui-textfield-error"><?php echo $Custom_text9; ?>不能为空</div>
            </div>

            <div class="mdui-textfield">
                <label class="mdui-textfield-label"><?php echo $Custom_text10; ?></label>
                <input class="mdui-textfield-input" />
                <div class="mdui-textfield-error"><?php echo $Custom_text10; ?>不能为空</div>
            </div>

            <div class="mdui-textfield">
                <label class="mdui-textfield-label"><?php echo $Custom_text11; ?></label>
                <input class="mdui-textfield-input" />
                <div class="mdui-textfield-error"><?php echo $Custom_text11; ?>不能为空</div>
            </div>
        </div>
    </div>
    <script src="https://lf3-cdn-tos.bytecdntp.com/cdn/expire-1-M/mdui/1.0.2/js/mdui.min.js" type="application/javascript"></script>
</body>
</html>