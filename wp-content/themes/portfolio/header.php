<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= dw_asset('css/style.css'); ?>">
    <title>Document</title>
</head>
<body itemscope="" itemtype="https://schema.org/Person">
<header class="header">
    <h1 aria-level="1" role="heading" class="sro">
        <?= get_bloginfo('name'); ?>
    </h1>
    <nav class="header__nav">
        <h2 aria-level="2" role="heading" class="sro">
            Navigation principale
        </h2>
        <ul>
            <li>
                <a href="http://localhost:8888/" title="Vers la page d'accueil">
                    Accueil
                </a>
            </li>
            <li>
                <a href="http://localhost:8888/projets/" title="Vers la page projets">
                    Projets
                </a>
            </li>
            <li>
                <a href="http://localhost:8888/a-propos/" title="Vers la page à propos">
                    A&nbsp;propos
                </a>
            </li>
            <li>
                <a href="http://localhost:8888/contact/" title="Vers la page contact">
                    Contact
                </a>
            </li>
        </ul>
    </nav>
</header>