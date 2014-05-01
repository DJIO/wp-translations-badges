<?php
/**
*
* fieldconfig for wp-translations-badges/Configuration
*
* @package Wp_Translations_Badges
* @author    Myles McNamara <myles@smyl.es>, fxbenard <fxb@wp-translations.org>
* @license GPL-2.0+
* @link http://wp-translations.org
* @copyright 2014 Myles McNamara, fxbenard
*/


$group = array(
	'label' => __('Configuration','wp-translations-badges'),
	'id' => '60981314',
	'master' => 'badge_type',
	'fields' => array(
		'badge_type'	=>	array(
			'label'		=> 	__('Badge Type:','wp-translations-badges'),
			'caption'	=>	__('Type of badge to display','wp-translations-badges'),
			'type'		=>	'dropdown',
			//* translators: Important don't translate translator, developer, donator, supporter */
			'default'	=> 	__( '*translator||I\'m Translating,developer||I\'m Developing,donator||I\'m a Donator,supporter||I\'m a Supporter', 'wp-translations-badges' ),
		),
		'alignment'	=>	array(
			'label'		=> 	__('Alignment:','wp-translations-badges'),
			'caption'	=>	__('Alignment','wp-translations-badges'),
			'type'		=>	'onoff',
			/* translators: Important only translate Uppercase Words */
			'default'	=> 	_x( '*none||None,left||Left,center||Center,right||Right', 'important only translate Uppercase Words', 'wp-translations-badges' ),
			'inline'	=> 	true,
		),
	),
	'styles'	=> array(
		'toggles.css',
	),
	'scripts'	=> array(
		'toggles.min.js',
	),
	'multiple'	=> false,
);

