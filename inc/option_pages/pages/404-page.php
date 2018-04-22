<?php
/**
 * Created by PhpStorm.
 * User: pavel
 * Date: 13.01.2018
 * Time: 17:01
 */


$options_storage->addSubpageToPromxOptionPages(

	array(

		'page_title'	=> '404 page',
		'menu_title'	=> '404 page',
		'capability'	=> 'manage_options',
		'menu_slug'		=> 'th_404_page',
		'sections'		=> array(
			//			A new section
			array(
				'id'	=> '404_page_data',
				'title'	=> '404 page data',
				'fields'		=> array(

					array(
						'id'	=> '404_page_title',
						'title'	=> '404 page title',
						'type'	=> 'text',
						'value' => 'Looks like you are in a maze',
					),

					array(
						'id'	=> '404_page_text',
						'title'	=> '404 page text',
						'type'	=> 'textarea',
						'value' => 'Use the keyboard with control the bolt to <br/> maze exit to return to the home',
						'args' => array(
							'html' => true
						)
					),



				),
			),

		),

	)

);