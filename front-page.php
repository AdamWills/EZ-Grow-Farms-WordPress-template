<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/front-page', 'header'); ?>
  <?php get_template_part('templates/content', 'front-page'); ?>
<?php endwhile; ?>
