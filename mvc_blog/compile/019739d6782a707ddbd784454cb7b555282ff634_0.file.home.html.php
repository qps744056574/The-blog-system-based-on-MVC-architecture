<?php
/* Smarty version 3.1.30, created on 2017-03-12 18:58:40
  from "D:\wamp\wamp\www\2.28MVC\mvc_blog\template\index\home.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c58c50dfed18_10599094',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '019739d6782a707ddbd784454cb7b555282ff634' => 
    array (
      0 => 'D:\\wamp\\wamp\\www\\2.28MVC\\mvc_blog\\template\\index\\home.html',
      1 => 1489341518,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/header.html' => 1,
  ),
),false)) {
function content_58c58c50dfed18_10599094 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender("file:index/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</nav>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
index/bootstrap.css">
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
index/home.css">
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
index/home.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
ajax_upload.js"><?php echo '</script'; ?>
>
<div class="container person">
    <div class="row">
        <div class="col-xs-8">
            <div class="main_top">
                <a href="" class="head_img">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['result1']->value[0]['picture'];?>
" alt="" class="picture">
                </a>
                <div class="title">
                    <a href="" class="name"><?php echo $_smarty_tpl->tpl_vars['result1']->value[0]['uname'];?>
</a>
                </div>
                <div class="info">
                    <ul>
                        <li>
                            <div class="meta-info text-center">
                                <a href="">
                                    <span><?php echo count($_smarty_tpl->tpl_vars['resultFoucu']->value);?>
</span>
                                    关注
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="meta-info text-center">
                                <a href="">
                                    <span><?php echo count($_smarty_tpl->tpl_vars['resultFans']->value);?>
</span>
                                    粉丝
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="meta-info text-center">
                                <a href="">
                                    <span><?php echo count($_smarty_tpl->tpl_vars['result']->value);?>
</span>
                                    文章发布
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="meta-info text-center">
                                <a href="">
                                    <span><?php echo count($_smarty_tpl->tpl_vars['resultLove']->value);?>
</span>
                                    收藏
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['img']->value == "true") {?>
                <a href="javascript:;" class="uploadImg" uid="<?php echo $_smarty_tpl->tpl_vars['result1']->value[0]['uid'];?>
">
                    <input type="file" name="file" multiple="multiple" class="file">
                    <input type="hidden" value="" name="hidden" class="hidden">
                    更改头像
                </a>
                <?php } elseif ($_smarty_tpl->tpl_vars['img']->value == "false") {?>
                <?php }?>
            </div>
            <div class="outer-container">
                <!--菜单-->
                <ul class="menu">
                    <li class="active">
                        <a href="javascript:;">我的文章</a>
                    </li>
                    <li>
                        <a href="javascript:;">收藏的文章</a>
                    </li>
                    <li>
                        <a href="javascript:;">关注的好友</a>
                    </li>
                    <!--<li>-->
                        <!--<a href="javascript:;">我的动态</a>-->
                    <!--</li>-->
                </ul>
                <div class="list-container">
                    <ul>
                        <li class="wrap active">
                            <ul class="note-list">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                                <li class="first">
                                    <div class="content">
                                        <div class="detail">
                                            <p><a href="index.php?m=index&f=art&a=info&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['sid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value["stitle"];?>
</a></p>
                                            <p><?php echo $_smarty_tpl->tpl_vars['v']->value["sdesc"];?>
</p>
                                        </div>
                                    </div>
                                </li>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                            </ul>
                        </li>
                        <li class="wrap">
                            <ul class="note-list">
                                <!--这里循环-->
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['resultLove']->value, 'love');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['love']->value) {
?>
                                <li class="first">
                                    <div class="content">
                                        <div class="detail">
                                            <p><a href="index.php?m=index&f=art&a=info&id=<?php echo $_smarty_tpl->tpl_vars['love']->value['sid'];?>
"><?php echo $_smarty_tpl->tpl_vars['love']->value["stitle"];?>
</a></p>
                                            <p><?php echo $_smarty_tpl->tpl_vars['love']->value["sdesc"];?>
</p>
                                        </div>
                                    </div>
                                </li>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                            </ul>
                        </li>
                        <li class="wrap">
                            <ul class="note-list">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['resultFriend']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                                <li class="first">
                                    <div class="main_top">
                                        <a href="" class="head_img">
                                            <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['picture'];?>
" alt="" class="picture">
                                        </a>
                                        <div class="title">
                                            <a href="" class="name"><?php echo $_smarty_tpl->tpl_vars['v']->value['uname'];?>
</a>
                                        </div>
                                        <div class="info">
                                            <ul>
                                                <li>
                                                    <div class="meta-info text-center">
                                                        <a href="">
                                                            <span><?php echo count($_smarty_tpl->tpl_vars['v']->value["foucu"][0]);?>
</span>
                                                            关注
                                                        </a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="meta-info text-center">
                                                        <a href="">
                                                            <span><?php echo count($_smarty_tpl->tpl_vars['v']->value["fans"][0]);?>
</span>
                                                            粉丝
                                                        </a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="meta-info text-center">
                                                        <a href="">
                                                            <span><?php echo count($_smarty_tpl->tpl_vars['v']->value["wenzhang"][0]);?>
</span>
                                                            文章发布
                                                        </a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="meta-info text-center">
                                                        <a href="">
                                                            <span><?php echo count($_smarty_tpl->tpl_vars['v']->value["love"][0]);?>
</span>
                                                            收藏
                                                        </a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-sm-4 main-right right">
            <div class="list-group">
                <a href="javascript:;" class="list-group-item active">
                    浏览排行榜
                </a>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['resultOrder']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                <a href="index.php?m=index&f=art&a=info&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['sid'];?>
" class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['v']->value["stitle"];?>
</a>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </div>


            <!--<div class="list-group">-->
                <!--<a href="javascript:;" class="list-group-item active">-->
                    <!--关注排行榜-->
                <!--</a>-->
                <!--<a href="#" class="list-group-item">Dapibus ac facilisis in</a>-->
                <!--<a href="#" class="list-group-item">Morbi leo risus</a>-->
                <!--<a href="#" class="list-group-item">Porta ac consectetur ac</a>-->
                <!--<a href="#" class="list-group-item">Vestibulum at eros</a>-->
            <!--</div>-->
        </div>
    </div>
    <div class="notice">操作成功</div>
</div>
</body>
</html><?php }
}
