<?php
/*
Template name: Сareer page
*/

get_header(); 
?>
    
    <div class="content">
        <div class="content__top pad-l pad-r">
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
            <!-- <h1 class="wow slideInUp"><?php the_title(); ?></h1>
            <hr class="opacity-border wow slideInUp"/>
            <div class="wow slideInUp">  <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?></div> -->
            <div class="main_text_block_career_page">
                <?php echo get_field('main_text_block_career_page'); ?>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div>
                        <div class="grid__career">
                            <div class="career__item">
                                <h2 class="wow slideInUp"><?php echo get_field('title_a_block_a_career_page'); ?></h2>
                                <div class="career__box">
                                    <?php if(get_field('title_b_block_a_career_page')){ ?>
                                    <h3 class="revealator-slideup"><?php echo get_field('title_b_block_a_career_page'); ?></h3>
                                    <hr class="opacity-border revealator-slideup"/>
                                    <?php } ?>
                                    
                                    <?php if( have_rows('hr_b_block_a_career_page')){ ?>
                                    <?php while ( have_rows('hr_b_block_a_career_page') ) { the_row(); ?>
                                    <div class="career__persone">
                                        <div class="car__name revealator-slideup revealator-delay1"><?php echo get_sub_field('name_career_page'); ?></div>
                                        <div class="car__state revealator-slideup revealator-delay2"><?php echo get_sub_field('position_career_page'); ?></div>
                                        
                                       <div > <?php echo get_sub_field('contact_career_page'); ?></div>
                                    </div>
                                    <?php } ?>
                                    <?php } ?>
                                    
                                    <?php if(get_field('text_block_a_career_page')){ ?>
                                    <?php echo get_field('text_block_a_career_page'); ?>
                                    <?php } ?>
                                    
                                    <?php $vacancy_ao = get_field_object('vacancy_block_a_career_page'); ?>
                                    
                                    <?php if($vacancy_ao['value']){ ?>
                                  <!--   <hr class="opacity-border revealator-slideup"/> -->
                                    <h3 class="revealator-slideup revealator-delay6"><?php echo get_field('title_c_block_a_career_page'); ?></h3>
                                
                                    <div class="grid__popup">
                                        <?php foreach($vacancy_ao['value'] as $ao) { ?>
                                            <a href="#" class="revealator-slideup" data-target="#ao-<?php echo $ao->ID; ?>" data-toggle="modal"><?php echo $ao->post_title; ?></a>
                                        <?php } ?>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="career__item">
                                <h2 class="wow slideInUp"><?php echo get_field('title_a_block_b_career_page'); ?></h2>
                                <div class="career__box">
                                    <?php if(get_field('title_b_block_b_career_page')){ ?>
                                    <h3 class="revealator-slideup"><?php echo get_field('title_b_block_b_career_page'); ?></h3>
                                    <hr class="opacity-border revealator-slideup"/>
                                    <?php } ?>
                                     
                                    <?php if( have_rows('hr_b_block_b_career_page')){ ?>
                                    <?php while ( have_rows('hr_b_block_b_career_page') ) { the_row(); ?>
                                    <div class="career__persone">
                                        <div class="car__name revealator-slideup revealator-delay1" ><?php echo get_sub_field('name_career_page'); ?></div>
                                        <div class="car__state revealator-slideup revealator-delay2"><?php echo get_sub_field('position_career_page'); ?></div>
                                        
                                        <?php echo get_sub_field('contact_career_page'); ?>
                                    </div>
                                    <?php } ?>
                                    <?php } ?>
                                    
                                    <?php if(get_field('text_block_b_career_page')){ ?>
                                    <?php echo get_field('text_block_b_career_page'); ?>
                                    <?php } ?>
                                    
                                    <?php $vacancy_npo = get_field_object('vacancy_block_b_career_page'); ?>
                                    
                                    <?php if($vacancy_npo['value']){ ?>
                                   <!--  <hr class="opacity-border revealator-slideup"/> -->
                                    <h3 class="revealator-slideup revealator-delay6"><?php echo get_field('title_c_block_b_career_page'); ?></h3>
                                    
                                    <div class="grid__popup ">
                                        <?php foreach($vacancy_npo['value'] as $npo) { ?>
                                            <a href="#" class="revealator-slideup" data-target="#npo-<?php echo $npo->ID; ?>" data-toggle="modal"><?php echo $npo->post_title; ?></a>
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
    </div>
    
    <?php $vacancy_ao = get_field_object('vacancy_block_a_career_page'); ?>
    
    <?php if($vacancy_ao['value']){ ?>
    <!-- Modal -->
    <?php foreach($vacancy_ao['value'] as $ao) { ?>
    <div id="ao-<?php echo $ao->ID; ?>" class="modal fade" role="dialog">
        <div class="modal-dialog " >
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><img src="/wp-content/themes/spark/images/modal-close.svg"/></button>
                </div>
                <div class="modal-body">
                   <?php echo get_field('content_vacancy_pages', $ao->ID); ?>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
    <?php } ?>
    
    <?php $vacancy_npo = get_field_object('vacancy_block_b_career_page'); ?>
    
    <?php if($vacancy_npo['value']){ ?>
    <!-- Modal -->
    <?php foreach($vacancy_npo['value'] as $npo) { ?>
    <div id="npo-<?php echo $npo->ID; ?>" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><img src="/wp-content/themes/spark/images/modal-close.svg"/></button>
                </div>
                <div class="modal-body">
                   <?php echo get_field('content_vacancy_pages', $npo->ID); ?>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
    <?php } ?>
    
<?php get_footer(); ?>