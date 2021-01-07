<?php
/**
 * The template to display the copyright info in the footer
 *
 * @package WordPress
 * @subpackage BLABBER
 * @since BLABBER 1.0.10
 */

// Copyright area
?> 
<div class="footer_copyright_wrap
<?php
$blabber_copyright_scheme = blabber_get_theme_option( 'copyright_scheme' );
if ( ! empty( $blabber_copyright_scheme ) && ! blabber_is_inherit( $blabber_copyright_scheme  ) ) {
	echo ' scheme_' . esc_attr( $blabber_copyright_scheme );
}
?>
				">
	<div class="footer_copyright_inner">
		<div class="content_wrap">
			<div class="copyright_text">
			<?php
				$blabber_copyright = blabber_get_theme_option( 'copyright' );
			if ( ! empty( $blabber_copyright ) ) {
				// Replace {{Y}} or {Y} with the current year
				$blabber_copyright = str_replace( array( '{{Y}}', '{Y}' ), date( 'Y' ), $blabber_copyright );
				// Replace {{...}} and ((...)) on the <i>...</i> and <b>...</b>
				$blabber_copyright = blabber_prepare_macros( $blabber_copyright );
				// Display copyright
				echo wp_kses_post( nl2br( $blabber_copyright ) );
			}
			?>
			</div>
		</div>
	</div>
</div>
