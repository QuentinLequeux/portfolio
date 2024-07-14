<?= get_header(); ?>
    <main class="single">
        <section>
            <h2 aria-level="2" role="heading">
                <?= get_the_title(); ?>
            </h2>
            <a href="<?= get_field('href'); ?>" title="Vers le projet">
                Vers le projet
            </a>
        </section>
    </main>
<?= get_footer(); ?>