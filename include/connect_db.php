<?php

$DBServer = "localhost";
$DBName = "my_user";
$DBUsername = "root";
$DBPassword = "1q2w3e4r5t";

$conn = mysql_connect($DBServer, $DBUsername , $DBPassword ) or die("ไม่สามารถติดต่อฐานข้อมูลได้");

mysql_select_db($DBName,$conn);
mysql_query("SET NAMES UTF8");

?>