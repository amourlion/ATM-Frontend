<?php
date_default_timezone_set ( 'PRC' );

include 'conn.php';
require 'comm.php';

session_start();//����session

$username = $_GET['username'];
$password = $_GET['password'];
$_SESSION['username']=$username;//���˺Ŵ���session��
/* ������������ж�*/
// ���ڵ�½���������ε��û�,�������ʱ�䣬��ȥ��ʼ��½��ʱ��,С���ض���ֵʱ���Ͳ������ڵ�½��
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
	$lasttimes=$row["times"];  //����һ�챻�����û���¼����������㣬�ⶳ
	$query3="update admin set times = '$lasttimes'  where username='$username'";
	mysql_query($query3);
	$query6="update admin set frez_time=0 where username=$username";
 	//����ʱ������
 	mysql_query($query6);
  }    
  if ($username==""||$password==""){
	page_jump("����������Ϣ���������ܵ�¼", "../index.php");
 }else {
	if (strlen($username)!==6) {
		page_jump('�û��˺ű���Ϊ6λ','../index.php');
	}
	else if(strlen($password)!==6){
		page_jump('�û��������Ϊ6λ','../index.php');
	}
	else if (!$row) {	
			page_jump ( '�Բ����û�������', '../index.php' );
			/*�ж��û��Ƿ����*/
	 }else {
		
		  if ($row["times"]>2) {
				page_jump ( '�Բ�������˻��Ѿ�������,��ⶳ���ٵ�½��', '../index.php' );
				//�����û��Ѿ���½�������3�Σ������޶���ʱ����,
				//��ʹ��������������ȷ��Ҳ�����ڵ�½ϵͳ��
			}
			else if ($password==@$row["password"]) {
				page_jump ( '��¼�ɹ���', '../welcome.php' );
			}
			else if ($password!==@$row["password"]) {
					
				$times=$row['times']+1;
				//echo $times;
				//�������ݿ��е�½�������
				$query5="update admin set times = $times where username='$username' ";
				$result5 = mysql_query($query5);
				$remain_times=3-$times;
				switch ($times) {
					case 1 :
						page_jump( '���������������㻹��'.$remain_times.'�λ��ᣡ','../index.php');break;
					case 2 :
						page_jump( '���������������㻹��'.$remain_times.'�λ��ᣡ','../index.php');break;
					case 3:{
						date_default_timezone_set ( 'PRC' );
						$start_time=strtotime("now");
						$jie_fretime=date("Y_m_d h:i:sa",strtotime("+1day"));
						//$wro_time= date("Y_m_d h:i:sa",$start_time);
						$query4="update admin set frez_time = $start_time where username='$username'";//�û�����ʱ��
						$result4=mysql_query($query4);
						page_jump ( '��������������Σ�����˻��Ѿ������ᣬ����'.$jie_fretime.'�ⶳ', '../index.php' );
							
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