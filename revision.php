<?php
$titrePage = "Révision Automobile";
include 'includes/header.php'; ?>

<div class="boxcar-wrapper">
  <?php include 'includes/nav.php'; ?>
  <section class="about-inner-one layout-radius">
    <!-- Section Révision -->
    <div class="upper-box">
      <div class="boxcar-container">
        <div class="row wow fadeInUp">
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="boxcar-title">
              <ul class="breadcrumb">
                <li><a href="/"><?php echo t('nav.home'); ?></a></li>
                <li><a href="/services"><?php echo t('nav.auto_services'); ?></a></li>
                <li><span><?php echo t('services.complete_revision'); ?></span></li>
              </ul>
              <h2><?php echo t('revision.title'); ?></h2>
              <div class="text"><?php echo t('revision.subtitle'); ?></div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="content-box">
              <div class="text"><?php echo t('revision.intro_text_1'); ?></div>
              <div class="text"><?php echo t('revision.intro_text_2'); ?></div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="galler-section">
      <div class="boxcar-container">
        <div class="row align-items-end">
          <div class="exp-block col-md-2 col-sm-12">
            <div class="inner-box">
              <div class="exp-box">
                <h2 class="title">10</h2>
                <div class="text"><?php echo t('revision.years_experience'); ?></div>
              </div>
              <div class="image-box">
                <figure class="image"><img src="images/resource/about-inner1-1.jpg" alt=""></figure>
              </div>
            </div>
          </div>
          <div class="image-block style-center col-md-5 col-sm-12">
            <div class="image-box">
              <figure class="image"><img src="images/resource/about-inner1-2.jpg" alt=""></figure>
            </div>
          </div>
          <div class="image-block col-md-5 col-sm-12">
            <div class="image-box two">
              <figure class="image"><img src="images/resource/about-inner1-3.jpg" alt=""></figure>
            </div>
            <div class="row box-double-img">
              <div class="image-block col-lg-5 col-5">
                <div class="image-box">
                  <figure class="image"><img src="images/resource/about-inner1-4.jpg" alt=""></figure>
                </div>
              </div>
              <div class="image-block col-lg-7 col-7">
                <div class="image-box">
                  <figure class="image"><img src="images/resource/about-inner1-5.jpg" alt=""></figure>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Section Services de Révision -->
  <section class="why-choose-us-section-two cus-layout-1">
    <div class="boxcar-container">
      <div class="right-box">
        <div class="boxcar-title wow fadeInUp animated">
          <h2><?php echo t('revision.our_services'); ?></h2>
        </div>
        <div class="row">
          <div class="choose-us-block col-lg-3 col-md-6 col-sm-12">
            <div class="inner-box wow fadeInUp">
              <div class="icon-box">
                <i class="far fa-oil-can fa-3x" style="color: #405FF2;"></i>
              </div>
              <div class="content-box">
                <h6 class="title"><?php echo t('revision.oil_change'); ?></h6>
                <div class="text"><?php echo t('revision.oil_change_text'); ?></div>
              </div>
            </div>
          </div>

          <div class="choose-us-block col-lg-3 col-md-6 col-sm-12">
            <div class="inner-box wow fadeInUp" data-wow-delay="100ms">
              <div class="icon-box">
                <i class="far fa-tools fa-3x" style="color: #405FF2;"></i>
              </div>
              <div class="content-box">
                <h6 class="title"><?php echo t('revision.mechanical_check'); ?></h6>
                <div class="text"><?php echo t('revision.mechanical_check_text'); ?></div>
              </div>
            </div>
          </div>

          <div class="choose-us-block col-lg-3 col-md-6 col-sm-12">
            <div class="inner-box wow fadeInUp" data-wow-delay="200ms">
              <div class="icon-box">
                <i class="far fa-car-battery fa-3x" style="color: #405FF2;"></i>
              </div>
              <div class="content-box">
                <h6 class="title"><?php echo t('revision.electrical_system'); ?></h6>
                <div class="text"><?php echo t('revision.electrical_system_text'); ?></div>
              </div>
            </div>
          </div>

          <div class="choose-us-block col-lg-3 col-md-6 col-sm-12">
            <div class="inner-box wow fadeInUp" data-wow-delay="300ms">
              <div class="icon-box">
                <i class="far fa-tire fa-3x" style="color: #405FF2;"></i>
              </div>
              <div class="content-box">
                <h6 class="title"><?php echo t('revision.tires_brakes'); ?></h6>
                <div class="text"><?php echo t('revision.tires_brakes_text'); ?></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- faq-inner-section -->
  <section class="faq-inner-section layout-radius">
    <!-- faq-section -->
    <div class="faqs-section pt-0">
      <div class="inner-container">
        <!-- FAQ Column -->
        <div class="faq-column wow fadeInUp" data-wow-delay="400ms">
          <div class="inner-column">
            <div class="boxcar-title text-center">
              <h2 class="title"><?php echo t('revision.faq_title'); ?></h2>
            </div>
            <ul class="widget-accordion wow fadeInUp">
              <!--Block-->
              <li class="accordion block active-block">
                <div class="acc-btn active"><?php echo t('revision.faq_frequency'); ?>
                  <div class="icon fa fa-plus"></div>
                </div>
                <div class="acc-content current">
                  <div class="content">
                    <div class="text"><?php echo t('revision.faq_frequency_answer'); ?></div>
                  </div>
                </div>
              </li>

              <!--Block-->
              <li class="accordion block">
                <div class="acc-btn"><?php echo t('revision.faq_duration'); ?>
                  <div class="icon fa fa-plus"></div>
                </div>
                <div class="acc-content">
                  <div class="content">
                    <div class="text"><?php echo t('revision.faq_duration_answer'); ?></div>
                  </div>
                </div>
              </li>

              <!--Block-->
              <li class="accordion block">
                <div class="acc-btn"><?php echo t('revision.faq_elements'); ?>
                  <div class="icon fa fa-plus"></div>
                </div>
                <div class="acc-content">
                  <div class="content">
                    <div class="text"><?php echo t('revision.faq_elements_answer'); ?></div>
                  </div>
                </div>
              </li>
              <!--Block-->
              <li class="accordion block">
                <div class="acc-btn"><?php echo t('revision.faq_warranty'); ?><div class="icon fa fa-plus">
                  </div>
                </div>
                <div class="acc-content">
                  <div class="content">
                    <div class="text"><?php echo t('revision.faq_warranty_answer'); ?>
                    </div>
                  </div>
                </div>
              </li>

              <!--Block-->
              <li class="accordion block">
                <div class="acc-btn"><?php echo t('revision.faq_all_brands'); ?><div class="icon fa fa-plus">
                  </div>
                </div>
                <div class="acc-content">
                  <div class="content">
                    <div class="text"><?php echo t('revision.faq_all_brands_answer'); ?></div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- End faqs-section -->
  </section>
  <!-- End faq-inner-section -->

  <!-- Section Prise de RDV -->
  <?php include 'includes/maintenance_form.php'; ?>

  <?php include 'includes/footer.php'; ?>
</div>

<?php include 'includes/script.php'; ?>

<?php include 'includes/script.php'; ?>