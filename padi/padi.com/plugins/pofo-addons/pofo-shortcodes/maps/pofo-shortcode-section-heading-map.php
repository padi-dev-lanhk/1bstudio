<?php
/**
 * Shortcode Map For Section Heading
 *
 * @package Pofo
 */
?>
<?php
/*-----------------------------------------------------------------------------------*/
/* Section Heading */
/*-----------------------------------------------------------------------------------*/

  vc_map( array(
    'name' => esc_html__( 'Section Heading', 'pofo-addons'),
    'description' => esc_html__( 'Add style section heading', 'pofo-addons' ),  
    'icon' => 'fas fa-heading pofo-shortcode-icon',
    'base' => 'pofo_section_heading',
    'category' => 'Pofo',
    'params' => array(
      array(
        'type' => 'dropdown',
        'heading' => esc_html__( 'Style', 'pofo-addons'),
        'param_name' => 'pofo_heading_type',
        'admin_label' => true,
        'value' => array(esc_html__( 'Select style', 'pofo-addons') => '',
                         esc_html__( 'Heading style 1', 'pofo-addons') => 'heading-style1',
                         esc_html__( 'Heading style 2', 'pofo-addons') => 'heading-style2',
                         esc_html__( 'Heading style 3', 'pofo-addons') => 'heading-style3',
                         esc_html__( 'Heading style 4', 'pofo-addons') => 'heading-style4',
                         esc_html__( 'Heading style 5', 'pofo-addons') => 'heading-style5',
                ),
        ),
      array(
        'type' => 'pofo_preview_image',
        'heading' => esc_html__( 'Select pre-made style for heading', 'pofo-addons'),
        'param_name' => 'heading_preview_image',
        'value' => array(esc_html__( 'Select heading type', 'pofo-addons') => '',
                         esc_html__( 'Heading style 1', 'pofo-addons') => 'heading-style1',
                         esc_html__( 'Heading style 2', 'pofo-addons') => 'heading-style2',
                         esc_html__( 'Heading style 3', 'pofo-addons') => 'heading-style3',
                         esc_html__( 'Heading style 4', 'pofo-addons') => 'heading-style4',
                         esc_html__( 'Heading style 5', 'pofo-addons') => 'heading-style5',
                ),
      ),
      array(
        'type' => 'textfield',
        'heading' => esc_html__( 'Heading text', 'pofo-addons'),
        'param_name' => 'pofo_heading',
        'description' => esc_html__( 'Use || to break the word in new line.', 'pofo-addons' ),
        'dependency' => array( 'element' => 'pofo_heading_type', 'value' => array('heading-style1','heading-style2','heading-style3','heading-style4','heading-style5') ),
      ),
      array(
        'type' => 'dropdown',
        'heading' => esc_html__( 'Heading text case', 'pofo-addons'),
        'param_name' => 'pofo_text_transform',
        'value' => array(  esc_html__('Select', 'pofo-addons') => '', 
                           esc_html__('Lowercase', 'pofo-addons') => 'text-lowercase',
                           esc_html__('Uppercase', 'pofo-addons') => 'text-uppercase',
                           esc_html__('Capitalize', 'pofo-addons') => 'text-capitalize',
                          ),
        'dependency' => array( 'element' => 'pofo_heading_type', 'value' => array('heading-style1','heading-style2','heading-style3','heading-style4','heading-style5') ),
      ),
      array(
        'type' => 'pofo_custom_switch_option',
        'heading' => esc_html__( 'Heading strikethrough', 'pofo-addons'),
        'param_name' => 'pofo_enable_underline_on_title',
        'value' => array(esc_html__( 'Off', 'pofo-addons') => '0', 
                         esc_html__( 'On', 'pofo-addons') => '1'
                        ),
        'std' => '1',
        'dependency' => array( 'element' => 'pofo_heading_type', 'value' => array('heading-style1') ),
      ),
      array(
        'type' => 'pofo_custom_switch_option',
        'heading' => esc_html__( 'Before and after separator', 'pofo-addons'),
        'param_name' => 'pofo_enable_separator_before_after_title',
        'value' => array(esc_html__( 'Off', 'pofo-addons') => '0', 
                         esc_html__( 'On', 'pofo-addons') => '1'
                        ),
        'std' => '1',
        'dependency' => array( 'element' => 'pofo_heading_type', 'value' => array('heading-style5') ),
      ),
      array(
        'type' => 'pofo_custom_switch_option',
        'heading' => esc_html__( 'Big length separator', 'pofo-addons'),
        'param_name' => 'pofo_enable_big_separator',
        'value' => array(esc_html__( 'Off', 'pofo-addons') => '0', 
                         esc_html__( 'On', 'pofo-addons') => '1'
                        ),
        'dependency' => array( 'element' => 'pofo_enable_separator_before_after_title', 'value' => array('1') ),
      ),
      array(
        'type' => 'pofo_custom_switch_option',
        'heading' => esc_html__( 'Heading link', 'pofo-addons'),
        'param_name' => 'pofo_enable_link',
        'value' => array(esc_html__( 'Off', 'pofo-addons') => '0', 
                         esc_html__( 'On', 'pofo-addons') => '1'
                        ),
        'dependency' => array( 'element' => 'pofo_heading_type', 'value' => array('heading-style1','heading-style2','heading-style3','heading-style4','heading-style5') ),
      ),
      array(
        'type' => 'dropdown',
        'heading' => esc_html__( 'Link target', 'pofo-addons'),
        'param_name' => 'pofo_link_target',
        'value' => array(esc_html__('Self', 'pofo-addons') => '_self', 
                           esc_html__('New tab / window', 'pofo-addons') => '_blank'
                          ),
        'dependency'  => array( 'element' => 'pofo_enable_link', 'value' => '1' ),
      ),
      array(
        'type' => 'textfield',
        'heading' =>esc_html__( 'Link / URL', 'pofo-addons'),
        'param_name' => 'pofo_link_url',
        'admin_label' => true,
        'description' => esc_html__( 'Enter full URL with http, like http://www.example.com', 'pofo-addons' ),
        'dependency'  => array( 'element' => 'pofo_enable_link', 'value' => '1' ),
      ),
      array(
        'type' => 'colorpicker',
        'class' => '',
        'heading' => esc_html__( 'Link hover color', 'pofo-addons' ),
        'param_name' => 'pofo_link_hover_color',
        'dependency'  => array( 'element' => 'pofo_enable_link', 'value' => '1' ),
      ),
      array(
        'type' => 'pofo_custom_switch_option',
        'heading' => esc_html__( 'Use additional font for heading', 'pofo-addons'),
        'param_name' => 'pofo_enable_alternate_font',
        'value' => array(esc_html__( 'Off', 'pofo-addons') => '0', 
                         esc_html__( 'On', 'pofo-addons') => '1'
                        ),
        'std' => '1',
        'description' => esc_html__( 'If On is selected then heading will use additional font family setup in WordPress customiser', 'pofo-addons' ),
        'dependency' => array( 'element' => 'pofo_heading_type', 'value' => array('heading-style1','heading-style2','heading-style3','heading-style4','heading-style5') ),
      ),
      array(
        'type' => 'dropdown',
        'param_name' => 'desktop_display',
        'heading' => esc_html__( 'Display setting', 'pofo-addons' ),
        'value' => array(esc_html__( 'Select display type', 'pofo-addons') => '',
                         esc_html__( 'Block', 'pofo-addons') => 'display-block',
                         esc_html__( 'Inline', 'pofo-addons') => 'display-inline',
                         esc_html__( 'Inline block', 'pofo-addons') => 'display-inline-block',
                         esc_html__( 'Table', 'pofo-addons') => 'display-table',
                         esc_html__( 'None', 'pofo-addons') => 'display-none',
                        ),
        'std' => 'display-inline-block',
        'dependency' => array( 'element' => 'pofo_heading_type', 'value' => array('heading-style2','heading-style3','heading-style5') ),
      ),
      array(
        'param_name' => 'pofo_custom_title_heading', // all params must have a unique name
        'type' => 'pofo_custom_title', // this param type
        'value' => esc_html__( 'Title typography', 'pofo-addons' ), // your custom markup
        'dependency' => array( 'element' => 'pofo_heading_type', 'value' => array('heading-style1','heading-style2','heading-style3','heading-style4','heading-style5') ),
        'group' => esc_html__( 'Typography', 'pofo-addons' ),
      ),
      array(
        'type' => 'textfield',
        'heading' => esc_html__( 'Font size', 'pofo-addons' ),
        'param_name' => 'pofo_title_font_size',
        'description' => esc_html__( 'In pixel like 12px.', 'pofo-addons' ),
        'dependency' => array( 'element' => 'pofo_heading_type', 'value' => array('heading-style1','heading-style2','heading-style3','heading-style4','heading-style5') ),
        'edit_field_class' => 'vc_col-sm-4 vc_column-with-padding',
        'group' => esc_html__( 'Typography', 'pofo-addons' ),
      ),
      array(
        'type' => 'textfield',
        'heading' => esc_html__( 'Line height', 'pofo-addons' ),
        'param_name' => 'pofo_title_line_height',
        'description' => esc_html__( 'In pixel like 20px.', 'pofo-addons' ),
        'dependency' => array( 'element' => 'pofo_heading_type', 'value' => array('heading-style1','heading-style2','heading-style3','heading-style4','heading-style5') ),
        'edit_field_class' => 'vc_col-sm-4',
        'group' => esc_html__( 'Typography', 'pofo-addons' ),
      ),
      array(
        'type' => 'textfield',
        'heading' => esc_html__( 'Letter spacing', 'pofo-addons' ),
        'param_name' => 'pofo_title_letter_spacing',
        'description' => esc_html__( 'Define letter spacing like 12px', 'pofo-addons' ),
        'dependency' => array( 'element' => 'pofo_heading_type', 'value' => array('heading-style1','heading-style2','heading-style3','heading-style4','heading-style5') ),
        'edit_field_class' => 'vc_col-sm-4',
        'group' => esc_html__( 'Typography', 'pofo-addons' ),
      ),
      array(
        'type' => 'dropdown',
        'param_name' => 'pofo_title_font_weight',
        'heading' => esc_html__( 'Font weight', 'pofo-addons' ),
        'value' => pofo_font_weight_style(),
        'dependency' => array( 'element' => 'pofo_heading_type', 'value' => array('heading-style1','heading-style2','heading-style3','heading-style4','heading-style5') ),
        'edit_field_class' => 'vc_col-sm-4',
        'group' => esc_html__( 'Typography', 'pofo-addons' ),
      ),
      array(
        'type' => 'pofo_custom_switch_option',
        'heading' => esc_html__( 'Font italic', 'pofo-addons'),
        'param_name' => 'pofo_title_italic',
        'value' => array(esc_html__( 'Off', 'pofo-addons') => '0',
                         esc_html__( 'On', 'pofo-addons') => '1'
                        ),
        'dependency' => array( 'element' => 'pofo_heading_type', 'value' => array('heading-style1','heading-style2','heading-style3','heading-style4','heading-style5') ),
        'edit_field_class' => 'vc_col-sm-4',
        'group' => esc_html__( 'Typography', 'pofo-addons' ),
      ),
      array(
        'type' => 'pofo_custom_switch_option',
        'heading' => esc_html__( 'Font underline', 'pofo-addons'),
        'param_name' => 'pofo_title_underline',
        'value' => array(esc_html__( 'Off', 'pofo-addons') => '0',
                         esc_html__( 'On', 'pofo-addons') => '1'
                        ),
        'dependency' => array( 'element' => 'pofo_heading_type', 'value' => array('heading-style1','heading-style2','heading-style3','heading-style4','heading-style5') ),
        'edit_field_class' => 'vc_col-sm-4',
        'group' => esc_html__( 'Typography', 'pofo-addons' ),
      ),
      array(
        'type' => 'dropdown',
        'heading' => esc_html__( 'Element tag', 'pofo-addons'),
        'param_name' => 'pofo_title_element_tag',
        'value' => array(esc_html__( 'Element tag', 'pofo-addons') => '',
                         esc_html__( 'h1', 'pofo-addons') => 'h1',
                         esc_html__( 'h2', 'pofo-addons') => 'h2',
                         esc_html__( 'h3', 'pofo-addons') => 'h3',
                         esc_html__( 'h4', 'pofo-addons') => 'h4',
                         esc_html__( 'h5', 'pofo-addons') => 'h5',
                         esc_html__( 'h6', 'pofo-addons') => 'h6',
                        ),
        'dependency' => array( 'element' => 'pofo_heading_type', 'value' => array('heading-style1','heading-style2','heading-style3','heading-style4','heading-style5') ),
        'edit_field_class' => 'vc_col-sm-4',
        'group' => esc_html__( 'Typography', 'pofo-addons' ),
      ),
      array(
        'type' => 'colorpicker',
        'class' => '',
        'heading' => esc_html__( 'Color', 'pofo-addons' ),
        'param_name' => 'pofo_title_color',
        'dependency' => array( 'element' => 'pofo_heading_type', 'value' => array('heading-style1','heading-style2','heading-style3','heading-style4','heading-style5') ),
        'edit_field_class' => 'vc_col-sm-4',
        'group' => esc_html__( 'Typography', 'pofo-addons' ),
      ),
      array(
        'type' => 'pofo_custom_switch_option',
        'heading' => esc_html__( 'Auto responsive font size', 'pofo-addons'),
        'param_name' => 'pofo_title_enable_responsive_font',
        'value' => array(esc_html__( 'Off', 'pofo-addons') => '0',
                         esc_html__( 'On', 'pofo-addons') => '1'
                        ),
        'description' => esc_html__( 'If ON then it will display font size automatically as per device size instead of above mentioned fixed font size in all devices.', 'pofo-addons' ),
        'dependency' => array( 'element' => 'pofo_heading_type', 'value' => array('heading-style1','heading-style2','heading-style3','heading-style4','heading-style5') ),
        'edit_field_class' => 'vc_col-sm-4',
        'group' => esc_html__( 'Typography', 'pofo-addons' ),
      ),
      array(
        'type' => 'css_editor',
        'heading' => esc_html__( 'CSS box', 'pofo-addons' ),
        'param_name' => 'css',
        'group' => esc_html__( 'Design Options', 'pofo-addons' ),
      ),
      array(
        'type' => 'dropdown',
        'param_name' => 'pofo_bg_image_type', 
        'heading' => esc_html__( 'Background type', 'pofo-addons' ),
        'value' => array(esc_html__('Select background type', 'pofo-addons') => '',
                         esc_html__('Fix background', 'pofo-addons') => 'fix-background',
                         esc_html__('Cover background', 'pofo-addons') => 'cover-background',
                        ),
        'edit_field_class' => 'vc_col-sm-3 vc_column-with-padding',
        'group' => esc_html__( 'Design Options', 'pofo-addons' ),
      ),
      array(
        'type' => 'dropdown',
        'heading' => esc_html__( 'Background position', 'pofo-addons' ),
        'param_name' => 'desktop_bg_image_position',
        'value' => $pofo_desktop_bg_image_position,
        'edit_field_class' => 'vc_col-sm-3',
        'group' => esc_html__( 'Design Options', 'pofo-addons' ),
      ),
      array(
        'type' => 'textfield',
        'heading' => esc_html__( 'Width', 'pofo-addons' ),
        'param_name' => 'desktop_width',
        'value' => '',
        'edit_field_class' => 'vc_col-sm-3',
        'group' => esc_html__( 'Design Options', 'pofo-addons' ),
      ),
      array(
        'param_name' => 'pofo_custom_separator_heading', // all params must have a unique name
        'type' => 'pofo_custom_title', // this param type
        'value' => '', // your custom markup
        'group' => esc_html__( 'Design Options', 'pofo-addons' ),
      ),
      array(
        'type' => 'pofo_custom_switch_option',
        'holder' => 'div',
        'class' => '',
        'heading' => esc_html__( 'Enable responsive css box', 'pofo-addons'),
        'param_name' => 'pofo_enable_responsive_css',
        'value' => array(esc_html__( 'OFF', 'pofo-addons') => '0', 
                         esc_html__( 'ON', 'pofo-addons') => '1'
                        ),
        'group' => esc_html__( 'Design Options', 'pofo-addons' ),
      ),
      array(
        'type' => 'responsive_css_editor',
        'heading' => esc_html__( 'Responsive css box', 'pofo-addons' ),
        'param_name' => 'responsive_css',
        'height' => 'no',
        'dependency' => array( 'element' => 'pofo_enable_responsive_css', 'value' => array('1') ),
        'group' => esc_html__( 'Design Options', 'pofo-addons' ),
      ),
      $pofo_vc_extra_id,
      $pofo_vc_extra_class,
      )
  ) );