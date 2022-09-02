<?php

/* [1] External Styles & Scripts */
function site_styles() {
    wp_enqueue_style('style', get_stylesheet_uri() );
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css');
    wp_enqueue_script('bootstrapJS','https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js', array( 'jquery' ),'',true );
}
add_action( 'wp_enqueue_scripts', 'site_styles' );

?>