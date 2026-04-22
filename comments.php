<?php
/**
 * Comments template.
 *
 * @package Gadgets_Mela
 */

if ( post_password_required() ) {
	return;
}
?>
<section id="comments" class="comments-area">
	<?php if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php
			printf(
				esc_html(
					_nx( 'One comment', '%1$s comments', get_comments_number(), 'comments title', 'gadgets-mela' )
				),
				number_format_i18n( get_comments_number() )
			);
			?>
		</h2>
		<?php the_comments_navigation(); ?>
		<ol class="comment-list">
			<?php wp_list_comments( array( 'style' => 'ol', 'short_ping' => true ) ); ?>
		</ol>
		<?php the_comments_navigation(); ?>
	<?php endif; ?>
	<?php comment_form(); ?>
</section>
