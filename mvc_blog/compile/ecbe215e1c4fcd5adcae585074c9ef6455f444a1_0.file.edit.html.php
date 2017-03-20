<?php
/* Smarty version 3.1.30, created on 2017-03-12 18:50:13
  from "D:\wamp\wamp\www\2.28MVC\mvc_blog\template\admin\edit.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c58a55012295_65847938',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ecbe215e1c4fcd5adcae585074c9ef6455f444a1' => 
    array (
      0 => 'D:\\wamp\\wamp\\www\\2.28MVC\\mvc_blog\\template\\admin\\edit.html',
      1 => 1488813450,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c58a55012295_65847938 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title></title>
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
</head>
<body>
<div class="panel admin-panel">
    <div class="panel-head"><strong class="icon-reorder">栏目列表</strong></div>
    <div class="padding border-bottom">
        <button type="button" class="button border-yellow" onclick="window.location.href='index.php?m=admin&f=catagory&a=addcatagory'"><span class="icon-plus-square-o"></span> 添加栏目</button>
    </div>
    <table class="table table-hover text-center">
        <tr>
            <th width="10%">ID</th>
            <th width="20%">名称</th>
            <th width="15%">PID</th>
            <th width="10%">关键字</th>
            <th width="10%">描述</th>
            <th width="20%">图片</th>
            <th width="15%">操作</th>
        </tr>
        <?php echo $_smarty_tpl->tpl_vars['str']->value;?>


    </table>
</div>

</body>
</html><?php }
}
