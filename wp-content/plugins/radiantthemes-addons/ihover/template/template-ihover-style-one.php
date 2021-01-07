<?php
/**
 * Template ihover Style One.
 *
 * @package Radiantthemes
 */

$output .= '<div class="holder">';
$output .= '<div class="pic">';
$output .= wp_get_attachment_image( $shortcode['ihover_image'], 'full' );
$output .= '</div>';
$output .= '<div class="data">';
$output .= '<div class="table">';
$output .= '<div class="table-cell">';
$output .= '<h2 style="' . $ihover_title_font_inline_style . '">' . esc_attr( $shortcode['title'] ) . '</h2>';
$output .= '<p style="' . $ihover_content_font_inline_style . '">' . esc_attr( $shortcode['ihover_content'] ) . '</p>';
$output .= '</div>';
$output .= '</div>';
$output .= '</div>';
$output .= '</div>';
