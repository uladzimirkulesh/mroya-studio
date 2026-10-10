<?php
/**
 * Title: Services section
 * Slug: mroya/section-services
 * Categories: mroya_sections
 * Description: Displays a list of services.
 * Keywords: section, services
 * Post Types: page, wp_template
 * Viewport width: 1440
 *
 * @package Mroya Studio
 * @since Mroya Studio 1.0.0
 */

?>
<!-- wp:group {"tagName":"section","align":"full","className":"section section--services","style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"},"margin":{"top":"0"},"blockGap":"0.75rem"}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull section section--services" style="margin-top:0;padding-top:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10)">
	<!-- wp:group {"tagName":"header","align":"wide","className":"section__header","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
	<header class="wp-block-group alignwide section__header">
		<!-- wp:heading {"className":"is-style-text-mono"} -->
		<h2 class="wp-block-heading is-style-text-mono"><?php echo esc_html_x( '[ Services ]', 'Services section title', 'mroya-studio' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"className":"is-style-text-mono"} -->
		<p class="is-style-text-mono"><?php echo esc_html_x( '# How can we help', 'Services section text', 'mroya-studio' ); ?></p>
		<!-- /wp:paragraph -->
	</header>
	<!-- /wp:group -->

	<!-- wp:group {"align":"wide","className":"section__content","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide section__content">
		<!-- wp:group {"align":"wide","className":"services-list","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
		<div class="wp-block-group alignwide services-list">
			<!-- wp:group {"className":"services-list__item","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|60"}}},"layout":{"type":"grid","columnCount":2,"minimumColumnWidth":null}} -->
			<div class="wp-block-group services-list__item" style="padding-bottom:var(--wp--preset--spacing--60)">
				<!-- wp:separator {"className":"is-style-wide item__separator","style":{"layout":{"columnSpan":2}}} -->
				<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide item__separator"/>
				<!-- /wp:separator -->

				<!-- wp:group {"className":"item__number","layout":{"type":"default"}} -->
				<div class="wp-block-group item__number">
					<!-- wp:paragraph {"className":"is-style-text-giant","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-4"}}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"contrast-4"} -->
					<p class="is-style-text-giant has-contrast-4-color has-text-color has-link-color" style="font-style:normal;font-weight:400"><?php echo esc_html_x( '01', 'Services section item text', 'mroya-studio' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"className":"item__block--text","layout":{"type":"default"}} -->
				<div class="wp-block-group item__block--text">
					<!-- wp:heading {"level":3,"className":"item__title","fontSize":"huge"} -->
					<h3 class="wp-block-heading item__title has-huge-font-size"><?php echo esc_html_x( 'Design', 'Services section item title', 'mroya-studio' ); ?></h3>
					<!-- /wp:heading -->

					<!-- wp:group {"layout":{"type":"constrained","justifyContent":"left","contentSize":"620px","wideSize":"100%"}} -->
					<div class="wp-block-group">
						<!-- wp:paragraph {"className":"item__description","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"contrast","fontSize":"medium"} -->
						<p class="item__description has-contrast-color has-text-color has-link-color has-medium-font-size" style="font-style:normal;font-weight:500"><?php echo esc_html_x( 'We design intuitive, engaging interfaces where usability meets aesthetics. Clean, functional, and seamless experiences that inspire confidence and delight in every interaction.', 'Services section item text', 'mroya-studio' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->

					<!-- wp:group {"className":"item__tags","style":{"spacing":{"blockGap":"1rem"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
					<div class="wp-block-group item__tags">
						<!-- wp:paragraph {"className":"is-style-text-mono","fontSize":"xx-small"} -->
						<p class="is-style-text-mono has-xx-small-font-size"><?php echo esc_html_x( '#Research', 'Services section item tags', 'mroya-studio' ); ?></p>
						<!-- /wp:paragraph -->

						<!-- wp:paragraph {"className":"is-style-text-mono","fontSize":"xx-small"} -->
						<p class="is-style-text-mono has-xx-small-font-size"><?php echo esc_html_x( '#Wireframing', 'Services section item tags', 'mroya-studio' ); ?></p>
						<!-- /wp:paragraph -->

						<!-- wp:paragraph {"className":"is-style-text-mono","fontSize":"xx-small"} -->
						<p class="is-style-text-mono has-xx-small-font-size"><?php echo esc_html_x( '#Design_System', 'Services section item tags', 'mroya-studio' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"services-list__item","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|60"}}},"layout":{"type":"grid","columnCount":2,"minimumColumnWidth":null}} -->
			<div class="wp-block-group services-list__item" style="padding-bottom:var(--wp--preset--spacing--60)">
				<!-- wp:separator {"className":"is-style-wide item__separator","style":{"layout":{"columnSpan":2}}} -->
				<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide item__separator"/>
				<!-- /wp:separator -->

				<!-- wp:group {"className":"item__number","layout":{"type":"default"}} -->
				<div class="wp-block-group item__number">
					<!-- wp:paragraph {"className":"is-style-text-giant","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-4"}}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"contrast-4"} -->
					<p class="is-style-text-giant has-contrast-4-color has-text-color has-link-color" style="font-style:normal;font-weight:400"><?php echo esc_html_x( '02', 'Services section item text', 'mroya-studio' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"className":"item__block--text","layout":{"type":"default"}} -->
				<div class="wp-block-group item__block--text">
					<!-- wp:heading {"level":3,"className":"item__title","fontSize":"huge"} -->
					<h3 class="wp-block-heading item__title has-huge-font-size"><?php echo esc_html_x( 'Development', 'Services section item title', 'mroya-studio' ); ?></h3>
					<!-- /wp:heading -->

					<!-- wp:group {"layout":{"type":"constrained","contentSize":"620px","wideSize":"100%","justifyContent":"left"}} -->
					<div class="wp-block-group">
						<!-- wp:paragraph {"className":"item__description","style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast","fontSize":"medium"} -->
						<p class="item__description has-contrast-color has-text-color has-link-color has-medium-font-size" style="font-style:normal;font-weight:500"><?php echo esc_html_x( 'We build fast, responsive, and reliable websites using modern technologies. With clean code, smart structure, and attention to detail, every element works in perfect harmony.', 'Services section item text', 'mroya-studio' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->

					<!-- wp:group {"className":"item__tags","style":{"spacing":{"blockGap":"1rem"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
					<div class="wp-block-group item__tags">
						<!-- wp:paragraph {"className":"is-style-text-mono","fontSize":"xx-small"} -->
						<p class="is-style-text-mono has-xx-small-font-size"><?php echo esc_html_x( '#WordPress', 'Services section item tags', 'mroya-studio' ); ?></p>
						<!-- /wp:paragraph -->

						<!-- wp:paragraph {"className":"is-style-text-mono","fontSize":"xx-small"} -->
						<p class="is-style-text-mono has-xx-small-font-size"><?php echo esc_html_x( '#Webflow', 'Services section item tags', 'mroya-studio' ); ?></p>
						<!-- /wp:paragraph -->

						<!-- wp:paragraph {"className":"is-style-text-mono","fontSize":"xx-small"} -->
						<p class="is-style-text-mono has-xx-small-font-size"><?php echo esc_html_x( '#Framer', 'Services section item tags', 'mroya-studio' ); ?></p>
						<!-- /wp:paragraph -->

						<!-- wp:paragraph {"className":"is-style-text-mono","fontSize":"xx-small"} -->
						<p class="is-style-text-mono has-xx-small-font-size"><?php echo esc_html_x( '#Web3', 'Services section item tags', 'mroya-studio' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"services-list__item","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|60"}}},"layout":{"type":"grid","columnCount":2,"minimumColumnWidth":null}} -->
			<div class="wp-block-group services-list__item" style="padding-bottom:var(--wp--preset--spacing--60)">
				<!-- wp:separator {"className":"is-style-wide item__separator","style":{"layout":{"columnSpan":2}}} -->
				<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide item__separator"/>
				<!-- /wp:separator -->

				<!-- wp:group {"className":"item__number","layout":{"type":"default"}} -->
				<div class="wp-block-group item__number">
					<!-- wp:paragraph {"className":"is-style-text-giant","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-4"}}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"contrast-4"} -->
					<p class="is-style-text-giant has-contrast-4-color has-text-color has-link-color" style="font-style:normal;font-weight:400"><?php echo esc_html_x( '03', 'Services section item text', 'mroya-studio' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"className":"item__block--text","layout":{"type":"default"}} -->
				<div class="wp-block-group item__block--text">
					<!-- wp:heading {"level":3,"className":"item__title","fontSize":"huge"} -->
					<h3 class="wp-block-heading item__title has-huge-font-size"><?php echo esc_html_x( 'The full package', 'Services section item title', 'mroya-studio' ); ?></h3>
					<!-- /wp:heading -->

					<!-- wp:group {"layout":{"type":"constrained","contentSize":"620px","wideSize":"100%","justifyContent":"left"}} -->
					<div class="wp-block-group">
						<!-- wp:paragraph {"className":"item__description","style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast","fontSize":"medium"} -->
						<p class="item__description has-contrast-color has-text-color has-link-color has-medium-font-size" style="font-style:normal;font-weight:500"><?php echo esc_html_x( 'Looking for an end-to-end solution? Our full package merges design and development into a seamless process, resulting in a website that’s fully tailored to your brand and audience.', 'Services section item text', 'mroya-studio' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->

					<!-- wp:group {"className":"item__tags","style":{"spacing":{"blockGap":"1rem"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
					<div class="wp-block-group item__tags">
						<!-- wp:paragraph {"className":"is-style-text-mono","fontSize":"xx-small"} -->
						<p class="is-style-text-mono has-xx-small-font-size"><?php echo esc_html_x( '#Landing_pages', 'Services section item tags', 'mroya-studio' ); ?></p>
						<!-- /wp:paragraph -->

						<!-- wp:paragraph {"className":"is-style-text-mono","fontSize":"xx-small"} -->
						<p class="is-style-text-mono has-xx-small-font-size"><?php echo esc_html_x( '#E-commerce', 'Services section item tags', 'mroya-studio' ); ?></p>
						<!-- /wp:paragraph -->

						<!-- wp:paragraph {"className":"is-style-text-mono","fontSize":"xx-small"} -->
						<p class="is-style-text-mono has-xx-small-font-size"><?php echo esc_html_x( '#Corporate', 'Services section item tags', 'mroya-studio' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
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
