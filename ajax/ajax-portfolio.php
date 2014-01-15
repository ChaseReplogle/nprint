<?php
require_once( "../../../../wp-config.php" );
// or require_once( "../../../../wp-load.php" );

$title_slug = $_GET["category"];
$title_lower = strtolower($title_slug);
$title_replaced = str_replace( " ", "-", $title_lower);
?> 

<?php 
query_posts('post_type=projects&posts_per_page=1&project_categories='.$title_replaced); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<div class="medium-7 columns row-image">
			<?php while(has_sub_field("project_images")): ?>
				<?php if(get_row_layout() == "project_image"): ?>
					<img src="<?php the_sub_field("image"); ?>" alt="<?php the_title(); ?>"/>
				<?php endif; ?>
			<?php endwhile; ?>
		</div>
	
  		<div class="medium-5 columns row-content">
  			<h2>Our Work</h2>
  			<h4><?php the_title(); ?></h4>
  			<p><?php the_excerpt();?></p>
  		<blockquote>"<?php the_field("client_quote"); ?>"</blockquote><cite><?php the_field("client_title"); ?></cite></br>
			<p><a href="#" class="secondary_button">More Work</a></p>
  		</div>

<?php endwhile; ?>

<?php endif; ?>

<?php wp_reset_query(); // reset the query ?>



