<?php
/*
Template name: History page
*/

get_header(); 
?>

    <div class="content">
        <div class="content__top pad-l pad-r">
            <h1><?php the_title(); ?></h1>
            <hr/>
            
            <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
            
            <div class="container-fluid">
                <div class="row">
                    <div>
                        <div class="description__pre"><?php echo get_field('short_descr_history_page'); ?></div>
                        <hr/>
                        <div class="description__full">
                            <?php echo get_field('full_descr_history_page'); ?>
                            
                            <h3><?php echo get_field('title_event_history_page'); ?></h3>
                            
                            <?php if( have_rows('table_event_history_page')){ ?>
                            <hr/>
                            <table class="table__history">
                                <tbody>
                                    <?php while ( have_rows('table_event_history_page') ) { the_row(); ?>
                                    <tr>  
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
        </div>
    </div>

<?php get_footer(); ?>