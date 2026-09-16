<?php
/**
 * Template Name: Cotizaciones por WhatsApp
 * Template Post Type: page
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <link rel="canonical" href="<?php echo esc_url( home_url('/cotizaciones-por-whatsapp/') ); ?>">
    <title>Envía Cotizaciones por WhatsApp en Segundos | Cotízalo</title>
    <meta name="description"
        content="Crea una cotización profesional en Cotízalo y compártela por WhatsApp en un clic. Tu cliente la ve desde su celular, puede firmarla y pagar un anticipo. Sin apps extra. Prueba gratis.">
    <meta name="keywords" content="cotizaciones por whatsapp, enviar cotizacion por whatsapp, compartir cotizacion whatsapp, presupuesto por whatsapp, cotizar por whatsapp, enviar propuesta whatsapp">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo esc_url( home_url('/cotizaciones-por-whatsapp/') ); ?>">
    <meta property="og:title" content="Envía Cotizaciones por WhatsApp en Segundos | Cotízalo">
    <meta property="og:description" content="Crea una cotización profesional y compártela por WhatsApp en un clic. Tu cliente la ve desde su celular y puede firmarla. Prueba gratis.">
    <meta property="og:image" content="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/assets/logos/ISOTIPO/Cotizalo-5.png">
    <meta property="og:locale" content="es_MX">

    <!-- Twitter / X -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Envía Cotizaciones por WhatsApp en Segundos | Cotízalo">
    <meta name="twitter:description" content="Crea una cotización profesional y compártela por WhatsApp en un clic. Prueba gratis.">
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
                "@id": "<?php echo esc_url( home_url('/cotizaciones-por-whatsapp/') ); ?>#webpage",
                "url": "<?php echo esc_url( home_url('/cotizaciones-por-whatsapp/') ); ?>",
                "name": "Envía Cotizaciones por WhatsApp en Segundos | Cotízalo",
                "description": "Crea una cotización profesional y compártela por WhatsApp en un clic.",
                "isPartOf": { "@id": "<?php echo esc_url( home_url('/') ); ?>#website" },
                "breadcrumb": { "@id": "<?php echo esc_url( home_url('/cotizaciones-por-whatsapp/') ); ?>#breadcrumb" },
                "inLanguage": "es-MX"
            },
            {
                "@type": "BreadcrumbList",
                "@id": "<?php echo esc_url( home_url('/cotizaciones-por-whatsapp/') ); ?>#breadcrumb",
                "itemListElement": [
                    { "@type": "ListItem", "position": 1, "name": "Inicio", "item": "<?php echo esc_url( home_url('/') ); ?>" },
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
    <link rel="preload" as="image" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/assets/logos/LOGOTIPO3/Cotizalo-8.png?v=2" type="image/png">
    <?php wp_head(); ?>

    <style>
        .lp-hero { padding-top: calc(var(--nav-height) + 5rem); padding-bottom: 5rem; background: linear-gradient(135deg, #075E54 0%, #128C7E 60%, var(--bg-surface) 100%); text-align: center; }
        .lp-hero h1 { font-size: clamp(2rem, 4.5vw, 3.5rem); font-weight: 700; color: #fff; letter-spacing: -0.02em; margin-bottom: 1.25rem; max-width: 800px; margin-left: auto; margin-right: auto; }
        .lp-hero p { color: rgba(255,255,255,0.85); font-size: 1.175rem; max-width: 600px; margin: 0 auto 2rem; line-height: 1.7; }
        .lp-hero .badge-pill { display: inline-flex; align-items: center; gap: 0.5rem; background: rgba(255,255,255,0.15); border: 1px solid rgba(255,255,255,0.3); color: #fff; font-size: 0.875rem; font-weight: 600; padding: 0.4rem 1.1rem; border-radius: var(--radius-full); margin-bottom: 1.5rem; }
        .flow-section { background: #fff; padding: 5rem 0; }
        .section-eyebrow { text-align: center; font-size: 0.8rem; font-weight: 700; letter-spacing: 0.12em; text-transform: uppercase; color: #075E54; margin-bottom: 0.75rem; }
        .section-title { text-align: center; font-size: clamp(1.75rem, 3vw, 2.5rem); font-weight: 700; color: var(--text-dark); margin-bottom: 1rem; letter-spacing: -0.02em; }
        .section-subtitle { text-align: center; color: var(--text-dark-muted); font-size: 1.05rem; max-width: 580px; margin: 0 auto 3.5rem; }
        .flow-steps { display: grid; grid-template-columns: repeat(3, 1fr); gap: 2rem; position: relative; }
        @media (max-width: 768px) { .flow-steps { grid-template-columns: 1fr; } }
        .flow-step { text-align: center; padding: 2rem 1.5rem; background: var(--bg-light-alt); border-radius: var(--radius-lg); position: relative; }
        .flow-step-icon { width: 64px; height: 64px; border-radius: 50%; background: #075E54; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.25rem; }
        .flow-step-icon svg { stroke: #fff; }
        .flow-step-number { position: absolute; top: 1rem; right: 1rem; width: 28px; height: 28px; background: #25D366; color: #fff; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 0.8rem; }
        .flow-step h3 { font-size: 1.1rem; font-weight: 600; color: var(--text-dark); margin-bottom: 0.5rem; }
        .flow-step p { color: var(--text-dark-muted); font-size: 0.95rem; line-height: 1.6; }
        .benefits-section { background: var(--bg-light-alt); padding: 5rem 0 6rem; }
        .benefits-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 1.75rem; }
        @media (max-width: 900px) { .benefits-grid { grid-template-columns: repeat(2, 1fr); } }
        @media (max-width: 580px) { .benefits-grid { grid-template-columns: 1fr; } }
        .benefit-card { background: #fff; border: 1px solid var(--border-light); border-radius: var(--radius-lg); padding: 2rem 1.75rem; transition: transform 0.25s ease, box-shadow 0.25s ease; }
        .benefit-card:hover { transform: translateY(-4px); box-shadow: 0 16px 40px rgba(7,94,84,0.1); }
        .benefit-icon { width: 48px; height: 48px; background: rgba(7,94,84,0.08); border-radius: var(--radius-md); display: flex; align-items: center; justify-content: center; margin-bottom: 1rem; }
        .benefit-icon svg { stroke: #075E54; }
        .benefit-card h3 { font-size: 1.1rem; font-weight: 600; color: var(--text-dark); margin-bottom: 0.5rem; }
        .benefit-card p { color: var(--text-dark-muted); font-size: 0.95rem; line-height: 1.6; }
        .faq-section { background: #fff; padding: 5rem 0; }
        .faq-list { max-width: 760px; margin: 0 auto; display: flex; flex-direction: column; gap: 1rem; }
        details.faq-item { background: var(--bg-light-alt); border: 1px solid var(--border-light); border-radius: var(--radius-md); padding: 1.5rem; cursor: pointer; }
        details.faq-item summary { font-weight: 600; color: var(--text-dark); list-style: none; display: flex; justify-content: space-between; align-items: center; gap: 1rem; font-size: 1rem; }
        details.faq-item summary::after { content: '+'; font-size: 1.5rem; font-weight: 300; color: #075E54; flex-shrink: 0; transition: transform 0.2s; }
        details.faq-item[open] summary::after { transform: rotate(45deg); }
        details.faq-item p { margin-top: 1rem; color: var(--text-dark-muted); line-height: 1.7; font-size: 0.975rem; }
        .lp-cta { background: linear-gradient(135deg, #075E54 0%, #128C7E 100%); padding: 5rem 0; text-align: center; }
        .lp-cta h2 { font-size: clamp(1.75rem, 3vw, 2.75rem); font-weight: 700; color: #fff; margin-bottom: 1rem; }
        .lp-cta p { color: rgba(255,255,255,0.85); font-size: 1.1rem; margin-bottom: 2rem; max-width: 500px; margin-left: auto; margin-right: auto; }
        .related-links { display: flex; flex-wrap: wrap; gap: 0.75rem; justify-content: center; margin-top: 2rem; }
        .related-links a { font-size: 0.875rem; color: rgba(255,255,255,0.75); text-decoration: underline; text-underline-offset: 3px; }
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
            <span class="badge-pill">💬 WhatsApp + Cotizaciones</span>
            <h1>Envía cotizaciones profesionales por WhatsApp en un clic</h1>
            <p>Crea la cotización en Cotízalo y compártela por WhatsApp en segundos. Tu cliente la ve desde su celular, puede aceptarla con firma digital y pagar un anticipo, todo sin instalar nada.</p>
            <a href="<?php echo esc_url(get_theme_mod('nav_signup_url', 'https://app.cotizalo.net/signup')); ?>" class="btn btn-primary btn-lg" style="background:#25D366; color:#fff; border-color:#25D366;">
                Empieza gratis — 14 días sin tarjeta
            </a>
            <p style="margin-top:1.25rem; font-size:0.875rem; color:rgba(255,255,255,0.65);">Sin comisiones. Sin contrato. Cancela cuando quieras.</p>
        </div>
    </section>

    <!-- Flow -->
    <section class="flow-section">
        <div class="container animate-on-scroll fade-in-up">
            <p class="section-eyebrow">El flujo completo</p>
            <h2 class="section-title">Cómo funciona enviar cotizaciones por WhatsApp</h2>
            <p class="section-subtitle">De la creación al cierre de venta, en tres pasos simples.</p>
            <div class="flow-steps">
                <div class="flow-step">
                    <div class="flow-step-number">1</div>
                    <div class="flow-step-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"/><polyline points="13 2 13 9 20 9"/></svg>
                    </div>
                    <h3>Crea tu cotización</h3>
                    <p>Agrega tus productos o servicios desde el catálogo, personaliza precios y escribe un mensaje para tu cliente. Lista en menos de 2 minutos.</p>
                </div>
                <div class="flow-step">
                    <div class="flow-step-number">2</div>
                    <div class="flow-step-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
                    </div>
                    <h3>Comparte por WhatsApp</h3>
                    <p>Copia el enlace o descarga el PDF y pégalo en WhatsApp. Tu cliente lo recibe en segundos y puede abrirlo desde cualquier celular.</p>
                </div>
                <div class="flow-step">
                    <div class="flow-step-number">3</div>
                    <div class="flow-step-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                    </div>
                    <h3>Cierra la venta</h3>
                    <p>Recibes una notificación cuando tu cliente abre la cotización. Puede firmarla y pagar un anticipo desde el mismo enlace, sin ir a ninguna oficina.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits -->
    <section class="benefits-section">
        <div class="container animate-on-scroll fade-in-up">
            <p class="section-eyebrow">Ventajas</p>
            <h2 class="section-title">Por qué es mejor que una foto o un mensaje de texto</h2>
            <p class="section-subtitle">Una cotización por WhatsApp con Cotízalo es más profesional, más rápida y mucho más fácil de dar seguimiento.</p>
            <div class="benefits-grid">
                <div class="benefit-card">
                    <div class="benefit-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
                    <h3>Aspecto 100% profesional</h3>
                    <p>Tu cotización llega como un documento con tu logo, tus datos fiscales y un diseño limpio, no como una foto de una hoja o un mensaje desorganizado.</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg></div>
                    <h3>Notificación cuando la abren</h3>
                    <p>Sabe exactamente en qué momento tu cliente revisó la cotización enviada por WhatsApp. Eso te permite hacer seguimiento en el momento ideal.</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg></div>
                    <h3>El cliente no necesita instalar nada</h3>
                    <p>El enlace abre directamente en el navegador del celular. Tu cliente puede revisarla, aceptarla o solicitar cambios sin crear ninguna cuenta.</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
                    <h3>Firma digital integrada</h3>
                    <p>Tu cliente puede aceptar y firmar la cotización directamente desde el enlace de WhatsApp. Queda registrado con fecha y hora.</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"/><line x1="1" y1="10" x2="23" y2="10"/></svg></div>
                    <h3>Cobro de anticipo en línea</h3>
                    <p>Desde el mismo enlace, tu cliente puede pagar un anticipo o depósito. Cobras antes de iniciar el trabajo, desde el chat de WhatsApp.</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg></div>
                    <h3>Historial de cotizaciones enviadas</h3>
                    <p>Todas las cotizaciones que enviaste por WhatsApp quedan guardadas en tu panel. Sin archivos perdidos, sin buscar en chats antiguos.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="faq-section">
        <div class="container animate-on-scroll fade-in-up">
            <p class="section-eyebrow">Preguntas frecuentes</p>
            <h2 class="section-title">Todo sobre cotizaciones por WhatsApp</h2>
            <div class="faq-list" style="margin-top:2.5rem;">
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

    <!-- CTA -->
    <section class="lp-cta">
        <div class="container animate-on-scroll fade-in-up">
            <h2>Empieza a cotizar por WhatsApp de forma profesional</h2>
            <p>14 días gratis, sin tarjeta de crédito. Envía tu primera cotización por WhatsApp en menos de 5 minutos.</p>
            <a href="<?php echo esc_url(get_theme_mod('nav_signup_url', 'https://app.cotizalo.net/signup')); ?>" class="btn btn-primary btn-lg" style="background:#25D366; color:#fff; border-color:#25D366;">
                Crear mi cuenta gratis
            </a>
            <div class="related-links">
                <a href="<?php echo esc_url(home_url('/software-para-cotizaciones/')); ?>">Software para cotizaciones</a>
                <span>·</span>
                <a href="<?php echo esc_url(home_url('/precios/')); ?>">Ver planes y precios</a>
                <span>·</span>
                <a href="<?php echo esc_url(home_url('/programa-para-hacer-presupuestos/')); ?>">Programa para presupuestos</a>
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
