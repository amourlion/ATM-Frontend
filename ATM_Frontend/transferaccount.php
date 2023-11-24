<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<link href="style/zhuanzhang.css" type="text/css" media="all" rel="stylesheet" />
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="js/zhuanzhang.js"></script>
<title>转账</title>
</head>
<style></style>

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
<form action="infdeal/tranprocess.php">
  <div id="banner">
    <div class="banner_top">
      <div class="banner_bannerimg"><img src="images/banner_banner.gif" class="pic1"/></div>
      <div class="banner_fontimg"><img src="images/bannerfont.gif"/></div>
    </div>
    <div class="banner_bottom"></div>
  </div>
  <div id="main">
    <div class="main_hr"></div>
    <div class="box">
      <div class="floor1">转账汇款</div>
      <div class="floor2">
        <div class="font">账号：</div>
        <div class="input">
          <input type="text" name="otusername" id="inputs"  onkeyup="value=value.replace(/[^\d]/g,'') "onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))" maxlength="12"/>
        </div>
        <span class="span1"></span></div>
      <div class="floor3">
        <div class="font">用户名：</div>
        <div class="input">
          <input type="text" id="inputss" name="otname"onkeyup="value=value.replace(/[^\u4E00-\u9FA5]/g,'')" onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\u4E00-\u9FA5]/g,''))" maxlength="6"/>
        </div>
        <span class="span2"></span></div>
      <div class="floor4">
        <div class="font">金额：</div>
        <div class="input">
          <input type="text" id="inputsss" name="money" onkeyup="value=value.replace(/[^\d]/g,'') "onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))" maxlength="6" />
        </div>
        <span class="span3"></span></div>
      <div class="floor5">
        <div class="button">
          <input type="image" src="images/pic8.jpg" id="button"/>
        </div>
        <div class="fanhui"><a href="main.php"><img src="images/fanhui.gif"  id="fanhui"/></a></div>
      </div>
    </div>
  </div>
  <div class="footer">Disigned by the first group</div>
  </form>
</div>
</body>
</html>
