<?php
/**
 * Front page template.
 *
 * @package Gadgets_Mela
 */

get_header();
?>
<div class="gm-container layout">
	<main id="primary" class="content-area">
		<header class="page-header">
			<h1><?php bloginfo( 'name' ); ?></h1>
			<p class="gm-meta"><?php bloginfo( 'description' ); ?></p>
		</header>

		<?php
		$gadgets_mela_featured = new WP_Query(
			array(
				'post_type'      => 'post',
				'posts_per_page' => 5,
				'ignore_sticky_posts' => true,
			)
		);

		if ( $gadgets_mela_featured->have_posts() ) :
			?>
			<section class="gm-post-list" aria-label="<?php esc_attr_e( 'Latest gadget stories', 'gadgets-mela' ); ?>">
				<?php
				while ( $gadgets_mela_featured->have_posts() ) :
					$gadgets_mela_featured->the_post();
					get_template_part( 'template-parts/content/content', 'excerpt' );
				endwhile;
				?>
			</section>
			<?php
			wp_reset_postdata();
		endif;
		?>
	</main>
</div>
<?php
get_footer();
