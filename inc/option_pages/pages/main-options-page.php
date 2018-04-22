<?php
/**
 * Created by PhpStorm.
 * User: pavel
 * Date: 22.04.2018
 * Time: 23:12
 */

$options_storage->addSubpageToPromxOptionPages(

	array(
		'page_title'	=> 'Thoughtscription General Options',
		'menu_title'	=> 'Thoughtscription General Options',
		'capability'	=> 'manage_options',
		'menu_slug'		=> 'thoughtscription_option_page',
		'icon_url'		=> 'dashicons-editor-code',
		'position'		=> 99,
		'sections'		=> array(
			//			A new section
			array(
				'id'	=> 'footer_data_id',
				'title'	=> 'Footer data',
				'fields'		=> array(
					//					A new field
					array(
						'id'	=> 'footer_copyright_text',
						'title'	=> 'Footer copyright text',
						'type'	=> 'textarea',
						'description' => 'Appears in the footer.',
						'value' => 'Value',
						'args' => array(
							'html' => true
						)
					),

					array(
						'id'	=> 'footer_facebook_link',
						'title'	=> 'Footer facebook link',
						'type'	=> 'text',
						//'description' => 'Appears in the footer.',
						'value' => 'https://uk-ua.facebook.com/',
					),

					array(
						'id'	=> 'footer_google_link',
						'title'	=> 'Footer google link',
						'type'	=> 'text',
						//'description' => 'Appears in the footer.',
						'value' => 'https://plus.google.com/people',
					),

					array(
						'id'	=> 'footer_linkediin_link',
						'title'	=> 'Footer linkediin link',
						'type'	=> 'text',
						//'description' => 'Appears in the footer.',
						'value' => 'https://www.linkedin.com/feed/',
					),

					array(
						'id'	=> 'footer_twitter_link',
						'title'	=> 'Footer twitter link',
						'type'	=> 'text',
						//'description' => 'Appears in the footer.',
						'value' => 'https://twitter.com/?lang=ru',
					),
				),
			),

			array(
				'id'	=> 'slider_data',
				'title'	=> 'Slider data ',
				'fields'		=> array(

					array(
						'id'	=> 'slider_default_image_id',
						'title'	=> 'Slider default image ID',
						'type'	=> 'number',
						'description' => 'Default image for post in slider',
						'value' => '',
					),


				),
			),

			array(
				'id'	=> 'recaptcha_data',
				'title'	=> 'Recaptcha data ',
				'fields'		=> array(

					array(
						'id'	=> 'recaptcha_key',
						'title'	=> 'Recaptcha key',
						'type'	=> 'text',
						'description' => '',
						'value' => '',
					),

					array(
						'id'	=> 'recaptcha_secret_key',
						'title'	=> 'Recaptcha secret key',
						'type'	=> 'text',
						'description' => '',
						'value' => '',
					),

				),
			),

			array(
				'id'	=> 'form_data',
				'title'	=> 'Form data ',
				'fields'		=> array(

					array(
						'id'	=> 'form_success_message',
						'title'	=> 'Form success message',
						'type'	=> 'textarea',
						'description' => 'Appears after success sending message',
						'value' => 'Thank you',
					),

					array(
						'id'	=> 'destination_email',
						'title'	=> 'Destination email',
						'type'	=> 'text',
						'description' => '',
						'value' => '',
					),

					array(
						'id'	=> 'form_policy_text',
						'title'	=> 'Form policy text',
						'type'	=> 'textarea',
						'description' => 'Appears in the form.',
						'value' => 'Value',
						'args' => array(
							'html' => true
						)
					),


				),
			),

			array(
				'id'	=> 'posts_template_data',
				'title'	=> 'Posts option ',
				'fields'		=> array(

					array(
						'id'	=> 'prev_article_text',
						'title'	=> 'Title for PREVIOUS ARTICLE link',
						'type'	=> 'text',
						//'description' => 'Default image for post in slider',
						'value' => 'PREVIOUS ARTICLE',
					),

					array(
						'id'	=> 'next_article_text',
						'title'	=> 'Title for NEXT ARTICLE link',
						'type'	=> 'text',
						//'description' => 'Default image for post in slider',
						'value' => 'NEXT ARTICLE',
					),

					array(
						'id'	=> 'slider_post_text',
						'title'	=> 'Title for slider',
						'type'	=> 'text',
						//'description' => 'Default image for post in slider',
						'value' => 'You will also be interested',
					),

					array(
						'id'	=> 'slider_posts_id',
						'title'	=> 'Posts id for slider',
						'type'	=> 'text',
						'description' => 'Comma separeted posts id',
						'value' => '',
					),
					array(
						'id'	=> 'slider_number_items',
						'title'	=> 'Number of posts to display',
						'type'	=> 'text',
						'description' => 'Max number of posts to display in post slider',
						'value' => '4',
					),


				),
			),

			array(
				'id'	=> 'general_button_data_id',
				'title'	=> 'General buttons title ',
				'fields'		=> array(
					//					A new field
					array(
						'id'	=> 'read_more_text',
						'title'	=> 'Read more text',
						'type'	=> 'text',
						'description' => 'Appears in the buttons of the post preview.',
						'value' => 'Read Full Post',
					),

					array(
						'id'	=> 'get_more_posts_text',
						'title'	=> 'Get more posts text',
						'type'	=> 'text',
						'description' => 'Appears in the Category page - to get more posts.',
						'value' => 'More Posts',
					),
				),
			),


		),
	)

);