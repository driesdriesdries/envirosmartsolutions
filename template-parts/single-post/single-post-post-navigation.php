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
                echo '<a class="ghost-button ghost-button--small" href="' . get_permalink( $prev_post->ID ) . '">&laquo; ' . esc_html( $prev_post->post_title ) . '</a>';
                echo '</div>';
            }

            if ( $next_post ) {
                echo '<div class="next-post-link">';
                echo '<a class="ghost-button ghost-button--small" href="' . get_permalink( $next_post->ID ) . '">' . esc_html( $next_post->post_title ) . ' &raquo;</a>';
                echo '</div>';
            }

            echo '</div>';
        }
    ?>
</div>