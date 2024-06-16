<!doctype html>
<html lang="fr">
<head>
    <!--Métadonnées-->
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description"
          content="Portfolio de Quentin Lequeux, étudiant à la HEPL campus Seraing. Contactez moi pour plus d'informations">
    <meta name="author" content="Quentin Lequeux">
    <meta name="keywords"
          content="front-end, back-end, fullstack, design, web design, web, SEO, UX, UI, wordpress, étudiant, student, développeur,
          CSS, HTML, PHP, JS, TS, typescript, javascript, Portfolio, Quentin, Lequeux, Quentin Lequeux, HEPL, programmation, digital,
          infographie, Photoshop, Illustrator, Adobe, multimédia, mobile, responsive, designer, SQL">
    <!--Favicon-->
    <link rel="icon" type="image/svg" href="/wp-content/themes/portfolio/resources/img/favicon.svg">
    <link rel="apple-touch-icon" type="image/svg" href="/wp-content/themes/portfolio/resources/img/favicon.svg">
    <link rel="apple-touch-icon-precomposed" type="image/svg" href="/wp-content/themes/portfolio/resources/img/favicon.svg">
    <!--Police-->
    <!--CSS-->
    <link rel="stylesheet" href="<?= dw_asset('css/style.css'); ?>">
    <!--<link rel="stylesheet" href="https://use.typekit.net/uru3cvy.css">-->
    <!--Titre-->
    <title><?= wp_title(''); ?> - Portfolio Quentin Lequeux</title>
</head>
<body itemscope="" itemtype="https://schema.org/Person">
<header class="header">
    <h1 aria-level="1" role="heading" class="sro">
        <?= wp_title(''); ?>
    </h1>
    <nav class="header__nav">
        <h2 aria-level="2" role="heading" class="sro">
            Navigation principale
        </h2>
        <ul>
            <li>
                <a href="<?= get_permalink(6)?>" title="Vers la page <?= get_the_title(6); ?>">
                    <?= get_the_title(6); ?>
                </a>
            </li>
            <li>
                <a href="<?= get_permalink(21)?>" title="Vers la page <?= get_the_title(21); ?>">
                    <?= get_the_title(21); ?>
                </a>
            </li>
            <li>
                <a href="<?= get_permalink(24)?>" title="Vers la page <?= get_the_title(24); ?>">
                    <?= get_the_title(24); ?>
                </a>
            </li>
            <li>
                <a href="<?= get_permalink(8)?>" title="Vers la page <?= get_the_title(8); ?>">
                    <?= get_the_title(8); ?>
                </a>
            </li>
        </ul>
    </nav>
</header>