<?php
/**
 * Title: Mission section
 * Slug: mroya/section-mission
 * Categories: mroya_sections
 * Description: Displays mission heading and text.
 * Keywords: section, mission
 * Post Types: page, wp_template
 * Viewport width: 1440
 *
 * @package Mroya Studio
 * @since Mroya Studio 1.0.0
 */

?>
<!-- wp:group {"tagName":"section","align":"full","className":"section section--mission","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|60"},"margin":{"top":"0"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull section section--mission" style="margin-top:0;padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:group {"tagName":"header","align":"wide","className":"section__header","layout":{"type":"default"}} -->
	<header class="wp-block-group alignwide section__header">
		<!-- wp:heading {"className":"has-span-indent","fontSize":"huge"} -->
		<h2 class="wp-block-heading has-span-indent has-huge-font-size"><span class="indent"><?php echo esc_html_x( '[ Our mission ]', 'Mission section title','mroya-studio' ); ?></span><span class="text"><?php echo esc_html_x( 'We aim to give creators a flexible foundation that helps them present their work with clarity, confidence, and a distinct visual voice.', 'Mission section title', 'mroya-studio' ); ?></span></h2>
		<!-- /wp:heading -->
	</header>
	<!-- /wp:group -->

	<!-- wp:group {"align":"wide","className":"section__content","layout":{"type":"grid","columnCount":4,"minimumColumnWidth":null}} -->
	<div class="wp-block-group alignwide section__content">
		<!-- wp:list {"className":"is-style-list-mono list--first"} -->
		<ul class="wp-block-list is-style-list-mono list--first">
			<!-- wp:list-item -->
			<li><?php echo esc_html_x( 'Brand Strategy', 'Mission section text', 'mroya-studio' ); ?></li>
			<!-- /wp:list-item -->

			<!-- wp:list-item -->
			<li><?php echo esc_html_x( 'Visual Identity', 'Mission section text', 'mroya-studio' ); ?></li>
			<!-- /wp:list-item -->

			<!-- wp:list-item -->
			<li><?php echo esc_html_x( 'UI/UX Design', 'Mission section text', 'mroya-studio' ); ?></li>
			<!-- /wp:list-item -->

			<!-- wp:list-item -->
			<li><?php echo esc_html_x( 'Web Development', 'Mission section text', 'mroya-studio' ); ?></li>
			<!-- /wp:list-item -->

			<!-- wp:list-item -->
			<li><?php echo esc_html_x( 'Front-End Solutions', 'Mission section text', 'mroya-studio' ); ?></li>
			<!-- /wp:list-item -->

			<!-- wp:list-item -->
			<li><?php echo esc_html_x( 'Content Production', 'Mission section text', 'mroya-studio' ); ?></li>
			<!-- /wp:list-item -->
		</ul>
		<!-- /wp:list -->

		<!-- wp:list {"className":"is-style-list-mono list--second"} -->
		<ul class="wp-block-list is-style-list-mono list--second">
			<!-- wp:list-item -->
			<li><?php echo esc_html_x( 'Design Systems', 'Mission section text', 'mroya-studio' ); ?></li>
			<!-- /wp:list-item -->

			<!-- wp:list-item -->
			<li><?php echo esc_html_x( 'Logo Design', 'Mission section text', 'mroya-studio' ); ?></li>
			<!-- /wp:list-item -->

			<!-- wp:list-item -->
			<li><?php echo esc_html_x( 'Landing Pages', 'Mission section text', 'mroya-studio' ); ?></li>
			<!-- /wp:list-item -->

			<!-- wp:list-item -->
			<li><?php echo esc_html_x( 'Motion Graphics', 'Mission section text', 'mroya-studio' ); ?></li>
			<!-- /wp:list-item -->

			<!-- wp:list-item -->
			<li><?php echo esc_html_x( 'Art Direction', 'Mission section text', 'mroya-studio' ); ?></li>
			<!-- /wp:list-item -->

			<!-- wp:list-item -->
			<li><?php echo esc_html_x( 'Digital Projects', 'Mission section text', 'mroya-studio' ); ?></li>
			<!-- /wp:list-item -->
		</ul>
		<!-- /wp:list -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
