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
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-12 footer__column contacts">
                    <div class="title">Контакты</div>
                    <div>141603, Московская область, г. Клин,</div>
                    <div>Ленинградское шоссе, 88 км., стр. 3, офис 102</div>
                    <div>Телефон: <a href="tel:84951059294">+7-495-105-92-94</a></div>
                    <div>E-mail: <a href="mail:INFO@2-MK.COM">INFO@2-MK.COM</a></div>
                    <div id="vk_groups" style="margin: 0px auto; width: 200px; height: 178px; background: none;"><iframe name="fXD8ce5d" frameborder="0" src="https://vk.com/widget_community.php?app=0&amp;width=200px&amp;_ver=1&amp;gid=203125452&amp;mode=1&amp;color1=FFFFFF&amp;color2=000000&amp;color3=5181B8&amp;class_name=&amp;height=400&amp;url=https%3A%2F%2Fnaturavera.su%2F&amp;referrer=https%3A%2F%2Fnaturavera.su%2Fwp-admin%2Fplugin-install.php%3Fs%3DYoast%2520SEO%26tab%3Dsearch%26type%3Dterm&amp;title=%D0%9C%D0%B0%D1%82%D1%80%D0%B0%D1%81%D1%8B%2C%20%D0%BA%D1%80%D0%BE%D0%B2%D0%B0%D1%82%D0%B8%20Natura%20Vera.%20%D0%9A%D1%83%D0%BF%D0%B8%D1%82%D1%8C%20%D0%BE%D1%82%20%D0%BF%D1%80%D0%BE%D0%B8%D0%B7%D0%B2%D0%BE%D0%B4%D0%B8%D1%82%D0%B5%D0%BB%D1%8F&amp;18b6721dd3a" width="200" height="141" scrolling="no" id="vkwidget1" style="overflow: hidden; height: 178px;"></iframe>&nbsp;</div>
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
    <div class="scroll-top-container" style="">
        <a href="#" id="scroll_top" title="Наверх"></a>
    </div>

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"
    integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.arcticmodal-0.3.min.js"></script>

<?php wp_footer(); ?>
</body>
</html>
