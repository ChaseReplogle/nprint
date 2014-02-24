<?php
/*
Template Name: Business
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
<div class="contain-to-grid page-nav-warpper">
	<nav class="top-bar page-nav" data-topbar>
		<ul class="title-area">
			<li><a href="#">Business Information</a></li>
		</ul>
	</nav>
</div>	

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="row content-row">

	<div class="columns medium-8 page-main-content">
		
		<?php the_content(); ?>

	</div>

	<div class="columns medium-4 page-sidebar">

		<h3>How is my business information used?</h3>
		<ul>
			<li>Printable Quotes</li>
			<li>Helps us better understand your needs</li>
			<li>Support easier</li>
		</ul>
	</div>
</div>

<?php endwhile; endif; ?>

<script>
	$ = jQuery;
	$(".business-icon").prepend('<i class="fa fa-suitcase"></i>');	
	$("input[type='file']").append('<img id="placeholder" src="http://placehold.it/180" alt="your image" />');
	function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#placeholder')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
</script>

<div class="footer-wrapper">

<div class="row">
	<hr>
</div>

<?php get_footer(); ?>
