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
		<div class="section section__navbar">
			<nav id="site-navigation" class="main-navigation">
				<div class="logo-box">
					<!-- <img src="#" alt="envirosmart logo"> -->
					<h4>EnviroSmart <span>Solutions</span></h4>
				</div>
				<div class="menu-box">
					<ul>
						<li><a href="#">how-it works</a></li>
						<li><a href="#">Application</a></li>
						<li><a href="#">Benefits</a></li>
						<li><a href="#">Faq</a></li>
						<li><a class="modaltrigger" href="#">Contact</a></li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
	
	</header><!-- #masthead -->

	
	