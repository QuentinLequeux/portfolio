<?php
/*
Template Name: Mentions légales
*/
?>
<?= get_header(); ?>
    <main class="legal">
        <section>
            <?= get_the_content(false, null,69); ?>
            <p class="modified">
                Dernière modification le <?php the_modified_date(); ?>
            </p>
        </section>
    </main>
<?= get_footer(); ?>