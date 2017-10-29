<?php /* Smarty version Smarty-3.1-DEV, created on 2017-09-16 15:46:27
         compiled from "D:\blog\Application\View\\Admin\Index\welcome.html" */ ?>
<?php /*%%SmartyHeaderCode:3211259b76574196828-53537835%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0dc1d0b46579498e875c77f060388e43339febd0' => 
    array (
      0 => 'D:\\blog\\Application\\View\\\\Admin\\Index\\welcome.html',
      1 => 1505545530,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3211259b76574196828-53537835',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_59b765741c0774_31775043',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59b765741c0774_31775043')) {function content_59b765741c0774_31775043($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\blog\\Framework\\Libs\\Smarty\\plugins\\modifier.date_format.php';
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="./Public/admin/css/ch-ui.admin.css">
	<link rel="stylesheet" href="./Public/admin/font/css/font-awesome.min.css">
</head>
<body>
	<!--面包屑导航 开始-->
	<div class="crumb_warp">
        <i class="fa fa-bell"></i> 欢迎登陆网站后台。
		<i class="fa fa-home"></i> <a href="#">首页</a> &raquo; 欢迎页
	</div>
	<!--面包屑导航 结束-->
	
	<!--结果集标题与导航组件 开始-->
	<div class="result_wrap">
        <div class="result_title">
            <h3>快捷操作</h3>
        </div>
        <div class="result_content">
            <div class="short_wrap">
                <a href="#"><i class="fa fa-plus"></i>新增文章</a>
                <a href="#"><i class="fa fa-plus"></i>新增分类</a>
            </div>
        </div>
    </div>
    <!--结果集标题与导航组件 结束-->

    <div class="result_wrap avatar">
        <div class="result_title">
            <img src="./Public/Admin/img/avatar.png" width="100px" height="100px" />
        </div>
        <div class="result_content">
            您好,<?php echo $_SESSION['userinfo']['uname'];?>
,
            这是您第<?php echo $_SESSION['userinfo']['login_count']+1;?>
次登录,
            上次登录为<?php echo smarty_modifier_date_format($_SESSION['userinfo']['last_login_time'],'Y-m-d H:i;s');?>
.
            上次登录的ip:<?php echo long2ip($_SESSION['userinfo']['last_login_ip']);?>

        </div>
    </div>

	
    <div class="result_wrap">
        <div class="result_title">
            <h3>系统基本信息</h3>
        </div>
        <div class="result_content">
            <ul>
                <li>
                    <label>操作系统</label><span><?php echo php_uname('s');?>
</span>
                </li>
                <li>
                    <label>运行环境</label><span><?php echo apache_get_version();?>
</span>
                </li>
                <li>
                    <label>上传附件限制</label><span><?php echo ini_get('upload_max_filesize');?>
</span>
                </li>
                <li>
                    <label>北京时间</label><span><?php echo date('Y-m-d H:i:s',time());?>
</span>
                </li>
                <li>
                    <label>服务器域名/IP</label><span><?php echo $_SERVER['SERVER_NAME'];?>
[<?php echo $_SERVER['SERVER_ADDR'];?>
]</span>
                </li>
            </ul>
        </div>
    </div>
	<!--结果集列表组件 结束-->

</body>
</html><?php }} ?>
