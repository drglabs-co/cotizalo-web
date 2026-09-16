<?php
/**
 * Template Name: Programa para Hacer Presupuestos
 * Template Post Type: page
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <link rel="canonical" href="<?php echo esc_url( home_url('/programa-para-hacer-presupuestos/') ); ?>">
    <title>Programa para Hacer Presupuestos Profesionales | Cotízalo</title>
    <meta name="description"
        content="Crea presupuestos profesionales en minutos con Cotízalo. Ideal para freelancers, consultores y empresas de servicios en México. Sin Excel, sin hojas sueltas. Prueba gratis 14 días.">
    <meta name="keywords" content="programa para hacer presupuestos, hacer presupuesto online, presupuestos profesionales, software de presupuestos, generar presupuesto, programa cotizacion presupuesto">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo esc_url( home_url('/programa-para-hacer-presupuestos/') ); ?>">
    <meta property="og:title" content="Programa para Hacer Presupuestos Profesionales | Cotízalo">
    <meta property="og:description" content="Crea presupuestos profesionales en minutos. Ideal para freelancers, consultores y empresas de servicios en México. Prueba gratis 14 días.">
    <meta property="og:image" content="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/assets/logos/ISOTIPO/Cotizalo-5.png">
    <meta property="og:locale" content="es_MX">

    <!-- Twitter / X -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Programa para Hacer Presupuestos Profesionales | Cotízalo">
    <meta name="twitter:description" content="Crea presupuestos profesionales en minutos. Prueba gratis 14 días.">
    <meta name="twitter:image" content="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/assets/logos/ISOTIPO/Cotizalo-5.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" type="image/png" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/assets/logos/ISOTIPO/Cotizalo-5.png?v=3">
    <link rel="shortcut icon" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/assets/logos/ISOTIPO/Cotizalo-5.png?v=3">
    <link rel="apple-touch-icon" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/assets/logos/ISOTIPO/Cotizalo-5.png?v=3">

    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@graph": [
            {
                "@type": "WebPage",
                "@id": "<?php echo esc_url( home_url('/programa-para-hacer-presupuestos/') ); ?>#webpage",
                "url": "<?php echo esc_url( home_url('/programa-para-hacer-presupuestos/') ); ?>",
                "name": "Programa para Hacer Presupuestos Profesionales | Cotízalo",
                "description": "Crea presupuestos profesionales en minutos con Cotízalo.",
                "isPartOf": { "@id": "<?php echo esc_url( home_url('/') ); ?>#website" },
                "breadcrumb": { "@id": "<?php echo esc_url( home_url('/programa-para-hacer-presupuestos/') ); ?>#breadcrumb" },
                "inLanguage": "es-MX"
            },
            {
                "@type": "BreadcrumbList",
                "@id": "<?php echo esc_url( home_url('/programa-para-hacer-presupuestos/') ); ?>#breadcrumb",
                "itemListElement": [
                    { "@type": "ListItem", "position": 1, "name": "Inicio", "item": "<?php echo esc_url( home_url('/') ); ?>" },
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
    <link rel="preload" as="image" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/assets/logos/LOGOTIPO3/Cotizalo-8.png?v=2" type="image/png">
    <?php wp_head(); ?>

    <style>
        .lp-hero { padding-top: calc(var(--nav-height) + 5rem); padding-bottom: 5rem; background: linear-gradient(135deg, #1a3a5c 0%, #0f2a44 60%, var(--bg-surface) 100%); text-align: center; }
        .lp-hero h1 { font-size: clamp(2rem, 4.5vw, 3.5rem); font-weight: 700; color: #fff; letter-spacing: -0.02em; margin-bottom: 1.25rem; max-width: 800px; margin-left: auto; margin-right: auto; }
        .lp-hero p { color: rgba(255,255,255,0.8); font-size: 1.175rem; max-width: 600px; margin: 0 auto 2rem; line-height: 1.7; }
        .lp-hero .badge-pill { display: inline-flex; align-items: center; gap: 0.5rem; background: rgba(255,255,255,0.12); border: 1px solid rgba(255,255,255,0.25); color: #fff; font-size: 0.875rem; font-weight: 600; padding: 0.4rem 1.1rem; border-radius: var(--radius-full); margin-bottom: 1.5rem; }
        .benefits-section { background: var(--bg-light-alt); padding: 5rem 0 6rem; }
        .section-eyebrow { text-align: center; font-size: 0.8rem; font-weight: 700; letter-spacing: 0.12em; text-transform: uppercase; color: var(--primary); margin-bottom: 0.75rem; }
        .section-title { text-align: center; font-size: clamp(1.75rem, 3vw, 2.5rem); font-weight: 700; color: var(--text-dark); margin-bottom: 1rem; letter-spacing: -0.02em; }
        .section-subtitle { text-align: center; color: var(--text-dark-muted); font-size: 1.05rem; max-width: 580px; margin: 0 auto 3.5rem; }
        .benefits-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 1.75rem; }
        @media (max-width: 900px) { .benefits-grid { grid-template-columns: repeat(2, 1fr); } }
        @media (max-width: 580px) { .benefits-grid { grid-template-columns: 1fr; } }
        .benefit-card { background: #fff; border: 1px solid var(--border-light); border-radius: var(--radius-lg); padding: 2rem 1.75rem; transition: transform 0.25s ease, box-shadow 0.25s ease; }
        .benefit-card:hover { transform: translateY(-4px); box-shadow: 0 16px 40px rgba(18,58,44,0.1); }
        .benefit-icon { width: 48px; height: 48px; background: rgba(18,58,44,0.08); border-radius: var(--radius-md); display: flex; align-items: center; justify-content: center; margin-bottom: 1rem; }
        .benefit-icon svg { stroke: var(--primary); }
        .benefit-card h3 { font-size: 1.1rem; font-weight: 600; color: var(--text-dark); margin-bottom: 0.5rem; }
        .benefit-card p { color: var(--text-dark-muted); font-size: 0.95rem; line-height: 1.6; }
        .compare-section { background: #fff; padding: 5rem 0; }
        .compare-table { width: 100%; border-collapse: collapse; margin-top: 2.5rem; }
        .compare-table th { background: var(--primary); color: #fff; padding: 1rem 1.25rem; text-align: left; font-size: 0.95rem; }
        .compare-table th:first-child { border-radius: var(--radius-md) 0 0 0; }
        .compare-table th:last-child { border-radius: 0 var(--radius-md) 0 0; }
        .compare-table td { padding: 0.9rem 1.25rem; border-bottom: 1px solid var(--border-light); font-size: 0.95rem; color: var(--text-dark-muted); }
        .compare-table tr:last-child td { border-bottom: none; }
        .compare-table .yes { color: #16a34a; font-weight: 600; }
        .compare-table .no { color: #dc2626; }
        .faq-section { background: var(--bg-light-alt); padding: 5rem 0; }
        .faq-list { max-width: 760px; margin: 0 auto; display: flex; flex-direction: column; gap: 1rem; }
        details.faq-item { background: #fff; border: 1px solid var(--border-light); border-radius: var(--radius-md); padding: 1.5rem; cursor: pointer; }
        details.faq-item summary { font-weight: 600; color: var(--text-dark); list-style: none; display: flex; justify-content: space-between; align-items: center; gap: 1rem; font-size: 1rem; }
        details.faq-item summary::after { content: '+'; font-size: 1.5rem; font-weight: 300; color: var(--primary); flex-shrink: 0; transition: transform 0.2s; }
        details.faq-item[open] summary::after { transform: rotate(45deg); }
        details.faq-item p { margin-top: 1rem; color: var(--text-dark-muted); line-height: 1.7; font-size: 0.975rem; }
        .lp-cta { background: linear-gradient(135deg, #1a3a5c 0%, #0f2a44 100%); padding: 5rem 0; text-align: center; }
        .lp-cta h2 { font-size: clamp(1.75rem, 3vw, 2.75rem); font-weight: 700; color: #fff; margin-bottom: 1rem; }
        .lp-cta p { color: rgba(255,255,255,0.8); font-size: 1.1rem; margin-bottom: 2rem; max-width: 500px; margin-left: auto; margin-right: auto; }
        .related-links { display: flex; flex-wrap: wrap; gap: 0.75rem; justify-content: center; margin-top: 2rem; }
        .related-links a { font-size: 0.875rem; color: rgba(255,255,255,0.7); text-decoration: underline; text-underline-offset: 3px; }
        .related-links a:hover { color: #fff; }
        .related-links span { color: rgba(255,255,255,0.3); }
    </style>
</head>

<body <?php body_class(); ?>>

    <!-- Nav -->
    <header id="navbar">
        <div class="container nav-container">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/assets/logos/LOGOTIPO3/Cotizalo-8.png?v=2" alt="Cotízalo Logo" id="brand-logo" width="223" height="60">
            </a>
            <ul class="nav-links">
                <li><a href="<?php echo esc_url(home_url('/que-es-cotizalo/')); ?>" class="nav-item">¿Qué es Cotízalo?</a></li>
                <li><a href="<?php echo esc_url(home_url('/')); ?>#features" class="nav-item">Características</a></li>
                <li><a href="<?php echo esc_url(home_url('/precios/')); ?>" class="nav-item">Precios</a></li>
            </ul>
            <div class="nav-buttons">
                <a href="<?php echo esc_url(get_theme_mod('nav_login_url', 'https://app.cotizalo.net/login')); ?>" class="btn btn-secondary btn-nav"><?php echo esc_html(get_theme_mod('nav_login_text', 'Ingresar')); ?></a>
                <a href="<?php echo esc_url(get_theme_mod('nav_signup_url', 'https://app.cotizalo.net/signup')); ?>" class="btn btn-primary btn-nav"><?php echo esc_html(get_theme_mod('nav_signup_text', 'Empezar Gratis')); ?></a>
            </div>
            <div class="mobile-menu-btn"><span></span><span></span><span></span></div>
        </div>
    </header>

    <!-- Hero -->
    <section class="lp-hero">
        <div class="container relative z-10 animate-on-scroll fade-in-up">
            <span class="badge-pill">✦ Programa para presupuestos</span>
            <h1>El programa para hacer presupuestos más fácil para tu empresa</h1>
            <p>Di adiós al Excel y las hojas sueltas. Con Cotízalo generas presupuestos profesionales en minutos, los envías por WhatsApp o correo y sabes cuándo tu cliente los revisó.</p>
            <a href="<?php echo esc_url(get_theme_mod('nav_signup_url', 'https://app.cotizalo.net/signup')); ?>" class="btn btn-primary btn-lg" style="background:#fff; color:#1a3a5c; border-color:#fff;">
                Empieza gratis — 14 días sin tarjeta
            </a>
            <p style="margin-top:1.25rem; font-size:0.875rem; color:rgba(255,255,255,0.6);">Ideal para freelancers, consultores y empresas de servicios.</p>
        </div>
    </section>

    <!-- Benefits -->
    <section class="benefits-section">
        <div class="container animate-on-scroll fade-in-up">
            <p class="section-eyebrow">Por qué Cotízalo</p>
            <h2 class="section-title">Todo lo que necesitas para presupuestar</h2>
            <p class="section-subtitle">Diseñado para profesionales independientes y pequeñas empresas de servicios en México.</p>
            <div class="benefits-grid">
                <div class="benefit-card">
                    <div class="benefit-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"/><polyline points="13 2 13 9 20 9"/></svg></div>
                    <h3>Presupuestos en PDF en segundos</h3>
                    <p>Genera propuestas con tu logo, datos y precios. Descarga el PDF o comparte el enlace directamente con tu cliente.</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><line x1="3" y1="9" x2="21" y2="9"/><line x1="9" y1="21" x2="9" y2="9"/></svg></div>
                    <h3>Catálogo de servicios y precios</h3>
                    <p>Guarda tus servicios con precios y descripción. Agrégalos a cualquier presupuesto en un clic, sin repetir datos.</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg></div>
                    <h3>Seguimiento automático</h3>
                    <p>Sabe cuándo tu cliente abrió el presupuesto. Recibe notificaciones y actúa en el momento exacto para cerrar la venta.</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg></div>
                    <h3>Envío por WhatsApp o correo</h3>
                    <p>Comparte el presupuesto en segundos con un clic. Tu cliente lo recibe en su celular sin instalar ninguna app.</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
                    <h3>Firma digital del cliente</h3>
                    <p>Tu cliente aprueba el presupuesto con firma digital desde el mismo enlace. Queda registrada con fecha y hora.</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg></div>
                    <h3>Historial completo de presupuestos</h3>
                    <p>Accede a todos tus presupuestos enviados, con su estado (abierto, aceptado, vencido) desde un panel central.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Comparison Table -->
    <section class="compare-section">
        <div class="container animate-on-scroll fade-in-up">
            <p class="section-eyebrow">Comparación</p>
            <h2 class="section-title">Cotízalo vs. Excel para hacer presupuestos</h2>
            <p class="section-subtitle">Descubre por qué cientos de profesionales ya abandonaron las hojas de cálculo.</p>
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
                        <tr><td>Genera PDF profesional con logo</td><td class="yes">✓ Automático</td><td class="no">✗ Manual y lento</td></tr>
                        <tr><td>Envío por WhatsApp en un clic</td><td class="yes">✓ Incluido</td><td class="no">✗ No disponible</td></tr>
                        <tr><td>Seguimiento de apertura</td><td class="yes">✓ Notificación automática</td><td class="no">✗ No disponible</td></tr>
                        <tr><td>Firma digital del cliente</td><td class="yes">✓ Incluida</td><td class="no">✗ No disponible</td></tr>
                        <tr><td>Catálogo de servicios reutilizable</td><td class="yes">✓ Con un clic</td><td class="no">✗ Copiar y pegar</td></tr>
                        <tr><td>Historial de clientes</td><td class="yes">✓ Centralizado</td><td class="no">✗ Archivos dispersos</td></tr>
                        <tr><td>Funciona en el celular</td><td class="yes">✓ Siempre</td><td class="no">✗ Limitado</td></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="faq-section">
        <div class="container animate-on-scroll fade-in-up">
            <p class="section-eyebrow">Preguntas frecuentes</p>
            <h2 class="section-title">Todo lo que quieres saber sobre hacer presupuestos</h2>
            <div class="faq-list" style="margin-top:2.5rem;">
                <details class="faq-item">
                    <summary>¿Cuál es la diferencia entre una cotización y un presupuesto?</summary>
                    <p>Aunque se usan indistintamente, una cotización es una propuesta de precio que puede cambiar, mientras que un presupuesto suele ser un compromiso más formal de costos. Cotízalo te permite crear ambos con la misma herramienta sin complicaciones.</p>
                </details>
                <details class="faq-item">
                    <summary>¿Puedo usar Cotízalo siendo freelancer o trabajador independiente?</summary>
                    <p>Sí, Cotízalo está diseñado especialmente para profesionales independientes, freelancers, consultores y microempresas que necesitan presentar presupuestos de forma rápida y profesional sin invertir en software costoso.</p>
                </details>
                <details class="faq-item">
                    <summary>¿Se puede usar en el celular para hacer presupuestos?</summary>
                    <p>Sí. Cotízalo funciona completamente desde el navegador de tu celular. Puedes crear, editar y enviar presupuestos desde donde estés, sin instalar ninguna aplicación.</p>
                </details>
                <details class="faq-item">
                    <summary>¿Cotízalo reemplaza al Excel para hacer presupuestos?</summary>
                    <p>Sí. Cotízalo es la alternativa directa al Excel. Guarda tu catálogo de servicios, registra el historial de presupuestos por cliente y genera PDFs profesionales sin fórmulas ni formatos complicados.</p>
                </details>
                <details class="faq-item">
                    <summary>¿Puedo ver si mi cliente revisó el presupuesto?</summary>
                    <p>Sí. Cotízalo notifica cuando el cliente abre el enlace del presupuesto. Así sabes exactamente si lo leyó y puedes hacer seguimiento en el momento adecuado para cerrar la venta.</p>
                </details>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="lp-cta">
        <div class="container animate-on-scroll fade-in-up">
            <h2>Empieza a presupuestar de forma profesional hoy</h2>
            <p>14 días gratis, sin tarjeta de crédito. Configura tu primera plantilla en menos de 5 minutos.</p>
            <a href="<?php echo esc_url(get_theme_mod('nav_signup_url', 'https://app.cotizalo.net/signup')); ?>" class="btn btn-primary btn-lg" style="background:#fff; color:#1a3a5c; border-color:#fff;">
                Crear mi cuenta gratis
            </a>
            <div class="related-links">
                <a href="<?php echo esc_url(home_url('/software-para-cotizaciones/')); ?>">Software para cotizaciones</a>
                <span>·</span>
                <a href="<?php echo esc_url(home_url('/precios/')); ?>">Ver planes y precios</a>
                <span>·</span>
                <a href="<?php echo esc_url(home_url('/software-de-cotizaciones-para-servicios/')); ?>">Para empresas de servicios</a>
                <span>·</span>
                <a href="<?php echo esc_url(home_url('/plantilla-de-cotizacion/')); ?>">Plantilla de cotización gratis</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-brand">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="logo mb-1">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/assets/logos/LOGOTIPO3/Cotizalo-8.png?v=2" alt="Cotízalo Logo" style="height:70px;width:auto;object-fit:contain;" id="footer-logo" width="260" height="70">
                    </a>
                    <p class="text-muted mt-1" style="max-width:300px;"><?php echo esc_html(get_theme_mod('footer_brand_text', 'Transformando la forma en que los equipos de ventas crean, envían y cierran propuestas.')); ?></p>
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
                        <li><a href="<?php echo esc_url(home_url('/software-para-cotizaciones/')); ?>">Software para cotizaciones</a></li>
                        <li><a href="<?php echo esc_url(home_url('/programa-para-hacer-presupuestos/')); ?>">Programa para presupuestos</a></li>
                        <li><a href="<?php echo esc_url(home_url('/cotizaciones-por-whatsapp/')); ?>">Cotizaciones por WhatsApp</a></li>
                        <li><a href="<?php echo esc_url(home_url('/plantilla-de-cotizacion/')); ?>">Plantilla de cotización</a></li>
                        <li><a href="<?php echo esc_url(home_url('/software-de-cotizaciones-para-constructoras/')); ?>">Para constructoras</a></li>
                        <li><a href="<?php echo esc_url(home_url('/software-de-cotizaciones-para-servicios/')); ?>">Para servicios</a></li>
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
                <p>&copy; <?php echo date('Y'); ?> <?php echo esc_html(get_theme_mod('footer_copyright', 'DrG Labs CO. Todos los derechos reservados.')); ?></p>
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const header = document.getElementById('navbar');
            let ticking = false;
            window.addEventListener('scroll', () => {
                if (!ticking) { window.requestAnimationFrame(() => { header.classList.toggle('scrolled', window.scrollY > 50); ticking = false; }); ticking = true; }
            }, { passive: true });
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
