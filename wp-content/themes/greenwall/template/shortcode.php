<?php
/**
 *
 * @package greenwall
 */
function get_title($atts,$content=null){
	   $atts = shortcode_atts( array(
	   	'title'=>'default',
	   	'class'=>'default'
    ), $atts,'title_test');
	return  '
				<div class="'.$atts['class'].'">
					<h2>'.$atts['title'].'</h2>
					<h6>'.$content.'</h6></div>'
					;
}
add_shortcode('title_test','get_title');
?>
