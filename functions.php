<?php

	add_action('after_setup_theme','theme_functions');
	function theme_functions(){

		add_theme_support('title-tag');
		add_theme_support('post-thumbnails');
		add_theme_support('custom-header',array(

			'default-image'	=> get_template_directory_uri().'/images/anoceanofsky.jpg'

		));

		add_theme_support('custom-background',array(

			'default-image'	=> get_template_directory_uri().'/images/background.png'

		));

		load_theme_textdomain('basictheme',get_template_directory().'/languages');
		register_nav_menu('main-menu',__('Main Menu','basictheme'));

		
			register_post_type('basic-testimonials',array(
				'labels'	=>	array(
					'name'	=>	'Testimonials',
					'add_new_item'	=> 'Add New Testimonial'
				),
				'public'	=>	true,
				'menu_icon'	=>	'dashicons-email',
				'menu_position'	=>	5,
				'supports'		=>	array('title','thumbnail','revisions')
			));
		
		
		
		
	}

	add_action('wp_enqueue_scripts','theme_styles');
	add_action('admin_enqueue_scripts','admin_styles');
	function admin_styles(){
		wp_enqueue_style('font-awesome',get_template_directory_uri().'/css/font-awesome.min.css');
	}

	function theme_styles(){
		wp_enqueue_style('style',get_stylesheet_uri());
		wp_enqueue_style('font-awesome',get_template_directory_uri().'/css/font-awesome.min.css');
	}

	if(file_exists(dirname(__FILE__).'/metabox/init.php')){
		require_once(dirname(__FILE__).'/metabox/init.php');
	}

	if(file_exists(dirname(__FILE__).'/metabox/custom.php')){
		require_once(dirname(__FILE__).'/metabox/custom.php');
	}


	if(file_exists(dirname(__FILE__).'/red/redux-core/framework.php')){
		require_once(dirname(__FILE__).'/red/redux-core/framework.php');
	}
	if(file_exists(dirname(__FILE__).'/red/sample/config.php')){
		require_once(dirname(__FILE__).'/red/sample/config.php');
	}

	require_once('custom-navwalker.php');

	//sidebar registration
	add_action('widgets_init','all_widgets');
	function all_widgets(){
		register_sidebar(array(
			'name'	=> 'Right Sidebar',
			'description'	=> 'keep your right sidebar here....',
			'id'             => "right-side"
		));
		register_sidebar(array(
			'name'	=> 'Left Sidebar',
			'description'	=> 'keep your right sidebar here....',
			'id'             => "left-side",
			'before_widget'		=> '<div class="taufik"></div>'
		));
	}



	//shortcodes registration
	
	add_shortcode('testimonials','testimonials_shortcode');

	function testimonials_shortcode(){


		ob_start();

		$testimonials=new WP_Query(array(
			'post_type'	=>	'basic-testimonials'
		));
		while($testimonials->have_posts()) : $testimonials->the_post(); ?>
			<h2><?php the_title(); ?></h2>
		<?php endwhile;

		return ob_get_clean();


	}


	//visual composer custom widgets
	
	vc_map(array(
		'name' 	=> 'amader testimonials',
		'base'	=>	'Testimonials',
		'icon'	=>	'https://cdn3.iconfinder.com/data/icons/business-strategy-soft-fill/60/Customer-Reviews-feedback-testimonials-128.png',
		'category'	=> 'Custom',
		'params'	=>	array(
			array(
				'param_name'	=>	'title',
				'type'	=>	'textfield',
				'heading'	=>	'Title',
				'value'	=>	'This is our title'
			),
			array(
				'param_name'	=>	'content',
				'type'	=>	'textarea_html',
				'heading'	=>	'Content',
				'value'	=>	'Lorem ipsum'
			)
		)
	));