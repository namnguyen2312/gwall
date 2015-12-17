<?php
/**
 *
 * @package Tesseract
 */
function get_title($atts,$content=null){
	   $atts = shortcode_atts( array(
	   	'title'=>'default',
    ), $atts,'title_test');
	return  '
			<section id="slider" class="content-background">
			<div class="container">
				<div class="main-title white">
					<h2>'.$atts['title'].'</h2>
					<h6>'.$content.'</h6>
					</div>
	 		</section>'
					;
}
add_shortcode('title_test','get_title');
?>