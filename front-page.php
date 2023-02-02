<?php
get_header();
?>

<div class="banner">
  <div>
    <img src="<?php echo get_template_directory_uri();?>/images/banner1.png" />
  </div>
</div>

<div class="about-us">
  <div class="columns">
    <div class="left">
      <div class="heading">About us</div>
      <p>apfbx dsafdsa apfbx dsafdsa apfbx dsafdsa apfbx dsafdsa apfbx dsafdsapfbx dsafdsa apfbx dsafdsapfbx dsafdsa apfbx dsafdsapfbx dsafdsa apfbx dsafdsapfbx dsafdsa apfbx dsafdsa </p>
      <button>Read more</button>
    </div>
    <div class="right"></div>
  </div>
</div>

<div class="our-steps">
  <div class="content">
    <div class="heading"><span class="top">Our</span><span class="main">Steps</span></div>
    <div class="columns">
      <div class="box">
        <img src="<?php echo get_template_directory_uri();?>/images/Icon_choose_industary.png" />
        <p class="order">01</p>
        <h4>Choose your industry</h4>
        <p class="intro">Lorem Ipsum is simply dummy text of the printing and typesettin</p>
      </div>
      <div class="box">
        <img src="<?php echo get_template_directory_uri();?>/images/icon_choose_service.png" />
        <p class="order">02</p>
        <h4>Choose your service</h4>
        <p class="intro">Lorem Ipsum is simply dummy text of the printing and typesettin</p>
      </div>
      <div class="box">
        <img src="<?php echo get_template_directory_uri();?>/images/icon_boost_your_business.png" />
        <p class="order">03</p>
        <h4>Boost your business</h4>
        <p class="intro">Lorem Ipsum is simply dummy text of the printing and typesettin</p>
      </div>
    </div>
  </div>
</div>

<div class="featured-projects">
  <div class="heading">
    <span class="top">Featured</span>
    <span class="main">Projects</span>
  </div>
  <div class="projects-grid">
    <div>
      <div class="bg">Banking</div>
      <div class="shape"></div>
    </div>
    <div>
      <div class="bg">Technology</div>
      <div class="shape"></div>
    </div>
    <div>
      <div class="bg">Technology</div>
      <div class="shape"></div>
    </div>
    <div>
      <div class="bg">Real estate</div>
      <div class="shape"></div>
    </div>
  </div>
  <div><button>Full Projects</button></div>
</div>

<div class="testimonials">
  <div class="content">
    <div class="heading">
      <span class="top">Happy clients</span>
      <span class="main">Testimonials</span>
    </div>
    <div class="columns" style="gap: 30px; padding-left: 80px; padding-right: 80px;background-image: url(http://localhost/wordpress/wp-content/themes/consult-plus-v1/images/icon_quote.png), url(http://localhost/wordpress/wp-content/themes/consult-plus-v1/images/icon_quote2.png);
  background-repeat: no-repeat, no-repeat;
  background-position: top left, top right;">
      <!-- Slider main container -->
      <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          <!-- Slides -->
          <div class="swiper-slide">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type speci
book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially.
 unchanged.</div>
          <div class="swiper-slide">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type speci
book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially.
 unchanged. Slide 2</div>
          <div class="swiper-slide"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type speci
book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially.
 unchanged. Slide 3</div>
          ...
        </div>
        <!-- If we need pagination -->
        
      </div>
    </div>
    <div class="columns" style=" padding-top: 50px;">
      <div class="clients columns" style="gap: 30px;">
        <div class="columns" style="gap: 10px;">
          <img src="<?php echo get_template_directory_uri();?>/images/client1.png" style="height: 67px; width: 67px;" />
          <div><p>Client Name</p><p>Company 1</p></div>
        </div>
        <div class="columns" style="gap: 10px;">
          <img src="<?php echo get_template_directory_uri();?>/images/client1.png" style="height: 67px; width: 67px;" />
          <div><p>Client Name</p><p>Company 2</p></div>
        </div>
        <div class="columns" style="gap: 10px;">
          <img src="<?php echo get_template_directory_uri();?>/images/client1.png" style="height: 67px; width: 67px;" />
          <div><p>Client Name</p><p>Company 3</p></div>
        </div>
      </div>
      <div><div class="swiper-pagination"></div></div>
    </div>
  </div>
</div>
<script>
window.onload = function() {
  const swiper = new Swiper('.swiper', {
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },
  });
}
</script>
<div class="our-blog">
  <div class="left">Left</div>
  <div class="right"></div>
</div>

<div class="contact-us">
  <div class="heading">
    <p>For consuming</p>
    <h2>Contact us</h2>
  </div>
  <div class="columns">
    <div class="column">Email</div>
    <div class="column">Call us</div>
    <div class="column">Career</div>
  </div>
</div>

<?php
get_footer();