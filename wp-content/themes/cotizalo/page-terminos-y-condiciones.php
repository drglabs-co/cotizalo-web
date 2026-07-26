<?php
/**
 * Template Name: Términos y Condiciones
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
    <title>Términos y Condiciones de Uso | Cotízalo</title>
    <meta name="description" content="Conoce nuestros Términos y Condiciones de Uso. Reglas, responsabilidades y licencias del software de cotizaciones en línea en México.">
    <meta name="keywords" content="terminos y condiciones cotizalo, contrato de servicio, uso de software de cotizaciones">

    <!-- Open Graph / Facebook / WhatsApp -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo esc_url( home_url( $_SERVER['REQUEST_URI'] ) ); ?>">
    <meta property="og:title" content="Términos y Condiciones de Uso | Cotízalo">
    <meta property="og:description" content="Conoce nuestros Términos y Condiciones de Uso. Reglas, responsabilidades y licencias del software de cotizaciones en línea en México.">
    <meta property="og:image" content="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/assets/logos/ISOTIPO/Cotizalo-5.png">
    <meta property="og:locale" content="es_MX">

    <!-- Twitter / X -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Términos y Condiciones de Uso | Cotízalo">
    <meta name="twitter:description" content="Conoce nuestros Términos y Condiciones de Uso. Reglas, responsabilidades y licencias del software de cotizaciones en línea en México.">
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
        .page-hero {
            padding-top: calc(var(--nav-height) + 4rem);
            padding-bottom: 4rem;
            text-align: center;
        }
        .content-box {
            background: var(--bg-light);
            border-radius: var(--radius-lg);
            padding: 3rem;
            margin-bottom: 2.5rem;
            border: 1px solid var(--border-light);
            color: var(--text-dark);
            box-shadow: var(--shadow-sm);
        }
        .content-box h2 {
            color: var(--primary);
            margin-bottom: 1.25rem;
            font-size: 1.35rem;
            font-weight: 700;
            margin-top: 1.5rem;
        }
        .content-box h2:first-of-type {
            margin-top: 0;
        }
        .content-box p {
            color: var(--text-dark-muted);
            line-height: 1.8;
            margin-bottom: 1.25rem;
        }
        .content-box ul {
            padding-left: 1.5rem;
            margin: 1.25rem 0;
            color: var(--text-dark-muted);
        }
        .content-box ul li {
            margin-bottom: 0.5rem;
            line-height: 1.7;
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
                <li><a href="<?php echo esc_url(home_url('/que-es-cotizalo/')); ?>" class="nav-item">¿Qué es Cotízalo?</a></li>
                <li><a href="<?php echo esc_url(home_url('/')); ?>#features" class="nav-item">Características</a></li>
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

    <!-- Page Content -->
    <section class="page-hero">
        <div class="bg-shape bg-shape-1"></div>
        <div class="container relative z-10 animate-on-scroll fade-in-up">
            <h1 class="display-title-sm" style="margin-bottom: 1rem;">Términos y Condiciones</h1>
            <p class="text-muted" style="max-width: 700px; margin: 0 auto 3rem; font-size: 1.2rem;">
                Por favor, lee detalladamente los términos de servicio antes de utilizar nuestra herramienta.
            </p>

            <div class="content-box animate-on-scroll fade-in-up delay-100" style="text-align: left; max-width: 800px; margin: 0 auto 3rem;">
                <h2>1. Aceptación de los Términos</h2>
                <p>
                    Al registrarte, ingresar o hacer uso del software en la nube de Cotízalo (disponible en app.cotizalo.net), aceptas sujetarte a los presentes Términos y Condiciones. Si no estás de acuerdo con alguna de las cláusulas, deberás abstenerte de utilizar el sistema.
                </p>

                <h2>2. Licencia de Uso</h2>
                <p>
                    Cotízalo te otorga una licencia limitada, no exclusiva, revocable e intransferible para hacer uso del software conforme a los planes de precios contratados, con el único propósito de gestionar, emitir, enviar y cobrar tus cotizaciones comerciales.
                </p>

                <h2>3. Cuentas y Contraseñas</h2>
                <p>
                    Eres responsable de salvaguardar la confidencialidad de tu usuario y contraseña. Cualquier actividad realizada bajo tu cuenta será de tu exclusiva responsabilidad. En caso de detectar accesos no autorizados, deberás notificarlo inmediatamente a nuestro equipo de soporte.
                </p>

                <h2>4. Responsabilidad de Contenidos</h2>
                <p>
                    Eres el único propietario y responsable de los contenidos de tus cotizaciones (catálogo de precios, descripciones de servicios, datos de tus clientes y montos cobrados). Cotízalo únicamente provee la infraestructura técnica en la nube y no interviene ni se responsabiliza de los tratos comerciales o acuerdos formalizados entre tú y tus clientes.
                </p>

                <h2>5. Modificaciones del Servicio</h2>
                <p>
                    Nos reservamos el derecho de actualizar, modificar o discontinuar temporal o permanentemente funciones específicas de la plataforma para mejorar el rendimiento técnico o la experiencia general. Dichas actualizaciones se comunicarán con anticipación razonable en caso de afectar de manera crítica la operación básica del servicio.
                </p>
            </div>
        </div>
    </section>

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
                        <li><a href="<?php echo esc_url(home_url('/soporte/')); ?>">Soporte</a></li>
                        <li><a href="<?php echo esc_url(home_url('/aviso-de-privacidad/')); ?>">Aviso de Privacidad</a></li>
                        <li><a href="<?php echo esc_url(home_url('/terminos-y-condiciones/')); ?>">Términos y Condiciones</a></li>
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
