new Swiper('.index__slider .swiper-container', {
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
});    

// категории на главной
$(function() {
        $('.sub__category > div').toggle();
        $('.category__blocks_list .category__blocks_item').on('click', function () {
        $('.sub__category > div.active').hide();
        var attr = $(this).attr('id');
        var kk = $('.sub__category > div[data-id="' + attr + '"]').show(100).addClass('active');
    });
    if ($(window).width() < 1000) {
        $(".category__blocks_list .category__blocks_item").click(function() { // ID откуда кливаем
            $('html, body').animate({
                scrollTop: $(".sub__category").offset().top  // класс объекта к которому приезжаем
            }, 300); // Скорость прокрутки
        });
    }
})

// клон мобильного меню
$(function () {
if ($(window).width() < 1000) {
        $('.header__nav nav').clone().appendTo('.mobile__nav');
    }
});

//burger 
$(function() {
    $('.header .mobile__nav').on('click', function () {
        $('.header .mobile__nav').toggleClass('active');
    });
});

// fix header
$(function() {
    let header = $('.header');
    
    $(window).scroll(function() {
        if($(this).scrollTop() > 150) {
        header.addClass('header_fixed');
        } else {
        header.removeClass('header_fixed');
        }
    });
});

// скрыем блоки для адаптива
$(function () {
    if ($(window).width() < 1000) {
            $('.footer .row .col-xl-1').addClass('display-none');
        }
    });