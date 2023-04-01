<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package EnviroSmartSolutions
 */

get_header();
?>

	<main id="primary" class="site-main">
		<div class="container container__archive">
			<?php my_custom_breadcrumbs(); ?>
			<main>
				<div class="section card-section">
					<?php
						// Get the current category ID
						$current_category_id = get_queried_object_id();

						// Custom WP_Query to order posts by ascending date in the current category
						$args = array(
							'post_type'      => 'post',
							'orderby'        => 'date',
							'order'          => 'ASC',
							'posts_per_page' => -1,
							'cat'            => $current_category_id, // Display posts from the current category only
						);

						$query = new WP_Query( $args );

						if ( $query->have_posts() ) :
							while ( $query->have_posts() ) :
								$query->the_post();
								?>
								<div class="single-content-card">
									<div class="single-content-card__header" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>'); background-position: center center; background-size: cover;">
									</div>
									<div class="single-content-card__body">
										<h3><?php the_title(); ?></h3>
										<p><?php the_excerpt(); ?></p>
									</div>

									<div class="single-content-card__cta">
										<a href="<?php the_permalink(); ?>" class="primary-button-medium single-card-cta">Learn More</a>
									</div>
								</div>

								<?php
							endwhile;
							wp_reset_postdata(); // Reset the post data
						else :
							echo 'No posts found';
						endif;
					?>
				</div>
				<div class="section categories-widget">
					<?php
						// Get the current category ID
						$current_category_id = get_queried_object_id();

						// Get all categories except the current one
						$args = array(
							'hide_empty' => 1, // Set to 1 to hide empty categories
							'exclude'    => $current_category_id, // Exclude the current category
						);

						$categories = get_categories( $args );

						if ( $categories ) :
							echo '<div class="other-categories">';
							echo '<h3>Other Categories:</h3>';
							echo '<ul>';

							foreach ( $categories as $category ) {
								echo '<li>';
								echo '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '">' . esc_html( $category->name ) . '</a>';
								echo '</li>';
							}

							echo '</ul>';
							echo '</div>';
						endif;
					?>
				</div>
			</main>
		</div>
		

	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
