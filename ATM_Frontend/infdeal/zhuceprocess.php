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
	page_jump("���������ϣ�������ע�ᣡ��","../zhuce.php");
}else {
	 if (strlen($name)<4){
		page_jump("�û���Ϊ2~6λ��", "../zhuce.php");
	}else  if (strlen($password)!=6||strlen($surepassword)!=6) {
		page_jump("�����ȷ���������Ϊ6λ��","../zhuce.php");
	}else if ($age>120||$age==0) {
		page_jump("�������Ϊ1~120��","../zhuce.php");
	}else {
		if ($fist==0){
			page_jump("���뿪ͷ����Ϊ�㣡��", "../zhuce.php");
		}else if ($surepassword!=$password) {
			
			page_jump("�����ȷ�����벻��ͬ", "../zhuce.php");
			
		}else if (!is_numeric($password)){
		page_jump("����ֻ��Ϊ���֣�����Ϊ�����ַ�����","../zhuce.php" );
		
		}else if (!is_numeric($age)){
		
		page_jump("����ֻ��Ϊ���֣�����Ϊ�����ַ�����","../zhuce.php" );
		
		}else if ( !preg_match( "/^[$parr5]*$/", $name) ){
			page_jump("�û���ֻ��Ϊ���ģ��������������ַ�","../zhuce.php" );
	 
		}else if ($stra==0){
			page_jump("���䲻����0��ͷ��",'../zhuce.php');
		}
		else {
			do {
			$username="";
			for ($i = 0; $i < 5; $i++) {
				$num =mt_rand(0, 9);
				$username.= $num;}
				$query="select *from admin where username=$username";
				$result=mysql_query($query);
				//�Դ����ǽ��������ͬ��username������
			}while ($result===false);
				//�����ǽ�ע��ʱ�����Ϣ��ӵ����ݿ�
				$query = "insert into admin(name,age,sex,username,password) values('$name','$age','$sex','$username','$password')";
				$result = mysql_query ( $query );
				if ($result){
					page_jump("ע��ɹ����˺�Ϊ".$username, "../index.php");
				}else {
					page_jump("ע��ʧ�ܣ�","../zhuce.php");
				}
				
				
		}
	}
			
}

?>