<?php
$pageTitle = $pageTitle ?? 'ITBFlix';
$pageDescription = $pageDescription ?? 'Disfruta de películas y series exclusivas en ITBFlix. Streaming de alta calidad, sin anuncios y con la mejor selección de entretenimiento. ¡Únete hoy!';
$pageKeywords = $pageKeywords ?? 'ITBFlix, películas en línea, series en línea, streaming, entretenimiento, ver películas, ver series, películas en HD, suscripción de streaming';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Title -->
    <title><?php echo $pageTitle; ?></title>

    <!-- Meta description (for SEO and social networks) -->
    <meta name="description" content="<?php echo $pageDescription; ?>" />

    <!-- Keywords for SEO -->
    <meta name="keywords" content="<?php echo $pageKeywords; ?>" />

    <!-- Author -->
    <meta name="author" content="Equipo de ITBFlix" />

    <!-- Open Graph for social networks -->
    <meta property="og:title" content="<?php echo $pageTitle; ?>" />
    <meta property="og:description" content="<?php echo $pageDescription; ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="ITBFlix" />

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="<?php echo $pageTitle; ?>" />
    <meta name="twitter:description" content="<?php echo $pageDescription; ?>" />

    <!-- Favicon -->
    <link rel="icon" href="./src/images/ITBFlix-Logo.png" type="image/x-icon" />
    <link rel="apple-touch-icon" href="/images/apple-touch-icon.png" />

    <!-- Styles and fonts -->
    <link rel="stylesheet" href="./styles/styles.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
</head>
<body>

