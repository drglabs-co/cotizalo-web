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
    <link rel="canonical" href="<?php echo esc_url(home_url('/terminos-y-condiciones/')); ?>">
    <title>Términos y Condiciones de Uso | Cotízalo</title>
    <meta name="description"
        content="Conoce nuestros Términos y Condiciones de Uso. Reglas, responsabilidades y licencias del software de cotizaciones en línea en México.">

    <!-- Open Graph / Facebook / WhatsApp -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo esc_url(home_url($_SERVER['REQUEST_URI'])); ?>">
    <meta property="og:title" content="Términos y Condiciones de Uso | Cotízalo">
    <meta property="og:description"
        content="Conoce nuestros Términos y Condiciones de Uso. Reglas, responsabilidades y licencias del software de cotizaciones en línea en México.">
    <meta property="og:image"
        content="<?php echo esc_url(get_template_directory_uri()); ?>/assets/assets/logos/ISOTIPO/Cotizalo-5.png">
    <meta property="og:locale" content="es_MX">

    <!-- Twitter / X -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Términos y Condiciones de Uso | Cotízalo">
    <meta name="twitter:description"
        content="Conoce nuestros Términos y Condiciones de Uso. Reglas, responsabilidades y licencias del software de cotizaciones en línea en México.">
    <meta name="twitter:image"
        content="<?php echo esc_url(get_template_directory_uri()); ?>/assets/assets/logos/ISOTIPO/Cotizalo-5.png">

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
    <link rel="preload" as="image"
        href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/assets/logos/LOGOTIPO3/Cotizalo-8.png?v=2"
        type="image/png">
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
                <li><a href="<?php echo esc_url(home_url('/que-es-cotizalo/')); ?>" class="nav-item">¿Qué es
                        Cotízalo?</a></li>
                <li><a href="<?php echo esc_url(home_url('/')); ?>#features" class="nav-item">Características</a></li>
                <li><a href="<?php echo esc_url(home_url('/precios/')); ?>" class="nav-item">Precios</a></li>
                <li class="nav-dropdown">
                    <button class="nav-item nav-dropdown-toggle" aria-haspopup="true" aria-expanded="false">
                        Recursos
                        <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                    </button>
                    <ul class="nav-dropdown-menu">
                        <li><a href="<?php echo esc_url(home_url('/cotizador/')); ?>">Cotizador en línea</a></li>
                        <li><a href="<?php echo esc_url(home_url('/software-para-cotizaciones/')); ?>">Software para
                                cotizaciones</a></li>
                        <li><a href="<?php echo esc_url(home_url('/seguimiento-de-cotizaciones/')); ?>">Seguimiento de
                                cotizaciones</a></li>
                        <li><a href="<?php echo esc_url(home_url('/programa-para-hacer-presupuestos/')); ?>">Programa
                                para presupuestos</a></li>
                        <li><a href="<?php echo esc_url(home_url('/cotizaciones-por-whatsapp/')); ?>">Cotizaciones por
                                WhatsApp</a></li>
                        <li><a href="<?php echo esc_url(home_url('/software-de-cotizaciones-para-constructoras/')); ?>">Para
                                constructoras</a></li>
                        <li><a href="<?php echo esc_url(home_url('/software-de-cotizaciones-para-servicios/')); ?>">Para
                                servicios</a></li>
                    </ul>
                </li>
            </ul>
            <div class="nav-buttons">
                <a href="<?php echo esc_url(get_theme_mod('nav_login_url', 'https://app.cotizalo.net/login')); ?>"
                    class="btn btn-secondary btn-nav"><?php echo esc_html(get_theme_mod('nav_login_text', 'Ingresar')); ?></a>
                <a href="<?php echo esc_url(get_theme_mod('nav_signup_url', 'https://app.cotizalo.net/signup')); ?>"
                    class="btn btn-primary btn-nav"><?php echo esc_html(get_theme_mod('nav_signup_text', 'Empezar Gratis')); ?></a>
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
            <h1 class="display-title-sm" style="margin-bottom: 1rem;">
                <?php echo esc_html(get_theme_mod('terminos_title', 'Términos y Condiciones')); ?>
            </h1>
            <p class="text-muted" style="max-width: 700px; margin: 0 auto 3rem; font-size: 1.2rem;">
                <?php echo esc_html(get_theme_mod('terminos_subtitle', 'Por favor, lee detalladamente los términos de servicio antes de utilizar nuestra herramienta.')); ?>
            </p>

            <div class="content-box animate-on-scroll fade-in-up delay-100"
                style="text-align: left; max-width: 800px; margin: 0 auto 3rem;">
                <?php
                $has_custom_content = false;
                if (have_posts()):
                    while (have_posts()):
                        the_post();
                        $content = get_the_content();
                        if (!empty(trim($content))) {
                            the_content();
                            $has_custom_content = true;
                        }
                    endwhile;
                endif;
                if (!$has_custom_content):
                ?>
                <p>Al contratar y hacer uso del Sistema de Cotizaciones (en adelante, la <strong>"Aplicación"</strong>) proporcionado por <strong>DrG Labs Co.</strong> (en adelante, la <strong>"Sociedad"</strong>), el Cliente acepta estar sujeto a los siguientes términos y condiciones de uso.</p>

                <h2>1. Consentimiento y Capacidad</h2>
                <p>Para poder registrarse como Cliente, se debe tener al menos 18 años y contar con la capacidad legal necesaria para obligarse y aceptar los presentes Términos de Uso. El Cliente manifiesta actuar por cuenta propia, y al momento de registrarse reconoce que es sujeto a los derechos y obligaciones que aquí se describen. Al marcar la casilla de aceptación durante el proceso de registro, el Cliente otorga su consentimiento expreso y autoriza a la Sociedad a registrar y almacenar de forma segura los metadatos de su conexión (incluyendo dirección IP, fecha, hora y características del dispositivo o navegador) como evidencia irrefutable de dicha aceptación.</p>

                <h2>2. Usos y Restricciones de la Aplicación</h2>
                <p>El uso de los servicios y de la Aplicación es exclusiva responsabilidad del Cliente. El Cliente se obliga a no utilizar dispositivos, programas de cómputo, software o cualquier otro medio que pueda interferir en las funcionalidades, actividades y operaciones de la Aplicación. Asimismo, se obliga a utilizarlos de modo tal que no atenten contra las leyes de los Estados Unidos Mexicanos, normas de uso en Internet y derechos de terceros.</p>
                <p>Las operaciones y servicios que ofrece la Sociedad mediante la Aplicación estarán disponibles, en la medida de lo posible, las veinticuatro horas del día, los 7 días de la semana, sujeto a mantenimientos programados o contingencias operativas.</p>

                <h2>3. Responsabilidad de Claves de Acceso</h2>
                <p>El buen uso, manejo y custodia de las claves de acceso, contraseñas y cualquier otro dato de acceso a la Aplicación son de la exclusiva responsabilidad del Cliente. Por el solo hecho de acceder a la Aplicación, el Cliente reconoce y acepta que todas las operaciones o transacciones se presumen realizadas por él.</p>
                <p>En caso de robo, extravío u olvido de las claves de acceso, el Cliente deberá dar aviso de manera inmediata o utilizar los mecanismos de recuperación de cuenta proporcionados por la Aplicación. La Sociedad no se hará responsable de la falta de diligencia, negligencia o impericia del Cliente en el control y cuidado de sus credenciales.</p>

                <h2>4. Confidencialidad y Tratamiento de Datos Personales</h2>
                <p>En estricto apego y cumplimiento a la <strong>Ley Federal de Protección de Datos Personales en Posesión de los Particulares (LFPDPPP)</strong>, la Sociedad se obliga a mantener la confidencialidad de toda la información y datos personales que reciba por parte del Cliente y de los usuarios de este último.</p>
                <p>Mientras su suscripción o servicio se encuentre activo, la Sociedad se compromete íntegramente a resguardar la totalidad de los datos ingresados en la plataforma, haciendo buen uso de ellos y protegiéndolos contra accesos no autorizados, alteración, pérdida o destrucción.</p>

                <h2>5. Retención de Datos Post-Cancelación</h2>
                <p>En el supuesto de que el Cliente decida cancelar su cuenta o se suspenda el servicio por falta de pago o por incumplimiento de estos términos, la Sociedad mantendrá un respaldo de los datos e información alojados en la cuenta por un periodo estricto de <strong>60 días naturales</strong> posteriores a la fecha efectiva de cancelación.</p>
                <p>Este lapso tiene como única finalidad permitir al Cliente la recuperación de un respaldo de su información, previa solicitud formal a nuestro equipo de soporte técnico.</p>

                <h2>6. Eliminación Definitiva de los Datos</h2>
                <p>Una vez transcurrido el plazo de 60 días naturales descrito en la sección anterior, y en caso de que la información no haya sido solicitada mediante respaldo por el Cliente, <strong>todos los datos, archivos e información que permanezcan alojados en la cuenta serán eliminados de manera definitiva e irreversible de nuestros servidores.</strong> La Sociedad no tendrá obligación alguna de retener ni recuperar dicha información transcurrido este periodo.</p>

                <h2>7. Cookies e Información de Dispositivos</h2>
                <p>Al acceder a la Aplicación, el Cliente conviene en recibir archivos de datos que se almacenan en el disco duro de su dispositivo ("Cookies"). Dichos archivos se utilizan para fines de seguridad, para mantener la sesión del usuario activa, y para rastrear información estadística que ayude a mejorar el servicio. De igual manera, la Sociedad podrá recabar datos técnicos y de conexión de los dispositivos mediante los cuales tenga acceso a la Aplicación.</p>

                <h2>8. Propiedad Intelectual</h2>
                <p>El Cliente acuerda que la titularidad de los derechos de propiedad intelectual sobre el código, diseño, logotipos, marcas y contenidos de la Aplicación corresponden de manera exclusiva a <strong>DrG Labs Co.</strong>, o en su caso a terceros licenciantes. Queda estrictamente prohibida su reproducción, distribución o modificación sin autorización previa.</p>

                <h2>9. Modificaciones, Suspensión y Terminación del Servicio</h2>
                <p>La Sociedad se reserva el derecho de modificar en cualquier momento los presentes Términos de Uso. Dichas modificaciones serán notificadas a través de la Aplicación o vía correo electrónico.</p>
                <p>Asimismo, la Sociedad se reserva el derecho a negar o dar por terminado el acceso o el uso del Cliente a la Aplicación por cualquier incumplimiento a los presentes términos. En caso de que el Cliente presente una falta de pago continua por un periodo de <strong>90 días naturales</strong>, la cuenta será dada de baja (desactivada) del sistema, bloqueando el acceso de forma definitiva a todos los usuarios asociados a dicha cuenta, sin que ello genere responsabilidad alguna para la Sociedad frente al Cliente.</p>

                <h2>10. Pagos y Periodos de Prueba</h2>
                <p>Al registrarse en la Aplicación, se podrá otorgar un periodo de prueba inicial sin costo, cuya duración será la especificada en la oferta comercial vigente (típicamente 15 días). Para continuar utilizando el servicio o realizar un cambio de plan ("Upgrade") una vez finalizado o próximo a finalizar dicho periodo, el Cliente deberá registrar un método de pago válido.</p>
                <p>En caso de que el Cliente ingrese su método de pago y ya haya superado su periodo de prueba, o le queden menos de 48 horas para su expiración, el cobro del plan seleccionado se realizará de manera inmediata (por reglas operativas de las pasarelas de pago). Todo cambio a un plan superior posterior a la primera contratación generará un cargo inmediato por el monto o la diferencia aplicable al nuevo periodo de facturación.</p>

                <h2>11. Cancelación por parte del Cliente y Políticas de Reembolso</h2>
                <p>El Cliente podrá solicitar la cancelación de su suscripción y la baja de su cuenta en cualquier momento a través del panel de configuración de la Aplicación. Al ejecutar esta acción, la suscripción de pago será cancelada de manera inmediata y el acceso a los datos de la cuenta quedará bloqueado.</p>
                <p>La Sociedad mantiene una estricta política de <strong>no reembolsos ni devoluciones</strong>. Si la suscripción del Cliente fue cobrada recientemente, se renovó de forma automática o el ciclo de facturación ya inició, el cargo no será revertido ni prorrateado bajo ninguna circunstancia. La cancelación aplica de forma inmediata desde el momento de su ejecución, sin generar saldos a favor o compensaciones monetarias.</p>

                <h2>12. Leyes Aplicables y Jurisdicción</h2>
                <p>Para la interpretación, cumplimiento y ejecución de los presentes Términos de Uso, el Cliente está de acuerdo en que serán aplicables las leyes de los Estados Unidos Mexicanos y se somete a la jurisdicción de los tribunales competentes en México, renunciando expresamente a cualquier otro fuero que pudiera corresponderle en razón de su domicilio presente o futuro.</p>
                <?php endif; ?>
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
                        <li><a href="<?php echo esc_url(home_url('/cotizador/')); ?>">Cotizador en línea</a></li>
                        <li><a href="<?php echo esc_url(home_url('/software-para-cotizaciones/')); ?>">Software para
                                cotizaciones</a></li>
                        <li><a href="<?php echo esc_url(home_url('/seguimiento-de-cotizaciones/')); ?>">Seguimiento de
                                cotizaciones</a></li>
                        <li><a href="<?php echo esc_url(home_url('/programa-para-hacer-presupuestos/')); ?>">Programa
                                para presupuestos</a></li>
                        <li><a href="<?php echo esc_url(home_url('/cotizaciones-por-whatsapp/')); ?>">Cotizaciones por
                                WhatsApp</a></li>
                        <li><a href="<?php echo esc_url(home_url('/software-de-cotizaciones-para-constructoras/')); ?>">Para
                                constructoras</a></li>
                        <li><a href="<?php echo esc_url(home_url('/software-de-cotizaciones-para-servicios/')); ?>">Para
                                servicios</a></li>
                    </ul>
                </div>
                <div class="footer-links">
                    <h4>Compañía</h4>
                    <ul>
                        <li><a href="<?php echo esc_url(home_url('/que-es-cotizalo/')); ?>">¿Qué es Cotízalo?</a></li>
                        <li><a href="<?php echo esc_url(home_url('/soporte/')); ?>">Soporte</a></li>
                        <li><a href="<?php echo esc_url(home_url('/aviso-de-privacidad/')); ?>">Aviso de Privacidad</a>
                        </li>
                        <li><a href="<?php echo esc_url(home_url('/terminos-y-condiciones/')); ?>">Términos y
                                Condiciones</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?>
                    <?php echo esc_html(get_theme_mod('footer_copyright', 'PixelZero.mx . Todos los derechos reservados.')); ?>
                </p>
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

        });
    </script>
    <?php wp_footer(); ?>
</body>

</html>