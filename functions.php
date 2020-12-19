<?php

add_action('wp_enqueue_scripts' , 'oil_scripts');

	function oil_scripts() {
		wp_enqueue_style( 'oil-style', get_stylesheet_uri() );
		wp_enqueue_script( 'oil-scripts-cdn', "https://code.jquery.com/jquery-3.4.1.slim.min.js", array(), null, true);
		wp_enqueue_script( 'oil-scripts', get_template_directory_uri() . "/assets/js/script.js", array('jquery'), null, true);
}

add_theme_support( 'custom-logo' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'menus' );

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





?>