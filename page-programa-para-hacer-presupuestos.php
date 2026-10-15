<?php
/**
 * Template Name: Programa para Hacer Presupuestos
 * Template Post Type: page
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || []; w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            }); var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-NG2ZW6L3');</script>
    <!-- End Google Tag Manager -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <link rel="canonical" href="<?php echo esc_url(home_url('/programa-para-hacer-presupuestos/')); ?>">
    <title>Programa para Hacer Presupuestos para Empresas de Servicios | Cotízalo</title>
    <meta name="description"
        content="Haz presupuestos profesionales desde tu celular, envíalos por WhatsApp y lleva el historial de cada cliente. Ideal para freelancers y pequeñas empresas.">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo esc_url(home_url('/programa-para-hacer-presupuestos/')); ?>">
    <meta property="og:title" content="Programa para Hacer Presupuestos para Empresas de Servicios | Cotízalo">
    <meta property="og:description"
        content="Haz presupuestos profesionales desde tu celular, envíalos por WhatsApp y lleva el historial de cada cliente. Ideal para freelancers y pequeñas empresas.">
    <meta property="og:image"
        content="<?php echo esc_url(get_template_directory_uri()); ?>/assets/assets/og-social.jpg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:locale" content="es_MX">

    <!-- Twitter / X -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Programa para Hacer Presupuestos para Empresas de Servicios | Cotízalo">
    <meta name="twitter:description"
        content="Haz presupuestos profesionales desde tu celular, envíalos por WhatsApp y lleva el historial de cada cliente.">
    <meta name="twitter:image"
        content="<?php echo esc_url(get_template_directory_uri()); ?>/assets/assets/og-social.jpg">

    <!-- Fonts & Favicon -->
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
                "@id": "<?php echo esc_url(home_url('/programa-para-hacer-presupuestos/')); ?>#webpage",
                "url": "<?php echo esc_url(home_url('/programa-para-hacer-presupuestos/')); ?>",
                "name": "Programa para Hacer Presupuestos Profesionales | Cotízalo",
                "description": "Crea presupuestos profesionales en minutos con Cotízalo.",
                "isPartOf": { "@id": "<?php echo esc_url(home_url('/')); ?>#website" },
                "breadcrumb": { "@id": "<?php echo esc_url(home_url('/programa-para-hacer-presupuestos/')); ?>#breadcrumb" },
                "inLanguage": "es-MX"
            },
            {
                "@type": "BreadcrumbList",
                "@id": "<?php echo esc_url(home_url('/programa-para-hacer-presupuestos/')); ?>#breadcrumb",
                "itemListElement": [
                    { "@type": "ListItem", "position": 1, "name": "Inicio", "item": "<?php echo esc_url(home_url('/')); ?>" },
                    { "@type": "ListItem", "position": 2, "name": "Programa para Presupuestos" }
                ]
            },
            {
                "@type": "FAQPage",
                "mainEntity": [
                    {
                        "@type": "Question",
                        "name": "¿Cuál es la diferencia entre una cotización y un presupuesto?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Aunque se usan indistintamente, una cotización es una propuesta de precio que puede cambiar, mientras que un presupuesto suele ser un compromiso más formal de costos. Cotízalo te permite crear ambos con la misma herramienta."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "¿Puedo usar Cotízalo siendo freelancer o trabajador independiente?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Sí, Cotízalo está diseñado especialmente para profesionales independientes, freelancers, consultores y microempresas que necesitan presentar presupuestos de forma rápida y profesional."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "¿Se puede usar en el celular para hacer presupuestos?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Sí. Cotízalo funciona completamente desde el navegador de tu celular. Puedes crear, editar y enviar presupuestos desde donde estés, sin instalar ninguna aplicación."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "¿Cotízalo reemplaza al Excel para hacer presupuestos?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Sí. Cotízalo es la alternativa directa al Excel. A diferencia de una hoja de cálculo, guarda tu catálogo de productos, registra el historial de presupuestos por cliente y genera PDFs profesionales sin fórmulas ni formatos complicados."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "¿Puedo ver si mi cliente revisó el presupuesto?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Sí. Cotízalo notifica cuando el cliente abre el enlace del presupuesto. Así sabes exactamente si lo leyó y puedes hacer seguimiento en el momento adecuado."
                        }
                    }
                ]
            }
        ]
    }
    </script>

    <!-- Master Design System Stylesheet -->
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/assets/css/styles.css">

    <link rel="preload" as="image"
        href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/assets/logos/LOGOTIPO3/Cotizalo-8.png?v=2"
        type="image/png">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NG2ZW6L3" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- Navigation Header -->
    <header id="navbar">
        <div class="container nav-container">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/assets/logos/LOGOTIPO3/Cotizalo-8.png?v=2"
                    alt="Cotízalo Logo" id="brand-logo" width="223" height="60">
            </a>
            <ul class="nav-links">
                <li><a href="<?php echo esc_url(home_url('/que-es-cotizalo/')); ?>" class="nav-item">¿Qué es
                        Cotízalo?</a></li>
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
                        <li><a href="<?php echo esc_url(home_url('/software-para-cotizaciones/')); ?>">Software para
                                cotizaciones</a></li>
                        <li><a href="<?php echo esc_url(home_url('/seguimiento-de-cotizaciones/')); ?>">Seguimiento de
                                cotizaciones</a></li>
                        <li><a href="<?php echo esc_url(home_url('/programa-para-hacer-presupuestos/')); ?>">Programa
                                para presupuestos</a></li>
                        <li><a href="<?php echo esc_url(home_url('/cotizaciones-por-whatsapp/')); ?>">Cotizaciones por
                                WhatsApp</a></li>
                        <li><a href="<?php echo esc_url(home_url('/software-de-cotizaciones-para-constructoras/')); ?>">Para
                                constructoras</a></li>
                        <li><a href="<?php echo esc_url(home_url('/software-de-cotizaciones-para-servicios/')); ?>">Para
                                servicios</a></li>
                    </ul>
                </li>
            </ul>
            <div class="nav-buttons">
                <a href="<?php echo esc_url(get_theme_mod('nav_login_url', 'https://app.cotizalo.net/login')); ?>"
                    class="btn btn-secondary btn-nav"><?php echo esc_html(get_theme_mod('nav_login_text', 'Ingresar')); ?></a>
                <a href="<?php echo esc_url(get_theme_mod('nav_signup_url', 'https://app.cotizalo.net/signup')); ?>"
                    class="btn btn-primary btn-nav"><?php echo esc_html(get_theme_mod('nav_signup_text', 'Empezar Gratis')); ?></a>
            </div>
            <div class="mobile-menu-btn" aria-label="Abrir menú" role="button" tabindex="0">
                <span></span><span></span><span></span>
            </div>
        </div>
    </header>

    <main>
        <!-- Hero Section -->
        <section class="lp-hero">
            <div class="bg-shape bg-shape-1"></div>
            <div class="container relative z-10 animate-on-scroll fade-in-up">
                <h1>Programa para Hacer Presupuestos para Empresas de Servicios</h1>
                <p>Di adiós al Excel y las hojas sueltas. Con Cotízalo generas presupuestos profesionales en minutos,
                    los envías por WhatsApp o correo y sabes cuándo tu cliente los revisó.</p>
                <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
                    <a href="<?php echo esc_url(get_theme_mod('nav_signup_url', 'https://app.cotizalo.net/signup')); ?>"
                        class="btn btn-primary btn-lg">
                        Empieza gratis — 14 días
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2.5">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    </a>
                    <a href="<?php echo esc_url(home_url('/precios/')); ?>" class="btn btn-secondary btn-lg">
                        Ver planes y precios
                    </a>
                </div>
                <p style="margin-top: 1.25rem; font-size: 0.875rem; color: rgba(255,255,255,0.65);">Ideal para
                    freelancers, consultores y empresas de servicios en México.</p>
            </div>
        </section>

        <!-- Benefits Section -->
        <section class="benefits-section">
            <div class="container animate-on-scroll fade-in-up">
                <h2 class="section-title">Todo lo que necesitas para presupuestar</h2>
                <p class="section-subtitle">Diseñado para profesionales independientes y pequeñas empresas de servicios
                    en México.</p>
                <div class="benefits-grid">
                    <div class="benefit-card">
                        <div class="benefit-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z" />
                                <polyline points="13 2 13 9 20 9" />
                            </svg>
                        </div>
                        <h3>Presupuestos en PDF en segundos</h3>
                        <p>Genera propuestas con tu logo, datos fiscales y precios. Descarga el PDF o comparte el enlace
                            directo con tu cliente.</p>
                    </div>
                    <div class="benefit-card">
                        <div class="benefit-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="3" y="3" width="18" height="18" rx="2" />
                                <line x1="3" y1="9" x2="21" y2="9" />
                                <line x1="9" y1="21" x2="9" y2="9" />
                            </svg>
                        </div>
                        <h3>Catálogo de servicios y tarifas</h3>
                        <p>Guarda tus servicios con precios unitarios y descripciones detalladas. Agrégalos a cualquier
                            presupuesto en un clic, sin teclear de más.</p>
                    </div>
                    <div class="benefit-card">
                        <div class="benefit-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="22 12 18 12 15 21 9 3 6 12 2 12" />
                            </svg>
                        </div>
                        <h3>Seguimiento automático de aperturas</h3>
                        <p>Sabe en tiempo real cuándo tu cliente abrió el presupuesto. Recibe notificaciones para actuar
                            en el momento más propicio de cierre.</p>
                    </div>
                    <div class="benefit-card">
                        <div class="benefit-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z" />
                            </svg>
                        </div>
                        <h3>Envío por WhatsApp o correo</h3>
                        <p>Comparte el presupuesto en segundos. Tu prospecto lo recibe en su celular sin instalar
                            ninguna app adicional.</p>
                    </div>
                    <div class="benefit-card">
                        <div class="benefit-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                            </svg>
                        </div>
                        <h3>Firma digital de autorización</h3>
                        <p>Tu cliente aprueba el presupuesto con firma digital interactiva desde el mismo enlace, con
                            sello de fecha y hora legal.</p>
                    </div>
                    <div class="benefit-card">
                        <div class="benefit-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10" />
                                <polyline points="12 6 12 12 16 14" />
                            </svg>
                        </div>
                        <h3>Historial comercial completo</h3>
                        <p>Accede a todos tus presupuestos enviados con su estado (abierto, aceptado, vencido) desde un
                            panel centralizado e intuitivo.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Comparison Section -->
        <section class="comparison-section">
            <div class="container animate-on-scroll fade-in-up">
                <h2 class="section-title">Cotízalo vs. Excel para hacer presupuestos</h2>
                <p class="section-subtitle">Descubre por qué cientos de profesionales ya abandonaron las hojas de
                    cálculo para sus cotizaciones de servicios.</p>
                <div style="overflow-x:auto;">
                    <table class="compare-table">
                        <thead>
                            <tr>
                                <th>Característica</th>
                                <th>Cotízalo</th>
                                <th>Excel / Hoja de cálculo</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Genera PDF profesional con logo</td>
                                <td class="yes">✓ Automático</td>
                                <td class="no">✗ Manual y lento</td>
                            </tr>
                            <tr>
                                <td>Envío por WhatsApp en un clic</td>
                                <td class="yes">✓ Incluido</td>
                                <td class="no">✗ No disponible</td>
                            </tr>
                            <tr>
                                <td>Seguimiento de apertura</td>
                                <td class="yes">✓ Notificación automática</td>
                                <td class="no">✗ No disponible</td>
                            </tr>
                            <tr>
                                <td>Firma digital del cliente</td>
                                <td class="yes">✓ Incluida</td>
                                <td class="no">✗ No disponible</td>
                            </tr>
                            <tr>
                                <td>Catálogo de servicios reutilizable</td>
                                <td class="yes">✓ Con un clic</td>
                                <td class="no">✗ Copiar y pegar</td>
                            </tr>
                            <tr>
                                <td>Historial de clientes y proyectos</td>
                                <td class="yes">✓ Centralizado</td>
                                <td class="no">✗ Archivos dispersos</td>
                            </tr>
                            <tr>
                                <td>Funciona en el celular de forma nativa</td>
                                <td class="yes">✓ 100% responsivo</td>
                                <td class="no">✗ Formato roto en móvil</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        <!-- App Preview Section -->
        <section class="lp-app-preview">
            <div class="container animate-on-scroll fade-in-up">
                <h2 class="section-title">Así se ve Cotízalo por dentro</h2>
                <p class="section-subtitle" style="margin-bottom: 2.5rem;">Una interfaz limpia y profesional para
                    gestionar todas tus cotizaciones desde un solo lugar.</p>
                <div class="app-frame-wrapper">
                    <div class="app-chrome-bar">
                        <div class="chrome-dots">
                            <span class="chrome-dot r"></span>
                            <span class="chrome-dot y"></span>
                            <span class="chrome-dot g"></span>
                        </div>
                        <div class="chrome-url">
                            <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="#64748b"
                                stroke-width="2.5">
                                <rect x="3" y="11" width="18" height="11" rx="2" />
                                <path d="M7 11V7a5 5 0 0 1 10 0v4" />
                            </svg>
                            app.cotizalo.net
                        </div>
                    </div>
                    <svg class="app-svg" viewBox="0 0 880 480" xmlns="http://www.w3.org/2000/svg"
                        style="background:#f8fafc; width: 100%; height: auto; display: block;">
                        <!-- Sidebar -->
                        <rect x="0" y="0" width="200" height="480" fill="#123A2C" />
                        <image
                            href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/assets/logos/ISOTIPO/Cotizalo%20-%20ISOTIPO-8.png"
                            x="14" y="16" height="26" width="26" />
                        <text x="46" y="33" fill="#fff" font-family="-apple-system,sans-serif" font-size="11.5"
                            font-weight="700">Cotízalo</text>
                        <line x1="14" y1="56" x2="186" y2="56" stroke="rgba(255,255,255,0.1)" stroke-width="1" />
                        <!-- Nav items -->
                        <g transform="translate(10,68)"><text x="34" y="14" fill="rgba(255,255,255,0.65)"
                                font-family="sans-serif" font-size="11">Panel de Control</text></g>
                        <g transform="translate(10,102)"><text x="34" y="14" fill="rgba(255,255,255,0.65)"
                                font-family="sans-serif" font-size="11">Métricas</text></g>
                        <!-- Active: Cotizaciones -->
                        <g transform="translate(10,136)">
                            <rect width="180" height="30" rx="6" fill="rgba(74,222,128,0.15)" />
                            <rect x="0" y="0" width="3" height="30" rx="1.5" fill="#4ade80" />
                            <text x="34" y="19" fill="#4ade80" font-family="sans-serif" font-size="11"
                                font-weight="700">Cotizaciones</text>
                        </g>
                        <g transform="translate(10,170)"><text x="34" y="14" fill="rgba(255,255,255,0.65)"
                                font-family="sans-serif" font-size="11">Recibos de Anticipo</text></g>
                        <g transform="translate(10,204)"><text x="34" y="14" fill="rgba(255,255,255,0.65)"
                                font-family="sans-serif" font-size="11">Clientes</text></g>
                        <g transform="translate(10,238)"><text x="34" y="14" fill="rgba(255,255,255,0.65)"
                                font-family="sans-serif" font-size="11">Servicios</text></g>
                        <g transform="translate(10,272)"><text x="34" y="14" fill="rgba(255,255,255,0.65)"
                                font-family="sans-serif" font-size="11">Configuración</text></g>
                        <!-- Main content -->
                        <rect x="216" y="12" width="648" height="456" rx="10" fill="#fff" stroke="#e2e8f0"
                            stroke-width="1" />
                        <!-- Top bar -->
                        <g transform="translate(232,26)">
                            <text x="20" y="19" fill="#0f172a" font-family="sans-serif" font-size="15"
                                font-weight="800">Presupuestos de Servicios</text>
                            <rect x="360" y="0" width="140" height="28" rx="6" fill="#123A2C" />
                            <text x="372" y="18" fill="#fff" font-family="sans-serif" font-size="10" font-weight="700">+
                                Nuevo Presupuesto</text>
                        </g>
                        <!-- Search + filters -->
                        <g transform="translate(232,64)">
                            <rect width="220" height="28" rx="5" fill="#f8fafc" stroke="#cbd5e1" stroke-width="1" />
                            <text x="26" y="18" fill="#94a3b8" font-family="sans-serif" font-size="10">Buscar servicio,
                                cliente...</text>
                        </g>
                        <!-- Table header -->
                        <g transform="translate(232,106)">
                            <rect width="616" height="26" fill="#f8fafc" />
                            <line x1="0" y1="26" x2="616" y2="26" stroke="#e2e8f0" stroke-width="1" />
                            <text x="10" y="17" fill="#475569" font-family="sans-serif" font-size="9"
                                font-weight="700"># FOLIO</text>
                            <text x="110" y="17" fill="#475569" font-family="sans-serif" font-size="9"
                                font-weight="700">FECHA</text>
                            <text x="185" y="17" fill="#475569" font-family="sans-serif" font-size="9"
                                font-weight="700">CLIENTE</text>
                            <text x="380" y="17" fill="#475569" font-family="sans-serif" font-size="9"
                                font-weight="700">TOTAL</text>
                            <text x="460" y="17" fill="#475569" font-family="sans-serif" font-size="9"
                                font-weight="700">ESTADO</text>
                        </g>
                        <!-- Row 1 -->
                        <g transform="translate(232,136)">
                            <line x1="0" y1="42" x2="616" y2="42" stroke="#f1f5f9" stroke-width="1" />
                            <text x="10" y="24" fill="#123A2C" font-family="sans-serif" font-size="11"
                                font-weight="700">#PRE-2026-088</text>
                            <text x="110" y="24" fill="#334155" font-family="sans-serif" font-size="10">21 Sep
                                2026</text>
                            <text x="185" y="18" fill="#0f172a" font-family="sans-serif" font-size="10"
                                font-weight="700">Consultoría Estratégica MX</text>
                            <text x="185" y="30" fill="#64748b" font-family="sans-serif" font-size="8.5">+52 55 5200
                                1122</text>
                            <text x="380" y="24" fill="#0f172a" font-family="sans-serif" font-size="11"
                                font-weight="700">$34,800.00</text>
                            <rect x="460" y="10" width="70" height="20" rx="4" fill="#dcfce7" stroke="#bbf7d0"
                                stroke-width="1" />
                            <text x="468" y="23" fill="#15803d" font-family="sans-serif" font-size="9"
                                font-weight="800">ACEPTADO</text>
                        </g>
                    </svg>
                </div>
            </div>
        </section>

        <!-- FAQ Section -->
        <section class="faq-section">
            <div class="container animate-on-scroll fade-in-up">
                <h2 class="section-title">Todo lo que quieres saber sobre hacer presupuestos</h2>
                <div class="faq-list" style="margin-top: 2.5rem;">
                    <div class="faq-item open">
                        <button class="faq-question" type="button" aria-expanded="true">
                            <span>¿Cuál es la diferencia entre una cotización y un presupuesto?</span>
                            <span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2.5">
                                <polyline points="6 9 12 15 18 9" />
                            </svg></span>
                        </button>
                        <div class="faq-answer">
                            Aunque se usan indistintamente, una cotización es una propuesta de precio que puede cambiar,
                            mientras que un presupuesto suele ser un compromiso más formal de costos. Cotízalo te
                            permite crear ambos con la misma herramienta sin complicaciones.
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-question" type="button" aria-expanded="false">
                            <span>¿Puedo usar Cotízalo siendo freelancer o trabajador independiente?</span>
                            <span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2.5">
                                <polyline points="6 9 12 15 18 9" />
                            </svg></span>
                        </button>
                        <div class="faq-answer">
                            Sí, Cotízalo está diseñado especialmente para profesionales independientes, freelancers,
                            consultores y microempresas que necesitan presentar presupuestos de forma rápida y
                            profesional sin invertir en software costoso.
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-question" type="button" aria-expanded="false">
                            <span>¿Se puede usar en el celular para hacer presupuestos?</span>
                            <span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2.5">
                                <polyline points="6 9 12 15 18 9" />
                            </svg></span>
                        </button>
                        <div class="faq-answer">
                            Sí. Cotízalo funciona completamente desde el navegador de tu celular. Puedes crear, editar y
                            enviar presupuestos desde donde estés, sin instalar ninguna aplicación.
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-question" type="button" aria-expanded="false">
                            <span>¿Cotízalo reemplaza al Excel para hacer presupuestos?</span>
                            <span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2.5">
                                <polyline points="6 9 12 15 18 9" />
                            </svg></span>
                        </button>
                        <div class="faq-answer">
                            Sí. Cotízalo es la alternativa directa al Excel. Guarda tu catálogo de servicios, registra el
                            historial de presupuestos por cliente y genera PDFs profesionales sin fórmulas ni formatos
                            complicados.
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-question" type="button" aria-expanded="false">
                            <span>¿Puedo ver si mi cliente revisó el presupuesto?</span>
                            <span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2.5">
                                <polyline points="6 9 12 15 18 9" />
                            </svg></span>
                        </button>
                        <div class="faq-answer">
                            Sí. Cotízalo notifica cuando el cliente abre el enlace del presupuesto. Así sabes exactamente
                            si lo leyó y puedes hacer seguimiento en el momento adecuado para cerrar la venta.
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="lp-cta">
            <div class="container animate-on-scroll fade-in-up">
                <h2>Empieza a presupuestar de forma profesional hoy</h2>
                <p>14 días gratis. Configura tus tarifas y envía tu primera propuesta en menos de 5 minutos.</p><br>
                <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
                    <a href="<?php echo esc_url(get_theme_mod('nav_signup_url', 'https://app.cotizalo.net/signup')); ?>"
                        class="btn btn-primary btn-lg">
                        Crear mi cuenta gratis
                    </a>
                    <a href="<?php echo esc_url(home_url('/precios/')); ?>" class="btn btn-secondary btn-lg">
                        Ver planes y precios
                    </a>
                </div>
                <div class="related-links" style="margin-top: 2.5rem;">
                    <a href="<?php echo esc_url(home_url('/software-para-cotizaciones/')); ?>">Software para
                        cotizaciones</a>
                    <span>·</span>
                    <a href="<?php echo esc_url(home_url('/precios/')); ?>">Ver planes y precios</a>
                    <span>·</span>
                    <a href="<?php echo esc_url(home_url('/software-de-cotizaciones-para-servicios/')); ?>">Para
                        empresas de servicios</a>
                </div>
            </div>
        </section>
    </main>

    <!-- Global Footer -->
    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-brand">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="logo mb-1">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/assets/logos/LOGOTIPO3/Cotizalo-8.png?v=2"
                            alt="Cotízalo Logo" style="height: 60px; width: auto; object-fit: contain;" id="footer-logo"
                            width="223" height="60">
                    </a>
                    <p class="text-muted mt-1" style="max-width: 320px; font-size: 0.9rem; line-height: 1.6;">
                        <?php echo esc_html(get_theme_mod('footer_brand_text', 'Transformando la forma en que los negocios y contratistas en México cotizan, envían y cierran propuestas.')); ?>
                    </p>
                </div>
                <div class="footer-links">
                    <h4>Producto</h4>
                    <ul>
                        <li><a href="<?php echo esc_url(home_url('/')); ?>#features">Características</a></li>
                        <li><a href="<?php echo esc_url(home_url('/precios/')); ?>">Planes y Precios</a></li>
                    </ul>
                </div>
                <div class="footer-links">
                    <h4>Recursos</h4>
                    <ul>
                        <li><a href="<?php echo esc_url(home_url('/software-para-cotizaciones/')); ?>">Software para
                                cotizaciones</a></li>
                        <li><a href="<?php echo esc_url(home_url('/seguimiento-de-cotizaciones/')); ?>">Seguimiento de
                                cotizaciones</a></li>
                        <li><a href="<?php echo esc_url(home_url('/programa-para-hacer-presupuestos/')); ?>">Programa
                                para presupuestos</a></li>
                        <li><a href="<?php echo esc_url(home_url('/cotizaciones-por-whatsapp/')); ?>">Cotizaciones por
                                WhatsApp</a></li>
                        <li><a href="<?php echo esc_url(home_url('/software-de-cotizaciones-para-constructoras/')); ?>">Para
                                constructoras</a></li>
                        <li><a href="<?php echo esc_url(home_url('/software-de-cotizaciones-para-servicios/')); ?>">Para
                                servicios</a></li>
                    </ul>
                </div>
                <div class="footer-links">
                    <h4>Compañía</h4>
                    <ul>
                        <li><a href="<?php echo esc_url(home_url('/que-es-cotizalo/')); ?>">¿Qué es Cotízalo?</a></li>
                        <li><a href="<?php echo esc_url(home_url('/soporte/')); ?>">Soporte Técnico</a></li>
                        <li><a href="<?php echo esc_url(home_url('/aviso-de-privacidad/')); ?>">Aviso de Privacidad</a>
                        </li>
                        <li><a href="<?php echo esc_url(home_url('/terminos-y-condiciones/')); ?>">Términos y
                                Condiciones</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?> Cotízalo.net — Todos los derechos reservados. Desarrollado con
                    tecnología de PixelZero.mx.</p>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/assets/js/main.js" defer></script>
    <?php wp_footer(); ?>
</body>

</html>