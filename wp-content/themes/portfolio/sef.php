<?php
/*
Template Name: SEF
*/
?>
<?= get_header(); ?>
    <main class="single">
        <article>
            <?= get_the_content(false, null, 131); ?>
        </article>
        <div class="next">
            <a href="http://localhost:8888/design-dapplications-mobiles/" title="Vers le projet précédent">
                Projet pr&eacute;c&eacute;dent
            </a>
            <a href="http://localhost:8888/portfolio/" title="Vers le projet suivant">
                Projet suivant
            </a>
        </div>
    </main>
<?= get_footer(); ?>