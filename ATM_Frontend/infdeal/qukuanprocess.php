<?php
include 'conn.php';
require 'comm.php';

$money=$_GET['money'];

session_start();//开启session
$username=$_SESSION['username'];
$sql="select*from admin where username='$username'";
$query=mysql_query($sql);
$row=mysql_fetch_array($query);
$str=substr($money, 0,1);
$curr_time = time();
$passed_time = $curr_time-$row["qumon_time"];

if ($passed_time>=24*3600  ) {
	$query3="update admin set daymoney=0  where username='$username'";
	mysql_query($query3);//过了一天，一天取的钱置零
}

if ($str==0||$money==null||!is_numeric($money)) {
	page_jump("没有输入金额或以零开头或输入其它字符 ！！不能完成此操作！", "../drawmoney.php");

}
else {
	 if($money%100!=0) {
		page_jump(" 客户输入的金额只能是100或100的整数倍 ","../drawmoney.php");
			
	}
	else if($money>5000) {
		page_jump(" 输入的金额每次不能超过5000,请重新输入", "../drawmoney.php");//
	}
	
	else if($row['money']<$money) {
			page_jump(" 你的余额为".$row['money']."元，不足".$money."元，请重新输入钱额","../drawmoney.php");
		
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
			page_jump('每天在取款机上只能取20000元，你刚刚输入的金额超过范围了，该用户还能取到'.$qu=20000-$row["daymoney"].'元，如有需要，请携带有关证件前往中国银行柜台进行人工操作', "../drawmoney.php");
			}
		else {
			date_default_timezone_set ( 'PRC' );
			$qumon_time=time();
			$query="update admin set qumon_time=$qumon_time where username=$username";
			mysql_query($query);//记录数据库取款时间，以便判断取款时间是否过了一天
		$leftmoney=$row["money"]-$money;
		$query3="update admin set money = $leftmoney where username=$username ";
		mysql_query($query3);//更新数据库的余额
		page_jump("取款".$money."元成功", "../main.php");
		}
		
	}

}
 
?>
	