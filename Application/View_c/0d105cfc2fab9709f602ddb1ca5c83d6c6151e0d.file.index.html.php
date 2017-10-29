<?php /* Smarty version Smarty-3.1-DEV, created on 2017-09-20 16:15:07
         compiled from "D:\blog\Application\View\\Admin\Comment\index.html" */ ?>
<?php /*%%SmartyHeaderCode:360759c20126c25aa2-75371182%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d105cfc2fab9709f602ddb1ca5c83d6c6151e0d' => 
    array (
      0 => 'D:\\blog\\Application\\View\\\\Admin\\Comment\\index.html',
      1 => 1505893767,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '360759c20126c25aa2-75371182',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_59c20126ccd7f9_28458286',
  'variables' => 
  array (
    'commentList' => 0,
    'com' => 0,
    'commentPage' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c20126ccd7f9_28458286')) {function content_59c20126ccd7f9_28458286($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\blog\\Framework\\Libs\\Smarty\\plugins\\modifier.date_format.php';
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
        <i class="fa fa-home"></i> <a href="#">首页</a> &raquo; 评论列表
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
    <form action="index.php?p=admin&c=comment&a=deleteall" method="post" id="search_form">
        <div class="result_wrap">
            <div class="result_content">
                <div class="short_wrap">
                    <a href="index.php?p=admin&c=comment&a=add"><i class="fa fa-plus"></i>新增评论</a>
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
                        <th>pid</th>
                        <th>aid</th>
                        <th>评论内容</th>
                        <th>评论创建时间</th>
                        <th>评论修改时间</th>
                        <th>是否显示</th>
                        <th>操作</th>
                    </tr>
                    <?php  $_smarty_tpl->tpl_vars['com'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['com']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['commentList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['com']->key => $_smarty_tpl->tpl_vars['com']->value) {
$_smarty_tpl->tpl_vars['com']->_loop = true;
?>
                    <tr>

                        <td class="tc"><input type="checkbox" name="id[]" value="<?php echo $_smarty_tpl->tpl_vars['com']->value['id'];?>
"></td>
                        <!--
                        <td class="tc">
                            <input type="text" name="ord[]" value="0">
                        </td>
                        -->
                        <td class="tc"><?php echo $_smarty_tpl->tpl_vars['com']->value['id'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['com']->value['pid'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['com']->value['aid'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['com']->value['content'];?>
</td>
                        <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['com']->value['created_time'],'Y-m-d H:i:s');?>
</td>
                        <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['com']->value['updated_time'],'Y-m-d H:i:s');?>
</td>
                        <td>
                            <?php if ($_smarty_tpl->tpl_vars['com']->value['display']) {?>
                            <font color="green">显示</font>
                            <?php } else { ?>
                            <font color="red">隐藏</font>
                            <?php }?>

                        </td>
                        <td>
                            <a href="index.php?p=admin&c=comment&a=update&id=<?php echo $_smarty_tpl->tpl_vars['com']->value['id'];?>
">修改</a>
                            <a href="javascript:if(confirm('确定删除吗')) { location.href='index.php?p=admin&c=comment&a=delete&id=<?php echo $_smarty_tpl->tpl_vars['com']->value['id'];?>
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
                            <?php echo $_smarty_tpl->tpl_vars['commentPage']->value;?>

                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </form>
    <!--搜索结果页面 列表 结束-->

</body>
</html><?php }} ?>
