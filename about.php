<?php
$titrePage = "Réparation Automobile";
include 'includes/header.php'; ?>

<div class="boxcar-wrapper">
  <?php include 'includes/nav.php'; ?>
  <section class="about-inner-one layout-radius pb-0">
    <!-- Section Réparation -->
    <div class="upper-box">
      <div class="boxcar-container">
        <div class="row wow fadeInUp">
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="boxcar-title">
              <ul class="breadcrumb">
                <li><a href="/"><?php echo t('nav.home'); ?></a></li>
                <li><span><?php echo t('about.title'); ?></span></li>
              </ul>
              <h2><?php echo t('about.title'); ?></h2>
              <div class="text"><?php echo t('about.subtitle'); ?></div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="content-box">
              <div class="text"><?php echo t('about.intro_text_1'); ?></div>
              <div class="text"><?php echo t('about.intro_text_2'); ?></div>
            </div>
          </div>
        </div>
      </div>
    </div>



  </section>

  <section class="blog-section-five layout-radius" style="padding-bottom: 100px;">
    <div class="right-box">
      <div class="large-container">
        <div class="content-box">
          <figure class="outer-image text-center"><img src="images/resource/about-inner1-2.jpg" alt=""></figure>
          <div class="right-box-two">
            <h4 class="title"><?php echo t('about.title2'); ?></h4>
            <div class="text">
              <?php echo t('about.intro_text_3'); ?>
            </div>
            <div class="list-sec">
              <h6 class="title"><?php echo t('about.title3'); ?></h6>
              <div class="inner-column">
                <ul class="list">
                  <li><i class="fa-solid fa-check"></i><?php echo t('about.intro_text_4'); ?></li>
                  <li><i class="fa-solid fa-check"></i><?php echo t('about.intro_text_5'); ?></li>
                  <li><i class="fa-solid fa-check"></i><?php echo t('about.intro_text_6'); ?></li>
                  <li><i class="fa-solid fa-check"></i><?php echo t('about.intro_text_7'); ?></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include 'includes/footer.php'; ?>
</div>

<?php include 'includes/script.php'; ?>