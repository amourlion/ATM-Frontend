<?php 
include 'conn.php';
require 'comm.php';
$password=$_GET['password'];
$newpassword=$_GET['newpassword'];
$surepassword =$_GET['surepassword'];
$str=substr($newpassword, 0,1);

session_start();
$username=$_SESSION['username'];
$query = "select * from admin where username = $username ";
$result=mysql_query($query);
@$row=mysql_fetch_array($result);
if ($password==null||$newpassword==null||$surepassword==null) {
	page_jump("������������Ϣ���������޸����룡", '../changecode.php');
}else {
if ($row['password']!==$password) { 
	page_jump("ԭ���������������������", "../changecode.php");//1���ͻ������ԭ����������½����һ��
}
else if ($str==0){
	page_jump("�����벻����0 ��ͷ��",'../changecode.php');
}
else if($newpassword==$password) {
	page_jump("ԭ����������벻����ͬ��",'../changecode.php');
}
else if($newpassword==$username) {
	page_jump("������û���������ͬ��",'../changecode.php');
}
else if(strlen($newpassword)!=6){
	page_jump("�������Ϊ��λ�����������룡",'../changecode.php');
}
else if ($newpassword !== $surepassword) {
		page_jump("�������벻һ�£�����������", "../changecode.php");
	}else {
		$query2 = "update admin set password =$newpassword where username=$username ";
		$result = mysql_query($query2);
		unset($_SESSION['username']);
			page_jump("�����޸ĳɹ��������µ�¼��", "../index.php");
		}
}		
	
mysql_free_result($result);
mysql_free_result($row);
mysql_close($link);


?>