<?php

function theme_enqueue_styles()
{
    wp_enqueue_style('tailwind-style', get_template_directory_uri() . '/tailwind_output.css', array(), '1.0');
}


add_action('wp_enqueue_scripts', 'theme_enqueue_styles');

register_nav_menus(
    array(
        'Primary-menu' => __('Header Menu'),
        'Side-menu' => __('Form-menu')
    ),
);

add_theme_support(
    'custom-logo',
    array(
        'height' => 54,
        'width'  => 54,
    )
);
