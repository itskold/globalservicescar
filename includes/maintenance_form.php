<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupération des données du formulaire
    $nom = $_POST['nom'] ?? '';
    $telephone = $_POST['telephone'] ?? '';
    $date = $_POST['date'] ?? '';
    $type_vehicule = $_POST['type_vehicule'] ?? '';
    $message = $_POST['message'] ?? '';

    // Validation des données
    $errors = [];
    if (empty($nom)) $errors[] = "Le nom est requis";
    if (empty($telephone)) $errors[] = "Le téléphone est requis";
    if (empty($date)) $errors[] = "La date est requise";
    if (empty($type_vehicule)) $errors[] = "Le type de véhicule est requis";

    if (empty($errors)) {
        // Configuration de l'email
        $to = "votre@email.com"; // À remplacer par l'email de destination
        $subject = "Nouvelle demande de rendez-vous pour entretien";
        
        $email_content = "Nouvelle demande de rendez-vous pour entretien :\n\n";
        $email_content .= "Nom : " . $nom . "\n";
        $email_content .= "Téléphone : " . $telephone . "\n";
        $email_content .= "Date souhaitée : " . $date . "\n";
        $email_content .= "Type de véhicule : " . $type_vehicule . "\n";
        $email_content .= "Message : " . $message . "\n";

        $headers = "From: noreply@votresite.com\r\n";
        $headers .= "Reply-To: " . $nom . "\r\n";
        $headers .= "X-Mailer: PHP/" . phpversion();

        // Envoi de l'email
        if (mail($to, $subject, $email_content, $headers)) {
            $success_message = "Votre demande a été envoyée avec succès. Nous vous contacterons bientôt.";
        } else {
            $errors[] = "Une erreur est survenue lors de l'envoi de votre demande.";
        }
    }
}
?>

<!-- Section Prise de RDV -->
<section class="calculater-section mt-5">
    <div class="boxcar-container">
        <div class="right-box">
            <div class="row p-5">
                <div class="col-lg-6 content-column">
                    <div class="inner-column">
                        <div class="boxcar-title">
                            <h2><?php echo t('maintenance.title'); ?></h2>
                            <p><?php echo t('maintenance.appointment_description'); ?></p>
                        </div>

                        <?php if (!empty($errors)): ?>
                            <div class="alert alert-danger">
                                <ul>
                                    <?php foreach ($errors as $error): ?>
                                        <li><?php echo $error; ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        <?php endif; ?>

                        <?php if (isset($success_message)): ?>
                            <div class="alert alert-success">
                                <?php echo $success_message; ?>
                            </div>
                        <?php endif; ?>

                        <form method="POST" class="row">
                            <div class="col-lg-6">
                                <div class="form_boxes">
                                    <label><?php echo t('maintenance.your_name'); ?></label>
                                    <div class="drop-menu">
                                        <input type="text" name="nom" value="<?php echo htmlspecialchars($nom ?? ''); ?>" placeholder="<?php echo t('maintenance.enter_name'); ?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form_boxes">
                                    <label><?php echo t('maintenance.your_phone'); ?></label>
                                    <div class="drop-menu">
                                        <input type="tel" name="telephone" value="<?php echo htmlspecialchars($telephone ?? ''); ?>" placeholder="<?php echo t('maintenance.enter_phone'); ?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form_boxes">
                                    <label><?php echo t('maintenance.preferred_date'); ?></label>
                                    <div class="drop-menu">
                                        <input type="date" name="date" value="<?php echo htmlspecialchars($date ?? ''); ?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form_boxes">
                                    <label><?php echo t('maintenance.vehicle_type'); ?></label>
                                    <div class="drop-menu">
                                        <select name="type_vehicule" required>
                                            <option value=""><?php echo t('maintenance.select'); ?></option>
                                            <option value="citadine" <?php echo ($type_vehicule ?? '') === 'citadine' ? 'selected' : ''; ?>><?php echo t('maintenance.city_car'); ?></option>
                                            <option value="berline" <?php echo ($type_vehicule ?? '') === 'berline' ? 'selected' : ''; ?>><?php echo t('maintenance.sedan'); ?></option>
                                            <option value="suv" <?php echo ($type_vehicule ?? '') === 'suv' ? 'selected' : ''; ?>><?php echo t('maintenance.suv'); ?></option>
                                            <option value="break" <?php echo ($type_vehicule ?? '') === 'break' ? 'selected' : ''; ?>><?php echo t('maintenance.station_wagon'); ?></option>
                                            <option value="utilitaire" <?php echo ($type_vehicule ?? '') === 'utilitaire' ? 'selected' : ''; ?>><?php echo t('maintenance.utility'); ?></option>
                                            <option value="autre" <?php echo ($type_vehicule ?? '') === 'autre' ? 'selected' : ''; ?>><?php echo t('maintenance.other'); ?></option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form_boxes">
                                    <label><?php echo t('maintenance.message'); ?></label>
                                    <textarea name="message" placeholder="<?php echo t('maintenance.message_placeholder'); ?>"><?php echo htmlspecialchars($message ?? ''); ?></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-submit">
                                    <button type="submit" class="theme-btn"><?php echo t('maintenance.book_now'); ?> <img src="images/arrow.svg" alt=""></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 image-column">
                    <div class="image-box">
                        <img src="images/resource/loan-img.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> 