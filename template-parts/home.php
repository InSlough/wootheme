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
  <section class="container sp-section">
    <div class="row">
      <div class="col-md-6 col-12">
        <h3>See Your Floor Plan Inside</h3>
        <h6>You can see your floor plans in 3D views. So you can imagine
          the design interior of your future home.
        </h6>
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
  </section>
  <section class="why-section">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h3 class="ta-c">Why Choose Us?</h3>
          <div class="why-r">
            <div class="why-c">
              <img src="<?php tUrl() ?>/dist/img/qi.svg" alt="">
              <h5>Quality craftsmanship</h5>
              <p>We create new value and always provide
                high-quality products to enrich the everyday
                lives of our consumers. </p>
            </div>
            <div class="why-c">
              <img src="<?php tUrl() ?>/dist/img/hi.svg" alt="">
              <h5>Comfortable style</h5>
              <p>With so many types of house styles,
                narrowing the list down to your favorite
                can be overwhelming.</p>
            </div>
            <div class="why-c">
              <img src="<?php tUrl() ?>/dist/img/si.svg" alt="">
              <h5>Get help when you need it</h5>
              <p>Have questions? Call 1-800-950-2155. Our
                customer support is the best in the business.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</div>
