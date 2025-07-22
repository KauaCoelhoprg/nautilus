<?php
function brand_persona_setup(): void
{
    add_theme_support(feature: 'title-tag');        // título dinâmico
    add_theme_support(feature: 'post-thumbnails');  // thumbnails em posts e páginas
    add_theme_support(feature: 'custom-logo');      // logo customizável
    add_theme_support(feature: 'html5', args: array('search-form', 'comment-form', 'gallery', 'caption'));

    // menus personalizados
    register_nav_menus(locations: array(
        'menu-principal' => 'Menu Principal',
        'menu-footer'    => 'Menu do Rodapé',
    ));
}

add_action(hook_name: 'after_setup_theme', callback: 'brand_persona_setup');

// Enfileirando styles
add_action('wp_enqueue_scripts', 'tema_enqueue_styles');
function tema_enqueue_styles() {
    // 1. Enfileira o style.css padrão do tema
    wp_enqueue_style(
        'tema-style',
        get_stylesheet_uri(),
        [],
        wp_get_theme()->get('Version'),
        'all'
    );

    // 2. Enfileira header.css na pasta assets/css
    wp_enqueue_style(
        'tema-header',
        get_theme_file_uri('assets/css/header.css'),
        ['tema-style'], // carrega após style.css
        filemtime(get_stylesheet_directory() . '/assets/css/header.css'),
        'all'
    );
     wp_enqueue_style(
        'tema-footer',
        get_theme_file_uri('assets/css/footer.css'),
        ['tema-style'], // carrega após style.css
        filemtime(get_stylesheet_directory() . '/assets/css/footer.css'),
        'all'
    );
    wp_enqueue_style(
        'tema-section2',
        get_theme_file_uri('assets/css/section2.css'),
        ['tema-style'], // carrega após style.css
        filemtime(get_stylesheet_directory() . '/assets/css/section2.css'),
        'all'
    );
     wp_enqueue_style(
        'tema-section3',
        get_theme_file_uri('assets/css/section3.css'),
        ['tema-style'], // carrega após style.css
        filemtime(get_stylesheet_directory() . '/assets/css/section3.css'),
        'all'
    );
    wp_enqueue_style(
        'tema-section4',
        get_theme_file_uri('assets/css/section4.css'),
        ['tema-style'], // carrega após style.css
        filemtime(get_stylesheet_directory() . '/assets/css/section4.css'),
        'all'
    );
     wp_enqueue_style(
        'tema-section5',
        get_theme_file_uri('assets/css/section5.css'),
        ['tema-style'], // carrega após style.css
        filemtime(get_stylesheet_directory() . '/assets/css/section5.css'),
        'all'
    );
     wp_enqueue_style(
        'tema-section6',
        get_theme_file_uri('assets/css/section6.css'),
        ['tema-style'], // carrega após style.css
        filemtime(get_stylesheet_directory() . '/assets/css/section6.css'),
        'all'
    );
    wp_enqueue_style(
        'tema-section7',
        get_theme_file_uri('assets/css/section7.css'),
        ['tema-style'], // carrega após style.css
        filemtime(get_stylesheet_directory() . '/assets/css/section7.css'),
        'all'
    );
    wp_enqueue_style(
        'tema-section8',
        get_theme_file_uri('assets/css/section8.css'),
        ['tema-style'], // carrega após style.css
        filemtime(get_stylesheet_directory() . '/assets/css/section8.css'),
        'all'
    );
     wp_enqueue_style(
        'tema-section9',
        get_theme_file_uri('assets/css/section9.css'),
        ['tema-style'], // carrega após style.css
        filemtime(get_stylesheet_directory() . '/assets/css/section9.css'),
        'all'
    );
}
