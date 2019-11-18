<?php
session_start();
//header("content-type:text/html;charset=utf-8");
//建立Apache与MySQl服务器之间的链接,并返回连接对象
//$conn =@mysql_connect("localhost","root","") or die("do connect error！");
//选择数据库
//mysql_select_db('localhost',$conn);
// 发送SQL语句命令
//mysql_query("set names utf8");
$userName=$_POST['userName'];
$pwd=$_POST['pwd'];
$love=$_SESSION['userName'];
include("conn.php");
$flag=mysql_query("update reg set userName='$userName',pwd='$pwd' where userName='$love' " );
if($flag){
	echo '{"status":"1001","msg":"success"}';
} else {
	echo '{"status":"3001","msg":"错误楼"}';
}
//断开链接
mysql_close($conn);
?>
