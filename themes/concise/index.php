<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0">
        <title>电子成绩单</title>
        <link href="https://lf6-cdn-tos.bytecdntp.com/cdn/expire-1-M/weui/2.5.4/style/weui.min.css" type="text/css" rel="stylesheet" />
        <link href="style.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
    <?php
        if (!isset($_POST['start'])) {
    ?>
	<div style="width: 90%;margin: 130px auto;text-align: center;">

		<h1 style="margin: 10px auto;">电子成绩单</h1>

		<div>
            <form method="POST">
                <div class="weui-cell">
                    <div class="weui-cell__hd"><label class="weui-label">身份证</label></div>
                    <div class="weui-cell__bd">
                        <input class="weui-input" type="text" maxlength="6" name="id" placeholder="请输入身份证后六位">
                    </div>
                </div>
                <div class="weui-cell">
                    <div class="weui-cell__hd"><label class="weui-label">学号</label></div>
                    <div class="weui-cell__bd">
                        <input class="weui-input" type="text" name="number" placeholder="请输入学号">
                    </div>
                </div>
                
                <div style="margin: 30px auto;">
                    <input class="weui-btn weui-btn_primary" name="start" type="submit" value="查询">
                    <button class="weui-btn weui-btn_default" type="reset">重置</button>
                </div>
            </form>
		</div>
	</div>
	
    <?php
        } else {
            include "../../config.php";

            $number_api = $_POST['number'];
            $id_api = $_POST['id'];
            // 过滤数组
            $illegal = array('or 1 = 1','||','alert','<','>','<?php','#','`',' ');
    
            function filter($str, $array_illegal) {
                foreach ($array_illegal as $value) {
                    if (strstr($str, $value) !== false) {
                        die ("<script>alert('含有敏感词或字符，请重新输入！');location='./'</script>");
                        return true;
                    }
                }
                return false;
            }
    
            filter($number_api, $illegal);
            filter($id_api, $illegal);

            if(empty($number_api)) {
                die ("<script>alert('请输入 考生号/准考证号 后再试！');location='./';</script>");
            } elseif(empty($id_api)) {
                die ("<script>alert('请输入 身份证号后六位 后再试！');location='./';</script>");
            } else {
                $link = @mysqli_connect($host,$username,$password,$dbname,$port);
    
                if (!$link) {
                    die ("<script>alert('数据库连接失败，请检查配置文件！');location='./';</script>");
                }
            }
            
            if($link) {
                $result = mysqli_query($link,"select * from $SQLtable where number = '$number_api'"); // number 为 数据库表名
                $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
                
                if($row['id'] == $id_api && $row['number'] == $number_api) {
                    $number = $row["number"];
                    $name = $row["name"];
                    $remarks = $row["remarks"];
                    $text1 = $row["custom_text1"];
                    $text2 = $row["custom_text2"];
                    $text3 = $row["custom_text3"];
                    $text4 = $row["custom_text4"];
                    $text5 = $row["custom_text5"];
                    $text6 = $row["custom_text6"];
                    $text7 = $row["custom_text7"];
                    $text8 = $row["custom_text8"];
                    $text9 = $row["custom_text9"];
                } else {
                    die ("<script>alert('查询的学生信息不存在！');location='./';</script>");
                }
                
                mysqli_close($link);
            }

            echo "	<div id=\"detail-box\">";
            echo "		<h1>$name 的成绩单</h1>";
            echo "		";
            echo "		<h3>各科分数：</h3>";
            echo "		<ul>";
            echo "					<li><span>$Custom_text3</span>$text1</li>";
            echo "					<li><span>$Custom_text4</span>$text2</li>";
            echo "					<li><span>$Custom_text5</span>$text3</li>";
            echo "					<li><span>$Custom_text6</span>$text4</li>";
            echo "					<li><span>$Custom_text7</span>$text5</li>";
            echo "					<li><span>$Custom_text8</span>$text6</li>";
            echo "					<li><span>$Custom_text9</span>$text7</li>";
            echo "					<li><span>$Custom_text10</span>$text8</li>";
            echo "					<li><span>$Custom_text11</span>$text9</li>";
            echo "		</ul>";
            echo "		<h3>班主任评语：</h3>";
            echo "		<p>$remarks</p>";
            echo "	</div>";
        }
    ?>
    </body>
</html>
