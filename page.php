<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
 get_header(); ?>

<?php include 'nav-account.php'; ?>
<?php include 'nav-main.php'; ?>
<?php include 'nav-page.php'; ?>

<div class="row content-row">
	<div class="columns medium-12 page-title">
		<h1>nPrint Graphix: The Company</h1>
		<hr>
	</div>

	<div class="columns medium-8 page-main-content">

		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sed ipsum malesuada, eleifend massa quis, tincidunt nulla. Etiam porta velit non tincidunt tempor. Etiam porta velit non tincidunt tempor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sed ipsum malesuada, eleifend massa quis, tincidunt nulla. Etiam porta velit non tincidunt tempor. Etiam porta velit non tincidunt tempor.</p>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sed ipsum malesuada, eleifend massa quis, tincidunt nulla. Etiam porta velit non tincidunt tempor. Etiam porta velit non tincidunt tempor.</p>
		
		<div class="panel">
		  <h5>This is a regular panel.</h5>
		  <p>It has an easy to override visual style, and is appropriately subdued.</p>
		</div>

		<h2>This is a smaller headline</h2>

		<hr>

		<ul class="clearing-thumbs" data-clearing>
		  <li><a href="path/to/your/img"><img src="path/to/your/img-th"></a></li>
		  <li><a href="path/to/your/img"><img src="path/to/your/img-th"></a></li>
		  <li><a href="path/to/your/img"><img src="path/to/your/img-th"></a></li>
		</ul>

		<hr>

		<table border="0" bordercolor="" style="background-color:" width="100%" cellpadding="" cellspacing="">
			<tr>
				<td>Table Cell</td>
				<td>Table Cell</td>
				<td>Table Cell</td>
			</tr>
			<tr>
				<td>Table Cell</td>
				<td>Table Cell</td>
				<td>Table Cell</td>
			</tr>
			<tr>
				<td>Table Cell</td>
				<td>Table Cell</td>
				<td>Table Cell</td>
			</tr>
			<tr>
				<td>Table Cell</td>
				<td>Table Cell</td>
				<td>Table Cell</td>
			</tr>
			<tr>
				<td>Table Cell</td>
				<td>Table Cell</td>
				<td>Table Cell</td>
			</tr>
		</table>

		<dl class="tabs" data-tab>
		  <dd class="active"><a href="#panel2-1">Tab 1</a></dd>
		  <dd><a href="#panel2-2">Tab 2</a></dd>
		  <dd><a href="#panel2-3">Tab 3</a></dd>
		  <dd><a href="#panel2-4">Tab 4</a></dd>
		</dl>
		<div class="tabs-content">
		  <div class="content active" id="panel2-1">
		    <p>First panel content goes here...</p>
		  </div>
		  <div class="content" id="panel2-2">
		    <p>Second panel content goes here...</p>
		  </div>
		  <div class="content" id="panel2-3">
		    <p>Third panel content goes here...</p>
		  </div>
		  <div class="content" id="panel2-4">
		    <p>Fourth panel content goes here...</p>
		  </div>
		</div>


	</div>

	<div class="columns medium-4 page-sidebar">
		<div class="ad">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sed ipsum malesuada, eleifend massa quis, tincidunt nulla. Etiam porta velit non tincidunt tempor. Etiam porta velit non tincidunt tempor.</p>

		</div>

	</div>
</div>

<div class="wrapper">
<div class="row support boxed">
  		<div class="medium-7 columns">
			<dl class="accordion" data-accordion>
				 <?php $post_objects = get_field('featured_articles');
					if( $post_objects ): ?>
					    <?php $i = 0; ?>
					    	<?php foreach( $post_objects as $post): ?>
					    	<?php  $i++; ?>
					        <?php setup_postdata($post); ?>
					           <dd>
								    <a href="#panel<?php echo $i; ?>"><?php the_title(); ?></a>
								    <div id="panel<?php echo $i; ?>" class="content 
								    	<?php if($i == 1)  echo "active";  ?>">
										<p><?php the_excerpt(); ?></p>
								    </div>
								 </dd>
					    <?php endforeach; ?>
					    <?php wp_reset_postdata(); ?>
					<?php endif; 
				?>
			</dl>			
		</div>
		
  		<div class="medium-5 columns row-content">
  			<h4>Support</h4>
  			<p><?php the_field( "support_text" );  ?></p>
  				<?php $post_objects = get_field('featured_categories');
					if( $post_objects ): ?>
					    	<?php foreach( $post_objects as $post): ?>
					        <?php setup_postdata($post); ?>
  								<p class="support_link"><a href="/support_categories<?php echo $post->slug; ?>"><?php echo $post->name; ?></a></p>	
  							<?php $category_name = $cat->name; ?>
					    <?php endforeach; ?>
					    <?php wp_reset_postdata(); ?>
					<?php endif; 
				?>

			<p><a href="/support" class="secondary_button">Support Articles</a></p>
  		</div>
</div>
</div>


<?php get_footer(); ?>
