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
  <link rel="canonical" href="<?php echo esc_url(is_front_page() ? home_url('/') : get_permalink()); ?>">
  <title>Software de Cotizaciones para Pequeños Negocios | Cotízalo</title>
  <meta name="description"
    content="Crea cotizaciones profesionales, envíalas por WhatsApp y da seguimiento a clientes desde cualquier dispositivo. Prueba Cotízalo gratis en México.">

  <!-- Open Graph / Facebook / WhatsApp -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?php echo esc_url(home_url($_SERVER['REQUEST_URI'])); ?>">
  <meta property="og:title" content="Software de Cotizaciones para Pequeños Negocios | Cotízalo">
  <meta property="og:description"
    content="Crea cotizaciones profesionales, envíalas por WhatsApp y da seguimiento a clientes desde cualquier dispositivo. Prueba Cotízalo gratis en México.">
  <meta property="og:image" content="<?php echo esc_url(get_template_directory_uri()); ?>/assets/assets/og-social.jpg">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">
  <meta property="og:locale" content="es_MX">

  <!-- Twitter / X -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Software de Cotizaciones para Pequeños Negocios | Cotízalo">
  <meta name="twitter:description"
    content="Crea cotizaciones profesionales, envíalas por WhatsApp y da seguimiento a clientes desde cualquier dispositivo. Prueba Cotízalo gratis en México.">
  <meta name="twitter:image" content="<?php echo esc_url(get_template_directory_uri()); ?>/assets/assets/og-social.jpg">

  <!-- Google Fonts for modern typography -->
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
                "@id": "<?php echo esc_url(home_url('/')); ?>#webpage",
                "url": "<?php echo esc_url(home_url('/')); ?>",
                "name": "Software de Cotizaciones y Presupuestos para PyMEs en México | Cotízalo",
                "description": "Crea, envía y gestiona cotizaciones en PDF y WhatsApp en minutos. Olvídate de Excel. Inicia tu prueba gratis de 14 días con el mejor software para PyMEs.",
                "isPartOf": { "@id": "<?php echo esc_url(home_url('/')); ?>#website" },
                "breadcrumb": { "@id": "<?php echo esc_url(home_url('/')); ?>#breadcrumb" },
                "inLanguage": "es-MX"
            },
            {
                "@type": "BreadcrumbList",
                "@id": "<?php echo esc_url(home_url('/')); ?>#breadcrumb",
                "itemListElement": [
                    { "@type": "ListItem", "position": 1, "name": "Inicio", "item": "<?php echo esc_url(home_url('/')); ?>" }
                ]
            },
            {
                "@type": "WebSite",
                "@id": "<?php echo esc_url(home_url('/')); ?>#website",
                "url": "<?php echo esc_url(home_url('/')); ?>",
                "name": "Cotízalo",
                "description": "Sistema de cotizaciones automatizado para empresas en México",
                "publisher": {
                    "@id": "<?php echo esc_url(home_url('/')); ?>#organization"
                }
            },
            {
                "@type": "Organization",
                "@id": "<?php echo esc_url(home_url('/')); ?>#organization",
                "name": "Cotízalo",
                "url": "<?php echo esc_url(home_url('/')); ?>",
                "logo": {
                    "@type": "ImageObject",
                    "url": "<?php echo esc_url(get_template_directory_uri()); ?>/assets/assets/logos/ISOTIPO/Cotizalo-5.png"
                },
                "sameAs": [
                    "https://www.facebook.com/cotizalo.net",
                    "https://www.instagram.com/cotizalo",
                    "https://www.linkedin.com/company/cotizalo"
                ],
                "contactPoint": {
                    "@type": "ContactPoint",
                    "contactType": "customer support",
                    "url": "<?php echo esc_url(home_url('/soporte/')); ?>",
                    "availableLanguage": "Spanish"
                },
                "areaServed": {
                    "@type": "Country",
                    "name": "México"
                }
            },
            {
                "@type": "SoftwareApplication",
                "@id": "<?php echo esc_url(home_url('/')); ?>#software",
                "name": "Cotízalo",
                "url": "<?php echo esc_url(home_url('/')); ?>",
                "applicationCategory": "BusinessApplication",
                "operatingSystem": "Web, Mobile",
                "description": "Sistema de cotizaciones automatizado para empresas y profesionales en México. Crea, envía y da seguimiento a propuestas profesionales en PDF.",
                "featureList": [
                    "Creación de cotizaciones en segundos",
                    "Envío por WhatsApp y correo electrónico",
                    "Firma digital de propuestas",
                    "Cobro de anticipos y depósitos en línea",
                    "Control de disponibilidad en tiempo real",
                    "Catálogo de precios y productos unificado"
                ],
                "offers": {
                    "@type": "AggregateOffer",
                    "priceCurrency": "MXN",
                    "lowPrice": "199",
                    "highPrice": "899",
                    "offerCount": "4",
                    "offers": [
                        {
                            "@type": "Offer",
                            "name": "Plan Inicial",
                            "price": "199",
                            "priceCurrency": "MXN",
                            "availability": "https://schema.org/InStock",
                            "priceValidUntil": "<?php echo date('Y-12-31'); ?>",
                            "url": "<?php echo esc_url(home_url('/precios/')); ?>"
                        },
                        {
                            "@type": "Offer",
                            "name": "Plan Básico",
                            "price": "399",
                            "priceCurrency": "MXN",
                            "availability": "https://schema.org/InStock",
                            "priceValidUntil": "<?php echo date('Y-12-31'); ?>",
                            "url": "<?php echo esc_url(home_url('/precios/')); ?>"
                        },
                        {
                            "@type": "Offer",
                            "name": "Plan Profesional",
                            "price": "599",
                            "priceCurrency": "MXN",
                            "availability": "https://schema.org/InStock",
                            "priceValidUntil": "<?php echo date('Y-12-31'); ?>",
                            "url": "<?php echo esc_url(home_url('/precios/')); ?>"
                        },
                        {
                            "@type": "Offer",
                            "name": "Plan Empresarial",
                            "price": "899",
                            "priceCurrency": "MXN",
                            "availability": "https://schema.org/InStock",
                            "priceValidUntil": "<?php echo date('Y-12-31'); ?>",
                            "url": "<?php echo esc_url(home_url('/precios/')); ?>"
                        }
                    ]
                },
                "aggregateRating": {
                    "@type": "AggregateRating",
                    "ratingValue": "4.8",
                    "reviewCount": "56",
                    "bestRating": "5",
                    "worstRating": "1"
                },
                "publisher": {
                    "@id": "<?php echo esc_url(home_url('/')); ?>#organization"
                }
            },
            {
                "@type": "FAQPage",
                "@id": "<?php echo esc_url(home_url('/')); ?>#faq",
                "mainEntity": [
                    {
                        "@type": "Question",
                        "name": "¿Qué es Cotízalo y para qué sirve?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Cotízalo es un software en la nube diseñado para micro, pequeñas y medianas empresas en México y Latinoamérica que permite crear cotizaciones y presupuestos profesionales en PDF, enviarlos directamente por WhatsApp y correo electrónico, gestionar firmas digitales y cobrar anticipos en línea."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "¿Por qué es mejor usar Cotízalo en lugar de Excel o Word?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Cotízalo ahorra más del 80% del tiempo en la elaboración de propuestas comerciales, elimina errores de fórmulas, ofrece diseño profesional con tu propio logotipo, permite el envío instantáneo por WhatsApp con enlaces interactivos, notifica en tiempo real cuando tu cliente abre la propuesta y permite firma digital directa."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "¿Cómo reciben y firman las cotizaciones mis clientes?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Tus clientes reciben un enlace interactivo y un documento PDF por WhatsApp o correo. Pueden abrirlo desde cualquier teléfono inteligente o computadora sin instalar ninguna aplicación y firmar la aceptación directamente en pantalla con su dedo o cursor."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "¿Puedo enviar cotizaciones directamente por WhatsApp?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Sí. Cotízalo genera un mensaje personalizado y un enlace interactivo listo para enviar a través de WhatsApp con un solo clic, aumentando la tasa de apertura y acelerando la respuesta de tus clientes."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "¿Se requiere tarjeta de crédito para la prueba gratis?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "No. Puedes comenzar tu prueba gratuita de 14 días sin ingresar ninguna tarjeta de crédito. Obtendrás acceso inmediato a todas las funciones sin ningún compromiso."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "¿Mis datos y la información de mis clientes están seguros?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Sí. Toda la información está protegida con cifrado SSL/TLS de grado bancario, respaldos continuos en la nube y servidores de alta disponibilidad para garantizar la máxima privacidad y seguridad operativa."
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
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NG2ZW6L3" height="0" width="0"
      style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <!-- Nav Section -->
  <header id="navbar">
    <div class="container nav-container">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="logo">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/assets/logos/LOGOTIPO3/Cotizalo-8.png?v=2"
          alt="Cotízalo — Software de cotizaciones para pequeños negocios" id="brand-logo" width="223" height="60">
      </a>
      <ul class="nav-links">
        <li><a href="<?php echo esc_url(home_url('/que-es-cotizalo/')); ?>" class="nav-item">¿Qué es Cotízalo?</a></li>
        <li><a href="#features" class="nav-item">Características</a></li>
        <li><a href="<?php echo esc_url(home_url('/precios/')); ?>" class="nav-item">Precios</a></li>
        <li class="nav-dropdown">
          <button class="nav-item nav-dropdown-toggle" aria-haspopup="true" aria-expanded="false">
            Recursos
            <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
              stroke-linecap="round" stroke-linejoin="round">
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

      <!-- Mobile Menu Toggle -->
      <button class="mobile-menu-btn" aria-label="Abrir menú de navegación">
        <span></span>
        <span></span>
        <span></span>
      </button>
    </div>
  </header>

  <!-- Hero Section -->
  <section class="hero">
    <div class="container container-wide">
      <div class="hero-main-grid">
        <div class="hero-content animate-on-scroll">
          <h1 class="display-title">
            <?php
            $hero_h1 = get_theme_mod('hero_title', 'Software de Cotizaciones para Pequeños Negocios en México');
            if (empty($hero_h1) || trim($hero_h1, " .") === 'Tu portal web para cotizaciones') {
              $hero_h1 = 'Software de Cotizaciones para Pequeños Negocios en México';
            }
            echo esc_html($hero_h1);
            ?>
          </h1>

          <p class="hero-subtitle">
            <?php echo esc_html(get_theme_mod('hero_subtitle', 'Deja atrás Excel y las imágenes perdidas en WhatsApp. Crea, envía y controla tus cotizaciones desde un solo lugar.')); ?>
          </p>

          <div class="hero-buttons">
            <a href="<?php echo esc_url(get_theme_mod('hero_btn_link', 'https://app.cotizalo.net/signup')); ?>"
              class="btn btn-primary btn-lg">
              <?php echo esc_html(get_theme_mod('hero_btn_text', 'Crear tu primera cotización')); ?>
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                <line x1="5" y1="12" x2="19" y2="12"></line>
                <polyline points="12 5 19 12 12 19"></polyline>
              </svg>
            </a>
            <a href="#features" class="btn btn-secondary btn-lg">
              Ver cómo funciona
            </a>
          </div>

          <!-- Proof & Trust -->
          <div class="hero-trust-block">
            <div class="hero-trust-rating">
              <div class="hero-avatar-stack" aria-hidden="true">
                <span class="hero-avatar-circle av-1" title="Carlos Morales — Contratista">CM</span>
                <span class="hero-avatar-circle av-2" title="Valeria Romero — Servicios">VR</span>
                <span class="hero-avatar-circle av-3" title="Jorge Lara — Mantenimiento">JL</span>
                <span class="hero-avatar-circle av-4" title="Diana Prado — Consultora">DP</span>
                <span class="hero-avatar-circle av-count">+500</span>
              </div>
              <div class="hero-rating-meta">
                <div class="hero-rating-stars">
                  <span class="stars-icons" aria-label="5 de 5 estrellas">
                    <svg width="14" height="14" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg width="14" height="14" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg width="14" height="14" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg width="14" height="14" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg width="14" height="14" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                  </span>
                  <strong class="rating-score">4.8 / 5</strong>
                </div>
                <span class="rating-subtext">Más de 500 negocios y PyMEs en México</span>
              </div>
            </div>

            <div class="hero-trust-badges">
              <div class="hero-trust-badge">
                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                <span>14 días de prueba gratis</span>
              </div>
              <div class="hero-trust-badge">
                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                <span>Cancela cuando quieras</span>
              </div>
            </div>
          </div>
        </div>

        <!-- High-Precision SaaS App Preview Mockup (Clean Widescreen Desktop Proportions) -->
        <div class="hero-image-wrapper animate-on-scroll delay-200">
          <div class="product-mockup-frame">
            <!-- Window Title Bar (macOS Chrome) -->
            <div class="mockup-window-bar">
              <div class="mockup-dots">
                <span class="mockup-dot r"></span>
                <span class="mockup-dot y"></span>
                <span class="mockup-dot g"></span>
              </div>
              <div class="mockup-url-pill">
                <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                  <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                  <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                </svg>
                <span>app.cotizalo.net/cotizaciones/COT-2026-084</span>
              </div>
              <div class="mockup-window-live">
                <span class="mockup-live-dot"></span>
                <span>En vivo</span>
              </div>
            </div>

            <!-- App Layout: Slim Icon Rail + Main App Area -->
            <div class="mockup-app-layout">
              <!-- Slim Icon Sidebar (Exact Match to App) -->
              <aside class="mockup-sidebar-rail">
                <div class="mockup-rail-top">
                  <div class="mockup-rail-logo-wrap">
                    <div class="mockup-rail-logo">
                      <span>C</span>
                    </div>
                    <span class="mockup-rail-toggle">
                      <svg width="8" height="8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="9 18 15 12 9 6"/></svg>
                    </span>
                  </div>

                  <button class="mockup-rail-plus-btn" aria-label="Nueva acción" title="Nueva cotización">
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                  </button>
                </div>

                <nav class="mockup-rail-nav">
                  <div class="mockup-rail-item" title="Panel">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg>
                  </div>
                  <div class="mockup-rail-item active" title="Cotizaciones">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line></svg>
                  </div>
                  <div class="mockup-rail-item" title="Métricas">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg>
                  </div>
                  <div class="mockup-rail-item" title="Cobros y Anticipos">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><path d="M16 8h-6a2 2 0 1 0 0 4h4a2 2 0 1 1 0 4H8"></path><line x1="12" y1="6" x2="12" y2="8"></line><line x1="12" y1="16" x2="12" y2="18"></line></svg>
                  </div>
                  <div class="mockup-rail-item" title="Clientes">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                  </div>
                  <div class="mockup-rail-item" title="Ajustes">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
                  </div>
                </nav>

                <div class="mockup-rail-bottom">
                  <div class="mockup-rail-avatar" title="Usuario activo">DR</div>
                  <div class="mockup-rail-logout" title="Salir">
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                  </div>
                </div>
              </aside>

              <!-- Main App Body (Top Bar + Workspace) -->
              <div class="mockup-main-area">
                <!-- Real App Topbar -->
                <div class="mockup-app-topbar">
                  <div class="mockup-search-box">
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                    <span>Buscar cotización, cliente, folio...</span>
                  </div>

                  <div class="mockup-topbar-actions">
                    <div class="mockup-date-chip">
                      <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                      <span>13 de octubre de 2026</span>
                    </div>

                    <div class="mockup-bell-btn">
                      <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg>
                    </div>

                    <div class="mockup-new-quote-btn">
                      <svg width="11" height="11" viewBox="0 0 24 24" fill="currentColor"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>
                      <span>+ Nueva Cotización</span>
                    </div>
                  </div>
                </div>

                <!-- Workspace Body -->
                <div class="mockup-workspace-body">
                  <!-- Page Header Row -->
                  <div class="mockup-page-header">
                    <div class="mockup-page-title-wrap">
                      <div class="mockup-page-icon">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line></svg>
                      </div>
                      <div>
                        <h3>Editar Cotización #COT-2026-084</h3>
                        <p>Modifica mobiliario, servicios y condiciones de pago para esta cotización</p>
                      </div>
                    </div>

                    <div class="mockup-header-buttons">
                      <span class="mockup-btn-ghost">
                        <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
                        Volver
                      </span>
                      <span class="mockup-btn-preview">
                        <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                        Vista Previa
                      </span>
                    </div>
                  </div>

                  <!-- 3 Section Info Cards Grid (Matches Real App) -->
                  <div class="mockup-info-grid">
                    <div class="mockup-info-card">
                      <div class="mockup-card-badge-row">
                        <span class="mockup-section-dot"></span>
                        <span class="mockup-section-title">PERFIL & SECUENCIA</span>
                        <span class="mockup-pill-tag"># Folio Oficial</span>
                      </div>
                      <div class="mockup-field-box">
                        <span class="mockup-field-lbl">PERFIL DE FACTURACIÓN</span>
                        <div class="mockup-select-sim">
                          <strong>Constructora Norte (Prefijo: COT-)</strong>
                          <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
                        </div>
                      </div>
                    </div>

                    <div class="mockup-info-card">
                      <div class="mockup-card-badge-row">
                        <span class="mockup-section-dot"></span>
                        <span class="mockup-section-title">INFORMACIÓN DEL CLIENTE</span>
                        <span class="mockup-link-tag">+ Nuevo Cliente</span>
                      </div>
                      <div class="mockup-field-box">
                        <span class="mockup-field-lbl">BUSCAR O SELECCIONAR CLIENTE *</span>
                        <div class="mockup-input-sim">
                          <strong>Constructora e Inmobiliaria Norte S.A. de C.V.</strong>
                        </div>
                      </div>
                    </div>

                    <div class="mockup-info-card">
                      <div class="mockup-card-badge-row">
                        <span class="mockup-section-dot"></span>
                        <span class="mockup-section-title">CONDICIONES</span>
                        <span class="mockup-currency-tag">Moneda: MXN ($)</span>
                      </div>
                      <div class="mockup-field-box">
                        <div class="mockup-note-box">
                          <span class="mockup-spei-dot"></span>
                          <span>Anticipo 50% ($14,210 MXN) recibido vía SPEI · Saldo contra entrega</span>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Partidas Table Card (Matches Real App) -->
                  <div class="mockup-partidas-card">
                    <div class="mockup-partidas-header">
                      <div>
                        <h4>Partidas de Mobiliario y Servicios</h4>
                        <p>Agrega, edita cantidades y personaliza descuentos unitarios para esta cotización</p>
                      </div>
                      <span class="mockup-add-concept-btn">+ Agregar Producto / Concepto</span>
                    </div>

                    <table class="mockup-partidas-table">
                      <thead>
                        <tr>
                          <th>PRODUCTO / CONCEPTO</th>
                          <th style="text-align: center;">CANTIDAD</th>
                          <th style="text-align: right;">PRECIO UNITARIO ($)</th>
                          <th style="text-align: right;">DESCUENTO ($)</th>
                          <th style="text-align: right;">TOTAL</th>
                          <th style="text-align: center;">ACCIÓN</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <div class="mockup-table-name">
                              <span class="mockup-drag-handle">:::</span>
                              <strong>Levantamiento técnico y diseño ejecutivo</strong>
                            </div>
                          </td>
                          <td style="text-align: center;" class="tabular-nums">1.00</td>
                          <td style="text-align: right;" class="tabular-nums">8,500.00</td>
                          <td style="text-align: right;" class="tabular-nums">0.00</td>
                          <td style="text-align: right; font-weight: 700; color: #047857;" class="tabular-nums">$8,500.00</td>
                          <td style="text-align: center;">
                            <span class="mockup-delete-btn">
                              <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                              Eliminar
                            </span>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="mockup-table-name">
                              <span class="mockup-drag-handle">:::</span>
                              <strong>Suministro e instalación de sistemas certificados</strong>
                            </div>
                          </td>
                          <td style="text-align: center;" class="tabular-nums">1.00</td>
                          <td style="text-align: right;" class="tabular-nums">16,000.00</td>
                          <td style="text-align: right;" class="tabular-nums">0.00</td>
                          <td style="text-align: right; font-weight: 700; color: #047857;" class="tabular-nums">$16,000.00</td>
                          <td style="text-align: center;">
                            <span class="mockup-delete-btn">
                              <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                              Eliminar
                            </span>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>

                  <!-- Bottom Split: Notes & Financial Summary (Matches Real App) -->
                  <div class="mockup-bottom-split">
                    <div class="mockup-notes-card">
                      <div class="mockup-notes-title">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path></svg>
                        <strong>TÉRMINOS Y NOTAS PARA EL CLIENTE</strong>
                      </div>
                      <ul class="mockup-notes-list">
                        <li>
                          <span class="note-bullet green">✓</span>
                          <span>Los precios calculados se reflejan fielmente en la carátula y el PDF del presupuesto.</span>
                        </li>
                        <li>
                          <span class="note-bullet blue">🛡️</span>
                          <span>Folio consecutivo #COT-2026-084 asignado automáticamente con validez fiscal.</span>
                        </li>
                        <li>
                          <span class="note-bullet amber">⚡</span>
                          <span>Anticipo del 50% ($14,210.00 MXN) vinculado y verificado en tiempo real.</span>
                        </li>
                      </ul>
                    </div>

                    <div class="mockup-financial-card">
                      <div class="mockup-financial-header">
                        <strong>Resumen Financiero</strong>
                        <span class="mockup-currency-mini">Moneda: MXN ($)</span>
                      </div>

                      <div class="mockup-calc-rows">
                        <div class="calc-row">
                          <span>Subtotal Partidas:</span>
                          <strong class="tabular-nums">$24,500.00</strong>
                        </div>
                        <div class="calc-row">
                          <span>Descuento Global:</span>
                          <span class="tabular-nums">$0.00</span>
                        </div>
                        <div class="calc-row">
                          <span>IVA (16%):</span>
                          <strong class="tabular-nums">$3,920.00</strong>
                        </div>
                        <div class="calc-row total-highlight">
                          <span class="total-lbl">Total Final:</span>
                          <strong class="total-val tabular-nums">$28,420.00 <span class="currency">MXN</span></strong>
                        </div>
                      </div>

                      <div class="mockup-final-actions">
                        <span class="mockup-action-btn pdf">
                          <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                          Descargar PDF
                        </span>
                        <span class="mockup-action-btn whatsapp">
                          <svg width="11" height="11" viewBox="0 0 24 24" fill="currentColor"><path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-5.46-4.45-9.92-9.91-9.92z"/></svg>
                          Enviar WhatsApp
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
          </div>
        </div>
      </div>

      <!-- Hero Solution Deep Links -->
      <div class="hero-feature-nav">
        <span class="hero-feature-label">Soluciones especializadas para tu negocio:</span>
        <div class="hero-feature-chips">
          <a href="<?php echo esc_url(home_url('/software-para-cotizaciones/')); ?>" class="hero-feature-chip">
            <span>Software de Cotizaciones</span>
            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
          </a>
          <a href="<?php echo esc_url(home_url('/cotizaciones-por-whatsapp/')); ?>" class="hero-feature-chip">
            <span>Cotizaciones por WhatsApp</span>
            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
          </a>
          <a href="<?php echo esc_url(home_url('/seguimiento-de-cotizaciones/')); ?>" class="hero-feature-chip">
            <span>Seguimiento de Propuestas</span>
            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
          </a>
          <a href="<?php echo esc_url(home_url('/programa-para-hacer-presupuestos/')); ?>" class="hero-feature-chip">
            <span>Programa para Presupuestos</span>
            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
          </a>
          <a href="<?php echo esc_url(home_url('/software-de-cotizaciones-para-constructoras/')); ?>" class="hero-feature-chip">
            <span>Para Constructoras</span>
            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
          </a>
          <a href="<?php echo esc_url(home_url('/software-de-cotizaciones-para-servicios/')); ?>" class="hero-feature-chip">
            <span>Para Servicios</span>
            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Metrics Bar -->
  <section class="metrics-strip">
    <div class="container">
      <div class="metrics-grid">
        <div class="metric-item">
          <div class="metric-number">+50,000</div>
          <div class="metric-label">Cotizaciones Emitidas</div>
          <div class="metric-sub">Por emprendedores y PyMEs en México</div>
        </div>
        <div class="metric-item">
          <div class="metric-number">&lt; 2 min</div>
          <div class="metric-label">Tiempo Promedio</div>
          <div class="metric-sub">De elaboración y envío por WhatsApp</div>
        </div>
        <div class="metric-item">
          <div class="metric-number">82%</div>
          <div class="metric-label">Tasa de Apertura</div>
          <div class="metric-sub">Frente al 22% del correo electrónico</div>
        </div>
        <div class="metric-item">
          <div class="metric-number">100%</div>
          <div class="metric-label">En la Nube</div>
          <div class="metric-sub">Accesible desde cualquier celular o PC</div>
        </div>
      </div>
    </div>
  </section>

  <!-- Features (Bento Grid) -->
  <section class="features-section" id="features">
    <div class="container">
      <div class="section-header animate-on-scroll">
        <h2 class="section-title">
          <?php echo esc_html(get_theme_mod('features_title', 'Interfaz limpia, segura y profesional.')); ?>
        </h2>
        <p class="section-subtitle">
          <?php echo esc_html(get_theme_mod('features_subtitle', 'Diseñado para equipos que requieren rapidez y precisión, eliminando la frialdad de Excel en cada presupuesto.')); ?>
        </p>
      </div>

      <div class="bento-grid">
        <!-- Feature 1 -->
        <div class="bento-card animate-on-scroll delay-100">
          <div class="bento-icon-wrapper">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-2M9 5a2 2 0 0 0 2 2h2a2 2 0 0 0 2-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" /></svg>
          </div>
          <h3><?php echo esc_html(get_theme_mod('feat_1_title', 'Catálogo y Disponibilidad')); ?></h3>
          <p><?php echo esc_html(get_theme_mod('feat_1_desc', 'Genera cotizaciones completas reutilizando plantillas dinámicas y tu catálogo de productos guardados con total precisión comercial.')); ?></p>
        </div>

        <!-- Feature 2 -->
        <div class="bento-card animate-on-scroll delay-200">
          <div class="bento-icon-wrapper">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" /></svg>
          </div>
          <h3><?php echo esc_html(get_theme_mod('feat_2_title', 'Seriedad Técnica')); ?></h3>
          <p><?php echo esc_html(get_theme_mod('feat_2_desc', 'Toda tu información de ventas viaja asegurada con cifrado bancario. Tus datos y los de tus clientes están a salvo en una plataforma estable.')); ?></p>
        </div>

        <!-- Feature 3 -->
        <div class="bento-card animate-on-scroll delay-300">
          <div class="bento-icon-wrapper">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" /></svg>
          </div>
          <h3><?php echo esc_html(get_theme_mod('feat_3_title', 'Anticipos y Firma Digital')); ?></h3>
          <p><?php echo esc_html(get_theme_mod('feat_3_desc', 'Tus clientes pueden aceptar, firmar digitalmente y pagar su depósito desde su celular. La forma más rápida de asegurar tu venta y formalizar el trato.')); ?></p>
        </div>

        <!-- Feature 4 -->
        <div class="bento-card animate-on-scroll delay-100">
          <div class="bento-icon-wrapper">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4 5a1 1 0 011-1h4a1 1 0 011 1v4a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM14 5a1 1 0 011-1h4a1 1 0 011 1v4a1 1 0 01-1 1h-4a1 1 0 01-1-1V5zM4 15a1 1 0 011-1h4a1 1 0 011 1v4a1 1 0 01-1 1H5a1 1 0 01-1-1v-4zM14 15a1 1 0 011-1h4a1 1 0 011 1v4a1 1 0 01-1 1h-4a1 1 0 01-1-1v-4z" /></svg>
          </div>
          <h3><?php echo esc_html(get_theme_mod('feat_4_title', 'Todo en un Solo Lugar')); ?></h3>
          <p><?php echo esc_html(get_theme_mod('feat_4_desc', 'Consolida tus clientes, catálogo de precios, cotizaciones y recibos de anticipo en una interfaz limpia. Olvídate de usar cinco herramientas distintas para operar.')); ?></p>
        </div>

        <!-- Feature 5 -->
        <div class="bento-card animate-on-scroll delay-200">
          <div class="bento-icon-wrapper">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
          </div>
          <h3><?php echo esc_html(get_theme_mod('feat_5_title', 'Búsqueda y Edición Ágil')); ?></h3>
          <p><?php echo esc_html(get_theme_mod('feat_5_desc', 'Localiza al instante cualquier cotización por cliente, folio o fecha. Modifica conceptos o precios con un clic sin tener que rehacer todo desde cero.')); ?></p>
        </div>

        <!-- Feature 6 -->
        <div class="bento-card animate-on-scroll delay-300">
          <div class="bento-icon-wrapper">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect><line x1="8" y1="21" x2="16" y2="21"></line><line x1="12" y1="17" x2="12" y2="21"></line></svg>
          </div>
          <h3><?php echo esc_html(get_theme_mod('feat_6_title', 'Seguimiento Sin Límites')); ?></h3>
          <p><?php echo esc_html(get_theme_mod('feat_6_desc', 'Olvídate de quedarte sin créditos en bots de IA o perder cotizaciones en capturas de pantalla. Monitorea el estatus de cada propuesta desde cualquier dispositivo.')); ?></p>
        </div>
      </div>
    </div>
  </section>

  <!-- Comparison Section (Excel & WhatsApp vs Cotízalo) -->
  <section class="comparison-section">
    <div class="container">
      <div class="section-header animate-on-scroll">
        <h2 class="section-title">
          Dile adiós a las hojas de cálculo y a perder cotizaciones en chats
        </h2>
        <p class="section-subtitle">
          Enviar fotos de hojas de cálculo o depender de notas sueltas parece rápido, pero arruina la formalidad de tu negocio y te hace perder dinero.
        </p>
      </div>

      <div class="comparison-grid">
        <!-- Excel Card -->
        <div class="compare-card excel animate-on-scroll delay-100">
          <div class="compare-badge">Con Excel e imágenes por chat</div>
          <h3>La forma tradicional y desordenada</h3>
          <div class="compare-list">
            <div class="compare-item">
              <span class="compare-icon">✕</span>
              <div>
                <strong>Archivos perdidos:</strong> Las propuestas se pierden en galerías de fotos o en hilos interminables de mensajes.
              </div>
            </div>
            <div class="compare-item">
              <span class="compare-icon">✕</span>
              <div>
                <strong>Imposible editar:</strong> Si el cliente pide un cambio menor, tienes que rehacer el archivo y reenviarlo.
              </div>
            </div>
            <div class="compare-item">
              <span class="compare-icon">✕</span>
              <div>
                <strong>Fórmulas rotas:</strong> Errores manuales en celdas de Excel que causan presupuestos por debajo del costo real.
              </div>
            </div>
            <div class="compare-item">
              <span class="compare-icon">✕</span>
              <div>
                <strong>Cero seguimiento:</strong> No sabes si el prospecto abrió la propuesta ni cuándo es el momento exacto para cerrar.
              </div>
            </div>
          </div>
        </div>

        <!-- Cotízalo Card -->
        <div class="compare-card cotizalo animate-on-scroll delay-200">
          <div class="compare-badge">Con la plataforma Cotízalo</div>
          <h3>El sistema profesional para cerrar ventas</h3>
          <div class="compare-list">
            <div class="compare-item">
              <span class="compare-icon">✓</span>
              <div>
                <strong>Búsqueda en 1 clic:</strong> Localiza cualquier propuesta por nombre de cliente, folio o monto en segundos.
              </div>
            </div>
            <div class="compare-item">
              <span class="compare-icon">✓</span>
              <div>
                <strong>Actualizaciones en tiempo real:</strong> Ajusta cantidades o conceptos y tu cliente ve el cambio al instante.
              </div>
            </div>
            <div class="compare-item">
              <span class="compare-icon">✓</span>
              <div>
                <strong>Precios e impuestos blindados:</strong> Cálculos automáticos de IVA y descuentos configurados con precisión.
              </div>
            </div>
            <div class="compare-item">
              <span class="compare-icon">✓</span>
              <div>
                <strong>Firma y anticipo digital:</strong> Tu cliente aprueba en pantalla desde su celular y asegura el depósito de inmediato.
              </div>
            </div>
          </div>
        </div>
      </div>

      <div style="text-align: center; margin-top: 3rem;">
        <a href="<?php echo esc_url(get_theme_mod('nav_signup_url', 'https://app.cotizalo.net/signup')); ?>"
          class="btn btn-primary btn-lg">
          <?php echo esc_html(get_theme_mod('vsai_cta_text', 'Empieza a cotizar con Cotízalo gratis')); ?>
        </a>
      </div>
    </div>
  </section>

  <!-- How It Works (3 Steps) -->
  <section id="how-it-works" class="how-it-works-section">
    <div class="container">
      <div class="section-header animate-on-scroll">
        <h2 class="section-title">
          Cómo funciona Cotízalo en 3 sencillos pasos
        </h2>
        <p class="section-subtitle">
          Diseñado para que cualquier profesionista o equipo comercial comience a emitir presupuestos en menos de cinco minutos.
        </p>
      </div>

      <div class="steps-grid">
        <div class="step-card animate-on-scroll delay-100">
          <span class="step-num-pill">PASO 01</span>
          <h3>Captura conceptos o usa tus plantillas</h3>
          <p>Selecciona tu cliente, añade los conceptos desde tu catálogo guardado o escribe directamente los servicios requeridos con sus importes.</p>
        </div>

        <div class="step-card animate-on-scroll delay-200">
          <span class="step-num-pill">PASO 02</span>
          <h3>Envía por WhatsApp o descarga en PDF</h3>
          <p>Genera en un clic el mensaje con enlace interactivo y envía el presupuesto profesional con tu logotipo y datos de contacto.</p>
        </div>

        <div class="step-card animate-on-scroll delay-300">
          <span class="step-num-pill">PASO 03</span>
          <h3>Tu cliente aprueba, firma y paga su anticipo</h3>
          <p>El cliente revisa los términos desde su celular, firma con su dedo y registra la aceptación de inmediato para formalizar el proyecto.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ Section -->
  <section class="faq-section" id="faq">
    <div class="container">
      <div class="section-header animate-on-scroll">
        <h2 class="section-title">
          ¿Tienes dudas sobre Cotízalo? Aquí te respondemos
        </h2>
        <p class="section-subtitle">
          Todo lo que necesitas saber sobre cómo nuestro software agiliza tus cotizaciones y te ayuda a cerrar más ventas.
        </p>
      </div>

      <div class="faq-list animate-on-scroll">
        <!-- FAQ 1 -->
        <div class="faq-item open">
          <button class="faq-question" type="button" aria-expanded="true">
            <span>¿Qué es Cotízalo y para qué sirve?</span>
            <span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"/></svg></span>
          </button>
          <div class="faq-answer">
            Cotízalo es un software en la nube diseñado especialmente para emprendedores, profesionistas independientes y micro, pequeñas y medianas empresas en México y Latinoamérica. Permite crear cotizaciones y presupuestos profesionales en PDF en menos de 2 minutos, enviarlos con un enlace interactivo por WhatsApp o correo, registrar firmas electrónicas y cobrar anticipos en línea.
          </div>
        </div>

        <!-- FAQ 2 -->
        <div class="faq-item">
          <button class="faq-question" type="button" aria-expanded="false">
            <span>¿Por qué es mejor usar Cotízalo en lugar de Excel o Word?</span>
            <span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"/></svg></span>
          </button>
          <div class="faq-answer">
            Cotízalo ahorra hasta un 80% del tiempo de elaboración comercial. Elimina fórmulas desconfiguradas, errores de cálculo y documentos con aspecto informal. Tus cotizaciones quedan respaldadas en la nube, con tu logotipo e identidad de marca, y puedes saber en tiempo real el momento exacto en que tu prospecto abre la propuesta para contactarlo cuando tiene mayor interés.
          </div>
        </div>

        <!-- FAQ 3 -->
        <div class="faq-item">
          <button class="faq-question" type="button" aria-expanded="false">
            <span>¿Cómo reciben y firman las cotizaciones mis clientes?</span>
            <span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"/></svg></span>
          </button>
          <div class="faq-answer">
            Tus clientes reciben un enlace interactivo y un archivo PDF descargable. Al abrir el enlace desde su celular o computadora (sin necesidad de crear una cuenta ni descargar ninguna aplicación), pueden revisar los conceptos, aprobar la cotización y firmar digitalmente con su dedo o ratón, quedando una constancia de aprobación inmediata.
          </div>
        </div>

        <!-- FAQ 4 -->
        <div class="faq-item">
          <button class="faq-question" type="button" aria-expanded="false">
            <span>¿Puedo enviar cotizaciones directamente por WhatsApp?</span>
            <span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"/></svg></span>
          </button>
          <div class="faq-answer">
            Sí. Cotízalo está integrado de forma nativa para generar mensajes profesionales personalizados para WhatsApp con un solo clic. En América Latina, las propuestas enviadas por WhatsApp alcanzan hasta un 78% de apertura frente al 22% del correo tradicional, lo que reduce drásticamente el ciclo de cierre.
          </div>
        </div>

        <!-- FAQ 5 -->
        <div class="faq-item">
          <button class="faq-question" type="button" aria-expanded="false">
            <span>¿Se requiere tarjeta de crédito para la prueba gratis?</span>
            <span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"/></svg></span>
          </button>
          <div class="faq-answer">
            No. Puedes crear tu cuenta y usar la plataforma durante 14 días completamente gratis sin ingresar ningún dato bancario. Si al finalizar el periodo decides no continuar, tu cuenta simplemente se pausa sin ningún cargo ni penalización.
          </div>
        </div>

        <!-- FAQ 6 -->
        <div class="faq-item">
          <button class="faq-question" type="button" aria-expanded="false">
            <span>¿Mis datos y la información de mis clientes están seguros?</span>
            <span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"/></svg></span>
          </button>
          <div class="faq-answer">
            Totalmente. Utilizamos infraestructura en la nube con cifrado SSL/TLS de 256 bits, copias de seguridad continuas y estrictos protocolos de protección de datos conforme a las mejores prácticas internacionales de privacidad.
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA Section -->
  <section class="cta-section">
    <div class="container animate-on-scroll">
      <div class="cta-box">
        <h2 class="cta-title">
          <?php echo esc_html(get_theme_mod('cta_title', '¿Listo para digitalizar tus ventas?')); ?>
        </h2>
        <p class="cta-desc">
          <?php echo esc_html(get_theme_mod('cta_desc', 'Únete a la revolución de las ventas digitales y asombra a tus clientes con propuestas modernas.')); ?>
        </p>
        <div class="cta-buttons">
          <a href="<?php echo esc_url(get_theme_mod('cta_btn_url', 'https://app.cotizalo.net/signup')); ?>"
            class="btn btn-primary btn-lg">
            <?php echo esc_html(get_theme_mod('cta_btn_text', 'Comienza tu Prueba Gratuita')); ?>
          </a>
          <a href="<?php echo esc_url(home_url('/precios/')); ?>" class="btn btn-secondary btn-lg">
            Ver planes de precios
          </a>
        </div>
        <div class="cta-microcopy">
          ✓ 14 días gratis · Cancela en cualquier momento
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
              alt="Cotízalo — Software de cotizaciones para pequeños negocios en México" id="footer-logo" width="223" height="60">
          </a>
          <p>
            <?php echo esc_html(get_theme_mod('footer_brand_text', 'Transformando la forma en que los equipos de ventas crean, envían y cierran propuestas.')); ?>
          </p>
        </div>
        <div class="footer-column">
          <h4>Producto</h4>
          <ul class="footer-links-list">
            <li><a href="<?php echo esc_url(home_url('/')); ?>#features">Características</a></li>
            <li><a href="<?php echo esc_url(home_url('/precios/')); ?>">Precios y Planes</a></li>
            <li><a href="<?php echo esc_url(home_url('/#how-it-works')); ?>">Cómo Funciona</a></li>
            <li><a href="<?php echo esc_url(home_url('/#faq')); ?>">Preguntas Frecuentes</a></li>
          </ul>
        </div>
        <div class="footer-column">
          <h4>Recursos</h4>
          <ul class="footer-links-list">
            <li><a href="<?php echo esc_url(home_url('/software-para-cotizaciones/')); ?>">Software para cotizaciones</a></li>
            <li><a href="<?php echo esc_url(home_url('/cotizaciones-por-whatsapp/')); ?>">Cotizaciones por WhatsApp</a></li>
            <li><a href="<?php echo esc_url(home_url('/seguimiento-de-cotizaciones/')); ?>">Seguimiento de cotizaciones</a></li>
            <li><a href="<?php echo esc_url(home_url('/programa-para-hacer-presupuestos/')); ?>">Programa para presupuestos</a></li>
            <li><a href="<?php echo esc_url(home_url('/software-de-cotizaciones-para-constructoras/')); ?>">Para constructoras</a></li>
            <li><a href="<?php echo esc_url(home_url('/software-de-cotizaciones-para-servicios/')); ?>">Para servicios</a></li>
          </ul>
        </div>
        <div class="footer-column">
          <h4>Compañía & Legal</h4>
          <ul class="footer-links-list">
            <li><a href="<?php echo esc_url(home_url('/que-es-cotizalo/')); ?>">¿Qué es Cotízalo?</a></li>
            <li><a href="<?php echo esc_url(home_url('/soporte/')); ?>">Soporte y Contacto</a></li>
            <li><a href="<?php echo esc_url(home_url('/aviso-de-privacidad/')); ?>">Aviso de Privacidad</a></li>
            <li><a href="<?php echo esc_url(home_url('/terminos-y-condiciones/')); ?>">Términos y Condiciones</a></li>
          </ul>
        </div>
      </div>
      <div class="footer-bottom">
        <div>
          &copy; <?php echo date('Y'); ?> Cotízalo. <?php echo esc_html(get_theme_mod('footer_copyright', 'PixelZero.mx . Todos los derechos reservados.')); ?>
        </div>
        <div>
          Hecho con precisión técnica para profesionistas y microempresas en México.
        </div>
      </div>
    </div>
  </footer>

  <script src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/assets/js/main.js?v=1.0.9" defer></script>
  <?php wp_footer(); ?>
</body>

</html>