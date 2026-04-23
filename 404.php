<?php
/**
 * 404 template.
 *
 * @package Gadgets_Mela
 */

get_header();
?>
<div class="gm-container layout">
	<main id="primary" class="content-area">
		<section class="error-404 not-found">
			<header class="page-header">
				<h1 class="page-title"><?php esc_html_e( 'Oops! That page can’t be found.', 'gadgets-mela' ); ?></h1>
			</header>
			<div class="page-content">
				<p><?php esc_html_e( 'Try searching for the latest gadget reviews and stories.', 'gadgets-mela' ); ?></p>
				<?php get_search_form(); ?>
			</div>
		</section>
	</main>
</div>
<?php
get_footer();
