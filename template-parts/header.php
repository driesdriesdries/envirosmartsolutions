<div class="section section__navbar">
    <nav id="site-navigation" class="main-navigation">	
        <div class="nav-left">
            <div class="logo-box">
                <a href="<?php echo site_url();?>"><img id="envirosmart-logo" src="<?php echo get_theme_file_uri('images/logo.svg'); ?>" alt="EnviroSmart Logo"></a>
                <h1><a href="<?php echo site_url(); ?>">EnviroSmart <span>Solutions</span></a></h1>
            </div>
        </div>

        <div class="nav-right">
            <div class="menu-box">
                <ul class="menu-box-list">
                    <?php 
                    // Fetch all categories
                    $categories = get_categories();
                    foreach ($categories as $category) {
                        // Create a link for each category
                        echo '<li class="menu-box-list--item"><a href="' . esc_url(get_category_link($category->term_id)) . '">' . esc_html($category->name) . '</a></li>';
                    }
                    ?>
                    <li class="menu-box-list--item modaltrigger"><a href="#">Contact</a></li>
                </ul>
            </div>
            <div class="button-box">
                <button class="menutoggle">MENU</button>
            </div>
        </div>
	
    </nav>
</div>