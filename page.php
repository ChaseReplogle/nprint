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
	<div class="columns medium-8 page-main-content">

		<h1>nPrint Graphix: The Company</h1>

		<ul class="example-orbit" data-orbit>
		  <li>
		    <img src="http://nprintgraphix.wpengine.com/wp-content/uploads/2014/01/Screen-Shot-2014-01-15-at-12.20.28-PM.png" alt="slide 1" />
		    <div class="orbit-caption">
		      Caption One.
		    </div>
		  </li>
		  <li>
		    <img src="http://nprintgraphix.wpengine.com/wp-content/uploads/2014/01/Screen-Shot-2014-01-15-at-10.39.12-AM1.png" alt="slide 2" />
		    <div class="orbit-caption">
		      Caption Two.
		    </div>
		  </li>
		  <li>
		    <img src="http://nprintgraphix.wpengine.com/wp-content/uploads/2014/01/Screen-Shot-2014-01-15-at-12.18.53-PM.png" alt="slide 3" />
		    <div class="orbit-caption">
		      Caption Three.
		    </div>
		  </li>
		</ul>

		<hr>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sed ipsum malesuada, eleifend massa quis, tincidunt nulla. Etiam porta velit non tincidunt tempor. Etiam porta velit non tincidunt tempor.</p>

		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sed ipsum malesuada, eleifend massa quis, tincidunt nulla. Etiam porta velit non tincidunt tempor. Etiam porta velit non tincidunt tempor.</p>
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
		

	</div>
</div>


<?php get_footer(); ?>
