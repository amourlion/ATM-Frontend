<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<link href="style/denglu.css" type="text/css" media="all" rel="stylesheet" />
<title>登陆页面</title>
</head>
<body>
<div id="all">
  <div id="banner">
    <div class="banner_top">
      <div class="banner_bannerimg"><img src="images/banner_banner.gif"  class="banners"/></div>
      <div class="banner_fontimg"><img src="images/bannerfont.gif" /></div>
    </div>
    <div class="banner_bottom"></div>
  </div>
  
  
  <form action="infdeal/loginprocess.php" >
  <div id="main">
    <div class="main_hr"></div>
    <div class="check_box">
      <div class="check_box_banner"><img src="images/banner_banner.gif" class="bannerss"/></div>
      <div class="check_box_font"><img src="images/bannerfont.gif" class="fonts"/></div>
      <div class="check_box_floor1">
        <div class="check_box_floor1_font">账号：</div>
        <div class="check_box_floor1_input">
          <input type="text" name="username" value="222222" onkeyup="value=value.replace(/[^\d]/g,'') "onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))"  maxlength="12"/>
        </div>
      </div>
      <div class="check_box_floor2">
        <div class="check_box_floor2_font">密码：</div>
        <div class="check_box_floor2_input">
          <input type="password" value="333333" name="password"onkeyup="value=value.replace(/[^\d]/g,'') "onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))"  maxlength="6" />
        </div>
      </div>
    </div>
  </div>
  <div class="footer">
 
    <div class="check_box_denglu">
   
      <input type="image" src="images/denglu.gif"  class="btt" />
    </div>
    <div class="check_box_zhuce"><a href="zhuce.php"><img src="images/zhuce.gif"   class="bt"/></a></div>
    Disigned by the first group </div> 
    </form>   
</div>

</body>
</html>
