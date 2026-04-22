<?php
/**
 * Main template file.
 *
 * @package Gadgets_Mela
 */

get_header();
?>
<div class="gm-container layout <?php echo is_active_sidebar( 'sidebar-1' ) ? 'has-sidebar' : ''; ?>">
	<main id="primary" class="content-area">
		<?php if ( have_posts() ) : ?>
			<div class="gm-post-list">
				<?php
				while ( have_posts() ) :
					the_post();
					get_template_part( 'template-parts/content/content', get_post_type() );
				endwhile;
				?>
			</div>
			<?php the_posts_pagination(); ?>
		<?php else : ?>
			<?php get_template_part( 'template-parts/content/content', 'none' ); ?>
		<?php endif; ?>
	</main>
	<?php get_sidebar(); ?>
</div>
<?php
get_footer();
