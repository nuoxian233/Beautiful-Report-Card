<!DOCTYPE html>
<html>
    <!--
							.__               
	____  __ __  _______  __|__|____    ____  
	/    \|  |  \/  _ \  \/  /  \__  \  /    \ 
	|   |  \  |  (  <_> >    <|  |/ __ \|   |  \
	|___|  /____/ \____/__/\_ \__(____  /___|  /
		\/                  \/       \/     \/ 
		
    -->
    <head>
        <meta charset="UTF-8">
        <title>电子成绩单</title>
        <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0">
        <meta name="description" content="电子成绩查询系统，无需奔波，移动端即可查看自己的成绩，使用更加方便！">
		<meta name="keywords" content="学生成绩查询,电子成绩单,成绩,学生,成绩系统">
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
            require "./../../config.php";

            require "./../../inc/Query_info.php";

            echo "<div id=\"detail-box\">";
            echo "<h1>";
            echo "$name";
            echo "的成绩单</h1>";
            echo "";
            echo "<h3>各科分数：</h3>";
            echo "<ul>";
            echo "<li><span>$Custom_text3</span>$text1</li>";
            echo "<li><span>$Custom_text4</span>$text2</li>";
            echo "<li><span>$Custom_text5</span>$text3</li>";
            echo "<li><span>$Custom_text6</span>$text4</li>";
            echo "<li><span>$Custom_text7</span>$text5</li>";
            echo "<li><span>$Custom_text8</span>$text6</li>";
            echo "<li><span>$Custom_text9</span>$text7</li>";
            echo "<li><span>$Custom_text10</span>$text8</li>";
            echo "<li><span>$Custom_text11</span>$text9</li>";
            echo "</ul>";
            echo "<h3>班主任评语：</h3>";
            echo "<p>$remarks</p>";
            echo "</div>";
        }
    ?>
    </body>
</html>