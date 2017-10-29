<?php /* Smarty version Smarty-3.1-DEV, created on 2017-09-20 17:24:22
         compiled from "D:\blog\Application\View\\Home\Login\login.html" */ ?>
<?php /*%%SmartyHeaderCode:2329359bf6ade0bbf23-29356557%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7a4cb2d40cf79aa87449a8fac4962869d0346fc7' => 
    array (
      0 => 'D:\\blog\\Application\\View\\\\Home\\Login\\login.html',
      1 => 1505899461,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2329359bf6ade0bbf23-29356557',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_59bf6ade0e0734_00402642',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59bf6ade0e0734_00402642')) {function content_59bf6ade0e0734_00402642($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<title></title>
<meta http-equiv="content-Type" content="text/html" charset="utf-8">
<link rel="stylesheet" type="text/css" href="./Public/home/css/loginindex.css">

<script type="text/javascript" src="./Public/home/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="./Public/home/js/loginindex.js"></script>

</head>
<body>
	<div class="content">
		<div class="ucSimpleHeader">

		</div>
		<form id="#mainForm1" class="mainForm mainForm1" method="post" action="index.php?p=home&a=login&c=login">
			<div class="number">
				<a href="##" class="linkABlue">用户登录</a>
				<span></span>
				<a href="##" class="linkAGray number1">管理员登录</a>
			</div>
			<div class="normalInput">
				<input type="text" class="uname" autocomplete="off" maxlength="11" placeholder="用户名" name="uname">
			</div>
			<span class="error error1"></span>
			<!--<div class="normalInput">-->
				<!--<input type="text" class="kapkey" maxlength="6" placeholder="验证码">-->
				<!--<span class="formLine"></span>-->
				<!--<a href="##" id="getKey" class="linkABlue">获取验证码</a>-->
			<!--</div>-->
			<span class="error error2"></span>
			<div class="normalInput">
				<input type="password" class="password" maxlength="16" autocomplete="off" placeholder="密码" name="pwd">
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
			<a  onclick="document.getElementById('#mainForm1').submit();" class="fullBtnBlue">登录</a>


		</form>
		<form id="#mainForm2" class="mainForm mainForm2" method="post" action="index.php?p=admin&c=login&a=login">
			<div class="number">
				<a href="##" class="linkABlue2 number2">用户登录</a>
				<span></span>
				<a href="##" class="linkAGray2">管理员登录</a>
			</div>
			<div class="normalInput">
				<input type="text" class="username" maxlength="32" placeholder="管理员账户名" autocomplete="off" name="uname">
				<!--<span class="grayTip">@zcc.cn</span>-->
			</div>
			<span class="error error1"></span>		
			<div class="normalInput">
				<input type="password" class="password" maxlength="16" autocomplete="off" placeholder="密码" name="pwd" >
				<a id="pwdBtnN" href="##" class="pwdBtnShow" isshow="false">
					<i class="i_icon"></i>
				</a>
				<i class="i_icon"></i>
				</a>
			</div>
			<span class="error error3"></span>
			<span class="error error2"></span>
			<div class="rememberField">
				<span class="checkboxPic check_chk" tabindex="-1" isshow="false">
					<i class="i_icon"></i>
				</span>
				<label class="pointer">我已阅读并接受</label>
				<a href="" target="_blank" class="linkABlue">《zcc服务协议条款》</a>
			</div>
			<span class="otherError">请确认已阅读并同意zcc服务协议条款</span>
			<a  onclick="document.getElementById('#mainForm2').submit();" class="fullBtnBlue">登录</a>

		</form>
	</div>
	<a href="index.php?p=home&c=login&a=register" class="haha"><h1>没有账号,去注册</h1></a>
	
	</div>

</body>
</html><?php }} ?>
