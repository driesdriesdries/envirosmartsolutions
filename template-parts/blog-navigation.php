<div class="section section__blog-navigation">
        <div class="categories-list">
            <ul>
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
        <div class="tag-dropdown">
            <button>Tags</button>
        </div>
    <div class="search-box">
        <?php get_search_form(); ?>
    </div>
</div>