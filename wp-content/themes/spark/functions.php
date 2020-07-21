<?php
/*
Theme Name: Spark
Theme URI: http://mkvadrat.com/
Author: M2
Author URI: http://mkvadrat.com/
Description: Тема для сайта http://mkvadrat.com/
Version: 1.0
*/

/**********************************************************************************************************************************************************
***********************************************************************************************************************************************************
****************************************************************************НАСТРОЙКИ ТЕМЫ*****************************************************************
***********************************************************************************************************************************************************
***********************************************************************************************************************************************************/
function mk_scripts(){
	wp_register_style( 'awesome-css', get_template_directory_uri() . '/css/font-awesome.min.css');
	wp_enqueue_style( 'awesome-css' );
	
	wp_register_style( 'cyrillic-css', 'https://fonts.googleapis.com/css?family=Roboto:300,400,700,900&display=swap&subset=cyrillic', false, '3.5.7' );
	wp_enqueue_style( 'cyrillic-css' );
	
	wp_register_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.css');
	wp_enqueue_style( 'bootstrap-css' );
	
	wp_register_style( 'fancybox-css', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css', false, '3.5.7' );
	wp_enqueue_style( 'fancybox-css' );
	
	wp_register_style( 'video-css', 'https://vjs.zencdn.net/7.8.3/video-js.css', false, '' );
	wp_enqueue_style( 'video-css' );
	
	wp_register_style( 'animate-css', get_template_directory_uri() . '/css/animate.css');
	wp_enqueue_style( 'animate-css' );

	wp_register_style( 'aos-css', get_template_directory_uri() . '/css/aos.css');
	wp_enqueue_style( 'aos-css' );

	wp_register_style( 'mmenu-css', get_template_directory_uri() . '/css/mmenu.css');
	wp_enqueue_style( 'mmenu-css' );

	wp_register_style( 'mburger-css', get_template_directory_uri() . '/css/mburger.css');
	wp_enqueue_style( 'mburger-css' );
	
	wp_register_style( 'carousel-css', get_template_directory_uri() . '/css/owl.carousel.min.css');
	wp_enqueue_style( 'carousel-css' );
	wp_register_style( 'revealator', get_template_directory_uri() . '/css/revealator.css');
	wp_enqueue_style( 'revealator' );

	wp_register_style( 'magnific-popup', get_template_directory_uri() . '/css/magnific-popup.css');
	wp_enqueue_style( 'magnific-popup' );
	
	wp_register_style( 'styles-css', get_template_directory_uri() . '/css/styles.css');
	wp_enqueue_style( 'styles-css' );

	wp_register_style( 'media-css', get_template_directory_uri() . '/css/media.css'); 
	wp_enqueue_style( 'media-css' );
	
	
	if (!is_admin()) {
		wp_enqueue_script( 'maps-min', 'https://api-maps.yandex.ru/2.1/?apikey=74a6de3b-56bf-4d43-9c69-9060da92721c&load=package.full&lang=ru-RU', '', '', false );
		wp_enqueue_script( 'jquery-min', get_template_directory_uri() . '/js/jquery-3.4.1.min.js', '', '', false );
		wp_enqueue_script( 'revealator-js', get_template_directory_uri() . '/js/revealator.js', '', '', true );
		wp_enqueue_script( 'wow', get_template_directory_uri() . '/js/wow.js', '', '', true );
		wp_enqueue_script( 'videojs-min', 'https://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js', '', '', false );
		wp_enqueue_script( 'TweenMax', get_template_directory_uri() . '/js/tweenMax.js', '', '', true );
		wp_enqueue_script( 'bootstrap-min', get_template_directory_uri() . '/js/bootstrap.js', '', '', true );
		wp_enqueue_script( 'fancybox-min', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js', '', '', true );
		wp_enqueue_script( 'mmenu-min', get_template_directory_uri() . '/js/mmenu.js', '', '', true );
		wp_enqueue_script( 'carousel-min', get_template_directory_uri() . '/js/owl.carousel.min.js', '', '', true );
		wp_enqueue_script( 'magnific-popup', get_template_directory_uri() . '/js/magnific-popup.js', '', '', true );
		wp_enqueue_script( 'aos', get_template_directory_uri() . '/js/aos.js', '', '', true );
		wp_enqueue_script( 'scroll', get_template_directory_uri() . '/js/scroll.js', '', '', true );
		wp_enqueue_script( 'parallax', get_template_directory_uri() . '/js/parallax.min.js', '', '', false );
		//wp_enqueue_script( 'parallax-img', get_template_directory_uri() . '/js/parallax-img.js', '', '', true );
		//wp_enqueue_script( 'parallaxCode', get_template_directory_uri() . '/js/parallaxCode.js', '', '', true );
		wp_enqueue_script( 'custom-min', get_template_directory_uri() . '/js/custom.js', '', '', true );
		//wp_enqueue_script( 'countTo', get_template_directory_uri() . '/js/jquery.countTo.js', '', '', true );
	}
}
add_action( 'wp_enqueue_scripts', 'mk_scripts' );

//Регистрируем название сайта
function mkvadrat_wp_title( $title, $sep ) {
	global $paged, $page;

	if ( is_feed() ) {
		return $title;
	}

	$title .= get_bloginfo( 'name', 'display' );

	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) ) {
		$title = "$title $sep $site_description";
	}

	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() ) {
		$title = "$title $sep " . sprintf( __( 'Page %s', 'ug' ), max( $paged, $page ) );
	}

	if ( is_404() ) {
        $title = '404';
    }

	return $title;
}
add_filter( 'wp_title', 'mkvadrat_wp_title', 10, 2 );

