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
</div>	