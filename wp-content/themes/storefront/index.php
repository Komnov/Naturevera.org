<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package storefront
 */

get_header(); ?>

	<div id="primary" class="content-area" style="display: none;">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) :

			get_template_part( 'loop' );

		else :

			get_template_part( 'content', 'none' );

		endif;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

	    <section class="index__slider">
     <!-- Slider main container -->
<div class="swiper-container">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/img/other/banner.png" alt=""></a>
        </div>
        <div class="swiper-slide"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/img/other/banner.png" alt=""></a>
        </div>
        <div class="swiper-slide"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/img/other/banner.png" alt=""></a>
        </div>
        <div class="swiper-slide"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/img/other/banner.png" alt=""></a>
        </div>
        ...
    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>

    <!-- If we need navigation buttons -->
    <!-- <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div> -->

    <!-- If we need scrollbar -->
    <div class="swiper-scrollbar"></div>
</div>  
    </section>

    <section class="index__adv">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12 index__adv_text">
                    <p>
                        Мы - <span class="green">NATURA</span><span class="orange">VERA</span> - одна <br>из самых стабильных <br>и быстро развивающихся <br>компаний, работаем <br>на рынке производства <br>мебели и матрасов с 2015 <br>года.
                    </p>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12 index__adv_list">
                    <div class="index__adv_item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/adv1.svg" alt="">
                        <span class="title">5 место в России по мощностям выпускаемой продукции</span>
                    </div>
                    <div class="index__adv_item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/adv2.svg" alt="">
                        <span class="title">Производственный комплекс 70 000 м2</span>
                    </div>
                    <div class="index__adv_item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/adv3.svg" alt="">
                        <span class="title">1000 матрасов выпускается ежедневно</span>
                    </div>
                    <div class="index__adv_item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/adv4.svg" alt="">
                        <span class="title">5000 кроватей выпускается каждый месяц</span>
                    </div>
                    <div class="index__adv_item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/adv5.svg" alt="">
                        <span class="title">Собственное производство комплектующих</span>
                    </div>
                    <div class="index__adv_item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/adv6.svg" alt="">
                        <span class="title">Широкая ассортиментная матрица</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="category__blocks">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="index__title">Каталог продукции</div>
                </div>
                <div class="col-xl-12 col-lg-12 category__blocks_list">
                    <div class="category__blocks_item" id="mattress">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cat1.png" alt=""><span class="title">Матрасы</span>
                        <span class="more">Подробнее</span>
                    </div>
                    <div class="category__blocks_item" id="Beds">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cat2.png" alt=""><span class="title">Кровати</span>
                        <span class="more">Подробнее</span>
                    </div>
                    <div class="category__blocks_item" id="Accessories">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cat3.png" alt=""><span class="title">Аксессуары</span>
                        <span class="more">Подробнее</span>
                    </div>
                    <div class="sub__category">
                        <div data-id="mattress" class="items__list">
                            <div class="item bl">
                                <a href="">
                                    <span class="title">Коллекция Bonnel</span>
                                </a>
                            </div>
                            <div class="item er">
                                <a href="">
                                    <span class="title">Коллекция Easy Roll</span>
                                </a>
                            </div>
                            <div class="item lt">
                                <a href="">
                                    <span class="title">Коллекция Light</span>
                                </a>
                            </div>
                            <div class="item lo">
                                <a href="">
                                    <span class="title">Коллекция Larmento</span>
                                </a>
                            </div>
                            <div class="item fo">
                                <a href="">
                                    <span class="title">Коллекция Flavento</span>
                                </a>
                            </div>
                            <div class="item ts">
                                <a href="">
                                    <span class="title">Коллекция Trend Stile</span>
                                </a>
                            </div>
                            <div class="item ch">
                                <a href="">
                                    <span class="title">Детские матрасы</span>
                                </a>
                            </div>
                        </div>
                        <div data-id="Beds" class="items__list">
                            <div class="item kr">
                                <a href="">
                                    <span class="title">Каталог кроватей</span>
                                </a>
                            </div>
                        </div>
                        <div data-id="Accessories" class="items__list">
                            <div class="item pd">
                                <a href="">
                                    <span class="title">Подушки</span>
                                </a>
                            </div>
                            <div class="item nm">
                                <a href="">
                                    <span class="title">Наматрасники</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="index__materials">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="index__title">Материалы</div>
                    <div class="desc">Мы используем в производстве только <br>высококачественные материалы и наполнители</div>
                </div>
                <div class="col-xl-12 col-lg-12 index__materials_list">
                    <div class="index__materials_item sticker">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/other/kok.jpg" alt="">
                        <span class="title">Кокосовое волокно</span>
                    </div>
                    <div class="index__materials_item sticker">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/other/lateks.jpg" alt="">
                        <span class="title">Натуральный латекс</span>
                    </div>
                    <div class="index__materials_item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/other/hollcon.jpg" alt="">
                        <span class="title">Hollcon</span>
                    </div>
                    <div class="index__materials_item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/other/termovoilok.jpg" alt="">
                        <span class="title">Термовойлок</span>
                    </div>
                    <div class="index__materials_item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/other/polip.png" alt="">
                        <span class="title">Пенополиуретан</span>
                    </div>
                    <div class="index__materials_link">
                        <a href="">Все <br>материалы <br>и все о них</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="index__cooperation">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 index__title">
                    <div class="">Сотрудничество</div>
                </div>
                <div class="col-xl-6 col-lg-6 index__cooperation_image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/other/partners.jpg" alt="">
                </div>
                <div class="col-xl-6 col-lg-6 index__cooperation_form">
                    <div class="text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, recusandae magnam. Ex distinctio sit voluptate quibusdam possimus quis ducimus nihil. Magnam id nostrum temporibus quisquam, quos omnis necessitatibus sint natus.
                    </div>
                    <div class="pop_write_us">
                        <div>Напишите нам</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12 index__cooperation_desc">
                    Мы работаем на взаимовыгодных условиях со многими мебельными <br>брендами, среди которых
                </div>
                <div class="col-xl-12 col-lg-12 index__cooperation_partners">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/other/hoff_logo.jpg" alt="">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/other/mnogo_mebeli_logo.png" alt="" style="width: 270px;">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/other/perviy_mebelniy_logo.png" alt="">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/other/angs_logo.jpg" alt="">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/other/ld_logo.jpg" alt="">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/other/elba.jpg" alt="">
                </div>
            </div>
        </div>
    </section>

<?php
//do_action( 'storefront_sidebar' );
get_footer();
