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
register_post_type(
    'benefit',
    array(
        'labels'      => array(
            'name'          => __('Benefits', 'skillbridge'),
            'singular_name' => __('Benefit', 'skillbridge'),

        ),

        'public'      => true,
        'has_archive' => true,
        'supports'     => array('title', 'editor', 'excerpt'),
    )
);

register_post_type(
    'course',
    array(
        'labels'      => array(
            'name'          => __('Courses', 'skillbridge'),
            'singular_name' => __('Course', 'skillbridge'),
        ),
        'public'      => true,
        'has_archive' => true,
        'supports'     => array('title', 'editor', 'thumbnail', 'excerpt'),
    )
);

add_theme_support('post-thumbnails');
register_post_type(
    'testimonial',
    array(
        'labels'      => array(
            'name'          => __('Testimonials', 'skillbridge'),
            'singular_name' => __('Testimonial', 'skillbridge'),
        ),
        'public'      => true,
        'has_archive' => true,
        'supports'     => array('title', 'editor', 'thumbnail', 'excerpt'),
    )
);
function create_course_taxonomy()
{
    $labels = array(
        'name'          => 'Courses',
        'singular_name' => 'Course',
        'menu_name'     => 'Course Category',
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'rewrite'           => array('slug' => 'course'),
    );

    register_taxonomy('course', array('course'), $args);
}

add_action('init', 'create_course_taxonomy');

function create_course_tags()
{
    $labels = array(
        'name'          => 'Course Tags',
        'singular_name' => 'Course Tag',
        'menu_name'     => 'Course Tags',
    );
    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'rewrite'           => array('slug' => 'course-tag'),
    );

    register_taxonomy('course_tag', array('course'), $args);
}

add_action('init', 'create_course_tags');
