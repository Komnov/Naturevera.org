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
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/jquery.arcticmodal-0.3.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/simple.css">


    <!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();
   for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
   k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(94695339, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/94695339" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
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
