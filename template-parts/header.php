<div class="section section__navbar">
    <nav id="site-navigation" class="main-navigation">	
        <div class="nav-left">
            <div class="logo-box">
                <a href="<?php echo site_url();?>"><img id="envirosmart-logo" src="<?php echo get_theme_file_uri('images/logo.svg'); ?>" alt="EnviroSmart Logo"></a>
                <h4><a href="<?php echo site_url(); ?>">EnviroSmart <span>Solutions</span></a></h4>
            </div>
        </div>

        <div class="nav-right">
            <div class="menu-box">
                <ul class="menu-box-list">
                    <li class="menu-box-list--item"><a href="<?php echo site_url('/shop'); ?>">Shop</a></li>
                    <li class="menu-box-list--item"><a href="<?php echo site_url('/blog'); ?>">Blog</a></li>
                    <li class="menu-box-list--item"><a href="<?php echo site_url('/about-us'); ?>">About Us</a></li>
                    <li class="menu-box-list--item modaltrigger"><a href="#">Contact</a></li>
                    <?php
                        global $woocommerce;

                        if ($woocommerce->cart->get_cart_contents_count() > 0) {
                            echo '<li class="menu-box-list--item"><a href="' . wc_get_cart_url() . '" class="view-cart-button">View Cart (' . $woocommerce->cart->get_cart_contents_count() . ')</a></li>';
                        }
                    ?>
                </ul>
            </div>
            <div class="button-box">
                <button class="menutoggle">MENU</button>
            </div>
        </div>	
    </nav>
</div>