<?php /* Smarty version Smarty-3.1-DEV, created on 2017-09-21 08:24:31
         compiled from "D:\blog\Application\View\\Admin\Login\changepwd.html" */ ?>
<?php /*%%SmartyHeaderCode:128059bce63bbe9e52-88304764%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d6c1f3d37569ebac9e6e653edec24146c461d8d' => 
    array (
      0 => 'D:\\blog\\Application\\View\\\\Admin\\Login\\changepwd.html',
      1 => 1505953469,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '128059bce63bbe9e52-88304764',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_59bce63bc132a4_48239732',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59bce63bc132a4_48239732')) {function content_59bce63bc132a4_48239732($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta http-equiv="content-Type" content="text/html" charset="utf-8">
    <link rel="stylesheet" href="./Public/admin/css/change.css">
</head>
<body>
<div class="bb">
    <h1 id="shan">blog</h1>
</div>
<div class="register">
    <form method="post"  action="index.php?p=admin&c=login&a=changepwd" id="mainForm">
        <table align="center">
            <tr>
                <td align="right">管理员账户:</td>
                <td><input type="text" name="uname"></td>
            </tr>
            <tr>
                <td align="right">请输入原始密码</td>
                <td><input type="password" name="pwdy"> </td>
            </tr>

            <tr>
                <td align="right">请输入新密码:</td>
                <td><input type="password" name="pwd1"> </td>
            </tr>
            <tr>
                <td align="right">请再次确认新密码:</td>
                <td><input type="password" name="pwd2"> </td>
            </tr>
            <tr>
                <td colspan="2">
                    <a  onclick="document.getElementById('mainForm').submit();" class="button">修改密码</a>
                </td>
            </tr>
        </table>


    </form>
</div>


</body>
</html>
<script>
    function previewFile(num) {
        var preview = document.querySelector('#img'+num);
        var file  = document.querySelector('#file'+num).files[0];
        // console.log(file);
        //HTML5定义了FileReader作为文件API的重要成员用于读取文件
        var reader = new FileReader();
        // console.log(reader);
        if (file) {
            reader.readAsDataURL(file);
        } else {
            preview.src = "";
        }
        reader.onloadend = function () {
            preview.src = reader.result;
        }

    }

</script>
<script>
    var h3=document.querySelector('#shan');
    setInterval(function(){
        var a=Math.ceil(Math.random()*255);
        var b=Math.ceil(Math.random()*255);
        var c=Math.ceil(Math.random()*255);
        h3.style.transition="color 0.5s"

        h3.style.color='rgb('+a+','+b+','+c+')';
    },1000);
</script><?php }} ?>
