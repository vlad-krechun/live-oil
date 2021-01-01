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



?>