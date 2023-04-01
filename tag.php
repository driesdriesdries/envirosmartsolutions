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
			<?php  my_custom_breadcrumbs(); ?>
			<main>
				<div class="section card-section">
				<?php
					// Get the current tag
					$current_tag = single_tag_title('', false);

					// Custom WP_Query to order posts by ascending date in the current tag
					$args = array(
						'post_type'      => 'post',
						'orderby'        => 'date',
						'order'          => 'ASC',
						'posts_per_page' => -1,
						'tag'            => $current_tag, // Display posts with the current tag only
					);

					$query = new WP_Query($args);

					if ($query->have_posts()) :
						while ($query->have_posts()) :
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
				
				<div class="section tags-widget">
					
				</div>
			</main>
		</div>
		

	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
