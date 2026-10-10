<?php
/**
 * Title: About section
 * Slug: mroya/section-about
 * Categories: mroya_sections
 * Description: Displays about heading, text and skills list.
 * Keywords: section, about
 * Post Types: page, wp_template
 * Viewport width: 1440
 *
 * @package Mroya Studio
 * @since Mroya Studio 1.0.0
 */

?>
<!-- wp:group {"tagName":"section","align":"full","className":"section section--about","style":{"spacing":{"margin":{"top":"0"},"padding":{"top":"2rem","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull section section--about" style="margin-top:0;padding-top:2rem;padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:group {"align":"wide","className":"section__container","layout":{"type":"grid","columnCount":2,"minimumColumnWidth":null}} -->
	<div class="wp-block-group alignwide section__container">
		<!-- wp:group {"tagName":"header","className":"section__header","layout":{"type":"default"}} -->
		<header class="wp-block-group section__header">
			<!-- wp:heading {"className":"is-style-text-mono"} -->
			<h2 class="wp-block-heading is-style-text-mono"><?php echo esc_html_x( '[ Our Journey ]', 'About section title', 'mroya-studio' ); ?></h2>
			<!-- /wp:heading -->
		</header>
		<!-- /wp:group -->

		<!-- wp:group {"className":"section__content","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group section__content">
			<!-- wp:paragraph {"className":"section__text","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"contrast","fontSize":"x-large"} -->
			<p class="section__text has-contrast-color has-text-color has-link-color has-x-large-font-size" style="font-style:normal;font-weight:500"><?php echo esc_html_x( 'It started with a simple idea to create digital experiences that feel both human and timeless. Over time, our work evolved through exploration, curiosity, and attention to detail, blending design, motion, and technology into one cohesive language. Each project has been a step forward, shaping our perspective and refining the way we bring ideas to life.', 'About section text', 'mroya-studio' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:group {"className":"block--skills","style":{"spacing":{"blockGap":"0.75rem"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group block--skills">
				<!-- wp:heading {"level":3,"className":"is-style-text-mono"} -->
				<h3 class="wp-block-heading is-style-text-mono"><?php echo esc_html_x( 'Our Super Powers', 'Skills block title', 'mroya-studio' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:group {"className":"skills-list","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"blockGap":"0"}},"textColor":"contrast","fontSize":"large","layout":{"type":"default"}} -->
				<div class="wp-block-group skills-list has-contrast-color has-text-color has-link-color has-large-font-size" style="font-style:normal;font-weight:500">
					<!-- wp:separator {"className":"is-style-wide skills-list__separator"} -->
					<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide skills-list__separator"/>
					<!-- /wp:separator -->

					<!-- wp:group {"className":"skills-list__item","style":{"spacing":{"padding":{"top":"0.75rem","bottom":"0.75rem"},"margin":{"top":"0"}}},"layout":{"type":"default"}} -->
					<div class="wp-block-group skills-list__item" style="margin-top:0;padding-top:0.75rem;padding-bottom:0.75rem">
						<!-- wp:paragraph -->
						<p><?php echo esc_html_x( 'Prototyping and User Research', 'Skills block item title', 'mroya-studio' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->

					<!-- wp:separator {"className":"is-style-wide skills-list__separator"} -->
					<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide skills-list__separator"/>
					<!-- /wp:separator -->

					<!-- wp:group {"className":"skills-list__item","style":{"spacing":{"padding":{"top":"0.75rem","bottom":"0.75rem"},"margin":{"top":"0"}}},"layout":{"type":"default"}} -->
					<div class="wp-block-group skills-list__item" style="margin-top:0;padding-top:0.75rem;padding-bottom:0.75rem">
						<!-- wp:paragraph -->
						<p><?php echo esc_html_x( 'Product and Visual Design', 'Skills block item title', 'mroya-studio' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->

					<!-- wp:separator {"className":"is-style-wide skills-list__separator"} -->
					<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide skills-list__separator"/>
					<!-- /wp:separator -->

					<!-- wp:group {"className":"skills-list__item","style":{"spacing":{"padding":{"top":"0.75rem","bottom":"0.75rem"},"margin":{"top":"0"}}},"layout":{"type":"default"}} -->
					<div class="wp-block-group skills-list__item" style="margin-top:0;padding-top:0.75rem;padding-bottom:0.75rem">
						<!-- wp:paragraph -->
						<p><?php echo esc_html_x( 'Creative Direction', 'Skills block item title', 'mroya-studio' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->

					<!-- wp:separator {"className":"is-style-wide skills-list__separator"} -->
					<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide skills-list__separator"/>
					<!-- /wp:separator -->

					<!-- wp:group {"className":"skills-list__item","style":{"spacing":{"padding":{"top":"0.75rem","bottom":"0.75rem"},"margin":{"top":"0"}}},"layout":{"type":"default"}} -->
					<div class="wp-block-group skills-list__item" style="margin-top:0;padding-top:0.75rem;padding-bottom:0.75rem">
						<!-- wp:paragraph -->
						<p><?php echo esc_html_x( 'Brand Identity', 'Skills block item title', 'mroya-studio' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->

					<!-- wp:separator {"className":"is-style-wide skills-list__separator"} -->
					<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide skills-list__separator"/>
					<!-- /wp:separator -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
