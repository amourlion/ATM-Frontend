<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<link href="style/search_money.css" type="text/css" media="all" rel="stylesheet" />
<title>余额查询</title>
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
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
$query="select * from admin where username=$username";
$result=mysql_query($query);
@$row=mysql_fetch_array($result);

?>  


<body>
<div id="all">
  <div id="banner">
    <div class="banner_top">
      <div class="banner_bannerimg"><img src="images/banner_banner.gif"  class="banners"/></div>
      <div class="banner_fontimg"><img src="images/bannerfont.gif"/></div>
    </div>
    <div class="banner_bottom"></div>
  </div>
  <div id="main">
    <div class="main_hr"></div>
    <div class="search_showbox">
      <div class="search_showbox_floor1">
        <div class="search_showbox_floor1_font">余额查询</div>
      </div>
      <div class="search_showbox_floor2">
        <div class="search_showbox_floor2_font">你的余额为<?php echo $row['money'];?>元</div>
        <div class="search_showbox_floor2_value"></div>
      </div>
      <div class="search_showbox_floor3">
        <div class="search_showbox_floor3_back"><a href="main.php"><img src="images/fanhui.gif" /></a></div>
      </div>
    </div>
  </div>
  <div class="footer">Disign by the first group</div>
</div>
</body>
</html>
