<?php if (!defined('ABSPATH')) exit; ?>

<div class="page-single <?php echo $post->post_name; ?>">
  <section class="container-fluid first-fluid" style="background-image: url('http://bhfp.local/wp-content/uploads/2021/09/Header.png');">
    <div class="row">
      <div class="col-12 text-center">
        <h1><?php echo the_title(); ?></h1>
      </div>
    </div>
  </section>

  <section>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="page-content">
            <?php the_content(); ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php
  // if ('' != locate_template('template-parts/contact_form_wrapper.php')) {
  //   get_template_part('template-parts/contact_form_wrapper');
  // }
  ?>
