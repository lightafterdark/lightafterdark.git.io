<?php /* Smarty version Smarty-3.1-DEV, created on 2017-09-19 15:08:12
         compiled from "D:\blog\Application\View\\Admin\User\add.html" */ ?>
<?php /*%%SmartyHeaderCode:2734159bc91a8e9f960-54289797%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f924598545901dda83aad2fa268fd701193354c' => 
    array (
      0 => 'D:\\blog\\Application\\View\\\\Admin\\User\\add.html',
      1 => 1505804886,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2734159bc91a8e9f960-54289797',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_59bc91a8ec28a0_23579375',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59bc91a8ec28a0_23579375')) {function content_59bc91a8ec28a0_23579375($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./Public/admin/css/ch-ui.admin.css">
    <link rel="stylesheet" href="./Public/admin/font/css/font-awesome.min.css">
</head>
<body>
    <!--面包屑导航 开始-->
    <div class="crumb_warp">
        <i class="fa fa-home"></i> <a href="#">首页</a> &raquo; 添加用户
    </div>
    <!--面包屑导航 结束-->
    
    <div class="result_wrap">
        <form action="index.php?p=admin&c=user&a=add" method="post" enctype="multipart/form-data">
            <table class="add_tab">
                <tbody>
                    <tr>
                        <th><i class="require">*</i>用户姓名：</th>
                        <td>
                            <input type="text" class="lg" name="name">
                        </td>
                    </tr>
                    <tr>
                        <th><i class="require touxiang">*</i>缩略图：</th>
                        <td><input type="file" name="img" id="file1" onchange="previewFile(1)">
                            <img src="" id="img1" height="200" width="300" alt="Image preview..."/></td>
                    </tr>
                    <tr>
                        <th><i class="require">*</i>登录账户：</th>
                        <td>
                            <input type="text" name="user">
                        </td>
                    </tr>
                    <tr>
                        <th><i class="require">*</i>密码：</th>
                        <td>
                            <input type="password" name="pwd">
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

</script><?php }} ?>
