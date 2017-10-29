<?php /* Smarty version Smarty-3.1-DEV, created on 2017-09-20 16:16:29
         compiled from "D:\blog\Application\View\\Admin\Category\update.html" */ ?>
<?php /*%%SmartyHeaderCode:2053959ba87071f33c8-65177927%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af2dbf94b6d24bbe419e0a11ef67fa9feac48f6e' => 
    array (
      0 => 'D:\\blog\\Application\\View\\\\Admin\\Category\\update.html',
      1 => 1505545498,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2053959ba87071f33c8-65177927',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_59ba8707224542_74982606',
  'variables' => 
  array (
    'cateList' => 0,
    'cateInfo' => 0,
    'cate' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ba8707224542_74982606')) {function content_59ba8707224542_74982606($_smarty_tpl) {?><!DOCTYPE html>
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
        <i class="fa fa-home"></i> <a href="#">首页</a> &raquo; 修改分类
    </div>
    <!--面包屑导航 结束-->
    
    <div class="result_wrap">
        <form action="index.php?p=admin&c=category&a=add" method="post">
            <table class="add_tab">
                <tbody>
                    <tr>
                        <th width="120"><i class="require">*</i>所属分类：</th>
                        <td>
                            <select name="pid">
                                <option value="0">==请选择==</option>
                                <?php  $_smarty_tpl->tpl_vars['cate'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cate']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cateList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cate']->key => $_smarty_tpl->tpl_vars['cate']->value) {
$_smarty_tpl->tpl_vars['cate']->_loop = true;
?>
                                <option <?php echo $_smarty_tpl->tpl_vars['cateInfo']->value['pid']==$_smarty_tpl->tpl_vars['cate']->value['id'] ? 'selected' : '';?>
 value="<?php echo $_smarty_tpl->tpl_vars['cate']->value['id'];?>
"><?php echo str_repeat('&nbsp;',$_smarty_tpl->tpl_vars['cate']->value['level']*4);?>
<?php echo $_smarty_tpl->tpl_vars['cate']->value['name'];?>
</option>
                                <?php } ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th><i class="require">*</i>分类名称：</th>
                        <td>
                            <input type="text" class="lg" name="name" value="<?php echo $_smarty_tpl->tpl_vars['cateInfo']->value['name'];?>
">
                        </td>
                    </tr>
                    <tr>
                        <th>排序：</th>
                        <td>
                            <input type="text" name="sort" value="<?php echo $_smarty_tpl->tpl_vars['cateInfo']->value['sort'];?>
">
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
</html><?php }} ?>
