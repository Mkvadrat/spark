<?php
/*
Theme Name: Spark
Theme URI: http://mkvadrat.com/
Author: M2
Author URI: http://mkvadrat.com/
Description: Тема для сайта http://mkvadrat.com/
Version: 1.0
*/

get_header();
?>
    
    <div class="content">
        <div class="content__top pad-l pad-r">
            <div class="h1__news">
                <h1><?php the_title(); ?></h1>
                <div class="news__action">
                    <div class="news__date"><?php echo get_the_date( 'd.m.y', get_the_ID() ); ?></div>
                    
                    <div class="news__share">
                        <?php
                            if ( function_exists('dynamic_sidebar') )
                                dynamic_sidebar('sharing-page');
                        ?>
                    </div>
                </div>
            </div>
            <hr/>
            
            <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
            <div class="container-fluid">
                <div class="row">
                    <div>
                        <?php $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'full'); ?>
                        <?php if($image_url[0]){ ?>
                            <img src="<?php echo $image_url[0]; ?>" alt="" class="mb7"/>
                        <?php } ?>
                        
                        <?php echo get_field('text_news_post_page'); ?>
                        
                        <?php if( have_rows('gallery_news_post_page')){ ?>
                        <div class="grid__gallery">
                            <?php while ( have_rows('gallery_news_post_page') ) { the_row(); ?>
                            <img src="<?php echo get_sub_field('image_news_post_page'); ?>" alt=""/>
                            <?php } ?>
                        </div>
                        <?php } ?>
                        
                        <?php
                            $cat = get_the_category(get_the_ID());
                            
                            $args_input = array(
                                'numberposts' => 4,
                                'category'    => $cat[0]->term_id,
                                'orderby'     => 'date',
                                'order'       => 'DESC',
                                'post_type'   => 'post',
                                'suppress_filters' => true, 
                            );

                            $articles_line = get_posts( $args_input );
                        ?>
                        <?php if($articles_line){ ?>
                        <hr/>
                        <h4>Смотреть еще новости</h4>
                        <div class="grid__news">
                            <?php 
                                foreach($articles_line as $post){ setup_postdata($post);
                                $image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full');
                            ?>
                            <div class="item__news">
                                <a href="<?php echo get_permalink($post->ID); ?>" class="news">
                                    <div class="img__news" style="background-image:url('<?php echo $image_url[0] ? $image_url[0] : esc_url( get_template_directory_uri() ) . '/images/no_image.jpg'; ?>');"></div>
                                    <div class="title__news">
                                        <div class="info__news">
                                            <div class="title"><?php echo $post->post_title; ?></div>
                                            <div class="date"><?php echo get_the_date( 'd.m.y', $post->ID ); ?></div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <?php wp_reset_postdata(); ?>
                        
                        <?php } ?>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>

        </div>
    </div>
   
<?php get_footer(); ?>