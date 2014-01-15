<?php
require_once( "../../../../wp-config.php" );
// or require_once( "../../../../wp-load.php" );

$title_slug = $_GET["category"];
$title_lower = strtolower($title_slug);
$title_replaced = str_replace( " ", "-", $title_lower);
?> 

<?php 
query_posts('posts_per_page=1&category_name='.$title_replaced); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<div class="medium-7 columns row-image">
			<img src="<?php echo get_template_directory_uri(); ?>/_/inc/images/banner.jpg" alt="Printer"/>
		</div>
	
  		<div class="medium-5 columns row-content">
  			<h2>Our Work</h2>
  			<h4><?php the_title(); ?></h4>
  			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sed ipsum malesuada, eleifend massa quis, tincidunt nulla. Etiam porta velit non tincidunt tempor. Proin venenatis dui arcu, vel viverra odio malesuada nec. Nullam tempor dapibus lorem ut molestie. Nullam tempor dapibus lorem ut molestie.</p>
  		<blockquote>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sed ipsum malesuada, eleifend massa quis, tincidunt nulla."</blockquote><cite>- Chase Replogle, Director of Marketing</cite></br>
			<p><a href="#" class="secondary_button">More Work</a></p>
  		</div>

<?php endwhile; ?>

<?php endif; ?>

<?php wp_reset_query(); // reset the query ?>



