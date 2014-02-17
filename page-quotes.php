<?php
/*
Template Name: Saved Quotes
*/
?>

<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
 get_header(); ?>

<?php include 'nav-account.php'; ?>
<?php include 'nav-main.php'; ?>

<div class="contain-to-grid page-nav-warpper dash-nav-wrapper">
	<nav class="top-bar page-nav" data-topbar>
			<li class="columns dash-nav current"><a href="/dashboard">Dashboard</a></li>
			<li class="columns dash-nav option"><a href="/dashboard/calculators"><span><i class="fa fa-square-o"></i></i></span> Calculators</a></li>
			<li class="columns dash-nav disabled"><a href="#"><span><i class="fa fa-square-o"></i></span> Reivew</a></li>
			<li class="columns dash-nav disabled"><a href="/cart"><span><i class="fa fa-square-o"></i></span> Cart</a></li>
			<li class="columns dash-nav disabled"><a href="/checkout"><span><i class="fa fa-square-o"></i></span> Checkout</a></li>
	</nav>
</div>		


<div class="row content-row">

	<div class="columns medium-12 page-sidebar save-quotes">

	<div class="quotes">
		<div class="columns medium-12 saved-quotes">

			<h2>Saved Quotes</h2>

			<table id="quote-table" class="tablesorter quotes-wrapper"> 
				<thead> 
				<tr> 
				    <th>Project</th> 
				    <th>Client</th> 
				    <th>Quantity</th> 
				    <th>Actions</th>
				    <th class="headerSortDown">Modified</th> 
				</tr> 
				</thead> 
				<tbody> 

			<?php $user_ID = get_current_user_id(); ?> 

			<?php $args = array(
				'author' 	 => $user_ID,
				'post_type'  => 'quotes',
				'orderby' 	 => 'date',
				'order'      => 'DESC'
			);

			query_posts( $args ); ?>

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				 <?php $postid = get_the_ID(); ?> 
				 <?php $calcType = get_field("product"); ?>
				
					<tr class="quote-item"> 
					    <td><a href="<?php echo site_url(); ?>/calculators/<?php echo $calcType; ?>/?gform_post_id=<?php echo $postid; ?>" class="quote-title"><?php the_title(); ?></a></td> 
					    <td><p><?php the_field('client-name'); ?></p></td> 
					    <td><p><?php the_field('quantity'); ?></p></td> 
					    <td>
					    	<span class="quote-actions">
								<a href="<?php echo site_url(); ?>/calculators/<?php echo $calcType; ?>/?gform_post_id=<?php echo $postid; ?>" class="quote-edit">Edit</a> |
								<a href="<?php echo site_url(); ?>/calculators/<?php echo $calcType; ?>/?gform_post_id=<?php echo $postid; ?>&style=print" class="quote-print">Print</a> |
								<a href="#" data-dropdown="delete" class="quote-delete">Delete</a>
									<div id="delete" class="f-dropdown" data-dropdown-content>
										<p>You are about to delete this quote. You won't be able to undo this action.</p>
										<?php if ($post->post_author == $current_user->ID) { ?><p><a href="<?php echo get_delete_post_link( $post->ID ) ?>" class="delete" >Confirm Delete</a></p><?php } ?>
									</div>
							</span>
					    </td> 
					    <td><p><?php the_modified_date('F j, Y'); ?> at <?php the_modified_date('g:i a'); ?></p></td>
					</tr> 
				
					

			<?php endwhile; endif; ?>

			</tbody> 
			</table> 

	</div>
	</div>
</div>


</div>

<hr>

<div class="footer-wrapper">


<?php get_footer(); ?>