//Регистрируем меню
if(function_exists('register_nav_menus')){
	register_nav_menus(
		array(
		  'header_menu'   => 'Главное меню',
		)
	);
}

//Изображение в шапке сайта
$args = array(
	'width'         => 367,
	'height'        => 49,
	'default-image' => get_template_directory_uri() . '/images/logo.svg',
	'uploads'       => true,
);
add_theme_support( 'custom-header', $args );

//Добавление в тему миниатюры записи и страницы
if ( function_exists( 'add_theme_support' ) ) {
     add_theme_support( 'post-thumbnails' );
}

//Отключить редактор
add_filter('use_block_editor_for_post', '__return_false');

//Отключить редактор
function wpse_hide_cat_descr() { ?>

    <style type="text/css">
       .term-description-wrap {
           display: none;
       }
    </style>

<?php } 
add_action( 'admin_head-term.php', 'wpse_hide_cat_descr' );
add_action( 'admin_head-edit-tags.php', 'wpse_hide_cat_descr' );

//Remove WPAUTOP from ACF TinyMCE Editor
function acf_wysiwyg_remove_wpautop() {
    remove_filter('acf_the_content', 'wpautop' );
}
add_action('acf/init', 'acf_wysiwyg_remove_wpautop');

//Регистрируем sidebar
function register_my_widgets(){
	register_sidebar( array(
		'name' => "Виджет социальных сетей",
		'id' => 'sharing-page',
		'description' => 'Виджет социальных сетей будет показан на страницах в нижней части сайта',
		'before_widget' => '', // по умолчанию виджеты выводятся <li>-списком
		'after_widget' => '',
		'before_title' => '',
		'after_title' => ''
	) );
}
add_action( 'widgets_init', 'register_my_widgets' );

/**********************************************************************************************************************************************************
***********************************************************************************************************************************************************
****************************************************************************МЕНЮ САЙТА*********************************************************************
***********************************************************************************************************************************************************
***********************************************************************************************************************************************************/
// Добавляем свой класс для пунктов меню:
class header_menu extends Walker_Nav_Menu {
	// Добавляем классы к вложенным ul
	function start_lvl( &$output, $depth = 0, $args = Array() ) {
		// Глубина вложенных ul
		$indent = ( $depth > 0  ? str_repeat( "\t", $depth ) : '' ); // code indent
		$display_depth = ( $depth + 1); // because it counts the first submenu as 0
		$classes = array(
			'',
			( $display_depth % 2  ? '' : '' ),
			( $display_depth >=2 ? '' : '' ),
			''
			);
		$class_names = implode( ' ', $classes );
		// build html
		if($depth == 0){
			$output .= "\n" . $indent . '<ul class="dropdown-menu">' . "\n";
		}else if($depth == 1){
			$output .= "\n" . $indent . '<ul class="subsubmenu">' . "\n";
		}else if($depth >= 2){
			$output .= "\n" . $indent . '<ul class="subsubsubmenu">' . "\n";
		}
	}

