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
		
	<h2>Recent Posts</h2>
	<a href="<?php echo site_url('/blog');?>">View all categories</a>
	<div class="card-section">
	<?php
		$args = array(
			'posts_per_page' => 5,
			'orderby' => 'date',
			'order' => 'DESC',
		);

		$latest_posts = new WP_Query( $args );

		if ( $latest_posts->have_posts() ) :
			while ( $latest_posts->have_posts() ) : $latest_posts->the_post();
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
		endif;
		?>

	</div>
	<h2>Newest Products</h2>
	<a href="<?php echo site_url('/shop');?>">View all products</a>
			<div class="card-section">
			<?php
		$args = array(
			'posts_per_page' => 4,
			'post_type'      => 'product',
			'orderby'        => 'date',
			'order'          => 'DESC',
		);

		$latest_products = new WP_Query( $args );

		if ( $latest_products->have_posts() ) :
			while ( $latest_products->have_posts() ) : $latest_products->the_post();
				global $product;
				$product_permalink = get_permalink();
				$product_name = get_the_title();
				$product_description = get_the_excerpt();
				$product_price = $product->get_price_html();
				$image_id = $product->get_image_id();
				$image_url = wp_get_attachment_image_src( $image_id, 'card-image-thumbnail' )[0];
		?>
				<div class="single-content-card">
					<div class="single-content-card__header" style="background-image: url('<?php echo $image_url; ?>'); background-position: center center; background-size: cover;">
					</div>
					<div class="single-content-card__body">
						<h3><a href="<?php echo $product_permalink; ?>" class="card-link"><?php echo $product_name; ?></a></h3>
						<p><?php echo $product_description; ?></p>
						<p><?php echo $product_price; ?></p>
					</div>
					<div class="single-content-card__cta">
						<a href="<?php echo $product_permalink; ?>" class="primary-button primary-button--medium single-card-cta">View Product</a>
					</div>
				</div>
		<?php
			endwhile;
			wp_reset_postdata();
		endif;
		?>

	</div>
		
	</main><!-- #main -->

<?php
get_footer();
