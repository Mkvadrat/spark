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
        <?php if(is_front_page()){ ?>
        <?php 
            if(defined('ICL_LANGUAGE_CODE') && ICL_LANGUAGE_CODE == 'en'){ //english
            ?>
                <div class="bg__block">
                    <video muted loop autoplay oncanplay="this.muted=true" poster="<?php echo get_field('image_header_main_page', '1219'); ?>">
                        <source src="<?php echo get_field('video_header_main_page', '1219'); ?>" type='video/mp4' />
                    </video>
                </div>
            <?php
            }elseif(defined('ICL_LANGUAGE_CODE') && ICL_LANGUAGE_CODE == 'es'){ //spanish
            ?>
                <div class="bg__block">
                    <video muted loop autoplay oncanplay="this.muted=true" poster="<?php echo get_field('image_header_main_page', '1221'); ?>">
                        <source src="<?php echo get_field('video_header_main_page', '1221'); ?>" type='video/mp4' />
                    </video>
                </div>
            <?php
            }else{
            ?>
                <div class="bg__block">
                    <video muted loop autoplay oncanplay="this.muted=true" poster="<?php echo get_field('image_header_main_page', '54'); ?>">
                        <source src="<?php echo get_field('video_header_main_page', '54') ? get_field('video_header_main_page', '54') : ''; ?>" type='video/mp4' />
                    </video>
                </div>
            <?php
            }
        ?>
        <?php }else{ ?>
        <div class="bg__block"></div>
        <?php } ?>
    </div>
        
    <div class="section__fixed">
        <div id="navbar">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="/wp-content/themes/spark/images/logo-scroll.svg"/></a>
        </div>
        <div class="header header-scroll">
            <?php 
                $languages = icl_get_languages('skip_missing=0&orderby=code');
                if(!empty($languages)){
            ?>
            <div class="top-left">
                <div class="languages__block">
                <?php 
                    foreach($languages as $l){
                        if(!$l['active']){
                            echo '<span class="wow fadeInUp"><a class="wpml-ls-item" href="'.$l['url'].'">' . $l['tag'] . '</a></span>';
                        }else{
                            echo '<span class="active wow fadeInUp"><a class="wpml-ls-item" href="'.$l['url'].'">' . $l['tag'] . '</a></span>';
                        }
                    }
                ?>
                </div>
            </div>
            <?php
                }
            ?>

            <div class="top">
                <div class="logo__block "  >
                 
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" >
                          <svg height="49.106" viewBox="0 0 366.1 49.106" width="366.1" xmlns="http://www.w3.org/2000/svg"><g transform="translate(0 .406)">
                   <path class="animation-logo" d="m177.2 11.7c-1.8 0-3.9-2.2-2-3.9 2.1-2.1 5-3.1 9.2-3.1h1.1a17.174 17.174 0 0 1 10.7 3.5h6.8a21.833 21.833 0 0 0 -14.9-7.9c-.7-.1-2.6-.2-2.6-.2-9.2-.2-15.3 4.7-20.1 11.6h-19.9a17.355 17.355 0 0 1 -3.8-1.4c1.9 4.8 4.1 7.9 6.3 8.7h15a12.224 12.224 0 0 0 .2 5.7l-10.8.1a12.471 12.471 0 0 1 -4.1-1.4c2.1 5.6 4.2 8.3 6.1 8.2h39.6c3.2.8 3.5 3.8.4 5.3a17.672 17.672 0 0 1 -9 2.5h-.8c-4.1-.1-7.5-1.9-10.6-3.9h-6.4c4.3 4.7 10 8.5 17.8 8.4h.8c8.3-.3 15-3.8 19.7-12.2h11.1c1.8.1 3.9-2.8 6-8a12.992 12.992 0 0 1 -4.3 1.1h-10.5a15.609 15.609 0 0 0 -.1-5.7h14.4c2.4-.3 4.7-3.2 6.9-8.5a8.677 8.677 0 0 1 -3.4 1.2zm24.4 17.7c-.6-2.6-1.7-5.1-4.6-5.1h-22.6c-6.8 0-7.1-5.1-4.7-10.4.8 3 2.4 5.2 5.5 5.2h10.4l12.2-.1c5.6 0 6.2 5.1 3.8 10.4z" fill="none" /><g fill="#fff"><path d="m255.4 22.5-9.8-4.3-1.7-.8h13.3v-7.3h-18a10.777 10.777 0 0 0 -4.9 2.1 7.967 7.967 0 0 0 -2.4 4.5 4.415 4.415 0 0 0 .9 3.8 11.521 11.521 0 0 0 3.3 2.5l10.3 4.4h-13.4v7.4h17.3a11.591 11.591 0 0 0 6.1-1.6 6.966 6.966 0 0 0 2.9-4.6 5.09 5.09 0 0 0 -.8-3.6 6.316 6.316 0 0 0 -3.1-2.5zm1.7 5.8a4.364 4.364 0 0 1 -1.9 3.3 8.607 8.607 0 0 1 -4.9 1.3h-15.3v-3.4h12a3.661 3.661 0 0 0 1.8-.4 1.087 1.087 0 0 0 .7-1 1.113 1.113 0 0 0 -.3-1 7.072 7.072 0 0 0 -1.8-1.2l-10.4-4.7a6.3 6.3 0 0 1 -2.6-2 2.176 2.176 0 0 1 -.5-2.3 5.853 5.853 0 0 1 1.7-3.3 6.672 6.672 0 0 1 3.8-1.5l15.8-.1v3.4h-11.5a9.079 9.079 0 0 0 -2.3.3 1.352 1.352 0 0 0 -.9.9 1.389 1.389 0 0 0 .2 1.1 4.507 4.507 0 0 0 1.4 1l12.2 5.4a5.021 5.021 0 0 1 2.3 1.8 2.643 2.643 0 0 1 .5 2.4z"/><path d="m77 11.3a6.069 6.069 0 0 0 -3.7-1.2h-17.4v7.3h10.2l-12.3 9.3a4.314 4.314 0 0 0 -1.4 3.2 5.546 5.546 0 0 0 1.3 3.4 14.309 14.309 0 0 0 1.5 1.1 8.24 8.24 0 0 0 1.8.4h14.9l.8-.3 6-5.7v-14.4a4.428 4.428 0 0 0 -1.7-3.1zm-.5 16.7-5 4.8h-14.5a2.92 2.92 0 0 1 -.9-.2c-.3-.2-.9-.7-.9-.7a3.981 3.981 0 0 1 -.9-2.1 2.035 2.035 0 0 1 .6-1.5l13.2-10.1c1.1-.7 1.4-1.3 1.1-2.1-.3-.5-.9-.7-1.9-.7h-9.5v-3.4h15.4a4.069 4.069 0 0 1 2.4.8 2.371 2.371 0 0 1 .9 1.5z"/><path d="m62 29.5h9.5v-9.2l-10.1 7.3zm7.3-5.2v3.1h-4.3z"/><path d="m27.1 34.9h9.2v-17.5h5.7v17.4h9.3v-24.7h-24.2zm2.1-22.8h20.2v20.8h-5.2v-17.4h-9.9v17.4h-5.2z"/><path d="m108.4 10.9a10.092 10.092 0 0 0 -1.5-.7 14.769 14.769 0 0 0 -2.1-.1h-18.2l-.8.2-5.8 5.7v32.7l9.3-8.6v-5.9l5.6-5.2 13.6-12.6a3.935 3.935 0 0 0 1.3-2.9 3.581 3.581 0 0 0 -1.1-2.5zm-1.5 4.4-12 11.1-7.7 7v5.9l-5.2 4.7v-27.2l5-4.7h17.7a8.6 8.6 0 0 1 1.6.1 9.44 9.44 0 0 0 .9.3 1.606 1.606 0 0 1 .5 1.1 2.289 2.289 0 0 1 -.8 1.7z"/><path d="m96.7 15.5h-9.6v12.9s10.3-9.6 10.6-9.9c.9-.8 1.1-1.5.8-2.2a1.762 1.762 0 0 0 -1.8-.8zm-7.4 8.1v-6.2h6.6z"/><path d="m311.8 11.4a5.405 5.405 0 0 0 -3.7-1.3h-17.4v7.4h10.2l-.3.2-12 9.1a4.588 4.588 0 0 0 -1.5 3.1 4.762 4.762 0 0 0 1.4 3.4 3.269 3.269 0 0 0 1.5 1.1 4.075 4.075 0 0 0 1.8.5h14.9l.8-.3 6-5.7-.1-14.4a3.838 3.838 0 0 0 -1.6-3.1zm-.4 16.7-5 4.7h-14.5a1.486 1.486 0 0 1 -.9-.2 2.361 2.361 0 0 1 -.9-.6 4.306 4.306 0 0 1 -.9-2.2 2.529 2.529 0 0 1 .6-1.5l13.2-10c1.1-.7 1.4-1.3 1.1-2.1-.3-.5-.9-.7-1.9-.8h-9.5v-3.3h15.4a5.134 5.134 0 0 1 2.4.7 2.6 2.6 0 0 1 .9 1.6z"/><path d="m296.5 28.8a1.086 1.086 0 0 0 1.2.7h8.4v-9.1l-9.5 7a1.691 1.691 0 0 0 -.1 1.4zm7.5-4.4v3.1h-4.2z"/><path d="m339.5 17.2a3.2 3.2 0 0 0 1.2-2.1 3.33 3.33 0 0 0 -.1-2.2 3.553 3.553 0 0 0 -1.1-1.6c-.2-.1-.3-.2-.5-.3a6.65 6.65 0 0 0 -3.4-.9h-14.2l-.6.3-6 5.7v18.9h9.2v-9.1l8.9 9.1h10.6l-11-11.6zm-.8 15.7h-4.9l-9.8-9.8c.6-.5 5.7-4.6 6.8-5.6 1.1-.8 1.1-1.5.3-2.2a3.233 3.233 0 0 0 -1.7-.3h-7.5v17.8h-5.2v-16l5-4.7h13.8a5.186 5.186 0 0 1 2.4.5 6.469 6.469 0 0 1 .8.9 2.161 2.161 0 0 1 .1 1.1 1.456 1.456 0 0 1 -.6.9l-8.6 7.5zm-14.8-12.4v-3.5h4.3c-.5.5-3.5 2.9-4.3 3.5z"/><path d="m352.1 27a4.209 4.209 0 0 1 -2.8-4v-.4a6.232 6.232 0 0 1 1.6-3.7 3.6 3.6 0 0 1 1.2-.8 4.677 4.677 0 0 1 2.5-.5h4l7.5-7.4-12.8.1h-1.3a15.7 15.7 0 0 0 -6.9 2.3 11.949 11.949 0 0 0 -5 6.3 10.038 10.038 0 0 0 -.4 2.4c-.1.9-.1 2.7-.1 2.7 0 .5.1 1 .1 1.6a9.869 9.869 0 0 0 1 2.7 11.4 11.4 0 0 0 3.9 4.8c1.7 1 3.9 1.6 7.6 1.8a20.083 20.083 0 0 0 2.5.1h10.2v-7.4h-10.1a24.587 24.587 0 0 1 -2.7-.6zm10.6 6-5.2-.1h-5.3c-3.3-.2-5.2-.7-6.6-1.5-1.6-1.1-2.4-2.4-3.5-4.6a26.8 26.8 0 0 1 -.5-3 19.268 19.268 0 0 1 .1-2.4 7.107 7.107 0 0 1 .4-2 10.26 10.26 0 0 1 4.1-5.3 13.866 13.866 0 0 1 5.8-2h9.1l-3.4 3.3h-3.1a7.658 7.658 0 0 0 -2.5.4h-.1a5.452 5.452 0 0 0 -2.4 1.5 7.32 7.32 0 0 0 -2.3 5v.7a6.423 6.423 0 0 0 4.8 6.2h.1a9.862 9.862 0 0 0 2.4.3h8z"/><path d="m290 13.5a4.066 4.066 0 0 0 -1.1-2.5l-.3-.2a4.714 4.714 0 0 0 -1.5-.6 14.919 14.919 0 0 0 -2.1-.2h-18.2l-.8.3-5.9 5.7v32.7l9.3-8.6v-5.9l19.2-17.7a4.448 4.448 0 0 0 1.4-3zm-2.9 1.7-19.4 17.9-.3.3v5.8l-5.2 4.8v-27.2l5-4.8h17.7a8.753 8.753 0 0 1 1.6.2 1.613 1.613 0 0 1 .9.3 1.606 1.606 0 0 1 .5 1.1 2.088 2.088 0 0 1 -.8 1.6z"/><path d="m276.9 15.4h-9.6v12.9s10.3-9.6 10.6-9.9c.9-.8 1.1-1.5.8-2.2a1.841 1.841 0 0 0 -1.8-.8zm-7.4 8.1v-6.2h6.6c-.4.3-4.9 4.5-6.6 6.2z"/><path d="m11.5 18.9a2.836 2.836 0 0 1 1.1-.8 4.345 4.345 0 0 1 2.5-.5h4l.3-.3 5.5-5.4 1.7-1.8h-2.5l-10.3.1h-1.2a14.544 14.544 0 0 0 -7 2.3 11.949 11.949 0 0 0 -5 6.3 20.024 20.024 0 0 0 -.4 2.4 10.554 10.554 0 0 0 -.2 2.5v.1a7.772 7.772 0 0 0 .2 1.6 7.179 7.179 0 0 0 .9 2.7 11.1 11.1 0 0 0 3.9 4.9c1.7 1 4 1.6 7.6 1.9a20.083 20.083 0 0 0 2.5.1h10.2v-7.4h-10a7.512 7.512 0 0 1 -2.6-.5h-.1a4.209 4.209 0 0 1 -2.8-4v-.4a7 7 0 0 1 1.7-3.8zm1.1 10.3a12.412 12.412 0 0 0 2.7.3h8v3.5l-10.6-.1a14.566 14.566 0 0 1 -6.4-1.5c-1.6-1.1-2.4-2.4-3.5-4.6a4.529 4.529 0 0 1 -.3-1.6 5.853 5.853 0 0 1 -.2-1.3 19.269 19.269 0 0 1 .1-2.4 14.159 14.159 0 0 1 .4-2 10.447 10.447 0 0 1 4.2-5.3 12.969 12.969 0 0 1 5.8-2h9l-3.4 3.3h-3.1a9.27 9.27 0 0 0 -2.4.4 6.142 6.142 0 0 0 -2.6 1.5 8.873 8.873 0 0 0 -2.3 5v.6a6.113 6.113 0 0 0 4.6 6.2z"/><path d="m205.8 44.4a3.371 3.371 0 0 0 -1.7-.5l-.3-.1c-.5-.1-.9-.2-1-.5a.367.367 0 0 1 -.1-.3.6.6 0 0 1 .1-.4c.1-.2.5-.3.7-.3h2.3v-.9h-2.2a1.841 1.841 0 0 0 -1.8.8 1.759 1.759 0 0 0 -.1.6 1.284 1.284 0 0 0 .4 1 2.609 2.609 0 0 0 1.7.7 5.3 5.3 0 0 1 1.4.5c.1.2.2.3.2.4v.2a1.374 1.374 0 0 1 -1.1.4h-2.3v1h2.6a1.932 1.932 0 0 0 1.5-.7v-.1a1.884 1.884 0 0 0 .2-.8 9.252 9.252 0 0 0 -.5-1z"/><path d="m207 41.5h.9v5.7h-.9z"/><path d="m207.4 39.7a.562.562 0 0 0 -.6.5c0 .3.2.5.6.5a.5.5 0 0 0 0-1z"/><path d="m212.1 41.6a2.563 2.563 0 0 0 -2.1 0 2.145 2.145 0 0 0 -1.2 2.3v3.2h.9v-3.2a1.411 1.411 0 0 1 .8-1.5 1.854 1.854 0 0 1 .7-.2h.2a1.391 1.391 0 0 1 1.1 1.7v3.2h.9v-3.2a2.3 2.3 0 0 0 -1.3-2.3z"/><path d="m214.5 42.8a2.456 2.456 0 0 0 -.5 1.5 2.73 2.73 0 0 0 2.9 2.8h1v-.9h-1a1.682 1.682 0 0 1 -1.7-.9 2.167 2.167 0 0 1 0-2.2 1.893 1.893 0 0 1 1.6-.9h1.2v-.9h-.9a3.362 3.362 0 0 0 -2.6 1.5z"/><path d="m223.5 44.3a2.2 2.2 0 0 1 -2.2 2.1 2.035 2.035 0 0 1 -1.5-.6 1.872 1.872 0 0 1 -.5-1.4 2.036 2.036 0 0 1 1.1-1.9 1.493 1.493 0 0 1 1-.3 1.9 1.9 0 0 1 1.3.5l-3.3 2.3.5.7 4.1-2.8-.1-.2a2.913 2.913 0 0 0 -5.4 1.4 2.456 2.456 0 0 0 .8 2.1 3.215 3.215 0 0 0 2.1 1h.2a2.732 2.732 0 0 0 1.9-.8 3.215 3.215 0 0 0 1-2.1v-.3h-.9z"/><path d="m226.8 40.3h1.4v7.3h.8v-8.2h-2z"/><path d="m233.4 39.3a3.009 3.009 0 0 0 -3 3 2.946 2.946 0 0 0 3 3 .9.9 0 0 0 .5-.1l-1.7 2.6h1.1l1.9-2.8a5.516 5.516 0 0 0 1.1-2.7v-.1a2.968 2.968 0 0 0 -2.9-2.9zm.8 4.8a3.091 3.091 0 0 1 -.8.2 2.006 2.006 0 0 1 -2-2 2.074 2.074 0 0 1 2-2h.1a2.054 2.054 0 0 1 1.9 2 4.418 4.418 0 0 1 -.6 1.6z"/><path d="m241.9 44.5a2.653 2.653 0 0 0 -.9-1.5 2.383 2.383 0 0 0 -1.8-.5h-.1l1.9-1.8a1.235 1.235 0 0 0 .4-.8c0-.3-.2-.6-1-.6h-3.7v.9h3.4l-2.6 2.5v.7h1.9a1.538 1.538 0 0 1 1.5 1.5c0 .6-.2 1.5-1.8 1.5h-2.5v.9h2.8a2.289 2.289 0 0 0 1.7-.8 2.107 2.107 0 0 0 .6-1.8z"/><path d="m243.9 39.4-.2.9h1.3v7.3h1v-8.2z"/><path d="m139 10.1h-10.4s-6.1 6-7.3 7.1a6.885 6.885 0 0 0 -1.1 1.3v-8.4h-9.2v24.7h9.2v-10.4a7.456 7.456 0 0 0 1.4 1.7l8.1 8.8h11l-12.7-13.5zm-20.8 11v11.7h-5.2v-20.7h5.2zm17.7 11.8h-5.3l-7.5-8.1a4.656 4.656 0 0 1 -1.7-3.3 4.686 4.686 0 0 1 1.4-2.9c1.2-1.1 6.4-6.2 6.7-6.5h4.8l-9.1 9.4z"/></g></g></svg>
                   <img src="/wp-content/themes/spark/images/anim.svg" class="anim">
                        <!-- <img class="wow slideInUp"
                            src="<?php header_image(); ?>"
                            height="<?php echo get_custom_header()->height; ?>"
                            width="<?php echo get_custom_header()->width; ?>"
                            alt="logotype" 
                        /> -->
                    </a>
                    <?php 
                        if(defined('ICL_LANGUAGE_CODE') && ICL_LANGUAGE_CODE == 'en'){ //english
                        ?>
                            <div class="logo__text wow slideInUp"  data-wow-delay="0.1s"><?php echo get_field('text_logo_header_main_page', '1219'); ?></div>
                        <?php
                        }elseif(defined('ICL_LANGUAGE_CODE') && ICL_LANGUAGE_CODE == 'es'){ //spanish
                        ?>
                            <div class="logo__text wow slideInUp"  data-wow-delay="0.1s"><?php echo get_field('text_logo_header_main_page', '1221'); ?></div>
                        <?php
                        }else{
                        ?>
                            <div class="logo__text wow slideInUp"  data-wow-delay="0.1s"><?php echo get_field('text_logo_header_main_page', '54'); ?></div>
                        <?php
                        }
                    ?>
                </div>
                
                <?php if(is_front_page()){ ?>
                    <?php 
                        if(defined('ICL_LANGUAGE_CODE') && ICL_LANGUAGE_CODE == 'en'){ //english
                        ?>
                            <div class="title__block wow slideInUp" ><?php echo get_field('title_central_header_main_page', '1219'); ?></div>
                        <?php
                        }elseif(defined('ICL_LANGUAGE_CODE') && ICL_LANGUAGE_CODE == 'es'){ //spanish
                        ?>
                            <div class="title__block wow slideInUp" ><?php echo get_field('title_central_header_main_page', '1221'); ?></div>
                        <?php
                        }else{
                        ?>
                            <div class="title__block wow slideInUp" ><?php echo get_field('title_central_header_main_page', '54'); ?></div>
                        <?php
                        }
                    ?>
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
                <?php bellows( 'main' , array( 'theme_location' => 'header_menu' ) ); ?>
            </div>
        </div>
        <div class="contact__block wow slideInUp">
            <div class="action__block">
                <?php 
                    if(defined('ICL_LANGUAGE_CODE') && ICL_LANGUAGE_CODE == 'en'){ //english
                    ?>
                        <p class="name-company"><?php echo get_field('title_ao_header_main_page', '1219'); ?></p>
                    <?php
                    }elseif(defined('ICL_LANGUAGE_CODE') && ICL_LANGUAGE_CODE == 'es'){ //spanish
                    ?>
                        <p class="name-company"><?php echo get_field('title_ao_header_main_page', '1221'); ?></p>
                    <?php
                    }else{
                    ?>
                        <p class="name-company"><?php echo get_field('title_ao_header_main_page', '54'); ?></p>
                    <?php
                    }
                ?>
                
                <?php 
                    if(defined('ICL_LANGUAGE_CODE') && ICL_LANGUAGE_CODE == 'en'){ //english
                    ?>
                        <?php if(get_field('phone_ao_header_main_page', '1219')){ ?><a href="tel:<?php echo str_replace([' ', '(', ')', '-'], '', get_field('phone_ao_header_main_page', '1219')); ?>"><?php echo get_field('phone_ao_header_main_page', '1219'); ?></a><?php } ?>
                    <?php
                    }elseif(defined('ICL_LANGUAGE_CODE') && ICL_LANGUAGE_CODE == 'es'){ //spanish
                    ?>
                        <?php if(get_field('phone_ao_header_main_page', '1221')){ ?><a href="tel:<?php echo str_replace([' ', '(', ')', '-'], '', get_field('phone_ao_header_main_page', '1221')); ?>"><?php echo get_field('phone_ao_header_main_page', '1221'); ?></a><?php } ?>
                    <?php
                    }else{
                    ?>
                        <?php if(get_field('phone_ao_header_main_page', '54')){ ?><a href="tel:<?php echo str_replace([' ', '(', ')', '-'], '', get_field('phone_ao_header_main_page', '54')); ?>"><?php echo get_field('phone_ao_header_main_page', '54'); ?></a><?php } ?>
                    <?php
                    }
                ?>
                
                <div class="footer__info address__info">
                    <?php 
                        if(defined('ICL_LANGUAGE_CODE') && ICL_LANGUAGE_CODE == 'en'){ //english
                        ?>
                            <a href="mailto:<?php echo get_field('email_ao_header_main_page', '1219'); ?>"><?php echo get_field('email_ao_header_main_page', '1219'); ?></a>
                        <?php
                        }elseif(defined('ICL_LANGUAGE_CODE') && ICL_LANGUAGE_CODE == 'es'){ //spanish
                        ?>
                            <a href="mailto:<?php echo get_field('email_ao_header_main_page', '1221'); ?>"><?php echo get_field('email_ao_header_main_page', '1221'); ?></a>
                        <?php
                        }else{
                        ?>
                            <a href="mailto:<?php echo get_field('email_ao_header_main_page', '54'); ?>"><?php echo get_field('email_ao_header_main_page', '54'); ?></a>
                        <?php
                        }
                    ?>
                </div>
                
                <?php 
                    if(defined('ICL_LANGUAGE_CODE') && ICL_LANGUAGE_CODE == 'en'){ //english
                    ?>
                        <p class="name-company name-company-second"><?php echo get_field('title_npo_header_main_page', '1219'); ?></p>
                    <?php
                    }elseif(defined('ICL_LANGUAGE_CODE') && ICL_LANGUAGE_CODE == 'es'){ //spanish
                    ?>
                        <p class="name-company name-company-second"><?php echo get_field('title_npo_header_main_page', '1221'); ?></p>
                    <?php
                    }else{
                    ?>
                        <p class="name-company name-company-second"><?php echo get_field('title_npo_header_main_page', '54'); ?></p>
                    <?php
                    }
                ?>

                <?php 
                    if(defined('ICL_LANGUAGE_CODE') && ICL_LANGUAGE_CODE == 'en'){ //english
                    ?>
                        <?php if(get_field('phone_npo_header_main_page', '1219')){ ?><a href="tel:<?php echo str_replace([' ', '(', ')', '-'], '', get_field('phone_npo_header_main_page', '1219')); ?>"><?php echo get_field('phone_npo_header_main_page', '1219'); ?></a><?php } ?>
                    <?php
                    }elseif(defined('ICL_LANGUAGE_CODE') && ICL_LANGUAGE_CODE == 'es'){ //spanish
                    ?>
                        <?php if(get_field('phone_npo_header_main_page', '1221')){ ?><a href="tel:<?php echo str_replace([' ', '(', ')', '-'], '', get_field('phone_npo_header_main_page', '1221')); ?>"><?php echo get_field('phone_npo_header_main_page', '1221'); ?></a><?php } ?>
                    <?php
                    }else{
                    ?>
                        <?php if(get_field('phone_npo_header_main_page', '54')){ ?><a href="tel:<?php echo str_replace([' ', '(', ')', '-'], '', get_field('phone_npo_header_main_page', '54')); ?>"><?php echo get_field('phone_npo_header_main_page', '54'); ?></a><?php } ?>
                    <?php
                    }
                ?>
                
                <div class="footer__info address__info">
                    <?php 
                        if(defined('ICL_LANGUAGE_CODE') && ICL_LANGUAGE_CODE == 'en'){ //english
                        ?>
                            <a href="mailto:<?php echo get_field('email_npo_header_main_page', '1219'); ?>"><?php echo get_field('email_npo_header_main_page', '1219'); ?></a>
                        <?php
                        }elseif(defined('ICL_LANGUAGE_CODE') && ICL_LANGUAGE_CODE == 'es'){ //spanish
                        ?>
                            <a href="mailto:<?php echo get_field('email_npo_header_main_page', '1221'); ?>"><?php echo get_field('email_npo_header_main_page', '1221'); ?></a>
                        <?php
                        }else{
                        ?>
                            <a href="mailto:<?php echo get_field('email_npo_header_main_page', '54'); ?>"><?php echo get_field('email_npo_header_main_page', '54'); ?></a>
                        <?php
                        }
                    ?>
                    
                    <div class="adress-footer">
                        <?php 
                            if(defined('ICL_LANGUAGE_CODE') && ICL_LANGUAGE_CODE == 'en'){ //english
                            ?>
                                <p><?php echo get_field('address_header_main_page', '1219'); ?></p>
                            <?php
                            }elseif(defined('ICL_LANGUAGE_CODE') && ICL_LANGUAGE_CODE == 'es'){ //spanish
                            ?>
                                <p><?php echo get_field('address_header_main_page', '1221'); ?></p>
                            <?php
                            }else{
                            ?>
                                <p><?php echo get_field('address_header_main_page', '54'); ?></p>
                            <?php
                            }
                        ?>
                    </div>
                </div>
                <div class="footer__info address__info">
                    <?php 
                        if(defined('ICL_LANGUAGE_CODE') && ICL_LANGUAGE_CODE == 'en'){ //english
                        ?>
                            <a href="<?php echo get_field('link_driving_header_main_page', '1219'); ?>"><?php echo get_field('text_driving_header_main_page', '1219'); ?></a>
                        <?php
                        }elseif(defined('ICL_LANGUAGE_CODE') && ICL_LANGUAGE_CODE == 'es'){ //spanish
                        ?>
                            <a href="<?php echo get_field('link_driving_header_main_page', '1221'); ?>"><?php echo get_field('text_driving_header_main_page', '1221'); ?></a>
                        <?php
                        }else{
                        ?>
                            <a href="<?php echo get_field('link_driving_header_main_page', '54'); ?>"><?php echo get_field('text_driving_header_main_page', '54'); ?></a>
                        <?php
                        }
                    ?> 
                </div>     
            </div>
        </div>
    </div>