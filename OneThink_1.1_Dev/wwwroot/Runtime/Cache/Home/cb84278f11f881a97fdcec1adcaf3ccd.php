<?php if (!defined('THINK_PATH')) exit();?><!--extend name="Base/common" />

<header class="jumbotron subhead" id="overview">
  <div class="container">
    <h2>修改密码</h2>
    <p><span><span class="pull-left"></span> </span></p>
  </div>
</header>




<section-->
<!doctype html>
<html lang="en">
<head lang="en">
  <meta charset="UTF-8">
  <title>恒望科技官方网站登录界面</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport"
        content="width=device-width, initial-scale=1,maximum-scale=1.0, user-scalable=0,user-scalable=no">
  <meta name="format-detection" content="telephone=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp"/>

  <link rel="alternate icon" type="/OneThink_1.1_Dev/wwwroot/Public/Home/images/hengwangkeji/hengwang-1.png" href="/OneThink_1.1_Dev/wwwroot/Public/Home/images/hengwangkeji/hengwang-1.png">
  <link rel="stylesheet" href="/OneThink_1.1_Dev/wwwroot/Public/Home/css/amazeui.css"/>
  <link rel="stylesheet" href="/OneThink_1.1_Dev/wwwroot/Public/Home/css/base1.css" />
  <link rel="stylesheet" href="/OneThink_1.1_Dev/wwwroot/Public/Home/css/login.css" />
  <link rel="stylesheet" href="/OneThink_1.1_Dev/wwwroot/Public/Home/css/style.css"/>
</head>
<header class="am-topbar header">
  <div class="am-container-1">
    <div class="left hw-logo">
      <img class=" logo" src="/OneThink_1.1_Dev/wwwroot/Public/Home/images/hengwangkeji/HENGWANG.png"></img>
      <img class="word" src="/OneThink_1.1_Dev/wwwroot/Public/Home/images/hengwangkeji/hw-word.png"></img>
    </div>
    <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only"
            data-am-collapse="{target: '#doc-topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span
            class="am-icon-bars"></span></button>

    <div class="am-collapse am-topbar-collapse right" id="doc-topbar-collapse">
      <div class=" am-topbar-left am-form-inline am-topbar-right" role="search">
        <ul class="am-nav am-nav-pills am-topbar-nav hw-menu">
          <li><a href="<?php echo U('User/login');?>">恒望科技官方网站登录界面</a></li>
          <li><a href="<?php echo U('User/register');?>">恒望科技官方网站注册界面</a></li>
          <li><a href="<?php echo U('Index/index');?>">恒望科技官方网站主界面</a></li>
        </ul>
      </div>
    </div>
  </div>
</header>
<br/>
<br/>
<br/>
<div class="am-container-1">
  <div class="solutions part-all">
    <div class="part-title">
      <a href="<?php echo U('User/login');?>">
        <!--i class="am-icon-lightbulb-o part-title-i"></i-->
        <!--img class=" logo" src="/OneThink_1.1_Dev/wwwroot/Public/Home/images/hengwangkeji/HENGWANG.png"></img>
        <img class="word" src="/OneThink_1.1_Dev/wwwroot/Public/Home/images/hengwangkeji/hw-word.png"></img-->
        <span class="part-title-span"><h4>重置密码</h4></span>
      </a>
    </div>
	<div class="span12">
        <form class="login-form" action="/OneThink_1.1_Dev/wwwroot/index.php?s=/Home/User/profile.html" method="post" style="text-align: center;">
          <div class="control-group">
            <label class="control-label" for="inputPassword">原密码</label>
            <!--div class="controls"-->
              <input type="password" id="inputPassword"  class="span3" placeholder="请输入密码"  errormsg="密码为6-20位" nullmsg="请填写密码" datatype="*6-20" name="old">
            <!--/div-->
          </div>
          <br/>
          <div class="control-group">
            <label class="control-label" for="inputPassword">新密码</label>
            <!--div class="controls"-->
              <input type="password" id="inputPassword"  class="span3" placeholder="请输入密码"  errormsg="密码为6-20位" nullmsg="请填写密码" datatype="*6-20" name="password">
            <!--/div-->
          </div>
          <br/>
          <div class="control-group">
            <label class="control-label" for="inputPassword">请确认</label>
            <!--div class="controls"-->
              <input type="password" id="inputPassword" class="span3" placeholder="请再次输入密码" recheck="password" errormsg="您两次输入的密码不一致" nullmsg="请填确认密码" datatype="*" name="repassword">
            <!--/div-->
            <div class="controls Validform_checktip text-warning"></div>
          </div>
          <div class="control-group">
            <div class="controls">
              <button type="submit" class="btn">提 交</button>
            </div>
          </div>
        </form>
	</div>
  </div>
</div>
<!--/section>
</block-->
</block-->
<script src="/OneThink_1.1_Dev/wwwroot/Public/Home/js/jquery.min.js"></script>
<!--<![endif]-->
<script src="/OneThink_1.1_Dev/wwwroot/Public/Home/js/amazeui.min.js"></script>
<script src="/OneThink_1.1_Dev/wwwroot/Public/Home/js/scroll.js"></script>
<block name="side">

	<script type="text/javascript">

    	$(document)
	    	.ajaxStart(function(){
	    		$("button:submit").addClass("log-in").attr("disabled", true);
	    	})
	    	.ajaxStop(function(){
	    		$("button:submit").removeClass("log-in").attr("disabled", false);
	    	});

    	$("form").submit(function(){
    		var self = $(this);
    		$.post(self.attr("action"), self.serialize(), success, "json");
    		return false;

    		function success(data){
    			if(data.status){
    				window.location.href = data.url;
    			} else {
    				self.find(".Validform_checktip").text(data.info);
    			}
    		}
    	});
	</script>