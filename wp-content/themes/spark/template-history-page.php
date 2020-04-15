<?php
/*
Template name: History page
*/

get_header(); 
?>

    <div class="content">
        <div class="content__top pad-l pad-r">
            <h1 class="revealator-slideup"><?php the_title(); ?></h1>
            <hr class="opacity-border revealator-slideup"/ >
           <div class="revealator-slideup">  <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?></div>
            <div class="container-fluid">
                <div class="row">
                    <div>
                        <div class="description__pre"><?php echo get_field('short_descr_history_page'); ?></div>
                        <hr/>
                        <div class="description__full">
                            <?php echo get_field('full_descr_history_page'); ?>
                            
                            <h3 class="revealator-slideup "><?php echo get_field('title_event_history_page'); ?></h3>
                            
                            <?php if( have_rows('table_event_history_page')){ ?>
                            <hr/>
                            <table class="table__history">
                                <tbody>
                                    <?php while ( have_rows('table_event_history_page') ) { the_row(); ?>
                                    <tr class="revealator-slideup ">  
                                        <td><?php echo get_sub_field('date_event_history_page'); ?></td>
                                        <td>–</td>
                                        <td><?php echo get_sub_field('event_history_page'); ?></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-opacity revealator-slideup">
                <div id="owl-history" class="owl-carousel owl-theme owl-loaded">
                  <div class="owl-stage-outer">
                    <div class="owl-stage">
                      <div class="owl-item">
                        <img src="/wp-content/themes/spark/images/1.jpg">
                      </div>
                      <div class="owl-item">
                        <img src="/wp-content/themes/spark/images/2.jpg">
                      </div>
                      <div class="owl-item">
                        <img src="/wp-content/themes/spark/images/3.jpg">
                      </div>
                      <div class="owl-item">
                        <img src="/wp-content/themes/spark/images/4.jpg">
                      </div>
                      <div class="owl-item">
                        <img src="/wp-content/themes/spark/images/5.jpg">
                      </div>
                      <div class="owl-item">
                        <img src="/wp-content/themes/spark/images/6.jpg">
                      </div>
                      <div class="owl-item">
                        <img src="/wp-content/themes/spark/images/7.jpg">
                      </div>
                      <div class="owl-item">
                        <img src="/wp-content/themes/spark/images/8.jpg">
                      </div>
                      <div class="owl-item">
                        <img src="/wp-content/themes/spark/images/9.jpg">
                      </div>
                      <div class="owl-item">
                        <img src="/wp-content/themes/spark/images/10.jpg">
                      </div>
                      <div class="owl-item">
                        <img src="/wp-content/themes/spark/images/11.jpg">
                      </div>
                      <div class="owl-item">
                        <img src="/wp-content/themes/spark/images/12.jpg">
                      </div>
                       <div class="owl-dots">
                        <div class="owl-dot active"><span></span></div>
                        <div class="owl-dot"><span></span></div>
                        <div class="owl-dot"><span></span></div>
                      </div>
                    </div>

                  </div>
                </div>
            </div>
        </div>
        
    </div>

<?php get_footer(); ?> 