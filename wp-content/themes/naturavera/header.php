<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package naturavera
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">

    <title>NATURAVERA</title>

	<?php wp_head(); ?>
</head>

    <header class="header">
        <div class="header__logo">
            <a href="/">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_header.png" alt="">
            </a>
        </div>
        <div class="header__nav desktop">
            <?php wp_nav_menu( [
                //'menu' => 'Главное меню',
                'theme_location' => 'header',
                'container' => 'nav',
                'container_class' => ' ',
                'menu_class' => ' ',
                'menu_id' => ' ',
            ]); ?>
        </div>
        <div class="header__phone">
            <!-- <div class="search"><input type="text" placeholder="Поиск"></div> -->
            <a href="tel:88005550777">8 (800) 555-0-777</a>
        </div>
        <div class="mobile__nav">
            <div class="burger">
                <span></span>
            </div>
        </div>
    </header>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

