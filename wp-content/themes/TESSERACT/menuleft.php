<?php
/**
 *
 * @package Tesseract
 */

if (is_home ()) { /* Does not appear on frontpage */
	return;
}
?>

<div id="menu-left">
    <?php wp_nav_menu( array( 'theme_location' => 'thirddary', 'menu_class' => 'nav-menu' ) );?>
 </div>