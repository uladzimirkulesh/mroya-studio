<?php
/**
 * Mroya Studio functions and definitions
 *
 * When using a studio theme (see http://codex.wordpress.org/Theme_Development
 * and http://codex.wordpress.org/Child_Themes), you can override certain
 * functions (those wrapped in a function_exists() call) by defining them first
 * in your studio theme's functions.php file. The studio theme's functions.php
 * file is included before the parent theme's file, so the studio theme
 * functions would be used.
 *
 * @package Mroya Studio
 * @since Mroya Studio 1.0.0
 */

/**
 * Enqueue styles and scripts
 *
 * @since Mroya Studio 1.0.0
 *
 * @return void
 */
function mroya_studio_assets() {
	$suffix = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';
	$version = wp_get_theme()->get( 'Version' );

	// Studio theme stylesheet
	wp_enqueue_style(
		'mroya-studio-style',
		get_stylesheet_directory_uri() . '/style' . $suffix . '.css',
		array( 'mroya-style' ),
		$version
	);
	wp_style_add_data(
		'mroya-studio-style',
		'path',
		get_stylesheet_directory() . '/style' . $suffix . '.css'
	);

	// Studio theme scripts
	wp_enqueue_script(
		'mroya-studio-screen',
		get_stylesheet_directory_uri() . '/assets/js/screen' . $suffix . '.js',
		array( 'mroya-screen' ),
		$version,
		true
	);
	wp_script_add_data(
		'mroya-studio-screen',
		'path',
		get_stylesheet_directory() . '/assets/js/screen' . $suffix . '.js',
	);

	/**
	 * Enqueue styles and scripts only if the Mroya Premium
	 * plugin is installed and activated
	 */
	if ( wp_script_is( 'mroya-premium-screen', 'registered' ) ) {
		// Animations stylesheet
		wp_enqueue_style(
			'mroya-studio-animations',
			get_stylesheet_directory_uri() . '/assets/css/animations' . $suffix . '.css',
			array(
				'mroya-studio-style',
				'mroya-premium-screen'
			),
			$version
		);
		wp_style_add_data(
			'mroya-studio-animations',
			'path',
			get_stylesheet_directory() . '/assets/css/animations' . $suffix . '.css'
		);

		// Animations scripts
		wp_enqueue_script(
			'mroya-studio-animations',
			get_stylesheet_directory_uri() . '/assets/js/animations' . $suffix . '.js',
			array(
				'mroya-studio-screen',
				'mroya-premium-screen'
			),
			$version,
			true
		);
		wp_script_add_data(
			'mroya-studio-animations',
			'path',
			get_stylesheet_directory() . '/assets/js/animations' . $suffix . '.js'
		);
	}
}
add_action( 'wp_enqueue_scripts', 'mroya_studio_assets' );

/**
 * Enqueues editor styles
 *
 * @since Mroya Studio 1.0.0
 *
 * @return void
 */
function mroya_studio_editor_style() {
	$suffix = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';

	// Editor styles
	$editor_styles = array(
		get_parent_theme_file_uri( 'style' . $suffix . '.css' ),
		get_stylesheet_directory_uri() . '/style' . $suffix . '.css',
	);

	add_editor_style( $editor_styles );
}
add_action( 'after_setup_theme', 'mroya_studio_editor_style' );

/**
 * Registers block pattern categories
 *
 * @since Mroya Studio 1.0.0
 *
 * @return void
 */
function mroya_studio_register_block_pattern_categories() {
	register_block_pattern_category(
		'mroya_portfolio',
		array(
			'label'       => esc_html__( 'Portfolio', 'mroya-studio' ),
			'description' => esc_html__( 'A collection of portfolio patterns.', 'mroya-studio' ),
		)
	);
}
add_action( 'init', 'mroya_studio_register_block_pattern_categories', 9 );

/**
 * Filtering the query to display related projects
 *
 * @since Mroya Studio 1.0.0
 *
 * @return $query
 */
function mroya_studio_related_projects( $query, \WP_Block $block ) {
	$block_context_query = $block->context[ 'query' ];

	if ( isset( $block_context_query[ 'blockName' ] ) &&
		'related-projects' === $block_context_query[ 'blockName' ]
	) {
		$current_post_id = get_the_ID();
		$post_categories = wp_get_post_terms( $current_post_id, 'uk-project_category', array( 'fields' => 'ids' ) );

		if ( ! empty( $post_categories ) ) {
			$query[ 'tax_query' ] = array(
				array(
					'taxonomy' => 'uk-project_category',
					'field'    => 'term_id',
					'terms'    => $post_categories,
				),
			);
		}

		$query['post__not_in'] = array( $current_post_id );
	}

	return $query;
}
add_filter( 'query_loop_block_query_vars', 'mroya_studio_related_projects', 10, 2 );

// Load TGM Plugin Activation file.
require_once get_stylesheet_directory() . '/inc/theme-required-plugins.php';
