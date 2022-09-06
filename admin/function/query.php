<?php
    require "./../../config.php";

    // 判断是否存在cookie且符合密码
    if (isset($_COOKIE['cookie']) && $_COOKIE['cookie'] === md5($admin_password)) {
        $link = @mysqli_connect($host,$username,$password,$dbname,$port);
        mysqli_set_charset($link, 'utf8');
        
        // 查询SQL数据库表是否存在
        $sql = "SELECT * FROM `$SQLtable`";
        $result = mysqli_query($link, $sql);

        if (!$result) {
            exit('查询语句失败，错误信息：'.mysqli_error($link));
        }

        $row = mysqli_fetch_all($result, MYSQLI_ASSOC);

        // 查询数据库表内容数量
        $sql = "SELECT COUNT(*) FROM `$SQLtable`";
        $quantity = mysqli_query($link, $sql);

        if (!$quantity) {
            exit('查询数据库表数量失败，错误信息：'.mysqli_error($link));
        }

        //  转换为字符串
        $num = mysqli_fetch_assoc($quantity);
        $num = implode($num);
    } else {
        header("Location: ../login.php");
        exit();
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>学生信息 - 学生电子成绩管理系统</title>
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
                <a href="#" class="mdui-ripple">
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
                <a href="./about.php" class="mdui-ripple">
                    <i class="mdui-menu-item-icon mdui-icon material-icons">help_outline</i>
                    关于管理系统
                </a>
            </li>
        </ul>
        <span class="mdui-typo-title">学生电子成绩管理系统（共 <?php echo $num; ?> 名学生）</span>
        <div class="mdui-toolbar-spacer"></div>
        <a href="../logout.php" class="mdui-btn mdui-btn-icon" mdui-tooltip="{content: '退出'}"><i class="mdui-icon material-icons">exit_to_app</i></a>
    </div>
    <div class="mdui-table-fluid">
        <table class="mdui-table mdui-table-hoverable">
            <thead>
                <tr>
                    <th>编号</th>
                    <th>学生姓名</th>
                    <th>考生证号</th>
                    <th>身份证后六位</th>
                    <th>老师批语或备注</th>
                    <th><?php echo $Custom_text3 ?></th>
                    <th><?php echo $Custom_text4 ?></th>
                    <th><?php echo $Custom_text5 ?></th>
                    <th><?php echo $Custom_text6 ?></th>
                    <th><?php echo $Custom_text7 ?></th>
                    <th><?php echo $Custom_text8 ?></th>
                    <th><?php echo $Custom_text9 ?></th>
                    <th><?php echo $Custom_text10 ?></th>
                    <th><?php echo $Custom_text11 ?></th>
                    <th>系统功能</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($row as $key => $value) {
                        foreach ($value as $k => $v) {
                            $arr[$k] = $v;
                        }
                        echo "      <tr>";
                        echo "        <td>{$arr['sort']}</td>";
                        echo "        <td>{$arr['name']}</td>";
                        echo "        <td>{$arr['number']}</td>";
                        echo "        <td>{$arr['id']}</td>";
                        echo "        <td>{$arr['remarks']}</td>";
                        echo "        <td>{$arr['custom_text1']}</td>";
                        echo "        <td>{$arr['custom_text2']}</td>";
                        echo "        <td>{$arr['custom_text3']}</td>";
                        echo "        <td>{$arr['custom_text4']}</td>";
                        echo "        <td>{$arr['custom_text5']}</td>";
                        echo "        <td>{$arr['custom_text6']}</td>";
                        echo "        <td>{$arr['custom_text7']}</td>";
                        echo "        <td>{$arr['custom_text8']}</td>";
                        echo "        <td>{$arr['custom_text9']}</td>";
                        echo "        <td>";
                        echo "            <button class=\"mdui-btn mdui-ripple mdui-color-black\" mdui-dialog=\"{target: '#Del_dialog{$arr['sort']}'}\">删除</button>";
                        echo "            <div class=\"mdui-typo\"><hr/></div>";
                        echo "            <button class=\"mdui-btn mdui-ripple mdui-color-black\">编辑</button>";
                        echo "        </td>";
                        echo "      </tr>";
                        echo "    ";
                        echo "      <div class=\"mdui-dialog\" id=\"Del_dialog{$arr['sort']}\">";
                        echo "          <div class=\"mdui-dialog-title\">删除学生 (ID:{$arr['sort']})</div>";
                        echo "          <div class=\"mdui-dialog-content\">您真的确定要删除学生姓名为 {$arr['name']} 的学生吗？</div>";
                        echo "          <div class=\"mdui-dialog-actions\">";
                        echo "              <button class=\"mdui-btn mdui-ripple mdui-text-color-black\" mdui-dialog-close>取消</button>";
                        echo "              <button class=\"mdui-btn mdui-ripple mdui-text-color-black\" onclick=\"Del({$arr['sort']})\">确定</button>";
                        echo "          </div>";
                        echo "      </div>";
                    }

                    // 关闭数据库连接
                    mysqli_close($link);
                ?>
            </tbody>
        </table>
    </div>

    <script type="text/javascript">
        function Del(sort) {
            window.location = "./action/Del.php?sort=" + sort;
        }
    </script>
    <script src="https://lf3-cdn-tos.bytecdntp.com/cdn/expire-1-M/mdui/1.0.2/js/mdui.min.js" type="application/javascript"></script>
</body>
</html>