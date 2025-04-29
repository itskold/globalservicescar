<?php require_once 'config.php'; ?>
<!-- Assurez-vous du bon chemin -->

<?php
// Fonction pour gérer les langues
function getTranslations($lang)
{
    $file = __DIR__ . '/../lang/' . $lang . '.json';
    if (file_exists($file)) {
        $content = file_get_contents($file);
        return json_decode($content, true);
    }
    return null;
}

// Définir la langue par défaut (néerlandais)
$default_lang = 'nl';

// Vérifier si une langue est définie dans l'URL
if (isset($_GET['lang']) && in_array($_GET['lang'], ['fr', 'nl'])) {
    $lang = $_GET['lang'];
    setcookie('site_lang', $lang, time() + (86400 * 30), "/"); // Cookie valide 30 jours
}
// Sinon, vérifier si un cookie de langue existe
elseif (isset($_COOKIE['site_lang']) && in_array($_COOKIE['site_lang'], ['fr', 'nl'])) {
    $lang = $_COOKIE['site_lang'];
}
// Sinon, utiliser la langue par défaut
else {
    $lang = $default_lang;
    setcookie('site_lang', $lang, time() + (86400 * 30), "/");
}

// Charger les traductions
$translations = getTranslations($lang);
if (!$translations) {
    $lang = $default_lang;
    $translations = getTranslations($lang);
}

// Fonction helper pour obtenir une traduction
function t($key, $default = '')
{
    global $translations;

    // Diviser la clé par des points (ex: "nav.home")
    $keys = explode('.', $key);

    // Parcourir le tableau de traductions
    $value = $translations;
    foreach ($keys as $k) {
        if (isset($value[$k])) {
            $value = $value[$k];
        } else {
            return $default ?: $key;
        }
    }

    return $value;
}

// Fonction pour changer la langue dans l'URL actuelle
function getLangUrl($newLang)
{
    $url = $_SERVER['REQUEST_URI'];

    // Supprimer le paramètre lang existant s'il y en a un
    $url = preg_replace('/(\?|&)lang=[^&]*/', '$1', $url);
    $url = rtrim($url, '?&');

    // Ajouter le nouveau paramètre lang
    $url .= (strpos($url, '?') === false) ? '?' : '&';
    $url .= 'lang=' . $newLang;

    return $url;
}
?>

<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">