	// Добавляем классы к вложенным li
	function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
		global $wpdb;
		global $wp_query;
		$indent = ( $depth > 0 ? str_repeat( "\t", $depth ) : '' ); // code indent

		// depth dependent classes
		$depth_classes = array(
			( $depth == 0 ? 'has-sub' : '' ),
			( $depth >=2 ? '' : '' ),
			( $depth % 2 ? '' : '' ),
			'menu-item-depth-' . $depth
		);

		$depth_class_names = esc_attr( implode( ' ', $depth_classes ) );

		// passed classes
		$classes = empty( $item->classes ) ? array() : (array) $item->classes;

		$mycurrent = ( $item->current == 1 ) ? ' active' : '';

		$class_names = esc_attr( implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) ) );
		
		$has_children = $wpdb->get_results( $wpdb->prepare("SELECT post_id FROM $wpdb->postmeta WHERE meta_value = %s AND meta_key = '_menu_item_menu_item_parent'", $item->ID), ARRAY_A);
		
		if($depth == 0 && !empty($has_children)){
			$output .= $indent . '<li class="dropdown ' . $mycurrent . '">';
		}else if($depth == 1){
			$output .= $indent . '<li class="' . $mycurrent . '">';
		}else{
			$output .= $indent . '<li class="' . $mycurrent . '">';
		}

		// Добавляем атрибуты и классы к элементу a (ссылки)
		$attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
		$attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
		$attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
		$attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : ''; 
		$attributes .= ' class="menu-link ' . ( $depth == 0 ? 'parent' : '' ) . ( $depth == 1 ? 'child' : '' ) . ( $depth >= 2 ? 'sub-child' : '' ) . '"';

		if($depth == 0){
			$link  =  $item->url;

			$title = apply_filters( 'the_title', $item->title, $item->ID );

			if(!empty($has_children)){
				$item_output = '<a href="'. $link .'" class="dropdown-toggle" data-toggle="dropdown">' . $title .'<i class="fa fa-angle-down" aria-hidden="true"></i></a>';
			}else{
				$item_output = '<a href="'. $link .'">' . $title .'</a>';
			}
		}else if($depth == 1){
			$has_children = $wpdb->get_results( $wpdb->prepare("SELECT post_id FROM $wpdb->postmeta WHERE meta_value = %s AND meta_key = '_menu_item_menu_item_parent'", $item->ID), ARRAY_A);

			$link  =  $item->url;

			$title = apply_filters( 'the_title', $item->title, $item->ID );

			if(!empty($has_children)){
				$item_output = '<a href="'. $link .'">' . $title .' </a>';
			}else{
				$item_output = '<a href="'. $link .'">' . $title .'</a>';
			}
		}else if($depth >= 2){
			$item_output = sprintf( '%1$s<a%2$s>%3$s%4$s%5$s</a>%6$s',
				$args->before,
				$attributes,
				$args->link_before,
				apply_filters( 'the_title', $item->title, $item->ID ),
				$args->link_after,
				$args->after
			);
		}
		// build html

		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}
}

//Мобильное меню
// Добавляем свой класс для пунктов меню:
class mobile_menu extends Walker_Nav_Menu {
	// Добавляем классы к вложенным ul
	function start_lvl( &$output, $depth = 0, $args = Array() ) {
		// Глубина вложенных ul
		$indent = ( $depth > 0  ? str_repeat( "\t", $depth ) : '' ); // code indent
		$display_depth = ( $depth + 1); // because it counts the first submenu as 0
		$classes = array(
			'',
			( $display_depth % 2  ? '' : '' ),
			( $display_depth >=2 ? '' : '' ),
			''
			);
		$class_names = implode( ' ', $classes );
		// build html
		if($depth == 0){
			$output .= "\n" . $indent . '<ul>' . "\n";
		}else if($depth == 1){
			$output .= "\n" . $indent . '<ul>' . "\n";
		}else if($depth >= 2){
			$output .= "\n" . $indent . '<ul>' . "\n";
		}
	}

