<div class="contain-to-grid">
<nav class="top-bar page-nav" data-topbar>

<ul class="title-area">
    <li class="name">
     	<h2><?php the_title(); ?></h2>
    </li>
  </ul>

<section class="top-bar-section right">
    <!-- Right Nav Section -->
    <ul>
  	  <?php
			  if($post->post_parent)
			  	$children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0");
			  else
			  	$children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0");
			  if ($children) { ?>
				  <ul>
				  	<?php echo $children; ?>
				  </ul>
		<?php } ?>
    </ul>
</section>
</nav>
</div>	