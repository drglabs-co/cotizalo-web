<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cotízalo | Sistema de Cotizaciones Automatizado para Empresas en México</title>
    <meta name="description"
        content="Simplifica tus ventas con el mejor sistema de cotizaciones online en México. Crea, envía y da seguimiento a propuestas profesionales en PDF en segundos. ¡Prueba Gratis!">
    <meta name="keywords" content="sistema de cotizaciones, cotizaciones online mexico, hacer cotizacion profesional, generador de presupuestos, software para cotizar servicios, crear cotizacion pdf, enviar cotizacion por whatsapp, alternativa a excel para cotizaciones, control de cotizaciones y clientes, cotizador para freelancers, cotizador para pymes">
    
    <!-- Open Graph / Facebook / WhatsApp -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo esc_url( home_url( $_SERVER['REQUEST_URI'] ) ); ?>">
    <meta property="og:title" content="Cotízalo | Sistema de Cotizaciones Automatizado para Empresas en México">
    <meta property="og:description" content="Simplifica tus ventas con el mejor sistema de cotizaciones online en México. Crea, envía y da seguimiento a propuestas profesionales en PDF en segundos. ¡Prueba Gratis!">
    <meta property="og:image" content="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/assets/logos/ISOTIPO/Cotizalo-5.png">
    <meta property="og:locale" content="es_MX">

    <!-- Twitter / X -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Cotízalo | Sistema de Cotizaciones Automatizado para Empresas en México">
    <meta name="twitter:description" content="Simplifica tus ventas con el mejor sistema de cotizaciones online en México. Crea, envía y da seguimiento a propuestas profesionales en PDF en segundos. ¡Prueba Gratis!">
    <meta name="twitter:image" content="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/assets/logos/ISOTIPO/Cotizalo-5.png">

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
        "@type": "SoftwareApplication",
        "name": "Cotízalo",
        "url": "https://cotizalo.net",
        "applicationCategory": "BusinessApplication",
        "operatingSystem": "Web",
        "description": "Sistema de cotizaciones automatizado para empresas y profesionales en México. Crea, envía y da seguimiento a propuestas profesionales en PDF.",
        "offers": {
            "@type": "Offer",
            "price": "0",
            "priceCurrency": "MXN",
            "description": "Prueba gratis por 14 días"
        },
        "provider": {
            "@type": "Organization",
            "name": "Cotízalo",
            "url": "https://cotizalo.net",
            "logo": "<?php echo esc_url( get_template_directory_uri() ); ?>/assets/assets/logos/ISOTIPO/Cotizalo-5.png",
            "contactPoint": {
                "@type": "ContactPoint",
                "contactType": "customer support",
                "url": "https://cotizalo.net/soporte/",
                "availableLanguage": "Spanish"
            },
            "areaServed": {
                "@type": "Country",
                "name": "México"
            }
        }
    }
    </script>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <!-- Nav Section -->
    <header id="navbar">
        <div class="container nav-container">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/assets/logos/LOGOTIPO3/Cotizalo-8.png?v=2"
                    alt="Cotízalo Logo" id="brand-logo">
            </a>
            <ul class="nav-links">
                <li><a href="<?php echo esc_url(home_url('/que-es-cotizalo/')); ?>" class="nav-item">¿Qué es Cotízalo?</a></li>
                <li><a href="#features" class="nav-item">Características</a></li>
                <li><a href="<?php echo esc_url(home_url('/precios/')); ?>" class="nav-item">Precios</a></li>
            </ul>
            <div class="nav-buttons">
                <a href="https://app.cotizalo.net/login" class="btn btn-secondary btn-nav">Ingresar</a>
                <a href="https://app.cotizalo.net/signup" class="btn btn-primary btn-nav">Empezar Gratis</a>
            </div>

            <!-- Mobile Menu Toggle -->
            <div class="mobile-menu-btn">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </header>

    <!-- Hero Section (Dark Theme with Gradient) -->
    <section class="hero">
        <!-- Background Design Elements for Hero -->
        <div class="bg-shape bg-shape-1"></div>
        <div class="container relative z-10">
            <div class="hero-content animate-on-scroll fade-in-up">
                <h1 class="display-title">
                    <?php echo esc_html(get_theme_mod('hero_title', 'Tu portal web para cotizaciones.')); ?></h1>
                <p class="hero-subtitle">
                    <?php echo esc_html(get_theme_mod('hero_subtitle', 'Olvida el Excel. Una identidad técnica, segura y seria, ideal para microempresas.')); ?>
                </p>
                <div class="hero-buttons">
                    <a href="<?php echo esc_url(get_theme_mod('hero_btn_link', '/precios')); ?>"
                        class="btn btn-primary btn-lg group">
                        <?php echo esc_html(get_theme_mod('hero_btn_text', 'Crea tu primera cotización')); ?>
                        <svg class="icon-right" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Visualization Element (Mockup) -->
            <div class="hero-image-wrapper animate-on-scroll fade-in-up delay-200">
                <div class="glass-mockup" style="min-height: auto !important; height: auto !important; background: #ffffff !important;">
                    <div class="mockup-header">
                        <div class="mockup-dots">
                            <span class="dot red"></span>
                            <span class="dot yellow"></span>
                            <span class="dot green"></span>
                        </div>
                        <div class="mockup-url">
                            <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" style="margin-right: 5px; opacity: 0.7;"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>app.cotizalo.net
                        </div>
                    </div>
                    <div class="mockup-body" style="padding: 0; background: #f8fafc !important; min-height: auto !important; height: auto !important; display: block !important; overflow: hidden;">
                        <svg viewBox="0 0 880 530" width="100%" height="auto" xmlns="http://www.w3.org/2000/svg" style="display: block; width: 100%; height: auto; background: #f8fafc;">
                          <!-- Left Sidebar (Width 210) -->
                          <rect x="0" y="0" width="210" height="530" fill="#123A2C"/>
                          
                          <!-- Sidebar Header -->
                          <g transform="translate(16, 18)">
                            <image href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/assets/logos/ISOTIPO/Cotizalo%20-%20ISOTIPO-8.png" x="0" y="0" height="26" width="26" />
                            <text x="34" y="17" fill="#ffffff" font-family="-apple-system, Montserrat, sans-serif" font-size="12" font-weight="700">Sistema de Cotizaciones</text>
                          </g>
                          <line x1="16" y1="58" x2="194" y2="58" stroke="rgba(255,255,255,0.1)" stroke-width="1"/>

                          <!-- Sidebar Menu Items -->
                          <!-- 1: Panel de Control -->
                          <g transform="translate(12, 70)">
                            <g transform="translate(14, 2)" stroke="rgba(255,255,255,0.7)" stroke-width="1.3" fill="none">
                              <circle cx="7" cy="7" r="5.5"/>
                              <ellipse cx="7" cy="7" rx="2.5" ry="5.5"/>
                              <line x1="1.5" y1="7" x2="12.5" y2="7"/>
                            </g>
                            <text x="36" y="14" fill="rgba(255,255,255,0.75)" font-family="sans-serif" font-size="11" font-weight="500">Panel de Control</text>
                          </g>

                          <!-- 2: Métricas -->
                          <g transform="translate(12, 104)">
                            <g transform="translate(14, 2)" stroke="rgba(255,255,255,0.7)" stroke-width="1.3" fill="none" stroke-linecap="round">
                              <line x1="3" y1="12" x2="3" y2="9"/>
                              <line x1="7" y1="12" x2="7" y2="6"/>
                              <line x1="11" y1="12" x2="11" y2="3"/>
                              <path d="M2 9 L6 6 L10 3 L14 1" stroke="#4ade80" stroke-width="1.5"/>
                            </g>
                            <text x="36" y="14" fill="rgba(255,255,255,0.75)" font-family="sans-serif" font-size="11" font-weight="500">Métricas</text>
                          </g>

                          <!-- 3: Cotizaciones Active -->
                          <g transform="translate(12, 138)">
                            <rect width="186" height="30" rx="6" fill="rgba(74, 222, 128, 0.15)"/>
                            <rect x="0" y="0" width="3" height="30" rx="1.5" fill="#4ade80"/>
                            <g transform="translate(14, 6)" stroke="#4ade80" stroke-width="1.3" fill="none" stroke-linecap="round" stroke-linejoin="round">
                              <path d="M3 2 H9 L13 6 V13 A1 1 0 0 1 12 14 H3 A1 1 0 0 1 2 13 V3 A1 1 0 0 1 3 2 Z"/>
                              <path d="M9 2 V6 H13"/>
                              <line x1="5" y1="8" x2="10" y2="8"/>
                              <line x1="5" y1="11" x2="8" y2="11"/>
                            </g>
                            <text x="36" y="19" fill="#4ade80" font-family="sans-serif" font-size="11" font-weight="700">Cotizaciones</text>
                          </g>

                          <!-- 4: Recibos de Anticipo -->
                          <g transform="translate(12, 176)">
                            <g transform="translate(14, 2)" stroke="rgba(255,255,255,0.7)" stroke-width="1.3" fill="none" stroke-linecap="round">
                              <path d="M3 2 H12 V14 L10.5 12.5 L9 14 L7.5 12.5 L6 14 L4.5 12.5 L3 14 Z"/>
                              <line x1="5" y1="5" x2="10" y2="5"/>
                              <line x1="5" y1="8" x2="8" y2="8"/>
                            </g>
                            <text x="36" y="14" fill="rgba(255,255,255,0.75)" font-family="sans-serif" font-size="11" font-weight="500">Recibos de Anticipo</text>
                          </g>

                          <!-- 5: Clientes -->
                          <g transform="translate(12, 210)">
                            <g transform="translate(14, 2)" stroke="rgba(255,255,255,0.7)" stroke-width="1.3" fill="none" stroke-linecap="round">
                              <circle cx="6" cy="5" r="2.5"/>
                              <path d="M2 13 A4 4 0 0 1 10 13"/>
                              <circle cx="11" cy="4.5" r="2"/>
                              <path d="M9.5 12 A3 3 0 0 1 14 12"/>
                            </g>
                            <text x="36" y="14" fill="rgba(255,255,255,0.75)" font-family="sans-serif" font-size="11" font-weight="500">Clientes</text>
                          </g>

                          <!-- 6: Categorías -->
                          <g transform="translate(12, 244)">
                            <g transform="translate(14, 2)" stroke="rgba(255,255,255,0.7)" stroke-width="1.3" fill="none" stroke-linecap="round" stroke-linejoin="round">
                              <path d="M12 2 H7 L2 7 L8 13 L13 8 Z"/>
                              <circle cx="9" cy="5" r="1" fill="rgba(255,255,255,0.7)"/>
                            </g>
                            <text x="36" y="14" fill="rgba(255,255,255,0.75)" font-family="sans-serif" font-size="11" font-weight="500">Categorías</text>
                          </g>

                          <!-- 7: Productos -->
                          <g transform="translate(12, 278)">
                            <g transform="translate(14, 2)" stroke="rgba(255,255,255,0.7)" stroke-width="1.3" fill="none" stroke-linejoin="round">
                              <path d="M7 2 L2 5 L7 8 L12 5 Z M2 5 V11 L7 14 V8 M12 5 V11 L7 14"/>
                            </g>
                            <text x="36" y="14" fill="rgba(255,255,255,0.75)" font-family="sans-serif" font-size="11" font-weight="500">Productos</text>
                          </g>

                          <!-- 8: Unidades -->
                          <g transform="translate(12, 312)">
                            <g transform="translate(14, 2)" stroke="rgba(255,255,255,0.7)" stroke-width="1.3" fill="none" stroke-linecap="round">
                              <rect x="2" y="4" width="11" height="6" rx="1"/>
                              <line x1="5" y1="4" x2="5" y2="7"/>
                              <line x1="8" y1="4" x2="8" y2="8"/>
                              <line x1="11" y1="4" x2="11" y2="7"/>
                            </g>
                            <text x="36" y="14" fill="rgba(255,255,255,0.75)" font-family="sans-serif" font-size="11" font-weight="500">Unidades</text>
                          </g>

                          <!-- 9: Configuración -->
                          <g transform="translate(12, 346)">
                            <g transform="translate(14, 2)" stroke="rgba(255,255,255,0.7)" stroke-width="1.3" fill="none" stroke-linecap="round">
                              <circle cx="7" cy="7" r="2.2"/>
                              <path d="M7 1V3 M7 11V13 M1 7H3 M11 7H13 M2.7 2.7L4.1 4.1 M9.9 9.9L11.3 11.3 M2.7 11.3L4.1 9.9 M9.9 4.1L11.3 2.7"/>
                            </g>
                            <text x="36" y="14" fill="rgba(255,255,255,0.75)" font-family="sans-serif" font-size="11" font-weight="500">Configuración</text>
                          </g>

                          <!-- 10: Cerrar Sesión -->
                          <g transform="translate(12, 480)">
                            <g transform="translate(14, 2)" stroke="rgba(255,255,255,0.5)" stroke-width="1.3" fill="none" stroke-linecap="round" stroke-linejoin="round">
                              <path d="M5 2 H2 V12 H5"/>
                              <path d="M7 4 L10 7 L7 10"/>
                              <line x1="10" y1="7" x2="4" y2="7"/>
                            </g>
                            <text x="36" y="14" fill="rgba(255,255,255,0.5)" font-family="sans-serif" font-size="11" font-weight="500">Cerrar Sesión</text>
                          </g>

                          <!-- Main Content Workspace -->
                          <!-- Top Bar -->
                          <g transform="translate(230, 18)">
                            <!-- Document Icon -->
                            <g transform="translate(0, 0)" stroke="#0f172a" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
                              <path d="M3 2 H10 L14 6 V16 A1 1 0 0 1 13 17 H3 A1 1 0 0 1 2 16 V3 A1 1 0 0 1 3 2 Z" fill="#ffffff"/>
                              <path d="M10 2 V6 H14"/>
                              <line x1="5" y1="9" x2="11" y2="9" stroke="#123A2C" stroke-width="1.5"/>
                              <line x1="5" y1="13" x2="9" y2="13" stroke="#123A2C" stroke-width="1.5"/>
                            </g>
                            <text x="22" y="15" fill="#0f172a" font-family="sans-serif" font-size="16" font-weight="800">Cotizaciones</text>
                            
                            <g transform="translate(365, 0)">
                              <rect width="120" height="25" rx="5" fill="#ffffff" stroke="#cbd5e1" stroke-width="1"/>
                              <g transform="translate(8, 5)" stroke="#475569" stroke-width="1.3" fill="none">
                                <path d="M2 3 C4 2, 6 2, 8 3 V14 C6 13, 4 13, 2 14 Z M14 3 C12 2, 10 2, 8 3 V14 C10 13, 12 13, 14 14 Z"/>
                              </g>
                              <text x="28" y="16" fill="#475569" font-family="sans-serif" font-size="9.5" font-weight="600">Manual de usuario</text>
                            </g>
                            <g transform="translate(495, 0)">
                              <rect width="135" height="25" rx="5" fill="#ffffff" stroke="#cbd5e1" stroke-width="1"/>
                              <g transform="translate(8, 5)" stroke="#475569" stroke-width="1.3" fill="none">
                                <circle cx="6" cy="4" r="2.5"/>
                                <path d="M2 13 A4 4 0 0 1 10 13"/>
                              </g>
                              <text x="24" y="16" fill="#475569" font-family="sans-serif" font-size="9.5" font-weight="600">demo@cotizalo.net</text>
                            </g>
                          </g>

                          <!-- Main White Card Container -->
                          <rect x="230" y="56" width="635" height="455" rx="10" fill="#ffffff" stroke="#e2e8f0" stroke-width="1"/>

                          <!-- Controls Row -->
                          <g transform="translate(245, 70)">
                            <!-- Search Box -->
                            <rect width="230" height="30" rx="5" fill="#f8fafc" stroke="#cbd5e1" stroke-width="1"/>
                            <g transform="translate(10, 7)" stroke="#94a3b8" stroke-width="1.3" fill="none">
                              <circle cx="6" cy="6" r="4.5"/>
                              <line x1="9.5" y1="9.5" x2="13" y2="13" stroke-linecap="round"/>
                            </g>
                            <text x="28" y="19" fill="#94a3b8" font-family="sans-serif" font-size="10.5">Buscar por folio, cliente...</text>

                            <!-- Export CSV -->
                            <rect x="360" y="0" width="105" height="30" rx="5" fill="#ffffff" stroke="#cbd5e1" stroke-width="1"/>
                            <g transform="translate(368, 7)" stroke="#334155" stroke-width="1.3" fill="none">
                              <path d="M3 1 H8 L11 4 V13 A1 1 0 0 1 10 14 H3 A1 1 0 0 1 2 13 V2 A1 1 0 0 1 3 1 Z"/>
                              <path d="M8 1 V4 H11"/>
                            </g>
                            <text x="384" y="19" fill="#334155" font-family="sans-serif" font-size="10.5" font-weight="600">Exportar CSV</text>

                            <!-- + Nueva Cotización -->
                            <rect x="475" y="0" width="140" height="30" rx="5" fill="#123A2C"/>
                            <g transform="translate(485, 7)">
                              <line x1="3" y1="8" x2="13" y2="8" stroke="#ffffff" stroke-width="1.8" stroke-linecap="round"/>
                              <line x1="8" y1="3" x2="8" y2="13" stroke="#ffffff" stroke-width="1.8" stroke-linecap="round"/>
                            </g>
                            <text x="504" y="19" fill="#ffffff" font-family="sans-serif" font-size="10.5" font-weight="700">Crear Nueva Cotización</text>
                          </g>

                          <!-- Table Header -->
                          <g transform="translate(245, 116)">
                            <rect width="605" height="28" fill="#f8fafc"/>
                            <line x1="0" y1="28" x2="605" y2="28" stroke="#e2e8f0" stroke-width="1"/>
                            <text x="12" y="18" fill="#475569" font-family="sans-serif" font-size="9.5" font-weight="700"># FOLIO</text>
                            <text x="115" y="18" fill="#475569" font-family="sans-serif" font-size="9.5" font-weight="700">FECHA</text>
                            <text x="190" y="18" fill="#475569" font-family="sans-serif" font-size="9.5" font-weight="700">CLIENTE</text>
                            <text x="345" y="18" fill="#475569" font-family="sans-serif" font-size="9.5" font-weight="700">CREADO POR</text>
                            <text x="445" y="18" fill="#475569" font-family="sans-serif" font-size="9.5" font-weight="700">TOTAL</text>
                            <text x="525" y="18" fill="#475569" font-family="sans-serif" font-size="9.5" font-weight="700">ESTADO</text>
                          </g>

                          <!-- Row 1 -->
                          <g transform="translate(245, 150)">
                            <line x1="0" y1="44" x2="605" y2="44" stroke="#f1f5f9" stroke-width="1"/>
                            <text x="12" y="26" fill="#2563eb" font-family="sans-serif" font-size="11.5" font-weight="700">#COT-2026-042</text>
                            <text x="115" y="26" fill="#334155" font-family="sans-serif" font-size="10.5">20 Jul 2026</text>
                            <text x="190" y="19" fill="#0f172a" font-family="sans-serif" font-size="10.5" font-weight="700">Constructora Alpha S.A.</text>
                            <text x="190" y="32" fill="#64748b" font-family="sans-serif" font-size="8.5">+52 55 4123 8900</text>
                            <text x="345" y="26" fill="#475569" font-family="sans-serif" font-size="10.5">carlos@cotizalo.net</text>
                            <text x="445" y="26" fill="#0f172a" font-family="sans-serif" font-size="11.5" font-weight="700">$48,500.00</text>

                            <!-- Badge ACEPTADA -->
                            <rect x="525" y="11" width="70" height="20" rx="4" fill="#dcfce7" stroke="#bbf7d0" stroke-width="1"/>
                            <text x="532" y="25" fill="#15803d" font-family="sans-serif" font-size="9.5" font-weight="800">ACEPTADA</text>
                            <circle cx="583" cy="21" r="4.5" fill="#10b981"/>
                            <path d="M581 21 L582.5 22.5 L585.5 19.5" fill="none" stroke="#ffffff" stroke-width="1.4"/>
                          </g>

                          <!-- Row 2 -->
                          <g transform="translate(245, 200)">
                            <line x1="0" y1="44" x2="605" y2="44" stroke="#f1f5f9" stroke-width="1"/>
                            <text x="12" y="26" fill="#2563eb" font-family="sans-serif" font-size="11.5" font-weight="700">#COT-2026-041</text>
                            <text x="115" y="26" fill="#334155" font-family="sans-serif" font-size="10.5">19 Jul 2026</text>
                            <text x="190" y="19" fill="#0f172a" font-family="sans-serif" font-size="10.5" font-weight="700">Logística &amp; Transportes MX</text>
                            <text x="190" y="32" fill="#64748b" font-family="sans-serif" font-size="8.5">+52 81 8345 6789</text>
                            <text x="345" y="26" fill="#475569" font-family="sans-serif" font-size="10.5">sofia@cotizalo.net</text>
                            <text x="445" y="26" fill="#0f172a" font-family="sans-serif" font-size="11.5" font-weight="700">$12,800.00</text>

                            <!-- Badge BORRADOR -->
                            <rect x="525" y="11" width="70" height="20" rx="4" fill="#f1f5f9" stroke="#cbd5e1" stroke-width="1"/>
                            <text x="532" y="25" fill="#475569" font-family="sans-serif" font-size="9.5" font-weight="800">BORRADOR</text>
                          </g>

                          <!-- Row 3 -->
                          <g transform="translate(245, 250)">
                            <line x1="0" y1="44" x2="605" y2="44" stroke="#f1f5f9" stroke-width="1"/>
                            <text x="12" y="26" fill="#2563eb" font-family="sans-serif" font-size="11.5" font-weight="700">#COT-2026-040</text>
                            <text x="115" y="26" fill="#334155" font-family="sans-serif" font-size="10.5">18 Jul 2026</text>
                            <text x="190" y="19" fill="#0f172a" font-family="sans-serif" font-size="10.5" font-weight="700">Servicios Industriales Norte</text>
                            <text x="190" y="32" fill="#64748b" font-family="sans-serif" font-size="8.5">+52 33 3612 4578</text>
                            <text x="345" y="26" fill="#475569" font-family="sans-serif" font-size="10.5">carlos@cotizalo.net</text>
                            <text x="445" y="26" fill="#0f172a" font-family="sans-serif" font-size="11.5" font-weight="700">$95,600.00</text>

                            <!-- Badge PAGADA -->
                            <rect x="525" y="11" width="70" height="20" rx="4" fill="#dbeafe" stroke="#bfdbfe" stroke-width="1"/>
                            <text x="534" y="25" fill="#1d4ed8" font-family="sans-serif" font-size="9.5" font-weight="800">PAGADA</text>
                            <circle cx="583" cy="21" r="4.5" fill="#1d4ed8"/>
                            <path d="M581 21 L582.5 22.5 L585.5 19.5" fill="none" stroke="#ffffff" stroke-width="1.4"/>
                          </g>

                          <!-- Pagination Footer -->
                          <g transform="translate(245, 470)">
                            <line x1="0" y1="0" x2="605" y2="0" stroke="#e2e8f0" stroke-width="1"/>
                            <text x="0" y="20" fill="#64748b" font-family="sans-serif" font-size="10">Filas por página: <tspan fill="#334155" font-weight="700">10 ▾</tspan></text>
                            <text x="230" y="20" fill="#64748b" font-family="sans-serif" font-size="10">Página 1 de 1 (3 elementos)</text>
                            
                            <rect x="500" y="6" width="45" height="20" rx="4" fill="#ffffff" stroke="#cbd5e1" stroke-width="1"/>
                            <text x="510" y="19" fill="#94a3b8" font-family="sans-serif" font-size="9">&lt; Ant</text>

                            <rect x="550" y="6" width="45" height="20" rx="4" fill="#ffffff" stroke="#cbd5e1" stroke-width="1"/>
                            <text x="560" y="19" fill="#94a3b8" font-family="sans-serif" font-size="9">Sig &gt;</text>
                          </g>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section (Light Theme) -->
    <section id="features" class="features-section relative light-section">
        <div class="container">
            <div class="section-header text-center animate-on-scroll fade-in-up">
                <h2 class="text-dark">
                    <?php echo esc_html(get_theme_mod('features_title', 'Interfaz limpia, segura y profesional.')); ?>
                </h2>
                <p class="text-dark-muted">
                    <?php echo esc_html(get_theme_mod('features_subtitle', 'Diseñado para equipos que requieren rapidez y precisión, eliminando la frialdad de Excel en cada presupuesto.')); ?>
                </p>
            </div>

            <div class="features-grid" style="grid-template-columns: repeat(auto-fit, minmax(min(100%, 400px), 1fr)); max-width: 1000px; margin: 0 auto;">
                <!-- Feature 1 -->
                <div class="feature-card animate-on-scroll fade-in-up delay-100">
                    <div class="feature-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <h3><?php echo esc_html(get_theme_mod('feat_1_title', 'Cotizando hechos y retornos!')); ?></h3>
                    <p><?php echo esc_html(get_theme_mod('feat_1_desc', 'Genera cotizaciones completas reutilizando plantillas dinámicas y tu catálogo de productos guardados.')); ?>
                    </p>
                </div>
                <!-- Feature 2 -->
                <div class="feature-card animate-on-scroll fade-in-up delay-200">
                    <div class="feature-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                        </svg>
                    </div>
                    <h3><?php echo esc_html(get_theme_mod('feat_2_title', 'Seriedad Técnica')); ?></h3>
                    <p><?php echo esc_html(get_theme_mod('feat_2_desc', 'Toda tu información de ventas viaja asegurada. Tus datos y los de tus clientes están a salvo en una plataforma estable.')); ?>
                    </p>
                </div>
                <!-- Feature 3 -->
                <div class="feature-card animate-on-scroll fade-in-up delay-300">
                    <div class="feature-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                        </svg>
                    </div>
                    <h3><?php echo esc_html(get_theme_mod('feat_3_title', 'Presupuesto Organizado')); ?></h3>
                    <p><?php echo esc_html(get_theme_mod('feat_3_desc', 'Diseño web y móvil integrado que permite llevar el control de todo tu negocio desde la palma de tu mano.')); ?>
                    </p>
                </div>
                <!-- Feature 4 -->
                <div class="feature-card animate-on-scroll fade-in-up delay-300">
                    <div class="feature-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <h3>Acceso desde Cualquier Lugar</h3>
                    <p>Tus cotizaciones siempre en la nube. Accede, edita y comparte desde tu celular en cualquier momento.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== CLOUD & MOBILE SECTION ==================== -->
    <section id="how-it-works" style="
        padding: 6rem 0;
        background: linear-gradient(180deg, #f8fafc 0%, #f1f5f9 100%);
        overflow: hidden;
    ">
        <div class="container">

            <!-- Section header -->
            <div class="animate-on-scroll fade-in-up" style="text-align: center; max-width: 650px; margin: 0 auto 4rem;">
                <div style="
                    display: inline-flex; align-items: center; gap: 8px;
                    background: rgba(18,58,44,0.08); border: 1px solid rgba(18,58,44,0.2);
                    border-radius: 999px; padding: 6px 18px; margin-bottom: 1.25rem;
                ">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#123A2C" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"/></svg>
                    <span style="font-size: 0.75rem; font-weight: 600; color: #123A2C; letter-spacing: 0.08em; text-transform: uppercase;">En la Nube · Siempre Disponible</span>
                </div>
                <h2 class="text-dark" style="margin-bottom: 1rem; font-size: clamp(1.8rem, 4vw, 2.5rem);">Siempre contigo,<br>desde cualquier lugar.</h2>
                <p class="text-dark-muted" style="font-size: 1.05rem; line-height: 1.7;">
                    Tus cotizaciones viven en la nube. Ajústalas en tiempo real y tu cliente las aprueba al instante — sin correos, sin esperas, sin complicaciones.
                </p>
            </div>

            <!-- Two-column layout: benefits + mobile mockup -->
            <div style="
                display: grid;
                grid-template-columns: 1fr 1fr;
                gap: 4rem;
                align-items: center;
            " class="mobile-section-grid">

                <!-- LEFT: Benefit list -->
                <div class="animate-on-scroll fade-in-up delay-100">

                    <!-- Benefit 1 -->
                    <div style="display: flex; gap: 1.25rem; align-items: flex-start; margin-bottom: 2.5rem;">
                        <div style="
                            flex-shrink: 0; width: 52px; height: 52px;
                            background: rgba(18,58,44,0.08);
                            border: 1px solid rgba(18,58,44,0.2);
                            border-radius: 14px;
                            display: flex; align-items: center; justify-content: center;
                        ">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#123A2C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 style="font-size: 1.1rem; font-weight: 700; color: #1a202c; margin: 0 0 0.4rem;">Cotizaciones en la nube</h3>
                            <p style="color: #64748b; font-size: 0.95rem; line-height: 1.65; margin: 0;">
                                Todas tus propuestas se guardan automáticamente. Sin archivos locales, sin riesgo de perder información. Disponibles 24/7 desde cualquier dispositivo.
                            </p>
                        </div>
                    </div>

                    <!-- Benefit 2 -->
                    <div style="display: flex; gap: 1.25rem; align-items: flex-start; margin-bottom: 2.5rem;">
                        <div style="
                            flex-shrink: 0; width: 52px; height: 52px;
                            background: rgba(99,102,241,0.08);
                            border: 1px solid rgba(99,102,241,0.2);
                            border-radius: 14px;
                            display: flex; align-items: center; justify-content: center;
                        ">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#6366f1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 style="font-size: 1.1rem; font-weight: 700; color: #1a202c; margin: 0 0 0.4rem;">Acceso total desde el móvil</h3>
                            <p style="color: #64748b; font-size: 0.95rem; line-height: 1.65; margin: 0;">
                                Crea, revisa y envía cotizaciones desde tu celular en segundos. Tu negocio no se detiene aunque estés fuera de la oficina.
                            </p>
                        </div>
                    </div>

                    <!-- Benefit 3 -->
                    <div style="display: flex; gap: 1.25rem; align-items: flex-start;">
                        <div style="
                            flex-shrink: 0; width: 52px; height: 52px;
                            background: rgba(234,88,12,0.08);
                            border: 1px solid rgba(234,88,12,0.2);
                            border-radius: 14px;
                            display: flex; align-items: center; justify-content: center;
                        ">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ea580c" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"/>
                                <polyline points="12 6 12 12 16 14"/>
                            </svg>
                        </div>
                        <div>
                            <h3 style="font-size: 1.1rem; font-weight: 700; color: #1a202c; margin: 0 0 0.4rem;">Ajustes en tiempo real · Aprobación inmediata</h3>
                            <p style="color: #64748b; font-size: 0.95rem; line-height: 1.65; margin: 0;">
                                ¿El cliente pide un cambio? Actualiza la cotización al instante y él la ve reflejada de inmediato. Aprobación con un clic, sin correos de ida y vuelta.
                            </p>
                        </div>
                    </div>

                </div>

                <!-- RIGHT: Mobile mockup -->
                <div class="animate-on-scroll fade-in-up delay-200" style="display: flex; justify-content: center;">
                    <div style="position: relative; width: 260px;">

                        <!-- Glow behind phone -->
                        <div style="
                            position: absolute; inset: -40px;
                            background: radial-gradient(ellipse at center, rgba(18,58,44,0.12) 0%, transparent 70%);
                            border-radius: 50%; z-index: 0;
                        "></div>

                        <!-- Phone frame -->
                        <div style="
                            position: relative; z-index: 1;
                            background: #0f172a;
                            border: 2px solid rgba(255,255,255,0.15);
                            border-radius: 36px;
                            padding: 14px 10px;
                            box-shadow: 0 40px 100px rgba(0,0,0,0.25), 0 0 0 1px rgba(0,0,0,0.05);
                        ">
                            <!-- Notch -->
                            <div style="
                                width: 70px; height: 22px;
                                background: #0f172a;
                                border: 2px solid rgba(255,255,255,0.08);
                                border-radius: 12px;
                                margin: 0 auto 12px;
                            "></div>

                            <!-- App screen -->
                            <div style="background: #111827; border-radius: 24px; overflow: hidden; padding: 16px;">

                                <!-- App header -->
                                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 14px;">
                                    <span style="font-size: 11px; font-weight: 700; color: #4ade80;">Cotizalo</span>
                                    <div style="width: 22px; height: 22px; background: rgba(74,222,128,0.15); border-radius: 50%; display:flex; align-items:center; justify-content:center;">
                                        <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="#4ade80" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/></svg>
                                    </div>
                                </div>

                                <!-- Quote card -->
                                <div style="
                                    background: rgba(18,58,44,0.35);
                                    border: 1px solid rgba(74,222,128,0.2);
                                    border-radius: 12px; padding: 12px; margin-bottom: 10px;
                                ">
                                    <div style="font-size: 9px; color: rgba(255,255,255,0.4); margin-bottom: 4px;">COTIZACIÓN #0047</div>
                                    <div style="font-size: 11px; font-weight: 600; color: #fff; margin-bottom: 8px;">Servicio de Instalación</div>
                                    <div style="display: flex; justify-content: space-between; align-items: center;">
                                        <div style="font-size: 14px; font-weight: 700; color: #4ade80;">$12,500 MXN</div>
                                        <div style="
                                            background: rgba(251,191,36,0.15);
                                            border: 1px solid rgba(251,191,36,0.3);
                                            border-radius: 999px; padding: 2px 8px;
                                            font-size: 8px; font-weight: 600; color: #fbbf24;
                                        ">En revisión</div>
                                    </div>
                                </div>

                                <!-- Real-time indicator -->
                                <div style="
                                    background: rgba(99,102,241,0.1);
                                    border: 1px solid rgba(99,102,241,0.2);
                                    border-radius: 10px; padding: 10px 12px; margin-bottom: 10px;
                                    display: flex; align-items: center; gap: 8px;
                                ">
                                    <div style="
                                        width: 8px; height: 8px; border-radius: 50%;
                                        background: #818cf8; box-shadow: 0 0 6px #818cf8;
                                        animation: pulse-dot 1.5s ease-in-out infinite;
                                        flex-shrink: 0;
                                    "></div>
                                    <span style="font-size: 9px; color: rgba(255,255,255,0.7); line-height: 1.4;">
                                        Cliente viendo cambios<br><strong style="color: #818cf8;">en tiempo real...</strong>
                                    </span>
                                </div>

                                <!-- Approve button -->
                                <div style="
                                    background: linear-gradient(135deg, #123A2C, #1a5c3e);
                                    border-radius: 10px; padding: 10px; text-align: center;
                                    font-size: 10px; font-weight: 700; color: #fff; letter-spacing: 0.03em;
                                ">✓ Aprobar cotización</div>

                                <!-- Nav dots -->
                                <div style="display: flex; justify-content: center; gap: 6px; margin-top: 14px;">
                                    <div style="width: 20px; height: 3px; background: #4ade80; border-radius: 3px;"></div>
                                    <div style="width: 6px; height: 3px; background: rgba(255,255,255,0.15); border-radius: 3px;"></div>
                                    <div style="width: 6px; height: 3px; background: rgba(255,255,255,0.15); border-radius: 3px;"></div>
                                </div>
                            </div>

                            <!-- Home indicator -->
                            <div style="width: 80px; height: 4px; background: rgba(255,255,255,0.2); border-radius: 3px; margin: 10px auto 0;"></div>
                        </div>

                        <!-- Badge: Nube -->
                        <div style="
                            position: absolute; top: -10px; right: -24px; z-index: 2;
                            background: #fff; border: 1px solid rgba(18,58,44,0.2);
                            border-radius: 12px; padding: 8px 12px;
                            display: flex; align-items: center; gap: 6px;
                            box-shadow: 0 8px 24px rgba(0,0,0,0.1);
                        ">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#123A2C" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"/></svg>
                            <span style="font-size: 10px; font-weight: 600; color: #123A2C;">Nube</span>
                        </div>

                        <!-- Badge: Aprobada -->
                        <div style="
                            position: absolute; bottom: 30px; left: -30px; z-index: 2;
                            background: #fff; border: 1px solid rgba(234,88,12,0.2);
                            border-radius: 12px; padding: 8px 12px;
                            display: flex; align-items: center; gap: 6px;
                            box-shadow: 0 8px 24px rgba(0,0,0,0.1);
                        ">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#ea580c" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                            <span style="font-size: 10px; font-weight: 600; color: #ea580c;">Aprobada</span>
                        </div>

                    </div>
                </div>

            </div><!-- end grid -->
        </div>

        <style>
            @keyframes pulse-dot {
                0%, 100% { opacity: 1; transform: scale(1); }
                50% { opacity: 0.5; transform: scale(0.8); }
            }
            @media (max-width: 768px) {
                .mobile-section-grid {
                    grid-template-columns: 1fr !important;
                    gap: 3rem !important;
                }
            }
        </style>
    </section>

    <!-- Bottom CTA (Dark Theme) -->
    <section class="cta-section">
        <div class="container animate-on-scroll scale-in">
            <div class="cta-box relative overflow-hidden">
                <div class="cta-bg-glow"></div>
                <h2 class="display-title-sm" style="margin-bottom: 1rem; color: #ffffff;">
                    <?php echo esc_html(get_theme_mod('cta_title', '¿Listo para digitalizar tus ventas?')); ?>
                </h2>
                <p style="max-width: 600px; margin: 0 auto 2.5rem; color: rgba(255,255,255,0.8);">
                    <?php echo esc_html(get_theme_mod('cta_desc', 'Únete a la revolución de las ventas digitales y asombra a tus clientes con propuestas modernas.')); ?>
                </p>
                <div class="hero-buttons">
                    <a href="https://app.cotizalo.net/signup" class="btn btn-primary btn-lg">Comienza tu Prueba
                        Gratuita</a>
                </div>
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
                            alt="Cotízalo Logo" style="height: 70px; width: auto; object-fit: contain;"
                            id="footer-logo">
                    </a>
                    <p class="text-muted mt-1" style="max-width: 300px;">Transformando la forma en que los equipos de
                        ventas crean, envían y cierran propuestas.</p>
                </div>
                <div class="footer-links">
                    <h4>Producto</h4>
                    <ul>
                        <li><a href="#">Características</a></li>
                        <li><a href="#">Precios</a></li>
                    </ul>
                </div>
                <div class="footer-links">
                    <h4>Compañía</h4>
                    <ul>
                        <li><a href="<?php echo esc_url(home_url('/que-es-cotizalo/')); ?>">¿Qué es Cotízalo?</a></li>
                        <li><a href="<?php echo esc_url(home_url('/soporte/')); ?>">Soporte</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?> DrG Labs CO. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Header scroll effect
            const header = document.getElementById('navbar');
            window.addEventListener('scroll', () => {
                if (window.scrollY > 50) {
                    header.classList.add('scrolled');
                } else {
                    header.classList.remove('scrolled');
                }
            });

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

            // Animate elements on scroll
            const observerOptions = {
                root: null,
                rootMargin: '0px',
                threshold: 0.1
            };

            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);

            document.querySelectorAll('.animate-on-scroll').forEach(el => {
                observer.observe(el);
            });

            // Mobile menu toggle
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