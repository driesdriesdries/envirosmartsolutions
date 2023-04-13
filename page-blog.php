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
	
		<div class="section">
		<?php my_custom_breadcrumbs(); ?>
			<div class="home-banner__copy">
				<h1>Empowering Sustainable Living</h1>
				<p>Eco-Friendly Solutions and Practices for a Greener Future.We are focused on environmentally friendly, sustainable, and smart solutions or technologies. We cover topics such as green living, renewable energy, waste management, sustainable products, and eco-friendly practices, with the goal of promoting a more sustainable lifestyle and helping to preserve the environment.</p>
			</div>
			<?php  get_template_part( 'template-parts/blog-navigation' ); ?>
			<div class="card-section">

			<?php 
				$categories = get_categories();
				foreach ($categories as $category) {
					$image = get_field('category_feature_image', 'category_'.$category->term_id);
					$image_url = wp_get_attachment_image_src($image['id'], 'card-image-thumbnail')[0];
					echo '<div class="single-content-card">';
					echo '<div class="single-content-card__header" style="background-image: url('. $image_url .'); background-position: center center; background-size: cover;"></div>';
					echo '<div class="single-content-card__body">';
					echo '<h3><a href="'.get_category_link($category->term_id).'" class="card-link">'.$category->name.'</a></h3>';
					echo '<p>'. wp_trim_words($category->description, 20) .'</p>';
					echo '</div>';
					echo '<div class="single-content-card__cta">';
					echo '<a href="'.get_category_link($category->term_id).'" class="primary-button primary-button--medium single-card-cta">Learn More</a>';
					echo '</div>';
					echo '</div>';
				}
			?>
				
				
			</div>
		</div>
	</main><!-- #main -->
<?php
get_footer();