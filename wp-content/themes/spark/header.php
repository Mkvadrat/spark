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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title><?php echo mkvadrat_wp_title('','|', true, 'right'); ?></title>

    <?php wp_head(); ?>
</head>
<body>
    
<!-- The page -->
    <div id="page-preloader" class="preloader">
      <div class="loader"></div>
    </div>
	<div class="page <?php if(is_front_page()){ ?>home<?php } ?>">
    	<div class="bg__group">
        <div class="bg__block"></div>
    </div>
  	 

    <div class="section__fixed">
    	<div id="navbar">
	 	<a href="#"><img src="/wp-content/themes/spark/images/logo-scroll.svg"/></a>
	 </div>
        <div class="header header-scroll">
            <div class="top-left">
                <div class="languages__block">
                    <span class="active wow fadeInUp"><a href="<?php echo get_field('ru_header_main_page', '54'); ?>">RU</a></span>
                    <span class="wow fadeInUp" data-wow-delay="0.2s" ><a href="<?php echo get_field('en_header_main_page', '54'); ?>">EN</a></span>
                    <span class="wow fadeInUp" data-wow-delay="0.8s"><a href="<?php echo get_field('es_header_main_page', '54'); ?>">ES</a></span>
                </div>
              
            </div>
            <div class="top">
                <div class="logo__block "  >
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" >
                        <img class="wow slideInUp"
                            src="<?php header_image(); ?>"
                            height="<?php echo get_custom_header()->height; ?>"
                            width="<?php echo get_custom_header()->width; ?>"
                            alt="logotype"
                        />
                    </a>
                
                    <div class="logo__text wow slideInUp"  data-wow-delay="0.1s"><?php echo get_field('text_logo_header_main_page', '54'); ?></div>
                </div>
                
                <?php if(is_front_page()){ ?>
                <div class="title__block wow slideInUp" ><?php echo get_field('title_central_header_main_page', '54'); ?></div>
                <?php } ?>
            </div>
        </div>
        <a href="#menu" class="mburger mburger--tornado Fixed">
            <b></b>
            <b></b>
            <b></b>
        </a>
    </div>

    <div class="sidebar__left wow slideInUp ">
        <div class="menu" >
            <div class="btn-group-vertical">
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
                            'items_wrap'      => '<ul class="nav">%3$s</ul>',
                            'depth'           => 2,
                            'walker'          => new header_menu(),
                        ) );
                    }
                ?>
            </div>
        </div>
        <div class="contact__block wow slideInUp">
            <?php if(get_field('phone_header_main_page', '54')){ ?>
            <div class="icon__block"><img src="/wp-content/themes/spark/images/phone.png" width="19"/></div>
            <?php } ?>
            <div class="action__block">
                <?php if(get_field('phone_header_main_page', '54')){ ?>
                <a href="tel:<?php echo str_replace([' ', '(', ')', '-'], '', get_field('phone_header_main_page', '54')); ?>"><?php echo get_field('phone_header_main_page', '54'); ?></a>
                <?php } ?>
                
                <a href="mailto:info@sparc.spb.ru"><?php echo get_field('email_header_main_page', '54'); ?></a>
            </div>
        </div>
    </div>