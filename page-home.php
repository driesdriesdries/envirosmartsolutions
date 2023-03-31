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

				<?php 
					$categories = get_categories();
					foreach ($categories as $category) {
						echo '<div class="single-content-card">';
						echo '<div class="single-content-card__header" style="background-image: url('.get_theme_file_uri('images/soil-gel/hero-desktop.png').'); background-position: center center; background-size: cover;"></div>';
						echo '<div class="single-content-card__body">';
						echo '<h3>'.$category->name.'</h3>';
						echo '<p>'.$category->description.'</p>';
						echo '</div>';
						echo '<div class="single-content-card__cta">';
						echo '<a href="'.get_category_link($category->term_id).'" class="primary-button-medium single-card-cta">Learn More</a>';
						echo '</div>';
						echo '</div>';
					}
				?>
				
			</div>
		</div>
	</main><!-- #main -->

<?php
get_footer();
