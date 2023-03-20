<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package EnviroSmartSolutions
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<!-- Google Font -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,700;1,300&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<!-- <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'envirosmartsolutions' ); ?></a> -->

	<header id="masthead" class="site-header">

	<div class="container">
		
	<script>
		// get references to the button and the menu-box element
const menuToggleBtn = document.querySelector('.menutoggle');
const menuBox = document.querySelector('.menu-box');

// add a click event listener to the button
menuToggleBtn.addEventListener('click', function() {
  // toggle the 'expanded' class on the menu-box element
  menuBox.classList.toggle('expanded');
});
	</script>
	<div class="section section__navbar">
			<nav id="site-navigation" class="main-navigation">
				
				<div class="nav-left">
					<div class="logo-box">
						<h4>EnviroSmart <span>Solutions</span></h4>
					</div>
				</div>

				<div class="nav-right">
					<div class="menu-box">
						<ul class="menu-box-list">
							<li class="menu-box-list--item"><a href="#">How it works</a></li>
							<li class="menu-box-list--item"><a href="#">Applications</a></li>
							<li class="menu-box-list--item"><a href="#">Benefits</a></li>
							<li class="menu-box-list--item"><a href="#">Faq</a></li>
							<li class="menu-box-list--item modaltrigger"><a href="#">Contact</a></li>
						</ul>
					</div>
					<div class="button-box">
						<button class="menutoggle">MENU</button>
					</div>
				</div>

				
				
				
			</nav>
		</div>
	</div>
	
	</header><!-- #masthead -->

	
	