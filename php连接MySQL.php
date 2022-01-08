<?php
$servername = "127.0.0.1:3306" ;
        $username = "root" ;
        $password = "123456" ;
        $database = "longyan1";
        $conn = mysqli_connect ( $servername , $username , $password )  or die("error connecting");
//检测连接
        if ( ! $conn ) {
            die ( “连接失败：” . mysqli_connect_error ( ) ) ;
        }
        echo "连接成功" ;
////数据库输出编码
//        mysqli_query("set names 'utf8'");
//打开数据库
        $res = mysqli_select_db($conn,$database);
//SQL语句
        $sql ="select *from xiaoniu7";
//查询
        $result = mysqli_query($conn,$sql);
        foreach ($result as $k=>$v){
            echo "<br>".$v['id'].'-->>'.$v['created_at'];
            echo $v['name'].'-->>'.$v['created_at'];
            echo $v['years'].'-->>'.$v['created_at'];
        }
$sql="INSERT INTO xiaoniu7 (id, name, years)
VALUES
(4,'longyan2',30)";

if (!mysqli_query($conn,$sql))
  {
  die('Error: ' . mysqli_error($conn));
  }
?>














