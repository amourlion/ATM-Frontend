<?php
include 'conn.php';
require 'comm.php';
$moneysaving=$_GET['moneysaving'];

session_start();
$username=$_SESSION['username'];
$query="select * from admin where username=$username";
@$row=mysql_query($query);
$str=substr($moneysaving,0,1);


if($str==0||$moneysaving==null){
	page_jump("����Ľ�����0��ͷ����Ϊ�գ�", '../cunkuan.php');

}else if(!is_numeric($moneysaving)){
	page_jump("ֻ���������֣��������������ַ���","../cunkuan.php");
}else if ($moneysaving<0){
	page_jump("���ܴ��븺������","../cunkuan.php");
}
else if($moneysaving%100!=0) {
	page_jump(" �ͻ�����Ľ��ֻ����100�������� ","../cunkuan.php");
}
else if($moneysaving>10000){
		page_jump(" ����Ľ��ÿ�β��ܳ���10000,�����´���", "../cunkuan.php");	
}
else {
	$query1="update admin set money=money+$moneysaving where username=$username";
	mysql_query($query1);
	page_jump("�ɹ�����".$moneysaving."Ԫ��","../main.php" );
}
?>