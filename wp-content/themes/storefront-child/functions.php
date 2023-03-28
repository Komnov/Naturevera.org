<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );

// END ENQUEUE PARENT ACTION

//выводим атрибуты характериситики в превью карточки товара в каталоге
add_action( 'woocommerce_after_shop_loop_item', 'custom_display_post_meta', 9 );
function custom_display_post_meta() {
   global $product;
   $attr = array('pa_nagruzka', 'skrutit-v-rulon', 'pa_vysota', 'pa_razmer', 'pa_zhestkost', 'pa_zhestkost-storon', 'pa_vysota-izgolovya', 'pa_mehanizm-transformaczii', 'pa_vysota-nozhki', ); // указываем массив нужных атрибутов для вывода
   foreach ( $attr as $key=>$attribute ) {
   $values = wc_get_product_terms( $product->id, $attribute, array( 'fields' => 'names' ) );
   if (!empty($values))
    echo '<div class="category__product_attr"><span>'.wc_attribute_label($attribute).'</span><span>'. implode( ', ', $values ).'</span></div>';
    }
}

//Детали в характеристики
add_filter( 'woocommerce_product_additional_information_tab_title', function(){
    return 'Характеристики';
} );
add_filter('woocommerce_product_additional_information_heading', 'devise_product_additional_information_heading');
function devise_product_additional_information_heading() {
    echo 'Характеристики';
}


// размер изображений в карточке товара


// количество похожих товаров
add_filter( 'woocommerce_output_related_products_args', 'jk_related_products_args' );
 function jk_related_products_args( $args ) {
 
$args['posts_per_page'] = 5; // количество "Похожих товаров"
 $args['columns'] = 5; // количество колонок
 return $args;
}

//  
add_filter( 'jpeg_quality', 'my_filter_img' );
function my_filter_img( $quality ) {  
	return 100;
}
add_filter('woocommerce_get_image_size_single','add_single_size',2,10);
function add_single_size($size){

    $size['width'] = 800;
    $size['height'] = 500;
    $size['crop']   = 0;
    return $size;
}
add_filter('woocommerce_get_image_size_gallery_thumbnail','add_gallery_thumbnail_size',2,10);
function add_gallery_thumbnail_size($size){

    $size['width'] = 300;
    $size['height'] = 200;
    $size['crop']   = 0;
    return $size;
}

add_action('after_setup_theme', 'remove_zoom_theme_support', 100);
function remove_zoom_theme_support() {
    remove_theme_support('wc-product-gallery-zoom');
}


//создаем новую область меню
/*add_action('after_setup_theme', function() {
	add_theme_support('menus');
	register_nav_menus([
		'index-menu' => 'Меню на главной'
	]);
});*/

// Подключаем стили и скрипты к дочерней теме
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
function theme_name_scripts() {
    wp_enqueue_style( 'style.css', '/wp-content/themes/storefront-child/assets/css/style.css' );
	wp_enqueue_style( 'media.css', '/wp-content/themes/storefront-child/assets/css/media.css' );
    wp_enqueue_script( 'arcticmodal.js', '/wp-content/themes/storefront-child/assets/js/jquery.arcticmodal-0.3.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'main.js', '/wp-content/themes/storefront-child/assets/js/main.js', array(), '1.0.0', true );
}


//выводим характеристики и кнопку купить под изображением в карточке
add_action('woocommerce_before_single_product_summary', 'woocommerce_template_single_add_to_cart', 40);
add_action('woocommerce_before_single_product_summary', 'woocommerce_output_product_data_tabs', 50);
add_action('woocommerce_before_single_product_summary', 'woocommerce_template_single_title', 5);

//удаляю кнопку купить в описании карточки, характеристики, похожие товары
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );
