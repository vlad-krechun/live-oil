<?php

add_action('wp_enqueue_scripts' , 'oil_scripts');


add_action( 'widgets_init', 'register_my_widgets' );
function register_my_widgets(){

	register_sidebar( array(
		'name'          => 'Sidebar din dreapta',
		'id'            => "right_sidebar",
		'description'   => 'Alte articole cae vor apărea ',
		'class'         => 'aside',
		'before_widget' => '<aside id="%1$s" class=" aside widget %2$s">',
		'after_widget'  => "</aside>\n",
		'before_title'  => '<h2 class="aside__title widgettitle">',
		'after_title'   => "</h2>\n",
		'before_sidebar' => '', // WP 5.6
		'after_sidebar'  => '', // WP 5.6
	) );
}


add_action( 'widgets_init', 'register_search_widgets' );
function register_search_widgets(){

	register_sidebar( array(
		'name'          => 'Motor de cautare',
		'id'            => "search_sidebar",
		'description'   => 'Search',
		'class'         => 'search',
		'before_widget' => '<div id="%1$s" class=" search widget %2$s">',
		'after_widget'  => "</div>\n",
		'before_title'  => '',
		'after_title'   => " ",
		'before_sidebar' => '', // WP 5.6
		'after_sidebar'  => '', // WP 5.6
	) );
}

	function oil_scripts() {
		wp_enqueue_style( 'oil-style', get_stylesheet_uri() );
		wp_enqueue_script( 'oil-scripts-cdn', "https://code.jquery.com/jquery-3.4.1.slim.min.js", array(), null, true);
		wp_enqueue_script( 'oil-scripts', get_template_directory_uri() . "/assets/js/script.js", array('jquery'), null, true);
}

add_theme_support( 'custom-logo' );
add_theme_support( 'post-thumbnails' );
add_image_size( 'seed-thumb', 310, 250 );
add_image_size( 'single-thumb', 1200, 9999 );

add_theme_support( 'menus' );
add_filter('excerpt_more', function($more) {
	return '...';
});

add_filter( 'nav_menu_link_attributes', 'filter_menu_atributes', 10, 3 );

	function filter_menu_atributes($atts, $item, $args){
		if($args->menu === 'Top_menu'){
			$atts['class'] = 'header__link';
		};
		return $atts;
	}

	add_filter('wp_nav_menu_objects', 'my_wp_nav_menu_objects', 10, 2);

	function my_wp_nav_menu_objects( $items, $args ) {
		
		// loop
		foreach( $items as &$item ) {
			
			// vars
			$tel = get_field('link_tel', $item);
			
			
			// append icon
			if( $tel ) {
				
				$item->href .= $tel;
				
			}
			
		}
		
		
		// return
		return $items;
		
	}

	add_filter('widget_tag_cloud_args','set_tag_cloud_args');
	function set_tag_cloud_args( $args ) {
		$args['number'] = 30;
		$args['largest'] = 22;
		$args['smallest'] = 22;
		$args['unit'] = 'px';
		return $args;
	}

	function mysite_pagenav($pages = '', $range = 2){
		$showitems = ($range * 2)+1;
		global $paged;
		if(empty($paged)) $paged = 1;
		if($pages == ''){
		  global $wp_query;
		  $pages = $wp_query->max_num_pages;
		  if(!$pages){
			 $pages = 1;
		  }
		}
		if(1 != $pages){
		  echo '<div class="page_nav">';
			 if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo '<a class="first_nav" href="'.get_pagenum_link(1).'">&laquo;</a>';
			 if($paged > 1 && $showitems < $pages) echo '<a class="prev_nav" href="'.get_pagenum_link($paged - 1).'">&lsaquo;</a>';
			 for ($i=1; $i <= $pages; $i++){
				if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )){
				  echo ($paged == $i)? '<span class="current">'.$i.'</span>':'<a href="'.get_pagenum_link($i).'" class="inactive" >'.$i.'</a>';
				}
			 }
			 if ($paged < $pages && $showitems < $pages) echo '<a class="next_nav" href="'.get_pagenum_link($paged + 1).'">&rsaquo;</a>';
			 if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo '<a class="last_nav" href="'.get_pagenum_link($pages).'">&raquo;</a>';
			 echo "</div>\n";
		}
	 }

	 function wp_corenavi() {
		global $wp_query;
		$total = isset( $wp_query->max_num_pages ) ? $wp_query->max_num_pages : 1;
		$a['total'] = $total;
		$a['mid_size'] = 3; // сколько ссылок показывать слева и справа от текущей
		$a['end_size'] = 1; // сколько ссылок показывать в начале и в конце
		$a['prev_text'] = '&laquo;'; // текст ссылки "Предыдущая страница"
		$a['next_text'] = '&raquo;'; // текст ссылки "Следующая страница"
	 
		if ( $total > 1 ) echo '<nav class="pagination">';
		echo paginate_links( $a );
		if ( $total > 1 ) echo '</nav>';
	 }


	 function wpschool_page_navi() {
		global $wp_query;
		$pages = '';
		$maxpages = $wp_query->max_num_pages;
		if ( !$currentpage = get_query_var( 'paged' ) ) {
			 $currentpage = 1;
		}
		$link['base'] = str_replace( 999999999, '%#%', get_pagenum_link( 999999999 ) );
		$link['totalpages'] = $maxpages;
		$link['currentpage'] = $currentpage;
		$totalpages = 0; //1 - вывести "Страница N из N", 0 - не выводить
		$link['mid_size'] = 3; //к-во ссылок показывать слева и справа от текущей
		$link['end_size'] = 1; //к-во ссылок показывать в начале и в конце
		$link['prev_text'] = 'Пред.';
		$link['next_text'] = 'След.';
		if ( $maxpages > 1 ) {
			 echo '<div class="navigation">';
		}
		if ( $totalpages == 1 && $maxpages > 1 ) {
			 $pages = '<span class="pages">Страница ' . $currentpage . ' из ' . $maxpages . '</span>'."\r\n";
		}
		echo $pages . paginate_links($link);
		if ( $maxpages > 1 ) {
			  echo '</div>';
		}
  }
  // Всатвить в нужное место в шаблоне
  /* 	<?php if (function_exists('wpschool_page_navi')) wpschool_page_navi(); ?>*/
?>