<?php
if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}
// get_template_part('template-parts/footer');
?>

<?php /* main#main-content */ ?></main>

<?php /* .scroll-container */ ?></div>

<footer class="" id="site-footer" role="contentinfo">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 col-12">
        <a href="#">
        <h3>Search</h3>
        <p>Find your dream home plan</p>
        </a>
      </div>
      <div class="col-lg-4 col-12">
        <a href="#">
        <h3>News</h3>
        <p>Read more information</p>
        </a>
      </div>
      <div class="col-lg-4 col-12">
        <a href="">
        <h3>Contacts</h3>
        <p>Get in touch with our team</p>
        </a>
      </div>
    </div>
  </div>
  <div class="container bot-bord">
    <div class="row">
      <div class="col-lg-3 col-12">
        <?php wp_nav_menu(array('theme_location' => 'first_footer_menu')); ?>
      </div>
      <div class="col-lg-3 col-12">
        <?php wp_nav_menu(array('theme_location' => 'second_footer_menu')); ?>
      </div>
      <div class="col text-lg-end">
        <span style="display: block;">Follow Us On Social Media:</span>
        <div class="link-block">
          <a href="#"><img src="<? tUrl(); ?>/dist/img/f.svg" alt=""></a>
          <a href="#"><img src="<? tUrl(); ?>/dist/img/t.svg" alt=""></a>
          <a href="#"><img src="<? tUrl(); ?>/dist/img/y.svg" alt=""></a>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12 copyright-text">
        Copyright © 2021 Big Hills Floor Plans, Inc.<br>
        All Rights Reserved.
      </div>
    </div>
  </div>
</footer>
<?php /* .viewport */ ?></div>

<?php
// get_template_part('template-parts/modals');
?>

<div class="assets">
  <?php wp_footer(); ?>

  <?php if (0) : ?>
    <div id="toast-wrapper" aria-live="polite" aria-atomic="true"></div>
  <?php endif; ?>


</div>

<div id="fixed-window-height"></div>

</body>

</html>
