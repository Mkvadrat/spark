<?php
/*
Template name: Contacts  page
*/

get_header(); 
?>

    <div class="content">
        <div class="content__top pad-l pad-r">
            <h1 class="revealator-slideup"><?php the_title(); ?></h1>
            <hr class="opacity-border revealator-slideup"/>
            <div class="revealator-slideup">
                 <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
            </div>
            
            <div class="anchors__block revealator-slideup">
                <a href="#spark__ao" class="active"><?php echo get_field('title_a_block_a_contacts_page'); ?></a>
                <a href="#spark__npo"><?php echo get_field('title_a_block_b_contacts_page'); ?></a>
            </div>
            <hr  class="opacity-border revealator-slideup"/>
            <div class="container-fluid">
                <div class="row">
                    <div>
                        <div class="anchors__content">
                            <div id="spark__ao">
                                <h2 class="revealator-slideup"><?php echo get_field('title_a_block_a_contacts_page'); ?></h2>
                                
                                
                                
                                <?php if( have_rows('personal_a_block_a_contacts_page')){ ?>
                                <div class="grid__category mb-7">
                                    <?php while ( have_rows('personal_a_block_a_contacts_page') ) { the_row(); ?>
                                    <div class="item__category revealator-slideup ">
                                        <div class="category__img-contact"><img src="<?php echo get_sub_field('image_contacts_page'); ?>" alt="cont"/></div>
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
                                <?php if( have_rows('contact_a_block_a_contacts_page')){ ?>
                                <div class="grid__position">
                                    <?php while ( have_rows('contact_a_block_a_contacts_page') ) { the_row(); ?>
                                    <div class="item__position">
                                        <div class="position__info ">
                                            <div class="revealator-slideup"><?php echo get_sub_field('name_contacts_page'); ?></div>
                                            <p class="revealator-slideup revealator-delay1"><?php echo get_sub_field('value_contacts_page'); ?></p>
                                        </div>
                                    </div>
                                    <?php } ?>
                                    
                                    <?php if(get_field('coord_maps_a_block_a_contacts_page')){ ?>
                                    <div class="item__position">
                                        <div id="piter" class="maps revealator-slideup " style="width:100%; height:338px"></div>
                                    </div>
                                    <?php } ?>
                                </div>
                                <?php } ?>
                                <h2 class="revealator-slideup "><?php echo get_field('title_b_block_a_contacts_page'); ?></h2>
                                
                                <?php if( have_rows('contact_b_block_a_contacts_page') || have_rows('personal_b_block_a_contacts_page')){ ?>
                                <div class="grid__position mb-7">
                                    <div class="item__position">
                                        <div class=""> <?php if( have_rows('contact_b_block_a_contacts_page')){ ?></div>
                                        <?php while ( have_rows('contact_b_block_a_contacts_page') ) { the_row(); ?>
                                        <div class="position__info">
                                            <div class="revealator-slideup"><?php echo get_sub_field('name_contacts_page'); ?></div>
                                            <p class="revealator-slideup"><?php echo get_sub_field('value_contacts_page'); ?></p>
                                        </div>
                                        <?php } ?>
                                        <?php } ?>
                                        
                                        <?php if( have_rows('personal_b_block_a_contacts_page')){ ?>
                                        <?php while ( have_rows('personal_b_block_a_contacts_page') ) { the_row(); ?>
                                        <div class="item__category w-100 revealator-slideup">
                                            <div class="category__img-contact"><img src="<?php echo get_sub_field('image_contacts_page'); ?>" alt="cont"/></div>
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
                                    
                                    <?php if(get_field('coord_maps_b_block_a_contacts_page')){ ?>
                                    <div class="item__position">
                                        <div id="moskow" class="maps revealator-slideup" style="width:100%; height:338px"></div>
                                    </div>
                                    <?php } ?>
                                </div>
                                <?php } ?>
                                
                                <?php
                                    $forms_a = get_field('content_ao_form_block_contacts_page');
                                         if($forms_a){
                                ?>    
                                <h2 class="revealator-slideup"><?php echo get_field('title_ao_form_block_contacts_page'); ?></h2>

                                <div class="form">
                                    <?php
                                            echo do_shortcode('[contact-form-7 id=" ' . $forms_a . ' "]'); 
                                    ?>
                                </div>
                                <?php } ?>
                            </div>
                            
                            <div id="spark__npo">
                                <h2 class="revealator-slideup"><?php echo get_field('title_a_block_b_contacts_page'); ?></h2>
                                 <?php if( have_rows('personal_block_b_contacts_page')){ ?>
                                <div class="grid__category mb-7">
                                    <?php while ( have_rows('personal_block_b_contacts_page') ) { the_row(); ?>
                                    <div class="item__category revealator-slideup">
                                        <div class="category__img-contact"><img src="<?php echo get_sub_field('image_contacts_page'); ?>" alt="cont"/></div>
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

                                <?php if( have_rows('contact_block_b_contacts_page')){ ?>
                                <div class="grid__position">
                                    <?php while ( have_rows('contact_block_b_contacts_page') ) { the_row(); ?>
                                    <div class="item__position">
                                        <div class="position__info">
                                            <div class="revealator-slideup"><?php echo get_sub_field('name_contacts_page'); ?></div>
                                            <p class="revealator-slideup"><?php echo get_sub_field('value_contacts_page'); ?></p>
                                        </div>
                                    </div>
                                    <?php } ?>
                                    
                                    <?php if(get_field('coord_maps_a_block_b_contacts_page')){ ?>
                                    <div class="item__position">
                                        <div id="piter2" class="maps revealator-slideup" style="width:100%; height:338px"></div>
                                    </div>
                                    <?php } ?>
                                </div>
                                <?php } ?>
                                
                               
                                 <?php
                                    $forms_b = get_field('content_npo_form_block_contacts_page');
                                         if($forms_b){
                                ?>
                                
                                <h2><?php echo get_field('title_npo_form_block_contacts_page'); ?></h2>
                                
                                <div class="form">
                                    <?php
                                            echo do_shortcode('[contact-form-7 id=" ' . $forms_b . ' "]'); 
                                    ?>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php if(get_field('coord_maps_a_block_a_contacts_page')){ ?>
    <script type="text/javascript">
        var piterMap, piterPlacemark, pitercoords;
        ymaps.ready(init);
    
        function init() {
            piterMap = new ymaps.Map('piter', {
                center: [<?php echo get_field('coord_maps_a_block_a_contacts_page'); ?>],
                zoom: 17
            });
            var SearchControl = new ymaps.control.SearchControl({noPlacemark: true});
            piterMap.controls
                //.add('zoomControl')
                .add('typeSelector')
            pitercoords = [<?php echo get_field('coord_maps_a_block_a_contacts_page'); ?>];
            piterPlacemark = new ymaps.Placemark([<?php echo get_field('coord_maps_a_block_a_contacts_page'); ?>], {}, {
                preset: "twirl#redIcon",
                draggable: true
            });
            piterMap.geoObjects.add(piterPlacemark);
        }
    </script>
    <?php } ?>
    
    <?php if(get_field('coord_maps_b_block_a_contacts_page')){ ?>
    <script type="text/javascript">
        var moskowMap, moskowPlacemark, moskowcoords;
        ymaps.ready(init);
    
        function init() {
            moskowMap = new ymaps.Map('moskow', {
                center: [<?php echo get_field('coord_maps_b_block_a_contacts_page'); ?>],
                zoom: 17
            });
            var SearchControl = new ymaps.control.SearchControl({noPlacemark: true});
            moskowMap.controls
                //.add('zoomControl')
                .add('typeSelector')
            moskowcoords = [<?php echo get_field('coord_maps_b_block_a_contacts_page'); ?>];
            moskowPlacemark = new ymaps.Placemark([<?php echo get_field('coord_maps_b_block_a_contacts_page'); ?>], {}, {
                preset: "twirl#redIcon",
                draggable: true
            });
            moskowMap.geoObjects.add(moskowPlacemark);
        }
    </script>
    <?php } ?>
    
    <?php if(get_field('coord_maps_a_block_b_contacts_page')){ ?>
    <script type="text/javascript">
        var piter2Map, piter2Placemark, piter2coords;
        ymaps.ready(init);
    
        function init() {
            piter2Map = new ymaps.Map('piter2', {
                center: [<?php echo get_field('coord_maps_a_block_b_contacts_page'); ?>],
                zoom: 17
            });
            var SearchControl = new ymaps.control.SearchControl({noPlacemark: true});
            piter2Map.controls
                //.add('zoomControl')
                .add('typeSelector')
            piter2coords = [<?php echo get_field('coord_maps_a_block_b_contacts_page'); ?>];
            piter2Placemark = new ymaps.Placemark([<?php echo get_field('coord_maps_a_block_b_contacts_page'); ?>], {}, {
                preset: "twirl#redIcon",
                draggable: true
            });
            piter2Map.geoObjects.add(piter2Placemark);
        }
    </script>
    <?php } ?>

<?php get_footer(); ?>