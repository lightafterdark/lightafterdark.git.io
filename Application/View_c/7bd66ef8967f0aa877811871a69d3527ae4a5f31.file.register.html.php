<?php /* Smarty version Smarty-3.1-DEV, created on 2017-09-21 08:13:20
         compiled from "D:\blog\Application\View\\Home\Login\register.html" */ ?>
<?php /*%%SmartyHeaderCode:2408359c0c9b4183b84-00285093%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7bd66ef8967f0aa877811871a69d3527ae4a5f31' => 
    array (
      0 => 'D:\\blog\\Application\\View\\\\Home\\Login\\register.html',
      1 => 1505952791,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2408359c0c9b4183b84-00285093',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_59c0c9b41b88e8_36521271',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c0c9b41b88e8_36521271')) {function content_59c0c9b41b88e8_36521271($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<title></title>
<meta http-equiv="content-Type" content="text/html" charset="utf-8">
	<link rel="stylesheet" href="./Public/home/css/register.css">
</head>
<body>
<div class="bb">
	<h1 id="shan">欢迎注册</h1>
</div>
<div class="register">
	<form method="post" enctype="multipart/form-data" action="index.php?p=home&c=login&a=register" id="#mainForm2">
		<table align="center">
			<tr>
				<td align="right">姓名:</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td align="right">请上传头像:</td>
				<td><input type="file" name="img" id="file1" onchange="previewFile(1)">
					<img src="" id="img1" height="50" width="50" alt="Image preview..."/></td>

			</tr>
			<tr>
				<td align="right">用户名:</td>
				<td><input type="text" name="uname"> </td>
			</tr>

			<tr>
				<td align="right">密码:</td>
				<td><input type="password" name="pwd"> </td>
			</tr>
			<tr>
				<td colspan="2"><a  onclick="document.getElementById('#mainForm2').submit();" class="fullBtnBlue">注册</a></td>


			</tr>
		</table>
	</form>
</div>

<div class="tips">
	<a href="index.php?p=home&a=login&c=login"><h1 align="center">已有账号去登录</h1></a>
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
</script>

<?php }} ?>
