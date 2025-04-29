<ul class="breadcrumb">
    <li><a href="/">Home</a></li>
    <?php
    $path = $_SERVER['REQUEST_URI']; // Récupère l'URL actuelle
    $pathParts = explode('/', trim($path, '/')); // Découpe l'URL en parties

    $fullPath = '';
    foreach ($pathParts as $index => $part) {
        $part = preg_replace('/\.php$/', '', $part);
        // Remettre les accents et espaces (si besoin)
        $partFormatted = ucwords(str_replace(['-', '_'], ' ', $part));

        // Construire l'URL relative
        $fullPath .= '/' . $part;
        $isLast = ($index === array_key_last($pathParts)); // Vérifie si c'est le dernier élément

        // Affichage du breadcrumb
        if (!$isLast) {
            echo '<li><a href="' . $fullPath . '">' . $partFormatted . '</a></li>';
        } else {
            echo '<li><span>' . $partFormatted . '</span></li>';
        }
    }
    ?>
</ul>
