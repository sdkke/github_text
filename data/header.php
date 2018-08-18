<?php
header('Content-Type: text/html;charset=UTF-8');
?>

    <div class="modal">
        <div class="modal_dialog">
            <a href="#" class="right">×</a>
            <span class="log">
                <img src="img/log.png" alt=""/>
            </span>
            <p>
                登录OPPO帐号可享受更多的服务
            </p>
            <p id="alert">
                请输入您的账号和密码
            </p>
            <div class="modal_form">
                <form id="modal_form">
                    <input value="申登科" type="text" name="uname" autofocus placeholder="请输入您的账号"/><br/>
                    <input value="123" type="password" name="upwd" placeholder="请输入密码"/><br/>
                    <input type="button" value="提交登陆信息" id="modal_btn"/><br/>
                    <a href="#" id="login">注册OPPO账号</a><br/>
                    <p class="rests">
                        <img src="img/login.png" alt=""/>
                    </p>
                    <p>
                        <img src="img/icon.png" alt=""/>
                    </p>
                </form>
            </div>
        </div>
    </div>

    <div class="header">
        <p>
            <span id="denglu">登陆</span>
            <span>注册</span>
            <span>Global</span>
        </p>
    </div>
    <div class="wrapper">
        <img src="img/log.png" class="log" alt=""/>
        <ul>
            <li><a class="index" href="index.html?name=index">首页</a></li>
            <li><a class="price" href="price.html?name=price">产品</a></li>
            <li><a class="shop" href="shop.html?name=shop">商城</a></li>
            <li><a href="#">体验店</a></li>
            <li><a href="#">服务</a></li>
            <li><a href="#">ColorOS</a></li>
            <li><a href="#">社区</a></li>
        </ul>
    </div>

<script>

    //加载用户名
    var aaa=sessionStorage["LoginUname"];
    if(aaa){
        $("#denglu").html("欢迎回来："+`${aaa}`);
    }else{
        $("#denglu").html("登录");
    }

    //显示隐藏模态框
    $("#header").on("click", "#denglu", function (e) {
        e.preventDefault();
        $(".modal").css("display","block")
    });
    $(".modal_dialog").on("click", ".right", function (e) {
        e.preventDefault();
        $(".modal").css("display","none")
    });



    //实现异步登陆
    var loginUname=null;
    var loginUid=null;
    $("#modal_btn").click(function () {
        var data=$('#modal_form').serialize();
        $.ajax({
            type:'POST',
            url:'data/user.php',
            data:data,
            success: function (result) {
                console.log(result);
                if(result.code!==1){//登陆验证失败
                    $('#alert').html(result.msg).addClass("error");
                    return;
                }
                $('.modal').hide();
                loginUname=result.uname;
                console.log(loginUname);
                $('#denglu').html('欢迎回来:'+loginUname);
                document.cookie = 'LoginUserId='+loginUid;
                document.cookie = 'LoginUserName='+loginUname;
                sessionStorage['LoginUname']=loginUname;
            },
            error: function () {
                alert('响应完成，但有问题');
                console.log(arguments)
            }
        });
    });

     $(function () {
        $('#header .index').addClass('aactive');
            var href=location.href.split('=')[1];
                if(href=='undefined'||href=='index'){
                    $('#header .index').addClass('aactive').parent().siblings().children().removeClass('aactive');
                }
                if(href=='price'){
                  $('#header .price').addClass('aactive').parent().siblings().children().removeClass('aactive');
                }
                if(href=='shop'){
                    $('#header .shop').addClass('aactive').parent().siblings().children().removeClass('aactive');
                }
     });

//                $("#header").on(".price","click", function () {
//                    console.log( $('#header .price').html());
//                    $('#header .price').addClass('active');
//                });


</script>