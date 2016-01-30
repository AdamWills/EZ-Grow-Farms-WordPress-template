<?php use Roots\Sage\Assets; ?>

<?php if ( have_rows('home_page_content') ): ?>
  <?php while ( have_rows('home_page_content') ) : the_row(); ?>
    <div class="row medium-unstack">
      <div class="column">
          <img src="<?php echo Assets\asset_path('images/temp-3.jpg'); ?>" alt="">
          <?php the_sub_field('left_column'); ?>
      </div>
      <div class="column">
        <img src="<?php echo Assets\asset_path('images/temp-2.jpg'); ?>" alt="">
        <?php the_sub_field('right_column'); ?>
      </div>
    </div>
  <?php endwhile; ?>
<?php endif; ?>
