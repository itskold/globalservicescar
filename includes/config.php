<?php
require_once __DIR__ . '/../vendor/autoload.php'; // Charger Composer

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

// Maintenant, on peut utiliser les variables d'environnement
$googleAnalyticsID = $_ENV['GA_TRACKING_ID'] ?? 'UA-DEFAULT-000';

// Configuration SMTP
define('SMTP_HOST', $_ENV['SMTP_HOST'] ?? 'mail.moupress.be');
define('SMTP_PORT', $_ENV['SMTP_PORT'] ?? 587);
define('SMTP_USERNAME', $_ENV['SMTP_USERNAME'] ?? 'contact@moupress.be');
define('SMTP_PASSWORD', $_ENV['SMTP_PASSWORD'] ?? 'C13c180f4*');
define('CONTACT_EMAIL', $_ENV['CONTACT_EMAIL'] ?? 'contact@moupress.be');
