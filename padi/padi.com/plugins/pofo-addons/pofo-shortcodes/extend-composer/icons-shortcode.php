<?php
/**
 * Pofo Custom Icon (font awesome and et line) List For VC.
 *
 * @package Pofo
 */
?>
<?php 
/* icons shortcode settings */
vc_add_shortcode_param('pofo_icon', 'pofo_icon_shortcode', POFO_ADDONS_ROOT_DIR . '/pofo-shortcodes/js/custom.js');
if ( ! function_exists( 'pofo_icon_shortcode' ) ) :
  function pofo_icon_shortcode($settings, $value) {
      $pofo_icons = pofo_icons();
      $pofo_ti_icon = pofo_get_themify_icon_list();
      $pofo_fa_icon_solid  = pofo_fontawesome_solid();
      $pofo_fa_icon_regular = pofo_fontawesome_reg();
      $pofo_fa_icon_brand  = pofo_fontawesome_brand();
      $pofo_fa_icon_old    = pofo_fontawesome_old();
      $value_without_fontawesome_main_class = substr(strstr($value," "), 1);
      $pofo_fontawesome_icons_main_class =  explode(' ',trim($value));
      $pofo_fontawesome_new_icon_value = '';

      if($pofo_fontawesome_icons_main_class[0] == 'fa'){
        if(array_key_exists($value_without_fontawesome_main_class, $pofo_fa_icon_old)){
          $pofo_fontawesome_new_icon_value = $pofo_fa_icon_old[$value_without_fontawesome_main_class];
        }else{
          if(in_array($value_without_fontawesome_main_class, $pofo_fa_icon_solid)){
              $pofo_fontawesome_new_icon_value = 'fas '.$value_without_fontawesome_main_class;
          }else if(in_array($value_without_fontawesome_main_class, $pofo_fa_icon_regular)){
              $pofo_fontawesome_new_icon_value = 'far '.$value_without_fontawesome_main_class;
          }else if(in_array($value_without_fontawesome_main_class, $pofo_fa_icon_brand)){
              $pofo_fontawesome_new_icon_value = 'fab '.$value_without_fontawesome_main_class;
          }
        }
      }else{
        $pofo_fontawesome_new_icon_value = $value;
      }
      

      $output = '';

      $output .= "<div class='pofo_icon_container_main'>";
          foreach ($pofo_icons as $ikey => $ivalue) {
              $selected_icon = "";
              if($ivalue == $value) {
                $selected_icon = " active_icon";
              }
          $output .= '<span class="pofo_icon_preview'.$selected_icon.'"><i class="'.$ivalue.'" data-name="'.$ivalue.'"></i></span>';
          }

          foreach ($pofo_fa_icon_solid as $ikey => $ivalue) {
            $selected_icon = "";
            if('fas '.$ivalue == $pofo_fontawesome_new_icon_value) { 
                $selected_icon = " active_icon";
            }
            $output .= '<span class="pofo_icon_preview'.$selected_icon.'"><i class="fas '.$ivalue.'" data-name="fas '.$ivalue.'"></i></span>';
          }

          foreach ($pofo_fa_icon_regular as $ikey => $ivalue) {
            $selected_icon = "";
            if('far '.$ivalue == $pofo_fontawesome_new_icon_value) { 
              $selected_icon = " active_icon";
            }
            $output .= '<span class="pofo_icon_preview'.$selected_icon.'"><i class="far '.$ivalue.'" data-name="far '.$ivalue.'"></i></span>';
          }

          foreach ($pofo_fa_icon_brand as $ikey => $ivalue) {
            $selected_icon = "";
            if('fab '.$ivalue == $pofo_fontawesome_new_icon_value) { 
              $selected_icon = " active_icon";
            }
            $output .= '<span class="pofo_icon_preview'.$selected_icon.'"><i class="fab '.$ivalue.'" data-name="fab '.$ivalue.'"></i></span>';
          }
          
          foreach ($pofo_ti_icon as $ikey => $ivalue) {
              $selected_icon = "";
              if( $ivalue == $value ) {
                 $selected_icon = " active_icon";
              }
          $output .= '<span class="pofo_icon_preview'.$selected_icon.'"><i class="'.$ivalue.'" data-name="'.$ivalue.'"></i></span>';
          }
    
          $output .= '<input name="' . esc_attr( $settings['param_name'] ) . '" class="wpb_vc_param_value pofo_icon_field wpb-textinput ' .
               esc_attr( $settings['param_name'] ) . ' ' .
               esc_attr( $settings['type'] ) . '_field" type="hidden" value="' . esc_attr( $value ) . '" />';
      $output .= '</div>'; 

  return $output;
  }
endif;

if( !function_exists('pofo_icons')) {
  function pofo_icons() {
    $icons = array('icon-mobile','icon-laptop','icon-desktop','icon-tablet','icon-phone','icon-document','icon-documents','icon-search','icon-clipboard','icon-newspaper','icon-notebook','icon-book-open','icon-browser','icon-calendar','icon-presentation','icon-picture','icon-pictures','icon-video','icon-camera','icon-printer','icon-toolbox','icon-briefcase','icon-wallet','icon-gift','icon-bargraph','icon-grid','icon-expand','icon-focus','icon-edit','icon-adjustments','icon-ribbon','icon-hourglass','icon-lock','icon-megaphone','icon-shield','icon-trophy','icon-flag','icon-map','icon-puzzle','icon-basket','icon-envelope','icon-streetsign','icon-telescope','icon-gears','icon-key','icon-paperclip','icon-attachment','icon-pricetags','icon-lightbulb','icon-layers','icon-pencil','icon-tools','icon-tools-2','icon-scissors','icon-paintbrush','icon-magnifying-glass','icon-circle-compass','icon-linegraph','icon-mic','icon-strategy','icon-beaker','icon-caution','icon-recycle','icon-anchor','icon-profile-male','icon-profile-female','icon-bike','icon-wine','icon-hotairballoon','icon-globe','icon-genius','icon-map-pin','icon-dial','icon-chat','icon-heart','icon-cloud','icon-upload','icon-download','icon-target','icon-hazardous','icon-piechart','icon-speedometer','icon-global','icon-compass','icon-lifesaver','icon-clock','icon-aperture','icon-quote','icon-scope','icon-alarmclock','icon-refresh','icon-happy','icon-sad','icon-facebook','icon-twitter','icon-googleplus','icon-rss','icon-tumblr','icon-linkedin','icon-dribbble');
    return $icons;
  }
}

