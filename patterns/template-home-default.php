<?php
/**
 * Title: Default home template
 * Slug: mroya/template-home-default
 * Template Types: front-page, index, home
 * Viewport width: 1440
 * Inserter: no
 *
 * @package Mroya Studio
 * @since Mroya Studio 2.0.0
 */

?>
<!-- wp:template-part {"slug":"header","className":"header is-overlaid"} /-->

<!-- wp:group {"tagName":"main","metadata":{"name":"<?php echo esc_html_x( 'Main', 'Name for the main template part', 'mroya-studio' ); ?>"},"layout":{"type":"constrained"}} -->
<main class="wp-block-group">
	<!-- wp:pattern {"slug":"mroya/page-home-default"} /-->
</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","className":"footer is-overlaid"} /-->
