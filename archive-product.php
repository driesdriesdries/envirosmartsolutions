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

    <!-- Breadcrumbs -->
    <?php 
    if ( function_exists( 'woocommerce_breadcrumb' ) ) {
        woocommerce_breadcrumb();
    }
    
    ?>
		
	<!-- Custom testing here -->
	<?php
        if ( is_shop() ) {
            // Show all products on the shop page
            $args = array(
                'post_type'      => 'product',
                'post_status'    => 'publish',
                'posts_per_page' => -1,
                'orderby'        => 'date',
                'order'          => 'DESC',
            );
        
            $heading_text = 'All Products';
        } else {
            // Show products from the current category on a specific product category page
            $current_category = get_queried_object();
            $args = array(
                'post_type'      => 'product',
                'post_status'    => 'publish',
                'posts_per_page' => -1,
                'orderby'        => 'date',
                'order'          => 'DESC',
                'tax_query'      => array(
                    array(
                        'taxonomy' => 'product_cat',
                        'field'    => 'slug',
                        'terms'    => $current_category->slug,
                    ),
                ),
            );
        
            $heading_text = 'Shop by ' . $current_category->name;
        }
        
        $products_query = new WP_Query($args);
        
        echo '<h1>' . $heading_text . '</h1>';
        
        if ($products_query->have_posts()) {
            echo '<div class="woocommerce-products">';
            echo '<div class="card-section">';
        
            while ($products_query->have_posts()) {
                $products_query->the_post();
                global $product;
        
                // Get the product thumbnail ID
                $thumbnail_id = $product->get_image_id();
        
                // Get the product image URL with custom size
                $image_src = wp_get_attachment_image_src($thumbnail_id, 'card-image-thumbnail');
                $image_url = $image_src[0];
        
                // Get the product name
                $product_name = get_the_title();
        
                // Get the product description
                $product_description = wp_trim_words($product->get_short_description(), 20);
        
                // Get the product price
                $product_price = $product->get_price_html();
        
                // Get the product permalink
                $product_permalink = get_permalink();
        
                // Display the product information in the content card format
                echo '<div class="single-content-card">';
                echo '<div class="single-content-card__header" style="background-image: url('. $image_url .'); background-position: center center; background-size: cover;"></div>';
                echo '<div class="single-content-card__body">';
                echo '<h3><a href="' . $product_permalink . '" class="card-link">' . $product_name . '</a></h3>';
                echo '<p>' . $product_description . '</p>';
                echo '<p>' . $product_price . '</p>';
                echo '</div>';
                echo '<div class="single-content-card__cta">';
                echo '<a href="' . $product_permalink . '" class="primary-button primary-button--medium single-card-cta">View Product</a>';
                //echo '<a href="' . $product->add_to_cart_url() . '" class="primary-button primary-button--medium single-card-cta" data-quantity="1" data-product_id="' . $product->get_id() . '" data-product_sku="' . $product->get_sku() . '" rel="nofollow">Add to Cart</a>';
                echo '</div>';
                echo '</div>';
            }
        
            echo '</div>';
            echo '</div>';
        } else {
            echo '<p> ...No products found.</p>';
        }
        
        wp_reset_postdata();
        
    ?>
	<!-- Custom testing ends here -->
	</div>
</main><!-- #main -->


<?php
// get_sidebar();
get_footer();
