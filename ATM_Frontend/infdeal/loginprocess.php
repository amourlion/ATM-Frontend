<?php
date_default_timezone_set ( 'PRC' );

include 'conn.php';
require 'comm.php';

session_start();//启动session

$username = $_GET['username'];
$password = $_GET['password'];
$_SESSION['username']=$username;//将账号存入session中
/* 错误次数超限判断*/
// 对于登陆出错超过三次的用户,如果现在时间，减去开始登陆的时间,小于特定的值时，就不允许在登陆；
//  echo $_SESSION['$username'];


$query1= "select * from admin where username ='$username'";
//$query2= "select * from admin where username ='$username' and password='$password'";
$result1 = mysql_query($query1);
//$result2 = mysql_query($query2);
@$row = mysql_fetch_array($result1);
$frez_time= $row['frez_time'];
date_default_timezone_set ( 'PRC' );
$curr_time = time();
$passed_time = $curr_time-$frez_time;
   if ($frez_time!=0 && $passed_time>=24*3600  ) {
	$row["times"]=0;
	$lasttimes=$row["times"];  //过了一天被冻结用户登录错误次数置零，解冻
	$query3="update admin set times = '$lasttimes'  where username='$username'";
	mysql_query($query3);
	$query6="update admin set frez_time=0 where username=$username";
 	//冻结时间置零
 	mysql_query($query6);
  }    
  if ($username==""||$password==""){
	page_jump("请输入完信息！！否则不能登录", "../index.php");
 }else {
	if (strlen($username)!==6) {
		page_jump('用户账号必须为6位','../index.php');
	}
	else if(strlen($password)!==6){
		page_jump('用户密码必须为6位','../index.php');
	}
	else if (!$row) {	
			page_jump ( '对不起，用户不存在', '../index.php' );
			/*判断用户是否存在*/
	 }else {
		
		  if ($row["times"]>2) {
				page_jump ( '对不起，你的账户已经被冻结,请解冻后再登陆！', '../index.php' );
				//现在用户已经登陆错误大于3次，那在限定的时间内,
				//即使他的密码输入正确，也不能在登陆系统；
			}
			else if ($password==@$row["password"]) {
				page_jump ( '登录成功！', '../welcome.php' );
			}
			else if ($password!==@$row["password"]) {
					
				$times=$row['times']+1;
				//echo $times;
				//更新数据库中登陆错误次数
				$query5="update admin set times = $times where username='$username' ";
				$result5 = mysql_query($query5);
				$remain_times=3-$times;
				switch ($times) {
					case 1 :
						page_jump( '你的密码输入错误，你还有'.$remain_times.'次机会！','../index.php');break;
					case 2 :
						page_jump( '你的密码输入错误，你还有'.$remain_times.'次机会！','../index.php');break;
					case 3:{
						date_default_timezone_set ( 'PRC' );
						$start_time=strtotime("now");
						$jie_fretime=date("Y_m_d h:i:sa",strtotime("+1day"));
						//$wro_time= date("Y_m_d h:i:sa",$start_time);
						$query4="update admin set frez_time = $start_time where username='$username'";//用户冻结时间
						$result4=mysql_query($query4);
						page_jump ( '密码输入错误三次，你的账户已经被冻结，将于'.$jie_fretime.'解冻', '../index.php' );
							
						break;
					}
					default :
							
						break;
				}
					   
			}
							
	 }	
 }
mysql_free_result($result1);
mysql_close($link);
 
?>