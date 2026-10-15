<?php
/**
 * Template Name: Precios
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
    <link rel="canonical" href="<?php echo esc_url(home_url('/precios/')); ?>">
    <title>Planes y Precios del Sistema de Cotizaciones | Cotízalo</title>
    <meta name="description"
        content="Elige el plan ideal para tu negocio en México. Precios transparentes sin comisiones ocultas. Todos los planes incluyen 14 días de prueba gratis. ¡Empieza hoy!">

    <!-- Open Graph / Facebook / WhatsApp -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo esc_url(home_url($_SERVER['REQUEST_URI'])); ?>">
    <meta property="og:title" content="Planes y Precios del Sistema de Cotizaciones | Cotízalo">
    <meta property="og:description"
        content="Elige el plan ideal para tu negocio en México. Precios transparentes sin comisiones ocultas. Todos los planes incluyen 14 días de prueba gratis. ¡Empieza hoy!">
    <meta property="og:image"
        content="<?php echo esc_url(get_template_directory_uri()); ?>/assets/assets/og-social.jpg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:locale" content="es_MX">

    <!-- Twitter / X -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Planes y Precios del Sistema de Cotizaciones | Cotízalo">
    <meta name="twitter:description"
        content="Elige el plan ideal para tu negocio en México. Precios transparentes sin comisiones ocultas. Todos los planes incluyen 14 días de prueba gratis. ¡Empieza hoy!">
    <meta name="twitter:image"
        content="<?php echo esc_url(get_template_directory_uri()); ?>/assets/assets/og-social.jpg">

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

    <!-- Structured Data (Schema.org JSON-LD) -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@graph": [
            {
                "@type": "WebPage",
                "@id": "<?php echo esc_url(home_url('/precios/')); ?>#webpage",
                "url": "<?php echo esc_url(home_url('/precios/')); ?>",
                "name": "Planes y Precios del Sistema de Cotizaciones | Cotízalo",
                "description": "Elige el plan ideal para tu negocio en México. Precios transparentes desde $199 MXN sin comisiones ocultas. 14 días de prueba gratis sin tarjeta.",
                "isPartOf": { "@id": "<?php echo esc_url(home_url('/')); ?>#website" },
                "breadcrumb": { "@id": "<?php echo esc_url(home_url('/precios/')); ?>#breadcrumb" },
                "inLanguage": "es-MX"
            },
            {
                "@type": "BreadcrumbList",
                "@id": "<?php echo esc_url(home_url('/precios/')); ?>#breadcrumb",
                "itemListElement": [
                    { "@type": "ListItem", "position": 1, "name": "Inicio", "item": "<?php echo esc_url(home_url('/')); ?>" },
                    { "@type": "ListItem", "position": 2, "name": "Precios" }
                ]
            },
            {
                "@type": "Product",
                "@id": "<?php echo esc_url(home_url('/precios/')); ?>#product",
                "name": "Cotízalo - Suscripción Mensual",
                "description": "Sistema de cotizaciones automatizado para empresas en México. Planes diseñados para profesionales, microempresas y pymes.",
                "image": "<?php echo esc_url(get_template_directory_uri()); ?>/assets/assets/og-social.jpg",
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
                }
            },
            {
                "@type": "FAQPage",
                "mainEntity": [
                    {
                        "@type": "Question",
                        "name": "¿Cómo funciona la prueba gratuita de 14 días?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Al registrarte obtienes acceso inmediato y completo a todas las funcionalidades de Cotízalo durante 14 días. No requerimos tarjeta de crédito para iniciar y no hay cobros sorpresa."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "¿Puedo cambiar de plan o cancelar en cualquier momento?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Sí. No existen plazos forzosos ni contratos de permanencia. Puedes subir o bajar de plan, o cancelar tu suscripción con un solo clic directamente desde tu panel de configuración."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "¿Qué formas de pago aceptan en México?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Aceptamos todas las tarjetas de débito y crédito mexicanas e internacionales (Visa, Mastercard, American Express), así como pagos directos mediante Apple Pay y Google Pay. Todos los pagos son procesados de forma segura con cifrado bancario."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "¿Mis clientes necesitan registrarse o instalar alguna app para ver mis cotizaciones?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "No. Tus clientes reciben un enlace interactivo o PDF por WhatsApp o correo y pueden ver la propuesta, firmarla digitalmente o descargarla desde su celular sin necesidad de crear ninguna cuenta ni instalar nada."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "¿Hay cargos ocultos por cotizaciones enviadas o mensajes de WhatsApp?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "No cobramos comisión por propuesta ni cobro extra por mensaje de WhatsApp. El precio de tu plan mensual cubre todo el servicio sin sorpresas."
                        }
                    }
                ]
            }
        ]
    }
    </script>

    <!-- Master Design System Stylesheet -->
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/assets/css/styles.css?v=2.1.1">

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
                    alt="Cotízalo" id="brand-logo" width="223" height="60">
            </a>
            <ul class="nav-links">
                <li><a href="<?php echo esc_url(home_url('/que-es-cotizalo/')); ?>" class="nav-item">¿Qué es Cotízalo?</a></li>
                <li><a href="<?php echo esc_url(home_url('/#features')); ?>" class="nav-item">Características</a></li>
                <li><a href="<?php echo esc_url(home_url('/precios/')); ?>" class="nav-item active">Precios</a></li>
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

            <button class="mobile-menu-btn" aria-label="Abrir menú de navegación">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </header>

    <!-- Pricing Hero -->
    <section class="pricing-hero">
        <div class="container animate-on-scroll">
            <h1>
                <?php echo esc_html(get_theme_mod('precios_hero_title', 'Precios simples y transparentes')); ?>
            </h1>
            <p>
                <?php echo esc_html(get_theme_mod('precios_hero_desc', 'Sin costos ocultos ni límites de créditos de IA. Interfaz gráfica completa para buscar, editar y dar seguimiento a tus clientes.')); ?>
            </p>
        </div>
    </section>

    <!-- Plans Section -->
    <section class="pricing-section">
        <div class="container container-wide">
            <!-- Plans Grid -->
            <div class="plans-grid">
                <!-- Plan 1: Inicial -->
                <div class="plan-card animate-on-scroll delay-100">
                    <div class="plan-header">
                        <h3 class="plan-name"><?php echo esc_html(get_theme_mod('plan_inicial_name', 'Inicial')); ?></h3>
                        <div class="plan-price-block">
                            <span class="plan-currency">$</span>
                            <span class="plan-price" data-monthly="<?php echo esc_attr(get_theme_mod('plan_inicial_price', '199')); ?>"><?php echo esc_html(get_theme_mod('plan_inicial_price', '199')); ?></span>
                            <span class="plan-period">/mes</span>
                        </div>
                        <div class="plan-storage-tag">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12H2M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"/></svg>
                            <?php echo esc_html(get_theme_mod('plan_inicial_storage', '20 GB de almacenamiento')); ?>
                        </div>
                    </div>
                    <ul class="plan-features-list">
                        <li class="plan-feature-item">
                            <svg class="plan-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                            <span><?php echo esc_html(get_theme_mod('plan_inicial_f1', 'Cotizaciones ilimitadas')); ?></span>
                        </li>
                        <li class="plan-feature-item">
                            <svg class="plan-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                            <span><?php echo esc_html(get_theme_mod('plan_inicial_f2', 'Envío por WhatsApp y PDF')); ?></span>
                        </li>
                        <li class="plan-feature-item">
                            <svg class="plan-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                            <span><?php echo esc_html(get_theme_mod('plan_inicial_f3', 'Monitoreo de estado de cotizaciones')); ?></span>
                        </li>
                        <li class="plan-feature-item">
                            <svg class="plan-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                            <span><?php echo esc_html(get_theme_mod('plan_inicial_f4', 'Agenda de presupuestos autorizados')); ?></span>
                        </li>
                        <li class="plan-feature-item">
                            <svg class="plan-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                            <span><?php echo esc_html(get_theme_mod('plan_inicial_f5', 'Soporte por email')); ?></span>
                        </li>
                        <li class="plan-feature-item">
                            <svg class="plan-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                            <span><?php echo esc_html(get_theme_mod('plan_inicial_f6', 'Mas de 20 mil cotizaciones')); ?></span>
                        </li>
                    </ul>
                    <div class="plan-cta-wrapper">
                        <a href="https://app.cotizalo.net/signup?plan=inicial" class="btn btn-secondary">
                            <?php echo esc_html(get_theme_mod('plan_inicial_btn', 'Comenzar Prueba Gratis')); ?>
                        </a>
                    </div>
                </div>

                <!-- Plan 2: Básico -->
                <div class="plan-card animate-on-scroll delay-200">
                    <div class="plan-header">
                        <h3 class="plan-name"><?php echo esc_html(get_theme_mod('plan_basico_name', 'Básico')); ?></h3>
                        <div class="plan-price-block">
                            <span class="plan-currency">$</span>
                            <span class="plan-price" data-monthly="<?php echo esc_attr(get_theme_mod('plan_basico_price', '399')); ?>"><?php echo esc_html(get_theme_mod('plan_basico_price', '399')); ?></span>
                            <span class="plan-period">/mes</span>
                        </div>
                        <div class="plan-storage-tag">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12H2M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"/></svg>
                            <?php echo esc_html(get_theme_mod('plan_basico_storage', '30 GB de almacenamiento')); ?>
                        </div>
                    </div>
                    <ul class="plan-features-list">
                        <li class="plan-feature-item">
                            <svg class="plan-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                            <span><?php echo esc_html(get_theme_mod('plan_basico_f1', 'Cotizaciones ilimitadas')); ?></span>
                        </li>
                        <li class="plan-feature-item">
                            <svg class="plan-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                            <span><?php echo esc_html(get_theme_mod('plan_basico_f2', 'Envío por WhatsApp y PDF')); ?></span>
                        </li>
                        <li class="plan-feature-item">
                            <svg class="plan-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                            <span><?php echo esc_html(get_theme_mod('plan_basico_f3', 'Monitoreo de estado de cotizaciones')); ?></span>
                        </li>
                        <li class="plan-feature-item">
                            <svg class="plan-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                            <span><?php echo esc_html(get_theme_mod('plan_basico_f4', 'Agenda de presupuestos autorizados')); ?></span>
                        </li>
                        <li class="plan-feature-item">
                            <svg class="plan-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                            <span><?php echo esc_html(get_theme_mod('plan_basico_f5', 'Catálogo de productos')); ?></span>
                        </li>
                        <li class="plan-feature-item">
                            <svg class="plan-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                            <span><?php echo esc_html(get_theme_mod('plan_basico_f6', 'Soporte por email')); ?></span>
                        </li>
                        <li class="plan-feature-item">
                            <svg class="plan-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                            <span><?php echo esc_html(get_theme_mod('plan_basico_f7', 'Mas de 40 mil cotizaciones')); ?></span>
                        </li>
                    </ul>
                    <div class="plan-cta-wrapper">
                        <a href="https://app.cotizalo.net/signup?plan=basico" class="btn btn-secondary">
                            <?php echo esc_html(get_theme_mod('plan_basico_btn', 'Comenzar Prueba Gratis')); ?>
                        </a>
                    </div>
                </div>

                <!-- Plan 3: Profesional (Featured) -->
                <div class="plan-card featured animate-on-scroll delay-300">
                    <span class="plan-featured-ribbon"><?php echo esc_html(get_theme_mod('plan_pro_badge', 'Recomendado')); ?></span>
                    <div class="plan-header">
                        <h3 class="plan-name"><?php echo esc_html(get_theme_mod('plan_pro_name', 'Profesional')); ?></h3>
                        <div class="plan-price-block">
                            <span class="plan-currency">$</span>
                            <span class="plan-price" data-monthly="<?php echo esc_attr(get_theme_mod('plan_pro_price', '599')); ?>"><?php echo esc_html(get_theme_mod('plan_pro_price', '599')); ?></span>
                            <span class="plan-period">/mes</span>
                        </div>
                        <div class="plan-storage-tag">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12H2M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"/></svg>
                            <?php echo esc_html(get_theme_mod('plan_pro_storage', '50 GB de almacenamiento')); ?>
                        </div>
                    </div>
                    <ul class="plan-features-list">
                        <li class="plan-feature-item">
                            <svg class="plan-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                            <span><?php echo esc_html(get_theme_mod('plan_pro_f1', 'Cotizaciones ilimitadas')); ?></span>
                        </li>
                        <li class="plan-feature-item">
                            <svg class="plan-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                            <span><?php echo esc_html(get_theme_mod('plan_pro_f2', 'Envío por WhatsApp y PDF')); ?></span>
                        </li>
                        <li class="plan-feature-item">
                            <svg class="plan-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                            <span><?php echo esc_html(get_theme_mod('plan_pro_f3', 'Monitoreo de estado de cotizaciones')); ?></span>
                        </li>
                        <li class="plan-feature-item">
                            <svg class="plan-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                            <span><?php echo esc_html(get_theme_mod('plan_pro_f4', 'Agenda de presupuestos autorizados')); ?></span>
                        </li>
                        <li class="plan-feature-item">
                            <svg class="plan-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                            <span><?php echo esc_html(get_theme_mod('plan_pro_f5', 'Productos más vendidos o cotizados')); ?></span>
                        </li>
                        <li class="plan-feature-item">
                            <svg class="plan-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                            <span><?php echo esc_html(get_theme_mod('plan_pro_f6', 'Multi-empresa y reportes avanzados')); ?></span>
                        </li>
                        <li class="plan-feature-item">
                            <svg class="plan-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                            <span><?php echo esc_html(get_theme_mod('plan_pro_f7', 'Soporte prioritario por email')); ?></span>
                        </li>
                        <li class="plan-feature-item">
                            <svg class="plan-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                            <span><?php echo esc_html(get_theme_mod('plan_pro_f8', 'Mas de 60 mil cotizaciones')); ?></span>
                        </li>
                    </ul>
                    <div class="plan-cta-wrapper">
                        <a href="https://app.cotizalo.net/signup?plan=profesional" class="btn btn-primary">
                            <?php echo esc_html(get_theme_mod('plan_pro_btn', 'Comenzar Prueba Gratis')); ?>
                        </a>
                    </div>
                </div>

                <!-- Plan 4: Empresarial -->
                <div class="plan-card animate-on-scroll delay-100">
                    <div class="plan-header">
                        <h3 class="plan-name"><?php echo esc_html(get_theme_mod('plan_emp_name', 'Empresarial')); ?></h3>
                        <div class="plan-price-block">
                            <span class="plan-currency">$</span>
                            <span class="plan-price" data-monthly="<?php echo esc_attr(get_theme_mod('plan_emp_price', '899')); ?>"><?php echo esc_html(get_theme_mod('plan_emp_price', '899')); ?></span>
                            <span class="plan-period">/mes</span>
                        </div>
                        <div class="plan-storage-tag">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12H2M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"/></svg>
                            <?php echo esc_html(get_theme_mod('plan_emp_storage', '80 GB de almacenamiento')); ?>
                        </div>
                    </div>
                    <ul class="plan-features-list">
                        <li class="plan-feature-item">
                            <svg class="plan-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                            <span><?php echo esc_html(get_theme_mod('plan_emp_f1', 'Cotizaciones ilimitadas')); ?></span>
                        </li>
                        <li class="plan-feature-item">
                            <svg class="plan-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                            <span><?php echo esc_html(get_theme_mod('plan_emp_f2', 'Envío por WhatsApp y PDF')); ?></span>
                        </li>
                        <li class="plan-feature-item">
                            <svg class="plan-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                            <span><?php echo esc_html(get_theme_mod('plan_emp_f3', 'Monitoreo de estado en tiempo real')); ?></span>
                        </li>
                        <li class="plan-feature-item">
                            <svg class="plan-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                            <span><?php echo esc_html(get_theme_mod('plan_emp_f4', 'Agenda de presupuestos autorizados')); ?></span>
                        </li>
                        <li class="plan-feature-item">
                            <svg class="plan-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                            <span><?php echo esc_html(get_theme_mod('plan_emp_f5', 'Analíticas de productos cotizados')); ?></span>
                        </li>
                        <li class="plan-feature-item">
                            <svg class="plan-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                            <span><?php echo esc_html(get_theme_mod('plan_emp_f6', 'Multi-empresa y Cuenta Administrador')); ?></span>
                        </li>
                        <li class="plan-feature-item">
                            <svg class="plan-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                            <span><?php echo esc_html(get_theme_mod('plan_emp_f7', 'Soporte prioritario por email')); ?></span>
                        </li>
                        <li class="plan-feature-item">
                            <svg class="plan-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                            <span><?php echo esc_html(get_theme_mod('plan_emp_f8', 'Mas de 90 mil cotizaciones')); ?></span>
                        </li>
                    </ul>
                    <div class="plan-cta-wrapper">
                        <a href="https://app.cotizalo.net/signup?plan=empresarial" class="btn btn-secondary">
                            <?php echo esc_html(get_theme_mod('plan_emp_btn', 'Comenzar Prueba Gratis')); ?>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Guarantees Strip -->
            <div class="guarantees-strip animate-on-scroll">
                <div class="guarantee-item">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                    <span>14 días de prueba gratis</span>
                </div>
                <div class="guarantee-item">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                    <span>Cancela en cualquier momento</span>
                </div>
                <div class="guarantee-item">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                    <span>Soporte en español en México</span>
                </div>
            </div>

            <!-- Payment Methods -->
            <div class="payment-methods animate-on-scroll" aria-label="Métodos de pago aceptados">
                <span class="payment-label">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="color:var(--c-accent-mint); margin-right:6px; vertical-align:-1px;"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                    Pagos 100% seguros y cifrados
                </span>
                <ul class="payment-icons">
                    <li class="payment-badge" title="Visa">
                        <svg width="54" height="30" viewBox="0 0 54 30" role="img" aria-label="Visa">
                            <text x="27" y="22" text-anchor="middle" font-family="Inter, -apple-system, sans-serif" font-size="18" font-weight="900" font-style="italic" letter-spacing="-0.5" fill="currentColor">VISA</text>
                        </svg>
                    </li>
                    <li class="payment-badge" title="Mastercard">
                        <svg width="54" height="30" viewBox="0 0 54 30" role="img" aria-label="Mastercard">
                            <circle cx="21" cy="15" r="10" fill="currentColor" fill-opacity="0.9"/>
                            <circle cx="33" cy="15" r="10" fill="#34D399" fill-opacity="0.85"/>
                        </svg>
                    </li>
                    <li class="payment-badge" title="American Express">
                        <svg width="54" height="30" viewBox="0 0 54 30" role="img" aria-label="American Express">
                            <rect x="4" y="4" width="46" height="22" rx="3" fill="none" stroke="currentColor" stroke-width="1.5" stroke-dasharray="2 1"/>
                            <text x="27" y="20" text-anchor="middle" font-family="Inter, -apple-system, sans-serif" font-size="11.5" font-weight="900" letter-spacing="0.8" fill="currentColor">AMEX</text>
                        </svg>
                    </li>
                    <li class="payment-badge" title="Google Pay">
                        <svg width="54" height="30" viewBox="0 0 54 30" role="img" aria-label="Google Pay">
                            <text x="27" y="21" text-anchor="middle" font-family="Inter, -apple-system, sans-serif" font-size="14" font-weight="700" fill="currentColor">G Pay</text>
                        </svg>
                    </li>
                    <li class="payment-badge" title="Apple Pay">
                        <svg width="54" height="30" viewBox="0 0 54 30" role="img" aria-label="Apple Pay">
                            <g transform="translate(7, 5.5) scale(0.9)" fill="currentColor"><path d="M17.05 20.28c-.98.95-2.05.8-3.08.35-1.09-.46-2.09-.48-3.24 0-1.44.62-2.2.44-3.06-.35C2.79 15.25 3.51 7.59 9.05 7.31c1.35.07 2.29.74 3.08.8 1.18-.24 2.31-.93 3.57-.84 1.51.12 2.65.72 3.4 1.8-3.12 1.87-2.38 5.98.48 7.13-.57 1.5-1.31 2.99-2.54 4.09zM12.03 7.25c-.15-2.23 1.66-4.07 3.74-4.25.29 2.58-2.34 4.5-3.74 4.25z"/></g>
                            <text x="28" y="21" text-anchor="start" font-family="Inter, -apple-system, sans-serif" font-size="13" font-weight="700" fill="currentColor">Pay</text>
                        </svg>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- FAQ Accordion -->
    <section class="faq-section">
        <div class="container">
            <div class="section-header animate-on-scroll">
                <h2 class="section-title">
                    Todo lo que necesitas saber sobre nuestros planes
                </h2>
                <p class="section-subtitle">
                    Respuestas claras y directas sin letras chiquitas ni sorpresas.
                </p>
            </div>

            <div class="faq-list animate-on-scroll">
                <div class="faq-item open">
                    <button class="faq-question" type="button">
                        <span>¿Cómo funciona la prueba gratuita de 14 días?</span>
                        <span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"/></svg></span>
                    </button>
                    <div class="faq-answer">
                        Al registrarte obtienes acceso inmediato y completo a todas las funcionalidades de Cotízalo durante 14 días. No requerimos tarjeta de crédito para iniciar y no hay cobros sorpresa.
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question" type="button">
                        <span>¿Puedo cambiar de plan o cancelar en cualquier momento?</span>
                        <span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"/></svg></span>
                    </button>
                    <div class="faq-answer">
                        Sí. No existen plazos forzosos ni contratos de permanencia. Puedes subir o bajar de plan, o cancelar tu suscripción con un solo clic directamente desde tu panel de configuración.
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question" type="button">
                        <span>¿Qué formas de pago aceptan en México?</span>
                        <span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"/></svg></span>
                    </button>
                    <div class="faq-answer">
                        Aceptamos todas las tarjetas de débito y crédito mexicanas e internacionales (Visa, Mastercard, American Express), así como pagos directos mediante Apple Pay y Google Pay. Todos los pagos son procesados de forma segura con cifrado bancario.
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question" type="button">
                        <span>¿Mis clientes necesitan registrarse o instalar alguna app para ver mis cotizaciones?</span>
                        <span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"/></svg></span>
                    </button>
                    <div class="faq-answer">
                        No. Tus clientes reciben un enlace interactivo o PDF por WhatsApp o correo y pueden ver la propuesta, firmarla digitalmente o descargarla desde su celular sin necesidad de crear ninguna cuenta ni instalar nada.
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question" type="button">
                        <span>¿Hay cargos ocultos por cotizaciones enviadas o mensajes de WhatsApp?</span>
                        <span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"/></svg></span>
                    </button>
                    <div class="faq-answer">
                        No cobramos comisión por propuesta ni cobro extra por mensaje de WhatsApp. El precio de tu plan mensual cubre todo el servicio sin sorpresas.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bottom CTA -->
    <section class="cta-section">
        <div class="container animate-on-scroll">
            <div class="cta-box">
                <h2 class="cta-title">
                    Digitaliza tus cotizaciones hoy mismo
                </h2>
                <p class="cta-desc">
                    Únete a las empresas en México que cerraron el desorden de hojas de cálculo y aceleraron sus ventas con Cotízalo.
                </p>
                <div class="cta-buttons">
                    <a href="https://app.cotizalo.net/signup" class="btn btn-primary btn-lg">
                        Comenzar Prueba Gratis de 14 Días
                    </a>
                </div>
                <div class="cta-microcopy">
                    ✓ Sin ingresar tarjeta de crédito · Activación inmediata
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
                            alt="Cotízalo" id="footer-logo" width="223" height="60">
                    </a>
                    <p>
                        Transformando la forma en que los negocios y profesionistas en México cotizan, presentan y cierran propuestas comerciales.
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
                    &copy; <?php echo date('Y'); ?> Cotízalo. PixelZero.mx . Todos los derechos reservados.
                </div>
                <div>
                    Hecho con seriedad y disciplina técnica para profesionistas en México.
                </div>
            </div>
        </div>
    </footer>

    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/assets/js/main.js?v=1.0.9" defer></script>
    <?php wp_footer(); ?>
</body>

</html>