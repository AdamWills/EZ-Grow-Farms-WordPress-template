
<footer class="content-info container">
  <div class="row medium-unstack">
    <div class="column">
      <div class="sitemap">
        <h2>Sitemap</h2>
        <?php
          wp_nav_menu( array(
            'theme_location' => 'primary_navigation',
            'container'      => '',
            'depth'          => 1
          ) );
        ?>
      </div>
    </div>

    <div class="column">
      <h2>Contact Us</h2>
      <address>
      EZ Grow Farms<br>
      1771 Norfolk County Road 23<br>
      Langton, Ontario<br>
      N0E 1G0<br>
      <a href="mailto:farm@ezgrow.ca">farm@ezgrow.ca</a>
      <a href="tel:5198754751">519-875-4751</a>
      <!-- hidding sm icons for now
      <ul class="icons">
        <li><a href="#"><?php //get_template_part('dist/images/icon','facebook.svg'); ?></a></li>
        <li><a href="#"><?php //get_template_part('dist/images/icon','instagram.svg'); ?></a></li>
        <li><a href="#"><?php //get_template_part('dist/images/icon','twitter.svg'); ?></a></li>
      </ul>
    -->
    </div>

    <div class="column">
      <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" width="100%" height="260" src="https://maps.google.com/maps?hl=en&q=1771 Norfolk County Road 23, langton, Ontario&ie=UTF8&t=m&z=10&iwloc=B&output=embed"></iframe>
    </div>

  </div>
</footer>
