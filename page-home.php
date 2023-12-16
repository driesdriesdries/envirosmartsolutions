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
		<?php  get_template_part( 'template-parts/blog-navigation' ); ?>
		
		<div class="featured-post">
			<h2 class="heading">Featured Post</h2>
			<?php
			// Set up the arguments for the WP_Query
			$args = array(
				'tag' => 'featured',      // Look for posts with the 'featured' tag
				'posts_per_page' => 1,    // Limit to only 1 post
				'orderby' => 'date',      // Order by post date
				'order' => 'DESC'         // Start with the most recent
			);

			// Create a new instance of WP_Query
			$featured_query = new WP_Query($args);

			// Check if the query has posts and display them
			if ($featured_query->have_posts()) : 
				while ($featured_query->have_posts()) : $featured_query->the_post();
					?>
					<div class="instance">
						<div class="featured-post__left">
							<?php 
							// Display the featured image
							if (has_post_thumbnail()) {
								echo get_the_post_thumbnail($post->ID, 'large');
							}
							?>
						</div>
						<div class="featured-post__right">
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<p class="author">By <?php the_author(); ?></p>
							<div class="excerpt"><?php the_excerpt(); ?></div>
						</div>
					</div>
					<?php
				endwhile;
			endif;

			// Reset post data to avoid conflicts with other queries
			wp_reset_postdata();
			?>
		</div>

		<div class="section home-banner">
			<div class="home-banner__copy">
				<h1>Empowering Sustainable Living</h1>
				<p>Eco-Friendly Solutions and Practices for a Greener Future.We are focused on environmentally friendly, sustainable, and smart solutions or technologies. We cover topics such as green living, renewable energy, waste management, sustainable products, and eco-friendly practices, with the goal of promoting a more sustainable lifestyle and helping to preserve the environment.</p>
			</div>
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