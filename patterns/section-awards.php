<?php
/**
 * Title: Awards section
 * Slug: mroya/section-awards
 * Categories: mroya_sections
 * Description: Displays awards list.
 * Keywords: section, awards
 * Post Types: page, wp_template
 * Viewport width: 1440
 *
 * @package Mroya Studio
 * @since Mroya Studio 1.0.0
 */

?>
<!-- wp:group {"tagName":"section","align":"full","className":"section section--awards is-style-section-1","style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem"},"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull section section--awards is-style-section-1" style="margin-top:0;padding-top:2rem;padding-bottom:2rem">
	<!-- wp:group {"align":"wide","className":"section__container","layout":{"type":"grid","columnCount":2,"minimumColumnWidth":null}} -->
	<div class="wp-block-group alignwide section__container">
		<!-- wp:group {"tagName":"header","className":"section__header","layout":{"type":"default"}} -->
		<header class="wp-block-group section__header">
			<!-- wp:heading {"fontSize":"xx-large"} -->
			<h2 class="wp-block-heading has-xx-large-font-size"><?php echo esc_html_x( 'Recognition', 'Awards section title', 'mroya-studio' ); ?></h2>
			<!-- /wp:heading -->
		</header>
		<!-- /wp:group -->

		<!-- wp:group {"className":"section__content","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
		<div class="wp-block-group section__content">
			<!-- wp:group {"className":"block--awards","style":{"typography":{"fontStyle":"normal","fontWeight":"500","letterSpacing":"-0.01em"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group block--awards" style="font-style:normal;font-weight:500;letter-spacing:-0.01em">
				<!-- wp:group {"className":"awards__item","layout":{"type":"grid","columnCount":2,"minimumColumnWidth":null}} -->
				<div class="wp-block-group awards__item">
					<!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-3"}}}},"textColor":"contrast-3","fontSize":"normal"} -->
					<h3 class="wp-block-heading has-contrast-3-color has-text-color has-link-color has-normal-font-size"><?php echo esc_html_x( 'Awwwards', 'Awards item title', 'mroya-studio' ); ?></h3>
					<!-- /wp:heading -->

					<!-- wp:group {"style":{"spacing":{"blockGap":"0.25rem"}},"layout":{"type":"default"}} -->
					<div class="wp-block-group">
						<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
						<div class="wp-block-group">
							<!-- wp:paragraph -->
							<p><?php echo esc_html_x( 'Site Of The Day', 'Award title', 'mroya-studio' ); ?></p>
							<!-- /wp:paragraph -->

							<!-- wp:paragraph -->
							<p><?php echo esc_html_x( 'x10', 'Awards count', 'mroya-studio' ); ?></p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->

						<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
						<div class="wp-block-group">
							<!-- wp:paragraph -->
							<p><?php echo esc_html_x( 'Developer Award', 'Award title', 'mroya-studio' ); ?></p>
							<!-- /wp:paragraph -->

							<!-- wp:paragraph -->
							<p><?php echo esc_html_x( 'x4', 'Awards count', 'mroya-studio' ); ?></p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->

						<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
						<div class="wp-block-group">
							<!-- wp:paragraph -->
							<p><?php echo esc_html_x( 'Honourable Mention', 'Award title', 'mroya-studio' ); ?></p>
							<!-- /wp:paragraph -->

							<!-- wp:paragraph -->
							<p><?php echo esc_html_x( 'x6', 'Awards count', 'mroya-studio' ); ?></p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->

				<!-- wp:separator {"className":"is-style-wide"} -->
				<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
				<!-- /wp:separator -->

				<!-- wp:group {"className":"awards__item","layout":{"type":"grid","columnCount":2,"minimumColumnWidth":null}} -->
				<div class="wp-block-group awards__item">
					<!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-3"}}}},"textColor":"contrast-3","fontSize":"normal"} -->
					<h3 class="wp-block-heading has-contrast-3-color has-text-color has-link-color has-normal-font-size"><?php echo esc_html_x( 'The FWA', 'Awards item title', 'mroya-studio' ); ?></h3>
					<!-- /wp:heading -->

					<!-- wp:group {"style":{"spacing":{"blockGap":"0.25rem"}},"layout":{"type":"default"}} -->
					<div class="wp-block-group">
						<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
						<div class="wp-block-group">
							<!-- wp:paragraph -->
							<p><?php echo esc_html_x( 'Site Of The Day', 'Award title', 'mroya-studio' ); ?></p>
							<!-- /wp:paragraph -->

							<!-- wp:paragraph -->
							<p><?php echo esc_html_x( 'x5', 'Awards count', 'mroya-studio' ); ?></p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->

						<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
						<div class="wp-block-group">
							<!-- wp:paragraph -->
							<p><?php echo esc_html_x( 'Honorable mention', 'Award title', 'mroya-studio' ); ?></p>
							<!-- /wp:paragraph -->

							<!-- wp:paragraph -->
							<p><?php echo esc_html_x( 'x3', 'Awards count', 'mroya-studio' ); ?></p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->

				<!-- wp:separator {"className":"is-style-wide"} -->
				<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
				<!-- /wp:separator -->

				<!-- wp:group {"className":"awards__item","layout":{"type":"grid","columnCount":2,"minimumColumnWidth":null}} -->
				<div class="wp-block-group awards__item">
					<!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-3"}}}},"textColor":"contrast-3","fontSize":"normal"} -->
					<h3 class="wp-block-heading has-contrast-3-color has-text-color has-link-color has-normal-font-size"><?php echo esc_html_x( 'CSSDA', 'Awards item title', 'mroya-studio' ); ?></h3>
					<!-- /wp:heading -->

					<!-- wp:group {"style":{"spacing":{"blockGap":"0.25rem"}},"layout":{"type":"default"}} -->
					<div class="wp-block-group">
						<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
						<div class="wp-block-group">
							<!-- wp:paragraph -->
							<p><?php echo esc_html_x( 'Website Of The Day', 'Award title', 'mroya-studio' ); ?></p>
							<!-- /wp:paragraph -->

							<!-- wp:paragraph -->
							<p><?php echo esc_html_x( 'x3', 'Awards count', 'mroya-studio' ); ?></p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->

						<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
						<div class="wp-block-group">
							<!-- wp:paragraph -->
							<p><?php echo esc_html_x( 'Innovation Design Award', 'Award title', 'mroya-studio' ); ?></p>
							<!-- /wp:paragraph -->

							<!-- wp:paragraph -->
							<p><?php echo esc_html_x( 'x3', 'Awards count', 'mroya-studio' ); ?></p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->

						<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
						<div class="wp-block-group">
							<!-- wp:paragraph -->
							<p><?php echo esc_html_x( 'UI Design Award', 'Award title', 'mroya-studio' ); ?></p>
							<!-- /wp:paragraph -->

							<!-- wp:paragraph -->
							<p><?php echo esc_html_x( 'x2', 'Awards count', 'mroya-studio' ); ?></p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->

						<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
						<div class="wp-block-group">
							<!-- wp:paragraph -->
							<p><?php echo esc_html_x( 'UX Design Award', 'Award title', 'mroya-studio' ); ?></p>
							<!-- /wp:paragraph -->

							<!-- wp:paragraph -->
							<p><?php echo esc_html_x( 'x2', 'Awards count', 'mroya-studio' ); ?></p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->

				<!-- wp:separator {"className":"is-style-wide"} -->
				<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
				<!-- /wp:separator -->

				<!-- wp:group {"className":"awards__item","layout":{"type":"grid","columnCount":2,"minimumColumnWidth":null}} -->
				<div class="wp-block-group awards__item">
					<!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-3"}}}},"textColor":"contrast-3","fontSize":"normal"} -->
					<h3 class="wp-block-heading has-contrast-3-color has-text-color has-link-color has-normal-font-size"><?php echo esc_html_x( 'The Webby Awards', 'Awards item title', 'mroya-studio' ); ?></h3>
					<!-- /wp:heading -->

					<!-- wp:group {"style":{"spacing":{"blockGap":"0.25rem"}},"layout":{"type":"default"}} -->
					<div class="wp-block-group">
						<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
						<div class="wp-block-group">
							<!-- wp:paragraph -->
							<p><?php echo esc_html_x( 'Nominee', 'Award title', 'mroya-studio' ); ?></p>
							<!-- /wp:paragraph -->

							<!-- wp:paragraph -->
							<p><?php echo esc_html_x( 'x1', 'Awards count', 'mroya-studio' ); ?></p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->

				<!-- wp:separator {"className":"is-style-wide"} -->
				<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
				<!-- /wp:separator -->

				<!-- wp:group {"className":"awards__item","layout":{"type":"grid","columnCount":2,"minimumColumnWidth":null}} -->
				<div class="wp-block-group awards__item">
					<!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-3"}}}},"textColor":"contrast-3","fontSize":"normal"} -->
					<h3 class="wp-block-heading has-contrast-3-color has-text-color has-link-color has-normal-font-size"><?php echo esc_html_x( 'Creative Circle', 'Awards item title', 'mroya-studio' ); ?></h3>
					<!-- /wp:heading -->

					<!-- wp:group {"style":{"spacing":{"blockGap":"0.25rem"}},"layout":{"type":"default"}} -->
					<div class="wp-block-group">
						<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
						<div class="wp-block-group">
							<!-- wp:paragraph -->
							<p><?php echo esc_html_x( 'Shortlists', 'Award title', 'mroya-studio' ); ?></p>
							<!-- /wp:paragraph -->

							<!-- wp:paragraph -->
							<p><?php echo esc_html_x( 'x4', 'Awards count', 'mroya-studio' ); ?></p>
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

		<!-- wp:group {"tagName":"footer","className":"section__footer","style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}},"layout":{"columnSpan":2}},"layout":{"type":"constrained","contentSize":"27rem","wideSize":"100%","justifyContent":"left"}} -->
		<footer class="wp-block-group section__footer" style="margin-top:var(--wp--preset--spacing--60)">
			<!-- wp:paragraph {"className":"is-style-text-mono section__text"} -->
			<p class="is-style-text-mono section__text"><?php echo esc_html_x( 'Our work has earned recognition and awards from leading industry experts, celebrating creativity, innovation, and meaningful impact across digital platforms.', 'Awards section text', 'mroya-studio' ); ?></p>
			<!-- /wp:paragraph -->
		</footer>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
