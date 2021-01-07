<?php
/**
 * Quick Setup Section in the Theme Panel
 *
 * @package WordPress
 * @subpackage BLABBER
 * @since BLABBER 1.0.48
 */


// Load required styles and scripts for admin mode
if ( ! function_exists( 'blabber_options_qsetup_add_scripts' ) ) {
	add_action("admin_enqueue_scripts", 'blabber_options_qsetup_add_scripts');
	function blabber_options_qsetup_add_scripts() {
		if ( ! BLABBER_THEME_FREE ) {
			$screen = function_exists( 'get_current_screen' ) ? get_current_screen() : false;
			if ( is_object( $screen ) && ! empty( $screen->id ) && false !== strpos($screen->id, 'page_trx_addons_theme_panel') ) {
				wp_enqueue_style( 'blabber-icons', blabber_get_file_url( 'css/font-icons/css/fontello.css' ), array(), null );
				wp_enqueue_script( 'jquery-ui-tabs', false, array( 'jquery', 'jquery-ui-core' ), null, true );
				wp_enqueue_script( 'jquery-ui-accordion', false, array( 'jquery', 'jquery-ui-core' ), null, true );
				wp_enqueue_script( 'blabber-options', blabber_get_file_url( 'theme-options/theme-options.js' ), array( 'jquery' ), null, true );
				wp_localize_script( 'blabber-options', 'blabber_dependencies', blabber_get_theme_dependencies() );
			}
		}
	}
}


// Add step to the 'Quick Setup'
if ( ! function_exists( 'blabber_options_qsetup_theme_panel_steps' ) ) {
	add_filter( 'trx_addons_filter_theme_panel_steps', 'blabber_options_qsetup_theme_panel_steps' );
	function blabber_options_qsetup_theme_panel_steps( $steps ) {
		if ( ! BLABBER_THEME_FREE ) {
			$steps = blabber_array_merge( $steps, array( 'qsetup' => esc_html__( 'Start customizing your theme.', 'blabber' ) ) );
		}
		return $steps;
	}
}


// Add tab link 'Quick Setup'
if ( ! function_exists( 'blabber_options_qsetup_theme_panel_tabs' ) ) {
	add_filter( 'trx_addons_filter_theme_panel_tabs', 'blabber_options_qsetup_theme_panel_tabs' );
	function blabber_options_qsetup_theme_panel_tabs( $tabs ) {
		if ( ! BLABBER_THEME_FREE ) {
			$tabs = blabber_array_merge( $tabs, array( 'qsetup' => esc_html__( 'Quick Setup', 'blabber' ) ) );
		}
		return $tabs;
	}
}

// Add accent colors to the 'Quick Setup' section in the Theme Panel
if ( ! function_exists( 'blabber_options_qsetup_add_accent_colors' ) ) {
	add_filter( 'blabber_filter_qsetup_options', 'blabber_options_qsetup_add_accent_colors' );
	function blabber_options_qsetup_add_accent_colors( $options ) {
		return blabber_array_merge(
			array(
				'colors_info'        => array(
					'title'    => esc_html__( 'Theme Colors', 'blabber' ),
					'desc'     => '',
					'qsetup'   => esc_html__( 'General', 'blabber' ),
					'type'     => 'info',
				),
				'colors_text_link'   => array(
					'title'    => esc_html__( 'Accent color 1', 'blabber' ),
					'desc'     => wp_kses_data( __( "Color of the links", 'blabber' ) ),
					'std'      => '',
					'val'      => blabber_get_scheme_color( 'text_link' ),
					'qsetup'   => esc_html__( 'General', 'blabber' ),
					'type'     => 'color',
				),
				'colors_text_hover'  => array(
					'title'    => esc_html__( 'Accent color 1 (hovered state)', 'blabber' ),
					'desc'     => wp_kses_data( __( "Color of the hovered state of the links", 'blabber' ) ),
					'std'      => '',
					'val'      => blabber_get_scheme_color( 'text_hover' ),
					'qsetup'   => esc_html__( 'General', 'blabber' ),
					'type'     => 'color',
				),
				'colors_text_link2'  => array(
					'title'    => esc_html__( 'Accent color 2', 'blabber' ),
					'desc'     => wp_kses_data( __( "Color of the accented areas", 'blabber' ) ),
					'std'      => '',
					'val'      => blabber_get_scheme_color( 'text_link2' ),
					'qsetup'   => esc_html__( 'General', 'blabber' ),
					'type'     => 'color',
				),
				'colors_text_hover2' => array(
					'title'    => esc_html__( 'Accent color 2 (hovered state)', 'blabber' ),
					'desc'     => wp_kses_data( __( "Color of the hovered state of the accented areas", 'blabber' ) ),
					'std'      => '',
					'val'      => blabber_get_scheme_color( 'text_hover2' ),
					'qsetup'   => esc_html__( 'General', 'blabber' ),
					'type'     => 'color',
				),
				'colors_text_link3'  => array(
					'title'    => esc_html__( 'Accent color 3', 'blabber' ),
					'desc'     => wp_kses_data( __( "Color of the another accented areas", 'blabber' ) ),
					'std'      => '',
					'val'      => blabber_get_scheme_color( 'text_link3' ),
					'qsetup'   => esc_html__( 'General', 'blabber' ),
					'type'     => 'color',
				),
				'colors_text_hover3' => array(
					'title'    => esc_html__( 'Accent color 3 (hovered state)', 'blabber' ),
					'desc'     => wp_kses_data( __( "Color of the hovered state of the another accented areas", 'blabber' ) ),
					'std'      => '',
					'val'      => blabber_get_scheme_color( 'text_hover3' ),
					'qsetup'   => esc_html__( 'General', 'blabber' ),
					'type'     => 'color',
				),
			),
			$options
		);
	}
}

