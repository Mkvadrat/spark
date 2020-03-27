<?php
/*
Template name: Activities  page
*/

get_header(); 
?>

    <div class="content">
        <div class="content__top pad-l pad-r">
            <hr class="line-none"/ >
            <h1><?php the_title(); ?></h1>
            <hr/>
            
            <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
            
            <div class="anchors__block">
                <a href="#spark__ao" class="active"><?php echo get_field('title_block_a_activities_page'); ?></a>
                <a href="#spark__npo"><?php echo get_field('title_block_b_activities_page'); ?></a>
            </div>
            <hr/>
            <div class="container-fluid">
                <div class="row">
                    <div>
                        <div class="anchors__content">
                            <div id="spark__ao">
                                <h2><?php echo get_field('title_block_a_activities_page'); ?></h2>
                                
                                <?php if( have_rows('links_block_a_activities_page')){ ?>
                                <div class="grid__category">
                                    <?php while ( have_rows('links_block_a_activities_page') ) { the_row(); ?>
                                    <a href="<?php echo get_sub_field('link_activities_page'); ?>" class="item__category">
                                        <div class="category__img"><img src="<?php echo get_sub_field('image_activities_page') ? get_sub_field('image_activities_page') : esc_url( get_template_directory_uri() ) . '/wp-content/themes/spark/images/no_image.jpg'; ?>"/></div>
                                        <div class="category__text"><?php echo get_sub_field('title_activities_page'); ?></div>
                                    </a>
                                    <?php } ?>
                                </div>
                                <?php } ?>
                            </div>
                            <div id="spark__npo">
                                <h2><?php echo get_field('title_block_b_activities_page'); ?></h2>
                                
                                <?php if( have_rows('links_block_b_activities_page')){ ?>
                                <div class="grid__category">
                                    <?php while ( have_rows('links_block_b_activities_page') ) { the_row(); ?>
                                    <a href="<?php echo get_sub_field('link_activities_page'); ?>" class="item__category">
                                        <div class="category__img"><img src="<?php echo get_sub_field('image_activities_page') ? get_sub_field('image_activities_page') : esc_url( get_template_directory_uri() ) . '/images/no_image.jpg'; ?>"/></div>
                                        <div class="category__text"><?php echo get_sub_field('title_activities_page'); ?></div>
                                    </a>
                                    <?php } ?>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

<?php get_footer(); ?>