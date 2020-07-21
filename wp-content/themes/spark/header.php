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
                        <img class="wow slideInUp"
                            src="<?php header_image(); ?>"
                            height="<?php echo get_custom_header()->height; ?>"
                            width="<?php echo get_custom_header()->width; ?>"
                            alt="logotype"
                        />
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