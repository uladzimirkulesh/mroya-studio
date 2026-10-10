<?php
/**
 * Title: Recent projects section
 * Slug: mroya-studio/section-recent-projects
 * Categories: mroya_sections
 * Description: Displays the latest projects from the portfolio.
 * Keywords: section, portfolio, projects, work
 * Post Types: page, wp_template
 * Viewport width: 1440
 *
 * @package Mroya Studio
 * @since Mroya Studio 1.0.0
 */

?>
<!-- wp:group {"tagName":"section","align":"full","className":"section section--recent-projects","style":{"spacing":{"margin":{"top":"0"},"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull section section--recent-projects" style="margin-top:0;padding-top:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:group {"align":"wide","className":"section__header","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide section__header">
		<!-- wp:heading {"className":"is-style-text-mono"} -->
		<h2 class="wp-block-heading is-style-text-mono"><?php echo esc_html_x( '[ Portfolio ]', 'Recent projects section title', 'mroya-studio' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"className":"is-style-text-mono"} -->
		<p class="is-style-text-mono"><?php echo esc_html_x( '# Recent Projects', 'Recent projects section text', 'mroya-studio' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:query {"query":{"perPage":3,"pages":0,"offset":0,"postType":"uk-project","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","layout":{"type":"constrained"}} -->
		<div class="wp-block-query alignwide">
			<!-- wp:post-template {"align":"wide","layout":{"type":"grid","columnCount":4}} -->
				<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","style":{"spacing":{"margin":{"bottom":"0.75rem"}}}} /-->

				<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
				<div class="wp-block-group">
					<!-- wp:post-title {"isLink":true,"style":{"typography":{"letterSpacing":"-0.01em"}},"fontSize":"normal"} /-->

					<!-- wp:post-date {"format":"Y","metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}}} /-->
				</div>
				<!-- /wp:group -->
			<!-- /wp:post-template -->

			<!-- wp:query-no-results -->
				<!-- wp:pattern {"slug":"mroya/hidden-no-results"} /-->
			<!-- /wp:query-no-results -->
		</div>
		<!-- /wp:query -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"wide","className":"section__footer","style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"layout":{"type":"grid","columnCount":2,"minimumColumnWidth":null}} -->
	<div class="wp-block-group alignwide section__footer" style="margin-top:var(--wp--preset--spacing--40)">
		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button {"className":"is-style-more-4"} -->
			<div class="wp-block-button is-style-more-4">
				<a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/' ) ); ?>portfolio/"><?php echo esc_html_x( 'See all Projects', 'Recent projects section button text', 'mroya-studio' ); ?></a>
			</div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
