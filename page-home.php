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
					generate_single_content_card(
						get_theme_file_uri('/images/hero-desktop.png'), // Image URL
						'Soil Gel', // Heading
						'Soil Gel is a water-absorbent polymer that increases crop yield by retaining and releasing water at the roots when needed. This eco-friendly product benefits plants of all types, promoting healthy growth and reducing water and fertilizer usage. Grow smarter with Soil Gel', // Copy
						site_url('/soil-gel'), // CTA URL
						'Learn More' // CTA Text
					);

					generate_single_content_card(
						get_theme_file_uri('/images/water-treatment/hero3.png'), // Image URL
						'Water Treatment', // Heading
						'Efficient and sustainable water treatment solutions for any water source. Protect the environment and meet regulations with custom solutions that save resources and improve water quality. Explore our options today.', // Copy
						site_url('/water-treatment'), // CTA URL
						'Learn More' // CTA Text
					);
				?>
			</div>
		</div>
	</main><!-- #main -->

<?php
get_footer();
