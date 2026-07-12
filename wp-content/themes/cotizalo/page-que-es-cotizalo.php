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
    <meta name="description"
        content="Conoce qué es Cotízalo y cómo te ayuda a dejar atrás el Excel y el papel. La herramienta simple para cotizar y dar seguimiento a tus clientes.">
    <title>¿Qué es Cotízalo?</title>
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
                <li><a href="<?php echo esc_url(home_url('/que-es-cotizalo/')); ?>" class="nav-item nav-item--active">¿Qué es Cotízalo?</a></li>
                <li><a href="<?php echo esc_url(home_url('/')); ?>#features" class="nav-item">Características</a></li>
                <li><a href="<?php echo esc_url(home_url('/')); ?>#how-it-works" class="nav-item">Cómo Funciona</a></li>
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
            <h1 class="display-title-sm" style="margin-bottom: 1rem;">¿Qué es Cotízalo?</h1>
            <p class="text-muted" style="max-width: 700px; margin: 0 auto 3rem; font-size: 1.2rem;">
                La herramienta directa, simple y sin complicaciones para emprendedores que quieren dejar atrás el Excel y el papel.
            </p>

            <div class="content-box animate-on-scroll fade-in-up delay-100" style="text-align: left; max-width: 800px; margin: 0 auto 3rem;">
                <h2>El Fin del Excel y el Papel</h2>
                <p>
                    Si eres emprendedor, conoces el dolor de cabeza que significa hacer cotizaciones manuales. Perder el tiempo buscando el último archivo de Excel, pelear con el formato para que se vea decente en PDF, o incluso hacer presupuestos a mano en papel. Y lo peor: olvidar a qué cliente se lo enviaste y no darle el seguimiento adecuado.
                </p>
                <p>
                    <strong>Cotízalo nace para resolver ese problema exacto.</strong> Queremos que hacer un presupuesto te tome segundos, no horas. Que tu cliente lo reciba en formato digital, interactivo y lo pueda aprobar desde su celular con un solo clic.
                </p>
            </div>

            <div class="content-box animate-on-scroll fade-in-up delay-200" style="text-align: left; max-width: 800px; margin: 0 auto 3rem;">
                <h2>Lo que SÍ somos</h2>
                <ul>
                    <li><strong>Simplicidad ante todo:</strong> Un sistema fácil de usar donde creas y envías propuestas en menos de un minuto.</li>
                    <li><strong>100% Digitales y Móviles:</strong> Tus cotizaciones viven en la nube. Puedes revisarlas y modificarlas desde tu celular en cualquier lugar.</li>
                    <li><strong>Seguimiento sin esfuerzo:</strong> Sabes exactamente en qué estado está cada cotización y cuándo darle seguimiento a tu cliente para cerrar la venta.</li>
                </ul>
            </div>

            <div class="content-box animate-on-scroll fade-in-up delay-300" style="text-align: left; max-width: 800px; margin: 0 auto 3rem; border-color: rgba(239, 68, 68, 0.3);">
                <h2>Lo que NO somos</h2>
                <p>
                    <strong>No somos un CRM complejo.</strong> El mercado está lleno de sistemas enormes, costosos y con miles de funciones (embudos complejos, automatizaciones de marketing, reportes infinitos) que el 90% de los emprendedores nunca utiliza. 
                </p>
                <p>
                    Si buscas una herramienta que requiera semanas de capacitación, Cotízalo no es para ti. Pero si necesitas una herramienta directa y sin complicaciones que simplemente te ayude a verte profesional, presupuestar rápido y darle seguimiento fácil a tus prospectos... entonces estás en el lugar correcto.
                </p>
            </div>

            <div class="animate-on-scroll fade-in-up delay-400">
                <a href="https://app.cotizalo.net/signup" class="btn btn-primary btn-lg">Quiero empezar a cotizar ahora</a>
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
