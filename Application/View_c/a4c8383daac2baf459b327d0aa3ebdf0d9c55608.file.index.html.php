<?php /* Smarty version Smarty-3.1-DEV, created on 2017-09-20 13:48:32
         compiled from "D:\blog\Application\View\\Admin\Index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:88259b764a57a5e66-39438919%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a4c8383daac2baf459b327d0aa3ebdf0d9c55608' => 
    array (
      0 => 'D:\\blog\\Application\\View\\\\Admin\\Index\\index.html',
      1 => 1505884320,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '88259b764a57a5e66-39438919',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_59b764a592d5e0_78174015',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59b764a592d5e0_78174015')) {function content_59b764a592d5e0_78174015($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="./Public/admin/css/ch-ui.admin.css">
	<link rel="stylesheet" href="./Public/admin/font/css/font-awesome.min.css">
	<script type="text/javascript" src="./Public/admin/js/jquery.js"></script>
    <script type="text/javascript" src="./Public/admin/js/ch-ui.admin.js"></script>
</head>
<body> 
	<!--头部 开始-->
	<div class="top_box">
		<div class="top_left">
			<div class="logo">博客管理后台</div>
			<ul>
				<li><a href="index.php?p=admin&c=index&a=index" class="active">首页</a></li>
				<li><a href="#">管理页</a></li>
			</ul>
		</div>
		<div class="top_right">
			<ul>
				<li>管理员:<?php echo $_SESSION['userinfo']['uname'];?>
</li>
				<!--<li><a href="pass.html" target="main">修改密码</a></li>-->
				<li><a href="index.php?p=admin&c=login&a=changepwd&id=<?php echo $_SESSION['userinfo']['id'];?>
">修改密码</a></li>
				<li><a href="index.php?p=admin&c=login&a=loginout">退出</a></li>
			</ul>
		</div>
	</div>
	<!--头部 结束-->

	<!--左侧导航 开始-->
	<div class="menu_box">
		<ul>

            <li>
            	<h3><i class="fa fa-fw fa-clipboard"></i>文章管理</h3>
                <ul class="sub_menu">
                    <li><a href="index.php?p=admin&c=article&a=index" target="main"><i class="fa fa-fw fa-list-ul"></i>文章列表</a></li>
                    <li><a href="index.php?p=admin&c=article&a=add" target="main"><i class="fa fa-fw fa-plus-square"></i>添加文章</a></li>
                </ul>
            </li>
            <li>
            	<h3><i class="fa fa-fw fa-clipboard"></i>分类管理</h3>
                <ul class="sub_menu">
                    <li><a href="index.php?p=admin&c=category&a=index" target="main"><i class="fa fa-fw fa-list-ul"></i>分类列表</a></li>
                    <li><a href="index.php?p=admin&c=category&a=add" target="main"><i class="fa fa-fw fa-plus-square"></i>添加分类</a></li>
                </ul>
            </li>
            <li>
            	<h3><i class="fa fa-fw fa-clipboard"></i>用户管理</h3>
                <ul class="sub_menu">
                    <li><a href="index.php?p=admin&c=user&a=index" target="main"><i class="fa fa-fw fa-list-ul"></i>用户列表</a></li>
                    <li><a href="index.php?p=admin&c=user&a=add" target="main"><i class="fa fa-fw fa-plus-square"></i>添加用户</a></li>
				</ul>
            </li>
			<li>
				<h3><i class="fa fa-fw fa-clipboard"></i>评论管理</h3>
				<ul class="sub_menu">
					<li><a href="index.php?p=admin&c=comment&a=index" target="main"><i class="fa fa-fw fa-list-ul"></i>评论列表</a></li>
					<li><a href="index.php?p=admin&c=comment&a=add" target="main"><i class="fa fa-fw fa-plus-square"></i>添加评论</a></li>
				</ul>
			</li>
			<li>
				<h3><i class="fa fa-fw fa-clipboard"></i>留言管理</h3>
				<ul class="sub_menu">
					<li><a href="index.php?p=admin&c=message&a=index" target="main"><i class="fa fa-fw fa-list-ul"></i>留言列表</a></li>
					<li><a href="index.php?p=admin&c=message&a=add" target="main"><i class="fa fa-fw fa-plus-square"></i>添加留言</a></li>
				</ul>
			</li>
        </ul>
	</div>
	<!--左侧导航 结束-->

	<!--主体部分 开始-->
	<div class="main_box">
		<iframe src="index.php?p=admin&c=index&a=welcome" frameborder="0" width="100%" height="100%" name="main"></iframe>
	</div>
	<!--主体部分 结束-->

	<!--底部 开始-->
	<div class="bottom_box">
		CopyRight © 2017. Powered By <a href="http://www.itcast.cn">http://www.itcast.cn</a>.
	</div>
	<!--底部 结束-->
</body>
</html><?php }} ?>
