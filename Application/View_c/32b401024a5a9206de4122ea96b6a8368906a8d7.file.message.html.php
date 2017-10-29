<?php /* Smarty version Smarty-3.1-DEV, created on 2017-09-19 11:02:16
         compiled from "D:\blog\Application\View\\Home\Index\message.html" */ ?>
<?php /*%%SmartyHeaderCode:3140259c081fc692539-99584798%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32b401024a5a9206de4122ea96b6a8368906a8d7' => 
    array (
      0 => 'D:\\blog\\Application\\View\\\\Home\\Index\\message.html',
      1 => 1505790135,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3140259c081fc692539-99584798',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_59c081fc6b6648_58302401',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c081fc6b6648_58302401')) {function content_59c081fc6b6648_58302401($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    	<!--<link rel="icon" sizes="any" mask href="http://qzonestyle.gtimg.cn/qzone/v8/img/Qzone.svg">-->
    	<link rel="stylesheet" type="text/css" href="./Public/home/css/message.css">

<body>
    <!--<div class="header">-->
        <!--This is the head nav-->
    <!--</div>-->
    <div class="topInfo">
        <span class="edit">编辑</span>
    	<div class="zoneName">
    		<!--<h2>欢迎来到我的空间</h2>-->
    		<h2>人生就像一杯咖啡，只有细细品味之后，才能感受到其中的乐趣</h2>
    	</div>
    	<div class="support">
    		<img src="./Public/home/img/support_1.png" alt="赞">
    		<span class="num">7</span>
    	</div>
    	<div class="tips">7人赞过</div>
    	<!-- bottom nav -->
    	<div class="top_bottom">
    	   <div class="photo">
    	   	  <img src="./Public/home/img/touxiang.jpg">
    	   </div>
    	</div>
    </div>
    <!-- 下面实现留言板功能 -->
    <div class="mainframe">
    	<div class="title">留言板</div>
    	<div class="message">主人寄语</div>
    	<div class="info">
    		这是主人留下的寄语~
    	</div>
    	<!--<div class="content" contenteditable="true"></div>-->
		<form>
			<textarea class="lg" name="content" id="editor"></textarea>
			<input type="button" name="submit" value="发表" class="subbtn">
		</form>

    	<div class="numofmessage">留言(0)</div>
    	<!-- 下面是留言区 -->
    	<div class="msgFrame">

    	   <!--<div class="content_1">-->
    	         <!--<img class="name" src="http://qlogo3.store.qq.com/qzone/1262283870/1262283870/100?1481718124" alt="photo">-->
    	         <!--<div class="mainInfo">-->
    		         <!--<div class="userId"><a href="#">zipple</a></div>-->
    		         <!--<div class="conInfo">-->
    				       <!--这是一条留言。-->
    		            <!--</div>-->
    		         <!--<div class="time">2016-12-19  23:46:11</div>-->


    	    <!--</div>-->
         </div>
    </div>
</body>
</html>

<script type="text/javascript" src="./Public/common/ueditor/ueditor.config.js"></script>
<script type="text/javascript" src="./Public/common/ueditor/ueditor.all.js"></script>
<script type="text/javascript">
    var ue=UE.getEditor('editor',{
        initialFrameWidth:900,
		initialFrameHeight:400

    })
</script><?php }} ?>
