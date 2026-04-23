<?php
/**
 * Default content template.
 *
 * @package Gadgets_Mela
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'gm-card' ); ?>>
	<?php if ( has_post_thumbnail() ) : ?>
		<a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
			<?php the_post_thumbnail( 'large' ); ?>
		</a>
	<?php endif; ?>

	<header class="entry-header">
		<?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
		<p class="gm-meta"><?php gadgets_mela_posted_on(); ?></p>
	</header>

	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div>
</article>
