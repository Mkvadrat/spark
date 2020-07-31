<?php
/*
Template name: History page
*/

get_header(); 
?>

    <div class="content">
        <div class="content__top pad-l pad-r pad-r-history">
          
           <div class="container-fluid">
              <div class="row">
                 <div class="fixet-block">
                   <div class="fixet-title">
                    <h1  class="wow fadeInUp" ><?php the_title(); ?></h1>
                    <hr class="opacity-border wow fadeInUp"  / >
                  </div>
                  <div  class="wow fadeInUp breadcrumbs" >  <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?></div>
                 </div>
              </div> 	
           </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="wow fadeInUp">
                        <div class="description__pre"><?php echo get_field('short_descr_history_page'); ?></div>
                        <hr class="wow fadeInUp" />
                        <div class="description__full">
                            <?php echo get_field('full_descr_history_page'); ?>
                            
                            <h3 class="revealator-slideup "><?php echo get_field('title_event_history_page'); ?></h3>
                            
                            <?php if( have_rows('table_event_history_page')){ ?>
                            <hr/>
                            <table class="table__history">
                                <tbody>
                                    <?php while ( have_rows('table_event_history_page') ) { the_row(); ?>
                                    <tr data-aos="fade-up" data-aos-offset="0">  
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
            <div class="slider-opacity "  data-aos="fade-up" data-aos-offset="0" >
                <div id="owl-history" class="owl-carousel owl-theme owl-loaded">
                  <div class="owl-stage-outer">
                    <div class="owl-stage">
                      <div class="owl-item owl-item-history"></div>
                      <div class="owl-item owl-item-history owl-item-history-1"></div>
                      <div class="owl-item owl-item-history owl-item-history-2"></div>
                      <div class="owl-item owl-item-history owl-item-history-3"></div>
                      <div class="owl-item owl-item-history owl-item-history-4"></div>
                      <div class="owl-item owl-item-history owl-item-history-5"></div>
                      <div class="owl-item owl-item-history owl-item-history-6"></div>
                      <div class="owl-item owl-item-history owl-item-history-7"></div>
                      <div class="owl-item owl-item-history owl-item-history-8"></div>
                      <div class="owl-item owl-item-history owl-item-history-9"></div>
                      <div class="owl-item owl-item-history owl-item-history-10"></div>
                      <div class="owl-item owl-item-history owl-item-history-11"></div>
                      
                     
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