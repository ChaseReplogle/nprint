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
<?php include 'nav-dashboard.php'; ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="row content-row">

	<div class="columns medium-8 page-main-content">
		
	<?php the_content(); ?>

	</div>

	<div class="columns medium-4">
		<div id="cost-total">


		</div>

	</div>

	<hr>

</div>

<?php endwhile; endif; ?>

<script>
	$ = jQuery;

	jQuery(".cost").prependTo("#cost-total");

	$(function(){ // document ready
 
  if (!!$('#cost-total').offset()) { // make sure ".sticky" element exists
 
    var stickyTop = $('#cost-total').offset().top; // returns number 
 
    $(window).scroll(function(){ // scroll event
 
      var windowTop = $(window).scrollTop(); // returns number 
 
      if (stickyTop < windowTop){
        $('#cost-total').css({ position: 'fixed', top: 20 });
      }
      else {
        $('#cost-total').css('position','static');
      }
 
    });
 
  }
 
});
</script>

<script>
$ = jQuery;

$(document).ready(function(e){
  
  $("<style type='text/css' id='dynamic' />").appendTo("head");
   
   
   console.log(e)
  $("#dynamic").text(".slider input']::-webkit-slider-thumb:after{content:'25';}");
        var valNeg = 0;  

  $('.slider input').on('change',function(e){
  e.preventDefault();
  var $this = $(this),
      val = $this.val();
    
    valNeg++;
  console.log(val);
 
    $("#dynamic").text(".slider input']::-webkit-slider-thumb:after{content:'" + val + "';} .slider input']:after{-webkit-transform:scale(."+ val*2 +");} .slider input]:before{-webkit-transform:scale(."+ valNeg*2 +");}");
   
});   
  
});
</script>

<div class="footer-wrapper">


<?php get_footer(); ?>
