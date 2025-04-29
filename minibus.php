<?php
$titrePage = "Home";
include 'includes/header.php'; ?>


<div class="boxcar-wrapper">

  <?php include 'includes/nav.php'; ?>


  <!-- cars-section-three -->
  <section class="cars-section-four v1 v2 layout-radius">
    <div class="boxcar-container">
      <div class="boxcar-title-three wow fadeInUp">
        <ul class="breadcrumb">
          <li><a href="/"><?php echo t('nav.home'); ?></a></li>
          <li><a href="/services"><?php echo t('services.vehicle_rental'); ?></a></li>
          <li><span><?php echo t('services.minibus_rental'); ?></span></li>
        </ul>
        <h2><?php echo t('minibus.choose_your_minibus'); ?></h2>
      </div>
      <div class="row">

        <div class="col-xl-12 col-md-12 col-sm-12">
          <div class="text-box">
            <div class="text"><?php echo t('minibus.showing'); ?> 1 <?php echo t('minibus.to'); ?>
              <?= count($vehicles) ?> <?php echo t('minibus.of'); ?> <?= count($vehicles) ?>
              <?php echo t('minibus.minibuses'); ?></div>
            <form>
              <div class="form_boxes v3">
                <small><?php echo t('minibus.sort_by'); ?></small>
                <div class="drop-menu height-auto">
                  <div class="select">
                    <span><?php echo t('minibus.all_brands'); ?></span>
                    <i class="fa fa-angle-down"></i>
                  </div>
                  <input type="hidden" name="make">
                  <ul class="dropdown" style="display: none;">
                    <?php foreach ($vehicles as $vehicle) : ?>
                      <?php if ($vehicle['type'] === 'MINIBUS') : ?>
                        <li><?= $vehicle['marque'] ?></li>
                      <?php endif; ?>
                    <?php endforeach; ?>
                  </ul>
                </div>
              </div>
            </form>
          </div>

          <div class="row wow fadeInUp">
            <!-- car-block-four -->
            <?php foreach ($vehicles as $vehicle) : ?>
              <?php if ($vehicle['type'] === 'MINIBUS') : ?>
                <div class="car-block-four col-lg-4 col-md-6 col-sm-12">
                  <div class="inner-box">
                    <div class="image-box">
                      <figure class="image"><a href="#"><img src="<?= $vehicle['image'][0] ?>" alt=""></a>
                      </figure>

                    </div>
                    <div class="content-box">
                      <h6 class="title"><a href="#"><?= $vehicle['marque'] ?>, <?= $vehicle['modele'] ?></a></h6>
                      <div class="text"><?= $vehicle['details'] ?></div>
                      <ul>
                        <li><i class="flaticon-gasoline-pump"></i><?= $vehicle['kilometrage'] ?></li>
                        <li><i class="flaticon-speedometer"></i><?= $vehicle['carburant'] ?></li>
                        <li><i class="flaticon-gearbox"></i><?= $vehicle['transmission'] ?></li>
                      </ul>
                      <div class="btn-box">
                        <small><?= $vehicle['prix'] ?></small><sup>/<?php echo t('minibus.day'); ?></sup>
                        <a href="/car-detail.php?id=<?= $vehicle['id'] ?>"
                          class="details"><?php echo t('minibus.choose'); ?>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              <?php endif; ?>
            <?php endforeach; ?>
          </div>
          <div class="pagination-sec">
            <nav aria-label="Page navigation example">
              <ul class="pagination">
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true"><svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                        xmlns="../../../www.w3.org/2000/svg.html">
                        <path
                          d="M2.57983 5.99989C2.57983 5.7849 2.66192 5.56987 2.82573 5.4059L7.98559 0.24617C8.31382 -0.0820565 8.84598 -0.0820565 9.17408 0.24617C9.50217 0.574263 9.50217 1.10632 9.17408 1.43457L4.60841 5.99989L9.17376 10.5654C9.50185 10.8935 9.50185 11.4256 9.17376 11.7537C8.84566 12.0821 8.31366 12.0821 7.98544 11.7537L2.82555 6.59404C2.66176 6.42999 2.57983 6.21495 2.57983 5.99989Z"
                          fill="#050B20" />
                      </svg> </span>
                    <span class="sr-only"><?php echo t('minibus.previous'); ?></span>
                  </a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true"><svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                        xmlns="../../../www.w3.org/2000/svg.html">
                        <g clip-path="url(#clip0_2880_6407)">
                          <path
                            d="M9.42017 6.00011C9.42017 6.2151 9.33808 6.43013 9.17427 6.5941L4.01441 11.7538C3.68618 12.0821 3.15402 12.0821 2.82592 11.7538C2.49783 11.4257 2.49783 10.8937 2.82592 10.5654L7.39159 6.00011L2.82624 1.43461C2.49815 1.10652 2.49815 0.574382 2.82624 0.246315C3.15434 -0.0820709 3.68634 -0.0820709 4.01457 0.246315L9.17446 5.40596C9.33824 5.57001 9.42017 5.78505 9.42017 6.00011Z"
                            fill="#050B20" />
                        </g>
                        <defs>
                          <clipPath id="clip0_2880_6407">
                            <rect width="12" height="12" fill="white" transform="translate(12 12) rotate(-180)" />
                          </clipPath>
                        </defs>
                      </svg> </span>
                    <span class="sr-only"><?php echo t('minibus.next'); ?></span>
                  </a>
                </li>
              </ul>
              <div class="text"><?php echo t('minibus.showing'); ?> 1 <?php echo t('minibus.to'); ?>
                <?= count($vehicles) ?> <?php echo t('minibus.of'); ?> <?= count($vehicles) ?>
                <?php echo t('minibus.minibuses'); ?></div>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End shop section two -->


  <?php include 'includes/footer.php'; ?>



</div><!-- End Page Wrapper -->

<?php include 'includes/script.php'; ?>