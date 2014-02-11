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

<nav class="top-bar main-nav" data-topbar>
  <ul class="title-area">
    <li class="name"></li>
    <li class="toggle-topbar menu-icon"><a href="#">Menu</a></li>
  </ul>

  <section class="top-bar-section">
    <!-- Right Nav Section -->
    <ul>  
        <?php wp_nav_menu( array('menu' => 'Main Navigation')); ?>
    </ul>
</nav>

<script>
  $( ".menu-item-has-children" ).addClass( "has-dropdown" );
  $( ".menu-item-has-children ul" ).addClass( "dropdown" );
</script>


<?php endif; ?>

<div class="contain-to-grid page-nav-warpper">

<nav class="top-bar page-nav" data-topbar>
<ul class="title-area">
     	<?php
			  if($post->post_parent) //inner page
			  	$section = wp_list_pages("title_li=&include=".$post->post_parent);
			  else // top level page
			  	$section = wp_list_pages("title_li=&include=".$post->ID."&echo=1"); ?>
				  	<?php echo $section; ?>
</ul>

<section class="top-bar-section right">
    <!-- Right Nav Section -->

    	<ul>
    		<li><a href="<?php echo $woocommerce->cart->get_cart_url(); ?>" title="<?php _e('View your shopping cart', 'woothemes'); ?>"><i class="fa fa-shopping-cart"></i> <?php echo sprintf(_n('%d item', '%d items', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);?> - <?php echo $woocommerce->cart->get_cart_total(); ?> Cart</a></li>
    	</ul>


</section>
</nav>

<div class="row">
	<div class="columns medium-12">
		<div class="breadcrumbs">
		    <?php if(function_exists('bcn_display'))
		    {
		        bcn_display();
		    }?>
		</div>
	</div>
</div>

</div>	

