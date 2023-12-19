<div class="spotlight-container">
    
</div>
<div class="spotlight">    
    <div class="featured-article">
        <?php
        // Set up the arguments for the WP_Query
        $args = array(
            'tag' => 'featured',      // Look for posts with the 'featured' tag
            'posts_per_page' => 1,    // Limit to only 1 post
            'orderby' => 'date',      // Order by post date
            'order' => 'DESC'         // Start with the most recent
        );

        // Create a new instance of WP_Query
        $featured_query = new WP_Query($args);

        // Check if the query has posts and display them
        if ($featured_query->have_posts()) : 
            while ($featured_query->have_posts()) : $featured_query->the_post();
                ?>
                <div class="image" style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>'); background-size: cover; background-position: center;">
                    <!-- Optional: Additional content if needed -->
                </div>

                <div class="details">
                    <h2 class="article-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <p class="date"><span><?php echo get_the_date('j F Y'); ?></span></p>
                    <p class="author">By: 
                        <span>
                            <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a>
                        </span>
                    </p>
                    <p class="excerpt">
                        <?php 
                        $excerpt = get_the_excerpt(); // Get the full excerpt
                        $excerpt_words = explode(' ', $excerpt); // Split excerpt into an array of words
                        $first_five_words = array_slice($excerpt_words, 0, 25); // Get the first 25 words
                        echo implode(' ', $first_five_words) . '...'; // Combine the first five words back into a string and append an ellipsis
                        ?>
                    </p>
                    <p class="category">Category:
                        <span>	
                            <?php 
                            $categories = get_the_category(); 
                            if ( ! empty( $categories ) ) {
                                // Get the URL of the first category
                                $category_link = get_category_link( $categories[0]->term_id );
                                // Create a link with the URL and the category name
                                echo '<a href="' . esc_url( $category_link ) . '" alt="' . esc_attr( $categories[0]->name ) . '">' . esc_html( $categories[0]->name ) . '</a>';
                            } else {
                                echo 'Uncategorized';
                            }
                            ?>
                        </span>
                    </p>
                    
                    <p class="tagged">Tags: 
                        <span>
                            
                            <?php 
                            $post_tags = get_the_tags();
                            $tags_output = [];
                            $tag_count = 0; // Counter for the number of tags displayed

                            if ($post_tags) {
                                foreach ($post_tags as $tag) {
                                    if ($tag->name !== 'featured') { // Exclude the 'featured' tag
                                        $tag_link = get_tag_link($tag->term_id);
                                        $tags_output[] = '<a href="' . esc_url($tag_link) . '" alt="' . esc_attr($tag->name) . '">' . esc_html($tag->name) . '</a>';
                                        $tag_count++;

                                        if ($tag_count == 3) { // Break the loop after three tags
                                            break;
                                        }
                                    }
                                }
                                echo implode(', ', $tags_output);
                            }
                            ?>
                        </span>
                    </p>
                    
                    
                    <a href="<?php the_permalink(); ?>" class="primary-button primary-button--medium single-card-cta">Read More</a>
                </div>
                <?php
            endwhile;
        else :
            echo '<p>No featured articles found.</p>';
        endif;

        // Reset post data to avoid conflicts with other queries
        wp_reset_postdata();
        ?>
    </div>

    <div class="latest-articles">
        <?php
        // First, get the term ID of the 'featured' tag
        $featured_tag_id = get_term_by('slug', 'featured', 'post_tag')->term_id;

        $args = array(
            'post_type' => 'post', // Assuming you're using standard posts
            'posts_per_page' => 3, // Limit to the latest 3 articles
            'order' => 'DESC',
            'orderby' => 'date',
            'tax_query' => array(
                array(
                    'taxonomy' => 'post_tag',
                    'field' => 'term_id',
                    'terms' => $featured_tag_id,
                    'operator' => 'NOT IN' // Exclude posts with 'featured' tag
                )
            )
        );

        $latest_articles_query = new WP_Query($args);

        if ($latest_articles_query->have_posts()) :
            while ($latest_articles_query->have_posts()) : $latest_articles_query->the_post();
                ?>
                <div class="item" onclick="location.href='<?php the_permalink(); ?>'">
                    <div class="left" style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>'); background-size: cover; background-position: center;">
                        <!-- Background image set here -->
                    </div>
                    <div class="right">
                        <h4 class="article-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                        <p class="article-excerpt"><?php echo wp_trim_words(get_the_excerpt(), 10, '...'); ?></p>
                    </div>
                </div>
                <?php
            endwhile;
            wp_reset_postdata();
        else :
            echo '<p>No articles found.</p>';
        endif;
        ?>
    </div>
</div>