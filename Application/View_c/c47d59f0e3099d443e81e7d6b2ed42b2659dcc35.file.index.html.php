<?php /* Smarty version Smarty-3.1-DEV, created on 2017-09-19 14:56:22
         compiled from "D:\blog\Application\View\\Home\Article\index.html" */ ?>
<?php /*%%SmartyHeaderCode:3002859bf2a3a1ccd05-28554717%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c47d59f0e3099d443e81e7d6b2ed42b2659dcc35' => 
    array (
      0 => 'D:\\blog\\Application\\View\\\\Home\\Article\\index.html',
      1 => 1505804181,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3002859bf2a3a1ccd05-28554717',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_59bf2a3a1f4182_17762746',
  'variables' => 
  array (
    'articleList' => 0,
    'art' => 0,
    'articlePage' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59bf2a3a1f4182_17762746')) {function content_59bf2a3a1f4182_17762746($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\blog\\Framework\\Libs\\Smarty\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("../common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="main" class="add">

	<div class="show-module-wrap clearfix"></div>
	    
 	<div class="main-content clearfix">
   		
     	<div class="main-content-box fl">
          
			<div class="article-list">
				<ul class="list">
					<?php  $_smarty_tpl->tpl_vars['art'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['art']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['articleList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['art']->key => $_smarty_tpl->tpl_vars['art']->value) {
$_smarty_tpl->tpl_vars['art']->_loop = true;
?>
					<li class="li-text clearfix">
						<div class="news-img-box fl">
							<a href="index.php?p=home&c=article&a=detail&id=<?php echo $_smarty_tpl->tpl_vars['art']->value['id'];?>
" target="_blank">
								<?php if ($_smarty_tpl->tpl_vars['art']->value['img']) {?>
								<img class="news-list-img" src="./Public/upload/<?php echo $_smarty_tpl->tpl_vars['art']->value['img'];?>
" width="215" height="144" alt="如何建立个人博客？">
								<?php } else { ?>
								<img class="news-list-img" src="./Public/home/img/1-1406052123280-L.jpg" width="215" height="144" alt="如何建立个人博客？">
								<?php }?>
							</a>

						</div>
						<div class="news-content fl">
							<h3 class="title-h3">
								<a href="index.php?p=home&c=article&a=detail&id=<?php echo $_smarty_tpl->tpl_vars['art']->value['id'];?>
" target="_blank">
									<?php echo $_smarty_tpl->tpl_vars['art']->value['title'];?>

								</a>
							</h3>
							<div class="author-info clearfix">
								<p class="author fl">
									<a href="index.php?p=home&c=article&a=detail&id=<?php echo $_smarty_tpl->tpl_vars['art']->value['id'];?>
">
										<img src="./Public/home/img/author.png" width="33" height="33" alt="你大爷">
										<span><?php echo $_smarty_tpl->tpl_vars['art']->value['uname'];?>
</span>
									</a>
								</p>
								<span class="date-time fl">
									发布时间：
										<em>
											<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['art']->value['created_time'],'Y-m-d H:i:s');?>

										</em>
								</span>
								<span class="classify fl">
									分类：<a href="index.php?p=home&c=article&a=detail&id=<?php echo $_smarty_tpl->tpl_vars['art']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['art']->value['cateName'];?>
</a>
								</span>
							</div>
							<p class="news-info">
								<?php echo $_smarty_tpl->tpl_vars['art']->value['desc'];?>

							</p>
						</div>
					</li>
					<?php } ?>


				</ul>
			</div>
           	
           	
            <div class="page-wrap-box">
				<ul class="list clearfix">
					<?php echo $_smarty_tpl->tpl_vars['articlePage']->value;?>

					<!--<li class="thisclass">1</li>-->
					<!--<li><a href="xxxx">2</a></li>-->
					<!--<li><a href="xxxx">下一页</a></li>-->
				</ul>
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
