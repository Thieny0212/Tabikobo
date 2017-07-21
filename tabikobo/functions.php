<?php 
	if(function_exists('add_theme_support')) {
		add_theme_support('menus');
		add_theme_support( 'post-thumbnails' );
	}
	function register_tabikobo_menu(){
		register_nav_menus(
			array(
				'header-menu'		=> 'Header menu',
				'footer-menu'	=> 'Footer menu'
		));
	}
	add_action('init', 'register_tabikobo_menu');
	/*======Head menu======*/
	function tabikobo_header_menu(){
		wp_nav_menu(
	        array(
	            'theme_location'  	=> 'header-menu',
	            'menu'          	=> '',
	            'menu_class'		=> '',
	            'container'       	=> '',
	            'container_class' 	=> '',
	        )
    	);
	}
	/*======Footer menu======*/
	function tabikobo_footer_menu(){
		wp_nav_menu(
	        array(
	            'theme_location'  	=> 'footer-menu',
	            'menu'          	=> '',
	            'menu_class'		=> '',
	            'container'       	=> '',
	            'container_class' 	=> '',
	        )
    	);
	}

	if ( function_exists('register_sidebar') ) {
      register_sidebar(array(
          'name'          => 'Right Sidebar 1',
          'id'            => 'side_bar_1',
          'before_widget' => '<div id="%1$s" class="widget_box">',
          'after_widget'  => '</div>',
          'before_title'  => '',
          'after_title'   => ''
      ));
      register_sidebar(array(
          'name'          => 'Right Sidebar 2',
          'id'            => 'side_bar_2',
          'before_widget' => '<div id="%1$s" class="widget_box">',
          'after_widget'  => '</div>',
          'before_title'  => '',
          'after_title'   => ''
      ));

  	}
 
  	add_filter('widget_text', 'do_shortcode');



  	/*Filter Search page Just Search Post*/
  	function SearchFilter($query) {
	    if ($query->is_search) {
	        $query->set('post_type', 'post');
	    }
	    return $query;
	}
	add_filter('pre_get_posts','SearchFilter');

	function empty_content($str) {
    	return trim(str_replace('&nbsp;','',strip_tags($str))) == '';
	}