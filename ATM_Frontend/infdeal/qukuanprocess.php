<?php
include 'conn.php';
require 'comm.php';

$money=$_GET['money'];

session_start();//����session
$username=$_SESSION['username'];
$sql="select*from admin where username='$username'";
$query=mysql_query($sql);
$row=mysql_fetch_array($query);
$str=substr($money, 0,1);
$curr_time = time();
$passed_time = $curr_time-$row["qumon_time"];

if ($passed_time>=24*3600  ) {
	$query3="update admin set daymoney=0  where username='$username'";
	mysql_query($query3);//����һ�죬һ��ȡ��Ǯ����
}

if ($str==0||$money==null||!is_numeric($money)) {
	page_jump("û������������㿪ͷ�����������ַ� ����������ɴ˲�����", "../drawmoney.php");

}
else {
	 if($money%100!=0) {
		page_jump(" �ͻ�����Ľ��ֻ����100��100�������� ","../drawmoney.php");
			
	}
	else if($money>5000) {
		page_jump(" ����Ľ��ÿ�β��ܳ���5000,����������", "../drawmoney.php");//
	}
	
	else if($row['money']<$money) {
			page_jump(" ������Ϊ".$row['money']."Ԫ������".$money."Ԫ������������Ǯ��","../drawmoney.php");
		
		}
	else {
		$query1="update admin set daymoney=daymoney+'$money' where username='$username'";
		mysql_query($query1);
		$query4="select daymoney from admin where username=$username";
		$result=mysql_query($query4);
		$roww=mysql_fetch_array($result);
		if ($roww["daymoney"]>20000) {
			$query2 = "update admin set daymoney = daymoney - $money where username = '$username'";
			$result2 = mysql_query($query2);
			page_jump('ÿ����ȡ�����ֻ��ȡ20000Ԫ����ո�����Ľ�����Χ�ˣ����û�����ȡ��'.$qu=20000-$row["daymoney"].'Ԫ��������Ҫ����Я���й�֤��ǰ���й����й�̨�����˹�����', "../drawmoney.php");
			}
		else {
			date_default_timezone_set ( 'PRC' );
			$qumon_time=time();
			$query="update admin set qumon_time=$qumon_time where username=$username";
			mysql_query($query);//��¼���ݿ�ȡ��ʱ�䣬�Ա��ж�ȡ��ʱ���Ƿ����һ��
		$leftmoney=$row["money"]-$money;
		$query3="update admin set money = $leftmoney where username=$username ";
		mysql_query($query3);//�������ݿ�����
		page_jump("ȡ��".$money."Ԫ�ɹ�", "../main.php");
		}
		
	}

}
 
?>
	