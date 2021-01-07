<?php

if ( ! function_exists( 'overton_mikado_map_woocommerce_meta' ) ) {
	function overton_mikado_map_woocommerce_meta() {
		
		$woocommerce_meta_box = overton_mikado_create_meta_box(
			array(
				'scope' => array( 'product' ),
				'title' => esc_html__( 'Product Meta', 'overton' ),
				'name'  => 'woo_product_meta'
			)
		);
		
		overton_mikado_create_meta_box_field(
			array(
				'name'        => 'mkdf_product_featured_image_size',
				'type'        => 'select',
				'label'       => esc_html__( 'Dimensions for Product List Shortcode', 'overton' ),
				'description' => esc_html__( 'Choose image layout when it appears in Mikado Product List - Masonry layout shortcode', 'overton' ),
				'options'     => array(
					''                   => esc_html__( 'Default', 'overton' ),
					'small'              => esc_html__( 'Small', 'overton' ),
					'large-width'        => esc_html__( 'Large Width', 'overton' ),
					'large-height'       => esc_html__( 'Large Height', 'overton' ),
					'large-width-height' => esc_html__( 'Large Width Height', 'overton' )
				),
				'parent'      => $woocommerce_meta_box
			)
		);
		
		overton_mikado_create_meta_box_field(
			array(
				'name'          => 'mkdf_show_title_area_woo_meta',
				'type'          => 'select',
				'default_value' => '',
				'label'         => esc_html__( 'Show Title Area', 'overton' ),
				'description'   => esc_html__( 'Disabling this option will turn off page title area', 'overton' ),
				'options'       => overton_mikado_get_yes_no_select_array(),
				'parent'        => $woocommerce_meta_box
			)
		);
		
		overton_mikado_create_meta_box_field(
			array(
				'name'          => 'mkdf_show_new_sign_woo_meta',
				'type'          => 'yesno',
				'default_value' => 'no',
				'label'         => esc_html__( 'Show New Sign', 'overton' ),
				'description'   => esc_html__( 'Enabling this option will show new sign mark on product', 'overton' ),
				'parent'        => $woocommerce_meta_box
			)
		);
	}
	
	add_action( 'overton_mikado_action_meta_boxes_map', 'overton_mikado_map_woocommerce_meta', 99 );
}