<?php
/*
Template Name: DAM
*/
?>
<?= get_header(); ?>
    <main class="single">
        <article>
            <?= get_the_content(false, null, 189); ?>
        </article>
        <div class="next">
            <a href="http://localhost:8888/cv/" title="Vers le projet précédent">
                Projet pr&eacute;c&eacute;dent
            </a>
            <a href="http://localhost:8888/service-dentraide-familiale/" title="Vers le projet suivant">
                Projet suivant
            </a>
        </div>
    </main>
<?= get_footer(); ?>