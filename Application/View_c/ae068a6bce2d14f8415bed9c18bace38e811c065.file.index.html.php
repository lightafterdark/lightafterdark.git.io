<?php /* Smarty version Smarty-3.1-DEV, created on 2017-09-20 16:14:51
         compiled from "D:\blog\Application\View\\Admin\Article\index.html" */ ?>
<?php /*%%SmartyHeaderCode:2506859bbb13815f789-34158149%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae068a6bce2d14f8415bed9c18bace38e811c065' => 
    array (
      0 => 'D:\\blog\\Application\\View\\\\Admin\\Article\\index.html',
      1 => 1505895288,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2506859bbb13815f789-34158149',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_59bbb138183c90_77515804',
  'variables' => 
  array (
    'articleList' => 0,
    'article' => 0,
    'articlePage' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59bbb138183c90_77515804')) {function content_59bbb138183c90_77515804($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\blog\\Framework\\Libs\\Smarty\\plugins\\modifier.date_format.php';
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
        <i class="fa fa-home"></i> <a href="#">首页</a> &raquo; 文章列表
    </div>
    <!--面包屑导航 结束-->
    

	<!--<div class="search_wrap">-->
        <!--<form action="" method="post" >-->
            <!--<table class="search_tab">-->
                <!--<tr>-->
                    <!--<th width="78">选择分类:</th>-->
                    <!--<td>-->
                        <!--<select onchange="javascript:location.href=this.value;">-->
                            <!--<option value="">全部</option>-->
                            <!--<option value="http://www.baidu.com">百度</option>-->
                            <!--<option value="http://www.sina.com">新浪</option>-->
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
    <form action="index.php?p=admin&c=article&a=deleteall" method="post" id="search_form">
        <div class="result_wrap">
            <div class="result_content">
                <div class="short_wrap">
                    <a href="index.php?p=admin&c=article&a=add"><i class="fa fa-plus"></i>新增文章</a>
                    <a onclick="if(confirm('确定删除吗')) { document.querySelector('#search_form').submit(); }"><i class="fa fa-recycle"></i>批量删除</a>
                    <a href="#"><i class="fa fa-refresh"></i>更新排序</a>
                </div>
            </div>
        </div>

        <div class="result_wrap">
            <div class="result_content">
                <table class="list_tab">
                    <tr>

                        <th class="tc" width="5%"><input type="checkbox" name=""></th>
                        <!--
                        <th class="tc">排序</th>
                        -->
                        <th class="tc">ID</th>
                        <th class="tc">图片</th>
                        <th>标题</th>
                        <th>点击</th>
                        <th>发布人</th>
                        <th>更新时间</th>
                        <th>操作</th>
                    </tr>
                    <?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['articleList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
?>
                    <tr>
                        <td class="tc"><input type="checkbox" name="id[]" value="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
<?php $_tmp1=ob_get_clean();?><?php echo $_tmp1;?>
"></td>
                        <!--
                        <td class="tc">
                            <input type="text" name="ord[]" value="0">
                        </td>
                        -->
                        <td class="tc"><?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
</td>
                        <td class="tc">
                            <img src="./Public/upload/<?php echo $_smarty_tpl->tpl_vars['article']->value['img'];?>
" width="50" height="50" style="border-radius: 50%" class="touxaing"/>
                        </td>

                        <td>
                            <a href="#"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</a>
                        </td>
                        <td><?php echo $_smarty_tpl->tpl_vars['article']->value['pv'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['article']->value['author'];?>
</td>
                        <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['article']->value['updated_time'],'Y-m-d H:i:s');?>
</td>
                        <td>
                            <a href="index.php?p=admin&c=article&a=update&id=<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
">修改</a>
                            <a href="javascript:if(confirm('确定删除吗')) { location.href='index.php?p=admin&c=article&a=delete&id=<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
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
                            <?php echo $_smarty_tpl->tpl_vars['articlePage']->value;?>

                        </td>
                    </tr>
                </table>

            </div>
        </div>
    </form>
    <!--搜索结果页面 列表 结束-->

</body>
</html><?php }} ?>
