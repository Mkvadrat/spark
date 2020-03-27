<?php
/*
Theme Name: Spark
Theme URI: http://mkvadrat.com/
Author: M2
Author URI: http://mkvadrat.com/
Description: Тема для сайта http://mkvadrat.com/
Version: 1.0
*/
?>

    <footer>
        <div class="footer pad-l">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="row">
                            <?php if(get_field('phone_footer_main_page', '54') || get_field('fax_footer_main_page', '54') || get_field('email_footer_main_page', '54')){ ?>
                            <div class="col-xs-6 col-md-6 col-lg-4">
                                <?php if(get_field('phone_text_footer_main_page', '54')){ ?>
                                <div class="footer__info">
                                    <p><?php echo get_field('email_footer_main_page', '54'); ?></p>
                                    <a href="tel:<?php echo str_replace([' ', '(', ')', '-'], '', get_field('phone_footer_main_page', '54')); ?>"><?php echo get_field('phone_footer_main_page', '54'); ?></a>
                                </div>
                                <?php } ?>
                                <?php if(get_field('fax_text_footer_main_page', '54')){ ?>
                                <div class="footer__info">
                                    <p><?php echo get_field('email_footer_main_page', '54'); ?></p>
                                    <a href="tel:<?php echo str_replace([' ', '(', ')', '-'], '', get_field('fax_footer_main_page', '54')); ?>"><?php echo get_field('fax_footer_main_page', '54'); ?></a>
                                </div>
                                <?php } ?>
                                <?php if(get_field('email_footer_main_page', '54')){ ?>
                                <div class="footer__info">
                                    <p><?php echo get_field('email_text_footer_main_page', '54'); ?></p>
                                    <a href="mailto:<?php echo get_field('email_footer_main_page', '54'); ?>"><?php echo get_field('email_footer_main_page', '54'); ?></a>
                                </div>
                                <?php } ?>
                            </div>
                            <?php } ?>
                            <div class="col-xs-6 col-md-6 col-lg-4">
                                <div class="footer__info address__info">
                                    <p><?php echo get_field('address_text_footer_main_page', '54'); ?></p>
                                    <p><?php echo get_field('address_footer_main_page', '54'); ?></p>
                                </div>
                                <div class="footer__info address__info">
                                    <a href="#">Схема проезда</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="row d-flex inter__block">
                            <div class="col-xs-12 col-lg-6">
                                <div class="footer__text"><?php echo get_field('inf_text_footer_main_page', '54'); ?></div>
                            </div>
                            <div class="col-xs-12 col-lg-6">
                                <div class="row d-flex inter">
                                    <div class="col-sm-6"><?php echo get_field('date_text_footer_main_page', '54'); ?></div>
                                    <div class="col-sm-6"><?php echo get_field('powered_footer_main_page', '54'); ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
<!-- The menu -->
<nav id="menu">
    <?php
        if (has_nav_menu('header_menu')){
            wp_nav_menu( array(
                'theme_location'  => 'header_menu',
                'menu'            => '',
                'container'       => false,
                'container_class' => '',
                'container_id'    => '',
                'menu_class'      => '',
                'menu_id'         => '',
                'echo'            => true,
                'fallback_cb'     => 'wp_page_menu',
                'before'          => '',
                'after'           => '',
                'link_before'     => '',
                'link_after'      => '',
                'items_wrap'      => '<ul>%3$s</ul>',
                'depth'           => 2,
                'walker'          => new mobile_menu(),
            ) );
        }
    ?>
</nav>

<?php wp_footer(); ?>

</body>
</html>
