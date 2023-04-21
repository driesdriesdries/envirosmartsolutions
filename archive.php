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
		<?php get_template_part( 'template-parts/blog-navigation' ); ?>
		
		<div class="card-section">
			<?php
			// Get the current category ID
			$current_category_id = get_queried_object_id();

			// Set up the query arguments
			$args = array(
				'post_type'      => 'post',
				'orderby'        => 'date',
				'order'          => 'DESC',
				'posts_per_page' => -1,
				'cat'            => $current_category_id,
			);

			// Create a new WP_Query instance
			$query = new WP_Query( $args );

			// Start the loop
			if ( $query->have_posts() ) :
				while ( $query->have_posts() ) :
					$query->the_post();
					?>
					<div class="single-content-card">
						<div class="single-content-card__header" style="background-image: url('<?php echo get_the_post_thumbnail_url(null, 'card-image-thumbnail'); ?>'); background-position: center center; background-size: cover;"></div>
						<div class="single-content-card__body">
							<h3><a href="<?php the_permalink(); ?>" class="card-link"><?php the_title(); ?></a></h3>
							<p><?php
								$excerpt = get_the_excerpt();
								$trimmed_excerpt = mb_substr($excerpt, 0, 140);
								if (mb_strlen($excerpt) > 150) {
									$trimmed_excerpt .= '...';
								}
								echo $trimmed_excerpt;
							?></p>
						</div>
						<div class="single-content-card__cta">
							<a href="<?php the_permalink(); ?>" class="primary-button primary-button--medium single-card-cta">Learn More</a>
						</div>
					</div>
					<?php
				endwhile;
				wp_reset_postdata();
			else :
				echo '<p>No posts found.</p>';
			endif;
			?>
		</div>
	</div>
</main><!-- #main -->


<?php
// get_sidebar();
get_footer();