	// Добавляем классы к вложенным li
	function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
		global $wpdb;
		global $wp_query;
		$indent = ( $depth > 0 ? str_repeat( "\t", $depth ) : '' ); // code indent

		// depth dependent classes
		$depth_classes = array(
			( $depth == 0 ? 'has-sub' : '' ),
			( $depth >=2 ? '' : '' ),
			( $depth % 2 ? '' : '' ),
			'menu-item-depth-' . $depth
		);

		$depth_class_names = esc_attr( implode( ' ', $depth_classes ) );

		// passed classes
		$classes = empty( $item->classes ) ? array() : (array) $item->classes;

		$mycurrent = ( $item->current == 1 ) ? ' active' : '';

		$class_names = esc_attr( implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) ) );
		
		$has_children = $wpdb->get_results( $wpdb->prepare("SELECT post_id FROM $wpdb->postmeta WHERE meta_value = %s AND meta_key = '_menu_item_menu_item_parent'", $item->ID), ARRAY_A);
		
		if($depth == 0 && !empty($has_children)){
			$output .= $indent . '<li>';
		}else if($depth == 1){
			$output .= $indent . '<li>';
		}else{
			$output .= $indent . '<li>';
		}

		// Добавляем атрибуты и классы к элементу a (ссылки)
		$attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
		$attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
		$attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
		$attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : ''; 
		$attributes .= ' class="menu-link ' . ( $depth == 0 ? 'parent' : '' ) . ( $depth == 1 ? 'child' : '' ) . ( $depth >= 2 ? 'sub-child' : '' ) . '"';

		if($depth == 0){
			$link  =  $item->url;

			$title = apply_filters( 'the_title', $item->title, $item->ID );

			if(!empty($has_children)){
				$item_output = '<a href="'. $link .'">' . $title .'</a>';
			}else{
				$item_output = '<a href="'. $link .'">' . $title .'</a>';
			}
		}else if($depth == 1){
			$has_children = $wpdb->get_results( $wpdb->prepare("SELECT post_id FROM $wpdb->postmeta WHERE meta_value = %s AND meta_key = '_menu_item_menu_item_parent'", $item->ID), ARRAY_A);

			$link  =  $item->url;

			$title = apply_filters( 'the_title', $item->title, $item->ID );

			if(!empty($has_children)){
				$item_output = '<a href="'. $link .'">' . $title .' </a>';
			}else{
				$item_output = '<a href="'. $link .'">' . $title .'</a>';
			}
		}else if($depth >= 2){
			$item_output = sprintf( '%1$s<a%2$s>%3$s%4$s%5$s</a>%6$s',
				$args->before,
				$attributes,
				$args->link_before,
				apply_filters( 'the_title', $item->title, $item->ID ),
				$args->link_after,
				$args->after
			);
		}
		// build html

		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}
}

