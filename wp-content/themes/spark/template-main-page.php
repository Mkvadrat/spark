<?php
/*
Template name: Main page
*/

get_header(); 
?>
<!--  <div id="page-preloader" class="preloader">
      <div class="loader"></div>
    </div> -->
    <div class="content parallax-content">
        <div class="main__banner pad-l">
            <div class="container">
                <div class="row">
                	<div class="col-sm-12 block-parallax">
                		<div id="scene" data-relative-input="false" class="parallax wow slideInDown" >
                            <div data-depth="1.5" class="text-center">
                                 <div class="spark__img" id="port"><img class="parallax-layer" src="<?php echo get_field('image_block_a_main_page'); ?>"/></div>
                       		 </div>
                    	</div>
                        
                        <?php if( have_rows('textbanner_block_a_main_page')){ ?>
                        <div id="owl-carousel" class="owl-carousel owl-theme wow fadeInDown">
                            <?php while ( have_rows('textbanner_block_a_main_page') ) { the_row(); ?>
                            <div class="item">
                                <h1 class="title-center"><?php echo get_sub_field('text_block_main_page'); ?></h1>          
                            </div>
                            <?php } ?>
                         </div>
                        <?php } ?>
                        
                        
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