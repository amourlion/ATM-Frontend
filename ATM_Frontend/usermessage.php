<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<link href="style/usermessage.css" type="text/css" media="all" rel="stylesheet" />
<title>�û���Ϣ</title>
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



$query="select * from admin where username=$username";
$result=mysql_query($query);
$row=mysql_fetch_array($result);
 

?>  

<body>
<div id="all">
  <div id="banner">
    <div class="banner_top">
      <div class="banner_bannerimg"><img src="images/banner_banner.gif" id="banner_bannerimg" /></div>
      <div class="banner_fontimg"><img src="images/bannerfont.gif" id="banner_fontimg"/></div>
    </div>
    <div class="banner_bottom"></div>
  </div>
  <div id="main">
    <div class="main_hr"></div>
    <div class="messagebox">
      <div class="floor1">
        <div class="floorfont">�˺ţ�<?php echo $username;?></div>
        <div class="floorinput"> </div>
      </div>
      <div class="floor2">
        <div class="floorfont">�û�����<?php echo $row["name"];?></div>
        <div class="floorinput"></div>
      </div>
      <div class="floor3">
        <div class="floorfont">�Ա�<?php echo $row["sex"];?></div>
        <div class="floorinput"></div>
      </div>
      <div class="floor4">
        <div class="floorfont">���䣺<?php echo $row["age"];?></div>
        <div class="floorinput"></div>
      </div>
      <div class="floor5">
        <div class="back"><a href="main.php"><img src="images/fanhui.gif"  id="back"/></a></div>
      </div>
    </div>
  </div>
  <div class="footer">Disigned by the first group</div>
</div>
</body>
</html>
