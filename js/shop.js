

/**当页面加载完后，异步请求产品列表**/
loadProductByPage();
//异步请求商品数据(分页)，修改商品列表，修改分页条内容
function loadProductByPage(){
    $.ajax({
        type: 'GET',
        url: 'data/shop.php',
        success: function(pager){ //服务器返回分页对象
            console.log(pager);
            //console.log(pager[1].pic);
            var html="";
            for(var i=0;i<pager.length;i++){
                //console.log(pager[i].pic);
                //console.log(pager[i].pname);
                //console.log(pager[i].price);
                html+=`
                    <a><img src= "img/${pager[i].pic}" title="${pager[i].pname}"></a>
                    <p>${pager[i].pname}</p>
                    <p>￥${pager[i].price}</p>
                `;

            }
            $('#plist ul').html(html);
        },
        error: function(){
            alert('产品列表响应完成但有问题');
        }
    });

    //为导航添加下划线
    $(window).load(function () {
        $('#header .shop').addClass('active')
    });
}