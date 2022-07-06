<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="SHORTCUT ICON" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico">    
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <!--<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/media.css">-->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/jquery.arcticmodal-0.3.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/simple.css">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<?php do_action( 'storefront_before_site' ); ?>

<div id="page" class="hfeed site">
	<?php do_action( 'storefront_before_header' ); ?>


	    <header class="header">
        <div class="header__logo">
            <a href="/">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_header.svg" alt="">
            </a>
        </div>
        <div class="header__nav desktop">
            <nav>
                <?php
			wp_nav_menu(
				array(
					'theme_location'  => 'primary',
					'container_class' => 'primary-navigation',
				)
			);
			?>
            </nav>
        </div>
        <div class="header__phone">
            <!-- <div class="search"><input type="text" placeholder="Поиск"></div> -->
            <div class="site-search">
				
                <?php the_widget( 'WC_Widget_Product_Search', 'title=' ); ?>
			     <div class="img"></div>
            </div>
            <a href="tel:88005550777">8 (800) 555-0-777</a>
        </div>
        <div class="mobile__nav">
            <div class="burger">
                <span></span>
            </div>
        </div>
    </header>

	<?php
	/**
	 * Functions hooked in to storefront_before_content
	 *
	 * @hooked storefront_header_widget_region - 10
	 * @hooked woocommerce_breadcrumb - 10
	 */
	do_action( 'storefront_before_content' );
	?>

	<div id="content" class="site-content" tabindex="-1">
		<div class="col-full">

		<?php
		do_action( 'storefront_content_top' );
