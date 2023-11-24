<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>注册页面</title>
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="js/zhuce.js"></script>
<link href="style/zhuce.css" type="text/css" media="all" rel="stylesheet" />
</head>

<body>
<div class="container">
  <div class="banner">
    <div class="banner-top">
      <div class="banner-top1"><img src="images/banner_banner.gif" class="banners" /> <img src="images/bannerfont.gif"  class="fonts"/> </div>
    </div>
    <div class="banner-bottom"></div>
  </div>
  <form action="infdeal/zhuceprocess.php">
  <div class="layout">
    <div class="box1"></div>
    <div class="box2"> <span class="font1_son tishi"></span> <span class="font2_son tishi"></span> <span class="font3_son tishi"></span> <span class="font4_son tishi"></span>
      <div class="font1">注册</div>
      <div class="large">
      <div class="boxson2-1">
        <div class="font2">用户名：</div>
        <div class="font2">密码：</div>
        <div class="font2">确认密码：</div>
        <div class="font2">年龄：</div>
        <div class="font2">男</div>
        <div class="font2">女</div>
      </div>
      <div class="boxson2-2">
    
        <div class="text1">
          <input type="text" name="name" class="inputs"    maxlength="5"/>
        </div>
        <div class="text1">
          <input type="password" name="password" class="inputss"  maxlength="6"/>
        </div>
        <div class="text1">
          <input type="password" name="surepassword"  class="inputsss"  maxlength="6"/>
        </div>
        <div class="text1">
          <input type="text" name="age" class="inputssss"  maxlength="3"/>
        </div>
        <div class="text1">
          <input type="radio" name="sex" value="男"checked="checked" style="float:left; width:50px; height: 40px; " />
        </div>
        <div class="text1">
          <input type="radio" name="sex" value="女"style="float:left; width:50px; height: 40px;"  />
        </div>
        </div>
        </div>
        <div class="clear"></div>
        <div class="boxson2-3">
          <ul>
            <li class="pic1">
              <input type="image" src="images/queren.gif"  class="button"/>
            </li>
            <li class="pic2"><a href="index.php"><img src="images/fanhui.gif" class="fanhui"/></a></li>
          </ul>
        </div>
    </div>
  </div>
  </form>
  <div class="footer">Disigned by the first group</div>
</div>
</body>
</html>
