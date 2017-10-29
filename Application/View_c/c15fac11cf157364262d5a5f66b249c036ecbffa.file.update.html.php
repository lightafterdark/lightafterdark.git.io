<?php /* Smarty version Smarty-3.1-DEV, created on 2017-09-20 16:38:52
         compiled from "D:\blog\Application\View\\Admin\User\update.html" */ ?>
<?php /*%%SmartyHeaderCode:1720159bcaac5049f63-05985601%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c15fac11cf157364262d5a5f66b249c036ecbffa' => 
    array (
      0 => 'D:\\blog\\Application\\View\\\\Admin\\User\\update.html',
      1 => 1505896730,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1720159bcaac5049f63-05985601',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_59bcaac5076731_97751281',
  'variables' => 
  array (
    'userInfo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59bcaac5076731_97751281')) {function content_59bcaac5076731_97751281($_smarty_tpl) {?><!DOCTYPE html>
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
        <i class="fa fa-home"></i> <a href="#">首页</a> &raquo; 修改用户信息
    </div>
    <!--面包屑导航 结束-->
    
    <div class="result_wrap">
        <form action="index.php?p=admin&c=user&a=update" method="post" enctype="multipart/form-data">
            <table class="add_tab">
                <tbody>
                    <tr>
                        <th><i class="require">*</i>用户姓名：</th>
                        <td>
                            <input type="text" class="lg" name="name" value="<?php echo $_smarty_tpl->tpl_vars['userInfo']->value['name'];?>
">
                        </td>
                    </tr>
                    <tr>
                        <th><i class="require">*</i>缩略图：</th>
                        <td><input type="file" name="img" id="file1" onchange="previewFile(1)">
                            <img src="" id="img1" height="200" width="300" alt="Image preview..."/></td>
                        <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['userInfo']->value['img'];?>
" name="img2"/>
                        <!--<th>头像</th>-->
                        <!--<td class="tc">-->
                            <!--<img src="./Public/upload/<?php echo $_smarty_tpl->tpl_vars['userInfo']->value['img'];?>
" width="50" height="50" />-->
                        <!--</td>-->
                    </tr>
                    <tr>
                        <th>登录账户：</th>
                        <td>
                            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['userInfo']->value['id'];?>
">
                            <input type="text" name="user" value="<?php echo $_smarty_tpl->tpl_vars['userInfo']->value['uname'];?>
">
                        </td>
                    </tr>
                    <tr>
                        <th>密码：</th>
                        <td>
                            <input type="password" name="pwd" value="<?php echo $_smarty_tpl->tpl_vars['userInfo']->value['pwd'];?>
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
