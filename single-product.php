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
	<div class="container">
		<section class="section">

		<!-- Add to cart button -->

			<main id="primary" class="site-main">
				<?php
				while ( have_posts() ) :
					the_post();
					
					get_template_part( 'template-parts/content', get_post_type() );

					the_post_navigation(
						array(
							'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'envirosmartsolutions' ) . '</span> <span class="nav-title">%title</span>',
							'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'envirosmartsolutions' ) . '</span> <span class="nav-title">%title</span>',
						)
					);

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>
				<form class="cart" method="post" enctype='multipart/form-data'>
					<?php
						// Output the product's add to cart button
						do_action( 'woocommerce_' . $product->get_type() . '_add_to_cart' );
						
						// Add a link to the cart page
						$cart_url = wc_get_cart_url();
						$cart_link = '<a href="' . esc_url( $cart_url ) . '">' . __( 'View cart', 'woocommerce' ) . '</a>';
						echo $cart_link;
					?>
				</form>
			</main><!-- #main -->
		</section>
	</div>
	

<?php
get_sidebar();
get_footer();
