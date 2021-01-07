<?php
/**
 * Header Style Fifteen Template
 *
 * @package vio
 */

?>

<!-- wraper_header -->
<header class="wraper_header style-fifteen">
	<!-- wraper_header_top -->
    <div class="wraper_header_top visible-lg visible-md visible-sm hidden-xs">
		<div class="container">
			<!-- header_top -->
			<div class="row header_top">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-left">
					<!-- header_top_item -->
					<div class="header_top_item">
						<!-- header-contact -->
						<ul class="header-contact">
						    <?php if ( ! empty( vio_global_var( 'header_fifteen_header_top_note', '', false ) ) ) : ?>
						        <li class="note"><?php echo wp_kses_post( vio_global_var( 'header_fifteen_header_top_note', '', false ) ); ?></li>
						    <?php endif; ?>
					    </ul>
					    <!-- header-contact -->
					</div>
					<!-- header_top_item -->
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-right">
					<!-- header_top_item -->
					<div class="header_top_item">
					    <!-- header-calltoaction -->
        				<div class="header-calltoaction">
        				    <?php if ( true == vio_global_var( 'header_fifteen_button_one_display', '', false ) ) : ?>
        				        <a class="btn button-one" href="<?php echo wp_kses_post( vio_global_var( 'header_fifteen_button_one_link', '', false ) ); ?>"><?php echo wp_kses_post( vio_global_var( 'header_fifteen_button_one_text', '', false ) ); ?></a>
        				    <?php endif; ?>
        				    <?php if ( true == vio_global_var( 'header_fifteen_button_two_display', '', false ) ) : ?>
        				        <a class="btn button-two" href="<?php echo wp_kses_post( vio_global_var( 'header_fifteen_button_two_link', '', false ) ); ?>"><?php echo wp_kses_post( vio_global_var( 'header_fifteen_button_two_text', '', false ) ); ?></a>
        				    <?php endif; ?>
        			    </div>
        			    <!-- header-calltoaction -->
					</div>
					<!-- header_top_item -->
				</div>
			</div>
			<!-- header_top -->
		</div>
	</div>
	<!-- wraper_header_top -->
	<!-- wraper_header_main -->
	<?php if ( true == vio_global_var( 'header_fifteen_sticky', '', false ) ) { ?>
	    <div data-delay="<?php echo esc_attr( vio_global_var( 'header_fifteen_sticky_delay', '', false ) ); ?>" class="wraper_header_main radiantthemes-sticky-style-<?php echo esc_attr( vio_global_var( 'header_fifteen_sticky_style', '', false ) ); ?>">
	<?php } else { ?>
		<div class="wraper_header_main">
	<?php } ?>
		<div class="container">
			<!-- header_main -->
			<div class="header_main">
				<?php if ( vio_global_var( 'header_fifteen_logo', 'url', true ) ) { ?>
					<!-- brand-logo -->
					<div class="brand-logo radiantthemes-retina">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( vio_global_var( 'header_fifteen_logo', 'url', true ) ); ?>" alt="<?php echo esc_attr( vio_global_var( 'header_fifteen_logo', 'alt', true ) ); ?>"></a>
					</div>
					<!-- brand-logo -->
				<?php } ?>
				<!-- header-responsive-nav -->
				<div class="header-responsive-nav hidden-lg hidden-md visible-sm visible-xs"><span class="ti-menu"></span></div>
				<!-- header-responsive-nav -->
			    <!-- header_main_action -->
				<div class="header_main_action">
					<ul>
						<?php if ( true == vio_global_var( 'header_fifteen_search_display', '', false ) ) : ?>
                            <li class="header-slideout-searchbar">
                                <div class="header-slideout-searchbar-holder">
                                    <!-- header-slideout-searchbar-icon -->
                                    <div class="header-slideout-searchbar-icon"><span class="ti-search"></span></div>
                                    <!-- header-slideout-searchbar-icon -->
                                    <!-- header-slideout-searchbar-box -->
                                    <form class="header-slideout-searchbar-box" role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                                        <div class="form-row">
        						            <input type="search" placeholder="<?php echo esc_attr__( 'Search...', 'vio' ); ?>" value="" name="s" required>
        						            <button type="submit"><span class="ti-search"></span></button>
        						        </div>
            						</form>
            						<!-- header-slideout-searchbar-box -->
        						</div>
                            </li>
						<?php endif; ?>
					</ul>
				</div>
				<!-- header_main_action -->
				<!-- nav -->
				<nav class="nav visible-lg visible-md hidden-sm hidden-xs">
					<?php
					if ( true == vio_global_var( 'header_fifteen_menu_singlepagemode', '', false ) ) {
    					wp_nav_menu(
                            array(
                                'theme_location'    => 'top',
                                'fallback_cb'       => false,
                                'items_wrap'        => '<ul id="%1$s" class="%2$s single-page-mode">%3$s</ul>',
                            )
                        );
    				} else {
    				    wp_nav_menu(
                            array(
                                'theme_location' => 'top',
                                'fallback_cb'    => false,
                            )
                        );
        		    } ?>
				</nav>
				<!-- nav -->
				<div class="clearfix"></div>
			</div>
			<!-- header_main -->
		</div>
	</div>
	<!-- wraper_header_main -->
</header>
<!-- wraper_header -->

<!-- mobile-menu -->
<div class="mobile-menu hidden">
	<!-- mobile-menu-main -->
	<div class="mobile-menu-main">
		<!-- mobile-menu-close -->
		<div class="mobile-menu-close">
			<i class="fa fa-times"></i>
		</div>
		<!-- mobile-menu-close -->
		<!-- mobile-menu-nav -->
		<nav class="mobile-menu-nav">
            <?php
            if ( true == vio_global_var( 'header_fifteen_menu_singlepagemode', '', false ) ) {
				wp_nav_menu(
                    array(
                        'theme_location'    => 'top',
                        'fallback_cb'       => false,
                        'items_wrap'        => '<ul id="%1$s" class="%2$s single-page-mode">%3$s</ul>',
                    )
                );
			} else {
			    wp_nav_menu(
                    array(
                        'theme_location' => 'top',
                        'fallback_cb'    => false,
                    )
                );
		    } ?>
		</nav>
		<!-- mobile-menu-nav -->
	</div>
	<!-- mobile-menu-main -->
</div>
<!-- mobile-menu -->
