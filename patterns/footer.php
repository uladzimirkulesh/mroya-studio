<?php
/**
 * Title: Default footer
 * Slug: mroya/footer
 * Description: A default footer section.
 * Categories: footer
 * Template Types: footer
 * Post Types: wp_template, wp_template_part
 * Viewport Width: 1440
 *
 * @package Mroya Studio
 * @since Mroya Studio 1.0.0
 */

?>
<!-- wp:group {"className":"footer--default","layout":{"type":"constrained"}} -->
<div class="wp-block-group footer--default">
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}},"css":"row-gap: 0.25rem;"},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide has-custom-css" style="padding-top:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10)">
		<!-- wp:paragraph {"className":"footer__copyrights","style":{"typography":{"fontStyle":"normal","fontWeight":"500","letterSpacing":"-0.01em"}},"fontSize":"small"} -->
		<p class="footer__copyrights has-small-font-size" style="font-style:normal;font-weight:500;letter-spacing:-0.01em"><?php
		printf(
			/* translators: Copyright text. */
			esc_html__( '© 2026, %s', 'mroya-studio' ),
			'<a href="' . esc_url( __( 'https://mroya.eu/portfolio/mroya/', 'mroya-studio' ) ) . '" target="_blank">Mroya Theme</a>' )
		?></p>
		<!-- /wp:paragraph -->

		<!-- wp:navigation {"overlayMenu":"never","style":{"spacing":{"blockGap":"1.25rem"},"typography":{"letterSpacing":"-0.01em"}},"fontSize":"small","layout":{"type":"flex","orientation":"horizontal"}} -->
			<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Behance', 'mroya-studio' ); ?>","url":"#"} /-->
			<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Dribble', 'mroya-studio' ); ?>","url":"#"} /-->
			<!-- wp:navigation-link {"label":"<?php esc_html_e( 'E-mail', 'mroya-studio' ); ?>","url":"#"} /-->
		<!-- /wp:navigation -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
