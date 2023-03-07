<?php
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
    
        // 函数过滤检验是否存在禁止内容
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
?>