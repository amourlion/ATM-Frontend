<?php
include 'conn.php';
require 'comm.php';
$name = $_GET['name'];
$password = $_GET['password'];
$surepassword = $_GET['surepassword'];
$fist=substr($password, 0,1);
$age = $_GET['age'];
$sex = $_GET['sex'];
$parr5 = chr(0xa1) . "-" . chr(0xff);
$stra=substr($age, 0,1);

if ($name==null||$password==null||$surepassword==null||$age==null||$sex==null) {
	page_jump("请填完资料，否则不能注册！！","../zhuce.php");
}else {
	 if (strlen($name)<4){
		page_jump("用户名为2~6位！", "../zhuce.php");
	}else  if (strlen($password)!=6||strlen($surepassword)!=6) {
		page_jump("密码和确认密码必须为6位！","../zhuce.php");
	}else if ($age>120||$age==0) {
		page_jump("年龄必须为1~120！","../zhuce.php");
	}else {
		if ($fist==0){
			page_jump("密码开头不能为零！！", "../zhuce.php");
		}else if ($surepassword!=$password) {
			
			page_jump("密码和确认密码不相同", "../zhuce.php");
			
		}else if (!is_numeric($password)){
		page_jump("密码只能为数字，不能为其它字符！！","../zhuce.php" );
		
		}else if (!is_numeric($age)){
		
		page_jump("年龄只能为数字，不能为其它字符！！","../zhuce.php" );
		
		}else if ( !preg_match( "/^[$parr5]*$/", $name) ){
			page_jump("用户名只能为中文，不能输入其它字符","../zhuce.php" );
	 
		}else if ($stra==0){
			page_jump("年龄不能以0开头！",'../zhuce.php');
		}
		else {
			do {
			$username="";
			for ($i = 0; $i < 5; $i++) {
				$num =mt_rand(0, 9);
				$username.= $num;}
				$query="select *from admin where username=$username";
				$result=mysql_query($query);
				//以代码是解决生成相同的username的问题
			}while ($result===false);
				//以下是将注册时填的信息添加到数据库
				$query = "insert into admin(name,age,sex,username,password) values('$name','$age','$sex','$username','$password')";
				$result = mysql_query ( $query );
				if ($result){
					page_jump("注册成功！账号为".$username, "../index.php");
				}else {
					page_jump("注册失败！","../zhuce.php");
				}
				
				
		}
	}
			
}

?>