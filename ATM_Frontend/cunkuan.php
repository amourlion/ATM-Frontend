<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<link href="style/cunkuan.css" type="text/css" media="all" rel="stylesheet" />
<title>存款</title>
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="js/cunkuan.js"></script>
</head>

<?php  
include 'infdeal/conn.php';
require 'infdeal/comm.php'; 
 try {
 	session_start();//打开session
$username=isset($_SESSION['username'])?$_SESSION['username']:1;//将session里的username的值赋给$username
 } catch (Exception $e) {
 } 
 if ($username==1) {
 	page_jump("请先登录","index.php");
 } 
 ?>

<body>
<div id="all">
  <div id="banner">
    <div class="banner_top">
      <div class="banner_bannerimg"><img src="images/banner_banner.gif" class="banner_img" /></div>
      <div class="banner_fontimg"><img src="images/bannerfont.gif"/></div>
    </div>
    <div class="banner_bottom"></div>
  </div>
  <div id="main">
  <form action="infdeal/cunkuanprocess.php">
    <div class="main_hr"></div>
    <div class="cunkuan_box"> <span class="tishi">请放入少于100张百元钞票</span>
      <div class="cunkuan_box_floor1">存款</div>
      <div class="cunkuan_box_floor2">
        <div class="cunkuan_box_floor2_font">金额</div>
        <div class="cunkuan_box_floor2_input">
          <input type="text" name="moneysaving" onkeyup="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')" id="cunkuan_box_floor2_input" maxlength="5"/>
        </div>
      </div>
      <div class="cunkuan_box_floor3">
        <div class="cunkuan_box_floor3_queren">
          <input type="image" src="images/queren.gif" class="bt" />
        </div>
        <div class="cunkuan_box_floor3_back"><a href="main.php"><img src="images/fanhui.gif" class="fanhui" /></a></div>
      </div>
    </div>
    </form>
  </div>
  <div class="footer">Disigned by the first group</div>
</div>
</body>
</html>
