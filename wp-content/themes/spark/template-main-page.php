<?php
/*
Template name: Main page
*/

get_header(); 
?>

    <div class="content">
        <div class="main__banner pad-l">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="spark__img" id="port"><img class="parallax-layer" src="<?php echo get_field('image_block_a_main_page'); ?>"/></div>
                        <h1><?php echo get_field('text_block_a_main_page'); ?></h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="main__map pad-l">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h2><?php echo get_field('text_block_b_main_page'); ?></h2>
                        <div class="map__img"><img src="<?php echo get_field('image_block_b_main_page'); ?>" alt="map"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>