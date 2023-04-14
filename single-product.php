<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>


<!-- Show Breadcrumbs -->
<?php 
if ( function_exists( 'woocommerce_breadcrumb' ) ) {
	woocommerce_breadcrumb();
}
?>

<div class="single-product-page-main">
	<div class="single-product-page-main__left">
		<div class="single-product-page-main__left--primary-image">
			<?php  get_template_part( 'template-parts/single-product/single-product-primary-image' ); ?>
		</div>
		<div class="single-product-page-main__left--image-gallery">
			<?php  get_template_part( 'template-parts/single-product/single-product-product-gallery' ); ?>
		</div>
	</div>
	
	<div class="single-product-page-main__right">
	<?php while ( have_posts() ) : the_post(); ?>
		<?php global $product; ?>

		<?php the_title( '<h1 class="product_title entry-title">', '</h1>' ); ?>
		
		<!-- Display the prices -->
		<?php if ( $product->is_on_sale() && $product->get_sale_price() ) : ?>
			<p class="price">
				<span class="regular"><?php echo wc_price( $product->get_regular_price() ); ?></span>	
				<span class="sale"><?php echo wc_price( $product->get_sale_price() ); ?></span>
			</p>
		<?php else : ?>
			<p class="price"><?php echo wc_price( $product->get_regular_price() ); ?></p>
		<?php endif; ?>

		<?php the_content(); ?>

		<!-- Add to cart -->
		<form class="cart" method="post" enctype="multipart/form-data">
			<?php do_action( 'woocommerce_before_add_to_cart_button' ); ?>
			
			<input type="hidden" name="add-to-cart" value="<?php echo esc_attr( $product->get_id() ); ?>" />
			
			<button type="submit" class="single_add_to_cart_button button alt"><?php echo esc_html( $product->single_add_to_cart_text() ); ?></button>
			
			<?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>
		</form>

		<?php endwhile; ?>
		
		<!-- Category and tags -->
		<?php if ( has_term( '', 'product_tag' ) || has_term( '', 'product_cat' ) ) : ?>
			<div class="product-meta">
				<?php 
					global $product;
					
					// Get product category
					$product_category = wc_get_product_category_list($product->get_id(), ', ');
					
					// Get product tags
					$product_tags = wc_get_product_tag_list($product->get_id(), ', ');
					
					// Get product SKU
					$product_sku = $product->get_sku();
					?>

					<?php if (!empty($product_category)): ?>
					<div class="product-category">
						<span><?php esc_html_e( 'Category:', 'woocommerce' ); ?></span>
						<span class="posted-in"><?php echo $product_category; ?></span>
					</div>
					<?php endif; ?>

					<?php if (!empty($product_tags)): ?>
					<div class="product-tags">
						<span><?php esc_html_e( 'Tags:', 'woocommerce' ); ?></span>
						<span class="tagged-as"><?php echo $product_tags; ?></span>
					</div>
					<?php endif; ?>

					<?php if (!empty($product_sku)): ?>
					<p>SKU: <?php echo $product_sku; ?></p>
					<?php endif; ?>


					<!-- Additional Information -->
					<?php
						global $product;
						$weight = $product->get_weight();
						$length = $product->get_length();
						$width = $product->get_width();
						$height = $product->get_height();
						
						if ( $weight || ( $length && $width && $height ) ) {
							echo '<h3>Additional Product Information</h3>';
						}

						if ( $product->managing_stock() && $product->is_in_stock() ) {
							echo wc_get_stock_html( $product ); // Output product quantity
						}

						if ( $weight ) {
							echo '<p class="product-weight">' . esc_html( __( 'Weight: ', 'woocommerce' ) . $weight . get_option( 'woocommerce_weight_unit' ) ) . '</p>';
						}

						if ( $length && $width && $height ) {
							echo '<p class="product-dimensions">' . esc_html( __( 'Dimensions: ', 'woocommerce' ) . $length . ' x ' . $width . ' x ' . $height . get_option( 'woocommerce_dimension_unit' ) ) . '</p>';
						}
				?>
			</div>
		<?php endif; ?>

	</div>
</div>


<?php
get_footer( 'shop' );

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
