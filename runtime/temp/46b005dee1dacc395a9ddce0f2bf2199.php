<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:73:"D:\phpStudy\WWW\ylinmfg\public/../application/admin\view\index\login.html";i:1515477834;}*/ ?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>后台管理系统--意灵工坊</title>
    <link rel="stylesheet" type="text/css" href="__ADMIN__/css/style.css">
    <script type="text/javascript" src="__ADMIN__/js/jquery-1.9.1.min.js"></script>
</head>

<div id="login_bg">

</div>
<p id="login_defeat">
    账号或密码错误
</p>
<div id="login_content" class="contruct">
    <div id="login_content_logo" class="container">
        <img src="__ADMIN__/images/logo_large.png" width="677" height="298">
    </div>
    <div id="login_content_log">
        登&nbsp;&nbsp;&nbsp;&nbsp;录
    </div>
    <div id="login_content_log_02">
        <form name="form">

            <div id="login_input1"><input id="login_input11" type="text" name="user" value="用户名" autocomplete="off">
            </div>
            <div id="login_input2"><input id="login_input12" type="text" name="password" value="密码" autocomplete="off">
            </div>
            <p id="login_tip"></p>
            <div id="login_input4">登&nbsp;&nbsp;&nbsp;&nbsp;录<input type="button" value=""></div>
            <!--<div id="login_input3"><input type="checkbox" value="3" name="remeber" checked="checked">记住密码</div>-->
        </form>
        <p id="login_close">×</p>
    </div>
    <div id="login_content_log_03">
        <div id="login_success_img"><img src="__ADMIN__/images/DSC_0243.jpg" width="80" height="80"></div>
        <p id="login_success1">欢迎回来,<span id="welcome_user">admin</span></p>
        <p id="login_success3"><a href="#">如果浏览器长时间没有跳转，点击这里返回首页</a></p>
    </div>
</div>
<script type="text/javascript" src="__ADMIN__/js/login.js"></script>
<body>
</body>
</html>