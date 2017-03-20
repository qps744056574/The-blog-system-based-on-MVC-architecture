<?php
/* Smarty version 3.1.30, created on 2017-03-12 18:49:45
  from "D:\wamp\wamp\www\2.28MVC\mvc_blog\template\admin\editUser.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c58a396fbc51_74515530',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '56802db2a3f0872a0cba6b7f3a484b47851a19bb' => 
    array (
      0 => 'D:\\wamp\\wamp\\www\\2.28MVC\\mvc_blog\\template\\admin\\editUser.html',
      1 => 1488937995,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c58a396fbc51_74515530 (Smarty_Internal_Template $_smarty_tpl) {
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
    <div class="panel-head"><strong class="icon-reorder">用户列表</strong></div>
    <div class="padding border-bottom">
        <button type="button" class="button border-yellow" onclick="window.location.href='index.php?m=admin&f=user&a=addUser'"><span class="icon-plus-square-o"></span>添加用户</button>
    </div>
    <table class="table table-hover text-center">
        <tr>
            <th width="10%">ID</th>
            <th width="20%">用户名</th>
            <th width="15%">密码</th>
            <th width="20%">头像</th>
            <th width="15%">操作</th>
        </tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value["uid"];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value["uname"];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value["upass"];?>
</td>
            <td style='height: 67px'><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['picture'];?>
" alt='' style='width:auto;height:auto;max-width:100%;max-height:100%'/></td>
            <td>
                <div class='button-group'>
                    <a class='button border-main' href='index.php?m=admin&f=user&a=update&id=<?php echo $_smarty_tpl->tpl_vars['v']->value["uid"];?>
'><span class='icon-edit'></span> 修改</a>
                    <a class='button border-red' href='index.php?m=admin&f=user&a=delete&id=<?php echo $_smarty_tpl->tpl_vars['v']->value["uid"];?>
'><span class='icon-trash-o'></span> 删除</a>
                </div>
            </td>
        </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </table>
</div>

</body>
</html><?php }
}
