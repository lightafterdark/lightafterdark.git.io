<?php /* Smarty version Smarty-3.1-DEV, created on 2017-09-21 09:42:38
         compiled from "D:\blog\Application\View\\Home\Message\message.html" */ ?>
<?php /*%%SmartyHeaderCode:1739059c08a9a297a69-46351991%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '83482380ffd1fa9cd984de6e4b8ed108314b1857' => 
    array (
      0 => 'D:\\blog\\Application\\View\\\\Home\\Message\\message.html',
      1 => 1505958155,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1739059c08a9a297a69-46351991',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_59c08a9a2c3b36_79561857',
  'variables' => 
  array (
    'messageList' => 0,
    'mes' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c08a9a2c3b36_79561857')) {function content_59c08a9a2c3b36_79561857($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\blog\\Framework\\Libs\\Smarty\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("../common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link rel="stylesheet" type="text/css" href="./Public/home/css/message.css">

<body>
<div class="topInfo">
    <span class="edit">编辑</span>
    <div class="zoneName">
        <!--<h2>欢迎来到我的空间</h2>-->
        <h2>人生就像一杯咖啡，只有细细品味之后，才能感受到其中的乐趣!</h2>
    </div>
    <div class="author">
        <h3>----zcc</h3>
    </div>

    <div class="support">
        <img src="./Public/home/img/support_1.png" alt="赞" id="zan" onclick="document.getElementById('num').value=this.value+1">
        <!--<span class="num"><input type="text" readonly value="7" id="num"></span>-->
        <span class="num">7</span>
    </div>
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
        这是主人留下的寄语~<br>
        good&nbsp; &nbsp;good&nbsp;&nbsp;study,<br>
        day&nbsp;&nbsp;day&nbsp;&nbsp;up!
    </div>
    <!--<div class="content" contenteditable="true"></div>-->
    <form id="commentform" method="post" action="index.php?p=home&c=message&a=add">
        <textarea class="lg" name="content" id="editor"></textarea>
        <input type="hidden" name="pid" value="0" id="message_pid">
        <input type="submit" name="submit" value="发表" class="subbtn">
    </form>

    <div class="numofmessage">留言(0)</div>
    <div class="msgFrame">
        <?php  $_smarty_tpl->tpl_vars['mes'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mes']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['messageList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['mes']->key => $_smarty_tpl->tpl_vars['mes']->value) {
$_smarty_tpl->tpl_vars['mes']->_loop = true;
?>
        <div class="content_1" style="margin-left:<?php echo 100*$_smarty_tpl->tpl_vars['mes']->value['level'];?>
px">
            <img class="name" src="./Public/upload/<?php echo $_smarty_tpl->tpl_vars['mes']->value['img'];?>
" style="border-radius: 50%" width="50px" height="50px"   alt="photo">
            <div class="mainInfo">
                <div class="userId"><?php echo $_smarty_tpl->tpl_vars['mes']->value['uname'];?>
</div>

                <div class="conInfo">
                    <?php echo $_smarty_tpl->tpl_vars['mes']->value['content'];?>
<br>
                    <a href="#commentform" class="reply"
                       onclick="document.getElementById('message_pid').value=<?php echo $_smarty_tpl->tpl_vars['mes']->value['id'];?>
">回复</a>
                </div>
                <div class="time"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['mes']->value['created_time'],'Y-m-d H:i');?>
</div>
            </div>
        </div>
        <?php } ?>
    </div>
</body>
</html>

<script type="text/javascript" src="./Public/common/ueditor/ueditor.config.js"></script>
<script type="text/javascript" src="./Public/common/ueditor/ueditor.all.js"></script>
<script type="text/javascript">
    var ue = UE.getEditor('editor', {
        initialFrameWidth: 900,
        initialFrameHeight: 400

    })
</script>
<?php }} ?>
