<?php /* Smarty version Smarty-3.1-DEV, created on 2017-09-20 16:41:16
         compiled from "D:\blog\Application\View\\Home\Article\detail.html" */ ?>
<?php /*%%SmartyHeaderCode:2730659bf3fb24a48a3-27531541%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d2d2f2209e5606b4f640e72fdde62195c15554b' => 
    array (
      0 => 'D:\\blog\\Application\\View\\\\Home\\Article\\detail.html',
      1 => 1505896874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2730659bf3fb24a48a3-27531541',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_59bf3fb24caeb4_99534744',
  'variables' => 
  array (
    'artInfo' => 0,
    'prev' => 0,
    'next' => 0,
    'commentList' => 0,
    'comment' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59bf3fb24caeb4_99534744')) {function content_59bf3fb24caeb4_99534744($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\blog\\Framework\\Libs\\Smarty\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("../common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link href="./Public/home/css/detail.css" rel="stylesheet">

	    
<div id="main" class="add">

	<div class="show-module-wrap clearfix"></div>
	    
 	<div class="main-content clearfix">
   		
     	<div class="main-content-box fl">
          
			<div class="article-list">
				<div class="content-text-box">
					<!-- content-header -->
		 			<h1 class="title-h1">
						<?php echo $_smarty_tpl->tpl_vars['artInfo']->value['title'];?>

		 			</h1>
		 			<div class="detail-info-box">
			            <ul class="clearfix">
			               	<li>
			               		编辑时间：<span class="date-time">2014-06-05</span>
			               	</li>    
			               	<li id="Browse">
			               		浏览量：<span id="countnum"><?php echo $_smarty_tpl->tpl_vars['artInfo']->value['pv'];?>
</span>
			               	</li>
			               	<li>
			               		作者：<span class="author"><?php echo $_smarty_tpl->tpl_vars['artInfo']->value['author'];?>
</span>
			               	</li>
			            </ul>
				     </div>
					<!-- /content-header -->
				
					<!--内容-->
				    <div class="content">
						<?php echo $_smarty_tpl->tpl_vars['artInfo']->value['content'];?>

				    	<div class="page-text">
							<?php if ($_smarty_tpl->tpl_vars['prev']->value['id']==1) {?>
							已经是第一篇了<br>
							<?php } else { ?>
							上一篇：<a href="index.php?p=home&c=article&a=detail&id=<?php echo $_smarty_tpl->tpl_vars['prev']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['prev']->value['title'];?>
</a> <br>
							<?php }?>

							<?php if ($_smarty_tpl->tpl_vars['next']->value['id']==0) {?>
							已经到头了了<br>
							<?php } else { ?>
				    		下一篇：<a href="index.php?p=home&c=article&a=detail&id=<?php echo $_smarty_tpl->tpl_vars['next']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['next']->value['title'];?>
</a>
							<?php }?>
				    	</div>
				    </div>
			    	<!---/上一页下一页-->

			    	<!--评论--> 
					<div id="comment">
						<?php  $_smarty_tpl->tpl_vars['comment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['commentList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->key => $_smarty_tpl->tpl_vars['comment']->value) {
$_smarty_tpl->tpl_vars['comment']->_loop = true;
?>
						<div class="comment" style="margin-left:<?php echo 60*$_smarty_tpl->tpl_vars['comment']->value['level'];?>
px">
							<div class="c_fl">
								<img src="./Public/upload/<?php echo $_smarty_tpl->tpl_vars['comment']->value['img'];?>
" width="55" height="55" style="border-radius: 50%" />
							</div>
							<div class="c_fr">
								<a href="##"><?php echo $_smarty_tpl->tpl_vars['comment']->value['uname'];?>
</a>•<span class="time"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['comment']->value['created_time'],'m月d日 H:i');?>
</span>
								<a href="#commentform" class="reply" onclick="document.getElementById('comment_pid').value=<?php echo $_smarty_tpl->tpl_vars['comment']->value['id'];?>
">回复</a>
								<p>
									<?php echo $_smarty_tpl->tpl_vars['comment']->value['content'];?>

								</p>
							</div>
						</div>
						<?php } ?>
					</div>
			    	<!--/评论-->
					<hr>
					<form action="index.php?p=home&c=comment&a=add" method="post" id="commentform">
						<textarea name="content" style="width:80%; height:60px"></textarea>
						<br>
						<input type="hidden" name="aid" value="<?php echo $_smarty_tpl->tpl_vars['artInfo']->value['id'];?>
">
						<input type="hidden" name="pid" value="0" id="comment_pid">
						<input type="submit" value="提交评论">
					</form>

	 			</div>
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

<!-- JiaThis Button BEGIN -->
<!--<script type="text/javascript" src="http://v3.jiathis.com/code/jiathis_r.js?move=0" charset="utf-8"></script>-->
<!-- JiaThis Button END -->
</body>
</html>
<?php }} ?>
