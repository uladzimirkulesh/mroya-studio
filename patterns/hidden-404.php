<?php
/**
 * Title: Hidden 404
 * Slug: mroya/hidden-404
 * Inserter: no
 *
 * @package Mroya Studio
 * @since Mroya Studio 1.0.0
 */

?>
<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide">
	<!-- wp:heading {"textAlign":"center","level":1,"className":"is-style-text-giant"} -->
	<h1 class="wp-block-heading has-text-align-center is-style-text-giant"><?php echo esc_html_x( 'Error 404', 'Error code for a webpage that is not found.', 'mroya-studio' ); ?></h1>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"style":{"typography":{"textAlign":"center","fontStyle":"normal","fontWeight":"500","letterSpacing":"-0.01em"}}} -->
	<p class="has-text-align-center" style="font-style:normal;font-weight:500;letter-spacing:-0.01em"><?php echo esc_html_x( 'The page you are looking for cannot be found.', 'Message to convey that a webpage could not be found', 'mroya-studio' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons">
		<!-- wp:button -->
		<div class="wp-block-button">
			<a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php esc_html_e( 'Back to Home', 'mroya-studio' ); ?></a>
		</div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
