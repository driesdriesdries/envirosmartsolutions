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
			<div class="section">
				<?php my_custom_breadcrumbs(); ?>
			</div>
			<div class="section">
			<?php
				if (have_posts()) :
					while (have_posts()) :
						the_post();
						the_content();
					endwhile;
				endif;
			?>
			</div>
		</div>

	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
