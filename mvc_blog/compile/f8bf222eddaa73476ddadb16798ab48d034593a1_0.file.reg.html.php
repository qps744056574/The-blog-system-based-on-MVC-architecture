<?php
/* Smarty version 3.1.30, created on 2017-03-12 19:03:09
  from "D:\wamp\wamp\www\2.28MVC\mvc_blog\template\index\reg.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c58d5d53eef6_35666979',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f8bf222eddaa73476ddadb16798ab48d034593a1' => 
    array (
      0 => 'D:\\wamp\\wamp\\www\\2.28MVC\\mvc_blog\\template\\index\\reg.html',
      1 => 1489341786,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c58d5d53eef6_35666979 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="keywords">
    <meta name="description">
    <link rel="shortcut icon" href="<?php echo HTTP_URL;?>
/static/resources/images/favicon.ico" />
    <link href="<?php echo HTTP_URL;?>
/static/resources/style/style.css" rel="stylesheet" type="text/css" />
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo HTTP_URL;?>
/static/resources/js/jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo HTTP_URL;?>
/static/resources/js/jquery.i18n.properties-1.0.9.js" ><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo HTTP_URL;?>
/static/resources/js/jquery-ui-1.10.3.custom.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo HTTP_URL;?>
/static/resources/js/jquery.validate.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo HTTP_URL;?>
/static/resources/js/md5.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo HTTP_URL;?>
/static/resources/js/page_regist.js?lang=zh"><?php echo '</script'; ?>
>
    <!--[if IE]>
    <?php echo '<script'; ?>
 src="<?php echo HTTP_URL;?>
/static/resources/js/html5.js"><?php echo '</script'; ?>
>
    <![endif]-->
    <!--[if lte IE 6]>
    <?php echo '<script'; ?>
 src="<?php echo HTTP_URL;?>
/static/resources/js/DD_belatedPNG_0.0.8a-min.js" language="javascript"><?php echo '</script'; ?>
>
    <style>
        .loginbox .logo-a{
            line-height: 150px;
        }
    </style>
    <?php echo '<script'; ?>
>
        DD_belatedPNG.fix('div,li,a,h3,span,img,.png_bg,ul,input,dd,dt');
    <?php echo '</script'; ?>
>
    <![endif]-->
    <?php echo '<script'; ?>
>
        window.onload=function () {
            console.log($("#signupForm").removeAttr("novalidate"));
        }
    <?php echo '</script'; ?>
>
</head>
<body class="loginbody">
<div class="dataEye">
    <div class="loginbox registbox">
        <div class="login-content reg-content">
            <div class="loginbox-title">
                <h3>注册</h3>
            </div>
            <form id="signupForm" action="index.php?m=index&f=login&a=checkReg" method="post">
                <div class="login-error"></div>
                <div class="row">
                    <label class="field" for="username">用户名</label>
                    <input type="text" value="" class="input-text-user noPic input-click" name="username" id="email">
                </div>
                <div class="row">
                    <label class="field" for="password">密码</label>
                    <input type="password" value="" class="input-text-password noPic input-click" name="password" id="password">
                </div>
                <div class="row">
                    <label class="field" for="passwordAgain">确认密码</label>
                    <input type="password" value="" class="input-text-password noPic input-click" name="passwordAgain" id="passwordAgain">
                </div>
                <div class="row btnArea">
                    <!--<a class="login-btn" id="submit">注册</a>-->
                    <input type="submit" value="注册" class="login-btn">
                </div>
            </form>
        </div>
        <div class="go-regist">
            已有帐号,请<a href="index.php?&m=index&f=login&a=init" class="link">登录</a>
        </div>
    </div>

    <div id="footer">
        <div class="dblock">

            <div class="inline-block copyright">
                <p><a href="#">关于我们</a> | <a href="#">微博</a> | <a href="#">隐私政策</a> | <a href="#">人员招聘</a></p>
                <p> Copyright © 2013 Mr.杨——BLOG</p>
            </div>
        </div>
    </div>
</div>
<div class="loading">
    <div class="mask">
        <div class="loading-img">
            <img src="static/resources/images/loading.gif" width="31" height="31">
        </div>
    </div>
</div>
</body>
</html>

<?php }
}
