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
		
		<?php
			$current_category = get_queried_object();
			if ( $current_category->description ) {
				echo '<div class="section section__category-description">';
				echo '<div class="category-description">' . '<p>' . $current_category->description . '</p>' . '</div>';
				echo '</div class>';
			}
		?>
		
		<div class="section card-section">
			<?php
				$current_category_id = get_queried_object_id();

				$args = array(
					'post_type'      => 'post',
					'orderby'        => 'date',
					'order'          => 'ASC',
					'posts_per_page' => -1,
					'cat'            => $current_category_id,
				);

				$query = new WP_Query( $args );

				if ( $query->have_posts() ) :
					while ( $query->have_posts() ) :
						$query->the_post();
						?>
						<div class="single-content-card">
							<div class="single-content-card__header" style="background-image: url('<?php echo get_the_post_thumbnail_url(null, 'card-image-thumbnail'); ?>'); background-position: center center; background-size: cover;">
							</div>
							<div class="single-content-card__body">
								<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
								<p><?php
									$description = get_the_category()[0]->description;
									$trimmed_description = wp_trim_words( $description, 20, '...' );
									echo $trimmed_description;
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
					echo 'No posts found';
				endif;
			?>
		</div>
	</div>
</main><!-- #main -->


<?php
// get_sidebar();
get_footer();
