<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package EnviroSmartSolutions
 */

get_header();
?>
	<main id="primary" class="site-main soil-gel-page">
		<div class="container container__1" style="background-image: url(<?php echo get_theme_file_uri("images/hero-desktop.png") ?>);">
			<?php  get_template_part( 'template-parts/soil-gel/hero' ); ?>
		</div>
		
		<div class="container container__2">
			<?php  get_template_part( 'template-parts/soil-gel/how-it-works' ); ?>
			<?php  get_template_part( 'template-parts/soil-gel/testimonial' ); ?>
			<?php  get_template_part( 'template-parts/soil-gel/applications' ); ?>
		</div>

		<div class="container container__3">
			<?php  get_template_part( 'template-parts/soil-gel/benefits' ); ?>
		</div>

		<div class="container container__4">
			<?php  get_template_part( 'template-parts/soil-gel/faq' ); ?>
			<?php  get_template_part( 'template-parts/soil-gel/social-proof' ); ?>
		</div>
	</main><!-- #main -->
<?php
get_footer();
