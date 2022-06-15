// basket

let basket_status = 0;
$('#basket').on('click', function(){
    if(basket_status == 0){
        $('#basket-box').css('display','block');
        basket_status = 1;
    }else{
        $('#basket-box').css('display','none');
        basket_status = 0;
    }
});

// login and register
$('.active-login').on('click', function(){
    if($('.my-login-class').hasClass('d-none')){
        $('.my-login-class').removeClass('d-none');
        $('.my-login-class').addClass('d-flex');
    }else{
        $('.my-login-class').removeClass('d-flex');
        $('.my-login-class').addClass('d-none');
    }
})

$('.search-form').on('click', function(){
    $('.list-search').removeClass('d-none');
})

$('.search-form').on('blur', function(){
    $('.list-search').addClass('d-none');
})

$('.search-form').on('click, fn', function(){
    $.ajax({
        type: "get",
        url: "/search",
        data: "th.serialize()",
        dataType: "dataType",
        success: function (){
            
        }
    });
})