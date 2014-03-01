<?php
/*
Template Name: Calculator Request
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
			<li class="columns dash-nav past option"><a href="/dashboard">Dashboard</a></li>
			<li class="columns dash-nav current"><a href="/dashboard/calculators"><span><i class="fa fa-minus-square-o"></i></span> Calculators</a></li>
			<li class="columns dash-nav disabled"><a href="#"><span><i class="fa fa-square-o"></i></span> Reivew</a></li>
			<li class="columns dash-nav disabled"><a href="/cart"><span><i class="fa fa-square-o"></i></span> Cart</a></li>
			<li class="columns dash-nav disabled"><a href="/checkout"><span><i class="fa fa-square-o"></i></span> Checkout</a></li>
	</nav>
</div>	

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="row content-row">

	<div class="columns medium-8 page-main-content">
			
		<?php the_content(); ?>

	</div>

	<div class="columns medium-4 sidebar">
		<h2>Requesting a Quote</h2>
		<p>Information here on requesting a quote. Things like, how long it takes, how you'll hear back, etc.</p>
		
	</div>

	<hr>

</div>



<?php endwhile; endif; ?>

<script id="calc-js">

	$ = jQuery;

	$.urlParam = function(name){
	    var results = new RegExp('[\\?&]' + name + '=([^&#]*)').exec(window.location.href);
	    if (results===null){
	       return null;
	    }
	    else{
	       return results[1] || 0;
	    }
	};

	$.urlParam('style');

	var style = $.urlParam('style');
	  

	if (style==="print")
	  	{

		    var client = $('.client-name-field input').val();
		    $('#name').val( client );
		    if($('#name').val().length == 0){
		    	$('#name').val( "Client's Name" );
		    }

	  	}
	else
  		{

			$(".top-icon").prepend('<i class="fa fa-arrows"></i>');
			$(".bottom-icon").prepend('<i class="fa fa-caret-square-o-down"></i>');
			$(".left-icon").prepend('<i class="fa fa-caret-square-o-left"></i>');
			$(".right-icon").prepend('<i class="fa fa-caret-square-o-right"></i>');
			$(".specs-icon").prepend('<i class="fa fa-pencil-square-o"></i>');
			$(".delivery-icon").prepend('<i class="fa fa-truck"></i>');
		 
		}
		 
</script>

<div class="footer-wrapper">


<?php get_footer(); ?>
