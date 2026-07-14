<?php
/**
 * Template Name: Manual de Usuario
 * Template Post Type: page
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Manual de usuario y ayuda oficial de Cotízalo. Aprende cómo configurar y utilizar todas las secciones de tu portal de cotizaciones.">
    <title>Manual de Usuario | Cotízalo</title>
    <!-- FontAwesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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
        /* Modern Stripe-like layout variables */
        :root {
            --stripe-primary: #123A2C;
            /* Pantone 303 C */
            --stripe-primary-light: rgba(18, 58, 44, 0.06);
            --stripe-primary-hover: #0d2a20;
            --stripe-border: #e2e8f0;
            --stripe-text-main: #1e293b;
            --stripe-text-muted: #64748b;
            --stripe-bg-light: #ffffff;
            --stripe-bg-alt: #f8fafc;
            --stripe-sidebar-w: 280px;
        }

        body {
            background-color: var(--stripe-bg-alt) !important;
            color: var(--stripe-text-main) !important;
        }

        .page-hero {
            padding-top: calc(var(--nav-height) + 2.5rem);
            padding-bottom: 2.5rem;
            background: linear-gradient(135deg, #123A2C 0%, #0A0E1A 100%);
            color: #ffffff;
            text-align: center;
            position: relative;
        }

        .page-hero h1 {
            color: #ffffff;
            font-weight: 700;
            font-size: clamp(2rem, 4vw, 3rem);
            margin-bottom: 0.5rem;
        }

        .page-hero p {
            color: rgba(255, 255, 255, 0.8);
            font-size: 1.1rem;
            max-width: 600px;
            margin: 0 auto;
        }

        /* 2-Column Workspace */
        .manual-workspace {
            max-width: 1400px;
            margin: 0 auto;
            padding: 2.5rem 1.5rem;
            display: grid;
            grid-template-columns: var(--stripe-sidebar-w) 1fr;
            gap: 3rem;
            align-items: start;
        }

        /* Left Sidebar Styling */
        .manual-sidebar {
            position: sticky;
            top: calc(var(--nav-height) + 2rem);
            max-height: calc(100vh - var(--nav-height) - 4rem);
            overflow-y: auto;
            padding-right: 0.5rem;
        }

        .manual-sidebar::-webkit-scrollbar {
            width: 4px;
        }

        .manual-sidebar::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 2px;
        }

        .search-container {
            position: relative;
            margin-bottom: 1.5rem;
        }

        .search-input {
            width: 100%;
            padding: 0.6rem 1rem 0.6rem 2.2rem;
            border: 1px solid var(--stripe-border);
            border-radius: 8px;
            font-size: 0.875rem;
            font-family: var(--font-main);
            background: var(--stripe-bg-light);
            color: var(--stripe-text-main);
            outline: none;
            transition: all 0.2s ease;
        }

        .search-input:focus {
            border-color: var(--stripe-primary);
            box-shadow: 0 0 0 3px rgba(18, 58, 44, 0.15);
        }

        .search-icon {
            position: absolute;
            left: 0.8rem;
            top: 50%;
            transform: translateY(-50%);
            color: var(--stripe-text-muted);
            font-size: 0.875rem;
        }

        .sidebar-section-title {
            font-size: 0.75rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            color: var(--stripe-text-muted);
            margin-bottom: 0.75rem;
            padding-left: 0.5rem;
        }

        .sidebar-menu {
            list-style: none;
            padding: 0 0 0 0.75rem;
            margin: 0.5rem 0 0 0.5rem;
            border-left: 1.5px solid var(--stripe-border);
        }

        .sidebar-menu-item {
            margin-bottom: 2px;
        }

        .sidebar-link {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            padding: 0.55rem 0.75rem;
            color: var(--stripe-text-muted);
            font-weight: 500;
            font-size: 0.9rem;
            border-radius: 6px;
            transition: all 0.2s ease;
        }

        .sidebar-link:hover {
            background: #f1f5f9;
            color: #0f172a;
        }

        .sidebar-link.active {
            background: var(--stripe-primary-light);
            color: var(--stripe-primary);
            font-weight: 600;
        }

        /* Center Content Styling */
        .content-box {
            background: var(--stripe-bg-light);
            border-radius: 12px;
            padding: 3rem;
            border: 1px solid var(--stripe-border);
            box-shadow: var(--shadow-sm);
        }

        .doc-section {
            padding-bottom: 3.5rem;
            margin-bottom: 3.5rem;
            border-bottom: 1px solid #f1f5f9;
            scroll-margin-top: calc(var(--nav-height) + 3rem);
        }

        .doc-section:last-of-type {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }

        .doc-section h2 {
            font-size: 1.75rem;
            color: var(--stripe-primary);
            font-weight: 700;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .doc-section h2 i {
            font-size: 1.4rem;
            opacity: 0.9;
        }

        .doc-section>p {
            font-size: 1.05rem;
            color: var(--stripe-text-muted);
            line-height: 1.7;
            margin-bottom: 1.5rem;
        }

        /* Premium feature lists */
        .feature-list {
            list-style: none;
            padding: 0;
            margin: 1.5rem 0;
            display: grid;
            grid-template-columns: 1fr;
            gap: 1rem;
        }

        .feature-item {
            display: flex;
            align-items: flex-start;
            gap: 1rem;
            padding: 1rem;
            background: var(--stripe-bg-alt);
            border: 1px solid var(--stripe-border);
            border-radius: 8px;
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .feature-item:hover {
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.02);
            border-color: #cbd5e1;
        }

        .feature-icon-wrapper {
            background: #ffffff;
            color: var(--stripe-primary);
            border: 1px solid var(--stripe-border);
            width: 36px;
            height: 36px;
            border-radius: 6px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.95rem;
            flex-shrink: 0;
            box-shadow: var(--shadow-sm);
        }

        .feature-text strong {
            display: block;
            font-size: 0.95rem;
            color: var(--stripe-text-main);
            margin-bottom: 0.25rem;
        }

        .feature-text p {
            font-size: 0.9rem;
            color: var(--stripe-text-muted);
            margin: 0;
            line-height: 1.5;
        }

        /* Alertas y cajas especiales */
        .info-box {
            background-color: rgba(245, 158, 11, 0.04);
            border: 1px solid rgba(245, 158, 11, 0.2);
            border-left: 4px solid #f59e0b;
            padding: 1.25rem;
            border-radius: 8px;
            margin: 1.5rem 0;
            display: flex;
            gap: 1rem;
            align-items: flex-start;
            color: #b45309;
            font-size: 0.95rem;
            line-height: 1.6;
        }

        .info-box i {
            font-size: 1.2rem;
            color: #d97706;
            margin-top: 0.1rem;
        }

        .warning-box {
            background-color: rgba(239, 68, 68, 0.03);
            border: 1px solid rgba(239, 68, 68, 0.15);
            border-left: 4px solid #ef4444;
            padding: 1.5rem;
            border-radius: 8px;
            margin: 1.5rem 0;
            color: #1e293b;
        }

        .warning-box h4 {
            color: #dc2626;
            margin-bottom: 0.5rem;
            font-size: 1.05rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .warning-box ul {
            list-style: none;
            padding: 0;
            margin: 1rem 0 0;
        }

        .warning-box li {
            position: relative;
            padding-left: 1.25rem;
            margin-bottom: 0.5rem;
            color: var(--stripe-text-muted);
            font-size: 0.9rem;
            line-height: 1.5;
        }

        .warning-box li::before {
            content: "•";
            color: #ef4444;
            font-weight: bold;
            position: absolute;
            left: 0.25rem;
            top: 0;
        }

        /* Browser Mockup Frame for Screenshots */
        .browser-mockup {
            background: #ffffff;
            border: 1px solid var(--stripe-border);
            border-radius: 8px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.04);
            overflow: hidden;
            margin: 1.5rem 0 2rem;
            max-width: 100%;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .browser-mockup:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 35px rgba(0, 0, 0, 0.07);
        }

        .browser-mockup.narrow {
            max-width: 650px;
            margin-left: auto;
            margin-right: auto;
        }

        .browser-header {
            background: #f1f5f9;
            border-bottom: 1px solid var(--stripe-border);
            padding: 0.5rem 1rem;
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .browser-dots {
            display: flex;
            gap: 0.35rem;
            flex-shrink: 0;
        }

        .browser-dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
        }

        .browser-dot.red {
            background: #ef4444;
        }

        .browser-dot.yellow {
            background: #f59e0b;
        }

        .browser-dot.green {
            background: #10b981;
        }

        .browser-url {
            background: #ffffff;
            border: 1px solid var(--stripe-border);
            border-radius: 4px;
            font-size: 0.7rem;
            color: var(--stripe-text-muted);
            padding: 0.15rem 1.5rem;
            flex-grow: 1;
            max-width: 320px;
            margin: 0 auto;
            text-align: center;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            user-select: none;
        }

        .doc-image-container {
            width: 100%;
            background: #ffffff;
            overflow: hidden;
        }

        .doc-image-container img {
            /* width: 100%; */
            height: auto;
            display: block;
            cursor: zoom-in;
        }

        /* Mockup and Feature Grids */
        .mockup-grid-2col {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1.5rem;
            margin: 1.5rem 0 2rem;
        }

        .feature-grid-2col {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
            margin-top: 1.5rem;
        }

        @media (max-width: 992px) {
            .mockup-grid-2col {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 768px) {
            .feature-grid-2col {
                grid-template-columns: 1fr;
            }
        }

        /* Steps Flow Styling for Instructions */
        .steps-flow {
            list-style: none;
            padding: 0;
            margin: 2rem 0;
        }

        .step-item {
            position: relative;
            padding-left: 3rem;
            margin-bottom: 2rem;
        }

        .step-item:last-child {
            margin-bottom: 0;
        }

        .step-number {
            position: absolute;
            left: 0;
            top: 0.15rem;
            width: 1.85rem;
            height: 1.85rem;
            background: var(--stripe-primary);
            color: #ffffff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.85rem;
            font-weight: 700;
        }

        .step-content strong {
            display: block;
            font-size: 1rem;
            color: var(--stripe-text-main);
            margin-bottom: 0.35rem;
        }

        .step-content p {
            font-size: 0.95rem;
            color: var(--stripe-text-muted);
            line-height: 1.6;
            margin: 0;
        }

        /* Lightbox Overlay for Image Zoom */
        .image-lightbox {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(10, 14, 26, 0.92);
            backdrop-filter: blur(8px);
            z-index: 9999;
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            pointer-events: none;
            transition: opacity 0.3s ease;
        }

        .image-lightbox.active {
            opacity: 1;
            pointer-events: auto;
        }

        .image-lightbox img {
            max-width: 90%;
            max-height: 85vh;
            border-radius: 8px;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.5);
            transform: scale(0.9);
            transition: transform 0.3s ease;
            cursor: zoom-out;
        }

        .image-lightbox.active img {
            transform: scale(1);
        }

        .image-lightbox-close {
            position: absolute;
            top: 2rem;
            right: 2rem;
            color: #ffffff;
            font-size: 2.5rem;
            cursor: pointer;
            opacity: 0.8;
            transition: opacity 0.2s;
            font-family: Arial, sans-serif;
            user-select: none;
        }

        .image-lightbox-close:hover {
            opacity: 1;
        }

        /* Responsive Layout styling */
        @media (max-width: 1100px) {
            .manual-workspace {
                grid-template-columns: 1fr;
                gap: 1.5rem;
            }

            .manual-sidebar {
                position: static;
                max-height: none;
                margin-bottom: 1.5rem;
            }

            .content-box {
                padding: 1.75rem;
            }
        }
    </style>
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
                <li><a href="<?php echo esc_url(home_url('/que-es-cotizalo/')); ?>" class="nav-item">¿Qué es
                        Cotízalo?</a></li>
                <li><a href="<?php echo esc_url(home_url('/')); ?>#features" class="nav-item">Características</a></li>
                <li><a href="<?php echo esc_url(home_url('/precios/')); ?>" class="nav-item">Precios</a></li>
                <li><a href="<?php echo esc_url(home_url('/manual/')); ?>" class="nav-item nav-item--active">Manual de
                        Usuario</a>
                </li>
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

    <!-- Page Hero Banner -->
    <section class="page-hero">
        <div class="container relative z-10">
            <h1>Manual de Usuario</h1>
            <p>Guía de configuración de tu portal de cotizaciones paso a paso.</p>
        </div>
    </section>

    <!-- Document Workspace -->
    <div class="manual-workspace">

        <!-- Left Sidebar Navigation -->
        <aside class="manual-sidebar">
            <div class="search-container">
                <i class="fa-solid fa-magnifying-glass search-icon"></i>
                <input type="text" id="manual-search" class="search-input" placeholder="Buscar en el manual...">
            </div>

            <div class="sidebar-section-title">Configuración</div>
            <ul class="sidebar-menu">
                <li class="sidebar-menu-item">
                    <a href="#preferencias" class="sidebar-link active" data-target="preferencias">
                        <i class="fa-solid fa-user-gear"></i> Preferencias
                    </a>
                </li>
                <li class="sidebar-menu-item">
                    <a href="#config-global" class="sidebar-link" data-target="config-global">
                        <i class="fa-solid fa-globe"></i> Configuración Global
                    </a>
                </li>
                <li class="sidebar-menu-item">
                    <a href="#plan-suscripcion" class="sidebar-link" data-target="plan-suscripcion">
                        <i class="fa-solid fa-credit-card"></i> Plan de Suscripción
                    </a>
                </li>
                <li class="sidebar-menu-item">
                    <a href="#perfiles" class="sidebar-link" data-target="perfiles">
                        <i class="fa-solid fa-id-card"></i> Perfiles de Cotización
                    </a>
                </li>
                <li class="sidebar-menu-item">
                    <a href="#plantillas" class="sidebar-link" data-target="plantillas">
                        <i class="fa-solid fa-file-lines"></i> Plantillas
                    </a>
                </li>
                <li class="sidebar-menu-item">
                    <a href="#usuarios" class="sidebar-link" data-target="usuarios">
                        <i class="fa-solid fa-users-gear"></i> Gestión de Usuarios
                    </a>
                </li>
                <li class="sidebar-menu-item">
                    <a href="#zona-peligro" class="sidebar-link" data-target="zona-peligro">
                        <i class="fa-solid fa-triangle-exclamation"></i> Zona de Peligro
                    </a>
                </li>
            </ul>
        </aside>

        <!-- Central Main Content Block -->
        <main class="content-box">

            <!-- Section: Preferencia de Usuario -->
            <section id="preferencias" class="doc-section search-target">
                <h2><i class="fa-solid fa-user-gear"></i> Preferencias de Usuario</h2>
                <p>En esta sección puedes personalizar la experiencia individual para tu usuario dentro del portal de
                    cotizaciones:</p>

                <!-- Browser Mockup -->
                <div class="browser-mockup narrow">
                    <div class="browser-header">
                        <div class="browser-dots">
                            <span class="browser-dot red"></span>
                            <span class="browser-dot yellow"></span>
                            <span class="browser-dot green"></span>
                        </div>
                        <div class="browser-url">app.cotizalo.net/settings/preferences</div>
                    </div>
                    <div class="browser-content doc-image-container">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/assets/images/settings/Preferencias_de_Usuario.png"
                            alt="Preferencias de Usuario">
                    </div>
                </div>

                <!-- Steps Flow List -->
                <ol class="steps-flow">
                    <li class="step-item">
                        <span class="step-number">1</span>
                        <div class="step-content">
                            <strong>Acceso a Preferencias</strong>
                            <p>Dirígete a la sección de <strong>Configuración</strong> en el menú lateral izquierdo de
                                tu panel y selecciona la opción **Preferencias**.</p>
                        </div>
                    </li>
                    <li class="step-item">
                        <span class="step-number">2</span>
                        <div class="step-content">
                            <strong>Seleccionar Idioma</strong>
                            <p>Elige tu idioma preferido (inglés o español) en la primera opción. Toda la interfaz del
                                panel cambiará de inmediato.</p>
                        </div>
                    </li>
                    <li class="step-item">
                        <span class="step-number">3</span>
                        <div class="step-content">
                            <strong>Configurar Zona Horaria</strong>
                            <p>Selecciona tu ciudad o zona horaria local. Esto garantiza que las fechas y horas de
                                creación y firmas en tus cotizaciones coincidan correctamente con tu horario local.</p>
                        </div>
                    </li>
                    <li class="step-item">
                        <span class="step-number">4</span>
                        <div class="step-content">
                            <strong>Definir Perfil Predeterminado</strong>
                            <p>Si manejas múltiples marcas o secuencias de cotizaciones, define aquí cuál perfil se
                                cargará por defecto de forma automática en cada cotización nueva.</p>
                        </div>
                    </li>
                    <li class="step-item">
                        <span class="step-number">5</span>
                        <div class="step-content">
                            <strong>Cambio de Contraseña</strong>
                            <p>Si necesitas actualizar tus credenciales, ingresa tu contraseña actual y la nueva
                                contraseña. Guarda los cambios para actualizar el acceso.</p>
                        </div>
                    </li>
                </ol>
            </section>

            <!-- Section: Configuración Global -->
            <section id="config-global" class="doc-section search-target">
                <h2><i class="fa-solid fa-globe"></i> Configuración Global</h2>
                <p>Configura las propiedades principales de tu negocio, las cuales se aplicarán visualmente en todas las
                    cotizaciones y PDFs generados:</p>

                <!-- Browser Mockup -->
                <div class="browser-mockup narrow">
                    <div class="browser-header">
                        <div class="browser-dots">
                            <span class="browser-dot red"></span>
                            <span class="browser-dot yellow"></span>
                            <span class="browser-dot green"></span>
                        </div>
                        <div class="browser-url">app.cotizalo.net/settings/global</div>
                    </div>
                    <div class="browser-content doc-image-container">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/assets/images/settings/Configuracion_Global.png"
                            alt="Configuración Global">
                    </div>
                </div>

                <!-- Steps Flow List -->
                <ol class="steps-flow">
                    <li class="step-item">
                        <span class="step-number">1</span>
                        <div class="step-content">
                            <strong>Completar Datos de Contacto</strong>
                            <p>Ingresa la información oficial de tu empresa: Nombre, Eslogan comercial, RFC, Teléfono,
                                Correo electrónico de soporte y URL de tu sitio web. Esta información se usará en el
                                encabezado de tus cotizaciones.</p>
                        </div>
                    </li>
                    <li class="step-item">
                        <span class="step-number">2</span>
                        <div class="step-content">
                            <strong>Subir el Logotipo Oficial</strong>
                            <p>Sube la imagen de tu logo en formato PNG o JPG. Este logotipo sustituirá de inmediato a
                                los logos genéricos en toda la plataforma y PDFs.</p>
                        </div>
                    </li>
                    <li class="step-item">
                        <span class="step-number">3</span>
                        <div class="step-content">
                            <strong>Configurar Impuestos Locales</strong>
                            <p>Define la etiqueta del impuesto (ej. IVA) y el porcentaje a cobrar (ej. 16.00%). El
                                desglose se aplicará de forma automática en cada cotización.</p>
                        </div>
                    </li>
                    <li class="step-item">
                        <span class="step-number">4</span>
                        <div class="step-content">
                            <strong>Habilitar Función Dividida (Opcional)</strong>
                            <p>Activa esta casilla si necesitas dividir los totales de tus cotizaciones por cantidad de
                                días, huéspedes o personas directamente en el formulario.</p>
                        </div>
                    </li>
                    <li class="step-item">
                        <span class="step-number">5</span>
                        <div class="step-content">
                            <strong>Habilitar Descuentos Unitarios (Opcional)</strong>
                            <p>Activa esta opción para permitir aplicar descuentos independientes a partidas o productos
                                específicos en tus cotizaciones, además del descuento general.</p>
                        </div>
                    </li>
                </ol>
            </section>

            <!-- Section: Plan de Suscripción -->
            <section id="plan-suscripcion" class="doc-section search-target">
                <h2><i class="fa-solid fa-credit-card"></i> Plan de Suscripción</h2>
                <p>Gestiona tu facturación mensual, los límites de almacenamiento en la nube y los detalles de tu
                    suscripción actual:</p>

                <!-- Browser Mockup -->
                <div class="browser-mockup">
                    <div class="browser-header">
                        <div class="browser-dots">
                            <span class="browser-dot red"></span>
                            <span class="browser-dot yellow"></span>
                            <span class="browser-dot green"></span>
                        </div>
                        <div class="browser-url">app.cotizalo.net/settings/billing</div>
                    </div>
                    <div class="browser-content doc-image-container">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/assets/images/settings/Plan_de_Suscripcion.png"
                            alt="Plan de Suscripción">
                    </div>
                </div>

                <!-- Steps Flow List -->
                <ol class="steps-flow">
                    <li class="step-item">
                        <span class="step-number">1</span>
                        <div class="step-content">
                            <strong>Verificar Estado de Suscripción</strong>
                            <p>Visualiza el estado de tu plan actual y supervisa el consumo de almacenamiento en
                                gigabytes para no exceder los límites del plan.</p>
                        </div>
                    </li>
                    <li class="step-item">
                        <span class="step-number">2</span>
                        <div class="step-content">
                            <strong>Actualizar Plan (Upgrade)</strong>
                            <p>Si deseas aumentar tus límites, haz clic en el botón de actualización para seleccionar un
                                plan mayor de forma instantánea.</p>
                        </div>
                    </li>
                    <li class="step-item">
                        <span class="step-number">3</span>
                        <div class="step-content">
                            <strong>Restricciones de Downgrade</strong>
                            <p>Recuerda que no se permiten downgrades si tus datos almacenados superan la capacidad del
                                plan inferior que deseas contratar, a fin de proteger tu información contra pérdidas
                                accidentales.</p>
                        </div>
                    </li>
                    <li class="step-item">
                        <span class="step-number">4</span>
                        <div class="step-content">
                            <strong>Administración de Pagos en Stripe</strong>
                            <p>Accede directamente al portal del cliente de Stripe de forma cifrada para añadir o editar
                                tarjetas de crédito/débito, revisar tu historial de cobros y descargar tus facturas
                                oficiales.</p>
                        </div>
                    </li>
                </ol>
            </section>

            <!-- Section: Perfiles de Cotización -->
            <section id="perfiles" class="doc-section search-target">
                <h2><i class="fa-solid fa-id-card"></i> Perfiles de Cotización</h2>
                <p>Configura múltiples perfiles operativos si gestionas marcas diferentes, diferentes divisiones de
                    negocio o tipos de clientes desde una misma cuenta corporativa:</p>

                <!-- Browser Mockup -->
                <div class="browser-mockup">
                    <div class="browser-header">
                        <div class="browser-dots">
                            <span class="browser-dot red"></span>
                            <span class="browser-dot yellow"></span>
                            <span class="browser-dot green"></span>
                        </div>
                        <div class="browser-url">app.cotizalo.net/settings/profiles</div>
                    </div>
                    <div class="browser-content doc-image-container">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/assets/images/settings/Perfiles_de_Cotizacion_1.png"
                            alt="Perfiles de Cotización - Listado">
                    </div>
                </div>

                <!-- Steps Flow List -->
                <ol class="steps-flow">
                    <li class="step-item">
                        <span class="step-number">1</span>
                        <div class="step-content">
                            <strong>Crear un Nuevo Perfil</strong>
                            <p>Haz clic en el botón de creación de perfil dentro de la pestaña para abrir el formulario
                                de configuración.</p>
                        </div>
                    </li>
                    <li class="step-item">
                        <span class="step-number">2</span>
                        <div class="step-content">
                            <strong>Establecer Identificación y Folios</strong>
                            <p>Asigna un nombre interno descriptivo y define un prefijo alfanumérico único para
                                identificar las cotizaciones de esta marca. La secuencia de folio numérico iniciará en 1
                                para este perfil de forma automática.</p>
                        </div>
                    </li>
                    <li class="step-item">
                        <span class="step-number">3</span>
                        <div class="step-content">
                            <strong>Vincular Plantillas Predeterminadas</strong>
                            <p>Selecciona los Encabezados, Pies de Página y Cláusulas Legales específicos que se
                                cargarán automáticamente al cotizar bajo este perfil operativo.</p>
                        </div>
                    </li>
                </ol>

                <!-- Browser Mockup (Configuración del Formulario) -->
                <div class="browser-mockup narrow">
                    <div class="browser-header">
                        <div class="browser-dots">
                            <span class="browser-dot red"></span>
                            <span class="browser-dot yellow"></span>
                            <span class="browser-dot green"></span>
                        </div>
                        <div class="browser-url">app.cotizalo.net/settings/profiles/new</div>
                    </div>
                    <div class="browser-content doc-image-container">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/assets/images/settings/Perfiles_de_Cotizacion_2.png"
                            alt="Perfiles de Cotización - Formulario">
                    </div>
                </div>
            </section>

            <!-- Section: Plantillas de Documentos -->
            <section id="plantillas" class="doc-section search-target">
                <h2><i class="fa-solid fa-file-lines"></i> Plantillas de Documentos</h2>
                <p>Ahorra tiempo pre-redactando cláusulas, cartas de presentación y layouts recurrentes para tus
                    presupuestos comerciales:</p>

                <!-- Browser Mockup -->
                <div class="browser-mockup">
                    <div class="browser-header">
                        <div class="browser-dots">
                            <span class="browser-dot red"></span>
                            <span class="browser-dot yellow"></span>
                            <span class="browser-dot green"></span>
                        </div>
                        <div class="browser-url">app.cotizalo.net/settings/templates</div>
                    </div>
                    <div class="browser-content doc-image-container">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/assets/images/settings/Plantillas_de_Documentos_1.png"
                            alt="Plantillas de Documentos - Listado">
                    </div>
                </div>

                <!-- Steps Flow List -->
                <ol class="steps-flow">
                    <li class="step-item">
                        <span class="step-number">1</span>
                        <div class="step-content">
                            <strong>Registrar una Nueva Plantilla</strong>
                            <p>Accede al gestor de plantillas y haz clic en crear. Selecciona el Tipo de Plantilla:
                                Encabezado (presentación), Pie de Página (agradecimientos/firmas), o Términos y
                                Condiciones (cláusulas contractuales).</p>
                        </div>
                    </li>
                    <li class="step-item">
                        <span class="step-number">2</span>
                        <div class="step-content">
                            <strong>Diseñar el Contenido</strong>
                            <p>Utiliza el editor de texto enriquecido integrado para dar formato, crear tablas
                                organizadoras, añadir alineaciones personalizadas e incrustar imágenes en el cuerpo del
                                texto.</p>
                        </div>
                    </li>
                </ol>

                <!-- Browser Mockup (Configuración del Formulario) -->
                <div class="browser-mockup narrow">
                    <div class="browser-header">
                        <div class="browser-dots">
                            <span class="browser-dot red"></span>
                            <span class="browser-dot yellow"></span>
                            <span class="browser-dot green"></span>
                        </div>
                        <div class="browser-url">app.cotizalo.net/settings/templates/new</div>
                    </div>
                    <div class="browser-content doc-image-container">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/assets/images/settings/Plantillas_de_Documentos_2.png"
                            alt="Plantillas de Documentos - Formulario">
                    </div>
                </div>
            </section>

            <!-- Section: Gestión de Usuarios -->
            <section id="usuarios" class="doc-section search-target">
                <h2><i class="fa-solid fa-users-gear"></i> Gestión de Usuarios</h2>
                <p>Administra los roles de acceso y colaboradores que forman parte de tu portal de cotizaciones:</p>

                <div class="info-box">
                    <i class="fa-solid fa-circle-info"></i>
                    <div>
                        <strong>Disponibilidad de la función:</strong> Esta herramienta de multi-usuarios está
                        habilitada de manera exclusiva para suscripciones que cuenten con el plan <strong>Empresarial
                            (Cotizalo 80 / 80GB)</strong>.
                    </div>
                </div>

                <!-- Browser Mockup -->
                <div class="browser-mockup">
                    <div class="browser-header">
                        <div class="browser-dots">
                            <span class="browser-dot red"></span>
                            <span class="browser-dot yellow"></span>
                            <span class="browser-dot green"></span>
                        </div>
                        <div class="browser-url">app.cotizalo.net/settings/users</div>
                    </div>
                    <div class="browser-content doc-image-container">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/assets/images/settings/Gestion_de_Usuarios_1.png"
                            alt="Gestión de Usuarios - Listado">
                    </div>
                </div>

                <!-- Steps Flow List -->
                <ol class="steps-flow">
                    <li class="step-item">
                        <span class="step-number">1</span>
                        <div class="step-content">
                            <strong>Invitar y Crear Colaboradores</strong>
                            <p>Registra un nuevo usuario ingresando su información básica (Nombre, Correo Electrónico y
                                una Contraseña inicial provisional).</p>
                        </div>
                    </li>
                    <li class="step-item">
                        <span class="step-number">2</span>
                        <div class="step-content">
                            <strong>Asignar Perfil de Operación</strong>
                            <p>Vincula al colaborador a uno de tus perfiles de cotización específicos. Esto limitará su
                                alcance para que solo pueda emitir presupuestos bajo la marca o entidad asignada.</p>
                        </div>
                    </li>
                </ol>

                <!-- Browser Mockup (Configuración del Formulario) -->
                <div class="browser-mockup narrow">
                    <div class="browser-header">
                        <div class="browser-dots">
                            <span class="browser-dot red"></span>
                            <span class="browser-dot yellow"></span>
                            <span class="browser-dot green"></span>
                        </div>
                        <div class="browser-url">app.cotizalo.net/settings/users/new</div>
                    </div>
                    <div class="browser-content doc-image-container">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/assets/images/settings/Gestion_de_Usuarios_2.png"
                            alt="Gestión de Usuarios - Formulario">
                    </div>
                </div>
            </section>

            <!-- Section: Zona de Peligro -->
            <section id="zona-peligro" class="doc-section search-target">
                <h2><i class="fa-solid fa-triangle-exclamation"></i> Zona de Peligro</h2>
                <p>Herramientas y acciones críticas que afectan de manera permanente tu cuenta e información
                    corporativa:</p>

                <div class="warning-box">
                    <h4><i class="fa-solid fa-triangle-exclamation"></i> Dar de Baja la Cuenta (Cancelación Definitiva)
                    </h4>
                    <p>Si decides eliminar tu cuenta del portal, la acción se ejecutará de forma inmediata e
                        irreversible. Conlleva las siguientes implicaciones:</p>
                    <ul>
                        <li>Borrado permanente y bloqueo absoluto de todos los accesos del portal.</li>
                        <li>Cancelación automática de la suscripción y cobros futuros en la pasarela Stripe.</li>
                        <li>Suspensión inmediata de los accesos de todos los colaboradores registrados en tu empresa.
                        </li>
                        <li><strong>Sin Devoluciones:</strong> No se realizarán reembolsos por períodos de facturación
                            que ya hayan transcurrido o comenzado recientemente.</li>
                    </ul>
                </div>
            </section>

        </main>

    </div>

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
                        <li><a href="<?php echo esc_url(home_url('/')); ?>#features">Características</a></li>
                        <li><a href="<?php echo esc_url(home_url('/precios/')); ?>">Precios</a></li>
                    </ul>
                </div>
                <div class="footer-links">
                    <h4>Compañía</h4>
                    <ul>
                        <li><a href="<?php echo esc_url(home_url('/que-es-cotizalo/')); ?>">¿Qué es Cotízalo?</a></li>
                        <li><a href="<?php echo esc_url(home_url('/manual/')); ?>">Manual</a></li>
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

            const mobileBtn = document.querySelector('.mobile-menu-btn');
            const navContainer = document.querySelector('.nav-container');
            if (mobileBtn && navContainer) {
                mobileBtn.addEventListener('click', () => {
                    mobileBtn.classList.toggle('open');
                    header.classList.toggle('menu-open');
                    navContainer.classList.toggle('menu-open');
                });
            }

            // -----------------------------------------------------
            // Smooth Scroll navigation
            const links = document.querySelectorAll('.sidebar-link');
            links.forEach(link => {
                link.addEventListener('click', (e) => {
                    e.preventDefault();
                    const targetId = link.getAttribute('data-target');
                    const targetEl = document.getElementById(targetId);

                    if (targetEl) {
                        const offsetPosition = targetEl.getBoundingClientRect().top + window.pageYOffset - 110;
                        window.scrollTo({
                            top: offsetPosition,
                            behavior: 'smooth'
                        });
                    }
                });
            });

            // -----------------------------------------------------
            // ScrollSpy Engine (Updates active states on scroll)
            // -----------------------------------------------------
            const sections = document.querySelectorAll('.doc-section');
            const sidebarLinks = document.querySelectorAll('.sidebar-link');

            function updateScrollSpy() {
                let currentActiveId = '';
                const scrollPos = window.scrollY + 130;

                sections.forEach(sec => {
                    if (scrollPos >= sec.offsetTop) {
                        currentActiveId = sec.getAttribute('id');
                    }
                });

                // Fallback to first if above all
                if (!currentActiveId && sections.length > 0) {
                    currentActiveId = sections[0].getAttribute('id');
                }

                if (currentActiveId) {
                    sidebarLinks.forEach(link => {
                        if (link.getAttribute('data-target') === currentActiveId) {
                            link.classList.add('active');
                        } else {
                            link.classList.remove('active');
                        }
                    });
                }
            }

            window.addEventListener('scroll', updateScrollSpy);
            updateScrollSpy(); // Initial call

            // -----------------------------------------------------
            // Search / Filter System
            // -----------------------------------------------------
            const searchInput = document.getElementById('manual-search');
            searchInput.addEventListener('input', (e) => {
                const query = e.target.value.toLowerCase().trim();
                const sectionsToFilter = document.querySelectorAll('.search-target');

                sectionsToFilter.forEach(sec => {
                    const textContent = sec.textContent.toLowerCase();
                    if (textContent.includes(query)) {
                        sec.style.display = 'block';
                    } else {
                        sec.style.display = 'none';
                    }
                });

                // Update active sidebar indicators
                sidebarLinks.forEach(link => {
                    const targetId = link.getAttribute('data-target');
                    const targetEl = document.getElementById(targetId);
                    if (targetEl && targetEl.style.display === 'none') {
                        link.style.display = 'none';
                    } else {
                        link.style.display = 'flex';
                    }
                });
            });

            // -----------------------------------------------------
            // Lightbox Zoom Engine
            // -----------------------------------------------------
            const lightbox = document.getElementById('lightbox');
            const lightboxImg = document.getElementById('lightbox-img');
            const closeBtn = document.querySelector('.image-lightbox-close');

            document.querySelectorAll('.doc-image-container img').forEach(img => {
                img.addEventListener('click', () => {
                    lightboxImg.src = img.src;
                    lightbox.classList.add('active');
                });
            });

            const closeLightbox = () => {
                lightbox.classList.remove('active');
            };

            closeBtn.addEventListener('click', closeLightbox);
            lightbox.addEventListener('click', (e) => {
                if (e.target !== lightboxImg) {
                    closeLightbox();
                }
            });
            document.addEventListener('keydown', (e) => {
                if (e.key === 'Escape') {
                    closeLightbox();
                }
            });
        });
    </script>
    <!-- Lightbox Overlay -->
    <div id="lightbox" class="image-lightbox">
        <span class="image-lightbox-close">&times;</span>
        <img id="lightbox-img" src="" alt="Zoomed Screenshot">
    </div>
    <?php wp_footer(); ?>
</body>

</html>