<head>
    <!-- Métadonnées de base -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- SEO : Titre et Description dynamique -->
    <title><?php echo t('global.site_name'); ?> |
        <?php echo isset($title) ? $title : t('global.site_name'); ?></title>
    <meta name="description" content="<?php echo isset($description) ? $description : t('global.meta_description'); ?>">

    <!-- SEO : Mots-clés -->
    <meta name="keywords"
        content="garage automobile, réparation voiture, entretien auto, vente véhicules d'occasion, location minibus, location utilitaires, services automobiles, réparation moteur, service auto rapide, diagnostic voiture, fiabilité mécanique, dépannage auto, <?php echo isset($keywords) ? $keywords : 'auto réparation, entretien voiture, service véhicule, location fourgon'; ?>">

    <!-- SEO : Indexation et Suivi -->
    <meta name="robots" content="index, follow"> <!-- Autoriser l'indexation -->
    <meta name="googlebot" content="index, follow">

    <!-- Open Graph (SEO pour réseaux sociaux) -->
    <meta property="og:title"
        content="<?php echo t('global.site_name'); ?> | <?php echo isset($title) ? $title : t('global.site_name'); ?>">
    <meta property="og:description"
        content="<?php echo isset($description) ? $description : t('global.meta_description_alt'); ?>">
    <meta property="og:image" content="https://www.globarcarservice.com/images/og-image.jpg">
    <!-- Image à personnaliser -->
    <meta property="og:url" content="https://www.globarcarservice.com<?php echo $_SERVER['REQUEST_URI']; ?>">
    <meta property="og:type" content="website">

    <!-- Twitter Card (pour l'affichage sur Twitter) -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title"
        content="<?php echo t('global.site_name'); ?> | <?php echo isset($title) ? $title : t('global.site_name'); ?>">
    <meta name="twitter:description"
        content="<?php echo isset($description) ? $description : t('global.meta_description_alt'); ?>">
    <meta name="twitter:image" content="https://www.globarcarservice.com/images/og-image.jpg">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="images/favicon.png">

    <!-- Canonical URL (évite le duplicate content) -->
    <link rel="canonical" href="https://www.globarcarservice.com<?php echo $_SERVER['REQUEST_URI']; ?>">


    <!-- Améliorations de Performance (Préchargement) -->
    <link rel="preload" href="https://www.globarcarservice.com/images/banner.jpg" as="image">

    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="/css/slick.css">
    <link href="/css/mmenu.css" rel="stylesheet">
    <link href="/css/slick.css" rel="stylesheet">
    <link href="/css/slick-theme.css" rel="stylesheet">
    <link href="/css/animate.css" rel="stylesheet">
    <link href="/css/flaticon.css" rel="stylesheet">
    <link href="/css/font-awesome.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css"
        rel="stylesheet">
    <link href="/css/style.css?v=10" rel="stylesheet">
    <link href="/css/responsive.css" rel="stylesheet">

    <link rel="shortcut icon" href="/images/favicon.png" type="image/x-icon">
    <link rel="icon" href="/images/favicon.png" type="image/x-icon">

    <!-- Google Analytics (Remplacez "UA-XXXXX-Y" par votre ID Analytics) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $_ENV['GA_TRACKING_ID']; ?>"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', '<?php echo $_ENV['GA_TRACKING_ID']; ?>');
    </script>


    <?php
    $vehicles = [
        [
            'id' => 1,
            'image' => ['/images/Minibus/B29A9069-Verbeterd-NR.jpg'],
            'marque' => 'Peugeot',
            'modele' => 'Traveller',
            'details' => '2.0 CR TDi L3H2 Automatique',
            'kilometrage' => '72 925',
            'carburant' => 'Diesel',
            'transmission' => 'Automatique',
            'prix' => '150€',
            'type' => 'MINIBUS',
            'carrosserie' => 'SUV',
            'annee' => '2023',
            'etat' => 'Occasion',
            'type_de_traction' => 'Traction avant',
            'cylindres' => '6',
            'couleur' => 'Bleu',
            'vin' => 'ZN682AVA2P7429564',
            'portes' => '5',
            'cylindree' => '4.8L',
            'security' => ['Airbags', 'ABS', 'ESP'],
            'comfort' => ['Climatisation', 'GPS'],
            'interior' => ['Sièges cuir', 'Sièges chauffants'],
            'exterior' => ['Vitres électriques', 'Miroirs électriques'],
            'transmission' => 'Automatique',
            'traction' => 'Traction avant',
            'description' => 'Peugeot Traveller impeccablement entretenu, avec un moteur 2.0 CR TDi L3H2 Automatique, transmission automatique, traction avant, cylindrée 4.8L, 6 cylindres, couleur bleue, vin ZN682AVA2P7429564, portes 5, cylindres 6',

        ],
        [
            'id' => 2,
            'image' => ['/images/Minibus/B29A9084-Verbeterd-NR.jpg'],
            'marque' => 'Ford',
            'modele' => 'Transit',
            'details' => '2.0 CR TDi L3H2 Automatique',
            'kilometrage' => '72 925',
            'carburant' => 'Diesel',
            'transmission' => 'Automatique',
            'prix' => '150€',
            'type' => 'MINIBUS',
            'carrosserie' => 'SUV',
            'annee' => '2023',
            'etat' => 'Occasion',
            'type_de_traction' => 'Traction avant',
            'cylindres' => '6',
            'couleur' => 'Bleu',
            'vin' => 'ZN682AVA2P7429564',
            'portes' => '5',
            'cylindree' => '4.8L',
            'security' => ['Airbags', 'ABS', 'ESP'],
            'comfort' => ['Climatisation', 'GPS'],
            'interior' => ['Sièges cuir', 'Sièges chauffants'],
            'exterior' => ['Vitres électriques', 'Miroirs électriques'],
            'transmission' => 'Automatique',
            'traction' => 'Traction avant',
            'description' => 'Ford Transit impeccablement entretenu, avec un moteur 2.0 CR TDi L3H2 Automatique, transmission automatique, traction avant, cylindrée 4.8L, 6 cylindres, couleur bleue, vin ZN682AVA2P7429564, portes 5, cylindres 6',

        ],
        [
            'id' => 3,
            'image' => ['/images/Fourgon/Globalcar2024-43.jpg'],
            'marque' => 'Volkswagen',
            'modele' => 'Crafter',
            'details' => '2.0 CR TDi L3H2 Automatique',
            'kilometrage' => '72 925',
            'carburant' => 'Diesel',
            'transmission' => 'Automatique',
            'prix' => '150€',
            'type' => 'FOURGON',
            'carrosserie' => 'SUV',
            'annee' => '2023',
            'etat' => 'Occasion',
            'type_de_traction' => 'Traction avant',
            'cylindres' => '6',
            'couleur' => 'Bleu',
            'vin' => 'ZN682AVA2P7429564',
            'portes' => '5',
            'cylindree' => '4.8L',
            'security' => ['Airbags', 'ABS', 'ESP'],
            'comfort' => ['Climatisation', 'GPS'],
            'interior' => ['Sièges cuir', 'Sièges chauffants'],
            'exterior' => ['Vitres électriques', 'Miroirs électriques'],
            'transmission' => 'Automatique',
            'traction' => 'Traction avant',
            'description' => 'Volkswagen Crafter impeccablement entretenu, avec un moteur 2.0 CR TDi L3H2 Automatique, transmission automatique, traction avant, cylindrée 4.8L, 6 cylindres, couleur bleue, vin ZN682AVA2P7429564, portes 5, cylindres 6',

        ],
        [
            'id' => 4,
            'image' => ['/images/Fourgon/Globalcar2024-53.jpg'],
            'marque' => 'Peugeot',
            'modele' => 'Boxer',
            'details' => '335 L2H2 Automatique',
            'kilometrage' => '72 925',
            'carburant' => 'Diesel',
            'transmission' => 'Automatique',
            'prix' => '150€',
            'type' => 'FOURGON',
            'carrosserie' => 'SUV',
            'annee' => '2023',
            'etat' => 'Occasion',
            'type_de_traction' => 'Traction avant',
            'cylindres' => '6',
            'couleur' => 'Bleu',
            'vin' => 'ZN682AVA2P7429564',
            'portes' => '5',
            'cylindree' => '4.8L',
            'security' => ['Airbags', 'ABS', 'ESP'],
            'comfort' => ['Climatisation', 'GPS'],
            'interior' => ['Sièges cuir', 'Sièges chauffants'],
            'exterior' => ['Vitres électriques', 'Miroirs électriques'],
            'transmission' => 'Automatique',
            'traction' => 'Traction avant',
            'description' => 'Peugeot Boxer impeccablement entretenu, avec un moteur 335 L2H2 Automatique, transmission automatique, traction avant, cylindrée 4.8L, 6 cylindres, couleur bleue, vin ZN682AVA2P7429564, portes 5, cylindres 6',

        ],
        [
            'id' => 5,
            'image' => ['/images/Fourgon/Globalcar2024-53.jpg'],
            'marque' => 'Citroen',
            'modele' => 'Jumper',
            'details' => '2.0 BlueHDi L2H3 Automatique',
            'kilometrage' => '72 925',
            'carburant' => 'Diesel',
            'transmission' => 'Automatique',
            'prix' => '150€',
            'type' => 'FOURGON',
            'carrosserie' => 'SUV',
            'annee' => '2023',
            'etat' => 'Occasion',
            'type_de_traction' => 'Traction avant',
            'cylindres' => '6',
            'couleur' => 'Bleu',
            'vin' => 'ZN682AVA2P7429564',
            'portes' => '5',
            'cylindree' => '4.8L',
            'security' => ['Airbags', 'ABS', 'ESP'],
            'comfort' => ['Climatisation', 'GPS'],
            'interior' => ['Sièges cuir', 'Sièges chauffants'],
            'exterior' => ['Vitres électriques', 'Miroirs électriques'],
            'transmission' => 'Automatique',
            'traction' => 'Traction avant',
            'description' => 'Citroen Jumper impeccablement entretenu, avec un moteur 2.0 BlueHDi L2H3 Automatique, transmission automatique, traction avant, cylindrée 4.8L, 6 cylindres, couleur bleue, vin ZN682AVA2P7429564, portes 5, cylindres 6',

        ],
        [
            'id' => 6,
            'image' => ['/images/Fourgon/Globalcar2024-84.jpg'],
            'marque' => 'Peugeot',
            'modele' => 'Boxer',
            'details' => '2.0 BlueHDi L2H3 Automatique',
            'kilometrage' => '72 925',
            'carburant' => 'Diesel',
            'transmission' => 'Automatique',
            'prix' => '150€',
            'type' => 'FOURGON',
            'carrosserie' => 'SUV',
            'annee' => '2023',
            'etat' => 'Occasion',
            'type_de_traction' => 'Traction avant',
            'cylindres' => '6',
            'couleur' => 'Bleu',
            'vin' => 'ZN682AVA2P7429564',
            'portes' => '5',
            'cylindree' => '4.8L',
            'security' => ['Airbags', 'ABS', 'ESP'],
            'comfort' => ['Climatisation', 'GPS'],
            'interior' => ['Sièges cuir', 'Sièges chauffants'],
            'exterior' => ['Vitres électriques', 'Miroirs électriques'],
            'transmission' => 'Automatique',
            'traction' => 'Traction avant',
            'description' => 'Peugeot Boxer impeccablement entretenu, avec un moteur 2.0 BlueHDi L2H3 Automatique, transmission automatique, traction avant, cylindrée 4.8L, 6 cylindres, couleur bleue, vin ZN682AVA2P7429564, portes 5, cylindres 6',

        ],
        [
            'id' => 7,
            'image' => ['/images/Fourgon/Globalcar2024-91.jpg'],
            'marque' => 'Renault',
            'modele' => 'Trafic',
            'details' => '2.0 BlueHDi L2H3 Automatique',
            'kilometrage' => '72 925',
            'carburant' => 'Diesel',
            'transmission' => 'Automatique',
            'prix' => '150€',
            'type' => 'FOURGON',
            'carrosserie' => 'SUV',
            'annee' => '2023',
            'etat' => 'Occasion',
            'type_de_traction' => 'Traction avant',
            'cylindres' => '6',
            'couleur' => 'Bleu',
            'vin' => 'ZN682AVA2P7429564',
            'portes' => '5',
            'cylindree' => '4.8L',
            'security' => ['Airbags', 'ABS', 'ESP'],
            'comfort' => ['Climatisation', 'GPS'],
            'interior' => ['Sièges cuir', 'Sièges chauffants'],
            'exterior' => ['Vitres électriques', 'Miroirs électriques'],
            'transmission' => 'Automatique',
            'traction' => 'Traction avant',
            'description' => 'Renault Trafic impeccablement entretenu, avec un moteur 2.0 BlueHDi L2H3 Automatique, transmission automatique, traction avant, cylindrée 4.8L, 6 cylindres, couleur bleue, vin ZN682AVA2P7429564, portes 5, cylindres 6',

        ],
        [
            'id' => 8,
            'image' => ['/images/Fourgon/Globalcar2024-100.jpg'],
            'marque' => 'Citroen',
            'modele' => 'Jumpy',
            'details' => '2.0 BlueHDi L2H3 Automatique',
            'kilometrage' => '72 925',
            'carburant' => 'Diesel',
            'transmission' => 'Automatique',
            'prix' => '150€',
            'type' => 'FOURGON',
            'carrosserie' => 'SUV',
            'annee' => '2023',
            'etat' => 'Occasion',
            'type_de_traction' => 'Traction avant',
            'cylindres' => '6',
            'couleur' => 'Bleu',
            'vin' => 'ZN682AVA2P7429564',
            'portes' => '5',
            'cylindree' => '4.8L',
            'security' => ['Airbags', 'ABS', 'ESP'],
            'comfort' => ['Climatisation', 'GPS'],
            'interior' => ['Sièges cuir', 'Sièges chauffants'],
            'exterior' => ['Vitres électriques', 'Miroirs électriques'],
            'transmission' => 'Automatique',
            'traction' => 'Traction avant',
            'description' => 'Citroen Jumpy impeccablement entretenu, avec un moteur 2.0 BlueHDi L2H3 Automatique, transmission automatique, traction avant, cylindrée 4.8L, 6 cylindres, couleur bleue, vin ZN682AVA2P7429564, portes 5, cylindres 6',

        ]
    ];
    ?>


</head>

<body>