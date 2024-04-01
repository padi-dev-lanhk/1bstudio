<?php

    /* Exit if accessed directly. */
    if ( !defined( 'ABSPATH' ) ) { exit; }

    $pofo_menu_background_attr = $pofo_featured_array = array();
    $pofo_menu_background_style = '';
    
    $pofo_sticky_mini_header = ( get_theme_mod( 'pofo_sticky_mini_header', '0' ) == '1' ) ? ' sticky-mini-header': '';

    $pofo_disable_header_logo = pofo_option( 'pofo_disable_header_logo', '1' );
    $pofo_h1_logo_font_page = pofo_option( 'pofo_h1_logo_font_page', '1' );
    $pofo_logo = pofo_option( 'pofo_logo', '' );
    $pofo_logo_light = pofo_option( 'pofo_logo_light', '' );
    $pofo_logo_ratina = pofo_option( 'pofo_logo_ratina', '' );
    $pofo_logo_light_ratina = pofo_option( 'pofo_logo_light_ratina', '' );
    $pofo_header_container_style = pofo_option( 'pofo_header_container_style', 'container' );
    $pofo_header_menu = pofo_option( 'pofo_header_menu', '1' );
    $pofo_disable_header_copyright = pofo_option( 'pofo_disable_header_copyright', '1' );
    $pofo_disable_header_sidebar = pofo_option( 'pofo_disable_header_sidebar', '1' );
    $pofo_header_sidebar = pofo_option( 'pofo_header_sidebar', '' );
    $pofo_disable_header_search = pofo_option( 'pofo_disable_header_search', '1' );
    $pofo_header_copyright_text = pofo_option( 'pofo_header_copyright_text', '' );
    $pofo_enable_header_mini_cart = pofo_option( 'pofo_enable_header_mini_cart', '1' );
    $pofo_header_mini_cart_sidebar = pofo_option( 'pofo_header_mini_cart_sidebar', 'pofo-mini-cart' );
    
    $pofo_header_menu_text_transform = pofo_option( 'pofo_header_menu_text_transform', '' );
    $pofo_header_submenu_text_transform = pofo_option( 'pofo_header_submenu_text_transform', '' );

    // Header menu text transform
    if( !empty( $pofo_header_menu_text_transform ) ) {
        $pofo_featured_array[] = 'nav.navbar.bootsnav ul.nav > li > a { text-transform: '.str_replace( 'text-', '', $pofo_header_menu_text_transform ).' }';
    }

    // Header submenu text transform
    if( !empty( $pofo_header_submenu_text_transform ) ) {
        $pofo_featured_array[] = '.nav.navbar-left-sidebar li a, nav.navbar.bootsnav.navbar-left-sidebar ul.nav > li > a { text-transform: '.str_replace( 'text-', '', $pofo_header_submenu_text_transform ).' }';
    }    

    // Header Color Settings
    $pofo_header_background_color = pofo_option( 'pofo_header_background_color', '' );
    $pofo_menu_text_color = pofo_option( 'pofo_menu_text_color', '' );
    $pofo_menu_hover_text_color = pofo_option( 'pofo_menu_hover_text_color', '' );

    // Header Background Color
    $pofo_header_background_color = !empty( $pofo_header_background_color ) ? ' background-color: '.$pofo_header_background_color.';' : '';
    if( $pofo_header_background_color ) {
        $pofo_featured_array[] = 'nav.navbar.sidebar-nav, nav.navbar.sidebar-nav .search-box input[type="text"], nav.navbar.sidebar-nav .search-box input[type="search"], nav.navbar.sidebar-nav .search-box input[type="email"], nav.navbar.sidebar-nav .search-box .add-on .input-group-btn > .btn, nav.navbar.sidebar-nav.sidebar-nav-style-1.mobile-menu .sidenav-header, header.site-header > .header-mini-cart .widget_shopping_cart { '.$pofo_header_background_color.' }';
    }
    
    // Header Menu Text Color
    $pofo_slide_menu_color = !empty( $pofo_menu_text_color ) ? ' background-color: '.$pofo_menu_text_color.';' : '';
    $pofo_menu_separator_color = !empty( $pofo_menu_text_color ) ? ' border-color: '.$pofo_menu_text_color.';' : '';
    $pofo_menu_text_color = !empty( $pofo_menu_text_color ) ? ' color: '.$pofo_menu_text_color.';' : '';
    // Header Menu Hover Text Color
    $pofo_slide_menu_hover_color = !empty( $pofo_menu_hover_text_color ) ? ' background-color: '.$pofo_menu_hover_text_color.';' : '';
    $pofo_menu_hover_text_color = !empty( $pofo_menu_hover_text_color ) ? ' color: '.$pofo_menu_hover_text_color.';' : '';
    
    // Header Font Settings
    $pofo_header_menu_text_font_size = pofo_option( 'pofo_header_menu_text_font_size', '' );
    $pofo_header_menu_text_line_height = pofo_option( 'pofo_header_menu_text_line_height', '' );
    $pofo_header_menu_text_letter_spacing = pofo_option( 'pofo_header_menu_text_letter_spacing', '' );
    $pofo_header_menu_icon_font_size = pofo_option( 'pofo_header_menu_icon_font_size', '' );

    if( $pofo_menu_text_color || $pofo_header_menu_text_font_size || $pofo_header_menu_text_line_height || $pofo_header_menu_text_letter_spacing || $pofo_header_menu_icon_font_size ) {

        $pofo_header_menu_text_font_size = !empty( $pofo_header_menu_text_font_size ) ? ' font-size: '.$pofo_header_menu_text_font_size.';' : '';
        $pofo_header_menu_text_line_height = !empty( $pofo_header_menu_text_line_height ) ? ' line-height: '.$pofo_header_menu_text_line_height.';' : '';
        $pofo_header_menu_text_letter_spacing = !empty( $pofo_header_menu_text_letter_spacing ) ? ' letter-spacing: '.$pofo_header_menu_text_letter_spacing.';' : '';
        $pofo_header_menu_icon_font_size = !empty( $pofo_header_menu_icon_font_size ) ? ' font-size: '.$pofo_header_menu_icon_font_size.';' : '';

        // Menu Color & Font Settings
        $pofo_featured_array[] = 'nav.navbar.bootsnav.sidebar-nav .navbar-left-sidebar > li > a, nav.navbar.sidebar-nav .search-box input[type="text"], nav.navbar.sidebar-nav .search-box input[type="search"], nav.navbar.sidebar-nav .search-box input[type="email"], .sidebar-nav-style-1 .copyright-wrap, .sidebar-nav-style-1 .copyright-wrap a, .sidebar-nav-style-1 .header-sidebar-wrap ul li a, nav.navbar.bootsnav.sidebar-nav .search-box .add-on i, header.site-header > .header-mini-cart .widget_shopping_cart .widget-title:before, nav.navbar.bootsnav.sidebar-nav .nav.navbar-left-sidebar > li.dropdown > a > i.fa-angle-right, nav.navbar.bootsnav.sidebar-nav .navbar-nav > li > a > i { '.$pofo_menu_text_color.$pofo_header_menu_text_font_size.$pofo_header_menu_text_line_height.$pofo_header_menu_text_letter_spacing.' }';
        // Search Placeholder Color
        $pofo_featured_array[] = 'nav.navbar .search-box input[type="text"]::-webkit-input-placeholder { '.$pofo_menu_text_color.' }';
        $pofo_featured_array[] = 'nav.navbar .search-box input[type="text"]::-moz-placeholder { '.$pofo_menu_text_color.' }';
        $pofo_featured_array[] = 'nav.navbar .search-box input[type="text"]::-ms-input-placeholder { '.$pofo_menu_text_color.' }';
        $pofo_featured_array[] = 'nav.navbar .search-box input[type="text"]::-o-placeholder { '.$pofo_menu_text_color.' }';
        // Slide Menu Color
        if( $pofo_slide_menu_color ) {
            $pofo_featured_array[] = '.mobile-menu .mobile-toggle span { '.$pofo_slide_menu_color.' }';
        }
        // Menu Separator Color
        if( $pofo_menu_separator_color ) {
            $pofo_featured_array[] = 'nav.navbar.bootsnav.sidebar-nav .navbar-left-sidebar > li > a, nav.navbar.sidebar-nav .search-box input[type="text"], nav.navbar.sidebar-nav .search-box input[type="search"], nav.navbar.sidebar-nav .search-box input[type="email"], nav.navbar.sidebar-nav .search-box .add-on .input-group-btn > .btn, nav.navbar.sidebar-nav .copyright-wrap, nav.sidebar-nav-style-1.navbar.bootsnav ul.nav > li:last-child { '.$pofo_menu_separator_color.' }';
        }
        // Icon Font Size Color
        if( $pofo_header_menu_icon_font_size ) {
            $pofo_featured_array[] = '.sidebar-nav-style-1 .header-sidebar-wrap ul li a, nav.navbar.bootsnav.sidebar-nav .search-box .add-on i, header.site-header > .header-mini-cart .widget_shopping_cart .widget-title:before, nav.navbar.bootsnav.sidebar-nav .nav.navbar-left-sidebar > li.dropdown > a > i.fa-angle-right, nav.navbar.bootsnav.sidebar-nav .navbar-nav > li > a > i { '.$pofo_header_menu_icon_font_size.' }';
        }
    }
    if( $pofo_menu_hover_text_color ) {
        // Menu Hover Color
        $pofo_featured_array[] = 'nav.navbar.bootsnav.sidebar-nav .navbar-left-sidebar > li.on > a, nav.navbar.bootsnav.sidebar-nav .navbar-left-sidebar > li.dropdown.on > a, nav.navbar.bootsnav.sidebar-nav .navbar-left-sidebar > li > a:hover, nav.navbar.bootsnav.sidebar-nav .navbar-left-sidebar > li.current-menu-ancestor > a, nav.navbar.bootsnav.sidebar-nav .navbar-left-sidebar > li.current-menu-item > a, .sidebar-nav-style-1 .header-sidebar-wrap ul li a:hover, .sidebar-nav-style-1 .copyright-wrap a:hover, header nav.navbar .navbar-nav > li.dropdown.on > a, header nav.navbar.bootsnav ul.nav > li.dropdown.on > a, header.site-header > .header-mini-cart .widget_shopping_cart:hover .widget-title:before { '.$pofo_menu_hover_text_color.' }';
    }

    // Header Submenu Color Settings
    $pofo_header_submenu_background_color = pofo_option( 'pofo_header_submenu_background_color', '' );
    $pofo_header_submenu_text_color = pofo_option( 'pofo_header_submenu_text_color', '' );
    $pofo_header_submenu_hover_color = pofo_option( 'pofo_header_submenu_hover_color', '' );
    $pofo_header_third_level_menu_background_color = pofo_option( 'pofo_header_third_level_menu_background_color', '' );

    $pofo_header_submenu_background_color = !empty( $pofo_header_submenu_background_color ) ? ' background-color: '.$pofo_header_submenu_background_color.';' : '';
    $pofo_header_submenu_separator_color = !empty( $pofo_header_submenu_text_color ) ? ' border-color: '.$pofo_header_submenu_text_color.';' : '';
    $pofo_header_submenu_text_color = !empty( $pofo_header_submenu_text_color ) ? ' color: '.$pofo_header_submenu_text_color.';' : '';
    $pofo_header_submenu_hover_color = !empty( $pofo_header_submenu_hover_color ) ? ' color: '.$pofo_header_submenu_hover_color.';' : '';
    $pofo_header_third_level_menu_background_color = !empty( $pofo_header_third_level_menu_background_color ) ? ' background-color: '.$pofo_header_third_level_menu_background_color.';' : '';
    
    // Header Submenu Text Font Settings
    $pofo_header_submenu_text_font_size = pofo_option( 'pofo_header_submenu_text_font_size', '' );
    $pofo_header_submenu_text_line_height = pofo_option( 'pofo_header_submenu_text_line_height', '' );
    $pofo_header_submenu_text_letter_spacing = pofo_option( 'pofo_header_submenu_text_letter_spacing', '' );
    $pofo_header_submenu_icon_font_size = pofo_option( 'pofo_header_submenu_icon_font_size', '' );

    // Header Submenu Background Color
    if( $pofo_header_submenu_background_color ) {
        //Submenu Background Color
        $pofo_featured_array[] = '.sidebar-nav-style-1 .dropdown.on .second-level { '.$pofo_header_submenu_background_color.' }';
    }

    // Header Submenu Third Level Background Color
    if( $pofo_header_third_level_menu_background_color ) {
        //Submenu Third Level Background Color
        $pofo_featured_array[] = '.sidebar-nav-style-1 .dropdown.on .third-level { '.$pofo_header_third_level_menu_background_color.' }';
    }

    // Header Submenu Separator Color
    if( $pofo_header_submenu_separator_color ) {
        //Mega Menu Heading Color
        //.nav.navbar-left-sidebar li a, 
        $pofo_featured_array[] = 'nav.navbar.bootsnav.navbar-left-sidebar ul.nav > li > a, nav.sidebar-nav-style-1.navbar.bootsnav li.dropdown ul.dropdown-menu > li a:hover, nav.sidebar-nav-style-1.navbar.bootsnav li.dropdown ul.dropdown-menu > li:hover > a, nav.navbar.bootsnav.sidebar-nav ul.nav li.dropdown.open ul.dropdown-menu > li > a { '.$pofo_header_submenu_separator_color.' }';
    }
    
    // Header Submenu Text Color
    if( $pofo_header_submenu_text_color || $pofo_header_submenu_text_font_size || $pofo_header_submenu_text_line_height || $pofo_header_submenu_text_letter_spacing || $pofo_header_submenu_icon_font_size ) {

        $pofo_header_submenu_text_font_size = !empty( $pofo_header_submenu_text_font_size ) ? ' font-size: '.$pofo_header_submenu_text_font_size.';' : '';
        $pofo_header_submenu_text_line_height = !empty( $pofo_header_submenu_text_line_height ) ? ' line-height: '.$pofo_header_submenu_text_line_height.';' : '';
        $pofo_header_submenu_text_letter_spacing = !empty( $pofo_header_submenu_text_letter_spacing ) ? ' letter-spacing: '.$pofo_header_submenu_text_letter_spacing.';' : '';
        $pofo_header_submenu_icon_font_size = !empty( $pofo_header_submenu_icon_font_size ) ? ' font-size: '.$pofo_header_submenu_icon_font_size.';' : '';

        //Submenu Text Color & Font Settings
        $pofo_featured_array[] = 'nav.navbar.bootsnav.navbar-left-sidebar ul.nav > li > a, nav.navbar.bootsnav ul.nav li.dropdown ul.dropdown-menu > li > a, nav.navbar.bootsnav.sidebar-nav .navbar-nav > li ul > li > a > i { '.$pofo_header_submenu_text_color.$pofo_header_submenu_text_font_size.$pofo_header_submenu_text_line_height.$pofo_header_submenu_text_letter_spacing.' }';

        // Icon Font Size Color
        if( $pofo_header_submenu_icon_font_size ) {
            $pofo_featured_array[] = 'nav.navbar.bootsnav.sidebar-nav .navbar-nav > li ul > li > a > i { '.$pofo_header_submenu_icon_font_size.' }';
        }
    }
    
    // Header Submenu Hover Color
    if( $pofo_header_submenu_hover_color ) {
        //Submenu Hover Color
        $pofo_featured_array[] = 'nav.navbar.bootsnav.sidebar-nav ul.nav.navbar-left-sidebar li.dropdown ul.dropdown-menu li > a:hover, nav.navbar.bootsnav.sidebar-nav ul.nav.navbar-left-sidebar li.dropdown ul.dropdown-menu li:hover > a, nav.navbar.bootsnav.sidebar-nav ul.nav.navbar-left-sidebar li.dropdown ul.dropdown-menu li.active > a, nav.navbar.bootsnav.sidebar-nav ul.nav.navbar-left-sidebar li.dropdown ul.dropdown-menu li.current-menu-item > a, nav.navbar.bootsnav.sidebar-nav ul.nav.navbar-left-sidebar li.dropdown ul.dropdown-menu li.current-menu-ancestor > a { '.$pofo_header_submenu_hover_color.' }';
    }

    /* Check mini header status */
    $pofo_mini_header_class = '';
    
    if( pofo_check_mini_header_enable() ) {
        $pofo_mini_header_class .= ' header-with-topbar'.$pofo_sticky_mini_header;
    }
    
    echo '<!-- header -->';
    echo '<header id="masthead" class="site-header '.esc_attr( $pofo_mini_header_class ).'" itemscope="itemscope" itemtype="http://schema.org/WPHeader">';
    
    if( pofo_check_mini_header_enable() ) {
        get_template_part( 'templates/header/mini', 'header' );
    }

        echo '<!-- navigation -->';
        echo '<nav class="navbar no-margin-bottom bootsnav alt-font bg-white sidebar-nav sidebar-nav-style-1 header-img">';
            
            echo '<div class="col-md-12 col-sm-12 col-xs-12 sidenav-header">';

                if( $pofo_disable_header_logo == '1' ) {
                    echo '<!-- logo -->';
                    echo '<div class="logo-holder">';

                        if( is_front_page() && $pofo_h1_logo_font_page == '1' ) {
                            echo '<h1>';
                        }
                        if( $pofo_logo ) {
                            if( $pofo_logo_ratina ) {
                                if( $pofo_logo ) {
                                    echo '<a href="'.esc_url( home_url("/") ).'" title="'.get_bloginfo("name").'" class="logo-light display-inline-block">';
                                        echo '<img class="logo" src="'.esc_url( $pofo_logo ).'" alt="'.get_bloginfo("name").'">';
                                        echo '<img class="retina-logo" src="'.esc_url( $pofo_logo_ratina ).'" alt="'.get_bloginfo("name").'">';
                                    echo '</a>';
                                }
                            } else {
                                if( $pofo_logo ) {
                                    echo '<a href="'.esc_url( home_url("/") ).'" title="'.get_bloginfo("name").'" class="logo-light">';
                                        echo '<img class="logo" src="'.esc_url( $pofo_logo ).'" alt="'.get_bloginfo("name").'">';
                                        echo '<img class="retina-logo" src="'.esc_url( $pofo_logo ).'" alt="'.get_bloginfo("name").'">';
                                    echo '</a>';
                                }
                            }

                        } else {
                            echo '<span class="site-title"><a href="'.esc_url( home_url("/") ).'" title="'.get_bloginfo("name").'">'.get_bloginfo( "name" ).'</a></span>';
                        }
                        if( is_front_page() && $pofo_h1_logo_font_page == '1' ) {
                            echo '</h1>';
                        }
                    echo '</div>';
                    echo '<!-- end logo -->';
                }

                echo '<button class="navbar-toggle mobile-toggle" type="button" id="mobileToggleSidenav">';
                    echo '<span></span>';
                    echo '<span></span>';
                    echo '<span></span>';
                echo '</button>';
            echo '</div>';

            if( $pofo_header_menu != 1 ) {
                echo '<div class="col-md-12 col-sm-12 col-xs-12 no-padding-lr">';
                    echo '<div id="navbar-menu" class="collapse navbar-collapse no-padding" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">';

                        $pofo_header_menu_default = array(
                                                        'menu'       => $pofo_header_menu,
                                                        'menu_id'    => '',
                                                        'container'  => 'ul',
                                                        'menu_class' => 'nav navbar-nav navbar-left-sidebar font-weight-500',
                                                        'fallback_cb'=> false,
                                                        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s<li><div class="side-left-menu-close close-side"></div></li></ul>',
                                                        'walker'     => new Pofo_Classic_Menu_Walker(),
                                                    );

                        wp_nav_menu( $pofo_header_menu_default );

                    echo '</div>';
                echo '</div>';

            } elseif( has_nav_menu('pofomegamenu') ) {

                echo '<div class="col-md-12 col-sm-12 col-xs-12 no-padding-lr">';
                    echo '<div id="navbar-menu" class="collapse navbar-collapse no-padding" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">';

                        $pofo_header_menu_default = array(
                                                        'theme_location'  => 'pofomegamenu',
                                                        'menu_id'    => '',
                                                        'container'  => 'ul',
                                                        'menu_class' => 'nav navbar-nav navbar-left-sidebar font-weight-500',
                                                        'fallback_cb'=> false,
                                                        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s<li><div class="side-left-menu-close close-side"></div></li></ul>',
                                                        'walker'     => new Pofo_Classic_Menu_Walker(),
                                                    );

                        wp_nav_menu( $pofo_header_menu_default );

                    echo '</div>';
                echo '</div>';
                
            } else {

                echo '<div class="col-md-12 col-sm-12 col-xs-12 no-padding-lr">';
                    echo '<div id="navbar-menu" class="collapse navbar-collapse no-padding" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">';

                        $pofo_header_menu_default = array(
                                                        'menu_id'    => '',
                                                        'container'  => 'ul',
                                                        'menu_class' => 'nav navbar-nav navbar-left-sidebar font-weight-500',
                                                        'fallback_cb'=> false,
                                                        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s<li><div class="side-left-menu-close close-side"></div></li></ul>',
                                                        'walker'     => new Pofo_Classic_Menu_Walker(),
                                                    );

                        wp_nav_menu( $pofo_header_menu_default );

                    echo '</div>';
                echo '</div>';
            }
            echo '<div class="col-md-12 position-absolute top-auto bottom-0 left-0 width-100 padding-20px-bottom xs-text-center xs-padding-15px-bottom">';
                echo '<div class="footer-holder">';
                    if( $pofo_disable_header_search == '1' ) {
                        get_search_form();
                    }
                    if ( $pofo_disable_header_sidebar == '1' && is_active_sidebar( $pofo_header_sidebar ) ) {
                        echo '<div class="header-sidebar-wrap margin-eleven-bottom padding-eight-top xs-padding-15px-top xs-margin-15px-bottom sm-text-center">';    
                            dynamic_sidebar( $pofo_header_sidebar );
                        echo '</div>';
                    }
                    if( $pofo_disable_header_copyright == '1' && $pofo_header_copyright_text ) {
                        echo '<div class="copyright-wrap text-medium-gray text-extra-small border-top border-color-extra-light-gray padding-twelve-top xs-padding-15px-top pofo-copyright-text">';
                            echo pofo_sanitize_textarea( $pofo_header_copyright_text );
                        echo '</div>';
                    }
                echo '</div>';
            echo '</div>';
        echo '</nav>';
        echo '<!-- end navigation -->';
        if ( $pofo_enable_header_mini_cart == '1' && is_active_sidebar( $pofo_header_mini_cart_sidebar ) && class_exists( 'WooCommerce' ) ) {/* if WooCommerce plugin is activated */
            echo '<div class="header-mini-cart">';
                dynamic_sidebar( $pofo_header_mini_cart_sidebar );
            echo '</div>';
        }
    echo '</header>';
    echo '<!-- end header -->';

    /* Global stylesheet */
    do_action( 'pofo_define_global_hook', $pofo_featured_array );