<?php /* Smarty version Smarty-3.1-DEV, created on 2017-09-19 19:25:02
         compiled from "D:\blog\Application\View\\Home\Search\search.html" */ ?>
<?php /*%%SmartyHeaderCode:2809459c0f2e1d980f0-73721515%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c9eb75e1b0e03ace215115674eee36a809e1db1' => 
    array (
      0 => 'D:\\blog\\Application\\View\\\\Home\\Search\\search.html',
      1 => 1505820289,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2809459c0f2e1d980f0-73721515',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_59c0f2e1dbf1d1_36919414',
  'variables' => 
  array (
    'searchList' => 0,
    'sea' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c0f2e1dbf1d1_36919414')) {function content_59c0f2e1dbf1d1_36919414($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	    
<div id="main" class="add">

	<div class="show-module-wrap clearfix"></div>
	    
 	<div class="main-content clearfix">
   		
     	<div class="main-content-box fl">
          
			<div class="article-list">
				<?php  $_smarty_tpl->tpl_vars['sea'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sea']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['searchList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sea']->key => $_smarty_tpl->tpl_vars['sea']->value) {
$_smarty_tpl->tpl_vars['sea']->_loop = true;
?>
				<div class="content-text-box">
		 			<a href="index.php?p=home&c=article&a=detail&id=<?php echo $_smarty_tpl->tpl_vars['sea']->value['id'];?>
" target="_blank"><h1 class="title-h1">
		 				<?php echo $_smarty_tpl->tpl_vars['sea']->value['title'];?>

		 			</h1></a>
		 			<div class="detail-info-box">
			            <ul class="clearfix">
			               	<li id="Browse">
			               		浏览量：<span id="countnum"><?php echo $_smarty_tpl->tpl_vars['sea']->value['pv'];?>
</span>
			               	</li>
			               	<li>
			               		作者：<span class="author"><?php echo $_smarty_tpl->tpl_vars['sea']->value['author'];?>
</span>
			               	</li>
			            </ul>
				     </div>
					<!-- /content-header -->
	 			</div>
				<?php } ?>
			</div>
   
    	</div>
   	</div>
      
	<footer class="footer-wrap">
		<p>
			<span>Design by：传值博客</span>
			<span>备案号：<strong>沪ICP备XXXXXXXX号-2</strong></span>
		</p>
	</footer>
</div>
	
<div class="fixed-side-menu">
	<ul class="list">
		<li id="returnTop">
			<a class="ico-bg return-top" href="javascript:;">
			</a>
		</li>
		<li>
			<a class="ico-bg qq" href="http://wpa.qq.com/msgrd?v=3&amp;uin=88888888888&amp;site=qq&amp;menu=yes" target="_blank">
			</a>
		</li>
		<li id="wechatBoxWrap" class="wechat-box-wrap">
			<a class="ico-bg wechat" href="javascript:;"></a>
			<div class="wechat-img">
				<img src="./Public/home/img/weixin.png" width="150" height="135" alt="你大爷博客官方微信公众号">
			</div>
		</li>
	</ul>
</div>


      
	<script type="text/javascript" src="./Public/home/js/common.js"></script>
	<script type="text/javascript" src="./Public/home/js/index.js"></script>
</body>
</html>
<?php }} ?>
