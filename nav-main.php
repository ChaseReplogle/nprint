<nav class="top-bar main-nav" data-topbar>
  <ul class="title-area">
    <li class="name"></li>
    <li class="toggle-topbar menu-icon"><a href="#">Menu</a></li>
  </ul>

  <section class="top-bar-section">
    <!-- Right Nav Section -->
    <ul>  
        <?php wp_nav_menu( array('menu' => 'Main Navigation', 'container' => false )); ?>
    </ul>
</nav>

<script>
  $( ".menu-item-has-children" ).addClass( "has-dropdown" );
  $( ".menu-item-has-children ul" ).addClass( "dropdown" );
</script>