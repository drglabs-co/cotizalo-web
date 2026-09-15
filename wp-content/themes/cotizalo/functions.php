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
    // PANEL: Navegación
    // ---------------------------------------------
    $wp_customize->add_section('cotizalo_nav_section', array(
        'title' => __('Navegación (Botones Nav)', 'cotizalo'),
        'priority' => 29,
    ));

    $wp_customize->add_setting('nav_login_text', array('default' => 'Ingresar'));
    $wp_customize->add_control('nav_login_text', array(
        'label'   => __('Botón "Ingresar" — Texto', 'cotizalo'),
        'section' => 'cotizalo_nav_section',
        'type'    => 'text',
    ));
    $wp_customize->add_setting('nav_login_url', array('default' => 'https://app.cotizalo.net/login'));
    $wp_customize->add_control('nav_login_url', array(
        'label'   => __('Botón "Ingresar" — URL', 'cotizalo'),
        'section' => 'cotizalo_nav_section',
        'type'    => 'url',
    ));
    $wp_customize->add_setting('nav_signup_text', array('default' => 'Empezar Gratis'));
    $wp_customize->add_control('nav_signup_text', array(
        'label'   => __('Botón "Registro" — Texto', 'cotizalo'),
        'section' => 'cotizalo_nav_section',
        'type'    => 'text',
    ));
    $wp_customize->add_setting('nav_signup_url', array('default' => 'https://app.cotizalo.net/signup'));
    $wp_customize->add_control('nav_signup_url', array(
        'label'   => __('Botón "Registro" — URL', 'cotizalo'),
        'section' => 'cotizalo_nav_section',
        'type'    => 'url',
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
    $wp_customize->add_setting('feat_3_title', array('default' => 'Anticipos y firma digital'));
    $wp_customize->add_control('feat_3_title', array('label' => __('F3 Título', 'cotizalo'), 'section' => 'cotizalo_features_section', 'type' => 'text'));
    $wp_customize->add_setting('feat_3_desc', array('default' => 'Tus clientes pueden aceptar, firmar digitalmente y pagar su depósito desde su celular. La forma más rápida de asegurar tu venta y formalizar el trato.'));
    $wp_customize->add_control('feat_3_desc', array('label' => __('F3 Descripción', 'cotizalo'), 'section' => 'cotizalo_features_section', 'type' => 'textarea'));

    // Feature 4
    $wp_customize->add_setting('feat_4_title', array('default' => 'Todo en un solo lugar'));
    $wp_customize->add_control('feat_4_title', array('label' => __('F4 Título', 'cotizalo'), 'section' => 'cotizalo_features_section', 'type' => 'text'));
    $wp_customize->add_setting('feat_4_desc', array('default' => 'Consolida tus clientes, catálogo de precios, cotizaciones y recibos de anticipo en una interfaz limpia. Olvídate de usar cinco herramientas distintas para operar.'));
    $wp_customize->add_control('feat_4_desc', array('label' => __('F4 Descripción', 'cotizalo'), 'section' => 'cotizalo_features_section', 'type' => 'textarea'));

    // Feature 5
    $wp_customize->add_setting('feat_5_title', array('default' => 'Búsqueda y edición en segundos'));
    $wp_customize->add_control('feat_5_title', array('label' => __('F5 Título', 'cotizalo'), 'section' => 'cotizalo_features_section', 'type' => 'text'));
    $wp_customize->add_setting('feat_5_desc', array('default' => 'Localiza al instante cualquier cotización por cliente, folio o fecha. Modifica conceptos o precios con un clic sin tener que rehacer todo desde cero.'));
    $wp_customize->add_control('feat_5_desc', array('label' => __('F5 Descripción', 'cotizalo'), 'section' => 'cotizalo_features_section', 'type' => 'textarea'));

    // Feature 6
    $wp_customize->add_setting('feat_6_title', array('default' => 'Seguimiento sin límites de IA'));
    $wp_customize->add_control('feat_6_title', array('label' => __('F6 Título', 'cotizalo'), 'section' => 'cotizalo_features_section', 'type' => 'text'));
    $wp_customize->add_setting('feat_6_desc', array('default' => 'Olvídate de quedarte sin créditos en bots de IA o perder cotizaciones en capturas de pantalla. Monitorea el estatus de cada propuesta desde cualquier dispositivo.'));
    $wp_customize->add_control('feat_6_desc', array('label' => __('F6 Descripción', 'cotizalo'), 'section' => 'cotizalo_features_section', 'type' => 'textarea'));

    // ---------------------------------------------
    // PANEL: VS-AI Section (Valor Agregado)
    // ---------------------------------------------
    $wp_customize->add_section('cotizalo_vsai_section', array(
        'title'    => __('Sección "VS Imágenes / IA"', 'cotizalo'),
        'priority' => 32,
    ));

    $wp_customize->add_setting('vsai_badge_text', array('default' => 'Valor Agregado Cotízalo'));
    $wp_customize->add_control('vsai_badge_text', array('label' => __('Texto del Badge', 'cotizalo'), 'section' => 'cotizalo_vsai_section', 'type' => 'text'));

    $wp_customize->add_setting('vsai_title', array('default' => 'Dile adiós a las imágenes de cotizaciones y a quedarte sin créditos de IA'));
    $wp_customize->add_control('vsai_title', array('label' => __('Título H3', 'cotizalo'), 'section' => 'cotizalo_vsai_section', 'type' => 'textarea'));

    $wp_customize->add_setting('vsai_desc', array('default' => 'Mandar fotos de cotizaciones o depender de generadores de IA parece rápido, pero pronto se vuelve un dolor de cabeza: no puedes editarlas, se pierden en el chat, te quedas sin créditos a fin de mes y dar seguimiento es imposible. Cotízalo te da una interfaz gráfica dedicada para buscar, editar y dar seguimiento a cada cliente desde cualquier dispositivo.'));
    $wp_customize->add_control('vsai_desc', array('label' => __('Párrafo de descripción', 'cotizalo'), 'section' => 'cotizalo_vsai_section', 'type' => 'textarea'));

    $wp_customize->add_setting('vsai_cta_text', array('default' => 'Empieza a cotizar con interfaz gráfica'));
    $wp_customize->add_control('vsai_cta_text', array('label' => __('Texto del botón interno', 'cotizalo'), 'section' => 'cotizalo_vsai_section', 'type' => 'text'));

    // ---------------------------------------------
    // PANEL: Cloud/Mobile Section ("Siempre contigo")
    // ---------------------------------------------
    $wp_customize->add_section('cotizalo_cloud_section', array(
        'title'    => __('Sección "Siempre contigo" (Nube/Móvil)', 'cotizalo'),
        'priority' => 33,
    ));

    $wp_customize->add_setting('cloud_badge_text', array('default' => 'En la Nube · Siempre Disponible'));
    $wp_customize->add_control('cloud_badge_text', array('label' => __('Texto del Badge', 'cotizalo'), 'section' => 'cotizalo_cloud_section', 'type' => 'text'));

    $wp_customize->add_setting('cloud_title', array('default' => 'Siempre contigo, desde cualquier lugar.'));
    $wp_customize->add_control('cloud_title', array('label' => __('Título H2', 'cotizalo'), 'section' => 'cotizalo_cloud_section', 'type' => 'textarea'));

    $wp_customize->add_setting('cloud_desc', array('default' => 'Tus cotizaciones viven en la nube. Ajústalas en tiempo real y tu cliente las aprueba al instante — sin correos, sin esperas, sin complicaciones.'));
    $wp_customize->add_control('cloud_desc', array('label' => __('Párrafo', 'cotizalo'), 'section' => 'cotizalo_cloud_section', 'type' => 'textarea'));

    $wp_customize->add_setting('cloud_b1_title', array('default' => 'Cotizaciones en la nube'));
    $wp_customize->add_control('cloud_b1_title', array('label' => __('Beneficio 1 — Título', 'cotizalo'), 'section' => 'cotizalo_cloud_section', 'type' => 'text'));
    $wp_customize->add_setting('cloud_b1_desc', array('default' => 'Todas tus propuestas se guardan automáticamente. Sin archivos locales, sin riesgo de perder información. Disponibles 24/7 desde cualquier dispositivo.'));
    $wp_customize->add_control('cloud_b1_desc', array('label' => __('Beneficio 1 — Descripción', 'cotizalo'), 'section' => 'cotizalo_cloud_section', 'type' => 'textarea'));

    $wp_customize->add_setting('cloud_b2_title', array('default' => 'Acceso total desde el móvil'));
    $wp_customize->add_control('cloud_b2_title', array('label' => __('Beneficio 2 — Título', 'cotizalo'), 'section' => 'cotizalo_cloud_section', 'type' => 'text'));
    $wp_customize->add_setting('cloud_b2_desc', array('default' => 'Crea, revisa y envía cotizaciones desde tu celular en segundos. Tu negocio no se detiene aunque estés fuera de la oficina.'));
    $wp_customize->add_control('cloud_b2_desc', array('label' => __('Beneficio 2 — Descripción', 'cotizalo'), 'section' => 'cotizalo_cloud_section', 'type' => 'textarea'));

    $wp_customize->add_setting('cloud_b3_title', array('default' => 'Ajustes en tiempo real · Aprobación inmediata'));
    $wp_customize->add_control('cloud_b3_title', array('label' => __('Beneficio 3 — Título', 'cotizalo'), 'section' => 'cotizalo_cloud_section', 'type' => 'text'));
    $wp_customize->add_setting('cloud_b3_desc', array('default' => '¿El cliente pide un cambio? Actualiza la cotización al instante y él la ve reflejada de inmediato. Aprobación con un clic, sin correos de ida y vuelta.'));
    $wp_customize->add_control('cloud_b3_desc', array('label' => __('Beneficio 3 — Descripción', 'cotizalo'), 'section' => 'cotizalo_cloud_section', 'type' => 'textarea'));

    $wp_customize->add_setting('cloud_b4_title', array('default' => 'Búsqueda y seguimiento sin límites de IA'));
    $wp_customize->add_control('cloud_b4_title', array('label' => __('Beneficio 4 — Título', 'cotizalo'), 'section' => 'cotizalo_cloud_section', 'type' => 'text'));
    $wp_customize->add_setting('cloud_b4_desc', array('default' => 'Olvídate de buscar imágenes perdidas en WhatsApp o quedarte sin créditos en bots de IA. Accede a una interfaz gráfica para encontrar cualquier propuesta en un clic, editar cambios y dar seguimiento a cada cliente desde cualquier dispositivo.'));
    $wp_customize->add_control('cloud_b4_desc', array('label' => __('Beneficio 4 — Descripción', 'cotizalo'), 'section' => 'cotizalo_cloud_section', 'type' => 'textarea'));

    // ---------------------------------------------
    // PANEL: CTA Section
    // ---------------------------------------------
    $wp_customize->add_section('cotizalo_cta_section', array(
        'title' => __('Llamado a la Acción (CTA)', 'cotizalo'),
        'priority' => 34,
    ));

    $wp_customize->add_setting('cta_title', array('default' => '¿Listo para digitalizar tus ventas?'));
    $wp_customize->add_control('cta_title', array('label' => __('Título CTA', 'cotizalo'), 'section' => 'cotizalo_cta_section', 'type' => 'text'));

    $wp_customize->add_setting('cta_desc', array('default' => 'Únete a la revolución de las ventas digitales y asombra a tus clientes con propuestas modernas.'));
    $wp_customize->add_control('cta_desc', array('label' => __('Descripción CTA', 'cotizalo'), 'section' => 'cotizalo_cta_section', 'type' => 'textarea'));

    $wp_customize->add_setting('cta_btn_text', array('default' => 'Comienza tu Prueba Gratuita'));
    $wp_customize->add_control('cta_btn_text', array('label' => __('Texto del Botón', 'cotizalo'), 'section' => 'cotizalo_cta_section', 'type' => 'text'));

    $wp_customize->add_setting('cta_btn_url', array('default' => 'https://app.cotizalo.net/signup'));
    $wp_customize->add_control('cta_btn_url', array('label' => __('URL del Botón', 'cotizalo'), 'section' => 'cotizalo_cta_section', 'type' => 'url'));

    // ---------------------------------------------
    // PANEL: Footer
    // ---------------------------------------------
    $wp_customize->add_section('cotizalo_footer_section', array(
        'title'    => __('Footer', 'cotizalo'),
        'priority' => 35,
    ));

    $wp_customize->add_setting('footer_brand_text', array('default' => 'Transformando la forma en que los equipos de ventas crean, envían y cierran propuestas.'));
    $wp_customize->add_control('footer_brand_text', array('label' => __('Texto de marca (bajo logo)', 'cotizalo'), 'section' => 'cotizalo_footer_section', 'type' => 'textarea'));

    $wp_customize->add_setting('footer_copyright', array('default' => 'DrG Labs CO. Todos los derechos reservados.'));
    $wp_customize->add_control('footer_copyright', array('label' => __('Texto de copyright (sin el año)', 'cotizalo'), 'section' => 'cotizalo_footer_section', 'type' => 'text'));

    // ==============================================
    // PANEL: PÁGINA DE PRECIOS
    // ==============================================
    $wp_customize->add_panel('cotizalo_precios_panel', array(
        'title'    => __('Página de Precios', 'cotizalo'),
        'priority' => 40,
    ));

    // --- Hero de Precios ---
    $wp_customize->add_section('cotizalo_precios_hero', array(
        'title' => __('Hero de Precios', 'cotizalo'),
        'panel' => 'cotizalo_precios_panel',
    ));

    $wp_customize->add_setting('precios_hero_label', array('default' => 'Plan de Suscripción'));
    $wp_customize->add_control('precios_hero_label', array('label' => __('Etiqueta superior', 'cotizalo'), 'section' => 'cotizalo_precios_hero', 'type' => 'text'));

    $wp_customize->add_setting('precios_hero_title', array('default' => 'Precios simples y transparentes'));
    $wp_customize->add_control('precios_hero_title', array('label' => __('Título H1', 'cotizalo'), 'section' => 'cotizalo_precios_hero', 'type' => 'text'));

    $wp_customize->add_setting('precios_hero_desc', array('default' => 'Sin costos ocultos ni límites de créditos de IA. Interfaz gráfica completa para buscar, editar y dar seguimiento a tus clientes.'));
    $wp_customize->add_control('precios_hero_desc', array('label' => __('Descripción', 'cotizalo'), 'section' => 'cotizalo_precios_hero', 'type' => 'textarea'));

    $wp_customize->add_setting('precios_hero_badge', array('default' => '¡Incluye 14 días de prueba gratis!'));
    $wp_customize->add_control('precios_hero_badge', array('label' => __('Texto del badge', 'cotizalo'), 'section' => 'cotizalo_precios_hero', 'type' => 'text'));

    // --- Plan Inicial ---
    $wp_customize->add_section('cotizalo_plan_inicial', array(
        'title' => __('Plan: Inicial', 'cotizalo'),
        'panel' => 'cotizalo_precios_panel',
    ));

    $wp_customize->add_setting('plan_inicial_name',    array('default' => 'Inicial'));
    $wp_customize->add_control('plan_inicial_name',    array('label' => __('Nombre del Plan', 'cotizalo'), 'section' => 'cotizalo_plan_inicial', 'type' => 'text'));
    $wp_customize->add_setting('plan_inicial_price',   array('default' => '199'));
    $wp_customize->add_control('plan_inicial_price',   array('label' => __('Precio (solo número)', 'cotizalo'), 'section' => 'cotizalo_plan_inicial', 'type' => 'text'));
    $wp_customize->add_setting('plan_inicial_storage', array('default' => '3 GB de almacenamiento'));
    $wp_customize->add_control('plan_inicial_storage', array('label' => __('Almacenamiento', 'cotizalo'), 'section' => 'cotizalo_plan_inicial', 'type' => 'text'));
    $wp_customize->add_setting('plan_inicial_f1', array('default' => 'Cotizaciones ilimitadas'));
    $wp_customize->add_control('plan_inicial_f1', array('label' => __('Característica 1', 'cotizalo'), 'section' => 'cotizalo_plan_inicial', 'type' => 'text'));
    $wp_customize->add_setting('plan_inicial_f2', array('default' => 'Envío por WhatsApp y PDF'));
    $wp_customize->add_control('plan_inicial_f2', array('label' => __('Característica 2', 'cotizalo'), 'section' => 'cotizalo_plan_inicial', 'type' => 'text'));
    $wp_customize->add_setting('plan_inicial_f3', array('default' => 'Monitoreo de estado de cotizaciones'));
    $wp_customize->add_control('plan_inicial_f3', array('label' => __('Característica 3', 'cotizalo'), 'section' => 'cotizalo_plan_inicial', 'type' => 'text'));
    $wp_customize->add_setting('plan_inicial_f4', array('default' => 'Agenda de presupuestos autorizados (Google, Outlook y Apple Calendar)'));
    $wp_customize->add_control('plan_inicial_f4', array('label' => __('Característica 4', 'cotizalo'), 'section' => 'cotizalo_plan_inicial', 'type' => 'textarea'));
    $wp_customize->add_setting('plan_inicial_f5', array('default' => 'Soporte por email'));
    $wp_customize->add_control('plan_inicial_f5', array('label' => __('Característica 5', 'cotizalo'), 'section' => 'cotizalo_plan_inicial', 'type' => 'text'));
    $wp_customize->add_setting('plan_inicial_btn', array('default' => 'Comenzar Prueba Gratis'));
    $wp_customize->add_control('plan_inicial_btn', array('label' => __('Texto del Botón', 'cotizalo'), 'section' => 'cotizalo_plan_inicial', 'type' => 'text'));

    // --- Plan Básico ---
    $wp_customize->add_section('cotizalo_plan_basico', array(
        'title' => __('Plan: Básico', 'cotizalo'),
        'panel' => 'cotizalo_precios_panel',
    ));

    $wp_customize->add_setting('plan_basico_name',    array('default' => 'Básico'));
    $wp_customize->add_control('plan_basico_name',    array('label' => __('Nombre del Plan', 'cotizalo'), 'section' => 'cotizalo_plan_basico', 'type' => 'text'));
    $wp_customize->add_setting('plan_basico_price',   array('default' => '399'));
    $wp_customize->add_control('plan_basico_price',   array('label' => __('Precio (solo número)', 'cotizalo'), 'section' => 'cotizalo_plan_basico', 'type' => 'text'));
    $wp_customize->add_setting('plan_basico_storage', array('default' => '10 GB de almacenamiento'));
    $wp_customize->add_control('plan_basico_storage', array('label' => __('Almacenamiento', 'cotizalo'), 'section' => 'cotizalo_plan_basico', 'type' => 'text'));
    $wp_customize->add_setting('plan_basico_f1', array('default' => 'Cotizaciones ilimitadas'));
    $wp_customize->add_control('plan_basico_f1', array('label' => __('Característica 1', 'cotizalo'), 'section' => 'cotizalo_plan_basico', 'type' => 'text'));
    $wp_customize->add_setting('plan_basico_f2', array('default' => 'Envío por WhatsApp y PDF'));
    $wp_customize->add_control('plan_basico_f2', array('label' => __('Característica 2', 'cotizalo'), 'section' => 'cotizalo_plan_basico', 'type' => 'text'));
    $wp_customize->add_setting('plan_basico_f3', array('default' => 'Monitoreo de estado de cotizaciones'));
    $wp_customize->add_control('plan_basico_f3', array('label' => __('Característica 3', 'cotizalo'), 'section' => 'cotizalo_plan_basico', 'type' => 'text'));
    $wp_customize->add_setting('plan_basico_f4', array('default' => 'Agenda de presupuestos autorizados (Google, Outlook y Apple Calendar)'));
    $wp_customize->add_control('plan_basico_f4', array('label' => __('Característica 4', 'cotizalo'), 'section' => 'cotizalo_plan_basico', 'type' => 'textarea'));
    $wp_customize->add_setting('plan_basico_f5', array('default' => 'Catálogo de productos'));
    $wp_customize->add_control('plan_basico_f5', array('label' => __('Característica 5', 'cotizalo'), 'section' => 'cotizalo_plan_basico', 'type' => 'text'));
    $wp_customize->add_setting('plan_basico_f6', array('default' => 'Soporte por email'));
    $wp_customize->add_control('plan_basico_f6', array('label' => __('Característica 6', 'cotizalo'), 'section' => 'cotizalo_plan_basico', 'type' => 'text'));
    $wp_customize->add_setting('plan_basico_btn', array('default' => 'Comenzar Prueba Gratis'));
    $wp_customize->add_control('plan_basico_btn', array('label' => __('Texto del Botón', 'cotizalo'), 'section' => 'cotizalo_plan_basico', 'type' => 'text'));

    // --- Plan Profesional ---
    $wp_customize->add_section('cotizalo_plan_profesional', array(
        'title' => __('Plan: Profesional (Recomendado)', 'cotizalo'),
        'panel' => 'cotizalo_precios_panel',
    ));

    $wp_customize->add_setting('plan_pro_badge',   array('default' => 'Recomendado'));
    $wp_customize->add_control('plan_pro_badge',   array('label' => __('Texto del badge "Recomendado"', 'cotizalo'), 'section' => 'cotizalo_plan_profesional', 'type' => 'text'));
    $wp_customize->add_setting('plan_pro_name',    array('default' => 'Profesional'));
    $wp_customize->add_control('plan_pro_name',    array('label' => __('Nombre del Plan', 'cotizalo'), 'section' => 'cotizalo_plan_profesional', 'type' => 'text'));
    $wp_customize->add_setting('plan_pro_price',   array('default' => '599'));
    $wp_customize->add_control('plan_pro_price',   array('label' => __('Precio (solo número)', 'cotizalo'), 'section' => 'cotizalo_plan_profesional', 'type' => 'text'));
    $wp_customize->add_setting('plan_pro_storage', array('default' => '50 GB de almacenamiento'));
    $wp_customize->add_control('plan_pro_storage', array('label' => __('Almacenamiento', 'cotizalo'), 'section' => 'cotizalo_plan_profesional', 'type' => 'text'));
    $wp_customize->add_setting('plan_pro_f1', array('default' => 'Cotizaciones ilimitadas'));
    $wp_customize->add_control('plan_pro_f1', array('label' => __('Característica 1', 'cotizalo'), 'section' => 'cotizalo_plan_profesional', 'type' => 'text'));
    $wp_customize->add_setting('plan_pro_f2', array('default' => 'Envío por WhatsApp y PDF'));
    $wp_customize->add_control('plan_pro_f2', array('label' => __('Característica 2', 'cotizalo'), 'section' => 'cotizalo_plan_profesional', 'type' => 'text'));
    $wp_customize->add_setting('plan_pro_f3', array('default' => 'Monitoreo de estado de cotizaciones'));
    $wp_customize->add_control('plan_pro_f3', array('label' => __('Característica 3', 'cotizalo'), 'section' => 'cotizalo_plan_profesional', 'type' => 'text'));
    $wp_customize->add_setting('plan_pro_f4', array('default' => 'Agenda de presupuestos autorizados (Google, Outlook y Apple Calendar)'));
    $wp_customize->add_control('plan_pro_f4', array('label' => __('Característica 4', 'cotizalo'), 'section' => 'cotizalo_plan_profesional', 'type' => 'textarea'));
    $wp_customize->add_setting('plan_pro_f5', array('default' => 'Productos más vendidos o cotizados'));
    $wp_customize->add_control('plan_pro_f5', array('label' => __('Característica 5', 'cotizalo'), 'section' => 'cotizalo_plan_profesional', 'type' => 'text'));
    $wp_customize->add_setting('plan_pro_f6', array('default' => 'Multi-empresa y reportes avanzados'));
    $wp_customize->add_control('plan_pro_f6', array('label' => __('Característica 6', 'cotizalo'), 'section' => 'cotizalo_plan_profesional', 'type' => 'text'));
    $wp_customize->add_setting('plan_pro_f7', array('default' => 'Soporte por email'));
    $wp_customize->add_control('plan_pro_f7', array('label' => __('Característica 7', 'cotizalo'), 'section' => 'cotizalo_plan_profesional', 'type' => 'text'));
    $wp_customize->add_setting('plan_pro_btn', array('default' => 'Comenzar Prueba Gratis'));
    $wp_customize->add_control('plan_pro_btn', array('label' => __('Texto del Botón', 'cotizalo'), 'section' => 'cotizalo_plan_profesional', 'type' => 'text'));

    // --- Plan Empresarial ---
    $wp_customize->add_section('cotizalo_plan_empresarial', array(
        'title' => __('Plan: Empresarial', 'cotizalo'),
        'panel' => 'cotizalo_precios_panel',
    ));

    $wp_customize->add_setting('plan_emp_name',    array('default' => 'Empresarial'));
    $wp_customize->add_control('plan_emp_name',    array('label' => __('Nombre del Plan', 'cotizalo'), 'section' => 'cotizalo_plan_empresarial', 'type' => 'text'));
    $wp_customize->add_setting('plan_emp_price',   array('default' => '899'));
    $wp_customize->add_control('plan_emp_price',   array('label' => __('Precio (solo número)', 'cotizalo'), 'section' => 'cotizalo_plan_empresarial', 'type' => 'text'));
    $wp_customize->add_setting('plan_emp_storage', array('default' => '80 GB de almacenamiento'));
    $wp_customize->add_control('plan_emp_storage', array('label' => __('Almacenamiento', 'cotizalo'), 'section' => 'cotizalo_plan_empresarial', 'type' => 'text'));
    $wp_customize->add_setting('plan_emp_f1', array('default' => 'Cotizaciones ilimitadas'));
    $wp_customize->add_control('plan_emp_f1', array('label' => __('Característica 1', 'cotizalo'), 'section' => 'cotizalo_plan_empresarial', 'type' => 'text'));
    $wp_customize->add_setting('plan_emp_f2', array('default' => 'Envío por WhatsApp y PDF'));
    $wp_customize->add_control('plan_emp_f2', array('label' => __('Característica 2', 'cotizalo'), 'section' => 'cotizalo_plan_empresarial', 'type' => 'text'));
    $wp_customize->add_setting('plan_emp_f3', array('default' => 'Monitoreo de estado en tiempo real'));
    $wp_customize->add_control('plan_emp_f3', array('label' => __('Característica 3', 'cotizalo'), 'section' => 'cotizalo_plan_empresarial', 'type' => 'text'));
    $wp_customize->add_setting('plan_emp_f4', array('default' => 'Agenda de presupuestos autorizados (Google, Outlook y Apple Calendar)'));
    $wp_customize->add_control('plan_emp_f4', array('label' => __('Característica 4', 'cotizalo'), 'section' => 'cotizalo_plan_empresarial', 'type' => 'textarea'));
    $wp_customize->add_setting('plan_emp_f5', array('default' => 'Analíticas de productos más vendidos y cotizados'));
    $wp_customize->add_control('plan_emp_f5', array('label' => __('Característica 5', 'cotizalo'), 'section' => 'cotizalo_plan_empresarial', 'type' => 'text'));
    $wp_customize->add_setting('plan_emp_f6', array('default' => 'Multi-empresa y Cuenta Administrador'));
    $wp_customize->add_control('plan_emp_f6', array('label' => __('Característica 6', 'cotizalo'), 'section' => 'cotizalo_plan_empresarial', 'type' => 'text'));
    $wp_customize->add_setting('plan_emp_f7', array('default' => 'Soporte por email'));
    $wp_customize->add_control('plan_emp_f7', array('label' => __('Característica 7', 'cotizalo'), 'section' => 'cotizalo_plan_empresarial', 'type' => 'text'));
    $wp_customize->add_setting('plan_emp_btn', array('default' => 'Comenzar Prueba Gratis'));
    $wp_customize->add_control('plan_emp_btn', array('label' => __('Texto del Botón', 'cotizalo'), 'section' => 'cotizalo_plan_empresarial', 'type' => 'text'));

    // --- Garantías ---
    $wp_customize->add_section('cotizalo_garantias', array(
        'title' => __('Tira de Garantías (Precios)', 'cotizalo'),
        'panel' => 'cotizalo_precios_panel',
    ));

    $wp_customize->add_setting('garantia_1', array('default' => '14 días de prueba gratis'));
    $wp_customize->add_control('garantia_1', array('label' => __('Garantía 1', 'cotizalo'), 'section' => 'cotizalo_garantias', 'type' => 'text'));
    $wp_customize->add_setting('garantia_2', array('default' => 'Sin tarjeta de crédito requerida'));
    $wp_customize->add_control('garantia_2', array('label' => __('Garantía 2', 'cotizalo'), 'section' => 'cotizalo_garantias', 'type' => 'text'));
    $wp_customize->add_setting('garantia_3', array('default' => 'Sin límites de créditos de IA'));
    $wp_customize->add_control('garantia_3', array('label' => __('Garantía 3', 'cotizalo'), 'section' => 'cotizalo_garantias', 'type' => 'text'));
    $wp_customize->add_setting('garantia_4', array('default' => 'Cancela en cualquier momento'));
    $wp_customize->add_control('garantia_4', array('label' => __('Garantía 4', 'cotizalo'), 'section' => 'cotizalo_garantias', 'type' => 'text'));
    $wp_customize->add_setting('garantia_5', array('default' => 'Soporte en español'));
    $wp_customize->add_control('garantia_5', array('label' => __('Garantía 5', 'cotizalo'), 'section' => 'cotizalo_garantias', 'type' => 'text'));

    // ==============================================
    // PANEL: PÁGINA DE SOPORTE
    // ==============================================
    $wp_customize->add_section('cotizalo_soporte_section', array(
        'title'    => __('Página de Soporte', 'cotizalo'),
        'priority' => 41,
    ));

    $wp_customize->add_setting('soporte_title', array('default' => 'Soporte Técnico y Contacto'));
    $wp_customize->add_control('soporte_title', array('label' => __('Título H1', 'cotizalo'), 'section' => 'cotizalo_soporte_section', 'type' => 'text'));

    $wp_customize->add_setting('soporte_subtitle', array('default' => '¿Tienes dudas o necesitas ayuda con tu cuenta? Envíanos tus comentarios y nos pondremos en contacto contigo lo antes posible.'));
    $wp_customize->add_control('soporte_subtitle', array('label' => __('Subtítulo', 'cotizalo'), 'section' => 'cotizalo_soporte_section', 'type' => 'textarea'));

    $wp_customize->add_setting('soporte_email', array('default' => 'support@cotizalo.net'));
    $wp_customize->add_control('soporte_email', array('label' => __('Email de soporte (recibe los mensajes del formulario)', 'cotizalo'), 'section' => 'cotizalo_soporte_section', 'type' => 'text'));

    // ==============================================
    // PANEL: TÍTULOS DE PÁGINAS SECUNDARIAS
    // ==============================================
    $wp_customize->add_section('cotizalo_page_titles_section', array(
        'title'    => __('Títulos de Páginas Secundarias', 'cotizalo'),
        'priority' => 42,
    ));

    $wp_customize->add_setting('que_es_title', array('default' => '¿Qué es Cotízalo?'));
    $wp_customize->add_control('que_es_title', array('label' => __('¿Qué es Cotízalo? — Título H1', 'cotizalo'), 'section' => 'cotizalo_page_titles_section', 'type' => 'text'));
    $wp_customize->add_setting('que_es_subtitle', array('default' => 'La herramienta directa, simple y sin complicaciones para emprendedores que quieren dejar atrás el Excel y el papel.'));
    $wp_customize->add_control('que_es_subtitle', array('label' => __('¿Qué es Cotízalo? — Subtítulo', 'cotizalo'), 'section' => 'cotizalo_page_titles_section', 'type' => 'textarea'));

    $wp_customize->add_setting('aviso_title', array('default' => 'Aviso de Privacidad'));
    $wp_customize->add_control('aviso_title', array('label' => __('Aviso de Privacidad — Título H1', 'cotizalo'), 'section' => 'cotizalo_page_titles_section', 'type' => 'text'));
    $wp_customize->add_setting('aviso_subtitle', array('default' => 'En Cotízalo, tu privacidad y la seguridad de la información de tu negocio son nuestra máxima prioridad.'));
    $wp_customize->add_control('aviso_subtitle', array('label' => __('Aviso de Privacidad — Subtítulo', 'cotizalo'), 'section' => 'cotizalo_page_titles_section', 'type' => 'textarea'));

    $wp_customize->add_setting('terminos_title', array('default' => 'Términos y Condiciones'));
    $wp_customize->add_control('terminos_title', array('label' => __('Términos y Condiciones — Título H1', 'cotizalo'), 'section' => 'cotizalo_page_titles_section', 'type' => 'text'));
    $wp_customize->add_setting('terminos_subtitle', array('default' => 'Por favor, lee detalladamente los términos de servicio antes de utilizar nuestra herramienta.'));
    $wp_customize->add_control('terminos_subtitle', array('label' => __('Términos y Condiciones — Subtítulo', 'cotizalo'), 'section' => 'cotizalo_page_titles_section', 'type' => 'textarea'));
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
