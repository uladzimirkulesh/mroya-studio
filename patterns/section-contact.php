<?php
/**
 * Title: Contact section
 * Slug: mroya/section-contact
 * Categories: mroya_sections
 * Description: Displays image, contact text and button.
 * Keywords: section, contact
 * Post Types: page, wp_template
 * Viewport width: 1440
 *
 * @package Mroya Studio
 * @since Mroya Studio 1.0.0
 */

?>
<!-- wp:group {"tagName":"section","align":"full","className":"section section--contact","style":{"spacing":{"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull section section--contact" style="margin-top:0">
	<!-- wp:group {"align":"wide","className":"section__container","style":{"layout":{"selfStretch":"fill","flexSize":null},"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}},"dimensions":{"minHeight":"100vh"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"center"}} -->
	<div class="wp-block-group alignwide section__container" style="min-height:100vh;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
		<!-- wp:group {"className":"section__content","style":{"layout":{"columnSpan":1,"rowSpan":1}},"layout":{"type":"grid","columnCount":2,"minimumColumnWidth":null}} -->
		<div class="wp-block-group section__content">
			<!-- wp:group {"className":"section__block","style":{"spacing":{"blockGap":"1rem"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group section__block">
				<!-- wp:heading {"className":"is-style-text-giant text--primary"} -->
				<h2 class="wp-block-heading is-style-text-giant text--primary"><?php echo wp_kses_post( _x( 'Let’s<br>Connect', 'Contact section text', 'mroya-studio' ) ); ?></h2>
				<!-- /wp:heading -->

				<!-- wp:group {"layout":{"type":"constrained","justifyContent":"left","contentSize":"640px","wideSize":"100px"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"className":"text--secondary","style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast"} -->
					<p class="text--secondary has-contrast-color has-text-color has-link-color" style="font-style:normal;font-weight:500"><?php echo esc_html_x( 'Whether you’re starting something new or improving an existing website, we’d be happy to hear from you. Share a few details about your project, and we’ll get back to you with thoughtful feedback and next steps.', 'Contact section text', 'mroya-studio' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}},"layout":{"type":"flex"}} -->
				<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--20)">
					<!-- wp:button {"className":"is-style-more-4"} -->
					<div class="wp-block-button is-style-more-4">
						<a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/' ) ); ?>contact/"><?php echo esc_html_x( 'Send a Message', 'Contact section button text', 'mroya-studio' ); ?></a>
					</div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
