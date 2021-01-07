<?php
/**
 * The Gallery template to display posts
 *
 * Used for index/archive/search.
 *
 * @package WordPress
 * @subpackage BLABBER
 * @since BLABBER 1.0
 */

$blabber_template_args = get_query_var( 'blabber_template_args' );
if ( is_array( $blabber_template_args ) ) {
	$blabber_columns    = empty( $blabber_template_args['columns'] ) ? 2 : max( 1, $blabber_template_args['columns'] );
	$blabber_blog_style = array( $blabber_template_args['type'], $blabber_columns );
} else {
	$blabber_blog_style = explode( '_', blabber_get_theme_option( 'blog_style' ) );
	$blabber_columns    = empty( $blabber_blog_style[1] ) ? 2 : max( 1, $blabber_blog_style[1] );
}
$blabber_post_format = get_post_format();
$blabber_post_format = empty( $blabber_post_format ) ? 'standard' : str_replace( 'post-format-', '', $blabber_post_format );
$blabber_image       = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'full' );

?><div class="
<?php
if ( ! empty( $blabber_template_args['slider'] ) ) {
	echo ' slider-slide swiper-slide';
} else {
    echo ( blabber_is_blog_style_use_masonry( $blabber_blog_style[0] ) ? 'masonry_item masonry_item' : 'column' ) . '-1_' . esc_attr( $blabber_columns );
}
?>
"><article id="post-<?php the_ID(); ?>" 
	<?php
	post_class(
		'post_item post_format_' . esc_attr( $blabber_post_format )
		. ' post_layout_portfolio'
		. ' post_layout_portfolio_' . esc_attr( $blabber_columns )
		. ' post_layout_gallery'
		. ' post_layout_gallery_' . esc_attr( $blabber_columns )
	);
	blabber_add_blog_animation( $blabber_template_args );
	?>
	data-size="
		<?php
		if ( ! empty( $blabber_image[1] ) && ! empty( $blabber_image[2] ) ) {
			echo intval( $blabber_image[1] ) . 'x' . intval( $blabber_image[2] );}
		?>
	"
	data-src="
		<?php
		if ( ! empty( $blabber_image[0] ) ) {
			echo esc_url( $blabber_image[0] );}
		?>
	"
>
<?php

	// Sticky label
if ( is_sticky() && ! is_paged() ) {
	?>
		<span class="post_label label_sticky"></span>
		<?php
}

	// Featured image
	$blabber_image_hover = 'icon';  // !empty($blabber_template_args['hover']) && !blabber_is_inherit($blabber_template_args['hover']) ? $blabber_template_args['hover'] : blabber_get_theme_option('image_hover');
if ( in_array( $blabber_image_hover, array( 'icons', 'zoom' ) ) ) {
	$blabber_image_hover = 'dots';
}
$blabber_components = blabber_array_get_keys_by_value( blabber_get_theme_option( 'meta_parts' ) );
blabber_show_post_featured(
	array(
		'hover'         => $blabber_image_hover,
		'no_links'      => ! empty( $blabber_template_args['no_links'] ),
		'thumb_size'    => blabber_get_thumb_size( strpos( blabber_get_theme_option( 'body_style' ), 'full' ) !== false || $blabber_columns < 3 ? 'masonry-big' : 'masonry' ),
		'thumb_only'    => true,
		'show_no_image' => true,
		'post_info'     => '<div class="post_details">'
						. '<h2 class="post_title">'
							. ( empty( $blabber_template_args['no_links'] )
								? '<a href="' . esc_url( get_permalink() ) . '">' . esc_html( get_the_title() ) . '</a>'
								: esc_html( get_the_title() )
								)
						. '</h2>'
						. '<div class="post_description">'
							. ( ! empty( $blabber_components )
								? blabber_show_post_meta(
									apply_filters(
										'blabber_filter_post_meta_args', array(
											'components' => $blabber_components,
											'seo'      => false,
											'echo'     => false,
										), $blabber_blog_style[0], $blabber_columns
									)
								)
								: ''
								)
							. ( empty( $blabber_template_args['hide_excerpt'] )
								? '<div class="post_description_content">' . get_the_excerpt() . '</div>'
								: ''
								)
							. ( empty( $blabber_template_args['no_links'] )
								? '<a href="' . esc_url( get_permalink() ) . '" class="theme_button post_readmore"><span class="post_readmore_label">' . esc_html__( 'Learn more', 'blabber' ) . '</span></a>'
								: ''
								)
						. '</div>'
					. '</div>',
	)
);
?>
</article></div><?php
// Need opening PHP-tag above, because <article> is a inline-block element (used as column)!
