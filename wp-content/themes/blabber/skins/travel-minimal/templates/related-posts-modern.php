<?php
/**
 * The template 'Style 1' to displaying related posts
 *
 * @package WordPress
 * @subpackage BLABBER
 * @since BLABBER 1.0
 */

$blabber_link        = get_permalink();
$blabber_post_format = get_post_format();
$blabber_post_format = empty( $blabber_post_format ) ? 'standard' : str_replace( 'post-format-', '', $blabber_post_format );
?><div id="post-<?php the_ID(); ?>" <?php post_class( 'related_item post_format_' . esc_attr( $blabber_post_format ) ); ?> data-post-id="<?php the_ID(); ?>">
	<?php
	$rating = blabber_show_post_meta(
		 array(
			'components'  => 'rating',
			'seo'        => false,
			'echo' 		 => false,
			'class' 	 => 'rating'
		)
	);
	$meta = blabber_show_post_meta(
		 array(
			'components' => 'categories,date',
			'seo'        => false,
			'echo' 		 => false
		)
	);
	blabber_show_post_featured(
		array(
			'thumb_only' => true,
			'hover' => 'simple',
			'thumb_size'    => apply_filters( 'blabber_filter_related_thumb_size', blabber_get_thumb_size( (int) blabber_get_theme_option( 'related_posts' ) == 1 ? 'huge' : 'extra' ) ),
			'post_info'     => $rating .'<div class="post_header entry-header">'
									. '<h6 class="post_title entry-title"><a href="' . esc_url( $blabber_link ) . '">' . wp_kses_data( get_the_title() ) . '</a></h6>'
									. ( in_array( get_post_type(), array( 'post', 'attachment' ) )
											? $meta
											: '' )
								. '</div>',
		)
	);
	?>
</div>