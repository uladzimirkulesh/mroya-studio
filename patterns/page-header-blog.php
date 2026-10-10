<?php
/**
 * Title: Blog page header
 * Slug: mroya/page-header-blog
 * Description: Header section for blog pages.
 * Categories: mroya_page_headers
 * Template Types: page-header-blog
 * Post Types: wp_template, wp_template_part
 * Viewport Width: 1440
 *
 * @package Mroya Studio
 * @since Mroya Studio 1.0.0
 */

?>
<!-- wp:group {"align":"wide","className":"page-header--blog","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide page-header--blog">
	<!-- wp:heading {"level":1,"align":"wide","className":"is-style-text-giant page-header__title","style":{"css":"left: -0.35vw;"}} -->
	<h1 class="wp-block-heading alignwide is-style-text-giant page-header__title has-custom-css"><?php echo wp_kses_post( _x( 'Mind<br>Fragments', 'Blog page header title', 'mroya-studio' ) ); ?></h1>
	<!-- /wp:heading -->

	<!-- wp:group {"align":"wide","layout":{"type":"constrained","contentSize":"480px","wideSize":"100%","justifyContent":"left"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:paragraph {"className":"page-header__description","style":{"typography":{"fontStyle":"normal","fontWeight":"500","letterSpacing":"-0.01em"}}} -->
		<p class="page-header__description" style="font-style:normal;font-weight:500;letter-spacing:-0.01em"><?php echo esc_html_x( 'Bits of design, code, and everything in between.', 'Blog page header text', 'mroya-studio' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
