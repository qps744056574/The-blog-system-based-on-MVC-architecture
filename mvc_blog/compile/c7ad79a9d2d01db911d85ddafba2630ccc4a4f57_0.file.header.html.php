<?php
/* Smarty version 3.1.30, created on 2017-03-12 18:46:11
  from "D:\wamp\wamp\www\2.28MVC\mvc_blog\template\index\header.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c5896345e8f0_81746038',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c7ad79a9d2d01db911d85ddafba2630ccc4a4f57' => 
    array (
      0 => 'D:\\wamp\\wamp\\www\\2.28MVC\\mvc_blog\\template\\index\\header.html',
      1 => 1489238076,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c5896345e8f0_81746038 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
index/base.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
index/blog.css">
</head>
<body>
<nav class="navbar" id="nav">
    <div class="width-limit">
        <a href="index.php" id="logo" style="font-size: 18px">Mr.杨的博客</a>
        <?php if ($_smarty_tpl->tpl_vars['indexLogin']->value == "yes") {?>
        <a href="index.php?m=index&f=art&a=addArt" class="btn write_btn">发布文章</a>
        <a href="index.php?a=indexExit" class="btn sign_out">退出</a>
        <a href="index.php?m=index&f=index&a=home" class="btn sign_person">个人中心</a>
        <span class="huan">欢迎<i><?php echo $_smarty_tpl->tpl_vars['uname']->value;?>
</i></span>
        <?php } else { ?>
        <a href="index.php?m=index&f=art&a=addArt" class="btn write_btn">发布文章</a>
        <a href="index.php?m=index&f=login&a=reg" class="btn sign_up">注册</a>
        <a href="index.php?m=index&f=login&a=init" class="btn sign_in">登录</a>
        <?php }?>
    </div>
<?php }
}
