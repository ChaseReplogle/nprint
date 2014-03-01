<?php
/**
 * My Account page
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $woocommerce;

$woocommerce->show_messages(); ?>

<p class="myaccount_user">
	Hello, <strong><?php echo $current_user->display_name; ?></strong>. From your account dashboard you can view your <a href="/account/orders/">recent orders</a>, manage your <a href="/account/edit-address/">shipping and billing addresses</a>, change your <a href="/business-information/?gform_post_id=<?php echo $business_id; ?>">user image</a>, update <a href="/business-information/?gform_post_id=<?php echo $business_id; ?>">business info</a>, and <a href="/account/change-password/">change your password</a>
</p>

<?php do_action( 'woocommerce_before_my_account' ); ?>

<?php woocommerce_get_template( 'myaccount/my-downloads.php' ); ?>

<div class="row">
	<hr>
</div>

<?php woocommerce_get_template( 'myaccount/my-orders.php', array( 'order_count' => $order_count ) ); ?>

<div class="row">
	<hr>
</div>

<?php woocommerce_get_template( 'myaccount/my-address.php' ); ?>

<?php do_action( 'woocommerce_after_my_account' ); ?>