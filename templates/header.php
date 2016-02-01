<div class="container">
  <div class="logo">
    <img src="<?php echo Roots\Sage\Assets\asset_path('images/logo.png'); ?>" alt="EZ Grow Farms">
  </div>
  <div class="title-bar" data-responsive-toggle="main-menu" data-hide-for="medium">
    <button class="menu-icon" type="button" data-toggle></button>
    <div class="title-bar-title"><?php bloginfo('name'); ?></div>
  </div>
  <div class="top-bar" id="main-menu">
  <?php foundationpress_mobile_nav(); ?>
  </div>
</div>
