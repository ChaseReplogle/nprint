<?php
/*
Template Name: Calculator
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

	<div class="for-print title">
		<h2>Project Quote</h2>
	</div>

	<div class="for-print quote-info">

		<div class="for-print date">
			<h3><?php echo date_i18n('j F Y', time()); ?></h3>
		</div>

		<div class="for-print date">
			<form id="quote-num">
			  <div>
			  	<label for="quote-num">Quote Number:</label>
			    <input type="text" name="quote-num" value="000001" tabindex="1">
			  </div>
			</form>
		</div>

		<div class="for-print client">
			<form id="client">
			  <div>
					<input type="text" name="name" id="name" value="Client's Name" tabindex="1">
			  </div>
			  <div>
			    <input type="text" name="address" id="address" value="Street Address" tabindex="1">
			    <input type="text" name="city" id="city" value="City, State, Zip Code" tabindex="1">
			  </div>
			</form>
		</div>
	</div>

	<div class="for-print company-info">
		<h3><?php echo $business_title; ?></h3>
		<?php $address_contnet = get_user_meta( $current_user->ID, 'billing_address_1', true); ?>
				<?php if ($address_contnet){ ?>
					<p>
						<?php echo get_user_meta( $current_user->ID, 'billing_address_1', true);?>					<?php echo get_user_meta( $current_user->ID, 'billing_address_2', true );?></br>
						<?php echo get_user_meta( $current_user->ID, 'billing_city', true);?>, 
						<?php echo get_user_meta( $current_user->ID, 'billing_state', true);?> 
						<?php echo get_user_meta( $current_user->ID, 'billing_postcode', true ); ?>
					</p>
					<?php } ?>
		<p><?php echo $business_phone; ?></p>
		<p><?php echo $business_email; ?></p>
	</div>

	<div class="clear"></div>

	<hr>
		
	<?php the_content(); ?>

	<div class="for-print notes">
		<form id="notes">
		  <div>
		    <label for="textarea">Message:</label>
		    <textarea cols="40" rows="8" name="textarea" id="textarea"></textarea>
		  </div>
		</form>
	</div>

	</div>

	<div class="columns medium-4 sidebar">

		<span style="widht: 100%; display: block;"></span>

		<div id="cost">
			<h3>Cost and Markup</h3>

			<div id="cost-total">

				<div class="clear"></div>
			</div>

			<a href="#" data-reveal-id="myModal" data-reveal class="calculator-link"><i class="fa fa-table"></i> Calculator</a>

		</div>

	</div>

	<hr>

</div>


<div  id="myModal" class="reveal-modal calculator-modal" data-reveal>
   <div id="calculator">
		<!-- Screen and clear key -->
		<a class="close-reveal-modal">&#215;</a>
			 <div class="clear"></div>
		<div class="top">
			<span class="clear">C</span>
			<div class="screen"></div>
		</div>
		
		<div class="keys">
			<!-- operators and other keys -->
			<span>7</span>
			<span>8</span>
			<span>9</span>
			<span class="operator">+</span>
			<span>4</span>
			<span>5</span>
			<span>6</span>
			<span class="operator">-</span>
			<span>1</span>
			<span>2</span>
			<span>3</span>
			<span class="operator">÷</span>
			<span>0</span>
			<span>.</span>
			<span class="eval">=</span>
			<span class="operator">x</span>
		</div>
	</div>
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

		    var client = $('.client input').attr('value');
		    $('#name').attr('value', client );

	  	}
	else
  		{

			$('.percent input').attr('type', 'range');
			$('.percent input').attr('min', '0');
			$('.percent input').attr('max', '100');

			$('.percent input').attr('onchange', 'rangevalue.value=value');
			$('.percent').after('<output class="cost" id="rangevalue">0</output>');
			$('.percent').after('<div class="clear"></div>');

			$(document).ready(function(){
			  $("[type=range]").change(function(){
			    var newval=$(this).val();
			    $(".saved-percent input").val(newval);
			  });
			});


			$(".cost").prependTo("#cost-total");

			$(".top-icon").prepend('<i class="fa fa-arrows"></i>');
			$(".bottom-icon").prepend('<i class="fa fa-caret-square-o-down"></i>');
			$(".left-icon").prepend('<i class="fa fa-caret-square-o-left"></i>');
			$(".right-icon").prepend('<i class="fa fa-caret-square-o-right"></i>');
			$(".specs-icon").prepend('<i class="fa fa-pencil-square-o"></i>');
			$(".delivery-icon").prepend('<i class="fa fa-truck"></i>');

			$(function(){ // document ready
		 
		  if (!!$('#cost').offset()) { // make sure ".sticky" element exists
		 
		    var stickyTop = $('#cost').offset().top; // returns number 
		 
		    $(window).scroll(function(){ // scroll event
		 
		      var windowTop = $(window).scrollTop(); // returns number 
		 
		      if (stickyTop < windowTop){
		        $('#cost').css({ position: 'fixed', top: 20});
		      }
		      else {
		        $('#cost').css({ position: 'static',});
		      }
		 
		    });
		 
		  }
		 
		});

		$('#cost').width($('.sidebar span').outerWidth());
	}
	
	var percentVal=$('.saved-percent input').val();
	$('.percent input').val(percentVal);
	$('#rangevalue').text(percentVal);

	$(function() {
    	$('.submit-options input[type="radio"], label').addClass('new-submit');
    
	    $('label').on('click', function() {
	        $('label').removeClass('active');
	        $(this).addClass('active');
	    });
	});

	$('.submit-options input[type="radio"], label').click(function() {
	    $(".gform_wrapper form").submit();
	});

</script>

<div class="footer-wrapper">


<?php get_footer(); ?>
