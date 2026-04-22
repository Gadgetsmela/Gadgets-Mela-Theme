<?php
/**
 * Template part for no content.
 *
 * @package Gadgets_Mela
 */
?>
<section class="no-results not-found gm-card">
	<header class="page-header">
		<h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'gadgets-mela' ); ?></h1>
	</header>
	<div class="page-content">
		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
			<p><?php esc_html_e( 'Ready to publish your first post? Start writing now.', 'gadgets-mela' ); ?></p>
		<?php elseif ( is_search() ) : ?>
			<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again.', 'gadgets-mela' ); ?></p>
			<?php get_search_form(); ?>
		<?php else : ?>
			<p><?php esc_html_e( 'It seems we cannot find what you are looking for.', 'gadgets-mela' ); ?></p>
			<?php get_search_form(); ?>
		<?php endif; ?>
	</div>
</section>
