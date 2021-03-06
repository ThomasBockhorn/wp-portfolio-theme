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

//Gets font awesome icons
function font_awesome()
{
    wp_enqueue_style("font_awesome", "//use.fontawesome.com/releases/v5.6.3/css/all.css");
}
add_action('wp_enqueue_scripts', "font_awesome");


/*This function deals with features after setup*/
function theme_features()
{
    register_nav_menu('headerMenuLocation', 'Header Menu Location');
    register_nav_menu('footerLocationOne', 'Footer Location One');
    register_nav_menu('footerLocationTwo', 'Footer Location Two');
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'theme_features');

/*This function will add HTML5 features*/
add_theme_support('html5', array(
    'comment-list',
    'comment-form',
    'search-form'
));
?>


