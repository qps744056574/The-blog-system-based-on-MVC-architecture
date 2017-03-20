<?php
/* Smarty version 3.1.30, created on 2017-03-12 18:46:11
  from "D:\wamp\wamp\www\2.28MVC\mvc_blog\template\index\notice.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c58963482c82_36569897',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6147223d8bdf5c9eeb3e45b1ba0925e291196ccb' => 
    array (
      0 => 'D:\\wamp\\wamp\\www\\2.28MVC\\mvc_blog\\template\\index\\notice.html',
      1 => 1488990556,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c58963482c82_36569897 (Smarty_Internal_Template $_smarty_tpl) {
?>
<style>
    .notice-login{
        padding:30px 0;
        width:200px;
        background: #ccc;
        border-radius: 10px;
        text-align: center;
        line-height: 20px;
        position: fixed;
        left:0;top:40%;right:0;bottom: 40%;
        margin:auto;
        display: none;
        box-sizing: border-box;
    }
</style>
<div class="notice-login">
    请先 <a href="index.php?m=index&f=login&a=init">登陆</a>
    再进行操作<br>
    <a href="javascript:;" class="btn btn-danger quxiao" style="margin-top:5px;">取消登陆</a>
</div><?php }
}
