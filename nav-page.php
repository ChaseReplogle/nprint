<div class="contain-to-grid page-nav-warpper">

<nav class="top-bar page-nav" data-topbar>
<ul class="title-area">
     	<?php
			  if($post->post_parent) //inner page
			  	$section = wp_list_pages("title_li=&include=".$post->post_parent);
			  else // top level page
			  	$section = wp_list_pages("title_li=&include=".$post->ID."&echo=1"); ?>
				  	<?php echo $section; ?>

			<?php
				if(is_post_type_archive('products' ) || is_singular( 'products' )) 
				  echo "<li><a href='/products'>Products</a></li>";
			?>

			<?php
				if(is_post_type_archive('projects' ) || is_singular( 'projects' )) 
				  echo "<li><a href='/portfolio'>Portfolio</a></li>";
			?>

			<?php
				if(is_post_type_archive('support' ) || is_singular( 'support' )) 
				  echo "<li><a href='/support'>Support</a></li>";
			?>

			<?php
				if(is_tax( 'product_categories' )) 
				  echo "<li><a href='/portfolio'>Portfolio</a></li>";
			?>

			<?php
				if(is_search()) 
				  echo "<li><a>Search</a></li>";
			?>
</ul>

<section class="top-bar-section right">
    <!-- Right Nav Section -->
    <ul>
  	  <?php
			  if($post->post_parent) //inner page
			  	$children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=1");
			  	
			  else // top level page
			  	$children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=1");
			  	
			  if ($children) { ?>
				  <ul>
				  	
				  	<?php echo $children; ?>

				  </ul>
		<?php } ?>
    </ul>

    <?php if (is_page(116) || $post->post_parent=="116") { ?>
    	<ul>
    		<li><a href="<?php echo $woocommerce->cart->get_cart_url(); ?>" title="<?php _e('View your shopping cart', 'woothemes'); ?>"><?php echo sprintf(_n('%d item', '%d items', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);?> - <?php echo $woocommerce->cart->get_cart_total(); ?> Cart <i class="fa fa-shopping-cart"></i></a></li>
    	</ul>
	<?php } ?>


</section>
</nav>
</div>	