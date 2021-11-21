<?php
/**
 * Storefront engine room
 *
 * @package storefront
 */

/**
 * Assign the Storefront version to a var
 */
$theme              = wp_get_theme( 'storefront' );
$storefront_version = $theme['Version'];

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 980; /* pixels */
}

$storefront = (object) array(
	'version'    => $storefront_version,

	/**
	 * Initialize all the things.
	 */
	'main'       => require 'inc/class-storefront.php',
	'customizer' => require 'inc/customizer/class-storefront-customizer.php',
);

require 'inc/storefront-functions.php';
require 'inc/storefront-template-hooks.php';
require 'inc/storefront-template-functions.php';
require 'inc/wordpress-shims.php';

if ( class_exists( 'Jetpack' ) ) {
	$storefront->jetpack = require 'inc/jetpack/class-storefront-jetpack.php';
}

if ( storefront_is_woocommerce_activated() ) {
	$storefront->woocommerce            = require 'inc/woocommerce/class-storefront-woocommerce.php';
	$storefront->woocommerce_customizer = require 'inc/woocommerce/class-storefront-woocommerce-customizer.php';

	require 'inc/woocommerce/class-storefront-woocommerce-adjacent-products.php';

	require 'inc/woocommerce/storefront-woocommerce-template-hooks.php';
	require 'inc/woocommerce/storefront-woocommerce-template-functions.php';
	require 'inc/woocommerce/storefront-woocommerce-functions.php';
}

if ( is_admin() ) {
	$storefront->admin = require 'inc/admin/class-storefront-admin.php';

	require 'inc/admin/class-storefront-plugin-install.php';
}

/**
 * NUX
 * Only load if wp version is 4.7.3 or above because of this issue;
 * https://core.trac.wordpress.org/ticket/39610?cversion=1&cnum_hist=2
 */
if ( version_compare( get_bloginfo( 'version' ), '4.7.3', '>=' ) && ( is_admin() || is_customize_preview() ) ) {
	require 'inc/nux/class-storefront-nux-admin.php';
	require 'inc/nux/class-storefront-nux-guided-tour.php';
	require 'inc/nux/class-storefront-nux-starter-content.php';
}

/**
 * Note: Do not add any custom code here. Please use a custom plugin so that your customizations aren't lost during updates.
 * https://github.com/woocommerce/theme-customisations
 */

add_action( 'woocommerce_after_shop_loop_item', 'custom_display_post_meta', 9 );
function custom_display_post_meta() {
   global $product;
   $attr = array('pa_nagruzka', 'pa_zhestkost-storon', 'skrutit-v-rulon', 'pa_vysota', 'pa_razmer', 'pa_zhestkost', ); // указываем массив нужных атрибутов для вывода
   foreach ( $attr as $key=>$attribute ) {
   $values = wc_get_product_terms( $product->id, $attribute, array( 'fields' => 'names' ) );
   if (!empty($values))
    echo '<div class="category__product_attr"><span>'.wc_attribute_label($attribute).'</span> : <span>'. implode( ', ', $values ).'</span></div>';
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

    $size['width'] = 757;
    $size['height'] = 757;
    $size['crop']   = 0;
    return $size;
}
add_filter('woocommerce_get_image_size_gallery_thumbnail','add_gallery_thumbnail_size',2,10);
function add_gallery_thumbnail_size($size){

    $size['width'] = 757;
    $size['height'] = 757;
    $size['crop']   = 1;
    return $size;
}

add_action('after_setup_theme', 'remove_zoom_theme_support', 100);
function remove_zoom_theme_support() {
    remove_theme_support('wc-product-gallery-zoom');
}

