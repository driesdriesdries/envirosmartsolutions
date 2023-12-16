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
		
		<div class="spotlight">
		<div class="featured-article">
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
            <div class="image" style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>'); background-size: cover; background-position: center;">
				<!-- Optional: Additional content if needed -->
			</div>

            <div class="details">
                <h3 class="article-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <p class="date">Date: <span><?php echo get_the_date('j F Y'); ?></span></p>
                <p class="read-time">Read Time: <span>4 Minutes</span></p>
                <p class="excerpt">
					<?php 
					$excerpt = get_the_excerpt(); // Get the full excerpt
					$excerpt_words = explode(' ', $excerpt); // Split excerpt into an array of words
					$first_five_words = array_slice($excerpt_words, 0, 25); // Get the first 25 words
					echo implode(' ', $first_five_words) . '...'; // Combine the first five words back into a string and append an ellipsis
					?>
				</p>
                <p class="category">Filed Under:
					<span>	
						<?php 
						$categories = get_the_category(); 
						if ( ! empty( $categories ) ) {
							// Get the URL of the first category
							$category_link = get_category_link( $categories[0]->term_id );
							// Create a link with the URL and the category name
							echo '<a href="' . esc_url( $category_link ) . '" alt="' . esc_attr( $categories[0]->name ) . '">' . esc_html( $categories[0]->name ) . '</a>';
						} else {
							echo 'Uncategorized';
						}
						?>
					</span>
				</p>
				
                <p class="tagged">Tagged With: 
					<span>
						
						<?php 
						$post_tags = get_the_tags();
						$tags_output = [];
						$tag_count = 0; // Counter for the number of tags displayed

						if ($post_tags) {
							foreach ($post_tags as $tag) {
								if ($tag->name !== 'featured') { // Exclude the 'featured' tag
									$tag_link = get_tag_link($tag->term_id);
									$tags_output[] = '<a href="' . esc_url($tag_link) . '" alt="' . esc_attr($tag->name) . '">' . esc_html($tag->name) . '</a>';
									$tag_count++;

									if ($tag_count == 3) { // Break the loop after three tags
										break;
									}
								}
							}
							echo implode(', ', $tags_output);
						}
						?>
					</span>
				</p>
                <p class="author">Authored by: 
					<span>
						<a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a>
					</span>
				</p>
				
				<a href="<?php the_permalink(); ?>" class="primary-button primary-button--medium single-card-cta">Learn More</a>
            </div>
            <?php
        endwhile;
    else :
        echo '<p>No featured articles found.</p>';
    endif;

    // Reset post data to avoid conflicts with other queries
    wp_reset_postdata();
    ?>
</div>

			<div class="latest-articles">
				Latest
			</div>
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