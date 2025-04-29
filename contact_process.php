<?php
// Inclure les fichiers nécessaires
include 'includes/config.php';
include 'includes/functions.php';
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Initialiser les variables
$errors = [];
$success = false;

// Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer et nettoyer les données du formulaire
    $first_name = clean_input($_POST['first_name'] ?? '');
    $last_name = clean_input($_POST['last_name'] ?? '');
    $email = clean_input($_POST['email'] ?? '');
    $phone = clean_input($_POST['phone'] ?? '');
    $message = clean_input($_POST['message'] ?? '');

    // Validation des données
    if (empty($first_name)) {
        $errors[] = t('contact.error_first_name');
    }
    if (empty($last_name)) {
        $errors[] = t('contact.error_last_name');
    }
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = t('contact.error_email');
    }
    if (empty($phone)) {
        $errors[] = t('contact.error_phone');
    }
    if (empty($message)) {
        $errors[] = t('contact.error_message');
    }

    // Si pas d'erreurs, procéder à l'envoi de l'email
    if (empty($errors)) {
        try {
            // Créer une nouvelle instance de PHPMailer
            $mail = new PHPMailer(true);
            
            // Configuration du serveur SMTP
            $mail->isSMTP();
            $mail->Host = SMTP_HOST; // À définir dans config.php
            $mail->SMTPAuth = true;
            $mail->Username = SMTP_USERNAME; // À définir dans config.php
            $mail->Password = SMTP_PASSWORD; // À définir dans config.php
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = SMTP_PORT; // À définir dans config.php
            $mail->CharSet = 'UTF-8';

            // Destinataires
            $mail->setFrom($email, $first_name . ' ' . $last_name);
            $mail->addAddress(CONTACT_EMAIL);
            $mail->addReplyTo($email, $first_name . ' ' . $last_name);

            // Contenu
            $mail->isHTML(true);
            $mail->Subject = t('contact.email_subject', ['company' => SITE_NAME]);
            
            $email_message = t('contact.email_body', [
                'first_name' => $first_name,
                'last_name' => $last_name,
                'email' => $email,
                'phone' => $phone,
                'message' => $message
            ]);
            
            $mail->Body = $email_message;

            // Envoyer l'email
            if ($mail->send()) {
                $success = true;
                
                // Optionnel : Enregistrer dans la base de données
                try {
                    $stmt = $pdo->prepare("INSERT INTO contact_messages (first_name, last_name, email, phone, message, created_at) VALUES (?, ?, ?, ?, ?, NOW())");
                    $stmt->execute([$first_name, $last_name, $email, $phone, $message]);
                } catch (PDOException $e) {
                    // Log l'erreur mais ne pas bloquer le processus
                    error_log("Erreur d'enregistrement du message: " . $e->getMessage());
                }
            }
        } catch (Exception $e) {
            $errors[] = t('contact.error_send') . ': ' . $mail->ErrorInfo;
        }
    }
}

// Rediriger vers la page de contact avec les messages appropriés
$_SESSION['contact_errors'] = $errors;
$_SESSION['contact_success'] = $success;
$_SESSION['contact_form_data'] = [
    'first_name' => $first_name ?? '',
    'last_name' => $last_name ?? '',
    'email' => $email ?? '',
    'phone' => $phone ?? '',
    'message' => $message ?? ''
];

header('Location: contact.php');
exit; 