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
            --nav-height: 80px;
        }

        html, body {
            overflow-x: clip !important;
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
            margin-top: 1.5rem;
            margin-bottom: 0.5rem;
            padding: 0.35rem 0.5rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            cursor: pointer;
            user-select: none;
            border-radius: 6px;
            transition: background-color 0.2s ease, color 0.2s ease;
        }

        .sidebar-section-title:hover {
            background-color: var(--stripe-primary-light);
            color: var(--stripe-primary);
        }

        .sidebar-section-title .toggle-icon {
            font-size: 0.7rem;
            transition: transform 0.3s ease;
            color: var(--stripe-text-muted);
        }

        .sidebar-section-title.collapsed .toggle-icon {
            transform: rotate(-90deg);
        }

        .sidebar-menu {
            list-style: none;
            padding: 0 0 0 0.75rem;
            margin: 0 0 0 0.5rem;
            border-left: 1.5px solid var(--stripe-border);
            transition: max-height 0.35s cubic-bezier(0.4, 0, 0.2, 1), opacity 0.2s ease, margin-bottom 0.35s ease;
            max-height: 800px;
            overflow: hidden;
            opacity: 1;
        }

        .sidebar-menu.collapsed {
            max-height: 0;
            opacity: 0;
            margin-bottom: 0;
            pointer-events: none;
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
            max-width: 100%;
            height: auto;
            display: block;
            margin: 0 auto;
            cursor: zoom-in;
        }

        /* Mockup and Feature Grids */
        .mockup-grid-2col {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1.5rem;
            margin: 1.5rem 0 2rem;
            align-items: start;
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

        .step-content>strong {
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
        .mobile-sidebar-toggle {
            display: none;
            position: fixed;
            bottom: 2rem;
            right: 1.5rem;
            background: var(--stripe-primary);
            color: #ffffff;
            border: none;
            border-radius: 50px;
            padding: 0.75rem 1.25rem;
            font-size: 0.9rem;
            font-weight: 600;
            box-shadow: 0 4px 15px rgba(18, 58, 44, 0.3);
            z-index: 998;
            cursor: pointer;
            align-items: center;
            gap: 8px;
            transition: transform 0.2s, background-color 0.2s;
        }

        .mobile-sidebar-toggle:hover {
            background-color: var(--stripe-primary-hover);
            transform: scale(1.05);
        }

        .sidebar-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            background: rgba(10, 14, 26, 0.4);
            backdrop-filter: blur(2px);
            z-index: 999;
            display: none;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .sidebar-overlay.active {
            display: block;
            opacity: 1;
        }

        @media (max-width: 768px) {
            .manual-workspace {
                grid-template-columns: 1fr;
                gap: 1.5rem;
            }

            .manual-sidebar {
                position: fixed;
                top: 0;
                left: -300px;
                width: 280px;
                height: 100vh;
                background: #ffffff;
                box-shadow: 4px 0 25px rgba(0, 0, 0, 0.15);
                z-index: 1000;
                transition: left 0.3s cubic-bezier(0.4, 0, 0.2, 1);
                padding: 2rem 1.5rem;
                overflow-y: auto;
                max-height: none;
            }

            .manual-sidebar.open {
                left: 0;
            }

            .content-box {
                padding: 1.5rem;
            }

            .mobile-sidebar-toggle {
                display: flex;
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

            <div class="sidebar-section-title">Cotizaciones</div>
            <ul class="sidebar-menu">
                <li class="sidebar-menu-item">
                    <a href="#agregar-cotizacion" class="sidebar-link active" data-target="agregar-cotizacion">
                        <i class="fa-solid fa-plus"></i> Agregar Cotización
                    </a>
                </li>
                <li class="sidebar-menu-item">
                    <a href="#editar-cotizacion" class="sidebar-link" data-target="editar-cotizacion">
                        <i class="fa-solid fa-pen-to-square"></i> Editar Cotización
                    </a>
                </li>
                <li class="sidebar-menu-item">
                    <a href="#aprobar-cotizacion" class="sidebar-link" data-target="aprobar-cotizacion">
                        <i class="fa-solid fa-square-check"></i> Aprobar y Gestionar
                    </a>
                </li>
                <li class="sidebar-menu-item">
                    <a href="#eliminar-cotizacion" class="sidebar-link" data-target="eliminar-cotizacion">
                        <i class="fa-solid fa-trash-can"></i> Eliminar Cotización
                    </a>
                </li>
            </ul>

            <div class="sidebar-section-title">Recibos</div>
            <ul class="sidebar-menu">
                <li class="sidebar-menu-item">
                    <a href="#agregar-recibo" class="sidebar-link" data-target="agregar-recibo">
                        <i class="fa-solid fa-plus"></i> Agregar Recibo
                    </a>
                </li>
                <li class="sidebar-menu-item">
                    <a href="#editar-recibo" class="sidebar-link" data-target="editar-recibo">
                        <i class="fa-solid fa-pen-to-square"></i> Editar Recibo
                    </a>
                </li>
                <li class="sidebar-menu-item">
                    <a href="#eliminar-recibo" class="sidebar-link" data-target="eliminar-recibo">
                        <i class="fa-solid fa-trash-can"></i> Eliminar Recibo
                    </a>
                </li>
            </ul>

            <div class="sidebar-section-title">Clientes</div>
            <ul class="sidebar-menu">
                <li class="sidebar-menu-item">
                    <a href="#agregar-cliente" class="sidebar-link" data-target="agregar-cliente">
                        <i class="fa-solid fa-plus"></i> Agregar Cliente
                    </a>
                </li>
                <li class="sidebar-menu-item">
                    <a href="#editar-cliente" class="sidebar-link" data-target="editar-cliente">
                        <i class="fa-solid fa-pen-to-square"></i> Editar Cliente
                    </a>
                </li>
                <li class="sidebar-menu-item">
                    <a href="#eliminar-cliente" class="sidebar-link" data-target="eliminar-cliente">
                        <i class="fa-solid fa-trash-can"></i> Eliminar Cliente
                    </a>
                </li>
            </ul>

            <div class="sidebar-section-title">Categorías</div>
            <ul class="sidebar-menu">
                <li class="sidebar-menu-item">
                    <a href="#agregar-categoria" class="sidebar-link" data-target="agregar-categoria">
                        <i class="fa-solid fa-plus"></i> Agregar Categoría
                    </a>
                </li>
                <li class="sidebar-menu-item">
                    <a href="#editar-categoria" class="sidebar-link" data-target="editar-categoria">
                        <i class="fa-solid fa-pen-to-square"></i> Editar Categoría
                    </a>
                </li>
                <li class="sidebar-menu-item">
                    <a href="#eliminar-categoria" class="sidebar-link" data-target="eliminar-categoria">
                        <i class="fa-solid fa-trash-can"></i> Eliminar Categoría
                    </a>
                </li>
            </ul>

            <div class="sidebar-section-title">Productos</div>
            <ul class="sidebar-menu">
                <li class="sidebar-menu-item">
                    <a href="#agregar-producto" class="sidebar-link" data-target="agregar-producto">
                        <i class="fa-solid fa-plus"></i> Agregar Producto
                    </a>
                </li>
                <li class="sidebar-menu-item">
                    <a href="#editar-producto" class="sidebar-link" data-target="editar-producto">
                        <i class="fa-solid fa-pen-to-square"></i> Editar Producto
                    </a>
                </li>
                <li class="sidebar-menu-item">
                    <a href="#importar-productos" class="sidebar-link" data-target="importar-productos">
                        <i class="fa-solid fa-file-import"></i> Importar Productos
                    </a>
                </li>
                <li class="sidebar-menu-item">
                    <a href="#eliminar-producto" class="sidebar-link" data-target="eliminar-producto">
                        <i class="fa-solid fa-trash-can"></i> Eliminar Producto
                    </a>
                </li>
            </ul>

            <div class="sidebar-section-title">Unidades</div>
            <ul class="sidebar-menu">
                <li class="sidebar-menu-item">
                    <a href="#agregar-unidad" class="sidebar-link" data-target="agregar-unidad">
                        <i class="fa-solid fa-plus"></i> Agregar Unidad
                    </a>
                </li>
                <li class="sidebar-menu-item">
                    <a href="#editar-unidad" class="sidebar-link" data-target="editar-unidad">
                        <i class="fa-solid fa-pen-to-square"></i> Editar Unidad
                    </a>
                </li>
                <li class="sidebar-menu-item">
                    <a href="#eliminar-unidad" class="sidebar-link" data-target="eliminar-unidad">
                        <i class="fa-solid fa-trash-can"></i> Eliminar Unidad
                    </a>
                </li>
            </ul>

            <div class="sidebar-section-title">Configuración</div>
            <ul class="sidebar-menu">
                <li class="sidebar-menu-item">
                    <a href="#preferencias" class="sidebar-link" data-target="preferencias">
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

            <!-- Section: Agregar Cotización -->
            <section id="agregar-cotizacion" class="doc-section search-target">
                <h2><i class="fa-solid fa-plus"></i> Agregar Cotización</h2>
                <p>Crea propuestas y cotizaciones personalizadas para tus clientes detallando los productos, servicios, precios y condiciones comerciales:</p>

                <!-- Browser Mockup (Listado Principal) -->
                <div class="browser-mockup">
                    <div class="browser-header">
                        <div class="browser-dots">
                            <span class="browser-dot red"></span>
                            <span class="browser-dot yellow"></span>
                            <span class="browser-dot green"></span>
                        </div>
                        <div class="browser-url">app.cotizalo.net/quotations</div>
                    </div>
                    <div class="browser-content doc-image-container">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/assets/images/quotations/Cotizaciones.png"
                            alt="Listado de Cotizaciones">
                    </div>
                </div>

                <div style="margin-top: 2rem;">
                    <ol class="steps-flow">
                        <li class="step-item">
                            <span class="step-number">1</span>
                            <div class="step-content">
                                <strong>Abrir Formulario de Creación</strong>
                                <p>Haz clic en el botón <strong style="display: inline;">Crear Cotización</strong> ubicado en la esquina superior derecha del listado.</p>
                            </div>
                        </li>
                        <li class="step-item">
                            <span class="step-number">2</span>
                            <div class="step-content">
                                <strong>Seleccionar o Registrar Cliente</strong>
                                <p>Escribe el nombre del cliente en el campo de búsqueda. Si es un cliente nuevo, haz clic en la opción <strong style="display: inline;">+ Nuevo Cliente</strong> dentro de los resultados para darlo de alta rápidamente.</p>
                            </div>
                        </li>
                    </ol>

                    <!-- Registro de Cliente Rápido -->
                    <div class="browser-mockup">
                        <div class="browser-header">
                            <div class="browser-dots">
                                <span class="browser-dot red"></span>
                                <span class="browser-dot yellow"></span>
                                <span class="browser-dot green"></span>
                            </div>
                            <div class="browser-url">Buscador: Cliente Nuevo</div>
                        </div>
                        <div class="browser-content doc-image-container">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/assets/images/quotations/Crear_Cotizacion_Nuevo_Cliente.png"
                                alt="Opción de Cliente Nuevo en Cotización">
                        </div>
                    </div>

                    <div class="browser-mockup narrow" style="margin-top: 1.5rem;">
                        <div class="browser-header">
                            <div class="browser-dots">
                                <span class="browser-dot red"></span>
                                <span class="browser-dot yellow"></span>
                                <span class="browser-dot green"></span>
                            </div>
                            <div class="browser-url">Modal: Cliente Nuevo Rápido</div>
                        </div>
                        <div class="browser-content doc-image-container">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/assets/images/quotations/Crear_Cotizacion_Nuevo_Cliente_1.png"
                                alt="Modal de Cliente Nuevo Rápido en Cotización">
                        </div>
                    </div>

                    <ol class="steps-flow" style="margin-top: 1.5rem;">
                        <li class="step-item">
                            <span class="step-number">3</span>
                            <div class="step-content">
                                <strong>Configurar Detalles Generales</strong>
                                <p>Selecciona el perfil de cotización (Folio/Prefijo), asigna un título o concepto de referencia, fecha de vencimiento y selecciona una plantilla predeterminada de encabezado o pie de página.</p>
                            </div>
                        </li>
                        <li class="step-item">
                            <span class="step-number">4</span>
                            <div class="step-content">
                                <strong>Agregar Conceptos y Productos</strong>
                                <p>Busca los productos o servicios en tu catálogo e indica las cantidades. Si requieres añadir un producto o servicio no catalogado, haz clic en <strong style="display: inline;">+ Nuevo Producto</strong> en el buscador para crearlo rápidamente al vuelo.</p>
                            </div>
                        </li>
                    </ol>

                    <!-- Registro de Producto Rápido -->
                    <div class="browser-mockup">
                        <div class="browser-header">
                            <div class="browser-dots">
                                <span class="browser-dot red"></span>
                                <span class="browser-dot yellow"></span>
                                <span class="browser-dot green"></span>
                            </div>
                            <div class="browser-url">Buscador: Producto Nuevo</div>
                        </div>
                        <div class="browser-content doc-image-container">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/assets/images/quotations/Crear_Cotizacion_Nuevo_Producto.png"
                                alt="Opción de Producto Nuevo en Cotización">
                        </div>
                    </div>

                    <div class="browser-mockup narrow" style="margin-top: 1.5rem;">
                        <div class="browser-header">
                            <div class="browser-dots">
                                <span class="browser-dot red"></span>
                                <span class="browser-dot yellow"></span>
                                <span class="browser-dot green"></span>
                            </div>
                            <div class="browser-url">Modal: Producto Rápido</div>
                        </div>
                        <div class="browser-content doc-image-container">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/assets/images/quotations/Crear_Cotizacion_Nuevo_Producto_1.png"
                                alt="Modal de Producto Rápido en Cotización">
                        </div>
                    </div>

                    <ol class="steps-flow" style="margin-top: 1.5rem;">
                        <li class="step-item">
                            <span class="step-number">5</span>
                            <div class="step-content">
                                <strong>Aplicar Descuentos</strong>
                                <p>Si necesitas otorgar condiciones especiales, puedes aplicar un descuento global al final del listado de partidas. Este descuento se puede definir en <strong>Porcentaje (%)</strong> o en <strong>Cantidad Fija ($)</strong> de dinero.</p>
                            </div>
                        </li>
                    </ol>

                    <!-- Browser Mockup (Descuentos y Recibos) -->
                    <div class="browser-mockup narrow">
                        <div class="browser-header">
                            <div class="browser-dots">
                                <span class="browser-dot red"></span>
                                <span class="browser-dot yellow"></span>
                                <span class="browser-dot green"></span>
                            </div>
                            <div class="browser-url">Formulario: Descuentos y Saldo</div>
                        </div>
                        <div class="browser-content doc-image-container">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/assets/images/quotations/Descuento_Cotizacion.png"
                                alt="Sección de Descuento y Anticipo Vinculado">
                        </div>
                    </div>

                    <ol class="steps-flow" style="margin-top: 1.5rem;">
                        <li class="step-item">
                            <span class="step-number">6</span>
                            <div class="step-content">
                                <strong>Guardar y Registrar Cotización</strong>
                                <p>Haz clic en el botón <strong style="display: inline;">Crear Cotización</strong> para registrar la propuesta en tu portal de ventas.</p>
                            </div>
                        </li>
                    </ol>

                    <!-- Browser Mockup (Formulario Completo) -->
                    <div class="browser-mockup">
                        <div class="browser-header">
                            <div class="browser-dots">
                                <span class="browser-dot red"></span>
                                <span class="browser-dot yellow"></span>
                                <span class="browser-dot green"></span>
                            </div>
                            <div class="browser-url">app.cotizalo.net/quotations/new</div>
                        </div>
                        <div class="browser-content doc-image-container">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/assets/images/quotations/Crear_Cotizacion.png"
                                alt="Formulario de Nueva Cotización">
                        </div>
                    </div>
                </div>
            </section>

            <!-- Section: Editar Cotización -->
            <section id="editar-cotizacion" class="doc-section search-target">
                <h2><i class="fa-solid fa-pen-to-square"></i> Editar Cotización</h2>
                <p>Actualiza conceptos, montos, plazos o el cliente asociado de tus propuestas comerciales activas:</p>

                <div style="margin-top: 2rem;">
                    <ol class="steps-flow">
                        <li class="step-item">
                            <span class="step-number">1</span>
                            <div class="step-content">
                                <strong>Seleccionar Editar</strong>
                                <p>Despliega el menú de <strong style="display: inline;">Acciones</strong> de la cotización que deseas modificar en la lista y haz clic en <strong style="display: inline;">Editar</strong>.</p>
                            </div>
                        </li>
                        <li class="step-item">
                            <span class="step-number">2</span>
                            <div class="step-content">
                                <strong>Modificar los Datos</strong>
                                <p>Realiza los ajustes requeridos en los conceptos, descuentos o plazos directamente en el formulario.Asimismo, puedes vincular un recibo de anticipo existente de ese cliente para que se refleje y reste del saldo total de la cotización.</p>
                            </div>
                        </li>
                        <li class="step-item">
                            <span class="step-number">3</span>
                            <div class="step-content">
                                <strong>Guardar Cambios</strong>
                                <p>Haz clic en <strong style="display: inline;">Guardar Cambios</strong> para registrar la información actualizada.</p>
                            </div>
                        </li>
                    </ol>

                    <!-- Browser Mockup (Editar Cotización) -->
                    <div class="browser-mockup">
                        <div class="browser-header">
                            <div class="browser-dots">
                                <span class="browser-dot red"></span>
                                <span class="browser-dot yellow"></span>
                                <span class="browser-dot green"></span>
                            </div>
                            <div class="browser-url">app.cotizalo.net/quotations/edit</div>
                        </div>
                        <div class="browser-content doc-image-container">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/assets/images/quotations/Editar_Cotizacion.png"
                                alt="Editar Cotización Formulario">
                        </div>
                    </div>
                </div>
            </section>

            <!-- Section: Aprobar y Gestionar Cotizaciones -->
            <section id="aprobar-cotizacion" class="doc-section search-target">
                <h2><i class="fa-solid fa-square-check"></i> Aprobar y Gestionar Cotizaciones</h2>
                <p>Administra los ciclos de vida de tus cotizaciones, compártelas con tus clientes y mantén el control de su estatus operativo:</p>

                <!-- Sub-sección: Galería de Acciones -->
                <div style="margin-top: 2rem;">
                    <h3>Galería de Acciones Disponibles</h3>
                    <p>En el menú desplegable de <strong style="display: inline;">Acciones <i class="fas fa-caret-down"></i></strong> de cada fila en el listado, dispones de opciones completas para gestionar y compartir tu propuesta:</p>

                    <div class="mockup-grid-2col" style="align-items: center;">
                        <div>
                            <ul class="feature-list">
                                <li class="feature-item">
                                    <div class="feature-icon-wrapper"><i class="fa-solid fa-eye"></i></div>
                                    <div class="feature-text">
                                        <strong>Visualizar PDF</strong>
                                        <p>Genera y visualiza la cotización en formato de impresión PDF oficial listo para su descarga.</p>
                                    </div>
                                </li>
                                <li class="feature-item">
                                    <div class="feature-icon-wrapper"><i class="fa-solid fa-link"></i></div>
                                    <div class="feature-text">
                                        <strong>Link de Aprobación</strong>
                                        <p>Copia el enlace único de la propuesta para compartirlo con tu cliente y permitirle aceptarla en línea de forma interactiva.</p>
                                    </div>
                                </li>
                                <li class="feature-item">
                                    <div class="feature-icon-wrapper"><i class="fa-brands fa-whatsapp"></i></div>
                                    <div class="feature-text">
                                        <strong>Compartir por WhatsApp</strong>
                                        <p>Abre WhatsApp directamente con un mensaje pre-redactado y el enlace de la cotización para tu cliente.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="browser-mockup narrow">
                            <div class="browser-header">
                                <div class="browser-dots">
                                    <span class="browser-dot red"></span>
                                    <span class="browser-dot yellow"></span>
                                    <span class="browser-dot green"></span>
                                </div>
                                <div class="browser-url">Menú: Acciones de Cotización</div>
                            </div>
                            <div class="browser-content doc-image-container">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/assets/images/quotations/Menu_Acciones_Cotizacion.png"
                                    alt="Menú de Acciones de Cotización">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sub-sección: Agendar en Calendario -->
                <div style="margin-top: 3rem; border-top: 1px dashed var(--stripe-border); padding-top: 2rem;">
                    <h3>Integración y Agenda en Calendarios</h3>
                    <p>Desde el mismo menú de acciones, puedes programar la cotización en tus plataformas de calendario preferidas (Google Calendar, Outlook, Office 365, Yahoo, Apple Calendar o descarga de archivo ICS) para agendar la fecha de surtido de los productos o servicios:</p>

                    <div class="mockup-grid-2col" style="align-items: center;">
                        <div class="browser-mockup narrow">
                            <div class="browser-header">
                                <div class="browser-dots">
                                    <span class="browser-dot red"></span>
                                    <span class="browser-dot yellow"></span>
                                    <span class="browser-dot green"></span>
                                </div>
                                <div class="browser-url">Acciones: Agregar a Calendario</div>
                            </div>
                            <div class="browser-content doc-image-container">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/assets/images/quotations/Menu_Acciones_Cotizacion_Calendario.png"
                                    alt="Opciones de Calendario en Cotización">
                            </div>
                        </div>
                        <div>
                            <div class="info-box">
                                <i class="fa-solid fa-calendar-days"></i>
                                <div>
                                    <strong>Planificación Sencilla:</strong> Al agendar la cotización, se pre-cargan los datos clave de la cotización (como el folio y el cliente) en el evento del calendario para que tu equipo esté coordinado.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sub-sección: Estados de la Cotización -->
                <div style="margin-top: 3rem; border-top: 1px dashed var(--stripe-border); padding-top: 2rem;">
                    <h3>Estados y Flujo de Aprobación</h3>
                    <p>Las cotizaciones cambian de estado de acuerdo a su progreso operativo:</p>
                    
                    <div class="mockup-grid-2col" style="align-items: center;">
                        <div>
                            <ul class="feature-list">
                                <li class="feature-item">
                                    <div class="feature-icon-wrapper"><i class="fa-solid fa-clock" style="color: #f59e0b;"></i></div>
                                    <div class="feature-text">
                                        <strong>Pendiente</strong>
                                        <p>La propuesta ha sido creada y enviada, pero está a la espera de respuesta del cliente.</p>
                                    </div>
                                </li>
                                <li class="feature-item">
                                    <div class="feature-icon-wrapper"><i class="fa-solid fa-circle-check" style="color: #28a745;"></i></div>
                                    <div class="feature-text">
                                        <strong>Aceptada (Aprobada)</strong>
                                        <p>Cuando el cliente firma en línea, el estado cambia automáticamente a <strong style="color: #28a745;">ACEPTADA</strong>. La fila se marca con una palomita verde, bloqueando la posibilidad de volver a aprobarla o modificar su aceptación.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="browser-mockup narrow">
                            <div class="browser-header">
                                <div class="browser-dots">
                                    <span class="browser-dot red"></span>
                                    <span class="browser-dot yellow"></span>
                                    <span class="browser-dot green"></span>
                                </div>
                                <div class="browser-url">Estado de la Cotización</div>
                            </div>
                            <div class="browser-content doc-image-container">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/assets/images/quotations/Estado_Cotizacion.png"
                                    alt="Estados de la Cotización en Listado">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sub-sección: Firma Digital del Cliente y Metadata en PDF -->
                <div style="margin-top: 3rem; border-top: 1px dashed var(--stripe-border); padding-top: 2rem;">
                    <h3>Portal de Aprobación del Cliente y Metadata de Aceptación</h3>
                    <p>Cuando compartes el enlace de aprobación con tu cliente, este accede a una interfaz dedicada donde puede revisar la propuesta, escribir su nombre, correo y firmar de manera digital directamente en pantalla:</p>

                    <div class="browser-mockup narrow">
                        <div class="browser-header">
                            <div class="browser-dots">
                                <span class="browser-dot red"></span>
                                <span class="browser-dot yellow"></span>
                                <span class="browser-dot green"></span>
                            </div>
                            <div class="browser-url">Portal del Cliente: Aprobación de Propuesta</div>
                        </div>
                        <div class="browser-content doc-image-container">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/assets/images/quotations/Aprovacion_Cotizacion.png"
                                alt="Portal de Aprobación de Cotización">
                        </div>
                    </div>

                    <h4 style="margin-top: 2.5rem;">Visualización de PDF y Registro de Seguridad</h4>
                    <p>El PDF de la cotización cambia de acuerdo con su estatus de aprobación:</p>

                    <div class="mockup-grid-2col">
                        <div class="browser-mockup narrow">
                            <div class="browser-header">
                                <div class="browser-dots">
                                    <span class="browser-dot red"></span>
                                    <span class="browser-dot yellow"></span>
                                    <span class="browser-dot green"></span>
                                </div>
                                <div class="browser-url">PDF: Sin Aprobar (Pendiente)</div>
                            </div>
                            <div class="browser-content doc-image-container">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/assets/images/quotations/Vista_PDF.png"
                                    alt="Vista PDF de Cotización Pendiente">
                            </div>
                        </div>

                        <div class="browser-mockup narrow">
                            <div class="browser-header">
                                <div class="browser-dots">
                                    <span class="browser-dot red"></span>
                                    <span class="browser-dot yellow"></span>
                                    <span class="browser-dot green"></span>
                                </div>
                                <div class="browser-url">PDF: Aprobada (Metadata)</div>
                            </div>
                            <div class="browser-content doc-image-container">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/assets/images/quotations/Vista_PDF_Aprobada.png"
                                    alt="Vista PDF de Cotización Aprobada con Firma y Metadatos">
                            </div>
                        </div>
                    </div>

                    <div class="info-box">
                        <i class="fa-solid fa-shield-halved"></i>
                        <div>
                            <strong>Metadatos de Aceptación:</strong> En las cotizaciones aceptadas, el visor PDF integra automáticamente un recuadro de seguridad al pie del documento. Este incluye: la <strong>Firma Digital</strong> del cliente, <strong>Fecha y Hora</strong> exacta de aceptación, <strong>Dirección IP</strong> de conexión, y los <strong>Nombres/Correos</strong> registrados en la aprobación en línea.
                        </div>
                    </div>
                </div>
            </section>

            <!-- Section: Eliminar Cotización -->
            <section id="eliminar-cotizacion" class="doc-section search-target">
                <h2><i class="fa-solid fa-trash-can"></i> Eliminar Cotización</h2>
                <p>Retira de forma permanente propuestas comerciales creadas por error:</p>

                <div style="margin-top: 2rem;">
                    <ol class="steps-flow">
                        <li class="step-item">
                            <span class="step-number">1</span>
                            <div class="step-content">
                                <strong>Seleccionar Eliminar</strong>
                                <p>Identifica la propuesta en la lista principal, despliega el menú de <strong style="display: inline;">Acciones</strong> de su fila y haz clic en <strong style="display: inline;">Eliminar</strong>.</p>
                            </div>
                        </li>
                        <li class="step-item">
                            <span class="step-number">2</span>
                            <div class="step-content">
                                <strong>Confirmar la Acción</strong>
                                <p>En el cuadro de confirmación, presiona el botón <strong style="display: inline;">Confirmar</strong> para retirar permanentemente el folio de tu catálogo.</p>
                            </div>
                        </li>
                    </ol>

                    <!-- Browser Mockup (Eliminar Confirmación) -->
                    <div class="browser-mockup narrow" style="margin-top: 1.5rem;">
                        <div class="browser-header">
                            <div class="browser-dots">
                                <span class="browser-dot red"></span>
                                <span class="browser-dot yellow"></span>
                                <span class="browser-dot green"></span>
                            </div>
                            <div class="browser-url">Confirmación de Eliminación</div>
                        </div>
                        <div class="browser-content doc-image-container">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/assets/images/quotations/Eliminar_Cotizacion.png"
                                alt="Eliminar Cotización Confirmación">
                        </div>
                    </div>
                </div>
            </section>

            <!-- Section: Agregar Recibo -->
            <section id="agregar-recibo" class="doc-section search-target">
                <h2><i class="fa-solid fa-plus"></i> Agregar Recibo de Anticipo</h2>
                <p>Registra los pagos por adelantado o anticipos recibidos de tus clientes, vinculándolos a una cotización específica o de forma independiente:</p>

                <!-- Browser Mockup (Listado Principal) -->
                <div class="browser-mockup">
                    <div class="browser-header">
                        <div class="browser-dots">
                            <span class="browser-dot red"></span>
                            <span class="browser-dot yellow"></span>
                            <span class="browser-dot green"></span>
                        </div>
                        <div class="browser-url">app.cotizalo.net/receipts</div>
                    </div>
                    <div class="browser-content doc-image-container">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/assets/images/receipts/Recibos.png"
                            alt="Listado de Recibos">
                    </div>
                </div>

                <div style="margin-top: 2rem;">
                    <ol class="steps-flow">
                        <li class="step-item">
                            <span class="step-number">1</span>
                            <div class="step-content">
                                <strong>Iniciar la Creación</strong>
                                <p>Haz clic en el botón <strong style="display: inline;">Crear Recibo</strong> en la parte superior derecha de la sección para acceder al formulario.</p>
                            </div>
                        </li>
                        <li class="step-item">
                            <span class="step-number">2</span>
                            <div class="step-content">
                                <strong>Seleccionar o Crear un Cliente</strong>
                                <p>Escribe el nombre del cliente en el buscador. Si el cliente no existe aún, haz clic en la opción <strong style="display: inline;">+ Nuevo Cliente</strong> dentro de los resultados para abrir el formulario rápido de registro.</p>
                            </div>
                        </li>
                    </ol>

                    <!-- Grid de Registro de Cliente Rápido -->
                    <div class="mockup-grid-2col">
                        <div class="browser-mockup narrow">
                            <div class="browser-header">
                                <div class="browser-dots">
                                    <span class="browser-dot red"></span>
                                    <span class="browser-dot yellow"></span>
                                    <span class="browser-dot green"></span>
                                </div>
                                <div class="browser-url">Buscador: Cliente Nuevo</div>
                            </div>
                            <div class="browser-content doc-image-container">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/assets/images/receipts/Agregar_Cliente_Recibo.png"
                                    alt="Opción de Cliente Nuevo en Buscador">
                            </div>
                        </div>

                        <div class="browser-mockup narrow">
                            <div class="browser-header">
                                <div class="browser-dots">
                                    <span class="browser-dot red"></span>
                                    <span class="browser-dot yellow"></span>
                                    <span class="browser-dot green"></span>
                                </div>
                                <div class="browser-url">Modal: Registro de Cliente Rápido</div>
                            </div>
                            <div class="browser-content doc-image-container">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/assets/images/receipts/Agregar_Cliente_Recibo_2.png"
                                    alt="Modal de Cliente Rápido">
                            </div>
                        </div>
                    </div>

                    <ol class="steps-flow">
                        <li class="step-item">
                            <span class="step-number">3</span>
                            <div class="step-content">
                                <strong>Seleccionar plantilla de encabezado</strong>
                                <p>Selecciona la plantilla de encabezado que deseas utilizar para el recibo.</p>
                            </div>
                        </li>
                    </ol>
                    <ol class="steps-flow" style="margin-top: 1.5rem;">
                        <li class="step-item">
                            <span class="step-number">4</span>
                            <div class="step-content">
                                <strong>Vincular a una Cotización Aceptada (Opcional)</strong>
                                <p>Una vez seleccionado el cliente, puedes elegir asociar el recibo a una de sus cotizaciones aceptadas en la lista desplegable correspondiente.</p>
                            </div>
                        </li>
                    </ol>

                    <!-- Browser Mockup (Vincular Cotización) -->
                    <div class="browser-mockup narrow">
                        <div class="browser-header">
                            <div class="browser-dots">
                                <span class="browser-dot red"></span>
                                <span class="browser-dot yellow"></span>
                                <span class="browser-dot green"></span>
                            </div>
                            <div class="browser-url">Formulario: Vincular Cotización</div>
                        </div>
                        <div class="browser-content doc-image-container">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/assets/images/receipts/Vincular_Cotizacion_Recibo.png"
                                    alt="Vincular Cotización a Recibo">
                        </div>
                    </div>

                    <ol class="steps-flow" style="margin-top: 1.5rem;">
                        <li class="step-item">
                            <span class="step-number">5</span>
                            <div class="step-content">
                                <strong>Ingresar Montos y Detalles del Anticipo</strong>
                                <p>Define el <strong>Folio</strong> del recibo (o déjalo en blanco para autogeneración), una <strong>Plantilla de Encabezado</strong> (opcional), el <strong>Valor Total</strong> de la venta y el monto del <strong>Anticipo</strong>. El sistema calculará automáticamente el saldo <strong>Restante</strong>. Si lo deseas, puedes añadir notas aclaratorias al final.</p>
                            </div>
                        </li>
                        <li class="step-item">
                            <span class="step-number">6</span>
                            <div class="step-content">
                                <strong>Guardar y Generar PDF</strong>
                                <p>Haz clic en el botón <strong style="display: inline;">Crear y Generar PDF</strong> para registrar el recibo en el portal y abrir automáticamente la vista previa oficial en formato PDF.</p>
                            </div>
                        </li>
                    </ol>

                    <!-- Browser Mockup (Crear Recibo Form) -->
                    <div class="browser-mockup">
                        <div class="browser-header">
                            <div class="browser-dots">
                                <span class="browser-dot red"></span>
                                <span class="browser-dot yellow"></span>
                                <span class="browser-dot green"></span>
                            </div>
                            <div class="browser-url">app.cotizalo.net/receipts/new</div>
                        </div>
                        <div class="browser-content doc-image-container">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/assets/images/receipts/Crear_Recibo.png"
                                alt="Crear Recibo de Anticipo">
                        </div>
                    </div>
                </div>

                <!-- Sub-sección: Galería de Acciones de Recibo -->
                <div style="margin-top: 3rem; border-top: 1px dashed var(--stripe-border); padding-top: 2rem;">
                    <h3>Galería de Acciones Disponibles</h3>
                    <p>En el listado principal de recibos, haz clic en el botón <strong style="display: inline;">Acciones <i class="fas fa-caret-down"></i></strong> correspondiente a la fila del recibo para desplegar el menú de opciones:</p>

                    <div class="mockup-grid-2col" style="align-items: center;">
                        <div>
                            <ul class="feature-list">
                                <li class="feature-item">
                                    <div class="feature-icon-wrapper"><i class="fa-solid fa-eye"></i></div>
                                    <div class="feature-text">
                                        <strong>Visualizar PDF</strong>
                                        <p>Genera y abre una vista en PDF del recibo para guardarlo o imprimirlo directamente.</p>
                                    </div>
                                </li>
                                <li class="feature-item">
                                    <div class="feature-icon-wrapper"><i class="fa-solid fa-upload"></i></div>
                                    <div class="feature-text">
                                        <strong>Subir Adjunto</strong>
                                        <p>Carga un archivo externo de respaldo (como el recibo impreso y firmado por el cliente, o un comprobante de transferencia bancaria).</p>
                                    </div>
                                </li>
                                <li class="feature-item">
                                    <div class="feature-icon-wrapper"><i class="fa-solid fa-download"></i></div>
                                    <div class="feature-text">
                                        <strong>Descargar Adjunto</strong>
                                        <p>Esta opción se habilitará si el recibo ya cuenta con un archivo asociado, permitiendo su descarga inmediata en cualquier momento.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="browser-mockup narrow">
                            <div class="browser-header">
                                <div class="browser-dots">
                                    <span class="browser-dot red"></span>
                                    <span class="browser-dot yellow"></span>
                                    <span class="browser-dot green"></span>
                                </div>
                                <div class="browser-url">Menú: Acciones del Recibo</div>
                            </div>
                            <div class="browser-content doc-image-container">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/assets/images/receipts/Galeria_Acciones_Recibo.png"
                                    alt="Menú de Acciones de Recibo">
                            </div>
                        </div>
                    </div>

                    <!-- Vista del Recibo en PDF -->
                    <h4 style="margin-top: 2rem;">Vista Previa del Recibo PDF</h4>
                    <div class="browser-mockup narrow">
                        <div class="browser-header">
                            <div class="browser-dots">
                                <span class="browser-dot red"></span>
                                <span class="browser-dot yellow"></span>
                                <span class="browser-dot green"></span>
                            </div>
                            <div class="browser-url">Visor PDF: Recibo de Anticipo</div>
                        </div>
                        <div class="browser-content doc-image-container">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/assets/images/receipts/Recibo_PDF.png"
                                alt="Recibo PDF Generado">
                        </div>
                    </div>
                </div>
            </section>

            <!-- Section: Editar Recibo -->
            <section id="editar-recibo" class="doc-section search-target">
                <h2><i class="fa-solid fa-pen-to-square"></i> Editar Recibo</h2>
                <p>Modifica la información o montos de un recibo existente para mantener el control de tus finanzas y saldos de clientes:</p>

                <div style="margin-top: 2rem;">
                    <ol class="steps-flow">
                        <li class="step-item">
                            <span class="step-number">1</span>
                            <div class="step-content">
                                <strong>Abrir Formulario de Edición</strong>
                                <p>Despliega el menú de <strong style="display: inline;">Acciones</strong> de tu recibo y selecciona <strong style="display: inline;">Editar</strong>.</p>
                            </div>
                        </li>
                        <li class="step-item">
                            <span class="step-number">2</span>
                            <div class="step-content">
                                <strong>Actualizar Datos y Montos</strong>
                                <p>Modifica el folio, cliente, cotización vinculada, notas o montos correspondientes. El sistema recalculará en tiempo real el saldo restante.</p>
                            </div>
                        </li>
                        <li class="step-item">
                            <span class="step-number">3</span>
                            <div class="step-content">
                                <strong>Guardar Cambios</strong>
                                <p>Haz clic en el botón <strong style="display: inline;">Guardar</strong> para aplicar las actualizaciones en el sistema.</p>
                            </div>
                        </li>
                    </ol>

                    <!-- Browser Mockup (Editar Recibo Form) -->
                    <div class="browser-mockup">
                        <div class="browser-header">
                            <div class="browser-dots">
                                <span class="browser-dot red"></span>
                                <span class="browser-dot yellow"></span>
                                <span class="browser-dot green"></span>
                            </div>
                            <div class="browser-url">app.cotizalo.net/receipts/edit</div>
                        </div>
                        <div class="browser-content doc-image-container">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/assets/images/receipts/Editar_Recibo.png"
                                alt="Editar Recibo de Anticipo">
                        </div>
                    </div>
                </div>
            </section>

            <!-- Section: Eliminar Recibo -->
            <section id="eliminar-recibo" class="doc-section search-target">
                <h2><i class="fa-solid fa-trash-can"></i> Eliminar Recibo</h2>
                <p>Retira de forma permanente un recibo de anticipo cuando la transacción haya sido cancelada o ingresada por error:</p>

                <div style="margin-top: 2rem;">
                    <ol class="steps-flow">
                        <li class="step-item">
                            <span class="step-number">1</span>
                            <div class="step-content">
                                <strong>Seleccionar Eliminar</strong>
                                <p>En el menú de <strong style="display: inline;">Acciones</strong> del recibo correspondiente, selecciona la opción <strong style="display: inline;">Eliminar</strong> (icono de papelera).</p>
                            </div>
                        </li>
                        <li class="step-item">
                            <span class="step-number">2</span>
                            <div class="step-content">
                                <strong>Confirmar la Eliminación</strong>
                                <p>En la ventana modal de confirmación, presiona el botón <strong style="display: inline;">Confirmar</strong> para remover permanentemente el registro de anticipo.</p>
                            </div>
                        </li>
                    </ol>

                    <!-- Browser Mockup (Eliminar Confirmación) -->
                    <div class="browser-mockup narrow" style="margin-top: 1.5rem;">
                        <div class="browser-header">
                            <div class="browser-dots">
                                <span class="browser-dot red"></span>
                                <span class="browser-dot yellow"></span>
                                <span class="browser-dot green"></span>
                            </div>
                            <div class="browser-url">Confirmación de Eliminación</div>
                        </div>
                        <div class="browser-content doc-image-container">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/assets/images/receipts/Eliminar_Recibo.png"
                                alt="Eliminar Recibo Confirmación">
                        </div>
                    </div>
                </div>
            </section>

            <!-- Section: Agregar Cliente -->
            <section id="agregar-cliente" class="doc-section search-target">
                <h2><i class="fa-solid fa-plus"></i> Agregar Cliente</h2>
                <p>Registra y administra la información de tus clientes para facilitar la emisión de cotizaciones personalizadas:</p>

                <!-- Browser Mockup (Listado Principal) -->
                <div class="browser-mockup">
                    <div class="browser-header">
                        <div class="browser-dots">
                            <span class="browser-dot red"></span>
                            <span class="browser-dot yellow"></span>
                            <span class="browser-dot green"></span>
                        </div>
                        <div class="browser-url">app.cotizalo.net/customers</div>
                    </div>
                    <div class="browser-content doc-image-container">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/assets/images/customers/Clientes.png"
                            alt="Listado de Clientes">
                    </div>
                </div>

                <div style="margin-top: 2rem;">
                    <ol class="steps-flow">
                        <li class="step-item">
                            <span class="step-number">1</span>
                            <div class="step-content">
                                <strong>Abrir el Formulario</strong>
                                <p>Haz clic en el botón <strong style="display: inline;">Añadir Cliente</strong> ubicado en la esquina superior derecha del listado para abrir la ventana modal de registro.</p>
                            </div>
                        </li>
                        <li class="step-item">
                            <span class="step-number">2</span>
                            <div class="step-content">
                                <strong>Ingresar Datos del Cliente</strong>
                                <p>Completa los campos obligatorios y opcionales del cliente: <strong>Nombre de la Empresa</strong>, <strong>Persona de Contacto</strong>, <strong>Correo</strong>, <strong>Teléfono</strong> (seleccionando la región correspondiente), <strong>Dirección</strong> (con opción de autocompletado) y <strong>RFC / Tax ID</strong>.</p>
                            </div>
                        </li>
                        <li class="step-item">
                            <span class="step-number">3</span>
                            <div class="step-content">
                                <strong>Guardar el Cliente</strong>
                                <p>Haz clic en el botón <strong style="display: inline;">Guardar</strong> para registrar el cliente en el sistema. El correo electrónico y el RFC deben ser únicos en la plataforma.</p>
                            </div>
                        </li>
                    </ol>
                    
                    <!-- Browser Mockup (Agregar Form) -->
                    <div class="browser-mockup narrow" style="margin-top: 1.5rem;">
                        <div class="browser-header">
                            <div class="browser-dots">
                                <span class="browser-dot red"></span>
                                <span class="browser-dot yellow"></span>
                                <span class="browser-dot green"></span>
                            </div>
                            <div class="browser-url">Modal: Añadir Cliente</div>
                        </div>
                        <div class="browser-content doc-image-container">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/assets/images/customers/Agregar_Clientes.png"
                                alt="Añadir Cliente Formulario">
                        </div>
                    </div>
                </div>
            </section>

            <!-- Section: Editar Cliente -->
            <section id="editar-cliente" class="doc-section search-target">
                <h2><i class="fa-solid fa-pen-to-square"></i> Editar Cliente</h2>
                <p>Modifica los datos de contacto, dirección o facturación de tus clientes registrados para mantener tu base de datos al día:</p>

                <div style="margin-top: 2rem;">
                    <ol class="steps-flow">
                        <li class="step-item">
                            <span class="step-number">1</span>
                            <div class="step-content">
                                <strong>Seleccionar Editar</strong>
                                <p>Ubica al cliente en la lista y haz clic en el botón <strong style="display: inline;">Editar</strong> (icono de lápiz) en su respectiva fila de acciones.</p>
                            </div>
                        </li>
                        <li class="step-item">
                            <span class="step-number">2</span>
                            <div class="step-content">
                                <strong>Actualizar la Información</strong>
                                <p>Modifica los campos necesarios como la persona de contacto, teléfono, dirección o datos fiscales en el formulario modal.</p>
                            </div>
                        </li>
                        <li class="step-item">
                            <span class="step-number">3</span>
                            <div class="step-content">
                                <strong>Guardar Cambios</strong>
                                <p>Haz clic en el botón <strong style="display: inline;">Guardar</strong> para aplicar y actualizar los cambios en el perfil del cliente.</p>
                            </div>
                        </li>
                    </ol>

                    <!-- Browser Mockup (Editar Form) -->
                    <div class="browser-mockup narrow" style="margin-top: 1.5rem;">
                        <div class="browser-header">
                            <div class="browser-dots">
                                <span class="browser-dot red"></span>
                                <span class="browser-dot yellow"></span>
                                <span class="browser-dot green"></span>
                            </div>
                            <div class="browser-url">Modal: Editar Cliente</div>
                        </div>
                        <div class="browser-content doc-image-container">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/assets/images/customers/Editar_Clientes.png"
                                alt="Editar Cliente Formulario">
                        </div>
                    </div>
                </div>
            </section>

            <!-- Section: Eliminar Cliente -->
            <section id="eliminar-cliente" class="doc-section search-target">
                <h2><i class="fa-solid fa-trash-can"></i> Eliminar Cliente</h2>
                <p>Remueve de forma definitiva los registros de clientes que ya no requieras conservar en tu plataforma:</p>

                <div style="margin-top: 2rem;">
                    <ol class="steps-flow">
                        <li class="step-item">
                            <span class="step-number">1</span>
                            <div class="step-content">
                                <strong>Seleccionar Eliminar</strong>
                                <p>Ubica al cliente en el catálogo y haz clic en el botón <strong style="display: inline;">Eliminar</strong> (icono de papelera) en la columna de acciones.</p>
                            </div>
                        </li>
                        <li class="step-item">
                            <span class="step-number">2</span>
                            <div class="step-content">
                                <strong>Confirmar la Acción</strong>
                                <p>En la ventana modal de confirmación, presiona el botón <strong style="display: inline;">Confirmar</strong> para retirar permanentemente al cliente de tu catálogo operativo.</p>
                            </div>
                        </li>
                    </ol>

                    <!-- Browser Mockup (Eliminar Confirmación) -->
                    <div class="browser-mockup narrow" style="margin-top: 1.5rem;">
                        <div class="browser-header">
                            <div class="browser-dots">
                                <span class="browser-dot red"></span>
                                <span class="browser-dot yellow"></span>
                                <span class="browser-dot green"></span>
                            </div>
                            <div class="browser-url">Confirmación de Eliminación</div>
                        </div>
                        <div class="browser-content doc-image-container">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/assets/images/customers/Eliminar_Cliente.png"
                                alt="Eliminar Cliente Confirmación">
                        </div>
                    </div>
                </div>
            </section>

            <!-- Section: Agregar Categoría -->
            <section id="agregar-categoria" class="doc-section search-target">
                <h2><i class="fa-solid fa-plus"></i> Agregar Categoría</h2>
                <p>Organiza tus productos y servicios en diferentes categorías para facilitar su gestión y filtrado en tus cotizaciones:</p>

                <!-- Browser Mockup (Listado Principal) -->
                <div class="browser-mockup">
                    <div class="browser-header">
                        <div class="browser-dots">
                            <span class="browser-dot red"></span>
                            <span class="browser-dot yellow"></span>
                            <span class="browser-dot green"></span>
                        </div>
                        <div class="browser-url">app.cotizalo.net/settings/categories</div>
                    </div>
                    <div class="browser-content doc-image-container">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/assets/images/category/Categorias.png"
                            alt="Listado de Categorías">
                    </div>
                </div>

                <div style="margin-top: 2rem;">
                    <ol class="steps-flow">
                        <li class="step-item">
                            <span class="step-number">1</span>
                            <div class="step-content">
                                <strong>Abrir el Formulario</strong>
                                <p>Haz clic en el botón <strong style="display: inline;">+ Agregar Categoría</strong> ubicado en la esquina superior derecha del listado para abrir el formulario modal de registro.</p>
                            </div>
                        </li>
                        <li class="step-item">
                            <span class="step-number">2</span>
                            <div class="step-content">
                                <strong>Ingresar Nombre de la Categoría</strong>
                                <p>Define el <strong>Nombre</strong> descriptivo de la categoría (ej. Equipos, Licencias, Servicios de Consultoría) que agrupará tus productos relacionados.</p>
                            </div>
                        </li>
                        <li class="step-item">
                            <span class="step-number">3</span>
                            <div class="step-content">
                                <strong>Registrar Categoría</strong>
                                <p>Haz clic en el botón <strong style="display: inline;">Agregar</strong> para registrar y habilitar la nueva categoría en tu catálogo.</p>
                            </div>
                        </li>
                    </ol>
                    
                    <!-- Browser Mockup (Agregar Form) -->
                    <div class="browser-mockup narrow" style="margin-top: 1.5rem;">
                        <div class="browser-header">
                            <div class="browser-dots">
                                <span class="browser-dot red"></span>
                                <span class="browser-dot yellow"></span>
                                <span class="browser-dot green"></span>
                            </div>
                            <div class="browser-url">Modal: Agregar Categoría</div>
                        </div>
                        <div class="browser-content doc-image-container">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/assets/images/category/Agregar_Categoria.png"
                                alt="Agregar Categoría Formulario">
                        </div>
                    </div>
                </div>
            </section>

            <!-- Section: Editar Categoría -->
            <section id="editar-categoria" class="doc-section search-target">
                <h2><i class="fa-solid fa-pen-to-square"></i> Editar Categoría</h2>
                <p>Modifica el nombre de una categoría existente de manera rápida para actualizar la clasificación de tus productos:</p>

                <div style="margin-top: 2rem;">
                    <ol class="steps-flow">
                        <li class="step-item">
                            <span class="step-number">1</span>
                            <div class="step-content">
                                <strong>Seleccionar Editar</strong>
                                <p>Ubica la categoría que deseas modificar en la lista y haz clic en el botón <strong style="display: inline;">Editar</strong> en su respectiva fila.</p>
                            </div>
                        </li>
                        <li class="step-item">
                            <span class="step-number">2</span>
                            <div class="step-content">
                                <strong>Actualizar el Nombre</strong>
                                <p>Edita el campo de texto con el nuevo nombre descriptivo de la categoría.</p>
                            </div>
                        </li>
                        <li class="step-item">
                            <span class="step-number">3</span>
                            <div class="step-content">
                                <strong>Guardar Cambios</strong>
                                <p>Haz clic en el botón <strong style="display: inline;">Guardar</strong> en la modal para registrar y aplicar la actualización de inmediato.</p>
                            </div>
                        </li>
                    </ol>

                    <!-- Browser Mockup (Editar Form) -->
                    <div class="browser-mockup narrow" style="margin-top: 1.5rem;">
                        <div class="browser-header">
                            <div class="browser-dots">
                                <span class="browser-dot red"></span>
                                <span class="browser-dot yellow"></span>
                                <span class="browser-dot green"></span>
                            </div>
                            <div class="browser-url">Modal: Editar Categoría</div>
                        </div>
                        <div class="browser-content doc-image-container">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/assets/images/category/Editar_Categoria.png"
                                alt="Editar Categoría Formulario">
                        </div>
                    </div>
                </div>
            </section>

            <!-- Section: Eliminar Categoría -->
            <section id="eliminar-categoria" class="doc-section search-target">
                <h2><i class="fa-solid fa-trash-can"></i> Eliminar Categoría</h2>
                <p>Retira de forma definitiva las categorías que ya no necesites en tu catálogo operativo:</p>

                <div style="margin-top: 2rem;">
                    <ol class="steps-flow">
                        <li class="step-item">
                            <span class="step-number">1</span>
                            <div class="step-content">
                                <strong>Seleccionar Eliminar</strong>
                                <p>Ubica la categoría en la lista y haz clic en el botón <strong style="display: inline;">Eliminar</strong> (icono de papelera) en su fila de acciones.</p>
                            </div>
                        </li>
                        <li class="step-item">
                            <span class="step-number">2</span>
                            <div class="step-content">
                                <strong>Confirmar la Acción</strong>
                                <p>En la modal de advertencia, confirma la acción haciendo clic en <strong style="display: inline;">Confirmar</strong> para retirar definitivamente la categoría de tu base de datos.</p>
                            </div>
                        </li>
                    </ol>

                    <!-- Browser Mockup (Eliminar Confirmación) -->
                    <div class="browser-mockup narrow" style="margin-top: 1.5rem;">
                        <div class="browser-header">
                            <div class="browser-dots">
                                <span class="browser-dot red"></span>
                                <span class="browser-dot yellow"></span>
                                <span class="browser-dot green"></span>
                            </div>
                            <div class="browser-url">Confirmación de Eliminación</div>
                        </div>
                        <div class="browser-content doc-image-container">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/assets/images/category/Eliminar_Categoria.png"
                                alt="Eliminar Categoría Confirmación">
                        </div>
                    </div>
                </div>
            </section>

            <!-- Section: Agregar Producto -->
            <section id="agregar-producto" class="doc-section search-target">
                <h2><i class="fa-solid fa-plus"></i> Agregar Producto</h2>
                <p>Administra tu catálogo de productos o servicios para que puedas agregarlos rápidamente a tus cotizaciones:</p>

                <!-- Browser Mockup (Listado Principal) -->
                <div class="browser-mockup">
                    <div class="browser-header">
                        <div class="browser-dots">
                            <span class="browser-dot red"></span>
                            <span class="browser-dot yellow"></span>
                            <span class="browser-dot green"></span>
                        </div>
                        <div class="browser-url">app.cotizalo.net/settings/products</div>
                    </div>
                    <div class="browser-content doc-image-container">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/assets/images/products/Productos.png"
                            alt="Listado de Productos">
                    </div>
                </div>

                <div style="margin-top: 2rem;">
                    <ol class="steps-flow">
                        <li class="step-item">
                            <span class="step-number">1</span>
                            <div class="step-content">
                                <strong>Abrir el Formulario</strong>
                                <p>Haz clic en el botón <strong style="display: inline;">+ Agregar Producto</strong> ubicado en la esquina superior derecha del catálogo para abrir la modal de registro.</p>
                            </div>
                        </li>
                        <li class="step-item">
                            <span class="step-number">2</span>
                            <div class="step-content">
                                <strong>Ingresar Datos del Producto</strong>
                                <p>Define la información básica de tu product o servicio: <strong>Nombre</strong>, <strong>Descripción</strong>, <strong>Código/SKU</strong>, <strong>Precio</strong> de venta y selecciona la <strong>Unidad de Medida</strong> correspondiente de la lista.</p>
                            </div>
                        </li>
                        <li class="step-item">
                            <span class="step-number">3</span>
                            <div class="step-content">
                                <strong>Registrar Producto</strong>
                                <p>Haz clic en el botón <strong style="display: inline;">Agregar</strong> para registrar y guardar el nuevo producto en tu catálogo, dejándolo listo para ser usado al cotizar.</p>
                            </div>
                        </li>
                    </ol>
                    
                    <!-- Browser Mockup (Agregar Form) -->
                    <div class="browser-mockup narrow" style="margin-top: 1.5rem;">
                        <div class="browser-header">
                            <div class="browser-dots">
                                <span class="browser-dot red"></span>
                                <span class="browser-dot yellow"></span>
                                <span class="browser-dot green"></span>
                            </div>
                            <div class="browser-url">Modal: Agregar Producto</div>
                        </div>
                        <div class="browser-content doc-image-container">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/assets/images/products/Agregar_productos.png"
                                alt="Agregar Producto Formulario">
                        </div>
                    </div>
                </div>
            </section>

            <!-- Section: Editar Producto -->
            <section id="editar-producto" class="doc-section search-target">
                <h2><i class="fa-solid fa-pen-to-square"></i> Editar Producto</h2>
                <p>Modifica los datos de un producto o servicio existente para mantener actualizada la información de tu catálogo, como precios y descripciones:</p>

                <div style="margin-top: 2rem;">
                    <ol class="steps-flow">
                        <li class="step-item">
                            <span class="step-number">1</span>
                            <div class="step-content">
                                <strong>Seleccionar Editar</strong>
                                <p>Ubica el producto o servicio que deseas modificar en la lista principal y haz clic en el botón <strong style="display: inline;">Editar</strong> en la columna de acciones.</p>
                            </div>
                        </li>
                        <li class="step-item">
                            <span class="step-number">2</span>
                            <div class="step-content">
                                <strong>Actualizar la Información</strong>
                                <p>Modifica el nombre, precio, descripción o la unidad asignada en el formulario según los nuevos datos.</p>
                            </div>
                        </li>
                        <li class="step-item">
                            <span class="step-number">3</span>
                            <div class="step-content">
                                <strong>Guardar Cambios</strong>
                                <p>Haz clic en el botón <strong style="display: inline;">Guardar</strong> para actualizar y registrar la información de forma definitiva.</p>
                            </div>
                        </li>
                    </ol>

                    <!-- Browser Mockup (Editar Form) -->
                    <div class="browser-mockup narrow" style="margin-top: 1.5rem;">
                        <div class="browser-header">
                            <div class="browser-dots">
                                <span class="browser-dot red"></span>
                                <span class="browser-dot yellow"></span>
                                <span class="browser-dot green"></span>
                            </div>
                            <div class="browser-url">Modal: Editar Producto</div>
                        </div>
                        <div class="browser-content doc-image-container">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/assets/images/products/Editar_productos.png"
                                alt="Editar Producto Formulario">
                        </div>
                    </div>
                </div>
            </section>

            <!-- Section: Importar Productos -->
            <section id="importar-productos" class="doc-section search-target">
                <h2><i class="fa-solid fa-file-import"></i> Importar Productos</h2>
                <p>Carga de forma masiva tu catálogo completo de productos o servicios utilizando un archivo CSV para ahorrar tiempo en la configuración inicial:</p>

                <div style="margin-top: 2rem;">
                    <ol class="steps-flow">
                        <li class="step-item">
                            <span class="step-number">1</span>
                            <div class="step-content">
                                <strong>Acceder a Importar</strong>
                                <p>Haz clic en el botón <strong style="display: inline;">Importar</strong> ubicado en la barra de herramientas del catálogo de productos.</p>
                            </div>
                        </li>
                        <li class="step-item">
                            <span class="step-number">2</span>
                            <div class="step-content">
                                <strong>Descargar Plantilla (Opcional)</strong>
                                <p>Descarga el archivo de ejemplo para asegurarte de estructurar correctamente las columnas (Nombre, Descripción, Precio, SKU, Unidad, etc.).</p>
                            </div>
                        </li>
                        <li class="step-item">
                            <span class="step-number">3</span>
                            <div class="step-content">
                                <strong>Subir Archivo CSV</strong>
                                <p>Selecciona tu archivo CSV estructurado desde tu equipo y haz clic en el botón <strong style="display: inline;">Cargar archivo</strong>.</p>
                            </div>
                        </li>
                        <li class="step-item">
                            <span class="step-number">4</span>
                            <div class="step-content">
                                <strong>Confirmar la Importación</strong>
                                <p>Revisa la vista previa de los productos cargados y haz clic en <strong style="display: inline;">Confirmar Importación</strong> para añadirlos masivamente a tu base de datos.</p>
                            </div>
                        </li>
                    </ol>

                    <!-- Browser Mockup (Importar Form) -->
                    <div class="browser-mockup narrow" style="margin-top: 1.5rem;">
                        <div class="browser-header">
                            <div class="browser-dots">
                                <span class="browser-dot red"></span>
                                <span class="browser-dot yellow"></span>
                                <span class="browser-dot green"></span>
                            </div>
                            <div class="browser-url">Modal: Importar Productos</div>
                        </div>
                        <div class="browser-content doc-image-container">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/assets/images/products/Importar_productos.png"
                                alt="Importar Productos Formulario">
                        </div>
                    </div>
                </div>
            </section>

            <!-- Section: Eliminar Producto -->
            <section id="eliminar-producto" class="doc-section search-target">
                <h2><i class="fa-solid fa-trash-can"></i> Eliminar Producto</h2>
                <p>Retira de forma definitiva los productos o servicios que ya no comercialices de tu catálogo activo:</p>

                <div style="margin-top: 2rem;">
                    <ol class="steps-flow">
                        <li class="step-item">
                            <span class="step-number">1</span>
                            <div class="step-content">
                                <strong>Seleccionar Eliminar</strong>
                                <p>Identifica el producto en la lista principal y haz clic en el botón <strong style="display: inline;">Eliminar</strong> (icono de papelera) en su respectiva fila.</p>
                            </div>
                        </li>
                        <li class="step-item">
                            <span class="step-number">2</span>
                            <div class="step-content">
                                <strong>Confirmar la Acción</strong>
                                <p>En el cuadro de diálogo de confirmación, haz clic en el botón <strong style="display: inline;">Confirmar</strong> para retirar permanentemente el producto de tu catálogo.</p>
                            </div>
                        </li>
                    </ol>

                    <!-- Browser Mockup (Eliminar Confirmación) -->
                    <div class="browser-mockup narrow" style="margin-top: 1.5rem;">
                        <div class="browser-header">
                            <div class="browser-dots">
                                <span class="browser-dot red"></span>
                                <span class="browser-dot yellow"></span>
                                <span class="browser-dot green"></span>
                            </div>
                            <div class="browser-url">Confirmación de Eliminación</div>
                        </div>
                        <div class="browser-content doc-image-container">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/assets/images/products/Eliminar_productos.png"
                                alt="Eliminar Producto Confirmación">
                        </div>
                    </div>
                </div>
            </section>

            <!-- Section: Agregar Unidad -->
            <section id="agregar-unidad" class="doc-section search-target">
                <h2><i class="fa-solid fa-plus"></i> Agregar Unidad</h2>
                <p>Administra las unidades de medida o de venta (ej. Horas, Kilogramos, Litros, Piezas) que se utilizarán para catalogar y cotizar tus productos o servicios en el portal:</p>

                <!-- Browser Mockup (Listado Principal) -->
                <div class="browser-mockup">
                    <div class="browser-header">
                        <div class="browser-dots">
                            <span class="browser-dot red"></span>
                            <span class="browser-dot yellow"></span>
                            <span class="browser-dot green"></span>
                        </div>
                        <div class="browser-url">app.cotizalo.net/settings/units</div>
                    </div>
                    <div class="browser-content doc-image-container">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/assets/images/units/Unidades.png"
                            alt="Listado de Unidades">
                    </div>
                </div>

                <div style="margin-top: 2rem;">
                    <ol class="steps-flow">
                        <li class="step-item">
                            <span class="step-number">1</span>
                            <div class="step-content">
                                <strong>Abrir el Formulario</strong>
                                <p>Haz clic en el botón <strong style="display: inline;">+ Agregar Unidad</strong> ubicado en la esquina superior derecha del listado para abrir la modal de registro.</p>
                            </div>
                        </li>
                        <li class="step-item">
                            <span class="step-number">2</span>
                            <div class="step-content">
                                <strong>Ingresar Datos de la Unidad</strong>
                                <p>Define el <strong>Nombre</strong> de la unidad (ej. Litros) and su <strong>Abreviatura</strong> correspondiente (ej. l).</p>
                            </div>
                        </li>
                        <li class="step-item">
                            <span class="step-number">3</span>
                            <div class="step-content">
                                <strong>Registrar Unidad</strong>
                                <p>Haz clic en el botón <strong style="display: inline;">+ Agregar</strong> para registrar y habilitar la nueva unidad en tu catálogo.</p>
                            </div>
                        </li>
                    </ol>
                    
                    <!-- Browser Mockup (Agregar Form) -->
                    <div class="browser-mockup narrow" style="margin-top: 1.5rem;">
                        <div class="browser-header">
                            <div class="browser-dots">
                                <span class="browser-dot red"></span>
                                <span class="browser-dot yellow"></span>
                                <span class="browser-dot green"></span>
                            </div>
                            <div class="browser-url">Modal: Agregar Unidad</div>
                        </div>
                        <div class="browser-content doc-image-container">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/assets/images/units/Agregar_unidades.png"
                                alt="Agregar Unidad Formulario">
                        </div>
                    </div>
                </div>
            </section>

            <!-- Section: Editar Unidad -->
            <section id="editar-unidad" class="doc-section search-target">
                <h2><i class="fa-solid fa-pen-to-square"></i> Editar Unidad</h2>
                <p>Modifica el nombre o la abreviatura de una unidad existente para mantener tu catálogo actualizado:</p>

                <div style="margin-top: 2rem;">
                    <ol class="steps-flow">
                        <li class="step-item">
                            <span class="step-number">1</span>
                            <div class="step-content">
                                <strong>Seleccionar Editar</strong>
                                <p>Ubica la unidad a modificar en la lista principal y haz clic en el botón <strong style="display: inline;">Editar</strong> en la columna de acciones.</p>
                            </div>
                        </li>
                        <li class="step-item">
                            <span class="step-number">2</span>
                            <div class="step-content">
                                <strong>Actualizar Información</strong>
                                <p>Modifica el <strong>Nombre</strong> o la <strong>Abreviatura</strong> en el formulario modal según tus requerimientos.</p>
                            </div>
                        </li>
                        <li class="step-item">
                            <span class="step-number">3</span>
                            <div class="step-content">
                                <strong>Guardar Cambios</strong>
                                <p>Haz clic en el botón <strong style="display: inline;">Guardar</strong> para aplicar los cambios de forma definitiva.</p>
                            </div>
                        </li>
                    </ol>

                    <!-- Browser Mockup (Editar Form) -->
                    <div class="browser-mockup narrow" style="margin-top: 1.5rem;">
                        <div class="browser-header">
                            <div class="browser-dots">
                                <span class="browser-dot red"></span>
                                <span class="browser-dot yellow"></span>
                                <span class="browser-dot green"></span>
                            </div>
                            <div class="browser-url">Modal: Editar Unidad</div>
                        </div>
                        <div class="browser-content doc-image-container">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/assets/images/units/Editar_Unidades.png"
                                alt="Editar Unidad Formulario">
                        </div>
                    </div>
                </div>
            </section>

            <!-- Section: Eliminar Unidad -->
            <section id="eliminar-unidad" class="doc-section search-target">
                <h2><i class="fa-solid fa-trash-can"></i> Eliminar Unidad</h2>
                <p>Retira las unidades que ya no utilices en tus cotizaciones y productos de forma definitiva:</p>

                <div style="margin-top: 2rem;">
                    <ol class="steps-flow">
                        <li class="step-item">
                            <span class="step-number">1</span>
                            <div class="step-content">
                                <strong>Seleccionar Eliminar</strong>
                                <p>Identifica la unidad que deseas borrar del catálogo y haz clic en el botón <strong style="display: inline;">Eliminar</strong> en su respectiva fila.</p>
                            </div>
                        </li>
                        <li class="step-item">
                            <span class="step-number">2</span>
                            <div class="step-content">
                                <strong>Confirmar la Acción</strong>
                                <p>En el cuadro de diálogo de confirmación que pregunta <em>¿Eliminar unidad [Nombre]?</em>, haz clic en el botón <strong style="display: inline;">Confirmar</strong> para retirarla definitivamente de tu catálogo.</p>
                            </div>
                        </li>
                    </ol>

                    <!-- Browser Mockup (Eliminar Confirmación) -->
                    <div class="browser-mockup narrow" style="margin-top: 1.5rem;">
                        <div class="browser-header">
                            <div class="browser-dots">
                                <span class="browser-dot red"></span>
                                <span class="browser-dot yellow"></span>
                                <span class="browser-dot green"></span>
                            </div>
                            <div class="browser-url">Confirmación de Eliminación</div>
                        </div>
                        <div class="browser-content doc-image-container">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/assets/images/units/Eliminar_unidades.png"
                                alt="Eliminar Unidad Confirmación">
                        </div>
                    </div>
                </div>
            </section>

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
                            <strong>Seleccionar Idioma</strong>
                            <p>Elige tu idioma preferido (inglés o español) en la primera opción. Toda la interfaz del
                                panel cambiará de inmediato.</p>
                        </div>
                    </li>
                    <li class="step-item">
                        <span class="step-number">2</span>
                        <div class="step-content">
                            <strong>Configurar Zona Horaria</strong>
                            <p>Selecciona tu ciudad o zona horaria local. Esto garantiza que las fechas y horas de
                                creación y firmas en tus cotizaciones coincidan correctamente con tu horario local.</p>
                        </div>
                    </li>
                    <li class="step-item">
                        <span class="step-number">3</span>
                        <div class="step-content">
                            <strong>Definir Perfil Predeterminado</strong>
                            <p>Si manejas múltiples marcas o secuencias de cotizaciones, define aquí cuál perfil se
                                cargará por defecto de forma automática en cada cotización nueva.</p>
                        </div>
                    </li>
                    <li class="step-item">
                        <span class="step-number">4</span>
                        <div class="step-content">
                            <strong>Guardar Cambios</strong>
                            <p>Haz clic en el botón <strong style="display: inline;">Guardar</strong> para aplicar los
                                cambios</p>
                        </div>
                    </li>
                    <li class="step-item">
                        <span class="step-number">•</span>
                        <div class="step-content">
                            <strong>Cambio de Contraseña</strong>
                            <p>Si necesitas actualizar tus credenciales, ingresa tu contraseña actual y la nueva
                                contraseña. Haz clic en el botón <strong style="display: inline;">Actualizar
                                    Contraseña</strong> para aplicar los cambios y actualizar el acceso.</p>
                            <p
                                style="margin-top: 0.5rem; margin-bottom: 0.25rem; font-weight: 600; font-size: 0.9rem; color: var(--stripe-text-main);">
                                La nueva contraseña debe cumplir con los siguientes requisitos:</p>
                            <ul
                                style="list-style: none; padding: 0; margin: 0.5rem 0 0 0.5rem; font-size: 0.9rem; line-height: 1.6; color: var(--stripe-text-muted);">
                                <li><span style="color: #ef4444; font-weight: bold; margin-right: 6px;">✗</span> Mínimo
                                    10 caracteres</li>
                                <li><span style="color: #ef4444; font-weight: bold; margin-right: 6px;">✗</span> 1 letra
                                    mayúscula</li>
                                <li><span style="color: #ef4444; font-weight: bold; margin-right: 6px;">✗</span> 1 letra
                                    minúscula</li>
                                <li><span style="color: #ef4444; font-weight: bold; margin-right: 6px;">✗</span> 1
                                    número</li>
                                <li><span style="color: #ef4444; font-weight: bold; margin-right: 6px;">✗</span> 1
                                    carácter especial (!@#$%^&*)</li>
                            </ul>
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
                    <li class="step-item">
                        <span class="step-number">6</span>
                        <div class="step-content">
                            <strong>Guardar Configuración</strong>
                            <p>Haz clic en el botón <strong>Guardar Configuración</strong> al final de la página para
                                guardar y aplicar de forma definitiva todos los cambios en tu portal.</p>
                        </div>
                    </li>
                </ol>
            </section>

            <!-- Section: Plan de Suscripción -->
            <section id="plan-suscripcion" class="doc-section search-target">
                <h2><i class="fa-solid fa-credit-card"></i> Plan de Suscripción</h2>
                <p>Gestiona tu facturación mensual, los límites de almacenamiento en la nube y los detalles de tu
                    suscripción actual:</p>

                <div class="info-box">
                    <i class="fa-solid fa-circle-info"></i>
                    <div>
                        <strong>Restricciones de Downgrade:</strong> No se permiten downgrades si tus datos almacenados
                        superan la capacidad del plan inferior que deseas contratar, a fin de proteger tu información
                        contra pérdidas accidentales.
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
                        <span class="step-number">•</span>
                        <div class="step-content">
                            <strong>Verificar Fecha de Próximo Pago</strong>
                            <p>Revisa la fecha programada para el próximo cobro de tu suscripción y mantén un
                                seguimiento claro de tus ciclos de facturación.</p>
                        </div>
                    </li>
                    <li class="step-item">
                        <span class="step-number">•</span>
                        <div class="step-content">
                            <strong>Actualizar Plan (Upgrade)</strong>
                            <p>Si deseas aumentar tus límites, primero selecciona el plan deseado de la lista y luego
                                haz clic en el botón <strong style="display: inline;">Cambiar Plan</strong> para
                                realizar el cambio de forma inmediata.</p>
                        </div>
                    </li>
                    <li class="step-item">
                        <span class="step-number">•</span>
                        <div class="step-content">
                            <strong>Actualización de Método de Pago</strong>
                            <p>Accede directamente al portal del cliente de Stripe de forma cifrada para añadir o editar
                                tarjetas de crédito/débito y revisar tu historial de cobros.</p>
                        </div>
                    </li>
                </ol>
            </section>

            <!-- Section: Perfiles de Cotización -->
            <section id="perfiles" class="doc-section search-target">
                <h2><i class="fa-solid fa-id-card"></i> Perfiles de Cotización</h2>
                <p>Configura múltiples perfiles operativos si gestionas marcas diferentes, diferentes divisiones de
                    negocio o tipos de clientes desde una misma cuenta corporativa:</p>

                <div class="info-box">
                    <i class="fa-solid fa-circle-info"></i>
                    <div>
                        <strong>Nota:</strong> Solo las suscripciones <strong>Profesional</strong> y
                        <strong>Empresarial</strong> podrán generar perfiles adicionales a los que vienen por defecto.
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
                            <p>Haz clic en el botón de <strong
                                    style="font-weight: 600; color: var(--stripe-blue);">Agregar Perfil</strong> dentro
                                de la sección de perfiles de cotización para abrir el formulario de configuración.</p>
                        </div>
                    </li>
                    <li class="step-item">
                        <span class="step-number">2</span>
                        <div class="step-content">
                            <strong>Establecer Identificación y Folios</strong>
                            <p>Asigna un nombre interno descriptivo y define un prefijo alfanumérico único para
                                identificar las cotizaciones de esta marca. La secuencia de folio numérico iniciará en 1
                                para cada perfil y se realizará el incremento secuencial de forma automática.</p>
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
                    <li class="step-item">
                        <span class="step-number">4</span>
                        <div class="step-content">
                            <strong>Guardar Nuevo Perfil</strong>
                            <p>Haz clic en el botón <strong style="display: inline;">Guardar Nuevo Perfil</strong> para
                                registrar y aplicar todos los cambios en tu perfil de cotización.</p>
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

                <div class="info-box">
                    <i class="fa-solid fa-circle-info"></i>
                    <div>
                        <strong>Nota:</strong> Solo las suscripciones <strong>Profesional</strong> y
                        <strong>Empresarial</strong> podrán generar plantillas adicionales a las que vienen por defecto.
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
                    <li class="step-item">
                        <span class="step-number">3</span>
                        <div class="step-content">
                            <strong>Guardar Plantilla</strong>
                            <p>Haz clic en el botón <strong style="display: inline;">Guardar</strong> para almacenar y
                                aplicar de forma definitiva tu nueva plantilla.</p>
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

                <div class="info-box">
                    <i class="fa-solid fa-circle-info"></i>
                    <div>
                        <strong>Nota:</strong> El usuario principal no será eliminado hasta que se destruya toda la
                        suscripción.
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
                            <strong>Agregar Nuevo Usuario</strong>
                            <p>Registra un nuevo usuario ingresando su información básica (Nombre, Correo Electrónico y
                                una Contraseña inicial provisional) dando clic en el boton <strong
                                    style="display: inline;">Agregar Usuario</strong>.</p>
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
                    <li class="step-item">
                        <span class="step-number">3</span>
                        <div class="step-content">
                            <strong>Guardar Nuevo Usuario</strong>
                            <p>Haz clic en el botón <strong style="display: inline;">Crear Usuario</strong> para
                                confirmar la creación del nuevo usuario y aplicar los cambios.</p>
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
                            
                            // Auto-expand parent menu when item is active
                            const parentMenu = link.closest('.sidebar-menu');
                            if (parentMenu && parentMenu.classList.contains('collapsed')) {
                                parentMenu.classList.remove('collapsed');
                                const title = parentMenu.previousElementSibling;
                                if (title && title.classList.contains('sidebar-section-title')) {
                                    title.classList.remove('collapsed');
                                }
                            }
                        } else {
                            link.classList.remove('active');
                        }
                    });
                }
            }

            // -----------------------------------------------------
            // Collapsible Sidebar Sections
            // -----------------------------------------------------
            const sectionTitles = document.querySelectorAll('.sidebar-section-title');
            sectionTitles.forEach(title => {
                const menu = title.nextElementSibling;
                const hasActive = menu && menu.querySelector('.sidebar-link.active');

                // Dynamic chevron toggle indicator
                const icon = document.createElement('i');
                icon.className = 'fa-solid fa-chevron-down toggle-icon';
                title.appendChild(icon);

                // Initial state: collapse if it doesn't contain active element
                if (menu && menu.classList.contains('sidebar-menu') && !hasActive) {
                    title.classList.add('collapsed');
                    menu.classList.add('collapsed');
                }

                // Click event to toggle collapse
                title.addEventListener('click', () => {
                    if (menu && menu.classList.contains('sidebar-menu')) {
                        title.classList.toggle('collapsed');
                        menu.classList.toggle('collapsed');
                    }
                });
            });

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

            // -----------------------------------------------------
            // Mobile Sidebar Toggle and Drawer Engine
            // -----------------------------------------------------
            const manualSidebar = document.querySelector('.manual-sidebar');
            const sidebarToggle = document.getElementById('mobile-sidebar-toggle');
            
            if (sidebarToggle && manualSidebar) {
                const overlay = document.createElement('div');
                overlay.className = 'sidebar-overlay';
                document.body.appendChild(overlay);

                sidebarToggle.addEventListener('click', () => {
                    manualSidebar.classList.toggle('open');
                    overlay.classList.toggle('active');
                });

                overlay.addEventListener('click', () => {
                    manualSidebar.classList.remove('open');
                    overlay.classList.remove('active');
                });

                const links = manualSidebar.querySelectorAll('.sidebar-link');
                links.forEach(link => {
                    link.addEventListener('click', () => {
                        manualSidebar.classList.remove('open');
                        overlay.classList.remove('active');
                    });
                });
            }
        });
    </script>
    <!-- Floating Mobile Sidebar Toggle -->
    <button class="mobile-sidebar-toggle" id="mobile-sidebar-toggle">
        <i class="fa-solid fa-bars"></i> Menú del Manual
    </button>
    <!-- Lightbox Overlay -->
    <div id="lightbox" class="image-lightbox">
        <span class="image-lightbox-close">&times;</span>
        <img id="lightbox-img" src="" alt="Zoomed Screenshot">
    </div>
    <?php wp_footer(); ?>
</body>

</html>