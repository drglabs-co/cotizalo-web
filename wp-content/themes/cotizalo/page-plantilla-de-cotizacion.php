<?php
/**
 * Template Name: Plantilla de Cotización
 * Template Post Type: page
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <link rel="canonical" href="<?php echo esc_url(home_url('/plantilla-de-cotizacion/')); ?>">
    <title>Plantilla de Cotización Profesional Gratis | Cotízalo</title>
    <meta name="description"
        content="Descarga o usa en línea nuestra plantilla de cotización profesional gratis. Aprende qué debe incluir una cotización y cómo hacer una en segundos con Cotízalo. Sin registro.">
    <meta name="keywords"
        content="plantilla de cotizacion, formato de cotizacion, plantilla cotizacion gratis, modelo de cotizacion, formato presupuesto, ejemplo de cotizacion, como hacer una cotizacion">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo esc_url(home_url('/plantilla-de-cotizacion/')); ?>">
    <meta property="og:title" content="Plantilla de Cotización Profesional Gratis | Cotízalo">
    <meta property="og:description"
        content="Plantilla de cotización profesional gratis. Aprende qué debe incluir y cómo generarla en segundos con Cotízalo.">
    <meta property="og:image"
        content="<?php echo esc_url(get_template_directory_uri()); ?>/assets/assets/logos/ISOTIPO/Cotizalo-5.png">
    <meta property="og:locale" content="es_MX">

    <!-- Twitter / X -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Plantilla de Cotización Profesional Gratis | Cotízalo">
    <meta name="twitter:description"
        content="Plantilla de cotización gratis. Aprende qué incluir y genera la tuya en segundos con Cotízalo.">
    <meta name="twitter:image"
        content="<?php echo esc_url(get_template_directory_uri()); ?>/assets/assets/logos/ISOTIPO/Cotizalo-5.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" type="image/png"
        href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/assets/logos/ISOTIPO/Cotizalo-5.png?v=3">
    <link rel="shortcut icon"
        href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/assets/logos/ISOTIPO/Cotizalo-5.png?v=3">
    <link rel="apple-touch-icon"
        href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/assets/logos/ISOTIPO/Cotizalo-5.png?v=3">

    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@graph": [
            {
                "@type": "WebPage",
                "@id": "<?php echo esc_url(home_url('/plantilla-de-cotizacion/')); ?>#webpage",
                "url": "<?php echo esc_url(home_url('/plantilla-de-cotizacion/')); ?>",
                "name": "Plantilla de Cotización Profesional Gratis | Cotízalo",
                "description": "Plantilla de cotización profesional gratis. Aprende qué debe incluir y genera la tuya con Cotízalo.",
                "isPartOf": { "@id": "<?php echo esc_url(home_url('/')); ?>#website" },
                "breadcrumb": { "@id": "<?php echo esc_url(home_url('/plantilla-de-cotizacion/')); ?>#breadcrumb" },
                "inLanguage": "es-MX"
            },
            {
                "@type": "BreadcrumbList",
                "@id": "<?php echo esc_url(home_url('/plantilla-de-cotizacion/')); ?>#breadcrumb",
                "itemListElement": [
                    { "@type": "ListItem", "position": 1, "name": "Inicio", "item": "<?php echo esc_url(home_url('/')); ?>" },
                    { "@type": "ListItem", "position": 2, "name": "Plantilla de Cotización" }
                ]
            },
            {
                "@type": "FAQPage",
                "mainEntity": [
                    {
                        "@type": "Question",
                        "name": "¿Qué debe incluir una cotización profesional?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Una cotización profesional debe incluir: datos del emisor (empresa, RFC, dirección), datos del cliente, número de cotización y fecha, descripción detallada de productos o servicios, precios unitarios, subtotal, descuentos, impuestos (IVA), total, condiciones de pago, vigencia de la cotización y firma del responsable."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "¿Cuál es la diferencia entre una cotización y una factura?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Una cotización es una propuesta de precio que el cliente puede aceptar o rechazar; no tiene validez fiscal. Una factura es un documento fiscal que registra una venta ya realizada y tiene efectos legales y tributarios. La cotización antecede a la factura."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "¿Por cuánto tiempo es válida una cotización?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "La vigencia de una cotización la define el emisor. Lo más común es entre 15 y 30 días naturales. En Cotízalo puedes establecer la fecha de vigencia de cada cotización y el cliente verá si ya venció al abrir el enlace."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "¿Es mejor usar una plantilla de Word, Excel o un software como Cotízalo?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Para negocios que envían más de 3-4 cotizaciones al mes, un software como Cotízalo es mucho más eficiente. Guarda tu catálogo, reutiliza datos de clientes, genera PDFs automáticamente, permite firma digital y da seguimiento, todo sin copiar y pegar desde una plantilla."
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
            padding-top: calc(var(--nav-height) + 5rem);
            padding-bottom: 5rem;
            background: linear-gradient(135deg, var(--primary) 0%, #1a4d38 60%, var(--bg-surface) 100%);
            text-align: center;
        }

        .lp-hero h1 {
            font-size: clamp(2rem, 4.5vw, 3.5rem);
            font-weight: 700;
            color: #fff;
            letter-spacing: -0.02em;
            margin-bottom: 1.25rem;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
        }

        .lp-hero p {
            color: rgba(255, 255, 255, 0.85);
            font-size: 1.175rem;
            max-width: 600px;
            margin: 0 auto 2rem;
            line-height: 1.7;
        }

        .lp-hero .badge-pill {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background: rgba(255, 255, 255, 0.12);
            border: 1px solid rgba(255, 255, 255, 0.25);
            color: #fff;
            font-size: 0.875rem;
            font-weight: 600;
            padding: 0.4rem 1.1rem;
            border-radius: var(--radius-full);
            margin-bottom: 1.5rem;
        }

        .template-section {
            background: #fff;
            padding: 5rem 0;
        }

        .section-eyebrow {
            text-align: center;
            font-size: 0.8rem;
            font-weight: 700;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            color: var(--primary);
            margin-bottom: 0.75rem;
        }

        .section-title {
            text-align: center;
            font-size: clamp(1.75rem, 3vw, 2.5rem);
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 1rem;
            letter-spacing: -0.02em;
        }

        .section-subtitle {
            text-align: center;
            color: var(--text-dark-muted);
            font-size: 1.05rem;
            max-width: 580px;
            margin: 0 auto 3.5rem;
        }

        /* Template mockup */
        .template-mockup {
            max-width: 720px;
            margin: 0 auto;
            border: 1px solid var(--border-light);
            border-radius: var(--radius-lg);
            overflow: hidden;
            box-shadow: 0 20px 60px rgba(18, 58, 44, 0.15);
        }

        .tmpl-header {
            background: var(--primary);
            padding: 2rem 2.5rem;
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            flex-wrap: wrap;
            gap: 1rem;
        }

        .tmpl-header .company-name {
            font-size: 1.5rem;
            font-weight: 700;
            color: #fff;
        }

        .tmpl-header .doc-title {
            color: rgba(255, 255, 255, 0.7);
            font-size: 0.875rem;
            margin-top: 0.25rem;
        }

        .tmpl-header .doc-meta {
            text-align: right;
            color: rgba(255, 255, 255, 0.85);
            font-size: 0.9rem;
            line-height: 1.7;
        }

        .tmpl-body {
            background: #fff;
            padding: 2.5rem;
        }

        .tmpl-parties {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 2rem;
            margin-bottom: 2rem;
        }

        @media (max-width: 600px) {
            .tmpl-parties {
                grid-template-columns: 1fr;
            }
        }

        .tmpl-party h4 {
            font-size: 0.75rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.08em;
            color: var(--text-dark-muted);
            margin-bottom: 0.5rem;
        }

        .tmpl-party p {
            font-size: 0.9rem;
            color: var(--text-dark);
            line-height: 1.6;
        }

        .tmpl-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 1.5rem;
        }

        .tmpl-table th {
            background: var(--bg-light-alt);
            color: var(--text-dark-muted);
            font-size: 0.75rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            padding: 0.75rem 1rem;
            text-align: left;
        }

        .tmpl-table td {
            padding: 0.9rem 1rem;
            border-bottom: 1px solid var(--border-light);
            font-size: 0.9rem;
            color: var(--text-dark);
        }

        .tmpl-table td:last-child,
        .tmpl-table th:last-child {
            text-align: right;
        }

        .tmpl-totals {
            margin-left: auto;
            max-width: 280px;
        }

        .tmpl-totals-row {
            display: flex;
            justify-content: space-between;
            padding: 0.5rem 0;
            font-size: 0.9rem;
            color: var(--text-dark-muted);
            border-bottom: 1px solid var(--border-light);
        }

        .tmpl-totals-row.total {
            font-weight: 700;
            color: var(--text-dark);
            font-size: 1.05rem;
            border-bottom: none;
            padding-top: 0.75rem;
        }

        .tmpl-footer-note {
            margin-top: 2rem;
            padding-top: 1.5rem;
            border-top: 1px solid var(--border-light);
            font-size: 0.85rem;
            color: var(--text-dark-muted);
            line-height: 1.6;
        }

        /* Checklist section */
        .checklist-section {
            background: var(--bg-light-alt);
            padding: 5rem 0;
        }

        .checklist-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1.25rem;
            max-width: 760px;
            margin: 0 auto;
        }

        @media (max-width: 640px) {
            .checklist-grid {
                grid-template-columns: 1fr;
            }
        }

        .checklist-item {
            display: flex;
            align-items: flex-start;
            gap: 1rem;
            background: #fff;
            border: 1px solid var(--border-light);
            border-radius: var(--radius-md);
            padding: 1.25rem;
        }

        .checklist-check {
            flex-shrink: 0;
            width: 28px;
            height: 28px;
            background: var(--primary);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 0.8rem;
            font-weight: 700;
        }

        .checklist-item h4 {
            font-size: 0.95rem;
            font-weight: 600;
            color: var(--text-dark);
            margin-bottom: 0.25rem;
        }

        .checklist-item p {
            font-size: 0.875rem;
            color: var(--text-dark-muted);
            line-height: 1.5;
        }

        .faq-section {
            background: #fff;
            padding: 5rem 0;
        }

        .faq-list {
            max-width: 760px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        details.faq-item {
            background: var(--bg-light-alt);
            border: 1px solid var(--border-light);
            border-radius: var(--radius-md);
            padding: 1.5rem;
            cursor: pointer;
        }

        details.faq-item summary {
            font-weight: 600;
            color: var(--text-dark);
            list-style: none;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 1rem;
            font-size: 1rem;
        }

        details.faq-item summary::after {
            content: '+';
            font-size: 1.5rem;
            font-weight: 300;
            color: var(--primary);
            flex-shrink: 0;
            transition: transform 0.2s;
        }

        details.faq-item[open] summary::after {
            transform: rotate(45deg);
        }

        details.faq-item p {
            margin-top: 1rem;
            color: var(--text-dark-muted);
            line-height: 1.7;
            font-size: 0.975rem;
        }

        .lp-cta {
            background: linear-gradient(135deg, var(--primary) 0%, #1a4d38 100%);
            padding: 5rem 0;
            text-align: center;
        }

        .lp-cta h2 {
            font-size: clamp(1.75rem, 3vw, 2.75rem);
            font-weight: 700;
            color: #fff;
            margin-bottom: 1rem;
        }

        .lp-cta p {
            color: rgba(255, 255, 255, 0.85);
            font-size: 1.1rem;
            margin-bottom: 2rem;
            max-width: 500px;
            margin-left: auto;
            margin-right: auto;
        }

        .related-links {
            display: flex;
            flex-wrap: wrap;
            gap: 0.75rem;
            justify-content: center;
            margin-top: 2rem;
        }

        .related-links a {
            font-size: 0.875rem;
            color: rgba(255, 255, 255, 0.75);
            text-decoration: underline;
            text-underline-offset: 3px;
        }

        .related-links a:hover {
            color: #fff;
        }

        .related-links span {
            color: rgba(255, 255, 255, 0.3);
        }
    </style>
</head>

<body <?php body_class(); ?>>

    <!-- Nav -->
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
                        <li><a href="<?php echo esc_url(home_url('/programa-para-hacer-presupuestos/')); ?>">Programa
                                para presupuestos</a></li>
                        <li><a href="<?php echo esc_url(home_url('/cotizaciones-por-whatsapp/')); ?>">Cotizaciones por
                                WhatsApp</a></li>
                        <li><a href="<?php echo esc_url(home_url('/plantilla-de-cotizacion/')); ?>">Plantilla de
                                cotización</a></li>
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
            <div class="mobile-menu-btn"><span></span><span></span><span></span></div>
        </div>
    </header>

    <!-- Hero -->
    <section class="lp-hero">
        <div class="container relative z-10 animate-on-scroll fade-in-up">
            <span class="badge-pill">📄 Plantilla gratuita</span>
            <h1>Plantilla de cotización profesional — úsala gratis ahora</h1>
            <p>Descubre qué elementos debe tener una cotización completa, ve un ejemplo real y genera la tuya
                automáticamente con Cotízalo. Gratis, sin instalar nada.</p>
            <a href="<?php echo esc_url(get_theme_mod('nav_signup_url', 'https://app.cotizalo.net/signup')); ?>"
                class="btn btn-primary btn-lg" style="background:#fff; color:var(--primary); border-color:#fff;">
                Generar mi cotización gratis
            </a>
            <p style="margin-top:1.25rem; font-size:0.875rem; color:rgba(255,255,255,0.6);">Sin tarjeta. Sin
                instalación. Listo en 2 minutos.</p>
        </div>
    </section>

    <!-- Template Mockup -->
    <section class="template-section">
        <div class="container animate-on-scroll fade-in-up">
            <p class="section-eyebrow">Ejemplo de cotización</p>
            <h2 class="section-title">Así luce una cotización profesional</h2>
            <p class="section-subtitle">Cotízalo genera este formato automáticamente con tus datos, tu logo y tus
                productos.</p>

            <div class="template-mockup">
                <div class="tmpl-header">
                    <div>
                        <div class="company-name">Mi Empresa S.A. de C.V.</div>
                        <div class="doc-title">RFC: MEM210101ABC · contacto@miempresa.com</div>
                    </div>
                    <div class="doc-meta">
                        <strong style="color:#fff; font-size:1.1rem;">COTIZACIÓN</strong><br>
                        Núm. COT-2026-0042<br>
                        Fecha: 16 Sep 2026<br>
                        Vigencia: 16 Oct 2026
                    </div>
                </div>
                <div class="tmpl-body">
                    <div class="tmpl-parties">
                        <div class="tmpl-party">
                            <h4>Emitida para</h4>
                            <p><strong>Distribuidora García &amp; Asociados</strong><br>Contacto: Lic. María
                                García<br>maria@garcia.com · 55 1234 5678</p>
                        </div>
                        <div class="tmpl-party">
                            <h4>Nota para el cliente</h4>
                            <p>Gracias por su confianza. Quedo a sus órdenes para cualquier aclaración sobre esta
                                propuesta.</p>
                        </div>
                    </div>
                    <table class="tmpl-table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Descripción</th>
                                <th>Cant.</th>
                                <th>Precio unit.</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Diseño de logotipo corporativo<br><small
                                        style="color:var(--text-dark-muted);">Incluye 3 propuestas y 2 rondas de
                                        revisión</small></td>
                                <td>1</td>
                                <td>$4,500.00</td>
                                <td>$4,500.00</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Manual de identidad visual</td>
                                <td>1</td>
                                <td>$2,800.00</td>
                                <td>$2,800.00</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Papelería corporativa (tarjeta, membrete, sobre)</td>
                                <td>3</td>
                                <td>$900.00</td>
                                <td>$2,700.00</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="tmpl-totals">
                        <div class="tmpl-totals-row"><span>Subtotal</span><span>$10,000.00</span></div>
                        <div class="tmpl-totals-row"><span>IVA (16%)</span><span>$1,600.00</span></div>
                        <div class="tmpl-totals-row total"><span>TOTAL</span><span>$11,600.00 MXN</span></div>
                    </div>
                    <div class="tmpl-footer-note">
                        <strong>Condiciones:</strong> 50% de anticipo para iniciar. Saldo al entregar. Los precios están
                        en MXN e incluyen IVA. Vigencia de esta cotización: 30 días naturales.
                    </div>
                </div>
            </div>

            <div style="text-align:center; margin-top:2.5rem;">
                <p style="color:var(--text-dark-muted); font-size:0.95rem; margin-bottom:1rem;">¿Quieres generar esta
                    cotización con tus propios datos?</p>
                <a href="<?php echo esc_url(get_theme_mod('nav_signup_url', 'https://app.cotizalo.net/signup')); ?>"
                    class="btn btn-primary">Crear mi cotización gratis</a>
            </div>
        </div>
    </section>

    <!-- Checklist -->
    <section class="checklist-section">
        <div class="container animate-on-scroll fade-in-up">
            <p class="section-eyebrow">Elementos esenciales</p>
            <h2 class="section-title">¿Qué debe incluir una cotización profesional?</h2>
            <p class="section-subtitle">Una cotización completa genera más confianza y cierra más ventas. Aquí los
                elementos que no pueden faltar.</p>
            <div class="checklist-grid">
                <div class="checklist-item">
                    <div class="checklist-check">✓</div>
                    <div>
                        <h4>Datos del emisor</h4>
                        <p>Nombre de la empresa o persona física, RFC, dirección y datos de contacto.</p>
                    </div>
                </div>
                <div class="checklist-item">
                    <div class="checklist-check">✓</div>
                    <div>
                        <h4>Datos del cliente</h4>
                        <p>Nombre, empresa, correo y teléfono del contacto que recibirá la propuesta.</p>
                    </div>
                </div>
                <div class="checklist-item">
                    <div class="checklist-check">✓</div>
                    <div>
                        <h4>Número y fecha de cotización</h4>
                        <p>Un folio único y la fecha de emisión para identificar y ordenar tus documentos.</p>
                    </div>
                </div>
                <div class="checklist-item">
                    <div class="checklist-check">✓</div>
                    <div>
                        <h4>Descripción detallada</h4>
                        <p>Explica claramente cada producto o servicio: qué incluye, qué no incluye y bajo qué
                            condiciones.</p>
                    </div>
                </div>
                <div class="checklist-item">
                    <div class="checklist-check">✓</div>
                    <div>
                        <h4>Precios unitarios y totales</h4>
                        <p>Precio por unidad, cantidad, subtotal por línea, subtotal general, IVA y total final.</p>
                    </div>
                </div>
                <div class="checklist-item">
                    <div class="checklist-check">✓</div>
                    <div>
                        <h4>Condiciones de pago</h4>
                        <p>Porcentaje de anticipo, forma de pago aceptada (transferencia, efectivo) y plazos.</p>
                    </div>
                </div>
                <div class="checklist-item">
                    <div class="checklist-check">✓</div>
                    <div>
                        <h4>Vigencia de la cotización</h4>
                        <p>Fecha hasta la que el precio es válido. Normalmente entre 15 y 30 días naturales.</p>
                    </div>
                </div>
                <div class="checklist-item">
                    <div class="checklist-check">✓</div>
                    <div>
                        <h4>Firma o aprobación</h4>
                        <p>Espacio para la firma o aceptación del cliente, ya sea física o digital.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="faq-section">
        <div class="container animate-on-scroll fade-in-up">
            <p class="section-eyebrow">Preguntas frecuentes</p>
            <h2 class="section-title">Todo sobre plantillas de cotización</h2>
            <div class="faq-list" style="margin-top:2.5rem;">
                <details class="faq-item">
                    <summary>¿Qué debe incluir una cotización profesional?</summary>
                    <p>Una cotización profesional debe incluir: datos del emisor (empresa, RFC, dirección), datos del
                        cliente, número de cotización y fecha, descripción detallada de productos o servicios, precios
                        unitarios, subtotal, descuentos, IVA, total, condiciones de pago, vigencia y firma del
                        responsable.</p>
                </details>
                <details class="faq-item">
                    <summary>¿Cuál es la diferencia entre una cotización y una factura?</summary>
                    <p>Una cotización es una propuesta de precio que el cliente puede aceptar o rechazar; no tiene
                        validez fiscal. Una factura es un documento fiscal que registra una venta ya realizada. La
                        cotización antecede a la factura y es el primer paso del proceso de venta.</p>
                </details>
                <details class="faq-item">
                    <summary>¿Por cuánto tiempo es válida una cotización?</summary>
                    <p>La vigencia la define el emisor. Lo más común es entre 15 y 30 días naturales. En Cotízalo puedes
                        establecer la fecha de vigencia de cada cotización y el cliente verá si ya venció al abrir el
                        enlace.</p>
                </details>
                <details class="faq-item">
                    <summary>¿Es mejor usar una plantilla de Word/Excel o un software como Cotízalo?</summary>
                    <p>Para negocios que envían más de 3-4 cotizaciones al mes, Cotízalo es mucho más eficiente. Guarda
                        tu catálogo, reutiliza datos de clientes, genera PDFs automáticamente, permite firma digital y
                        da seguimiento, sin copiar y pegar desde una plantilla cada vez.</p>
                </details>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="lp-cta">
        <div class="container animate-on-scroll fade-in-up">
            <h2>Genera tu primera cotización profesional ahora</h2>
            <p>Crea tu cuenta gratis y ten tu primera cotización lista en menos de 5 minutos.</p>
            <a href="<?php echo esc_url(get_theme_mod('nav_signup_url', 'https://app.cotizalo.net/signup')); ?>"
                class="btn btn-primary btn-lg" style="background:#fff; color:var(--primary); border-color:#fff;">
                Usar Cotízalo gratis
            </a>
            <div class="related-links">
                <a href="<?php echo esc_url(home_url('/software-para-cotizaciones/')); ?>">Software para
                    cotizaciones</a>
                <span>·</span>
                <a href="<?php echo esc_url(home_url('/programa-para-hacer-presupuestos/')); ?>">Programa para
                    presupuestos</a>
                <span>·</span>
                <a href="<?php echo esc_url(home_url('/cotizaciones-por-whatsapp/')); ?>">Cotizaciones por WhatsApp</a>
                <span>·</span>
                <a href="<?php echo esc_url(home_url('/precios/')); ?>">Ver planes</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-brand">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="logo mb-1">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/assets/logos/LOGOTIPO3/Cotizalo-8.png?v=2"
                            alt="Cotízalo Logo" style="height:70px;width:auto;object-fit:contain;" id="footer-logo"
                            width="260" height="70">
                    </a>
                    <p class="text-muted mt-1" style="max-width:300px;">
                        <?php echo esc_html(get_theme_mod('footer_brand_text', 'Transformando la forma en que los equipos de ventas crean, envían y cierran propuestas.')); ?>
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
                        <li><a href="<?php echo esc_url(home_url('/software-para-cotizaciones/')); ?>">Software para
                                cotizaciones</a></li>
                        <li><a href="<?php echo esc_url(home_url('/programa-para-hacer-presupuestos/')); ?>">Programa
                                para presupuestos</a></li>
                        <li><a href="<?php echo esc_url(home_url('/cotizaciones-por-whatsapp/')); ?>">Cotizaciones por
                                WhatsApp</a></li>
                        <li><a href="<?php echo esc_url(home_url('/plantilla-de-cotizacion/')); ?>">Plantilla de
                                cotización</a></li>
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
                        <li><a href="<?php echo esc_url(home_url('/soporte/')); ?>">Soporte</a></li>
                        <li><a href="<?php echo esc_url(home_url('/aviso-de-privacidad/')); ?>">Aviso de Privacidad</a>
                        </li>
                        <li><a href="<?php echo esc_url(home_url('/terminos-y-condiciones/')); ?>">Términos y
                                Condiciones</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?>
                    <?php echo esc_html(get_theme_mod('footer_copyright', 'PixelZero.mx . Todos los derechos reservados.')); ?>
                </p>
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const header = document.getElementById('navbar');
            let ticking = false;
            window.addEventListener('scroll', () => { if (!ticking) { window.requestAnimationFrame(() => { header.classList.toggle('scrolled', window.scrollY > 50); ticking = false; }); ticking = true; } }, { passive: true });
            const observer = new IntersectionObserver((entries, obs) => { entries.forEach(e => { if (e.isIntersecting) { e.target.classList.add('visible'); obs.unobserve(e.target); } }); }, { threshold: 0.1 });
            document.querySelectorAll('.animate-on-scroll').forEach(el => observer.observe(el));
            const mobileBtn = document.querySelector('.mobile-menu-btn');
            const navContainer = document.querySelector('.nav-container');
            if (mobileBtn && navContainer) { mobileBtn.addEventListener('click', () => { mobileBtn.classList.toggle('open'); header.classList.toggle('menu-open'); navContainer.classList.toggle('menu-open'); }); }
        });
    </script>
    <?php wp_footer(); ?>
</body>

</html>