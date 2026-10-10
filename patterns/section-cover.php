<?php
/**
 * Title: Cover section
 * Slug: mroya-studio/section-cover
 * Categories: mroya_sections
 * Description: Displays the cover image.
 * Keywords: section, cover
 * Post Types: page, wp_template
 * Viewport width: 1440
 *
 * @package Mroya Studio
 * @since Mroya Studio 1.0.0
 */

?>
<!-- wp:group {"tagName":"section","align":"full","className":"section section--cover is-style-section-1","style":{"spacing":{"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull section section--cover is-style-section-1" id="section-cover" style="margin-top:0">
	<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder.webp","dimRatio":0,"isUserOverlayColor":true,"minHeight":100,"minHeightUnit":"vh","sizeSlug":"full","align":"full","className":"has-global-padding","style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-cover alignfull has-global-padding" style="padding-top:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10);min-height:100vh">
		<img class="wp-block-cover__image-background size-full" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder.webp" data-object-fit="cover"/>

		<span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span>

		<div class="wp-block-cover__inner-container"></div>
	</div>
	<!-- /wp:cover -->
</section>
<!-- /wp:group -->
