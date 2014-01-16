<?php
require_once( "../../../../wp-config.php" );
// or require_once( "../../../../wp-load.php" );

$post_id = $_GET["id"];
?> 

<?php 
query_posts('post_type=marketing_messages&posts_per_page=1&include='.$post_id); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<div class="marketing-ajax">
		<div class="medium-5 medium-push-7 columns row-content">

				<div class="marketing-content">
					<h4><?php echo $post_object->post_title; ?></h4>
		  			<p><?php echo get_field('marketing_content', $post_object->ID ); ?></p>
					<p><a href="<?php echo get_field('marketing_link_location', $post_object->ID ); ?>" class="secondary_button"><?php echo get_field('marketing_link_text', $post_object->ID ); ?></a></p>
				</div>
  		</div>


		<div class="medium-7 medium-pull-5 columns row-image not-mobile left">
			<img src="<?php echo get_field('marketing_featured_image', $post_object->ID ); ?>" alt="<?php echo $post_object->post_title; ?>"/>
		</div>
	</div>

<?php endwhile; ?>

<?php endif; ?>

<?php wp_reset_query(); // reset the query ?>



