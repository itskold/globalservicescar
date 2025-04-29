<?php
$titrePage = "Rendez-vous";
include 'includes/header.php'; ?>

<div class="boxcar-wrapper">

  <?php include 'includes/nav.php'; ?>

  <section class="tabs-section layout-radius">
    <div class="boxcar-container">
      <div class="boxcar-title-three">
        <ul class="breadcrumb">
          <li><a href="/"><?php echo t('nav.home'); ?></a></li>
          <li><span><?php echo t('nav.appointment'); ?></span></li>
        </ul>
        <h2><?php echo t('appointment.title'); ?></h2>
      </div>
      <div class="row">
        <div class="col-lg-12 col-md-12">

          <?php include 'includes/form-repair.php'; ?>

        </div>
      </div>
    </div>
  </section>

  <?php include 'includes/footer.php'; ?>

</div>

<script>
  document.getElementById('appointmentForm').addEventListener('submit', function(e) {
    e.preventDefault();

    const appointmentDetails = document.getElementById('appointmentDetails');
    const formData = new FormData(this);

    let html = `
    <p><strong><?php echo t('appointment.name'); ?>:</strong> ${formData.get('fullName')}</p>
    <p><strong><?php echo t('appointment.email'); ?>:</strong> ${formData.get('email')}</p>
    <p><strong><?php echo t('appointment.phone'); ?>:</strong> ${formData.get('phone')}</p>
    <p><strong><?php echo t('appointment.vehicle'); ?>:</strong> ${formData.get('vehicleModel')}</p>
    <p><strong><?php echo t('appointment.service_type'); ?>:</strong> ${formData.get('interventionType')}</p>
    <p><strong><?php echo t('appointment.date'); ?>:</strong> ${formData.get('appointmentDate')}</p>
    <p><strong><?php echo t('appointment.options'); ?>:</strong> 
      ${formData.get('vehiclePickup') ? '<?php echo t('appointment.pickup'); ?>, ' : ''}
      ${formData.get('loanCar') ? '<?php echo t('appointment.loan_car'); ?>' : ''}
    </p>
  `;

    appointmentDetails.innerHTML = html;
  });
</script>
<?php include 'includes/script.php'; ?>