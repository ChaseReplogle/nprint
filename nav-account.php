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

<div id="myModal" class="reveal-modal" data-reveal>
    <div class="row">
      <div class="columns medium-6">
        <?php $args = array(
          'redirect' => site_url( '/dashboard' ),
          'label_username' => __( '' ),
          'label_password' => __( '' ),
          'remember' => false,
         ); ?>
        <?php wp_login_form( $args ); ?>
      </div>
      <div class="columns medium-6">
        Test
      </div>
    </div> 

    <script>
      jQuery('#user_login').attr( 'placeholder', 'Username' );
      jQuery('#user_pass').attr( 'placeholder', 'Password' );
    </script>
</div>