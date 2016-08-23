<?php 
$conn = @ mysql_connect("localhost", "root", "") or die("数据库链接错误"); 
mysql_select_db("message_borad", $conn); 
mysql_query("set names 'utf-8'"); 
