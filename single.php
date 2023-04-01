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
			<div class="section section__post-navigation">
			<?php
				// Get the current post's category
				$categories = get_the_category();
				$category_id = ( ! empty( $categories ) ) ? $categories[0]->term_id : 0;

				// Get the next and previous posts in the same category
				$next_post = get_next_post( true, '', 'category' );
				$prev_post = get_previous_post( true, '', 'category' );

				// Output the links
				if ( $prev_post || $next_post ) {
					echo '<div class="post-navigation">';

					if ( $prev_post ) {
						echo '<div class="previous-post-link">';
						echo '<a href="' . get_permalink( $prev_post->ID ) . '">&laquo; ' . esc_html( $prev_post->post_title ) . '</a>';
						echo '</div>';
					}

					if ( $next_post ) {
						echo '<div class="next-post-link">';
						echo '<a href="' . get_permalink( $next_post->ID ) . '">' . esc_html( $next_post->post_title ) . ' &raquo;</a>';
						echo '</div>';
					}

					echo '</div>';
				}
				?>

			</div>
		</div>

	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
