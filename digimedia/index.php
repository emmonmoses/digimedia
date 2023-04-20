
<?php get_header(); ?>

<body>

<div class="intro-banner">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-v1.png" alt="">
        <h1>DigiMedia HTML5 Template</h1>
        <h4>Please choose one of the three variations below.</h4>
        <div class="first-button scroll-to-section">
          <a href="#demos">Choose Demo</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="demos" id="demos">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="demo-item">          
          <a href="https://digimedia.dubaiwatches.io/digimediav1/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/demo-1.jpg" alt="DigiMedia - variation 1"></a>
          <h4>Version 1</h4>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="demo-item">
          <a href="https://digimedia.dubaiwatches.io/digimediav2/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/demo-2.jpg" alt="DigiMedia - variation 2"></a>
          <h4>Version 2</h4>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="demo-item">
          <a href="https://digimedia.dubaiwatches.io/digimediav3/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/demo-3.jpg" alt="DigiMedia - variation 3"></a>
          <h4>Version 3</h4>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
