<?php
/**
 * Register the required plugins.
 *
 * @see http://tgmpluginactivation.com/configuration/ for detailed documentation.
 *
 * @package    TGM-Plugin-Activation
 * @version    2.6.1 for child theme Mroya Studio
 * @author     Thomas Griffin, Gary Jones, Juliette Reinders Folmer
 * @copyright  Copyright (c) 2011, Thomas Griffin
 * @license    http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link       https://github.com/TGMPA/TGM-Plugin-Activation
 */

/**
 * Include the TGM_Plugin_Activation class.
 */
require_once get_stylesheet_directory() . '/inc/class-tgm-plugin-activation.php';

/**
 * Register the required plugins for this theme.
 */
function mroya_studio_register_required_plugins() {
	$plugins = array(
		array(
			'name'     => esc_html__( 'UK Portfolio', 'mroya-studio' ),
			'slug'     => 'uk-portfolio',
			'required' => false,
		),

		array(
			'name'     => esc_html__( 'Contact Form 7', 'mroya-studio' ),
			'slug'     => 'contact-form-7',
			'required' => false,
		),
	);

	tgmpa( $plugins );
}
add_action( 'tgmpa_register', 'mroya_studio_register_required_plugins' );
