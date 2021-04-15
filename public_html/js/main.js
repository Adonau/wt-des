(function ($, window, document) {
    $.fn.goTop = function (options) {
        var defaults = {
            scrollTop: 100,
            scrollSpeed: 1000,
            fadeInSpeed: 1000,
            fadeOutSpeed: 500
        };
        var options = $.extend(defaults, options);
        var $this = $(this);
        $(window).on('scroll', function () {
            if ($(window).scrollTop() > options.scrollTop) {
                $this.fadeIn(options.fadeInSpeed);
            } else {
                $this.fadeOut(options.fadeOutSpeed);
            }
        })
        $this.on('click', function () {
            $('html,body').animate({
                'scrollTop': 0
            }, options.speed)
        })
    }
})(jQuery, window, document)

$(function () {
    $('#go-top').goTop({
        scrollTop: 100,
        scrollSpeed: 1000,
        fadeInSpeed: 1000,
        fadeOutSpeed: 500
    })
})

$(document).ready(function () {
    // кнопки переключения списков
    var $serv_right = '.server--content-right';
    var $serv_left = '.server--content-left';
    var $btn_open = '.button-open';
    var $btn_notopen = '.button-not-open';


    $('.button-open').click(function () {
        $($serv_right).addClass('server--content-right-display');
        $($serv_left).addClass('server--content-right-displaynone');
        $($btn_open).addClass('button-server-active');
        $($btn_notopen).removeClass('button-server-active');
    });
    $('.button-not-open').click(function () {
        $($serv_right).removeClass('server--content-right-display');
        $($serv_left).removeClass('server--content-right-displaynone');
        $($btn_open).removeClass('button-server-active');
        $($btn_notopen).addClass('button-server-active');
    });

    // гамбургер сеню 
    var $nav = '.header__nav';
    var $body = 'body';
    var $aside = '.aside';
    var $aside_emp = '.aside_empty';
    var $gamb_btn = '.header__button';

    $($gamb_btn).click(function () {
        $($nav).toggleClass('header__nav-transform');
        $($aside).toggleClass('aside_trasform');
        $($aside_emp).toggleClass('aside_trasform');
        $($body).toggleClass('body_scroll');
    });

    $($gamb_btn).click(function () {
        $($gamb_btn).toggleClass('header__button-show');
    });

    // ошибка сервера

    setTimeout(function () {
        $(".fade").addClass('fade-in--error');
    }, 3000);

});









// тест аякс

$(function () {

    $('#w0').on('beforeSubmit', function () {
        var errors = false;

        $(this).find('textarea').each(function () {
            if ($.trim($(this).val()) == '') {
                errors = true;
            }
        });

        if (!errors) {
            var data = $('#w0').serialize();

            $.ajax({
                url: '/',
                type: 'POST',
                data: data,
                success: function (res) {
                    setTimeout(function () {
                        $('.modal--wrapper-hide').toggleClass('modal--wrapper-hight');
                    }, 400);
                    setTimeout(function () {
                        $(".btn--question").text('Ваше мнение учтено!').css({
                            'background-color': '#060606',
                            'color': '#B9960C'
                        });
                    }, 600);
                    setTimeout(function () {
                        $(".question--widget").css('transform', 'translate(-300px)');
                    }, 2400);
                    setTimeout(function () {
                        $(".question--widget").css('display', 'none');
                    }, 2600);


                },
                error: function () {
                    alert('ошибка');
                }
            });

        }

        return false;
    })
});