<?php /* Smarty version Smarty-3.1-DEV, created on 2017-09-18 09:34:38
         compiled from "D:\blog\Application\View\\Admin\Login\login.html" */ ?>
<?php /*%%SmartyHeaderCode:694059b74a1d2164f1-83773463%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ecd0ff850a33cff3299609a9d3bf494c9a41f279' => 
    array (
      0 => 'D:\\blog\\Application\\View\\\\Admin\\Login\\login.html',
      1 => 1505698398,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '694059b74a1d2164f1-83773463',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_59b74a1d247e77_51103586',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59b74a1d247e77_51103586')) {function content_59b74a1d247e77_51103586($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<!--<link rel="stylesheet" href="./Public/admin/css/ch-ui.admin.css">-->
	<!--<link rel="stylesheet" href="./Public/admin/font/css/font-awesome.min.css">-->
	<link rel="stylesheet" href="./Public/admin/css/login.css">
</head>
<body style="background:#F3F3F4;">
<div class="bb">
	<h1 id="shan">Blog</h1>
</div>
<div class="box">
	<div class="login_box">
		<div class="fu">
			<div class="form show" id="user">
				<form action="index.php?p=home&c=index&a=login" method="post">
					<h2>欢迎登录我的博客</h2>
					<ul>
						<li>
						<input type="text" name="uname" class="text"/>
							<span><i class="fa fa-user"></i></span>
						</li>
						<li>
							<input type="password" name="pwd" class="text"/>
							<span><i class="fa fa-lock"></i></span>
						</li>
						<li>
							<input type="text" class="code" name="code"/>
							<span><i class="fa fa-check-square-o"></i></span>
							<img
									onclick="this.src='index.php?p=admin&c=login&a=captcha&t='+Math.random()"
									src="index.php?p=admin&c=login&a=captcha"
									alt="图片不存在"
									title="看不清，点击切换"
									style="cursor: pointer"
							/>
						</li>
						<li>
							<input type="submit">
						</li>
					</ul>
				</form>
				<p><a href="./注册页.html" >用户注册</a></p>

			</div>
			<div class="form" id="admin">
				<form action="index.php?p=admin&c=login&a=login" method="post">
					<h2>欢迎使用博客管理平台</h2>
					<ul>
						<li>
							<input type="text" name="uname" class="text"/>
							<span><i class="fa fa-user"></i></span>
						</li>
						<li>
							<input type="password" name="pwd" class="text"/>
							<span><i class="fa fa-lock"></i></span>
						</li>
						<li>
							<input type="submit">
						</li>
						<!--<li>-->
							<!--<input type="text" class="code" name="code"/>-->
							<!--<span><i class="fa fa-check-square-o"></i></span>-->
							<!--<img-->
									<!--onclick="this.src='index.php?p=admin&c=login&a=captcha&t='+Math.random()"-->
									<!--src="index.php?p=admin&c=login&a=captcha"-->
									<!--alt="图片不存在"-->
									<!--title="看不清，点击切换"-->
									<!--style="cursor: pointer"-->
							<!--/>-->
						<!--</li>-->

					</ul>
				</form>
			</div>
		</div>
		<div class="btn">
			<button id="userBtn">用户登录</button>
			<button id="adminBtn">管理员登录</button>
		</div>
	</div>
	<div class="bottom">
		<p>
			&copy; 2016 Powered by itcast<br />
			<a href="http://www.itcast.cn/" target="_blank">PHP高级开发攻城狮</a>
		</p>
	</div>
</div>
</body>
</html>
<script>
		setInterval(function(){
 		var shan=document.querySelector('#shan');
        var a=Math.ceil(Math.random()*255);
        var b=Math.ceil(Math.random()*255);
        var c=Math.ceil(Math.random()*255);
        shan.style.color='rgb('+a+','+b+','+c+')';
        shan.style.transition="color,0.5s";
	},500)
//

		var bigBox=document.querySelector('.fu').children;
        var btns=document.querySelector('.btn').children;
//		var user=document.querySelector("#user");
//		var admin=document.querySelector("#admin");
		for(var i=0;i<btns.length;i++){
            btns[i].index=i;
            btns[i].onclick=function(){
                console.log(1);
                for(var j=0;j<btns.length;j++){
		            bigBox[j].classList.remove('show');
				}
				bigBox[this.index].classList.add('show');
			}
		}

//		userBtn.onclick= function(){
//			admin.classList.remove('show');
//            user.classList.add('show');
//		};
//		adminBtn.onclick=function(){
//            user.classList.remove('show');
//            admin.classList.add('show');
//
//		}
</script><?php }} ?>
