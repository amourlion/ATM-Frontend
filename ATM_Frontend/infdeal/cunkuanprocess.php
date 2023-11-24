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
	page_jump("存入的金额不能以0开头或者为空！", '../cunkuan.php');

}else if(!is_numeric($moneysaving)){
	page_jump("只能输入数字，不能输入其它字符！","../cunkuan.php");
}else if ($moneysaving<0){
	page_jump("不能存入负数！！","../cunkuan.php");
}
else if($moneysaving%100!=0) {
	page_jump(" 客户存入的金额只能是100的整数倍 ","../cunkuan.php");
}
else if($moneysaving>10000){
		page_jump(" 存入的金额每次不能超过10000,请重新存入", "../cunkuan.php");	
}
else {
	$query1="update admin set money=money+$moneysaving where username=$username";
	mysql_query($query1);
	page_jump("成功存入".$moneysaving."元！","../main.php" );
}
?>