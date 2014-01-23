<nav class="top-bar account-nav <?php if (! is_home()) { ?> inner-account-nav <?php } ?>" data-topbar>
<?php if (! is_home()) { ?>
<ul class="title-area">
    <li class="name">
      <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/_/inc/images/logo.png" alt="nPrint Graphix" width="386" height="190" /></a>
    </li>
  </ul>
<?php } ?>
<section class="top-bar-section right">
    <!-- Right Nav Section -->
    <ul>
	  	  <li><a class="active" href="#">Become a Member</a></li>
	  	  <li><a href="#">Log In</a></li>
	  	  <li><a class="right-off-canvas-toggle"><i class="fa fa-search"></i> <span>Search</span></a></li>
    </ul>
</nav>