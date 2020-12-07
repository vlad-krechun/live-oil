<?php

add_action('wp_enqueue_scripts' , 'oil_scripts');

	function oil_scripts() {
		wp_enqueue_style( 'oil-style', get_stylesheet_uri() );
		wp_enqueue_script( 'oil-scripts-cdn', "https://code.jquery.com/jquery-3.4.1.slim.min.js", array(), null, true);
		wp_enqueue_script( 'oil-scripts', get_template_directory_uri() . "/assets/js/script.js", array('jquery'), null, true);
}









?>