<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package greenwall
 */?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php bloginfo('title');?></title>
	<?php wp_head(); ?>
	<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
	
</head>
<body <?php body_class(); ?> >
<div id="wrapper">
	<section id="mainHeader">
		<header class="header">
			<div class="menu-navicon" id="menu-navicon">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 12" style="background-color:#ffffff00" version="1.1" xml:space="preserve" x="0px" y="0px" width="38px" height="32px"><rect x="0" y="0" width="18" height="2" fill="#ffffff"/><rect x="0" y="5" width="18" height="2" fill="#ffffff"/><rect x="0" y="10" width="18" height="2" fill="#ffffff"/></svg>
			</div>
		</header>
		<div class="menu-wrap">
			<nav class="menu">
				<div class="menu-list">
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
				</div>
			</nav>
			<button class="close-button" id="close-button">Close Menu</button>
		</div>
		<div class="content-wrap">
			<div class="overlay">
				<div class="content">
					<div class="center-content">
						<div class="logo-decor">
							<a href="index.php"><img class="img-responsive" src="<?php bloginfo('template_directory');?>/images/tets.png" alt="greenwall"></a>
						</div>
						<?php echo do_shortcode('[title_test title="Green Wall" class="center-text"]mang khong gian xanh den nha ban[/title_test]');?>
					</div>
				</div>
			</div>
		</div>
	</section> <!--End mainHeader-->


