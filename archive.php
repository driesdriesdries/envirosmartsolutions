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
		<div class="container">
			<div class="section">
				<?php my_custom_breadcrumbs(); ?>
			</div>
			<section class="card-section">
				<?php
					if ( have_posts() ) :
						while ( have_posts() ) :
							the_post();
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
					else :
						echo 'No posts found';
					endif;
				?>
			</section>
		</div>
		

	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
