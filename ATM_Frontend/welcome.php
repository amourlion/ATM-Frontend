<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<meta http-equiv="refresh" content="1.0;url=main.php">
<link href="style/huanying.css" type="text/css" media="all" rel="stylesheet" />
<title>��ӭ����</title>
</head>

<?php  
include 'infdeal/conn.php';
require 'infdeal/comm.php'; 
 try {
 	session_start();//��session
$username=isset($_SESSION['username'])?$_SESSION['username']:1;//��session���username��ֵ����$username
 } catch (Exception $e) {
 }  
 
if ($username==1) {
page_jump("���ȵ�¼","index.php");	
}

?>  


<body>
<div id="all">
  <div id="banner">
    <div class="banner_top">
      <div class="banner_bannerimg"><img src="images/banner_banner.gif"  class="banners" /></div>
      <div class="banner_fontimg"><img src="images/bannerfont.gif"/></div>
    </div>
    <div class="banner_bottom"></div>
  </div>
  <div id="main">
    <div class="main_hr"></div>
    <div class="box1">��ӭ��¼�й�����</div>
  </div>
  <div class="footer"> Disigned by the first group </div>
</div>
</body>
</html>
