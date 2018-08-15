<?php

//REGISTRO DE ESTILOS

function register_enqueue_style() {
	$theme_data = wp_get_theme();

	/*Registrando estilos*/
	wp_register_style('bootstrap',
	get_parent_theme_file_uri('/vendor/stylesheets/bootstrap.css'), null, '4.1.3', 'screen');
	wp_register_style('fontawesome', 'https://use.fontawesome.com/releases/v5.2.0/css/all.css', null, '1.0.0', 'screen');
	wp_register_style('googleFonts', 'https://fonts.googleapis.com/css?family=Arya:400,700|Chango:400,700');
	wp_register_style('magnificPopup',
	get_parent_theme_file_uri('/vendor/stylesheets/magnific-popup.css'), null, '1.0.0', 'screen');
	wp_register_style('main',
	get_parent_theme_file_uri('/assets/stylesheets/styles.css'), null, '1.0.0', 'screen');

		/* Enqueue estilos */
		wp_enqueue_style('bootstrap');
		wp_enqueue_style('fontawesome');
		wp_enqueue_style('googleFonts');
		wp_enqueue_style('magnificPopup');
		wp_enqueue_style('main');
}

add_action( 'wp_enqueue_scripts', 'register_enqueue_style' );

//REGISTRO DE SCRIPTS

function register_enqueue_scripts() {
	$theme_data = wp_get_theme();

/*Deregister Scripts*/
wp_deregister_script( 'jquery' );
wp_deregister_script( 'jquery-migrate' );

/*Registrando Scripts*/
wp_register_script('jQuery3', get_parent_theme_file_uri('/vendor/Javascripts/jquery.min.js'), null, '3.3.1', true);
wp_register_script('jQuery_migrate', get_parent_theme_file_uri('/vendor/Javascripts/jquery-migrate.min.js'), array('jQuery3'), '3.0.0', true);
wp_register_script('bootstrap', get_parent_theme_file_uri('/vendor/Javascripts/bootstrap.min.js'), array('jQuery_migrate'), null, true);
wp_register_script('easingJquery', get_parent_theme_file_uri('/vendor/Javascripts/jquery.easing.1.3.min.js'), array('jQuery_migrate'), null, true);
wp_register_script('magnificPopup', get_parent_theme_file_uri('/vendor/Javascripts/jquery.magnific-popup.min.js'), array('jQuery_migrate'), null, true);
wp_register_script('mainJS', get_parent_theme_file_uri('/js/scripts.js'), array('jQuery3'), null, true);

//Enqueue Scripts
wp_enqueue_scripts('bootstrap');
wp_enqueue_scripts('easingJquery');
wp_enqueue_scripts('magnificPopup');
wp_enqueue_scripts('mainJS');

}

add_action('wp_enqueue_scripts', 'register_enqueue_scripts');

?>