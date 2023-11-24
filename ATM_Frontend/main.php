<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>������</title>
<link href="style/index.css" type="text/css" media="all" rel="stylesheet" />
</head>
<body>
<?php
include 'infdeal/conn.php';
require 'infdeal/comm.php'; 
session_start();
$username=isset($_SESSION['username'])?$_SESSION['username']:1;//��session���username��ֵ����$username

if ($username==1) {
	page_jump("已成功连接","index.php");
}
?>
<div id="all">
      <div id="banner">
         <!-- ... banner content ... -->
      </div>
      <div id="main">
         <div class="main_hr"></div>
         <div class="functionalities">
            <div class="left-functionalities">
               <div class="floor1 floor1_draw_money">
                  <a href="drawmoney.php">
                     <img src="images/qukuang.gif" class="pic1" />
                     <div class="draw_money_font">取款</div>
                  </a>
               </div>
               <div class="floor1 floor1_deposit_money">
                  <a href="cunkuan.php">
                     <img src="images/cunkuan.gif" class="pic1 cunkuanimg" />
                     <div class="deposit_money_font">存款</div>
                  </a>
               </div>
               <div class="floor1 floor1_search">
                  <a href="search_money.php">
                     <img src="images/search.gif" class="pic1" />
                     <div class="search_font">查询</div>
                  </a>
               </div>
            </div>
            <div class="right-functionalities">
               <div class="floor2 floor2_changecode">
                  <a href="changecode.php">
                     <img src="images/changecode.gif" class="pic1" />
                     <div class="changecode_font">修改密码</div>
                  </a>
               </div>
               <div class="floor2 floor2_user_imformation">
                  <a href="usermessage.php">
                     <img src="images/usermassage.gif" class="pic1" />
                     <div class="user_imformation_font">用户信息</div>
                  </a>
               </div>
               <div class="floor2 floor2_zhuanzhan">
                  <a href="transferaccount.php">
                     <img src="images/zhuanzhang.gif" class="pic1" />
                     <div class="zhuanzhan_font">转账</div>
                  </a>
               </div>
            </div>
         </div>
      </div>
      <div class="footer">
         <div class="back_card"><a href="tuikaing.php"><img src="images/back.gif" class="btt" /></a></div>
      </div>
   </div>
</body>
</html>
