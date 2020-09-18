<?php
/*
Theme Name: Spark
Theme URI: http://mkvadrat.com/
Author: M2
Author URI: http://mkvadrat.com/
Description: Тема для сайта http://mkvadrat.com/
Version: 1.0
*/

get_header(); 
?>

   <?php
        $category = get_queried_object();
   ?>
   
   <div class="content">
        <div class="content__top pad-l pad-r">
           <!--  <h1 class="wow slideInUp"><?php echo $category->name; ?></h1>
            <hr class="opacity-border wow slideInUp"/>
           
          <div class="wow slideInUp"> <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?></div> -->
              <div id="sticker">
                <h1  class="wow fadeInUp"  ><?php the_title(); ?></h1>
                <hr class="opacity-border wow fadeInUp"  / >
                <div   class="wow fadeInUp breadcrumbs" >  <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?></div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div>
                        <div class="grid__news wow slideInUp">
                           <?php 
                              $current_page = (get_query_var('paged')) ? get_query_var('paged') : 1;
                              $args = array(
                                 'taxonomy'    => 'category',
                                 'orderby'     => 'date',
                                 'order'       => 'DESC',
                                 'post_type'   => 'post',
                                 'suppress_filters' => false, 
                                 'posts_per_page' => $GLOBALS['wp_query']->query_vars['posts_per_page'],
                                 'paged'       => $current_page
                              );
      
                              $posts = get_posts( $args );
                              if($posts){
                                 foreach($posts as $post){ setup_postdata($post);
                                 $image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full');
                           ?>
                              <div class="item__news">
                                 <a href="<?php echo get_permalink($post->ID); ?>" class="news">
                                    <div class="img__news" style="background-image:url('<?php echo $image_url[0] ? $image_url[0] : esc_url( get_template_directory_uri() ) . '/images/no_image.jpg'; ?>');"></div>
                                       <div class="title__news">
                                          <div class="info__news">
                                             <div class="title"><?php echo $post->post_title; ?></div>
                                             <div class="date"><?php echo get_the_date( 'd.m.y', $post->ID ); ?></div>
                                          </div>
                                       </div>
                                 </a>
                              </div>
                           <?php
                                 } 
                           	}

                           wp_reset_postdata();

                           $defaults = array(
                              'type' => 'array',
                              'prev_next'    => True,
                              'prev_text'    => __(''),
                              'next_text'    => __(''),
                           );
            
                           $pagination = paginate_links($defaults);
                        ?>
                        </div>
                        <?php if($pagination){ ?>
                        <nav aria-label="Page navigation">
                           <ul class="pagination">
                              <?php foreach ($pagination as $pag){ ?>
                                 <li class="page-item revealator-slideup"><?php echo $pag; ?></li>
                              <?php } ?>
                           </ul>
                        </nav>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
<?php get_footer(); ?>