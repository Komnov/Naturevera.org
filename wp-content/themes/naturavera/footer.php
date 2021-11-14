<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package naturavera
 */

?>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-xl-1 col-lg-1"></div>
                <div class="col-xl-2 col-lg-2 col-md-6 col-6 footer__column">
                    <div class="title">Natura Vera</div>
                    <?php wp_nav_menu( [
                        //'menu' => 'Главное меню',
                        'theme_location' => 'header',
                        'container' => 'nav',
                        'container_class' => ' ',
                        'menu_class' => ' ',
                        'menu_id' => ' ',
                        //'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>'
                        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>'
                    ]); ?>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-6 footer__column">
                    <div class="title">Продукция</div>
                    <div class="links">
                        <a href="">Матрасы</a>
                        <a href="">Кровати</a>
                        <a href="">Топперы и наматрасники</a>
                        <a href="">Подушки</a>
                        <a href="">Аксессуары</a>
                    </div>
                </div>
                <div class="col-xl-1 col-lg-1"></div>
                <div class="col-xl-5 col-lg-5 col-md-12 col-12 footer__column contacts">
                    <div class="title">Продукция</div>
                    <div>141603, Московская область, г. Клин,</div>
                    <div>Ленинградское шоссе, 88 км., стр. 3, офис 102</div>
                    <div>Телефон: <a href="tel:88005550777">8 (800) 555-0-777</a></div>
                    <div>E-mail: <a href="mail:welcome@naturavera.com">welcome@naturavera.com</a></div>
                </div>
            </div>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"
    integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>

<?php wp_footer(); ?>

</body>
</html>
