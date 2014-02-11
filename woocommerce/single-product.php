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

<?php if( is_user_logged_in()): ?>

<nav class="top-bar account-nav <?php if (! is_home()) { ?> inner-account-nav <?php } ?>" data-topbar>
    <?php if (! is_home()) { ?>
    <ul class="title-area">
        <li class="name">
          <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/_/inc/images/logo.png" alt="nPrint Graphix" width="386" height="190" /></a>
        </li>
      </ul>
    <?php } ?>
    <section class="top-bar-section right">
        <!-- Right Nav Section -->
        <ul>
            <li class="account-image"><a href="/dashboard"><img src="http://nprintgraphix.wpengine.com/wp-content/uploads/2014/02/Screen-Shot-2014-02-07-at-11.37.47-AM.png"></a></li>
            <li class="account-links"><a href="/account" class="has-dropdown">Adam Deviza</a>
              <ul class="dropdown">
                <li><a class="" href="/dashboard">My Quotes</a></li>
                <?php wp_list_pages('title_li=&child_of=123'); ?>
              </ul>
            </li>
            <li><a class="right-off-canvas-toggle" id="search-link"><i class="fa fa-search"></i> <span>Search</span></a></li>
        </ul>
    </nav>

<?php else: ?>
 <nav class="top-bar account-nav <?php if (! is_home()) { ?> inner-account-nav <?php } ?>" data-topbar>
    <?php if (! is_home()) { ?>
    <ul class="title-area">
        <li class="name">
          <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/_/inc/images/logo.png" alt="nPrint Graphix" width="386" height="190" /></a>
        </li>
      </ul>
    <?php } ?>
    <section class="top-bar-section right">
        <!-- Right Nav Section -->
        <ul>
    	  	  <li><a class="active" href="#">Become a Member</a></li>
    	  	  <li><a href="#" data-reveal-id="myModal" data-reveal>Log In</a></li>
    	  	  <li><a class="right-off-canvas-toggle" id="search-link"><i class="fa fa-search"></i> <span>Search</span></a></li>
        </ul>
    </nav>

        <div class="row">
          <div id="myModal" class="reveal-modal" data-reveal>
          <a class="close-reveal-modal"><i class="close fa fa-minus-square-o"></i></a>
          <div class="columns medium-6">
            <h2>Sign Into Your Account</h2>
            <?php $args = array(
              'redirect' => site_url( '/dashboard' ),
              'label_username' => __( '' ),
              'label_password' => __( '' ),
              'remember' => false,
             ); ?>
            <?php wp_login_form( $args ); ?>
            <a href="<?php echo wp_lostpassword_url(); ?>" title="Lost Password">Lost Password?</a>
            <script>
              $("#user_login").attr("placeholder", "Username or Email");
              $("#user_pass").attr("placeholder", "Password");
            </script>
          </div>
          <div class="columns medium-6 membership-wrap right">
            <div class="membership">
              <div class="membership-content">
                <h2>Not Yet a Member?</h2>
                <p>Lorum ipsum dolor set amour estes lorum dolor.</p>
                <a href="#" class="support_button">Create an Account</a>
              </div>
            </div>
          </div>
        </div> 
    </div>



<?php endif; ?>
<?php include '/nav-main.php'; ?>
<?php include '/nav-dashboard.php'; ?>

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

<div class="footer-wrapper">

<?php get_footer(); ?>