vc_add_shortcode_param('pofo_fontawesome_icon', 'pofo_font_awesome_icon_shortcode', POFO_ADDONS_ROOT_DIR . '/pofo-shortcodes/js/custom.js');
if ( ! function_exists( 'pofo_font_awesome_icon_shortcode' ) ) :
function pofo_font_awesome_icon_shortcode($settings, $value) {
    $pofo_fa_icon_solid  = pofo_fontawesome_solid();
    $pofo_fa_icon_regular = pofo_fontawesome_reg();
    $pofo_fa_icon_brand  = pofo_fontawesome_brand();
    $pofo_fa_icon_old    = pofo_fontawesome_old();
    $value_without_fontawesome_main_class = substr(strstr($value," "), 1);
    $pofo_fontawesome_icons_main_class =  explode(' ',trim($value));
    $pofo_fontawesome_new_icon_value = '';
    
    if($pofo_fontawesome_icons_main_class[0] == 'fa'){
      if(array_key_exists($value_without_fontawesome_main_class, $pofo_fa_icon_old)){
         $pofo_fontawesome_new_icon_value = $pofo_fa_icon_old[$value_without_fontawesome_main_class];
      }else{
        if(in_array($value_without_fontawesome_main_class, $pofo_fa_icon_solid)){
            $pofo_fontawesome_new_icon_value = 'fas '.$value_without_fontawesome_main_class;
        }else if(in_array($value_without_fontawesome_main_class, $pofo_fa_icon_regular)){
            $pofo_fontawesome_new_icon_value = 'far '.$value_without_fontawesome_main_class;
        }else if(in_array($value_without_fontawesome_main_class, $pofo_fa_icon_brand)){
            $pofo_fontawesome_new_icon_value = 'fab '.$value_without_fontawesome_main_class;
        }
      }
    }else{
      $pofo_fontawesome_new_icon_value = $value;
    }
      
    $output = '';

    $output .= "<div class='pofo_icon_container_main'>";
               
        foreach ($pofo_fa_icon_solid as $ikey => $ivalue) {
          $selected_icon = "";
          if('fas '.$ivalue == $pofo_fontawesome_new_icon_value) { 
              $selected_icon = " active_icon";
          }
          $output .= '<span class="pofo_icon_preview'.$selected_icon.'"><i class="fas '.$ivalue.'" data-name="fas '.$ivalue.'"></i></span>';
        }

        foreach ($pofo_fa_icon_regular as $ikey => $ivalue) {
          $selected_icon = "";
          if('far '.$ivalue == $pofo_fontawesome_new_icon_value) { 
            $selected_icon = " active_icon";
          }
          $output .= '<span class="pofo_icon_preview'.$selected_icon.'"><i class="far '.$ivalue.'" data-name="far '.$ivalue.'"></i></span>';
        }

        foreach ($pofo_fa_icon_brand as $ikey => $ivalue) {
          $selected_icon = "";
          if('fab '.$ivalue == $pofo_fontawesome_new_icon_value) { 
            $selected_icon = " active_icon";
          }
          $output .= '<span class="pofo_icon_preview'.$selected_icon.'"><i class="fab '.$ivalue.'" data-name="fab '.$ivalue.'"></i></span>';
        }
  
        $output .= '<input name="' . esc_attr( $settings['param_name'] ) . '" class="wpb_vc_param_value pofo_icon_field wpb-textinput ' .
             esc_attr( $settings['param_name'] ) . ' ' .
             esc_attr( $settings['type'] ) . '_field" type="hidden" value="' . esc_attr( $value ) . '" />';
    $output .= '</div>'; 

return $output;
}
endif;

vc_add_shortcode_param('pofo_etline_icon', 'pofo_et_line_icon_shortcode', POFO_ADDONS_ROOT_DIR . '/pofo-shortcodes/js/custom.js');
if ( ! function_exists( 'pofo_et_line_icon_shortcode' ) ) :
  function pofo_et_line_icon_shortcode($settings, $value) {
      $pofo_icons = pofo_icons();
      $output = '';
      $output .= "<div class='pofo_icon_container_main'>";
          foreach ($pofo_icons as $ikey => $ivalue) {
              $selected_icon = "";
              if($ivalue == $value) {
                $selected_icon = " active_icon";
              }
          $output .= '<span class="pofo_icon_preview'.$selected_icon.'"><i class="'.$ivalue.'" data-name="'.$ivalue.'"></i></span>';
          }
          
          $output .= '<input name="' . esc_attr( $settings['param_name'] ) . '" class="wpb_vc_param_value pofo_icon_field wpb-textinput ' .
               esc_attr( $settings['param_name'] ) . ' ' .
               esc_attr( $settings['type'] ) . '_field" type="hidden" value="' . esc_attr( $value ) . '" />';
      $output .= '</div>'; 

  return $output;
  }
endif;