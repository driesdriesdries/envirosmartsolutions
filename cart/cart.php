<?php
/**
 * Cart Page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 7.4.0
 */

defined( 'ABSPATH' ) || exit;

do_action( 'woocommerce_before_cart' ); ?>

<!-- Testing the cart output -->
<?php
    if ( isset( $_POST['update_cart'] ) ) {
        $cart_item_key = $_POST['cart_item_key'];
        $quantity = $_POST['quantity'];
        WC()->cart->set_quantity( $cart_item_key, $quantity );
    }

    foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
        $_product = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );

        if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 ) {
            $product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );
            $product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );

            echo '<div class="cart-item">';
			
            // Product remove link
            echo '<div class="cart-item__remove">';
            echo '<a href="' . esc_url( wc_get_cart_remove_url( $cart_item_key ) ) . '" class="cart-item__remove" title="' . esc_attr__( 'Remove this item', 'woocommerce' ) . '">' . esc_html__( 'X', 'woocommerce' ) . '</a>';
            echo '</div>';

            // Product image
            $thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );
            echo '<div class="cart-item__thumbnail">' . $thumbnail . '</div>';

            // Product name
            echo '<div class="cart-item__name">';
            echo '<a href="' . esc_url( $product_permalink ) . '">' . $_product->get_name() . '</a>';
            echo '</div>';

            // Product price
            echo '<div class="cart-item__price">' . wc_price( $_product->get_price() ) . '</div>';

            // Product quantity
            echo '<div class="cart-item__quantity">';
            echo '<form class="cart-item__quantity-form" action="' . esc_url( wc_get_cart_url() ) . '" method="post">';
            echo '<input type="hidden" name="cart_item_key" value="' . esc_attr( $cart_item_key ) . '" />';
            echo '<input type="number" class="cart-item__quantity-input" name="quantity" value="' . esc_attr( $cart_item['quantity'] ) . '" />';
            echo '<button type="submit" class="cart-item__update" name="update_cart" value="' . esc_attr__( 'Update cart', 'woocommerce' ) . '">' . esc_html__( 'Update', 'woocommerce' ) . '</button>';
            echo '</form>';
            echo '</div>';

            echo '</div>';
        }
    }
?>

<!-- End testing cart output -->

<!-- Voucher testing -->
<div class="checkout_coupon_wrapper">
    <?php 
    if ( ! empty( $_POST['coupon_code'] ) ) {
        $coupon_code = wc_clean( $_POST['coupon_code'] );
        WC()->cart->apply_coupon( $coupon_code );
    }

    echo '<form class="checkout_coupon" method="post" style="margin-bottom: 20px;">';
    echo '<input type="text" name="coupon_code" class="input-text" placeholder="' . esc_attr__( 'Coupon code', 'woocommerce' ) . '" id="coupon_code" value="" />';
    echo '<button type="submit" class="button" name="apply_coupon" value="' . esc_attr__( 'Apply Coupon', 'woocommerce' ) . '">' . esc_html__( 'Apply Coupon', 'woocommerce' ) . '</button>';
    echo '</form>';
    ?>
</div>
<!-- Voucher testing ends -->

<!-- Code that displays the cart total -->
<div class="cart-wrapper">
	<div class="cart-wrapper__total">
	<h3><?php esc_html_e( 'Cart Total', 'woocommerce' ); ?></h3>
    <span class="amount"><?php echo wp_kses_data( WC()->cart->get_cart_total() ); ?></span>
    <a href="<?php echo esc_url( wc_get_checkout_url() ); ?>" class="primary-button primary-button--medium checkout-button button alt wc-forward"><?php esc_html_e( 'Proceed to checkout', 'woocommerce' ); ?></a>
	</div>
</div>

<!-- End code that displays the total -->

<?php do_action( 'woocommerce_after_cart' ); ?>
