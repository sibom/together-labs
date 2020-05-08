<?php

	$host='localhost';	//主机IP
	$user='admin';	//数据库用户名
	$password='TSeCzCwwExHEr3Bf';	//数据库密码
	$db="admin";  //数据库名
	
	
	
	
	
	
	//需要自建数据库，未编写一键搭建代码
	//创建数据库后，需要将sql导出文件导入到数据库中admin.sql
	
	
	
	
	
	
	
	
	
	$con = mysql_connect($host,$user,$password);
if (!$con){
    die('Could not connect: ' . mysql_error());
}

mysql_select_db($db, $con);


?>