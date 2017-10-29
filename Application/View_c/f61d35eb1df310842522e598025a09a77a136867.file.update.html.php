<?php /* Smarty version Smarty-3.1-DEV, created on 2017-09-20 14:55:20
         compiled from "D:\blog\Application\View\\Admin\Comment\update.html" */ ?>
<?php /*%%SmartyHeaderCode:2650459c20e5f3a1ca2-60488166%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f61d35eb1df310842522e598025a09a77a136867' => 
    array (
      0 => 'D:\\blog\\Application\\View\\\\Admin\\Comment\\update.html',
      1 => 1505890518,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2650459c20e5f3a1ca2-60488166',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_59c20e5f3c8209_45959360',
  'variables' => 
  array (
    'info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c20e5f3c8209_45959360')) {function content_59c20e5f3c8209_45959360($_smarty_tpl) {?><!DOCTYPE html>
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
        <i class="fa fa-home"></i> <a href="#">首页</a> &raquo; 添加文章
    </div>
    <!--面包屑导航 结束-->
    
    <div class="result_wrap">
        <form action="index.php?p=admin&c=comment&a=update" method="post">
            <table class="add_tab">
                <tbody>
                    <tr>
                        <th>评论的文章id</th>
                        <td>
                            <input type="text" name="aid" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['aid'];?>
">
                        </td>
                    </tr>
                    <tr>
                        <th>pid</th>
                        <td>
                            <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
" name="id">
                            <input type="text" name="pid" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['pid'];?>
">
                        </td>
                    </tr>
                    <tr>
                        <th>评论内容：</th>
                        <td>
                            <textarea class="lg" name="content" id="editor"><?php echo $_smarty_tpl->tpl_vars['info']->value['content'];?>
</textarea>
                        </td>
                    </tr>
                    <tr>
                        <th>是否显示：</th>
                        <td>
                            <label for=""><input type="radio" name="display"  value="1" <?php echo $_smarty_tpl->tpl_vars['info']->value['display']==1 ? 'checked' : '';?>
>显示</label>
                            <label for=""><input type="radio" name="display" value="0" <?php echo $_smarty_tpl->tpl_vars['info']->value['display']==0 ? 'checked' : '';?>
>隐藏</label>
                        </td>
                    </tr>
                    <tr>
                        <th></th>
                        <td>
                            <input type="submit" value="提交">
                            <input type="button" class="back" onclick="history.go(-1)" value="返回">
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>

</body>
</html>
<?php }} ?>
