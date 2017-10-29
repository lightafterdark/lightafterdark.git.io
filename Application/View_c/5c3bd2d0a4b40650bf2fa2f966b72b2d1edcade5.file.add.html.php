<?php /* Smarty version Smarty-3.1-DEV, created on 2017-09-19 19:12:01
         compiled from "D:\blog\Application\View\\Admin\Article\add.html" */ ?>
<?php /*%%SmartyHeaderCode:806659bc91b453a4d7-11529349%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5c3bd2d0a4b40650bf2fa2f966b72b2d1edcade5' => 
    array (
      0 => 'D:\\blog\\Application\\View\\\\Admin\\Article\\add.html',
      1 => 1505819513,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '806659bc91b453a4d7-11529349',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_59bc91b457a2c5_92086878',
  'variables' => 
  array (
    'cateList' => 0,
    'cate' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59bc91b457a2c5_92086878')) {function content_59bc91b457a2c5_92086878($_smarty_tpl) {?><!DOCTYPE html>
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
        <i class="fa fa-home"></i> <a href="#">首页</a> &raquo; 添加文章
    </div>
    <!--面包屑导航 结束-->
    
    <div class="result_wrap">
        <form action="index.php?p=admin&c=article&a=add" method="post" enctype="multipart/form-data">
            <table class="add_tab">
                <tbody>
                    <tr>
                        <th width="120"><i class="require">*</i>分类：</th>
                        <td>
                            <select name="cid">
                                <option value="0">==请选择==</option>
                                <?php  $_smarty_tpl->tpl_vars['cate'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cate']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cateList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cate']->key => $_smarty_tpl->tpl_vars['cate']->value) {
$_smarty_tpl->tpl_vars['cate']->_loop = true;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['cate']->value['id'];?>
">
                                    <?php echo str_repeat('&nbsp',$_smarty_tpl->tpl_vars['cate']->value['level']*4);?>
<?php echo $_smarty_tpl->tpl_vars['cate']->value['name'];?>

                                </option>
                                <?php } ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th><i class="require">*</i>标题：</th>
                        <td>
                            <input type="text" class="lg" name="title">
                            <p>标题可以写30个字</p>
                        </td>
                    </tr>
                    <tr>
                        <th><i class="require">*</i>缩略图：</th>
                        <td><input type="file" name="img" id="file1" onchange="previewFile(1)">
                        <img src="" id="img1" height="200" width="300" alt="Image preview..."/></td>
                    </tr>
                    <tr>
                        <th>作者：</th>
                        <td>
                            <input type="text" name="author">
                        </td>
                    </tr>
                    <tr>
                        <th>描述：</th>
                        <td>
                            <textarea name="desc"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <th>文章内容：</th>
                        <td>
                            <textarea class="lg" name="content" id="editor"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <th title="推荐将在首页显示">是否推荐：</th>
                        <td>
                            <label for=""><input type="radio" name="is_tuijian" value="1">推荐</label>
                            <label for=""><input type="radio" name="is_tuijian" value="0">不推荐</label>
                        </td>
                    </tr>
                    <tr>
                        <th>是否显示：</th>
                        <td>
                            <label for=""><input type="radio" name="display" value="0">隐藏</label>
                            <label for=""><input type="radio" name="display" value="1">显示</label>
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

</script>
<script type="text/javascript" src="./Public/common/ueditor/ueditor.config.js"></script>
<script type="text/javascript" src="./Public/common/ueditor/ueditor.all.js"></script>
<script type="text/javascript">
    var ue=UE.getEditor('editor',{
        initialFrameWidth:1000

    })
</script><?php }} ?>
