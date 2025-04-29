<!-- Main Header-->
<header
  class="boxcar-header header-style-v1 header-default <?php echo (basename($_SERVER['PHP_SELF']) !== 'index.php') ? 'style-two inner-header cus-style-1' : ''; ?>">
  <div class="header-inner">
    <div class="inner-container">
      <div class="c-box">
        <div class="logo-inner">
          <div class="logo"><a href="index.php"><img src="images/logo.png" alt="Global Car Services"
                title="Global Car Services" style="filter: invert(1) brightness(10.5);;"></a></div>
        </div>

        <!--Nav Box-->
        <div class="nav-out-bar">
          <nav class="nav main-menu">
            <ul class="navigation" id="navbar">
              <li><a href="index.php"><?php echo t('nav.home'); ?></a></li>
              <li class="current-dropdown"><span><?php echo t('nav.auto_services'); ?> <i
                    class="fa-solid fa-angle-down"></i></span>
                <div class="mega-menu">
                  <div class="mega-column">
                    <h3><?php echo t('services.maintenance_repair'); ?></h3>
                    <ul>
                      <li><a href="entretien"><?php echo t('services.periodic_maintenance'); ?></a></li>
                      <li><a href="diagnostic"><?php echo t('services.electronic_diagnostic'); ?></a></li>
                      <li><a href="reparation"><?php echo t('services.mechanical_repairs'); ?></a></li>
                      <li><a href="revision"><?php echo t('services.complete_revision'); ?></a></li>
                    </ul>
                  </div>
                  <div class="mega-column">
                    <h3><?php echo t('services.vehicle_rental'); ?></h3>
                    <ul>
                      <li><a href="minibus"><?php echo t('services.minibus_rental'); ?></a></li>
                      <li><a href="fourgon"><?php echo t('services.van_rental'); ?></a></li>
                      <li><a href="voiture"><?php echo t('services.view_rentals'); ?></a></li>
                      <li><a href="conditions"><?php echo t('services.rental_conditions'); ?></a></li>
                    </ul>
                  </div>
                  <div class="mega-column">
                    <h3><?php echo t('services.additional_services'); ?></h3>
                    <ul>
                      <li><a href="depannage"><?php echo t('services.breakdown_service'); ?></a></li>
                      <li><a href="devis"><?php echo t('services.free_quote'); ?></a></li>
                      <li><a href="conseils"><?php echo t('services.maintenance_advice'); ?></a></li>
                      <li><a href="garantie"><?php echo t('services.work_guarantee'); ?></a></li>
                    </ul>
                  </div>
                </div>
              </li>
              <li><a href="rendez-vous"><?php echo t('nav.appointment'); ?></a></li>
              <li><a href="contact"><?php echo t('nav.contact'); ?></a></li>
              <li><a href="about"><?php echo t('nav.about'); ?></a></li>
            </ul>
          </nav>
        </div>

        <div class="right-box">
          <div class="language-switcher">
            <a href="<?php echo getLangUrl($lang === 'fr' ? 'nl' : 'fr'); ?>" class="box-account"
              title="<?php echo t('nav.language'); ?>">
              <div class="icon">
                <svg width="18" height="18" viewBox="0 0 512 512" fill="#fff">
                  <path
                    d="M352 256c0 22.2-1.2 43.6-3.3 64l-185.3 0c-2.2-20.4-3.3-41.8-3.3-64s1.2-43.6 3.3-64l185.3 0c2.2 20.4 3.3 41.8 3.3 64zm28.8-64l123.1 0c5.3 20.5 8.1 41.9 8.1 64s-2.8 43.5-8.1 64l-123.1 0c2.1-20.6 3.2-42 3.2-64s-1.1-43.4-3.2-64zm112.6-32l-116.7 0c-10-63.9-29.8-117.4-55.3-151.6c78.3 20.7 142 77.5 171.9 151.6zm-149.1 0l-176.6 0c6.1-36.4 15.5-68.6 27-94.7c10.5-23.6 22.2-40.7 33.5-51.5C239.4 3.2 248.7 0 256 0s16.6 3.2 27.8 13.8c11.3 10.8 23 27.9 33.5 51.5c11.6 26 20.9 58.2 27 94.7zm-209 0L18.6 160C48.6 85.9 112.2 29.1 190.6 8.4C165.1 42.6 145.3 96.1 135.3 160zM8.1 192l123.1 0c-2.1 20.6-3.2 42-3.2 64s1.1 43.4 3.2 64L8.1 320C2.8 299.5 0 278.1 0 256s2.8-43.5 8.1-64zM194.7 446.6c-11.6-26-20.9-58.2-27-94.6l176.6 0c-6.1 36.4-15.5 68.6-27 94.6c-10.5 23.6-22.2 40.7-33.5 51.5C272.6 508.8 263.3 512 256 512s-16.6-3.2-27.8-13.8c-11.3-10.8-23-27.9-33.5-51.5zM135.3 352c10 63.9 29.8 117.4 55.3 151.6C112.2 482.9 48.6 426.1 18.6 352l116.7 0zm358.1 0c-30 74.1-93.6 130.9-171.9 151.6c25.5-34.2 45.2-87.7 55.3-151.6l116.7 0z" />
                </svg>
              </div>
              <?php echo $lang === 'fr' ? 'FR' : 'NL'; ?>
            </a>
          </div>
          <!-- <a href="espace-client" title="<?php echo t('nav.client_area'); ?>"
            class="box-account d-lg-flex d-md-none d-none">
            <span class="icon">
              <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_147_6490)">
                  <path
                    d="M7.99998 9.01221C3.19258 9.01221 0.544983 11.2865 0.544983 15.4161C0.544983 15.7386 0.806389 16.0001 1.12892 16.0001H14.871C15.1935 16.0001 15.455 15.7386 15.455 15.4161C15.455 11.2867 12.8074 9.01221 7.99998 9.01221ZM1.73411 14.8322C1.9638 11.7445 4.06889 10.1801 7.99998 10.1801C11.9311 10.1801 14.0362 11.7445 14.2661 14.8322H1.73411Z"
                    fill="white" />
                  <path
                    d="M7.99999 0C5.79171 0 4.12653 1.69869 4.12653 3.95116C4.12653 6.26959 5.86415 8.15553 7.99999 8.15553C10.1358 8.15553 11.8735 6.26959 11.8735 3.95134C11.8735 1.69869 10.2083 0 7.99999 0ZM7.99999 6.98784C6.50803 6.98784 5.2944 5.62569 5.2944 3.95134C5.2944 2.3385 6.43231 1.16788 7.99999 1.16788C9.54259 1.16788 10.7056 2.36438 10.7056 3.95134C10.7056 5.62569 9.49196 6.98784 7.99999 6.98784Z"
                    fill="white" />
                </g>
                <defs>
                  <clipPath id="clip0_147_6490">
                    <rect width="16" height="16" fill="white" />
                  </clipPath>
                </defs>
              </svg>
            </span>
          </a> -->
          <div class="btn">
            <a href="rendez-vous" class="header-btn-two"><?php echo t('nav.make_appointment'); ?></a>
          </div>
          <div class="mobile-navigation">
            <a href="#nav-mobile" title="<?php echo t('nav.mobile_menu'); ?>">
              <svg width="22" height="11" viewBox="0 0 22 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="22" height="2" fill="white" />
                <rect y="9" width="22" height="2" fill="white" />
              </svg>
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- Recherche -->
    <div class="search-popup">
      <span class="search-back-drop"></span>
      <button class="close-search"><span class="fa fa-times"></span></button>
      <div class="search-inner">
        <form method="post" action="recherche">
          <div class="form-group">
            <input type="search" name="search-field" value="" placeholder="<?php echo t('search.placeholder'); ?>"
              required="">
            <button type="submit"><i class="fa fa-search"></i></button>
          </div>
        </form>
      </div>
    </div>

    <div id="nav-mobile"></div>
  </div>
</header>
<!-- End header-section -->