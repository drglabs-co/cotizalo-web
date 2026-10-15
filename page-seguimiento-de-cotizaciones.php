<?php
/**
 * Template Name: Seguimiento de Cotizaciones
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
    <link rel="canonical" href="<?php echo esc_url(home_url('/seguimiento-de-cotizaciones/')); ?>">
    <title>Seguimiento de Cotizaciones para Pequeñas Empresas | Cotízalo</title>
    <meta name="description"
        content="No pierdas ventas por olvidar presupuestos. Organiza cotizaciones pendientes, aceptadas y vencidas, y sabe a quién contactar desde Cotízalo.">

    <!-- Open Graph / Facebook / WhatsApp -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo esc_url(home_url('/seguimiento-de-cotizaciones/')); ?>">
    <meta property="og:title" content="Seguimiento de Cotizaciones para Pequeñas Empresas | Cotízalo">
    <meta property="og:description"
        content="No pierdas ventas por olvidar presupuestos. Organiza cotizaciones pendientes, aceptadas y vencidas, y sabe a quién contactar desde Cotízalo.">
    <meta property="og:image"
        content="<?php echo esc_url(get_template_directory_uri()); ?>/assets/assets/og-social.jpg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:locale" content="es_MX">

    <!-- Twitter / X -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Seguimiento de Cotizaciones para Pequeñas Empresas | Cotízalo">
    <meta name="twitter:description"
        content="No pierdas ventas por olvidar presupuestos. Organiza cotizaciones pendientes, aceptadas y vencidas, y sabe a quién contactar desde Cotízalo.">
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
                    "description": "Planes accesibles desde $199 MXN al mes. Prueba gratuita de 14 días."
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
                            "text": "Muchas cotizaciones se pierden porque nadie registra el siguiente contacto. Un seguimiento oportuno demuestra interés profesional y resuelve objeciones del cliente antes de que busque a otra empresa. Cotízalo centraliza tus propuestas y te ayuda a saber cuáles requieren seguimiento."
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

    <!-- Master Design System Stylesheet -->
    <link rel="stylesheet"
        href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/assets/css/styles.css?v=2.1.0">

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

    <!-- Navigation Bar -->
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
                        <li><a href="<?php echo esc_url(home_url('/seguimiento-de-cotizaciones/')); ?>">Seguimiento de
                                cotizaciones</a></li>
                        <li><a href="<?php echo esc_url(home_url('/software-para-cotizaciones/')); ?>">Software para
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
            <!-- Mobile Menu Toggle -->
            <div class="mobile-menu-btn" role="button" aria-label="Abrir menú de navegación" tabindex="0">
                <span></span><span></span><span></span>
            </div>
        </div>
    </header>

    <main>
        <!-- Hero Section -->
        <section class="lp-hero">
            <div class="bg-shape bg-shape-1"></div>
            <div class="container relative z-10 animate-on-scroll fade-in-up">
                <h1>Sistema de seguimiento de cotizaciones para pequeñas empresas</h1>
                <p>
                    Sabe con certeza a quién llamar hoy. Deja de perder ventas por olvidar presupuestos en chats de
                    WhatsApp o carpetas de Excel. Monitorea cada propuesta desde que la envías hasta que el cliente la
                    aprueba y formaliza su anticipo.
                </p>
                <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
                    <a href="https://app.cotizalo.net/signup" class="btn btn-primary btn-lg">
                        Empieza tu prueba gratuita
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    </a>
                    <a href="<?php echo esc_url(home_url('/precios/')); ?>" class="btn btn-secondary btn-lg">
                        Ver planes y precios
                    </a>
                </div>

                <!-- Pipeline Mockup -->
                <div class="pipeline-wrapper animate-on-scroll fade-in-up delay-100">
                    <div class="pipeline-card">
                        <div class="pipeline-card-header">
                            <div>
                                <span class="pipeline-badge-sub">Tablero de Control de Cotizaciones</span>
                                <h2 class="pipeline-main-title">Pipeline Comercial en Tiempo Real</h2>
                            </div>
                            <div class="pipeline-total-badge">
                                Total cotizado: $184,500 MXN
                            </div>
                        </div>

                        <div class="status-pipeline-steps" id="pipelineSteps">
                            <div class="pipeline-step" data-status="borradores">
                                <div class="pipeline-step-title">Borradores</div>
                                <div class="pipeline-step-count">4</div>
                            </div>
                            <div class="pipeline-step active" data-status="enviadas">
                                <div class="pipeline-step-title">Enviadas</div>
                                <div class="pipeline-step-count">12</div>
                            </div>
                            <div class="pipeline-step" data-status="aceptadas">
                                <div class="pipeline-step-title">Aceptadas</div>
                                <div class="pipeline-step-count">8</div>
                            </div>
                            <div class="pipeline-step" data-status="anticipo">
                                <div class="pipeline-step-title">Con Anticipo</div>
                                <div class="pipeline-step-count">6</div>
                            </div>
                            <div class="pipeline-step" data-status="rechazadas">
                                <div class="pipeline-step-title">Rechazadas</div>
                                <div class="pipeline-step-count">2</div>
                            </div>
                        </div>

                        <div class="pipeline-table-wrapper">
                            <table class="pipeline-table">
                                <thead>
                                    <tr>
                                        <th>Folio</th>
                                        <th>Cliente</th>
                                        <th style="text-align:right;">Monto</th>
                                        <th style="text-align:center;">Estado</th>
                                        <th style="text-align:center;">Acción sugerida</th>
                                    </tr>
                                </thead>
                                <tbody id="pipelineTableBody">
                                    <tr class="pipeline-row" data-status="enviadas">
                                        <td class="col-folio">#COT-1048</td>
                                        <td class="col-client">
                                            <strong>Constructora Alianza del Norte</strong>
                                            <span class="client-meta">Enviada hace 2 días · Visto por el cliente hace 3
                                                horas</span>
                                        </td>
                                        <td class="col-amount">$23,258.00</td>
                                        <td class="col-status" style="text-align:center;">
                                            <span class="status-pill status-sent">
                                                <svg width="12" height="12" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2.5">
                                                    <line x1="22" y1="2" x2="11" y2="13"></line>
                                                    <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                                                </svg>
                                                Enviada
                                            </span>
                                        </td>
                                        <td class="col-action" style="text-align:center;">
                                            <a href="https://wa.me/?text=Hola%2C%20te%20contacto%20sobre%20la%20cotizaci%C3%B3n%20COT-1048"
                                                target="_blank" rel="noopener" class="btn-pipeline-action btn-wa">
                                                <svg width="13" height="13" viewBox="0 0 24 24" fill="currentColor">
                                                    <path
                                                        d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z" />
                                                </svg>
                                                Contactar por WhatsApp
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="pipeline-row" data-status="aceptadas">
                                        <td class="col-folio">#COT-1047</td>
                                        <td class="col-client">
                                            <strong>Despacho García &amp; Asociados</strong>
                                            <span class="client-meta">Aceptada con firma en pantalla · Pendiente
                                                anticipo</span>
                                        </td>
                                        <td class="col-amount">$18,400.00</td>
                                        <td class="col-status" style="text-align:center;">
                                            <span class="status-pill status-accepted">
                                                <svg width="12" height="12" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2.5">
                                                    <polyline points="20 6 9 17 4 12" />
                                                </svg>
                                                Aceptada
                                            </span>
                                        </td>
                                        <td class="col-action" style="text-align:center;">
                                            <button type="button" class="btn-pipeline-action btn-deposit"
                                                onclick="alert('Abriendo registro de anticipo para COT-1047');">
                                                <svg width="13" height="13" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2">
                                                    <rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect>
                                                    <line x1="1" y1="10" x2="23" y2="10"></line>
                                                </svg>
                                                Registrar Anticipo
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="pipeline-row" data-status="anticipo">
                                        <td class="col-folio">#COT-1046</td>
                                        <td class="col-client">
                                            <strong>Grupo Inmobiliario Lumina</strong>
                                            <span class="client-meta">Anticipo 50% ($42,800) liquidado por
                                                transferencia</span>
                                        </td>
                                        <td class="col-amount">$85,600.00</td>
                                        <td class="col-status" style="text-align:center;">
                                            <span class="status-pill status-deposit">
                                                <svg width="12" height="12" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2.5">
                                                    <circle cx="12" cy="12" r="10"></circle>
                                                    <polyline points="12 6 12 12 14 14"></polyline>
                                                </svg>
                                                Con Anticipo
                                            </span>
                                        </td>
                                        <td class="col-action" style="text-align:center;">
                                            <button type="button" class="btn-pipeline-action btn-receipt"
                                                onclick="alert('Generando recibo de anticipo para COT-1046');">
                                                <svg width="13" height="13" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2">
                                                    <path
                                                        d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z">
                                                    </path>
                                                    <polyline points="14 2 14 8 20 8"></polyline>
                                                    <line x1="16" y1="13" x2="8" y2="13"></line>
                                                    <line x1="16" y1="17" x2="8" y2="17"></line>
                                                </svg>
                                                Ver Recibo
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="pipeline-row" data-status="borradores" style="display:none;">
                                        <td class="col-folio">#COT-1049</td>
                                        <td class="col-client">
                                            <strong>Tecnologías Aplicadas Monterrey</strong>
                                            <span class="client-meta">4 conceptos agregados · Guardada como
                                                borrador</span>
                                        </td>
                                        <td class="col-amount">$34,900.00</td>
                                        <td class="col-status" style="text-align:center;">
                                            <span class="status-pill status-draft">
                                                <svg width="12" height="12" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2.5">
                                                    <path
                                                        d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7">
                                                    </path>
                                                    <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z">
                                                    </path>
                                                </svg>
                                                Borrador
                                            </span>
                                        </td>
                                        <td class="col-action" style="text-align:center;">
                                            <button type="button" class="btn-pipeline-action btn-draft"
                                                onclick="alert('Abriendo editor para COT-1049');">
                                                <svg width="13" height="13" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2">
                                                    <line x1="22" y1="2" x2="11" y2="13"></line>
                                                    <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                                                </svg>
                                                Finalizar y Enviar
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="pipeline-row" data-status="rechazadas" style="display:none;">
                                        <td class="col-folio">#COT-1044</td>
                                        <td class="col-client">
                                            <strong>Comercializadora del Centro</strong>
                                            <span class="client-meta">Cliente pospuso proyecto para siguiente
                                                trimestre</span>
                                        </td>
                                        <td class="col-amount">$12,300.00</td>
                                        <td class="col-status" style="text-align:center;">
                                            <span class="status-pill status-declined">
                                                <svg width="12" height="12" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2.5">
                                                    <circle cx="12" cy="12" r="10"></circle>
                                                    <line x1="15" y1="9" x2="9" y2="15"></line>
                                                    <line x1="9" y1="9" x2="15" y2="15"></line>
                                                </svg>
                                                Pospuesta
                                            </span>
                                        </td>
                                        <td class="col-action" style="text-align:center;">
                                            <button type="button" class="btn-pipeline-action btn-reopen"
                                                onclick="alert('Reactivando propuesta COT-1044');">
                                                <svg width="13" height="13" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2">
                                                    <polyline points="1 4 1 10 7 10"></polyline>
                                                    <path d="M3.51 15a9 9 0 1 0 2.13-9.36L1 10"></path>
                                                </svg>
                                                Reactivar
                                            </button>
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
        <section class="benefits-section">
            <div class="container animate-on-scroll fade-in-up">
                <h2 class="section-title">El costo oculto de no dar seguimiento comercial</h2>
                <p class="section-subtitle">
                    Enviar una cotización y esperar a que el cliente regrese por su cuenta es el error más común de los
                    pequeños negocios.
                </p>
                <div class="cards-grid-3">
                    <div class="benefit-card">
                        <div class="benefit-icon">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10"></circle>
                                <line x1="12" y1="8" x2="12" y2="12"></line>
                                <line x1="12" y1="16" x2="12.01" y2="16"></line>
                            </svg>
                        </div>
                        <h3>Las propuestas sin seguimiento se pierden</h3>
                        <p>Los dueños de negocio están ocupados operando y no tienen tiempo de revisar cuadernos o chats
                            de WhatsApp para recordar qué prospectos no han contestado.</p>
                    </div>
                    <div class="benefit-card">
                        <div class="benefit-icon">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10"></circle>
                                <polyline points="12 6 12 12 16 14"></polyline>
                            </svg>
                        </div>
                        <h3>Tus prospectos se enfrían</h3>
                        <p>Cuando un cliente pide 3 cotizaciones, casi siempre le compra a la primera empresa que le da
                            seguimiento formal y resuelve sus dudas técnicas.</p>
                    </div>
                    <div class="benefit-card">
                        <div class="benefit-icon">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                            </svg>
                        </div>
                        <h3>Descontrol en el flujo de caja</h3>
                        <p>Si no sabes qué cotizaciones están por cerrarse este mes, es imposible proyectar compras de
                            material, contratación de personal o anticipos de cobranza.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 2: 3 Plantillas de WhatsApp para seguimiento -->
        <section class="flow-section">
            <div class="container animate-on-scroll fade-in-up">
                <h2 class="section-title">Cómo dar seguimiento a una cotización sin parecer insistente</h2>
                <p class="section-subtitle">
                    Utiliza estas 3 plantillas probadas para reactivar conversaciones de venta por WhatsApp con
                    educación, profesionalismo y enfoque en servicio.
                </p>
                <div class="cards-grid-3">
                    <div class="script-card">
                        <div class="script-header">
                            <span class="script-icon">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                    <circle cx="12" cy="13" r="8"></circle>
                                    <path d="M12 9v4l2 2M9 2h6"></path>
                                </svg>
                            </span>
                            <h3>A las 48 horas del envío</h3>
                        </div>
                        <div class="script-body" id="script1">
                            "Hola [Nombre], buen día. Espero que te encuentres muy bien. Te escribo brevemente para
                            confirmar que hayas podido revisar la propuesta [Folio] que te enviamos el [Día]. Quedo a
                            tus órdenes si tienes alguna duda con las partidas o tiempos de entrega."
                        </div>
                        <button type="button" class="btn-copy-script" onclick="copyScript(this, 'script1')">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect>
                                <path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path>
                            </svg>
                            Copiar plantilla
                        </button>
                    </div>
                    <div class="script-card">
                        <div class="script-header">
                            <span class="script-icon">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                    <rect x="3" y="4" width="18" height="18" rx="2"></rect>
                                    <path d="M16 2v4M8 2v4M3 10h18"></path>
                                </svg>
                            </span>
                            <h3>Antes del vencimiento de vigencia</h3>
                        </div>
                        <div class="script-body" id="script2">
                            "Hola [Nombre], un gusto saludarte. Te contacto porque los precios y disponibilidad de la
                            cotización [Folio] tienen vigencia hasta este [Día]. Si estás listo para arrancar, avísame
                            para apartar tu fecha en calendario y congelar los costos."
                        </div>
                        <button type="button" class="btn-copy-script" onclick="copyScript(this, 'script2')">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect>
                                <path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path>
                            </svg>
                            Copiar plantilla
                        </button>
                    </div>
                    <div class="script-card">
                        <div class="script-header">
                            <span class="script-icon">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                    <circle cx="12" cy="12" r="9"></circle>
                                    <circle cx="12" cy="12" r="5"></circle>
                                    <circle cx="12" cy="12" r="1"></circle>
                                </svg>
                            </span>
                            <h3>Para clientes en silencio</h3>
                        </div>
                        <div class="script-body" id="script3">
                            "Hola [Nombre], ¿cómo va todo? Imagino que has estado con bastante trabajo. Solo quería
                            saber si el proyecto sigue en pie para este mes o si prefieres que ajustemos las partidas
                            para adaptarnos mejor a lo que necesitan hoy."
                        </div>
                        <button type="button" class="btn-copy-script" onclick="copyScript(this, 'script3')">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect>
                                <path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path>
                            </svg>
                            Copiar plantilla
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 3: FAQ -->
        <section class="faq-section">
            <div class="container animate-on-scroll fade-in-up">
                <h2 class="section-title">Preguntas frecuentes sobre el seguimiento comercial</h2>
                <div class="faq-list" style="margin-top: 2.5rem;">
                    <div class="faq-item open">
                        <button class="faq-question" type="button" aria-expanded="true">
                            <span>¿Por qué es tan importante dar seguimiento a una cotización?</span>
                            <span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2.5">
                                <polyline points="6 9 12 15 18 9" />
                            </svg></span>
                        </button>
                        <div class="faq-answer">
                            Muchas cotizaciones se pierden porque nadie registra el siguiente contacto. Un seguimiento
                            oportuno demuestra interés profesional y resuelve objeciones del cliente antes de que busque
                            a otra empresa. Cotízalo centraliza tus propuestas y te ayuda a saber cuáles requieren
                            seguimiento.
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-question" type="button" aria-expanded="false">
                            <span>¿Cómo me ayuda Cotízalo a saber a qué clientes contactar?</span>
                            <span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2.5">
                                <polyline points="6 9 12 15 18 9" />
                            </svg></span>
                        </button>
                        <div class="faq-answer">
                            Cotízalo clasifica tus cotizaciones automáticamente en un tablero visual. Puedes filtrar con
                            un solo clic todas las cotizaciones con estado 'Enviada' que están próximas a vencer o que
                            llevan más de 48 horas sin respuesta.
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-question" type="button" aria-expanded="false">
                            <span>¿Puedo enviar mensajes de seguimiento directo por WhatsApp?</span>
                            <span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2.5">
                                <polyline points="6 9 12 15 18 9" />
                            </svg></span>
                        </button>
                        <div class="faq-answer">
                            Sí. Cotízalo incluye botones de WhatsApp que generan mensajes listos con el folio, nombre del
                            cliente y enlace a la propuesta, facilitando el contacto sin necesidad de redactar textos
                            desde cero.
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-question" type="button" aria-expanded="false">
                            <span>¿Qué pasa cuando un cliente acepta mi cotización?</span>
                            <span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2.5">
                                <polyline points="6 9 12 15 18 9" />
                            </svg></span>
                        </button>
                        <div class="faq-answer">
                            Cambias el estatus a 'Aceptada' en un clic. A partir de ahí puedes generar el recibo de
                            anticipo correspondiente, registrar pagos parciales y pasar la propuesta a tu orden de
                            trabajo o facturación.
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Final CTA -->
        <section class="lp-cta">
            <div class="container animate-on-scroll fade-in-up">
                <h2>Comienza a dar seguimiento profesional a tus ventas</h2>
                <p>
                    Deja atrás los presupuestos olvidados y multiplica tu tasa de cierre con Cotízalo. Configura tu
                    cuenta en 2 minutos.
                </p>
                <br>
                <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
                    <a href="https://app.cotizalo.net/signup" class="btn btn-primary btn-lg">
                        Empieza tu prueba gratis de 14 días
                    </a>
                    <a href="<?php echo esc_url(home_url('/precios/')); ?>" class="btn btn-secondary btn-lg">
                        Ver planes y precios
                    </a>
                </div>
                <div class="related-links" style="margin-top: 2.5rem;">
                    <a href="<?php echo esc_url(home_url('/software-para-cotizaciones/')); ?>">Software para
                        cotizaciones</a>
                    <span>·</span>
                    <a href="<?php echo esc_url(home_url('/cotizaciones-por-whatsapp/')); ?>">Cotizaciones por
                        WhatsApp</a>
                    <span>·</span>
                    <a href="<?php echo esc_url(home_url('/programa-para-hacer-presupuestos/')); ?>">Programa para
                        presupuestos</a>
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
    <script>
        function copyScript(btn, elementId) {
            const textEl = document.getElementById(elementId);
            if (!textEl) return;
            const text = textEl.textContent.trim().replace(/^"|"$/g, '');
            navigator.clipboard.writeText(text).then(function () {
                const origText = btn.innerHTML;
                btn.innerHTML = '✓ ¡Copiado!';
                setTimeout(function () {
                    btn.innerHTML = origText;
                }, 2000);
            }).catch(function () {
                alert('Por favor copia el texto manualmente.');
            });
        }
    </script>
    <?php wp_footer(); ?>
</body>

</html>