/**
 * Created by Administrator on 2017/3/9.
 */
$(function () {
    $(".quxiao").bind("click",function () {
        $(".notice-login").css("display","none");
    })
    //关注的ajax
    $(".guanzhu").on("click",function () {
        var uid2=$(".tag").attr("attr");
        $.ajax({
            url:"index.php?m=index&f=foucs&a=checkFoucs",
            data:{
                url:location.href,
                uid2:uid2
            },
            success:function (obj) {
                if(obj=="yes"){
                    $(".guanzhu").css("display","none");
                    $(".quxiaoguanzhu").css("display","inline-block");
                    $(".mask").css("display","block");
                    $(".notice").css("display","block");
                    setTimeout(function () {
                        $(".mask").css("display","none");
                        $(".notice").css("display","none");
                    },2000)
                }else{
                    $(".notice-login").css("display","block");
                }
            }
        })
    })
    //取消关注的ajax
    $(".quxiaoguanzhu").bind("click",function () {
        var uid2=$(".tag").attr("attr");//文章的id
        $.ajax({
            url:"index.php?m=index&f=foucs&a=cancelFocus",
            data:{
                uid2:uid2
            },
            success:function (e) {
                if(e=="no"){
                    $(".mask").css("display","block");
                    $(".notice").css("display","block").html("操作失败");
                    setTimeout(function () {
                        $(".mask").css("display","none");
                        $(".notice").css("display","none");
                    },2000)
                }else{
                    $(".guanzhu").css("display","inline-block");
                    $(".quxiaoguanzhu").css("display","none");
                    $(".mask").css("display","block");
                    $(".notice").css("display","block").html("操作成功");
                    setTimeout(function () {
                        $(".mask").css("display","none");
                        $(".notice").css("display","none");
                    },2000)
                }
            }
        })
    })

    //收藏文章发动的ajax
    $(".shoucang").on("click",function () {
        // var uid=$(".tag").attr("attr");//文章的uid作者
        var sid=$(".tag").attr("sid"); //文章的id.
        $.ajax({
            url:"index.php?m=index&f=love&a=addLove",
            data:{
                url:location.href,
                sid:sid
            },
            success:function (e) {
                if(e=="yes"){
                    $(".shoucang").css("display","none");
                    $(".cancelshoucang").css("display","inline-block");
                    $(".mask").css("display","block");
                    $(".notice").css("display","block");
                    setTimeout(function () {
                        $(".mask").css("display","none");
                        $(".notice").css("display","none");
                    },2000)
                }else if(e=="no"){
                    $(".mask").css("display","block");
                    $(".notice").css("display","block").html("操作失败");
                    setTimeout(function () {
                        $(".mask").css("display","none");
                        $(".notice").css("display","none");
                    },2000)
                }else if(e=="not"){
                    $(".notice-login").css("display","block");
                }
            }
        })
    })
    //取消收藏文章发动的ajax
    $(".cancelshoucang").on("click",function () {
        var sid=$(".tag").attr("sid");
        $.ajax({
            url:"index.php?m=index&f=love&a=delLove",
            data:{
                sid:sid
            },
            success:function (e) {
                if(e=="yes"){
                    $(".shoucang").css("display","inline-block");
                    $(".cancelshoucang").css("display","none");
                    $(".mask").css("display","block");
                    $(".notice").css("display","block").html("操作成功");
                    setTimeout(function () {
                        $(".mask").css("display","none");
                        $(".notice").css("display","none");
                    },2000)
                }else if(e=="no"){
                    $(".mask").css("display","block");
                    $(".notice").css("display","block").html("操作失败");
                    setTimeout(function () {
                        $(".mask").css("display","none");
                        $(".notice").css("display","none");
                    },2000)
                }
            }
        })
    })
//点赞发动ajax
    $(".dianzan").on("click",function () {
        var sid=$(".author_info .tag").attr("sid");
        $.ajax({
            url:"index.php?m=index&f=good&a=addGood",
            data:{
                sid:sid,
                url:location.href
            },
            success:function (e) {
                if(e=="yes"){
                    $(".dianzan").css("display","none");
                    $(".canceldianzan").css("display","inline-block");
                    $(".mask").css("display","block");
                    $(".notice").css("display","block").html("操作成功");
                    setTimeout(function () {
                        $(".mask").css("display","none");
                        $(".notice").css("display","none");
                    },2000)
                }else if(e=="no"){
                    $(".mask").css("display","block");
                    $(".notice").css("display","block").html("操作失败");
                    setTimeout(function () {
                        $(".mask").css("display","none");
                        $(".notice").css("display","none");
                    },2000)
                }else if(e=="not"){
                    $(".notice-login").css("display","block");
                }
            }
        })
    })
//点赞发动ajax
    $(".canceldianzan").bind("click",function () {
        var sid=$(".author_info .tag").attr("sid");
        $.ajax({
            url:"index.php?m=index&f=good&a=delGood",
            data:{
                sid:sid
            },
            success:function (e) {
                if(e=="yes"){
                    $(".dianzan").css("display","inline-block");
                    $(".canceldianzan").css("display","none");
                    $(".mask").css("display","block");
                    $(".notice").css("display","block").html("操作成功");
                    setTimeout(function () {
                        $(".mask").css("display","none");
                        $(".notice").css("display","none");
                    },2000)
                }else if(e=="no"){
                    $(".mask").css("display","block");
                    $(".notice").css("display","block").html("操作失败");
                    setTimeout(function () {
                        $(".mask").css("display","none");
                        $(".notice").css("display","none");
                    },2000)
                }
            }
        })
    })

//留言板代码
    //处理数据的
    var data={};
    $(".comment-btn a").on("click",function () {
        console.log(this);
        data.sid=$(".author_info .tag").attr("sid");
        data.uid2=$(this).attr("uid2");
        console.log(data.uid2);
        data.pid=$(this).attr("pid");
        console.log(data.pid);
        if( $(this).get(0).className=="comment-btn1"){
            // console.log(1);
            var con=$(this).parents(".innerInfo").find(".author .info .name").html();
            data.name=con;
            // console.log(data.name);
        }else if($(this).get(0).className=="comment-btn2"){
            var con=$(this).parents(".sub-comment").find("p a.name").html();
            data.name=con;
            // console.log(data.name);
            // console.log(2);
        }
        $(this).parents(".comment").find(".new-comment-btn").slideToggle(100);
        $(this).parents(".comment").find(".new-comment-btn").find(".replyComment").val(":@"+data.name);
    })

//点击message一级评论
    /*
    * 需要的知道的是：
    * 1、uid1:留言者 自己  //通过session获取
    * 2、uid2：被留言者 对方
    * 3、pid: 留言还是回复
    * 4、sid：给哪一篇问章留言
    * 5、mtime：留言时间。
    * 6、mcon:  留言内容
    *
    * */
    $(".message-btn").on("click",function () {
        $.ajax({
            url:"index.php?m=index&f=message&a=addComment",
            data:{
                url:location.href,
                uid2:$(".author_info .tag").attr("attr"),   //被留言者
                sid:$(".author_info .tag").attr("sid"),     //留言的文章的id
                mcon:$(".newComment").val()                 //留言的内容
            },
            dataType:"json",
            success:function (e) {
                if(e.message=="no"){
                    $(".notice-login").css("display","block");
                }else if(e.message=="yes"){
                    var comment=$("<div class='comment'></div>").prependTo(".normal-comment-list");
                    var sub_comment_list=$("<div class='sub-comment-list'></div>");//创建sub_comment_list
                        sub_comment_list.appendTo(".comment");
                    var innerInfo=$(".innerInfo:eq(0)").clone(true).prependTo(comment);
                    innerInfo.find(".avatar img").attr("src",e.picture);//改变用户的头像
                    innerInfo.find(".info .name").html(e.uname);
                    innerInfo.find(".info .meta em").html(getTime());
                    innerInfo.find(".comment-wrap p").html($(".newComment").val());
                    innerInfo.find(".comment-wrap .tool-group .comment-btn1").attr("uid2",e.uid2).attr("pid",e.mid);

                    var textarea=$(".new-comment-btn:eq(0)").clone(true).appendTo(comment);

                    var num=$(".top").find("span span").html(); //设置评论条数
                    num=num==""?0:num;
                    $(".top").find("span span").html(num*1+1);

                    $(".newComment").val("");//清空输入框数据。
                    //操作提示
                    $(".notice").css("display","block").html("操作成功");
                    setTimeout(function () {
                        $(".notice").css("display","none");
                    },2000)


                }
            }
        })
    });
//回复评论
    $(".reply-message-btn").on("click",function () {

        var mcon=$(this).parents(".new-comment").find(".replyComment").val();
        console.log(mcon);
        if(mcon==""){
            $(".notice").css("display","block").html("请输入评论"); //判断留的评论是否为空。
            setTimeout(function () {
                $(".notice").css("display","none");
            },2000)
            $(this).parents(".new-comment").find(".replyComment").focus();

        }else {
            $.ajax({
                url:"index.php?m=index&f=message&a=replyComment",
                data:{
                    url:location.href,
                    sid:data.sid,
                    uid2:data.uid2,
                    pid:data.pid,
                    mcon:mcon
                },
                dataType:"json",
                success:function (e) {
                    console.log(e);
                    if(e.message=="yes"){
                        var replyComment=$(".sub-comment").eq(0).clone(true).appendTo(".sub-comment-list");;
                        console.log(replyComment);
                        replyComment.find("p .name").html(e.uname);
                        replyComment.find("p span span").html(mcon);
                        replyComment.find(".sub-tool-group .time").html(getTime());
                        replyComment.find(".sub-tool-group .comment-btn2").attr("uid2",e.uid2).attr("pid",e.pid);
                        replyComment.parents(".comment").find(".replyComment").val("");
                    }else if(e.message=="no"){
                        $(".notice-login").css("display","block");
                    }
                }
            })
        }

    })


    //获取时间。
    function getTime() {
        var time=new Date();
        var year=time.getFullYear();
        var month=time.getMonth()+1;
        var day =time.getDate();
        var hours=time.getHours();
        var minute=time.getMinutes();
        var second=time.getSeconds();
        return year+"-"+month+"-"+day+" "+hours+":"+minute+":"+second;
    }
    //获取点击量(阅读)
    $.ajax({
        url:"index.php?m=index&f=message&a=hits",
        data:{
            sid:$(".author_info .tag").attr("sid")
        },
        success:function (e) {
            console.log(e);
        }
    })


})
