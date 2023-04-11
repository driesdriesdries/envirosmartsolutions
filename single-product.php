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


<div class="single-product-page-breadcrumbs">
	<!-- Show Breadcrumbs -->
	<?php 
	if ( function_exists( 'woocommerce_breadcrumb' ) ) {
		woocommerce_breadcrumb();
	}
	?>
</div>

<div class="single-product-page-main">
	<div class="single-product-page-main__left">
	<?php
	if ( have_posts() ) :
		while ( have_posts() ) :
			the_post();
			global $product;
			?>
			<div class="product-image">
				<?php echo $product->get_image( 'card-image-thumbnail' ); ?>
			</div>
			<?php
		endwhile;
	endif;
	?>
	</div>
	
	<div class="single-product-page-main__right">
	<?php while ( have_posts() ) : the_post(); ?>
		<?php global $product; ?>

		<?php the_title( '<h1 class="product_title entry-title">', '</h1>' ); ?>
		
		<?php if ( $product->is_on_sale() && $product->get_sale_price() ) : ?>
			<p class="price">
				<span class="sale"><?php echo wc_price( $product->get_sale_price() ); ?></span>
				<span class="regular"><?php echo wc_price( $product->get_regular_price() ); ?></span>
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
				<?php if ( has_term( '', 'product_cat' ) ) : ?>
					<div class="product-category">
						<h3><?php esc_html_e( 'Category:', 'woocommerce' ); ?></h3>
						<?php echo wc_get_product_category_list( $product->get_id(), ', ', '<span class="posted-in">' . _n( '', '', count( $product->get_category_ids() ), 'woocommerce' ) . ' ', '</span>' ); ?>
					</div>
				<?php endif; ?>
				
				<?php if ( has_term( '', 'product_tag' ) ) : ?>
					<div class="product-tags">
						<h3><?php esc_html_e( 'Tags:', 'woocommerce' ); ?></h3>
						<?php echo wc_get_product_tag_list( $product->get_id(), ', ', '<span class="tagged-as">' . _n( '', '', count( $product->get_tag_ids() ), 'woocommerce' ) . ' ', '</span>' ); ?>
					</div>
				<?php endif; ?>
			</div>
		<?php endif; ?>

		

	</div>
</div>


<?php
get_footer( 'shop' );

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
