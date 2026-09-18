<?php
/**
 * Cotizalo Theme Functions
 */

if (!function_exists('cotizalo_theme_setup')) {
    function cotizalo_theme_setup()
    {
        add_theme_support('post-thumbnails');
        add_theme_support('custom-logo');
    }
}
add_action('after_setup_theme', 'cotizalo_theme_setup');

/**
 * Enqueue scripts and styles.
 */
function cotizalo_scripts()
{
    wp_enqueue_style('cotizalo-style', get_template_directory_uri() . '/assets/assets/css/styles.css', array(), '1.0.7');
    wp_enqueue_style('google-fonts-montserrat', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap', array(), null);

    // Dropdown "Recursos" & Sticky Nav styles — applied globally to all page templates
    $dropdown_css = '
        /* Sticky Header Background on Scroll */
        header.navbar.scrolled,
        header.scrolled {
            background: rgba(10, 14, 26, 0.96) !important;
            backdrop-filter: blur(12px) !important;
            -webkit-backdrop-filter: blur(12px) !important;
            border-bottom: 1px solid rgba(255, 255, 255, 0.12) !important;
            box-shadow: 0 4px 25px rgba(0, 0, 0, 0.45) !important;
        }

        /* Nav Recursos Dropdown */
        .nav-dropdown { position: relative; display: inline-flex; align-items: center; }
        .nav-dropdown-toggle {
            display: inline-flex; align-items: center; gap: 4px;
            background: none; border: none; cursor: pointer;
            font-family: var(--font-main, "Montserrat", system-ui, sans-serif) !important;
            font-size: 0.875rem !important;
            font-weight: 600 !important;
            color: var(--text-light, #ffffff) !important;
            opacity: 0.85;
            padding: 0;
            line-height: inherit;
            transition: opacity 0.2s ease, color 0.2s ease;
        }
        .nav-dropdown-toggle svg { transition: transform 0.2s; flex-shrink: 0; }
        .nav-dropdown:hover .nav-dropdown-toggle,
        .nav-dropdown.open .nav-dropdown-toggle {
            opacity: 1;
            color: #ffffff !important;
        }
        .nav-dropdown:hover .nav-dropdown-toggle svg,
        .nav-dropdown.open .nav-dropdown-toggle svg { transform: rotate(180deg); }
        .nav-dropdown-menu {
            display: none;
            position: absolute;
            top: calc(100% + 0.75rem);
            left: 50%;
            transform: translateX(-50%);
            background: #142e22;
            border: 1px solid rgba(255,255,255,0.12);
            border-radius: 12px;
            min-width: 230px;
            padding: 0.5rem 0;
            z-index: 9999;
            box-shadow: 0 20px 50px rgba(0,0,0,0.4);
            list-style: none;
        }
        /* Desktop: open on hover or when clicked open */
        @media (min-width: 901px) {
            .nav-dropdown:hover > .nav-dropdown-menu,
            .nav-dropdown.open > .nav-dropdown-menu {
                display: block;
            }
        }
        @media (max-width: 900px) {
            .nav-dropdown.open > .nav-dropdown-menu {
                display: block;
            }
        }
        /* Hover bridge so mouse move does not close dropdown */
        .nav-dropdown-menu::after {
            content: "";
            position: absolute;
            top: -15px; left: 0; right: 0; height: 15px;
        }
        .nav-dropdown-menu::before {
            content: "";
            position: absolute;
            top: -7px; left: 50%; transform: translateX(-50%);
            border-left: 7px solid transparent;
            border-right: 7px solid transparent;
            border-bottom: 7px solid rgba(255,255,255,0.12);
        }
        .nav-dropdown-menu li { margin: 0; }
        .nav-dropdown-menu a {
            display: block; padding: 0.55rem 1.25rem;
            color: rgba(255,255,255,0.78); font-size: 0.875rem;
            text-decoration: none; white-space: nowrap;
            transition: color 0.15s, background 0.15s;
        }
        .nav-dropdown-menu a:hover { color: #fff; background: rgba(255,255,255,0.06); }
        .nav-dropdown-menu li:first-child a { border-radius: 12px 12px 0 0; }
        .nav-dropdown-menu li:last-child  a { border-radius: 0 0 12px 12px; }

        /* Mobile: dropdown shows as stacked list inside open menu */
        @media (max-width: 900px) {
            .nav-dropdown-menu {
                position: static; transform: none;
                background: rgba(255,255,255,0.05);
                border: none; border-radius: 8px;
                box-shadow: none; margin: 0.25rem 0.5rem 0.25rem;
                padding: 0.25rem 0;
                min-width: unset; width: calc(100% - 1rem);
            }
            .nav-dropdown-menu::before { display: none; }
            .nav-dropdown-menu a { padding: 0.5rem 1rem; font-size: 0.9rem; }
        }

        /* ─── Button contrast fixes for dark-background sections ─── */
        /* Hero & CTA white button: enforce dark text over the white background */
        .lp-hero .btn-primary,
        .lp-cta  .btn-primary {
            color: #0f172a !important;
            background: #ffffff !important;
            border-color: #ffffff !important;
        }
        .lp-hero .btn-primary:hover,
        .lp-cta  .btn-primary:hover {
            background: #f0fdf4 !important;
            border-color: #f0fdf4 !important;
            color: #0f172a !important;
            box-shadow: 0 8px 24px rgba(0,0,0,0.25) !important;
        }
        /* WhatsApp-green override (cotizaciones-por-whatsapp page) */
        .lp-hero .btn-primary.btn-whatsapp,
        .lp-cta  .btn-primary.btn-whatsapp {
            background: #25D366 !important;
            border-color: #25D366 !important;
            color: #ffffff !important;
        }
        .lp-hero .btn-primary.btn-whatsapp:hover,
        .lp-cta  .btn-primary.btn-whatsapp:hover {
            background: #1ebe57 !important;
            border-color: #1ebe57 !important;
            color: #ffffff !important;
        }
        /* App mockup section */
        .lp-app-preview {
            background: #fff;
            padding: 5rem 0 4rem;
        }
        .lp-app-preview .app-frame-wrapper {
            max-width: 900px;
            margin: 0 auto;
            border-radius: 14px;
            overflow: hidden;
            box-shadow: 0 30px 80px rgba(0,0,0,0.15), 0 2px 8px rgba(0,0,0,0.06);
            border: 1px solid rgba(0,0,0,0.08);
        }
        .lp-app-preview .app-chrome-bar {
            background: #e8eaed;
            padding: 0.55rem 1rem;
            display: flex;
            align-items: center;
            gap: 0.75rem;
            border-bottom: 1px solid rgba(0,0,0,0.08);
        }
        .lp-app-preview .chrome-dots { display: flex; gap: 6px; }
        .lp-app-preview .chrome-dot {
            width: 12px; height: 12px; border-radius: 50%;
        }
        .lp-app-preview .chrome-dot.r { background: #ef4444; }
        .lp-app-preview .chrome-dot.y { background: #f59e0b; }
        .lp-app-preview .chrome-dot.g { background: #10b981; }
        .lp-app-preview .chrome-url {
            flex: 1; background: #fff; border-radius: 20px;
            padding: 0.3rem 0.9rem; font-size: 0.8rem;
            color: #64748b; display: flex; align-items: center; gap: 6px;
            border: 1px solid #cbd5e1; max-width: 340px; margin: 0 auto;
        }
        .lp-app-preview svg.app-svg { display: block; width: 100%; height: auto; }
    ';
    wp_add_inline_style('cotizalo-style', $dropdown_css);

}
add_action('wp_enqueue_scripts', 'cotizalo_scripts');

/**
 * Output dropdown JS in wp_footer so it runs on every page template
 * regardless of whether jQuery is enqueued.
 */
function cotizalo_dropdown_js()
{
    ?>
    <script>
        (function () {
            function initDropdowns() {
                document.querySelectorAll('.nav-dropdown-toggle').forEach(function (btn) {
                    // Avoid double-binding
                    if (btn.dataset.ddInit) return;
                    btn.dataset.ddInit = '1';
                    btn.addEventListener('click', function (e) {
                        e.preventDefault();
                        e.stopPropagation();
                        var dropdown = btn.closest('.nav-dropdown');
                        var isOpen = dropdown.classList.contains('open');
                        document.querySelectorAll('.nav-dropdown').forEach(function (d) {
                            d.classList.remove('open');
                            var t = d.querySelector('.nav-dropdown-toggle');
                            if (t) t.setAttribute('aria-expanded', 'false');
                        });
                        if (!isOpen) {
                            dropdown.classList.add('open');
                            btn.setAttribute('aria-expanded', 'true');
                        }
                    });
                });
                document.addEventListener('click', function (e) {
                    if (!e.target.closest('.nav-dropdown')) {
                        document.querySelectorAll('.nav-dropdown').forEach(function (d) {
                            d.classList.remove('open');
                            var t = d.querySelector('.nav-dropdown-toggle');
                            if (t) t.setAttribute('aria-expanded', 'false');
                        });
                    }
                }, { capture: false });
            }
            function initHeaderScroll() {
                var header = document.getElementById('navbar') || document.querySelector('header');
                if (!header || header.dataset.scrollInit) return;
                header.dataset.scrollInit = '1';
                var ticking = false;
                function updateHeader() {
                    if (window.scrollY > 20) {
                        header.classList.add('scrolled');
                    } else {
                        header.classList.remove('scrolled');
                    }
                }
                window.addEventListener('scroll', function () {
                    if (!ticking) {
                        window.requestAnimationFrame(function () {
                            updateHeader();
                            ticking = false;
                        });
                        ticking = true;
                    }
                }, { passive: true });
                updateHeader();
            }

            function initMobileMenu() {
                var mobileBtn = document.querySelector('.mobile-menu-btn');
                var navContainer = document.querySelector('.nav-container');
                var header = document.getElementById('navbar') || document.querySelector('header');
                var navLinks = document.querySelector('.nav-links');
                if (!mobileBtn || !navContainer || !header || mobileBtn.dataset.menuInit) return;
                mobileBtn.dataset.menuInit = '1';

                mobileBtn.addEventListener('click', function (e) {
                    e.preventDefault();
                    e.stopPropagation();
                    var isOpen = navContainer.classList.contains('menu-open') || (navLinks && navLinks.classList.contains('active'));
                    mobileBtn.classList.toggle('open', !isOpen);
                    header.classList.toggle('menu-open', !isOpen);
                    navContainer.classList.toggle('menu-open', !isOpen);
                    if (navLinks) navLinks.classList.toggle('active', !isOpen);
                });

                navContainer.querySelectorAll('.nav-item:not(.nav-dropdown-toggle), .nav-dropdown-menu a, .btn-nav').forEach(function (link) {
                    link.addEventListener('click', function () {
                        mobileBtn.classList.remove('open');
                        header.classList.remove('menu-open');
                        navContainer.classList.remove('menu-open');
                        if (navLinks) navLinks.classList.remove('active');
                    });
                });
            }

            function initAll() {
                initDropdowns();
                initHeaderScroll();
                initMobileMenu();
            }

            if (document.readyState === 'loading') {
                document.addEventListener('DOMContentLoaded', initAll);
            } else {
                initAll();
            }
        })();
    </script>
    <?php
}
add_action('wp_footer', 'cotizalo_dropdown_js');


/**
 * Load Google Fonts asynchronously to prevent render-blocking FCP delays.
 */
add_filter('style_loader_tag', function ($html, $handle) {
    if ('google-fonts-montserrat' === $handle) {
        return str_replace("rel='stylesheet'", "rel='stylesheet' media='print' onload=\"this.media='all'\"", $html);
    }
    return $html;
}, 10, 2);

/**
 * Optimize asset loading: Dequeue unused block library styles, classic theme styles,
 * and plugin styles on the front-end to improve FCP and LCP.
 */
function cotizalo_dequeue_unused_assets()
{
    if (is_admin()) {
        return;
    }

    // Dequeue Gutenberg Block Library styles
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
    wp_dequeue_style('wc-blocks-style');

    // Dequeue default global styles and classic theme styles
    wp_dequeue_style('global-styles');
    wp_dequeue_style('classic-theme-styles');

    // Dequeue Hostinger Reach plugin styles (if active)
    wp_dequeue_style('hostinger-reach-blocks');
    wp_dequeue_style('hostinger-reach-frontend');
    wp_dequeue_style('hostinger-reach-style');
    wp_dequeue_style('hostinger-reach');
}
add_action('wp_enqueue_scripts', 'cotizalo_dequeue_unused_assets', 9999);

/**
 * Fallback to strip any plugin-queued styles containing 'hostinger-reach' or 'block-library' from output
 */
function cotizalo_strip_plugin_styles()
{
    if (is_admin()) {
        return;
    }
    global $wp_styles;
    if (!empty($wp_styles->queue)) {
        foreach ($wp_styles->queue as $handle) {
            $style = $wp_styles->registered[$handle];
            if (isset($style->src) && (strpos($style->src, 'plugins/hostinger-reach') !== false || strpos($style->src, 'block-library') !== false)) {
                wp_dequeue_style($handle);
            }
        }
    }
}
add_action('wp_print_styles', 'cotizalo_strip_plugin_styles', 9999);

/**
 * Strip any plugin-queued scripts containing 'hostinger-reach' from front-end output
 */
function cotizalo_strip_plugin_scripts()
{
    if (is_admin()) {
        return;
    }
    global $wp_scripts;
    if (!empty($wp_scripts->queue)) {
        foreach ($wp_scripts->queue as $handle) {
            if (isset($wp_scripts->registered[$handle])) {
                $script = $wp_scripts->registered[$handle];
                if (isset($script->src) && strpos($script->src, 'plugins/hostinger-reach') !== false) {
                    wp_dequeue_script($handle);
                    wp_deregister_script($handle);
                }
            }
        }
    }
}
add_action('wp_print_scripts', 'cotizalo_strip_plugin_scripts', 9999);

/**
 * Override WordPress favicon: remove wp_site_icon and inject our own.
 */
function cotizalo_remove_wp_favicon()
{
    remove_action('wp_head', 'wp_site_icon', 99);
}
add_action('init', 'cotizalo_remove_wp_favicon');

function cotizalo_custom_favicon()
{
    $uri = get_template_directory_uri();
    echo '<link rel="icon" type="image/png" href="' . esc_url($uri) . '/assets/assets/logos/ISOTIPO/Cotizalo-5.png?v=4">' . "\n";
    echo '<link rel="shortcut icon" href="' . esc_url($uri) . '/assets/assets/logos/ISOTIPO/Cotizalo-5.png?v=4">' . "\n";
    echo '<link rel="apple-touch-icon" href="' . esc_url($uri) . '/assets/assets/logos/ISOTIPO/Cotizalo-5.png?v=4">' . "\n";
}
add_action('wp_head', 'cotizalo_custom_favicon', 1);

/**
 * Register Customizer Settings
 */
function cotizalo_customize_register($wp_customize)
{
    // ---------------------------------------------
    // PANEL: Hero Section
    // ---------------------------------------------
    $wp_customize->add_section('cotizalo_hero_section', array(
        'title' => __('Hero Section', 'cotizalo'),
        'priority' => 30,
    ));

    // Hero Title
    $wp_customize->add_setting('hero_title', array('default' => 'Software y Programa para Hacer Cotizaciones Profesionales'));
    $wp_customize->add_control('hero_title', array(
        'label' => __('Título Principal', 'cotizalo'),
        'section' => 'cotizalo_hero_section',
        'type' => 'textarea',
    ));
    // Hero Subtitle
    $wp_customize->add_setting('hero_subtitle', array('default' => 'Olvida el Excel y las Imagenes hechas por IA. Una identidad técnica, segura y seria, ideal para microempresas.'));
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
        'label' => __('Botón "Ingresar" — Texto', 'cotizalo'),
        'section' => 'cotizalo_nav_section',
        'type' => 'text',
    ));
    $wp_customize->add_setting('nav_login_url', array('default' => 'https://app.cotizalo.net/login'));
    $wp_customize->add_control('nav_login_url', array(
        'label' => __('Botón "Ingresar" — URL', 'cotizalo'),
        'section' => 'cotizalo_nav_section',
        'type' => 'url',
    ));
    $wp_customize->add_setting('nav_signup_text', array('default' => 'Empezar Gratis'));
    $wp_customize->add_control('nav_signup_text', array(
        'label' => __('Botón "Registro" — Texto', 'cotizalo'),
        'section' => 'cotizalo_nav_section',
        'type' => 'text',
    ));
    $wp_customize->add_setting('nav_signup_url', array('default' => 'https://app.cotizalo.net/signup'));
    $wp_customize->add_control('nav_signup_url', array(
        'label' => __('Botón "Registro" — URL', 'cotizalo'),
        'section' => 'cotizalo_nav_section',
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
        'title' => __('Sección "VS Imágenes / IA"', 'cotizalo'),
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
        'title' => __('Sección "Siempre contigo" (Nube/Móvil)', 'cotizalo'),
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
        'title' => __('Footer', 'cotizalo'),
        'priority' => 35,
    ));

    $wp_customize->add_setting('footer_brand_text', array('default' => 'Transformando la forma en que los equipos de ventas crean, envían y cierran propuestas.'));
    $wp_customize->add_control('footer_brand_text', array('label' => __('Texto de marca (bajo logo)', 'cotizalo'), 'section' => 'cotizalo_footer_section', 'type' => 'textarea'));

    $wp_customize->add_setting('footer_copyright', array('default' => 'PixelZero.mx . Todos los derechos reservados.'));
    $wp_customize->add_control('footer_copyright', array('label' => __('Texto de copyright (sin el año)', 'cotizalo'), 'section' => 'cotizalo_footer_section', 'type' => 'text'));

    // ==============================================
    // PANEL: PÁGINA DE PRECIOS
    // ==============================================
    $wp_customize->add_panel('cotizalo_precios_panel', array(
        'title' => __('Página de Precios', 'cotizalo'),
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

    $wp_customize->add_setting('plan_inicial_name', array('default' => 'Inicial'));
    $wp_customize->add_control('plan_inicial_name', array('label' => __('Nombre del Plan', 'cotizalo'), 'section' => 'cotizalo_plan_inicial', 'type' => 'text'));
    $wp_customize->add_setting('plan_inicial_price', array('default' => '199'));
    $wp_customize->add_control('plan_inicial_price', array('label' => __('Precio (solo número)', 'cotizalo'), 'section' => 'cotizalo_plan_inicial', 'type' => 'text'));
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

    $wp_customize->add_setting('plan_basico_name', array('default' => 'Básico'));
    $wp_customize->add_control('plan_basico_name', array('label' => __('Nombre del Plan', 'cotizalo'), 'section' => 'cotizalo_plan_basico', 'type' => 'text'));
    $wp_customize->add_setting('plan_basico_price', array('default' => '399'));
    $wp_customize->add_control('plan_basico_price', array('label' => __('Precio (solo número)', 'cotizalo'), 'section' => 'cotizalo_plan_basico', 'type' => 'text'));
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

    $wp_customize->add_setting('plan_pro_badge', array('default' => 'Recomendado'));
    $wp_customize->add_control('plan_pro_badge', array('label' => __('Texto del badge "Recomendado"', 'cotizalo'), 'section' => 'cotizalo_plan_profesional', 'type' => 'text'));
    $wp_customize->add_setting('plan_pro_name', array('default' => 'Profesional'));
    $wp_customize->add_control('plan_pro_name', array('label' => __('Nombre del Plan', 'cotizalo'), 'section' => 'cotizalo_plan_profesional', 'type' => 'text'));
    $wp_customize->add_setting('plan_pro_price', array('default' => '599'));
    $wp_customize->add_control('plan_pro_price', array('label' => __('Precio (solo número)', 'cotizalo'), 'section' => 'cotizalo_plan_profesional', 'type' => 'text'));
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

    $wp_customize->add_setting('plan_emp_name', array('default' => 'Empresarial'));
    $wp_customize->add_control('plan_emp_name', array('label' => __('Nombre del Plan', 'cotizalo'), 'section' => 'cotizalo_plan_empresarial', 'type' => 'text'));
    $wp_customize->add_setting('plan_emp_price', array('default' => '899'));
    $wp_customize->add_control('plan_emp_price', array('label' => __('Precio (solo número)', 'cotizalo'), 'section' => 'cotizalo_plan_empresarial', 'type' => 'text'));
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
    $wp_customize->add_setting('garantia_2', array('default' => ''));
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
        'title' => __('Página de Soporte', 'cotizalo'),
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
        'title' => __('Títulos de Páginas Secundarias', 'cotizalo'),
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
 * Map custom landing pages, legal pages, and sitemaps so they work seamlessly
 * without requiring page entries in the WordPress database (wp_posts).
 */
function cotizalo_get_custom_routes() {
    return array(
        'cotizador'                                   => 'page-cotizador.php',
        'cotizador-online'                            => 'page-cotizador.php',
        'cotizador-en-linea'                          => 'page-cotizador.php',
        'cotizador-para-pequenas-empresas'            => 'page-cotizador.php',
        'que-es-cotizalo'                             => 'page-que-es-cotizalo.php',
        'precios'                                     => 'page-precios.php',
        'soporte'                                     => 'page-soporte.php',
        'terminos-y-condiciones'                      => 'page-terminos-y-condiciones.php',
        'aviso-de-privacidad'                         => 'page-aviso-de-privacidad.php',
        'cotizaciones-por-whatsapp'                   => 'page-cotizaciones-por-whatsapp.php',
        'seguimiento-de-cotizaciones'                 => 'page-seguimiento-de-cotizaciones.php',
        'seguimiento-cotizaciones'                    => 'page-seguimiento-de-cotizaciones.php',
        'programa-para-hacer-presupuestos'             => 'page-programa-para-hacer-presupuestos.php',
        'software-para-cotizaciones'                  => 'page-software-para-cotizaciones.php',
        'software-de-cotizaciones-para-constructoras' => 'page-software-cotizaciones-constructoras.php',
        'software-cotizaciones-constructoras'        => 'page-software-cotizaciones-constructoras.php',
        'software-de-cotizaciones-para-servicios'     => 'page-software-cotizaciones-servicios.php',
        'software-cotizaciones-servicios'            => 'page-software-cotizaciones-servicios.php',
        'sitemap.rss'                                 => 'sitemap-rss.php',
        'sitemap.xml'                                 => 'sitemap-xml.php',
    );
}

/**
 * Prevent WordPress from marking these custom routes as 404.
 */
add_filter('pre_handle_404', function ($preempt, $wp_query) {
    $request_path = parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH);
    $site_path    = parse_url(home_url(), PHP_URL_PATH);
    if ($site_path && $site_path !== '/') {
        $request_path = substr($request_path, strlen($site_path));
    }
    $uri    = trim($request_path, '/');
    $routes = cotizalo_get_custom_routes();

    if (isset($routes[$uri])) {
        return true; // Bypass WordPress 404 handling
    }
    return $preempt;
}, 10, 2);

/**
 * Intercept requests to custom routes at template_redirect and load the corresponding template.
 */
add_action('template_redirect', function () {
    $request_path = parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH);
    $site_path    = parse_url(home_url(), PHP_URL_PATH);
    if ($site_path && $site_path !== '/') {
        $request_path = substr($request_path, strlen($site_path));
    }
    $uri    = trim($request_path, '/');
    $routes = cotizalo_get_custom_routes();

    if (isset($routes[$uri])) {
        $template = get_template_directory() . '/' . $routes[$uri];
        if (file_exists($template)) {
            global $wp_query;
            if (is_object($wp_query)) {
                $wp_query->is_404 = false;
            }
            status_header(200);
            include $template;
            exit;
        }
    }
});