/**********************************************************************************************************************************************************
***********************************************************************************************************************************************************
********************************************************************ХЛЕБНЫЕ КРОШКИ*************************************************************************
***********************************************************************************************************************************************************
***********************************************************************************************************************************************************/
function dimox_breadcrumbs() {
	/* === ОПЦИИ === */
 
	if(defined('ICL_LANGUAGE_CODE') && ICL_LANGUAGE_CODE == 'en'){ //english
		$text['home'] = 'Home'; // текст ссылки "Главная"
		$text['search'] = 'Search Results for "%s"'; // текст для страницы с результатами поиска
		$text['tag'] = 'Posts Tagged "%s"'; // текст для страницы тега
		$text['author'] = 'Articles author  %s'; // текст для страницы автора
		$text['404'] = 'Error 404'; // текст для страницы 404
		$text['page'] = 'Page %s'; // текст 'Страница N'
		$text['cpage'] = 'Comments page %s'; // текст 'Страница комментариев N'
	}elseif(defined('ICL_LANGUAGE_CODE') && ICL_LANGUAGE_CODE == 'es'){ //spanish
		$text['home'] = 'Inicio'; // текст ссылки "Главная"
		$text['search'] = 'Resultados de búsqueda para "%s"'; // текст для страницы с результатами поиска
		$text['tag'] = 'Posts etiquetados "%s"'; // текст для страницы тега
		$text['author'] = 'Artículos de autor %s'; // текст для страницы автора
		$text['404'] = 'Error 404'; // текст для страницы 404
		$text['page'] = 'Pagina %s'; // текст 'Страница N'
		$text['cpage'] = 'Página de comentarios %s'; // текст 'Страница комментариев N'
	}else{
		$text['home'] = 'Главная'; // текст ссылки "Главная"
		$text['search'] = 'Результаты поиска по запросу "%s"'; // текст для страницы с результатами поиска
		$text['tag'] = 'Записи с тегом "%s"'; // текст для страницы тега
		$text['author'] = 'Статьи автора %s'; // текст для страницы автора
		$text['404'] = 'Ошибка 404'; // текст для страницы 404
		$text['page'] = 'Страница %s'; // текст 'Страница N'
		$text['cpage'] = 'Страница комментариев %s'; // текст 'Страница комментариев N'
	}

	$text['category'] = '%s'; // текст для страницы рубрики
	$wrap_before = '<ol class="breadcrumb">'; // открывающий тег обертки
	$wrap_after = '</ol>'; // закрывающий тег обертки
	$sep = ''; // разделитель между "крошками"
	$sep_before = ''; // тег перед разделителем
	$sep_after = ''; // тег после разделителя
	$show_home_link = 1; // 1 - показывать ссылку "Главная", 0 - не показывать
	$show_on_home = 0; // 1 - показывать "хлебные крошки" на главной странице, 0 - не показывать
	$show_current = 1; // 1 - показывать название текущей страницы, 0 - не показывать
	$before = '<li class="breadcrumb-item">'; // тег перед текущей "крошкой"
	$after = '</li>'; // тег после текущей "крошки"
	/* === КОНЕЦ ОПЦИЙ === */
  
	global $post;
	$home_url = home_url('/');
	$link_before = '';
	$link_after = '';
	$link_attr = '';
	$link_in_before = '';
	$link_in_after = '';
	$link = $link_before . '<li><a href="%1$s"' . $link_attr . '>' . $link_in_before . '%2$s' . $link_in_after . '</a></li>' . $link_after;
	$frontpage_id = get_option('page_on_front');
	$parent_id = ($post) ? $post->post_parent : '';
	$sep = ' ' . $sep_before . $sep . $sep_after . ' ';
	$home_link = $link_before . '<li><a href="' . $home_url . '"' . $link_attr . '>' . $link_in_before . $text['home'] . $link_in_after . '</a></li>' . $link_after;
  
	if (is_home() || is_front_page()) {
	
		if ($show_on_home) echo $wrap_before . $home_link . $wrap_after;
	
	} else {
	
		echo $wrap_before;
		if ($show_home_link) echo $home_link;
		
		if ( is_category() ) {
			$cat = get_category(get_query_var('cat'), false);
			if ($cat->parent != 0) {
				$cats = get_category_parents($cat->parent, TRUE, $sep);
				$cats = preg_replace("#^(.+)$sep$#", "$1", $cats);
				$cats = preg_replace('#<a([^>]+)>([^<]+)<\/a>#', $link_before . '<a$1' . $link_attr .'>' . $link_in_before . '$2' . $link_in_after .'</a>' . $link_after, $cats);
				if ($show_home_link) echo $sep;
				echo $cats;
			}
			if ( get_query_var('paged') ) {
				$cat = $cat->cat_ID;
				echo $sep . sprintf($link, get_category_link($cat), get_cat_name($cat)) . $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
			} else {
				if ($show_current) echo $sep . '<li class="breadcrumb-item active" aria-current="page">' . sprintf($text['category'], single_cat_title('', false)) . '</li>';
			}
	  
		} elseif ( is_search() ) {
			if (have_posts()) {
				if ($show_home_link && $show_current) echo $sep;
				if ($show_current) echo '<li class="breadcrumb-item active" aria-current="page">' . sprintf($text['search'], get_search_query()) . '</li>';
			} else {
				if ($show_home_link) echo $sep;
				echo $before . sprintf($text['search'], get_search_query()) . $after;
			}
		} elseif ( is_day() ) {
			if ($show_home_link) echo $sep;
			echo sprintf($link, get_year_link(get_the_time('Y')), get_the_time('Y')) . $sep;
			echo sprintf($link, get_month_link(get_the_time('Y'), get_the_time('m')), get_the_time('F'));
			if ($show_current) echo $sep . '<li class="breadcrumb-item active" aria-current="page">' . get_the_time('d') . '</li>';
		} elseif ( is_month() ) {
			if ($show_home_link) echo $sep;
			echo sprintf($link, get_year_link(get_the_time('Y')), get_the_time('Y'));
			if ($show_current) echo $sep . '<li class="breadcrumb-item active" aria-current="page">' . get_the_time('F') . '</li>';
		} elseif ( is_year() ) {
			if ($show_home_link && $show_current) echo $sep;
			if ($show_current) echo '<li class="breadcrumb-item active" aria-current="page">' . get_the_time('Y') . '</li>';
		} elseif ( is_single() && !is_attachment() ) {
			//Категории (для single.php)
			if ($show_home_link) echo $sep;
			if ( get_post_type() != 'post' ) {
				if( get_post_type() == 'appliances'){
					$page = get_post('755');
					
					$term = get_the_terms(get_the_ID(), 'appliances-list');
					
					echo '<li><a href="'.get_page_link($page->ID).'">' . $page->post_title . '</a></li>' . $after . $sep . $before .'<li><a href="'.get_term_link($term[0]->term_id, 'appliances-list').'">' . $term[0]->name . '</a></li>' ;
					
					if ($show_current) echo $sep . '<li class="breadcrumb-item active" aria-current="page">' . get_the_title() . '</li>';
				}else{
					$post_type = get_post_type_object(get_post_type());
					$slug = $post_type->rewrite;
					printf($link, $home_url . $slug['slug'] . '/', $post_type->labels->singular_name);
					if ($show_current) echo $sep . '<li class="breadcrumb-item active" aria-current="page">' . get_the_title() . '</li>';
				}
			} else {
				$cat = get_the_category(); $cat = $cat[0];
				$cats = get_category_parents($cat, TRUE, $sep);
				if (!$show_current || get_query_var('cpage')) $cats = preg_replace("#^(.+)$sep$#", "$1", $cats);
					$cats = preg_replace('#<a([^>]+)>([^<]+)<\/a>#', $link_before . '<li><a$1' . $link_attr .'>' . $link_in_before . '$2' . $link_in_after .'</a></li>' . $link_after, $cats);
				echo $cats;
				if ( get_query_var('cpage') ) {
					echo $sep . sprintf($link, get_permalink(), get_the_title()) . $sep . $before . sprintf($text['cpage'], get_query_var('cpage')) . $after;
				} else {
					if ($show_current) echo '<li class="breadcrumb-item active" aria-current="page">' . get_the_title() . '</li>';
				}
			}
			// custom post type
		} elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {
			//Категории (для category.php)
			$term_name = get_term( get_queried_object()->term_id, 'appliances-list' );
			
			if(get_post_type() == 'appliances' || $term_name->taxonomy == 'appliances-list'){
				$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
				
				$page = get_post('755');
				
				echo $sep . '<li><a href="'.get_page_link($page->ID).'">' . $page->post_title . '</a></li>' . $after ;

				if ($show_current) echo $sep . '<li class="breadcrumb-item active" aria-current="page">' . $term->name . '</li>';
			}else{
				$post_type = get_post_type_object(get_post_type());	  
				if ( get_query_var('paged') ) {
					echo $sep . sprintf($link, get_page_link( $post_type->name), $post_type->label) . $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
				} else {
					if ($show_current) echo $sep . '<li class="breadcrumb-item active" aria-current="page">' . $post_type->label . '</li>';
				}
			}
	
		} elseif ( is_attachment() ) {
			if ($show_home_link) echo $sep;
			$parent = get_post($parent_id);
			$cat = get_the_category($parent->ID); $cat = $cat[0];
			if ($cat) {
				$cats = get_category_parents($cat, TRUE, $sep);
				$cats = preg_replace('#<a([^>]+)>([^<]+)<\/a>#', $link_before . '<a$1' . $link_attr .'>' . $link_in_before . '$2' . $link_in_after .'</a>' . $link_after, $cats);
				echo $cats;
			}
			printf($link, get_permalink($parent), $parent->post_title);
			if ($show_current) echo $sep . '<li class="breadcrumb-item active" aria-current="page">' . get_the_title() . '</li>';
		} elseif ( is_page() && !$parent_id ) {
				if ($show_current) echo $sep . '<li class="breadcrumb-item active" aria-current="page">' . get_the_title() . '</li>';
		} elseif ( is_page() && $parent_id ) {
			if ($show_home_link) echo $sep;
			if ($parent_id != $frontpage_id) {
				$breadcrumbs = array();
				while ($parent_id) {
				  $page = get_page($parent_id);
				  if ($parent_id != $frontpage_id) {
					  $breadcrumbs[] = sprintf($link, get_permalink($page->ID), get_the_title($page->ID));
				  }
				  $parent_id = $page->post_parent;
				}
				$breadcrumbs = array_reverse($breadcrumbs);
				for ($i = 0; $i < count($breadcrumbs); $i++) {
					  echo $breadcrumbs[$i];
					  if ($i != count($breadcrumbs)-1) echo $sep;
				}
			}
			if ($show_current) echo $sep . '<li class="breadcrumb-item active" aria-current="page">' . get_the_title() . '</li>';
		} elseif ( is_tag() ) {
			if ( get_query_var('paged') ) {
				$tag_id = get_queried_object_id();
				$tag = get_tag($tag_id);
				echo $sep . sprintf($link, get_tag_link($tag_id), $tag->name) . $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
			} else {
				if ($show_current) echo $sep . '<li class="breadcrumb-item active" aria-current="page">' . sprintf($text['tag'], single_tag_title('', false)) . '</li>';
			}
		} elseif ( is_author() ) {
			global $author;
			$author = get_userdata($author);
			if ( get_query_var('paged') ) {
				if ($show_home_link) echo $sep;
				echo sprintf($link, get_author_posts_url($author->ID), $author->display_name) . $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
			} else {
				if ($show_home_link && $show_current) echo $sep;
				if ($show_current) echo '<li class="breadcrumb-item active" aria-current="page">' . sprintf($text['author'], $author->display_name) . '</li>';
			}
		} elseif ( is_404() ) {
			if ($show_home_link && $show_current) echo $sep;
			if ($show_current) echo '<li class="breadcrumb-item active" aria-current="page">' . $text['404'] . '</li>';
	
		} elseif ( has_post_format() && !is_singular() ) {
			if ($show_home_link) echo $sep;
			echo get_post_format_string( get_post_format() );
		}
	
		echo $wrap_after;
	}
}

