<?php /* Smarty version Smarty-3.1-DEV, created on 2017-09-18 14:33:17
         compiled from "D:\blog\Application\View\\Home\Index\register.html" */ ?>
<?php /*%%SmartyHeaderCode:1527159bf60a269cfd6-53049518%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '55a0f8fed7f37b853c7daf64fa1302b221084a40' => 
    array (
      0 => 'D:\\blog\\Application\\View\\\\Home\\Index\\register.html',
      1 => 1505716395,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1527159bf60a269cfd6-53049518',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_59bf60a26c1959_72793213',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59bf60a26c1959_72793213')) {function content_59bf60a26c1959_72793213($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<title>meizu</title>
<meta http-equiv="content-Type" content="text/html" charset="utf-8">
<link rel="stylesheet" type="text/css" href="./Public/home/css/loginindex.css">

<script type="text/javascript" src="./Public/home/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="./Public/home/js/registerindex.js"></script>

</head>
<body>



		<form id="#mainForm1" class="mainForm mainForm1">
			<div class="number">
				<a href="##" class="linkABlue">手机号码注册</a>
				<span></span>
				<a href="##" class="linkAGray number1">账户名注册</a>
			</div>
			<div class="normalInput">
				<input type="text" class="phone" maxlength="11" placeholder="手机号码">
			</div>
			<span class="error error1"></span>
			<!--<div class="normalInput">-->
				<!--<input type="text" class="kapkey" maxlength="6" placeholder="验证码">-->
				<!--<span class="formLine"></span>-->
				<!--<a href="##" id="getKey" class="linkABlue">获取验证码</a>-->
			<!--</div>-->
			<span class="error error2"></span>
			<div class="normalInput">
				<input type="text" class="password" maxlength="16" autocomplete="off" placeholder="密码">
				<input type="password" class="password1" maxlength="16" autocomplete="off" placeholder="密码">
				<a id="pwdBtn" href="##" class="pwdBtnShow" isshow="false">
					<i class="i_icon"></i>
				</a>
			</div>
			<span class="error error3"></span>
			<div class="rememberField">
				<span class="checkboxPic check_chk" tabindex="-1" isshow="false">
					<i class="i_icon"></i>
				</span>
				<label class="pointer">我已阅读并接受</label>
				<a href="#" target="_blank" class="linkABlue">《zcc服务协议条款》</a>
			</div>
			<span class="otherError">请确认已阅读并同意zcc服务协议条款</span>
			<a href="##" class="fullBtnBlue">注册</a>
		</form>
		<form id="#mainForm2" class="mainForm mainForm2">
			<div class="number">
				<a href="##" class="linkABlue2 number2">手机号码注册</a>
				<span></span>
				<a href="##" class="linkAGray2">账户名注册</a>
			</div>
			<div class="normalInput">
				<input type="text" class="username" maxlength="32" placeholder="账户名" autocomplete="off">	
				<span class="grayTip">@zcc.cn</span>
			</div>
			<span class="error error1"></span>		
			<div class="normalInput">
				<input type="text" class="passwordN" maxlength="16" autocomplete="off" placeholder="密码">
				<input type="password" class="password1N" maxlength="16" autocomplete="off" placeholder="密码">
				<a id="pwdBtnN" href="##" class="pwdBtnShowN" isshow="false">
					<i class="i_icon"></i>
				</a>
			</div>
			<span class="error error3"></span>
			<div class="normalInput">
				<input type="text" class="email" maxlength="32" placeholder="安全邮箱" autocomplete="off">
			</div>
			<span class="error error2"></span>
			<div class="rememberField">
				<span class="checkboxPic check_chk" tabindex="-1" isshow="false">
					<i class="i_icon"></i>
				</span>
				<label class="pointer">我已阅读并接受</label>
				<a href="https://www.htmlsucai.com/" target="_blank" class="linkABlue">《Flyme服务协议条款》</a>
			</div>
			<span class="otherError">请确认已阅读并同意zcc服务协议条款</span>
			<a href="##" class="fullBtnBlue">注册</a>
		</form>
	</div>
	
	</div>
	<ul class="bRadius2 mail">
		<li data-mail="@qq.com" class="item item1">@qq.com</li>
		<li data-mail="@sina.com" class="item item2">@sina.com</li>
		<li data-mail="@126.com" class="item item3">@126.com</li>
		<li data-mail="@163.com" class="item item4">@163.com</li>
		<li data-mail="@gmail.com" class="item item5">@gmail.com</li>
	</ul>
	<div id="mz_Float">
		<div class="mz_FloatBox">
			<div class="mz3AngleL">
				<i class="i_icon"></i>
			</div>
			<div class="mzFloatTip bRadius2">长度为8-16个字符，区分大小写，至少包含两种类型</div>
		</div>
	</div>
	
</body>
</html><?php }} ?>
