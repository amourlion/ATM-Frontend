<?php
date_default_timezone_set ( 'PRC' );
include 'conn.php';
require 'comm.php';

session_start();//����session

$username = $_GET['username'];
$password = $_GET['password'];
$_SESSION['$username']=$username;//���˺Ŵ���session��
/* ������������ж�*/
// ���ڵ�½���������ε��û�,�������ʱ�䣬��ȥ��ʼ��½��ʱ��,С���ض���ֵʱ���Ͳ������ڵ�½��
//  echo $_SESSION['$username'];


$query1= "select * from admin where username ='$username'";
//$query2= "select * from admin where username ='$username' and password='$password'";
$result1 = mysql_query($query1);//Ϊ��ƥ���½�˺�����
//$result2 = mysql_query($query2);
@$row = mysql_fetch_array($result1);
$wro_time = strtotime($row['frez_time']);
$curr_time = time();
$passed_time = $curr_time-$wro_time;
if ($result1) {
	echo "�û�����";
}
else {
	echo "�û�������";

}
?>
