/**
 *----------Dragon be here!----------/
 * 　　　┏┓　　　┏┓
 * 　　┏┛┻━━━┛┻┓
 * 　　┃　　　　　　　┃
 * 　　┃　　　━　　　┃
 * 　　┃　┳┛　┗┳　┃
 * 　　┃　　　　　　　┃
 * 　　┃　　　┻　　　┃
 * 　　┃　　　　　　　┃
 * 　　┗━┓　　　┏━┛
 * 　　　　┃　　　┃神兽保佑
 * 　　　　┃　　　┃代码无BUG！
 * 　　　　┃　　　┗━━━┓
 * 　　　　┃　　　　　　　┣┓
 * 　　　　┃　　　　　　　┏┛
 * 　　　　┗┓┓┏━┳┓┏┛
 * 　　　　　┃┫┫　┃┫┫
 * 　　　　　┗┻┛　┗┻┛
 * ━━━━━━神兽出没━━━━━━by:sdk
 */
//请求页头页尾
$(function () {
    $("#header").load("data/header.php");
    $("#footer").load("data/footer.php");
});

//返回顶部 不能缓慢返回，交互效果不好
//    $(function () {
//        var fixed=document.getElementsByClassName("fixed");
//        console.dir(fixed);
//        window.onscroll = function () {
//            var scrollTop =document.body.scrollTop;
//            console.log(scrollTop);
//            if(scrollTop>=200){
//                $(fixed).show()
//            }else{
//                $(fixed).hide()
//            }
//        };
//    },3000)
///////////////////////////////////////返回顶部//////////////////////////////////////
$(window).scroll(function () {
    var sc = $(window).scrollTop();
//        var rwidth=$(window).width()
    if (sc > 100) {
        $(".fixed").css("display", "block");
//            $(".fixed").css("left",(rwidth-36)+"px")
    } else {
        $(".fixed").css("display", "none");
    }
});
//    $("#toTop").click(function(){
//        console.log(1);
//        var sc=$(window).scrollTop();
//        $('body,html').animate({scrollTop:0},500);
//    })因为是动态生成的元素，所以采用动态绑定单击事件
$("#footer").on("click", "#toTop", function (e) {
//        var sc=$(window).scrollTop();
    e.preventDefault();
    $('body,html').animate({scrollTop: 0}, 500);
});

/*//加载用户名
var aaa=sessionStorage["LoginUname"];
if(aaa){
    $("#denglu").html("欢迎回来："+`${aaa}`);
}else{
    $("#denglu").html("登录");
}*///因为是动态元素，所以js代码直接写在php文件中
