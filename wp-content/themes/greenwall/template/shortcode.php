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
					<h1>'.$atts['title'].'</h1>
					<p>'.$content.'</p></div>'
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
			  <p><i class="icon-envelop"></i><strong>Email : </strong>'.$atts['email'].'</p>';
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
		'class'=>'default'
		),$atts,'social_link_contact');
	$map= '<div class="map-wrapper">
				<div class="'.$atts['class'].'" id="map-canvas"></div>
			</div>';
	return $map;
}
add_shortcode('googlemaps','googlemaps_form');
?>
