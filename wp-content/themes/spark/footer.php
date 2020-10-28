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

    <?php 
        if(defined('ICL_LANGUAGE_CODE') && ICL_LANGUAGE_CODE == 'en'){ //english
        ?>
            <a id="back2Top"  href="#"> <img src="/wp-content/themes/spark/images/arr-up.svg"> <span>Top</span></a>
        <?php
        }elseif(defined('ICL_LANGUAGE_CODE') && ICL_LANGUAGE_CODE == 'es'){ //spanish
        ?>
            <a id="back2Top"  href="#"> <img src="/wp-content/themes/spark/images/arr-up.svg"> <span>Inicio</span></a>
        <?php
        }else{
        ?>
            <a id="back2Top"  href="#"> <img src="/wp-content/themes/spark/images/arr-up.svg"> <span>Наверх</span></a>
        <?php
        }
    ?> 
    
    <footer>
        <div class="footer pad-l">
            <div class="row">
                <div class=" col-xl-12">
                    <div class="row d-flex inter__block " >
                        <div class="col-xs-12 ">
                            <?php 
                                if(defined('ICL_LANGUAGE_CODE') && ICL_LANGUAGE_CODE == 'en'){ //english
                                ?>
                                    <div class="footer__text"  ><?php echo get_field('inf_text_footer_main_page', '1219'); ?></div>
                                <?php
                                }elseif(defined('ICL_LANGUAGE_CODE') && ICL_LANGUAGE_CODE == 'es'){ //spanish
                                ?>
                                    <div class="footer__text"    ><?php echo get_field('inf_text_footer_main_page', '1221'); ?></div>
                                <?php
                                }else{
                                ?>
                                    <div class="footer__text"   ><?php echo get_field('inf_text_footer_main_page', '54'); ?></div>
                                <?php
                                }
                            ?> 
                        </div>
                        <div class="col-xs-12  ">
                            <div class="d-flex inter" >
                                <div class="copy-block">
                                    <?php 
                                        if(defined('ICL_LANGUAGE_CODE') && ICL_LANGUAGE_CODE == 'en'){ //english
                                        ?>
                                            <?php echo get_field('date_text_footer_main_page', '1219'); ?>
                                        <?php
                                        }elseif(defined('ICL_LANGUAGE_CODE') && ICL_LANGUAGE_CODE == 'es'){ //spanish
                                        ?>
                                            <?php echo get_field('date_text_footer_main_page', '1221'); ?>
                                        <?php
                                        }else{
                                        ?>
                                            <?php echo get_field('date_text_footer_main_page', '54'); ?>
                                        <?php
                                        }
                                    ?> 
                                </div>
                                <div >
                                    <?php 
                                        if(defined('ICL_LANGUAGE_CODE') && ICL_LANGUAGE_CODE == 'en'){ //english
                                        ?>
                                            <?php echo get_field('powered_footer_main_page', '1219'); ?>     
                                        <?php
                                        }elseif(defined('ICL_LANGUAGE_CODE') && ICL_LANGUAGE_CODE == 'es'){ //spanish
                                        ?>
                                            <?php echo get_field('powered_footer_main_page', '1221'); ?>   
                                        <?php
                                        }else{
                                        ?>
                                            <?php echo get_field('powered_footer_main_page', '54'); ?>  
                                        <?php
                                        }
                                    ?> 
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