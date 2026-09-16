<?php
/**
 * Template Name: Qué es Cotízalo
 * Template Post Type: page
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <link rel="canonical" href="<?php echo esc_url( is_front_page() ? home_url('/') : get_permalink() ); ?>">
    <title>¿Qué es Cotízalo? | Digitaliza tus Cotizaciones y Presupuestos</title>
    <meta name="description"
        content="Descubre cómo Cotízalo ayuda a microempresas y profesionales en México a dejar atrás el Excel. Crea propuestas rápidas, profesionales y con seguimiento automático.">
    <meta name="keywords" content="cotizaciones web, cotizaciones online mexico app, digitalizar cotizaciones, cotizador para empresas, programa de cotizaciones, cotizador gratis, herramientas para cotizar, automatizar ventas, enviar cotizacion por whatsapp, alternativa a excel para cotizaciones, control de cotizaciones y clientes, cotizador para freelancers, cotizador para pymes">
    
    <!-- Open Graph / Facebook / WhatsApp -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo esc_url( home_url( $_SERVER['REQUEST_URI'] ) ); ?>">
    <meta property="og:title" content="¿Qué es Cotízalo? | Digitaliza tus Cotizaciones y Presupuestos">
    <meta property="og:description" content="Descubre cómo Cotízalo ayuda a microempresas y profesionales en México a dejar atrás el Excel. Crea propuestas rápidas, profesionales y con seguimiento automático.">
    <meta property="og:image" content="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/assets/logos/ISOTIPO/Cotizalo-5.png">
    <meta property="og:locale" content="es_MX">

    <!-- Twitter / X -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="¿Qué es Cotízalo? | Digitaliza tus Cotizaciones y Presupuestos">
    <meta name="twitter:description" content="Descubre cómo Cotízalo ayuda a microempresas y profesionales en México a dejar atrás el Excel. Crea propuestas rápidas, profesionales y con seguimiento automático.">
    <meta name="twitter:image" content="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/assets/logos/ISOTIPO/Cotizalo-5.png">

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
        /* Minimal custom styles for this page if needed */
        .page-hero {
            padding-top: calc(var(--nav-height) + 4rem);
            padding-bottom: 4rem;
            text-align: center;
        }
        .content-box {
            background: var(--bg-light);
            border-radius: var(--radius-lg);
            padding: 3rem;
            margin-bottom: 2rem;
            border: 1px solid var(--border-light);
            color: var(--text-dark);
            box-shadow: var(--shadow-sm);
        }
        .content-box h2 {
            color: var(--primary);
            margin-bottom: 1.5rem;
        }
        .content-box p {
            color: var(--text-dark-muted);
            line-height: 1.8;
            margin-bottom: 1rem;
        }
        .content-box ul {
            list-style: none;
            padding: 0;
            margin: 1.5rem 0;
        }
        .content-box li {
            position: relative;
            padding-left: 2rem;
            margin-bottom: 1rem;
            color: var(--text-dark-muted);
        }
        .content-box li::before {
            content: '✓';
            position: absolute;
            left: 0;
            color: var(--primary);
            font-weight: bold;
        }
    </style>
    <!-- Structured Data (Schema.org JSON-LD) -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@graph": [
            {
                "@type": "AboutPage",
                "@id": "<?php echo esc_url( get_permalink() ); ?>#webpage",
                "url": "<?php echo esc_url( get_permalink() ); ?>",
                "name": "¿Qué es Cotízalo? | Digitaliza tus Cotizaciones y Presupuestos",
                "description": "Descubre cómo Cotízalo ayuda a microempresas y profesionales en México a dejar atrás el Excel. Crea propuestas rápidas, profesionales y con seguimiento automático.",
                "isPartOf": {
                    "@id": "<?php echo esc_url( home_url('/') ); ?>#website"
                },
                "breadcrumb": {
                    "@id": "<?php echo esc_url( get_permalink() ); ?>#breadcrumb"
                },
                "inLanguage": "es-MX"
            },
            {
                "@type": "BreadcrumbList",
                "@id": "<?php echo esc_url( get_permalink() ); ?>#breadcrumb",
                "itemListElement": [
                    {
                        "@type": "ListItem",
                        "position": 1,
                        "name": "Inicio",
                        "item": "<?php echo esc_url( home_url('/') ); ?>"
                    },
                    {
                        "@type": "ListItem",
                        "position": 2,
                        "name": "¿Qué es Cotízalo?"
                    }
                ]
            }
        ]
    }
    </script>
    <link rel="preload" as="image" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/assets/logos/LOGOTIPO3/Cotizalo-8.png?v=2" type="image/png">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <!-- Nav Section -->
    <header id="navbar">
        <div class="container nav-container">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/assets/logos/LOGOTIPO3/Cotizalo-8.png?v=2"
                    alt="Cotízalo Logo" id="brand-logo" width="223" height="60">
            </a>
            <ul class="nav-links">
                <li><a href="<?php echo esc_url(home_url('/que-es-cotizalo/')); ?>" class="nav-item nav-item--active">¿Qué es Cotízalo?</a></li>
                <li><a href="<?php echo esc_url(home_url('/')); ?>#features" class="nav-item">Características</a></li>
                <li><a href="<?php echo esc_url(home_url('/precios/')); ?>" class="nav-item">Precios</a></li>
                <li class="nav-dropdown">
                    <button class="nav-item nav-dropdown-toggle" aria-haspopup="true" aria-expanded="false">
                        Recursos
                        <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
                    </button>
                    <ul class="nav-dropdown-menu">
                        <li><a href="<?php echo esc_url(home_url('/software-para-cotizaciones/')); ?>">Software para cotizaciones</a></li>
                        <li><a href="<?php echo esc_url(home_url('/programa-para-hacer-presupuestos/')); ?>">Programa para presupuestos</a></li>
                        <li><a href="<?php echo esc_url(home_url('/cotizaciones-por-whatsapp/')); ?>">Cotizaciones por WhatsApp</a></li>
                        <li><a href="<?php echo esc_url(home_url('/plantilla-de-cotizacion/')); ?>">Plantilla de cotización</a></li>
                        <li><a href="<?php echo esc_url(home_url('/software-de-cotizaciones-para-constructoras/')); ?>">Para constructoras</a></li>
                        <li><a href="<?php echo esc_url(home_url('/software-de-cotizaciones-para-servicios/')); ?>">Para servicios</a></li>
                    </ul>
                </li>
            </ul>
            <div class="nav-buttons">
                <a href="<?php echo esc_url(get_theme_mod('nav_login_url', 'https://app.cotizalo.net/login')); ?>" class="btn btn-secondary btn-nav"><?php echo esc_html(get_theme_mod('nav_login_text', 'Ingresar')); ?></a>
                <a href="<?php echo esc_url(get_theme_mod('nav_signup_url', 'https://app.cotizalo.net/signup')); ?>" class="btn btn-primary btn-nav"><?php echo esc_html(get_theme_mod('nav_signup_text', 'Empezar Gratis')); ?></a>
            </div>

            <!-- Mobile Menu Toggle -->
            <div class="mobile-menu-btn">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </header>

    <!-- Page Content -->
    <section class="page-hero">
        <div class="bg-shape bg-shape-1"></div>
        <div class="container relative z-10 animate-on-scroll fade-in-up">
            <h1 class="display-title-sm" style="margin-bottom: 1rem;"><?php echo esc_html(get_theme_mod('que_es_title', '¿Qué es Cotízalo?')); ?></h1>
            <p class="text-muted" style="max-width: 700px; margin: 0 auto 3rem; font-size: 1.2rem;">
                <?php echo esc_html(get_theme_mod('que_es_subtitle', 'La herramienta directa, simple y sin complicaciones para emprendedores que quieren dejar atrás el Excel y el papel.')); ?>
            </p>

            <div class="content-box animate-on-scroll fade-in-up delay-100" style="text-align: left; max-width: 800px; margin: 0 auto 3rem;">
                <?php
                if ( have_posts() ) :
                    while ( have_posts() ) : the_post();
                        the_content();
                    endwhile;
                endif;
                ?>
            </div>

            <div class="animate-on-scroll fade-in-up delay-500" style="margin-top: 2rem; text-align: center;">
                <a href="<?php echo esc_url(get_theme_mod('nav_signup_url', 'https://app.cotizalo.net/signup')); ?>" class="btn btn-primary btn-lg"><?php echo esc_html(get_theme_mod('hero_btn_text', 'Quiero empezar a cotizar ahora')); ?></a>
                <p style="margin-top: 1.5rem; color: var(--text-dark-muted); font-size: 0.95rem;">
                    ¿Tienes alguna duda técnica o comercial antes de comenzar? Visita nuestra página de <a href="<?php echo esc_url(home_url('/soporte/')); ?>" style="color: var(--primary); font-weight: 600; text-decoration: underline;">Soporte y Contacto</a>.
                </p>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-brand">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="logo mb-1">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/assets/logos/LOGOTIPO3/Cotizalo-8.png?v=2"
                            alt="Cotízalo Logo" style="height: 70px; width: auto; object-fit: contain;"
                            id="footer-logo" width="260" height="70">
                    </a>
                    <p class="text-muted mt-1" style="max-width: 300px;"><?php echo esc_html(get_theme_mod('footer_brand_text', 'Transformando la forma en que los equipos de ventas crean, envían y cierran propuestas.')); ?></p>
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
                <p>&copy; <?php echo date('Y'); ?> <?php echo esc_html(get_theme_mod('footer_copyright', 'DrG Labs CO. Todos los derechos reservados.')); ?></p>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const header = document.getElementById('navbar');
            let ticking = false;
            window.addEventListener('scroll', () => {
                if (!ticking) {
                    window.requestAnimationFrame(() => {
                        if (window.scrollY > 50) {
                            header.classList.add('scrolled');
                        } else {
                            header.classList.remove('scrolled');
                        }
                        ticking = false;
                    });
                    ticking = true;
                }
            }, { passive: true });

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

            const observerOptions = { root: null, rootMargin: '0px', threshold: 0.1 };
            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);

            document.querySelectorAll('.animate-on-scroll').forEach(el => { observer.observe(el); });

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
