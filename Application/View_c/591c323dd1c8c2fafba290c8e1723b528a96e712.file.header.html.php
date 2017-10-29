<?php /* Smarty version Smarty-3.1-DEV, created on 2017-09-19 11:09:25
         compiled from "D:\blog\Application\View\\Home\common\header.html" */ ?>
<?php /*%%SmartyHeaderCode:2715359bf7a9c7128d0-80719442%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '591c323dd1c8c2fafba290c8e1723b528a96e712' => 
    array (
      0 => 'D:\\blog\\Application\\View\\\\Home\\common\\header.html',
      1 => 1505790556,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2715359bf7a9c7128d0-80719442',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_59bf7a9c77ac55_43689966',
  'variables' => 
  array (
    'cateList' => 0,
    'cate' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59bf7a9c77ac55_43689966')) {function content_59bf7a9c77ac55_43689966($_smarty_tpl) {?><!--
参考：http://www。duanliang920。com
-->
<!DOCTYPE HTML>
<html lang="zh-CN">
<head>
    <meta charset="utf8">
    <title>你大爷个人博客-分享web前端和SEO技术的个人博客网站</title>
    <meta name="keywords" content="你大爷">
    <meta name="description" content="PHP高级开发攻城狮个人博客，是记录博主学习和成长的一个自媒体博客。">
    <meta http-equiv="Cache-Control" content="no-transform ">
    <meta http-equiv="Cache-Control" content="no-siteapp">
    <meta http-equiv="Window-target" content="_top">
    <link href="./Public/home/css/common.css" rel="stylesheet">
    <link href="./Public/home/css/index.css" rel="stylesheet">
</head>
<body>

<header>
    <div class='fl'>
        <a href="" class="logo"><h1>个人博客</h1></a>
    </div>
    <div class='fr'>
        <?php if (isset($_SESSION['home_userinfo']['uname'])) {?>
        <a href="">欢迎,<?php echo $_SESSION['home_userinfo']['uname'];?>
</a>

        <?php } else { ?>
        <a href="index.php?p=home&c=login&a=login">登陆</a> |
        <a href="index.php?p=home&c=login&a=register" >注册</a>
        <?php }?>
    </div>
</header>
<nav id="nav" class="nav-wrap">
    <ul class="clearfix">
        <li><a href="/" id="active">首页</a></li>
        <?php  $_smarty_tpl->tpl_vars['cate'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cate']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cateList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cate']->key => $_smarty_tpl->tpl_vars['cate']->value) {
$_smarty_tpl->tpl_vars['cate']->_loop = true;
?>
        <?php if ($_smarty_tpl->tpl_vars['cate']->value['pid']==0) {?>
        <li><a href="./index.php?p=home&c=article&a=index&cid=<?php echo $_smarty_tpl->tpl_vars['cate']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['cate']->value['name'];?>
 </a></li>
        <?php }?>
        <?php } ?>
        <li id="navEnd"><a href="index.php?p=home&c=message&a=index">留言版</a></li>
    </ul>
</nav><?php }} ?>
