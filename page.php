<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
 get_header(); ?>

<?php include 'nav-account.php'; ?>
<?php include 'nav-main.php'; ?>	

<div class="page-header row">
	<div class="columns medium-3">
		<h2><?php the_title(); ?></h2>
	</div>
	<div class="columns medium-9">
		<dl class="sub-nav">
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
		</dl>
	</div>
</div>

<?php get_footer(); ?>
