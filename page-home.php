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

	<main id="primary" class="site-main container home-page">
		<div class="section home-banner">
			<div class="home-banner__copy">
				<h1>Empowering Sustainable Living</h1>
				<p>Eco-Friendly Solutions and Practices for a Greener Future.We are focused on environmentally friendly, sustainable, and smart solutions or technologies. We cover topics such as green living, renewable energy, waste management, sustainable products, and eco-friendly practices, with the goal of promoting a more sustainable lifestyle and helping to preserve the environment.</p>
			</div>
			<div class="card-section">
				
		

				<div class="single-content-card">
					<div class="single-content-card__header" style="background-image: url('<?php echo get_theme_file_uri('/images/hero-desktop.png'); ?>'); background-position: center center; background-size: cover;">
						
					</div>
					<div class="single-content-card__body">
						<h3>card heading</h3>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe id maiores quasi reiciendis, ducimus rem placeat tenetur suscipit qui, nostrum cum molestias vero deleniti distinctio, tempore repudiandae reprehenderit labore totam.</p>
					</div>
					<div class="single-content-card__cta">
						<a href="<?php echo site_url('/water-treatment'); ?>" class="primary-button-medium">Learn More</a>
					</div>
				</div>

				<div class="single-content-card">
					<div class="single-content-card__header" style="background-image: url('<?php echo get_theme_file_uri('/images/hero-desktop.png'); ?>'); background-position: center center; background-size: cover;">
						
					</div>
					<div class="single-content-card__body">
						<h3>card heading</h3>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe id maiores quasi reiciendis, ducimus rem placeat tenetur suscipit qui, nostrum cum molestias vero deleniti distinctio, tempore repudiandae reprehenderit labore totam.</p>
					</div>
					<div class="single-content-card__cta">
						<a href="<?php echo site_url('/water-treatment'); ?>" class="primary-button-medium">Learn More</a>
					</div>
				</div>
				
			</div>
		</div>
	</main><!-- #main -->

<?php
get_footer();
