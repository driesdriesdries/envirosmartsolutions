<?php
    if ( have_posts() ) :
        while ( have_posts() ) :
            the_post();
            global $product;
            ?>
                <?php echo $product->get_image( 'single-product' ); ?>
            <?php
        endwhile;
    endif;
?>