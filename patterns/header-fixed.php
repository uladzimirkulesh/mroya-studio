<?php
/**
 * Title: Fixed header
 * Slug: mroya-studio/header-fixed
 * Description: Fixed header section.
 * Categories: header
 * Template Types: header
 * Post Types: wp_template, wp_template_part
 * Viewport Width: 1440
 *
 * @package Mroya Studio
 * @since Mroya Studio 1.0.0
 */

?>
<!-- wp:group {"className":"header--default header--fixed","layout":{"type":"constrained"}} -->
<div class="wp-block-group header--default header--fixed">
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"0.75rem","bottom":"0.75rem"}}},"layout":{"type":"grid","columnCount":2,"minimumColumnWidth":null}} -->
	<div class="wp-block-group alignwide" style="padding-top:0.75rem;padding-bottom:0.75rem">
		<!-- wp:group {"className":"site-branding","style":{"spacing":{"blockGap":"1rem"},"layout":{"selfStretch":"fixed","flexSize":"50%"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group site-branding">
			<!-- wp:site-logo {"width":32,"shouldSyncIcon":true,"className":"is-style-rounded"} /-->
			<!-- wp:site-title {"level":0} /-->
		</div>
		<!-- /wp:group -->

		<!-- wp:navigation {"overlay":"navigation-overlay","overlayBackgroundColor":"contrast","overlayTextColor":"base","style":{"layout":{"selfStretch":"fixed","flexSize":"50%"},"css":"line-height: 3rem;"},"layout":{"type":"flex","justifyContent":"right","flexWrap":"nowrap"}} -->
			<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Home', 'mroya-studio' ); ?>","url":"#"} /-->
			<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Portfolio', 'mroya-studio' ); ?>","url":"#"} /-->
			<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Journal', 'mroya-studio' ); ?>","url":"#"} /-->
			<!-- wp:navigation-link {"label":"<?php esc_html_e( 'About', 'mroya-studio' ); ?>","url":"#"} /-->
			<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Contact', 'mroya-studio' ); ?>","url":"#","className":"has-arrow"} /-->
		<!-- /wp:navigation -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
