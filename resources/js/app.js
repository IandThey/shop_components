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