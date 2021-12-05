$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$("#product_id").change(function(){
    $.ajax({
        url: '/get_product/' + $("#product_id").val(),         /* Куда пойдет запрос */
        method: 'get',             /* Метод передачи (post или get) */
        dataType: 'json',          /* Тип данных в ответе (xml, json, script, html). */
        success: function(data){   /* функция которая будет выполнена после успешного запроса.  */
            var product = data.product
            $('#title').val(product.title)
            $('#category').val(product.category)
            if(product.availability==='In Stock') {
                $('#out_of_stock').prop('checked', false)
                $('#in_stock').prop('checked', true)
            }else{
                $('#in_stock').prop('checked', false)
                $('#out_of_stock').prop('checked', true)
            }
            $('#availability').val(product.availability)
            $('#description').val(product.description)
            $('#price').val(product.price)
        }
    });
});
