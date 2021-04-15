$(document).ready(function () {

    $(".list--server li:contains('Открылся')").addClass('open');
    $(".list--server li:contains('Не открылся')").addClass('not--open');
    $(".list--server li:contains(' Действует')").addClass('pay--ok');
    $(".list--server li:contains(' Кончилась')").addClass('pay--end');
    $(".list--server li:contains('Не было оплаты')").addClass('pay--end');

    $(".list--server li:contains('Фаворит статус')").addClass('phavorit--server');
    $(".list--server li:contains('Топ статус')").addClass('top--server');
    $(".list--server li:contains('Вип статус')").addClass('vip--server');
    $(".list--server li:contains('wsimple_server')").addClass('wsimple--server');

    $(".detail-view:contains('phavorit_server')").addClass('detail-color-pavorite');
    $(".detail-view:contains('top_server')").addClass('detail-color-top');
    $(".detail-view:contains('vip_server')").addClass('detail-color-vip');

    var $str = $(".form-group option:selected").val();

    if ($str == 'phavorit_server') {
        $('#w0').addClass('detail-color-pavorite');
    } else if ($str == 'top_server') {
        $('#w0').addClass('detail-color-top');
    } else if ($str == 'vip_server') {
        $('#w0').addClass('detail-color-vip');
    }

    $('#listserver-status').click(function () {
        var $tru = $('#listserver-status').val();

        if ($tru == 'phavorit_server') {
            $('#w0').removeClass('detail-color-vip detail-color-top detail-color-simple');
            $('#w0').addClass('detail-color-pavorite');

            $('#listserver-icon_star').val('1');

            $('#listserver-icon_money').val('1');

        } else if ($tru == 'top_server') {
            $('#w0').removeClass('detail-color-pavorite detail-color-vip detail-color-simple');
            $('#w0').addClass('detail-color-top');

            $('#listserver-icon_star').val('2');
            $('#listserver-icon_money').val('1');

        } else if ($tru == 'vip_server') {
            $('#w0').removeClass('detail-color-pavorite detail-color-top detail-color-simple');
            $('#w0').addClass('detail-color-vip');

            $('#listserver-icon_star').val('3');

            $('#listserver-icon_money').val('');

        } else if ($tru == 'wsimple_server') {
            $('#w0').removeClass('detail-color-pavorite detail-color-top detail-color-vip');
            $('#w0').addClass('detail-color-simple');

            $('#listserver-icon_star').val('');

            $('#listserver-icon_money').val('');
        }

    });

});

$(document).ready(function () {

    var h2 = $('#h2');
    var h3 = $('#h3');
    var h4 = $('#h4');
    var h5 = $('#h5');
    var h6 = $('#h6');



    $('.h2-h1--button').click(function () {
        h2.val('<h1 class="text--headline"></h1>');
    });
    $('.h2-h2--button').click(function () {
        h2.val('<h2 class="text--headline"></h2>');
    });
    $('.h2-h3--button').click(function () {
        h2.val('<h3 class="text--headline-h3"></h3>');
    });
    $('.h2-h4--button').click(function () {
        h2.val('<h4 class="text--headline"></h4>');
    });
    $('.h2-h5--button').click(function () {
        h2.val('<h5 class="text--headline"></h5>');
    });
    $('.h2-h6--button').click(function () {
        h2.val('<h6 class="text--headline"></h6>');
    });
    $('.h2-clear').click(function () {
        h2.val('');
    });
    $('.h3-h1--button').click(function () {
        h3.val('<h1 class="text--headline"></h1>');
    });
    $('.h3-h2--button').click(function () {
        h3.val('<h2 class="text--headline"></h2>');
    });
    $('.h3-h3--button').click(function () {
        h3.val('<h3 class="text--headline-h3"></h3>');
    });
    $('.h3-h4--button').click(function () {
        h3.val('<h4 class="text--headline"></h4>');
    });
    $('.h3-h5--button').click(function () {
        h3.val('<h5 class="text--headline"></h5>');
    });
    $('.h3-h6--button').click(function () {
        h3.val('<h6 class="text--headline"></h6>');
    });
    $('.h3-clear').click(function () {
        h3.val('');
    });

    $('.h4-h1--button').click(function () {
        h4.val('<h1 class="text--headline"></h1>');
    });
    $('.h4-h2--button').click(function () {
        h4.val('<h2 class="text--headline"></h2>');
    });
    $('.h4-h3--button').click(function () {
        h4.val('<h3 class="text--headline-h3"></h3>');
    });
    $('.h4-h4--button').click(function () {
        h4.val('<h4 class="text--headline"></h4>');
    });
    $('.h4-h5--button').click(function () {
        h4.val('<h5 class="text--headline"></h5>');
    });
    $('.h4-h6--button').click(function () {
        h4.val('<h6 class="text--headline"></h6>');
    });
    $('.h4-clear').click(function () {
        h4.val('');
    });

    $('.h5-h1--button').click(function () {
        h5.val('<h1 class="text--headline"></h1>');
    });
    $('.h5-h2--button').click(function () {
        h5.val('<h2 class="text--headline"></h2>');
    });
    $('.h5-h3--button').click(function () {
        h5.val('<h3 class="text--headline-h3"></h3>');
    });
    $('.h5-h4--button').click(function () {
        h5.val('<h4 class="text--headline"></h4>');
    });
    $('.h5-h5--button').click(function () {
        h5.val('<h5 class="text--headline"></h5>');
    });
    $('.h5-h6--button').click(function () {
        h5.val('<h6 class="text--headline"></h6>');
    });
    $('.h5-clear').click(function () {
        h5.val('');
    });

    $('.h6-h1--button').click(function () {
        h6.val('<h1 class="text--headline"></h1>');
    });
    $('.h6-h2--button').click(function () {
        h6.val('<h2 class="text--headline"></h2>');
    });
    $('.h6-h3--button').click(function () {
        h6.val('<h3 class="text--headline-h3"></h3>');
    });
    $('.h6-h4--button').click(function () {
        h6.val('<h4 class="text--headline"></h4>');
    });
    $('.h6-h5--button').click(function () {
        h6.val('<h5 class="text--headline"></h5>');
    });
    $('.h6-h6--button').click(function () {
        h6.val('<h6 class="text--headline"></h6>');
    });
    $('.h6-clear').click(function () {
        h6.val('');
    });
});

