<?php
/*
Template name: AO internal page
*/

get_header(); 
?>

    <div class="content">
        <?php $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'full'); ?>
        <?php if ($image_url[0]){ ?>
       <!--  <img src="<?php echo $image_url[0]; ?>" class="abs__img"/> -->
        <?php } ?>
        
        <div class="content__top pad-l pad-r pad-r-product">
            <div class="fixet-block">
                   <div class="fixet-title">
                    <h1  class="wow fadeInUp" ><?php the_title(); ?></h1>
                    <hr class="opacity-border wow fadeInUp"  / >
                  </div>
                  <div  class="wow fadeInUp breadcrumbs" >  <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?></div>
                 </div>
            <!-- <h1 class="wow slideInUp"><?php the_title(); ?></h1>
            <hr class="opacity-border wow slideInUp"/>
            
            <div class="wow slideInUp">  <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?></div>

             -->
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
                        
                        <div class="right__sidebar">
                            <?php bellows( 'main' , array( 'theme_location' => 'ao_menu' ) ); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>