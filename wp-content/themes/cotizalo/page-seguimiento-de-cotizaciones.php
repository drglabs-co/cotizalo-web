<?php
/**
 * Template Name: Seguimiento de Cotizaciones
 * Template Post Type: page
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <link rel="canonical" href="<?php echo esc_url(home_url('/seguimiento-de-cotizaciones/')); ?>">
    <title>Sistema de Seguimiento de Cotizaciones para Empresas | Cotízalo</title>
    <meta name="description"
        content="Monitorea en tiempo real qué cotizaciones están pendientes, enviadas, aceptadas o pagadas. Da seguimiento comercial a cada cliente y cierra más ventas sin perder tiempo en chats.">

    <!-- Open Graph / Facebook / WhatsApp -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo esc_url(home_url('/seguimiento-de-cotizaciones/')); ?>">
    <meta property="og:title" content="Sistema de Seguimiento de Cotizaciones para Empresas | Cotízalo">
    <meta property="og:description"
        content="Monitorea en tiempo real qué cotizaciones están pendientes, enviadas, aceptadas o pagadas. Sabe con certeza a quién llamar hoy y cierra más ventas. Prueba gratis 14 días.">
    <meta property="og:image"
        content="<?php echo esc_url(get_template_directory_uri()); ?>/assets/assets/og-social.jpg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:locale" content="es_MX">

    <!-- Twitter / X -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Sistema de Seguimiento de Cotizaciones para Empresas | Cotízalo">
    <meta name="twitter:description"
        content="Monitorea en tiempo real qué cotizaciones están pendientes, enviadas, aceptadas o pagadas. Cierra más ventas con Cotízalo.">
    <meta name="twitter:image"
        content="<?php echo esc_url(get_template_directory_uri()); ?>/assets/assets/og-social.jpg">

    <!-- Google Fonts & Favicon -->
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
                "@type": "WebPage",
                "@id": "<?php echo esc_url(home_url('/seguimiento-de-cotizaciones/')); ?>#webpage",
                "url": "<?php echo esc_url(home_url('/seguimiento-de-cotizaciones/')); ?>",
                "name": "Sistema de Seguimiento de Cotizaciones para Empresas | Cotízalo",
                "description": "Monitorea en tiempo real qué cotizaciones están pendientes, enviadas, aceptadas o pagadas. Cierra más ventas con el seguimiento de Cotízalo.",
                "isPartOf": { "@id": "<?php echo esc_url(home_url('/')); ?>#website" },
                "breadcrumb": { "@id": "<?php echo esc_url(home_url('/seguimiento-de-cotizaciones/')); ?>#breadcrumb" },
                "inLanguage": "es-MX"
            },
            {
                "@type": "BreadcrumbList",
                "@id": "<?php echo esc_url(home_url('/seguimiento-de-cotizaciones/')); ?>#breadcrumb",
                "itemListElement": [
                    { "@type": "ListItem", "position": 1, "name": "Inicio", "item": "<?php echo esc_url(home_url('/')); ?>" },
                    { "@type": "ListItem", "position": 2, "name": "Seguimiento de Cotizaciones" }
                ]
            },
            {
                "@type": "SoftwareApplication",
                "name": "Cotízalo - Seguimiento de Cotizaciones",
                "url": "<?php echo esc_url(home_url('/')); ?>",
                "applicationCategory": "BusinessApplication",
                "operatingSystem": "Web, iOS, Android",
                "description": "Herramienta de seguimiento comercial para microempresas y pymes. Controla cotizaciones pendientes, aceptadas y facturadas.",
                "featureList": [
                    "Estados en tiempo real: Borrador, Enviada, Aceptada, Rechazada, Pagada",
                    "Filtro rápido por cliente, estado y fecha",
                    "Alertas de vigencia de cotizaciones para llamadas de cierre",
                    "Historial comercial consolidado por cliente",
                    "Envío de recordatorios amables por WhatsApp con 1 clic"
                ],
                "offers": {
                    "@type": "Offer",
                    "price": "199",
                    "priceCurrency": "MXN",
                    "description": "Planes accesibles desde $199 MXN al mes. Prueba gratuita de 14 días sin tarjeta de crédito."
                },
                "publisher": { "@id": "<?php echo esc_url(home_url('/')); ?>#organization" }
            },
            {
                "@type": "FAQPage",
                "mainEntity": [
                    {
                        "@type": "Question",
                        "name": "¿Por qué es tan importante dar seguimiento a una cotización?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Más del 45% de las ventas no se cierran porque el vendedor olvida hacer la llamada o mensaje de seguimiento después de enviar el presupuesto. Un seguimiento oportuno demuestra interés profesional y resuelve objeciones del cliente antes de que busque a otra empresa."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "¿Cómo me ayuda Cotízalo a saber a qué clientes contactar?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Cotízalo clasifica tus cotizaciones automáticamente en un tablero visual. Puedes filtrar con un solo clic todas las cotizaciones con estado 'Enviada' que están próximas a vencer o que llevan más de 48 horas sin respuesta."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "¿Puedo enviar mensajes de seguimiento directo por WhatsApp?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Sí. Cotízalo incluye botones de WhatsApp que generan mensajes listos con el folio, nombre del cliente y enlace a la propuesta, facilitando el contacto sin necesidad de redactar textos desde cero."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "¿Qué pasa cuando un cliente acepta mi cotización?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Cambias el estatus a 'Aceptada' en un clic. A partir de ahí puedes generar el recibo de anticipo correspondiente, registrar pagos parciales y pasar la propuesta a tu orden de trabajo o facturación."
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

    <style>
        .lp-hero {
            padding-top: calc(var(--nav-height) + 4.5rem);
            padding-bottom: 5rem;
            background: linear-gradient(135deg, #091e14 0%, #123A2C 45%, #1b4b39 100%);
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .lp-hero::before {
            content: '';
            position: absolute;
            top: -20%;
            left: 50%;
            transform: translateX(-50%);
            width: 800px;
            height: 400px;
            background: radial-gradient(circle, rgba(16, 185, 129, 0.18) 0%, rgba(18, 58, 44, 0) 70%);
            pointer-events: none;
        }

        .lp-hero .badge-pill {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.22);
            color: #fff;
            font-size: 0.875rem;
            font-weight: 600;
            padding: 0.4rem 1.15rem;
            border-radius: var(--radius-full);
            margin-bottom: 1.5rem;
            backdrop-filter: blur(8px);
        }

        .lp-hero h1 {
            font-size: clamp(2rem, 4.5vw, 3.4rem);
            font-weight: 700;
            color: #fff;
            letter-spacing: -0.025em;
            margin-bottom: 1.25rem;
            max-width: 860px;
            margin-left: auto;
            margin-right: auto;
            line-height: 1.2;
        }

        .lp-hero p.hero-intro {
            color: rgba(255, 255, 255, 0.88);
            font-size: 1.15rem;
            max-width: 740px;
            margin: 0 auto 2.25rem;
            line-height: 1.7;
        }

        .hero-ctas {
            display: flex;
            justify-content: center;
            gap: 1rem;
            flex-wrap: wrap;
            margin-bottom: 2.25rem;
        }

        .btn-cta-primary {
            background: #10b981;
            color: #062817 !important;
            font-weight: 700;
            padding: 0.95rem 2rem;
            border-radius: var(--radius-md);
            text-decoration: none;
            font-size: 1rem;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            transition: all 0.2s ease;
            box-shadow: 0 10px 25px rgba(16, 185, 129, 0.35);
        }

        .btn-cta-primary:hover {
            background: #34d399;
            transform: translateY(-2px);
        }

        .btn-cta-secondary {
            background: rgba(255, 255, 255, 0.12);
            border: 1px solid rgba(255, 255, 255, 0.28);
            color: #ffffff !important;
            font-weight: 600;
            padding: 0.95rem 1.85rem;
            border-radius: var(--radius-md);
            text-decoration: none;
            font-size: 1rem;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            transition: all 0.2s ease;
            backdrop-filter: blur(8px);
        }

        .btn-cta-secondary:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateY(-2px);
        }

        /* Pipeline Visual Mockup */
        .pipeline-wrapper {
            max-width: 960px;
            margin: 3.5rem auto 0;
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.15);
            border-radius: 18px;
            padding: 14px;
            box-shadow: 0 30px 70px rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(12px);
        }

        .pipeline-card {
            background: #ffffff;
            border-radius: 12px;
            padding: 24px;
            text-align: left;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.06);
            border: 1px solid #e2e8f0;
        }

        .status-pipeline-steps {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 10px;
            margin-bottom: 24px;
        }

        .pipeline-step {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 10px 12px;
            text-align: center;
            transition: all 0.2s ease;
        }

        .pipeline-step.active {
            background: #ecfdf5;
            border-color: #10b981;
            box-shadow: 0 4px 12px rgba(16, 185, 129, 0.15);
        }

        .pipeline-step-title {
            font-size: 0.72rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.04em;
            color: #64748b;
        }

        .pipeline-step.active .pipeline-step-title {
            color: #059669;
        }

        .pipeline-step-count {
            font-size: 1.25rem;
            font-weight: 800;
            color: #0f172a;
            margin-top: 2px;
        }

        .pipeline-step.active .pipeline-step-count {
            color: #059669;
        }

        /* Common Section Styles */
        .lp-section {
            padding: 5.5rem 0;
        }

        .lp-section-alt {
            background: var(--bg-light-alt);
        }

        .section-eyebrow {
            text-align: center;
            font-size: 0.8rem;
            font-weight: 700;
            letter-spacing: 0.14em;
            text-transform: uppercase;
            color: var(--primary);
            margin-bottom: 0.65rem;
        }

        .section-title {
            text-align: center;
            font-size: clamp(1.75rem, 3.2vw, 2.45rem);
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 1rem;
            letter-spacing: -0.02em;
            line-height: 1.25;
        }

        .section-subtitle {
            text-align: center;
            color: var(--text-dark-muted);
            font-size: 1.05rem;
            max-width: 680px;
            margin: 0 auto 3.5rem;
            line-height: 1.65;
        }

        .cards-grid-3 {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1.75rem;
        }

        .feature-box {
            background: #ffffff;
            border: 1px solid var(--border-dark);
            border-radius: var(--radius-md);
            padding: 2rem;
            transition: all 0.25s ease;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.03);
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .feature-box:hover {
            transform: translateY(-4px);
            border-color: rgba(18, 58, 44, 0.3);
            box-shadow: 0 16px 30px rgba(18, 58, 44, 0.08);
        }

        .feature-icon-circle {
            width: 48px;
            height: 48px;
            border-radius: 12px;
            background: rgba(18, 58, 44, 0.08);
            color: var(--primary);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.25rem;
            flex-shrink: 0;
        }

        .feature-box h3 {
            font-size: 1.15rem;
            font-weight: 700;
            color: var(--text-dark);
            line-height: 1.35;
        }

        .feature-box p {
            font-size: 0.925rem;
            color: var(--text-dark-muted);
            line-height: 1.65;
            margin: 0;
        }

        /* WhatsApp Script Cards */
        .script-card {
            background: #ffffff;
            border: 1px solid #bbf7d0;
            border-radius: 12px;
            padding: 1.5rem;
            position: relative;
            box-shadow: 0 6px 18px rgba(34, 197, 94, 0.06);
        }

        .script-header {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 1rem;
            padding-bottom: 0.75rem;
            border-bottom: 1px solid #dcfce7;
        }

        .script-header h3 {
            font-size: 1.05rem;
            font-weight: 700;
            color: #15803d;
            margin: 0;
        }

        .script-body {
            background: #f0fdf4;
            border-radius: 8px;
            padding: 1rem;
            font-size: 0.88rem;
            line-height: 1.6;
            color: #166534;
            font-style: italic;
            border-left: 3px solid #22c55e;
        }

        .btn-copy-script {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 6px;
            margin-top: 0.85rem;
            width: 100%;
            padding: 0.5rem 0.75rem;
            background: #ffffff;
            border: 1px solid #86efac;
            color: #166534;
            font-size: 0.82rem;
            font-weight: 600;
            border-radius: 6px;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .btn-copy-script:hover {
            background: #dcfce7;
            border-color: #22c55e;
        }

        /* FAQ Accordion */
        .faq-accordion {
            max-width: 820px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .faq-item {
            background: #ffffff;
            border: 1px solid var(--border-dark);
            border-radius: var(--radius-md);
            overflow: hidden;
            transition: border-color 0.2s ease;
        }

        .faq-item:hover {
            border-color: rgba(18, 58, 44, 0.3);
        }

        .faq-question {
            width: 100%;
            text-align: left;
            background: none;
            border: none;
            padding: 1.25rem 1.5rem;
            font-size: 1.05rem;
            font-weight: 700;
            color: var(--text-dark);
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-family: var(--font-main);
            gap: 12px;
        }

        .faq-question svg {
            transition: transform 0.2s ease;
            flex-shrink: 0;
            color: #64748b;
        }

        .faq-item.open .faq-question svg {
            transform: rotate(180deg);
            color: var(--primary);
        }

        .faq-answer {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease, padding 0.3s ease;
            padding: 0 1.5rem;
            color: var(--text-dark-muted);
            font-size: 0.95rem;
            line-height: 1.65;
        }

        .faq-item.open .faq-answer {
            max-height: 250px;
            padding: 0 1.5rem 1.4rem;
        }

        /* Bottom CTA Section */
        .bottom-cta-banner {
            background: linear-gradient(135deg, #0d2818 0%, #123A2C 50%, #174d39 100%);
            border-radius: var(--radius-lg);
            padding: 4.5rem 2rem;
            text-align: center;
            color: #ffffff;
            position: relative;
            overflow: hidden;
            box-shadow: 0 25px 60px rgba(18, 58, 44, 0.25);
        }

        .bottom-cta-banner h2 {
            font-size: clamp(1.8rem, 3.5vw, 2.75rem);
            font-weight: 700;
            color: #ffffff;
            margin-bottom: 1.25rem;
            line-height: 1.2;
        }

        .bottom-cta-banner p {
            font-size: 1.15rem;
            color: rgba(255, 255, 255, 0.88);
            max-width: 660px;
            margin: 0 auto 2.5rem;
            line-height: 1.65;
        }

        @media (max-width: 991px) {
            .cards-grid-3,
            .status-pipeline-steps {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 640px) {
            .cards-grid-3,
            .status-pipeline-steps {
                grid-template-columns: 1fr;
            }
            .hero-ctas {
                flex-direction: column;
                align-items: stretch;
            }
            .btn-cta-primary,
            .btn-cta-secondary {
                justify-content: center;
                width: 100%;
            }
        }

        /* Fixed & Scrolled Navbar */
        header.navbar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: var(--nav-height, 80px);
            z-index: 1000;
            transition: background 0.3s ease, backdrop-filter 0.3s ease, -webkit-backdrop-filter 0.3s ease, border-color 0.3s ease, box-shadow 0.3s ease;
            display: flex;
            align-items: center;
        }

        header.navbar.scrolled {
            background: rgba(10, 14, 26, 0.96) !important;
            backdrop-filter: blur(12px) !important;
            -webkit-backdrop-filter: blur(12px) !important;
            border-bottom: 1px solid rgba(255, 255, 255, 0.12) !important;
            box-shadow: 0 4px 25px rgba(0, 0, 0, 0.45) !important;
        }

        header.navbar.menu-open {
            height: 100vh !important;
            align-items: flex-start !important;
            overflow-y: auto !important;
            -webkit-overflow-scrolling: touch;
            background: rgba(10, 14, 26, 0.98) !important;
            backdrop-filter: blur(12px) !important;
            -webkit-backdrop-filter: blur(12px) !important;
        }
    </style>
</head>

<body <?php body_class(); ?>>
    <!-- Navigation Bar -->
    <header class="navbar" id="navbar">
        <div class="container nav-container">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/assets/logos/LOGOTIPO3/Cotizalo-8.png?v=2"
                    alt="Cotízalo Logo" id="brand-logo" width="223" height="60">
            </a>
            <ul class="nav-links">
                <li><a href="<?php echo esc_url(home_url('/que-es-cotizalo/')); ?>" class="nav-item">¿Qué es Cotízalo?</a></li>
                <li><a href="<?php echo esc_url(home_url('/')); ?>#features" class="nav-item">Características</a></li>
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
                        <li><a href="<?php echo esc_url(home_url('/cotizador/')); ?>">Cotizador en línea</a></li>
                        <li><a href="<?php echo esc_url(home_url('/seguimiento-de-cotizaciones/')); ?>" style="font-weight:700; color:#34d399;">Seguimiento de cotizaciones</a></li>
                        <li><a href="<?php echo esc_url(home_url('/software-para-cotizaciones/')); ?>">Software para cotizaciones</a></li>
                        <li><a href="<?php echo esc_url(home_url('/programa-para-hacer-presupuestos/')); ?>">Programa para presupuestos</a></li>
                        <li><a href="<?php echo esc_url(home_url('/cotizaciones-por-whatsapp/')); ?>">Cotizaciones por WhatsApp</a></li>
                        <li><a href="<?php echo esc_url(home_url('/plantilla-de-cotizacion/')); ?>">Plantilla de cotización</a></li>
                        <li><a href="<?php echo esc_url(home_url('/software-de-cotizaciones-para-constructoras/')); ?>">Para constructoras</a></li>
                        <li><a href="<?php echo esc_url(home_url('/software-de-cotizaciones-para-servicios/')); ?>">Para servicios</a></li>
                    </ul>
                </li>
            </ul>
            <div class="nav-buttons">
                <a href="<?php echo esc_url(get_theme_mod('nav_login_url', 'https://app.cotizalo.net/login')); ?>"
                    class="btn btn-secondary btn-nav"><?php echo esc_html(get_theme_mod('nav_login_text', 'Ingresar')); ?></a>
                <a href="<?php echo esc_url(get_theme_mod('nav_register_url', 'https://app.cotizalo.net/signup')); ?>"
                    class="btn btn-primary btn-nav"><?php echo esc_html(get_theme_mod('nav_register_text', 'Probar Gratis')); ?></a>
            </div>
            <!-- Mobile Menu Toggle -->
            <div class="mobile-menu-btn" role="button" aria-label="Abrir menú de navegación" tabindex="0">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </header>

    <main>
        <!-- Hero Section -->
        <section class="lp-hero">
            <div class="container">
                <div class="badge-pill">
                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                        <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                    </svg>
                    <span>Control Comercial y Cierre de Ventas</span>
                </div>
                <h1>Sistema de seguimiento de cotizaciones para pequeñas empresas</h1>
                <p class="hero-intro">
                    Sabe con certeza a quién llamar hoy. Deja de perder ventas por olvidar presupuestos en chats de WhatsApp o carpetas de Excel. Monitorea cada propuesta desde que la envías hasta que el cliente la aprueba y formaliza su anticipo.
                </p>
                <div class="hero-ctas">
                    <a href="https://app.cotizalo.net/signup" class="btn-cta-primary">
                        <span>Empieza tu prueba gratuita</span>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    </a>
                    <a href="<?php echo esc_url(home_url('/precios/')); ?>" class="btn-cta-secondary">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="2" y="5" width="20" height="14" rx="2"></rect>
                            <line x1="2" y1="10" x2="22" y2="10"></line>
                        </svg>
                        <span>Ver planes y precios</span>
                    </a>
                </div>

                <!-- Pipeline Mockup -->
                <div class="pipeline-wrapper">
                    <div class="pipeline-card">
                        <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:18px; flex-wrap:wrap; gap:10px;">
                            <div>
                                <span style="font-size:0.75rem; color:#64748b; font-weight:700; text-transform:uppercase;">Tablero de Control de Cotizaciones</span>
                                <h2 style="font-size:1.15rem; font-weight:800; color:#0f172a; margin:2px 0 0;">Pipeline Comercial en Tiempo Real</h2>
                            </div>
                            <div style="font-size:0.8rem; color:#059669; background:#ecfdf5; font-weight:700; padding:4px 10px; border-radius:8px;">
                                Total cotizado: $184,500 MXN
                            </div>
                        </div>

                        <div class="status-pipeline-steps">
                            <div class="pipeline-step">
                                <div class="pipeline-step-title">Borradores</div>
                                <div class="pipeline-step-count">4</div>
                            </div>
                            <div class="pipeline-step active">
                                <div class="pipeline-step-title">Enviadas</div>
                                <div class="pipeline-step-count">12</div>
                            </div>
                            <div class="pipeline-step">
                                <div class="pipeline-step-title">Aceptadas</div>
                                <div class="pipeline-step-count">8</div>
                            </div>
                            <div class="pipeline-step">
                                <div class="pipeline-step-title">Con Anticipo</div>
                                <div class="pipeline-step-count">6</div>
                            </div>
                            <div class="pipeline-step">
                                <div class="pipeline-step-title">Rechazadas</div>
                                <div class="pipeline-step-count">2</div>
                            </div>
                        </div>

                        <div style="background:#f8fafc; border:1px solid #e2e8f0; border-radius:8px; overflow-x:auto;">
                            <table style="width:100%; border-collapse:collapse; font-size:0.82rem;">
                                <thead>
                                    <tr style="border-bottom:1px solid #e2e8f0; background:#f1f5f9; color:#475569; font-weight:700;">
                                        <th style="padding:8px 12px; text-align:left;">Folio</th>
                                        <th style="padding:8px 12px; text-align:left;">Cliente</th>
                                        <th style="padding:8px 12px; text-align:right;">Monto</th>
                                        <th style="padding:8px 12px; text-align:center;">Estado</th>
                                        <th style="padding:8px 12px; text-align:center;">Acción de seguimiento</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr style="border-bottom:1px solid #f1f5f9;">
                                        <td style="padding:10px 12px; font-weight:700; color:#059669;">#COT-1048</td>
                                        <td style="padding:10px 12px; font-weight:600; color:#1e293b;">Constructora Alianza del Norte</td>
                                        <td style="padding:10px 12px; text-align:right; font-weight:700;">$23,258.00</td>
                                        <td style="padding:10px 12px; text-align:center;">
                                            <span style="background:#eff6ff; color:#2563eb; font-weight:700; padding:2px 8px; border-radius:4px; font-size:0.75rem;">Enviada</span>
                                        </td>
                                        <td style="padding:10px 12px; text-align:center;">
                                            <span style="background:#22c55e; color:#ffffff; font-weight:700; padding:3px 8px; border-radius:4px; font-size:0.72rem; cursor:pointer;">Contactar por WhatsApp</span>
                                        </td>
                                    </tr>
                                    <tr style="border-bottom:1px solid #f1f5f9;">
                                        <td style="padding:10px 12px; font-weight:700; color:#059669;">#COT-1047</td>
                                        <td style="padding:10px 12px; font-weight:600; color:#1e293b;">Despacho García & Asociados</td>
                                        <td style="padding:10px 12px; text-align:right; font-weight:700;">$18,400.00</td>
                                        <td style="padding:10px 12px; text-align:center;">
                                            <span style="background:#f0fdf4; color:#16a34a; font-weight:700; padding:2px 8px; border-radius:4px; font-size:0.75rem;">Aceptada</span>
                                        </td>
                                        <td style="padding:10px 12px; text-align:center;">
                                            <span style="background:#0f172a; color:#ffffff; font-weight:700; padding:3px 8px; border-radius:4px; font-size:0.72rem;">Registrar Anticipo</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 1: Por qué fracasa el seguimiento -->
        <section class="lp-section">
            <div class="container">
                <div class="section-eyebrow">Diagnóstico de Ventas</div>
                <h2 class="section-title">El costo oculto de no dar seguimiento comercial</h2>
                <p class="section-subtitle">
                    Enviar una cotización y esperar a que el cliente regrese por su cuenta es el error más común de los pequeños negocios.
                </p>
                <div class="cards-grid-3">
                    <div class="feature-box">
                        <div class="feature-icon-circle" style="background:#fef2f2; color:#dc2626;">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line></svg>
                        </div>
                        <h3>El 48% de propuestas se olvidan</h3>
                        <p>Los dueños de negocio están ocupados operando y no tienen tiempo de revisar cuadernos o chats de WhatsApp para recordar qué prospectos no han contestado.</p>
                    </div>
                    <div class="feature-box">
                        <div class="feature-icon-circle" style="background:#fffbeb; color:#d97706;">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                        </div>
                        <h3>Tus prospectos se enfrían</h3>
                        <p>Cuando un cliente pide 3 cotizaciones, casi siempre le compra a la primera empresa que le da seguimiento formal y resuelve sus dudas técnicas.</p>
                    </div>
                    <div class="feature-box">
                        <div class="feature-icon-circle" style="background:#eff6ff; color:#2563eb;">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg>
                        </div>
                        <h3>Descontrol en el flujo de caja</h3>
                        <p>Si no sabes qué cotizaciones están por cerrarse este mes, es imposible proyectar compras de material, contratación de personal o anticipos de cobranza.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 2: 3 Plantillas de WhatsApp para seguimiento -->
        <section class="lp-section lp-section-alt">
            <div class="container">
                <div class="section-eyebrow">Recursos Prácticos</div>
                <h2 class="section-title">Cómo dar seguimiento a una cotización sin parecer insistente</h2>
                <p class="section-subtitle">
                    Utiliza estas 3 plantillas probadas para reactivar conversaciones de venta por WhatsApp con educación, profesionalismo y enfoque en servicio.
                </p>
                <div class="cards-grid-3">
                    <div class="script-card">
                        <div class="script-header">
                            <span style="font-size:1.2rem;">⏱️</span>
                            <h3>A las 48 horas del envío</h3>
                        </div>
                        <div class="script-body" id="script1">
                            "Hola [Nombre], buen día. Espero que te encuentres muy bien. Te escribo brevemente para confirmar que hayas podido revisar la propuesta [Folio] que te enviamos el [Día]. Quedo a tus órdenes si tienes alguna duda con las partidas o tiempos de entrega."
                        </div>
                        <button type="button" class="btn-copy-script" onclick="copyScript(this, 'script1')">
                            📋 Copiar plantilla
                        </button>
                    </div>
                    <div class="script-card">
                        <div class="script-header">
                            <span style="font-size:1.2rem;">📅</span>
                            <h3>Antes del vencimiento de vigencia</h3>
                        </div>
                        <div class="script-body" id="script2">
                            "Hola [Nombre], un gusto saludarte. Te contacto porque los precios y disponibilidad de la cotización [Folio] tienen vigencia hasta este [Día]. Si estás listo para arrancar, avísame para apartar tu fecha en calendario y congelar los costos."
                        </div>
                        <button type="button" class="btn-copy-script" onclick="copyScript(this, 'script2')">
                            📋 Copiar plantilla
                        </button>
                    </div>
                    <div class="script-card">
                        <div class="script-header">
                            <span style="font-size:1.2rem;">🎯</span>
                            <h3>Para clientes en silencio</h3>
                        </div>
                        <div class="script-body" id="script3">
                            "Hola [Nombre], ¿cómo va todo? Imagino que has estado con bastante trabajo. Solo quería saber si el proyecto sigue en pie para este mes o si prefieres que ajustemos las partidas para adaptarnos mejor a lo que necesitan hoy."
                        </div>
                        <button type="button" class="btn-copy-script" onclick="copyScript(this, 'script3')">
                            📋 Copiar plantilla
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 3: FAQ -->
        <section class="lp-section">
            <div class="container">
                <div class="section-eyebrow">Preguntas Frecuentes</div>
                <h2 class="section-title">Preguntas frecuentes sobre el seguimiento comercial</h2>
                <div class="faq-accordion">
                    <div class="faq-item">
                        <button class="faq-question" type="button">
                            <span>¿Por qué es tan importante dar seguimiento a una cotización?</span>
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </button>
                        <div class="faq-answer">
                            <p>Más del 45% de las ventas no se cierran porque el vendedor olvida hacer la llamada o mensaje de seguimiento después de enviar el presupuesto. Un seguimiento oportuno demuestra interés profesional y resuelve objeciones del cliente antes de que busque a otra empresa.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-question" type="button">
                            <span>¿Cómo me ayuda Cotízalo a saber a qué clientes contactar?</span>
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </button>
                        <div class="faq-answer">
                            <p>Cotízalo clasifica tus cotizaciones automáticamente en un tablero visual. Puedes filtrar con un solo clic todas las cotizaciones con estado 'Enviada' que están próximas a vencer o que llevan más de 48 horas sin respuesta.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-question" type="button">
                            <span>¿Puedo enviar mensajes de seguimiento directo por WhatsApp?</span>
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </button>
                        <div class="faq-answer">
                            <p>Sí. Cotízalo incluye botones de WhatsApp que generan mensajes listos con el folio, nombre del cliente y enlace a la propuesta, facilitando el contacto sin necesidad de redactar textos desde cero.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-question" type="button">
                            <span>¿Qué pasa cuando un cliente acepta mi cotización?</span>
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </button>
                        <div class="faq-answer">
                            <p>Cambias el estatus a 'Aceptada' en un clic. A partir de ahí puedes generar el recibo de anticipo correspondiente, registrar pagos parciales y pasar la propuesta a tu orden de trabajo o facturación.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Final CTA -->
        <section class="lp-section lp-section-alt">
            <div class="container">
                <div class="bottom-cta-banner">
                    <h2>Comienza a dar seguimiento profesional a tus ventas</h2>
                    <p>
                        Deja atrás los presupuestos olvidados y multiplica tu tasa de cierre con Cotízalo. Configura tu cuenta en 2 minutos sin tarjeta de crédito.
                    </p>
                    <div class="hero-ctas">
                        <a href="https://app.cotizalo.net/signup" class="btn-cta-primary" style="font-size:1.05rem; padding:1.05rem 2.25rem;">
                            <span>Empieza tu prueba gratis de 14 días</span>
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12 5 19 12 12 19"></polyline>
                            </svg>
                        </a>
                        <a href="<?php echo esc_url(home_url('/precios/')); ?>" class="btn-cta-secondary" style="font-size:1.05rem; padding:1.05rem 2rem;">
                            <span>Ver planes y precios</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-brand">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="logo mb-1">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/assets/logos/LOGOTIPO3/Cotizalo-8.png?v=2"
                            alt="Cotízalo Logo" style="height: 70px; width: auto; object-fit: contain;" id="footer-logo"
                            width="260" height="70">
                    </a>
                    <p class="text-muted mt-1" style="max-width: 300px;">
                        Transformando la forma en que los equipos de ventas crean, envían y cierran propuestas.
                    </p>
                </div>
                <div class="footer-links">
                    <h4>Producto</h4>
                    <ul>
                        <li><a href="<?php echo esc_url(home_url('/')); ?>#features">Características</a></li>
                        <li><a href="<?php echo esc_url(home_url('/precios/')); ?>">Precios</a></li>
                    </ul>
                </div>
                <div class="footer-links">
                    <h4>Recursos</h4>
                    <ul>
                        <li><a href="<?php echo esc_url(home_url('/cotizador/')); ?>">Cotizador en línea</a></li>
                        <li><a href="<?php echo esc_url(home_url('/seguimiento-de-cotizaciones/')); ?>" style="font-weight:700; color:#34d399;">Seguimiento de cotizaciones</a></li>
                        <li><a href="<?php echo esc_url(home_url('/software-para-cotizaciones/')); ?>">Software para cotizaciones</a></li>
                        <li><a href="<?php echo esc_url(home_url('/programa-para-hacer-presupuestos/')); ?>">Programa para presupuestos</a></li>
                        <li><a href="<?php echo esc_url(home_url('/cotizaciones-por-whatsapp/')); ?>">Cotizaciones por WhatsApp</a></li>
                        <li><a href="<?php echo esc_url(home_url('/plantilla-de-cotizacion/')); ?>">Plantilla de cotización</a></li>
                    </ul>
                </div>
                <div class="footer-links">
                    <h4>Compañía</h4>
                    <ul>
                        <li><a href="<?php echo esc_url(home_url('/que-es-cotizalo/')); ?>">¿Qué es Cotízalo?</a></li>
                        <li><a href="<?php echo esc_url(home_url('/soporte/')); ?>">Soporte</a></li>
                        <li><a href="<?php echo esc_url(home_url('/aviso-de-privacidad/')); ?>">Aviso de Privacidad</a></li>
                        <li><a href="<?php echo esc_url(home_url('/terminos-y-condiciones/')); ?>">Términos y Condiciones</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?> Cotízalo. Todos los derechos reservados.</p>
                <div class="footer-legal">
                    <a href="<?php echo esc_url(home_url('/aviso-de-privacidad/')); ?>">Aviso de Privacidad</a>
                    <a href="<?php echo esc_url(home_url('/terminos-y-condiciones/')); ?>">Términos y Condiciones</a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        function copyScript(btn, elementId) {
            const textEl = document.getElementById(elementId);
            if (!textEl) return;
            const text = textEl.textContent.trim().replace(/^"|"$/g, '');
            navigator.clipboard.writeText(text).then(function () {
                const origText = btn.innerHTML;
                btn.innerHTML = '✅ ¡Copiado!';
                btn.style.background = '#22c55e';
                btn.style.color = '#ffffff';
                btn.style.borderColor = '#22c55e';
                setTimeout(function () {
                    btn.innerHTML = origText;
                    btn.style.background = '';
                    btn.style.color = '';
                    btn.style.borderColor = '';
                }, 2000);
            }).catch(function () {
                alert('No se pudo copiar automáticamente. Por favor copia el texto manualmente.');
            });
        }

        document.addEventListener('DOMContentLoaded', function () {
            const faqQuestions = document.querySelectorAll('.faq-question');
            faqQuestions.forEach(btn => {
                btn.addEventListener('click', function () {
                    const item = this.closest('.faq-item');
                    const wasOpen = item.classList.contains('open');
                    document.querySelectorAll('.faq-item').forEach(el => el.classList.remove('open'));
                    if (!wasOpen) item.classList.add('open');
                });
            });

            // Header scroll state
            const header = document.getElementById('navbar') || document.querySelector('header.navbar');
            if (header) {
                let ticking = false;
                const updateHeader = () => {
                    header.classList.toggle('scrolled', window.scrollY > 20);
                };
                window.addEventListener('scroll', () => {
                    if (!ticking) {
                        window.requestAnimationFrame(() => {
                            updateHeader();
                            ticking = false;
                        });
                        ticking = true;
                    }
                }, { passive: true });
                updateHeader();
            }

        });
    </script>
    <?php wp_footer(); ?>
</body>

</html>
