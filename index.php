<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$titrePage = "Home";

include 'includes/header.php'; ?>


<div class="boxcar-wrapper">

  <?php include 'includes/nav.php'; ?>


  <!-- BANNER SECTION -->
  <section class="boxcar-banner-section-v1">
    <div class="container">
      <div class="banner-content">
        <!-- <span class="wow fadeInUp"><?php echo t('home.vehicle_rental_pro'); ?></span> -->
        <h2 class="wow fadeInUp text-uppercase" data-wow-delay="100ms"><?php echo t('home.find_utility_vehicle'); ?>
        </h2>

        <div class="form-tabs">
          <ul class="form-tabs-list wow fadeInUp" data-wow-delay="200ms">
            <!-- <li class="current" data-tab="tab-1"><?php echo t('home.book_vehicle'); ?></li> -->
          </ul>
          <div class="form-tab-content">
            <div class="form-tab-content wow fadeInUp" data-wow-delay="300ms">
              <div class="form-tab-pane current" id="tab-1">
                <form>
                  <div class="form_boxes line-r">
                    <div class="date-picker-container">
                      <div class="custom-select-container" id="location-select">
                        <div class="select-part">
                          <span class="select-label"><?php echo t('home.rental_location'); ?></span>
                          <span class="select-value"><?php echo t('home.select'); ?></span>
                        </div>
                        <div class="arrow-part">
                          <i class="fa fa-angle-down"></i>
                        </div>
                      </div>
                      <input type="hidden" name="location">
                      <ul class="custom-dropdown" style="display: none;">
                        <li data-value="anvers">Van Heetveldelei 157, <br> 2100 Antwerpen</li>
                        <li data-value="gent">Baarledorpstraat 51a, <br> 9031 Drongen, Gent</li>
                      </ul>
                    </div>
                  </div>
                  <div class="form_boxes line-r">
                    <div class="date-picker-container">
                      <div class="custom-select-container" id="vehicle-type-select">
                        <div class="select-part">
                          <span class="select-label"><?php echo t('home.vehicle_type'); ?></span>
                          <span class="select-value"><?php echo t('home.select'); ?></span>
                        </div>
                        <div class="arrow-part">
                          <i class="fa fa-angle-down"></i>
                        </div>
                      </div>
                      <input type="hidden" name="vehicle_type">
                      <ul class="custom-dropdown" style="display: none;">
                        <li data-value="van"><?php echo t('home.van'); ?></li>
                        <li data-value="minibus"><?php echo t('home.minibuses'); ?></li>
                      </ul>
                    </div>
                  </div>
                  <div class="form_boxes line-r">
                    <div class="date-picker-container">
                      <div class="date-time-selector" id="pickup-date-select">
                        <div class="date-part">
                          <span class="date-label"><?php echo t('home.rental_pickup_date'); ?></span>
                          <span class="date-value">11. apr.</span>
                        </div>
                        <div class="time-part">
                          <span class="time-value">12:30</span>
                        </div>
                      </div>
                      <input type="hidden" name="pickup_date">
                      <input type="hidden" name="pickup_time">
                    </div>
                  </div>
                  <div class="form_boxes">
                    <div class="date-picker-container">
                      <div class="date-time-selector" id="return-date-select">
                        <div class="date-part">
                          <span class="date-label"><?php echo t('home.rental_return_date'); ?></span>
                          <span class="date-value">15. apr.</span>
                        </div>
                        <div class="time-part">
                          <span class="time-value">08:30</span>
                        </div>
                      </div>
                      <input type="hidden" name="return_date">
                      <input type="hidden" name="return_time">
                    </div>
                  </div>
                  <div class="form-submit">
                    <button type="submit" formaction="location.html" class="theme-btn">
                      <i class="flaticon-search"></i>
                    </button>
                  </div>
                </form>
              </div>
            </div>
            <span class="wow fadeInUp" data-wow-delay="400ms"><?php echo t('home.discover_vehicles'); ?></span>
            <ul class="model-links">
              <li><a href="fourgon"><i class="flaticon-bus"></i><?php echo t('home.utility_vans'); ?></a></li>
              <li><a href="minibus"><i class="flaticon-van"></i><?php echo t('home.minibuses'); ?></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- BANNER SECTION END -->


  <section class="boxcar-brand-section section-radius-top bg-1">
    <div class="boxcar-container">
      <div class="boxcar-title">
        <h2><?php echo t('home.our_services'); ?></h2>
      </div>
      <div class="row">
        <!-- Vente de véhicules -->
        <div class="dealership-block col-lg-4 col-md-6 col-sm-12">
          <div class="inner-box">
            <div class="image-box">
              <figure class="image"><a href="voiture"><img src="images/resource/rental.jpg"
                    alt="<?php echo t('home.rent_vehicle'); ?>" style="filter:grayscale(100%);"></a></figure>
            </div>
            <div class="content-box">
              <h6 class="title"><a href="voiture"><?php echo t('home.rent_vehicle'); ?></a></h6>
              <div class="text"><?php echo t('home.rent_vehicle_text'); ?></div>
              <a href="voiture" class="read-more"><?php echo t('home.view_vehicles'); ?>
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                  <path
                    d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z"
                    fill="white"></path>
                </svg>
              </a>
            </div>
          </div>
        </div>

        <!-- Entretien & Réparation -->
        <div class="dealership-block col-lg-4 col-md-6 col-sm-12">
          <div class="inner-box">
            <div class="image-box">
              <figure class="image"><a href="rendez-vous"><img src="images/resource/repair.jpg"
                    alt="<?php echo t('home.repair_maintenance'); ?>" style="filter:grayscale(100%);"></a></figure>
            </div>
            <div class="content-box">
              <h6 class="title"><a href="rendez-vous"><?php echo t('home.repair_maintenance'); ?></a></h6>
              <div class="text"><?php echo t('home.repair_maintenance_text'); ?></div>
              <a href="rendez-vous" class="read-more"><?php echo t('home.make_appointment'); ?>
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                  <path
                    d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z"
                    fill="white"></path>
                </svg>
              </a>
            </div>
          </div>
        </div>

        <!-- Location de véhicules -->
        <div class="dealership-block col-lg-4 col-md-6 col-sm-12">
          <div class="inner-box">
            <div class="image-box">
              <figure class="image"><a href="location.html"><img src="images/resource/dealer1-3.jpg"
                    alt="<?php echo t('home.vehicle_purchase'); ?>" style="filter:grayscale(100%);"></a></figure>
            </div>
            <div class="content-box">
              <h6 class="title"><a href="catalogue.html"><?php echo t('home.vehicle_purchase'); ?></a></h6>
              <div class="text"><?php echo t('home.vehicle_purchase_text'); ?></div>
              <a href="location.html" class="read-more"><?php echo t('home.view_offers'); ?>
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                  <path
                    d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z"
                    fill="white"></path>
                </svg>
              </a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- brand section -->

  <section class="why-choose-us-section bg-1">
    <div class="boxcar-container">
      <div class="row">
        <div class="content-column col-lg-6 col-lg-6 col-sm-12">
          <div class="boxcar-title wow fadeInUp">
            <h2 class="title"><?php echo t('home.focus_on_what_matters'); ?></h2>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12">
          <div class="row">
            <!-- choose-us-block -->
            <div class="choose-us-block col-lg-6 col-md-6 col-sm-12">
              <div class="inner-box wow fadeInUp" data-wow-delay="100ms">
                <div class="icon-box">
                <svg xmlns="http://www.w3.org/2000/svg" id="Calque_2" data-name="Calque 2" width="51" height="60" viewBox="0 0 774.98 764.99">
  <g id="Calque_1-2" data-name="Calque 1">
    <g>
      <path d="M532.8,383.08c-2.14,15.21-7.79,30.52-16.1,43.4-6.28,9.72-30.5,36.64-41.59,38.41-12.95,2.07-21.79-8.15-17.67-20.67,2.15-6.55,11.25-9.67,16.26-13.74,14.68-11.95,25.84-30.88,28.98-49.53-5.49-.44-11.93-3.86-16.53-6.98s-7.34-7.53-10.96-10.04c-.85-.58-.99-1.4-2.51-.98-10.08,42.57-34.95,81.15-68.48,109.02l-.58,22.37c87.04,18.31,175.1,86.16,180.1,181.07,2.18,41.27,1.08,81.82-48.51,89.58H48.14C-.72,757.84-1.55,715.55.63,675.41c5.2-95.71,91.26-162.14,179.1-181.07l-.22-21.73c-33.91-28.26-59.97-67.69-67.85-111.66-18.38,24.32-49.26,30.69-75.91,15.42-15.67-8.98-29.3-27.7-31.07-45.93-1.52-15.66-1.77-63.11,1.69-77.29,5.04-20.69,23.29-38.85,44.08-43.43,7.22-67.22,43.84-127.21,98.91-165.59C207.72,3.46,279.13-9.09,348.68,6.44c96.49,21.54,174.73,102.83,184.43,202.57,22.61,5.46,41.3,23.87,46.27,46.73,3.2,14.7,2.61,57.59,1.33,73.74-2.02,25.54-23.19,48.37-47.9,53.6ZM503.68,209.94c-9.87-86.92-80.75-158.39-165.8-174.7-31.74-6.09-65.7-5.86-97.22,1.2-82.53,18.49-150,87.95-160.01,172.97,11.83,3.07,21.5,10.01,30.01,18.54.99-35.17,16.24-67.62,37.61-94.9,44.74-57.1,111.76-80.8,183.41-66.62,75.81,15.01,134.38,82.35,142.99,158.51l13.98-9.51,15.02-5.49ZM417.67,414.96c-16.01,5.32-32.65,5.21-49.34,5.15-4.45,6.57-7.28,11.69-14.97,15.03-10.24,4.46-47.9,4.4-58.07-.32-24.08-11.17-21.21-47.19,4.36-54.39,8.75-2.47,43.57-2.68,51.99.05,6.38,2.06,12.49,9.6,14.73,10.27,6.57,1.95,27.13-.47,34.5-2.09,16.56-3.64,36.23-12.75,42.28-29.72,7.61-21.38,6.1-98.75,3.51-123.47-15.29-145.92-195.6-196.03-280.8-75.83-19.69,27.78-27.69,58.83-29.23,92.77-3.57,78.72-4.16,147.99,64.73,198.36,72.3,52.87,164.19,34.38,216.31-35.81ZM60.43,237.21c-14.67,2.09-25.56,15.86-26.79,30.2-1.27,14.73-1.4,44.43.05,59.03,3.75,37.82,58.88,37.44,62.03,1.04,1.34-15.48,1.62-48.84-.03-64.04-1.76-16.24-19.31-28.51-35.25-26.23ZM516.45,237.23c-11.82,1.14-23.07,10.14-26.5,21.5-2.75,9.1-2.39,56.47-1.27,67.71,3.4,34.25,51.52,37.52,61.55,5.57-.91-21.64,2.75-47.37.45-68.56-1.74-16.02-18.84-27.69-34.23-26.21ZM374.67,488.95c-36.62,23.91-86.45,28.65-128.22,16.72-13.43-3.84-25.35-10.63-37.78-16.72v20.5c0,59.19,138.71,67.94,162.5,14.5.81-1.81,3.5-10.08,3.5-11.5v-23.5ZM181.66,524.95c-69.74,15.53-145.86,70.77-150.98,147.52-.76,11.42-1.4,35.08.08,45.9,1.08,7.92,7.96,13.32,14.88,16.12l488.57.51c9.79-.6,18.37-8.86,19.46-18.54,1.16-10.31.62-29.29-.01-39.99-4.75-79.84-79.42-135.21-151.95-151.47-8.62,35.83-47.39,57.85-81.81,62.69-52.28,7.35-120.56-6.16-138.24-62.73Z"/>
      <path d="M624.01,334.61c-7.32-7.35-4.6-21.12,5.11-24.71l133.07-.97c16.8,3.32,17.29,26.86,0,30.05h-129.05c-2.59-.32-7.32-2.54-9.14-4.36Z"/>
      <path d="M653.41,237.19l92.67-.15c16.57,3,18.52,24.97,2.02,29.85h-95.87c-15.9-4.08-15.53-26.9,1.17-29.7Z"/>
      <path d="M609.4,380.18h90.53c18.22,3.06,18,28.79-3.78,30.75-26.56,2.39-56.77-1.52-83.7-.27-19.02-1.34-21.03-25.24-3.05-30.49Z"/>
      <path d="M374.4,602.18c14.67-3.02,24.94,9.46,17.71,22.7l-91.86,92.14c-4.73,1.48-10.82,1.71-15.08-1.07l-55.02-55.98c-10-13.14,1.84-29.88,17.81-23.81,5.87,2.23,11.35,10.91,15.68,15.32,9.84,10,19.82,20.36,30.39,29.4,20.57-20.44,41.29-40.76,61.66-61.4,4.58-4.64,12.24-15.97,18.7-17.3Z"/>
    </g>
  </g>
