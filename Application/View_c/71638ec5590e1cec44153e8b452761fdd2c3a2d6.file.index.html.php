<?php /* Smarty version Smarty-3.1-DEV, created on 2017-09-20 16:15:40
         compiled from "D:\blog\Application\View\\Admin\Message\index.html" */ ?>
<?php /*%%SmartyHeaderCode:54659c211aed3b2b7-99071201%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '71638ec5590e1cec44153e8b452761fdd2c3a2d6' => 
    array (
      0 => 'D:\\blog\\Application\\View\\\\Admin\\Message\\index.html',
      1 => 1505895336,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '54659c211aed3b2b7-99071201',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_59c211aed85e29_76271223',
  'variables' => 
  array (
    'messageList' => 0,
    'mes' => 0,
    'messagePage' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c211aed85e29_76271223')) {function content_59c211aed85e29_76271223($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\blog\\Framework\\Libs\\Smarty\\plugins\\modifier.date_format.php';
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./Public/admin/css/ch-ui.admin.css">
    <link rel="stylesheet" href="./Public/admin/font/css/font-awesome.min.css">
    <script type="text/javascript" src="./Public/admin/js/jquery.js"></script>
    <script type="text/javascript" src="./Public/admin/js/ch-ui.admin.js"></script>
</head>
<body> 
    <!--面包屑导航 开始-->
    <div class="crumb_warp">
        <i class="fa fa-bell"></i> 欢迎登陆网站后台。
        <i class="fa fa-home"></i> <a href="#">首页</a> &raquo; 留言列表
    </div>
    <!--面包屑导航 结束-->
    

    <!--<div class="search_wrap">-->
        <!--<form action="" method="post">-->
            <!--<table class="search_tab">-->
                <!--<tr>-->
                    <!--<th width="78">选择分类:</th>-->
                    <!--<td>-->
                        <!--<select onchange="javascript:location.href=this.value;">-->
                            <!--<option value="index.php?p=admin&c=user&a=index">普通用户</option>-->
                            <!--<option value="index.php?p=admin&c=admin&a=index">管理员</option>-->
                        <!--</select>-->
                    <!--</td>-->
                    <!--<th width="70">关键字:</th>-->
                    <!--<td><input type="text" name="keywords" placeholder="关键字"></td>-->
                    <!--<td><input type="submit" name="sub" value="查询"></td>-->
                <!--</tr>-->
            <!--</table>-->
        <!--</form>-->
    <!--</div>-->
    <!--结果页快捷搜索框 结束-->

    <!--搜索结果页面 列表 开始-->
    <form action="index.php?p=admin&c=message&a=deleteall" method="post" id="search_form">
        <div class="result_wrap">
            <div class="result_content">
                <div class="short_wrap">
                    <a href="index.php?p=admin&c=message&a=add"><i class="fa fa-plus"></i>新增留言</a>
                    <a onclick="if(confirm('确定删除吗')) { document.querySelector('#search_form').submit(); }"><i class="fa fa-recycle"></i>批量删除</a>
                    <a href="#"><i class="fa fa-refresh"></i>更新排序</a>
                </div>
            </div>
        </div>

        <div class="result_wrap">
            <div class="result_content">
                <table class="list_tab">
                    <tr>

                        <th class="tc" width="5%"><input type="checkbox" name=""></th><!--
                        <th class="tc">排序</th>
                        -->
                        <th class="tc">编号</th>
                        <th>留言用户</th>
                        <th>pid</th>
                        <th>留言内容</th>
                        <th>留言创建时间</th>
                        <th>留言修改时间</th>
                        <th>是否显示</th>
                        <th>操作</th>
                    </tr>
                    <?php  $_smarty_tpl->tpl_vars['mes'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mes']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['messageList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['mes']->key => $_smarty_tpl->tpl_vars['mes']->value) {
$_smarty_tpl->tpl_vars['mes']->_loop = true;
?>
                    <tr>

                        <td class="tc"><input type="checkbox" name="id[]" value="<?php echo $_smarty_tpl->tpl_vars['mes']->value['id'];?>
"></td>
                        <!--
                        <td class="tc">
                            <input type="text" name="ord[]" value="0">
                        </td>
                        -->
                        <td class="tc"><?php echo $_smarty_tpl->tpl_vars['mes']->value['id'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['mes']->value['uname'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['mes']->value['pid'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['mes']->value['content'];?>
</td>
                        <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['mes']->value['created_time'],'Y-m-d H:i:s');?>
</td>
                        <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['mes']->value['updated_time'],'Y-m-d H:i:s');?>
</td>
                        <td>
                            <?php if ($_smarty_tpl->tpl_vars['mes']->value['display']) {?>
                            <font color="green">显示</font>
                            <?php } else { ?>
                            <font color="red">隐藏</font>
                            <?php }?>

                        </td>
                        <td>
                            <a href="index.php?p=admin&c=message&a=update&id=<?php echo $_smarty_tpl->tpl_vars['mes']->value['id'];?>
">修改</a>
                            <a href="javascript:if(confirm('确定删除吗')) { location.href='index.php?p=admin&c=message&a=delete&id=<?php echo $_smarty_tpl->tpl_vars['mes']->value['id'];?>
' }">删除</a>
                        </td>
                    </tr>
                    <?php } ?>


                </table>
                <table>
                    <tr>
                        <td><input type="button" value="全选" id="allBtn"></td>
                        <td><input type="button" value="反选" id="unBtn"></td>
                        <td>
                            <?php echo $_smarty_tpl->tpl_vars['messagePage']->value;?>

                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </form>
    <!--搜索结果页面 列表 结束-->

</body>
</html><?php }} ?>
