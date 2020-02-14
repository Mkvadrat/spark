<?php
/*
Template name: AO internal page
*/

get_header(); 
?>

    <div class="content">
        <?php $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'full'); ?>
        <?php if ($image_url[0]){ ?>
        <img src="<?php echo $image_url[0]; ?>" class="abs__img"/>
        <?php } ?>
        
        <div class="content__top pad-l pad-r">
            <h1><?php the_title(); ?></h1>
            <hr/>
            
            <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
            <hr/>
            
            <div class="container-fluid">
                <div class="row">
                    <div class="with__sidebar">
                        <div class="product__content">
                            <?php echo get_field('content_internal_pages'); ?>
                            
                            <!--<div class="owl-carousel">
                                <div>
                                    <img src="images/modern-1-min.jpg" alt=""/>
                                    <div class="carousel__title">Описание фотографии 1</div>
                                </div>
                                <div>
                                    <img src="images/modern-1-min.jpg" alt=""/>
                                    <div class="carousel__title">Описание фотографии 2</div>
                                </div>
                            </div>-->
                        </div>

                        <?php if( have_rows('links_block_a_activities_page', 163)){ ?>
                        <div class="right__sidebar">
                            <div class="grid__category">
                                <?php while ( have_rows('links_block_a_activities_page', 163) ) { the_row(); ?>
                                <a href="<?php echo get_sub_field('link_activities_page'); ?>" class="item__category">
                                    <div class="category__img"><img src="<?php echo get_sub_field('image_activities_page') ? get_sub_field('image_activities_page') : esc_url( get_template_directory_uri() ) . '/wp-content/themes/spark/images/no_image.jpg'; ?>"/></div>
                                    <div class="category__text"><?php echo get_sub_field('title_activities_page'); ?></div>
                                </a>
                                <?php } ?>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>