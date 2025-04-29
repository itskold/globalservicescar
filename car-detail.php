<?php
$titrePage = "Home";
$id = $_GET['id'];
include 'includes/header.php';

$vehicle = getVehicleById($id);

function getVehicleById($id)
{
    global $vehicles;
    return $vehicles[$id];
}

?>


<div class="boxcar-wrapper">

    <?php include 'includes/nav.php'; ?>


    <section class="inventory-section v1 pb-0 layout-radius mb-0">
        <div class="boxcar-container">
            <div class="boxcar-title-three">

                <ul class="breadcrumb">
                    <li><a href="/"><?php echo t('nav.home'); ?></a></li>
                    <li><a href="/services"><?php echo t('services.vehicle_rental'); ?></a></li>
                    <li><span><?= $vehicle['marque'] ?></span></li>
                </ul>
                <h2><?= $vehicle['marque'] ?> <?= $vehicle['modele'] ?></h2>
                <div class="text"><?= $vehicle['marque'] ?> <?= $vehicle['modele'] ?> <?= $vehicle['prix'] ?> €</div>
                <ul class="spectes-list v2">
                    <li><span><img src="images/resource/insep1-6.svg"><?php echo t('vehicle.test_drive'); ?></span></li>
                    <li><span><img src="images/resource/spec1-5.svg"><?php echo t('vehicle.brochure'); ?></span></li>
                    <li><span><img src="images/resource/insep1-12.svg"><?php echo t('vehicle.vin_report'); ?></span></li>
                </ul>
                <div class="content-box">
                    <div class="btn-box v2">
                        <div class="share-btn">
                            <span><?php echo t('vehicle.share'); ?></span>
                            <a href="#" class="share"><img src="images/resource/share.svg"></a>
                        </div>
                        <div class="share-btn">
                            <span><?php echo t('vehicle.save'); ?></span>
                            <a href="#" class="share"><img src="images/resource/share1-1.svg"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="inspection-column v2 col-xl-8 col-lg-12 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="gallery-sec">
                            <div class="image-column wrap-gallery-box">
                                <div class="inner-column inventry-slider-two">
                                    <?php foreach ($vehicle['image'] as $image) : ?>
                                        <div class="image-box">
                                            <figure class="image"><a href="<?= $image ?>" data-fancybox="gallery"><img src="<?= $image ?>"
                                                        alt=""></a></figure>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                                <div class="content-box">
                                    <ul class="video-list">
                                        <li><a href="https://www.youtube.com/watch?v=7e90gBu4pas" data-fancybox="gallery2"><img
                                                    src="images/resource/video1-1.svg"><?php echo t('vehicle.video'); ?></a></li>
                                        <li><a href="#"><img src="images/resource/video1-2.svg"><?php echo t('vehicle.view_360'); ?></a>
                                        </li>
                                        <li><a href="<?= $vehicle['image'][0] ?>" data-fancybox="gallery"><img
                                                    src="images/resource/video1-4.svg"><?php echo t('vehicle.all_photos'); ?></a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- description-sec -->
                    <div class="description-sec v2">
                        <h4 class="title"><?php echo t('vehicle.description'); ?></h4>
                        <div class="text two">
                            <?= $vehicle['description'] ?>
                        </div>
                    </div>

                    <!-- features-sec -->
                    <div class="features-sec v2 mb-5">
                        <h4 class="title"><?php echo t('vehicle.features'); ?></h4>
                        <div class="row">
                            <!-- list-column -->
                            <div class="list-column col-lg-3 col-md-6 col-sm-12">
                                <div class="inner-column">
                                    <h6 class="title"><?php echo t('vehicle.interior'); ?></h6>
                                    <ul class="feature-list">
                                        <?php foreach ($vehicle['interior'] as $interior) : ?>
                                            <li><i class="fa-solid fa-check"></i><?= $interior ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                            <!-- list-column -->
                            <div class="list-column col-lg-3 col-md-6 col-sm-12">
                                <div class="inner-column">
                                    <h6 class="title"><?php echo t('vehicle.exterior'); ?></h6>
                                    <ul class="feature-list">
                                        <?php foreach ($vehicle['exterior'] as $exterior) : ?>
                                            <li><i class="fa-solid fa-check"></i><?= $exterior ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                            <!-- list-column -->
                            <div class="list-column col-lg-3 col-md-6 col-sm-12">
                                <div class="inner-column">
                                    <h6 class="title"><?php echo t('vehicle.security'); ?></h6>
                                    <ul class="feature-list">
                                        <?php foreach ($vehicle['security'] as $security) : ?>
                                            <li><i class="fa-solid fa-check"></i><?= $security ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                            <!-- list-column -->
                            <div class="list-column col-lg-3 col-md-6 col-sm-12">
                                <div class="inner-column">
                                    <h6 class="title"><?php echo t('vehicle.comfort'); ?></h6>
                                    <ul class="feature-list">
                                        <?php foreach ($vehicle['comfort'] as $comfort) : ?>
                                            <li><i class="fa-solid fa-check"></i><?= $comfort ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="side-bar-column v2 v3 v4 col-xl-4 col-lg-12 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="contact-box v2 mb-3">
                            <span><?php echo t('vehicle.price'); ?></span>
                            <h3 class="title"><?= $vehicle['prix'] ?></h3>
                            <div class="content-box">
                                <div class="btn-box">
                                    <a href="#" class="side-btn"><?php echo t('vehicle.make_offer'); ?><svg
                                            xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewbox="0 0 14 14" fill="none">
                                            <g clip-path="url(#clip0_881_7563)">
                                                <path
                                                    d="M13.6111 0H5.05558C4.84062 0 4.66668 0.173943 4.66668 0.388901C4.66668 0.603859 4.84062 0.777802 5.05558 0.777802H12.6723L0.113941 13.3362C-0.0379805 13.4881 -0.0379805 13.7342 0.113941 13.8861C0.189884 13.962 0.289415 14 0.38891 14C0.488405 14 0.5879 13.962 0.663879 13.8861L13.2222 1.3277V8.94447C13.2222 9.15943 13.3962 9.33337 13.6111 9.33337C13.8261 9.33337 14 9.15943 14 8.94447V0.388901C14 0.173943 13.8261 0 13.6111 0Z"
                                                    fill="white"></path>
                                            </g>
                                            <defs>
                                                <clippath id="clip0_881_7563">
                                                    <rect width="14" height="14" fill="white"></rect>
                                                </clippath>
                                            </defs>
                                        </svg>
                                    </a>
                                    <a href="#" class="side-btn two"><?php echo t('vehicle.chat_whatsapp'); ?><svg
                                            xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewbox="0 0 14 14" fill="none">
                                            <g clip-path="url(#clip0_881_8744)">
                                                <path
                                                    d="M13.6111 0H5.05558C4.84062 0 4.66668 0.173943 4.66668 0.388901C4.66668 0.603859 4.84062 0.777802 5.05558 0.777802H12.6723L0.113941 13.3362C-0.0379805 13.4881 -0.0379805 13.7342 0.113941 13.8861C0.189884 13.962 0.289415 14 0.38891 14C0.488405 14 0.5879 13.962 0.663879 13.8861L13.2222 1.3277V8.94447C13.2222 9.15943 13.3962 9.33337 13.6111 9.33337C13.8261 9.33337 14 9.15943 14 8.94447V0.388901C14 0.173943 13.8261 0 13.6111 0Z"
                                                    fill="#60C961"></path>
                                            </g>
                                            <defs>
                                                <clippath id="clip0_881_8744">
                                                    <rect width="14" height="14" fill="white"></rect>
                                                </clippath>
                                            </defs>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Section Aperçu -->
                        <div class="overview-box">
                            <h4 class="title"><?php echo t('vehicle.overview'); ?></h4>
                            <ul class="list v2">
                                <li><span><img
                                            src="images/resource/insep1-1.svg"><?php echo t('vehicle.body_type'); ?></span><?= $vehicle['carrosserie'] ?>
                                </li>
                                <li><span><img
                                            src="images/resource/insep1-2.svg"><?php echo t('vehicle.mileage'); ?></span><?= $vehicle['kilometrage'] ?>
                                </li>
                                <li><span><img
                                            src="images/resource/insep1-3.svg"><?php echo t('vehicle.fuel'); ?></span><?= $vehicle['carburant'] ?>
                                </li>
                                <li><span><img
                                            src="images/resource/insep1-4.svg"><?php echo t('vehicle.year'); ?></span><?= $vehicle['annee'] ?>
                                </li>
                                <li><span><img
                                            src="images/resource/insep1-5.svg"><?php echo t('vehicle.transmission'); ?></span><?= $vehicle['transmission'] ?>
                                </li>
                                <li><span><img
                                            src="images/resource/insep1-6.svg"><?php echo t('vehicle.traction_type'); ?></span><?= $vehicle['type_de_traction'] ?>
                                </li>
                                <li><span><img
                                            src="images/resource/insep1-7.svg"><?php echo t('vehicle.condition'); ?></span><?= $vehicle['etat'] ?>
                                </li>
                                <li><span><img
                                            src="images/resource/insep1-8.svg"><?php echo t('vehicle.engine_size'); ?></span><?= $vehicle['cylindree'] ?>
                                </li>
                                <li><span><img
                                            src="images/resource/insep1-9.svg"><?php echo t('vehicle.doors'); ?></span><?= $vehicle['portes'] ?>
                                </li>
                                <li><span><img
                                            src="images/resource/insep1-10.svg"><?php echo t('vehicle.cylinders'); ?></span><?= $vehicle['cylindres'] ?>
                                </li>
                                <li><span><img
                                            src="images/resource/insep1-11.svg"><?php echo t('vehicle.color'); ?></span><?= $vehicle['couleur'] ?>
                                </li>
                                <li><span><img
                                            src="images/resource/insep1-12.svg"><?php echo t('vehicle.vin'); ?></span><?= $vehicle['vin'] ?>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>

        </div>
</div>
<!-- cars-section-three -->

<!-- End shop section two -->
</section>


<?php include 'includes/footer.php'; ?>



</div><!-- End Page Wrapper -->

<?php include 'includes/script.php'; ?>