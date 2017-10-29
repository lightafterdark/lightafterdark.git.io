<?php /* Smarty version Smarty-3.1-DEV, created on 2017-09-17 21:58:11
         compiled from "D:\blog\Application\View\\Admin\Login\change.html" */ ?>
<?php /*%%SmartyHeaderCode:1932859be7cdbebd825-82889786%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '19be6ab4612b85d5d60d4452039d97ea34e38ac2' => 
    array (
      0 => 'D:\\blog\\Application\\View\\\\Admin\\Login\\change.html',
      1 => 1505656687,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1932859be7cdbebd825-82889786',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_59be7cdbeebb45_95783017',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59be7cdbeebb45_95783017')) {function content_59be7cdbeebb45_95783017($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./Public/admin/css/ch-ui.admin.css">
    <link rel="stylesheet" href="./Public/admin/font/css/font-awesome.min.css">
    <title>Title</title>
</head>
<body>
    <form action="index.php?p=admin&c=login&a=changepwd" method="post">
        <table>
            <tr>
                <td>用户名:</td>
                <td><input type="text" name="uname" readonly value="<?php ob_start();?><?php echo $_SESSION['userinfo']['uname'];?>
<?php $_tmp1=ob_get_clean();?><?php echo $_tmp1;?>
"></td>
            </tr>
            <tr>
                <td>请输入原始密码:</td>
                <td><input type="password" name="pwdy"></td>
            </tr>
            <tr>
                <td>请输入新密码:</td>
                <td><input type="password" name="pwd1"></td>
            </tr>
            <tr>
                <td>请再次输入新密码:</td>
                <td><input type="password" name="pwd2" ></td>
            </tr>
            <tr>
                <td>
                    验证码：
                </td>
                <td>
                    <input type="text" class="code" name="code"/>
                    <span><i class="fa fa-check-square-o"></i></span>
                    <img
                            onclick="this.src='index.php?p=admin&c=login&a=captcha&t='+Math.random()"
                            src="index.php?p=admin&c=login&a=captcha"
                            alt="图片不存在"
                            title="看不清，点击切换"
                            style="cursor: pointer"
                    />
                </td>
            </tr>
            <tr>
                <td><input type="submit" ></td>
            </tr>
        </table>
    </form>
</body>
</html><?php }} ?>