</svg>
                </div>
                <div class="content-box">
                  <h6 class="title"><?php echo t('home.responsive_customer_service'); ?></h6>
                  <div class="text"><?php echo t('home.customer_service_text'); ?></div>
                </div>
              </div>
            </div>
            <!-- choose-us-block -->
            <div class="choose-us-block col-lg-6 col-md-6 col-sm-12">
              <div class="inner-box wow fadeInUp" data-wow-delay="200ms">
              <div class="icon-box"><svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60"
                    fill="none">
                    <g clip-path="url(#clip0_137_5313)">
                      <path
                        d="M8.75573 36.7476L35.3054 10.1979C37.136 8.36729 40.104 8.36729 41.9345 10.1979L36.8955 5.15882C35.0649 3.32824 32.0969 3.32824 30.2663 5.15882L3.71668 31.7086C1.88611 33.5392 1.88611 36.5072 3.71668 38.3376L8.75573 43.3767C6.92515 41.5461 6.92515 38.5782 8.75573 36.7476Z"
                        fill="#F9FBFC" />
                      <path
                        d="M50.1537 18.417C51.9843 20.2476 51.9843 23.2156 50.1537 25.0462L23.6039 51.5958C21.7733 53.4264 18.8053 53.4264 16.9748 51.5958L3.71668 38.3376C1.88611 36.5071 1.88611 33.5391 3.71668 31.7085L30.2663 5.15882C32.0969 3.32824 35.0649 3.32824 36.8955 5.15882L43.5247 11.788L52.9689 2.34375"
                        stroke="#050B20" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round"
                        stroke-linejoin="round" />
                      <path
                        d="M18.9629 31.0458C18.7626 32.4554 19.2046 33.9388 20.2889 35.0231C22.1195 36.8537 25.0875 36.8537 26.9181 35.0231C28.7487 33.1926 28.7487 30.2246 26.9181 28.394C25.0875 26.5634 25.0875 23.5954 26.9181 21.7648C28.7487 19.9342 31.7167 19.9342 33.5473 21.7648C34.6316 22.8491 35.0737 24.3325 34.8734 25.7421"
                        stroke="#050B20" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round"
                        stroke-linejoin="round" />
                      <path d="M16.9746 38.3377L20.2891 35.0232" stroke="#050B20" stroke-width="3"
                        stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                      <path d="M33.5469 21.7651L36.8614 18.4504" stroke="#050B20" stroke-width="3"
                        stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                      <path d="M43.5938 57.6562L57.6562 43.5938" stroke="#E1E1E1" stroke-width="3"
                        stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                    <defs>
                      <clipPath id="clip0_137_5313">
                        <rect width="60" height="60" fill="white" />
                      </clipPath>
                    </defs>
                  </svg>
                </div>
                <div class="content-box">
                  <h6 class="title"><?php echo t('home.clear_competitive_prices'); ?></h6>
                  <div class="text"><?php echo t('home.prices_text'); ?></div>
                </div>
              </div>
            </div>
            <!-- choose-us-block -->
            <div class="choose-us-block col-lg-6 col-md-6 col-sm-12">
              <div class="inner-box wow fadeInUp" data-wow-delay="300ms">
               
                <div class="icon-box"><svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60"
                    fill="none">
                    <path d="M30 2.34375V7.03125" stroke="#E1E1E1" stroke-width="3" stroke-miterlimit="10"
                      stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M48.75 2.34375L44.0625 7.03125" stroke="#E1E1E1" stroke-width="3" stroke-miterlimit="10"
                      stroke-linecap="round" stroke-linejoin="round" />
                    <path
                      d="M15.4738 36.6607C14.3072 35.4056 13.5938 33.7236 13.5938 31.875C13.5938 30.7464 13.8596 29.68 14.3323 28.7347L19.0198 19.3597C20.1732 17.0529 22.5579 15.4688 25.3125 15.4688H18.2812C15.5266 15.4688 13.142 17.0529 11.9885 19.3597L7.30102 28.7347C6.8284 29.68 6.5625 30.7464 6.5625 31.875C6.5625 33.7236 7.27594 35.4056 8.44254 36.6607L26.5658 56.1592C27.4218 57.0802 28.6436 57.6562 30 57.6562C31.3564 57.6562 32.5782 57.0802 33.4342 56.1593L33.5156 56.0716L15.4738 36.6607Z"
                      fill="#F9FBFC" />
                    <path
                      d="M48.0115 19.3597L52.699 28.7347C53.1716 29.6798 53.4375 30.7464 53.4375 31.875C53.4375 33.7236 52.7241 35.4057 51.5575 36.6608L33.4342 56.1593C32.5782 57.0802 31.3564 57.6562 30 57.6562C28.6436 57.6562 27.4218 57.0802 26.5658 56.1593L8.44254 36.6608C7.27594 35.4057 6.5625 33.7236 6.5625 31.875C6.5625 30.7464 6.8284 29.6798 7.30102 28.7347L11.9885 19.3597C13.142 17.0528 15.5266 15.4688 18.2812 15.4688H41.7188C44.4734 15.4688 46.858 17.0528 48.0115 19.3597Z"
                      stroke="#050B20" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round"
                      stroke-linejoin="round" />
                    <path d="M11.25 2.34375L15.9375 7.03125" stroke="#E1E1E1" stroke-width="3" stroke-miterlimit="10"
                      stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M17.3848 29.5312H42.615" stroke="#050B20" stroke-width="3" stroke-miterlimit="10"
                      stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M25.3125 24.8438L30 29.5312L34.6875 24.8438" stroke="#050B20" stroke-width="3"
                      stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M30 43.5936V29.7305" stroke="#050B20" stroke-width="3" stroke-miterlimit="10"
                      stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </div>
                <div class="content-box">
                  <h6 class="title"><?php echo t('home.maintenance_repairs'); ?></h6>
                  <div class="text"><?php echo t('home.maintenance_text'); ?></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End brand section -->

  <section class="blog-section-two pt-0">
    <div class="boxcar-container">
      <div class="row">
        <!-- blog-blockt-two -->
        <div class="blog-blockt-two col-lg-6 col-md-6 col-sm-12">
          <div class="inner-box wow fadeInUp">
            <h3 class="title"><?php echo t('home.looking_for_vehicle'); ?></h3>
            <div class="text"><?php echo t('home.discover_selection'); ?> <br><br></div>
            <a href="rendez-vous" class="read-more"><?php echo t('home.contact_us'); ?>
              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                <g clip-path="url(#clip0_601_692)">
                  <path
                    d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z"
                    fill="white" />
                </g>
                <defs>
                  <clipPath id="clip0_601_692">
                    <rect width="14" height="14" fill="white" />
                  </clipPath>
                </defs>
              </svg>
            </a>
            <div class="hover-img">
            <svg xmlns="http://www.w3.org/2000/svg" id="Calque_2" data-name="Calque 2" width="150" viewBox="0 0 609.63 400.3">
  <defs>
    <style>
      .cls-1 {
        fill: #232323;
      }

      .cls-2 {
        fill: #405ff1;
      }

      .cls-3 {
        fill: none;
        stroke: #405ff1;
        stroke-miterlimit: 10;
        stroke-width: 7px;
      }
    </style>
  </defs>
  <g id="Calque_1-2" data-name="Calque 1">
    <g>
      <g>
        <path class="cls-2" d="M526.65,304.41c-20.79-56.98-99.06-62.62-126.59-5.06-.78,1.64-3.67,10.37-4.27,10.62h-.03s-178.31.02-178.31.02l-.05-.04c-12.26-40.74-57.11-63.54-96.64-44.19-12.21,5.98-26.33,20.58-32.08,32.85-1.51,3.23-2.53,6.67-3.74,10.01v.02c-.21,3.9-.79,7.74-1.53,11.56h0c-.32,5.8-.42,11.6-.44,17.41h0c4.52,26.42,24.99,49.82,51.19,56.24,40.96,10.04,78.61-17.68,85.46-58.08l.05-.05h174.58s.03.04.05.06c2.8,11.1,5.92,20.93,12.42,30.47,35.56,52.24,114.52,30.66,123.7-29.67-2.22-10.55-2.7-21.44-3.78-32.17ZM191.74,338.12c-8.77,34.34-54.65,43.56-75.43,13.82-18.01-25.78-3.57-60.83,26.54-66.33,30.28-5.53,56.51,22.69,48.89,52.52ZM502.73,340.77c-11.26,34.25-58.32,39.51-76.59,8.29-15.67-26.76,1.24-60.97,31.96-63.99,30.5-3,54.26,26.41,44.63,55.7Z"/>
        <path class="cls-2" d="M608.8,192.22c-1.49-18.92-24.12-51.52-33.45-69.15-10.76-20.34-20.92-41.32-31.97-61.33C521.69,22.43,502,2.87,454.19.04h0s-368.96-.04-368.96-.04h0C37.75,3.34,4.8,33.06.12,80.92h0s-.11,209.49-.11,209.49h0c1.7,19.2,13.87,35.95,32.11,42.41,8.96,3.18,18.46,3.28,28.01,3.06,4.39-.1,7.9-3.63,8.07-8.02.12-3,.14-6.01.11-9.02-.04-4.76-3.97-8.63-8.73-8.6-16.4.08-31.81-2.58-33.76-22.77h0s0-200.03,0-200.03h0c1.93-33.99,21.86-57.36,56.44-60.14h0s375.65,0,375.65,0h0c51.12,3.14,62.96,47.99,83.26,86.1,11.6,21.78,25.25,44.49,36.26,66.66,2.4,4.84,4.85,9.73,5.43,15.23,3.09,29.6-2.06,64.15.01,94.27h0c-1.47,10.04-8.43,16.52-17.62,19.87h-.02s-15.06.18-15.06.18c-6.47.07-11.46,5.68-10.84,12.13.17,1.7.35,3.4.55,5.09.61,5.09,4.89,8.92,10.01,9,8.49.13,16.94.03,25.1-2.49,17.27-5.32,30.83-20.72,33.7-38.6h0c-1.83-33.27,2.7-69.62.1-102.52Z"/>
      </g>
      <g>
        <path class="cls-1" d="M460.83,142.44c20.19,2.39,32.13,26.26,18.1,42.45-21.91,20.56-42.29,42.93-64.2,63.45-2.77,2.59-11.78,11.42-14.57,11.99-11.63,2.4-19.66-8.98-13.8-18.96l73.38-73.46c.02-.73-3.22-1.1-4.03-1.15-19.19-1.26-39.55,2.03-58.36.81-22.02-1.43-36.37-20.54-23.59-40.64l62.76-61.95c10.1-8.45,25.44,2.68,20.16,14.99-2.36,5.51-18.12,18.36-23.15,23.34-12.86,12.74-25.23,25.97-39.1,37.65l.75,1.48h65.67Z"/>
        <g>
          <path class="cls-2" d="M332.36,170.79c-2.92,1.26-3.95,2.35-8.01,2.67-32.97,2.61-69.3-2.04-102.63.01-7.66-.94-13.7-7.47-14.38-15.13,1.97-29.58-2.53-62.35,0-91.55.62-7.11,4.52-12.11,11.07-14.75l121.43-.38c7.27.41,11.96,6.88,12.89,13.67-2.12,25.67,2.85,55.97-.08,81.09-1.48,12.66-9.45,19.67-20.29,24.37ZM326.91,77.51h-93.71v70.1h88.91c.83,0,4.8-2.65,4.8-3.32v-66.78Z"/>
          <path class="cls-2" d="M77.23,52.86c.17-.05.41-1.48,1.34-1.23,27.83,2.39,60.61-3.02,87.85.05,7.45.84,13.76,7.75,14.42,15.1,2.61,29.11-2.04,62.04,0,91.56-.89,8.53-7.48,14.4-15.87,15.12-30.16,2.59-63.96-2.02-94.51,0-7.33-.59-13.67-5.59-15.11-12.93,2.18-26.14-2.89-57,.1-82.58,1.5-12.86,9.95-21.55,21.78-25.1ZM154.98,77.51h-70.47c-.39,0-3.32,2.28-3.32,2.58v67.52h73.79v-70.1Z"/>
        </g>
      </g>
    </g>
  </g>
  <g id="Calque_2-2" data-name="Calque 2">
    <circle class="cls-3" cx="150.74" cy="327.36" r="69.44"/>
    <circle class="cls-3" cx="462.55" cy="327.36" r="69.44"/>
  </g>
