//轮播
var swiper = new Swiper('.swiper-container', {
    pagination: '.swiper-pagination',
    paginationClickable: true,
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
    spaceBetween: 30
});

////为.index添加class
//$(function () {
//    console.log($("#header").html());
//    $('#header .index').addClass('active')
//})
//// 因为是动态元素，所以采用下面方法
////等数据加载完成才执行
//$(window).load(function () {
//    console.log(1);
//    console.log($("#header").html());
//    $("#header .index").addClass('active');
//    console.log(2);
//});

//$("#header").on("click",".index", function () {
//    e.preventDefault();
//    $(".index").addClass("active")
//});


    //var a=$("#header li a");
    //console.log(a);
    //$(a).click(function(e){
    //    e.preventDefault;
    //    console.log($(this));
    //    $(this).addClass('aactive').parent().siblings().children().removeClass('aactive');
    //    //$(this).css("border","1px solid red");
    //    console.log($(this));
    //})