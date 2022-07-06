<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>

		</div><!-- .col-full -->
	</div><!-- #content -->

	<?php do_action( 'storefront_before_footer' ); ?>

	<footer id="colophon" class="site-footer" role="contentinfo" style="display: none;">
		<div class="col-full">

			<?php
			/**
			 * Functions hooked in to storefront_footer action
			 *
			 * @hooked storefront_footer_widgets - 10
			 * @hooked storefront_credit         - 20
			 */
			do_action( 'storefront_footer' );
			?>

		</div><!-- .col-full -->
	</footer><!-- #colophon -->

	<?php do_action( 'storefront_after_footer' ); ?>

</div><!-- #page -->


    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-xl-1 col-lg-1"></div>
                <div class="col-xl-2 col-lg-2 col-md-6 col-6 footer__column">
                    <div class="title">Natura Vera</div>
                    <div class="links">
                        <a href="/o-kompanii/">О Компании</a>
                        <a href="/proizodstvo/">Производство</a>
                        <a href="/napolniteli/">Наполнители</a>
                        <a href="/shop/">Каталог</a>
                        <a href="/sotrenichestvo/">Сотрудничество</a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-6 footer__column">
                    <div class="title">Продукция</div>
                    <div class="links">
                        <a href="/product-category/matrasy/">Матрасы</a>
                        <a href="/product-category/krovati/">Кровати</a>
                        <a href="/product-category/aksessuary/">Аксессуары</a>
                        <a href="/product-category/aksessuary/podushka/">Подушки</a>
                        <a href="/product-category/aksessuary/namatrasniki/">Топперы и наматрасники</a>
                    </div>
                </div>
                <div class="col-xl-1 col-lg-1"></div>
                <div class="col-xl-5 col-lg-5 col-md-12 col-12 footer__column contacts">
                    <div class="title">Контакты</div>
                    <div>141603, Московская область, г. Клин,</div>
                    <div>Ленинградское шоссе, 88 км., стр. 3, офис 102</div>
                    <div>Телефон: <a href="tel:84951059294">+7-495-105-92-94</a></div>
                    <div>E-mail: <a href="mail:welcome@naturavera.com">welcome@naturavera.com</a></div>
                </div>
            </div>
        </div>
    </footer>

    <div class="g-hidden">
        <div class="box-modal" id="callback-partners">
            <div class="box-modal_close arcticmodal-close">закрыть</div>
            <?php echo do_shortcode('[contact-form-7 id="149" title="Напишите нам!"]'); ?>
        </div>
    </div>

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"
    integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.arcticmodal-0.3.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>

<?php wp_footer(); ?>
</body>
</html>