</svg>
            </div>
          </div>
        </div>
        <!-- blog-blockt-two -->
        <div class="blog-blockt-two col-lg-6 col-md-6 col-sm-12">
          <div class="inner-box two wow fadeInUp" data-wow-delay="100ms">
            <h3 class="title"><?php echo t('home.need_maintenance_repair'); ?></h3>
            <div class="text"><?php echo t('home.make_appointment_text'); ?></div>
            <a href="rendez-vous" class="read-more"><?php echo t('home.make_appointment'); ?>
              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                <g clip-path="url(#clip0_601_692)">
                  <path
                    d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z"
                    fill="white" />
                </g>
                <defs>
                  <clipPath id="clip0_601_692">
                    <rect width="14" height="14" fill="white" />
                  </clipPath>
                </defs>
              </svg>
            </a>
            <div class="hover-img">
              <svg xmlns="http://www.w3.org/2000/svg" width="110" height="110" viewBox="0 0 110 110" fill="none">
                <path
                  d="M17.1875 84.2276V25.7724C17.1875 13.9118 26.779 4.29688 38.6109 4.29688H25.5664C13.7008 4.29688 4.08203 13.9156 4.08203 25.7812V84.2188C4.08203 96.0841 13.7008 105.703 25.5664 105.703H38.6109C26.779 105.703 17.1875 96.0882 17.1875 84.2276Z"
                  fill="#CEE1F2" />
                <path
                  d="M72.4023 104.506C70.1826 105.281 67.7967 105.703 65.3125 105.703H25.7812C13.9156 105.703 4.29688 96.0841 4.29688 84.2188V25.7812C4.29688 13.9156 13.9156 4.29688 25.7812 4.29688H65.3125C77.1779 4.29688 86.7969 13.9156 86.7969 25.7812V48.3398M54.7852 82.2852H71.1133M21.4844 82.0703L25.4341 86.1614C27.1343 87.8681 29.8912 87.8681 31.5915 86.1614L39.7461 77.7734"
                  stroke="#405FF2" stroke-width="5" stroke-miterlimit="10" stroke-linecap="round"
                  stroke-linejoin="round" />
                <path
                  d="M105.047 70.0629C100.32 68.2247 97.1951 67.9622 94.8535 67.9622C90.5029 67.9622 87.0117 71.489 87.0117 75.8398C87.0117 80.1906 90.9148 83.7175 96.6917 83.7175C101.681 83.7175 105.703 87.2444 105.703 91.5952C105.703 95.9458 101.961 99.4729 97.6106 99.4729C95.5763 99.4729 91.0458 98.8124 86.582 97.038M96.6797 67.9622V61.0156M96.6797 99.4727V105.703M57.793 57.793V59.5117M34.1602 57.793V59.5117"
                  stroke="#232323" stroke-width="5" stroke-miterlimit="10" stroke-linecap="round"
                  stroke-linejoin="round" />
                <path
                  d="M68.5352 36.7383H68.1835C68.1734 36.7146 68.1661 36.6902 68.1557 36.6667L64.3038 28.1203C64.3002 28.1123 64.2967 28.1046 64.2931 28.0966C62.5023 24.1867 58.9291 21.3217 54.734 20.4329C52.2427 19.9053 49.1996 19.5508 45.8829 19.5508C42.6308 19.5508 39.6816 19.8928 37.2649 20.402C33.0507 21.2902 29.4639 24.1577 27.6706 28.0728C27.6669 28.0807 27.6635 28.0887 27.6598 28.0966L23.7974 36.6665C23.7869 36.6899 23.7798 36.7144 23.7697 36.7381H23.418C21.0448 36.7381 19.1211 38.6618 19.1211 41.0349C19.1211 43.4081 21.0448 45.3318 23.418 45.3318V49.303C23.418 54.8137 27.8339 59.2969 33.2617 59.2969H58.6912C64.1193 59.2969 68.5352 54.8137 68.5352 49.3032V45.332C70.9083 45.332 72.832 43.4083 72.832 41.0352C72.832 38.662 70.9083 36.7383 68.5352 36.7383ZM35.4885 31.6415C36.1541 30.1969 37.4799 29.1393 39.0369 28.8112C40.6093 28.4799 42.9015 28.1445 45.8831 28.1445C48.9326 28.1445 51.3212 28.4945 52.953 28.8402C54.4951 29.167 55.811 30.2227 56.4755 31.6654L58.7617 36.7383H33.1914L35.4885 31.6415ZM35.0195 53.0664C32.1718 53.0664 29.8633 50.7579 29.8633 47.9102C29.8633 45.0624 32.1718 42.7539 35.0195 42.7539C37.8673 42.7539 40.1758 45.0624 40.1758 47.9102C40.1758 50.7579 37.8673 53.0664 35.0195 53.0664ZM56.9336 53.0664C54.0858 53.0664 51.7773 50.7579 51.7773 47.9102C51.7773 45.0624 54.0858 42.7539 56.9336 42.7539C59.7813 42.7539 62.0898 45.0624 62.0898 47.9102C62.0898 50.7579 59.7813 53.0664 56.9336 53.0664Z"
                  fill="#232323" />
              </svg>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
