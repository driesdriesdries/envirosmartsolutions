<div class="section section__blog-navigation">
    <div class="categories-pane">
        <div class="categories-pane__list ">
            <ul class="categories-pane__list--unordered ">
                <?php 
                    $categories = get_categories();
                    foreach ($categories as $category) {
                        if ($category->parent == 0) {
                            echo '<li>';
                            if (is_category($category->cat_ID)) {
                                echo '<span>' . $category->name . '</span>';
                            } else {
                                echo '<a href="' . get_category_link($category->cat_ID) . '">' . $category->name . '</a>';
                            }
                            echo '</li>';
                        }
                    }
                ?>      
            </ul>
        </div>
        <div class="categories-pane__toggle">
            <button class="categories-pane__toggle--button">
                <span>View Categories</span> 
            </button>
        </div>
    </div>
        
    <div class="tag-dropdown">
        <button class="tag-dropdown__button"><span>Tags</span></button>
        <div class="tag-dropdown__panel">
            <?php 
            $tags = get_tags(array(
                    'orderby' => 'count',
                    'order' => 'DESC',
                    'number' => 5 // Get only the top 5 tags
                ));

                if ($tags) {
                    echo '<ul>';
                    foreach ($tags as $tag) {
                        echo '<li><a href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a></li>';
                    }
                    echo '</ul>';
                } else {
                    echo 'No tags found';
                }
            ?>
        </div>
    </div>
    
        <!-- <div class="search-box">
            <div class="search-box__panel">
                <?php // get_search_form(); ?>
            </div>
            <div class="search-box__button">
                <button><img src="<?php //echo get_theme_file_uri('/images/search.svg'); ?>" alt=""></button>
            </div>
        </div> -->
</div>


