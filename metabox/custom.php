<?php

	add_action('cmb2_admin_init','custom_metaboxes');
	function custom_metaboxes(){
		$metabox=new_cmb2_box(array(
			'object_types'	=> array('post'),
			'title'			=> 'Additional Fields',
			'id'			=>	'additional'
		));

		$metabox->add_field(array(
			'name'			=>	'Subtitle',
			'id'			=>	'subtitle',
			'type'			=>	'text',
			'default'		=>	'this is subtitle',
			'desc'			=>	'this is just description'
		));

		$metabox->add_field(array(
			'name'			=>	'Sub Description',
			'id'			=>	'sbdes',
			'type'			=>	'WYSIWYG',
			'options'		=>	array(
					'wpautop'	=>	true,
					'textarea_rows'	=>	get_option('default_post_edit_rows',3)
			)
		));


		$arekta=new_cmb2_box(array(
			'id'	=> 'arekta',
			'object_types'	=>	array('basic-testimonials'),
			'title'		=> 'Additional Fields'
		));

		$arekta->add_field(array(
			'id'	=>	'designation',
			'type'	=>	'text',
			'name'	=>	'Designation'

		));
		$arekta->add_field(array(
			'id'	=>	'description',
			'type'	=>	'wysiwyg',
			'name'	=>	'monttobbo',
			'options'	=>	array(
				'textarea_rows'	=>	get_option('default_post_edit_rows',3)
			)

		));
	}