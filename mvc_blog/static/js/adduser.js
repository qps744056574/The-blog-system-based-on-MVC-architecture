/**
 * Created by Administrator on 2017/3/7.
 */
window.onload=function () {
    $("#adduser").validate({
        rules:{
            uname:{
                required:true,
                minlength:5
            },
            upass:{
                required:true,
                minlength:5
            }
        },
        messages:{
            uname:{
                required:"请输入用户名",
                minlength:"用户名长度不少于5"
            },
            upass:{
                required:"请输入密码",
                minlength:"密码长度不少于5"
            }

        }
    })
};
