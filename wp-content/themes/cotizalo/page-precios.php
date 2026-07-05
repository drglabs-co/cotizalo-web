<?php
/**
 * Template Name: Precios
 * Template Post Type: page
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Planes y precios de Cotizalo. Elige el plan que mejor se adapta a tu negocio. Incluye 14 días de prueba gratis.">
    <title>Precios | Cotizalo</title>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" type="image/x-icon" href="<?php echo esc_url( home_url('/favicon.ico') ); ?>">
    <link rel="icon" type="image/png" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/logos/ISOTIPO/Cotizalo-5.png?v=3">
    <link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/logos/ISOTIPO/Cotizalo-5.png?v=3">
    <link rel="apple-touch-icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/logos/ISOTIPO/Cotizalo-5.png?v=3">
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

        .badge-trial {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background: rgba(255, 255, 255, 0.12);
            border: 1px solid rgba(255, 255, 255, 0.25);
            color: #fff;
            font-weight: 600;
            font-size: 0.95rem;
            padding: 0.5rem 1.25rem;
            border-radius: var(--radius-full);
            backdrop-filter: blur(10px);
        }

        .badge-trial .emoji {
            font-size: 1.1rem;
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
    </style>
</head>

<body <?php body_class('page-precios'); ?>>

    <!-- ==================== NAV ==================== -->
    <header id="navbar">
        <div class="container nav-container">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/assets/logos/LOGOTIPO3/Cotizalo-8.png"
                    alt="Cotízalo Logo" id="brand-logo">
            </a>
            <ul class="nav-links">
                <li><a href="<?php echo esc_url(home_url('/')); ?>#features" class="nav-item">Características</a></li>
                <li><a href="<?php echo esc_url(home_url('/')); ?>#how-it-works" class="nav-item">Cómo Funciona</a></li>
                <li><a href="<?php echo esc_url(home_url('/precios/')); ?>" class="nav-item" style="opacity:1; border-bottom: 2px solid #fff; padding-bottom: 2px;">Precios</a></li>
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

    <!-- ==================== PRICING HERO ==================== -->
    <section class="pricing-hero" style="padding-bottom:3rem;">
        <div class="container">
            <div class="animate-on-scroll fade-in-up">
                <p style="font-size:0.875rem; font-weight:600; letter-spacing:0.1em; text-transform:uppercase; color:rgba(255,255,255,0.6); margin-bottom:1rem;">
                    Plan de Suscripción (Límite de Almacenamiento)
                </p>
                <h1>Precios simples y transparentes</h1>
                <p>Sin costos ocultos. Sin contratos. Cancela cuando quieras.</p>
                <span class="badge-trial">
                    <span class="emoji">🎁</span>
                    ¡Incluye 14 días de prueba gratis!
                </span>
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
                        <p class="plan-name">Inicial</p>
                    </div>
                    <div class="plan-price">
                        <span class="currency">$</span>
                        <span class="amount">199</span>
                        <span class="period">/mes</span>
                    </div>
                    <div class="plan-storage">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <ellipse cx="12" cy="5" rx="9" ry="3"/><path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"/><path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"/>
                        </svg>
                        3 GB de almacenamiento
                    </div>
                    <ul class="plan-features">
                        <li>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                            Cotizaciones ilimitadas
                        </li>
                        <li>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                            1 usuario
                        </li>
                        <li>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                            Exportación a PDF
                        </li>
                        <li>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                            Soporte por email
                        </li>
                    </ul>
                    <a href="https://app.cotizalo.net/signup" class="plan-btn" id="btn-plan-inicial">
                        Comenzar Prueba Gratis
                    </a>
                </div>

                <!-- Plan: Básico -->
                <div class="plan-card">
                    <div>
                        <p class="plan-name">Básico</p>
                    </div>
                    <div class="plan-price">
                        <span class="currency">$</span>
                        <span class="amount">399</span>
                        <span class="period">/mes</span>
                    </div>
                    <div class="plan-storage">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <ellipse cx="12" cy="5" rx="9" ry="3"/><path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"/><path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"/>
                        </svg>
                        10 GB de almacenamiento
                    </div>
                    <ul class="plan-features">
                        <li>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                            Cotizaciones ilimitadas
                        </li>
                        <li>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                            Hasta 3 usuarios
                        </li>
                        <li>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                            Exportación a PDF
                        </li>
                        <li>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                            Catálogo de productos
                        </li>
                        <li>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                            Soporte prioritario
                        </li>
                    </ul>
                    <a href="https://app.cotizalo.net/signup" class="plan-btn" id="btn-plan-basico">
                        Comenzar Prueba Gratis
                    </a>
                </div>

                <!-- Plan: Profesional (RECOMENDADO) -->
                <div class="plan-card featured">
                    <span class="recommended-badge">Recomendado</span>
                    <div>
                        <p class="plan-name">Profesional</p>
                    </div>
                    <div class="plan-price">
                        <span class="currency">$</span>
                        <span class="amount">599</span>
                        <span class="period">/mes</span>
                    </div>
                    <div class="plan-storage">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <ellipse cx="12" cy="5" rx="9" ry="3"/><path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"/><path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"/>
                        </svg>
                        50 GB de almacenamiento
                    </div>
                    <ul class="plan-features">
                        <li>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                            Cotizaciones ilimitadas
                        </li>
                        <li>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                            Hasta 10 usuarios
                        </li>
                        <li>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                            Plantillas personalizadas
                        </li>
                        <li>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                            Reportes avanzados
                        </li>
                        <li>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                            Integraciones API
                        </li>
                        <li>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                            Soporte 24/7
                        </li>
                    </ul>
                    <a href="https://app.cotizalo.net/signup" class="plan-btn" id="btn-plan-profesional">
                        Comenzar Prueba Gratis
                    </a>
                </div>

                <!-- Plan: Empresarial -->
                <div class="plan-card">
                    <div>
                        <p class="plan-name">Empresarial</p>
                    </div>
                    <div class="plan-price">
                        <span class="currency">$</span>
                        <span class="amount">899</span>
                        <span class="period">/mes</span>
                    </div>
                    <div class="plan-storage">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <ellipse cx="12" cy="5" rx="9" ry="3"/><path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"/><path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"/>
                        </svg>
                        80 GB de almacenamiento
                    </div>
                    <ul class="plan-features">
                        <li>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                            Cotizaciones ilimitadas
                        </li>
                        <li>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                            Usuarios ilimitados
                        </li>
                        <li>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                            Multi-empresa / Sub-cuentas
                        </li>
                        <li>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                            Cuenta de Administrador
                        </li>
                        <li>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                            Reportes y analíticas completas
                        </li>
                        <li>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                            Soporte dedicado
                        </li>
                    </ul>
                    <a href="https://app.cotizalo.net/signup" class="plan-btn" id="btn-plan-empresarial">
                        Comenzar Prueba Gratis
                    </a>
                </div>

            </div><!-- /.plans-grid -->
        </div>
    </section>

    <!-- ==================== ADMIN ACCOUNT ==================== -->
    <section class="admin-section">
        <div class="container">
            <div class="admin-box animate-on-scroll fade-in-up">
                <h2>Cuenta de Administrador</h2>
                <div class="admin-divider"></div>
                <p>El plan Empresarial incluye una poderosa cuenta de administrador con control total sobre usuarios, accesos y reportes de toda tu organización.</p>
                <div class="admin-features-grid">
                    <div class="admin-feature-item">
                        <div class="icon-wrap">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                            </svg>
                        </div>
                        <span>Gestión de Usuarios</span>
                    </div>
                    <div class="admin-feature-item">
                        <div class="icon-wrap">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><line x1="3" y1="9" x2="21" y2="9"/><line x1="9" y1="21" x2="9" y2="9"/>
                            </svg>
                        </div>
                        <span>Panel de Control</span>
                    </div>
                    <div class="admin-feature-item">
                        <div class="icon-wrap">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="18" y1="20" x2="18" y2="10"/><line x1="12" y1="20" x2="12" y2="4"/><line x1="6" y1="20" x2="6" y2="14"/>
                            </svg>
                        </div>
                        <span>Reportes Completos</span>
                    </div>
                    <div class="admin-feature-item">
                        <div class="icon-wrap">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="3"/><path d="M19.07 4.93a10 10 0 0 1 0 14.14M4.93 4.93a10 10 0 0 0 0 14.14"/>
                            </svg>
                        </div>
                        <span>Control de Accesos</span>
                    </div>
                </div>
                <a href="https://app.cotizalo.net/signup" class="btn btn-primary btn-lg" id="btn-admin-cta">
                    Contratar Plan Empresarial
                </a>
            </div>
        </div>
    </section>

    <!-- ==================== GUARANTEE STRIP ==================== -->
    <div class="guarantee-strip">
        <div class="container">
            <div class="guarantee-grid">
                <div class="guarantee-item">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                    14 días de prueba gratis
                </div>
                <div class="guarantee-item">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                    Sin tarjeta de crédito requerida
                </div>
                <div class="guarantee-item">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                    Cancela en cualquier momento
                </div>
                <div class="guarantee-item">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                    Soporte en español
                </div>
            </div>
        </div>
    </div>

    <!-- ==================== FOOTER ==================== -->
    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-brand">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="logo mb-1">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/assets/logos/LOGOTIPO3/Cotizalo-8.png"
                            alt="Cotízalo Logo" style="height: 140px; width: auto; object-fit: contain;" id="footer-logo">
                    </a>
                    <p class="text-muted mt-1" style="max-width: 300px;">Transformando la forma en que los equipos de ventas crean, envían y cierran propuestas.</p>
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
                        <li><a href="#">Sobre Nosotros</a></li>
                        <li><a href="#">Contacto</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?> DrG Labs CO. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>

    <!-- ==================== SCRIPTS ==================== -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Header scroll effect
            const header = document.getElementById('navbar');
            window.addEventListener('scroll', () => {
                header.classList.toggle('scrolled', window.scrollY > 50);
            });

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
