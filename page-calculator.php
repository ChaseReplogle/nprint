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

			<div class="nmbr" id="first"></div>


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
	$(function () {
	    $(".nmbr").slider({
	        range: "min",
	        min: 1,
	        max: 100,
	        slide: function (event, ui) {
	            $("input[name=" + $(this).attr("id") + "_value]").val(ui.value);
	        }
	    });
	});
</script>

<div class="footer-wrapper">


<?php get_footer(); ?>