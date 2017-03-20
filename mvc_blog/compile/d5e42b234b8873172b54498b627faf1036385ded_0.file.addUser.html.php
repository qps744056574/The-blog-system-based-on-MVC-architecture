<?php
/* Smarty version 3.1.30, created on 2017-03-12 18:49:43
  from "D:\wamp\wamp\www\2.28MVC\mvc_blog\template\admin\addUser.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c58a37c6f616_62886701',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5e42b234b8873172b54498b627faf1036385ded' => 
    array (
      0 => 'D:\\wamp\\wamp\\www\\2.28MVC\\mvc_blog\\template\\admin\\addUser.html',
      1 => 1488865950,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c58a37c6f616_62886701 (Smarty_Internal_Template $_smarty_tpl) {
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
jquery-1.9.0.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery.validate.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
adduser.js"><?php echo '</script'; ?>
>
    <style>
        #upass-error,#uname-error{
            color: #ee3333;
        }
    </style>
</head>
<body>
<div class="panel admin-panel margin-top" id="add">
    <div class="panel-head"><strong><span class="icon-pencil-square-o"></span> 添加用户</strong></div>
    <div class="body-content">
        <form method="post" class="form-x" action="index.php?m=admin&f=user&a=addUserCheck" id="adduser">
            <div class="form-group">
                <div class="label">
                    <label>用户名：</label>
                </div>
                <div class="field">
                    <input type="text" class="input w50" value="" name="uname" />
                    <div class="tips"></div>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>密码：</label>
                </div>
                <div class="field">
                    <input type="text" class="input w50" name="upass" value=""  />
                    <div class="tips"></div>
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
