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
		<li><a class="right-off-canvas-toggle">Right Menu</a></li>
    </ul>
</section>
</nav>
</div>	