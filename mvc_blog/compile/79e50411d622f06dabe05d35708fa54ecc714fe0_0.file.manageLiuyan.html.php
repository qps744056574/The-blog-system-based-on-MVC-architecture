<?php
/* Smarty version 3.1.30, created on 2017-03-12 18:49:34
  from "D:\wamp\wamp\www\2.28MVC\mvc_blog\template\admin\manageLiuyan.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c58a2e2d7764_96001827',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '79e50411d622f06dabe05d35708fa54ecc714fe0' => 
    array (
      0 => 'D:\\wamp\\wamp\\www\\2.28MVC\\mvc_blog\\template\\admin\\manageLiuyan.html',
      1 => 1489226681,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c58a2e2d7764_96001827 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
index/bootstrap.css">
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
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<table class="table table-condensed text-center">
    <tr>
        <th>id</th>
        <th>留言者</th>
        <th>被留言者</th>
        <th>文章id</th>
        <th>pid</th>
        <th>时间</th>
        <th>内容</th>
        <th>操作</th>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["mid"];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["uid1"];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["uid2"];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["sid"];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["pid"];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["mtime"];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["mcon"];?>
</td>
        <td>
            <div class="button-group">
                <a class="button border-red" href="index.php?m=admin&f=jibenSet&a=del&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['mid'];?>
"><span class="icon-trash-o"></span> 删除</a>
            </div>
        </td>
    </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</table>
<?php echo $_smarty_tpl->tpl_vars['pages']->value;?>

</body>
</html><?php }
}
