/**
 * Created by Administrator on 2017/3/6.
 */
window.onload=function(){
    var btn=document.querySelector(".btn");
    var hiddenIput=document.querySelector("#hidden");
    var newobj=new upload("index.php?m=admin&f=catagory&a=upload",".file","",".uploadImg");
    newobj.up(function(e){
        hiddenIput.setAttribute("value",e);
        // btn.removeAttribute("disabled");
    });
    // newobj.loadstart=function(){
    //     btn.setAttribute("disabled","disabled");
    // }
};

