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
    <!-- FontAwesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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
                            "text": "No cobramos comisión por propuesta ni cobro extra por mensaje de WhatsApp. El precio de tu plan mensual o anual cubre todo el servicio sin sorpresas."
                        }
                    }
                ]
            }
        ]
    }
    </script>
    <?php wp_head(); ?>
    <style>
        /* ============================================================
           PRICING PAGE STYLES
           ============================================================ */

        /* Page hero */
        .pricing-hero {
            padding-top: calc(var(--nav-height) + 5rem);
            padding-bottom: 4rem;
            background: linear-gradient(135deg, var(--primary) 0%, var(--bg-surface) 100%);
            text-align: center;
        }

        .pricing-hero h1 {
            font-size: clamp(2rem, 4vw, 3.5rem);
            font-weight: 700;
            color: var(--text-light);
            letter-spacing: -0.02em;
            margin-bottom: 1rem;
        }

        .pricing-hero p {
            color: var(--text-light-muted);
            font-size: 1.125rem;
            max-width: 550px;
            margin: 0 auto 1.5rem;
        }


        /* ============================================================
           PLANS GRID
           ============================================================ */
        .pricing-section {
            background: var(--bg-light-alt);
            padding: 5rem 0 6rem;
        }

        .section-label {
            text-align: center;
            font-size: 0.875rem;
            font-weight: 600;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: var(--text-dark-muted);
            margin-bottom: 3.5rem;
        }

        .plans-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 1.5rem;
            align-items: stretch;
        }

        .plan-card {
            background: #fff;
            border: 2px solid #E5E7EB;
            border-radius: var(--radius-lg);
            padding: 2.5rem 2rem;
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
            position: relative;
            transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
        }

        .plan-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 20px 40px rgba(18, 58, 44, 0.12);
            border-color: var(--primary);
        }

        /* Recommended / Featured card */
        .plan-card.featured {
            background: var(--primary);
            border-color: var(--primary);
            color: #fff;
            transform: scale(1.03);
            box-shadow: 0 20px 50px rgba(18, 58, 44, 0.4);
            z-index: 2;
        }

        .plan-card.featured:hover {
            transform: scale(1.03) translateY(-6px);
            box-shadow: 0 28px 60px rgba(18, 58, 44, 0.5);
        }

        .recommended-badge {
            position: absolute;
            top: -14px;
            left: 50%;
            transform: translateX(-50%);
            background: #16a34a;
            color: #fff;
            font-size: 0.7rem;
            font-weight: 700;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            padding: 0.35rem 1rem;
            border-radius: var(--radius-full);
            white-space: nowrap;
        }

        /* Plan header */
        .plan-name {
            font-size: 1.25rem;
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 0;
        }

        .plan-card.featured .plan-name {
            color: rgba(255, 255, 255, 0.9);
        }

        .plan-price {
            display: flex;
            align-items: baseline;
            gap: 0.2rem;
            margin-bottom: 0;
        }

        .plan-price .currency {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--primary);
        }

        .plan-card.featured .plan-price .currency {
            color: #fff;
        }

        .plan-price .amount {
            font-size: 3.25rem;
            font-weight: 800;
            line-height: 1;
            color: var(--text-dark);
            letter-spacing: -0.03em;
        }

        .plan-card.featured .plan-price .amount {
            color: #fff;
        }

        .plan-price .period {
            font-size: 0.95rem;
            color: var(--text-dark-muted);
            font-weight: 500;
        }

        .plan-card.featured .plan-price .period {
            color: rgba(255, 255, 255, 0.75);
        }

        /* Storage */
        .plan-storage {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-size: 0.95rem;
            color: var(--text-dark-muted);
            padding: 0.85rem 1rem;
            background: var(--bg-light-alt);
            border-radius: var(--radius-sm);
            font-weight: 500;
        }

        .plan-card.featured .plan-storage {
            background: rgba(255, 255, 255, 0.15);
            color: rgba(255, 255, 255, 0.9);
        }

        .plan-storage svg {
            flex-shrink: 0;
            color: var(--primary);
        }

        .plan-card.featured .plan-storage svg {
            color: rgba(255, 255, 255, 0.85);
        }

        /* Features list */
        .plan-features {
            list-style: none;
            display: flex;
            flex-direction: column;
            gap: 0.75rem;
            flex-grow: 1;
        }

        .plan-features li {
            display: flex;
            align-items: flex-start;
            gap: 0.6rem;
            font-size: 0.9rem;
            color: var(--text-dark-muted);
        }

        .plan-card.featured .plan-features li {
            color: rgba(255, 255, 255, 0.85);
        }

        .plan-features li svg {
            flex-shrink: 0;
            margin-top: 1px;
            color: var(--primary);
        }

        .plan-card.featured .plan-features li svg {
            color: #86efac;
        }

        /* CTA button */
        .plan-btn {
            display: block;
            width: 100%;
            padding: 0.9rem 1.5rem;
            text-align: center;
            border-radius: var(--radius-full);
            font-weight: 700;
            font-size: 0.95rem;
            font-family: var(--font-main);
            cursor: pointer;
            transition: all 0.3s ease;
            border: 2px solid var(--primary);
            background: transparent;
            color: var(--primary);
        }

        .plan-btn:hover {
            background: var(--primary);
            color: #fff;
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(18, 58, 44, 0.25);
        }

        .plan-card.featured .plan-btn {
            background: #fff;
            border-color: #fff;
            color: var(--primary);
        }

        .plan-card.featured .plan-btn:hover {
            background: rgba(255, 255, 255, 0.9);
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.2);
        }

        /* ============================================================
           ADMIN ACCOUNT SECTION
           ============================================================ */
        .admin-section {
            background: #fff;
            border-top: 1px solid #E5E7EB;
            padding: 5rem 0;
        }

        .admin-box {
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
        }

        .admin-box h2 {
            font-size: 1.75rem;
            font-weight: 700;
            color: var(--text-dark);
            letter-spacing: 0.05em;
            text-transform: uppercase;
            margin-bottom: 1rem;
        }

        .admin-divider {
            width: 60px;
            height: 4px;
            background: var(--primary);
            border-radius: 2px;
            margin: 0 auto 2rem;
        }

        .admin-box p {
            color: var(--text-dark-muted);
            font-size: 1rem;
            max-width: 600px;
            margin: 0 auto 2rem;
        }

        .admin-features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1.5rem;
            margin-bottom: 2.5rem;
        }

        .admin-feature-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 0.75rem;
            padding: 1.5rem 1rem;
            background: var(--bg-light-alt);
            border-radius: var(--radius-md);
            border: 1px solid #E5E7EB;
        }

        .admin-feature-item .icon-wrap {
            width: 48px;
            height: 48px;
            background: var(--primary-light);
            border-radius: var(--radius-md);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary);
        }

        .admin-feature-item span {
            font-size: 0.9rem;
            font-weight: 600;
            color: var(--text-dark);
            text-align: center;
        }

        /* ============================================================
           FAQ / GUARANTEE STRIP
           ============================================================ */
        .guarantee-strip {
            background: var(--bg-dark);
            padding: 3rem 0;
        }

        .guarantee-grid {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 4rem;
            flex-wrap: wrap;
        }

        .guarantee-item {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            color: var(--text-light-muted);
            font-size: 0.95rem;
            font-weight: 500;
        }

        .guarantee-item svg {
            color: #4ade80;
            flex-shrink: 0;
        }

        /* ============================================================
           RESPONSIVE
           ============================================================ */
        @media (max-width: 1024px) {
            .plans-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .plan-card.featured {
                transform: none;
            }

            .plan-card.featured:hover {
                transform: translateY(-6px);
            }
        }

        @media (max-width: 600px) {
            .plans-grid {
                grid-template-columns: 1fr;
            }

            .guarantee-grid {
                gap: 2rem;
                flex-direction: column;
                align-items: flex-start;
                padding: 0 1.5rem;
            }
        }

        /* Payment methods section */
        .payment-methods-wrap {
            margin-top: 4.5rem;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 1.25rem;
        }

        .payment-methods-title {
            font-size: 0.8rem;
            font-weight: 700;
            color: var(--text-dark-muted);
            text-transform: uppercase;
            letter-spacing: 0.08em;
            margin: 0;
        }

        .payment-methods-icons {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 2.5rem;
        }

        .payment-methods-icons svg {
            height: 32px;
            width: auto;
            fill: var(--primary);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .payment-methods-icons svg:hover {
            transform: translateY(-3px) scale(1.06);
            filter: drop-shadow(0 6px 10px rgba(18, 58, 44, 0.15));
        }

        /* Trust Badges under pricing cards */
        .pricing-trust-badges {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            gap: 1.25rem 2.25rem;
            margin-top: 2.75rem;
            padding: 1.1rem 2rem;
            background: #ffffff;
            border: 1px solid var(--border-light);
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.03);
            max-width: 880px;
            margin-left: auto;
            margin-right: auto;
        }

        .trust-badge-item {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            font-size: 0.9rem;
            font-weight: 600;
            color: var(--text-dark);
        }

        .trust-badge-item svg {
            color: #10b981;
            flex-shrink: 0;
        }

        /* Comparison Table Section */
        .pricing-comparison-section {
            padding: 5.5rem 0 6rem;
            background: #ffffff;
        }

        .section-header-center {
            text-align: center;
            max-width: 750px;
            margin: 0 auto 3.5rem;
        }


        .section-header-center h2 {
            font-size: clamp(1.85rem, 3.5vw, 2.5rem);
            font-weight: 700;
            color: var(--text-dark);
            letter-spacing: -0.02em;
            margin-bottom: 0.85rem;
        }

        .section-header-center p {
            color: var(--text-dark-muted);
            font-size: 1.05rem;
            line-height: 1.6;
            margin: 0;
        }

        .comparison-table-wrapper {
            background: #ffffff;
            border: 1px solid var(--border-light);
            border-radius: var(--radius-lg);
            overflow-x: auto;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.04);
        }

        .comp-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
            font-size: 0.95rem;
            min-width: 780px;
        }

        .comp-table th,
        .comp-table td {
            padding: 1.2rem 1.5rem;
            border-bottom: 1px solid var(--border-light);
            vertical-align: middle;
        }

        .comp-table thead th {
            background: #f8fafc;
            color: var(--text-dark);
            font-weight: 700;
            font-size: 0.95rem;
        }

        .comp-table th.col-feature {
            width: 34%;
        }

        .comp-table th.col-competitor {
            width: 22%;
            color: var(--text-dark-muted);
            font-weight: 600;
        }

        .comp-table th.col-highlight {
            width: 26%;
            background: #123A2C;
            color: #ffffff;
            font-size: 1rem;
            text-align: center;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
            position: relative;
        }

        .comp-table td.col-highlight {
            background: #f0fdf4;
            font-weight: 700;
            color: #14532d;
            text-align: center;
            border-left: 2px solid #86efac;
            border-right: 2px solid #86efac;
        }

        .comp-table tr:last-child td.col-highlight {
            border-bottom: 2px solid #86efac;
        }

        .comp-badge-recommended {
            display: inline-block;
            background: #34d399;
            color: #064e3b;
            font-size: 0.7rem;
            font-weight: 800;
            padding: 2px 8px;
            border-radius: 12px;
            margin-top: 4px;
            text-transform: uppercase;
            letter-spacing: 0.04em;
        }

        .comp-check {
            color: #059669;
            font-weight: 700;
            display: inline-flex;
            align-items: center;
            gap: 4px;
        }

        .comp-cross {
            color: #dc2626;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 4px;
        }

        .comp-warn {
            color: #d97706;
            font-weight: 500;
            display: inline-flex;
            align-items: center;
            gap: 4px;
        }

        /* FAQ Section */
        .pricing-faq-section {
            padding: 5.5rem 0 6rem;
            background: var(--bg-light-alt);
        }

        .pricing-faq-list {
            max-width: 800px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        details.pricing-faq-item {
            background: #ffffff;
            border: 1px solid var(--border-light);
            border-radius: var(--radius-md);
            padding: 1.4rem 1.6rem;
            cursor: pointer;
            transition: box-shadow 0.2s, border-color 0.2s;
        }

        details.pricing-faq-item:hover {
            border-color: #cbd5e1;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.03);
        }

        details.pricing-faq-item summary {
            font-weight: 700;
            color: var(--text-dark);
            list-style: none;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 1rem;
            font-size: 1.05rem;
        }

        details.pricing-faq-item summary::-webkit-details-marker {
            display: none;
        }

        details.pricing-faq-item summary::after {
            content: '+';
            font-size: 1.5rem;
            font-weight: 300;
            color: var(--primary);
            flex-shrink: 0;
            transition: transform 0.2s;
        }

        details.pricing-faq-item[open] summary::after {
            transform: rotate(45deg);
        }

        details.pricing-faq-item p {
            margin-top: 1rem;
            color: var(--text-dark-muted);
            line-height: 1.7;
            font-size: 0.96rem;
            margin-bottom: 0;
        }
    </style>
    <link rel="preload" as="image"
        href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/assets/logos/LOGOTIPO3/Cotizalo-8.png?v=2"
        type="image/png">
</head>

<body <?php body_class('page-precios'); ?>>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NG2ZW6L3"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- ==================== NAV ==================== -->
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
                <li><a href="<?php echo esc_url(home_url('/precios/')); ?>"
                        class="nav-item nav-item--active">Precios</a></li>
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
                </li>
            </ul>
            <div class="nav-buttons">
                <a href="<?php echo esc_url(get_theme_mod('nav_login_url', 'https://app.cotizalo.net/login')); ?>"
                    class="btn btn-secondary btn-nav"><?php echo esc_html(get_theme_mod('nav_login_text', 'Ingresar')); ?></a>
                <a href="<?php echo esc_url(get_theme_mod('nav_signup_url', 'https://app.cotizalo.net/signup')); ?>"
                    class="btn btn-primary btn-nav"><?php echo esc_html(get_theme_mod('nav_signup_text', 'Empezar Gratis')); ?></a>
            </div>
            <!-- Mobile Menu Toggle -->
            <div class="mobile-menu-btn">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </header>

    <!-- ==================== PRICING HERO ==================== -->
    <section class="pricing-hero" style="padding-bottom:3rem;">
        <div class="container">
            <div class="animate-on-scroll fade-in-up">
                <h1><?php echo esc_html(get_theme_mod('precios_hero_title', 'Precios simples y transparentes')); ?></h1>
                <p><?php echo esc_html(get_theme_mod('precios_hero_desc', 'Sin costos ocultos ni límites de créditos de IA. Interfaz gráfica completa para buscar, editar y dar seguimiento a tus clientes.')); ?>
                </p>
            </div>
        </div>
    </section>

    <!-- ==================== PLANS ==================== -->
    <section class="pricing-section">
        <div class="container">
            <div class="plans-grid animate-on-scroll fade-in-up">

                <!-- Plan: Inicial -->
                <div class="plan-card">
                    <div>
                        <p class="plan-name"><?php echo esc_html(get_theme_mod('plan_inicial_name', 'Inicial')); ?></p>
                    </div>
                    <div class="plan-price">
                        <span class="currency">$</span>
                        <span class="amount"><?php echo esc_html(get_theme_mod('plan_inicial_price', '199')); ?></span>
                        <span class="period">/mes</span>
                    </div>
                    <div class="plan-storage">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <ellipse cx="12" cy="5" rx="9" ry="3" />
                            <path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3" />
                            <path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5" />
                        </svg>
                        <?php echo esc_html(get_theme_mod('plan_inicial_storage', '3 GB de almacenamiento')); ?>
                    </div>
                    <ul class="plan-features">
                        <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="20 6 9 17 4 12" />
                            </svg><?php echo esc_html(get_theme_mod('plan_inicial_f1', 'Cotizaciones ilimitadas')); ?>
                        </li>
                        <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="20 6 9 17 4 12" />
                            </svg><?php echo esc_html(get_theme_mod('plan_inicial_f2', 'Envío por WhatsApp y PDF')); ?>
                        </li>
                        <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="20 6 9 17 4 12" />
                            </svg><?php echo esc_html(get_theme_mod('plan_inicial_f3', 'Monitoreo de estado de cotizaciones')); ?>
                        </li>
                        <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="20 6 9 17 4 12" />
                            </svg><?php echo esc_html(get_theme_mod('plan_inicial_f4', 'Agenda de presupuestos autorizados (Google, Outlook y Apple Calendar)')); ?>
                        </li>
                        <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="20 6 9 17 4 12" />
                            </svg><?php echo esc_html(get_theme_mod('plan_inicial_f5', 'Soporte por email')); ?></li>
                    </ul>
                    <a href="<?php echo esc_url(get_theme_mod('nav_signup_url', 'https://app.cotizalo.net/signup')); ?>"
                        class="plan-btn" id="btn-plan-inicial">
                        <?php echo esc_html(get_theme_mod('plan_inicial_btn', 'Comenzar Prueba Gratis')); ?>
                    </a>
                </div>

                <!-- Plan: Básico -->
                <div class="plan-card">
                    <div>
                        <p class="plan-name"><?php echo esc_html(get_theme_mod('plan_basico_name', 'Básico')); ?></p>
                    </div>
                    <div class="plan-price">
                        <span class="currency">$</span>
                        <span class="amount"><?php echo esc_html(get_theme_mod('plan_basico_price', '399')); ?></span>
                        <span class="period">/mes</span>
                    </div>
                    <div class="plan-storage">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <ellipse cx="12" cy="5" rx="9" ry="3" />
                            <path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3" />
                            <path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5" />
                        </svg>
                        <?php echo esc_html(get_theme_mod('plan_basico_storage', '10 GB de almacenamiento')); ?>
                    </div>
                    <ul class="plan-features">
                        <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="20 6 9 17 4 12" />
                            </svg><?php echo esc_html(get_theme_mod('plan_basico_f1', 'Cotizaciones ilimitadas')); ?>
                        </li>
                        <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="20 6 9 17 4 12" />
                            </svg><?php echo esc_html(get_theme_mod('plan_basico_f2', 'Envío por WhatsApp y PDF')); ?>
                        </li>
                        <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="20 6 9 17 4 12" />
                            </svg><?php echo esc_html(get_theme_mod('plan_basico_f3', 'Monitoreo de estado de cotizaciones')); ?>
                        </li>
                        <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="20 6 9 17 4 12" />
                            </svg><?php echo esc_html(get_theme_mod('plan_basico_f4', 'Agenda de presupuestos autorizados (Google, Outlook y Apple Calendar)')); ?>
                        </li>
                        <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="20 6 9 17 4 12" />
                            </svg><?php echo esc_html(get_theme_mod('plan_basico_f5', 'Catálogo de productos')); ?></li>
                        <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="20 6 9 17 4 12" />
                            </svg><?php echo esc_html(get_theme_mod('plan_basico_f6', 'Soporte por email')); ?></li>
                    </ul>
                    <a href="<?php echo esc_url(get_theme_mod('nav_signup_url', 'https://app.cotizalo.net/signup')); ?>"
                        class="plan-btn" id="btn-plan-basico">
                        <?php echo esc_html(get_theme_mod('plan_basico_btn', 'Comenzar Prueba Gratis')); ?>
                    </a>
                </div>

                <!-- Plan: Profesional (RECOMENDADO) -->
                <div class="plan-card featured">
                    <span
                        class="recommended-badge"><?php echo esc_html(get_theme_mod('plan_pro_badge', 'Recomendado')); ?></span>
                    <div>
                        <p class="plan-name"><?php echo esc_html(get_theme_mod('plan_pro_name', 'Profesional')); ?></p>
                    </div>
                    <div class="plan-price">
                        <span class="currency">$</span>
                        <span class="amount"><?php echo esc_html(get_theme_mod('plan_pro_price', '599')); ?></span>
                        <span class="period">/mes</span>
                    </div>
                    <div class="plan-storage">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <ellipse cx="12" cy="5" rx="9" ry="3" />
                            <path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3" />
                            <path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5" />
                        </svg>
                        <?php echo esc_html(get_theme_mod('plan_pro_storage', '50 GB de almacenamiento')); ?>
                    </div>
                    <ul class="plan-features">
                        <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="20 6 9 17 4 12" />
                            </svg><?php echo esc_html(get_theme_mod('plan_pro_f1', 'Cotizaciones ilimitadas')); ?></li>
                        <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="20 6 9 17 4 12" />
                            </svg><?php echo esc_html(get_theme_mod('plan_pro_f2', 'Envío por WhatsApp y PDF')); ?></li>
                        <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="20 6 9 17 4 12" />
                            </svg><?php echo esc_html(get_theme_mod('plan_pro_f3', 'Monitoreo de estado de cotizaciones')); ?>
                        </li>
                        <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="20 6 9 17 4 12" />
                            </svg><?php echo esc_html(get_theme_mod('plan_pro_f4', 'Agenda de presupuestos autorizados (Google, Outlook y Apple Calendar)')); ?>
                        </li>
                        <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="20 6 9 17 4 12" />
                            </svg><?php echo esc_html(get_theme_mod('plan_pro_f5', 'Productos más vendidos o cotizados')); ?>
                        </li>
                        <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="20 6 9 17 4 12" />
                            </svg><?php echo esc_html(get_theme_mod('plan_pro_f6', 'Multi-empresa y reportes avanzados')); ?>
                        </li>
                        <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="20 6 9 17 4 12" />
                            </svg><?php echo esc_html(get_theme_mod('plan_pro_f7', 'Soporte por email')); ?></li>
                    </ul>
                    <a href="<?php echo esc_url(get_theme_mod('nav_signup_url', 'https://app.cotizalo.net/signup')); ?>"
                        class="plan-btn" id="btn-plan-profesional">
                        <?php echo esc_html(get_theme_mod('plan_pro_btn', 'Comenzar Prueba Gratis')); ?>
                    </a>
                </div>

                <!-- Plan: Empresarial -->
                <div class="plan-card">
                    <div>
                        <p class="plan-name"><?php echo esc_html(get_theme_mod('plan_emp_name', 'Empresarial')); ?></p>
                    </div>
                    <div class="plan-price">
                        <span class="currency">$</span>
                        <span class="amount"><?php echo esc_html(get_theme_mod('plan_emp_price', '899')); ?></span>
                        <span class="period">/mes</span>
                    </div>
                    <div class="plan-storage">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <ellipse cx="12" cy="5" rx="9" ry="3" />
                            <path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3" />
                            <path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5" />
                        </svg>
                        <?php echo esc_html(get_theme_mod('plan_emp_storage', '80 GB de almacenamiento')); ?>
                    </div>
                    <ul class="plan-features">
                        <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="20 6 9 17 4 12" />
                            </svg><?php echo esc_html(get_theme_mod('plan_emp_f1', 'Cotizaciones ilimitadas')); ?></li>
                        <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="20 6 9 17 4 12" />
                            </svg><?php echo esc_html(get_theme_mod('plan_emp_f2', 'Envío por WhatsApp y PDF')); ?></li>
                        <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="20 6 9 17 4 12" />
                            </svg><?php echo esc_html(get_theme_mod('plan_emp_f3', 'Monitoreo de estado en tiempo real')); ?>
                        </li>
                        <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="20 6 9 17 4 12" />
                            </svg><?php echo esc_html(get_theme_mod('plan_emp_f4', 'Agenda de presupuestos autorizados (Google, Outlook y Apple Calendar)')); ?>
                        </li>
                        <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="20 6 9 17 4 12" />
                            </svg><?php echo esc_html(get_theme_mod('plan_emp_f5', 'Analíticas de productos más vendidos y cotizados')); ?>
                        </li>
                        <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="20 6 9 17 4 12" />
                            </svg><?php echo esc_html(get_theme_mod('plan_emp_f6', 'Multi-empresa y Cuenta Administrador')); ?>
                        </li>
                        <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="20 6 9 17 4 12" />
                            </svg><?php echo esc_html(get_theme_mod('plan_emp_f7', 'Soporte por email')); ?></li>
                    </ul>
                    <a href="<?php echo esc_url(get_theme_mod('nav_signup_url', 'https://app.cotizalo.net/signup')); ?>"
                        class="plan-btn" id="btn-plan-empresarial">
                        <?php echo esc_html(get_theme_mod('plan_emp_btn', 'Comenzar Prueba Gratis')); ?>
                    </a>
                </div>

            </div><!-- /.plans-grid -->

            <!-- Friction-Reduction Trust Badges -->
            <div class="pricing-trust-badges">
                <span class="trust-badge-item">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                    14 días de prueba gratis
                </span>
                <span class="trust-badge-item">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                    Sin tarjeta de crédito
                </span>
                <span class="trust-badge-item">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                    Listo en 2 minutos
                </span>
                <span class="trust-badge-item">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                    Cancela cuando quieras
                </span>
            </div>

            <!-- Payment Methods -->
            <div class="payment-methods-wrap animate-on-scroll fade-in-up">
                <p class="payment-methods-title">Aceptamos principales tarjetas de crédito, débito, Apple Pay y GPay</p>
                <div class="payment-methods-icons">
                    <!-- Visa -->
                    <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" title="Visa">
                        <path
                            d="M9.112 8.262L5.97 15.758H3.92L2.374 9.775c-.094-.368-.175-.503-.461-.658C1.447 8.864.677 8.627 0 8.479l.046-.217h3.3a.904.904 0 01.894.764l.817 4.338 2.018-5.102zm8.033 5.049c.008-1.979-2.736-2.088-2.717-2.972.006-.269.262-.555.822-.628a3.66 3.66 0 011.913.336l.34-1.59a5.207 5.207 0 00-1.814-.333c-1.917 0-3.266 1.02-3.278 2.479-.012 1.079.963 1.68 1.698 2.04.756.367 1.01.603 1.006.931-.005.504-.602.725-1.16.734-.975.015-1.54-.263-1.992-.473l-.351 1.642c.453.208 1.289.39 2.156.398 2.037 0 3.37-1.006 3.377-2.564m5.061 2.447H24l-1.565-7.496h-1.656a.883.883 0 00-.826.55l-2.909 6.946h2.036l.405-1.12h2.488zm-2.163-2.656l1.02-2.815.588 2.815zm-8.16-4.84l-1.603 7.496H8.34l1.605-7.496z" />
                    </svg>
                    <!-- Mastercard -->
                    <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" title="MasterCard">
                        <path
                            d="M11.343 18.031c.058.049.12.098.181.146-1.177.783-2.59 1.238-4.107 1.238C3.32 19.416 0 16.096 0 12c0-4.095 3.32-7.416 7.416-7.416 1.518 0 2.931.456 4.105 1.238-.06.051-.12.098-.165.15C9.6 7.489 8.595 9.688 8.595 12c0 2.311 1.001 4.51 2.748 6.031zm5.241-13.447c-1.52 0-2.931.456-4.105 1.238.06.051.12.098.165.15C14.4 7.489 15.405 9.688 15.405 12c0 2.31-1.001 4.507-2.748 6.031-.058.049-.12.098-.181.146 1.177.783 2.588 1.238 4.107 1.238C20.68 19.416 24 16.096 24 12c0-4.094-3.32-7.416-7.416-7.416zM12 6.174c-.096.075-.189.15-.28.231C10.156 7.764 9.169 9.765 9.169 12c0 2.236.987 4.236 2.551 5.595.09.08.185.158.28.232.096-.074.189-.152.28-.232 1.563-1.359 2.551-3.359 2.551-5.595 0-2.235-.987-4.236-2.551-5.595-.09-.08-.184-.156-.28-.231z" />
                    </svg>
                    <!-- American Express -->
                    <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" title="American Express">
                        <path
                            d="M16.015 14.378c0-.32-.135-.496-.344-.622-.21-.12-.464-.135-.81-.135h-1.543v2.82h.675v-1.027h.72c.24 0 .39.024.478.125.12.13.104.38.104.55v.35h.66v-.555c-.002-.25-.017-.376-.108-.516-.06-.08-.18-.18-.33-.234l.02-.008c.18-.072.48-.297.48-.747zm-.87.407l-.028-.002c-.09.053-.195.058-.33.058h-.81v-.63h.824c.12 0 .24 0 .33.05.098.048.156.147.15.255 0 .12-.045.215-.134.27zM20.297 15.837H19v.6h1.304c.676 0 1.05-.278 1.05-.884 0-.28-.066-.448-.187-.582-.153-.133-.392-.193-.73-.207l-.376-.015c-.104 0-.18 0-.255-.03-.09-.03-.15-.105-.15-.21 0-.09.017-.166.09-.21.083-.046.177-.066.272-.06h1.23v-.602h-1.35c-.704 0-.958.437-.958.84 0 .9.776.855 1.407.87.104 0 .18.015.225.06.046.03.082.106.082.18 0 .077-.035.15-.08.18-.06.053-.15.07-.277.07zM0 0v10.096L.81 8.22h1.75l.225.464V8.22h2.043l.45 1.02.437-1.013h6.502c.295 0 .56.057.756.236v-.23h1.787v.23c.307-.17.686-.23 1.12-.23h2.606l.24.466v-.466h1.918l.254.465v-.466h1.858v3.948H20.87l-.36-.6v.585h-2.353l-.256-.63h-.583l-.27.614h-1.213c-.48 0-.84-.104-1.08-.24v.24h-2.89v-.884c0-.12-.03-.12-.105-.135h-.105v1.036H6.067v-.48l-.21.48H4.69l-.202-.48v.465H2.235l-.256-.624H1.4l-.256.624H0V24h23.786v-7.108c-.27.135-.613.18-.973.18H21.09v-.255c-.21.165-.57.255-.914.255H14.71v-.9c0-.12-.018-.12-.12-.12h-.075v1.022h-1.8v-1.066c-.298.136-.643.15-.928.136h-.214v.915h-2.18l-.54-.617-.57.6H4.742v-3.93h3.61l.518.602.554-.6h2.412c.28 0 .74.03.942.225v-.24h2.177c.202 0 .644.045.903.225v-.24h3.265v.24c.163-.164.508-.24.803-.24h1.89v.24c.194-.15.464-.24.84-.24h1.176V0H0zM21.156 14.955c.004.005.006.012.01.016.01.01.024.01.032.02l-.042-.035zM23.828 13.082h.065v.555h-.065zM23.865 15.03v-.005c-.03-.025-.046-.048-.075-.07-.15-.153-.39-.215-.764-.225l-.36-.012c-.12 0-.194-.007-.27-.03-.09-.03-.15-.105-.15-.21 0-.09.03-.16.09-.204.076-.045.15-.05.27-.05h1.223v-.588h-1.283c-.69 0-.96.437-.96.84 0 .9.78.855 1.41.87.104 0 .18.015.224.06.046.03.076.106.076.18 0 .07-.034.138-.09.18-.045.056-.136.07-.27.07h-1.288v.605h1.287c.42 0 .734-.118.9-.36h.03c.09-.134.135-.3.135-.523 0-.24-.045-.39-.135-.526zM18.597 14.208v-.583h-2.235V16.458h2.235v-.585h-1.57v-.57h1.533v-.584h-1.532v-.51M13.51 8.787h.685V11.6h-.684zM13.126 9.543l-.007.006c0-.314-.13-.5-.34-.624-.217-.125-.47-.135-.81-.135H10.43v2.82h.674v-1.034h.72c.24 0 .39.03.487.12.122.136.107.378.107.548v.354h.677v-.553c0-.25-.016-.375-.11-.516-.09-.107-.202-.19-.33-.237.172-.07.472-.3.472-.75zm-.855.396h-.015c-.09.054-.195.056-.33.056H11.1v-.623h.825c.12 0 .24.004.33.05.09.04.15.128.15.25s-.047.22-.134.266zM15.92 9.373h.632v-.6h-.644c-.464 0-.804.105-1.02.33-.286.3-.362.69-.362 1.11 0 .512.123.833.36 1.074.232.238.645.31.97.31h.78l.255-.627h1.39l.262.627h1.36v-2.11l1.272 2.11h.95l.002.002V8.786h-.684v1.963l-1.18-1.96h-1.02V11.4L18.11 8.744h-1.004l-.943 2.22h-.3c-.177 0-.362-.03-.468-.134-.125-.15-.186-.36-.186-.662 0-.285.08-.51.194-.63.133-.135.272-.165.516-.165zm1.668-.108l.46 1.118v.002h-.93l.466-1.12zM2.38 10.97l.254.628H4V9.393l.972 2.205h.584l.973-2.202.015 2.202h.69v-2.81H6.118l-.807 1.904-.876-1.905H3.343v2.663L2.205 8.787h-.997L.01 11.597h.72l.26-.626h1.39zm-.688-1.705l.46 1.118-.003.002h-.915l.457-1.12zM11.856 13.62H9.714l-.85.923-.825-.922H5.346v2.82H8l.855-.932.824.93h1.302v-.94h.838c.6 0 1.17-.164 1.17-.945l-.006-.003c0-.78-.598-.93-1.128-.93zM7.67 15.853l-.014-.002H6.02v-.557h1.47v-.574H6.02v-.51H7.7l.733.82-.764.824zm2.642.33l-1.03-1.147 1.03-1.108v2.253zm1.553-1.258h-.885v-.717h.885c.24 0 .42.098.42.344 0 .243-.15.372-.42.372zM9.967 9.373v-.586H7.73V11.6h2.237v-.58H8.4v-.564h1.527V9.88H8.4v-.507" />
                    </svg>
                    <!-- Apple Pay -->
                    <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" title="Apple Pay">
                        <path
                            d="M2.15 4.318a42.16 42.16 0 0 0-.454.003c-.15.005-.303.013-.452.04a1.44 1.44 0 0 0-1.06.772c-.07.138-.114.278-.14.43-.028.148-.037.3-.04.45A10.2 10.2 0 0 0 0 6.222v11.557c0 .07.002.138.003.207.004.15.013.303.04.452.027.15.072.291.142.429a1.436 1.436 0 0 0 .63.63c.138.07.278.115.43.142.148.027.3.036.45.04l.208.003h20.194l.207-.003c.15-.004.303-.013.452-.04.15-.027.291-.071.428-.141a1.432 1.432 0 0 0 .631-.631c.07-.138.115-.278.141-.43.027-.148.036-.3.04-.45.002-.07.003-.138.003-.208l.001-.246V6.221c0-.07-.002-.138-.004-.207a2.995 2.995 0 0 0-.04-.452 1.446 1.446 0 0 0-1.2-1.201 3.022 3.022 0 0 0-.452-.04 10.448 10.448 0 0 0-.453-.003zm0 .512h19.942c.066 0 .131.002.197.003.115.004.25.01.375.032.109.02.2.05.287.094a.927.927 0 0 1 .407.407.997.997 0 0 1 .094.288c.022.123.028.258.031.374.002.065.003.13.003.197v11.552c0 .065 0 .13-.003.196-.003.115-.009.25-.032.375a.927.927 0 0 1-.5.693 1.002 1.002 0 0 1-.286.094 2.598 2.598 0 0 1-.373.032l-.2.003H1.906c-.066 0-.133-.002-.196-.003a2.61 2.61 0 0 1-.375-.032c-.109-.02-.2-.05-.288-.094a.918.918 0 0 1-.406-.407 1.006 1.006 0 0 1-.094-.288 2.531 2.531 0 0 1-.032-.373 9.588 9.588 0 0 1-.002-.197V6.224c0-.065 0-.131.002-.197.004-.114.01-.248.032-.375.02-.108.05-.199.094-.287a.925.925 0 0 1 .407-.406 1.03 1.03 0 0 1 .287-.094c.125-.022.26-.029.375-.032.065-.002.131-.002.196-.003zm4.71 3.7c-.3.016-.668.199-.88.456-.191.22-.36.58-.316.918.338.03.675-.169.888-.418.205-.258.345-.603.308-.955zm2.207.42v5.493h.852v-1.877h1.18c1.078 0 1.835-.739 1.835-1.812 0-1.07-.742-1.805-1.808-1.805zm.852.719h.982c.739 0 1.161.396 1.161 1.089 0 .692-.422 1.092-1.164 1.092h-.979zm-3.154.3c-.45.01-.83.28-1.05.28-.235 0-.593-.264-.981-.257a1.446 1.446 0 0 0-1.23.747c-.527.908-.139 2.255.374 2.995.249.366.549.769.944.754.373-.014.52-.242.973-.242.454 0 .586.242.98.235.41-.007.667-.366.915-.733.286-.417.403-.82.41-.841-.007-.008-.79-.308-.797-1.209-.008-.754.615-1.113.644-1.135-.352-.52-.9-.578-1.09-.593a1.123 1.123 0 0 0-.092-.002zm8.204.397c-.99 0-1.606.533-1.652 1.256h.777c.072-.358.369-.586.845-.586.502 0 .803.266.803.711v.309l-1.097.064c-.951.054-1.488.484-1.488 1.184 0 .72.548 1.207 1.332 1.207.526 0 1.032-.281 1.264-.727h.019v.659h.788v-2.76c0-.803-.62-1.317-1.591-1.317zm1.94.072l1.446 4.009c0 .003-.073.24-.073.247-.125.41-.33.571-.711.571-.069 0-.206 0-.267-.015v.666c.06.011.267.019.335.019.83 0 1.226-.312 1.568-1.283l1.5-4.214h-.868l-1.012 3.259h-.015l-1.013-3.26zm-1.167 2.189v.316c0 .521-.45.917-1.024.917-.442 0-.731-.228-.731-.579 0-.342.278-.56.769-.593z" />
                    </svg>
                    <!-- Google Pay -->
                    <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" title="Google Pay">
                        <path
                            d="M3.963 7.235A3.963 3.963 0 00.422 9.419a3.963 3.963 0 000 3.559 3.963 3.963 0 003.541 2.184c1.07 0 1.97-.352 2.627-.957.748-.69 1.18-1.71 1.18-2.916a4.722 4.722 0 00-.07-.806H3.964v1.526h2.14a1.835 1.835 0 01-.79 1.205c-.356.241-.814.379-1.35.379-1.034 0-1.911-.697-2.225-1.636a2.375 2.375 0 010-1.517c.314-.94 1.191-1.636 2.225-1.636a2.152 2.152 0 011.52.594l1.132-1.13a3.808 3.808 0 00-2.652-1.033zm6.501.55v6.9h.886V11.89h1.465c.603 0 1.11-.196 1.522-.588a1.911 1.911 0 00.635-1.464 1.92 1.92 0 00-.635-1.456 2.125 2.125 0 00-1.522-.598zm2.427.85a1.156 1.156 0 01.823.365 1.176 1.176 0 010 1.686 1.171 1.171 0 01-.877.357H11.35V8.635h1.487a1.156 1.156 0 01.054 0zm4.124 1.175c-.842 0-1.477.308-1.907.925l.781.491c.288-.417.68-.626 1.175-.626a1.255 1.255 0 01.856.323 1.009 1.009 0 01.366.785v.202c-.34-.193-.774-.289-1.3-.289-.617 0-1.11.145-1.479.434-.37.288-.554.677-.554 1.165a1.476 1.476 0 00.525 1.156c.35.308.785.463 1.305.463.61 0 1.098-.27 1.465-.81h.038v.655h.848v-2.909c0-.61-.19-1.09-.568-1.44-.38-.35-.896-.525-1.551-.525zm2.263.154l1.946 4.422-1.098 2.38h.915L24 9.963h-.965l-1.368 3.391h-.02l-1.406-3.39zm-2.146 2.368c.494 0 .88.11 1.156.33 0 .372-.147.696-.44.973a1.413 1.413 0 01-.997.414 1.081 1.081 0 01-.69-.232.708.708 0 01-.293-.578c0-.257.12-.47.363-.647.24-.173.54-.26.9-.26Z" />
                    </svg>
                </div>
            </div>

        </div>
    </section>

    <!-- ==================== COMPARISON TABLE SECTION ==================== -->
    <section class="pricing-comparison-section" id="comparativa">
        <div class="container">
            <div class="section-header-center animate-on-scroll fade-in-up">
                <h2>¿Por qué elegir Cotízalo frente a otras alternativas?</h2>
                <p>Compara las ventajas de una herramienta diseñada para cerrar ventas en México y Latinoamérica versus hojas de cálculo manuales o complejos CRMs corporativos en dólares.</p>
            </div>

            <div class="comparison-table-wrapper animate-on-scroll fade-in-up">
                <table class="comp-table" aria-label="Comparativa de software de cotizaciones">
                    <thead>
                        <tr>
                            <th scope="col" class="col-feature">Funcionalidad / Criterio</th>
                            <th scope="col" class="col-highlight">
                                Cotízalo
                                <span class="comp-badge-recommended">Recomendado</span>
                            </th>
                            <th scope="col" class="col-competitor">Excel / Hojas de Cálculo</th>
                            <th scope="col" class="col-competitor">CRMs Corporativos (HubSpot, PandaDoc)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Precio y divisa</th>
                            <td class="col-highlight"><strong>Desde $199 MXN/mes</strong> (en pesos, sin sorpresas)</td>
                            <td>"Gratis" (horas perdidas en formato y fórmulas)</td>
                            <td>Desde $19 a $45+ USD por usuario/mes (en dólares + IVA)</td>
                        </tr>
                        <tr>
                            <th scope="row">Envío directo por WhatsApp</th>
                            <td class="col-highlight"><span class="comp-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Enlace interactivo + PDF al instante</span></td>
                            <td><span class="comp-cross"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg> Manual y adjuntos pesados</span></td>
                            <td><span class="comp-warn"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg> Requiere integraciones costosas o de terceros</span></td>
                        </tr>
                        <tr>
                            <th scope="row">Firma digital por el cliente</th>
                            <td class="col-highlight"><span class="comp-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Incluida (desde móvil sin apps)</span></td>
                            <td><span class="comp-cross"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg> Imprimir, firmar a mano y escanear</span></td>
                            <td><span class="comp-warn"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg> Solo en planes caros de nivel superior</span></td>
                        </tr>
                        <tr>
                            <th scope="row">Cobro de anticipos en línea</th>
                            <td class="col-highlight"><span class="comp-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Integrado directo en la propuesta</span></td>
                            <td><span class="comp-cross"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg> No disponible</span></td>
                            <td><span class="comp-warn"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg> Add-ons empresariales adicionales</span></td>
                        </tr>
                        <tr>
                            <th scope="row">Curva de implementación</th>
                            <td class="col-highlight"><strong>2 minutos</strong> (inicias sin capacitación técnica)</td>
                            <td>Días diseñando plantillas propensas a errores</td>
                            <td>Semanas de configuración compleja</td>
                        </tr>
                        <tr>
                            <th scope="row">Notificación cuando el cliente abre la cotización</th>
                            <td class="col-highlight"><span class="comp-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Rastreo en tiempo real</span></td>
                            <td><span class="comp-cross"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg> A ciegas (sin saber si la abrieron)</span></td>
                            <td><span class="comp-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Disponible</span></td>
                        </tr>
                        <tr>
                            <th scope="row">Soporte en español para México</th>
                            <td class="col-highlight"><strong>100% en español</strong> y horario local</td>
                            <td>Foros comunitarios y tutoriales</td>
                            <td>Soporte en inglés o por tickets lentos</td>
                        </tr>
                        <tr>
                            <th scope="row">Prueba gratis</th>
                            <td class="col-highlight"><strong>14 días gratis</strong> sin tarjeta</td>
                            <td>No aplica</td>
                            <td>Exige tarjeta o funciones bloqueadas</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- ==================== FAQ SECTION ==================== -->
    <section class="pricing-faq-section" id="faq">
        <div class="container">
            <div class="section-header-center animate-on-scroll fade-in-up">
                <h2>Preguntas frecuentes sobre precios y suscripciones</h2>
                <p>Transparencia total. Respuestas claras para que elijas con total confianza y sin letras chiquitas.</p>
            </div>

            <div class="pricing-faq-list animate-on-scroll fade-in-up">
                <details class="pricing-faq-item" open>
                    <summary>¿Cómo funciona la prueba gratuita de 14 días?</summary>
                    <p>Al registrarte obtienes acceso inmediato y completo a todas las funcionalidades de Cotízalo durante 14 días. No requerimos tarjeta de crédito para iniciar tu prueba y no hay ningún cobro sorpresa. Puedes crear cotizaciones, personalizarlas con tu logotipo y enviarlas a tus clientes reales desde el primer minuto.</p>
                </details>

                <details class="pricing-faq-item">
                    <summary>¿Puedo cambiar de plan o cancelar en cualquier momento?</summary>
                    <p>Sí, por supuesto. En Cotízalo no existen plazos forzosos ni contratos de permanencia. Puedes subir o bajar de plan en cualquier momento según el volumen de ventas de tu negocio, o cancelar tu suscripción con un solo clic directamente desde tu panel de usuario sin tener que llamar a nadie.</p>
                </details>

                <details class="pricing-faq-item">
                    <summary>¿Qué formas de pago aceptan en México?</summary>
                    <p>Aceptamos todas las tarjetas de débito y crédito mexicanas e internacionales (Visa, Mastercard, American Express), así como pagos directos mediante Apple Pay y Google Pay. Todos los cobros se realizan de forma segura con cifrado bancario de última generación.</p>
                </details>

                <details class="pricing-faq-item">
                    <summary>¿Mis clientes necesitan registrarse o instalar alguna app para ver mis cotizaciones?</summary>
                    <p>No, nunca. Tus clientes reciben un enlace interactivo o PDF por WhatsApp o correo electrónico. Al hacer clic, pueden ver la cotización desde el navegador de su teléfono celular o computadora, firmarla digitalmente o descargarla en PDF sin necesidad de crear ninguna cuenta ni instalar nada.</p>
                </details>

                <details class="pricing-faq-item">
                    <summary>¿Hay cargos ocultos por cotizaciones enviadas o mensajes de WhatsApp?</summary>
                    <p>No. No cobramos comisiones por propuesta generada ni cobros extra por mensaje o enlace enviado. La tarifa de tu suscripción mensual o anual cubre el uso ilimitado de cotizaciones y herramientas de tu plan.</p>
                </details>

                <details class="pricing-faq-item">
                    <summary>¿Ofrecen factura fiscal (CFDI) para empresas en México?</summary>
                    <p>Sí, todos nuestros precios ya incluyen IVA y emitimos tu comprobante fiscal digital por internet (CFDI) con tus datos fiscales de forma automática cada mes para que puedas deducir el gasto de tu negocio al 100%.</p>
                </details>
            </div>
        </div>
    </section>

    <!-- ==================== GUARANTEE STRIP ==================== -->
    <div class="guarantee-strip">
        <div class="container">
            <div class="guarantee-grid">
                <div class="guarantee-item">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="20 6 9 17 4 12" />
                    </svg>
                    <?php echo esc_html(get_theme_mod('garantia_1', '14 días de prueba gratis')); ?>
                </div>
                <div class="guarantee-item">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="20 6 9 17 4 12" />
                    </svg>
                    <?php echo esc_html(get_theme_mod('garantia_2', '')); ?>
                </div>
                <div class="guarantee-item">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="20 6 9 17 4 12" />
                    </svg>
                    <?php echo esc_html(get_theme_mod('garantia_3', 'Sin límites de créditos de IA')); ?>
                </div>
                <div class="guarantee-item">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="20 6 9 17 4 12" />
                    </svg>
                    <?php echo esc_html(get_theme_mod('garantia_4', 'Cancela en cualquier momento')); ?>
                </div>
                <div class="guarantee-item">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="20 6 9 17 4 12" />
                    </svg>
                    <a href="<?php echo esc_url(home_url('/soporte/')); ?>"
                        style="color: inherit; text-decoration: underline;"><?php echo esc_html(get_theme_mod('garantia_5', 'Soporte en español')); ?></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-brand">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="logo mb-1">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/assets/logos/LOGOTIPO3/Cotizalo-8.png?v=2"
                            alt="Cotízalo Logo" style="height: 70px; width: auto; object-fit: contain;" id="footer-logo"
                            width="260" height="70">
                    </a>
                    <p class="text-muted mt-1" style="max-width: 300px;">
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
                        <li><a href="<?php echo esc_url(home_url('/software-para-cotizaciones/')); ?>">Software para cotizaciones</a></li>
                        <li><a href="<?php echo esc_url(home_url('/seguimiento-de-cotizaciones/')); ?>">Seguimiento de cotizaciones</a></li>
                        <li><a href="<?php echo esc_url(home_url('/programa-para-hacer-presupuestos/')); ?>">Programa para presupuestos</a></li>
                        <li><a href="<?php echo esc_url(home_url('/cotizaciones-por-whatsapp/')); ?>">Cotizaciones por WhatsApp</a></li>
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

    <!-- ==================== SCRIPTS ==================== -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Header scroll effect (Optimized with rAF & passive listener)
            const header = document.getElementById('navbar');
            let ticking = false;
            window.addEventListener('scroll', () => {
                if (!ticking) {
                    window.requestAnimationFrame(() => {
                        header.classList.toggle('scrolled', window.scrollY > 50);
                        ticking = false;
                    });
                    ticking = true;
                }
            }, { passive: true });

            // Logo fallbacks
            ['brand-logo', 'footer-logo'].forEach(id => {
                const img = document.getElementById(id);
                if (img) {
                    img.onerror = function () {
                        this.style.display = 'none';
                        this.parentElement.innerHTML = '<span style="font-weight:700;font-family:Montserrat;font-size:1.5rem;color:#fff;display:flex;align-items:center;gap:8px;"><svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="#123A2C" stroke-width="2"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg>cotizalo.net</span>';
                    };
                }
            });

            // Animate on scroll
            const observer = new IntersectionObserver((entries, obs) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                        obs.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.1 });

            document.querySelectorAll('.animate-on-scroll').forEach(el => observer.observe(el));

        });
    </script>
    <?php wp_footer(); ?>
</body>

</html>