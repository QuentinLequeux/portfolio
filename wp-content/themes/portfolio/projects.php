<?php
/*
Template Name: Projets
*/
?>
<?= get_header(); ?>
    <main class="projects">
            <section>
                <h2 aria-level="2" role="heading">
                    <?= get_the_title(21); ?>
                </h2>
                <?php
                $projects = new WP_Query([
                    'category_name' => 'Projets',
                    'posts_per_page' => 4,
                    'orderby' => 'date',
                    'order' => 'ASC'
                ]);
                if ($projects->have_posts()): while ($projects->have_posts()): $projects->the_post(); ?>
                <article itemscope="" itemtype="https://schema.org/CreativeWork">
                    <time class="sro" datetime="<?= get_the_date('d-m-Y'); ?>" itemprop="datePublished"><?= get_the_date('d-m-Y'); ?></time>
                    <div>
                        <h3 aria-level="3" role="heading" itemprop="name">
                            <?= get_the_title(); ?>
                        </h3>
                        <span itemprop="genre">
                            <?= get_field('tag'); ?>
                        </span>
                        <p itemprop="description">
                            <?= get_the_content(); ?>
                        </p>
                        <a href="<?= get_permalink(); ?>" title="Vers le projet <?= get_the_title(); ?>" itemprop="url">
                            D&eacute;couvrir
                        </a>
                    </div>
                    <img src="<?= get_field('img'); ?>" alt="image <?= get_the_title(); ?>" width="700" height="400" itemprop="image">
                </article>
                <?php endwhile;
                else: echo '<p>Aucun projets disponible</p>';
                endif; ?>
            </section>
    </main>
<?= get_footer(); ?>