<?php
/**
 * Shortcode For Image gallery
 *
 * @package Pofo
 */
?>
<?php 
/*-----------------------------------------------------------------------------------*/
/* Image gallery */
/*-----------------------------------------------------------------------------------*/

$pofo_lightbox_unique_id = 1;
if ( ! function_exists( 'pofo_image_gallery_shortcode' ) ) {
	function pofo_image_gallery_shortcode( $atts, $content = null ) { 

        global $pofo_lightbox_unique_id, $pofo_responsive_style;

		extract( shortcode_atts( array(
		        'id' => '',
		        'class' => '',
	            'css' => '',
	            'pofo_enable_responsive_css' => '',
	            'responsive_css' => '',

	        	'image_gallery_type' => '',
	        	'lightbox_type' => 'grid',
	        	'pofo_gutter_type' => 'gutter-medium',
	        	'pofo_column' => '3',
	        	'single_image' => '',
	        	'image_gallery' => '',
	        	'pofo_image_srcset' => 'full',
	        	'pofo_column_animation_style' => '',
	        	
		        'lightbox_gallery' => '1',

	            'pofo_bg_image_type' => '',
	            'desktop_bg_image_position' => '',
	    ), $atts ) );

        // Check if lightbox id and class
        $pofo_lightbox_unique_id  = !empty( $pofo_lightbox_unique_id ) ? $pofo_lightbox_unique_id : 1;
        $pofo_lightbox_id      = !empty( $id ) ? $id : 'pofo-lightbox';
        $pofo_lightbox_id      .= '-' . $pofo_lightbox_unique_id;
        $pofo_lightbox_unique_id++;

        $id         = ( $id ) ? ' id="'.$id.'"' : '';
        $class      = ( $class ) ? $classes[] = $class : '';
        $classes[]  = $image_gallery_type;
        
        $pofo_image_srcset  = !empty( $pofo_image_srcset ) ? $pofo_image_srcset : 'full';
        
		$explode_image = !empty( $image_gallery ) ? explode(",",$image_gallery) : array();

	    $image_url = !empty( $single_image ) ? wp_get_attachment_image_src($single_image, $pofo_image_srcset) : array();
        $pofo_full_url= !empty( $single_image ) ? wp_get_attachment_image_url( $single_image, 'full' ) : ''; // Lightbox image

	    $srcset = $srcset_data = $sizes_data = '';
	    $srcset = !empty( $single_image ) ? wp_get_attachment_image_srcset( $single_image, $pofo_image_srcset ) : '';
	    if( $srcset ){
	        $srcset_data = ' srcset="'.esc_attr( $srcset ).'"';
	    }

	    $sizes = !empty( $single_image ) ? wp_get_attachment_image_sizes( $single_image, $pofo_image_srcset ) : '';
	    if( $sizes ){
	        $sizes_data = ' sizes="'.esc_attr( $sizes ).'"';
	    }

		$output = $classes_desktop = $classes_ipad = $classes_masonry = $class_list = $style_property ='';
		$classes = $style_array = array();

		// Column Animation
		$pofo_column_animation_style = ( $pofo_column_animation_style ) ? ' wow '.$pofo_column_animation_style : '';

        $pofo_column = !empty( $pofo_column ) ? ' work-'.$pofo_column.'col' : '';
        !empty( $pofo_gutter_type ) ? $pofo_column .= ' ' . $pofo_gutter_type : '';

        // Background Image
        !empty( $pofo_bg_image_type ) ? $classes[] = $pofo_bg_image_type : '';
        !empty( $desktop_bg_image_position ) ? $classes[] = $desktop_bg_image_position : '';

		if( $image_gallery_type == 'simple-image-lightbox' ) {

	        // Image Alt, Title, Caption
	        $img_alt            = !empty( $single_image ) ? pofo_option_image_alt($single_image) : array();
	        $img_title          = !empty( $single_image ) ? pofo_option_image_title($single_image) : array();
	        $image_alt          = !empty( $img_alt['alt'] ) ? ' alt="'.$img_alt['alt'].'"' : ' alt=""' ;
	        $image_title        = !empty( $img_title['title'] ) ? ' title="'.$img_title['title'].'"' : '';        

			$img_lightbox_caption 	= !empty( $single_image ) ? pofo_option_lightbox_image_caption($single_image) : array();
			$img_lightbox_title 	= !empty( $single_image ) ? pofo_option_lightbox_image_title($single_image) : array();
			$image_lightbox_caption = !empty( $img_lightbox_caption['caption'] ) ? ' data-lightbox-caption="'.$img_lightbox_caption['caption'].'"' : '' ;
			$image_lightbox_title 	= !empty($img_lightbox_title['title'] ) ? ' title="'.$img_lightbox_title['title'].'"' : '' ;
		}

        // CSS Box
        $css_class  = vc_shortcode_custom_css_class( $css, ' ' );
        $css_class  = ( $css_class ) ? $classes[] = $css_class : '';
        
        // Responsive CSS Box
        if( $pofo_enable_responsive_css == 1 && !empty( $responsive_css ) ) {
            $responsive_id = uniqid('pofo-image-gallery-responsive-');
            $responsive_style = pofo_addons_get_responsive_style( $responsive_css, $responsive_id );
            $classes[] = $responsive_id;
        }

		// Class List
		$class_list = !empty( $classes ) ? implode(" ", $classes) : '';

		// Style Property List
		$style_property_list = !empty( $style_array ) ? implode(" ", $style_array) : '';
		$style_property = ( $style_property_list ) ? ' style="'.$style_property_list.'"' : '';

		switch ($image_gallery_type) {
	     	case 'simple-image-lightbox':
				if( !empty( $image_url[0] ) ):
                        $output .='<div class="portfolio-grid hover-option2 single-image-lightbox-wrapper">';
                            $output .='<div class="grid-sizer"></div>';
                            $output .= '<div '.$id.' class="grid-item '.$class_list.$pofo_column_animation_style.'"'.$style_property.'>';
                                if( $lightbox_gallery == 1 ){
                                    $output .= '<a class="single-image-lightbox" href="'.$pofo_full_url.'" '.$image_lightbox_title.$image_lightbox_caption.'>';
                                            $output .= '<figure>';
                            	}
                                                    $output .= '<div class="portfolio-img bg-extra-dark-gray">';
                                						$output .= '<img src="'.$image_url[0].'" '.$image_alt.$image_title.' width="'.$image_url[1].'" height="'.$image_url[2].'"'.$srcset_data.$sizes_data.' class="project-img-gallery"/>';
                            						$output .= '</div>';
                            	if( $lightbox_gallery == 1 ){
				                            $output .= '<figcaption>';
				                                $output .= '<div class="portfolio-hover-main text-center">';
				                                    $output .= '<div class="portfolio-hover-box vertical-align-middle">';
				                                        $output .= '<div class="portfolio-hover-content position-relative">';
				                                            $output .= '<i class="ti-zoom-in text-white fa-2x"></i>';
				                                        $output .= '</div>';
				                                    $output .= '</div>';
				                                $output .= '</div>';
				                            $output .= '</figcaption>';
                    					$output .= '</figure>';
                                    $output .= '</a>';
                            	}
                    		$output .='</div>';
				        $output .='</div>';
			    endif;
	     	break;
	     	case 'lightbox-gallery':
	     		switch ($lightbox_type) {
					case 'grid':
						if($explode_image):

							$output .='<ul '.$id.' class="portfolio-grid hover-option2 '.$class_list.$pofo_column.'"'.$style_property.'>';
            					$output .='<li class="grid-sizer"></li>';
								foreach ($explode_image as $key => $value) {

							        // Image Alt, Title, Caption
							        $img_alt            = !empty( $value ) ? pofo_option_image_alt($value) : array();
							        $img_title          = !empty( $value ) ? pofo_option_image_title($value) : array();
							        $image_alt          = !empty( $img_alt['alt'] ) ? ' alt="'.$img_alt['alt'].'"' : ' alt=""' ;
							        $image_title        = !empty( $img_title['title'] ) ? ' title="'.$img_title['title'].'"' : '';        

									$img_lightbox_caption 	= !empty( $value ) ? pofo_option_lightbox_image_caption($value) : array();
									$img_lightbox_title 	= !empty( $value ) ? pofo_option_lightbox_image_title($value) : array();
									$image_lightbox_caption = !empty( $img_lightbox_caption['caption'] ) ? ' data-lightbox-caption="'.$img_lightbox_caption['caption'].'"' : '' ;
									$image_lightbox_title 	= !empty($img_lightbox_title['title'] ) ? ' title="'.$img_lightbox_title['title'].'"' : '' ;

								    $thumb = !empty( $value ) ? wp_get_attachment_image_src($value, $pofo_image_srcset) : array();
        							$pofo_full_url= !empty( $value ) ? wp_get_attachment_image_url( $value, 'full' ) : ''; // Lightbox image

								    $srcset = $srcset_data = $sizes_data = '';
								    $srcset = !empty( $value ) ? wp_get_attachment_image_srcset( $value, $pofo_image_srcset ) : '';
								    if( $srcset ){
								        $srcset_data = ' srcset="'.esc_attr( $srcset ).'"';
								    }

								    $sizes = !empty( $value ) ? wp_get_attachment_image_sizes( $value, $pofo_image_srcset ) : '';
								    if( $sizes ){
								        $sizes_data = ' sizes="'.esc_attr( $sizes ).'"';
								    }

									$output .='<li class="grid-item'.$pofo_column_animation_style.'">';
										if( $lightbox_gallery == 1 ){
								            $output .='<a href="'.$pofo_full_url.'" class="lightbox-group-gallery-item" data-group="'.$pofo_lightbox_id.'" '.$image_lightbox_title.$image_lightbox_caption.'>';
					        					$output .= '<figure>';
								        }
									        		$output .= '<div class="portfolio-img bg-extra-dark-gray">';
				                                    	$output .= '<img src="'.$thumb[0].'" '.$image_alt.$image_title.' width="'.$thumb[1].'" height="'.$thumb[2].'"'.$srcset_data.$sizes_data.' class="project-img-gallery" data-no-retina="" />';
				                                    $output .= '</div>';
							            if( $lightbox_gallery == 1 ){
				                                    $output .= '<figcaption>';
				                                        $output .= '<div class="portfolio-hover-main text-center">';
				                                            $output .= '<div class="portfolio-hover-box vertical-align-middle">';
				                                                $output .= '<div class="portfolio-hover-content position-relative">';
				                                                    $output .= '<i class="ti-zoom-in text-white fa-2x"></i>';
				                                                $output .= '</div>';
				                                            $output .= '</div>';
				                                        $output .= '</div>';
				                                    $output .= '</figcaption>';
				                                $output .= '</figure>';
								            $output .='</a>';
								        }
		                            $output .='</li>';
							    }
					        $output .='</ul>';
					    endif;
					break;
					case 'masonry':
						if($explode_image):

							$output .='<ul '.$id.' class="portfolio-grid hover-option2 '.$class_list.$pofo_column.'"'.$style_property.'>';
            					$output .='<li class="grid-sizer"></li>';
								foreach ($explode_image as $key => $value) {

							        // Image Alt, Title, Caption
							        $img_alt            = !empty( $value ) ? pofo_option_image_alt($value) : array();
							        $img_title          = !empty( $value ) ? pofo_option_image_title($value) : array();
							        $image_alt          = !empty( $img_alt['alt'] ) ? ' alt="'.$img_alt['alt'].'"' : ' alt=""' ;
							        $image_title        = !empty( $img_title['title'] ) ? ' title="'.$img_title['title'].'"' : '';        

									$img_lightbox_caption 	= !empty( $value ) ? pofo_option_lightbox_image_caption($value) : array();
									$img_lightbox_title 	= !empty( $value ) ? pofo_option_lightbox_image_title($value) : array();
									$image_lightbox_caption = !empty( $img_lightbox_caption['caption'] ) ? ' data-lightbox-caption="'.$img_lightbox_caption['caption'].'"' : '' ;
									$image_lightbox_title 	= !empty($img_lightbox_title['title'] ) ? ' title="'.$img_lightbox_title['title'].'"' : '' ;

								    $thumb = !empty( $value ) ? wp_get_attachment_image_src($value, $pofo_image_srcset) : array();
        							$pofo_full_url= !empty( $value ) ? wp_get_attachment_image_url( $value, 'full' ) : ''; // Lightbox image

								    $srcset = $srcset_data = $sizes_data = '';
								    $srcset = !empty( $value ) ? wp_get_attachment_image_srcset( $value, $pofo_image_srcset ) : '';
								    if( $srcset ){
								        $srcset_data = ' srcset="'.esc_attr( $srcset ).'"';
								    }

								    $sizes = !empty( $value ) ? wp_get_attachment_image_sizes( $value, $pofo_image_srcset ) : '';
								    if( $sizes ){
								        $sizes_data = ' sizes="'.esc_attr( $sizes ).'"';
								    }

									$output .='<li class="grid-item'.$pofo_column_animation_style.'">';
										if( $lightbox_gallery == 1 ){
								            $output .='<a href="'.$pofo_full_url.'" class="lightbox-group-gallery-item" data-group="'.$pofo_lightbox_id.'" '.$image_lightbox_title.$image_lightbox_caption.'>';
					        					$output .= '<figure>';
								        }
									        		$output .= '<div class="portfolio-img bg-extra-dark-gray">';
				                                    	$output .= '<img src="'.$thumb[0].'" '.$image_alt.$image_title.' width="'.$thumb[1].'" height="'.$thumb[2].'"'.$srcset_data.$sizes_data.' class="project-img-gallery" data-no-retina="" />';
				                                    $output .= '</div>';
							            if( $lightbox_gallery == 1 ){
				                                    $output .= '<figcaption>';
				                                        $output .= '<div class="portfolio-hover-main text-center">';
				                                            $output .= '<div class="portfolio-hover-box vertical-align-middle">';
				                                                $output .= '<div class="portfolio-hover-content position-relative">';
				                                                    $output .= '<i class="ti-zoom-in text-white fa-2x"></i>';
				                                                $output .= '</div>';
				                                            $output .= '</div>';
				                                        $output .= '</div>';
				                                    $output .= '</figcaption>';
				                                $output .= '</figure>';
								            $output .='</a>';
								        }
		                            $output .='</li>';
							    }
					        $output .='</ul>';
					    endif;
					break;
				}
	     	break;
     		case 'zoom-gallery':
				if($explode_image):
					$output .= '<div '.$id.' class="zoom-gallery">';
						$output .='<ul class="portfolio-grid hover-option2 '.$class_list.$pofo_column.'"'.$style_property.'>';
        					$output .='<li class="grid-sizer"></li>';
							foreach ($explode_image as $key => $value) {

						        // Image Alt, Title, Caption
						        $img_alt            = !empty( $value ) ? pofo_option_image_alt($value) : array();
						        $img_title          = !empty( $value ) ? pofo_option_image_title($value) : array();
						        $image_alt          = !empty( $img_alt['alt'] ) ? ' alt="'.$img_alt['alt'].'"' : ' alt=""' ;
						        $image_title        = !empty( $img_title['title'] ) ? ' title="'.$img_title['title'].'"' : '';        

								$img_lightbox_caption 	= !empty( $value ) ? pofo_option_lightbox_image_caption($value) : array();
								$img_lightbox_title 	= !empty( $value ) ? pofo_option_lightbox_image_title($value) : array();
								$image_lightbox_caption = !empty( $img_lightbox_caption['caption'] ) ? ' data-lightbox-caption="'.$img_lightbox_caption['caption'].'"' : '' ;
								$image_lightbox_title 	= !empty($img_lightbox_title['title'] ) ? ' title="'.$img_lightbox_title['title'].'"' : '' ;

							    $thumb = !empty( $value ) ? wp_get_attachment_image_src($value, $pofo_image_srcset) : array();
        						$pofo_full_url= !empty( $value ) ? wp_get_attachment_image_url( $value, 'full' ) : ''; // Lightbox image

							    $srcset = $srcset_data = $sizes_data = '';
							    $srcset = !empty( $value ) ? wp_get_attachment_image_srcset( $value, $pofo_image_srcset ) : '';
							    if( $srcset ){
							        $srcset_data = ' srcset="'.esc_attr( $srcset ).'"';
							    }

							    $sizes = !empty( $value ) ? wp_get_attachment_image_sizes( $value, $pofo_image_srcset ) : '';
							    if( $sizes ){
							        $sizes_data = ' sizes="'.esc_attr( $sizes ).'"';
							    }

								$output .='<li class="grid-item'.$pofo_column_animation_style.'">';
									if( $lightbox_gallery == 1 ){
							            $output .='<a href="'.$pofo_full_url.'" '.$image_lightbox_title.$image_lightbox_caption.'>';
				        					$output .= '<figure>';
							        }
								        		$output .= '<div class="portfolio-img bg-extra-dark-gray">';
			                                    	$output .= '<img src="'.$thumb[0].'" '.$image_alt.$image_title.' width="'.$thumb[1].'" height="'.$thumb[2].'"'.$srcset_data.$sizes_data.' class="project-img-gallery" data-no-retina="" />';
			                                    $output .= '</div>';
						            if( $lightbox_gallery == 1 ){
			                                    $output .= '<figcaption>';
			                                        $output .= '<div class="portfolio-hover-main text-center">';
			                                            $output .= '<div class="portfolio-hover-box vertical-align-middle">';
			                                                $output .= '<div class="portfolio-hover-content position-relative">';
			                                                    $output .= '<i class="ti-zoom-in text-white fa-2x"></i>';
			                                                $output .= '</div>';
			                                            $output .= '</div>';
			                                        $output .= '</div>';
			                                    $output .= '</figcaption>';
			                                $output .= '</figure>';
							            $output .='</a>';
							        }
	                            $output .='</li>';
						    }
				        $output .='</ul>';
				    $output .='</div>';
			    endif;
     		break;

		}

        // Responsive CSS Box Style
        if( $pofo_enable_responsive_css == 1 && !empty( $responsive_style ) ) {
            
            $pofo_responsive_style .= $responsive_style;
        }

		return $output;   
	}
}
add_shortcode( 'pofo_image_gallery', 'pofo_image_gallery_shortcode' );