// Display 'Quick Setup' section in the Theme Panel
if ( ! function_exists( 'blabber_options_qsetup_theme_panel_section' ) ) {
	add_action( 'trx_addons_action_theme_panel_section', 'blabber_options_qsetup_theme_panel_section', 10, 2);
	function blabber_options_qsetup_theme_panel_section( $tab_id, $theme_info ) {
		if ( 'qsetup' !== $tab_id ) return;
		?>
		<div id="trx_addons_theme_panel_section_<?php echo esc_attr($tab_id); ?>" class="trx_addons_tabs_section">

			<?php do_action('trx_addons_action_theme_panel_section_start', $tab_id, $theme_info); ?>
			
			<div class="trx_addons_theme_panel_qsetup">

				<?php do_action('trx_addons_action_theme_panel_before_section_title', $tab_id, $theme_info); ?>

				<h1 class="trx_addons_theme_panel_section_title">
					<?php esc_html_e( 'Quick Setup', 'blabber' ); ?>
				</h1>

				<?php do_action('trx_addons_action_theme_panel_after_section_title', $tab_id, $theme_info); ?>
				
				<div class="trx_addons_theme_panel_section_info">
					<p>
						<?php
						echo wp_kses_data( __( 'Here you can customize the basic settings of your website.', 'blabber' ) )
							. ' '
							. wp_kses_data( sprintf(
								__( 'For a detailed customization, go to %s.', 'blabber' ),
								'<a href="' . esc_url(admin_url() . 'customize.php') . '">' . esc_html__( 'Customizer', 'blabber' ) . '</a>'
								. ( BLABBER_THEME_FREE 
									? ''
									: ' ' . esc_html__( 'or', 'blabber' ) . ' ' . '<a href="' . esc_url( get_admin_url( null, 'admin.php?page=trx_addons_theme_panel' ) ) . '">' . esc_html__( 'Theme Options', 'blabber' ) . '</a>'
									)
								)
							);
						?>
					</p>
					<p><?php echo wp_kses_data( __( "<b>Note:</b> If you've imported the demo data, you may skip this step, since all the necessary settings have already been applied.", 'blabber' ) ); ?></p>
				</div>

				<?php
				do_action('trx_addons_action_theme_panel_before_qsetup', $tab_id, $theme_info);

				blabber_options_qsetup_show();

				do_action('trx_addons_action_theme_panel_after_qsetup', $tab_id, $theme_info);

				do_action('trx_addons_action_theme_panel_after_section_data', $tab_id, $theme_info);
				?>

			</div>

			<?php do_action('trx_addons_action_theme_panel_section_end', $tab_id, $theme_info); ?>

		</div>
		<?php
	}
}


// Display options
if ( ! function_exists( 'blabber_options_qsetup_show' ) ) {
	function blabber_options_qsetup_show() {
		$tabs_titles  = array();
		$tabs_content = array();
		$options      = apply_filters( 'blabber_filter_qsetup_options', blabber_storage_get( 'options' ) );
		// Show fields
		$cnt = 0;
		foreach ( $options as $k => $v ) {
			if ( empty( $v['qsetup'] ) ) {
				continue;
			}
			if ( is_bool( $v['qsetup'] ) ) {
				$v['qsetup'] = esc_html__( 'General', 'blabber' );
			}
			if ( ! isset( $tabs_titles[ $v['qsetup'] ] ) ) {
				$tabs_titles[ $v['qsetup'] ]  = $v['qsetup'];
				$tabs_content[ $v['qsetup'] ] = '';
			}
			if ( 'info' !== $v['type'] ) {
				$cnt++;
				if ( ! empty( $v['class'] ) ) {
					$v['class'] = str_replace( array( 'blabber_column-1_2', 'blabber_new_row' ), '', $v['class'] );
				}
				$v['class'] = ( ! empty( $v['class'] ) ? $v['class'] . ' ' : '' ) . 'blabber_column-1_2' . ( $cnt % 2 == 1 ? ' blabber_new_row' : '' );
			} else {
				$cnt = 0;
			}
			$tabs_content[ $v['qsetup'] ] .= blabber_options_show_field( $k, $v );
		}
		if ( count( $tabs_titles ) > 0 ) {
			?>
			<div class="blabber_options blabber_options_qsetup">
				<form action="<?php echo esc_url( get_admin_url( null, 'admin.php?page=trx_addons_theme_panel' ) ); ?>" class="trx_addons_theme_panel_section_form" name="trx_addons_theme_panel_qsetup_form" method="post">
					<input type="hidden" name="qsetup_options_nonce" value="<?php echo esc_attr( wp_create_nonce( admin_url() ) ); ?>" />
					<?php
					if ( count( $tabs_titles ) > 1 ) {
						?>
						<div id="blabber_options_tabs" class="blabber_tabs">
							<ul>
								<?php
								$cnt = 0;
								foreach ( $tabs_titles as $k => $v ) {
									$cnt++;
									?>
									<li><a href="#blabber_options_<?php echo esc_attr( $cnt ); ?>"><?php echo esc_html( $v ); ?></a></li>
									<?php
								}
								?>
							</ul>
							<?php
							$cnt = 0;
							foreach ( $tabs_content as $k => $v ) {
								$cnt++;
								?>
								<div id="blabber_options_<?php echo esc_attr( $cnt ); ?>" class="blabber_tabs_section blabber_options_section">
									<?php blabber_show_layout( $v ); ?>
								</div>
								<?php
							}
							?>
						</div>
						<?php
					} else {
						?>
						<div class="blabber_options_section">
							<?php blabber_show_layout( blabber_array_get_first( $tabs_content, false ) ); ?>
						</div>
						<?php
					}
					?>
					<div class="blabber_options_buttons trx_buttons">
						<input type="button" class="blabber_options_button_submit button button-action" value="<?php esc_html_e( 'Save Options', 'blabber' ); ?>">
					</div>
				</form>
			</div>
			<?php
		}
	}
}


