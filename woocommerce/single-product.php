<?php
/**
 * The Template for displaying all single products.
 *
 * Override this template by copying it to yourtheme/woocommerce/single-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

get_header(); ?>

<?php include 'wp-content/themes/nprint/nav-account.php'; ?>
<?php include 'wp-content/themes/nprint/nav-main.php'; ?>
<?php include 'wp-content/themes/nprint/nav-dashboard.php'; ?>

<div class="row content-row">

	<div class="columns medium-8 page-main-content">

	<?php
		/**
		 * woocommerce_before_main_content hook
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action('woocommerce_before_main_content');
	?>

		<?php while ( have_posts() ) : the_post(); ?>

			<?php woocommerce_get_template_part( 'content', 'single-product' ); ?>

		<?php endwhile; // end of the loop. ?>

	<?php
		/**
		 * woocommerce_after_main_content hook
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action('woocommerce_after_main_content');
	?>

	</div>

	<div class="columns medium-4 sidebar">

		<h2>Test Sidebar</h2>
		<p>Include Information about free shipping</p>
		<p>Add multiple items to your cart</p>


	</div>

</div>

<script>
	$ = jQuery;
	$(".single_add_to_cart_button").prependTo(".sidebar");
	$(".product_totals").prependTo(".sidebar");
</script>

<div class="footer-wrapper">

<?php get_footer(); ?>