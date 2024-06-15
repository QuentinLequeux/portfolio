<?php
/*
Template Name: Projets
*/
?>
<?= get_header(); ?>
    <main class="projects">
            <section>
                <h2 aria-level="2" role="heading">
                    Projets
                </h2>
                <?php
                $projects = new WP_Query([
                    'category_name' => 'Projets',
                    'posts_per_page' => 3,
                    'orderby' => 'order',
                ]);
                if ($projects->have_posts()): while ($projects->have_posts()): $projects->the_post(); ?>
                <article>
                    <div>
                        <h3>
                            <?= get_the_title(); ?>
                        </h3>
                        <p>
                            <?= get_the_content(); ?>
                        </p>
                        <a href="#">
                            D&eacute;couvrir
                        </a>
                    </div>
                    <img src="<?= get_field('img'); ?>" alt="" width="700" height="400">
                </article>
                <?php endwhile;
                else: echo '<p>Aucun projets disponible</p>';
                endif; ?>
            </section>
    </main>
<?= get_footer(); ?>