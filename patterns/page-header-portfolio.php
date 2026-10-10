<?php
/**
 * Title: Portfolio page header
 * Slug: mroya-studio/page-header-portfolio
 * Description: Header section for portfolio pages.
 * Categories: mroya_page_headers
 * Template Types: page-header-portfolio
 * Post Types: wp_template, wp_template_part
 * Viewport Width: 1440
 *
 * @package Mroya Studio
 * @since Mroya Studio 1.0.0
 */

?>
<!-- wp:group {"align":"wide","className":"page-header--portfolio","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide page-header--portfolio">
	<!-- wp:heading {"level":1,"align":"wide","className":"is-style-text-giant page-header__title","style":{"css":"left: -0.35vw;"}} -->
	<h1 class="wp-block-heading alignwide is-style-text-giant page-header__title has-custom-css"><?php echo wp_kses_post( _x( 'Digital<br>Aesthetics', 'Portfolio page header title', 'mroya-studio' ) ); ?></h1>
	<!-- /wp:heading -->

	<!-- wp:group {"align":"wide","layout":{"type":"constrained","contentSize":"480px","wideSize":"100%","justifyContent":"left"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:paragraph {"className":"page-header__description","style":{"typography":{"fontStyle":"normal","fontWeight":"500","letterSpacing":"-0.01em"}}} -->
		<p class="page-header__description" style="font-style:normal;font-weight:500;letter-spacing:-0.01em"><?php echo esc_html_x( 'Where ideas evolve into tangible structures of meaning.', 'Portfolio page header text', 'mroya-studio' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
