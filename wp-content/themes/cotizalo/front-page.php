<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Sistema de cotizaciones automatizado para empresas. Crea, envía y gestiona tus cotizaciones de manera rápida, moderna y profesional.">
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
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <!-- Nav Section -->
    <header id="navbar">
        <div class="container nav-container">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/assets/logos/LOGOTIPO3/Cotizalo-8.png"
                    alt="Cotízalo Logo" id="brand-logo">
            </a>
            <ul class="nav-links">
                <li><a href="#features" class="nav-item">Características</a></li>
                <li><a href="#how-it-works" class="nav-item">Cómo Funciona</a></li>
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
                <div class="glass-mockup">
                    <div class="mockup-header">
                        <div class="mockup-dots">
                            <span class="dot red"></span>
                            <span class="dot yellow"></span>
                            <span class="dot green"></span>
                        </div>
                        <div class="mockup-url">www.cotizalo.net</div>
                    </div>
                    <div class="mockup-body">
                        <div class="mockup-sidebar"></div>
                        <div class="mockup-content">
                            <div class="mockup-toolbar"></div>
                            <div class="mockup-document">
                                <div class="doc-header">
                                    <div class="doc-logo"></div>
                                    <div class="doc-title-lines">
                                        <div class="line w-100"></div>
                                        <div class="line w-50"></div>
                                    </div>
                                </div>
                                <div class="doc-items">
                                    <div class="item-row">
                                        <div class="line w-75"></div>
                                        <div class="line w-25 end"></div>
                                    </div>
                                    <div class="item-row">
                                        <div class="line w-50"></div>
                                        <div class="line w-25 end"></div>
                                    </div>
                                </div>
                                <div class="doc-total"></div>
                            </div>
                        </div>
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

            <div class="features-grid">
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
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/assets/logos/LOGOTIPO3/Cotizalo-8.png"
                            alt="Cotízalo Logo" style="height: 140px; width: auto; object-fit: contain;"
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