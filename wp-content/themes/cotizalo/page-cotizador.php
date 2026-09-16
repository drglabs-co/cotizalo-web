<?php
/**
 * Template Name: Cotizador en Línea
 * Template Post Type: page
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <link rel="canonical" href="<?php echo esc_url(home_url('/cotizador/')); ?>">
    <title>Cotizador en línea para pequeñas empresas | Cotízalo</title>
    <meta name="description"
        content="Crea, envía y administra cotizaciones profesionales desde una sola plataforma. Cotízalo ayuda a pequeñas empresas a dejar atrás Excel y dar seguimiento a cada propuesta.">
    <meta name="keywords"
        content="cotizador, cotizador en linea, cotizador para empresas, software cotizador, programa para hacer cotizaciones, sistema de cotizaciones, crear cotizaciones en linea, cotizador de precios, cotizador online, cotizaciones profesionales, seguimiento de cotizaciones">

    <!-- Open Graph / Facebook / WhatsApp -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo esc_url(home_url('/cotizador/')); ?>">
    <meta property="og:title" content="Cotizador en línea para pequeñas empresas | Cotízalo">
    <meta property="og:description"
        content="Crea, envía y administra cotizaciones profesionales desde una sola plataforma. Cotízalo ayuda a pequeñas empresas a dejar atrás Excel y dar seguimiento a cada propuesta.">
    <meta property="og:image"
        content="<?php echo esc_url(get_template_directory_uri()); ?>/assets/assets/logos/ISOTIPO/Cotizalo-5.png">
    <meta property="og:locale" content="es_MX">

    <!-- Twitter / X -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Cotizador en línea para pequeñas empresas | Cotízalo">
    <meta name="twitter:description"
        content="Crea, envía y administra cotizaciones profesionales desde una sola plataforma. Deja atrás el desorden de Excel y WhatsApp. Prueba gratis 14 días.">
    <meta name="twitter:image"
        content="<?php echo esc_url(get_template_directory_uri()); ?>/assets/assets/logos/ISOTIPO/Cotizalo-5.png">

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
                "@id": "<?php echo esc_url(home_url('/cotizador/')); ?>#webpage",
                "url": "<?php echo esc_url(home_url('/cotizador/')); ?>",
                "name": "Cotizador en línea para pequeñas empresas | Cotízalo",
                "description": "Crea, envía y administra cotizaciones profesionales desde una sola plataforma. Cotízalo ayuda a pequeñas empresas a dejar atrás Excel y dar seguimiento a cada propuesta.",
                "isPartOf": { "@id": "<?php echo esc_url(home_url('/')); ?>#website" },
                "breadcrumb": { "@id": "<?php echo esc_url(home_url('/cotizador/')); ?>#breadcrumb" },
                "inLanguage": "es-MX"
            },
            {
                "@type": "BreadcrumbList",
                "@id": "<?php echo esc_url(home_url('/cotizador/')); ?>#breadcrumb",
                "itemListElement": [
                    { "@type": "ListItem", "position": 1, "name": "Inicio", "item": "<?php echo esc_url(home_url('/')); ?>" },
                    { "@type": "ListItem", "position": 2, "name": "Cotizador en Línea" }
                ]
            },
            {
                "@type": "SoftwareApplication",
                "name": "Cotízalo",
                "url": "<?php echo esc_url(home_url('/')); ?>",
                "applicationCategory": "BusinessApplication",
                "operatingSystem": "Web, iOS, Android",
                "description": "Cotizador en línea para pequeñas empresas. Crea, envía y da seguimiento a cotizaciones profesionales en PDF por WhatsApp o correo.",
                "featureList": [
                    "Creación de cotizaciones profesionales en menos de 2 minutos",
                    "Envío directo por WhatsApp y correo electrónico con enlace interactivo",
                    "Seguimiento en tiempo real (Borrador, Enviada, Aceptada, Rechazada)",
                    "Catálogo centralizado de productos, servicios y clientes",
                    "Cálculo automático de impuestos (IVA, retenciones) y descuentos",
                    "Descarga instantánea de PDF profesional con tu logotipo",
                    "Acceso multidispositivo en la nube sin instalaciones"
                ],
                "offers": {
                    "@type": "Offer",
                    "price": "199",
                    "priceCurrency": "MXN",
                    "description": "Planes accesibles desde $199 MXN al mes. Prueba gratuita de 14 días sin tarjeta de crédito."
                },
                "publisher": { "@id": "<?php echo esc_url(home_url('/')); ?>#organization" }
            },
            {
                "@type": "FAQPage",
                "mainEntity": [
                    {
                        "@type": "Question",
                        "name": "¿Qué es un cotizador en línea?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Es una plataforma digital en la nube que permite calcular precios, agregar conceptos o servicios, aplicar impuestos y descuentos automáticamente, generar documentos formales en PDF y enviarlos a clientes para dar seguimiento a su aprobación comercial."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "¿Cuál es la diferencia entre un cotizador y una plantilla de cotización?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Una plantilla (como las de Excel o Word) es un archivo estático que requiere captura manual, fórmulas propensas a errores y organización carpeta por carpeta. Un cotizador en línea es un sistema vivo con catálogo de productos, directorio de clientes, historial comercial, generación de PDF con 1 clic y seguimiento de estatus."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "¿Puedo enviar una cotización por WhatsApp?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Sí. Cotízalo genera un enlace seguro y un mensaje personalizado listo para abrir WhatsApp con un solo clic. El cliente puede consultar la propuesta directamente en su teléfono móvil o descargar el PDF con presentación formal."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "¿Un cotizador sirve para pequeñas empresas?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Sí, es especialmente útil para pequeñas empresas, talleres, contratistas y profesionistas que manejan múltiples solicitudes al mes y necesitan responder rápido para no perder ventas frente a la competencia."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "¿Puedo crear cotizaciones desde el celular?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Totalmente. Cotízalo está 100% optimizado para navegadores móviles. Puedes crear, editar y enviar presupuestos en campo, directamente desde una obra, visita técnica o cita con cliente sin tener que esperar a llegar a una computadora."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "¿Puedo usar un cotizador sin conocimientos técnicos?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Sí. Cotízalo fue diseñado con una interfaz limpia e intuitiva. No requiere configuraciones complejas ni conocimientos contables; en menos de 2 minutos puedes tener lista y enviada tu primera propuesta comercial."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "¿Cuánto cuesta usar Cotízalo y qué incluye la prueba gratuita?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Ofrecemos una prueba gratuita de 14 días con acceso completo a todas las funciones sin necesidad de registrar tarjeta de crédito. Contamos con planes accesibles desde $199 MXN mensuales pensados para pequeñas empresas."
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
        /* Hero Section */
        .lp-hero {
            padding-top: calc(var(--nav-height) + 4.5rem);
            padding-bottom: 5rem;
            background: linear-gradient(135deg, #0d2818 0%, #123A2C 45%, #184e3b 100%);
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .lp-hero::before {
            content: '';
            position: absolute;
            top: -20%;
            left: 50%;
            transform: translateX(-50%);
            width: 800px;
            height: 400px;
            background: radial-gradient(circle, rgba(16, 185, 129, 0.18) 0%, rgba(18, 58, 44, 0) 70%);
            pointer-events: none;
        }

        .lp-hero .badge-pill {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.22);
            color: #fff;
            font-size: 0.875rem;
            font-weight: 600;
            padding: 0.4rem 1.15rem;
            border-radius: var(--radius-full);
            margin-bottom: 1.5rem;
            backdrop-filter: blur(8px);
        }

        .lp-hero h1 {
            font-size: clamp(2rem, 4.5vw, 3.4rem);
            font-weight: 700;
            color: #fff;
            letter-spacing: -0.025em;
            margin-bottom: 1.25rem;
            max-width: 860px;
            margin-left: auto;
            margin-right: auto;
            line-height: 1.2;
        }

        .lp-hero p.hero-intro {
            color: rgba(255, 255, 255, 0.88);
            font-size: 1.15rem;
            max-width: 740px;
            margin: 0 auto 2.25rem;
            line-height: 1.7;
            font-weight: 400;
        }

        .hero-ctas {
            display: flex;
            justify-content: center;
            gap: 1rem;
            flex-wrap: wrap;
            margin-bottom: 2.25rem;
        }

        .btn-cta-primary {
            background: #10b981;
            color: #062817 !important;
            font-weight: 700;
            padding: 0.95rem 2rem;
            border-radius: var(--radius-md);
            text-decoration: none;
            font-size: 1rem;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            transition: all 0.2s ease;
            box-shadow: 0 10px 25px rgba(16, 185, 129, 0.35);
        }

        .btn-cta-primary:hover {
            background: #34d399;
            transform: translateY(-2px);
            box-shadow: 0 14px 30px rgba(16, 185, 129, 0.45);
        }

        .btn-cta-secondary {
            background: rgba(255, 255, 255, 0.12);
            border: 1px solid rgba(255, 255, 255, 0.28);
            color: #ffffff !important;
            font-weight: 600;
            padding: 0.95rem 1.85rem;
            border-radius: var(--radius-md);
            text-decoration: none;
            font-size: 1rem;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            transition: all 0.2s ease;
            backdrop-filter: blur(8px);
        }

        .btn-cta-secondary:hover {
            background: rgba(255, 255, 255, 0.2);
            border-color: rgba(255, 255, 255, 0.45);
            transform: translateY(-2px);
        }

        .hero-trust-bar {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 1.75rem;
            flex-wrap: wrap;
            font-size: 0.85rem;
            color: rgba(255, 255, 255, 0.78);
        }

        .hero-trust-item {
            display: inline-flex;
            align-items: center;
            gap: 0.4rem;
        }

        .hero-trust-item svg {
            color: #34d399;
            flex-shrink: 0;
        }

        /* Mockup Card */
        .hero-mockup-wrapper {
            max-width: 960px;
            margin: 3.5rem auto 0;
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.15);
            border-radius: 18px;
            padding: 12px;
            box-shadow: 0 30px 70px rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(12px);
        }

        .mockup-inner {
            background: #ffffff;
            border-radius: 12px;
            overflow: hidden;
            border: 1px solid #e2e8f0;
            text-align: left;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.06);
        }

        .mockup-header {
            background: #f8fafc;
            border-bottom: 1px solid #e2e8f0;
            padding: 12px 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
        }

        .mockup-dots {
            display: flex;
            gap: 6px;
        }

        .mockup-dot {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background: #cbd5e1;
        }

        .mockup-body {
            padding: 24px;
            color: var(--text-dark);
            font-size: 0.875rem;
        }

        /* Interactive Generator Styles */
        .gen-grid-2 {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
            margin-bottom: 1.25rem;
        }

        .gen-panel {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            padding: 1rem 1.25rem;
        }

        .gen-panel-title {
            font-size: 0.72rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.06em;
            color: #64748b;
            margin-bottom: 0.75rem;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .gen-field {
            display: flex;
            flex-direction: column;
            gap: 4px;
            margin-bottom: 0.65rem;
        }

        .gen-field:last-child {
            margin-bottom: 0;
        }

        .gen-field label {
            font-size: 0.75rem;
            font-weight: 600;
            color: #475569;
        }

        .gen-input {
            width: 100%;
            background: #ffffff;
            border: 1px solid #cbd5e1;
            border-radius: 6px;
            padding: 7px 10px;
            font-size: 0.82rem;
            color: #0f172a;
            font-family: var(--font-main);
            transition: all 0.15s ease;
        }

        .gen-input:focus {
            border-color: #10b981;
            box-shadow: 0 0 0 3px rgba(16, 185, 129, 0.15);
            outline: none;
        }

        .gen-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 0.82rem;
        }

        .gen-table th {
            padding: 8px 10px;
            background: #f1f5f9;
            color: #475569;
            font-weight: 700;
            border-bottom: 1px solid #e2e8f0;
            text-align: left;
        }

        .gen-table td {
            padding: 8px 10px;
            border-bottom: 1px solid #f1f5f9;
            vertical-align: middle;
        }

        .btn-add-item {
            background: #eff6ff;
            color: #2563eb;
            border: 1px dashed #93c5fd;
            border-radius: 6px;
            padding: 8px 14px;
            font-size: 0.8rem;
            font-weight: 600;
            cursor: pointer;
            width: 100%;
            margin-top: 10px;
            transition: all 0.2s ease;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 6px;
        }

        .btn-add-item:hover {
            background: #dbeafe;
            border-color: #3b82f6;
        }

        .btn-del-row {
            background: none;
            border: none;
            color: #ef4444;
            cursor: pointer;
            font-size: 0.85rem;
            padding: 4px;
            border-radius: 4px;
            transition: background 0.15s ease;
        }

        .btn-del-row:hover {
            background: #fee2e2;
        }

        .gen-actions-bar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
            flex-wrap: wrap;
            margin-top: 1.5rem;
            padding-top: 1.25rem;
            border-top: 1px solid #e2e8f0;
        }

        .btn-gen-action {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 9px 16px;
            border-radius: 8px;
            font-size: 0.85rem;
            font-weight: 700;
            cursor: pointer;
            text-decoration: none;
            transition: all 0.2s ease;
        }

        .btn-gen-print {
            background: #0f172a;
            color: #ffffff;
            border: 1px solid #0f172a;
        }

        .btn-gen-print:hover {
            background: #1e293b;
        }

        .btn-gen-wa {
            background: #25d366;
            color: #ffffff;
            border: 1px solid #22c55e;
        }

        .btn-gen-wa:hover {
            background: #16a34a;
        }

        .btn-gen-save {
            background: #10b981;
            color: #ffffff;
            border: 1px solid #059669;
        }

        .btn-gen-save:hover {
            background: #059669;
        }

        @media (max-width: 768px) {
            .gen-grid-2 {
                grid-template-columns: 1fr;
            }
            .gen-actions-bar {
                flex-direction: column;
                align-items: stretch;
            }
            .btn-gen-action {
                justify-content: center;
                width: 100%;
            }
        }

        /* Printable stylesheet */
        @media print {
            body * {
                visibility: hidden !important;
            }
            #printableQuoteArea, #printableQuoteArea * {
                visibility: visible !important;
            }
            #printableQuoteArea {
                position: absolute !important;
                left: 0 !important;
                top: 0 !important;
                width: 100% !important;
                margin: 0 !important;
                padding: 20px !important;
                background: #ffffff !important;
                color: #000000 !important;
                box-shadow: none !important;
                border: 1px solid #cbd5e1 !important;
            }
            .gen-input {
                border: none !important;
                background: transparent !important;
                padding: 2px 0 !important;
                color: #0f172a !important;
                box-shadow: none !important;
            }
            .gen-input::placeholder {
                color: transparent !important;
            }
            select.gen-input {
                appearance: none !important;
                -webkit-appearance: none !important;
            }
            .print-cotizalo-banner {
                display: flex !important;
                margin-top: 25px !important;
                padding: 12px 16px !important;
                background: #f0fdf4 !important;
                border: 1px solid #86efac !important;
                border-radius: 8px !important;
                -webkit-print-color-adjust: exact !important;
                print-color-adjust: exact !important;
            }
            .no-print {
                display: none !important;
            }
        }

        .print-cotizalo-banner {
            margin-top: 1.75rem;
            padding: 12px 16px;
            background: #f0fdf4;
            border: 1px solid #bbf7d0;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 12px;
        }

        /* Common Section Styles */
        .lp-section {
            padding: 5.5rem 0;
        }

        .lp-section-alt {
            background: var(--bg-light-alt);
        }

        .section-eyebrow {
            text-align: center;
            font-size: 0.8rem;
            font-weight: 700;
            letter-spacing: 0.14em;
            text-transform: uppercase;
            color: var(--primary);
            margin-bottom: 0.65rem;
        }

        .section-title {
            text-align: center;
            font-size: clamp(1.75rem, 3.2vw, 2.45rem);
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 1rem;
            letter-spacing: -0.02em;
            line-height: 1.25;
        }

        .section-subtitle {
            text-align: center;
            color: var(--text-dark-muted);
            font-size: 1.05rem;
            max-width: 680px;
            margin: 0 auto 3.5rem;
            line-height: 1.65;
        }

        /* Cards Grid */
        .cards-grid-3 {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1.75rem;
        }

        .feature-box {
            background: #ffffff;
            border: 1px solid var(--border-dark);
            border-radius: var(--radius-md);
            padding: 2rem;
            transition: all 0.25s ease;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.03);
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .feature-box:hover {
            transform: translateY(-4px);
            border-color: rgba(18, 58, 44, 0.3);
            box-shadow: 0 16px 30px rgba(18, 58, 44, 0.08);
        }

        .feature-icon-circle {
            width: 48px;
            height: 48px;
            border-radius: 12px;
            background: rgba(18, 58, 44, 0.08);
            color: var(--primary);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.25rem;
            flex-shrink: 0;
        }

        .feature-box h3 {
            font-size: 1.15rem;
            font-weight: 700;
            color: var(--text-dark);
            line-height: 1.35;
        }

        .feature-box p {
            font-size: 0.925rem;
            color: var(--text-dark-muted);
            line-height: 1.65;
            margin: 0;
        }

        /* Comparison Problem Cards (Excel vs WhatsApp) */
        .pain-comparison-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 2rem;
            max-width: 1000px;
            margin: 0 auto;
        }

        .pain-card {
            background: #ffffff;
            border-radius: var(--radius-lg);
            padding: 2.25rem;
            border: 1px solid #fee2e2;
            position: relative;
            box-shadow: 0 8px 24px rgba(239, 68, 68, 0.05);
        }

        .pain-card-header {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 1.25rem;
            padding-bottom: 1rem;
            border-bottom: 1px solid #fecaca;
        }

        .pain-card-header h3 {
            font-size: 1.2rem;
            font-weight: 700;
            color: #991b1b;
            margin: 0;
        }

        .pain-list {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            flex-direction: column;
            gap: 0.85rem;
        }

        .pain-list li {
            display: flex;
            align-items: flex-start;
            gap: 10px;
            font-size: 0.92rem;
            color: #4b5563;
            line-height: 1.55;
        }

        .pain-list li svg {
            color: #dc2626;
            flex-shrink: 0;
            margin-top: 3px;
        }

        /* Step by Step Section */
        .steps-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1.75rem;
            counter-reset: step-counter;
        }

        .step-card {
            background: #ffffff;
            border: 1px solid var(--border-dark);
            border-radius: var(--radius-md);
            padding: 2rem 1.75rem;
            position: relative;
            transition: all 0.25s ease;
        }

        .step-card:hover {
            border-color: var(--primary);
            box-shadow: 0 12px 28px rgba(0, 0, 0, 0.06);
            transform: translateY(-3px);
        }

        .step-badge {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 38px;
            height: 38px;
            border-radius: 10px;
            background: var(--primary);
            color: #ffffff;
            font-weight: 700;
            font-size: 0.95rem;
            margin-bottom: 1.2rem;
        }

        .step-card h3 {
            font-size: 1.1rem;
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 0.65rem;
        }

        .step-card p {
            font-size: 0.9rem;
            color: var(--text-dark-muted);
            line-height: 1.6;
            margin: 0;
        }

        /* Comparison Table */
        .table-responsive-container {
            max-width: 980px;
            margin: 0 auto;
            background: #ffffff;
            border-radius: var(--radius-lg);
            overflow: hidden;
            border: 1px solid var(--border-dark);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        }

        .seo-comparison-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
            font-size: 0.925rem;
        }

        .seo-comparison-table th {
            padding: 1.2rem 1.5rem;
            font-weight: 700;
            border-bottom: 2px solid #e2e8f0;
            background: #f8fafc;
            color: var(--text-dark);
        }

        .seo-comparison-table th.col-highlight {
            background: #ecfdf5;
            color: #065f46;
            border-bottom: 2px solid #a7f3d0;
        }

        .seo-comparison-table td {
            padding: 1.15rem 1.5rem;
            border-bottom: 1px solid #f1f5f9;
            color: #334155;
            vertical-align: middle;
        }

        .seo-comparison-table tr:hover td {
            background: #fafafa;
        }

        .seo-comparison-table td.col-highlight {
            background: #f0fdf4;
            color: #064e3b;
            font-weight: 600;
        }

        /* Business Audiences Grid */
        .business-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1.5rem;
        }

        .business-card {
            background: #ffffff;
            border: 1px solid var(--border-dark);
            border-radius: var(--radius-md);
            padding: 1.75rem;
            display: flex;
            gap: 1.25rem;
            align-items: flex-start;
            transition: all 0.2s ease;
        }

        .business-card:hover {
            border-color: rgba(18, 58, 44, 0.35);
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.04);
        }

        .business-icon {
            width: 44px;
            height: 44px;
            border-radius: 10px;
            background: #ecfdf5;
            color: #059669;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            flex-shrink: 0;
        }

        .business-card h3 {
            font-size: 1.05rem;
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 0.35rem;
        }

        .business-card p {
            font-size: 0.875rem;
            color: var(--text-dark-muted);
            margin: 0;
            line-height: 1.55;
        }

        /* FAQ Accordion */
        .faq-accordion {
            max-width: 820px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .faq-item {
            background: #ffffff;
            border: 1px solid var(--border-dark);
            border-radius: var(--radius-md);
            overflow: hidden;
            transition: border-color 0.2s ease;
        }

        .faq-item:hover {
            border-color: rgba(18, 58, 44, 0.3);
        }

        .faq-question {
            width: 100%;
            text-align: left;
            background: none;
            border: none;
            padding: 1.25rem 1.5rem;
            font-size: 1.05rem;
            font-weight: 700;
            color: var(--text-dark);
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-family: var(--font-main);
            gap: 12px;
        }

        .faq-question svg {
            transition: transform 0.2s ease;
            flex-shrink: 0;
            color: #64748b;
        }

        .faq-item.open .faq-question svg {
            transform: rotate(180deg);
            color: var(--primary);
        }

        .faq-answer {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease, padding 0.3s ease;
            padding: 0 1.5rem;
            color: var(--text-dark-muted);
            font-size: 0.95rem;
            line-height: 1.65;
        }

        .faq-item.open .faq-answer {
            max-height: 250px;
            padding: 0 1.5rem 1.4rem;
        }

        /* Bottom CTA Section */
        .bottom-cta-banner {
            background: linear-gradient(135deg, #0d2818 0%, #123A2C 50%, #174d39 100%);
            border-radius: var(--radius-lg);
            padding: 4.5rem 2rem;
            text-align: center;
            color: #ffffff;
            position: relative;
            overflow: hidden;
            box-shadow: 0 25px 60px rgba(18, 58, 44, 0.25);
        }

        .bottom-cta-banner h2 {
            font-size: clamp(1.8rem, 3.5vw, 2.75rem);
            font-weight: 700;
            color: #ffffff;
            margin-bottom: 1.25rem;
            line-height: 1.2;
        }

        .bottom-cta-banner p {
            font-size: 1.15rem;
            color: rgba(255, 255, 255, 0.88);
            max-width: 660px;
            margin: 0 auto 2.5rem;
            line-height: 1.65;
        }

        /* Responsive Breakpoints */
        @media (max-width: 991px) {
            .cards-grid-3,
            .steps-container,
            .business-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .pain-comparison-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 640px) {
            .cards-grid-3,
            .steps-container,
            .business-grid {
                grid-template-columns: 1fr;
            }

            .hero-ctas {
                flex-direction: column;
                align-items: stretch;
            }

            .btn-cta-primary,
            .btn-cta-secondary {
                justify-content: center;
                width: 100%;
            }

            .seo-comparison-table th,
            .seo-comparison-table td {
                padding: 0.85rem 1rem;
                font-size: 0.85rem;
            }
        }

        /* Fixed & Scrolled Navbar */
        header.navbar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: var(--nav-height, 80px);
            z-index: 1000;
            transition: background 0.3s ease, backdrop-filter 0.3s ease, -webkit-backdrop-filter 0.3s ease, border-color 0.3s ease, box-shadow 0.3s ease;
            display: flex;
            align-items: center;
        }

        header.navbar.scrolled {
            background: rgba(10, 14, 26, 0.96) !important;
            backdrop-filter: blur(12px) !important;
            -webkit-backdrop-filter: blur(12px) !important;
            border-bottom: 1px solid rgba(255, 255, 255, 0.12) !important;
            box-shadow: 0 4px 25px rgba(0, 0, 0, 0.45) !important;
        }
    </style>
</head>

<body <?php body_class(); ?>>
    <!-- Navigation Bar -->
    <header class="navbar" id="navbar">
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
                        <li><a href="<?php echo esc_url(home_url('/cotizador/')); ?>" style="font-weight:700; color:#34d399;">Cotizador en línea</a></li>
                        <li><a href="<?php echo esc_url(home_url('/software-para-cotizaciones/')); ?>">Software para cotizaciones</a></li>
                        <li><a href="<?php echo esc_url(home_url('/seguimiento-de-cotizaciones/')); ?>">Seguimiento de cotizaciones</a></li>
                        <li><a href="<?php echo esc_url(home_url('/programa-para-hacer-presupuestos/')); ?>">Programa para presupuestos</a></li>
                        <li><a href="<?php echo esc_url(home_url('/cotizaciones-por-whatsapp/')); ?>">Cotizaciones por WhatsApp</a></li>
                        <li><a href="<?php echo esc_url(home_url('/plantilla-de-cotizacion/')); ?>">Plantilla de cotización</a></li>
                        <li><a href="<?php echo esc_url(home_url('/software-de-cotizaciones-para-constructoras/')); ?>">Para constructoras</a></li>
                        <li><a href="<?php echo esc_url(home_url('/software-de-cotizaciones-para-servicios/')); ?>">Para servicios</a></li>
                    </ul>
                </li>
            </ul>
            <div class="nav-buttons">
                <a href="<?php echo esc_url(get_theme_mod('nav_login_url', 'https://app.cotizalo.net/login')); ?>"
                    class="btn btn-secondary btn-nav"><?php echo esc_html(get_theme_mod('nav_login_text', 'Ingresar')); ?></a>
                <a href="<?php echo esc_url(get_theme_mod('nav_register_url', 'https://app.cotizalo.net/signup')); ?>"
                    class="btn btn-primary btn-nav"><?php echo esc_html(get_theme_mod('nav_register_text', 'Probar Gratis')); ?></a>
            </div>
            <button class="mobile-menu-btn" aria-label="Abrir menú de navegación">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <line x1="3" y1="12" x2="21" y2="12"></line>
                    <line x1="3" y1="6" x2="21" y2="6"></line>
                    <line x1="3" y1="18" x2="21" y2="18"></line>
                </svg>
            </button>
        </div>
    </header>

    <main>
        <!-- Hero Section -->
        <section class="lp-hero">
            <div class="container">
                <div class="badge-pill">
                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                    </svg>
                    <span>Cotizador en línea para pequeñas empresas</span>
                </div>
                <h1>Cotizador en línea para pequeñas empresas</h1>
                <p class="hero-intro">
                    Cotízalo es un cotizador en línea para pequeñas empresas que necesitan crear, enviar y dar seguimiento a sus propuestas sin depender de archivos de Excel, imágenes o conversaciones interminables de WhatsApp. Organiza tus clientes, productos y presupuestos desde una sola plataforma y comienza con una prueba gratuita.
                </p>
                <div class="hero-ctas">
                    <a href="https://app.cotizalo.net/signup" class="btn-cta-primary">
                        <span>Empieza tu prueba gratuita</span>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    </a>
                    <a href="<?php echo esc_url(home_url('/precios/')); ?>" class="btn-cta-secondary">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="2" y="5" width="20" height="14" rx="2"></rect>
                            <line x1="2" y1="10" x2="22" y2="10"></line>
                        </svg>
                        <span>Ver planes y precios</span>
                    </a>
                </div>
                <div class="hero-trust-bar">
                    <span class="hero-trust-item">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        14 días de prueba gratis
                    </span>
                    <span class="hero-trust-item">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        Sin tarjeta de crédito
                    </span>
                    <span class="hero-trust-item">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        Listo en 2 minutos
                    </span>
                    <span class="hero-trust-item">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        Cancela cuando quieras
                    </span>
                </div>

                <!-- Live Interactive Quotation Tool (Competitor Feature & Lead Magnet) -->
                <div class="hero-mockup-wrapper" id="printableQuoteArea">
                    <div class="mockup-inner">
                        <div class="mockup-header no-print">
                            <div class="mockup-dots">
                                <div class="mockup-dot" style="background:#ef4444;"></div>
                                <div class="mockup-dot" style="background:#f59e0b;"></div>
                                <div class="mockup-dot" style="background:#10b981;"></div>
                            </div>
                            <div style="font-size:0.75rem; color:#64748b; font-weight:600; display:flex; align-items:center; gap:6px;">
                                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                                cotizalo.net/cotizador-online
                            </div>
                            <div style="background:#ecfdf5; color:#059669; font-size:0.7rem; font-weight:700; padding:3px 10px; border-radius:12px; display:inline-flex; align-items:center; gap:4px;">
                                <span>⚡ Cotizador Online Gratuito</span>
                            </div>
                        </div>

                        <div class="mockup-body">
                            <!-- Emitter & Client Information Grid -->
                            <div class="gen-grid-2">
                                <div class="gen-panel">
                                    <div class="gen-panel-title">
                                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 21h18"></path><path d="M5 21V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v16"></path></svg>
                                        Datos de tu Empresa (Emisor)
                                    </div>
                                    <div class="gen-field">
                                        <label>Nombre / Razón Social:</label>
                                        <input type="text" id="q_issuer_name" class="gen-input" value="Servicios Profesionales de México" placeholder="Ej. Tu Empresa o Nombre">
                                    </div>
                                    <div style="display:grid; grid-template-columns:1fr 1fr; gap:8px;">
                                        <div class="gen-field">
                                            <label>Teléfono / WhatsApp:</label>
                                            <input type="text" id="q_issuer_phone" class="gen-input" value="(55) 8421-9900">
                                        </div>
                                        <div class="gen-field">
                                            <label>Folio:</label>
                                            <input type="text" id="q_folio" class="gen-input" value="#COT-1048" style="font-weight:700; color:#059669;">
                                        </div>
                                    </div>
                                </div>

                                <div class="gen-panel">
                                    <div class="gen-panel-title">
                                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                        Datos de tu Cliente (Receptor)
                                    </div>
                                    <div class="gen-field">
                                        <label>Empresa / Cliente:</label>
                                        <input type="text" id="q_client_name" class="gen-input" value="Constructora Alianza del Norte S.A. de C.V." placeholder="Nombre del cliente">
                                    </div>
                                    <div style="display:grid; grid-template-columns:1fr 1fr; gap:8px;">
                                        <div class="gen-field">
                                            <label>RFC / Contacto:</label>
                                            <input type="text" id="q_client_rfc" class="gen-input" value="CAN180512AB3" placeholder="RFC o contacto">
                                        </div>
                                        <div class="gen-field">
                                            <label>Vigencia:</label>
                                            <select id="q_validity" class="gen-input">
                                                <option value="15 días">15 días naturales</option>
                                                <option value="30 días" selected>30 días naturales</option>
                                                <option value="60 días">60 días naturales</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Products / Items Table -->
                            <div style="background:#ffffff; border:1px solid #e2e8f0; border-radius:8px; overflow-x:auto;">
                                <table class="gen-table" id="q_table">
                                    <thead>
                                        <tr>
                                            <th style="width:45%;">Concepto / Servicio</th>
                                            <th style="width:15%; text-align:center;">Cant.</th>
                                            <th style="width:20%; text-align:right;">P. Unitario ($ MXN)</th>
                                            <th style="width:15%; text-align:right;">Subtotal</th>
                                            <th style="width:5%; text-align:center;" class="no-print"></th>
                                        </tr>
                                    </thead>
                                    <tbody id="q_tbody">
                                        <tr>
                                            <td>
                                                <input type="text" class="gen-input q-desc" value="Instalación y configuración de sistema eléctrico industrial">
                                            </td>
                                            <td>
                                                <input type="number" class="gen-input q-qty" value="1" min="1" style="text-align:center;" oninput="recalcQuote()">
                                            </td>
                                            <td>
                                                <input type="number" class="gen-input q-price" value="14500" min="0" step="10" style="text-align:right;" oninput="recalcQuote()">
                                            </td>
                                            <td style="text-align:right; font-weight:700; color:#1e293b;" class="q-row-subtotal">
                                                $14,500.00
                                            </td>
                                            <td style="text-align:center;" class="no-print">
                                                <button type="button" class="btn-del-row" onclick="deleteRow(this)" title="Eliminar fila">✕</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="text" class="gen-input q-desc" value="Material de cableado certificado calibre 10 AWG (rollo 100m)">
                                            </td>
                                            <td>
                                                <input type="number" class="gen-input q-qty" value="3" min="1" style="text-align:center;" oninput="recalcQuote()">
                                            </td>
                                            <td>
                                                <input type="number" class="gen-input q-price" value="1850" min="0" step="10" style="text-align:right;" oninput="recalcQuote()">
                                            </td>
                                            <td style="text-align:right; font-weight:700; color:#1e293b;" class="q-row-subtotal">
                                                $5,550.00
                                            </td>
                                            <td style="text-align:center;" class="no-print">
                                                <button type="button" class="btn-del-row" onclick="deleteRow(this)" title="Eliminar fila">✕</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="no-print" style="margin-top:10px;">
                                <button type="button" class="btn-add-item" id="btn_add_item" onclick="addRow()">
                                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                                    <span id="btn_add_text">Agregar concepto o producto</span>
                                </button>
                                <div id="item_limit_notice" style="display:none; align-items:center; justify-content:space-between; flex-wrap:wrap; gap:10px; background:#fef3c7; border:1px solid #fde68a; border-radius:8px; padding:10px 14px; margin-top:8px; font-size:0.83rem; color:#92400e;">
                                    <div style="display:flex; align-items:center; gap:8px;">
                                        <span style="font-size:1.1rem;">⚠️</span>
                                        <span><strong>Límite de 2 conceptos en la versión gratuita:</strong> Para agregar partidas ilimitadas, guardar tu catálogo y dar seguimiento:</span>
                                    </div>
                                    <a href="<?php echo esc_url(get_theme_mod('nav_register_url', 'https://app.cotizalo.net/signup')); ?>" class="btn btn-primary" style="font-size:0.75rem; padding:6px 12px; white-space:nowrap;">Crear cuenta gratis →</a>
                                </div>
                            </div>

                            <!-- Calculation & Conditions Grid -->
                            <div style="display:grid; grid-template-columns:1.2fr 0.8fr; gap:1.5rem; margin-top:1.5rem; align-items:start;">
                                <div>
                                    <div class="gen-field">
                                        <label>Términos y condiciones comerciales:</label>
                                        <textarea id="q_notes" class="gen-input" rows="3" style="resize:vertical;">Precios en Moneda Nacional (MXN). Tiempo de entrega: 3 a 5 días hábiles. Anticipo del 50% al confirmar la orden y saldo contra entrega.</textarea>
                                    </div>
                                    <div style="margin-top:8px;" class="no-print">
                                        <div class="gen-field">
                                            <label>Tasa de IVA:</label>
                                            <select id="q_tax_rate" class="gen-input" onchange="recalcQuote()">
                                                <option value="0.16" selected>IVA 16% (General México)</option>
                                                <option value="0.08">IVA 8% (Frontera Norte)</option>
                                                <option value="0">Sin IVA / Exento (0%)</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <!-- Totals Summary Box -->
                                <div style="background:#f8fafc; border:1px solid #e2e8f0; border-radius:10px; padding:1.25rem; display:flex; flex-direction:column; gap:8px;">
                                    <div style="display:flex; justify-content:space-between; color:#64748b; font-size:0.85rem;">
                                        <span>Subtotal:</span>
                                        <span id="txt_subtotal" style="font-weight:600; color:#334155;">$20,050.00 MXN</span>
                                    </div>
                                    <div style="display:flex; justify-content:space-between; color:#64748b; font-size:0.85rem;">
                                        <span id="lbl_tax">IVA (16%):</span>
                                        <span id="txt_tax" style="font-weight:600; color:#334155;">$3,208.00 MXN</span>
                                    </div>
                                    <div style="display:flex; justify-content:space-between; font-weight:800; font-size:1.15rem; color:#0f172a; border-top:2px solid #e2e8f0; padding-top:8px; margin-top:4px;">
                                        <span>Total Neto:</span>
                                        <span id="txt_total" style="color:#059669;">$23,258.00 MXN</span>
                                    </div>
                                </div>
                            </div>

                            <!-- PDF & Print Watermark Banner -->
                            <div class="print-cotizalo-banner">
                                <div style="display:flex; align-items:center; gap:12px;">
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/assets/logos/ISOTIPO/Cotizalo-5.png" alt="Cotízalo" style="width:28px; height:28px; object-fit:contain; flex-shrink:0;" width="28" height="28">
                                    <div>
                                        <div style="font-size:0.85rem; font-weight:700; color:#14532d; line-height:1.2;">
                                            Cotización elaborada con Cotízalo &bull; cotizalo.net
                                        </div>
                                        <div style="font-size:0.75rem; color:#166534; margin-top:2px;">
                                            Software para cotizaciones y presupuestos en línea para pequeñas empresas y emprendedores.
                                        </div>
                                    </div>
                                </div>
                                <div style="text-align:right;">
                                    <span style="display:inline-block; background:#123A2C; color:#ffffff; font-size:0.75rem; font-weight:700; padding:4px 10px; border-radius:6px; letter-spacing:0.3px;">cotizalo.net</span>
                                </div>
                            </div>

                            <!-- Actions Bar -->
                            <div class="gen-actions-bar no-print">
                                <div style="display:flex; gap:10px; flex-wrap:wrap;">
                                    <button type="button" class="btn-gen-action btn-gen-print" onclick="window.print()">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 6 2 18 2 18 9"></polyline><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path><rect x="6" y="14" width="12" height="8"></rect></svg>
                                        Descargar en PDF / Imprimir
                                    </button>
                                    <button type="button" class="btn-gen-action btn-gen-wa" onclick="shareWhatsAppQuote()">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                                        Enviar por WhatsApp
                                    </button>
                                </div>
                                <div>
                                    <a href="https://app.cotizalo.net/signup" class="btn-gen-action btn-gen-save">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                        Guardar en Cotízalo gratis
                                    </a>
                                </div>
                            </div>
                            <div style="font-size:0.75rem; color:#64748b; text-align:center; margin-top:12px;" class="no-print">
                                💡 ¿Quieres guardar tu catálogo de productos y dar seguimiento al estado de tus cotizaciones? <a href="https://app.cotizalo.net/signup" style="color:#059669; font-weight:700;">Prueba Cotízalo gratis 14 días sin tarjeta</a>.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
            </div>
        </section>

        <!-- Section 1: ¿Qué es un cotizador? -->
        <section class="lp-section">
            <div class="container">
                <div class="section-eyebrow">Definición y Concepto</div>
                <h2 class="section-title">¿Qué es un cotizador?</h2>
                <p class="section-subtitle">
                    Un cotizador es una herramienta digital diseñada para calcular precios exactos, consolidar conceptos o productos y generar propuestas comerciales formales listas para enviar y ser aprobadas por los clientes.
                </p>
                <div class="cards-grid-3">
                    <div class="feature-box">
                        <div class="feature-icon-circle">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="2" width="16" height="20" rx="2"></rect><line x1="8" y1="6" x2="16" y2="6"></line><line x1="16" y1="14" x2="16" y2="18"></line><path d="M16 10h.01"></path><path d="M12 10h.01"></path><path d="M8 10h.01"></path><path d="M12 14h.01"></path><path d="M8 14h.01"></path><path d="M12 18h.01"></path><path d="M8 18h.01"></path></svg>
                        </div>
                        <h3>Calcular precios con exactitud</h3>
                        <p>Aplica fórmulas matemáticas confiables para calcular costos por unidad, lote, mano de obra, materiales y subtotales sin temor a errores de captura o dedos involuntarios.</p>
                    </div>
                    <div class="feature-box">
                        <div class="feature-icon-circle">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
                        </div>
                        <h3>Agregar productos o servicios</h3>
                        <p>Permite seleccionar artículos de tu propio inventario precargado o escribir conceptos personalizados en segundos, manteniendo una descripción clara y detallada.</p>
                    </div>
                    <div class="feature-box">
                        <div class="feature-icon-circle">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="19" y1="5" x2="5" y2="19"></line><circle cx="6.5" cy="6.5" r="2.5"></circle><circle cx="17.5" cy="17.5" r="2.5"></circle></svg>
                        </div>
                        <h3>Aplicar descuentos e impuestos</h3>
                        <p>Desglosa automáticamente el IVA (16% u 8% fronterizo), retenciones de ISR y descuentos comerciales por volumen, mostrando con total transparencia el valor neto a pagar.</p>
                    </div>
                    <div class="feature-box">
                        <div class="feature-icon-circle">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                        </div>
                        <h3>Crear una propuesta formal en PDF</h3>
                        <p>Genera en un clic un documento PDF limpio y pulido con los colores y logotipo de tu negocio, condiciones comerciales, vigencia y datos bancarios para pago o anticipo.</p>
                    </div>
                    <div class="feature-box">
                        <div class="feature-icon-circle">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                        </div>
                        <h3>Enviar el documento al cliente</h3>
                        <p>Comparte la propuesta a través de WhatsApp con enlace directo o por correo electrónico corporativo, asegurando que tu cliente pueda visualizarla desde cualquier dispositivo.</p>
                    </div>
                    <div class="feature-box">
                        <div class="feature-icon-circle">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                        </div>
                        <h3>Dar seguimiento al estado</h3>
                        <p>Rastrea con claridad el ciclo de venta: qué cotizaciones están en borrador, cuáles fueron enviadas, aprobadas, rechazadas o ya han sido pagadas por el cliente.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 2: ¿Para qué sirve un cotizador en línea? -->
        <section class="lp-section lp-section-alt">
            <div class="container">
                <div class="section-eyebrow">Beneficios Clave</div>
                <h2 class="section-title">¿Para qué sirve un cotizador en línea?</h2>
                <p class="section-subtitle">
                    A diferencia de una simple hoja de cálculo aislada en una computadora, un cotizador en línea conecta todas las piezas de tu proceso comercial en un ecosistema accesible y ordenado.
                </p>
                <div class="cards-grid-3">
                    <div class="feature-box">
                        <div class="feature-icon-circle" style="background:#ecfdf5; color:#059669;">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                        </div>
                        <h3>Crear presupuestos rápidamente</h3>
                        <p>Reduce de 40 minutos a menos de 2 minutos el tiempo que inviertes en armar cada presupuesto. Responder antes que tu competencia multiplica directamente tus probabilidades de cierre.</p>
                    </div>
                    <div class="feature-box">
                        <div class="feature-icon-circle" style="background:#eff6ff; color:#2563eb;">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                        </div>
                        <h3>Reutilizar clientes y productos</h3>
                        <p>No vuelvas a escribir el RFC, dirección, conceptos ni precios unitarios. Con el autocompletado inteligente de Cotízalo, seleccionas el cliente y agregas partidas con un par de clics.</p>
                    </div>
                    <div class="feature-box">
                        <div class="feature-icon-circle" style="background:#fef2f2; color:#dc2626;">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line></svg>
                        </div>
                        <h3>Evitar errores costosos de captura</h3>
                        <p>Se acabaron las fórmulas de Excel rotas, los precios desactualizados por usar un archivo viejo como base o los errores de suma que terminan recortando tu margen de ganancia.</p>
                    </div>
                    <div class="feature-box">
                        <div class="feature-icon-circle" style="background:#faf5ff; color:#9333ea;">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path></svg>
                        </div>
                        <h3>Centralizar toda tu información</h3>
                        <p>Toda la historia comercial de tu negocio en un solo lugar seguro. Encuentra cotizaciones de hace meses o años al instante mediante un potente buscador por cliente, folio o fecha.</p>
                    </div>
                    <div class="feature-box">
                        <div class="feature-icon-circle" style="background:#fffbeb; color:#d97706;">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="5" y="2" width="14" height="20" rx="2" ry="2"></rect><line x1="12" y1="18" x2="12.01" y2="18"></line></svg>
                        </div>
                        <h3>Consultar desde cualquier celular</h3>
                        <p>Si estás en obra, visitando a un cliente o de viaje, puedes enviar una cotización formal desde tu smartphone sin necesidad de esperar a llegar a tu oficina o escritorio.</p>
                    </div>
                    <div class="feature-box">
                        <div class="feature-icon-circle" style="background:#ecfdf5; color:#047857;">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path><rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect></svg>
                        </div>
                        <h3>Claridad total del embudo comercial</h3>
                        <p>Sabrás exactamente cuánto dinero tienes cotizado en la calle, qué clientes no han respondido para hacerles una llamada de seguimiento y qué propuestas ya fueron aprobadas.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 3: ¿Por qué una pequeña empresa necesita un software cotizador? -->
        <section class="lp-section">
            <div class="container">
                <div class="section-eyebrow">Diagnóstico Empresarial</div>
                <h2 class="section-title">¿Por qué una pequeña empresa necesita un software cotizador?</h2>
                <p class="section-subtitle">
                    La mayoría de los pequeños negocios inician usando Excel o notas en WhatsApp. Sin embargo, al llegar a los 10 o 20 presupuestos mensuales, este método se convierte en un cuello de botella caótico.
                </p>
                <div class="pain-comparison-grid">
                    <div class="pain-card">
                        <div class="pain-card-header">
                            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#dc2626" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line></svg>
                            <h3>Problemas de usar Excel o Word</h3>
                        </div>
                        <ul class="pain-list">
                            <li>
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                                <span><strong>Archivos duplicados y desordenados:</strong> Versiones llamadas "Cotizacion_Final_v3_rev2.xlsx" repartidas en correos y carpetas locales.</span>
                            </li>
                            <li>
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                                <span><strong>Fórmulas modificadas por error:</strong> Un borrado accidental en una celda de suma o IVA puede hacerte cotizar por debajo del costo real.</span>
                            </li>
                            <li>
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                                <span><strong>Información desactualizada:</strong> Precios viejos de proveedores copiados inadvertidamente desde cotizaciones anteriores.</span>
                            </li>
                            <li>
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                                <span><strong>Falta de seguimiento comercial:</strong> Nadie se entera de qué cotizaciones están esperando respuesta, perdiendo ventas por falta de seguimiento.</span>
                            </li>
                        </ul>
                    </div>
                    <div class="pain-card">
                        <div class="pain-card-header">
                            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#dc2626" stroke-width="2"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                            <h3>Problemas de enviar imágenes por WhatsApp</h3>
                        </div>
                        <ul class="pain-list">
                            <li>
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                                <span><strong>Imposibles de editar:</strong> Si el cliente pide cambiar una partida, debes volver a capturar, tomar captura de pantalla y reenviar.</span>
                            </li>
                            <li>
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                                <span><strong>Pérdida en la galería del cliente:</strong> Las capturas se traspapelan con fotos personales, memes y archivos de otros grupos de chat.</span>
                            </li>
                            <li>
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                                <span><strong>Falta de formalidad y desconfianza:</strong> Los clientes corporativos exigen un PDF formal con desglose, condiciones y membrete antes de liberar pagos.</span>
                            </li>
                            <li>
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                                <span><strong>Cero métricas de consulta:</strong> No sabes si el cliente abrió la imagen, si la reenvió a su jefe o si la ignoró por completo.</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 4: Funciones que debe tener un buen cotizador -->
        <section class="lp-section lp-section-alt">
            <div class="container">
                <div class="section-eyebrow">Capacidades Esenciales</div>
                <h2 class="section-title">Funciones que debe tener un buen cotizador</h2>
                <p class="section-subtitle">
                    Cotízalo integra las herramientas clave que demandan las pymes para operar con la velocidad y profesionalismo de una gran corporación.
                </p>
                <div class="cards-grid-3">
                    <div class="feature-box">
                        <div class="feature-icon-circle">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg>
                        </div>
                        <h3>Crear cotizaciones profesionales</h3>
                        <p>Diseño impecable con tu logotipo, colores de marca, datos fiscales, vigencia del presupuesto, condiciones comerciales de entrega y cuenta CLABE para anticipos.</p>
                    </div>
                    <div class="feature-box">
                        <div class="feature-icon-circle">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                        </div>
                        <h3>Administrar clientes y productos</h3>
                        <p>Directorio unificado de clientes y catálogo de artículos. Reutiliza descripciones técnicas, códigos SKU y precios base sin volver a capturarlos desde cero.</p>
                    </div>
                    <div class="feature-box">
                        <div class="feature-icon-circle">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                        </div>
                        <h3>Enviar por WhatsApp y PDF en 1 clic</h3>
                        <p>Genera un PDF de alta calidad y un mensaje preformateado para WhatsApp con el enlace directo para que tu prospecto lo revise al instante en su pantalla.</p>
                    </div>
                    <div class="feature-box">
                        <div class="feature-icon-circle">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg>
                        </div>
                        <h3>Dar seguimiento a cada propuesta</h3>
                        <p>Clasifica tus cotizaciones en estados reales: Borrador, Enviada, Aceptada o Rechazada. Filtra por estatus y prioriza tus llamadas para cerrar prospectos tibios.</p>
                    </div>
                    <div class="feature-box">
                        <div class="feature-icon-circle">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect><line x1="8" y1="21" x2="16" y2="21"></line><line x1="12" y1="17" x2="12" y2="21"></line></svg>
                        </div>
                        <h3>Consultar desde cualquier dispositivo</h3>
                        <p>100% en la nube. Accede desde tu computadora de oficina, tablet o teléfono celular con sincronización en tiempo real y respaldo automático diario.</p>
                    </div>
                    <div class="feature-box">
                        <div class="feature-icon-circle">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
                        </div>
                        <h3>Control de usuarios para tu equipo</h3>
                        <p>Asigna accesos a vendedores, cotizadores o administradores para que puedan colaborar en la misma empresa con permisos delimitados y trazabilidad de acciones.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 5: Cómo hacer una cotización paso a paso -->
        <section class="lp-section">
            <div class="container">
                <div class="section-eyebrow">Guía Práctica</div>
                <h2 class="section-title">Cómo hacer una cotización paso a paso</h2>
                <p class="section-subtitle">
                    Crear una propuesta formal en Cotízalo es un proceso intuitivo de 6 sencillos pasos diseñado para ahorrar tiempo sin sacrificar calidad ni claridad comercial.
                </p>
                <div class="steps-container">
                    <div class="step-card">
                        <div class="step-badge">1</div>
                        <h3>Registra los datos del cliente</h3>
                        <p>Selecciona un cliente frecuente de tu directorio o ingresa su razón social, contacto, correo y teléfono en segundos. La información queda guardada para el futuro.</p>
                    </div>
                    <div class="step-card">
                        <div class="step-badge">2</div>
                        <h3>Agrega productos o servicios</h3>
                        <p>Elige partidas de tu catálogo precargado o escribe nuevos conceptos con descripciones detalladas, unidades de medida y notas técnicas específicas del trabajo.</p>
                    </div>
                    <div class="step-card">
                        <div class="step-badge">3</div>
                        <h3>Define cantidades y precios</h3>
                        <p>Indica la cantidad requerida y el precio unitario pactado. El sistema multiplica los valores y suma los subtotales automáticamente en tiempo real.</p>
                    </div>
                    <div class="step-card">
                        <div class="step-badge">4</div>
                        <h3>Revisa impuestos y descuentos</h3>
                        <p>Aplica descuentos globales o por partida, configura el cálculo de IVA y añade las notas comerciales (tiempo de entrega, vigencia del precio, anticipo requerido).</p>
                    </div>
                    <div class="step-card">
                        <div class="step-badge">5</div>
                        <h3>Genera y envía la cotización</h3>
                        <p>Descarga el PDF formal con tu logotipo institucional o presiona el botón de WhatsApp para compartir el enlace directo con un saludo personalizado.</p>
                    </div>
                    <div class="step-card">
                        <div class="step-badge">6</div>
                        <h3>Da seguimiento hasta cerrar</h3>
                        <p>Monitorea si la propuesta sigue pendiente y cambia su estado a "Aceptada" cuando el cliente dé luz verde para iniciar la orden de trabajo o facturación.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 6: Cotizador vs. Excel -->
        <section class="lp-section lp-section-alt">
            <div class="container">
                <div class="section-eyebrow">Comparativa Directa</div>
                <h2 class="section-title">Cotizador vs. Excel: ¿cuál conviene más?</h2>
                <p class="section-subtitle">
                    Excel es una herramienta excelente para análisis numérico, pero no está concebida para la gestión comercial ágil de una empresa en crecimiento.
                </p>
                <div class="table-responsive-container">
                    <table class="seo-comparison-table">
                        <thead>
                            <tr>
                                <th>Necesidad Comercial</th>
                                <th>Hojas de Cálculo (Excel / Word)</th>
                                <th class="col-highlight">Cotizador Cotízalo</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Crear una propuesta comercial</strong></td>
                                <td>Sí, pero requiere formatear celdas manualmente</td>
                                <td class="col-highlight">Sí, en formato PDF profesional en menos de 2 min</td>
                            </tr>
                            <tr>
                                <td><strong>Reutilizar catálogo de productos y precios</strong></td>
                                <td>Requiere copiar y pegar manualmente entre hojas</td>
                                <td class="col-highlight">Catálogo integrado con autocompletado en 1 clic</td>
                            </tr>
                            <tr>
                                <td><strong>Seguimiento del estado de ventas</strong></td>
                                <td>Inexistente; debes llevar otra libreta o lista manual</td>
                                <td class="col-highlight">Centralizado en tiempo real (Borrador, Enviada, Aceptada)</td>
                            </tr>
                            <tr>
                                <td><strong>Acceso desde dispositivos móviles</strong></td>
                                <td>Complicado y propenso a desajustar celdas en pantalla táctil</td>
                                <td class="col-highlight">100% optimizado para celular y tableta en campo</td>
                            </tr>
                            <tr>
                                <td><strong>Historial y búsqueda de presupuestos</strong></td>
                                <td>Archivos dispersos en computadoras y memorias USB</td>
                                <td class="col-highlight">Base de datos segura en la nube con buscador instantáneo</td>
                            </tr>
                            <tr>
                                <td><strong>Envío y presentación al cliente</strong></td>
                                <td>Exportar PDF manual, guardar y adjuntar en correos</td>
                                <td class="col-highlight">Envío directo por WhatsApp y correo con enlace interactivo</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div style="max-width:820px; margin:2rem auto 0; text-align:center; font-size:0.95rem; color:#475569; line-height:1.65;">
                    <p>
                        <strong>Conclusión:</strong> Excel puede ser suficiente durante las primeras semanas de un negocio unipersonal. No obstante, en cuanto comienzas a gestionar varios prospectos a la vez o requieres que otros colaboradores elaboren propuestas, un cotizador especializado como Cotízalo evita pérdidas de dinero, ahorra horas de trabajo repetitivo y proyecta una imagen de máxima seriedad ante tus clientes.
                    </p>
                </div>
            </div>
        </section>

        <!-- Section 7: ¿Para qué negocios funciona Cotízalo? -->
        <section class="lp-section">
            <div class="container">
                <div class="section-eyebrow">Casos de Uso</div>
                <h2 class="section-title">¿Para qué negocios funciona Cotízalo?</h2>
                <p class="section-subtitle">
                    Cotízalo se adapta con flexibilidad a cualquier microempresa o proveedor de servicios que venda productos bajo catálogo, mano de obra o proyectos bajo pedido.
                </p>
                <div class="business-grid">
                    <div class="business-card">
                        <div class="business-icon">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 21h18"></path><path d="M5 21V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v16"></path><path d="M9 9h1"></path><path d="M9 13h1"></path><path d="M9 17h1"></path><path d="M14 9h1"></path><path d="M14 13h1"></path><path d="M14 17h1"></path></svg>
                        </div>
                        <div>
                            <h3>Constructoras y contratistas</h3>
                            <p>Cotiza partidas de obra civil, pintura, acabados, remodelación y presupuestos de materiales con desglose exacto de partidas.</p>
                        </div>
                    </div>
                    <div class="business-card">
                        <div class="business-icon">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"></path></svg>
                        </div>
                        <div>
                            <h3>Técnicos e instaladores</h3>
                            <p>Especialistas en aire acondicionado (HVAC), paneles solares, alarmas, herrería, plomería y mantenimiento eléctrico.</p>
                        </div>
                    </div>
                    <div class="business-card">
                        <div class="business-icon">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg>
                        </div>
                        <div>
                            <h3>Servicios profesionales</h3>
                            <p>Despachos contables, agencias de marketing digital, firmas legales, diseñadores y consultores de negocios.</p>
                        </div>
                    </div>
                    <div class="business-card">
                        <div class="business-icon">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                        </div>
                        <div>
                            <h3>Distribuidores y comercios</h3>
                            <p>Mayoristas de refacciones, papelerías corporativas, equipo industrial, cómputo y venta de suministros al mayoreo.</p>
                        </div>
                    </div>
                    <div class="business-card">
                        <div class="business-icon">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                        </div>
                        <div>
                            <h3>Negocios de eventos y banquetes</h3>
                            <p>Renta de mobiliario, catering, sonido, iluminación, fotografía y organización de eventos corporativos o sociales.</p>
                        </div>
                    </div>
                    <div class="business-card">
                        <div class="business-icon">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 7h-7L10 4H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"></path></svg>
                        </div>
                        <div>
                            <h3>Talleres y fabricación a medida</h3>
                            <p>Carpinterías, imprentas, talleres de corte láser, cancelería de aluminio y confección textil bajo especificaciones.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 8: Preguntas frecuentes -->
        <section class="lp-section lp-section-alt">
            <div class="container">
                <div class="section-eyebrow">Dudas Habituales</div>
                <h2 class="section-title">Preguntas frecuentes sobre cotizadores</h2>
                <p class="section-subtitle">
                    Respuestas directas a las preguntas más comunes sobre la implementación de un cotizador en tu negocio.
                </p>
                <div class="faq-accordion">
                    <div class="faq-item">
                        <button class="faq-question" type="button">
                            <span>¿Qué es un cotizador en línea?</span>
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </button>
                        <div class="faq-answer">
                            <p>Es una plataforma digital basada en la nube que permite crear, calcular, enviar y dar seguimiento a propuestas comerciales y presupuestos para clientes desde cualquier computadora o dispositivo móvil, sin necesidad de instalar software complejo.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-question" type="button">
                            <span>¿Cuál es la diferencia entre un cotizador y una plantilla de cotización?</span>
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </button>
                        <div class="faq-answer">
                            <p>Una plantilla es simplemente un formato estático (como un archivo de Word o Excel) que debe llenarse a mano cada vez. Un cotizador como Cotízalo es un sistema inteligente que almacena tu catálogo de productos y clientes, genera el PDF automáticamente en segundos y te permite consultar el estatus de cada cotización en tiempo real.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-question" type="button">
                            <span>¿Puedo enviar una cotización por WhatsApp?</span>
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </button>
                        <div class="faq-answer">
                            <p>Sí, por supuesto. Cotízalo genera un enlace seguro con mensaje personalizado que abre directamente WhatsApp Web o tu aplicación de WhatsApp en el celular, permitiendo que tu prospecto revise la cotización al instante con un diseño profesional.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-question" type="button">
                            <span>¿Un cotizador sirve para pequeñas empresas?</span>
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </button>
                        <div class="faq-answer">
                            <p>Sí, es ideal para pequeñas empresas y emprendedores. Permite que un negocio pequeño proyecte la imagen y rapidez de una empresa consolidada, organizando sus ventas sin requerir un CRM complejo ni costos de mantenimiento elevados.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-question" type="button">
                            <span>¿Puedo crear cotizaciones desde el celular?</span>
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </button>
                        <div class="faq-answer">
                            <p>Sí. Toda la plataforma de Cotízalo es completamente responsiva y funciona a la perfección en el navegador de tu smartphone (iOS y Android). Puedes enviar presupuestos mientras estás en una reunión con tu cliente o supervisando un trabajo en campo.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-question" type="button">
                            <span>¿Puedo usar un cotizador sin conocimientos técnicos?</span>
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </button>
                        <div class="faq-answer">
                            <p>Totalmente. Cotízalo fue diseñado para ser tan fácil de usar como una aplicación de mensajería. Solo completas los campos requeridos, seleccionas tus artículos y el sistema se encarga del diseño, cálculos matemáticos y formato final.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-question" type="button">
                            <span>¿Cuánto cuesta usar Cotízalo?</span>
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </button>
                        <div class="faq-answer">
                            <p>Puedes empezar con una <a href="https://app.cotizalo.net/signup" style="color:#059669; font-weight:600;">prueba gratuita de 14 días</a> sin ingresar ninguna tarjeta bancaria. Posteriormente contamos con planes mensuales transparentes desde $199 MXN diseñados a la medida de tu volumen de trabajo. Conoce todos los detalles en nuestra <a href="<?php echo esc_url(home_url('/precios/')); ?>" style="color:#059669; font-weight:600;">página de precios</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 9: Comienza a usar un cotizador para tu empresa -->
        <section class="lp-section">
            <div class="container">
                <div class="bottom-cta-banner">
                    <h2>Comienza a usar un cotizador para tu empresa</h2>
                    <p>
                        Deja atrás las cotizaciones perdidas en Excel o WhatsApp. Crea tu primera cotización profesional con Cotízalo y descubre una forma más ordenada de dar seguimiento a tus ventas.
                    </p>
                    <div class="hero-ctas" style="margin-bottom:1.5rem;">
                        <a href="https://app.cotizalo.net/signup" class="btn-cta-primary" style="font-size:1.05rem; padding:1.05rem 2.25rem;">
                            <span>Empieza tu prueba gratuita</span>
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12 5 19 12 12 19"></polyline>
                            </svg>
                        </a>
                        <a href="<?php echo esc_url(home_url('/precios/')); ?>" class="btn-cta-secondary" style="font-size:1.05rem; padding:1.05rem 2rem;">
                            <span>Ver planes y precios</span>
                        </a>
                    </div>
                    <div style="font-size:0.85rem; color:rgba(255,255,255,0.75);">
                        Sin tarjeta de crédito requerida • Acceso inmediato a todas las funciones • Soporte en español
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="footer">
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
                        <li><a href="<?php echo esc_url(home_url('/cotizador/')); ?>" style="font-weight:700; color:#34d399;">Cotizador en línea</a></li>
                        <li><a href="<?php echo esc_url(home_url('/software-para-cotizaciones/')); ?>">Software para cotizaciones</a></li>
                        <li><a href="<?php echo esc_url(home_url('/seguimiento-de-cotizaciones/')); ?>">Seguimiento de cotizaciones</a></li>
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
                <p>&copy; <?php echo date('Y'); ?> Cotízalo. Todos los derechos reservados.</p>
                <div class="footer-legal">
                    <a href="<?php echo esc_url(home_url('/aviso-de-privacidad/')); ?>">Aviso de Privacidad</a>
                    <a href="<?php echo esc_url(home_url('/terminos-y-condiciones/')); ?>">Términos y Condiciones</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Accordion, Mobile Menu & Quote Calculator Script -->
    <script>
        // Interactive Quote Calculator Functions
        function formatCurrency(amount) {
            return '$' + amount.toLocaleString('es-MX', { minimumFractionDigits: 2, maximumFractionDigits: 2 }) + ' MXN';
        }

        function updateItemLimitState() {
            const rows = document.querySelectorAll('#q_tbody tr');
            const count = rows.length;
            const btnAdd = document.getElementById('btn_add_item');
            const btnText = document.getElementById('btn_add_text');
            const notice = document.getElementById('item_limit_notice');

            if (count >= 2) {
                if (btnText) btnText.textContent = 'Límite alcanzado (2/2 conceptos en demo)';
                if (btnAdd) {
                    btnAdd.style.opacity = '0.75';
                    btnAdd.style.background = '#fef3c7';
                    btnAdd.style.color = '#92400e';
                    btnAdd.style.borderColor = '#fde68a';
                }
                if (notice) notice.style.display = 'flex';
            } else {
                if (btnText) btnText.textContent = 'Agregar concepto o producto (' + count + '/2)';
                if (btnAdd) {
                    btnAdd.style.opacity = '1';
                    btnAdd.style.background = '#eff6ff';
                    btnAdd.style.color = '#2563eb';
                    btnAdd.style.borderColor = '#93c5fd';
                }
                if (notice) notice.style.display = 'none';
            }
        }

        function recalcQuote() {
            const rows = document.querySelectorAll('#q_tbody tr');
            let subtotal = 0;

            rows.forEach(row => {
                const qtyInput = row.querySelector('.q-qty');
                const priceInput = row.querySelector('.q-price');
                const subtotalSpan = row.querySelector('.q-row-subtotal');

                const qty = parseFloat(qtyInput.value) || 0;
                const price = parseFloat(priceInput.value) || 0;
                const rowTotal = qty * price;
                subtotal += rowTotal;

                if (subtotalSpan) {
                    subtotalSpan.textContent = '$' + rowTotal.toLocaleString('es-MX', { minimumFractionDigits: 2, maximumFractionDigits: 2 });
                }
            });

            const taxRate = parseFloat(document.getElementById('q_tax_rate')?.value) || 0;
            const taxAmount = subtotal * taxRate;
            const total = subtotal + taxAmount;

            const txtSubtotal = document.getElementById('txt_subtotal');
            const txtTax = document.getElementById('txt_tax');
            const lblTax = document.getElementById('lbl_tax');
            const txtTotal = document.getElementById('txt_total');

            if (txtSubtotal) txtSubtotal.textContent = formatCurrency(subtotal);
            if (lblTax) {
                if (taxRate === 0.16) lblTax.textContent = 'IVA (16%):';
                else if (taxRate === 0.08) lblTax.textContent = 'IVA (8% Frontera):';
                else lblTax.textContent = 'IVA (0% Exento):';
            }
            if (txtTax) txtTax.textContent = formatCurrency(taxAmount);
            if (txtTotal) txtTotal.textContent = formatCurrency(total);

            updateItemLimitState();
        }

        function addRow() {
            const tbody = document.getElementById('q_tbody');
            const rows = tbody.querySelectorAll('tr');

            if (rows.length >= 2) {
                const notice = document.getElementById('item_limit_notice');
                if (notice) {
                    notice.style.display = 'flex';
                    notice.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
                    notice.style.transition = 'transform 0.2s ease, box-shadow 0.2s ease';
                    notice.style.transform = 'scale(1.02)';
                    notice.style.boxShadow = '0 0 12px rgba(245, 158, 11, 0.45)';
                    setTimeout(() => {
                        notice.style.transform = 'scale(1)';
                        notice.style.boxShadow = 'none';
                    }, 500);
                }
                return;
            }

            const newRow = document.createElement('tr');
            newRow.innerHTML = `
                <td>
                    <input type="text" class="gen-input q-desc" placeholder="Nuevo concepto o servicio...">
                </td>
                <td>
                    <input type="number" class="gen-input q-qty" value="1" min="1" style="text-align:center;" oninput="recalcQuote()">
                </td>
                <td>
                    <input type="number" class="gen-input q-price" value="0" min="0" step="10" style="text-align:right;" oninput="recalcQuote()">
                </td>
                <td style="text-align:right; font-weight:700; color:#1e293b;" class="q-row-subtotal">
                    $0.00
                </td>
                <td style="text-align:center;" class="no-print">
                    <button type="button" class="btn-del-row" onclick="deleteRow(this)" title="Eliminar fila">✕</button>
                </td>
            `;
            tbody.appendChild(newRow);
            recalcQuote();
        }

        function deleteRow(btn) {
            const rows = document.querySelectorAll('#q_tbody tr');
            if (rows.length > 1) {
                btn.closest('tr').remove();
                recalcQuote();
            } else {
                alert('La cotización debe contener al menos un concepto.');
            }
        }

        function shareWhatsAppQuote() {
            const issuer = document.getElementById('q_issuer_name')?.value || 'Mi Empresa';
            const client = document.getElementById('q_client_name')?.value || 'Estimado Cliente';
            const folio = document.getElementById('q_folio')?.value || '#COT';
            const total = document.getElementById('txt_total')?.textContent || '$0.00';
            const validity = document.getElementById('q_validity')?.value || '30 días';

            const message = `Hola ${client},\n\nLe compartimos la cotización ${folio} emitida por ${issuer}.\nTotal: ${total}\nVigencia: ${validity}.\n\nPuede consultar los detalles y condiciones aquí o solicitar la formalización del pedido.\n\nGenerada con Cotízalo (https://cotizalo.net)`;
            window.open('https://api.whatsapp.com/send?text=' + encodeURIComponent(message), '_blank');
        }

        document.addEventListener('DOMContentLoaded', function () {
            // FAQ Accordion
            const faqQuestions = document.querySelectorAll('.faq-question');
            faqQuestions.forEach(btn => {
                btn.addEventListener('click', function () {
                    const item = this.closest('.faq-item');
                    const wasOpen = item.classList.contains('open');

                    // Close all
                    document.querySelectorAll('.faq-item').forEach(el => el.classList.remove('open'));

                    // Toggle clicked
                    if (!wasOpen) {
                        item.classList.add('open');
                    }
                });
            });

            // Header scroll state
            const header = document.getElementById('navbar') || document.querySelector('header.navbar');
            if (header) {
                let ticking = false;
                const updateHeader = () => {
                    header.classList.toggle('scrolled', window.scrollY > 20);
                };
                window.addEventListener('scroll', () => {
                    if (!ticking) {
                        window.requestAnimationFrame(() => {
                            updateHeader();
                            ticking = false;
                        });
                        ticking = true;
                    }
                }, { passive: true });
                updateHeader();
            }

            // Mobile menu toggle
            const mobileBtn = document.querySelector('.mobile-menu-btn');
            const navLinks = document.querySelector('.nav-links');
            if (mobileBtn && navLinks) {
                mobileBtn.addEventListener('click', function () {
                    navLinks.classList.toggle('active');
                });
            }

            // Initial calculation
            recalcQuote();
        });
    </script>

    <?php wp_footer(); ?>
</body>

</html>
