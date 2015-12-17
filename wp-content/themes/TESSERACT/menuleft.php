<?php
/**
 *
 * @package Tesseract
 */
?>

<div id="menu-left">
	    <?php
	    	$args= array('title_li' => '' );
		    if (is_home ()) { /* Does not appear on frontpage */
				return;
			}
			$parents = wp_list_categories($args);
			    echo  $parent;
		?>
 </div>