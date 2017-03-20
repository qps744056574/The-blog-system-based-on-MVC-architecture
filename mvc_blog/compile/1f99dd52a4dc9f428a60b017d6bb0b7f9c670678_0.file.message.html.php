<?php
/* Smarty version 3.1.30, created on 2017-03-12 18:48:29
  from "D:\wamp\wamp\www\2.28MVC\mvc_blog\template\admin\message.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c589eda13302_12977549',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f99dd52a4dc9f428a60b017d6bb0b7f9c670678' => 
    array (
      0 => 'D:\\wamp\\wamp\\www\\2.28MVC\\mvc_blog\\template\\admin\\message.html',
      1 => 1488526259,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c589eda13302_12977549 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    <title></title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
message.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
message.js"><?php echo '</script'; ?>
>
    <!--<?php echo '<?php ';?>session_start(); <?php echo '?>';?>-->
    <div class="box">
        <div class="title">提示信息</div>
        <div class="con">
            <p><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</p>
            <span>5</span>秒后自动跳转
            <p>如果不跳转，<a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
">点击此处</a></p>
        </div>
    </div>
</head>
</html><?php }
}
