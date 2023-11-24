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
	page_jump("必须填完整信息，否则不能修改密码！", '../changecode.php');
}else {
if ($row['password']!==$password) { 
	page_jump("原密码输入错误，请重新输入", "../changecode.php");//1、客户输入的原密码必须与登陆密码一致
}
else if ($str==0){
	page_jump("新密码不能以0 开头！",'../changecode.php');
}
else if($newpassword==$password) {
	page_jump("原密码和新密码不能相同！",'../changecode.php');
}
else if($newpassword==$username) {
	page_jump("密码和用户名不能相同！",'../changecode.php');
}
else if(strlen($newpassword)!=6){
	page_jump("密码必须为六位！请重新输入！",'../changecode.php');
}
else if ($newpassword !== $surepassword) {
		page_jump("密码输入不一致，请重新输入", "../changecode.php");
	}else {
		$query2 = "update admin set password =$newpassword where username=$username ";
		$result = mysql_query($query2);
		unset($_SESSION['username']);
			page_jump("密码修改成功！请重新登录！", "../index.php");
		}
}		
	
mysql_free_result($result);
mysql_free_result($row);
mysql_close($link);


?>