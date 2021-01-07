<?php
/**
 * The template to display blog archive
 *
 * @package WordPress
 * @subpackage BLABBER
 * @since BLABBER 1.0
 */

/*
Template Name: Blog archive
*/

/**
 * Make page with this template and put it into menu
 * to display posts as blog archive
 * You can setup output parameters (blog style, posts per page, parent category, etc.)
 * in the Theme Options section (under the page content)
 * You can build this page in the WordPress editor or any Page Builder to make custom page layout:
 * just insert %%CONTENT%% in the desired place of content
 */

if ( function_exists( 'blabber_elementor_is_preview' ) && blabber_elementor_is_preview() ) {

	// Redirect to the page
	get_template_part( apply_filters( 'blabber_filter_get_template_part', 'page' ) );

} else {

	// Store post with blog archive template
	if ( have_posts() ) {
		the_post();
		if ( isset( $GLOBALS['post'] ) && is_object( $GLOBALS['post'] ) ) {
			blabber_storage_set( 'blog_archive_template_post', $GLOBALS['post'] );
		}
	}

	// Prepare args for a new query
	$blabber_args        = array(
		'post_status' => current_user_can( 'read_private_pages' ) && current_user_can( 'read_private_posts' ) ? array( 'publish', 'private' ) : 'publish',
	);
	$blabber_args        = blabber_query_add_posts_and_cats( $blabber_args, '', blabber_get_theme_option( 'post_type' ), blabber_get_theme_option( 'parent_cat' ) );
	$blabber_page_number = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : ( get_query_var( 'page' ) ? get_query_var( 'page' ) : 1 );
	if ( $blabber_page_number > 1 ) {
		$blabber_args['paged']               = $blabber_page_number;
		$blabber_args['ignore_sticky_posts'] = true;
	}
	$blabber_ppp = blabber_get_theme_option( 'posts_per_page' );
	if ( 0 != (int) $blabber_ppp ) {
		$blabber_args['posts_per_page'] = (int) $blabber_ppp;
	}
	// Make a new main query
	$GLOBALS['wp_the_query']->query( $blabber_args );

	get_template_part( apply_filters( 'blabber_filter_get_template_part', blabber_blog_archive_get_template() ) );
}
