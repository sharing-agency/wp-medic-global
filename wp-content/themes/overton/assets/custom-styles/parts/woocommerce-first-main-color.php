<?php 
$woo_color_selector = array('.woocommerce-page .mkdf-content input[type=text]','.woocommerce-page .mkdf-content input[type=email]','.woocommerce-page .mkdf-content input[type=tel]','.woocommerce-page .mkdf-content input[type=password]','.woocommerce-page .mkdf-content textarea','div.woocommerce input[type=text]','div.woocommerce input[type=email]','div.woocommerce input[type=tel]','div.woocommerce input[type=password]','div.woocommerce textarea','.woocommerce-page .mkdf-content input:focus[type=text]','.woocommerce-page .mkdf-content input:focus[type=email]','.woocommerce-page .mkdf-content input:focus[type=tel]','.woocommerce-page .mkdf-content input:focus[type=password]','.woocommerce-page .mkdf-content textarea:focus','div.woocommerce input:focus[type=text]','div.woocommerce input:focus[type=email]','div.woocommerce input:focus[type=tel]','div.woocommerce input:focus[type=password]','div.woocommerce textarea:focus','.mkdf-woocommerce-page table.cart thead tr th','.mkdf-woocommerce-page table.cart tr.cart_item td.product-remove a:hover','.mkdf-woocommerce-page .cart-empty','.mkdf-woocommerce-page.woocommerce-order-received .woocommerce ul.order_details li strong','.woocommerce-page .mkdf-content .wc-forward:not(.added_to_cart):not(.checkout-button)','.woocommerce-page .mkdf-content a.button','.woocommerce-page .mkdf-content button[type=submit]:not(.mkdf-search-submit)','div.woocommerce .wc-forward:not(.added_to_cart):not(.checkout-button)','div.woocommerce a.button','div.woocommerce button[type=submit]:not(.mkdf-search-submit)','.woocommerce-page .mkdf-content input[type=submit]','div.woocommerce input[type=submit]','.woocommerce .mkdf-onsale','.mkdf-woocommerce-page .woocommerce-error>a:hover','.mkdf-woocommerce-page .woocommerce-info>a:hover','.mkdf-woocommerce-page .woocommerce-message>a:hover','.mkdf-woocommerce-page .woocommerce-info .showcoupon:hover','.woocommerce-pagination ul li.mkdf-pag-active a','.woocommerce-pagination ul li:hover a','.woocommerce-pagination ul li a.next','.woocommerce-pagination ul li a.prev','.woocommerce-page .mkdf-content .mkdf-quantity-buttons .mkdf-quantity-minus:hover','.woocommerce-page .mkdf-content .mkdf-quantity-buttons .mkdf-quantity-plus:hover','div.woocommerce .mkdf-quantity-buttons .mkdf-quantity-minus:hover','div.woocommerce .mkdf-quantity-buttons .mkdf-quantity-plus:hover','.mkdf-woocommerce-page .mkdf-content .variations .reset_variations','.mkdf-woocommerce-page .mkdf-content table.group_table a:hover','.mkdf-woocommerce-page.woocommerce-account .woocommerce form.edit-account fieldset>legend','.mkdf-woocommerce-page.woocommerce-account .vc_row .woocommerce form.login p label:not(.inline)','.mkdf-woocommerce-page.mkdf-woocommerce-order-tracking .woocommerce>.track_order .form-row-first label','.mkdf-woocommerce-page.mkdf-woocommerce-order-tracking .woocommerce>.track_order .form-row-last label','ul.products>.product .price','ul.products>.product .mkdf-pl-inner .mkdf-pl-custom-atc-btn a:hover','ul.products>.product .mkdf-pl-inner .mkdf-pl-text-inner .mkdf-product-list-title','ul.products>.product .mkdf-pl-inner .mkdf-pl-text-inner .price','ul.products>.product .mkdf-pl-inner .mkdf-pl-text-inner .star-rating','.mkdf-content .woocommerce.add_to_cart_inline del','.mkdf-content .woocommerce.add_to_cart_inline ins','div.woocommerce>.products>.product-category .woocommerce-loop-category__title','div.woocommerce>.products>.product-category .woocommerce-loop-category__title .count','div.woocommerce>.single-product .woocommerce-tabs table th','.mkdf-woo-single-page .mkdf-single-product-summary .price','.mkdf-woo-single-page .mkdf-single-product-summary p.stock.in-stock','.mkdf-woo-single-page .mkdf-single-product-summary p.stock.out-of-stock','.mkdf-woo-single-page .woocommerce-tabs table th','.mkdf-dark-header .mkdf-page-header>div:not(.mkdf-sticky-header):not(.fixed) .mkdf-shopping-cart-holder .mkdf-header-cart','.mkdf-dark-header .mkdf-page-header>div:not(.mkdf-sticky-header):not(.fixed) .mkdf-shopping-cart-holder .mkdf-header-cart:hover','.mkdf-light-header .mkdf-page-header>div:not(.mkdf-sticky-header):not(.fixed) .mkdf-shopping-cart-holder .mkdf-header-cart','.mkdf-light-header .mkdf-page-header>div:not(.mkdf-sticky-header):not(.fixed) .mkdf-shopping-cart-holder .mkdf-header-cart:hover','.mkdf-shopping-cart-dropdown ul li.mkdf-empty-cart','.mkdf-shopping-cart-dropdown .mkdf-item-info-holder .amount','.mkdf-shopping-cart-dropdown .mkdf-cart-bottom .mkdf-subtotal-holder>*','.mkdf-shopping-cart-dropdown .mkdf-cart-bottom .mkdf-checkout','.mkdf-shopping-cart-dropdown .mkdf-cart-bottom .mkdf-view-cart','.widget.woocommerce .product-title','.widget.woocommerce.widget_layered_nav .chosen a','.widget.woocommerce.widget_price_filter .price_slider_amount .button','.widget.woocommerce.widget_shopping_cart .buttons .button:hover','.mkdf-product-info .mkdf-pi-add-to-cart .mkdf-btn.mkdf-btn-solid.mkdf-dark-skin','.mkdf-product-info .mkdf-pi-add-to-cart .mkdf-btn.mkdf-btn-solid.mkdf-dark-skin:hover','.mkdf-product-info .mkdf-pi-add-to-cart .mkdf-btn.mkdf-btn-solid.mkdf-white-skin','.mkdf-product-info .mkdf-pi-add-to-cart .mkdf-btn.mkdf-btn-solid.mkdf-white-skin:hover','.mkdf-plc-holder .mkdf-plc-item .mkdf-plc-image-outer .mkdf-plc-image .mkdf-plc-onsale','.mkdf-plc-holder .mkdf-plc-item .mkdf-plc-excerpt','.mkdf-plc-holder .mkdf-plc-item .mkdf-plc-price','.mkdf-plc-holder .mkdf-plc-item .mkdf-plc-add-to-cart.mkdf-dark-skin .added_to_cart','.mkdf-plc-holder .mkdf-plc-item .mkdf-plc-add-to-cart.mkdf-dark-skin .added_to_cart:hover','.mkdf-plc-holder .mkdf-plc-item .mkdf-plc-add-to-cart.mkdf-dark-skin .button','.mkdf-plc-holder .mkdf-plc-item .mkdf-plc-add-to-cart.mkdf-dark-skin .button:hover','.mkdf-plc-holder .mkdf-plc-item .mkdf-plc-add-to-cart.mkdf-default-skin .added_to_cart:hover','.mkdf-plc-holder .mkdf-plc-item .mkdf-plc-add-to-cart.mkdf-default-skin .button:hover','.mkdf-plc-holder .mkdf-plc-item .mkdf-plc-add-to-cart.mkdf-light-skin .added_to_cart','.mkdf-plc-holder .mkdf-plc-item .mkdf-plc-add-to-cart.mkdf-light-skin .added_to_cart:hover','.mkdf-plc-holder .mkdf-plc-item .mkdf-plc-add-to-cart.mkdf-light-skin .button','.mkdf-plc-holder .mkdf-plc-item .mkdf-plc-add-to-cart.mkdf-light-skin .button:hover','.mkdf-plc-holder.mkdf-standard-layout .mkdf-plc-item .mkdf-plc-category a','.mkdf-plc-holder.mkdf-standard-layout .mkdf-plc-item .mkdf-plc-excerpt','.mkdf-plc-holder.mkdf-standard-layout .mkdf-plc-item .mkdf-plc-price','.mkdf-plc-holder.mkdf-standard-layout .mkdf-plc-item .mkdf-plc-rating','.mkdf-plc-holder.mkdf-standard-layout .mkdf-plc-item .mkdf-plc-title','.mkdf-plc-holder.mkdf-plc-nav-light-skin .owl-nav .owl-next','.mkdf-plc-holder.mkdf-plc-nav-light-skin .owl-nav .owl-next:hover','.mkdf-plc-holder.mkdf-plc-nav-light-skin .owl-nav .owl-prev','.mkdf-plc-holder.mkdf-plc-nav-light-skin .owl-nav .owl-prev:hover','.mkdf-pls-holder .mkdf-pls-text .mkdf-pls-price','.mkdf-pl-holder .mkdf-pli .mkdf-pli-excerpt','.mkdf-pl-holder .mkdf-pli .mkdf-pli-price','.mkdf-pl-holder .mkdf-pli-inner .mkdf-pli-image .mkdf-pli-onsale','.mkdf-pl-holder .mkdf-pli-inner .mkdf-pli-text-inner .mkdf-pli-category a','.mkdf-pl-holder .mkdf-pli-inner .mkdf-pli-text-inner .mkdf-pli-excerpt','.mkdf-pl-holder .mkdf-pli-inner .mkdf-pli-text-inner .mkdf-pli-price','.mkdf-pl-holder .mkdf-pli-inner .mkdf-pli-text-inner .mkdf-pli-rating','.mkdf-pl-holder .mkdf-pli-inner .mkdf-pli-text-inner .mkdf-pli-title','.mkdf-pl-holder .mkdf-pli-inner .mkdf-pli-text-inner .mkdf-pli-add-to-cart.mkdf-dark-skin .added_to_cart','.mkdf-pl-holder .mkdf-pli-inner .mkdf-pli-text-inner .mkdf-pli-add-to-cart.mkdf-dark-skin .added_to_cart:hover','.mkdf-pl-holder .mkdf-pli-inner .mkdf-pli-text-inner .mkdf-pli-add-to-cart.mkdf-dark-skin .button','.mkdf-pl-holder .mkdf-pli-inner .mkdf-pli-text-inner .mkdf-pli-add-to-cart.mkdf-dark-skin .button:hover','.mkdf-pl-holder .mkdf-pli-inner .mkdf-pli-text-inner .mkdf-pl-custom-atc-btn a:hover','.mkdf-pl-holder.mkdf-product-info-light .mkdf-pli-inner .mkdf-pli-text-inner .mkdf-pli-category a','.mkdf-pl-holder.mkdf-product-info-light .mkdf-pli-inner .mkdf-pli-text-inner .mkdf-pli-excerpt','.mkdf-pl-holder.mkdf-product-info-light .mkdf-pli-inner .mkdf-pli-text-inner .mkdf-pli-price','.mkdf-pl-holder.mkdf-product-info-light .mkdf-pli-inner .mkdf-pli-text-inner .mkdf-pli-rating','.mkdf-pl-holder.mkdf-product-info-light .mkdf-pli-inner .mkdf-pli-text-inner .mkdf-pli-title','.mkdf-pl-holder.mkdf-product-info-dark .mkdf-pli-inner .mkdf-pli-text-inner .mkdf-pli-category a','.mkdf-pl-holder.mkdf-product-info-dark .mkdf-pli-inner .mkdf-pli-text-inner .mkdf-pli-excerpt','.mkdf-pl-holder.mkdf-product-info-dark .mkdf-pli-inner .mkdf-pli-text-inner .mkdf-pli-price','.mkdf-pl-holder.mkdf-product-info-dark .mkdf-pli-inner .mkdf-pli-text-inner .mkdf-pli-rating','.mkdf-pl-holder.mkdf-product-info-dark .mkdf-pli-inner .mkdf-pli-text-inner .mkdf-pli-title','#yith-quick-view-close','#yith-quick-view-close:hover','#yith-quick-view-content .yith-wcwl-add-button a','#yith-quick-view-content .yith-wcwl-wishlistaddedbrowse a','#yith-quick-view-content .yith-wcwl-wishlistexistsbrowse a','#yith-quick-view-content .yith-wcwl-add-button a:after','#yith-quick-view-content .yith-wcwl-wishlistaddedbrowse a:after','#yith-quick-view-content .yith-wcwl-wishlistexistsbrowse a:after','.mkdf-pl-holder .mkdf-pli-inner .mkdf-pli-text-inner .mkdf-yith-wcqv-holder .yith-wcqv-button:hover','.mkdf-plc-holder .mkdf-plc-item .mkdf-plc-text-inner .mkdf-yith-wcqv-holder .yith-wcqv-button:hover','ul.products>.product .mkdf-pl-inner .mkdf-pl-text-inner .mkdf-yith-wcqv-holder .yith-wcqv-button:hover','#yith-quick-view-modal #yith-quick-view-content .summary .variations .reset_variations','.yith-quick-view.yith-modal #yith-quick-view-content .summary .variations .reset_variations','#yith-quick-view-modal #yith-quick-view-content .summary table.group_table a:hover','.yith-quick-view.yith-modal #yith-quick-view-content .summary table.group_table a:hover','#yith-quick-view-modal #yith-quick-view-content .summary .price','.yith-quick-view.yith-modal #yith-quick-view-content .summary .price','#yith-quick-view-modal #yith-quick-view-content .summary .mkdf-single-product-share-wish .yith-wcwl-wishlistaddedbrowse a:after','#yith-quick-view-modal #yith-quick-view-content .summary .mkdf-single-product-share-wish .yith-wcwl-wishlistexistsbrowse a:after','.yith-quick-view.yith-modal #yith-quick-view-content .summary .mkdf-single-product-share-wish .yith-wcwl-wishlistaddedbrowse a:after','.yith-quick-view.yith-modal #yith-quick-view-content .summary .mkdf-single-product-share-wish .yith-wcwl-wishlistexistsbrowse a:after','#yith-quick-view-modal #yith-quick-view-content .summary .mkdf-single-product-share-wish .mkdf-woo-social-share-holder>span','.yith-quick-view.yith-modal #yith-quick-view-content .summary .mkdf-single-product-share-wish .mkdf-woo-social-share-holder>span','#yith-quick-view-modal #yith-quick-view-content .summary .product_meta>span','.yith-quick-view.yith-modal #yith-quick-view-content .summary .product_meta>span','#yith-quick-view-modal #yith-quick-view-content .summary .product_meta>span a:hover','.yith-quick-view.yith-modal #yith-quick-view-content .summary .product_meta>span a:hover','#yith-quick-view-modal #yith-quick-view-content .summary .yith-wcwl-add-to-wishlist .yith-wcwl-add-button a:hover','#yith-quick-view-modal #yith-quick-view-content .summary .yith-wcwl-add-to-wishlist .yith-wcwl-add-button a:hover:after','#yith-quick-view-modal #yith-quick-view-content .summary .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistaddedbrowse a:hover','#yith-quick-view-modal #yith-quick-view-content .summary .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistaddedbrowse a:hover:after','#yith-quick-view-modal #yith-quick-view-content .summary .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistexistsbrowse a:hover','#yith-quick-view-modal #yith-quick-view-content .summary .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistexistsbrowse a:hover:after','.yith-quick-view.yith-modal #yith-quick-view-content .summary .yith-wcwl-add-to-wishlist .yith-wcwl-add-button a:hover','.yith-quick-view.yith-modal #yith-quick-view-content .summary .yith-wcwl-add-to-wishlist .yith-wcwl-add-button a:hover:after','.yith-quick-view.yith-modal #yith-quick-view-content .summary .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistaddedbrowse a:hover','.yith-quick-view.yith-modal #yith-quick-view-content .summary .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistaddedbrowse a:hover:after','.yith-quick-view.yith-modal #yith-quick-view-content .summary .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistexistsbrowse a:hover','.yith-quick-view.yith-modal #yith-quick-view-content .summary .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistexistsbrowse a:hover:after','#yith-quick-view-modal #yith-quick-view-content .summary p.stock.in-stock','#yith-quick-view-modal #yith-quick-view-content .summary p.stock.out-of-stock','.yith-quick-view.yith-modal #yith-quick-view-content .summary p.stock.in-stock','.yith-quick-view.yith-modal #yith-quick-view-content .summary p.stock.out-of-stock','#yith-quick-view-modal #yith-quick-view-close','.yith-quick-view.yith-modal #yith-quick-view-close','.yith-wcwl-add-button a:hover','.yith-wcwl-wishlistaddedbrowse a:hover','.yith-wcwl-wishlistexistsbrowse a:hover','.yith-wcwl-wishlistaddedbrowse a:after','.yith-wcwl-wishlistexistsbrowse a:after','.woocommerce-wishlist .woocommerce-error>a:hover','.woocommerce-wishlist .woocommerce-info>a:hover','.woocommerce-wishlist .woocommerce-message>a:hover','.woocommerce-wishlist table.wishlist_table tbody tr td.product-remove a','.woocommerce-wishlist table.wishlist_table tbody tr td.product-remove a:hover','.woocommerce-wishlist table.wishlist_table tbody tr td.product-add-to-cart a','.mkdf-single-product-summary .yith-wcwl-add-to-wishlist .yith-wcwl-add-button a:after','.mkdf-single-product-summary .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistaddedbrowse a:after','.mkdf-single-product-summary .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistexistsbrowse a:after','.mkdf-wishlist-widget-holder a','.mkdf-dark-header .mkdf-wishlist-widget-holder a','.mkdf-dark-header .mkdf-wishlist-widget-holder a .mkdf-wishlist-items-number','.mkdf-light-header .mkdf-wishlist-widget-holder a','.mkdf-light-header .mkdf-wishlist-widget-holder a .mkdf-wishlist-items-number');
$woo_background_color_selector = array('.woocommerce-page .mkdf-content .wc-forward:not(.added_to_cart):not(.checkout-button):before','.woocommerce-page .mkdf-content a.button:before','.woocommerce-page .mkdf-content button[type=submit]:not(.mkdf-search-submit):before','div.woocommerce .wc-forward:not(.added_to_cart):not(.checkout-button):before','div.woocommerce a.button:before','div.woocommerce button[type=submit]:not(.mkdf-search-submit):before','.woocommerce-page .mkdf-content input[type=submit]:hover','div.woocommerce input[type=submit]:hover','.woocommerce .mkdf-new-product','.woocommerce .mkdf-out-of-stock','.mkdf-shopping-cart-holder .mkdf-header-cart .mkdf-cart-number','.mkdf-shopping-cart-dropdown .mkdf-cart-bottom:before','.mkdf-shopping-cart-dropdown .mkdf-cart-bottom .mkdf-checkout:before','.mkdf-shopping-cart-dropdown .mkdf-cart-bottom .mkdf-view-cart:before','.widget.woocommerce.widget_shopping_cart .buttons .button','.widget.woocommerce.widget_shopping_cart .buttons .button:hover','.mkdf-product-info .mkdf-pi-add-to-cart .mkdf-btn.mkdf-btn-solid.mkdf-dark-skin','.mkdf-product-info .mkdf-pi-add-to-cart .mkdf-btn.mkdf-btn-solid.mkdf-dark-skin:hover','.mkdf-product-info .mkdf-pi-add-to-cart .mkdf-btn.mkdf-btn-solid.mkdf-white-skin','.mkdf-product-info .mkdf-pi-add-to-cart .mkdf-btn.mkdf-btn-solid.mkdf-white-skin:hover','.mkdf-plc-holder .mkdf-plc-item .mkdf-plc-image-outer .mkdf-plc-image .mkdf-plc-new-product','.mkdf-plc-holder .mkdf-plc-item .mkdf-plc-image-outer .mkdf-plc-image .mkdf-plc-out-of-stock','.mkdf-plc-holder .mkdf-plc-item .mkdf-plc-add-to-cart.mkdf-default-skin .added_to_cart','.mkdf-plc-holder .mkdf-plc-item .mkdf-plc-add-to-cart.mkdf-default-skin .button','.mkdf-plc-holder .mkdf-plc-item .mkdf-plc-add-to-cart.mkdf-dark-skin .added_to_cart','.mkdf-plc-holder .mkdf-plc-item .mkdf-plc-add-to-cart.mkdf-dark-skin .added_to_cart:hover','.mkdf-plc-holder .mkdf-plc-item .mkdf-plc-add-to-cart.mkdf-dark-skin .button','.mkdf-plc-holder .mkdf-plc-item .mkdf-plc-add-to-cart.mkdf-dark-skin .button:hover','.mkdf-plc-holder .mkdf-plc-item .mkdf-plc-add-to-cart.mkdf-default-skin .added_to_cart:hover','.mkdf-plc-holder .mkdf-plc-item .mkdf-plc-add-to-cart.mkdf-default-skin .button:hover','.mkdf-plc-holder .mkdf-plc-item .mkdf-plc-add-to-cart.mkdf-light-skin .added_to_cart','.mkdf-plc-holder .mkdf-plc-item .mkdf-plc-add-to-cart.mkdf-light-skin .added_to_cart:hover','.mkdf-plc-holder .mkdf-plc-item .mkdf-plc-add-to-cart.mkdf-light-skin .button','.mkdf-plc-holder .mkdf-plc-item .mkdf-plc-add-to-cart.mkdf-light-skin .button:hover','.mkdf-plc-holder.mkdf-plc-pag-light-skin .owl-dots .owl-dot span','.mkdf-plc-holder.mkdf-plc-pag-light-skin .owl-dots .owl-dot.active span','.mkdf-plc-holder.mkdf-plc-pag-light-skin .owl-dots .owl-dot:hover span','.mkdf-pl-holder .mkdf-pli-inner .mkdf-pli-image .mkdf-pli-new-product','.mkdf-pl-holder .mkdf-pli-inner .mkdf-pli-image .mkdf-pli-out-of-stock','.mkdf-pl-holder .mkdf-pli-inner .mkdf-pli-text-inner .mkdf-pli-add-to-cart.mkdf-dark-skin .added_to_cart','.mkdf-pl-holder .mkdf-pli-inner .mkdf-pli-text-inner .mkdf-pli-add-to-cart.mkdf-dark-skin .added_to_cart:hover','.mkdf-pl-holder .mkdf-pli-inner .mkdf-pli-text-inner .mkdf-pli-add-to-cart.mkdf-dark-skin .button','.mkdf-pl-holder .mkdf-pli-inner .mkdf-pli-text-inner .mkdf-pli-add-to-cart.mkdf-dark-skin .button:hover','#yith-quick-view-modal #yith-quick-view-content .summary .variations select','.yith-quick-view.yith-modal #yith-quick-view-content .summary .variations select','#yith-quick-view-modal #yith-quick-view-content .summary table.group_table tr','.yith-quick-view.yith-modal #yith-quick-view-content .summary table.group_table tr');
$woo_border_color_selector = array('.woocommerce-page .mkdf-content .wc-forward:not(.added_to_cart):not(.checkout-button)','.woocommerce-page .mkdf-content a.button','.woocommerce-page .mkdf-content button[type=submit]:not(.mkdf-search-submit)','div.woocommerce .wc-forward:not(.added_to_cart):not(.checkout-button)','div.woocommerce a.button','div.woocommerce button[type=submit]:not(.mkdf-search-submit)','.woocommerce-page .mkdf-content input[type=submit]','div.woocommerce input[type=submit]','.mkdf-shopping-cart-dropdown .mkdf-cart-bottom .mkdf-checkout','.mkdf-shopping-cart-dropdown .mkdf-cart-bottom .mkdf-view-cart','.widget.woocommerce.widget_price_filter .price_slider_amount .button','.mkdf-product-info .mkdf-pi-add-to-cart .mkdf-btn.mkdf-btn-solid.mkdf-dark-skin','.mkdf-product-info .mkdf-pi-add-to-cart .mkdf-btn.mkdf-btn-solid.mkdf-dark-skin:hover','.mkdf-product-info .mkdf-pi-add-to-cart .mkdf-btn.mkdf-btn-solid.mkdf-white-skin','.mkdf-product-info .mkdf-pi-add-to-cart .mkdf-btn.mkdf-btn-solid.mkdf-white-skin:hover');
