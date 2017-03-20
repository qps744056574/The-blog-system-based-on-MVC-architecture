<?php
/* Smarty version 3.1.30, created on 2017-03-12 18:47:40
  from "D:\wamp\wamp\www\2.28MVC\mvc_blog\template\index\innerInfo.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c589bc2064b8_94289027',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '716e2e3b5fd01152f34bca3ea0e74b5c0594c34e' => 
    array (
      0 => 'D:\\wamp\\wamp\\www\\2.28MVC\\mvc_blog\\template\\index\\innerInfo.html',
      1 => 1489340857,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/header.html' => 1,
    'file:index/notice.html' => 1,
  ),
),false)) {
function content_58c589bc2064b8_94289027 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:index/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</nav>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
index/bootstrap.css">
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
index/base.css">
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
index/focus.css">
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
index/font/iconfont.css">
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
index/focus.js"><?php echo '</script'; ?>
>
<div class="container">
    <h1 class="text-center">
        <?php echo $_smarty_tpl->tpl_vars['result']->value[0]["stitle"];?>

    </h1>
    <div class="author">
        <a href="index.php?m=index&f=index&a=friendHome&id=<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['uid'];?>
" class="headImg">
            <img src="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['picture'];?>
" alt="">
        </a>
        <div class="author_info">
            <span class="tag" attr="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['uid'];?>
" sid="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['sid'];?>
">作者</span>
            <span class="name">
                <a href=""><?php echo $_smarty_tpl->tpl_vars['result']->value[0]["author"];?>
</a>
            </span>

            <?php if ($_smarty_tpl->tpl_vars['foucs']->value == "true") {?>
            <a href="javascript:;" class="btn btn-success guanzhu" style="display: none">关注</a>
            <a href="javascript:;" class="btn btn-success quxiaoguanzhu" >取消关注</a>
            <?php } elseif ($_smarty_tpl->tpl_vars['foucs']->value == "false") {?>
            <a href="javascript:;" class="btn btn-success guanzhu">关注</a>
            <a href="javascript:;" class="btn btn-success quxiaoguanzhu" style="display: none">取消关注</a>
            <?php }?>

            <div class="meta">
                <span class="push-time"><?php echo $_smarty_tpl->tpl_vars['result']->value[0]["time"];?>
</span>
                <span class="read">阅读 <span class="count"><?php echo $_smarty_tpl->tpl_vars['result']->value[0]["hits"];?>
</span></span>
                <span class="comments">评论 <span class="count"><?php echo count($_smarty_tpl->tpl_vars['commentArr']->value);?>
</span></span>
                <span class="good">点赞 <span class="count"><?php echo $_smarty_tpl->tpl_vars['result']->value[0]["good"];?>
</span></span>
            </div>
        </div>
    </div>
    <div class="con">
        <?php echo $_smarty_tpl->tpl_vars['result']->value[0]["scon"];?>

    </div>
    <!--收藏-->
    <?php if ($_smarty_tpl->tpl_vars['love']->value == "true") {?>
    <a href="javascript:;" class="btn btn-success shoucang" style="display: none">收藏</a>
    <a href="javascript:;" class="btn btn-success cancelshoucang">取消收藏</a>
    <?php } elseif ($_smarty_tpl->tpl_vars['love']->value == "false") {?>
    <a href="javascript:;" class="btn btn-success shoucang">收藏</a>
    <a href="javascript:;" class="btn btn-success cancelshoucang" style="display: none">取消收藏</a>
    <?php }?>
    <!--点赞-->
    <?php if ($_smarty_tpl->tpl_vars['dianzan']->value == "true") {?>
    <a href="javascript:;" class="btn btn-success dianzan" style="display: none">点赞</a>
    <a href="javascript:;" class="btn btn-success canceldianzan" >取消点赞</a>
    <?php } elseif ($_smarty_tpl->tpl_vars['dianzan']->value == "false") {?>
    <a href="javascript:;" class="btn btn-success dianzan">点赞</a>
    <a href="javascript:;" class="btn btn-success canceldianzan" style="display: none">取消点赞</a>
    <?php }?>
    <!--评论-->
    <div>
        <div class="comment-list">
            <div>
                <form action="" class="new-comment">
                    <a href="" class="avatar">
                        <img src="<?php if (isset($_smarty_tpl->tpl_vars['resultUser']->value)) {?>
                        <?php echo $_smarty_tpl->tpl_vars['resultUser']->value['picture'];?>

                        <?php }?>" alt="">
                    </a>
                    <textarea name="newComment" placeholder="写下你的评论...." class="newComment"></textarea>
                    <div class="write-submit">
                        <a href="javascript:;" class="btn btn-primary message-btn">留言</a>
                        <a href="javascript:;" class="btn btn-danger">取消</a>
                    </div>
                </form>
            </div>
            <div class="top">
                <span>共有<span>
                    <?php if (count($_smarty_tpl->tpl_vars['arr']->value) < 1) {?>
                    0
                    <?php } else { ?>
                    <?php echo count($_smarty_tpl->tpl_vars['commentArr']->value);?>

                    <?php }?>
                </span>条评论</span>
            </div>
            <div class="normal-comment-list">

                <div class="comment" style="display:none">
                    <!--这里是评论-->
                    <div class="innerInfo">
                        <div class="author">
                            <a href="" class="avatar">
                                <img src="" alt="">
                            </a>
                            <div class="info">
                                <a href="" class="name"></a>
                                <div class="meta">
                                    <span><i></i>楼 <em></em></span>
                                </div>
                            </div>
                        </div>
                        <div class="comment-wrap">
                            <p></p>
                            <div class="tool-group">
                                <!--<a href="javascript:;">-->
                                    <!--&lt;!&ndash;点赞数&ndash;&gt;-->
                                    <!--&lt;!&ndash;<i class="iconfont icon-dianzan"></i>&ndash;&gt;-->
                                    <!--&lt;!&ndash;<span>123</span>&ndash;&gt;-->
                                <!--</a>-->
                                <div class="comment-btn" style="display: inline-block">
                                    <a href="javascript:;"  class="comment-btn1">
                                        <i class="iconfont icon-huifu"></i>
                                        <span>回复1</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--这里是评论结束-->
                    <!--这里是回复评论-->
                    <div class="sub-comment-list">
                        <div class="sub-comment">
                            <p>
                                <a href="" class="name"></a>
                                <span><a href="javascript:;"></a> <span></span></span>
                            </p>
                            <div class="sub-tool-group">
                                <span class="time"></span>
                                <div class="comment-btn" style="display: inline-block">
                                    <a href="javascript:;"  class="comment-btn2">
                                        <i class="iconfont icon-huifu"></i>
                                        <span>回复</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--回复在这里循环结束-->
                    <!--这里是评论框-->

                    <form action="" class="new-comment new-comment-btn">
                        <textarea name="newComment" placeholder="写下你的评论...." class="replyComment"></textarea>
                        <div class="write-submit">
                            <a href="javascript:;" class="btn btn-primary reply-message-btn">回复</a>
                            <a href="javascript:;" class="btn btn-danger">取消</a>
                        </div>
                    </form>

                </div>


                    <!--这里循环-->
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
                    <div class="comment">
                        <!--这里是评论-->
                        <div class="innerInfo">
                            <div class="author">
                                <a href="" class="avatar">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['picture'];?>
" alt="">
                                </a>
                                <div class="info">
                                    <a href="" class="name"><?php echo $_smarty_tpl->tpl_vars['v']->value["uname"];?>
</a>
                                    <div class="meta">
                                        <span><i><?php echo $_smarty_tpl->tpl_vars['k']->value+1;?>
</i>楼 <em><?php echo $_smarty_tpl->tpl_vars['v']->value["mtime"];?>
</em></span>
                                    </div>
                                </div>
                            </div>
                            <div class="comment-wrap">
                                <p><?php echo $_smarty_tpl->tpl_vars['v']->value["mcon"];?>
</p>
                                <div class="tool-group">
                                    <!--<a href="javascript:;">-->
                                        <!--&lt;!&ndash;点赞数&ndash;&gt;-->
                                        <!--<i class="iconfont icon-dianzan"></i>-->
                                        <!--<span>123</span>-->
                                    <!--</a>-->
                                    <div class="comment-btn" style="display: inline-block">
                                        <a href="javascript:;" class="comment-btn1" uid2="<?php echo $_smarty_tpl->tpl_vars['v']->value['uid1'];?>
" pid="<?php echo $_smarty_tpl->tpl_vars['v']->value['mid'];?>
">
                                            <i class="iconfont icon-huifu"></i>
                                            <span>回复</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--这里是评论结束-->
                        <!--这里是回复评论-->
                        <div class="sub-comment-list">
                            <?php if (isset($_smarty_tpl->tpl_vars['v']->value["son"])) {?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['v']->value["son"], 'v1');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v1']->value) {
?>
                            <div class="sub-comment">
                                <p>
                                    <a href="" class="name"><?php echo $_smarty_tpl->tpl_vars['v1']->value["uname"];?>
</a>
                                    <span><a href="javascript:;"></a> <span><?php echo $_smarty_tpl->tpl_vars['v1']->value["mcon"];?>
</span></span>
                                </p>
                                <div class="sub-tool-group">
                                    <span class="time"><?php echo $_smarty_tpl->tpl_vars['v1']->value["mtime"];?>
</span>
                                    <div class="comment-btn" style="display: inline-block">
                                        <a href="javascript:;" class="comment-btn2" uid2="<?php echo $_smarty_tpl->tpl_vars['v1']->value['uid1'];?>
" pid="<?php echo $_smarty_tpl->tpl_vars['v']->value['mid'];?>
">
                                            <i class="iconfont icon-huifu"></i>
                                            <span>回复2</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                            <?php } else { ?>
                            <?php }?>

                        </div>
                        <!--回复在这里循环结束-->
                        <!--这里是评论框-->

                            <form action="" class="new-comment new-comment-btn">
                                <textarea name="newComment" placeholder="写下你的评论...." class="replyComment"></textarea>
                                <div class="write-submit">
                                    <a href="javascript:;" class="btn btn-primary reply-message-btn">回复</a>
                                    <a href="javascript:;" class="btn btn-danger">取消</a>
                                </div>
                            </form>

                    </div>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </div>
        </div>
    </div>
    <!--登录提示-->
    <?php $_smarty_tpl->_subTemplateRender("file:index/notice.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="mask"></div>
    <div class="notice">操作成功</div>
</div>
</body>
</html><?php }
}
