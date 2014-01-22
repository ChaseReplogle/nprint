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

		<div class="medium-8 columns row-image">
			<a href="<?php the_permalink(); ?>"  class='image-hover'><img src="
				<?php $image = get_field('project_featured_image');
				echo $image['sizes']['large']; ?>
			" alt="<?php the_title(); ?>"/></a>
		</div>
	
  		<div class="medium-4 columns row-content">
  			<h4><?php the_title(); ?></h4>
  			<p><?php echo excerpt(55); ?></p>
  			<p><a href="#" class="secondary_button">View Full Portfolo</a></p>
  		</div>

<?php endwhile; ?>

<?php endif; ?>

<?php wp_reset_query(); // reset the query ?>



