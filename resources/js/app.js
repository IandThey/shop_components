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

let ativ_reg_status = 0;
$('.b-reg-status').on('click', function(){
    if(ativ_reg_status == 0){
        $('.ativ-reg').css('display','block');
        ativ_reg_status = 1;
    }else{
        $('.ativ-reg').css('display','none');
        ativ_reg_status = 0;
    }
});

$('.search-form').on('click', function(){
    $('.list-search').removeClass('d-none');
})

$('.search-form').keyup(function(){
    $.ajax({
        type: "get",
        url: "/search",
        data: "th.serialize()",
        dataType: "dataType",
        success: function (){
            
        }
    });
})