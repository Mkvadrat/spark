<?php
/*
Template name: Documents page
*/

get_header(); 
?>
    
    <div class="content">
        <div class="content__top pad-l pad-r">
            <h1 class="revealator-slideup"><?php the_title(); ?></h1>
            <hr  class="opacity-border revealator-slideup"/>
           
            <div  class="revealator-slideup">
                <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
            </div>
            <!-- <?php echo get_field('text_block_documents_page'); ?> -->
            <div class="container-fluid">
                <div class="row">
                    <div>
                        <?php if( have_rows('files_download_documents_page')){ ?>
                        <div class="downl__links  ">
                            <?php while ( have_rows('files_download_documents_page') ) { the_row(); ?>
                                <a href="<?php echo get_sub_field('file_documents_page'); ?> " class="revealator-slideup"  download=""><img src="/wp-content/themes/spark/images/download.svg" alt=""/><?php echo get_sub_field('name_file_documents_page'); ?></a>
                            <?php } ?>
                        </div>
                        <?php } ?>
                        <?php if( have_rows('licenses_list_documents_page')){ ?>
                        <div class="grid__license ">
                            <?php while ( have_rows('licenses_list_documents_page') ) { the_row(); ?>
                            <div class="item__license revealator-slideup">
                                <a class="image-popup-no-margins " href="<?php echo get_sub_field('file_documents_page'); ?>">
                                        <img  src="<?php echo get_sub_field('file_documents_page'); ?>" >
                                </a>
                              
                                <p><?php echo get_sub_field('name_file_documents_page'); ?></p>
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