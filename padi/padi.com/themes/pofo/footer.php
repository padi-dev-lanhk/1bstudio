<?php
/**
 * The template for displaying the footer
 *
 * @package Pofo
 */
?>

<section id="contact-project">
    <div class="wpb_column vc_column_container vc_col-sm-12  col-xs-mobile-fullwidth text-center">
      <div class="vc_column-inner">
        <div class="wpb_wrapper">
          <h1 class="text-extra-dark-gray font-weight-600 display-inline-block alt-font text-uppercase heading-style2  heading-12" style="font-weight: 700;"><span class="lang_vi">BẠN CẦN TRAO ĐỔI HAY TƯ VẤN VỀ DỰ ÁN MỚI?</span><span class="lang_japan">新規プロジェクトについてのご相談はこちら</span></h5>
          <div class="text-medium-gray text-small margin-5px-bottom alt-font heading-style4  heading-13" style="font-size: 16px;margin-bottom:30px; line-height: 23px; color: #222222;" data-fontsize="16px" data-lineheight="23px"><span class="lang_vi">Hãy liên hệ ngay với với chúng tôi qua điện thoại, email hoặc bằng cách điền mẫu này! </span><span class="lang_japan">どんな案件でもご相談を承りますので、お気軽にお問い合わせください。</span></div>
          <a data-toggle="modal" data-target="#myModal" class="lang_vi popup-form-1 btn btn-transparent-deep-pink pofo-button-3  wow fadeInUp button-style7  btn-transparent-dark-gray btn-rounded  btn-large  animated" style="visibility: visible; animation-name: fadeInUp;">Mẫu liên hệ</a>
          <a data-toggle="modal" data-target="#myModal2" class="lang_japan btn btn-transparent-deep-pink pofo-button-3  wow fadeInUp button-style7  btn-transparent-dark-gray btn-rounded  btn-large  animated" style="visibility: visible; animation-name: fadeInUp;">ご相談はこちらからどうぞ</a>
        </div>
      </div>
    </div>
  </section>

<?php

	// Exit if accessed directly.
	if ( !defined( 'ABSPATH' ) ) { exit; }
	
	$pofo_box_layout = pofo_option( 'pofo_enable_box_layout', '' );
	if( $pofo_box_layout == '1' ) {
		echo '</div><!-- .box-layout -->';
	}

	// Enable / Disable Footer Wrapper
	$pofo_disable_footer_wrapper = pofo_option( 'pofo_disable_footer_wrapper', '0' );
	// Enable / Disable Footer
	$pofo_disable_footer = pofo_option( 'pofo_disable_footer', '1' );
	// Enable / Disable Footer Bottom
	$pofo_disable_footer_bottom = pofo_option( 'pofo_disable_footer_bottom', '1' );

	if( $pofo_disable_footer_wrapper == 1 || $pofo_disable_footer == 1 || $pofo_disable_footer_bottom == 1 ){
		echo '<footer id="colophon" class="pofo-footer bg-extra-dark-gray site-footer" itemscope="itemscope" itemtype="http://schema.org/WPFooter">';
			if( $pofo_disable_footer_wrapper == 1 ):
				get_template_part( 'templates/footer/footer-wrapper-content' );
			endif;
			if( $pofo_disable_footer == 1 ):
				get_template_part( 'templates/footer/content' );
			endif;
			if( $pofo_disable_footer_bottom == 1 ):
				get_template_part( 'templates/footer/footer-bottom-content' );
			endif;
		echo '</footer>';
	}

	$pofo_header_layout = pofo_option( 'pofo_header_type', 'headertype1' );
	if( $pofo_header_layout == 'headertype3' ) {
		echo '</div>';
	}

	$pofo_hide_scroll_to_top = get_theme_mod( 'pofo_hide_scroll_to_top', '1' );
	if( $pofo_hide_scroll_to_top == 1 ){
		echo '<a class="scroll-top-arrow" href="javascript:void(0);"><i class="ti-arrow-up"></i></a>';
	}

	wp_footer();
?>
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h5 class="modal-title">Liên hệ để nhận tư vấn về dự án mới</h5>
      </div>
      <div class="modal-body">
		  <?php
		  echo do_shortcode( '[contact-form-7 id="24101" title="Contact Form Creat Project"]' );
		  ?>
      </div>
      
    </div>

  </div>
</div>
<div id="myModal2" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h5 class="modal-title">新規プロジェクトについてのお問い合わせ</h5>
      </div>
      <div class="modal-body">
		  <?php
		  echo do_shortcode( '[contact-form-7 id="24302" title="Contact Form Creat Project Japan"]' );
		  ?>
      </div>
      
    </div>

  </div>
</div>
<script type="text/javascript">
			(function($){
			"use strict";
				$(document).on('click', '.item-iframe .ove-play', function (event) {
	    		var change = $(this).attr('id');
	   			 $("#video1 .wpb_video_wrapper>iframe").attr("src", "https://www.youtube.com/embed/" + change +"?rel=&autoplay=1");
				});
  			$(document).ready(function(){
  						var height_right = $(".snow-content-right").height();
  						var height_iframe = height_right - 15;
 							$(".snow-content-left .wpb_video_wrapper iframe").height(height_iframe); 
  			});
			})(jQuery);
		</script>
</body>

</html>