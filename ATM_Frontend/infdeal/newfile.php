<?php
date_default_timezone_set ( 'PRC' );
include 'conn.php';
require 'comm.php';

session_start();//启动session

$username = $_GET['username'];
$password = $_GET['password'];
$_SESSION['$username']=$username;//将账号存入session中
/* 错误次数超限判断*/
// 对于登陆出错超过三次的用户,如果现在时间，减去开始登陆的时间,小于特定的值时，就不允许在登陆；
//  echo $_SESSION['$username'];


$query1= "select * from admin where username ='$username'";
//$query2= "select * from admin where username ='$username' and password='$password'";
$result1 = mysql_query($query1);//为了匹配登陆账号密码
//$result2 = mysql_query($query2);
@$row = mysql_fetch_array($result1);
$wro_time = strtotime($row['frez_time']);
$curr_time = time();
$passed_time = $curr_time-$wro_time;
if ($result1) {
	echo "用户存在";
}
else {
	echo "用户不存在";

}
?>
