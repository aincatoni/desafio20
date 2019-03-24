<?php
 
 add_theme_support( "post-thumbnails" );

function register_enqueue_style() {
    $theme_data = wp_get_theme();

    /* Registrando estilos */
    wp_register_style('bootstrap',
    get_parent_theme_file_uri('/assets/bootstrap/css/bootstrap.css'), null, '1.0.0', 'screen');
    wp_register_style('portfolio',
    get_parent_theme_file_uri('/assets/css/portfolio-item.css'), null, '1.0.0', 'screen');
    wp_register_style('fontAwesome',
    'https://use.fontawesome.com/releases/v5.7.1/css/all.css', null, '1.0.0', 'screen');
    wp_register_style('googleFonts',
    'https://fonts.googleapis.com/css?family=Lato', null, '1.0.0', 'screen');
    wp_register_style('magnificPopup',
    'https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css', null, '1.0.0', 'screen');
    wp_register_style('main',
    get_parent_theme_file_uri('/assets/css/style.css'), null, '1.0.0', 'screen');
    


    /* Enqueue estilos */

    wp_enqueue_style('bootstrap');
    wp_enqueue_style('portfolio');
    wp_enqueue_style('fontAwesome');
    wp_enqueue_style('googleFonts');
    wp_enqueue_style('magnificPopup');
    wp_enqueue_style('main');

    }

    add_action( 'wp_enqueue_scripts', 'register_enqueue_style');

    // REGISTRO DE SCRIPTS
    
    
    function register_enqueue_scripts(){
        $theme_data = wp_get_theme();

        /* Deregister Scripts */
        wp_deregister_script('jquery');
        wp_deregister_script('jquery-migrate');
    


    /* Registrando Scripts */
    wp_register_script('jQuery3', 'https://code.jquery.com/jquery-3.3.1.min.js', null, '3.3.1', true);
    wp_register_script('jQuery_migrate', 'https://code.jquery.com/jquery-migrate-3.0.1.min.js', array('jQuery3'), '3.0.1', true);
    wp_register_script('bootstrap',
    get_parent_theme_file_uri('/assets/bootstrap/js/bootstrap.js'), array('jQuery_migrate'), null, true);
    wp_register_script('easingJquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js', array('jQuery_migrate'), null, true);
    wp_register_script('scrollReveal', 'https://unpkg.com/scrollreveal', array('jQuery_migrate'), null, true);
    wp_register_script('magnificPopup', 'https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js', array('jQuery_migrate'), null, true);
    wp_register_script('mainJS',
    get_parent_theme_file_uri('/assets/js/script.js'), array('jQuery3'), null, true);
    
    /* Enqueue scripts */
    wp_enqueue_script('bootstrap');
    wp_enqueue_script('easingJquery');
    wp_enqueue_script('scrollReveal');
    wp_enqueue_script('magnificPopup');
    wp_enqueue_script('mainJS');

}
    

    add_action( 'wp_enqueue_scripts', 'register_enqueue_scripts');

// agregando menus personalizables

function menus_setup() {
	register_nav_menus(
		array(
			'header-menu'	=> __( 'Header Menu' ),
			'footer-menu'	=> __( 'Footer Menu' ),
		)
	);
}

add_action( 'after_setup_theme', 'menus_setup' );

// Custom Post Type - Proyectos

    add_action ('init', function(){
        $args = array(
            'public' => true,
            'label'  => 'Experiencia',
            'menu_position'         => 2,
          );
          register_post_type( 'experiencia', $args );
      
    });

    add_action ('init', function(){
        $args = array(
            'public' => true,
            'label'  => 'Educación',
            'menu_position'         => 2,
          );
          register_post_type( 'educacion', $args );
      
    });

     add_action ('init', function(){
        $args = array(
            'public' => true,
            'label'  => 'Habilidad',
            'menu_position'         => 2,
          );
          register_post_type( 'habilidades', $args );
      
    });

    //registro de widgets

    function dl_widgets() {
        register_sidebar( array(
            'name' => 'Widget Footer',
            'id' => 'widget_footer'
        ));
    }

    add_action('widgets_init', 'dl_widgets');




?>