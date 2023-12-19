<div class="explore">
    <h3>Explore Categories</h3>
    <div class="card-group">
        <?php 
            $args = array(
                'number' => 0, // Set to 0 to retrieve all categories
                'orderby' => 'name',
                'order' => 'ASC'
            );
            $categories = get_categories($args);
            foreach($categories as $category) {
                // Generate link to the category
                $category_link = get_category_link($category->term_id);
                // Use category name
                $category_name = $category->name;
                // Get the ACF image object for the category
                $category_image = get_field('category_feature_image', 'category_' . $category->term_id);
                
                // Check if image object is returned
                if($category_image) {
                    $category_image_url = $category_image['url'];
                    $category_image_alt = $category_image['alt'] ? $category_image['alt'] : $category_name;
                }
        ?>
        <div class="card">
            <a href="<?php echo esc_url($category_link); ?>" class="card-top">
                <?php if($category_image): ?>
                    <img src="<?php echo esc_url($category_image_url); ?>" alt="<?php echo esc_attr($category_image_alt); ?>">
                <?php else: ?>
                    <!-- Fallback image or text if no image found -->
                    <?php echo esc_html($category_name); ?>
                <?php endif; ?>
            </a>
            <div class="card-bottom">
                <a href="<?php echo esc_url($category_link); ?>"><h4><?php echo esc_html($category_name); ?></h4></a>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
