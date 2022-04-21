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
// клон атрибутов
// $(function () {
// if ($(window).width() > 1000) {
//         $('#tab-additional_information').clone().appendTo('.woocommerce-product-gallery');
//     }
// });

// разделяю категории и товары
//$('li.product-category.product:last').after('<div class="catalog__width">Каталог товаров</div>');


//burger 
$(function() {
    $('.header .mobile__nav .burger').on('click', function () {
        $('.header .mobile__nav').toggleClass('active');
        $('body').toggleClass('fixed');
    });
});

//search adaptive
$(function () {
if ($(window).width() < 1500) {
        $('.site-search .img').on('click', function () {
        $(this).parent().parent().parent().toggleClass('active');
    });
    }
});

// fix header
$(function() {
    let header = $('.header');
    
    $(window).scroll(function() {
        if($(this).scrollTop() > 350) {
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

$(document).on('click', '.pop_write_us', function() {
    $('#callback-partners').arcticmodal();
});

//Мобильное меню
$(function(){
    $('.mobile__nav .sub-menu').toggle()
    $('.mobile__nav li.menu-item-has-children').append('<div class="arrow"></div>');
    $(document).on('click', '.mobile__nav li.menu-item-has-children .arrow', function () {
        $(this).parent('.menu-item').toggleClass('active');
        $(this).toggleClass('active');
        $(this).parent('.menu-item').children('.sub-menu').toggle(300)
    });
});

//в диллерах и филиалах ищем первые элементы для добавления иконок 
$(function () {
    $('#filials .wpb_wrapper').each(function() {
        $(this).find('.phone:first').addClass('icon');
    });
    $('#scroll_dealers .city_block .dealer_item').each(function() {
        $(this).find('.phone:first').addClass('icon');
        $(this).find('.email:first').addClass('icon');
    });
});

//в диллерах и филиалах ищем первые элементы для добавления иконок 
$(function () {
    let fndSkrutka = $('.product-left .woocommerce-product-attributes .woocommerce-product-attributes-item--attribute_pa_mozhno-skrutit-v-rulon');
    console.log(fndSkrutka);
    if (fndSkrutka.length > 0) {
        $('.product-left #wpgs-gallery .wcgs-carousel').addClass('skrutka');
    } 
});

//кнопка наверх
$(function(){
    $(window).scroll(function(){
        if($(window).scrollTop() > 100) {
            $('.scroll-top-container ').show();
        } else {
            $('.scroll-top-container ').hide();
        }
    });
 
    $('.scroll-top-container ').click(function(){
        $('html, body').animate({scrollTop: 0}, 100);
        return false;
    });
});
