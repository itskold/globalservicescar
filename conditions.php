<?php
$titrePage = "Home";
include 'includes/header.php'; ?>


<div class="boxcar-wrapper">

  <?php include 'includes/nav.php'; ?>


  <!-- tabs-section -->
  <section class="tabs-section layout-radius">
    <div class="boxcar-container">
      <div class="boxcar-title-three">
        <ul class="breadcrumb">
          <li><a href="/"><?php echo t('nav.home'); ?></a></li>
          <li><a href="/services"><?php echo t('services.vehicle_rental'); ?></a></li>
          <li><span><?php echo t('services.rental_conditions'); ?></span></li>
        </ul>
        <h2><?php echo t('services.rental_conditions'); ?></h2>
      </div>
      <div class="row">
        <div class="tabs-column col-lg-3 col-md-4 col-sm-12">
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="ConditionsGenerales-tab" data-bs-toggle="tab"
                data-bs-target="#ConditionsGenerales" type="button" role="tab" aria-controls="ConditionsGenerales"
                aria-selected="true"><?php echo t('rental.general_conditions'); ?></button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="Assurances-tab" data-bs-toggle="tab" data-bs-target="#Assurances"
                type="button" role="tab" aria-controls="Assurances"
                aria-selected="false"><?php echo t('rental.insurance'); ?></button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="Restrictions-tab" data-bs-toggle="tab" data-bs-target="#Restrictions"
                type="button" role="tab" aria-controls="Restrictions"
                aria-selected="false"><?php echo t('rental.restrictions'); ?></button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="Penalites-tab" data-bs-toggle="tab" data-bs-target="#Penalites" type="button"
                role="tab" aria-controls="Penalites" aria-selected="false"><?php echo t('rental.penalties'); ?></button>
            </li>
          </ul>
        </div>
        <div class="content-column col-lg-9 col-md-8 col-sm-12">
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="ConditionsGenerales" role="tabpanel"
              aria-labelledby="ConditionsGenerales-tab">
              <div class="right-box">
                <div class="content-box">
                  <h6 class="title">1. <?php echo t('rental.minimum_age'); ?></h6>
                  <div class="text v2">
                    <?php echo t('rental.minimum_age_text'); ?>
                  </div>
                </div>
                <div class="content-box">
                  <h6 class="title">2. <?php echo t('rental.required_documents'); ?></h6>
                  <div class="text v2">
                    <?php echo t('rental.required_documents_text'); ?>
                  </div>
                </div>
                <div class="content-box">
                  <h6 class="title">3. <?php echo t('rental.payment_deposit'); ?></h6>
                  <div class="text v2">
                    <?php echo t('rental.payment_deposit_text'); ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="Assurances" role="tabpanel" aria-labelledby="Assurances-tab">
              <div class="right-box">
                <div class="content-box">
                  <h6 class="title">1. <?php echo t('rental.basic_coverage'); ?></h6>
                  <div class="text v2">
                    <?php echo t('rental.basic_coverage_text'); ?>
                  </div>
                </div>
                <div class="content-box">
                  <h6 class="title">2. <?php echo t('rental.additional_options'); ?></h6>
                  <div class="text v2">
                    <?php echo t('rental.additional_options_text'); ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="Restrictions" role="tabpanel" aria-labelledby="Restrictions-tab">
              <div class="right-box">
                <div class="content-box">
                  <h6 class="title">1. <?php echo t('rental.mileage'); ?></h6>
                  <div class="text v2">
                    <?php echo t('rental.mileage_text'); ?>
                  </div>
                </div>
                <div class="content-box">
                  <h6 class="title">2. <?php echo t('rental.prohibited_areas'); ?></h6>
                  <div class="text v2">
                    <?php echo t('rental.prohibited_areas_text'); ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="Penalites" role="tabpanel" aria-labelledby="Penalites-tab">
              <div class="right-box">
                <div class="content-box">
                  <h6 class="title">1. <?php echo t('rental.late_return'); ?></h6>
                  <div class="text v2">
                    <?php echo t('rental.late_return_text'); ?>
                  </div>
                </div>
                <div class="content-box">
                  <h6 class="title">2. <?php echo t('rental.traffic_violations'); ?></h6>
                  <div class="text v2">
                    <?php echo t('rental.traffic_violations_text'); ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End tabs-section -->






  <?php include 'includes/footer.php'; ?>



</div><!-- End Page Wrapper -->

<?php include 'includes/script.php'; ?>