// Save quick setup options
if ( ! function_exists( 'blabber_options_qsetup_save_options' ) ) {
	add_action( 'after_setup_theme', 'blabber_options_qsetup_save_options', 4 );
	function blabber_options_qsetup_save_options() {

		if ( ! isset( $_REQUEST['page'] ) || 'trx_addons_theme_panel' != $_REQUEST['page'] || '' == blabber_get_value_gp( 'qsetup_options_nonce' ) ) {
			return;
		}

		// verify nonce
		if ( ! wp_verify_nonce( blabber_get_value_gp( 'qsetup_options_nonce' ), admin_url() ) ) {
			trx_addons_set_admin_message( esc_html__( 'Bad security code! Options are not saved!', 'blabber' ), 'error', true );
			return;
		}

		// Check permissions
		if ( ! current_user_can( 'manage_options' ) ) {
			trx_addons_set_admin_message( esc_html__( 'Manage options is denied for the current user! Options are not saved!', 'blabber' ), 'error', true );
			return;
		}

		// Prepare colors for Theme Options
		if ( '' != blabber_get_value_gp( 'blabber_options_field_colors_text_link' ) ) {
			$scheme_storage = get_theme_mod( 'scheme_storage' );
			if ( empty( $scheme_storage ) ) {
				$scheme_storage = blabber_get_scheme_storage();
			}
			if ( ! empty( $scheme_storage ) ) {
				$schemes = blabber_unserialize( $scheme_storage );
				if ( is_array( $schemes ) ) {
					$color_scheme = get_theme_mod( blabber_storage_get_array( 'schemes_sorted', 0 ) );
					if ( empty( $color_scheme ) ) {
						$color_scheme = blabber_array_get_first( $schemes );
					}
					if ( ! empty( $schemes[ $color_scheme ] ) ) {
						$schemes_simple = blabber_storage_get( 'schemes_simple' );
						// Get posted data and calculate substitutions
						$need_save = false;
						foreach ( $schemes[ $color_scheme ][ 'colors' ] as $k => $v ) {
							$v2 = blabber_get_value_gp( "blabber_options_field_colors_{$k}" );
							if ( ! empty( $v2 ) && $v != $v2 ) {
								$schemes[ $color_scheme ][ 'colors' ][ $k ] = $v2;
								$need_save = true;
								// Сalculate substitutions
								if ( isset( $schemes_simple[ $k ] ) && is_array( $schemes_simple[ $k ] ) ) {
									foreach ( $schemes_simple[ $k ] as $color => $level ) {
										$new_v2 = $v2;
										// Make color_value darker or lighter
										if ( 1 != $level ) {
											$hsb = blabber_hex2hsb( $new_v2 );
											$hsb[ 'b' ] = min( 100, max( 0, $hsb[ 'b' ] * ( $hsb[ 'b' ] < 70 ? 2 - $level : $level ) ) );
											$new_v2 = blabber_hsb2hex( $hsb );
										}
										$schemes[ $color_scheme ][ 'colors' ][ $color ] = $new_v2;
									}
								}
							}
						}
						// Put new values to the POST
						if ( $need_save ) {
							$_POST[ 'blabber_options_field_scheme_storage' ] = serialize( $schemes );
						}
					}
				}
			}
		}

		// Save options
		blabber_options_update( null, 'blabber_options_field_' );

		// Return result
		trx_addons_set_admin_message( esc_html__( 'Options are saved', 'blabber' ), 'success', true );
		wp_redirect( get_admin_url( null, 'admin.php?page=trx_addons_theme_panel#trx_addons_theme_panel_section_qsetup' ) );
		exit();
	}
}
