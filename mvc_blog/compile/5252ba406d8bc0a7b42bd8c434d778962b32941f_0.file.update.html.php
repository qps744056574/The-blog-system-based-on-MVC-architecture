<?php
/* Smarty version 3.1.30, created on 2017-03-12 18:50:21
  from "D:\wamp\wamp\www\2.28MVC\mvc_blog\template\admin\update.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c58a5d54c144_17542535',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5252ba406d8bc0a7b42bd8c434d778962b32941f' => 
    array (
      0 => 'D:\\wamp\\wamp\\www\\2.28MVC\\mvc_blog\\template\\admin\\update.html',
      1 => 1488818106,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c58a5d54c144_17542535 (Smarty_Internal_Template $_smarty_tpl) {
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
        <form method="post" class="form-x" action="index.php?m=admin&f=catagory&a=updateCheck&id=<?php echo $_smarty_tpl->tpl_vars['cid']->value;?>
">
            <div class="form-group">
                <div class="label">
                    <label>上级分类：</label>
                </div>
                <div class="field">
                    <select name="pid" class="input w50">
                        <option value="0">一级分类</option>
                        <?php echo $_smarty_tpl->tpl_vars['str']->value;?>

                    </select>
                    <div class="tips"></div>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>分类名称：</label>
                </div>
                <div class="field">
                    <input type="text" class="input w50" name="cname" value="<?php echo $_smarty_tpl->tpl_vars['cname']->value;?>
"/>
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
                    <input type="text" class="input" name="ckeyWords" value="<?php echo $_smarty_tpl->tpl_vars['ckeyWords']->value;?>
"/>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>文字描述：</label>
                </div>
                <div class="field">
                    <input type="text" class="input" name="cdesc" value="<?php echo $_smarty_tpl->tpl_vars['cdesc']->value;?>
"/>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>上传图片：</label>
                </div>
                <div class="field">
                    <input type="hidden" name="hidden" id="hidden" value="<?php echo $_smarty_tpl->tpl_vars['cimg']->value;?>
" />
                    <input type="file" name="file" value="" multiple="multiple" class="file"/>
                </div>
                <div id="wrap">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['cimg']->value;?>
" alt="" class="uploadImg"/>
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
