<?php
/**
 * Team Style Addon
 *
 * @package Radiantthemes
 */

if ( class_exists( 'WPBakeryShortCode' ) && ! class_exists( 'Radiantthemes_Style_Team' ) ) {
	/**
	 * Class definition.
	 */
	class Radiantthemes_Style_Team extends WPBakeryShortCode {
		/**
		 * [__construct description]
		 */
		public function __construct() {
			$theme_options = get_option( 'vio_theme_option' );
			$font_names    = array();

			$font_names['Select Custom Font'] = '';
			$font_names['Barlow']             = 'Barlow';
			$font_names['Great Vibes']        = 'Great Vibes';
			$font_names['Lato']               = 'Lato';
			$font_names['Montserrat']         = 'Montserrat';
			$font_names['Playfair Display']   = 'Playfair Display';
			$font_names['Poppins']            = 'Poppins';
			$font_names['Roboto']             = 'Roboto';
			$font_names['Rubik']              = 'Rubik';
			$font_names['Taviraj']            = 'Taviraj';
			$font_names['Titillium Web']      = 'Titillium Web';
			$font_names['Yesteryear']         = 'Yesteryear';

			for ( $i = 1; $i <= 50; $i++ ) {
				if ( ! empty( $theme_options[ 'webfontName' . $i ] ) ) {
					$font_names[] = $theme_options[ 'webfontName' . $i ];
				}
			}
			$final_font_array = array_combine( $font_names, $font_names );

			vc_map(
				array(
					'name'        => esc_html__( 'Team', 'radiantthemes-addons' ),
					'base'        => 'rt_team_style',
					'description' => esc_html__( 'Add Team with multiple styles.', 'radiantthemes-addons' ),
					'icon'        => plugins_url( 'radiantthemes-addons/assets/icons/Team-Element-Icon.png' ),
					'class'       => 'wpb_rt_vc_extension_team_style',
					'category'    => esc_html__( 'Radiant Elements', 'radiantthemes-addons' ),
					'controls'    => 'full',
					'params'      => array(
						array(
							'type'       => 'dropdown',
							'heading'    => esc_html__( 'Team Style', 'radiantthemes-addons' ),
							'param_name' => 'style_variation',
							'value'      => array(
								esc_html__( 'Style One (Classic) - Box Shadow On Hover', 'radiantthemes-addons' )           => 'one',
								esc_html__( 'Style Two (B/W 3D Boxed) - On Hover Display', 'radiantthemes-addons' )         => 'two',
								esc_html__( 'Style Three (Classic Left) - On Hover Full Overlay', 'radiantthemes-addons' )  => 'three',
								esc_html__( 'Style Four (Classic Circle)', 'radiantthemes-addons' )                         => 'four',
								esc_html__( 'Style Five (B&W With Boxed Details with Social icon )', 'radiantthemes-addons' )              => 'five',
							),
							'std'        => 'one',
						),
						array(
							'type'        => 'colorpicker',
							'heading'     => esc_html__( 'Color', 'radiantthemes-addons' ),
							'param_name'  => 'team_color',
							'description' => esc_html__( 'Set your Team Color Scheme. (If not selected, it will take default color)', 'radiantthemes-addons' ),
						),
						array(
							'type'        => 'textfield',
							'heading'     => esc_html__( 'Team Category', 'radiantthemes-addons' ),
							'description' => esc_html__( 'Display posts from a specific category (enter portfolio category slug name). Use "all" to dislay all posts. ', 'radiantthemes-addons' ),
							'param_name'  => 'team_category',
							'value'       => 'all',
						),
						array(
							'type'       => 'dropdown',
							'heading'    => esc_html__( 'Carousel', 'radiantthemes-addons' ),
							'param_name' => 'team_allow_carousel',
							'value'      => array(
								esc_html__( 'No', 'radiantthemes-addons' ) => 'false',
								esc_html__( 'Yes', 'radiantthemes-addons' ) => 'true',
							),
							'std'        => 'true',
						),
						array(
							'type'       => 'dropdown',
							'heading'    => esc_html__( 'Allow Navigation?', 'radiantthemes-addons' ),
							'param_name' => 'allow_nav',
							'value'      => array(
								esc_html__( 'No', 'radiantthemes-addons' ) => 'false',
								esc_html__( 'Yes', 'radiantthemes-addons' ) => 'true',
							),
							'std'        => 'true',
							'dependency' => array(
								'element' => 'team_allow_carousel',
								'value'   => 'true',
							),
						),
						array(
							'type'       => 'dropdown',
							'heading'    => esc_html__( 'Navigation Style', 'radiantthemes-addons' ),
							'param_name' => 'navigation_style',
							'value'      => array(
								esc_html__( 'Style One', 'radiantthemes-addons' ) => 'one',
								esc_html__( 'Style Two', 'radiantthemes-addons' ) => 'two',
							),
							'dependency' => array(
								'element' => 'allow_nav',
								'value'   => 'true',
							),
							'std'        => 'one',
						),
						array(
							'type'       => 'dropdown',
							'heading'    => esc_html__( 'Allow Dots for Navigation?', 'radiantthemes-addons' ),
							'param_name' => 'allow_dots',
							'value'      => array(
								esc_html__( 'No', 'radiantthemes-addons' ) => 'false',
								esc_html__( 'Yes', 'radiantthemes-addons' ) => 'true',
							),
							'std'        => 'true',
							'dependency' => array(
								'element' => 'team_allow_carousel',
								'value'   => 'true',
							),
						),
						array(
							'type'       => 'dropdown',
							'heading'    => esc_html__( 'Navigation Dot Style', 'radiantthemes-addons' ),
							'param_name' => 'navigation_dot_style',
							'value'      => array(
								esc_html__( 'Style One', 'radiantthemes-addons' ) => 'one',
								esc_html__( 'Style Two', 'radiantthemes-addons' ) => 'two',
							),
							'dependency' => array(
								'element' => 'allow_dots',
								'value'   => 'true',
							),
							'std'        => 'two',
						),

						array(
							'type'       => 'dropdown',
							'heading'    => esc_html__( 'Allow Loop', 'radiantthemes-addons' ),
							'param_name' => 'allow_loop',
							'value'      => array(
								esc_html__( 'No', 'radiantthemes-addons' ) => 'false',
								esc_html__( 'Yes', 'radiantthemes-addons' ) => 'true',
							),
							'std'        => 'true',
							'dependency' => array(
								'element' => 'team_allow_carousel',
								'value'   => 'true',
							),
						),
						array(
							'type'       => 'dropdown',
							'heading'    => esc_html__( 'Allow Autoplay?', 'radiantthemes-addons' ),
							'param_name' => 'allow_autoplay',
							'value'      => array(
								esc_html__( 'No', 'radiantthemes-addons' ) => 'false',
								esc_html__( 'Yes', 'radiantthemes-addons' ) => 'true',
							),
							'std'        => 'true',
							'dependency' => array(
								'element' => 'team_allow_carousel',
								'value'   => 'true',
							),
						),

						array(
							'type'       => 'textfield',
							'heading'    => esc_html__( 'Autoplay Timeout (in milliseconds)', 'radiantthemes-addons' ),
							'param_name' => 'autoplay_timeout',
							'value'      => 6000,
							'dependency' => array(
								'element' => 'allow_autoplay',
								'value'   => 'true',
							),
						),
						array(
							'type'       => 'dropdown',
							'heading'    => esc_html__( 'Order', 'radiantthemes-addons' ),
							'param_name' => 'order',
							'value'      => array(
								esc_html__( 'Ascending', 'radiantthemes-addons' )  => 'ASC',
								esc_html__( 'Descending', 'radiantthemes-addons' ) => 'DESC',
							),
							'std'        => 'DESC',
						),
						array(
							'type'       => 'dropdown',
							'heading'    => esc_html__( 'Order By', 'radiantthemes-addons' ),
							'param_name' => 'order_by',
							'value'      => array(
								esc_html__( 'Date', 'radiantthemes-addons' )          => 'date',
								esc_html__( 'Title', 'radiantthemes-addons' )         => 'title',
								esc_html__( 'ID', 'radiantthemes-addons' )            => 'ID',
								esc_html__( 'Random', 'radiantthemes-addons' )        => 'rand',
								esc_html__( 'Last Modified', 'radiantthemes-addons' ) => 'modified',
							),
							'std'        => 'date',
						),
						array(
							'type'        => 'textfield',
							'heading'     => esc_html__( 'Count', 'radiantthemes-addons' ),
							'param_name'  => 'max_posts',
							'description' => esc_html__( 'Number of posts to show ( -1 for all posts )', 'radiantthemes-addons' ),
							'value'       => '-1',
						),
						array(
							'type'        => 'textfield',
							'heading'     => esc_html__( 'Number of Posts on Desktop', 'radiantthemes-addons' ),
							'param_name'  => 'posts_in_desktop',
							'description' => esc_html__( 'Posts on Desktop', 'radiantthemes-addons' ),
							'value'       => '3',
							'dependency'  => array(
								'element' => 'team_allow_carousel',
								'value'   => 'true',
							),
						),
						array(
							'type'        => 'textfield',
							'heading'     => esc_html__( 'Number of Posts on Tab', 'radiantthemes-addons' ),
							'param_name'  => 'posts_in_tab',
							'description' => esc_html__( 'Posts on Tab', 'radiantthemes-addons' ),
							'value'       => '2',
							'dependency'  => array(
								'element' => 'team_allow_carousel',
								'value'   => 'true',
							),
						),
						array(
							'type'        => 'textfield',
							'heading'     => esc_html__( 'Number of Posts on Mobile', 'radiantthemes-addons' ),
							'param_name'  => 'posts_in_mobile',
							'description' => esc_html__( 'Posts on Mobile', 'radiantthemes-addons' ),
							'value'       => '1',
							'dependency'  => array(
								'element' => 'team_allow_carousel',
								'value'   => 'true',
							),
						),
						array(
							'type'        => 'textfield',
							'heading'     => esc_html__( 'Number of Row Items', 'radiantthemes-addons' ),
							'param_name'  => 'team_no_row_items',
							'description' => esc_html__( 'Select number of items you want to see in a row', 'radiantthemes-addons' ),
							'std'         => '2',
							'dependency'  => array(
								'element' => 'team_allow_carousel',
								'value'   => 'false',
							),
						),
						array(
							'type'       => 'dropdown',
							'heading'    => esc_html__( 'Enable Link?', 'radiantthemes-addons' ),
							'param_name' => 'team_enable_link',
							'value'      => array(
								esc_html__( 'Yes', 'radiantthemes-addons' ) => 'yes',
								esc_html__( 'No', 'radiantthemes-addons' )  => 'no',
							),
							'std'        => 'no',
						),
						array(
							'type'       => 'checkbox',
							'heading'    => esc_html__( 'Add Animation?', 'radiantthemes-addons' ),
							'param_name' => 'add_animation',
						),
						array(
							'type'             => 'dropdown',
							'heading'          => esc_html__( 'Animation Name', 'radiantthemes-addons' ),
							'edit_field_class' => 'vc_col-xs-3 vc_column',
							'param_name'       => 'rt_animation',
							'description'      => sprintf( wp_kses_post( 'Choose your animation name. Powered By:  <a href="%s" target="_blank">Animate css</a>).', 'radiantthemes-addons' ), 'https://daneden.github.io/animate.css' ),
							'value'            => array(
								esc_html__( 'Attention Seekers', 'radiantthemes-addons' )    => 'attention_seekers',
								esc_html__( 'Bouncing Entrances', 'radiantthemes-addons' )   => 'bouncing_entrances',
								esc_html__( 'Bouncing Exits', 'radiantthemes-addons' )       => 'bouncing_exits',
								esc_html__( 'Fading Entrances', 'radiantthemes-addons' )     => 'fading_entrances',
								esc_html__( 'Fading Exits', 'radiantthemes-addons' )         => 'fading_exits',
								esc_html__( 'Flippers', 'radiantthemes-addons' )             => 'flippers',
								esc_html__( 'Lightspeed', 'radiantthemes-addons' )           => 'lightspeed',
								esc_html__( 'Rotating Entrances', 'radiantthemes-addons' )   => 'rotating_entrances',
								esc_html__( 'Rotating Exits', 'radiantthemes-addons' )      => 'rotating_exits',
								esc_html__( 'Sliding Entrances', 'radiantthemes-addons' )    => 'sliding_entrances',
								esc_html__( 'Sliding Exits', 'radiantthemes-addons' )        => 'sliding_exits',
								esc_html__( 'Zoom Entrances', 'radiantthemes-addons' )       => 'zoom_entrances',
								esc_html__( 'Zoom Exits', 'radiantthemes-addons' )           => 'zoom_exits',
								esc_html__( 'Specials', 'radiantthemes-addons' )             => 'specials',
							),
							'std'              => 'attention_seekers',
							'dependency'       => array(
								'element' => 'add_animation',
								'value'   => 'true',
							),

						),
						array(
							'type'             => 'dropdown',
							'heading'          => esc_html__( 'Animation Style', 'radiantthemes-addons' ),
							'param_name'       => 'attention_seekers',
							'edit_field_class' => 'vc_col-xs-3 vc_column',
							'description'      => esc_html__( 'Choose your animation style', 'radiantthemes-addons' ),
							'value'            => array(
								esc_html__( 'Bounce', 'radiantthemes-addons' )     => 'bounce',
								esc_html__( 'Flash', 'radiantthemes-addons' )      => 'flash',
								esc_html__( 'Pulse', 'radiantthemes-addons' )      => 'pulse',
								esc_html__( 'rubberBand', 'radiantthemes-addons' ) => 'rubberBand',
								esc_html__( 'shake', 'radiantthemes-addons' )      => 'shake',
								esc_html__( 'swing', 'radiantthemes-addons' )      => 'swing',
								esc_html__( 'tada', 'radiantthemes-addons' )       => 'tada',
								esc_html__( 'wobble', 'radiantthemes-addons' )     => 'wobble',
								esc_html__( 'jello', 'radiantthemes-addons' )      => 'jello',
							),
							'std'              => 'bounce',
							'dependency'       => array(
								'element' => 'rt_animation',
								'value'   => 'attention_seekers',
							),
						),
						array(
							'type'             => 'dropdown',
							'heading'          => esc_html__( 'Animation Style', 'radiantthemes-addons' ),
							'param_name'       => 'bouncing_entrances',
							'edit_field_class' => 'vc_col-xs-3 vc_column',
							'description'      => esc_html__( 'Choose your animation style', 'radiantthemes-addons' ),
							'value'            => array(
								esc_html__( 'BounceIn', 'radiantthemes-addons' )      => 'bounceIn',
								esc_html__( 'BounceInDown', 'radiantthemes-addons' )  => 'bounceInDown',
								esc_html__( 'BounceInLeft', 'radiantthemes-addons' )  => 'bounceInLeft',
								esc_html__( 'BounceInRight', 'radiantthemes-addons' ) => 'bounceInRight',
								esc_html__( 'BounceInUp', 'radiantthemes-addons' )    => 'bounceInUp',

							),
							'std'              => 'bounceIn',
							'dependency'       => array(
								'element' => 'rt_animation',
								'value'   => 'bouncing_entrances',
							),
						),
						array(
							'type'             => 'dropdown',
							'heading'          => esc_html__( 'Animation Style', 'radiantthemes-addons' ),
							'param_name'       => 'bouncing_exits',
							'edit_field_class' => 'vc_col-xs-3 vc_column',
							'description'      => esc_html__( 'Choose your animation style', 'radiantthemes-addons' ),
							'value'            => array(
								esc_html__( 'bounceOut', 'radiantthemes-addons' )      => 'bounceOut',
								esc_html__( 'bounceOutDown', 'radiantthemes-addons' )  => 'bounceOutDown',
								esc_html__( 'bounceOutLeft', 'radiantthemes-addons' )  => 'bounceOutLeft',
								esc_html__( 'bounceOutRight', 'radiantthemes-addons' ) => 'bounceOutRight',
								esc_html__( 'bounceOutUp', 'radiantthemes-addons' )    => 'bounceOutUp',

							),
							'std'              => 'bounceOut',
							'dependency'       => array(
								'element' => 'rt_animation',
								'value'   => 'bouncing_exits',
							),
						),
						array(
							'type'             => 'dropdown',
							'heading'          => esc_html__( 'Animation Style', 'radiantthemes-addons' ),
							'param_name'       => 'fading_entrances',
							'edit_field_class' => 'vc_col-xs-3 vc_column',
							'description'      => esc_html__( 'Choose your animation style', 'radiantthemes-addons' ),
							'value'            => array(
								esc_html__( 'fadeIn', 'radiantthemes-addons' )         => 'fadeIn',
								esc_html__( 'fadeInDown', 'radiantthemes-addons' )     => 'fadeInDown',
								esc_html__( 'fadeInDownBig', 'radiantthemes-addons' )  => 'fadeInDownBig',
								esc_html__( 'fadeInLeft', 'radiantthemes-addons' )     => 'fadeInLeft',
								esc_html__( 'fadeInLeftBig', 'radiantthemes-addons' )  => 'fadeInLeftBig',
								esc_html__( 'fadeInRight', 'radiantthemes-addons' )    => 'fadeInRight',
								esc_html__( 'fadeInRightBig', 'radiantthemes-addons' ) => 'fadeInRightBig',
								esc_html__( 'fadeInUp', 'radiantthemes-addons' )       => 'fadeInUp',
								esc_html__( 'fadeInUpBig', 'radiantthemes-addons' )    => 'fadeInUpBig',

							),
							'std'              => 'fadeIn',
							'dependency'       => array(
								'element' => 'rt_animation',
								'value'   => 'fading_entrances',
							),
						),
						array(
							'type'             => 'dropdown',
							'heading'          => esc_html__( 'Animation Style', 'radiantthemes-addons' ),
							'param_name'       => 'fading_exits',
							'edit_field_class' => 'vc_col-xs-3 vc_column',
							'description'      => esc_html__( 'Choose your animation style', 'radiantthemes-addons' ),
							'value'            => array(
								esc_html__( 'fadeOut', 'radiantthemes-addons' )         => 'fadeOut',
								esc_html__( 'fadeOutDown', 'radiantthemes-addons' )     => 'fadeOutDown',
								esc_html__( 'fadeOutDownBig', 'radiantthemes-addons' )  => 'fadeOutDownBig',
								esc_html__( 'fadeOutLeft', 'radiantthemes-addons' )     => 'fadeOutLeft',
								esc_html__( 'fadeOutLeftBig', 'radiantthemes-addons' )  => 'fadeOutLeftBig',
								esc_html__( 'fadeOutRight', 'radiantthemes-addons' )    => 'fadeOutRight',
								esc_html__( 'fadeOutRightBig', 'radiantthemes-addons' ) => 'fadeOutRightBig',
								esc_html__( 'fadeOutUp', 'radiantthemes-addons' )       => 'fadeOutUp',
								esc_html__( 'fadeOutUpBig', 'radiantthemes-addons' )    => 'fadeOutUpBig',

							),
							'std'              => 'fadeOut',
							'dependency'       => array(
								'element' => 'rt_animation',
								'value'   => 'fading_exits',
							),
						),
						array(
							'type'             => 'dropdown',
							'heading'          => esc_html__( 'Animation Style', 'radiantthemes-addons' ),
							'param_name'       => 'flippers',
							'edit_field_class' => 'vc_col-xs-3 vc_column',
							'description'      => esc_html__( 'Choose your animation style', 'radiantthemes-addons' ),
							'value'            => array(
								esc_html__( 'flip', 'radiantthemes-addons' )     => 'flip',
								esc_html__( 'flipInX', 'radiantthemes-addons' )  => 'flipInX',
								esc_html__( 'flipInY', 'radiantthemes-addons' )  => 'flipInY',
								esc_html__( 'flipOutX', 'radiantthemes-addons' ) => 'flipOutX',
								esc_html__( 'flipOutY', 'radiantthemes-addons' ) => 'flipOutY',

							),
							'std'              => 'flip',
							'dependency'       => array(
								'element' => 'rt_animation',
								'value'   => 'flippers',
							),
						),
						array(
							'type'             => 'dropdown',
							'heading'          => esc_html__( 'Animation Style', 'radiantthemes-addons' ),
							'param_name'       => 'lightspeed',
							'edit_field_class' => 'vc_col-xs-3 vc_column',
							'description'      => esc_html__( 'Choose your animation style', 'radiantthemes-addons' ),
							'value'            => array(
								esc_html__( 'lightSpeedIn', 'radiantthemes-addons' )  => 'lightSpeedIn',
								esc_html__( 'lightSpeedOut', 'radiantthemes-addons' )  => 'lightSpeedOut',
							),
							'std'              => 'lightSpeedIn',
							'dependency'       => array(
								'element' => 'rt_animation',
								'value'   => 'lightspeed',
							),
						),
						array(
							'type'             => 'dropdown',
							'heading'          => esc_html__( 'Animation Style', 'radiantthemes-addons' ),
							'param_name'       => 'rotating_entrances',
							'edit_field_class' => 'vc_col-xs-3 vc_column',
							'description'      => esc_html__( 'Choose your animation style', 'radiantthemes-addons' ),
							'value'            => array(
								esc_html__( 'rotateIn', 'radiantthemes-addons' )          => 'rotateIn',
								esc_html__( 'rotateInDownLeft', 'radiantthemes-addons' )  => 'rotateInDownLeft',
								esc_html__( 'rotateInDownRight', 'radiantthemes-addons' ) => 'rotateInDownRight',
								esc_html__( 'rotateInUpLeft', 'radiantthemes-addons' )    => 'rotateInUpLeft',
								esc_html__( 'rotateInUpRight', 'radiantthemes-addons' )   => 'rotateInUpRight',

							),
							'std'              => 'rotateIn',
							'dependency'       => array(
								'element' => 'rt_animation',
								'value'   => 'rotating_entrances',
							),
						),
						array(
							'type'             => 'dropdown',
							'heading'          => esc_html__( 'Animation Style', 'radiantthemes-addons' ),
							'param_name'       => 'rotating_exits',
							'edit_field_class' => 'vc_col-xs-3 vc_column',
							'description'      => esc_html__( 'Choose your animation style', 'radiantthemes-addons' ),
							'value'            => array(
								esc_html__( 'rotateOut', 'radiantthemes-addons' )          => 'rotateOut',
								esc_html__( 'rotateOutDownLeft', 'radiantthemes-addons' )  => 'rotateOutDownLeft',
								esc_html__( 'rotateOutDownRight', 'radiantthemes-addons' ) => 'rotateOutDownRight',
								esc_html__( 'rotateOutUpLeft', 'radiantthemes-addons' )    => 'rotateOutUpLeft',
								esc_html__( 'rotateOutUpRight', 'radiantthemes-addons' )   => 'rotateOutUpRight',

							),
							'std'              => 'rotateIn',
							'dependency'       => array(
								'element' => 'rt_animation',
								'value'   => 'rotating_exits',
							),
						),
						array(
							'type'             => 'dropdown',
							'heading'          => esc_html__( 'Animation Style', 'radiantthemes-addons' ),
							'param_name'       => 'sliding_entrances',
							'edit_field_class' => 'vc_col-xs-3 vc_column',
							'description'      => esc_html__( 'Choose your animation style', 'radiantthemes-addons' ),
							'value'            => array(
								esc_html__( 'slideInUp', 'radiantthemes-addons' )    => 'slideInUp',
								esc_html__( 'slideInDown', 'radiantthemes-addons' )  => 'slideInDown',
								esc_html__( 'slideInLeft', 'radiantthemes-addons' )  => 'slideInLeft',
								esc_html__( 'slideInRight', 'radiantthemes-addons' ) => 'slideInRight',

							),
							'std'              => 'slideInUp',
							'dependency'       => array(
								'element' => 'rt_animation',
								'value'   => 'sliding_entrances',
							),
						),
						array(
							'type'             => 'dropdown',
							'heading'          => esc_html__( 'Animation Style', 'radiantthemes-addons' ),
							'param_name'       => 'sliding_exits',
							'edit_field_class' => 'vc_col-xs-3 vc_column',
							'description'      => esc_html__( 'Choose your animation style', 'radiantthemes-addons' ),
							'value'            => array(
								esc_html__( 'slideOutUp', 'radiantthemes-addons' )    => 'slideOutUp',
								esc_html__( 'slideOutDown', 'radiantthemes-addons' )  => 'slideOutDown',
								esc_html__( 'slideOutLeft', 'radiantthemes-addons' )  => 'slideOutLeft',
								esc_html__( 'slideOutRight', 'radiantthemes-addons' ) => 'slideOutRight',

							),
							'std'              => 'slideOutUp',
							'dependency'       => array(
								'element' => 'rt_animation',
								'value'   => 'sliding_exits',
							),
						),
						array(
							'type'             => 'dropdown',
							'heading'          => esc_html__( 'Animation Style', 'radiantthemes-addons' ),
							'param_name'       => 'zoom_entrances',
							'edit_field_class' => 'vc_col-xs-3 vc_column',
							'description'      => esc_html__( 'Choose your animation style', 'radiantthemes-addons' ),
							'value'            => array(
								esc_html__( 'zoomIn', 'radiantthemes-addons' )      => 'zoomIn',
								esc_html__( 'zoomInDown', 'radiantthemes-addons' )  => 'zoomInDown',
								esc_html__( 'zoomInLeft', 'radiantthemes-addons' )  => 'zoomInLeft',
								esc_html__( 'zoomInRight', 'radiantthemes-addons' ) => 'zoomInRight',
								esc_html__( 'zoomInUp', 'radiantthemes-addons' )    => 'zoomInUp',

							),
							'std'              => 'zoomIn',
							'dependency'       => array(
								'element' => 'rt_animation',
								'value'   => 'zoom_entrances',
							),
						),
						array(
							'type'             => 'dropdown',
							'heading'          => esc_html__( 'Animation Style', 'radiantthemes-addons' ),
							'param_name'       => 'zoom_exits',
							'edit_field_class' => 'vc_col-xs-3 vc_column',
							'description'      => esc_html__( 'Choose your animation style', 'radiantthemes-addons' ),
							'value'            => array(
								esc_html__( 'zoomOut', 'radiantthemes-addons' )      => 'zoomOut',
								esc_html__( 'zoomOutDown', 'radiantthemes-addons' )  => 'zoomOutDown',
								esc_html__( 'zoomOutLeft', 'radiantthemes-addons' )  => 'zoomOutLeft',
								esc_html__( 'zoomOutRight', 'radiantthemes-addons' ) => 'zoomOutRight',
								esc_html__( 'zoomOutUp', 'radiantthemes-addons' )    => 'zoomOutUp',

							),
							'std'              => 'zoomOut',
							'dependency'       => array(
								'element' => 'rt_animation',
								'value'   => 'zoom_exits',
							),
						),
						array(
							'type'             => 'dropdown',
							'heading'          => esc_html__( 'Animation Style', 'radiantthemes-addons' ),
							'param_name'       => 'specials',
							'edit_field_class' => 'vc_col-xs-3 vc_column',
							'description'      => esc_html__( 'Choose your animation style', 'radiantthemes-addons' ),
							'value'            => array(
								esc_html__( 'hinge', 'radiantthemes-addons' )        => 'hinge',
								esc_html__( 'jackInTheBox', 'radiantthemes-addons' ) => 'jackInTheBox',
								esc_html__( 'rollIn', 'radiantthemes-addons' )       => 'rollIn',
								esc_html__( 'rollOut', 'radiantthemes-addons' )      => 'rollOut',

							),
							'std'              => 'hinge',
							'dependency'       => array(
								'element' => 'rt_animation',
								'value'   => 'specials',
							),
						),
						array(
							'type'             => 'textfield',
							'heading'          => esc_html__( 'Animation Duration', 'radiantthemes-addons' ),
							'description'      => esc_html__( 'Put time is seconds. Eg. 2s', 'radiantthemes-addons' ),
							'edit_field_class' => 'vc_col-xs-3 vc_column',
							'param_name'       => 'duration',
							'value'            => '2s',
							'dependency'       => array(
								'element' => 'add_animation',
								'value'   => 'true',
							),
						),
						array(
							'type'             => 'textfield',
							'heading'          => esc_html__( 'Animation Delay', 'radiantthemes-addons' ),
							'description'      => esc_html__( 'Put time is seconds. Eg. 0s', 'radiantthemes-addons' ),
							'param_name'       => 'delay',
							'edit_field_class' => 'vc_col-xs-3 vc_column',
							'value'            => '0s',
							'dependency'       => array(
								'element' => 'add_animation',
								'value'   => 'true',
							),
						),
						array(
							'type'        => 'textfield',
							'heading'     => esc_html__( 'Extra class name for the container', 'radiantthemes-addons' ),
							'param_name'  => 'extra_class',
							'description' => esc_html__( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'radiantthemes-addons' ),
						),
						array(
							'type'        => 'textfield',
							'heading'     => esc_html__( 'Element ID', 'radiantthemes-addons' ),
							'param_name'  => 'extra_id',
							'description' => sprintf( wp_kses_post( 'Enter element ID (Note: make sure it is unique and valid according to <a href="%s" target="_blank">w3c specification</a>).', 'radiantthemes-addons' ), 'http://www.w3schools.com/tags/att_global_id.asp' ),
						),
						array(
							'type'       => 'dropdown',
							'heading'    => esc_html__( 'Title Font', 'radiantthemes-addons' ),
							'param_name' => 'team_title_select_font',
							'value'      => array(
								esc_html__( 'Select Font Type', 'radiantthemes-addons' ) => '',
								esc_html__( 'Google Font', 'radiantthemes-addons' )      => 'gfont',
								esc_html__( 'Custom Font', 'radiantthemes-addons' )      => 'cfont',
							),
							'group'      => esc_html__( 'Typography', 'radiantthemes-addons' ),
						),
						array(
							'type'       => 'google_fonts',
							'param_name' => 'team_title_google_font',
							'dependency' => array(
								'element' => 'team_title_select_font',
								'value'   => 'gfont',
							),
							'settings'   => array(
								'fields' => array(
									'font_family_description' => esc_html__( 'Select Font Family.', 'radiantthemes-addons' ),
									'font_style_description'  => esc_html__( 'Select Font Style.', 'radiantthemes-addons' ),
								),
							),
							'weight'     => 0,
							'group'      => esc_html__( 'Typography', 'radiantthemes-addons' ),
						),
						array(
							'type'       => 'dropdown',
							'param_name' => 'team_title_custom_font',
							'value'      => $final_font_array,
							'dependency' => array(
								'element' => 'team_title_select_font',
								'value'   => 'cfont',
							),
							'group'      => esc_html__( 'Typography', 'radiantthemes-addons' ),
						),
						array(
							'type'       => 'font_container',
							'param_name' => 'team_title_font_container',
							'value'      => '',
							'group'      => esc_html__( 'Typography', 'radiantthemes-addons' ),
							'dependency' => array(
								'element' => 'team_title_select_font',
								'value'   => array( 'gfont', 'cfont' ),
							),
							'settings'   => array(
								'fields' => array(
									'font_size'         => '',
									'line_height',
									'color',
									'font_size_description' => esc_html__( 'Enter font size.', 'radiantthemes-addons' ),
									'line_height_description' => esc_html__( 'Enter line height.', 'radiantthemes-addons' ),
									'color_description' => esc_html__( 'Select Designation color.', 'radiantthemes-addons' ),
								),
							),
						),
						array(
							'type'       => 'textfield',
							'heading'    => esc_html__( 'Font Weight', 'radiantthemes-addons' ),
							'param_name' => 'team_title_font_weight',
							'value'      => '400',
							'group'      => 'Typography',
							'dependency' => array(
								'element' => 'team_title_select_font',
								'value'   => 'cfont',
							),
						),
						array(
							'type'        => 'dropdown',
							'heading'     => esc_html__( 'Font Style', 'radiantthemes-addons' ),
							'description' => esc_html__( 'Select font style.', 'radiantthemes-addons' ),
							'param_name'  => 'team_title_font_style',
							'value'       => array(
								esc_html__( 'Regular', 'radiantthemes-addons' ) => 'normal',
								esc_html__( 'Italic', 'radiantthemes-addons' )  => 'italic',
							),
							'std'         => 'normal',
							'group'       => 'Typography',
							'dependency'  => array(
								'element' => 'team_title_select_font',
								'value'   => 'cfont',
							),
						),

						array(
							'type'       => 'dropdown',
							'heading'    => esc_html__( 'Team Designation Font', 'radiantthemes-addons' ),
							'param_name' => 'team_designation_select_font',
							'value'      => array(
								esc_html__( 'Select Font Type', 'radiantthemes-addons' ) => '',
								esc_html__( 'Google Font', 'radiantthemes-addons' )      => 'gfont',
								esc_html__( 'Custom Font', 'radiantthemes-addons' )      => 'cfont',
							),
							'group'      => esc_html__( 'Typography', 'radiantthemes-addons' ),
						),
						array(
							'type'       => 'google_fonts',
							'param_name' => 'team_designation_google_font',
							'dependency' => array(
								'element' => 'team_designation_select_font',
								'value'   => 'gfont',
							),
							'settings'   => array(
								'fields' => array(
									'font_family_description' => esc_html__( 'Select Font Family.', 'radiantthemes-addons' ),
									'font_style_description'  => esc_html__( 'Select Font Style.', 'radiantthemes-addons' ),
								),
							),
							'weight'     => 0,
							'group'      => esc_html__( 'Typography', 'radiantthemes-addons' ),
						),
						array(
							'type'       => 'dropdown',
							'param_name' => 'team_designation_custom_font',
							'value'      => $final_font_array,
							'dependency' => array(
								'element' => 'team_designation_select_font',
								'value'   => 'cfont',
							),
							'group'      => esc_html__( 'Typography', 'radiantthemes-addons' ),
						),
						array(
							'type'       => 'font_container',
							'param_name' => 'team_designation_font_container',
							'value'      => '',
							'group'      => esc_html__( 'Typography', 'radiantthemes-addons' ),
							'dependency' => array(
								'element' => 'team_designation_select_font',
								'value'   => array( 'gfont', 'cfont' ),
							),
							'settings'   => array(
								'fields' => array(
									'font_size'         => '',
									'line_height',
									'color',
									'font_size_description' => esc_html__( 'Enter font size.', 'radiantthemes-addons' ),
									'line_height_description' => esc_html__( 'Enter line height.', 'radiantthemes-addons' ),
									'color_description' => esc_html__( 'Select Designation color.', 'radiantthemes-addons' ),
								),
							),
						),
						array(
							'type'       => 'textfield',
							'heading'    => esc_html__( 'Font Weight', 'radiantthemes-addons' ),
							'param_name' => 'team_designation_font_weight',
							'value'      => '400',
							'group'      => 'Typography',
							'dependency' => array(
								'element' => 'team_designation_select_font',
								'value'   => 'cfont',
							),
						),
						array(
							'type'        => 'dropdown',
							'heading'     => esc_html__( 'Font Style', 'radiantthemes-addons' ),
							'description' => esc_html__( 'Select font style.', 'radiantthemes-addons' ),
							'param_name'  => 'team_designation_font_style',
							'value'       => array(
								esc_html__( 'Regular', 'radiantthemes-addons' ) => 'normal',
								esc_html__( 'Italic', 'radiantthemes-addons' )  => 'italic',
							),
							'std'         => 'normal',
							'group'       => 'Typography',
							'dependency'  => array(
								'element' => 'team_designation_select_font',
								'value'   => 'cfont',
							),
						),
					),
				)
			);
			add_shortcode( 'rt_team_style', array( $this, 'radiantthemes_team_style_func' ) );
		}

		/**
		 * [radiantthemes_team_style_func description]
		 *
		 * @param  [type] $atts    [description.
		 * @param  [type] $content [description.
		 * @param  [type] $tag     [description.
		 * @return [type]          [description]
		 */
		public function radiantthemes_team_style_func( $atts, $content = null, $tag ) {
			$shortcode = shortcode_atts(
				array(
					'style_variation'                 => 'one',
					'team_color'                      => '',
					'team_category'                   => 'all',
					'team_allow_carousel'             => 'true',
					'select_category'                 => '',
					'allow_nav'                       => 'true',
					'navigation_style'                => 'one',
					'allow_loop'                      => 'true',
					'allow_autoplay'                  => 'true',
					'allow_dots'                      => 'true',
					'navigation_dot_style'            => 'two',
					'autoplay_timeout'                => '',
					'order'                           => 'DESC',
					'order_by'                        => 'date',
					'max_posts'                       => -1,
					'posts_in_desktop'                => '3',
					'posts_in_tab'                    => '2',
					'posts_in_mobile'                 => '1',
					'team_no_row_items'               => '2',
					'team_enable_link'                => 'no',
					'add_animation'                   => '',
					'rt_animation'                    => 'attention_seekers',
					'attention_seekers'               => 'bounce',
					'bouncing_entrances'              => 'bounceIn',
					'bouncing_exits'                  => 'bounceOut',
					'fading_entrances'                => 'fadeIn',
					'fading_exits'                    => 'fadeOut',
					'flippers'                        => 'flip',
					'lightspeed'                      => 'lightSpeedIn',
					'rotating_entrances'              => 'rotateIn',
					'rotating_exits'                  => 'rotateOut',
					'sliding_entrances'               => 'slideInUp',
					'sliding_exits'                   => 'slideOutUp',
					'zoom_entrances'                  => 'zoomIn',
					'zoom_exits'                      => 'zoomOut',
					'specials'                        => 'hinge',
					'duration'                        => '2s',
					'delay'                           => '0s',
					'extra_class'                     => '',
					'extra_id'                        => '',
					'team_title_select_font'          => '',
					'team_title_google_font'          => '',
					'team_title_custom_font'          => '',
					'team_title_font_container'       => '',
					'team_title_font_weight'          => '400',
					'team_title_font_style'           => 'normal',
					'team_designation_select_font'    => '',
					'team_designation_google_font'    => '',
					'team_designation_custom_font'    => '',
					'team_designation_font_container' => '',
					'team_designation_font_weight'    => '400',
					'team_designation_font_style'     => 'normal',
				),
				$atts
			);

			if ( $shortcode['team_title_font_container'] ) {
				$team_title_font_container    = explode( '|', $shortcode['team_title_font_container'] );
				$team_title_font_container[1] = urldecode( $team_title_font_container[1] );
				$team_title_font_container    = implode( ';', $team_title_font_container );
				$team_title_font_container    = str_replace( '_', '-', $team_title_font_container );
				$team_title_font_container    = $team_title_font_container . ';';
			} else {
				$team_title_font_container = '';
			}

			if ( $shortcode['team_designation_font_container'] ) {
				$team_designation_font_container    = explode( '|', $shortcode['team_designation_font_container'] );
				$team_designation_font_container[1] = urldecode( $team_designation_font_container[1] );
				$team_designation_font_container    = implode( ';', $team_designation_font_container );
				$team_designation_font_container    = str_replace( '_', '-', $team_designation_font_container );
				$team_designation_font_container    = $team_designation_font_container . ';';
			} else {
				$team_designation_font_container = '';
			}

			if ( 'gfont' === $shortcode['team_title_select_font'] ) {

				// Build the team title font array.
				$team_title_google_font = $this->get_fonts_data( $shortcode['team_title_google_font'] );

				// Build the inline style.
				$team_title_font_inline_style = $this->google_fonts_styles( $team_title_google_font );

				// Enqueue the right font.
				$this->enqueue_google_fonts( $team_title_google_font );

				$team_title_weight_style = '';

			} elseif ( 'cfont' === $shortcode['team_title_select_font'] ) {

				// Build the inline style.
				$team_title_font_inline_style = 'font-family: ' . $shortcode['team_title_custom_font'] . ';';
				$team_title_weight_style      = 'font-weight: ' . $shortcode['team_title_font_weight'] . ';font-style: ' . $shortcode['team_title_font_style'] . ';';

			} else {

				$team_title_font_inline_style = '';
				$team_title_weight_style      = '';

			}

			if ( 'gfont' === $shortcode['team_designation_select_font'] ) {

				// Build the team designation font array.
				$team_designation_google_font = $this->get_fonts_data( $shortcode['team_designation_google_font'] );

				// Build the inline style.
				$team_designation_font_inline_style = $this->google_fonts_styles( $team_designation_google_font );

				// Enqueue the right font.
				$this->enqueue_google_fonts( $team_designation_google_font );

				$team_designation_weight_style = '';

			} elseif ( 'cfont' === $shortcode['team_designation_select_font'] ) {

				// Build the inline style.
				$team_designation_font_inline_style = 'font-family: ' . $shortcode['team_designation_custom_font'] . ';';
				$team_designation_weight_style      = 'font-weight: ' . $shortcode['team_designation_font_weight'] . ';font-style: ' . $shortcode['team_designation_font_style'] . ';';

			} else {

				$team_designation_font_inline_style = '';
				$team_designation_weight_style      = '';

			}

			// ADD RADIANTTHEMES MAIN CSS.
			wp_register_style(
				'radiantthemes-addons-custom',
				plugins_url( 'radiantthemes-addons/assets/css/radiantthemes-addons-custom.css' )
			);
			wp_enqueue_style( 'radiantthemes-addons-custom' );

			$team_id = $shortcode['extra_id'] ? 'id="' . esc_attr( $shortcode['extra_id'] ) . '"' : '';

			$random_class = 'rt' . wp_rand();
			$custom_css   = '';

			$custom_css .= $shortcode['team_color'] ? '.team.element-one.' . $random_class . ' .team-item > .holder > .data .designation,
			.team.element-four.' . $random_class . ' .team-item > .holder > .data .designation{
            	color: ' . $shortcode['team_color'] . ';
            }
            .team.element-three.' . $random_class . ' .team-item > .holder > .overlay{
            	background-color: ' . $shortcode['team_color'] . ';
            }' : '';
			wp_add_inline_style( 'radiantthemes-addons-custom', $custom_css );

						// Build the animation classes.
						$time         = '';
						$rt_animation = '';
			if ( $shortcode['add_animation'] ) {
				$time  = 'data-wow-duration="' . $shortcode['duration'] . '"';
				$time .= ' data-wow-delay="' . $shortcode['delay'] . '"';

				if ( 'attention_seekers' === $shortcode['rt_animation'] ) {
					$rt_animation = isset( $shortcode['attention_seekers'] ) ? esc_attr( $shortcode['attention_seekers'] ) : 'bounce';

				} elseif ( 'bouncing_entrances' === $shortcode['rt_animation'] ) {
					$rt_animation = isset( $shortcode['bouncing_entrances'] ) ? esc_attr( $shortcode['bouncing_entrances'] ) : 'bounceIn';

				} elseif ( 'bouncing_exits' === $shortcode['rt_animation'] ) {
					$rt_animation = isset( $shortcode['bouncing_exits'] ) ? esc_attr( $shortcode['bouncing_exits'] ) : 'bounceOut';

				} elseif ( 'fading_entrances' === $shortcode['rt_animation'] ) {
					$rt_animation = isset( $shortcode['fading_entrances'] ) ? esc_attr( $shortcode['fading_entrances'] ) : 'fadeIn';

				} elseif ( 'fading_exits' === $shortcode['rt_animation'] ) {
					$rt_animation = isset( $shortcode['fading_exits'] ) ? esc_attr( $shortcode['fading_exits'] ) : 'fadeOut';

				} elseif ( 'flippers' === $shortcode['rt_animation'] ) {
					$rt_animation = isset( $shortcode['flippers'] ) ? esc_attr( $shortcode['flippers'] ) : 'flip';

				} elseif ( 'lightspeed' === $shortcode['rt_animation'] ) {
					$rt_animation = isset( $shortcode['lightspeed'] ) ? esc_attr( $shortcode['lightspeed'] ) : 'lightSpeedIn';

				} elseif ( 'rotating_entrances' === $shortcode['rt_animation'] ) {
					$rt_animation = isset( $shortcode['rotating_entrances'] ) ? esc_attr( $shortcode['rotating_entrances'] ) : 'rotateIn';

				} elseif ( 'rotating_exits' === $shortcode['rt_animation'] ) {
					$rt_animation = isset( $shortcode['rotating_exits'] ) ? esc_attr( $shortcode['rotating_exits'] ) : 'rotateOut';

				} elseif ( 'sliding_entrances' === $shortcode['rt_animation'] ) {
					$rt_animation = isset( $shortcode['sliding_entrances'] ) ? esc_attr( $shortcode['sliding_entrances'] ) : 'slideInUp';

				} elseif ( 'sliding_exits' === $shortcode['rt_animation'] ) {
					$rt_animation = isset( $shortcode['sliding_exits'] ) ? esc_attr( $shortcode['sliding_exits'] ) : 'slideOutUp';

				} elseif ( 'zoom_entrances' === $shortcode['rt_animation'] ) {
					$rt_animation = isset( $shortcode['zoom_entrances'] ) ? esc_attr( $shortcode['zoom_entrances'] ) : 'zoomIn';

				} elseif ( 'zoom_exits' === $shortcode['rt_animation'] ) {
					$rt_animation = isset( $shortcode['zoom_exits'] ) ? esc_attr( $shortcode['zoom_exits'] ) : 'zoomOut';

				} elseif ( 'specials' === $shortcode['rt_animation'] ) {
					$rt_animation = isset( $shortcode['specials'] ) ? esc_attr( $shortcode['specials'] ) : 'hinge';

				}
				$rt_animation = 'wow ' . $rt_animation;
			}

			$output = "\r" . '<!-- team -->' . "\r";
			if ( 'false' == $shortcode['team_allow_carousel'] ) {
				$output .= '<div class="team element-' . $shortcode['style_variation'] . ' ';
				$output .= ' ' . $shortcode['extra_class'] . ' ' . $random_class . '"  ' . $team_id;
				$output .= ' data-row-items="';
				$output .= esc_attr( $shortcode['team_no_row_items'] ) . '"';
				$output .= '>';
			} elseif ( 'true' == $shortcode['team_allow_carousel'] ) {
				$output .= '<div class="team element-' . $shortcode['style_variation'] . ' owl-carousel ';
				$output .= ' ' . ( $shortcode['allow_nav'] ) ? "owl-nav-style-{$shortcode['navigation_style']}" : '';
				$output .= ' ' . ( $shortcode['allow_dots'] ) ? " owl-dot-style-{$shortcode['navigation_dot_style']}" : '';
				$output .= ' ' . $shortcode['extra_class'] . ' ' . $random_class . '"  ' . $team_id;
				$output .= ' data-owl-nav="';
				$output .= $shortcode['allow_nav'] . '" data-owl-dots="';
				$output .= $shortcode['allow_dots'] . '" data-owl-loop="';
				$output .= $shortcode['allow_loop'] . '" data-owl-autoplay="';
				$output .= $shortcode['allow_autoplay'] . '" data-owl-autoplay-timeout="';
				$output .= $shortcode['autoplay_timeout'];
				$output .= '" data-owl-mobile-items="';
				$output .= $shortcode['posts_in_mobile'] . '" data-owl-tab-items="';
				$output .= $shortcode['posts_in_tab'] . '" data-owl-desktop-items="';
				$output .= $shortcode['posts_in_desktop'] . '">';
			} else {
				$output .= '';
			}
			if ( 'all' == $shortcode['team_category'] || '' == $shortcode['team_category'] ) {
				$team_category = '';
			} else {
				$team_category = array(
					array(
						'taxonomy' => 'profession',
						'field'    => 'slug',
						'terms'    => esc_attr( $shortcode['team_category'] ),
					),
				);
				$hidden_filter = 'hidden';
			}
			$query = new WP_Query(
				array(
					'post_type'      => 'team',
					'posts_per_page' => $shortcode['max_posts'],
					'order'          => $shortcode['order'],
					'orderby'        => $shortcode['order_by'],
					'tax_query'      => $team_category,
				)
			);
			$data  = 0;
			if ( $query->have_posts() ) {
				while ( $query->have_posts() ) {
					$query->the_post();
					require 'template/template-team-item-' . $shortcode['style_variation'] . '.php';
				}
				wp_reset_postdata();
			} else {
				$output .= wp_kses_post( '<p>No items found</p>', 'radiantthemes-addons' );
			}

			$output .= '</div>' . "\r";
			$output .= '<!-- team -->' . "\r";
			return $output;
		}
		/**
		 * Build the string of values in an Array
		 *
		 * @param  [type] $fonts_string description.
		 */
		protected function get_fonts_data( $fonts_string ) {
			// Font data Extraction.
			$google_fonts_param = new Vc_Google_Fonts();
			$field_settings     = array();
			$fonts_data         = strlen( $fonts_string ) > 0 ? $google_fonts_param->_vc_google_fonts_parse_attributes( $field_settings, $fonts_string ) : '';
			return $fonts_data;
		}

		/**
		 * Build the inline style starting from the data
		 *
		 * @param [type] $fonts_data description.
		 */
		protected function google_fonts_styles( $fonts_data ) {

			// Inline styles.
			$font_family = explode( ':', $fonts_data['values']['font_family'] );
			$styles[]    = 'font-family: ' . $font_family[0];
			if ( $fonts_data['values']['font_style'] ) {
				$font_styles = explode( ':', $fonts_data['values']['font_style'] );
				$styles[]    = 'font-weight: ' . $font_styles[1];
				$styles[]    = 'font-style : ' . $font_styles[2];
			} else {
				$styles[] = 'font-weight: 400';
				$styles[] = 'font-style : normal';
			}

			$inline_style = '';
			foreach ( $styles as $attribute ) {
				$inline_style .= $attribute . '; ';
			}

			return $inline_style;

		}

		/**
		 * Enqueue right google font from Googleapis
		 *
		 * @param [type] $fonts_data description.
		 * @return void
		 */
		protected function enqueue_google_fonts( $fonts_data ) {

			// Get extra subsets for settings (latin/cyrillic/etc).
			$settings = get_option( 'wpb_js_google_fonts_subsets' );
			if ( is_array( $settings ) && ! empty( $settings ) ) {
				$subsets = '&subset=' . implode( ',', $settings );
			} else {
				$subsets = '';
			}

			// We also need to enqueue font from googleapis.
			if ( isset( $fonts_data['values']['font_family'] ) ) {
				wp_enqueue_style(
					'vc_google_fonts_' . vc_build_safe_css_class( $fonts_data['values']['font_family'] ),
					'//fonts.googleapis.com/css?family=' . $fonts_data['values']['font_family'] . $subsets,
					array(),
					time()
				);
			}

		}
	}
}
