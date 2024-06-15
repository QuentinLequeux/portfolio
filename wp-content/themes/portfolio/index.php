<?php
/*
Template Name: Accueil
 */
?>
<?= get_header(); ?>
    <main class="cards">
        <section class="card logo">
            <h2 aria-level="2" role="heading" class="sro">
                Logo
            </h2>
            <img src="/wp-content/themes/portfolio/resources/img/logo2.svg" alt="" width="250" height="250">
        </section>
        <section class="card description">
            <div>
                <h2 aria-level="2" role="heading">
                    <?= get_the_title(29); ?>
                </h2>
                <p>
                    <?= get_the_content(null, false, 29); ?>
                </p>
            </div>
        </section>
        <section class="card socials">
            <h2 aria-level="2" role="heading" class="sro">
                R&eacute;seaux sociaux
            </h2>
            <div>
                <a class="social" href="#">
                    <img src="/wp-content/themes/portfolio/resources/img/facebook.svg" width="35" height="35" alt="">
                </a>
                <a href="#">
                    <img src="/wp-content/themes/portfolio/resources/img/linkedin.svg" width="35" height="35" alt="">
                </a>
                <a href="#">
                    <img src="/wp-content/themes/portfolio/resources/img/github.svg" width="35" height="35" alt="">
                </a>
                <a href="#">
                    <img src="/wp-content/themes/portfolio/resources/img/email.svg" width="35" height="35" alt="">
                </a>
            </div>
        </section>
        <section class="card project">
            <div>
                <?php
                $projects = new WP_Query([
                    'category_name' => 'Projets',
                    'posts_per_page' => 3,
                    'orderby' => 'date',
                    'order' => 'ASC'
                ]);
                if ($projects->have_posts()): while ($projects->have_posts()): $projects->the_post(); ?>
                    <div>
                        <h2>
                            <?= get_the_title(43); ?>
                        </h2>
                        <p>
                            <?= get_the_content(null, false, 43); ?>
                        </p>
                        <a href="#">
                            D&eacute;couvrir
                        </a>
                    </div>
                    <img src="<?= get_field('img', 43); ?>" width="700" height="400" alt="">
                <?php endwhile;
                else: echo '<p>Aucun projets disponible</p>';
                endif; ?>
            </div>
        </section>
        <section class="card article1">
            <h2 aria-level="2" role="heading">
                <?= get_the_title(37); ?>
            </h2>
            <a href="<?= get_field('href', 37); ?>" title="Vers">
                <img src="<?= get_field('img', 37); ?>" alt="" height="400" width="800">
            </a>
        </section>
        <section class="card article2">
            <h2 aria-level="2" role="heading">
                <?= get_the_title(40); ?>
            </h2>
            <a href="<?= get_field('href', 40); ?>" title="Vers">
                <img src="<?= get_field('img', 40); ?>" alt="" height="400" width="800">
            </a>
        </section>
        <section class="card hello">
            <div>
                <h2 aria-level="2" role="heading">
                    <?= get_the_title(31); ?>
                </h2>
                <a href="<?= get_field('href') ?>" title="Vers la page contact">
                    <?= get_the_content(null, false, 31); ?>
                </a>
            </div>
        </section>
    </main>
<?= get_footer(); ?>