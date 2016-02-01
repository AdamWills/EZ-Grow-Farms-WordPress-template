<?php use Roots\Sage\Assets; ?>

<?php if ( have_rows('home_page_content') ): ?>
  <?php while ( have_rows('home_page_content') ) : the_row(); ?>
    <div class="row medium-unstack">
      <div class="column">
          <?php the_sub_field('left_column'); ?>
      </div>
      <div class="column">
        <?php the_sub_field('right_column'); ?>
      </div>
    </div>
  <?php endwhile; ?>
<?php endif; ?>

<?php if ( have_rows('associations') ): ?>
<div class="row row-associations">
  <div class="column">
  <h2><?php the_field('associations_title'); ?></h2>
  <div class="associations">
      <?php while ( have_rows('associations') ) : the_row(); ?>
        <?php $img = get_sub_field('logo'); ?>
        <a href="<?php the_sub_field('url'); ?>"><img src="<?php echo $img['sizes']['medium']; ?>" alt="<?php the_field('name'); ?>"></a>
      <?php endwhile; ?>
    </div>
  </div>
</div>

<?php endif; ?>
