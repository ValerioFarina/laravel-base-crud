require('./bootstrap');

const $ = require('jquery');

$(document).ready(function() {
    $('.products-list').on('click', '.delete-product', function() {
        $(this).siblings('.layover').removeClass('d-none');
    });

    $('.delete-window button.no').click(function() {
        $('.layover').addClass('d-none');
    });
});