/**********************************************************************************************************************************************************
***********************************************************************************************************************************************************
***********************************************************************"РАЗДЕЛ ВАКАНСИИ"*******************************************************************
***********************************************************************************************************************************************************
***********************************************************************************************************************************************************/
function register_post_type_vacancy() {
	$labels = array(
	 'name' => 'Вакансии',
	 'singular_name' => 'Вакансия',
	 'add_new' => 'Добавить статью',
	 'add_new_item' => 'Добавить новую статью',
	 'edit_item' => 'Редактировать статью',
	 'new_item' => 'Новая статья',
	 'all_items' => 'Все статьи',
	 'view_item' => 'Просмотр статей на сайте',
	 'search_items' => 'Искать статьи',
	 'not_found' => 'Статьи не найдены.',
	 'not_found_in_trash' => 'В корзине нет статей.',
	 'menu_name' => 'Вакансии'
	);

	$args = array(
		'labels' => $labels,
		'public' => true,
		'exclude_from_search' => true,
		'show_ui' => true,
		'has_archive' => false,
		'menu_icon' => 'dashicons-megaphone',
		'menu_position' => 20,
		'supports' =>  array('title','editor'),
		'publicly_queryable'  => false,
		'query_var'           => false
	 );
 	register_post_type('vacancy', $args);
}
add_action( 'init', 'register_post_type_vacancy' );

