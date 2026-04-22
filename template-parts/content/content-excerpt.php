<?php
/**
 * Content template for excerpts.
 *
 * @package Gadgets_Mela
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'gm-card' ); ?>>
	<header class="entry-header">
		<?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' ); ?>
		<p class="gm-meta"><?php gadgets_mela_posted_on(); ?></p>
	</header>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div>
</article>
