/**
 * Created by Administrator on 2017/3/9.
 */
$(function () {
    $(".menu li").on("click",function () {
        $(".menu li").removeClass();
        $(this).addClass("active");
        $(".list-container .wrap").removeClass("active").eq($(this).index()).addClass("active");
    })
    //上传头像
    $(".uploadImg").on("click",function () {
        var hiddenFile=$(".hidden");
        var newobj=new upload("index.php?m=index&f=index&a=upload",".file","",".picture");
        newobj.up(function (e) {
            hiddenFile.attr("value",e);
            console.log(hiddenFile.attr("value"));
            $.ajax({
                url:"index.php?m=index&f=index&a=uploadPersonImg",
                data:{
                    uid:$(".uploadImg").attr("uid"),
                    picture:hiddenFile.attr("value")
                },
                success:function (e) {
                    if(e=="yes"){
                        $(".notice").css("display","block").html("修改成功");
                        setTimeout(function () {
                            $(".notice").css("display","none");
                        },1000)
                    }else{
                        $(".notice").css("display","block").html("修改失败");
                        setTimeout(function () {
                            $(".notice").css("display","none");
                        },1000)
                    }
                }
            })
        });

    })



})
