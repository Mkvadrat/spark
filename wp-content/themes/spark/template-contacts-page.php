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
                                    <div class="item__category  no-hover revealator-slideup ">
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
                                <div class="block-contact-info">
                                    <div class="block-contact-address">
                                        <?php while ( have_rows('contact_a_block_a_contacts_page') ) { the_row(); ?>
                                        <div >
                                            <div >
                                                <div class="revealator-slideup"><?php echo get_sub_field('name_contacts_page'); ?></div>
                                                <p class="revealator-slideup"><?php echo get_sub_field('value_contacts_page'); ?></p>
                                            </div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                    
                                    <div class="map-contact">
                                        <?php if(get_field('coord_maps_a_block_b_contacts_page')){ ?>
                                        <div class="revealator-slideup">
                                            <div id="piter" class="maps-footer" ></div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                                <?php } ?>
                                
                                <h2 class="revealator-slideup top-margin-contact"><?php echo get_field('title_b_block_a_contacts_page'); ?></h2>
                                
                                <?php if( have_rows('personal_b_block_a_contacts_page')){ ?>
                                <?php while ( have_rows('personal_b_block_a_contacts_page') ) { the_row(); ?>
                                <div class="item__category no-hover item__padding  w-100 revealator-slideup">
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

                                <?php if( have_rows('contact_b_block_a_contacts_page')){ ?>
                                <div class="block-contact-info">
                                    <div class="block-contact-address">
                                        <?php while ( have_rows('contact_b_block_a_contacts_page') ) { the_row(); ?>
                                        <div >
                                            <div >
                                                <div class="revealator-slideup"><?php echo get_sub_field('name_contacts_page'); ?></div>
                                                <p class="revealator-slideup"><?php echo get_sub_field('value_contacts_page'); ?></p>
                                            </div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                    
                                    <div class="map-contact">
                                        <?php if(get_field('coord_maps_a_block_b_contacts_page')){ ?>
                                        <div class="revealator-slideup">
                                            <div id="moskow" class="maps-footer" ></div>
                                        </div>
                                        <?php } ?>
                                    </div>
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
                                    <div class="item__category  no-hover revealator-slideup">
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
                                <div class="block-contact-info">
                                    <div class="block-contact-address">
                                        <?php while ( have_rows('contact_block_b_contacts_page') ) { the_row(); ?>
                                        <div >
                                            <div >
                                                <div class="revealator-slideup"><?php echo get_sub_field('name_contacts_page'); ?></div>
                                                <p class="revealator-slideup"><?php echo get_sub_field('value_contacts_page'); ?></p>
                                            </div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                    
                                    <div class="map-contact">
                                        <?php if(get_field('coord_maps_a_block_b_contacts_page')){ ?>
                                        <div class="revealator-slideup">
                                            <div id="piter2" class="maps-footer" ></div>
                                        </div>
                                        <?php } ?>
                                    </div>
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