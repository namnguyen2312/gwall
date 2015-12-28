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

function form_contact($atts,$content=null){
	$atts=shortcode_atts(array(
		'title'=>'default',
		'class'=>'default'
		),$atts,'form_contact');
	$form= '<section id="contact-wrapper">
			<div  class="container">
			<div class="row">
			<div class="'.$atts['class'].'">
				<h2>'.$atts['title'].'</h2>
				<form  action="" method="post" class="contact-form row">	
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
							<button name="submit" type="submit" id="contact-submit" >Send Email</button>
						</div>
				</form>
			</div>
			'.do_shortcode($content).'	
			</div>
			</div>
			</section>
			';

	
	return $form;
	;
}
add_shortcode('form_contact','form_contact');

function address_contact($atts,$content=null){
	$atts=shortcode_atts(array(
		'title'=>'default',
		'class'=>'default',
		'office'=>'default',
		'showroom'=>'default',
		'tel'=>'default',
		'fax'=>'default',
		'email'=>'default'
		),$atts,'address_contact');
	$address='<div class="'.$atts['class'].'">
			  <h2>'.$atts['title'].'</h2>
			  <p><i class="icon-home2"></i><strong>Main Office :  </strong> <span>'.$atts['office'].'</span></p>
			  <p><i class="icon-leaf"></i><strong>Show Room : </strong> '.$atts['showroom'].'</p>
			  <p><i class="icon-phone"></i><strong>Tel :</strong> '.$atts['tel'].'</p>
			  <p><i class="icon-printer"></i><strong>Fax : </strong>'.$atts['fax'].'</p>
			  <p><i class="icon-email"></i><strong>Email : </strong>'.$atts['email'].'</p>';
	return $address;
}
add_shortcode('address_contact','address_contact');

function social_link_contact($atts,$content=null){
	$atts=shortcode_atts(array(
		'title'=>'default',
		'facebook'=>'default',
		'twitter'=>'default',
		'pinter'=>'default',
		'google'=>'default'
		),$atts,'social_link_contact');
	$social='<div class="'.$atts['class'].'">
			  <h2>'.$atts['title'].'</h2>
			  <nav>
					<ul>
						<li><a href="'.$atts['facebook'].'"><i class="icon-facebook3"></i></a></li>
						<li><a href="'.$atts['twitter'].'"><i class="icon-twitter"></i></a></li>
						<li><a href="'.$atts['pinter'].'"><i class="icon-pinterest"></i></a></li>
						<li><a href="'.$atts['google'].'"><i class="icon-google-plus3"></i></a></li>
					</ul>
			  </nav>';
	return $social;
}
add_shortcode('social_link_contact','social_link_contact');
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
