<!-- product gallery -->
<?php
    global $product;

    $attachment_ids = $product->get_gallery_image_ids();

    if ( $attachment_ids ) {
        foreach ( $attachment_ids as $attachment_id ) {
            $full_size_image = wp_get_attachment_image_src( $attachment_id, 'single-product' ); // change 'full' to 'single-product'
            $thumbnail_image = wp_get_attachment_image_src( $attachment_id, 'thumbnail' );
            $image_title = get_post_field( 'post_title', $attachment_id );
            $image_alt = get_post_meta( $attachment_id, '_wp_attachment_image_alt', true );
            
            echo '<div class="woocommerce-product-gallery__image"><a href="' . esc_url( $full_size_image[0] ) . '" target="_blank"><img src="' . esc_url( $thumbnail_image[0] ) . '" alt="' . esc_attr( $image_alt ) . '" title="' . esc_attr( $image_title ) . '"></a></div>';
        }
    }
?>