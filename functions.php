<?php 

function wildwoodInformation() {
    wp_enqueue_script('main-js', get_theme_file_uri('/assets/js/script.js'), array('jquery'), '1.0', true);
    wp_enqueue_style('font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css');
    wp_enqueue_style('wildwood_styles', get_theme_file_uri('/assets/css/main.css'));
}

add_action('wp_enqueue_scripts', 'wildwoodInformation');

function wildwoodFeatures() {
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'wildwoodFeatures');

?>

