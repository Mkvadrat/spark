<?php
/*
Theme Name: Spark
Theme URI: http://mkvadrat.com/
Author: M2
Author URI: http://mkvadrat.com/
Description: Тема для сайта http://mkvadrat.com/
Version: 1.0
*/

get_header(); ?>
    
    <div class="content">
        <div class="content__top pad-l pad-r">
            <h1><?php the_title(); ?></h1>
            <hr/>
            
            <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
            
            <div class="container-fluid">
                <div class="row">
                    <div>
                        <div class="description__full">
                            <?php if (have_posts()): while (have_posts()): the_post(); ?>
                                <?php the_content(); ?>
                            <?php endwhile; endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>    

