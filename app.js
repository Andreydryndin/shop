$(document).ready(function(){
    var m = $('.minus');
    var p = $('.plus');
    var quantity = $('.quantity');
    var btn = $('.btn');
    var forms = $('form');

    quantity.each(function(){
        quantity.val('0');
    });
    m.each(function () {
        var q = $(this).parent('.form-group').find('.quantity');
        $(this).click(function(){
            if(q.val() > 0){
                q.val(parseInt(q.val()) - 1);
            }
        });
    });

    p.each(function () {
        var q = $(this).parent('.form-group').find('.quantity');
        $(this).click(function(){
            q.val(parseInt(q.val()) + 1);
        });
    });

    forms.each(function ( ) {
        $(this).submit(function(event){
            event.preventDefault();
            var data = $(this).serialize();
            var response = $(this).find('.response');
            $.ajax({
                type: 'GET',
                url: "add_to_cart.php?"+data,
                //success: callback
            }).done(function (request) {
                //alert("Data: " + request + "\nStatus: " + request.status);
                var req = JSON.parse(request);

                if(req.status){
                    response.text('Товар добавлен в корзину');
                } else {
                    response.text('Error' + req.data);
                }

            });

            return false;
        })
    });

});