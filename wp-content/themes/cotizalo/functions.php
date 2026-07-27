<?php
/**
 * Cotizalo Theme Functions
 */

if ( ! function_exists( 'cotizalo_theme_setup' ) ) {
    function cotizalo_theme_setup() {
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'custom-logo' );
    }
}
add_action( 'after_setup_theme', 'cotizalo_theme_setup' );

/**
 * Enqueue scripts and styles.
 */
function cotizalo_scripts() {
    wp_enqueue_style( 'cotizalo-style', get_template_directory_uri() . '/assets/assets/css/styles.css', array(), '1.0.5' );
    wp_enqueue_style( 'google-fonts-montserrat', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap', array(), null );
}
add_action( 'wp_enqueue_scripts', 'cotizalo_scripts' );

/**
 * Load Google Fonts asynchronously to prevent render-blocking FCP delays.
 */
add_filter( 'style_loader_tag', function ( $html, $handle ) {
    if ( 'google-fonts-montserrat' === $handle ) {
        return str_replace( "rel='stylesheet'", "rel='stylesheet' media='print' onload=\"this.media='all'\"", $html );
    }
    return $html;
}, 10, 2 );

/**
 * Optimize asset loading: Dequeue unused block library styles, classic theme styles,
 * and plugin styles on the front-end to improve FCP and LCP.
 */
function cotizalo_dequeue_unused_assets() {
    if ( is_admin() ) {
        return;
    }
    
    // Dequeue Gutenberg Block Library styles
    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );
    wp_dequeue_style( 'wc-blocks-style' );
    
    // Dequeue default global styles and classic theme styles
    wp_dequeue_style( 'global-styles' );
    wp_dequeue_style( 'classic-theme-styles' );
    
    // Dequeue Hostinger Reach plugin styles (if active)
    wp_dequeue_style( 'hostinger-reach-blocks' );
    wp_dequeue_style( 'hostinger-reach-frontend' );
    wp_dequeue_style( 'hostinger-reach-style' );
    wp_dequeue_style( 'hostinger-reach' );
}
add_action( 'wp_enqueue_scripts', 'cotizalo_dequeue_unused_assets', 9999 );

/**
 * Fallback to strip any plugin-queued styles containing 'hostinger-reach' or 'block-library' from output
 */
function cotizalo_strip_plugin_styles() {
    if ( is_admin() ) {
        return;
    }
    global $wp_styles;
    if ( ! empty( $wp_styles->queue ) ) {
        foreach ( $wp_styles->queue as $handle ) {
            $style = $wp_styles->registered[$handle];
            if ( isset( $style->src ) && ( strpos( $style->src, 'plugins/hostinger-reach' ) !== false || strpos( $style->src, 'block-library' ) !== false ) ) {
                wp_dequeue_style( $handle );
            }
        }
    }
}
add_action( 'wp_print_styles', 'cotizalo_strip_plugin_styles', 9999 );

/**
 * Strip any plugin-queued scripts containing 'hostinger-reach' from front-end output
 */
function cotizalo_strip_plugin_scripts() {
    if ( is_admin() ) {
        return;
    }
    global $wp_scripts;
    if ( ! empty( $wp_scripts->queue ) ) {
        foreach ( $wp_scripts->queue as $handle ) {
            if ( isset( $wp_scripts->registered[$handle] ) ) {
                $script = $wp_scripts->registered[$handle];
                if ( isset( $script->src ) && strpos( $script->src, 'plugins/hostinger-reach' ) !== false ) {
                    wp_dequeue_script( $handle );
                    wp_deregister_script( $handle );
                }
            }
        }
    }
}
add_action( 'wp_print_scripts', 'cotizalo_strip_plugin_scripts', 9999 );

/**
 * Override WordPress favicon: remove wp_site_icon and inject our own.
 */
function cotizalo_remove_wp_favicon() {
    remove_action( 'wp_head', 'wp_site_icon', 99 );
}
add_action( 'init', 'cotizalo_remove_wp_favicon' );

function cotizalo_custom_favicon() {
    $uri = get_template_directory_uri();
    echo '<link rel="icon" type="image/png" href="' . esc_url( $uri ) . '/assets/assets/logos/ISOTIPO/Cotizalo-5.png?v=4">' . "\n";
    echo '<link rel="shortcut icon" href="' . esc_url( $uri ) . '/assets/assets/logos/ISOTIPO/Cotizalo-5.png?v=4">' . "\n";
    echo '<link rel="apple-touch-icon" href="' . esc_url( $uri ) . '/assets/assets/logos/ISOTIPO/Cotizalo-5.png?v=4">' . "\n";
}
add_action( 'wp_head', 'cotizalo_custom_favicon', 1 );

/**
 * Register Customizer Settings
 */