</div>
</div>
</section>

<!-- cars-section-two -->
<section class="cars-section-three">
  <div class="boxcar-container">
    <div class="boxcar-title text-start wow fadeInUp">
      <h2><?php echo t('home.discover_all_vehicles'); ?></h2>
      <a href="catalogue.html" class="btn-title"><?php echo t('home.view_all'); ?><svg
          xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
          <path
            d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z"
            fill="#050B20" />
        </svg>
      </a>
    </div>

    <nav class="wow fadeInUp" data-wow-delay="100ms">
      <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <button class="nav-link active" id="nav-MINIBUS-tab" data-bs-toggle="tab" data-bs-target="#nav-MINIBUS"
          type="button" role="tab" aria-controls="nav-MINIBUS" aria-selected="true">MINIBUS</button>
        <button class="nav-link" id="nav-FOURGON-tab" data-bs-toggle="tab" data-bs-target="#nav-FOURGON" type="button"
          role="tab" aria-controls="nav-FOURGON" aria-selected="false">BESTELWAGEN</button>
      </div>
    </nav>

    <div class="tab-content wow fadeInUp" data-wow-delay="200ms" id="nav-tabContent">
      <div class="tab-pane fade show active" id="nav-MINIBUS" role="tabpanel" aria-labelledby="nav-MINIBUS-tab">
        <div class="row car-slider-three" data-preview="4">

          <!-- car-block-three -->

          <?php foreach ($vehicles as $vehicule) : ?>
            <?php if ($vehicule['type'] == 'MINIBUS') : ?>
              <div class="car-block-three col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                  <div class="image-box">
                    <figure class="image"><a href="#"><img src="<?= $vehicule["image"][0] ?>" alt=""></a>
                    </figure>
                    <a href="car-detail?id=<?php echo $vehicule['id']; ?>" title="" class="icon-box">
                      <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                        <g clip-path="url(#clip0_601_1274)">
                          <path
                            d="M9.39062 12C9.15156 12 8.91671 11.9312 8.71128 11.8009L6.11794 10.1543C6.04701 10.1091 5.95296 10.1096 5.88256 10.1543L3.28869 11.8009C2.8048 12.1082 2.13755 12.0368 1.72722 11.6454C1.47556 11.4047 1.33685 11.079 1.33685 10.728V1.2704C1.33738 0.570053 1.90743 0 2.60778 0H9.39272C10.0931 0 10.6631 0.570053 10.6631 1.2704V10.728C10.6631 11.4294 10.0925 12 9.39062 12ZM6.00025 9.06935C6.24193 9.06935 6.47783 9.13765 6.68169 9.26743L9.27503 10.9135C9.31233 10.9371 9.35069 10.9487 9.39114 10.9487C9.48046 10.9487 9.61286 10.8788 9.61286 10.728V1.2704C9.61233 1.14956 9.51356 1.05079 9.39272 1.05079H2.60778C2.48642 1.05079 2.38817 1.14956 2.38817 1.2704V10.728C2.38817 10.7911 2.41023 10.8436 2.45384 10.8851C2.52582 10.9539 2.63563 10.9708 2.72599 10.9135L5.31934 9.2669C5.52267 9.13765 5.75857 9.06935 6.00025 9.06935Z"
                            fill="black" />
                        </g>
                        <defs>
                          <clipPath id="clip0_601_1274">
                            <rect width="12" height="12" fill="white" />
                          </clipPath>
                        </defs>
                      </svg>
                    </a>
                  </div>
                  <div class="content-box">
                    <h6 class="title"><a href="#"><?php echo $vehicule['marque']; ?> <?php echo $vehicule['modele']; ?></a>
                    </h6>
                    <div class="text"><?php echo $vehicule['details']; ?></div>
                    <ul>
                      <li><i class="flaticon-gasoline-pump"></i><?php echo $vehicule['kilometrage']; ?> km</li>
                      <li><i class="flaticon-speedometer"></i><?php echo $vehicule['carburant']; ?></li>
                      <li><i class="flaticon-gearbox"></i><?php echo $vehicule['transmission']; ?></li>
                    </ul>
                    <div class="btn-box">
                      <small><?php echo $vehicule['prix']; ?>€/<?php echo t('car.day'); ?></small>
                      <a href="car-detail?id=<?php echo $vehicule['id']; ?>"
                        class="details"><?php echo t('car.view_details'); ?>
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                          <g clip-path="url(#clip0_601_4346)">
                            <path
                              d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z"
                              fill="#405FF2" />
                          </g>
                          <defs>
                            <clipPath id="clip0_601_4346">
                              <rect width="14" height="14" fill="white" />
                            </clipPath>
                          </defs>
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            <?php endif; ?>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="tab-pane fade" id="nav-FOURGON" role="tabpanel" aria-labelledby="nav-FOURGON-tab">
        <div class="row car-slider-three" data-preview="4">

          <?php foreach ($vehicles as $vehicule) : ?>
            <?php if ($vehicule['type'] == 'FOURGON') : ?>
              <div class="car-block-three col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                  <div class="image-box">
                    <figure class="image"><a href="#"><img src="<?= $vehicule["image"][0] ?>" alt=""></a>
                    </figure>
                    <a href="car-detail?id=<?php echo $vehicule['id']; ?>" title="" class="icon-box">
                      <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                        <g clip-path="url(#clip0_601_1274)">
                          <path
                            d="M9.39062 12C9.15156 12 8.91671 11.9312 8.71128 11.8009L6.11794 10.1543C6.04701 10.1091 5.95296 10.1096 5.88256 10.1543L3.28869 11.8009C2.8048 12.1082 2.13755 12.0368 1.72722 11.6454C1.47556 11.4047 1.33685 11.079 1.33685 10.728V1.2704C1.33738 0.570053 1.90743 0 2.60778 0H9.39272C10.0931 0 10.6631 0.570053 10.6631 1.2704V10.728C10.6631 11.4294 10.0925 12 9.39062 12ZM6.00025 9.06935C6.24193 9.06935 6.47783 9.13765 6.68169 9.26743L9.27503 10.9135C9.31233 10.9371 9.35069 10.9487 9.39114 10.9487C9.48046 10.9487 9.61286 10.8788 9.61286 10.728V1.2704C9.61233 1.14956 9.51356 1.05079 9.39272 1.05079H2.60778C2.48642 1.05079 2.38817 1.14956 2.38817 1.2704V10.728C2.38817 10.7911 2.41023 10.8436 2.45384 10.8851C2.52582 10.9539 2.63563 10.9708 2.72599 10.9135L5.31934 9.2669C5.52267 9.13765 5.75857 9.06935 6.00025 9.06935Z"
                            fill="black" />
                        </g>
                        <defs>
                          <clipPath id="clip0_601_1274">
                            <rect width="12" height="12" fill="white" />
                          </clipPath>
                        </defs>
                      </svg>
                    </a>
                  </div>
                  <div class="content-box">
                    <h6 class="title"><a href="#"><?php echo $vehicule['marque']; ?> <?php echo $vehicule['modele']; ?></a>
                    </h6>
                    <div class="text"><?php echo $vehicule['details']; ?></div>
                    <ul>
                      <li><i class="flaticon-gasoline-pump"></i><?php echo $vehicule['kilometrage']; ?> km</li>
                      <li><i class="flaticon-speedometer"></i><?php echo $vehicule['carburant']; ?></li>
                      <li><i class="flaticon-gearbox"></i><?php echo $vehicule['transmission']; ?></li>
                    </ul>
                    <div class="btn-box">
                      <small><?php echo $vehicule['prix']; ?>€/<?php echo t('car.day'); ?></small>
                      <a href="car-detail?id=<?php echo $vehicule['id']; ?>"
                        class="details"><?php echo t('car.view_details'); ?>
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                          <g clip-path="url(#clip0_601_4346)">
                            <path
                              d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z"
                              fill="#405FF2" />
                          </g>
                          <defs>
                            <clipPath id="clip0_601_4346">
                              <rect width="14" height="14" fill="white" />
                            </clipPath>
                          </defs>
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            <?php endif; ?>
          <?php endforeach; ?>

        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
