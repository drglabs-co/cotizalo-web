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
            --stripe-toc-w: 240px;
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

        /* 3-Column Workspace */
        .manual-workspace {
            max-width: 1400px;
            margin: 0 auto;
            padding: 2.5rem 1.5rem;
            display: grid;
            grid-template-columns: var(--stripe-sidebar-w) 1fr var(--stripe-toc-w);
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
            padding: 0;
            margin: 0;
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

        /* Right Sidebar (TOC) */
        .manual-toc {
            position: sticky;
            top: calc(var(--nav-height) + 2rem);
            max-height: calc(100vh - var(--nav-height) - 4rem);
            overflow-y: auto;
            border-left: 1px solid var(--stripe-border);
            padding-left: 1.25rem;
        }

        .toc-title {
            font-size: 0.75rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            color: var(--stripe-text-muted);
            margin-bottom: 0.75rem;
        }

        .toc-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .toc-item {
            margin-bottom: 0.5rem;
        }

        .toc-link {
            font-size: 0.85rem;
            color: var(--stripe-text-muted);
            display: block;
            transition: all 0.2s ease;
            line-height: 1.4;
        }

        .toc-link:hover {
            color: var(--stripe-primary);
        }

        .toc-link.active {
            color: var(--stripe-primary);
            font-weight: 600;
        }

        /* Sticky header overrides on scroll */
        .scrolled .manual-sidebar,
        .scrolled .manual-toc {
            top: calc(var(--nav-height) + 1.5rem);
            max-height: calc(100vh - var(--nav-height) - 3rem);
        }

        /* Responsive Layout styling */
        @media (max-width: 1200px) {
            .manual-workspace {
                grid-template-columns: var(--stripe-sidebar-w) 1fr;
                gap: 2rem;
            }

            .manual-toc {
                display: none;
            }
        }

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
                <li><a href="<?php echo esc_url(home_url('/')); ?>#how-it-works" class="nav-item">Cómo Funciona</a></li>
                <li><a href="<?php echo esc_url(home_url('/precios/')); ?>" class="nav-item">Precios</a></li>
                <li><a href="<?php echo esc_url(home_url('/manual/')); ?>" class="nav-item nav-item--active">Manual</a>
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

            <div class="sidebar-section-title">Manual de Ayuda</div>
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

                <div class="feature-list">
                    <div class="feature-item">
                        <div class="feature-icon-wrapper"><i class="fa-solid fa-language"></i></div>
                        <div class="feature-text">
                            <strong>Seleccionar Idioma</strong>
                            <p>Elige entre inglés y español para cambiar de inmediato todo el idioma visual de la
                                interfaz del panel.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon-wrapper"><i class="fa-solid fa-clock"></i></div>
                        <div class="feature-text">
                            <strong>Zona Horaria</strong>
                            <p>Configura tu zona horaria para registrar de forma precisa las horas de creación de
                                cotizaciones y firmas de clientes.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon-wrapper"><i class="fa-solid fa-star"></i></div>
                        <div class="feature-text">
                            <strong>Perfil de Cotización Predeterminado</strong>
                            <p>Si manejas múltiples perfiles de marcas, aquí puedes establecer cuál se cargará por
                                defecto al crear nuevos presupuestos.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon-wrapper"><i class="fa-solid fa-key"></i></div>
                        <div class="feature-text">
                            <strong>Cambiar Contraseña</strong>
                            <p>Actualiza de forma rápida y segura las credenciales de seguridad para tu acceso personal.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Section: Configuración Global -->
            <section id="config-global" class="doc-section search-target">
                <h2><i class="fa-solid fa-globe"></i> Configuración Global</h2>
                <p>Configura las propiedades principales de tu negocio, las cuales se aplicarán visualmente en todas las
                    cotizaciones y PDFs generados:</p>

                <div class="feature-list">
                    <div class="feature-item">
                        <div class="feature-icon-wrapper"><i class="fa-solid fa-address-book"></i></div>
                        <div class="feature-text">
                            <strong>Datos de Contacto</strong>
                            <p>Configura el Nombre Oficial de la Empresa, Eslogan corporativo, RFC, Teléfono de
                                contacto, Correo de soporte y URL de tu Sitio Web.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon-wrapper"><i class="fa-solid fa-image"></i></div>
                        <div class="feature-text">
                            <strong>Logotipo de la Empresa</strong>
                            <p>Sube tu logotipo en formato PNG o JPG. Este reemplazará automáticamente los logos
                                genéricos en la barra lateral del portal y los PDFs.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon-wrapper"><i class="fa-solid fa-percent"></i></div>
                        <div class="feature-text">
                            <strong>Impuestos Locales</strong>
                            <p>Define la etiqueta del impuesto (ej. IVA) y el porcentaje correspondiente (ej. 16.00%)
                                aplicable de manera global.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon-wrapper"><i class="fa-solid fa-calculator"></i></div>
                        <div class="feature-text">
                            <strong>Función Dividida (Grupos / Días)</strong>
                            <p>Activa esta casilla para poder dividir el monto total de la cotización entre un número
                                determinado de personas, días o huéspedes en tu plantilla.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon-wrapper"><i class="fa-solid fa-tags"></i></div>
                        <div class="feature-text">
                            <strong>Descuento Unitario</strong>
                            <p>Habilita la opción de colocar descuentos individuales a cada partida o producto de manera
                                independiente, adicional al descuento general del total.</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Section: Plan de Suscripción -->
            <section id="plan-suscripcion" class="doc-section search-target">
                <h2><i class="fa-solid fa-credit-card"></i> Plan de Suscripción</h2>
                <p>Gestiona tu facturación mensual, los límites de almacenamiento en la nube y los detalles de tu
                    suscripción actual:</p>

                <div class="feature-list">
                    <div class="feature-item">
                        <div class="feature-icon-wrapper"><i class="fa-solid fa-circle-info"></i></div>
                        <div class="feature-text">
                            <strong>Plan Activo</strong>
                            <p>Monitorea qué tipo de cuenta tienes contratada (ej. Profesional o Empresarial) y el
                                espacio de almacenamiento consumido.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon-wrapper"><i class="fa-solid fa-circle-up"></i></div>
                        <div class="feature-text">
                            <strong>Actualizar Plan (Upgrade)</strong>
                            <p>Mejora tu plan en cualquier momento para ampliar la capacidad de almacenamiento, el
                                límite de cotizaciones y desbloquear herramientas premium.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon-wrapper"><i class="fa-solid fa-lock"></i></div>
                        <div class="feature-text">
                            <strong>Restricciones de Downgrade</strong>
                            <p>Para evitar la pérdida accidental de datos e historial, no se permite cambiar a un plan
                                inferior si tu espacio actual supera los límites del plan al que deseas cambiar.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon-wrapper"><i class="fa-solid fa-receipt"></i></div>
                        <div class="feature-text">
                            <strong>Facturación de Stripe</strong>
                            <p>Accede de forma directa y segura al portal de Stripe para actualizar tus métodos de pago,
                                ver cobros y descargar tus facturas históricas.</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Section: Perfiles de Cotización -->
            <section id="perfiles" class="doc-section search-target">
                <h2><i class="fa-solid fa-id-card"></i> Perfiles de Cotización</h2>
                <p>Configura múltiples perfiles operativos si gestionas marcas diferentes, diferentes divisiones de
                    negocio o tipos de clientes desde una misma cuenta corporativa:</p>

                <div class="feature-list">
                    <div class="feature-item">
                        <div class="feature-icon-wrapper"><i class="fa-solid fa-font"></i></div>
                        <div class="feature-text">
                            <strong>Nombre e Identificación</strong>
                            <p>Establece un nombre interno único para identificar el perfil durante el desarrollo de una
                                cotización.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon-wrapper"><i class="fa-solid fa-hashtag"></i></div>
                        <div class="feature-text">
                            <strong>Prefijos y Secuencias de Folio</strong>
                            <p>Asigna un prefijo alfanumérico para tus folios. Cada perfil llevará su propio consecutivo
                                numérico independiente que se iniciará automáticamente en 1.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon-wrapper"><i class="fa-solid fa-paste"></i></div>
                        <div class="feature-text">
                            <strong>Plantillas Vinculadas</strong>
                            <p>Elige de forma predeterminada los Encabezados, Pies de Página y Cláusulas legales que
                                deberán cargarse cuando utilices este perfil.</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Section: Plantillas de Documentos -->
            <section id="plantillas" class="doc-section search-target">
                <h2><i class="fa-solid fa-file-lines"></i> Plantillas de Documentos</h2>
                <p>Ahorra tiempo pre-redactando cláusulas, cartas de presentación y layouts recurrentes para tus
                    presupuestos comerciales:</p>

                <div class="feature-list">
                    <div class="feature-item">
                        <div class="feature-icon-wrapper"><i class="fa-solid fa-folder-open"></i></div>
                        <div class="feature-text">
                            <strong>Tipos de Plantilla</strong>
                            <p>Organiza tus plantillas y textos guardados clasificándolos en Encabezados, Pies de
                                Página, o Términos y Condiciones Legales.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon-wrapper"><i class="fa-solid fa-pen-nib"></i></div>
                        <div class="feature-text">
                            <strong>Editor de Texto Enriquecido</strong>
                            <p>Usa la barra de herramientas para aplicar estilos visuales, agregar alineaciones, tablas,
                                hipervínculos, o incrustar imágenes en tus textos.</p>
                        </div>
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

                <div class="feature-list">
                    <div class="feature-item">
                        <div class="feature-icon-wrapper"><i class="fa-solid fa-user-plus"></i></div>
                        <div class="feature-text">
                            <strong>Administración Completa</strong>
                            <p>Invita colaboradores, actualiza información general, modifica contraseñas o desactiva
                                credenciales de acceso de forma inmediata.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon-wrapper"><i class="fa-solid fa-shield"></i></div>
                        <div class="feature-text">
                            <strong>Asignación de Perfil de Cotización</strong>
                            <p>Vincula a cada usuario a un perfil de cotización exclusivo para restringir o
                                predeterminar bajo qué marca pueden realizar presupuestos.</p>
                        </div>
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

        <!-- Right Table of Contents (TOC) -->
        <aside class="manual-toc">
            <div class="toc-title">En esta página</div>
            <ul class="toc-list">
                <li class="toc-item"><a href="#preferencias" class="toc-link active"
                        data-target="preferencias">Preferencias</a></li>
                <li class="toc-item"><a href="#config-global" class="toc-link" data-target="config-global">Configuración
                        Global</a></li>
                <li class="toc-item"><a href="#plan-suscripcion" class="toc-link" data-target="plan-suscripcion">Plan de
                        Suscripción</a></li>
                <li class="toc-item"><a href="#perfiles" class="toc-link" data-target="perfiles">Perfiles de
                        Cotización</a></li>
                <li class="toc-item"><a href="#plantillas" class="toc-link" data-target="plantillas">Plantillas</a></li>
                <li class="toc-item"><a href="#usuarios" class="toc-link" data-target="usuarios">Gestión de Usuarios</a>
                </li>
                <li class="toc-item"><a href="#zona-peligro" class="toc-link" data-target="zona-peligro">Zona de
                        Peligro</a></li>
            </ul>
        </aside>

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
            // -----------------------------------------------------
            const links = document.querySelectorAll('.sidebar-link, .toc-link');
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
            const tocLinks = document.querySelectorAll('.toc-link');

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

                    tocLinks.forEach(link => {
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
        });
    </script>
    <?php wp_footer(); ?>
</body>

</html>