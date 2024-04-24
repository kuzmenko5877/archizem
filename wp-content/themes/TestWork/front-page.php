<?php
get_header();

if ( ! class_exists( 'Timber' ) ) {
    die( 'Timber не установлен.' );
}

$context = Timber::get_context();
$context['post'] = Timber::get_post();

$global_settings = get_fields('option');

$context['global_settings'] = $global_settings;

Timber::render( 'front-page.twig', $context );

get_footer();

