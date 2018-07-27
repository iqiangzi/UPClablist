<?php
/*****************************
*数据库连接
*****************************/
$conn = @mysql_connect("localhost","root","0898c5a0d1b7");
if (!$conn){
    die("连接数据库失败：" . mysql_error());
}
$db_selected=mysql_select_db("mysql, $conn);
//字符转换，读库
if (!$db_selected)
  {
  die ("Can\'t use test_db : " . mysql_error());
  }

mysql_query("set character set 'gbk'");
//写库
mysql_query("set names 'gbk'");
?>