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
            <div class="row">
                <div class=" col-xl-12">
                    <div class="row d-flex inter__block " >
                        <div class="col-xs-12 ">
                            <div class="footer__text"  data-aos="fade-up" data-aos-offset="0" ><?php echo get_field('inf_text_footer_main_page', '54'); ?></div>
                        </div>
                        <div class="col-xs-12  ">
                            <div class="d-flex inter" data-aos="fade-up" data-aos-offset="0">
                                <div class="copy-block">
                                    <?php echo get_field('date_text_footer_main_page', '54'); ?>
                                </div>
                                <div data-aos="fade-up" data-aos-offset="0">
                                    <?php echo get_field('powered_footer_main_page', '54'); ?>
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
