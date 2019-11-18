<?php
session_start();
header("content-type:text/html;charset=utf-8");
$userName=$_POST['userName'];
$pwd=$_POST['pwd'];
include("conn.php");
$rs=mysql_query("select * from reg where userName='$userName' and pwd='$pwd'");
  $num=mysql_num_rows($rs);
	if($num>0){
	$_SESSION['userName']=$userName;	
  echo '{"status":"1001","msg":"success"}';	
}else{
	echo '{"status":"2001","msg":"用户名或密码错误！"}';
}
?>