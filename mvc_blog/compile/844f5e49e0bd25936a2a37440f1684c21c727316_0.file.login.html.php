<?php
/* Smarty version 3.1.30, created on 2017-03-12 19:01:56
  from "D:\wamp\wamp\www\2.28MVC\mvc_blog\template\index\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c58d1408b657_59732848',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '844f5e49e0bd25936a2a37440f1684c21c727316' => 
    array (
      0 => 'D:\\wamp\\wamp\\www\\2.28MVC\\mvc_blog\\template\\index\\login.html',
      1 => 1488766675,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c58d1408b657_59732848 (Smarty_Internal_Template $_smarty_tpl) {
?>

<!DOCTYPE html>
<html lang="en" class="no-js">

<head>

    <meta charset="utf-8">
    <title>Fullscreen Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSS -->
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=PT+Sans:400,700'>
    <link rel="stylesheet" href="<?php echo HTTP_URL;?>
/static/assets/css/reset.css">
    <link rel="stylesheet" href="<?php echo HTTP_URL;?>
/static/assets/css/supersized.css">
    <link rel="stylesheet" href="<?php echo HTTP_URL;?>
/static/assets/css/style.css">
    <style>
        form{
            position: relative;
        }
        #zhuce a{
            width: 40px;
        }
        img{
            margin-right:0px;
            position: absolute;
            bottom:70px;
            right:-98px;
        }
    </style>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <?php echo '<script'; ?>
 src="http://html5shim.googlecode.com/svn/trunk/html5.js"><?php echo '</script'; ?>
>
    <![endif]-->

</head>

<body>

<div class="page-container">
    <h1>登录</h1>
    <form action="index.php?m=index&f=login&a=check" method="post">
        <input type="text" name="username" class="username" placeholder="用户名">
        <input type="password" name="pass" class="password" placeholder="密码">
        <img src="index.php?m=admin&f=index&a=code" alt="" width="100px" height="50px" onclick="this.src='index.php?m=admin&f=index&a=code&'+Math.random()">
        <input type="text" name="code" class="password" placeholder="验证码">
        <button type="submit">登录</button>
        <div class="error"><span>+</span></div>
    </form>
    <div class="connect">
        <p id="zhuce">没有账号？点击<a href="index.php?m=index&f=login&a=reg">注册</a></p>
        <!--  <p>
             <a class="facebook" href=""></a>
             <a class="twitter" href=""></a>
         </p> -->
    </div>
</div>
<!-- <div align="center">Collect from <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a></div> -->

<!-- Javascript -->
<?php echo '<script'; ?>
 src="<?php echo HTTP_URL;?>
/static/assets/js/jquery-1.8.2.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo HTTP_URL;?>
/static/assets/js/supersized.3.2.7.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo HTTP_URL;?>
/static/assets/js/supersized-init.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo HTTP_URL;?>
/static/assets/js/scripts.js"><?php echo '</script'; ?>
>

</body>

</html>

<?php }
}
