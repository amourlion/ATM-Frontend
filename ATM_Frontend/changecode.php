<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<link href="style/changecode.css" type="text/css" media="all" rel="stylesheet" />
<title>修改密码</title>
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="js/changecode.js"></script>
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
<form action="infdeal/chancodeprocess.php">
<div class="container">
  <div class="banner">
    <div class="banner-top">
      <div class="banner-top1"><img src="images/banner_banner.gif" class="banners" /> <img src="images/bannerfont.gif" class="banner_font" /> </div>
    </div>
    <div class="banner-bottom"></div>
  </div>
  <div class="layout"> <span class="font2_son">请输入6位数字</span> <span class="font3_son">请输入6位数字</span> <span class="font4_son">请输入6位数字</span>
    <div class="box1"></div>
    <div class="box2">
      <div class="box2son1"> </div>
      <div class="box2son2">
        <div class="font1">修改密码：</div>
        <div class="large">
          <div class="boxson2-1">
            <div class="font2">原密码：</div>
            <div class="font2">新密码：</div>
            <div class="font2">确认密码：</div>
          </div>
          
          <div class="boxson2-2">
            <div class="text1">
              <input type="text" name="password" onkeyup="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')" maxlength="6" class="inputs"/>
            </div>
            <div class="text1">
              <input type="password" name="newpassword" onkeyup="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')" maxlength="6" class="inputss"/>
            </div>
            <div class="text1">
              <input type="password" name="surepassword" onkeyup="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')" maxlength="6" class="inputsss"/>
            </div>
          </div>
          
        </div>
        <div class="clear"></div>
        <div class="boxson2-3">
          <ul>
            <li class="pic1">
              <input type="image" src="images/queren.gif"  class="button"/>
            </li>
            <li class="pic2"><a href="main.php"><img src="images/fanhui.gif" class="fanhui"/></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="footer">Disigned by the first group</div>
</div>
</form>
</body>
</html>
