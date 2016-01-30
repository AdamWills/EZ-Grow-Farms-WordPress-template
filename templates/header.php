<div class="container">
  <div class="title-bar" data-responsive-toggle="main-menu" data-hide-for="medium">
    <button class="menu-icon" type="button" data-toggle></button>
    <div class="title-bar-title"><?php bloginfo('name'); ?></div>
  </div>
  <div class="top-bar" id="main-menu">
    <?php wp_nav_menu( array(
      'theme_location' => 'primary_navigation',
      'container'      => ''
    ) ); ?>
  </div>
</div>
