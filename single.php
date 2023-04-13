<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package EnviroSmartSolutions
 */

get_header();
?>
	<main id="primary" class="site-main">
		<div class="container">
			<?php my_custom_breadcrumbs(); ?>
			<?php  get_template_part( 'template-parts/single-post/single-post-banner' ); ?>	
			<div class="article-container">
				<?php  get_template_part( 'template-parts/single-post/single-post-left' ); ?>
				<div class="right">
					<div class="section section__article-body">
						<?php
							if (have_posts()) :
								while (have_posts()) :
									the_post(); ?>
									<h1><?php the_title();?></h1>
									<div class="single-post-meta">
										<?php  get_template_part( 'template-parts/single-post/single-post-published-date' ); ?>
										<?php  get_template_part( 'template-parts/single-post/single-post-social-icons' ); ?>
									</div>
									<?php  the_content();
								endwhile;
							endif;
						?>
						<?php  get_template_part( 'template-parts/single-post/single-post-tag-section' ); ?>
						<?php  get_template_part( 'template-parts/single-post/single-post-post-navigation' ); ?>
					</div>
				</div>
			</div>
		</div>
	</main><!-- #main -->
<?php
// get_sidebar();
get_footer();
