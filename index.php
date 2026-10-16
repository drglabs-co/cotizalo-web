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
    <title>Cotízalo | Sistema de Cotizaciones para Empresas en México</title>
    <meta name="description"
        content="Simplifica tus ventas con el mejor sistema de cotizaciones online en México. Crea, envía y da seguimiento a propuestas profesionales en PDF en segundos. ¡Prueba Gratis!">
    <meta name="keywords"
        content="sistema de cotizaciones, cotizaciones web, cotizaciones online mexico, cotizaciones online mexico app, hacer cotizacion profesional, generador de presupuestos, software para cotizar servicios, crear cotizacion pdf, enviar cotizacion por whatsapp, alternativa a excel para cotizaciones, control de cotizaciones y clientes, cotizador para freelancers, cotizador para pymes">

    <!-- Open Graph / Facebook / WhatsApp -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo esc_url(home_url($_SERVER['REQUEST_URI'] ?? '/')); ?>">
    <meta property="og:title" content="Cotízalo | Sistema de Cotizaciones para Empresas en México">
    <meta property="og:description"
        content="Simplifica tus ventas con el mejor sistema de cotizaciones online en México. Crea, envía y da seguimiento a propuestas profesionales en PDF en segundos. ¡Prueba Gratis!">
    <meta property="og:image"
        content="<?php echo esc_url(get_template_directory_uri()); ?>/assets/assets/og-social.jpg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:locale" content="es_MX">

    <!-- Twitter / X -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Cotízalo | Sistema de Cotizaciones para Empresas en México">
    <meta name="twitter:description"
        content="Simplifica tus ventas con el mejor sistema de cotizaciones online en México. Crea, envía y da seguimiento a propuestas profesionales en PDF en segundos. ¡Prueba Gratis!">
    <meta name="twitter:image"
        content="<?php echo esc_url(get_template_directory_uri()); ?>/assets/assets/og-social.jpg">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400;1,600&display=swap" rel="stylesheet">

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
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NG2ZW6L3"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- Master Header Navigation -->
    <header id="navbar">
        <div class="container nav-container">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="logo" aria-label="Cotízalo - Ir al inicio">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/assets/logos/LOGOTIPO3/Cotizalo-8.png?v=2"
                    alt="Cotízalo Logo" id="brand-logo" width="223" height="60">
            </a>
            <ul class="nav-links">
                <li><a href="<?php echo esc_url(home_url('/que-es-cotizalo/')); ?>" class="nav-item">¿Qué es Cotízalo?</a></li>
                <li><a href="<?php echo esc_url(home_url('/')); ?>#features" class="nav-item">Características</a></li>
                <li><a href="<?php echo esc_url(home_url('/precios/')); ?>" class="nav-item">Precios</a></li>
                <li class="nav-dropdown">
                    <button class="nav-item nav-dropdown-toggle" aria-haspopup="true" aria-expanded="false" type="button">
                        Recursos
                        <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
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
            <button class="mobile-menu-btn" aria-label="Abrir menú" aria-expanded="false">
                <span></span><span></span><span></span>
            </button>
        </div>
    </header>

    <main>
        <!-- Hero Section -->
        <section class="hero">
            <div class="container relative">
                <div class="hero-content animate-on-scroll fade-in-up">
                    <h1>Transforma la forma en que cotizas tus servicios.</h1>
                    <p>Olvida el desorden de hojas de cálculo y formatos manuales. Con Cotízalo, emite propuestas profesionales en segundos, controla tu cobranza y asombra a tus clientes desde el primer contacto.</p>
                    <div class="hero-buttons">
                        <a href="<?php echo esc_url(get_theme_mod('nav_signup_url', 'https://app.cotizalo.net/signup')); ?>" class="btn btn-primary btn-lg">
                            Empieza Gratis Ahora
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12 5 19 12 12 19"></polyline>
                            </svg>
                        </a>
                        <a href="<?php echo esc_url(home_url('/precios/')); ?>" class="btn btn-secondary btn-lg">Ver Planes y Precios</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Features Bento Section -->
        <section id="features" class="container py-6">
            <div style="text-align: center; max-width: 680px; margin: 0 auto 3.5rem;" class="animate-on-scroll fade-in-up">
                <h2 class="section-title">Todo lo que necesitas, en un solo lugar.</h2>
                <p class="section-subtitle">Diseñado con rigor visual y de producto para equipos que exigen rapidez, orden y máxima tasa de conversión.</p>
            </div>

            <div class="features-grid">
                <div class="feature-card animate-on-scroll fade-in-up">
                    <div class="feature-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <h3>Velocidad y Precisión</h3>
                    <p>Genera cotizaciones completas en menos de 1 minuto reutilizando tu catálogo de precios, partidas y condiciones fiscales.</p>
                </div>
                <div class="feature-card animate-on-scroll fade-in-up">
                    <div class="feature-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                        </svg>
                    </div>
                    <h3>Seguridad y Confianza</h3>
                    <p>Toda tu información de clientes y ventas viaja protegida con encriptación TLS y respaldo continuo en la nube.</p>
                </div>
                <div class="feature-card animate-on-scroll fade-in-up">
                    <div class="feature-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                        </svg>
                    </div>
                    <h3>Identidad Corporativa</h3>
                    <p>Personaliza tu logotipo, colores de marca y términos legales para que cada propuesta hable de tu nivel profesional.</p>
                </div>
                <div class="feature-card animate-on-scroll fade-in-up">
                    <div class="feature-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h3>Movilidad Total</h3>
                    <p>Tus cotizaciones siempre disponibles desde tu smartphone, tablet o computadora, sin perder formateo.</p>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="lp-cta">
            <div class="container animate-on-scroll fade-in-up">
                <h2>¿Listo para digitalizar tus ventas?</h2>
                <p>Únete a cientos de empresas en México que ya automatizan sus procesos de cotización y aceleran sus cierres comerciales.</p>
                <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
                    <a href="<?php echo esc_url(get_theme_mod('nav_signup_url', 'https://app.cotizalo.net/signup')); ?>"
                        class="btn btn-primary btn-lg">
                        Crear mi cuenta gratis
                    </a>
                    <a href="<?php echo esc_url(home_url('/precios/')); ?>" class="btn btn-secondary btn-lg">
                        Ver planes y precios
                    </a>
                </div>
            </div>
        </section>
    </main>

    <!-- Master Footer -->
    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-brand">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="logo mb-1">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/assets/logos/LOGOTIPO3/Cotizalo-8.png?v=2"
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
                <p>&copy; <?php echo date("Y"); ?>
                    <?php echo esc_html(get_theme_mod('footer_copyright', 'PixelZero.mx . Todos los derechos reservados.')); ?>
                </p>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
</body>

</html>