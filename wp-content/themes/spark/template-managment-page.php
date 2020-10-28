<?php
/*
Template name: Managment  page
*/

get_header(); 
?>

    <div class="content">
        <div class="content__top pad-l pad-r">
               <div id="sticker">
                <h1  class="wow fadeInUp"  ><?php the_title(); ?></h1>
                <hr class="opacity-border wow fadeInUp"  / >
                <div   class="wow fadeInUp breadcrumbs" >  <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?></div>
            </div>
             <div class="container-fluid">
              <div class="row">
                <!-- <div id="sticker">
                <h1  class="wow fadeInUp"  ><?php the_title(); ?></h1>
                <hr class="opacity-border wow fadeInUp"  / >
                <div   class="wow fadeInUp breadcrumbs" >  <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?></div>
            </div> -->
                 <!-- <div class="fixet-block">
                   <div class="fixet-title">
                    <h1  class="wow fadeInUp" ><?php the_title(); ?></h1>
                    <hr class="opacity-border wow fadeInUp"  / >
                  </div>
                  <div  class="wow fadeInUp breadcrumbs" >  <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?></div>
                 </div> -->
              </div>    
           </div>
          <!--   <h1 class="wow slideInUp"><?php the_title(); ?></h1>
            <hr class="opacity-border wow slideInUp"/>
            <div class="wow slideInUp">
                 <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
            </div> -->
            
            <div class="anchors__block wow slideInUp">
                <div class="tab">
                    <?php 
                        if(defined('ICL_LANGUAGE_CODE') && ICL_LANGUAGE_CODE == 'en'){ //english
                        ?>
                            <button class="tablinks active" onclick="openCompany(event, 'spark__ao')" id="defaultOpen"><?php echo get_field('title_a_block_a_contacts_page'); ?></button>
                            <button class="tablinks" onclick="openCompany(event, 'spark__npo')"><?php echo get_field('title_a_block_b_contacts_page'); ?></button>
                        <?php
                        }elseif(defined('ICL_LANGUAGE_CODE') && ICL_LANGUAGE_CODE == 'es'){ //spanish
                        ?>
                            <button class="tablinks active" onclick="openCompany(event, 'spark__ao')" id="defaultOpen"><?php echo get_field('title_a_block_a_contacts_page'); ?></button>
                            <button class="tablinks" onclick="openCompany(event, 'spark__npo')"><?php echo get_field('title_a_block_b_contacts_page'); ?></button>
                        <?php
                        }else{
                        ?>
                            <button class="tablinks active" onclick="openCompany(event, 'spark__ao')" id="defaultOpen"><?php echo get_field('title_a_block_a_contacts_page'); ?></button>
                            <button class="tablinks" onclick="openCompany(event, 'spark__npo')"><?php echo get_field('title_a_block_b_contacts_page'); ?></button>
                        <?php
                        }
                    ?>
                </div>
            </div>
            <hr  class="opacity-border wow slideInUp"/>
            <div class="container-fluid">
                <div class="row">
                    <div>
                        <div class="anchors__content">
                            <div id="spark__ao" class="tabcontent" style="display: block;">
                                <div id="spark__ao">
                                    <h2 class="wow slideInUp"><?php echo get_field('title_a_block_a_contacts_page'); ?></h2>
    
                                    <?php if( have_rows('personal_a_block_a_contacts_page')){ ?>
                                    <div class="grid__category mb-7">
                                        <?php while ( have_rows('personal_a_block_a_contacts_page') ) { the_row(); ?>
                                        <div class="item__category  no-hover wow slideInUp ">
                                            <?php if(get_sub_field('image_contacts_page')){ ?>
                                            <div class="category__img-contact">
                                                <img src="<?php echo get_sub_field('image_contacts_page'); ?>" alt="cont"/>
                                            </div>
                                            <?php } ?>
                                            <div class="category__text">
                                                <div class="title__"><?php echo get_sub_field('name_contacts_page'); ?></div>
                                                <div class="state__"><?php echo get_sub_field('position_contacts_page'); ?></div>
                                                <div class="actions__">
                                                    <?php echo get_sub_field('contact_contacts_page'); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                    <?php } ?>
    
                                    <h2 class="wow slideInUptop-margin-contact"><?php echo get_field('title_b_block_a_contacts_page'); ?></h2>
                                    
                                    <?php if( have_rows('personal_b_block_a_contacts_page')){ ?>
                                    <?php while ( have_rows('personal_b_block_a_contacts_page') ) { the_row(); ?>
                                    <div class="item__category no-hover item__padding  w-100 revealator-slideup">
                                        <?php if(get_sub_field('image_contacts_page')){ ?>
                                        <div class="category__img-contact">
                                            <img src="<?php echo get_sub_field('image_contacts_page'); ?>" alt="cont"/>
                                        </div>
                                        <?php } ?>
                                        <div class="category__text">
                                            <div class="title__"><?php echo get_sub_field('name_contacts_page'); ?></div>
                                            <div class="state__"><?php echo get_sub_field('position_contacts_page'); ?></div>
                                            <div class="actions__">
                                                <?php echo get_sub_field('contact_contacts_page'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                    <?php } ?>
                                </div>
                            </div>
                            <div id="spark__npo" class="tabcontent">
                                <div id="spark__npo">
                                    <h2 class="wow slideInUp"><?php echo get_field('title_a_block_b_contacts_page'); ?></h2>
                                     <?php if( have_rows('personal_block_b_contacts_page')){ ?>
                                    <div class="grid__category mb-7">
                                        <?php while ( have_rows('personal_block_b_contacts_page') ) { the_row(); ?>
                                        <div class="item__category  no-hover wow slideInUp">
                                            <?php if(get_sub_field('image_contacts_page')){ ?>
                                            <div class="category__img-contact">
                                                <img src="<?php echo get_sub_field('image_contacts_page'); ?>" alt="cont"/>
                                            </div>
                                            <?php } ?>
                                            <div class="category__text">
                                                <div class="title__"><?php echo get_sub_field('name_contacts_page'); ?></div>
                                                <div class="state__"><?php echo get_sub_field('position_contacts_page'); ?></div>
                                                <div class="actions__">
                                                    <?php echo get_sub_field('contact_contacts_page'); ?>
                                                </div>
                                            </div>
                                        </div>
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

<?php get_footer(); ?>