<?php

    /* Exit if accessed directly. */
    if ( !defined( 'ABSPATH' ) ) { exit; }

    $pofo_menu_background_attr = $pofo_featured_array = array();
    $pofo_menu_background_attr = array();
    $pofo_menu_background_style = $pofo_menu_extra_class = $pofo_menu_center_class = $pofo_logo_class = $pofo_menu_class = $pofo_search_class = $pofo_pull_right = $pofo_menu_ul_class = '';

    $pofo_sticky_mini_header = ( get_theme_mod( 'pofo_sticky_mini_header', '0' ) == '1' ) ? ' sticky-mini-header': '';

    $pofo_search_placeholder_text = get_theme_mod( 'pofo_search_placeholder_text', 'Enter your keywords...' );
    $pofo_disable_header_logo = pofo_option( 'pofo_disable_header_logo', '1' );
    $pofo_h1_logo_font_page = pofo_option( 'pofo_h1_logo_font_page', '1' );
    $pofo_logo = pofo_option( 'pofo_logo', '' );
    $pofo_logo_light = pofo_option( 'pofo_logo_light', '' );
    $pofo_logo_ratina = pofo_option( 'pofo_logo_ratina', '' );
    $pofo_logo_light_ratina = pofo_option( 'pofo_logo_light_ratina', '' );
    $pofo_header_nav_type = pofo_option( 'pofo_header_nav_type', 'navbar-top' );
    $pofo_menu_position_center = pofo_option( 'pofo_menu_position_center', '0' );
    $pofo_header_container_style = pofo_option( 'pofo_header_container_style', 'container' );
    $pofo_header_menu = pofo_option( 'pofo_header_menu', '' );
    $pofo_header_secondary_menu = pofo_option( 'pofo_header_secondary_menu', '' );
    $pofo_logo_position = pofo_option( 'pofo_logo_position', 'left' );
    $pofo_disable_header_search = pofo_option( 'pofo_disable_header_search', '1' );
    $pofo_disable_header_sidebar = pofo_option( 'pofo_disable_header_sidebar', '1' );
    $pofo_header_sidebar = pofo_option( 'pofo_header_sidebar', '' );
    $pofo_disable_slide_menu = pofo_option( 'pofo_disable_slide_menu', '0' );
    $pofo_slide_menu_sidebar = pofo_option( 'pofo_slide_menu_sidebar', '' );
    $pofo_enable_header_mini_cart = pofo_option( 'pofo_enable_header_mini_cart', '1' );
    $pofo_header_mini_cart_sidebar = pofo_option( 'pofo_header_mini_cart_sidebar', 'pofo-mini-cart' );
    
    $pofo_header_nav_type = ( $pofo_header_nav_type ) ? ' '.$pofo_header_nav_type : '';

    $pofo_header_menu_text_transform = pofo_option( 'pofo_header_menu_text_transform', '' );
    $pofo_header_submenu_heading_text_transform = pofo_option( 'pofo_header_submenu_heading_text_transform', '' );
    $pofo_header_submenu_text_transform = pofo_option( 'pofo_header_submenu_text_transform', '' );

    // Header menu text transform
    if( !empty( $pofo_header_menu_text_transform ) ) {
        $pofo_featured_array[] = 'header nav .navbar-nav > li > a { text-transform: '.str_replace( 'text-', '', $pofo_header_menu_text_transform ).' }';
    }

    // Heading text transform
    if( !empty( $pofo_header_submenu_heading_text_transform ) ) {
        $pofo_featured_array[] = 'nav.navbar.bootsnav li.dropdown .mega-menu-full > ul li a.dropdown-header, .full-width-pull-menu .dropdown ul li.menu-item-has-children > a { text-transform: '.str_replace( 'text-', '', $pofo_header_submenu_heading_text_transform ).' }';
    }    

    // Header submenu text transform
    if( !empty( $pofo_header_submenu_text_transform ) ) {
        $pofo_featured_array[] = 'nav.navbar.bootsnav li.dropdown .mega-menu-full > ul li a { text-transform: '.str_replace( 'text-', '', $pofo_header_submenu_text_transform ).' }';
    }    

    // Header Color Settings
    $pofo_header_background_color = pofo_option( 'pofo_header_background_color', '' );
    $pofo_menu_text_color = pofo_option( 'pofo_menu_text_color', '' );
    $pofo_menu_hover_text_color = pofo_option( 'pofo_menu_hover_text_color', '' );

    // Header Background Color
    $pofo_header_background_color = !empty( $pofo_header_background_color ) ? ' background-color: '.$pofo_header_background_color.';' : '';
    if( $pofo_header_background_color ) {
        $pofo_featured_array[] = 'header nav.navbar-default, header nav.navbar.bootsnav { '.$pofo_header_background_color.' }';
    }
    
    // Header Menu Text Color
    $pofo_slide_menu_color = !empty( $pofo_menu_text_color ) ? ' background-color: '.$pofo_menu_text_color.';' : '';
    $pofo_menu_separator_color = !empty( $pofo_menu_text_color ) ? ' border-color: '.pofo_hex2rgb( $pofo_menu_text_color ).';' : '';
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
        $pofo_featured_array[] = 'header nav.navbar.bootsnav ul.nav > li > a, header .header-social-icon a, header .header-social-icon ul li a, header .header-searchbar a, header nav.navbar .header-menu-button a, header nav.navbar .header-mini-cart .widget-title:before, header #lang_sel a, header #lang_sel a.lang_sel_sel, header .navbar-nav > li.dropdown > i, header nav.navbar.bootsnav .navbar-nav > li > a > i { '.$pofo_menu_text_color.$pofo_header_menu_text_font_size.$pofo_header_menu_text_line_height.$pofo_header_menu_text_letter_spacing.' }';
        // Slide Menu Color
        if( $pofo_slide_menu_color ) {
            $pofo_featured_array[] = 'header nav.navbar .header-menu-button span, header nav.navbar .mobile-toggle span, header nav.navbar .navbar-toggle .icon-bar { '.$pofo_slide_menu_color.' }';
        }
        // Menu Separator Color
        if( $pofo_menu_separator_color ) {
            $pofo_featured_array[] = 'header .header-searchbar, header .header-social-icon, header .header-menu-button, header.sticky .header-searchbar, header.sticky .header-social-icon, header .widget_shopping_cart { '.$pofo_menu_separator_color.' }';
        }
        // Icon Font Size Color
        if( $pofo_header_menu_icon_font_size ) {
            $pofo_featured_array[] = 'header .header-social-icon a, header .header-searchbar a, header nav.navbar .header-menu-button a, header nav.navbar .header-mini-cart .widget-title:before, header #lang_sel a, header #lang_sel a.lang_sel_sel, header .navbar-nav > li.dropdown > i, header nav.navbar.bootsnav .navbar-nav > li > a > i { '.$pofo_header_menu_icon_font_size.' }';
        }
    }
    if( $pofo_menu_hover_text_color ) {
        // Menu Hover Color
        $pofo_featured_array[] = 'header nav.navbar.bootsnav ul.nav > li.current-menu-item > a, header nav.navbar.bootsnav ul.nav > li.current-menu-ancestor > a, header nav.navbar.bootsnav ul.nav > li > a:hover, header nav.navbar.bootsnav .header-social-icon a:hover, header nav.navbar.bootsnav .header-searchbar a:hover, header nav.navbar .header-menu-button a:hover, header nav.navbar .header-mini-cart .widget-title:hover:before, header #lang_sel a.lang_sel_sel:hover, header nav.navbar.bootsnav ul.nav > li.dropdown.on > a, .navbar-nav > li a.active, header nav.navbar .navbar-nav > li > a.active, nav.navbar.bootsnav ul.nav > li > a.active, header.sticky nav.navbar .navbar-nav > li > a.active, header.sticky nav.navbar.navbar-default.navbar-fixed-top ul.nav > li > a.active, header.sticky nav.navbar ul.nav > li > a.active, header nav.navbar.bootsnav .header-searchbar a:focus { '.$pofo_menu_hover_text_color.' }';
        // Menu Slide Hover Color
        if( $pofo_slide_menu_hover_color ) {
            $pofo_featured_array[] = 'header nav.navbar.bootsnav .header-menu-button:hover span, header nav.navbar.bootsnav .header-menu-button span:hover, header nav.navbar.bootsnav .mobile-toggle:hover span { '.$pofo_slide_menu_hover_color.' }';
        }
    }

    // Sticky Header Color Settings
    $pofo_sticky_header_background_color = pofo_option( 'pofo_sticky_header_background_color', '#ffffff' );
    $pofo_sticky_menu_text_color = pofo_option( 'pofo_sticky_menu_text_color', '#232323' );
    $pofo_sticky_menu_hover_text_color = pofo_option( 'pofo_sticky_menu_hover_text_color', 'rgba(0,0,0,0.6)' );
    
    // Sticky Header Background Color
    $pofo_sticky_header_background_color = !empty( $pofo_sticky_header_background_color ) ? ' background-color: '.$pofo_sticky_header_background_color.' !important;' : '';
    if( $pofo_sticky_header_background_color ) {
        $pofo_featured_array[] = 'header.sticky nav.navbar-default, header.sticky nav.navbar.bootsnav { '.$pofo_sticky_header_background_color.' }';
    }
    // Sticky Header Menu Color
    $pofo_sticky_slide_menu_color = !empty( $pofo_sticky_menu_text_color ) ? ' background-color: '.$pofo_sticky_menu_text_color.';' : '';
    $pofo_sticky_menu_separator_color = !empty( $pofo_sticky_menu_text_color ) ? ' border-color: '.pofo_hex2rgb( $pofo_sticky_menu_text_color, '0.25' ).' !important;' : '';
    $pofo_sticky_menu_text_color = !empty( $pofo_sticky_menu_text_color ) ? ' color: '.$pofo_sticky_menu_text_color.';' : '';
    // Sticky Header Menu Hover Color
    $pofo_sticky_slide_menu_hover_color = !empty( $pofo_sticky_menu_hover_text_color ) ? ' background-color: '.$pofo_sticky_menu_hover_text_color.' !important;' : '';
    $pofo_sticky_menu_hover_text_color = !empty( $pofo_sticky_menu_hover_text_color ) ? ' color: '.$pofo_sticky_menu_hover_text_color.';' : '';
    
    if( $pofo_sticky_menu_text_color ) {
        // Sticky Menu Color
        $pofo_featured_array[] = 'header.sticky nav.navbar .navbar-nav > li > a, header.sticky nav.navbar.navbar-default.navbar-fixed-top ul.nav > li > a, header.sticky nav.navbar .header-social-icon a, header.sticky nav.navbar .header-searchbar a, header.sticky nav.navbar ul.nav > li > a, header.sticky nav.navbar .header-menu-button a, header.sticky nav.navbar .header-mini-cart .widget-title:before, header.sticky nav.navbar .header-menu-button span, header.sticky #lang_sel a, header.sticky #lang_sel a.lang_sel_sel, header.sticky .navbar-nav > li.dropdown > i { '.$pofo_sticky_menu_text_color.' }';
        // Sticky Slide Menu Color
        if( $pofo_sticky_slide_menu_color ) {
            $pofo_featured_array[] = 'header.sticky nav.navbar .header-menu-button span, header.sticky nav.navbar .navbar-toggle .icon-bar { '.$pofo_sticky_slide_menu_color.' }';
        }
        // Sticky Menu Separator Color
        if( $pofo_sticky_menu_separator_color ) {
            $pofo_featured_array[] = 'header.sticky .header-searchbar, header.sticky .header-social-icon, header.sticky .header-menu-button, header.sticky .widget_shopping_cart { '.$pofo_sticky_menu_separator_color.' }';
        }
    }
    if( $pofo_sticky_menu_hover_text_color ) {
        // Sticky Menu Hover Color
        $pofo_featured_array[] = 'header.sticky nav.navbar.bootsnav ul.nav > li.current-menu-item > a, header.sticky nav.navbar.bootsnav ul.nav > li.current-menu-ancestor > a, header.sticky nav.navbar.bootsnav ul.nav > li > a:hover, header.sticky nav.navbar.bootsnav .header-social-icon a:hover, header.sticky nav.navbar.bootsnav .header-searchbar a:hover, header.sticky nav.navbar .header-menu-button a:hover, header.sticky nav.navbar .header-mini-cart .widget-title:hover:before, header.sticky #lang_sel a.lang_sel_sel:hover, header.sticky nav.navbar.bootsnav ul.nav > li.dropdown.on > a, header.sticky nav.navbar ul.nav > li > a.active, header.sticky nav.navbar .navbar-nav > li > a.active, header.sticky nav.navbar.navbar-default.navbar-fixed-top ul.nav > li > a.active, header.sticky nav.navbar ul.nav > li > a.active, header.sticky nav.navbar.bootsnav .header-searchbar a:focus { '.$pofo_sticky_menu_hover_text_color.' }';
        // Sticky Slide Menu Hover Color
        if( $pofo_sticky_slide_menu_hover_color ) {
            $pofo_featured_array[] = 'header.sticky nav.navbar .header-menu-button:hover span, header.sticky nav.navbar .header-menu-button span:hover { '.$pofo_sticky_slide_menu_hover_color.' }';
        }
    }

    // Header Submenu Color Settings
    $pofo_header_submenu_background_color = pofo_option( 'pofo_header_submenu_background_color', '' );
    $pofo_header_submenu_heading_color = pofo_option( 'pofo_header_submenu_heading_color', '' );
    $pofo_header_submenu_text_color = pofo_option( 'pofo_header_submenu_text_color', '' );
    $pofo_header_submenu_hover_color = pofo_option( 'pofo_header_submenu_hover_color', '' );

    $pofo_header_submenu_background_color = !empty( $pofo_header_submenu_background_color ) ? ' background-color: '.$pofo_header_submenu_background_color.';' : '';
    $pofo_header_submenu_heading_color = !empty( $pofo_header_submenu_heading_color ) ? ' color: '.$pofo_header_submenu_heading_color.' !important;' : '';
    $pofo_header_submenu_separator_color = !empty( $pofo_header_submenu_text_color ) ? ' border-color: '.pofo_hex2rgb( $pofo_header_submenu_text_color ).';' : '';
    $pofo_header_submenu_text_color = !empty( $pofo_header_submenu_text_color ) ? ' color: '.$pofo_header_submenu_text_color.';' : '';
    $pofo_header_submenu_hover_color = !empty( $pofo_header_submenu_hover_color ) ? ' color: '.$pofo_header_submenu_hover_color.';' : '';
    
    // Header Submenu Heading Font Settings
    $pofo_header_submenu_heading_font_size = pofo_option( 'pofo_header_submenu_heading_font_size', '' );
    $pofo_header_submenu_heading_line_height = pofo_option( 'pofo_header_submenu_heading_line_height', '' );
    $pofo_header_submenu_heading_letter_spacing = pofo_option( 'pofo_header_submenu_heading_letter_spacing', '' );

    // Header Submenu Text Font Settings
    $pofo_header_submenu_text_font_size = pofo_option( 'pofo_header_submenu_text_font_size', '' );
    $pofo_header_submenu_text_line_height = pofo_option( 'pofo_header_submenu_text_line_height', '' );
    $pofo_header_submenu_text_letter_spacing = pofo_option( 'pofo_header_submenu_text_letter_spacing', '' );
    $pofo_header_submenu_icon_font_size = pofo_option( 'pofo_header_submenu_icon_font_size', '' );

    // Header Submenu Background Color
    if( $pofo_header_submenu_background_color ) {
        //Mega Menu Background Color
        $pofo_featured_array[] = 'nav.navbar.bootsnav li.dropdown .mega-menu-full { '.$pofo_header_submenu_background_color.' }';
        //Simple Menu Background Color
        $pofo_featured_array[] = 'nav.navbar.bootsnav ul.nav li.dropdown.simple-dropdown .dropdown-menu { '.$pofo_header_submenu_background_color.' }';
    }

    // Header Submenu Heading Color
    if( $pofo_header_submenu_heading_color || $pofo_header_submenu_heading_font_size || $pofo_header_submenu_heading_line_height || $pofo_header_submenu_heading_letter_spacing ) {

        $pofo_header_submenu_heading_font_size = !empty( $pofo_header_submenu_heading_font_size ) ? ' font-size: '.$pofo_header_submenu_heading_font_size.' !important;' : '';
        $pofo_header_submenu_heading_line_height = !empty( $pofo_header_submenu_heading_line_height ) ? ' line-height: '.$pofo_header_submenu_heading_line_height.';' : '';
        $pofo_header_submenu_heading_letter_spacing = !empty( $pofo_header_submenu_heading_letter_spacing ) ? ' letter-spacing: '.$pofo_header_submenu_heading_letter_spacing.';' : '';

        //Mega Menu Heading Color & Font Settings
        $pofo_featured_array[] = 'nav.navbar.bootsnav li.dropdown .mega-menu-full > ul li a.dropdown-header, nav.navbar.bootsnav li.dropdown .mega-menu-full > ul li .dropdown-header, .navbar-nav > li .mega-menu-full ul > li > .dropdown-header > i { '.$pofo_header_submenu_heading_color.$pofo_header_submenu_heading_font_size.$pofo_header_submenu_heading_line_height.$pofo_header_submenu_heading_letter_spacing.' }';
    }

    // Header Submenu Separator Color
    if( $pofo_header_submenu_separator_color ) {
        //Mega Menu Heading Color
        $pofo_featured_array[] = 'nav.navbar.bootsnav li.dropdown .mega-menu-full > ul > li { '.$pofo_header_submenu_separator_color.' }';
    }
    
    // Header Submenu Text Color
    if( $pofo_header_submenu_text_color || $pofo_header_submenu_text_font_size || $pofo_header_submenu_text_line_height || $pofo_header_submenu_text_letter_spacing || $pofo_header_submenu_icon_font_size ) {

        $pofo_header_submenu_text_font_size = !empty( $pofo_header_submenu_text_font_size ) ? ' font-size: '.$pofo_header_submenu_text_font_size.';' : '';
        $pofo_header_submenu_text_line_height = !empty( $pofo_header_submenu_text_line_height ) ? ' line-height: '.$pofo_header_submenu_text_line_height.';' : '';
        $pofo_header_submenu_text_letter_spacing = !empty( $pofo_header_submenu_text_letter_spacing ) ? ' letter-spacing: '.$pofo_header_submenu_text_letter_spacing.';' : '';
        $pofo_header_submenu_icon_font_size = !empty( $pofo_header_submenu_icon_font_size ) ? ' font-size: '.$pofo_header_submenu_icon_font_size.';' : '';

        //Mega Menu Text Color & Font Settings
        $pofo_featured_array[] = 'nav.navbar.bootsnav li.dropdown .mega-menu-full > ul li a, nav.navbar.bootsnav .navbar-nav > li ul > li > a > i { '.$pofo_header_submenu_text_color.$pofo_header_submenu_text_font_size.$pofo_header_submenu_text_line_height.$pofo_header_submenu_text_letter_spacing.' }';
        //Simple Menu Text Color
        $pofo_featured_array[] = '.simple-dropdown .dropdown-menu > li > a, .simple-dropdown .dropdown-menu > li.dropdown > ul li a, nav.navbar.navbar-default ul.nav li.dropdown ul.dropdown-menu > li > a { '.$pofo_header_submenu_text_color.$pofo_header_submenu_text_font_size.$pofo_header_submenu_text_line_height.$pofo_header_submenu_text_letter_spacing.' }';

        // Icon Font Size Color
        if( $pofo_header_submenu_icon_font_size ) {
            $pofo_featured_array[] = 'nav.navbar.bootsnav .navbar-nav > li ul > li > a > i { '.$pofo_header_submenu_icon_font_size.' }';
        }
    }
    
    // Header Submenu Hover Color
    if( $pofo_header_submenu_hover_color ) {
        //Mega Menu Hover Color
        $pofo_featured_array[] = 'nav.navbar.bootsnav li.dropdown .mega-menu-full > ul li a:hover { '.$pofo_header_submenu_hover_color.' }';
        //Simple Menu Hover Color
        $pofo_featured_array[] = '.simple-dropdown .dropdown-menu > li > a:hover, .simple-dropdown .dropdown-menu > li.dropdown > ul li a:hover, nav.navbar.bootsnav ul li.dropdown .dropdown-menu li > a:hover, nav.navbar.bootsnav ul.nav li.dropdown ul.dropdown-menu  > li:hover > a { '.$pofo_header_submenu_hover_color.' }';
        //Mega Menu Active Color
        $pofo_featured_array[] = 'nav.navbar.navbar-default ul li.dropdown .dropdown-menu li.active > a, nav.navbar.navbar-default ul li.dropdown .dropdown-menu li.current-menu-item > a, nav.navbar.navbar-default ul li.dropdown .dropdown-menu li.current-menu-ancestor > a { '.$pofo_header_submenu_hover_color.' }';
        //Simple Menu Active Color
        $pofo_featured_array[] = 'nav.navbar.bootsnav ul.nav li.dropdown.simple-dropdown ul.dropdown-menu > li.active > a, nav.navbar.bootsnav ul.nav li.dropdown.simple-dropdown ul.dropdown-menu > li.current-menu-ancestor > a, nav.navbar.bootsnav ul.nav li.dropdown.simple-dropdown ul.dropdown-menu > li.current-menu-item > a { '.$pofo_header_submenu_hover_color.' }';
    }

    // Mobile Menu Color Settings
    $pofo_header_mobile_menu_background_color = pofo_option( 'pofo_header_mobile_menu_background_color', '' );
    $pofo_header_mobile_menu_text_color = pofo_option( 'pofo_header_mobile_menu_text_color', '' );
    $pofo_header_mobile_menu_hover_color = pofo_option( 'pofo_header_mobile_menu_hover_color', '' );
    $pofo_header_mobile_submenu_background_color = pofo_option( 'pofo_header_mobile_submenu_background_color', '' );
    $pofo_header_mobile_submenu_heading_color = pofo_option( 'pofo_header_mobile_submenu_heading_color', '' );
    $pofo_header_mobile_submenu_text_color = pofo_option( 'pofo_header_mobile_submenu_text_color', '' );
    $pofo_header_mobile_submenu_hover_color = pofo_option( 'pofo_header_mobile_submenu_hover_color', '' );

    $pofo_header_mobile_menu_background_color = !empty( $pofo_header_mobile_menu_background_color ) ? ' background-color: '.$pofo_header_mobile_menu_background_color.' !important;' : '';
    $pofo_header_mobile_menu_separator_color = !empty( $pofo_header_mobile_menu_text_color ) ? ' border-color: '.pofo_hex2rgb( $pofo_header_mobile_menu_text_color ).' !important;' : '';
    $pofo_header_mobile_menu_text_color = !empty( $pofo_header_mobile_menu_text_color ) ? ' color: '.$pofo_header_mobile_menu_text_color.' !important;' : '';
    $pofo_header_mobile_menu_hover_color = !empty( $pofo_header_mobile_menu_hover_color ) ? ' color: '.$pofo_header_mobile_menu_hover_color.' !important;' : '';

    $pofo_header_mobile_submenu_background_color = !empty( $pofo_header_mobile_submenu_background_color ) ? ' background-color: '.$pofo_header_mobile_submenu_background_color.' !important;' : '';
    $pofo_header_mobile_submenu_heading_color = !empty( $pofo_header_mobile_submenu_heading_color ) ? ' color: '.$pofo_header_mobile_submenu_heading_color.' !important;' : '';
    $pofo_header_mobile_submenu_text_color = !empty( $pofo_header_mobile_submenu_text_color ) ? ' color: '.$pofo_header_mobile_submenu_text_color.' !important;' : '';
    $pofo_header_mobile_submenu_hover_color = !empty( $pofo_header_mobile_submenu_hover_color ) ? ' color: '.$pofo_header_mobile_submenu_hover_color.' !important;' : '';
    
    // Header Mobile Menu Background Color
    if( $pofo_header_mobile_menu_background_color ) {
        $pofo_featured_array[] = 'nav.mobile-menu.navbar.bootsnav .navbar-nav { '.$pofo_header_mobile_menu_background_color.' }';
    }

    // Header Mobile Menu Separator Color
    if( $pofo_header_mobile_menu_separator_color ) {
        $pofo_featured_array[] = 'nav.mobile-menu.navbar.bootsnav .navbar-nav li, nav.mobile-menu.navbar.bootsnav li.dropdown .mega-menu-full > ul > li > ul, nav.mobile-menu.navbar.bootsnav ul.nav .simple-dropdown ul.dropdown-menu li.dropdown ul.dropdown-menu { '.$pofo_header_mobile_menu_separator_color.' }';
    }

    // Header Mobile Menu Text Color
    if( $pofo_header_mobile_menu_text_color ) {
        $pofo_featured_array[] = 'nav.mobile-menu ul.nav > li > a, nav.mobile-menu ul.nav > li i.dropdown-toggle { '.$pofo_header_mobile_menu_text_color.' }';
    }

    // Header Mobile Menu Hover Color
    if( $pofo_header_mobile_menu_hover_color ) {
        $pofo_featured_array[] = 'header nav.navbar.bootsnav.mobile-menu ul.nav > li.current-menu-ancestor > a, header nav.navbar.bootsnav.mobile-menu ul.nav > li.current-menu-item > a, header nav.navbar.bootsnav.mobile-menu ul.nav > li.active > a, nav.navbar.bootsnav.mobile-menu ul.nav li.dropdown.simple-dropdown ul.dropdown-menu > li.current-menu-item > a, nav.navbar.bootsnav.mobile-menu ul.nav li.dropdown.simple-dropdown ul.dropdown-menu > li.current-menu-ancestor > a, nav.navbar.bootsnav.mobile-menu ul.nav li.dropdown.simple-dropdown ul.dropdown-menu > li.active > a, nav.navbar.bootsnav.mobile-menu li.dropdown .mega-menu-full > ul li.current-menu-item > a, nav.mobile-menu.navbar.bootsnav li.dropdown .mega-menu-full > ul li.current-menu-ancestor a.dropdown-header, nav.mobile-menu.navbar.bootsnav li.dropdown .mega-menu-full > ul li.current-menu-item a.dropdown-header, nav.mobile-menu.navbar.bootsnav li.dropdown .mega-menu-full > ul li.active a.dropdown-header, header nav.navbar.mobile-menu .navbar-nav > li > a.active, nav.navbar.bootsnav.mobile-menu ul.nav > li > a.active { '.$pofo_header_mobile_menu_hover_color.' }';
    }

    // Header Mobile Submenu Background Color
    if( $pofo_header_mobile_submenu_background_color ) {
        //Mobile Mega Menu Background Color
        $pofo_featured_array[] = 'nav.mobile-menu.navbar.bootsnav li.dropdown .mega-menu-full, nav.navbar.bootsnav.mobile-menu ul.nav li.dropdown.simple-dropdown > .dropdown-menu { '.$pofo_header_mobile_submenu_background_color.' }';
    }

    // Header Mobile Submenu Heading Color
    if( $pofo_header_mobile_submenu_heading_color ) {
        //Mobile Mega Menu Heading Color
        $pofo_featured_array[] = 'nav.mobile-menu.navbar.bootsnav li.dropdown .mega-menu-full > ul li a.dropdown-header { '.$pofo_header_mobile_submenu_heading_color.' }';
    }

    // Header Mobile Submenu Text Color
    if( $pofo_header_mobile_submenu_text_color ) {
        //Mobile Mega Menu Text Color
        $pofo_featured_array[] = 'nav.mobile-menu ul > li > ul > li > a, nav.mobile-menu ul > li.simple-dropdown > ul > li > ul > li > a, nav.navbar.bootsnav.mobile-menu ul.nav li.dropdown.simple-dropdown > ul > li > a { '.$pofo_header_mobile_submenu_text_color.' }';
    }
    
    // Header Mobile Submenu Hover Color
    if( $pofo_header_mobile_submenu_hover_color ) {
        //Mobile Mega Menu Hover Color
        $pofo_featured_array[] = 'nav.navbar.bootsnav.mobile-menu li.dropdown .mega-menu-full > ul li.current-menu-ancestor > a, nav.navbar.bootsnav.mobile-menu li.dropdown .mega-menu-full > ul li.current-menu-item > a, nav.navbar.bootsnav.mobile-menu li.dropdown .mega-menu-full > ul li.active > a, nav.navbar.bootsnav.mobile-menu ul.nav li.dropdown.simple-dropdown ul.dropdown-menu > li.current-menu-ancestor > a, nav.navbar.bootsnav.mobile-menu ul.nav li.dropdown.simple-dropdown ul.dropdown-menu > li.current-menu-item > a, nav.navbar.bootsnav.mobile-menu ul.nav li.dropdown.simple-dropdown ul.dropdown-menu > li.active > a { '.$pofo_header_mobile_submenu_hover_color.' }';
    }

    // Logo & Menu Setup
    if( $pofo_logo_position == 'top' ) { // Logo Position Top
        $pofo_menu_center_class = ' navbar-brand-top nav-box-width';
        $pofo_logo_class = 'col-md-12 col-sm-4 col-xs-6 navbar-brand';
        $pofo_menu_class = 'col-md-12 sm-width-auto accordion-menu';
        $pofo_search_class = 'brand-top-menu-right';
        $pofo_pull_right = ' display-inline-block';
        $pofo_menu_ul_class = '  navbar-left no-margin';
    } else if( $pofo_logo_position == 'center' ) { // Logo Position Center
        $pofo_menu_center_class = ' nav-box-width padding-four-lr menu-logo-center';
        $pofo_logo_class = 'center-logo';
        $pofo_menu_class = 'col-md-12 col-sm-12 col-xs-12 accordion-menu'; 
        $pofo_search_class = 'width-auto';
        $pofo_pull_right = '';
        $pofo_menu_ul_class = ' navbar-left text-right no-margin width-40 sm-width-100 sm-text-left';
    } else { // Logo Position Left
        if( $pofo_menu_position_center == '1' ) { // Menu Position Center
            $pofo_menu_center_class = ' menu-center';
            $pofo_logo_class = 'col-lg-2 col-md-3 col-xs-5';
            $pofo_menu_class = 'col-lg-8 col-md-6 col-xs-2 accordion-menu xs-no-padding-right';
            $pofo_search_class = 'col-lg-2 col-md-3 col-xs-5 sm-width-auto text-right header-right-col';
            $pofo_pull_right = '';
            $pofo_menu_ul_class = ' navbar-center';
        } else { // Menu Position Right
            $pofo_menu_center_class = '';
            $pofo_logo_class = 'col-md-2 col-xs-5';
            $pofo_menu_class = 'col-md-7 col-xs-2 width-auto pull-right accordion-menu'; 
            $pofo_search_class = 'col-md-2 col-xs-5 width-auto header-right';
            $pofo_pull_right = ' pull-right';
            $pofo_menu_ul_class = ' navbar-left no-margin';
        }
    }

    if( $pofo_header_container_style == 'container-fluid' ) {
        $pofo_menu_extra_class = ' nav-box-width';
    }

    /* Check mini header status */
    $pofo_mini_header_class = '';
    
    if( pofo_check_mini_header_enable() ) {
        $pofo_mini_header_class .= ' header-with-topbar'.$pofo_sticky_mini_header;
    }
    
    if( trim( $pofo_header_nav_type ) == 'navbar-non-sticky-top' ) {
        $pofo_mini_header_class .= ' no-sticky';
    }

    echo '<!-- header -->';
    echo '<header id="masthead" class="site-header header-main-wrapper'.esc_attr( $pofo_mini_header_class ).'" itemscope="itemscope" itemtype="http://schema.org/WPHeader">';

    if( pofo_check_mini_header_enable() ) {
        get_template_part( 'templates/header/mini', 'header' );
    }

        echo '<!-- navigation -->';
        echo '<nav class="navbar padi-menu navbar-default bootsnav pofo-standard-menu on no-full header-img'.esc_attr( $pofo_menu_extra_class ).esc_attr( $pofo_header_nav_type ).esc_attr( $pofo_menu_center_class ).'">';
            
            echo '<div class="'.esc_attr( $pofo_header_container_style ).' nav-header-container">';
                echo '<div class="row">';
                    if( $pofo_disable_header_logo == '1' ) {
                        echo '<div class="'.esc_attr( $pofo_logo_class ).'">';
                            if( is_front_page() && $pofo_h1_logo_font_page == '1' ) {
                                echo '<h1>';
                            }
                            if( $pofo_logo || $pofo_logo_light ) {
                                if( $pofo_logo_ratina ) {
                                    if( $pofo_logo ) {
                                        echo '<a href="'.esc_url( home_url("/") ).'" title="'.get_bloginfo("name").'" class="logo-light">';
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
                                
                                if( $pofo_logo_light_ratina ) {
                                    if( $pofo_logo_light ) {
                                        echo '<a href="'.esc_url( home_url("/") ).'" title="'.get_bloginfo("name").'" class="logo-dark">';
                                            echo '<img class="logo" src="'.esc_url( $pofo_logo_light ).'" alt="'.get_bloginfo("name").'">';
                                            echo '<img class="retina-logo" src="'.esc_url( $pofo_logo_light_ratina ).'" alt="'.get_bloginfo("name").'">';
                                        echo '</a>';
                                    }
                                } else {
                                    if( $pofo_logo_light ) {
                                        echo '<a href="'.esc_url( home_url("/") ).'" title="'.get_bloginfo("name").'" class="logo-dark">';
                                            echo '<img class="logo" src="'.esc_url( $pofo_logo_light ).'" alt="'.get_bloginfo("name").'">';
                                            echo '<img class="retina-logo" src="'.esc_url( $pofo_logo_light ).'" alt="'.get_bloginfo("name").'">';
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
                    
                    echo '<div class="'.esc_attr( $pofo_menu_class ).'">';
                    	if( $pofo_header_menu || ( $pofo_logo_position == 'center' && $pofo_header_secondary_menu ) ) {
							echo '<div class="lange pc-none"><a class="flat" href="https://www.paditech.com/"><img src="https://www.paditech.com/wp-content/uploads/2018/08/vietnam.png" class="icon-image"></a>
                            <a class="flat active" href="https://www.paditech.com/ja"><img src="https://www.paditech.com/wp-content/uploads/2018/08/japan.png" class="icon-image"></a>
                            <a class="flat eng-active" href="https://www.paditech.com/en"><img src="https://www.paditech.com/wp-content/uploads/2023/10/eng.png" class="icon-image"></a></div>';
                            echo '<button type="button" class="navbar-toggle collapsed pull-right 12" data-toggle="collapse" data-target="#navbar-collapse-toggle-1">';
                                echo '<span class="sr-only">'.esc_html( 'Toggle Navigation', 'pofo' ).'</span>';
                                echo '<span class="icon-bar"></span>';
                                echo '<span class="icon-bar"></span>';
                                echo '<span class="icon-bar"></span>';
                            echo '</button>';
                            echo '<div class="navbar-collapse collapse'.esc_attr( $pofo_pull_right ).'" id="navbar-collapse-toggle-1" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">';
                                if( $pofo_header_menu ) {
                                    $pofo_header_menu_default = array(
                                                    'menu'       => $pofo_header_menu,
                                                    'menu_id'    => 'accordion',
                                                    'container'  => 'ul',
                                                    'items_wrap' => '<ul id="%1$s" class="%2$s" data-in="fadeIn" data-out="fadeOut">%3$s</ul>',
                                                    'menu_class' => 'nav navbar-nav alt-font text-normal'.$pofo_menu_ul_class,
                                                    'fallback_cb'=> false,
                                                    'walker'     => new Pofo_Mega_Menu_Walker(),
                                                );

                                    wp_nav_menu( $pofo_header_menu_default );
                                } else {
                                    $pofo_header_menu_default = array(
                                                    'menu_id'    => 'accordion',
                                                    'container'  => 'ul',
                                                    'items_wrap' => '<ul id="%1$s" class="%2$s" data-in="fadeIn" data-out="fadeOut">%3$s</ul>',
                                                    'menu_class' => 'nav navbar-nav alt-font text-normal'.$pofo_menu_ul_class,
                                                    'fallback_cb'=> false,
                                                    'walker'     => new Pofo_Mega_Menu_Walker(),
                                                );

                                    wp_nav_menu( $pofo_header_menu_default );
                                }
                                if( $pofo_logo_position == 'center' && $pofo_header_secondary_menu ) {
                                    $pofo_header_secondary_menu_default = array(
                                                    'menu'       => $pofo_header_secondary_menu,
                                                    'menu_id'    => 'secondary',
                                                    'container'  => 'ul',
                                                    'items_wrap' => '<ul id="%1$s" class="%2$s" data-in="fadeIn" data-out="fadeOut">%3$s</ul>',
                                                    'menu_class' => 'nav navbar-nav alt-font text-normal navbar-right no-margin width-40 sm-width-100',
                                                    'fallback_cb'=> false,
                                                    'walker'     => new Pofo_Mega_Menu_Walker(),
                                                );
                                    
                                    wp_nav_menu( $pofo_header_secondary_menu_default );
                                }
							echo '<div class="lange mobile-none">
                            <a class="flat" href="https://www.paditech.com/"><img src="https://www.paditech.com/wp-content/uploads/2018/08/vietnam.png" class="icon-image"></a>
                            <a class="flat active" href="https://www.paditech.com/ja"><img src="https://www.paditech.com/wp-content/uploads/2018/08/japan.png" class="icon-image"></a>
                            <a class="flat eng-active" href="https://www.paditech.com/en"><img src="https://www.paditech.com/wp-content/uploads/2023/10/eng.png" class="icon-image"></a>
                            </div>';
                            echo '</div>';
                    	} elseif( has_nav_menu('pofomegamenu') ) {
							echo '<div class="lange"><a class="flat" href="https://www.paditech.com/"><img src="https://pofo.paditech.com/wp-content/uploads/2018/08/vietnam.png" class="icon-image"></a><a class="flat active" href="https://www.paditech.com/ja"><img src="https://www.paditech.com/wp-content/uploads/2018/08/japan.png" class="icon-image"></a></div>';
                            echo '<button type="button" class="navbar-toggle collapsed pull-right 1" data-toggle="collapse" data-target="#navbar-collapse-toggle-1">';
                                echo '<span class="sr-only">'.esc_html( 'Toggle Navigation', 'pofo' ).'</span>';
                                echo '<span class="icon-bar"></span>';
                                echo '<span class="icon-bar"></span>';
                                echo '<span class="icon-bar"></span>';
                            echo '</button>';
                            echo '<div class="navbar-collapse collapse'.esc_attr( $pofo_pull_right ).'" id="navbar-collapse-toggle-1" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">';
                                    $pofo_header_menu_default = array(
                                                    'theme_location'  => 'pofomegamenu',
                                                    'menu_id'    => 'accordion',
                                                    'container'  => 'ul',
                                                    'items_wrap' => '<ul id="%1$s" class="%2$s" data-in="fadeIn" data-out="fadeOut">%3$s</ul>',
                                                    'menu_class' => 'nav navbar-nav alt-font text-normal'.$pofo_menu_ul_class,
                                                    'fallback_cb'=> false,
                                                    'walker'     => new Pofo_Mega_Menu_Walker(),
                                                );

                                    wp_nav_menu( $pofo_header_menu_default );
                            echo '</div>';
                        } else {
                            echo '<button type="button" class="navbar-toggle collapsed pull-right 123" data-toggle="collapse" data-target="#navbar-collapse-toggle-1">';
                                echo '<span class="sr-only">'.esc_html( 'Toggle Navigation', 'pofo' ).'</span>';
                                echo '<span class="icon-bar"></span>';
                                echo '<span class="icon-bar"></span>';
                                echo '<span class="icon-bar"></span>';
                            echo '</button>';
                            echo '<div class="navbar-collapse collapse'.esc_attr( $pofo_pull_right ).'" id="navbar-collapse-toggle-1" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">';
                                $pofo_header_menu_default = array( 
                                                    'container'       => 'ul',
                                                    'menu_class'      => 'nav navbar-nav alt-font text-normal pofo-normal-menu'.$pofo_menu_ul_class,
                                                    'menu_id'         => '',
                                                    'echo'            => true,
                                                    'items_wrap'      => '<ul id="%1$s" class="simple-dropdown %2$s" data-in="fadeIn" data-out="fadeOut">%3$s</ul>',
                                                );
                                wp_nav_menu($pofo_header_menu_default);
                            echo '</div>';
                        }

                    if( $pofo_logo_position != 'top' ) {
                    	echo '</div>';
                    }
                    if( $pofo_disable_header_search == '1' || ( $pofo_disable_header_sidebar == '1' && is_active_sidebar( $pofo_header_sidebar ) ) || ( $pofo_disable_slide_menu == '1' && is_active_sidebar( $pofo_slide_menu_sidebar ) ) || ( $pofo_enable_header_mini_cart == '1' && is_active_sidebar( $pofo_header_mini_cart_sidebar ) && class_exists( 'WooCommerce' ) ) || $pofo_menu_position_center == '1' ) {
	                    echo '<div class="'.esc_attr( $pofo_search_class ).'">';
	                        if( $pofo_disable_header_search == '1' ) {
	                            echo '<div class="header-searchbar">';
	                                echo '<a href="#search-header" class="header-search-form text-white"><i class="fas fa-search search-button"></i></a>';
	                                echo '<!-- search input-->';
	                                $unique_id = esc_attr( uniqid( 'search-form-' ) );

	                                echo '<form id="search-header" method="get" action="'.home_url('/').'" name="search-header" class="mfp-hide search-form-result">';
	                                    echo '<div class="search-form position-relative">';
	                                        echo '<button type="submit" class="fas fa-search close-search search-button"></button>';
	                                        echo '<input name="s" id="'. esc_attr( $unique_id ).'" class="search-input" placeholder="'.esc_html( $pofo_search_placeholder_text ).'" autocomplete="off" type="text">';
	                                    echo '</div>';
	                                echo '</form>';
	                            echo '</div>';
	                        }
	                        if ( $pofo_disable_header_sidebar == '1' && is_active_sidebar( $pofo_header_sidebar ) ) {
	                            echo '<div class="header-social-icon xs-display-none">';
	                                dynamic_sidebar( $pofo_header_sidebar );
	                            echo '</div>';
	                        }
                            if ( $pofo_enable_header_mini_cart == '1' && is_active_sidebar( $pofo_header_mini_cart_sidebar ) && class_exists( 'WooCommerce' ) ) {/* if WooCommerce plugin is activated */
                                echo '<div class="header-mini-cart">';
                                    dynamic_sidebar( $pofo_header_mini_cart_sidebar );
                                echo '</div>';
                            }
	                        if( $pofo_disable_slide_menu == '1' && is_active_sidebar( $pofo_slide_menu_sidebar ) ) {
	                            echo '<div class="header-menu-button sm-display-none">';
	                                echo '<button class="navbar-toggle mobile-toggle right-menu-button" type="button" id="showRightPush">';
	                                    echo '<span></span>';
	                                    echo '<span></span>';
	                                    echo '<span></span>';
	                                echo '</button>';
	                            echo '</div>';
	                        }
	                    echo '</div>';
                    }
                    if( $pofo_logo_position == 'top' ) {
                    	echo '</div>';
                    }

                echo '</div>';
            echo '</div>';
        echo '</nav>';
        echo '<!-- end navigation -->';

        if( $pofo_disable_slide_menu == '1' && is_active_sidebar( $pofo_slide_menu_sidebar ) ) {
            echo '<div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s2">';
                echo '<button class="close-button-menu side-menu-close" id="close-pushmenu"></button>';
                echo '<div class="display-table padding-twelve-all height-100 width-100 text-center xs-padding-six-all">';
                    echo '<div class="display-table-cell vertical-align-top padding-70px-top position-relative">';
                        echo '<div class="row">';
                            dynamic_sidebar( $pofo_slide_menu_sidebar );
                        echo '</div>';
                    echo '</div>';
                echo '</div>';
            echo '</div>';
        }
    echo '</header>';
    echo '<!-- end header -->';

    /* Global stylesheet */
    do_action( 'pofo_define_global_hook', $pofo_featured_array );