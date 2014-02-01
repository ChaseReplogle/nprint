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
            <li><a class="" href="/dashboard">Dashboard</a></li>
            <li><a href="/account" class="has-dropdown">Account</a>
              <ul class="dropdown">
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

<script>
  jQuery('#user_login').attr( 'placeholder', 'Email' );
  jQuery('#user_pass').attr( 'placeholder', 'Password' );
</script>

<?php endif; ?>