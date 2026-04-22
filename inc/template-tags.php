<?php
/**
 * Custom template tags for this theme.
 *
 * @package Gadgets_Mela
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'gadgets_mela_posted_on' ) ) {
	/**
	 * Prints HTML with meta information for date and author.
	 *
	 * @return void
	 */
	function gadgets_mela_posted_on() {
		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';

		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
		}

		$time_string = sprintf(
			$time_string,
			esc_attr( get_the_date( DATE_W3C ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_modified_date( DATE_W3C ) ),
			esc_html( get_the_modified_date() )
		);

		echo wp_kses_post(
			sprintf(
				/* translators: 1: date, 2: author */
				esc_html__( 'Posted on %1$s by %2$s', 'gadgets-mela' ),
				'<a href="' . esc_url( get_permalink() ) . '">' . $time_string . '</a>',
				'<a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a>'
			)
		);
	}
}
