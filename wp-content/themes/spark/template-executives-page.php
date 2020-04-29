<?php
/*
Template name: Executives page
*/

get_header(); 
?>

    <div class="content">
        <div class="content__top pad-l pad-r pad-r-executives">
            <h1 ><?php the_title(); ?></h1>
            <hr  class="opacity-border"/>
            
           <div>
               <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
           </div> 
            
            <div class="container-fluid">
                <div class="row">
                    <div>
                        <?php if( have_rows('informations_header_executives_page')){ ?>
                        <ul class="nav-tabs my-tabs">
                            <?php while ( have_rows('informations_header_executives_page') ) { the_row(); ?>
                            <li class="<?php echo get_sub_field('active_class_executives_page'); ?>">
                                <a data-toggle="tab" href="#<?php echo get_sub_field('link_ankor_executives_page'); ?>">
                                    <div class="img__tabs revealator-slideup" style="background-image: url('<?php echo get_sub_field('image_chief_executives_page'); ?>')"></div>
                                    <div class="name__boss revealator-slideup revealator-delay1"><?php echo get_sub_field('name_chief_executives_page'); ?></div>
                                    <div class="state__boss revealator-slideup revealator-delay2"><?php echo get_sub_field('position_chief_executives_page'); ?></div>
                                </a>
                            </li>
                            <?php } ?>
                        </ul>
                        <?php } ?>
                        
                        <?php if( have_rows('informations_content_executives_page')){ ?>
                        <div class="tab-content">
                            <?php while ( have_rows('informations_content_executives_page') ) { the_row(); ?>
                            <div class="tab-pane  <?php echo get_sub_field('active_class_executives_page'); ?>" id="<?php echo get_sub_field('link_ankor_executives_page'); ?>">
                                <h2 ><?php echo get_sub_field('name_chief_executives_page'); ?></h2>
                                <div class="h2__sub"><?php echo get_sub_field('position_chief_executives_page'); ?></div>
                                
                                <?php echo get_sub_field('information_chief_executives_page'); ?>
                            </div>
                            <?php } ?>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>