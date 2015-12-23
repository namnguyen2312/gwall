<?php
/**
 *
 * @package greenwall
 */

/**
	@function shortcode get title and content
	@attributes: $title,$class
**/

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
add_shortcode('title','get_title');


/**
	@function shortcode get form content in Contact page
	@attributes: $title,$class
**/

function form_contact($atts){
	$atts=shortcode_atts(array(
		'title'=>'default',
		'class'=>'default'
		),$atts,'form_contact');
	return '
			<div class="'.$atts['class'].'">
			<h3>'.$atts['title'].'</h3>
			<form action="/" method="post" class="contact-form row">	
						<div class="col-sm-6">
							<label for="yourname" class="field">
								<input type="text" id="yourname" name="yourname" placeholder="Enter Your Name" required>
								<span class="icon-user icon"></span>
							</label>
						</div>
						<div class="col-sm-6">
							<label for="youremail" class="field">
								<input type="email" id="youremail" name="youremail" placeholder="Enter Your Email" required>
								<span class="icon-mail2 icon"></span>
							</label>
						</div>
						<div class="col-sm-12">
							<label for="subject" class="field">
								<input type="text" id="subject" name="subject" placeholder="Enter Subject" required>
								<span class="icon-book icon"></span>
							</label>
						</div>
						<div class="col-sm-12" field>
							<label for="message" class="field clearHeight">
								<textarea rows="5" id="message" placeholder="Include all the details you can" required></textarea>
								<span class="icon-bubbles2 icon"></span>
							</label>
						</div>
						<div class="col-sm-12">
							<button name="submit" type="submit" id="contact-submit">Send Email</button>
						</div>
					</form>
			</div>
	';
}
add_shortcode('form_contact','form_contact');

/**
	@function shortcode get googlemaps
	@attributes: $http,$width,$height,$style
**/
function googlemaps_form($atts){
	$atts=shortcode_atts(array(
		'http'=>'default',
		'width'=>'default',
		'height'=>'default',
		'style'=>'default'
		),$atts,'googlemaps_form');
	return '<iframe 
				src="'.$atts['http'].'"
				width="'.$atts['width'].'"
				height="'.$atts['height'].'"
				stype="'.$atts['style'].'">
			</iframe>';
}
add_shortcode('googlemaps','googlemaps_form');
?>
