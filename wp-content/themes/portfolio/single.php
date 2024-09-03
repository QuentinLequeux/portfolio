<?= get_header(); ?>
    <main class="single_article">
        <section>
            <h2 aria-level="2" role="heading">
                <?= get_the_title(); ?>
            </h2>
            <p><?= get_the_date('j M Y'); ?></p>
            <img src="<?= get_field('img'); ?>" alt="image d'article" width="600"
                 height="350">
            <p>
                <?= get_the_content(); ?>
            </p>
        </section>
    </main>
<?= get_footer(); ?>