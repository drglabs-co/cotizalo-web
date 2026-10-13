<?php
/**
 * Template Name: Cotizaciones por WhatsApp
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
    <link rel="canonical" href="<?php echo esc_url(home_url('/cotizaciones-por-whatsapp/')); ?>">
    <title>Cotizaciones por WhatsApp: Crea, Envía y Da Seguimiento | Cotízalo</title>
    <meta name="description"
        content="Envía cotizaciones profesionales por WhatsApp, recibe avisos cuando las abran y permite que tus clientes acepten y paguen anticipos desde el celular.">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo esc_url(home_url('/cotizaciones-por-whatsapp/')); ?>">
    <meta property="og:title" content="Cotizaciones por WhatsApp: Crea, Envía y Da Seguimiento | Cotízalo">
    <meta property="og:description"
        content="Envía cotizaciones profesionales por WhatsApp, recibe avisos cuando las abran y permite que tus clientes acepten y paguen anticipos desde el celular.">
    <meta property="og:image"
        content="<?php echo esc_url(get_template_directory_uri()); ?>/assets/assets/og-social.jpg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:locale" content="es_MX">

    <!-- Twitter / X -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Cotizaciones por WhatsApp: Crea, Envía y Da Seguimiento | Cotízalo">
    <meta name="twitter:description"
        content="Envía cotizaciones profesionales por WhatsApp, recibe avisos cuando las abran y permite que tus clientes acepten y paguen anticipos desde el celular.">
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
                "@id": "<?php echo esc_url(home_url('/cotizaciones-por-whatsapp/')); ?>#webpage",
                "url": "<?php echo esc_url(home_url('/cotizaciones-por-whatsapp/')); ?>",
                "name": "Envía Cotizaciones por WhatsApp en Segundos | Cotízalo",
                "description": "Crea una cotización profesional y compártela por WhatsApp en un clic.",
                "isPartOf": { "@id": "<?php echo esc_url(home_url('/')); ?>#website" },
                "breadcrumb": { "@id": "<?php echo esc_url(home_url('/cotizaciones-por-whatsapp/')); ?>#breadcrumb" },
                "inLanguage": "es-MX"
            },
            {
                "@type": "BreadcrumbList",
                "@id": "<?php echo esc_url(home_url('/cotizaciones-por-whatsapp/')); ?>#breadcrumb",
                "itemListElement": [
                    { "@type": "ListItem", "position": 1, "name": "Inicio", "item": "<?php echo esc_url(home_url('/')); ?>" },
                    { "@type": "ListItem", "position": 2, "name": "Cotizaciones por WhatsApp" }
                ]
            },
            {
                "@type": "FAQPage",
                "mainEntity": [
                    {
                        "@type": "Question",
                        "name": "¿Cómo se envía una cotización por WhatsApp con Cotízalo?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Creas la cotización en Cotízalo, copias el enlace generado o descargas el PDF, y lo pegas en tu chat de WhatsApp. Tu cliente lo abre desde su celular sin instalar ninguna aplicación."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "¿Mi cliente puede firmar la cotización que recibe por WhatsApp?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Sí. El enlace que compartes lleva a tu cliente a una vista interactiva donde puede revisar la cotización, aceptarla con firma digital y hasta pagar un anticipo, todo desde el celular."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "¿Necesito que mi cliente instale alguna app para ver la cotización?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "No. El enlace abre directamente en el navegador del celular de tu cliente. No necesita crear cuenta ni instalar nada."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "¿Sé cuando mi cliente abre la cotización enviada por WhatsApp?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Sí. Cotízalo registra cuándo el cliente abre el enlace y te notifica automáticamente. Así sabes en qué momento hacer seguimiento para cerrar la venta."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "¿Puedo enviar la cotización también por correo electrónico?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Sí. Cotízalo permite compartir la cotización por WhatsApp, correo electrónico o copiando el enlace directo. Tú eliges el canal más conveniente para cada cliente."
                        }
                    }
                ]
            }
        ]
    }
    </script>

    <!-- Master Design System Stylesheet -->
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/assets/css/styles.css?v=1.0.8">

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

    <!-- Navigation Header -->
    <header id="navbar">
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
                        <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
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
            <div class="mobile-menu-btn" aria-label="Abrir menú" role="button" tabindex="0">
                <span></span><span></span><span></span>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <main>
        <section class="lp-hero">
            <div class="bg-shape bg-shape-1"></div>
            <div class="container relative z-10 animate-on-scroll fade-in-up">
                <h1>Cómo Enviar Cotizaciones Profesionales por WhatsApp</h1>
                <p>Crea la cotización en Cotízalo y compártela por WhatsApp en segundos. Tu cliente la ve desde su celular, puede aceptarla con firma digital y pagar un anticipo, todo sin instalar ninguna app.</p>
                <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
                    <a href="<?php echo esc_url(get_theme_mod('nav_signup_url', 'https://app.cotizalo.net/signup')); ?>"
                        class="btn btn-primary btn-lg">
                        Empieza gratis — 14 días
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    </a>
                    <a href="<?php echo esc_url(home_url('/precios/')); ?>" class="btn btn-secondary btn-lg">
                        Ver Planes y Tarifas
                    </a>
                </div>
                <p style="margin-top: 1.25rem; font-size: 0.875rem; color: rgba(255,255,255,0.65);">Sin comisiones ocultas. Sin contratos forzosos. Cancela cuando quieras.</p>
            </div>
        </section>

        <!-- Flow Section -->
        <section class="flow-section">
            <div class="container">
                <div class="section-header animate-on-scroll">
                    <h2 class="section-title">Cómo funciona enviar cotizaciones por WhatsApp</h2>
                    <p class="section-subtitle">De la cotización al cierre de la venta, en tres pasos simples y estructurados.</p>
                </div>
                <div class="flow-steps animate-on-scroll">
                    <div class="flow-step">
                        <div class="flow-step-top">
                            <span class="flow-step-number">01</span>
                            <div class="flow-step-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z" />
                                    <polyline points="13 2 13 9 20 9" />
                                </svg>
                            </div>
                        </div>
                        <h3>Crea tu cotización</h3>
                        <p>Agrega tus productos o servicios desde tu catálogo, personaliza precios unitarios y escribe una nota personalizada para tu cliente. Lista en menos de 2 minutos.</p>
                    </div>
                    <div class="flow-step">
                        <div class="flow-step-top">
                            <span class="flow-step-number">02</span>
                            <div class="flow-step-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z" />
                                </svg>
                            </div>
                        </div>
                        <h3>Comparte por WhatsApp</h3>
                        <p>Copia el enlace inteligente o descarga el PDF oficial y envíalo por WhatsApp. Tu cliente lo recibe al instante y puede visualizarlo con un solo tap.</p>
                    </div>
                    <div class="flow-step">
                        <div class="flow-step-top">
                            <span class="flow-step-number">03</span>
                            <div class="flow-step-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12" />
                                </svg>
                            </div>
                        </div>
                        <h3>Cierra la venta con anticipo</h3>
                        <p>Recibes un aviso en tiempo real cuando tu cliente abre la propuesta. Puede firmarla digitalmente y transferir su anticipo sin salir de su celular.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Benefits Section -->
        <section class="benefits-section">
            <div class="container animate-on-scroll fade-in-up">
                <h2 class="section-title">Por qué es superior a una foto o un mensaje de texto</h2>
                <p class="section-subtitle">Una cotización interactiva enviada por WhatsApp transmite máxima seriedad, agiliza la toma de decisión y facilita el seguimiento.</p>
                <div class="benefits-grid">
                    <div class="benefit-card">
                        <div class="benefit-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                            </svg>
                        </div>
                        <h3>Aspecto 100% profesional</h3>
                        <p>Tu cotización llega como un documento pulcro con tu logo, datos fiscales, desglose de IVA y condiciones comerciales, no como una nota informal.</p>
                    </div>
                    <div class="benefit-card">
                        <div class="benefit-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="22 12 18 12 15 21 9 3 6 12 2 12" />
                            </svg>
                        </div>
                        <h3>Notificación cuando la abren</h3>
                        <p>Sabes con precisión el minuto en que tu cliente abrió la cotización. Esto te permite llamarle o escribirle en el momento más receptivo para el cierre.</p>
                    </div>
                    <div class="benefit-card">
                        <div class="benefit-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                                <circle cx="9" cy="7" r="4" />
                                <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                                <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                            </svg>
                        </div>
                        <h3>El cliente no instala nada</h3>
                        <p>El enlace interactivo abre al instante en el navegador nativo del smartphone (Safari, Chrome). Tu prospecto revisa y autoriza sin contraseñas ni registros.</p>
                    </div>
                    <div class="benefit-card">
                        <div class="benefit-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
                                <polyline points="14 2 14 8 20 8" />
                                <line x1="16" y1="13" x2="8" y2="13" />
                                <line x1="16" y1="17" x2="8" y2="17" />
                                <polyline points="10 9 9 9 8 9" />
                            </svg>
                        </div>
                        <h3>Firma digital integrada</h3>
                        <p>Tu cliente puede firmar la propuesta directamente en la pantalla de su teléfono. Queda sellada con fecha, hora y validez de aceptación comercial.</p>
                    </div>
                    <div class="benefit-card">
                        <div class="benefit-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="1" y="4" width="22" height="16" rx="2" ry="2" />
                                <line x1="1" y1="10" x2="23" y2="10" />
                            </svg>
                        </div>
                        <h3>Cobro de anticipo en línea</h3>
                        <p>Muestra tus datos SPEI con botón de copiado de CLABE o botón de pago en línea para cobrar el anticipo acordado antes de invertir en insumos o comenzar el servicio.</p>
                    </div>
                    <div class="benefit-card">
                        <div class="benefit-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10"></circle>
                                <polyline points="12 6 12 12 16 14"></polyline>
                            </svg>
                        </div>
                        <h3>Historial y control comercial</h3>
                        <p>Todas las propuestas emitidas quedan sincronizadas en tu panel de control. Filtra por estado de cobranza y no vuelvas a perder un presupuesto en chats dispersos.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- App Preview Section -->
        <section class="lp-app-preview">
            <div class="container animate-on-scroll fade-in-up">
                <h2 class="section-title">Así se ve Cotízalo por dentro</h2>
                <p class="section-subtitle" style="margin-bottom: 2.5rem;">Una consola ágil y profesional para gobernar todas tus cotizaciones desde cualquier dispositivo.</p>
                <div class="app-frame-wrapper">
                    <div class="app-chrome-bar">
                        <div class="chrome-dots">
                            <span class="chrome-dot r"></span>
                            <span class="chrome-dot y"></span>
                            <span class="chrome-dot g"></span>
                        </div>
                        <div class="chrome-url">
                            <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="#64748b" stroke-width="2.5">
                                <rect x="3" y="11" width="18" height="11" rx="2" />
                                <path d="M7 11V7a5 5 0 0 1 10 0v4" />
                            </svg>
                            app.cotizalo.net
                        </div>
                    </div>
                    <svg class="app-svg" viewBox="0 0 880 480" xmlns="http://www.w3.org/2000/svg" style="background:#f8fafc; width: 100%; height: auto; display: block;">
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
                                font-family="sans-serif" font-size="11">Productos</text></g>
                        <g transform="translate(10,272)"><text x="34" y="14" fill="rgba(255,255,255,0.65)"
                                font-family="sans-serif" font-size="11">Configuración</text></g>
                        <!-- Main content -->
                        <rect x="216" y="12" width="648" height="456" rx="10" fill="#fff" stroke="#e2e8f0"
                            stroke-width="1" />
                        <!-- Top bar -->
                        <g transform="translate(232,26)">
                            <text x="20" y="19" fill="#0f172a" font-family="sans-serif" font-size="15"
                                font-weight="800">Cotizaciones</text>
                            <rect x="360" y="0" width="140" height="28" rx="6" fill="#123A2C" />
                            <text x="372" y="18" fill="#fff" font-family="sans-serif" font-size="10" font-weight="700">+
                                Crear Nueva Cotización</text>
                        </g>
                        <!-- Search + filters -->
                        <g transform="translate(232,64)">
                            <rect width="220" height="28" rx="5" fill="#f8fafc" stroke="#cbd5e1" stroke-width="1" />
                            <text x="26" y="18" fill="#94a3b8" font-family="sans-serif" font-size="10">Buscar por folio, cliente...</text>
                        </g>
                        <!-- Table header -->
                        <g transform="translate(232,106)">
                            <rect width="616" height="26" fill="#f8fafc" />
                            <line x1="0" y1="26" x2="616" y2="26" stroke="#e2e8f0" stroke-width="1" />
                            <text x="10" y="17" fill="#475569" font-family="sans-serif" font-size="9" font-weight="700"># FOLIO</text>
                            <text x="110" y="17" fill="#475569" font-family="sans-serif" font-size="9" font-weight="700">FECHA</text>
                            <text x="185" y="17" fill="#475569" font-family="sans-serif" font-size="9" font-weight="700">CLIENTE</text>
                            <text x="380" y="17" fill="#475569" font-family="sans-serif" font-size="9" font-weight="700">TOTAL</text>
                            <text x="460" y="17" fill="#475569" font-family="sans-serif" font-size="9" font-weight="700">ESTADO</text>
                        </g>
                        <!-- Row 1 -->
                        <g transform="translate(232,136)">
                            <line x1="0" y1="42" x2="616" y2="42" stroke="#f1f5f9" stroke-width="1" />
                            <text x="10" y="24" fill="#123A2C" font-family="sans-serif" font-size="11" font-weight="700">#COT-2026-042</text>
                            <text x="110" y="24" fill="#334155" font-family="sans-serif" font-size="10">20 Sep 2026</text>
                            <text x="185" y="18" fill="#0f172a" font-family="sans-serif" font-size="10" font-weight="700">Constructora Alpha S.A.</text>
                            <text x="185" y="30" fill="#64748b" font-family="sans-serif" font-size="8.5">+52 55 4123 8900</text>
                            <text x="380" y="24" fill="#0f172a" font-family="sans-serif" font-size="11" font-weight="700">$48,500.00</text>
                            <rect x="460" y="10" width="70" height="20" rx="4" fill="#dcfce7" stroke="#bbf7d0" stroke-width="1" />
                            <text x="468" y="23" fill="#15803d" font-family="sans-serif" font-size="9" font-weight="800">ACEPTADA</text>
                        </g>
                        <!-- Row 2 -->
                        <g transform="translate(232,182)">
                            <line x1="0" y1="42" x2="616" y2="42" stroke="#f1f5f9" stroke-width="1" />
                            <text x="10" y="24" fill="#123A2C" font-family="sans-serif" font-size="11" font-weight="700">#COT-2026-041</text>
                            <text x="110" y="24" fill="#334155" font-family="sans-serif" font-size="10">18 Sep 2026</text>
                            <text x="185" y="18" fill="#0f172a" font-family="sans-serif" font-size="10" font-weight="700">Agencia de Diseño Creativo</text>
                            <text x="185" y="30" fill="#64748b" font-family="sans-serif" font-size="8.5">+52 81 8345 6789</text>
                            <text x="380" y="24" fill="#0f172a" font-family="sans-serif" font-size="11" font-weight="700">$12,800.00</text>
                            <rect x="460" y="10" width="70" height="20" rx="4" fill="#fef9c3" stroke="#fde047" stroke-width="1" />
                            <text x="467" y="23" fill="#854d0e" font-family="sans-serif" font-size="9" font-weight="800">PENDIENTE</text>
                        </g>
                        <!-- Row 3 -->
                        <g transform="translate(232,228)">
                            <line x1="0" y1="42" x2="616" y2="42" stroke="#f1f5f9" stroke-width="1" />
                            <text x="10" y="24" fill="#123A2C" font-family="sans-serif" font-size="11" font-weight="700">#COT-2026-040</text>
                            <text x="110" y="24" fill="#334155" font-family="sans-serif" font-size="10">16 Sep 2026</text>
                            <text x="185" y="18" fill="#0f172a" font-family="sans-serif" font-size="10" font-weight="700">Servicios Industriales Norte</text>
                            <text x="185" y="30" fill="#64748b" font-family="sans-serif" font-size="8.5">+52 33 3612 4578</text>
                            <text x="380" y="24" fill="#0f172a" font-family="sans-serif" font-size="11" font-weight="700">$95,600.00</text>
                            <rect x="460" y="10" width="70" height="20" rx="4" fill="#dbeafe" stroke="#bfdbfe" stroke-width="1" />
                            <text x="469" y="23" fill="#1d4ed8" font-family="sans-serif" font-size="9" font-weight="800">PAGADA</text>
                        </g>
                    </svg>
                </div>
            </div>
        </section>

        <!-- FAQ Section -->
        <section class="faq-section" style="padding: 5.5rem 0; background: #FFFFFF;">
            <div class="container animate-on-scroll fade-in-up">
                <h2 class="section-title">Todo sobre cotizaciones por WhatsApp</h2>
                <div class="faq-list" style="margin-top: 2.5rem;">
                    <details class="faq-item">
                        <summary>¿Cómo se envía una cotización por WhatsApp con Cotízalo?</summary>
                        <p>Creas la cotización en Cotízalo, copias el enlace generado o descargas el PDF, y lo pegas en tu chat de WhatsApp. Tu cliente lo abre desde su celular sin instalar ninguna aplicación.</p>
                    </details>
                    <details class="faq-item">
                        <summary>¿Mi cliente puede firmar la cotización que recibe por WhatsApp?</summary>
                        <p>Sí. El enlace que compartes lleva a tu cliente a una vista interactiva donde puede revisar la cotización, aceptarla con firma digital y hasta pagar un anticipo, todo desde el celular.</p>
                    </details>
                    <details class="faq-item">
                        <summary>¿Necesito que mi cliente instale alguna app para ver la cotización?</summary>
                        <p>No. El enlace abre directamente en el navegador del celular de tu cliente. No necesita crear cuenta ni instalar nada. Solo abre el enlace y ya puede ver el documento completo.</p>
                    </details>
                    <details class="faq-item">
                        <summary>¿Sé cuándo mi cliente abre la cotización enviada por WhatsApp?</summary>
                        <p>Sí. Cotízalo registra cuándo el cliente abre el enlace y te notifica automáticamente. Así sabes en qué momento hacer seguimiento para cerrar la venta sin parecer invasivo.</p>
                    </details>
                    <details class="faq-item">
                        <summary>¿Puedo enviar la cotización también por correo electrónico?</summary>
                        <p>Sí. Cotízalo permite compartir la cotización por WhatsApp, correo electrónico o copiando el enlace directo. Tú eliges el canal más conveniente para cada cliente en cada situación.</p>
                    </details>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="lp-cta">
            <div class="container animate-on-scroll fade-in-up">
                <h2>Empieza a cotizar por WhatsApp de forma profesional</h2>
                <p>14 días gratis. Envía tu primera propuesta interactiva en menos de 5 minutos y moderniza tus ventas hoy mismo.</p>
                <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
                    <a href="<?php echo esc_url(get_theme_mod('nav_signup_url', 'https://app.cotizalo.net/signup')); ?>"
                        class="btn btn-primary btn-lg">
                        Crear mi cuenta gratis
                    </a>
                    <a href="<?php echo esc_url(home_url('/precios/')); ?>" class="btn btn-secondary btn-lg">
                        Conocer Planes
                    </a>
                </div>
                <div class="related-links" style="margin-top: 2.5rem;">
                    <a href="<?php echo esc_url(home_url('/software-para-cotizaciones/')); ?>">Software para cotizaciones</a>
                    <span>·</span>
                    <a href="<?php echo esc_url(home_url('/precios/')); ?>">Ver planes y precios</a>
                    <span>·</span>
                    <a href="<?php echo esc_url(home_url('/programa-para-hacer-presupuestos/')); ?>">Programa para presupuestos</a>
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
                        <li><a href="<?php echo esc_url(home_url('/software-para-cotizaciones/')); ?>">Software para cotizaciones</a></li>
                        <li><a href="<?php echo esc_url(home_url('/seguimiento-de-cotizaciones/')); ?>">Seguimiento de cotizaciones</a></li>
                        <li><a href="<?php echo esc_url(home_url('/programa-para-hacer-presupuestos/')); ?>">Programa para presupuestos</a></li>
                        <li><a href="<?php echo esc_url(home_url('/cotizaciones-por-whatsapp/')); ?>">Cotizaciones por WhatsApp</a></li>
                        <li><a href="<?php echo esc_url(home_url('/software-de-cotizaciones-para-constructoras/')); ?>">Para constructoras</a></li>
                        <li><a href="<?php echo esc_url(home_url('/software-de-cotizaciones-para-servicios/')); ?>">Para servicios</a></li>
                    </ul>
                </div>
                <div class="footer-links">
                    <h4>Compañía</h4>
                    <ul>
                        <li><a href="<?php echo esc_url(home_url('/que-es-cotizalo/')); ?>">¿Qué es Cotízalo?</a></li>
                        <li><a href="<?php echo esc_url(home_url('/soporte/')); ?>">Soporte Técnico</a></li>
                        <li><a href="<?php echo esc_url(home_url('/aviso-de-privacidad/')); ?>">Aviso de Privacidad</a></li>
                        <li><a href="<?php echo esc_url(home_url('/terminos-y-condiciones/')); ?>">Términos y Condiciones</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?> Cotízalo.net — Todos los derechos reservados. Desarrollado con tecnología de DrG Labs Co.</p>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/assets/js/main.js" defer></script>
    <?php wp_footer(); ?>
</body>

</html>