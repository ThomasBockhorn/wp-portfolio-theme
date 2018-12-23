<?php

/*This function displays bootstrap*/
function bootstrap_files()
{
    wp_enqueue_style("bootstrap", "//stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css");
    wp_enqueue_script("bootstrapjs", "//stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js", array('jquery'));
}
add_action('wp_enqueue_scripts', 'bootstrap_files');

/*This function displays custom css and javascript*/
function custom_files()
{
    wp_enqueue_style("custom_css", get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', "custom_files");

/*This function displays google fonts */
function google_fonts()
{
    wp_enqueue_style("googlefonts", "//fonts.googleapis.com/css?family=Source+Sans+Pro");
}
add_action('wp_enqueue_scripts', "google_fonts");


/*This function deals with features after setup*/
function theme_features()
{
    register_nav_menu('headerMenuLocation', 'Header Menu Location');
    register_nav_menu('footerLocationOne', 'Footer Location One');
    register_nav_menu('footerLocationTwo', 'Footer Location Two');
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'theme_features');

?>


