<?php
/*
Template name: Main page
*/

get_header(); 
?>

    <div class="content parallax-content">
        <div class="main__banner pad-l">
            <div class="container">
                <div class="row">
                	<div class="col-sm-12 block-parallax" >
                        <div class="header-desc wow fadeInUp" >
                            <div  class="text-center-block ">
                                 <div class="spark__img"><img src="<?php echo get_field('image_block_a_main_page'); ?>"/></div> 
                            </div>
                            
                            <?php if( have_rows('textbanner_block_a_main_page')){ ?>
                            <div class="sub-text "> 
                                <ul>
                                    <?php while ( have_rows('textbanner_block_a_main_page') ) { the_row(); ?>
                                    <li><?php echo get_sub_field('text_block_main_page'); ?></li>
                                    <?php } ?>
                                </ul>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="block-text-main">
                    <?php echo get_field('primary_text_main_page'); ?>
                </div>
            </div>
            <div class="main__map ">
                <div class="container">
                   <div class="row">
                        <div class="col-sm-12">
                           <div  data-aos="fade-up" data-aos-offset="100">
                                <h2 class="title-map "><?php echo get_field('text_block_b_main_page'); ?></h2>
                                <div class="block-map ">
                                    <?php
                                        $args = array(
                                                'post_type' => 'maps',
                                                'numberposts' => -1,
                                                'post_status' => 'publish',
                                                'orderby'     => 'date',
                                                'order'       => 'DESC',
                                        );
                            
                                        $lists = get_posts( $args );
                                    ?>
                                    <?php if($lists){ ?>
                                        <svg enable_background="new 0 0 1000 647"  pretty_print="False" style="stroke-linejoin: round; stroke:#000; fill: none;" version="1.1" viewBox="0 0 1000 647"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><style type="text/css"><![CDATA[path { fill-rule: evenodd; }]]></style></defs><metadata><views><view h="647.825177808" padding="0" w="1000"><proj flip="auto" id="mercator" lon0="65.3146660706"/><bbox h="4064.12" w="6283.19" x="-3141.59" y="-2891.13"/></view></views></metadata><g class="" id="countries">
                                        <?php
                                            foreach($lists as $list){
                                                $values = get_field('svg_data_maps_page', $list->ID);
                                              
                                                echo $values;
                                        ?>
                                        <?php } ?>
                                        </g></svg>
                                    <?php } ?>
                                </div>
                           </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?> 