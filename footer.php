<?php
/**
 * The footer for the theme.
 *
 * @package Gadgets_Mela
 */
?>
<footer class="site-footer">
	<div class="gm-container site-info">
		<?php
		printf(
			/* translators: 1: current year, 2: site name */
			esc_html__( '© %1$s %2$s. All rights reserved.', 'gadgets-mela' ),
			esc_html( gmdate( 'Y' ) ),
			esc_html( get_bloginfo( 'name' ) )
		);
		?>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
