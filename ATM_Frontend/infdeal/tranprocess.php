<?php
require 'comm.php';
include 'conn.php';
$otusername = $_GET['otusername'];
$otname = $_GET['otname'];
$money = $_GET['money'];
session_start();
$username = $_SESSION['username'];
$query1="select * from admin where username=$username";
$result1=mysql_query($query1);
$roww=mysql_fetch_array($result1);
$str=substr($money,0,1);
if ($otusername==null or $otname==null or $money==null) {
	page_jump("请填完信息！否则不能转账！", "../transferaccount.php");
}else {
	$query = "select * from admin where username='$otusername'";
	$result = mysql_query($query);
	$row = mysql_fetch_array($result);
	 if ($result&&$row['password']!==null) {
		if ($otusername==$username) {
			page_jump("此账号为该用户账号，请输入别的账号！",'../transferaccount.php');}
		else if ($str==0){
			page_jump("金额不能为0或者以0开头！",'../transferaccount.php');}
	    else if (strval($row['name'])!==$otname) {
			page_jump("账号和用户名不匹配！请重新输入！", "../transferaccount.php");}
		else if ($money % 100 != 0) {
			page_jump("只能转100或100的倍数", "../transferaccount.php");}
		else if ($money > 10000) {
			page_jump("每次最多只能转10000!", "../transferaccount.php");}
		else if ($money > $roww["money"]) {
			page_jump("账户余额不足".$money."元，请重新输入！", "../transferaccount.php");}
		else {
				$query2 = "update admin set money = money + $money where username = '$otusername'";
				mysql_query($query2);
				$query3 = "update admin set money = money - $money where username = '$username' ";
				mysql_query($query3);
				page_jump("转账成功！", "../main.php");
			}
		}
	else {
		page_jump("此账号不存在，请重新输入！", '../transferaccount.php');
		}
		
}
mysql_free_result ( $result );
mysql_close ( $link ); 
?>