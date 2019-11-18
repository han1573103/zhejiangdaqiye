<?php
//建立PHP与MySQL服务器之间的连接,并返回连接对象
$conn=mysql_connect("localhost","root","") or die('db connect error');
//选择数据库user_error
mysql_select_db("localhost",$conn);
//发送SQL,设置支持中文
mysql_query("set names utf8");

?>