</section>

<section class="boxcar-testimonial-section-four v8 pt-0">
  <div class="large-container">
    <div class="right-box">
      <div class="boxcar-title light">
        <h2><?php echo t('testimonials.title'); ?></h2>
      </div>
      <div class="row stories-slider">


        <?php include 'includes/testimonials.php'; ?>
        <?php foreach ($testimonials as $testimonial): ?>
        <div class="testimonial-block-four col-lg-4 col-md-6 col-sm-12">
          <div class="inner-box">
            <div class="text">"<?php echo $testimonial['text']; ?>"</div>
            
            <div class="auther-info">
              <figure class="image"><a href="#"><img src="<?php echo $testimonial['image']; ?>" alt="" width="50px" height="50px"></a></figure>
              <h6 class="name"><?php echo $testimonial['author']; ?></h6>
              <span><div class="rating">
              <?php for ($i = 1; $i <= 5; $i++): ?>
                <i class="fa <?php echo $i <= $testimonial['rating'] ? 'fa-star' : 'fa-star-o'; ?>"></i>
              <?php endfor; ?>
            </div></span>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<!-- End boxcar-testimonial-section -->


<?php include 'includes/footer.php'; ?>



</div><!-- End Page Wrapper -->

<?php include 'includes/script.php'; ?>

