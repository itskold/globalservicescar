<!-- main footer -->
<footer class="boxcar-footer footer-style-one cus-st-1">
  <div class="footer-top">
    <div class="boxcar-container">
      <div class="right-box">
        <div class="top-left wow fadeInUp">
          <h6 class="title"><?php echo t('footer.join_us'); ?></h6>
          <div class="text"><?php echo t('footer.newsletter_text'); ?></div>

        </div>
        <div class="subscribe-form wow fadeInUp" data-wow-delay="100ms">
          <form method="post" action="#">
            <div class="form-group">
              <input type="email" name="email" class="email" value="" placeholder="<?php echo t('footer.email_placeholder'); ?>" required="">
              <button type="button" class="theme-btn btn-style-one hover-light"><span
                  class="btn-title"><?php echo t('footer.subscribe'); ?></span></button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="widgets-section">
    <div class="boxcar-container">
      <div class="row">
        <div class="footer-column-two col-lg-9 col-md-12 col-sm-12">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12">
              <div class="footer-widget links-widget wow fadeInUp">
                <h4 class="widget-title"><?php echo t('footer.our_company'); ?></h4>
                <div class="widget-content">
                  <ul class="user-links style-two">
                    <li><a href="a-propos"><?php echo t('footer.about_us'); ?></a></li>
                    <li><a href="nos-valeurs"><?php echo t('footer.our_values'); ?></a></li>
                    <li><a href="rendez-vous"><?php echo t('footer.make_appointment'); ?></a></li>
                    <li><a href="contact"><?php echo t('footer.contact_us'); ?></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
              <div class="footer-widget links-widget wow fadeInUp" data-wow-delay="100ms">
                <h4 class="widget-title"><?php echo t('footer.our_services'); ?></h4>
                <div class="widget-content">
                  <ul class="user-links style-two">
                    <li><a href="reparation"><?php echo t('footer.repairs'); ?></a></li>
                    <li><a href="entretien"><?php echo t('footer.maintenance'); ?></a></li>
                    <li><a href="voitures"><?php echo t('footer.vehicle_rental'); ?></a></li>
                    <li><a href="depannage"><?php echo t('footer.breakdown_service'); ?></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
              <div class="footer-widget links-widget wow fadeInUp" data-wow-delay="200ms">
                <h4 class="widget-title"><?php echo t('footer.brands_serviced'); ?></h4>
                <div class="widget-content">
                  <ul class="user-links style-two">
                    <li><a href="toutes-marques"><?php echo t('footer.all_brands'); ?></a></li>
                    <li><a href="véhicules-européens"><?php echo t('footer.european_vehicles'); ?></a></li>
                    <li><a href="véhicules-asiatiques"><?php echo t('footer.asian_vehicles'); ?></a></li>
                    <li><a href="véhicules-américains"><?php echo t('footer.american_vehicles'); ?></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
              <div class="footer-widget links-widget wow fadeInUp" data-wow-delay="300ms">
                <h4 class="widget-title"><?php echo t('footer.rental'); ?></h4>
                <div class="widget-content">
                  <ul class="user-links style-two">
                    <li><a href="minibus"><?php echo t('services.minibus_rental'); ?></a></li>
                    <li><a href="fourgon"><?php echo t('services.van_rental'); ?></a></li>
                    <li><a href="voitures"><?php echo t('footer.passenger_vehicles'); ?></a></li>
                    <li><a href="conditions"><?php echo t('services.rental_conditions'); ?></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="footer-column col-lg-3 col-md-12 col-sm-12">
          <div class="footer-widget social-widget wow fadeInUp" data-wow-delay="400ms">
            <h4 class="widget-title"><?php echo t('footer.mobile_app'); ?></h4>
            <div class="widget-content">
              <a href="#" class="store">
                <img src="images/resource/apple.png" alt="App Store">
                <span><?php echo t('footer.coming_soon'); ?></span>
                <h6 class="title">App Store</h6>
              </a>
              <a href="#" class="store two">
                <img src="images/resource/play-2.png" alt="Google Play">
                <span><?php echo t('footer.coming_soon'); ?></span>
                <h6 class="title">Google Play</h6>
              </a>
              <div class="social-icons">
                <h6 class="title"><?php echo t('footer.follow_us'); ?></h6>
                <ul>
                  <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                  <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--  Footer Bottom -->
  <div class="footer-bottom">
    <div class="boxcar-container">
      <div class="inner-container">
        <div class="copyright-text wow fadeInUp"><?php echo t('footer.copyright'); ?></div>

        <ul class="footer-nav wow fadeInUp" data-wow-delay="200ms">
          <li><a href="#"><?php echo t('footer.terms_conditions'); ?></a></li>
          <li><a href="#"><?php echo t('footer.privacy_policy'); ?></a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>
<!-- End boxcar-footer -->