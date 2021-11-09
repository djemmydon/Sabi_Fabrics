$(document).ready(function () {

    $('.add_cart').click(function (e) {
        e.preventDefault();

        var product_id = $(this).closest('.product_data').find('.prod_id').val();
        var product_yards = $(this).closest('.product_data').find('.prod_yards').val();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });


        $.ajax({
            method: 'POST',
            url: "/add-to-cart",
            data: {
                'product_id': product_id,
                'product_yards': product_yards,
            },
            success: function (response) {
                swal(response.status);
            }

        });
    });

    $('.remove_cart').click(function (e) {
        e.preventDefault();
        var prod_id = $(this).closest('.cart-data').find('.prod_id').val();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            method: 'POST',
            url: "/remove_from_cart",
            data: {
                'prod_id': prod_id,
               
            },
            success: function (response) {
                window.location.reload()
                swal(response.status);
            }

        });



    })


    $('#search, .fa-search').mouseenter(function () {
        $('.logo1').hide()
    })


    $('#search, .fa-search').mouseleave(function () {
        $('.logo1').show()
    })

    $('.fa-user').click(function () {
        $('.navbar2').toggle('');
  
    })
    $('.navbar2 a, .container, .container-fluid').click(function () {
        $('.navbar2').hide();
        $('.fa-bars').removeClass('fa-times')
    })

});


