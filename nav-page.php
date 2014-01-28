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
				  echo "<li><a>Products and Services</a></li>";
			?>

			<?php
				if(is_post_type_archive('projects' ) || is_singular( 'projects' )) 
				  echo "<li><a>Portfolio Projects</a></li>";
			?>

			<?php
				if(is_post_type_archive('support' ) || is_singular( 'support' )) 
				  echo "<li><a>Support</a></li>";
			?>

			<?php
				if(is_tax( 'product_categories' )) 
				  echo "<li><a>Portfolio Projects</a></li>";
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


</section>
</nav>
</div>	