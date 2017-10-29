<?php /* Smarty version Smarty-3.1-DEV, created on 2017-09-20 15:49:10
         compiled from "D:\blog\Application\View\\Admin\Comment\add.html" */ ?>
<?php /*%%SmartyHeaderCode:2775359c20b87879590-90341719%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '65a52d480e353665035ff82fe85aeb94f7178df3' => 
    array (
      0 => 'D:\\blog\\Application\\View\\\\Admin\\Comment\\add.html',
      1 => 1505893746,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2775359c20b87879590-90341719',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_59c20b8789ccd8_49587289',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c20b8789ccd8_49587289')) {function content_59c20b8789ccd8_49587289($_smarty_tpl) {?><!DOCTYPE html>
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
        <i class="fa fa-home"></i> <a href="#">首页</a> &raquo; 添加评论
    </div>
    <!--面包屑导航 结束-->
    
    <div class="result_wrap">
        <form action="index.php?p=admin&c=comment&a=add" method="post">
            <table class="add_tab">
                <tbody>
                    <tr>
                        <th>评论的文章id</th>
                        <td>

                            <input type="text" name="aid">
                        </td>
                    </tr>
                    <tr>
                        <th>pid</th>
                        <td>
                            <input type="text" name="pid">
                        </td>
                    </tr>
                    <tr>
                        <th>评论内容：</th>
                        <td>
                            <textarea class="lg" name="content" id="editor"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <th>是否显示：</th>
                        <td>
                            <label for=""><input type="radio" name="display" value="0">隐藏</label>
                            <label for=""><input type="radio" name="display" value="1">显示</label>
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
