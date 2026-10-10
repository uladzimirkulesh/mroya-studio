<?php
/**
 * Title: Team section
 * Slug: mroya/section-team
 * Categories: mroya_sections
 * Description: Displays team members.
 * Keywords: section, team
 * Post Types: page, wp_template
 * Viewport width: 1440
 *
 * @package Mroya Studio
 * @since Mroya Studio 1.0.0
 */

?>
<!-- wp:group {"tagName":"section","align":"full","className":"section section--team","style":{"spacing":{"padding":{"top":"2.25rem","bottom":"var:preset|spacing|30"},"margin":{"top":"0"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull section section--team" style="margin-top:0;padding-top:2.25rem;padding-bottom:var(--wp--preset--spacing--30)">
	<!-- wp:group {"tagName":"header","align":"wide","className":"section__header","style":{"spacing":{"blockGap":"1rem"}},"layout":{"type":"default"}} -->
	<header class="wp-block-group alignwide section__header">
		<!-- wp:heading {"className":"is-style-text-mono"} -->
		<h2 class="wp-block-heading is-style-text-mono"><?php echo esc_html_x( '[ Our Team ]', 'Team section title', 'mroya-studio' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:group {"layout":{"type":"constrained","contentSize":"640px","justifyContent":"left","wideSize":"100%"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"contrast","fontSize":"xx-large"} -->
			<p class="has-contrast-color has-text-color has-link-color has-xx-large-font-size" style="font-style:normal;font-weight:500"><?php echo esc_html_x( 'We’re a tight-knit crew of designers, developers, and strategists united by a passion for building things that matter.', 'Team section text', 'mroya-studio' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</header>
	<!-- /wp:group -->

	<!-- wp:group {"align":"wide","className":"section__content","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide section__content">
		<!-- wp:group {"align":"wide","className":"team__members","layout":{"type":"grid","columnCount":4,"minimumColumnWidth":null}} -->
		<div class="wp-block-group alignwide team__members">
			<!-- wp:group {"className":"team__member","style":{"spacing":{"blockGap":"0.75rem"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group team__member">
				<!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
				<figure class="wp-block-image size-full">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder.webp" alt="" style="aspect-ratio:3/4;object-fit:cover"/>
				</figure>
				<!-- /wp:image -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"2px"}},"layout":{"type":"default"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500","letterSpacing":"-0.01em"},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast"} -->
					<p class="has-contrast-color has-text-color has-link-color" style="font-style:normal;font-weight:500;letter-spacing:-0.01em"><?php echo esc_html_x( 'Jason Miller', 'Member name', 'mroya-studio' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"className":"is-style-text-mono","fontSize":"xx-small"} -->
					<p class="is-style-text-mono has-xx-small-font-size"><?php echo esc_html_x( 'Co-Founder', 'Member role', 'mroya-studio' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"team__member","style":{"spacing":{"blockGap":"0.75rem"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group team__member">
				<!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
				<figure class="wp-block-image size-full">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder.webp" alt="" style="aspect-ratio:3/4;object-fit:cover"/>
				</figure>
				<!-- /wp:image -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"2px"}},"layout":{"type":"default"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500","letterSpacing":"-0.01em"},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast"} -->
					<p class="has-contrast-color has-text-color has-link-color" style="font-style:normal;font-weight:500;letter-spacing:-0.01em"><?php echo esc_html_x( 'Emily Harris', 'Member name', 'mroya-studio' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"className":"is-style-text-mono","fontSize":"xx-small"} -->
					<p class="is-style-text-mono has-xx-small-font-size"><?php echo esc_html_x( 'Co-Founder', 'Member role', 'mroya-studio' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"team__member","style":{"spacing":{"blockGap":"0.75rem"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group team__member">
				<!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
				<figure class="wp-block-image size-full">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder.webp" alt="" style="aspect-ratio:3/4;object-fit:cover"/>
				</figure>
				<!-- /wp:image -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"2px"}},"layout":{"type":"default"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500","letterSpacing":"-0.01em"},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast"} -->
					<p class="has-contrast-color has-text-color has-link-color" style="font-style:normal;font-weight:500;letter-spacing:-0.01em"><?php echo esc_html_x( 'Tyler Brooks', 'Member name', 'mroya-studio' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"className":"is-style-text-mono","fontSize":"xx-small"} -->
					<p class="is-style-text-mono has-xx-small-font-size"><?php echo esc_html_x( 'Designer', 'Member role', 'mroya-studio' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"team__member","style":{"spacing":{"blockGap":"0.75rem"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group team__member">
				<!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
				<figure class="wp-block-image size-full">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder.webp" alt="" style="aspect-ratio:3/4;object-fit:cover"/>
				</figure>
				<!-- /wp:image -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"2px"}},"layout":{"type":"default"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500","letterSpacing":"-0.01em"},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast"} -->
					<p class="has-contrast-color has-text-color has-link-color" style="font-style:normal;font-weight:500;letter-spacing:-0.01em"><?php echo esc_html_x( 'Brandon Carter', 'Member name', 'mroya-studio' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"className":"is-style-text-mono","fontSize":"xx-small"} -->
					<p class="is-style-text-mono has-xx-small-font-size"><?php echo esc_html_x( 'Developer', 'Member role', 'mroya-studio' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"team__member","style":{"spacing":{"blockGap":"0.75rem"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group team__member">
				<!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
				<figure class="wp-block-image size-full">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder.webp" alt="" style="aspect-ratio:3/4;object-fit:cover"/>
				</figure>
				<!-- /wp:image -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"2px"}},"layout":{"type":"default"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500","letterSpacing":"-0.01em"},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast"} -->
					<p class="has-contrast-color has-text-color has-link-color" style="font-style:normal;font-weight:500;letter-spacing:-0.01em"><?php echo esc_html_x( 'Lauren Mitchell', 'Member name', 'mroya-studio' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"className":"is-style-text-mono","fontSize":"xx-small"} -->
					<p class="is-style-text-mono has-xx-small-font-size"><?php echo esc_html_x( 'Developer', 'Member role', 'mroya-studio' ); ?></p>
					<!-- /wp:paragraph -->
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
