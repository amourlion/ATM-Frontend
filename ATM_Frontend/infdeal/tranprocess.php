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
	page_jump("��������Ϣ��������ת�ˣ�", "../transferaccount.php");
}else {
	$query = "select * from admin where username='$otusername'";
	$result = mysql_query($query);
	$row = mysql_fetch_array($result);
	 if ($result&&$row['password']!==null) {
		if ($otusername==$username) {
			page_jump("���˺�Ϊ���û��˺ţ����������˺ţ�",'../transferaccount.php');}
		else if ($str==0){
			page_jump("����Ϊ0������0��ͷ��",'../transferaccount.php');}
	    else if (strval($row['name'])!==$otname) {
			page_jump("�˺ź��û�����ƥ�䣡���������룡", "../transferaccount.php");}
		else if ($money % 100 != 0) {
			page_jump("ֻ��ת100��100�ı���", "../transferaccount.php");}
		else if ($money > 10000) {
			page_jump("ÿ�����ֻ��ת10000!", "../transferaccount.php");}
		else if ($money > $roww["money"]) {
			page_jump("�˻�����".$money."Ԫ�����������룡", "../transferaccount.php");}
		else {
				$query2 = "update admin set money = money + $money where username = '$otusername'";
				mysql_query($query2);
				$query3 = "update admin set money = money - $money where username = '$username' ";
				mysql_query($query3);
				page_jump("ת�˳ɹ���", "../main.php");
			}
		}
	else {
		page_jump("���˺Ų����ڣ����������룡", '../transferaccount.php');
		}
		
}
mysql_free_result ( $result );
mysql_close ( $link ); 
?>