function true_post_type_vacancy( $vacancy ) {

	global $post, $post_ID;

	$faq['vacancy'] = array(
		0 => '',
		1 => sprintf( 'Статьи обновлены. <a href="%s">Просмотр</a>', esc_url( get_permalink($post_ID) ) ),
		2 => 'Статьи обновлёны.',
		3 => 'Статья удалёна.',
		4 => 'Статья обновлена.',
		5 => isset($_GET['revision']) ? sprintf( 'Статья восстановлена из редакции: %s', wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
		6 => sprintf( 'Статья опубликована на сайте. <a href="%s">Просмотр</a>', esc_url( get_permalink($post_ID) ) ),
		7 => 'Статья сохранена.',
		8 => sprintf( 'Отправлен на проверку. <a target="_blank" href="%s">Просмотр</a>', esc_url( add_query_arg( 'preview', 'true', get_permalink($post_ID) ) ) ),
		9 => sprintf( 'Запланирован на публикацию: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Просмотр</a>', date_i18n( __( 'M j, Y @ G:i' ), strtotime( $post->post_date ) ), esc_url( get_permalink($post_ID) ) ),
		10 => sprintf( 'Черновик обновлён. <a target="_blank" href="%s">Просмотр</a>', esc_url( add_query_arg( 'preview', 'true', get_permalink($post_ID) ) ) ),
	);

	return $vacancy;
}
add_filter( 'post_updated_messages', 'true_post_type_vacancy' );

//Категории для пользовательских записей "Вакансии"
function create_taxonomies_vacancy() {
    // Cats Categories
    register_taxonomy('vacancy-list',array('vacancy'),array(
        'hierarchical' => true,
        'label' => 'Рубрики',
        'singular_name' => 'Рубрика',
        'show_ui' => true,
        'query_var' => true,
		'publicly_queryable' => false,
        'rewrite' => array('slug' => 'vacancy-list' )
    ));
}
add_action( 'init', 'create_taxonomies_vacancy', 0 );

/**********************************************************************************************************************************************************
***********************************************************************************************************************************************************
*********************************************************************"РАЗДЕЛ КАРТА МИРА"*******************************************************************
***********************************************************************************************************************************************************
***********************************************************************************************************************************************************/
function register_post_type_maps() {
	$labels = array(
	 'name' => 'Страны мира',
	 'singular_name' => 'Страны мира',
	 'add_new' => 'Добавить статью',
	 'add_new_item' => 'Добавить новую статью',
	 'edit_item' => 'Редактировать статью',
	 'new_item' => 'Новая статья',
	 'all_items' => 'Все статьи',
	 'view_item' => 'Просмотр статей на сайте',
	 'search_items' => 'Искать статьи',
	 'not_found' => 'Статьи не найдены.',
	 'not_found_in_trash' => 'В корзине нет статей.',
	 'menu_name' => 'Страны мира'
	);

	$args = array(
		'labels' => $labels,
		'public' => true,
		'exclude_from_search' => true,
		'show_ui' => true,
		'has_archive' => false,
		'menu_icon' => 'dashicons-admin-site-alt3',
		'menu_position' => 20,
		'supports' =>  array('title','editor'),
		'publicly_queryable'  => false,
		'query_var'           => false
	 );
 	register_post_type('maps', $args);
}
add_action( 'init', 'register_post_type_maps' );

function true_post_type_maps( $maps ) {

	global $post, $post_ID;

	$faq['maps'] = array(
		0 => '',
		1 => sprintf( 'Статьи обновлены. <a href="%s">Просмотр</a>', esc_url( get_permalink($post_ID) ) ),
		2 => 'Статьи обновлёны.',
		3 => 'Статья удалёна.',
		4 => 'Статья обновлена.',
		5 => isset($_GET['revision']) ? sprintf( 'Статья восстановлена из редакции: %s', wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
		6 => sprintf( 'Статья опубликована на сайте. <a href="%s">Просмотр</a>', esc_url( get_permalink($post_ID) ) ),
		7 => 'Статья сохранена.',
		8 => sprintf( 'Отправлен на проверку. <a target="_blank" href="%s">Просмотр</a>', esc_url( add_query_arg( 'preview', 'true', get_permalink($post_ID) ) ) ),
		9 => sprintf( 'Запланирован на публикацию: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Просмотр</a>', date_i18n( __( 'M j, Y @ G:i' ), strtotime( $post->post_date ) ), esc_url( get_permalink($post_ID) ) ),
		10 => sprintf( 'Черновик обновлён. <a target="_blank" href="%s">Просмотр</a>', esc_url( add_query_arg( 'preview', 'true', get_permalink($post_ID) ) ) ),
	);

	return $maps;
}
add_filter( 'post_updated_messages', 'true_post_type_maps' );