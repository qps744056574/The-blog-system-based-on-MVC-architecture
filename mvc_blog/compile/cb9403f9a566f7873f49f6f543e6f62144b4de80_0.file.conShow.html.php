<?php
/* Smarty version 3.1.30, created on 2017-03-12 18:52:28
  from "D:\wamp\wamp\www\2.28MVC\mvc_blog\template\admin\conShow.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c58adc929721_61285181',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb9403f9a566f7873f49f6f543e6f62144b4de80' => 
    array (
      0 => 'D:\\wamp\\wamp\\www\\2.28MVC\\mvc_blog\\template\\admin\\conShow.html',
      1 => 1488950977,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c58adc929721_61285181 (Smarty_Internal_Template $_smarty_tpl) {
?>
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
    <div class="panel-head"><strong class="icon-reorder"> 内容列表</strong></div>
    <div class="padding border-bottom">
        <button type="button" class="button border-yellow" onclick="window.location.href='index.php?m=admin&f=show&a=addCon'"><span class="icon-plus-square-o"></span> 添加内容</button>
    </div>
    <table class="table table-hover text-center">
        <tr>
            <th width="5%">ID</th>
            <th width="10%">所属分类</th>
            <th width="10%">标题</th>
            <th width="10%">描述</th>
            <th width="5%">分类ID</th>
            <th width="10%">作者</th>
            <th width="15%">时间</th>
            <th width="5%">点击</th>
            <th width="5%">点赞</th>
            <th width="10%">状态</th>
            <th width="20%">操作</th>
        </tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value["sid"];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value["cname"];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value["stitle"];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value["sdesc"];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value["cid"];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value["author"];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value["time"];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value["hits"];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value["good"];?>
</td>
            <td>
                <?php if ($_smarty_tpl->tpl_vars['v']->value["statu"] == 0) {?>
                未审核
                <?php } elseif ($_smarty_tpl->tpl_vars['v']->value["statu"] == 1) {?>
                审核中
                <?php } elseif ($_smarty_tpl->tpl_vars['v']->value["statu"] == 2) {?>
                没有通过审核
                <?php } elseif ($_smarty_tpl->tpl_vars['v']->value["statu"] == 3) {?>
                审核通过
                <?php }?>
            </td>
            <td><div class="button-group">
                <a class="button border-main" href="index.php?m=admin&f=show&a=editCon&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['sid'];?>
"><span class="icon-edit"></span>查看</a>
                <a class="button border-red" href="index.php?m=admin&f=show&a=del&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['sid'];?>
"><span class="icon-trash-o"></span> 删除</a>
            </div></td>
        </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </table>
    <?php echo $_smarty_tpl->tpl_vars['pages']->value;?>

</div>

</body>
</html><?php }
}
