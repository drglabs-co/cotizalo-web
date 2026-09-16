<?php
/**
 * Template Name: Qué es Cotízalo
 * Template Post Type: page
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <link rel="canonical" href="<?php echo esc_url( is_front_page() ? home_url('/') : get_permalink() ); ?>">
    <title>¿Qué es Cotízalo? | Digitaliza tus Cotizaciones y Presupuestos</title>
    <meta name="description"
        content="Descubre cómo Cotízalo ayuda a microempresas y profesionales en México a dejar atrás el Excel. Crea propuestas rápidas, profesionales y con seguimiento automático.">
    <meta name="keywords" content="cotizaciones web, cotizaciones online mexico app, digitalizar cotizaciones, cotizador para empresas, programa de cotizaciones, cotizador gratis, herramientas para cotizar, automatizar ventas, enviar cotizacion por whatsapp, alternativa a excel para cotizaciones, control de cotizaciones y clientes, cotizador para freelancers, cotizador para pymes">
    
    <!-- Open Graph / Facebook / WhatsApp -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo esc_url( home_url( $_SERVER['REQUEST_URI'] ) ); ?>">
    <meta property="og:title" content="¿Qué es Cotízalo? | Digitaliza tus Cotizaciones y Presupuestos">
    <meta property="og:description" content="Descubre cómo Cotízalo ayuda a microempresas y profesionales en México a dejar atrás el Excel. Crea propuestas rápidas, profesionales y con seguimiento automático.">
    <meta property="og:image" content="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/assets/logos/ISOTIPO/Cotizalo-5.png">
    <meta property="og:locale" content="es_MX">

    <!-- Twitter / X -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="¿Qué es Cotízalo? | Digitaliza tus Cotizaciones y Presupuestos">
    <meta name="twitter:description" content="Descubre cómo Cotízalo ayuda a microempresas y profesionales en México a dejar atrás el Excel. Crea propuestas rápidas, profesionales y con seguimiento automático.">
    <meta name="twitter:image" content="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/assets/logos/ISOTIPO/Cotizalo-5.png">

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
    
    <style>
        /* Minimal custom styles for this page if needed */
        .page-hero {
            padding-top: calc(var(--nav-height) + 4rem);
            padding-bottom: 4rem;
            text-align: center;
        }
        .content-box {
            background: var(--bg-light);
            border-radius: var(--radius-lg);
            padding: 3rem;
            margin-bottom: 2rem;
            border: 1px solid var(--border-light);
            color: var(--text-dark);
            box-shadow: var(--shadow-sm);
        }
        .content-box h2 {
            color: var(--primary);
            margin-bottom: 1.5rem;
        }
        .content-box p {
            color: var(--text-dark-muted);
            line-height: 1.8;
            margin-bottom: 1rem;
        }
        .content-box ul {
            list-style: none;
            padding: 0;
            margin: 1.5rem 0;
        }
        .content-box li {
            position: relative;
            padding-left: 2rem;
            margin-bottom: 1rem;
            color: var(--text-dark-muted);
        }
        .content-box li::before {
            content: '✓';
            position: absolute;
            left: 0;
            color: var(--primary);
            font-weight: bold;
        }
    </style>
    <!-- Structured Data (Schema.org JSON-LD) -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@graph": [
            {
                "@type": "AboutPage",
                "@id": "<?php echo esc_url( get_permalink() ); ?>#webpage",
                "url": "<?php echo esc_url( get_permalink() ); ?>",
                "name": "¿Qué es Cotízalo? | Digitaliza tus Cotizaciones y Presupuestos",
                "description": "Descubre cómo Cotízalo ayuda a microempresas y profesionales en México a dejar atrás el Excel. Crea propuestas rápidas, profesionales y con seguimiento automático.",
                "isPartOf": {
                    "@id": "<?php echo esc_url( home_url('/') ); ?>#website"
                },
                "breadcrumb": {
                    "@id": "<?php echo esc_url( get_permalink() ); ?>#breadcrumb"
                },
                "inLanguage": "es-MX"
            },
            {
                "@type": "BreadcrumbList",
                "@id": "<?php echo esc_url( get_permalink() ); ?>#breadcrumb",
                "itemListElement": [
                    {
                        "@type": "ListItem",
                        "position": 1,
                        "name": "Inicio",
                        "item": "<?php echo esc_url( home_url('/') ); ?>"
                    },
                    {
                        "@type": "ListItem",
                        "position": 2,
                        "name": "¿Qué es Cotízalo?"
                    }
                ]
            }
        ]
    }
    </script>
    <link rel="preload" as="image" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/assets/logos/LOGOTIPO3/Cotizalo-8.png?v=2" type="image/png">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <!-- Nav Section -->
    <header id="navbar">
        <div class="container nav-container">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/assets/logos/LOGOTIPO3/Cotizalo-8.png?v=2"
                    alt="Cotízalo Logo" id="brand-logo" width="223" height="60">
            </a>
            <ul class="nav-links">
                <li><a href="<?php echo esc_url(home_url('/que-es-cotizalo/')); ?>" class="nav-item nav-item--active">¿Qué es Cotízalo?</a></li>
                <li><a href="<?php echo esc_url(home_url('/')); ?>#features" class="nav-item">Características</a></li>
                <li><a href="<?php echo esc_url(home_url('/precios/')); ?>" class="nav-item">Precios</a></li>
                <li class="nav-dropdown">
                    <button class="nav-item nav-dropdown-toggle" aria-haspopup="true" aria-expanded="false">
                        Recursos
                        <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
                    </button>
                    <ul class="nav-dropdown-menu">
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
                <a href="<?php echo esc_url(get_theme_mod('nav_login_url', 'https://app.cotizalo.net/login')); ?>" class="btn btn-secondary btn-nav"><?php echo esc_html(get_theme_mod('nav_login_text', 'Ingresar')); ?></a>
                <a href="<?php echo esc_url(get_theme_mod('nav_signup_url', 'https://app.cotizalo.net/signup')); ?>" class="btn btn-primary btn-nav"><?php echo esc_html(get_theme_mod('nav_signup_text', 'Empezar Gratis')); ?></a>
            </div>

            <!-- Mobile Menu Toggle -->
            <div class="mobile-menu-btn">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </header>

    <!-- Hero -->
    <section class="page-hero" style="padding-bottom: 4rem;">
        <div class="bg-shape bg-shape-1"></div>
        <div class="container relative z-10 animate-on-scroll fade-in-up" style="text-align:center;">
            <span style="display:inline-block; background:rgba(255,255,255,0.12); border:1px solid rgba(255,255,255,0.25); color:#fff; font-size:0.8rem; font-weight:700; letter-spacing:0.1em; text-transform:uppercase; padding:0.35rem 1rem; border-radius:999px; margin-bottom:1.25rem;">
                Conoce Cotízalo
            </span>
            <h1 class="display-title-sm" style="margin-bottom: 1rem;"><?php echo esc_html(get_theme_mod('que_es_title', '¿Qué es Cotízalo?')); ?></h1>
            <p class="text-muted" style="max-width: 640px; margin: 0 auto 2.5rem; font-size: 1.2rem; line-height: 1.75;">
                <?php echo esc_html(get_theme_mod('que_es_subtitle', 'La herramienta directa, simple y sin complicaciones para emprendedores que quieren dejar atrás el Excel y el papel.')); ?>
            </p>
            <a href="<?php echo esc_url(get_theme_mod('nav_signup_url', 'https://app.cotizalo.net/signup')); ?>" class="btn btn-primary btn-lg">
                <?php echo esc_html(get_theme_mod('hero_btn_text', 'Empieza gratis — 14 días sin tarjeta')); ?>
            </a>
        </div>
    </section>

    <!-- App Mockup -->
    <section style="background:#fff; padding:4rem 0 5rem;">
        <div class="container animate-on-scroll fade-in-up">
            <p class="section-eyebrow" style="text-align:center; font-size:0.8rem; font-weight:700; letter-spacing:0.12em; text-transform:uppercase; color:var(--primary); margin-bottom:0.75rem;">La plataforma</p>
            <h2 style="text-align:center; font-size:clamp(1.75rem,3vw,2.5rem); font-weight:700; color:var(--text-dark); margin-bottom:0.75rem; letter-spacing:-0.02em;">Así se ve Cotízalo por dentro</h2>
            <p style="text-align:center; color:var(--text-dark-muted); font-size:1.05rem; max-width:560px; margin:0 auto 2.5rem;">Una interfaz limpia y profesional para gestionar todas tus cotizaciones desde un solo lugar.</p>
            <div style="max-width:900px; margin:0 auto; border-radius:14px; overflow:hidden; box-shadow:0 30px 80px rgba(0,0,0,0.12), 0 2px 8px rgba(0,0,0,0.06); border:1px solid rgba(0,0,0,0.07);">
                <!-- Chrome bar -->
                <div style="background:#e8eaed; padding:0.55rem 1rem; display:flex; align-items:center; gap:0.75rem; border-bottom:1px solid rgba(0,0,0,0.08);">
                    <div style="display:flex; gap:6px;">
                        <span style="width:12px;height:12px;border-radius:50%;background:#ef4444;display:inline-block;"></span>
                        <span style="width:12px;height:12px;border-radius:50%;background:#f59e0b;display:inline-block;"></span>
                        <span style="width:12px;height:12px;border-radius:50%;background:#10b981;display:inline-block;"></span>
                    </div>
                    <div style="flex:1;background:#fff;border-radius:20px;padding:0.3rem 0.9rem;font-size:0.8rem;color:#64748b;display:flex;align-items:center;gap:6px;border:1px solid #cbd5e1;max-width:320px;margin:0 auto;">
                        <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="#64748b" stroke-width="2.5"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
                        app.cotizalo.net
                    </div>
                </div>
                <!-- SVG App UI -->
                <svg viewBox="0 0 880 480" xmlns="http://www.w3.org/2000/svg" style="display:block;width:100%;height:auto;background:#f8fafc;">
                  <rect x="0" y="0" width="200" height="480" fill="#123A2C"/>
                  <image href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/assets/logos/ISOTIPO/Cotizalo%20-%20ISOTIPO-8.png" x="14" y="16" height="26" width="26"/>
                  <text x="46" y="33" fill="#fff" font-family="-apple-system,sans-serif" font-size="11.5" font-weight="700">Cotízalo</text>
                  <line x1="14" y1="56" x2="186" y2="56" stroke="rgba(255,255,255,0.1)" stroke-width="1"/>
                  <g transform="translate(10,68)"><text x="34" y="14" fill="rgba(255,255,255,0.65)" font-family="sans-serif" font-size="11">Panel de Control</text></g>
                  <g transform="translate(10,102)"><text x="34" y="14" fill="rgba(255,255,255,0.65)" font-family="sans-serif" font-size="11">Métricas</text></g>
                  <g transform="translate(10,136)">
                    <rect width="180" height="30" rx="6" fill="rgba(74,222,128,0.15)"/>
                    <rect x="0" y="0" width="3" height="30" rx="1.5" fill="#4ade80"/>
                    <text x="34" y="19" fill="#4ade80" font-family="sans-serif" font-size="11" font-weight="700">Cotizaciones</text>
                  </g>
                  <g transform="translate(10,170)"><text x="34" y="14" fill="rgba(255,255,255,0.65)" font-family="sans-serif" font-size="11">Recibos de Anticipo</text></g>
                  <g transform="translate(10,204)"><text x="34" y="14" fill="rgba(255,255,255,0.65)" font-family="sans-serif" font-size="11">Clientes</text></g>
                  <g transform="translate(10,238)"><text x="34" y="14" fill="rgba(255,255,255,0.65)" font-family="sans-serif" font-size="11">Productos</text></g>
                  <g transform="translate(10,272)"><text x="34" y="14" fill="rgba(255,255,255,0.65)" font-family="sans-serif" font-size="11">Configuración</text></g>
                  <rect x="216" y="12" width="648" height="456" rx="10" fill="#fff" stroke="#e2e8f0" stroke-width="1"/>
                  <g transform="translate(232,26)">
                    <text x="20" y="19" fill="#0f172a" font-family="sans-serif" font-size="15" font-weight="800">Cotizaciones</text>
                    <rect x="360" y="0" width="140" height="28" rx="6" fill="#123A2C"/>
                    <text x="372" y="18" fill="#fff" font-family="sans-serif" font-size="10" font-weight="700">+ Crear Nueva Cotización</text>
                  </g>
                  <g transform="translate(232,64)">
                    <rect width="220" height="28" rx="5" fill="#f8fafc" stroke="#cbd5e1" stroke-width="1"/>
                    <text x="26" y="18" fill="#94a3b8" font-family="sans-serif" font-size="10">Buscar por folio, cliente...</text>
                  </g>
                  <g transform="translate(232,106)">
                    <rect width="616" height="26" fill="#f8fafc"/>
                    <line x1="0" y1="26" x2="616" y2="26" stroke="#e2e8f0" stroke-width="1"/>
                    <text x="10" y="17" fill="#475569" font-family="sans-serif" font-size="9" font-weight="700"># FOLIO</text>
                    <text x="110" y="17" fill="#475569" font-family="sans-serif" font-size="9" font-weight="700">FECHA</text>
                    <text x="185" y="17" fill="#475569" font-family="sans-serif" font-size="9" font-weight="700">CLIENTE</text>
                    <text x="380" y="17" fill="#475569" font-family="sans-serif" font-size="9" font-weight="700">TOTAL</text>
                    <text x="460" y="17" fill="#475569" font-family="sans-serif" font-size="9" font-weight="700">ESTADO</text>
                  </g>
                  <g transform="translate(232,136)">
                    <line x1="0" y1="42" x2="616" y2="42" stroke="#f1f5f9" stroke-width="1"/>
                    <text x="10" y="24" fill="#2563eb" font-family="sans-serif" font-size="11" font-weight="700">#COT-2026-042</text>
                    <text x="110" y="24" fill="#334155" font-family="sans-serif" font-size="10">20 Sep 2026</text>
                    <text x="185" y="18" fill="#0f172a" font-family="sans-serif" font-size="10" font-weight="700">Constructora Alpha S.A.</text>
                    <text x="185" y="30" fill="#64748b" font-family="sans-serif" font-size="8.5">+52 55 4123 8900</text>
                    <text x="380" y="24" fill="#0f172a" font-family="sans-serif" font-size="11" font-weight="700">$48,500.00</text>
                    <rect x="460" y="10" width="70" height="20" rx="4" fill="#dcfce7" stroke="#bbf7d0" stroke-width="1"/>
                    <text x="468" y="23" fill="#15803d" font-family="sans-serif" font-size="9" font-weight="800">ACEPTADA</text>
                  </g>
                  <g transform="translate(232,182)">
                    <line x1="0" y1="42" x2="616" y2="42" stroke="#f1f5f9" stroke-width="1"/>
                    <text x="10" y="24" fill="#2563eb" font-family="sans-serif" font-size="11" font-weight="700">#COT-2026-041</text>
                    <text x="110" y="24" fill="#334155" font-family="sans-serif" font-size="10">18 Sep 2026</text>
                    <text x="185" y="18" fill="#0f172a" font-family="sans-serif" font-size="10" font-weight="700">Agencia de Diseño Creativo</text>
                    <text x="185" y="30" fill="#64748b" font-family="sans-serif" font-size="8.5">+52 81 8345 6789</text>
                    <text x="380" y="24" fill="#0f172a" font-family="sans-serif" font-size="11" font-weight="700">$12,800.00</text>
                    <rect x="460" y="10" width="70" height="20" rx="4" fill="#fef9c3" stroke="#fde047" stroke-width="1"/>
                    <text x="467" y="23" fill="#854d0e" font-family="sans-serif" font-size="9" font-weight="800">PENDIENTE</text>
                  </g>
                  <g transform="translate(232,228)">
                    <line x1="0" y1="42" x2="616" y2="42" stroke="#f1f5f9" stroke-width="1"/>
                    <text x="10" y="24" fill="#2563eb" font-family="sans-serif" font-size="11" font-weight="700">#COT-2026-040</text>
                    <text x="110" y="24" fill="#334155" font-family="sans-serif" font-size="10">16 Sep 2026</text>
                    <text x="185" y="18" fill="#0f172a" font-family="sans-serif" font-size="10" font-weight="700">Servicios Industriales Norte</text>
                    <text x="185" y="30" fill="#64748b" font-family="sans-serif" font-size="8.5">+52 33 3612 4578</text>
                    <text x="380" y="24" fill="#0f172a" font-family="sans-serif" font-size="11" font-weight="700">$95,600.00</text>
                    <rect x="460" y="10" width="70" height="20" rx="4" fill="#dbeafe" stroke="#bfdbfe" stroke-width="1"/>
                    <text x="469" y="23" fill="#1d4ed8" font-family="sans-serif" font-size="9" font-weight="800">PAGADA</text>
                  </g>
                  <g transform="translate(232,440)">
                    <line x1="0" y1="0" x2="616" y2="0" stroke="#e2e8f0" stroke-width="1"/>
                    <text x="0" y="20" fill="#64748b" font-family="sans-serif" font-size="10">Página 1 de 1 (3 elementos)</text>
                  </g>
                </svg>
            </div>
        </div>
    </section>

    <!-- Features grid -->
    <section style="background:var(--bg-light-alt); padding:5rem 0 6rem;">
        <div class="container animate-on-scroll fade-in-up">
            <p style="text-align:center; font-size:0.8rem; font-weight:700; letter-spacing:0.12em; text-transform:uppercase; color:var(--primary); margin-bottom:0.75rem;">Por qué Cotízalo</p>
            <h2 style="text-align:center; font-size:clamp(1.75rem,3vw,2.5rem); font-weight:700; color:var(--text-dark); margin-bottom:0.75rem; letter-spacing:-0.02em;">Todo lo que necesita tu negocio</h2>
            <p style="text-align:center; color:var(--text-dark-muted); font-size:1.05rem; max-width:560px; margin:0 auto 3.5rem;">Sin hojas de cálculo, sin documentos de Word desorganizados, sin imágenes por WhatsApp.</p>
            <div style="display:grid; grid-template-columns:repeat(3,1fr); gap:1.75rem;">
                <?php
                $features = [
                    ['📄', 'Cotizaciones en PDF profesional', 'Genera propuestas con tu logo, datos fiscales y diseño personalizado. Descárgalas o compártelas en un clic.'],
                    ['💬', 'Envío por WhatsApp y correo', 'Comparte un enlace directo desde WhatsApp. Tu cliente lo ve desde el celular sin instalar nada.'],
                    ['📊', 'Seguimiento en tiempo real', 'Sabe cuándo tu cliente abrió la cotización y da seguimiento desde un panel central.'],
                    ['🗂️', 'Catálogo de productos', 'Guarda tus productos y precios una sola vez. Agrégalos a cualquier cotización en segundos.'],
                    ['✍️', 'Firma digital incluida', 'Tu cliente firma digitalmente desde el enlace. Queda registrada con fecha y hora.'],
                    ['💳', 'Cobro de anticipos', 'Solicita un anticipo directamente desde la cotización. Recibe el pago antes de iniciar.'],
                ];
                foreach ($features as $f): ?>
                <div style="background:#fff; border:1px solid var(--border-light); border-radius:var(--radius-lg); padding:2rem 1.75rem; transition:transform 0.25s, box-shadow 0.25s;" onmouseover="this.style.transform='translateY(-4px)';this.style.boxShadow='0 16px 40px rgba(18,58,44,0.1)';" onmouseout="this.style.transform='';this.style.boxShadow='';">
                    <div style="font-size:1.75rem; margin-bottom:0.85rem;"><?php echo $f[0]; ?></div>
                    <h3 style="font-size:1.05rem; font-weight:600; color:var(--text-dark); margin-bottom:0.45rem;"><?php echo esc_html($f[1]); ?></h3>
                    <p style="color:var(--text-dark-muted); font-size:0.94rem; line-height:1.65; margin:0;"><?php echo esc_html($f[2]); ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section style="background:linear-gradient(135deg,var(--primary) 0%,#1a4d38 100%); padding:5rem 0; text-align:center;">
        <div class="container animate-on-scroll fade-in-up">
            <h2 style="font-size:clamp(1.75rem,3vw,2.75rem); font-weight:700; color:#fff; margin-bottom:1rem;">Empieza a cotizar de forma profesional</h2>
            <p style="color:rgba(255,255,255,0.8); font-size:1.1rem; margin:0 auto 2rem; max-width:480px;">14 días gratis, sin tarjeta de crédito. Configura tu cuenta en menos de 5 minutos.</p>
            <a href="<?php echo esc_url(get_theme_mod('nav_signup_url', 'https://app.cotizalo.net/signup')); ?>" class="btn btn-primary btn-lg">
                Crear mi cuenta gratis →
            </a>
            <p style="margin-top:1.25rem; font-size:0.875rem; color:rgba(255,255,255,0.6);">Sin comisiones. Sin contrato. Cancela cuando quieras.</p>
        </div>
    </section>


    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-brand">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="logo mb-1">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/assets/logos/LOGOTIPO3/Cotizalo-8.png?v=2"
                            alt="Cotízalo Logo" style="height: 70px; width: auto; object-fit: contain;"
                            id="footer-logo" width="260" height="70">
                    </a>
                    <p class="text-muted mt-1" style="max-width: 300px;"><?php echo esc_html(get_theme_mod('footer_brand_text', 'Transformando la forma en que los equipos de ventas crean, envían y cierran propuestas.')); ?></p>
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

    <!-- Scripts -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const header = document.getElementById('navbar');
            let ticking = false;
            window.addEventListener('scroll', () => {
                if (!ticking) {
                    window.requestAnimationFrame(() => {
                        if (window.scrollY > 50) {
                            header.classList.add('scrolled');
                        } else {
                            header.classList.remove('scrolled');
                        }
                        ticking = false;
                    });
                    ticking = true;
                }
            }, { passive: true });

            // Logo fallbacks
            const fallbacks = ['brand-logo', 'footer-logo'];
            fallbacks.forEach(id => {
                const img = document.getElementById(id);
                if (img) {
                    img.onerror = function () {
                        this.style.display = 'none';
                        const parent = this.parentElement;
                        parent.innerHTML = '<span style="font-weight: 700; font-family: Montserrat; font-size: 1.5rem; color: #fff; display: flex; align-items: center; gap: 8px;"><svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="#123A2C" stroke-width="2"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg>cotizalo.net</span>';
                    };
                }
            });

            const observerOptions = { root: null, rootMargin: '0px', threshold: 0.1 };
            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);

            document.querySelectorAll('.animate-on-scroll').forEach(el => { observer.observe(el); });

            const mobileBtn = document.querySelector('.mobile-menu-btn');
            const navContainer = document.querySelector('.nav-container');
            if (mobileBtn && navContainer) {
                mobileBtn.addEventListener('click', () => {
                    mobileBtn.classList.toggle('open');
                    header.classList.toggle('menu-open');
                    navContainer.classList.toggle('menu-open');
                });
            }
        });
    </script>
    <?php wp_footer(); ?>
</body>
</html>
