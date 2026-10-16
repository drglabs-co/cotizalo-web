<?php
/**
 * Template Name: Qué es Cotízalo
 * Template Post Type: page
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NG2ZW6L3');</script>
    <!-- End Google Tag Manager -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <link rel="canonical" href="<?php echo esc_url(home_url('/que-es-cotizalo/')); ?>">
    <title>¿Qué es Cotízalo? Software de Cotizaciones para Emprendedores</title>
    <meta name="description"
        content="Conoce Cotízalo, el software para crear cotizaciones profesionales, enviarlas por WhatsApp y dar seguimiento a clientes sin depender de Excel.">

    <!-- Open Graph / Facebook / WhatsApp -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo esc_url(home_url('/que-es-cotizalo/')); ?>">
    <meta property="og:title" content="¿Qué es Cotízalo? Software de Cotizaciones para Emprendedores">
    <meta property="og:description"
        content="Conoce Cotízalo, el software para crear cotizaciones profesionales, enviarlas por WhatsApp y dar seguimiento a clientes sin depender de Excel.">
    <meta property="og:image"
        content="<?php echo esc_url(get_template_directory_uri()); ?>/assets/assets/og-social.jpg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:locale" content="es_MX">

    <!-- Twitter / X -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="¿Qué es Cotízalo? Software de Cotizaciones para Emprendedores">
    <meta name="twitter:description"
        content="Conoce Cotízalo, el software para crear cotizaciones profesionales, enviarlas por WhatsApp y dar seguimiento a clientes sin depender de Excel.">
    <meta name="twitter:image"
        content="<?php echo esc_url(get_template_directory_uri()); ?>/assets/assets/og-social.jpg">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" type="image/x-icon" href="<?php echo esc_url(home_url('/favicon.ico')); ?>">
    <link rel="icon" type="image/png"
        href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/assets/logos/ISOTIPO/Cotizalo-5.png?v=3">
    <link rel="shortcut icon"
        href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/assets/logos/ISOTIPO/Cotizalo-5.png?v=3">
    <link rel="apple-touch-icon"
        href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/assets/logos/ISOTIPO/Cotizalo-5.png?v=3">

    <!-- Structured Data (Schema.org JSON-LD) -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@graph": [
            {
                "@type": "AboutPage",
                "@id": "<?php echo esc_url(home_url('/que-es-cotizalo/')); ?>#webpage",
                "url": "<?php echo esc_url(home_url('/que-es-cotizalo/')); ?>",
                "name": "¿Qué es Cotízalo? | Digitaliza tus Cotizaciones y Presupuestos",
                "description": "Descubre cómo Cotízalo ayuda a microempresas y profesionales en México a dejar atrás el Excel. Crea propuestas rápidas, profesionales y con seguimiento automático.",
                "isPartOf": {
                    "@id": "<?php echo esc_url(home_url('/')); ?>#website"
                },
                "breadcrumb": {
                    "@id": "<?php echo esc_url(home_url('/que-es-cotizalo/')); ?>#breadcrumb"
                },
                "inLanguage": "es-MX"
            },
            {
                "@type": "BreadcrumbList",
                "@id": "<?php echo esc_url(home_url('/que-es-cotizalo/')); ?>#breadcrumb",
                "itemListElement": [
                    {
                        "@type": "ListItem",
                        "position": 1,
                        "name": "Inicio",
                        "item": "<?php echo esc_url(home_url('/')); ?>"
                    },
                    {
                        "@type": "ListItem",
                        "position": 2,
                        "name": "¿Qué es Cotízalo?"
                    }
                ]
            },
            {
                "@type": "FAQPage",
                "@id": "<?php echo esc_url(home_url('/que-es-cotizalo/')); ?>#faq",
                "mainEntity": [
                    {
                        "@type": "Question",
                        "name": "¿Qué problema resuelve Cotízalo?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Cotízalo elimina el desorden de usar Excel o Word para cotizar. Permite crear cotizaciones profesionales con diseño corporativo en 2 minutos, enviarlas por WhatsApp y saber cuándo el cliente las visualiza."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "¿Mis clientes necesitan instalar algo para ver mis cotizaciones?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "No. Tus clientes reciben un enlace interactivo o PDF descargable que pueden abrir y firmar digitalmente desde cualquier celular o navegador web sin registrarse ni instalar aplicaciones."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "¿Puedo probar Cotízalo gratis?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Sí, ofrecemos 14 días de prueba gratuita sin necesidad de ingresar tarjeta de crédito ni compromisos a largo plazo."
                        }
                    }
                ]
            }
        ]
    }
    </script>
    <link rel="preload" as="image"
        href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/assets/logos/LOGOTIPO3/Cotizalo-8.png?v=2"
        type="image/png">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NG2ZW6L3"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- Header Navigation -->
    <header id="navbar">
        <div class="container nav-container">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/assets/logos/LOGOTIPO3/Cotizalo-8.png?v=2"
                    alt="Cotízalo" id="brand-logo" width="223" height="60">
            </a>
            <ul class="nav-links">
                <li><a href="<?php echo esc_url(home_url('/que-es-cotizalo/')); ?>" class="nav-item active">¿Qué es Cotízalo?</a></li>
                <li><a href="<?php echo esc_url(home_url('/#features')); ?>" class="nav-item">Características</a></li>
                <li><a href="<?php echo esc_url(home_url('/precios/')); ?>" class="nav-item">Precios</a></li>
                <li class="nav-dropdown">
                    <button class="nav-item nav-dropdown-toggle" aria-haspopup="true" aria-expanded="false">
                        Recursos
                        <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                    </button>
                    <ul class="nav-dropdown-menu">
                        <li><a href="<?php echo esc_url(home_url('/software-para-cotizaciones/')); ?>">Software para cotizaciones</a></li>
                        <li><a href="<?php echo esc_url(home_url('/seguimiento-de-cotizaciones/')); ?>">Seguimiento de cotizaciones</a></li>
                        <li><a href="<?php echo esc_url(home_url('/programa-para-hacer-presupuestos/')); ?>">Programa para presupuestos</a></li>
                        <li><a href="<?php echo esc_url(home_url('/cotizaciones-por-whatsapp/')); ?>">Cotizaciones por WhatsApp</a></li>
                        <li><a href="<?php echo esc_url(home_url('/software-de-cotizaciones-para-constructoras/')); ?>">Para constructoras</a></li>
                        <li><a href="<?php echo esc_url(home_url('/software-de-cotizaciones-para-servicios/')); ?>">Para servicios</a></li>
                    </ul>
                </li>
            </ul>
            <div class="nav-buttons">
                <a href="<?php echo esc_url(get_theme_mod('nav_login_url', 'https://app.cotizalo.net/login')); ?>"
                    class="btn btn-secondary btn-nav"><?php echo esc_html(get_theme_mod('nav_login_text', 'Ingresar')); ?></a>
                <a href="<?php echo esc_url(get_theme_mod('nav_signup_url', 'https://app.cotizalo.net/signup')); ?>"
                    class="btn btn-primary btn-nav"><?php echo esc_html(get_theme_mod('nav_signup_text', 'Empezar Gratis')); ?></a>
            </div>

            <button class="mobile-menu-btn" aria-label="Abrir menú de navegación">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </header>

    <!-- Page Hero -->
    <section class="page-hero">
        <div class="container animate-on-scroll">
            <h1>
                <?php echo esc_html(get_theme_mod('que_es_title', '¿Qué es Cotízalo?')); ?>
            </h1>
            <p>
                <?php echo esc_html(get_theme_mod('que_es_subtitle', 'La herramienta directa, simple y sin complicaciones para emprendedores que quieren dejar atrás el Excel y el papel.')); ?>
            </p>
            <div class="hero-buttons" style="justify-content: center;">
                <a href="<?php echo esc_url(get_theme_mod('nav_signup_url', 'https://app.cotizalo.net/signup')); ?>"
                    class="btn btn-primary btn-lg">
                    <?php echo esc_html(get_theme_mod('hero_btn_text', 'Empieza gratis — 14 días')); ?>
                </a>
            </div>
            <div style="margin-top: 1.5rem; font-size: 0.85rem; color: rgba(255, 255, 255, 0.7); display: flex; justify-content: center; gap: 1.25rem; flex-wrap: wrap;">
                <span>✓ 14 días gratis</span>
                <span>✓ Cancela cuando quieras</span>
            </div>
        </div>
    </section>

    <!-- Core Philosophy / Value Pillars -->
    <section class="benefits-section">
        <div class="container">
            <div class="section-header animate-on-scroll">
                <h2 class="section-title">
                    Digitalizar las ventas de quienes hacen que México avance
                </h2>
                <p class="section-subtitle">
                    Cotízalo nació con un objetivo claro: sustituir la frialdad o desorden de hojas de cálculo por una plataforma web moderna, rápida y orientada a resultados comerciales.
                </p>
            </div>

            <div class="benefits-grid animate-on-scroll">
                <div class="benefit-card">
                    <div class="benefit-icon"><svg viewBox="0 0 24 24" width="22" height="22" aria-hidden="true"><path d="M14 3H7a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8z"/><path d="M14 3v5h5M9 13h6M9 17h6"/></svg></div>
                    <h3>Cotizaciones en PDF Profesional</h3>
                    <p>Genera propuestas formales con tu logotipo oficial, datos fiscales y términos comerciales en menos de 2 minutos.</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon"><svg viewBox="0 0 24 24" width="22" height="22" aria-hidden="true"><path d="M21 12a8 8 0 0 1-11.6 7.1L4 20l1-4.6A8 8 0 1 1 21 12z"/></svg></div>
                    <h3>Envío Nativo por WhatsApp</h3>
                    <p>Comparte un enlace interactivo directo al chat de tu cliente. Puede abrirlo desde cualquier celular sin descargar aplicaciones.</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon"><svg viewBox="0 0 24 24" width="22" height="22" aria-hidden="true"><path d="M12 20h9"/><path d="M16.5 3.5a2.1 2.1 0 0 1 3 3L7 19l-4 1 1-4z"/></svg></div>
                    <h3>Firma Digital y Depósitos</h3>
                    <p>Tus clientes aceptan y firman la propuesta directamente con su dedo en pantalla, acelerando el cierre del trato.</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon"><svg viewBox="0 0 24 24" width="22" height="22" aria-hidden="true"><path d="M3 3v18h18"/><path d="M8 17v-5M13 17V8M18 17v-3"/></svg></div>
                    <h3>Seguimiento y Control</h3>
                    <p>Monitorea qué cotizaciones están pendientes, autorizadas o facturadas. Nunca más olvides dar seguimiento a un cliente.</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon"><svg viewBox="0 0 24 24" width="22" height="22" aria-hidden="true"><path d="M3 7a2 2 0 0 1 2-2h4l2 2h8a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/></svg></div>
                    <h3>Catálogo Centralizado</h3>
                    <p>Guarda tus productos y servicios recurrentes con sus precios preconfigurados para no reescribir descripciones nunca más.</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon"><svg viewBox="0 0 24 24" width="22" height="22" aria-hidden="true"><path d="M6.5 19a4.5 4.5 0 0 1-.4-8.98A6 6 0 0 1 17.7 9 4.5 4.5 0 0 1 17.5 19z"/></svg></div>
                    <h3>100% en la Nube y Móvil</h3>
                    <p>Accede desde tu computadora de escritorio, tablet o celular. Tu negocio sigue funcionando estés donde estés.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section" id="faq">
        <div class="container">
            <div class="section-header animate-on-scroll">
                <h2 class="section-title">
                    Conoce más sobre cómo funciona Cotízalo
                </h2>
            </div>

            <div class="faq-list animate-on-scroll">
                <div class="faq-item open">
                    <button class="faq-question" type="button">
                        <span>¿Qué problema resuelve Cotízalo?</span>
                        <span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"/></svg></span>
                    </button>
                    <div class="faq-answer">
                        Cotízalo elimina el desorden de usar Excel o Word para cotizar. Permite crear cotizaciones profesionales con diseño corporativo en 2 minutos, enviarlas por WhatsApp y saber cuándo el cliente las visualiza.
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question" type="button">
                        <span>¿Mis clientes necesitan instalar algo para ver mis cotizaciones?</span>
                        <span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"/></svg></span>
                    </button>
                    <div class="faq-answer">
                        No. Tus clientes reciben un enlace interactivo o PDF descargable que pueden abrir y firmar digitalmente desde cualquier celular o navegador web sin registrarse ni instalar aplicaciones.
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question" type="button">
                        <span>¿Puedo probar Cotízalo gratis?</span>
                        <span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"/></svg></span>
                    </button>
                    <div class="faq-answer">
                        Sí, ofrecemos 14 días de prueba gratuita sin necesidad de ingresar tarjeta de crédito ni compromisos a largo plazo.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="cta-section">
        <div class="container animate-on-scroll">
            <div class="cta-box">
                <h2 class="cta-title">
                    Empieza a cotizar de forma profesional hoy
                </h2>
                <p class="cta-desc">
                    14 días gratis. Configura tu cuenta y emite tu primer presupuesto en menos de cinco minutos.
                </p><br>
                <div class="cta-buttons">
                    <a href="<?php echo esc_url(get_theme_mod('nav_signup_url', 'https://app.cotizalo.net/signup')); ?>"
                        class="btn btn-primary btn-lg">
                        Crear mi cuenta gratis →
                    </a>
                    <a href="<?php echo esc_url(home_url('/precios/')); ?>" class="btn btn-secondary btn-lg">
                        Ver planes y precios
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-brand">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/assets/logos/LOGOTIPO3/Cotizalo-8.png?v=2"
                            alt="Cotízalo" id="footer-logo" width="223" height="60">
                    </a>
                    <p>
                        <?php echo esc_html(get_theme_mod('footer_brand_text', 'Transformando la forma en que los equipos de ventas crean, envían y cierran propuestas.')); ?>
                    </p>
                </div>
                <div class="footer-column">
                    <h4>Producto</h4>
                    <ul class="footer-links-list">
                        <li><a href="<?php echo esc_url(home_url('/')); ?>#features">Características</a></li>
                        <li><a href="<?php echo esc_url(home_url('/precios/')); ?>">Precios</a></li>
                        <li><a href="<?php echo esc_url(home_url('/#how-it-works')); ?>">Cómo Funciona</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h4>Recursos</h4>
                    <ul class="footer-links-list">
                        <li><a href="<?php echo esc_url(home_url('/software-para-cotizaciones/')); ?>">Software para cotizaciones</a></li>
                        <li><a href="<?php echo esc_url(home_url('/seguimiento-de-cotizaciones/')); ?>">Seguimiento de cotizaciones</a></li>
                        <li><a href="<?php echo esc_url(home_url('/programa-para-hacer-presupuestos/')); ?>">Programa para presupuestos</a></li>
                        <li><a href="<?php echo esc_url(home_url('/cotizaciones-por-whatsapp/')); ?>">Cotizaciones por WhatsApp</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h4>Compañía</h4>
                    <ul class="footer-links-list">
                        <li><a href="<?php echo esc_url(home_url('/que-es-cotizalo/')); ?>">¿Qué es Cotízalo?</a></li>
                        <li><a href="<?php echo esc_url(home_url('/soporte/')); ?>">Soporte</a></li>
                        <li><a href="<?php echo esc_url(home_url('/aviso-de-privacidad/')); ?>">Aviso de Privacidad</a></li>
                        <li><a href="<?php echo esc_url(home_url('/terminos-y-condiciones/')); ?>">Términos y Condiciones</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <div>
                    &copy; <?php echo date('Y'); ?> Cotízalo. <?php echo esc_html(get_theme_mod('footer_copyright', 'PixelZero.mx . Todos los derechos reservados.')); ?>
                </div>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
</body>

</html>