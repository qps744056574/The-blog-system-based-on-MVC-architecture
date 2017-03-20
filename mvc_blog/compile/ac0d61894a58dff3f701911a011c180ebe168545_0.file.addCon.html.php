<?php
/* Smarty version 3.1.30, created on 2017-03-12 18:49:56
  from "D:\wamp\wamp\www\2.28MVC\mvc_blog\template\admin\addCon.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c58a4472fd30_44493873',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac0d61894a58dff3f701911a011c180ebe168545' => 
    array (
      0 => 'D:\\wamp\\wamp\\www\\2.28MVC\\mvc_blog\\template\\admin\\addCon.html',
      1 => 1489236264,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c58a4472fd30_44493873 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
pintuer.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
admin.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
pintuer.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
ajax_upload.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
index/admin.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="<?php echo HTTP_URL;?>
/static/editor/ueditor.config.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="<?php echo HTTP_URL;?>
/static/editor/ueditor.all.min.js"> <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="<?php echo HTTP_URL;?>
/static/editor/lang/zh-cn/zh-cn.js"><?php echo '</script'; ?>
>
    <style>
        #wrap{
            width: 100px;
            height:100px;
            float: left;
            border: 1px solid #ccc;
        }
        #wrap img{
            width:100%;
        }
    </style>
</head>
<body>
<div class="panel admin-panel">
    <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>添加文章</strong></div>
    <div class="body-content">
        <form method="post" class="form-x" action="index.php?m=admin&f=show&a=addConCheck">
            <div class="form-group">
                <div class="label">
                    <label>上级分类：</label>
                </div>
                <div class="field">
                    <select name="cid" class="input w50">
                        <option value="0">一级分类</option>
                        <?php echo $_smarty_tpl->tpl_vars['str']->value;?>

                    </select>
                    <div class="tips">选择文章类型</div>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>文章标题：</label>
                </div>
                <div class="field">
                    <input type="text" class="input w50" name="stitle" />
                    <div class="tips"></div>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>文章描述：</label>
                </div>
                <div class="field">
                    <input type="text" class="input" name="sdesc"/>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>封面缩略图：</label>
                </div>
                <div class="field">
                    <input type="hidden" name="hidden" id="hidden" value="" />
                    <input type="file" name="file" value="" multiple="multiple" class="file"/>
                </div>
                <div id="wrap">
                    <img src="" alt="" class="uploadImg"/>
                </div>
            </div>
            <div class="label" style="margin-left:35px">
                <label>文章内容：</label>
            </div>
            <?php echo '<script'; ?>
  id="editor" type="text/plain" style="width:970px;height:500px;margin-left:110px" name="scon"><?php echo '</script'; ?>
>
            <div class="form-group">
                <div class="label" style="width: 10%">
                    <label></label>
                </div>
                <div class="field">
                    <button class="button bg-main icon-check-square-o" type="submit"> 提交</button>
                </div>
            </div>
        </form>
    </div>
</div>
</body>
</html><?php }
}
