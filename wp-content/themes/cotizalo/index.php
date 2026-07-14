<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cotízalo | Sistema de Cotizaciones Automatizado para Empresas en México</title>
    <meta name="description" content="Simplifica tus ventas con el mejor sistema de cotizaciones online en México. Crea, envía y da seguimiento a propuestas profesionales en PDF en segundos. ¡Prueba Gratis!">
    <meta name="keywords" content="sistema de cotizaciones, cotizaciones online mexico, hacer cotizacion profesional, generador de presupuestos, software para cotizar servicios, crear cotizacion pdf">
    
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

    <link rel="icon" type="image/x-icon" href="<?php echo esc_url( home_url('/favicon.ico') ); ?>">
    <link rel="icon" type="image/png" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/assets/logos/ISOTIPO/Cotizalo-5.png?v=3">
    <link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/assets/logos/ISOTIPO/Cotizalo-5.png?v=3">
    <link rel="apple-touch-icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/assets/logos/ISOTIPO/Cotizalo-5.png?v=3">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <!-- Nav Section -->
    <header>
        <div class="container nav-container">
            <div class="logo">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="text-primary" style="color: var(--primary-color);">
                    <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/>
                </svg>
                Cotíza<span>lo</span>
            </div>
            <ul class="nav-links">
                <li><a href="#features">Características</a></li>
                <li><a href="#how-it-works">Aprender Más</a></li>
            </ul>
            <div class="nav-buttons">
                <a href="https://app.cotizalo.net/login" class="btn btn-secondary btn-nav">Ingresar</a>
                <a href="https://app.cotizalo.net/signup" class="btn btn-primary btn-nav" style="margin-left: 10px;">Crear Cuenta Free</a>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container relative">
            <div class="hero-content animate-on-scroll">
                <div class="hero-badge">⚡ Nuevo Sistema Automatizado</div>
                <h1 class="text-gradient">Transforma la forma en que cotizas tus servicios.</h1>
                <p>Olvida el Excel y el Word. Con Cotízalo, emite propuestas profesionales en segundos, controla tus ventas y asombra a tus clientes desde el primer momento.</p>
                <div class="hero-buttons">
                    <a href="https://app.cotizalo.net/signup" class="btn btn-primary">Empieza Gratis Ahora</a>
                    <a href="#features" class="btn btn-secondary">Ver Características</a>
                </div>
            </div>

            <!-- Visualization Element (Mockup Placeholder for impact) -->
            <div class="hero-image-wrapper animate-on-scroll delay-200">
                <div style="background: rgba(15,23,42,0.8); border: 1px solid rgba(255,255,255,0.1); border-radius: 12px; height: 350px; display: flex; flex-direction: column; padding: 20px;">
                    <div style="display: flex; gap: 10px; margin-bottom: 20px; align-items: center; border-bottom: 1px solid rgba(255,255,255,0.05); padding-bottom: 15px;">
                        <div style="width: 12px; height: 12px; border-radius: 50%; background: #ef4444;"></div>
                        <div style="width: 12px; height: 12px; border-radius: 50%; background: #eab308;"></div>
                        <div style="width: 12px; height: 12px; border-radius: 50%; background: #22c55e;"></div>
                        <div style="margin-left: 15px; color: rgba(255,255,255,0.4); font-size: 12px; font-family: monospace;">app.cotizalo.net/dashboard</div>
                    </div>
                    <div style="display: flex; gap: 20px; height: 100%;">
                        <div style="width: 200px; background: rgba(99,102,241,0.05); border-radius: 8px;"></div>
                        <div style="flex-grow: 1; display: flex; flex-direction: column; gap: 15px;">
                            <div style="height: 40px; background: linear-gradient(90deg, rgba(99,102,241,0.1), transparent); border-radius: 8px;"></div>
                            <div style="flex-grow: 1; background: rgba(255,255,255,0.02); border-radius: 8px; border: 1px dashed rgba(255,255,255,0.1); display:flex; align-items: center; justify-content: center;">
                                <span style="color: var(--primary-color);">Panel de Control en Vivo</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="container">
        <div style="text-align: center; max-width: 600px; margin: 0 auto 3rem;" class="animate-on-scroll">
            <h2 class="text-gradient">Todo lo que necesitas, en un solo lugar.</h2>
            <p>Diseñado para equipos agiles que requieren rapidez, elegancia y precisión en cada presupuesto que entregan.</p>
        </div>

        <div class="features-grid">
            <div class="feature-card animate-on-scroll delay-100">
                <div class="feature-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" /></svg>
                </div>
                <h3>Velocidad Extrema</h3>
                <p>Genera cotizaciones completas en menos de 1 minuto reutilizando plantillas y productos guardados.</p>
            </div>
            <div class="feature-card animate-on-scroll delay-200">
                <div class="feature-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" /></svg>
                </div>
                <h3>Seguridad y Confianza</h3>
                <p>Toda tu información de ventas viaja asegurada mediante encriptación moderna. Nunca pierdas un dato.</p>
            </div>
            <div class="feature-card animate-on-scroll delay-300">
                <div class="feature-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" /></svg>
                </div>
                <h3>Diseño Personalizado</h3>
                <p>Ajustamos colores, logo y tipografías para que cada presupuesto lleve la esencia de tu marca.</p>
            </div>
            <div class="feature-card animate-on-scroll delay-400">
                <div class="feature-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg>
                </div>
                <h3>Acceso desde Cualquier Lugar</h3>
                <p>Tus cotizaciones siempre en la nube. Accede, edita y comparte desde tu celular o computadora en cualquier momento.</p>
            </div>
        </div>
    </section>

    <!-- ==================== CLOUD & MOBILE SECTION ==================== -->
    <section id="how-it-works" style="
        padding: 6rem 0;
        background: linear-gradient(180deg, #0d1220 0%, #111827 100%);
        overflow: hidden;
    ">
        <div class="container">

            <!-- Section header -->
            <div class="animate-on-scroll" style="text-align: center; max-width: 650px; margin: 0 auto 4rem;">
                <div style="
                    display: inline-flex; align-items: center; gap: 8px;
                    background: rgba(18,58,44,0.35); border: 1px solid rgba(18,58,44,0.6);
                    border-radius: 999px; padding: 6px 18px; margin-bottom: 1.25rem;
                ">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#4ade80" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"/></svg>
                    <span style="font-size: 0.75rem; font-weight: 600; color: #4ade80; letter-spacing: 0.08em; text-transform: uppercase;">En la Nube · Siempre Disponible</span>
                </div>
                <h2 class="text-gradient" style="margin-bottom: 1rem;">Siempre contigo,<br>desde cualquier lugar.</h2>
                <p style="color: rgba(255,255,255,0.6); font-size: 1.05rem; line-height: 1.7;">
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
                <div class="animate-on-scroll delay-100">

                    <!-- Benefit 1 -->
                    <div style="
                        display: flex; gap: 1.25rem; align-items: flex-start;
                        margin-bottom: 2.5rem;
                    ">
                        <div style="
                            flex-shrink: 0;
                            width: 52px; height: 52px;
                            background: rgba(18,58,44,0.3);
                            border: 1px solid rgba(74,222,128,0.2);
                            border-radius: 14px;
                            display: flex; align-items: center; justify-content: center;
                        ">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#4ade80" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 style="font-size: 1.1rem; font-weight: 700; color: #fff; margin: 0 0 0.4rem;">Cotizaciones en la nube</h3>
                            <p style="color: rgba(255,255,255,0.55); font-size: 0.95rem; line-height: 1.65; margin: 0;">
                                Todas tus propuestas se guardan automáticamente en la nube. Sin archivos locales, sin riesgo de perder información. Disponibles 24/7 desde cualquier dispositivo.
                            </p>
                        </div>
                    </div>

                    <!-- Benefit 2 -->
                    <div style="
                        display: flex; gap: 1.25rem; align-items: flex-start;
                        margin-bottom: 2.5rem;
                    ">
                        <div style="
                            flex-shrink: 0;
                            width: 52px; height: 52px;
                            background: rgba(99,102,241,0.15);
                            border: 1px solid rgba(99,102,241,0.3);
                            border-radius: 14px;
                            display: flex; align-items: center; justify-content: center;
                        ">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#818cf8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 style="font-size: 1.1rem; font-weight: 700; color: #fff; margin: 0 0 0.4rem;">Acceso total desde el móvil</h3>
                            <p style="color: rgba(255,255,255,0.55); font-size: 0.95rem; line-height: 1.65; margin: 0;">
                                Crea, revisa y envía cotizaciones desde tu celular en segundos. Tu negocio no se detiene aunque estés fuera de la oficina.
                            </p>
                        </div>
                    </div>

                    <!-- Benefit 3 -->
                    <div style="
                        display: flex; gap: 1.25rem; align-items: flex-start;
                    ">
                        <div style="
                            flex-shrink: 0;
                            width: 52px; height: 52px;
                            background: rgba(251,191,36,0.12);
                            border: 1px solid rgba(251,191,36,0.25);
                            border-radius: 14px;
                            display: flex; align-items: center; justify-content: center;
                        ">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#fbbf24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"/>
                                <polyline points="12 6 12 12 16 14"/>
                            </svg>
                        </div>
                        <div>
                            <h3 style="font-size: 1.1rem; font-weight: 700; color: #fff; margin: 0 0 0.4rem;">Ajustes en tiempo real · Aprobación inmediata</h3>
                            <p style="color: rgba(255,255,255,0.55); font-size: 0.95rem; line-height: 1.65; margin: 0;">
                                ¿El cliente pide un cambio de último momento? Actualiza la cotización al instante y él la ve reflejada de inmediato. Aprobación con un clic, sin ir y venir de correos.
                            </p>
                        </div>
                    </div>

                </div>

                <!-- RIGHT: Mobile mockup -->
                <div class="animate-on-scroll delay-200" style="display: flex; justify-content: center;">
                    <div style="
                        position: relative;
                        width: 260px;
                    ">
                        <!-- Glow behind phone -->
                        <div style="
                            position: absolute; inset: -30px;
                            background: radial-gradient(ellipse at center, rgba(18,58,44,0.5) 0%, transparent 70%);
                            border-radius: 50%;
                            z-index: 0;
                        "></div>

                        <!-- Phone frame -->
                        <div style="
                            position: relative; z-index: 1;
                            background: #0f172a;
                            border: 2px solid rgba(255,255,255,0.12);
                            border-radius: 36px;
                            padding: 14px 10px;
                            box-shadow: 0 30px 80px rgba(0,0,0,0.5), inset 0 1px 0 rgba(255,255,255,0.08);
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
                            <div style="
                                background: #111827;
                                border-radius: 24px;
                                overflow: hidden;
                                padding: 16px;
                            ">
                                <!-- App header -->
                                <div style="
                                    display: flex; justify-content: space-between; align-items: center;
                                    margin-bottom: 14px;
                                ">
                                    <span style="font-size: 11px; font-weight: 700; color: #4ade80;">Cotizalo</span>
                                    <div style="width: 22px; height: 22px; background: rgba(74,222,128,0.15); border-radius: 50%; display:flex; align-items:center; justify-content:center;">
                                        <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="#4ade80" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/></svg>
                                    </div>
                                </div>

                                <!-- Quote card -->
                                <div style="
                                    background: rgba(18,58,44,0.3);
                                    border: 1px solid rgba(74,222,128,0.15);
                                    border-radius: 12px;
                                    padding: 12px;
                                    margin-bottom: 10px;
                                ">
                                    <div style="font-size: 9px; color: rgba(255,255,255,0.4); margin-bottom: 4px;">COTIZACIÓN #0047</div>
                                    <div style="font-size: 11px; font-weight: 600; color: #fff; margin-bottom: 8px;">Servicio de Instalación</div>
                                    <div style="display: flex; justify-content: space-between; align-items: center;">
                                        <div style="font-size: 14px; font-weight: 700; color: #4ade80;">$12,500 MXN</div>
                                        <div style="
                                            background: rgba(251,191,36,0.15);
                                            border: 1px solid rgba(251,191,36,0.3);
                                            border-radius: 999px;
                                            padding: 2px 8px;
                                            font-size: 8px; font-weight: 600; color: #fbbf24;
                                        ">En revisión</div>
                                    </div>
                                </div>

                                <!-- Real-time update indicator -->
                                <div style="
                                    background: rgba(99,102,241,0.1);
                                    border: 1px solid rgba(99,102,241,0.2);
                                    border-radius: 10px;
                                    padding: 10px 12px;
                                    margin-bottom: 10px;
                                    display: flex; align-items: center; gap: 8px;
                                ">
                                    <div style="
                                        width: 8px; height: 8px; border-radius: 50%;
                                        background: #818cf8;
                                        box-shadow: 0 0 6px #818cf8;
                                        animation: pulse-dot 1.5s ease-in-out infinite;
                                        flex-shrink: 0;
                                    "></div>
                                    <span style="font-size: 9px; color: rgba(255,255,255,0.7); line-height: 1.4;">Cliente viendo cambios<br><strong style="color: #818cf8;">en tiempo real...</strong></span>
                                </div>

                                <!-- Approve button -->
                                <div style="
                                    background: linear-gradient(135deg, #123A2C, #1a5c3e);
                                    border-radius: 10px;
                                    padding: 10px;
                                    text-align: center;
                                    font-size: 10px; font-weight: 700; color: #fff;
                                    letter-spacing: 0.03em;
                                ">✓ Aprobar cotización</div>

                                <!-- Bottom nav dots -->
                                <div style="
                                    display: flex; justify-content: center; gap: 6px;
                                    margin-top: 14px;
                                ">
                                    <div style="width: 20px; height: 3px; background: #4ade80; border-radius: 3px;"></div>
                                    <div style="width: 6px; height: 3px; background: rgba(255,255,255,0.15); border-radius: 3px;"></div>
                                    <div style="width: 6px; height: 3px; background: rgba(255,255,255,0.15); border-radius: 3px;"></div>
                                </div>
                            </div>

                            <!-- Home indicator -->
                            <div style="
                                width: 80px; height: 4px;
                                background: rgba(255,255,255,0.2);
                                border-radius: 3px;
                                margin: 10px auto 0;
                            "></div>
                        </div>

                        <!-- Floating badge: cloud -->
                        <div style="
                            position: absolute; top: -10px; right: -20px; z-index: 2;
                            background: rgba(15,23,42,0.95);
                            border: 1px solid rgba(74,222,128,0.3);
                            border-radius: 12px;
                            padding: 8px 12px;
                            display: flex; align-items: center; gap: 6px;
                            box-shadow: 0 8px 24px rgba(0,0,0,0.4);
                        ">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#4ade80" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"/></svg>
                            <span style="font-size: 10px; font-weight: 600; color: #4ade80;">Nube</span>
                        </div>

                        <!-- Floating badge: approved -->
                        <div style="
                            position: absolute; bottom: 30px; left: -28px; z-index: 2;
                            background: rgba(15,23,42,0.95);
                            border: 1px solid rgba(251,191,36,0.3);
                            border-radius: 12px;
                            padding: 8px 12px;
                            display: flex; align-items: center; gap: 6px;
                            box-shadow: 0 8px 24px rgba(0,0,0,0.4);
                        ">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#fbbf24" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                            <span style="font-size: 10px; font-weight: 600; color: #fbbf24;">Aprobada</span>
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

    <!-- Bottom CTA -->
    <section class="cta-section">
        <div class="container animate-on-scroll">
            <div class="cta-box">
                <h2 style="margin-bottom: 1rem;">¿Listo para digitalizar tus ventas?</h2>
                <p style="max-width: 600px; margin: 0 auto 2rem; color: #fff; opacity: 0.8;">Únete a cientos de empresas que ya automatizan sus procesos de cotización y ahorran horas semanales administrando envíos.</p>
                <a href="https://app.cotizalo.net/signup" class="btn btn-primary" style="background: white; color: var(--primary-color); box-shadow: none;">Crear cuenta Gratis</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="logo">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="text-primary" style="color: var(--primary-color);">
                        <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/>
                    </svg>
                    Cotíza<span>lo</span>
                </div>
                <ul class="nav-links">
                    <li><a href="#">Términos</a></li>
                    <li><a href="#">Privacidad</a></li>
                    <li><a href="<?php echo esc_url(home_url('/soporte/')); ?>">Contacto</a></li>
                </ul>
            </div>
            <div class="footer-bottom">
                &copy; <?php echo date("Y"); ?> DrG Labs CO. Todos los derechos reservados.
            </div>
        </div>
    </footer>

    <!-- Scripts dynamically linked -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/assets/js/main.js"></script>
    <?php wp_footer(); ?>
</body>
</html>
