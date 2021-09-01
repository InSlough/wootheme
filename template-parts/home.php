<?php
if (!defined('ABSPATH')) {
  exit;
}

$p = getUrl('/dist/img/');

// do_action('ac_js', 'home', "/dist/js/extra/home");

?>
<div class="page <?php echo $post->post_name; ?>">

  <div class="container-fluid first-section bg" style="background-image: url('<?php echo get_site_url();
 ?>/wp-content/uploads/2021/09/Background.png');">
    <div class="row align-items-center h-100">
      <div class="col">
        <div class="container">
          <div class="row">
            <div class="col">
              <div class="first-section-content">
                <h1>Discover Your Next Home</h1>
                <h3>We'll help you find the perfect plan</h3>
                <p>Search nearly 40,000 floor plans and find your dream home today</p>
                <div class="fb-block">
                  <button type="button" class="btn btn-light">Bedrooms</button>
                  <button type="button" class="btn btn-light">Bathrooms</button>
                  <button type="button" class="btn btn-light">Stories</button>
                  <button type="button" class="btn btn-light">Garages</button>
                </div>
                <button type="button" class="btn s-btn">SEARCH PLANS</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-12">
        <h3>See Your Floor Plan Inside</h3>
        <p>You can see your floor plans in 3D views. So you can imagine
          the design interior of your future home.
        </p>
      </div>
      <div class="col-md-6 col-12 jc-fe ai-c" style="display:flex;">
     <div> <button type="button" class="btn s-btn">see more plans</button> </div>
      </div>

    </div>
    <div class="row img-block">
      <div class="col-md-6 col-12">
        <img src="<?php echo get_site_url();
 ?>/wp-content/uploads/2021/09/Picure-home.png" alt="">

      </div>
      <div class="col-md-6 col-12"><img src="<?php echo get_site_url();
 ?>/wp-content/uploads/2021/09/Plan-image.png" alt=""></div>
    </div>
  </div>

</div>
