<?php
/* Smarty version 3.1.30, created on 2017-03-12 18:50:07
  from "D:\wamp\wamp\www\2.28MVC\mvc_blog\template\admin\addcatagory.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c58a4f28cea3_18192497',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd969031ea252d3446012c0f46c25617b4f3cb277' => 
    array (
      0 => 'D:\\wamp\\wamp\\www\\2.28MVC\\mvc_blog\\template\\admin\\addcatagory.html',
      1 => 1488809481,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c58a4f28cea3_18192497 (Smarty_Internal_Template $_smarty_tpl) {
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
admin.js"><?php echo '</script'; ?>
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
<div class="panel admin-panel margin-top">
    <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>添加分类</strong></div>
    <div class="body-content">
        <form method="post" class="form-x" action="index.php?m=admin&f=catagory&a=addCatagoryCheck">
            <div class="form-group">
                <div class="label">
                    <label>上级分类：</label>
                </div>
                <div class="field">
                    <select name="pid" class="input w50">
                        <option value="0">一级分类</option>
                        <?php echo $_smarty_tpl->tpl_vars['str']->value;?>

                    </select>
                    <div class="tips">不选择上级分类默认为一级分类</div>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>分类名称：</label>
                </div>
                <div class="field">
                    <input type="text" class="input w50" name="cname" />
                    <div class="tips"></div>
                </div>
            </div>
            <!--<div class="form-group">-->
                <!--<div class="label">-->
                    <!--<label>批量添加：</label>-->
                <!--</div>-->
                <!--<div class="field">-->
                    <!--<textarea type="text" class="input w50" name="tits" style="height:150px;" placeholder="多个分类标题请转行"></textarea>-->
                    <!--<div class="tips">多个分类标题请转行</div>-->
                <!--</div>-->
            <!--</div>-->
            <div class="form-group">
                <div class="label">
                    <label>关键字：</label>
                </div>
                <div class="field">
                    <input type="text" class="input" name="ckeyWords" />
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>文字描述：</label>
                </div>
                <div class="field">
                    <input type="text" class="input" name="cdesc"/>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>上传图片：</label>
                </div>
                <div class="field">
                    <input type="hidden" name="hidden" id="hidden" value="" />
                    <input type="file" name="file" value="" multiple="multiple" class="file"/>
                </div>
                <div id="wrap">
                    <img src="" alt="" class="uploadImg"/>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
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
