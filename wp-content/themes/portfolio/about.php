<?php
/*
Template Name: A propos
*/
?>
<?= get_header(); ?>
    <main class="about">
        <?= get_the_content(false, true, 24); ?>
    </main>
<?= get_footer(); ?>