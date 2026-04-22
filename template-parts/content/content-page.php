<?php
/**
 * Content template for pages.
 *
 * @package Gadgets_Mela
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header>

	<div class="entry-content">
		<?php
		the_content();
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'gadgets-mela' ),
				'after'  => '</div>',
			)
		);
		?>
	</div>
</article>
