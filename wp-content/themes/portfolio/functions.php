<?php

// Désactiver l'éditeur de texte Gutenberg de Wordpress :
add_filter('use_block_editor_for_post', '__return_false');

register_nav_menu('main', 'Navigation principale');
register_nav_menu('footer', 'Navigation de pied de page');

function dw_asset(string $file): string
{
    return get_template_directory_uri() . '/resources/' . $file;
}