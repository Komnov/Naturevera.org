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

<div class="index-page">

    <section class="index__adv">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 index__adv_text">
                    <p>
                        <span class="green">NATURA</span><span class="orange">VERA</span> — одна из самых стабильных и быстро развивающихся компаний, работает на рынке производства мебели и матрасов с 2015 года. В каталоге продукции — анатомические матрасы разных видов конструкции и степени жесткости, а также современные кровати с системами хранения и аксессуары для сна.
                    </p>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 index__adv_list">
                    <div class="index__adv_item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/index_adv1.svg" alt="">
                        <span class="title">Производственный <br>комплекс <b>70 000 м2</b></span>
                    </div>
                    <div class="index__adv_item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/index_adv3.svg" alt="">
                        <span class="title"><b>Широкая</b><br>ассортиментная матрица</span>
                    </div>
                    <div class="index__adv_item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/index_adv2.svg" alt="">
                        <span class="title"><b>1000 матрасов</b><br>выпускается ежедневно</span>
                    </div>
                    <div class="index__adv_item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/index_adv4.svg" alt="">
                        <span class="title"><b>Собственное</b> производство <br>комплектующих</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="category__blocks" style="display: none;">
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
                                <a href="/product-category/matrasy/kollekcziya-bonnel/">
                                    <span class="title">Коллекция Bonnel</span>
                                </a>
                            </div>
                            <div class="item er">
                                <a href="/product-category/matrasy/kollekcziya-easy-roll/">
                                    <span class="title">Коллекция Easy Roll</span>
                                </a>
                            </div>
                            <div class="item lt">
                                <a href="/product-category/matrasy/kollekcziya-light/">
                                    <span class="title">Коллекция Light</span>
                                </a>
                            </div>
                            <div class="item lo">
                                <a href="/product-category/matrasy/kollekcziya-larmento/">
                                    <span class="title">Коллекция Larmento</span>
                                </a>
                            </div>
                            <div class="item fo">
                                <a href="/product-category/matrasy/kollekcziya-flavento/">
                                    <span class="title">Коллекция Flavento</span>
                                </a>
                            </div>
                            <div class="item ts">
                                <a href="/product-category/matrasy/kollekcziya-trend-stil/">
                                    <span class="title">Коллекция Trend Style</span>
                                </a>
                            </div>
                            <div class="item ch">
                                <a href="/product-category/matrasy/detskie-matrasy/">
                                    <span class="title">Детские матрасы</span>
                                </a>
                            </div>
                        </div>
                        <div data-id="Beds" class="items__list">
                            <div class="item kr">
                                <a href="/product-category/krovati/">
                                    <span class="title">Каталог кроватей</span>
                                </a>
                            </div>
                        </div>
                        <div data-id="Accessories" class="items__list">
                            <div class="item pd">
                                <a href="/product-category/aksessuary/podushka/">
                                    <span class="title">Подушки</span>
                                </a>
                            </div>
                            <div class="item nm">
                                <a href="/product-category/aksessuary/namatrasniki/">
                                    <span class="title">Наматрасники</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="index__category">
        <div class="container">
            <div class="row index__category_container">
            <a class="index__category_item" href="/product-category/matrasy/">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/index_cat1.svg" alt="">
            <span class="title">Матрасы</span>
            </a>
            <a class="index__category_item" href="/product-category/krovati/">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/index_cat2.svg" alt="">
                <span class="title">Интерьерные <br>кровати</span>
            </a>
            <a class="index__category_item" href="/product-category/aksessuary/podushka/">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/index_cat3.svg" alt="">
                <span class="title">Подушки</span>
            </a>
            <a class="index__category_item" href="/product-category/aksessuary/namatrasniki/">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/index_cat4.svg" alt="">
                <span class="title">Наматрасники</span>
            </a>
            </div>
        </div>
    </section>
        
    <section class="index__slider_gallery">
        <div class="container">
            <div class="row index__slider_gallery-container">
                <div class="col-xl-4 col-lg-4 col-md-6 col-6 item"><?php
                    echo do_shortcode('[smartslider3 slider="3"]');
                    ?>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-6 item">
                    <?php
                        echo do_shortcode('[smartslider3 slider="4"]');
                    ?>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-12 item">
                    <?php
                        echo do_shortcode('[smartslider3 slider="5"]');
                    ?>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-12 item mobile">
                    <?php
                        echo do_shortcode('[smartslider3 slider="6"]');
                    ?>
                </div>
            </div>
        </div>
    </section>


    
        <section class="index__materials">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-12">
                        <div class="index_title">Наполнители</div>
                    </div>
                    <div class="col-xl-12 col-12">
                        <div class="index__materials_subtitle">Мы используем современные и экологичные  материалы, соблюдая лучшие <br>традиции качества при производстве нашей продукции</div>
                    </div>
                    <div class="col-xl-12 col-12 index__materials-container">
                        <a href="" class="item">
                            <div class="img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/other/index_mat1.png" alt="">
                            </div>
                            <span>Кокос</span>
                        </a>
                        <a href="" class="item">
                            <div class="img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/other/index_mat2.png" alt="">
                            </div>
                            <span>Сизаль</span>
                        </a>
                        <a href="" class="item">
                            <div class="img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/other/index_mat3.png" alt="">
                            </div>
                            <span>Memory foam</span>
                        </a>
                        <a href="" class="item">
                            <div class="img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/other/index_mat4.png" alt="">
                            </div>
                            <span>Латекс</span>
                        </a>
                        <a href="" class="item">
                            <div class="img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/other/index_mat5.png" alt="">
                            </div>
                            <span>7-зональный <br>латекс Алое</span>
                        </a>
                        <a href="" class="item">
                            <div class="img about">
                                <span>Все материалы и все о них</span>
                            </div>

                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="index_works_adv">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-12">
                        <div class="index_title">Преимущества сотрудничества с нами</div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-12 col-12 item">
                        <div class="item_img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/ind_work_adv1.svg" alt=""></div>
                        <span class="title">Надежный производитель</span>
                        <span class="desc">Наше производство оснащено высокотехнологичным оборудованием для производства комплектующих и сборки матрасов. В изготовлении используются только натуральные наполнители и гипоаллергенные материалы. Высокое качество нашей продукции подтверждено сертификатами соответствия. </span>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-12 col-12 item">
                        <div class="item_img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/ind_work_adv2.svg" alt=""></div>
                        <span class="title">Конкуретная цена</span>
                        <span class="desc">Мы предлагаем выгодные ценовые условия для наших партнеров. Это позволяет подобрать подходящие матрасы и аксессуары даже самым требовательным клиентам. Конкурентные цены на продукцию гарантируют активный рост прибыльности вашего бизнеса. </span>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-12 col-12 item">
                        <div class="item_img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/ind_work_adv3.svg" alt=""></div>
                        <span class="title">Обучение партнеров</span>
                        <span class="desc">Мы комплексно подходим к сотрудничеству и предоставляем партнерам все необходимые обучающие материалы и методические пособия, необходимые для легкого знакомства с продуктом. Обучение торгового персонала проводится онлайн и офлайн.</span>
                    </div>
                </div>
            </div>
        </section>
        <artcile class="footer__adv">
            <div class="container">
                <div class="row">
                    <div class="item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/footer_adv1.svg" alt="">
                        <span class="title">Региональные <br>склады</span>
                    </div>
                    <div class="item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/footer_adv2.svg" alt="">
                        <span class="title">Гарантия качества <br>до 10 лет</span>
                    </div>
                    <div class="item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/footer_adv3.svg" alt="">
                        <span class="title">Удобный сервис <br>для клиента</span>
                    </div>
                    <div class="item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/footer_adv4.svg" alt="">
                        <span class="title">Собственный контроль <br>качества</span>
                    </div>
                </div>
            </div>
        </artcile>
            
</div>
<?php
//do_action( 'storefront_sidebar' );
get_footer();
