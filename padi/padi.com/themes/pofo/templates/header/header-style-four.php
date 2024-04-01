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
    $pofo_disable_header_sidebar = pofo_option( 'pofo_disable_header_sidebar', '1' );
    $pofo_header_sidebar = pofo_option( 'pofo_header_sidebar', '' );
    $pofo_disable_header_search = pofo_option( 'pofo_disable_header_search', '1' );
    $pofo_menu_vertical_image = pofo_option( 'pofo_menu_vertical_image', '' );
    $pofo_enable_header_mini_cart = pofo_option( 'pofo_enable_header_mini_cart', '1' );
    $pofo_header_mini_cart_sidebar = pofo_option( 'pofo_header_mini_cart_sidebar', 'pofo-mini-cart' );

    $pofo_header_menu_text_transform = pofo_option( 'pofo_header_menu_text_transform', '' );
    $pofo_header_submenu_text_transform = pofo_option( 'pofo_header_submenu_text_transform', '' );

    // Header menu text transform
    if( !empty( $pofo_header_menu_text_transform ) ) {
        $pofo_featured_array[] = 'header .sidebar-part2 nav.navbar.bootsnav ul > li > a { text-transform: '.str_replace( 'text-', '', $pofo_header_menu_text_transform ).' }';
    }

    // Header submenu text transform
    if( !empty( $pofo_header_submenu_text_transform ) ) {
        $pofo_featured_array[] = 'header .sidebar-part2 nav.navbar.bootsnav ul li ul li a { text-transform: '.str_replace( 'text-', '', $pofo_header_submenu_text_transform ).' }';
    }    

    // Header Color Settings
    $pofo_header_background_color = pofo_option( 'pofo_header_background_color', '' );
    $pofo_menu_text_color = pofo_option( 'pofo_menu_text_color', '' );
    $pofo_menu_hover_text_color = pofo_option( 'pofo_menu_hover_text_color', '' );

    // Header Background Color
    $pofo_header_background_color = !empty( $pofo_header_background_color ) ? ' background-color: '.$pofo_header_background_color.';' : '';
    if( $pofo_header_background_color ) {
        $pofo_featured_array[] = '.sidebar-part2 .right-bg, .sidebar-part2, .sidebar-part2 nav.navbar.bootsnav li.dropdown ul.dropdown-menu:before, .left-nav, .left-nav-sidebar header.site-header > .header-mini-cart .widget_shopping_cart { '.$pofo_header_background_color.' }';
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
        $pofo_featured_array[] = 'header .sidebar-part2 nav.navbar.bootsnav ul > li > a, header #lang_sel a, header #lang_sel a.lang_sel_sel, .sidebar-part2 .header-sidebar-wrap ul li a, .left-nav-sidebar header.site-header > .header-mini-cart .widget_shopping_cart .widget-title:before, header .sidebar-part2 nav.navbar.bootsnav ul > li > a > i.fa-angle-right, .sidebar-part2 .search-box .add-on i, header .sidebar-part2 nav.navbar.bootsnav .navbar-nav > li > a > i { '.$pofo_menu_text_color.$pofo_header_menu_text_font_size.$pofo_header_menu_text_line_height.$pofo_header_menu_text_letter_spacing.' }';
        // Slide Menu Color
        if( $pofo_slide_menu_color ) {
            $pofo_featured_array[] = '.nav-icon span, .sidebar-part2 .right-bg::before, .sidebar-part2::before { '.$pofo_slide_menu_color.' }';
        }
        // Menu Separator Color
        if( $pofo_menu_separator_color ) {
            $pofo_featured_array[] = '.sidebar-part2, .sidebar-part2 nav.navbar.bootsnav li.dropdown ul.dropdown-menu:before  { '.$pofo_menu_separator_color.' }';
        }
        // Icon Font Size Color
        if( $pofo_header_menu_icon_font_size ) {
            $pofo_featured_array[] = 'header #lang_sel a, header #lang_sel a.lang_sel_sel, .sidebar-part2 .header-sidebar-wrap ul li a, .left-nav-sidebar header.site-header > .header-mini-cart .widget_shopping_cart .widget-title:before, header .sidebar-part2 nav.navbar.bootsnav ul > li > a > i.fa-angle-right, .sidebar-part2 .search-box .add-on i, header .sidebar-part2 nav.navbar.bootsnav .navbar-nav > li > a > i { '.$pofo_header_menu_icon_font_size.' }';
        }
    }
    if( $pofo_menu_hover_text_color ) {
        // Menu Hover Color
        $pofo_featured_array[] = 'header .sidebar-part2 nav.navbar.bootsnav ul.nav > li > a:hover, header .sidebar-part2 nav.navbar.bootsnav ul.nav > li.dropdown.on > a, .sidebar-part2 nav.navbar.bootsnav ul.nav > li.active > a, .sidebar-part2 nav.navbar.bootsnav ul.nav > li.current-menu-ancestor > a, .sidebar-part2 nav.navbar.bootsnav ul.nav > li.current-menu-item > a, .sidebar-part2 .header-sidebar-wrap ul li a:hover, header .sidebar-part2 nav.navbar.bootsnav .navbar-nav li:hover > a, .left-nav-sidebar header.site-header > .header-mini-cart .widget_shopping_cart:hover .widget-title:before { '.$pofo_menu_hover_text_color.' }';
        // Menu Slide Icon Hover Color
        if( $pofo_slide_menu_hover_color ) {
            $pofo_featured_array[] = '.nav-icon:hover span, .nav-icon.active span { '.$pofo_slide_menu_hover_color.' }';
        }
    }

    // Header Submenu Color Settings
    $pofo_header_submenu_background_color = pofo_option( 'pofo_header_submenu_background_color', '' );
    $pofo_header_submenu_text_color = pofo_option( 'pofo_header_submenu_text_color', '' );
    $pofo_header_submenu_hover_color = pofo_option( 'pofo_header_submenu_hover_color', '' );
    $pofo_header_third_level_menu_background_color = pofo_option( 'pofo_header_third_level_menu_background_color', '' );

    $pofo_header_submenu_background_color = !empty( $pofo_header_submenu_background_color ) ? ' background-color: '.$pofo_header_submenu_background_color.';' : '';
    $pofo_header_submenu_separator_color = !empty( $pofo_header_submenu_text_color ) ? ' border-color: '.$pofo_header_submenu_text_color.';' : '';
    $pofo_header_submenu_text_color = !empty( $pofo_header_submenu_text_color ) ? ' color: '.$pofo_header_submenu_text_color.';' : '';
    $pofo_header_submenu_hover_separator_color = !empty( $pofo_header_submenu_hover_color ) ? ' border-color: '.$pofo_header_submenu_hover_color.';' : '';
    $pofo_header_submenu_hover_color = !empty( $pofo_header_submenu_hover_color ) ? ' color: '.$pofo_header_submenu_hover_color.';' : '';
    $pofo_header_third_level_menu_background_color = !empty( $pofo_header_third_level_menu_background_color ) ? ' background-color: '.$pofo_header_third_level_menu_background_color.';' : '';
    
    // Header Submenu Text Font Settings
    $pofo_header_submenu_text_font_size = pofo_option( 'pofo_header_submenu_text_font_size', '' );
    $pofo_header_submenu_text_line_height = pofo_option( 'pofo_header_submenu_text_line_height', '' );
    $pofo_header_submenu_text_letter_spacing = pofo_option( 'pofo_header_submenu_text_letter_spacing', '' );
    $pofo_header_submenu_icon_font_size = pofo_option( 'pofo_header_submenu_icon_font_size', '' );

    // Header Submenu Background Color
    if( $pofo_header_submenu_background_color ) {
        //Mega Menu Background Color
        $pofo_featured_array[] = '.sidebar-part2 nav.navbar.bootsnav li.dropdown ul.dropdown-menu::before { '.$pofo_header_submenu_background_color.' }';
    }

    // Header Third Level Menu Background Color
    if( $pofo_header_third_level_menu_background_color ) {
        //Third Level Mega Menu Background Color
        $pofo_featured_array[] = '.sidebar-part2 nav.navbar.bootsnav li.dropdown li.dropdown ul.dropdown-menu::before { '.$pofo_header_third_level_menu_background_color.' }';
    }

    // Header Submenu Separator Color
    if( $pofo_header_submenu_separator_color ) {
        //Submenu Separator Color
        $pofo_featured_array[] = 'header .sidebar-part2 nav.navbar.bootsnav ul li ul li a { '.$pofo_header_submenu_separator_color.' }';
    }
    
    // Header Submenu Text Color
    if( $pofo_header_submenu_text_color || $pofo_header_submenu_text_font_size || $pofo_header_submenu_text_line_height || $pofo_header_submenu_text_letter_spacing || $pofo_header_submenu_icon_font_size ) {

        $pofo_header_submenu_text_font_size = !empty( $pofo_header_submenu_text_font_size ) ? ' font-size: '.$pofo_header_submenu_text_font_size.';' : '';
        $pofo_header_submenu_text_line_height = !empty( $pofo_header_submenu_text_line_height ) ? ' line-height: '.$pofo_header_submenu_text_line_height.';' : '';
        $pofo_header_submenu_text_letter_spacing = !empty( $pofo_header_submenu_text_letter_spacing ) ? ' letter-spacing: '.$pofo_header_submenu_text_letter_spacing.';' : '';
        $pofo_header_submenu_icon_font_size = !empty( $pofo_header_submenu_icon_font_size ) ? ' font-size: '.$pofo_header_submenu_icon_font_size.';' : '';

        //Submenu Text Color & Font Settings
        $pofo_featured_array[] = 'header .sidebar-part2 nav.navbar.bootsnav ul li ul li a, .sidebar-part2 nav.navbar.bootsnav ul.nav li.dropdown ul.dropdown-menu > li > a, header .sidebar-part2 nav.navbar.bootsnav .navbar-nav > li ul > li > a > i, header .sidebar-part2 nav.navbar.bootsnav ul > li > .second-level > li a i.fa-angle-right { '.$pofo_header_submenu_text_color.$pofo_header_submenu_text_font_size.$pofo_header_submenu_text_line_height.$pofo_header_submenu_text_letter_spacing.' }';
        
        // Icon Font Size Color
        if( $pofo_header_submenu_icon_font_size ) {
            $pofo_featured_array[] = 'header .sidebar-part2 nav.navbar.bootsnav .navbar-nav > li ul > li > a > i, header .sidebar-part2 nav.navbar.bootsnav ul > li > .second-level > li a i.fa-angle-right { '.$pofo_header_submenu_icon_font_size.' }';
        }
    }
    
    // Header Submenu Hover Color
    if( $pofo_header_submenu_hover_color ) {
        //Submenu Hover Color
        $pofo_featured_array[] = 'header .sidebar-part2 nav.navbar.bootsnav li.dropdown ul.dropdown-menu > li a:hover, header .sidebar-part2 nav.navbar.bootsnav li.dropdown ul.dropdown-menu > li:hover > a, header .sidebar-part2 nav.navbar.bootsnav li.dropdown ul.dropdown-menu > li.active > a, header .sidebar-part2 nav.navbar.bootsnav li.dropdown ul.dropdown-menu > li.current-menu-item > a, header .sidebar-part2 nav.navbar.bootsnav li.dropdown ul.dropdown-menu > li.current-menu-ancestor > a { '.$pofo_header_submenu_hover_color.' }';
        if( $pofo_header_submenu_hover_separator_color ) {
            //Submenu Hover Separator Color
            $pofo_featured_array[] = 'header .sidebar-part2 nav.navbar.bootsnav li.dropdown ul.dropdown-menu > li a:hover, header .sidebar-part2 nav.navbar.bootsnav li.dropdown ul.dropdown-menu > li:hover > a { '.$pofo_header_submenu_hover_separator_color.' }';
        }
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

        echo '<div class="left-nav">';
            if( $pofo_disable_header_logo == '1' ) {
                echo '<div class="sidebar-part1">';
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
            }
            
            if( ( $pofo_header_menu != 1 ) || is_active_sidebar( $pofo_header_sidebar ) || $pofo_menu_vertical_image || ( $pofo_disable_header_search == '1') ) {

                if( $pofo_header_menu != 1 ) {
                    echo '<div class="sidebar-part2">';
                } else {
                    echo '<div class="sidebar-part2 without-menu">';
                }
                    echo '<div class="sidebar-middle">';
                        echo '<div class="sidebar-middle-menu alt-font font-weight-600">';
                            if( $pofo_header_menu != 1 ) {
                                echo '<nav class="navbar bootsnav alt-font">';
                                    echo '<div id="navbar-menu" class="collapse navbar-collapse no-padding" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">';
                                        $pofo_header_menu_default = array(
                                                        'menu'       => $pofo_header_menu,
                                                        'menu_id'    => '',
                                                        'container'  => 'ul',
                                                        'menu_class' => 'nav navbar-nav margin-80px-bottom',
                                                        'fallback_cb'=> false,
                                                        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s<li><div class="side-left-menu-close close-side"></div></li></ul>',
                                                        'walker'     => new Pofo_Classic_Menu_Walker(),
                                                    );
                                        
                                        wp_nav_menu( $pofo_header_menu_default );
                                    echo '</div>';
                                echo '</nav>';

                            } elseif( has_nav_menu('pofomegamenu') ) {

                                echo '<nav class="navbar bootsnav alt-font">';
                                    echo '<div id="navbar-menu" class="collapse navbar-collapse no-padding" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">';
                                        $pofo_header_menu_default = array(
                                                        'theme_location'  => 'pofomegamenu',
                                                        'menu_id'    => '',
                                                        'container'  => 'ul',
                                                        'menu_class' => 'nav navbar-nav margin-80px-bottom',
                                                        'fallback_cb'=> false,
                                                        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s<li><div class="side-left-menu-close close-side"></div></li></ul>',
                                                        'walker'     => new Pofo_Classic_Menu_Walker(),
                                                    );
                                        
                                        wp_nav_menu( $pofo_header_menu_default );
                                    echo '</div>';
                                echo '</nav>';

                            } else {

                                echo '<nav class="navbar bootsnav alt-font">';
                                    echo '<div id="navbar-menu" class="collapse navbar-collapse no-padding" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">';
                                        $pofo_header_menu_default = array(
                                                        'menu_id'    => '',
                                                        'container'  => 'ul',
                                                        'menu_class' => 'nav navbar-nav margin-80px-bottom',
                                                        'fallback_cb'=> false,
                                                        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s<li><div class="side-left-menu-close close-side"></div></li></ul>',
                                                        'walker'     => new Pofo_Classic_Menu_Walker(),
                                                    );
                                        
                                        wp_nav_menu( $pofo_header_menu_default );
                                    echo '</div>';
                                echo '</nav>';
                            }
                            if( $pofo_disable_header_search == '1' ) {
                                get_search_form();
                            }
                            if ( $pofo_disable_header_sidebar == '1' && is_active_sidebar( $pofo_header_sidebar ) ) {
                                echo '<div class="header-sidebar-wrap">';    
                                    dynamic_sidebar( $pofo_header_sidebar );
                                echo '</div>';
                            }
                            echo '<div class="right-bg header-img">';
                                /* Header Image */
                                if( $pofo_menu_vertical_image ) {
                                    echo wp_get_attachment_image( pofo_get_image_id_by_url( esc_url( $pofo_menu_vertical_image ) ), 'full');
                                }
                            echo '</div>';
                        echo '</div>';
                    echo '</div>';
                echo '</div>';
                echo '<div class="sidebar-part3">';
                    echo '<div class="bottom-menu-icon">';
                        echo '<a href="javascript:void(0);" class="right-menu-button text-extra-dark-gray nav-icon" id="headerShowRightPush">';
                            echo '<span></span>';
                            echo '<span></span>';
                            echo '<span></span>';
                            echo '<span></span>';
                        echo '</a>';
                    echo '</div>';
                echo '</div>';
            }
        echo '</div>';
        echo '<div class="header-over-layer"></div>';
        if ( $pofo_enable_header_mini_cart == '1' && is_active_sidebar( $pofo_header_mini_cart_sidebar ) && class_exists( 'WooCommerce' ) ) {/* if WooCommerce plugin is activated */
            echo '<div class="header-mini-cart">';
                dynamic_sidebar( $pofo_header_mini_cart_sidebar );
            echo '</div>';
        }
    echo '</header>';
    echo '<!-- end header -->';

    /* Global stylesheet */
    do_action( 'pofo_define_global_hook', $pofo_featured_array );