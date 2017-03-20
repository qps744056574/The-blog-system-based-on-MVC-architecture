<?php
/* Smarty version 3.1.30, created on 2017-03-12 19:00:51
  from "D:\wamp\wamp\www\2.28MVC\mvc_blog\template\index\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c58cd32ef8c8_34344547',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46310f13a956ca015cc9a4a2eb649d86d462d20a' => 
    array (
      0 => 'D:\\wamp\\wamp\\www\\2.28MVC\\mvc_blog\\template\\index\\index.html',
      1 => 1489341647,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/header.html' => 1,
  ),
),false)) {
function content_58c58cd32ef8c8_34344547 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:index/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


</nav>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
index/base1.css">
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
index/index.css">
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo JS_PATH;?>
index/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo JS_PATH;?>
index/sliders.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo JS_PATH;?>
index/select_card.js"><?php echo '</script'; ?>
>
<article>
    <div class="l_box f_l">
        <div class="banner">
            <div id="slide-holder">
                <div id="slide-runner">
                    <a href="/" target="_blank">
                        <img id="slide-img-1" src="<?php echo IMG_PATH;?>
images/a1.jpg"  alt="" />
                    </a>
                    <a href="/" target="_blank">
                        <img id="slide-img-2" src="<?php echo IMG_PATH;?>
images/a2.jpg"  alt="" />
                    </a>
                    <a href="/" target="_blank">
                        <img id="slide-img-3" src="<?php echo IMG_PATH;?>
images/a3.jpg"  alt="" />
                    </a>
                    <a href="/" target="_blank">
                        <img id="slide-img-4" src="<?php echo IMG_PATH;?>
images/a4.jpg"  alt="" />
                    </a>
                    <div id="slide-controls">
                        <!--<p id="slide-client" class="text"><strong></strong><span></span></p>-->
                        <!--<p id="slide-desc" class="text"></p>-->
                        <p id="slide-nav"></p>
                    </div>
                </div>
            </div>
            <?php echo '<script'; ?>
>
                if(!window.slider) {
                    var slider={};
                }

                slider.data= [
                    {
                        "id":"slide-img-1", // 与slide-runner中的img标签id对应
                        "client":"标题1",
                        "desc":"这里修改描述 这里修改描述 这里修改描述" //这里修改描述
                    },
                    {
                        "id":"slide-img-2",
                        "client":"标题2",
                        "desc":"add your description here"
                    },
                    {
                        "id":"slide-img-3",
                        "client":"标题3",
                        "desc":"add your description here"
                    },
                    {
                        "id":"slide-img-4",
                        "client":"标题4",
                        "desc":"add your description here"
                    }
                ];

            <?php echo '</script'; ?>
>
        </div>
        <!-- banner代码 结束 -->
        <div class="topnews">
            <h2><b>文章</b>列表</h2>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
            <div class="blogs">
                <figure><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['simg'];?>
"></figure>
                <ul>
                    <h3><a href="index.php?m=index&f=art&a=info&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['sid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value["stitle"];?>
</a></h3>
                    <p><?php echo $_smarty_tpl->tpl_vars['v']->value["sdesc"];?>
</p>
                    <p class="autor"><span class="lm f_l"><a href="##"><?php echo $_smarty_tpl->tpl_vars['v']->value["cname"];?>
</a></span><span class="dtime f_l"><?php echo $_smarty_tpl->tpl_vars['v']->value["time"];?>
</span><span class="viewnum f_r">浏览（<a href="/"><?php echo $_smarty_tpl->tpl_vars['v']->value["hits"];?>
</a>）</span></p>
                </ul>
            </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </div>
    </div>
    <div class="r_box f_r">
        <div class="tit01">
            <h3>关注我</h3>
            <div class="gzwm">
                <ul>
                    <li><a class="xlwb" href="#" target="_blank">新浪微博</a></li>
                    <li><a class="txwb" href="#" target="_blank">腾讯微博</a></li>
                    <li><a class="rss" href="portal.php?mod=rss" target="_blank">RSS</a></li>
                    <li><a class="wx" href="mailto:admin@admin.com">邮箱</a></li>
                </ul>
            </div>
        </div>
        <!--tit01 end-->
        <div class="ad300x100"> <img src="<?php echo IMG_PATH;?>
images/ad300x100.jpg"> </div>
        <div class="moreSelect" id="lp_right_select">
            <div class="ms-top">
                <ul class="hd" id="tab">
                    <li class="cur"><a href="javascript:;">点击排行</a></li>
                    <li><a href="javascript:;">最新文章</a></li>
                    <li><a href="javascript:;">站长推荐</a></li>
                </ul>
            </div>
            <div class="ms-main" id="ms-main">
                <div style="display: block;" class="bd bd-news" >

                    <!--浏览排名文章-->
                    <ul>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['resultOrder']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                        <li><a href="index.php?m=index&f=art&a=info&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['sid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value["stitle"];?>
</a></li>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    </ul>

                </div>
                <div  class="bd bd-news">
                    <ul>
                        <!--最新发布文章-->
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['resultNew']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                        <li><a href="index.php?m=index&f=art&a=info&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['sid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value["stitle"];?>
</a></li>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    </ul>
                </div>
                <div class="bd bd-news">
                    <ul>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['resultRecommend1']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                        <li><a href="index.php?m=index&f=art&a=info&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['sid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value["stitle"];?>
</a></li>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    </ul>
                </div>
            </div>
            <!--ms-main end -->
        </div>
        <!--切换卡 moreSelect end -->

        <div class="cloud">
            <h3>标签云</h3>
            <ul>
                <li><a href="">个人博客</a></li>
                <li><a href="">web开发</a></li>
                <li><a href="">前端设计</a></li>
                <li><a href="">Html</a></li>
                <li><a href="">CSS3</a></li>
                <li><a href="">Html5+css3</a></li>
                <li><a href="">百度</a></li>
                <li><a href="">Javasript</a></li>
                <li><a href="">web开发</a></li>
                <li><a href="">前端设计</a></li>
                <li><a href="">Html</a></li>
                <li><a href="">CSS3</a></li>
                <li><a href="">Html5+css3</a></li>
                <li><a href="">百度</a></li>
            </ul>
        </div>
        <div class="tuwen">
            <h3>图文推荐</h3>
            <ul>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['resultRecommend2']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                <li><a href="index.php?m=index&f=art&a=info&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['sid'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['simg'];?>
"><b><?php echo $_smarty_tpl->tpl_vars['v']->value["stitle"];?>
</b></a>
                    <p><span class="tulanmu"><a href="/"><?php echo $_smarty_tpl->tpl_vars['v']->value["cname"];?>
</a></span><span class="tutime"><?php echo $_smarty_tpl->tpl_vars['v']->value["time"];?>
</span></p>
                </li>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                <!--<li><a href="/"><img src="<?php echo IMG_PATH;?>
images/02.jpg"><b>教你怎样用欠费手机拨打电话</b></a>-->
                    <!--<p><span class="tulanmu"><a href="/">手机配件</a></span><span class="tutime">2015-02-15</span></p>-->
                <!--</li>-->
                <!--<li><a href="/" title="手机的16个惊人小秘密，据说99.999%的人都不知"><img src="<?php echo IMG_PATH;?>
images/03.jpg"><b>手机的16个惊人小秘密，据说...</b></a>-->
                    <!--<p><span class="tulanmu"><a href="/">手机配件</a></span><span class="tutime">2015-02-15</span></p>-->
                <!--</li>-->
                <!--<li><a href="/"><img src="<?php echo IMG_PATH;?>
images/06.jpg"><b>住在手机里的朋友</b></a>-->
                    <!--<p><span class="tulanmu"><a href="/">手机配件</a></span><span class="tutime">2015-02-15</span></p>-->
                <!--</li>-->
                <!--<li><a href="/"><img src="<?php echo IMG_PATH;?>
images/04.jpg"><b>教你怎样用欠费手机拨打电话</b></a>-->
                    <!--<p><span class="tulanmu"><a href="/">手机配件</a></span><span class="tutime">2015-02-15</span></p>-->
                <!--</li>-->
            </ul>
        </div>
        <div class="ad"> <img src="<?php echo IMG_PATH;?>
images/03.jpg"> </div>
        <div class="links">
            <h3><span>[<a href="">申请友情链接</a>]</span>友情链接</h3>
            <ul>
                <li><a href="">杨胜千的个人网页</a></li>
                <li><a href="http://www.qdfuns.com/">发现前端网</a></li>
                <li><a href="https://github.com/ysq352358871">杨胜千的github</a></li>
                <li><a href="https://nodejs.org/en/">Node.js</a></li>
                <li><a href="http://reactjs.cn/react/docs/getting-started.html">React</a></li>
                <li><a href="http://www.w3school.com.cn/">Html5+css3</a></li>
                <li><a href="www.baidu.com">百度</a></li>
            </ul>
        </div>
    </div>
    <!--r_box end -->
</article>
</body>
</html><?php }
}
