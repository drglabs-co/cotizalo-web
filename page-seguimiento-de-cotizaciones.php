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
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NG2ZW6L3');</script>
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
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/assets/css/styles.css">

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

    <!-- Navigation Bar -->
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
                        <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                    </button>
                    <ul class="nav-dropdown-menu">
                        <li><a href="<?php echo esc_url(home_url('/seguimiento-de-cotizaciones/')); ?>">Seguimiento de cotizaciones</a></li>
                        <li><a href="<?php echo esc_url(home_url('/software-para-cotizaciones/')); ?>">Software para cotizaciones</a></li>
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
                    Sabe con certeza a quién llamar hoy. Deja de perder ventas por olvidar presupuestos en chats de WhatsApp o carpetas de Excel. Monitorea cada propuesta desde que la envías hasta que el cliente la aprueba y formaliza su anticipo.
                </p>
                <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
                    <a href="https://app.cotizalo.net/signup" class="btn btn-primary btn-lg">
                        Empieza tu prueba gratuita
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
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
                        <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:18px; flex-wrap:wrap; gap:10px;">
                            <div>
                                <span style="font-size:0.75rem; color:#64748b; font-weight:700; text-transform:uppercase; letter-spacing:0.05em;">Tablero de Control de Cotizaciones</span>
                                <h2 style="font-size:1.15rem; font-weight:800; color:var(--c-tech-black); margin:2px 0 0;">Pipeline Comercial en Tiempo Real</h2>
                            </div>
                            <div style="font-size:0.8rem; color:#065F46; background:#ECFDF5; font-weight:700; padding:4px 10px; border-radius:8px;">
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
                            <table style="width:100%; border-collapse:collapse; font-size:0.85rem;">
                                <thead>
                                    <tr style="border-bottom:1px solid #e2e8f0; background:#f1f5f9; color:#475569; font-weight:700;">
                                        <th style="padding:10px 12px; text-align:left;">Folio</th>
                                        <th style="padding:10px 12px; text-align:left;">Cliente</th>
                                        <th style="padding:10px 12px; text-align:right;">Monto</th>
                                        <th style="padding:10px 12px; text-align:center;">Estado</th>
                                        <th style="padding:10px 12px; text-align:center;">Acción sugerida</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr style="border-bottom:1px solid #f1f5f9;">
                                        <td style="padding:12px 12px; font-weight:700; color:var(--c-primary);">#COT-1048</td>
                                        <td style="padding:12px 12px; font-weight:600; color:#1e293b;">Constructora Alianza del Norte</td>
                                        <td style="padding:12px 12px; text-align:right; font-weight:700;">$23,258.00</td>
                                        <td style="padding:12px 12px; text-align:center;">
                                            <span style="background:#eff6ff; color:#2563eb; font-weight:700; padding:3px 8px; border-radius:4px; font-size:0.75rem;">Enviada</span>
                                        </td>
                                        <td style="padding:12px 12px; text-align:center;">
                                            <span style="background:var(--c-primary); color:#ffffff; font-weight:700; padding:4px 10px; border-radius:4px; font-size:0.75rem; cursor:pointer;">Contactar por WhatsApp</span>
                                        </td>
                                    </tr>
                                    <tr style="border-bottom:1px solid #f1f5f9;">
                                        <td style="padding:12px 12px; font-weight:700; color:var(--c-primary);">#COT-1047</td>
                                        <td style="padding:12px 12px; font-weight:600; color:#1e293b;">Despacho García &amp; Asociados</td>
                                        <td style="padding:12px 12px; text-align:right; font-weight:700;">$18,400.00</td>
                                        <td style="padding:12px 12px; text-align:center;">
                                            <span style="background:#ecfdf5; color:#059669; font-weight:700; padding:3px 8px; border-radius:4px; font-size:0.75rem;">Aceptada</span>
                                        </td>
                                        <td style="padding:12px 12px; text-align:center;">
                                            <span style="background:var(--c-tech-black); color:#ffffff; font-weight:700; padding:4px 10px; border-radius:4px; font-size:0.75rem;">Registrar Anticipo</span>
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
        <section style="padding: 5.5rem 0; background: #FFFFFF;">
            <div class="container animate-on-scroll fade-in-up">
                <h2 class="section-title">El costo oculto de no dar seguimiento comercial</h2>
                <p class="section-subtitle">
                    Enviar una cotización y esperar a que el cliente regrese por su cuenta es el error más común de los pequeños negocios.
                </p>
                <div class="cards-grid-3">
                    <div class="feature-box">
                        <div class="feature-icon-circle" style="background:#fef2f2; color:#dc2626;">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line></svg>
                        </div>
                        <h3>Las propuestas sin seguimiento se pierden</h3>
                        <p>Los dueños de negocio están ocupados operando y no tienen tiempo de revisar cuadernos o chats de WhatsApp para recordar qué prospectos no han contestado.</p>
                    </div>
                    <div class="feature-box">
                        <div class="feature-icon-circle" style="background:#fffbeb; color:#d97706;">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                        </div>
                        <h3>Tus prospectos se enfrían</h3>
                        <p>Cuando un cliente pide 3 cotizaciones, casi siempre le compra a la primera empresa que le da seguimiento formal y resuelve sus dudas técnicas.</p>
                    </div>
                    <div class="feature-box">
                        <div class="feature-icon-circle" style="background:#eff6ff; color:#2563eb;">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg>
                        </div>
                        <h3>Descontrol en el flujo de caja</h3>
                        <p>Si no sabes qué cotizaciones están por cerrarse este mes, es imposible proyectar compras de material, contratación de personal o anticipos de cobranza.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 2: 3 Plantillas de WhatsApp para seguimiento -->
        <section style="padding: 5.5rem 0; background: var(--c-bg-subtle);">
            <div class="container animate-on-scroll fade-in-up">
                <h2 class="section-title">Cómo dar seguimiento a una cotización sin parecer insistente</h2>
                <p class="section-subtitle">
                    Utiliza estas 3 plantillas probadas para reactivar conversaciones de venta por WhatsApp con educación, profesionalismo y enfoque en servicio.
                </p>
                <div class="cards-grid-3">
                    <div class="script-card">
                        <div class="script-header">
                            <span class="script-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="13" r="8"/><path d="M12 9v4l2 2M9 2h6"/></svg></span>
                            <h3>A las 48 horas del envío</h3>
                        </div>
                        <div class="script-body" id="script1">
                            "Hola [Nombre], buen día. Espero que te encuentres muy bien. Te escribo brevemente para confirmar que hayas podido revisar la propuesta [Folio] que te enviamos el [Día]. Quedo a tus órdenes si tienes alguna duda con las partidas o tiempos de entrega."
                        </div>
                        <button type="button" class="btn-copy-script" onclick="copyScript(this, 'script1')">
                            Copiar plantilla
                        </button>
                    </div>
                    <div class="script-card">
                        <div class="script-header">
                            <span class="script-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/></svg></span>
                            <h3>Antes del vencimiento de vigencia</h3>
                        </div>
                        <div class="script-body" id="script2">
                            "Hola [Nombre], un gusto saludarte. Te contacto porque los precios y disponibilidad de la cotización [Folio] tienen vigencia hasta este [Día]. Si estás listo para arrancar, avísame para apartar tu fecha en calendario y congelar los costos."
                        </div>
                        <button type="button" class="btn-copy-script" onclick="copyScript(this, 'script2')">
                            Copiar plantilla
                        </button>
                    </div>
                    <div class="script-card">
                        <div class="script-header">
                            <span class="script-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="9"/><circle cx="12" cy="12" r="5"/><circle cx="12" cy="12" r="1"/></svg></span>
                            <h3>Para clientes en silencio</h3>
                        </div>
                        <div class="script-body" id="script3">
                            "Hola [Nombre], ¿cómo va todo? Imagino que has estado con bastante trabajo. Solo quería saber si el proyecto sigue en pie para este mes o si prefieres que ajustemos las partidas para adaptarnos mejor a lo que necesitan hoy."
                        </div>
                        <button type="button" class="btn-copy-script" onclick="copyScript(this, 'script3')">
                            Copiar plantilla
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 3: FAQ -->
        <section style="padding: 5.5rem 0; background: #FFFFFF;">
            <div class="container animate-on-scroll fade-in-up">
                <h2 class="section-title">Preguntas frecuentes sobre el seguimiento comercial</h2>
                <div class="faq-list" style="margin-top: 2.5rem;">
                    <details class="faq-item">
                        <summary>¿Por qué es tan importante dar seguimiento a una cotización?</summary>
                        <p>Muchas cotizaciones se pierden porque nadie registra el siguiente contacto. Un seguimiento oportuno demuestra interés profesional y resuelve objeciones del cliente antes de que busque a otra empresa. Cotízalo centraliza tus propuestas y te ayuda a saber cuáles requieren seguimiento.</p>
                    </details>
                    <details class="faq-item">
                        <summary>¿Cómo me ayuda Cotízalo a saber a qué clientes contactar?</summary>
                        <p>Cotízalo clasifica tus cotizaciones automáticamente en un tablero visual. Puedes filtrar con un solo clic todas las cotizaciones con estado 'Enviada' que están próximas a vencer o que llevan más de 48 horas sin respuesta.</p>
                    </details>
                    <details class="faq-item">
                        <summary>¿Puedo enviar mensajes de seguimiento directo por WhatsApp?</summary>
                        <p>Sí. Cotízalo incluye botones de WhatsApp que generan mensajes listos con el folio, nombre del cliente y enlace a la propuesta, facilitando el contacto sin necesidad de redactar textos desde cero.</p>
                    </details>
                    <details class="faq-item">
                        <summary>¿Qué pasa cuando un cliente acepta mi cotización?</summary>
                        <p>Cambias el estatus a 'Aceptada' en un clic. A partir de ahí puedes generar el recibo de anticipo correspondiente, registrar pagos parciales y pasar la propuesta a tu orden de trabajo o facturación.</p>
                    </details>
                </div>
            </div>
        </section>

        <!-- Final CTA -->
        <section class="lp-cta">
            <div class="container animate-on-scroll fade-in-up">
                <h2>Comienza a dar seguimiento profesional a tus ventas</h2>
                <p>
                    Deja atrás los presupuestos olvidados y multiplica tu tasa de cierre con Cotízalo. Configura tu cuenta en 2 minutos.
                </p>
                <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
                    <a href="https://app.cotizalo.net/signup" class="btn btn-primary btn-lg">
                        Empieza tu prueba gratis de 14 días
                    </a>
                    <a href="<?php echo esc_url(home_url('/precios/')); ?>" class="btn btn-secondary btn-lg">
                        Ver planes y precios
                    </a>
                </div>
                <div class="related-links" style="margin-top: 2.5rem;">
                    <a href="<?php echo esc_url(home_url('/software-para-cotizaciones/')); ?>">Software para cotizaciones</a>
                    <span>·</span>
                    <a href="<?php echo esc_url(home_url('/cotizaciones-por-whatsapp/')); ?>">Cotizaciones por WhatsApp</a>
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
