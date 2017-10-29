<?php /* Smarty version Smarty-3.1-DEV, created on 2017-09-20 16:29:31
         compiled from "D:\blog\Application\View\\Admin\User\index.html" */ ?>
<?php /*%%SmartyHeaderCode:2743559bc8c23d4c486-58817927%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac3e6668c2cd3a2ec1707e26073846e67034ef7f' => 
    array (
      0 => 'D:\\blog\\Application\\View\\\\Admin\\User\\index.html',
      1 => 1505896165,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2743559bc8c23d4c486-58817927',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_59bc8c23d7e848_94696407',
  'variables' => 
  array (
    'userInfo' => 0,
    'info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59bc8c23d7e848_94696407')) {function content_59bc8c23d7e848_94696407($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\blog\\Framework\\Libs\\Smarty\\plugins\\modifier.date_format.php';
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
        <i class="fa fa-home"></i> <a href="#">首页</a> &raquo; 用户列表
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
    <form action="index.php?p=admin&c=user&a=deleteall" method="post" id="search_form">
        <div class="result_wrap">
            <div class="result_content">
                <div class="short_wrap">
                    <a href="index.php?p=admin&c=user&a=add"><i class="fa fa-plus"></i>新增用户</a>
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
                        <th>姓名</th>
                        <th>头像</th>
                        <th>用户创建时间</th>
                        <th>用户修改时间</th>
                        <th>登陆次数</th>
                        <th>最后登陆时间</th>
                        <th>最后登陆IP</th>
                        <th>操作</th>
                    </tr>
                    <?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userInfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->_loop = true;
?>
                    <tr>

                        <td class="tc"><input type="checkbox" name="id[]" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
"></td>
                        <!--
                        <td class="tc">
                            <input type="text" name="ord[]" value="0">
                        </td>
                        -->
                        <td class="tc"><?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['info']->value['name'];?>
</td>
                        <td class="tc">
                            <img src="./Public/upload/<?php echo $_smarty_tpl->tpl_vars['info']->value['img'];?>
" width="50" height="50" style="border-radius: 50%" class="touxiang"/>
                        </td>
                        <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['info']->value['created_time'],'Y-m-d H:i:s');?>
</td>
                        <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['info']->value['updated_time'],'Y-m-d H:i:s');?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['info']->value['login_count']+1;?>
</td>
                        <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['info']->value['last_login_time'],'Y-m-d H:i:s');?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['info']->value['last_login_ip'];?>
</td>
                        <td>
                            <a href="index.php?p=admin&c=user&a=update&id=<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
">修改</a>
                            <a href="javascript:if(confirm('确定删除<?php echo $_smarty_tpl->tpl_vars['info']->value['name'];?>
的信息吗')) { location.href='index.php?p=admin&c=user&a=delete&id=<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
' }">删除</a>
                            <a href="index.php?p=admin&c=user&a=accredit&id=<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
">授权</a>
                            <a href="index.php?p=admin&c=user&a=unaccredit&id=<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
">取消授权</a>
                        </td>
                    </tr>
                    <?php } ?>


                </table>
                <table>
                    <tr>
                        <td><input type="button" value="全选" id="allBtn"></td>
                        <td><input type="button" value="反选" id="unBtn"></td>
                        <td>
                            <a class="first" href="/wysls/index.php/Admin/Tag/index/p/1.html">第一页</a>
                            <a class="prev" href="/wysls/index.php/Admin/Tag/index/p/7.html">上一页</a>
                            <a class="num" href="/wysls/index.php/Admin/Tag/index/p/6.html">6</a>
                            <a class="num" href="/wysls/index.php/Admin/Tag/index/p/7.html">7</a>
                            <span class="current">8</span>
                            <a class="num" href="/wysls/index.php/Admin/Tag/index/p/9.html">9</a>
                            <a class="num" href="/wysls/index.php/Admin/Tag/index/p/10.html">10</a>
                            <a class="next" href="/wysls/index.php/Admin/Tag/index/p/9.html">下一页</a>
                            <a class="end" href="/wysls/index.php/Admin/Tag/index/p/11.html">最后一页</a>
                            <span class="rows">11 条记录</span>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </form>
    <!--搜索结果页面 列表 结束-->

</body>
</html><?php }} ?>
