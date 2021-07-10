<?php
    header("Content-type:text/html;charset=utf-8");
    $host = 'localhost'; //数据库地址
    $username = 'root'; //数据库登录账号
    $password = 'root'; //数据库登录密码
    $dbname = 'root'; //你操作数据库的名字
    $port = '3306'; //数据库地址端口，一般是3306
    
    $stuid = 0;
    $id = 0;
    $name = "name";
    $chinese = 0;
    $mathematics = 0;
    $english = 0;
    $politics = 0;
    $history = 0;
    $geography = 0;
    $physics = 0;
    $chemistry = 0;
    $biology = 0;
    
	$return = "none";
	
	$stuid_api = $_GET["stuid"];
	$id_api = $_GET['id'];
	
	if(empty($stuid_api)) {
	    echo "<script>alert('请输入 考生号/准考证号 后再试！');location.href='".$_SERVER["HTTP_REFERER"]."';</script>";
    } elseif(empty($id_api)) {
        echo "<script>alert('请输入 身份证号后四位 后再试！');location.href='".$_SERVER["HTTP_REFERER"]."';</script>";
    } else {
        $link = @mysqli_connect($host,$username,$password,$dbname,$port);
    }
    
    if($link) {
		$result = mysqli_query($link,"select * from result where stuid = '$stuid_api'");
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		
		if($row["id"] == $id_api) {
			$return = "ok";
			
			$stuid = $row["stuid"];
			$name = $row["name"];
			$chinese = $row["chinese"];
			$mathematics = $row["mathematics"];
			$english = $row["english"];
			$politics = $row["politics"];
			$history = $row["history"];
			$geography = $row["geography"];
			$physics = $row["physics"];
			$chemistry = $row["chemistry"];
			$biology = $row["biology"];
		} elseif($return = "none") {
		    echo "<script>alert('查询的学生信息不存在！');history.back();</script>";
		}
        
        mysqli_close($link);
    }
?>
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
    <title><?php echo $name; ?>的电子成绩单</title>
    <meta name="robots" content="noindex,nofollow">
    <meta name="author" content="nuoxian">
    <meta name="viewport" content="user-scalable=0"/>

    <link rel="icon" type="image/x-icon" href="./favicon.ico">
    <link href="./css/nuoxian.css" rel="stylesheet" type="text/css"/>
</head>

<body>
    <div class="main">
		<div class="loginFrame">
            <!-- Tips:你对自己的成绩感到满意吗？ -->
			<p>成绩查询结果(<svg t="1625342449766" class="iconget" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="1977" width="30" height="30"><path d="M512 76.8c-236.8 0-435.2 192-435.2 435.2s192 435.2 435.2 435.2 435.2-192 435.2-435.2S748.8 76.8 512 76.8z m249.6 320L480 704c-12.8 12.8-38.4 12.8-51.2 0L288 556.8c-12.8-12.8-12.8-38.4 0-51.2 12.8-12.8 38.4-12.8 51.2 0l115.2 115.2L704 339.2c12.8-12.8 38.4-12.8 51.2 0 25.6 12.8 25.6 38.4 6.4 57.6z" fill="#68D279" p-id="1978"></path><path d="M710.4 339.2l-256 281.6-115.2-115.2c-12.8-12.8-38.4-12.8-51.2 0-12.8 12.8-12.8 38.4 0 51.2l147.2 140.8c12.8 12.8 38.4 12.8 51.2 0L768 390.4c12.8-12.8 12.8-38.4 0-51.2-19.2-12.8-44.8-12.8-57.6 0z" fill="#FFFFFF" p-id="1979"></path></svg>)</p>
			<table border="0" align="center">
			    <tbody>
			        <tr>
			            <td>学号</td>
			            <td>姓名</td>
			            <td>语文</td>
			            <td>数学</td>
			            <td>英语</td>
			            <td>政治</td>
			            <td>历史</td>
			            <td>地理</td>
			            <td>物理</td>
			            <td>化学</td>
			            <td>生物</td>
			        </tr>
			        <tr>
			            <td><?php echo $stuid;?></td>
					    <td><?php echo $name;?></td>
					    <td><?php echo $chinese;?></td>
					    <td><?php echo $mathematics;?></td>
					    <td><?php echo $english;?></td>
					    <td><?php echo $politics;?></td>
					    <td><?php echo $history;?></td>
					    <td><?php echo $geography;?></td>
					    <td><?php echo $physics;?></td>
					    <td><?php echo $chemistry;?></td>
					    <td><?php echo $biology;?></td>
			        </tr>
			    </tbody>
			</table>
            <div class="copyright">
                <p>&copy;<script>document.write(new Date().getFullYear())</script> <a href="https://nuoxiana.cn" target="_blank">nuoxian</a>. All Rights Reserved.</p>
            </div>
		</div>
    </div>
</body>
</html>