<style>
  /* Styles pour le nouveau sélecteur de date et heure */
  .date-picker-container {
    width: 100%;
    height: 100%;
  }

  .date-time-selector {
    display: flex;
    border: 1px solid rgba(255, 255, 255, 0.2);
    border-radius: 0;
    overflow: hidden;
    cursor: pointer;
    transition: all 0.3s ease;
    height: 100%;
    min-height: 64px;
    background-color: transparent;
    color: #000;
  }

  .date-time-selector:hover {
    background-color: rgba(255, 255, 255, 0.1);
  }

  .date-part,
  .time-part {
    padding: 10px 15px;
    display: flex;
    align-items: center;
  }

  .date-part {
    flex-direction: column;
    align-items: flex-start;
    justify-content: center;
    flex-grow: 1;
    position: relative;
    padding-left: 45px;
  }

  .date-part i {
    position: absolute;
    left: 15px;
    font-size: 18px;
    color: #000;
  }

  .date-label {
    font-size: 13px;
    opacity: 0.7;
    display: block;
    margin-bottom: 4px;
  }

  .date-value,
  .time-value {
    font-weight: 600;
    font-size: 16px;
  }

  .time-part {
    background-color: rgba(255, 255, 255, 0.1);
    border-left: 1px solid rgba(255, 255, 255, 0.2);
    align-items: end;
    justify-content: center;
    padding: 0 20px;
    margin-bottom: 7px;
  }

  .date-picker-modal .modal-content {
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
  }

  .date-picker-modal .modal-header {
    background-color: #405FF2;
    color: white;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
  }

  .date-picker-modal .modal-title {
    font-weight: 600;
  }

  .date-picker-modal .btn-close {
    filter: brightness(0) invert(1);
  }

  .datepicker table tr td.active.active,
  .datepicker table tr td.active.highlighted.active,
  .datepicker table tr td.active.highlighted:active,
  .datepicker table tr td.active:active {
    background-color: #405FF2 !important;
    border-color: #405FF2 !important;
  }

  .datepicker table tr td.today {
    background-color: rgba(64, 95, 242, 0.2) !important;
  }

  .timepicker {
    display: flex;
    align-items: center;
    justify-content: center;
    margin-top: 20px;
    padding: 15px;
    background-color: #f9f9f9;
    border-radius: 8px;
  }

  .hour-select,
  .minute-select {
    width: auto;
    min-width: 80px;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-size: 16px;
    padding: 8px 12px;
  }

  .confirm-datetime {
    background-color: #405FF2;
    border-color: #405FF2;
    font-weight: 600;
    padding: 10px 25px;
    border-radius: 4px;
    margin-top: 15px;
  }

  .confirm-datetime:hover {
    background-color: #3249d3;
    border-color: #3249d3;
  }

  .mx-2 {
    font-weight: bold;
    font-size: 20px;
    color: #666;
  }

  .datepicker-container {
    background-color: #f5f7fa;
    border-radius: 8px;
    padding: 15px;
    margin-bottom: 20px;
  }

  .time-select-label {
    font-weight: 500;
    margin-bottom: 15px;
    color: #333;
    text-align: center;
  }

  .time-selectors {
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .form-select {
    background-color: #fff;
  }

  /* Ajustements pour mobile */
  @media (max-width: 576px) {
    .date-time-selector {
      flex-direction: column;
      min-height: auto;
    }

    .date-part {
      padding: 15px 15px 15px 45px;
    }

    .time-part {
      border-left: none;
      border-top: 1px solid rgba(255, 255, 255, 0.2);
      width: 100%;
      justify-content: flex-start;
      padding: 12px 15px;
    }
  }

  .custom-select-container {
    display: flex;
    border: 1px solid rgba(0, 0, 0, 0.1);
    border-radius: 0;
    overflow: hidden;
    cursor: pointer;
    transition: all 0.3s ease;
    height: 100%;
    min-height: 64px;
    background-color: transparent;
    color: #000;
  }

  .custom-select-container:hover {
    background-color: rgba(0, 0, 0, 0.03);
  }

  .select-part {
    flex-direction: column;
    align-items: flex-start;
    justify-content: center;
    flex-grow: 1;
    position: relative;
    padding: 10px 15px 10px 45px;
    display: flex;
  }

  .select-part i {
    position: absolute;
    left: 15px;
    font-size: 18px;
    color: #000;
  }

  .select-label {
    font-size: 13px;
    opacity: 0.7;
    display: block;
    margin-bottom: 4px;
  }

  .select-value {
    font-weight: 600;
    font-size: 16px;
  }

  .arrow-part {
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: rgba(0, 0, 0, 0.03);
    border-left: 1px solid rgba(0, 0, 0, 0.1);
    padding: 0 15px;
  }

  .custom-dropdown {
    position: absolute;
    z-index: 100;
    background-color: white;
    border: 1px solid rgba(0, 0, 0, 0.1);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-height: 250px;
    overflow-y: auto;
    border-radius: 0 0 8px 8px;
    margin-top: -1px;
    list-style: none;
    padding: 0;
  }

  .custom-dropdown li {
    padding: 12px 15px;
    cursor: pointer;
    transition: all 0.2s ease;
  }

  .custom-dropdown li:hover {
    background-color: rgba(64, 95, 242, 0.1);
  }

  /* Styles pour les étoiles de notation */
  .rating {
    margin: 10px 0;
    text-align: left;
  }
  
  .rating i {
    color: #FFD700;
    font-size: 18px;
    margin: 0 2px;
  }
  
  .rating i.fa-star-o {
    color: #ddd;
  }
</style>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    // Éléments du DOM
    const pickupDateSelect = document.getElementById('pickup-date-select');
    const returnDateSelect = document.getElementById('return-date-select');
    const pickupDateInput = document.querySelector('input[name="pickup_date"]');
    const returnDateInput = document.querySelector('input[name="return_date"]');
    const pickupTimeInput = document.querySelector('input[name="pickup_time"]');
    const returnTimeInput = document.querySelector('input[name="return_time"]');

    // Création des modals pour les calendriers
    const modalTemplate = `
    <div class="modal fade date-picker-modal" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title text-white"></h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="datepicker-container">
              <div class="datepicker"></div>
            </div>
            <div class="timepicker">
              <div class="time-select-label"><?php echo t('home.select_time'); ?></div>
              <div class="time-selectors">
                <select class="form-select hour-select">
                  <option value="00">00</option>
                  <option value="01">01</option>
                  <option value="02">02</option>
                  <option value="03">03</option>
                  <option value="04">04</option>
                  <option value="05">05</option>
                  <option value="06">06</option>
                  <option value="07">07</option>
                  <option value="08">08</option>
                  <option value="09">09</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                  <option value="13">13</option>
                  <option value="14">14</option>
                  <option value="15">15</option>
                  <option value="16">16</option>
                  <option value="17">17</option>
                  <option value="18">18</option>
                  <option value="19">19</option>
                  <option value="20">20</option>
                  <option value="21">21</option>
                  <option value="22">22</option>
                  <option value="23">23</option>
                </select>
                <span class="mx-2">:</span>
                <select class="form-select minute-select">
                  <option value="00">00</option>
                  <option value="15">15</option>
                  <option value="30">30</option>
                  <option value="45">45</option>
                </select>
              </div>
            </div>
            <div class="text-center">
              <button type="button" class="btn btn-primary confirm-datetime"><?php echo t('home.confirm'); ?></button>
            </div>
          </div>
        </div>
      </div>
    </div>
  `;

    // Ajouter les modals au DOM
    const pickupModalElement = document.createElement('div');
    pickupModalElement.innerHTML = modalTemplate;
    document.body.appendChild(pickupModalElement);

    const returnModalElement = document.createElement('div');
    returnModalElement.innerHTML = modalTemplate;
    document.body.appendChild(returnModalElement);

    // Récupérer les références des modals
    const pickupModal = pickupModalElement.querySelector('.date-picker-modal');
    const returnModal = returnModalElement.querySelector('.date-picker-modal');

    // Configurer les titres des modals
    pickupModal.querySelector('.modal-title').textContent = '<?php echo t('home.rental_pickup_date'); ?>';
    returnModal.querySelector('.modal-title').textContent = '<?php echo t('home.rental_return_date'); ?>';

    // Initialiser les instances Bootstrap Modal
    const pickupBsModal = new bootstrap.Modal(pickupModal);
    const returnBsModal = new bootstrap.Modal(returnModal);

    // Initialiser les datepickers
    const pickupDatepicker = $(pickupModal.querySelector('.datepicker')).datepicker({
      format: 'dd. M.',
      autoclose: true,
      startDate: 'today',
      language: '<?php echo $lang; ?>',
      todayHighlight: true,
      templates: {
        leftArrow: '<i class="fa fa-angle-left"></i>',
        rightArrow: '<i class="fa fa-angle-right"></i>'
      }
    });

    const returnDatepicker = $(returnModal.querySelector('.datepicker')).datepicker({
      format: 'dd. M.',
      autoclose: true,
      startDate: 'today',
      language: '<?php echo $lang; ?>',
      todayHighlight: true,
      templates: {
        leftArrow: '<i class="fa fa-angle-left"></i>',
        rightArrow: '<i class="fa fa-angle-right"></i>'
      }
    });

    // Événements pour ouvrir les modals
    pickupDateSelect.addEventListener('click', function() {
      // Récupérer les valeurs actuelles
      const currentTime = pickupTimeInput.value || "12:30";
      const [hours, minutes] = currentTime.split(':');

      // Mettre à jour les sélecteurs avec les valeurs actuelles
      pickupModal.querySelector('.hour-select').value = hours;
      pickupModal.querySelector('.minute-select').value = minutes;

      pickupBsModal.show();
    });

    returnDateSelect.addEventListener('click', function() {
      // Récupérer les valeurs actuelles
      const currentTime = returnTimeInput.value || "08:30";
      const [hours, minutes] = currentTime.split(':');

      // Mettre à jour les sélecteurs avec les valeurs actuelles
      returnModal.querySelector('.hour-select').value = hours;
      returnModal.querySelector('.minute-select').value = minutes;

      returnBsModal.show();
    });

    // Gérer la sélection de date et heure pour le pickup
    pickupModal.querySelector('.confirm-datetime').addEventListener('click', function() {
      const selectedDate = pickupDatepicker.datepicker('getDate');
      if (selectedDate) {
        const hourSelect = pickupModal.querySelector('.hour-select');
        const minuteSelect = pickupModal.querySelector('.minute-select');
        const hour = hourSelect.value;
        const minute = minuteSelect.value;

        // Format de la date: dd. mmm.
        const formattedDate = formatDate(selectedDate);
        const formattedTime = `${hour}:${minute}`;

        pickupDateSelect.querySelector('.date-value').textContent = formattedDate;
        pickupDateSelect.querySelector('.time-value').textContent = formattedTime;

        pickupDateInput.value = formattedDate;
        pickupTimeInput.value = formattedTime;

        pickupBsModal.hide();

        // Mettre à jour la date minimale pour le retour
        returnDatepicker.datepicker('setStartDate', selectedDate);

        // Si la date de retour est inférieure à la date de prise en charge, la mettre à jour
        const returnDate = returnDatepicker.datepicker('getDate');
        if (returnDate && returnDate < selectedDate) {
          returnDatepicker.datepicker('setDate', selectedDate);
          const returnFormattedDate = formatDate(selectedDate);
          returnDateSelect.querySelector('.date-value').textContent = returnFormattedDate;
          returnDateInput.value = returnFormattedDate;
        }
      }
    });

    // Gérer la sélection de date et heure pour le return
    returnModal.querySelector('.confirm-datetime').addEventListener('click', function() {
      const selectedDate = returnDatepicker.datepicker('getDate');
      if (selectedDate) {
        const hourSelect = returnModal.querySelector('.hour-select');
        const minuteSelect = returnModal.querySelector('.minute-select');
        const hour = hourSelect.value;
        const minute = minuteSelect.value;

        // Format de la date: dd. mmm.
        const formattedDate = formatDate(selectedDate);
        const formattedTime = `${hour}:${minute}`;

        returnDateSelect.querySelector('.date-value').textContent = formattedDate;
        returnDateSelect.querySelector('.time-value').textContent = formattedTime;

        returnDateInput.value = formattedDate;
        returnTimeInput.value = formattedTime;

        returnBsModal.hide();
      }
    });

    // Fonction pour formater la date comme "11. apr."
    function formatDate(date) {
      const day = date.getDate();

      // Tableau des abréviations des mois en français
      let monthAbbr = [
        'jan.', 'fév.', 'mar.', 'avr.', 'mai.', 'juin.',
        'juil.', 'août.', 'sep.', 'oct.', 'nov.', 'déc.'
      ];

      // Si langue anglaise, utiliser abréviations anglaises
      if ('<?php echo $lang; ?>' === 'en') {
        monthAbbr = [
          'Jan.', 'Feb.', 'Mar.', 'Apr.', 'May.', 'Jun.',
          'Jul.', 'Aug.', 'Sep.', 'Oct.', 'Nov.', 'Dec.'
        ];
      }
      if ('<?php echo $lang; ?>' === 'nl') {
        monthAbbr = [
          'Jan.', 'Feb.', 'Mar.', 'Apr.', 'Mei.', 'Jun.',
          'Jul.', 'Aug.', 'Sep.', 'Okt.', 'Nov.', 'Dec.'
        ];
      }

      const month = monthAbbr[date.getMonth()];

      return `${day}. ${month}`;
    }

    // Initialiser les valeurs par défaut
    // Date actuelle pour pickup
    const today = new Date();
    pickupDatepicker.datepicker('setDate', today);
    const hourNow = today.getHours();
    const minuteNow = today.getMinutes() < 30 ? '30' : '00';
    const hourNext = minuteNow === '00' ? (hourNow + 1) % 24 : hourNow;

    const initialPickupTime = `${hourNext.toString().padStart(2, '0')}:${minuteNow}`;
    pickupDateSelect.querySelector('.date-value').textContent = formatDate(today);
    pickupDateSelect.querySelector('.time-value').textContent = initialPickupTime;
    pickupDateInput.value = formatDate(today);
    pickupTimeInput.value = initialPickupTime;

    // Date pickup + 4 jours pour return
    const returnDefaultDate = new Date(today);
    returnDefaultDate.setDate(today.getDate() + 4);
    returnDatepicker.datepicker('setDate', returnDefaultDate);
    returnDateSelect.querySelector('.date-value').textContent = formatDate(returnDefaultDate);
    returnDateSelect.querySelector('.time-value').textContent = initialPickupTime;
    returnDateInput.value = formatDate(returnDefaultDate);
    returnTimeInput.value = initialPickupTime;

    // Initialisation des sélecteurs personnalisés
    initCustomSelect('location-select', 'location');
    initCustomSelect('vehicle-type-select', 'vehicle_type');

    // Fonction pour initialiser un sélecteur personnalisé
    function initCustomSelect(selectId, inputName) {
      const selectContainer = document.getElementById(selectId);
      const dropdown = selectContainer.nextElementSibling.nextElementSibling; // Accéder au dropdown
      const hiddenInput = document.querySelector(`input[name="${inputName}"]`);
      const selectValue = selectContainer.querySelector('.select-value');

      // Ouvrir/fermer le dropdown
      selectContainer.addEventListener('click', function(e) {
        e.stopPropagation();
        // Fermer tous les autres dropdowns
        document.querySelectorAll('.custom-dropdown').forEach(function(el) {
          if (el !== dropdown) {
            el.style.display = 'none';
          }
        });

        // Basculer l'affichage du dropdown actuel
        dropdown.style.display = dropdown.style.display === 'none' ? 'block' : 'none';
      });

      // Gérer la sélection d'un élément
      dropdown.querySelectorAll('li').forEach(function(item) {
        item.addEventListener('click', function(e) {
          e.stopPropagation();
          selectValue.textContent = this.textContent.trim();
          hiddenInput.value = this.getAttribute('data-value');
          dropdown.style.display = 'none';
        });
      });

      // Fermer le dropdown en cliquant ailleurs sur la page
      document.addEventListener('click', function() {
        dropdown.style.display = 'none';
      });
    }
  });
</script>