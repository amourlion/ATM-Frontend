<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>取款</title>
<link href="style/qukuan.css" type="text/css" media="all" rel="stylesheet" />

<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="js/qukuan.js"></script>
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
      <div class="banner_bannerimg"><img src="images/banner_banner.gif" class="banners" /></div>
      <div class="banner_fontimg"><img src="images/bannerfont.gif"/></div>
    </div>
    <div class="banner_bottom"></div>
  </div>
  <div id="main">
    <div class="main_hr"></div>
    <div class="qukuan_left">
      <div class="qukuan_left_100">
        <input type="image" src="images/100副本.gif" id="qukuan_left_100" class="b bbb"value="100"  onFocus="this.blur()"/>
      </div>
      <div class="qukuan_left_500">
        <input type="image" src="images/500副本.gif" id="qukuan_left_500" class="b bbb"value="500"  onFocus="this.blur()"/>
      </div>
      <div class="qukuan_left_2000">
        <input type="image" src="images/2000副本.gif" id="qukuan_left_2000" class="b bbb" value="2000"  onFocus="this.blur()" />
      </div>
      <div class="qukuan_left_3000">
        <input type="image" src="images/3000副本.gif" id="qukuan_left_3000"  class="b bbb"value="3000"  onFocus="this.blur()" />
      </div>
    </div>
    <div class="qukuan_middle">
     <div class="qukuan_middle_banner"> <span class="tishi">每天取款不能多于20000，单笔取款不能多于5000</span>
       <div class="qukuan_middle_banner_img"><img src="images/qukuan_banner副本.gif" /></div>
      </div>
      <form action="infdeal/qukuanprocess.php">
      <div class="qukuan_middle_submit">
        <div class="qukuan_middle_submit_font">金额：</div>
        <div class="qukuan_middle_submit_input">
          
            <input type="text"  maxlength="4" name="money"onkeyup="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')"  id="qukuan_middle_submit_input"/>
          
        </div>
      </div>
      <div class="qukuan_middle_button">
        <div class="qukuan_middle_button_sure">
          
            <input type="image" src="images/queren.gif" id="qukuan_middle_button_sure"  onFocus="this.blur()"/>
          
        </div></form>
        <div class="qukuan_middle_button_back">
          
          <a href="main.php"  onFocus="this.blur()"><img src="images/fanhui.gif" id="qukuan_middle_button_back" /></a>
          
        </div>
      </div>
    </div>
    <div class="qukuan_right">
      <div class="qukuan_right_200">
        
          <input type="image" src="images/200副本.gif" id="qukuan_right_200"    class="bb bbb" value="200"  onFocus="this.blur()"/>
        
      </div>
      <div class="qukuan_right_1000">
        <input type="image" src="images/1000副本.gif" id="qukuan_right_1000" class="bb bbb" value="1000"  onFocus="this.blur()"/>
      </div>
      <div class="qukuan_right_2500">
        <input type="image" src="images/2500副本.gif" id="qukuan_right_2500" class="bb bbb" value="2500"  onFocus="this.blur()"/>
      </div>
      <div class="qukuan_right_5000">
        <input type="image" src="images/5000副本.gif" id="qukuan_right_5000" class="bb bbb" value="5000"  onFocus="this.blur()"/>
      </div>
    </div>
  </div>
  <div class="footer">Disigned by the first group</div>
</div>
</body>
</html>
