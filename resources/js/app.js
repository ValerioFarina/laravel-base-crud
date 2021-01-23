require('./bootstrap');

const $ = require('jquery');

$(document).ready(function() {
    $('.products-list').on('click', '.delete-product', function() {
        var productId = $(this).parent().attr('id');

        $('.delete-window').removeClass('d-none');

        var deleteRoute = $('.delete-window').children('form').attr('action');

        deleteRoute = deleteRoute.replace('productId', productId);

        $('.delete-window').children('form').attr('action', deleteRoute);

        $('.delete-window > button').click(function() {
            $('.delete-window').addClass('d-none');
    
            deleteRoute = $('.delete-window').children('form').attr('action');
    
            deleteRoute = deleteRoute.replace(`products/${productId}`, 'products/productId');
    
            $('.delete-window').children('form').attr('action', deleteRoute);
        });
    });

    
});
