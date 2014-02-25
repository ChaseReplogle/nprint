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

          <?php $user_ID = get_current_user_id(); ?> 

          <?php $args = array(
            'author'   => $user_ID,
            'post_type'  => 'businesses',
            'posts_per_page' => 1
          );

          query_posts( $args ); ?>

          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 
             <?php $thumb_id = get_post_thumbnail_id(); ?>
             <?php $user_image = wp_get_attachment_url($thumb_id,'thumbnail', true);?>
             
             <?php $attachments = get_children(array('post_parent' => get_the_ID(), 'post_type' => 'attachment', 'post_mime_type' => 'image', 'orderby' => 'menu_order'));
              if ( ! is_array($attachments) ) continue;
              $count = count($attachments);
              $first_attachment = array_shift($attachments); ?>
              <?php $business_image = wp_get_attachment_image($first_attachment->ID); ?>

             <?php $business_title = get_the_title(); ?>
             <?php $business_phone = get_field("business_phone"); ?>
             <?php $business_email = get_field("business_email"); ?>
             <?php $business_id = get_the_ID(); ?>
          <?php endwhile; endif; ?>

          <?php wp_reset_query(); ?>

            <li class="account-image"><a href="/account"><img src="<?php echo $user_image; ?>"></a></li>
            <li class="account-links"><a href="/account" class="has-dropdown"><?php global $current_user;
                get_currentuserinfo();
                  echo $current_user->display_name; ?></a>
              <ul class="dropdown">
                <li><a class="" href="/dashboard">Dashboard</a></li>
                <li><a class="" href="/dashboard/saved-quotes/">My Quotes</a></li>
                <?php wp_list_pages('title_li=&child_of=123'); ?>
              </ul>
            </li>
            <li>
                <a href="<?php echo $woocommerce->cart->get_cart_url(); ?>" title="<?php _e('View your shopping cart', 'woothemes'); ?>"><i class="fa fa-shopping-cart"></i> <?php echo sprintf(_n('%d item', '%d items', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);?></a>
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
    	  	  <li><a class="active" href="/registration/">Become a Member</a></li>
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