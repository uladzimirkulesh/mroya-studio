<?php
/**
 * Title: Hero section
 * Slug: mroya/section-hero
 * Categories: mroya_sections
 * Description: Displays the hero info.
 * Keywords: section, hero
 * Post Types: page, wp_template
 * Viewport width: 1440
 *
 * @package Mroya Studio
 * @since Mroya Studio 1.0.0
 */

?>
<!-- wp:group {"tagName":"section","align":"full","className":"section section--hero","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull section section--hero">
	<!-- wp:group {"align":"wide","className":"section__container","style":{"dimensions":{"minHeight":"100vh"},"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|10"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"top"}} -->
	<div class="wp-block-group alignwide section__container" style="min-height:100vh;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--10)">
		<!-- wp:group {"align":"wide","className":"section__content","style":{"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"center","justifyContent":"stretch"}} -->
		<div class="wp-block-group alignwide section__content">
			<!-- wp:group {"align":"wide","layout":{"type":"grid","columnCount":2,"minimumColumnWidth":null}} -->
			<div class="wp-block-group alignwide">
				<!-- wp:group {"className":"section__block","style":{"spacing":{"blockGap":"1rem"}},"layout":{"type":"default"}} -->
				<div class="wp-block-group section__block">
					<!-- wp:heading {"level":1,"className":"is-style-text-giant"} -->
					<h1 class="wp-block-heading is-style-text-giant"><?php echo wp_kses_post( _x( 'Mroya<br>Creative<span class="dot">.</span><span class="dot">.</span><span class="dot">.</span>', 'Hero section title', 'mroya-studio' ) ); ?></h1>
					<!-- /wp:heading -->

					<!-- wp:group {"layout":{"type":"constrained","contentSize":"640px","wideSize":"100%","justifyContent":"left"}} -->
					<div class="wp-block-group">
						<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500","letterSpacing":"-0.01em"},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast","fontSize":"medium"} -->
						<p class="has-contrast-color has-text-color has-link-color has-medium-font-size" style="font-style:normal;font-weight:500;letter-spacing:-0.01em"><?php echo esc_html_x( 'We design and build modern websites with a strong focus on clarity and usability. Covering everything from visual design to frontend implementation, we turn ideas into digital experiences that feel intuitive and purposeful.', 'Hero section text', 'mroya-studio' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"tagName":"footer","align":"wide","className":"section__footer","layout":{"type":"grid","columnCount":2,"minimumColumnWidth":null}} -->
		<footer class="wp-block-group alignwide section__footer">
			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"className":"is-style-down"} -->
				<div class="wp-block-button is-style-down">
					<a class="wp-block-button__link wp-element-button" href="#section-cover"><?php echo esc_html_x( 'Scroll Down', 'Hero section button text', 'mroya-studio' ); ?></a>
				</div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->

			<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"className":"is-style-text-mono","style":{"layout":{"selfStretch":"fill","flexSize":null}}} -->
				<p class="is-style-text-mono"><?php echo esc_html_x( 'Based in the Czech Republic', 'Hero section text', 'mroya-studio' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"className":"local-time is-style-text-mono"} -->
				<p class="local-time is-style-text-mono" id="Europe/Prague"><?php echo esc_html_x( 'Local Time', 'Hero section text', 'mroya-studio' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</footer>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
