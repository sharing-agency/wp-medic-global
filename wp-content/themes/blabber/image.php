<?php
/**
 * The template to display the attachment
 *
 * @package WordPress
 * @subpackage BLABBER
 * @since BLABBER 1.0
 */


get_header();

while ( have_posts() ) {
	the_post();

	get_template_part( apply_filters( 'blabber_filter_get_template_part', 'content', get_post_format() ), get_post_format() );

	// Parent post navigation.
	$blabber_posts_navigation = blabber_get_theme_option( 'posts_navigation' );
	if ( 'links' == $blabber_posts_navigation ) {
		?>
		<div class="nav-links-single<?php
			if ( ! blabber_is_off( blabber_get_theme_option( 'posts_navigation_fixed' ) ) ) {
				echo ' nav-links-fixed fixed';
			}
		?>">
		<?php
		the_post_navigation(
			array(
				'prev_text' => '<span class="nav-arrow"></span>'
					. '<span class="meta-nav" aria-hidden="true">' . esc_html__( 'Published in', 'blabber' ) . '</span> '
					. '<span class="screen-reader-text">' . esc_html__( 'Previous post', 'blabber' ) . '</span> '
					. '<h5 class="post-title">%title</h5>',
			)
		);
		?>
	</div>
	<?php
	}

	// If comments are open or we have at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) {
		comments_template();
	}
}

get_footer();