function cotizalo_customize_register( $wp_customize ) {
    // ---------------------------------------------
    // PANEL: Hero Section
    // ---------------------------------------------
    $wp_customize->add_section('cotizalo_hero_section', array(
        'title' => __('Hero Section', 'cotizalo'),
        'priority' => 30,
    ));

    // Hero Title
    $wp_customize->add_setting('hero_title', array('default' => 'Tu portal web para cotizaciones.'));
    $wp_customize->add_control('hero_title', array(
        'label' => __('Título Principal', 'cotizalo'),
        'section' => 'cotizalo_hero_section',
        'type' => 'textarea',
    ));
    // Hero Subtitle
    $wp_customize->add_setting('hero_subtitle', array('default' => 'Olvida el Excel. Una identidad técnica, segura y seria, ideal para microempresas.'));
    $wp_customize->add_control('hero_subtitle', array(
        'label' => __('Subtítulo', 'cotizalo'),
        'section' => 'cotizalo_hero_section',
        'type' => 'textarea',
    ));

    // Hero Button Text
    $wp_customize->add_setting('hero_btn_text', array('default' => 'Crear tu primera cotización'));
    $wp_customize->add_control('hero_btn_text', array(
        'label' => __('Texto del Botón', 'cotizalo'),
        'section' => 'cotizalo_hero_section',
        'type' => 'text',
    ));

    // Hero Button Link
    $wp_customize->add_setting('hero_btn_link', array('default' => '/signup'));
    $wp_customize->add_control('hero_btn_link', array(
        'label' => __('Enlace del Botón', 'cotizalo'),
        'section' => 'cotizalo_hero_section',
        'type' => 'url',
    ));

    // ---------------------------------------------
    // PANEL: Features Section
    // ---------------------------------------------
    $wp_customize->add_section('cotizalo_features_section', array(
        'title' => __('Sección de Características', 'cotizalo'),
        'priority' => 31,
    ));

    $wp_customize->add_setting('features_title', array('default' => 'Interfaz limpia, segura y profesional.'));
    $wp_customize->add_control('features_title', array(
        'label' => __('Título Principal', 'cotizalo'),
        'section' => 'cotizalo_features_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('features_subtitle', array('default' => 'Diseñado para equipos que requieren rapidez y precisión, eliminando la frialdad de Excel en cada presupuesto.'));
    $wp_customize->add_control('features_subtitle', array(
        'label' => __('Subtítulo Principal', 'cotizalo'),
        'section' => 'cotizalo_features_section',
        'type' => 'textarea',
    ));

    // Feature 1
    $wp_customize->add_setting('feat_1_title', array('default' => 'Cotizando hechos y retornos!'));
    $wp_customize->add_control('feat_1_title', array('label' => __('F1 Título', 'cotizalo'), 'section' => 'cotizalo_features_section', 'type' => 'text'));
    $wp_customize->add_setting('feat_1_desc', array('default' => 'Genera cotizaciones completas reutilizando plantillas dinámicas y tu catálogo de productos guardados.'));
    $wp_customize->add_control('feat_1_desc', array('label' => __('F1 Descripción', 'cotizalo'), 'section' => 'cotizalo_features_section', 'type' => 'textarea'));

    // Feature 2
    $wp_customize->add_setting('feat_2_title', array('default' => 'Seriedad Técnica'));
    $wp_customize->add_control('feat_2_title', array('label' => __('F2 Título', 'cotizalo'), 'section' => 'cotizalo_features_section', 'type' => 'text'));
    $wp_customize->add_setting('feat_2_desc', array('default' => 'Toda tu información de ventas viaja asegurada. Tus datos y los de tus clientes están a salvo en una plataforma estable.'));
    $wp_customize->add_control('feat_2_desc', array('label' => __('F2 Descripción', 'cotizalo'), 'section' => 'cotizalo_features_section', 'type' => 'textarea'));

    // Feature 3
    $wp_customize->add_setting('feat_3_title', array('default' => 'Presupuesto Organizado'));
    $wp_customize->add_control('feat_3_title', array('label' => __('F3 Título', 'cotizalo'), 'section' => 'cotizalo_features_section', 'type' => 'text'));
    $wp_customize->add_setting('feat_3_desc', array('default' => 'Diseño web y móvil integrado que permite llevar el control de todo tu negocio desde la palma de tu mano.'));
    $wp_customize->add_control('feat_3_desc', array('label' => __('F3 Descripción', 'cotizalo'), 'section' => 'cotizalo_features_section', 'type' => 'textarea'));

    // ---------------------------------------------
    // PANEL: CTA Section
    // ---------------------------------------------
    $wp_customize->add_section('cotizalo_cta_section', array(
        'title' => __('Llamado a la Acción (CTA)', 'cotizalo'),
        'priority' => 32,
    ));

    $wp_customize->add_setting('cta_title', array('default' => '¿Listo para digitalizar tus ventas?'));
    $wp_customize->add_control('cta_title', array('label' => __('Título CTA', 'cotizalo'), 'section' => 'cotizalo_cta_section', 'type' => 'text'));

    $wp_customize->add_setting('cta_desc', array('default' => 'Únete a la revolución de las ventas digitales y asombra a tus clientes con propuestas modernas.'));
    $wp_customize->add_control('cta_desc', array('label' => __('Descripción CTA', 'cotizalo'), 'section' => 'cotizalo_cta_section', 'type' => 'textarea'));
}
add_action('customize_register', 'cotizalo_customize_register');

/**
 * Serve /precios/ without needing a WordPress page in the database.
 * Intercepts the request at template_redirect and loads our custom template.
 */
add_action( 'template_redirect', function () {
    $uri = trim( parse_url( $_SERVER['REQUEST_URI'], PHP_URL_PATH ), '/' );

    if ( $uri === 'precios' ) {
        $template = get_template_directory() . '/page-precios.php';
        if ( file_exists( $template ) ) {
            include $template;
            exit;
        }
    }

    if ( $uri === 'soporte' ) {
        $template = get_template_directory() . '/page-soporte.php';
        if ( file_exists( $template ) ) {
            include $template;
            exit;
        }
    }

    if ( $uri === 'sitemap.rss' ) {
        $template = get_template_directory() . '/sitemap-rss.php';
        if ( file_exists( $template ) ) {
            include $template;
            exit;
        }
    }

    if ( $uri === 'sitemap.xml' ) {
        $template = get_template_directory() . '/sitemap-xml.php';
        if ( file_exists( $template ) ) {
            include $template;
            exit;
        }
    }
} );
