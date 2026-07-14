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
            padding-bottom: 3rem;
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
            border-bottom: 2px solid var(--primary);
            padding-bottom: 0.5rem;
        }
        .content-box h3 {
            color: var(--primary);
            margin-top: 2rem;
            margin-bottom: 1rem;
            font-size: 1.3rem;
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
            padding-bottom: 0.3rem;
        }
        .content-box p {
            color: var(--text-dark-muted);
            line-height: 1.8;
            margin-bottom: 1rem;
        }
        .manual-section {
            margin-bottom: 2.5rem;
            padding: 1.5rem;
            background: var(--bg-light-alt);
            border-radius: var(--radius-md);
            border-left: 5px solid var(--primary);
        }
        .manual-section h4 {
            color: var(--primary);
            margin-bottom: 0.75rem;
            font-size: 1.15rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        .manual-section ul {
            list-style: disc;
            padding-left: 1.5rem;
            margin: 1rem 0;
        }
        .manual-section li {
            margin-bottom: 0.5rem;
            color: var(--text-dark-muted);
            line-height: 1.7;
        }
        .warning-box {
            background-color: rgba(239, 68, 68, 0.05);
            border: 1px solid rgba(239, 68, 68, 0.2);
            border-left: 5px solid #ef4444;
            padding: 1.5rem;
            border-radius: var(--radius-md);
            margin-top: 2rem;
        }
        .warning-box h4 {
            color: #ef4444;
            margin-bottom: 0.75rem;
            font-size: 1.15rem;
        }
        .info-box {
            background-color: rgba(245, 158, 11, 0.05);
            border: 1px solid rgba(245, 158, 11, 0.2);
            border-left: 5px solid #f59e0b;
            padding: 1rem 1.5rem;
            border-radius: var(--radius-md);
            margin-bottom: 1rem;
            color: #d97706;
            font-size: 0.95rem;
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
                <li><a href="<?php echo esc_url(home_url('/')); ?>#how-it-works" class="nav-item">Cómo Funciona</a></li>
                <li><a href="<?php echo esc_url(home_url('/precios/')); ?>" class="nav-item">Precios</a></li>
                <li><a href="<?php echo esc_url(home_url('/manual/')); ?>" class="nav-item nav-item--active">Manual</a></li>
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
            <h1 class="display-title-sm" style="margin-bottom: 1rem;">Manual de Usuario</h1>
            <p class="text-muted" style="max-width: 700px; margin: 0 auto 3rem; font-size: 1.2rem;">
                Guía completa de funcionamiento y ayuda para configurar tu portal de cotizaciones paso a paso.
            </p>

            <div class="content-box animate-on-scroll fade-in-up delay-100" style="text-align: left; max-width: 900px; margin: 0 auto 3rem;">
                <h2>Configuración del Sistema</h2>
                <p>
                    Aprende cómo personalizar tu cuenta, gestionar tu empresa y configurar los diferentes apartados dentro de la pestaña de Configuración.
                </p>

                <!-- Preferencia de Usuario -->
                <div class="manual-section">
                    <h4>Preferencia de Usuario</h4>
                    <p>En este apartado puedes personalizar tu experiencia de usuario individual en el portal:</p>
                    <ul>
                        <li><strong>Seleccionar Idioma:</strong> Elige entre inglés y español para toda la interfaz del panel.</li>
                        <li><strong>Zona Horaria:</strong> Configura tu zona horaria para registrar correctamente las horas de creación y firmas.</li>
                        <li><strong>Perfil de Cotización Predeterminado:</strong> Si tienes más de un perfil creado, define cuál se aplicará por defecto en cada cotización nueva.</li>
                        <li><strong>Cambiar Contraseña:</strong> Actualiza de forma segura tu contraseña para acceder al portal.</li>
                    </ul>
                </div>

                <!-- Configuración Global -->
                <div class="manual-section">
                    <h4>Configuración Global</h4>
                    <p>Permite configurar los datos del negocio que aparecerán públicamente en las cotizaciones y PDFs:</p>
                    <ul>
                        <li><strong>Datos de Contacto:</strong> Agrega el Nombre de la Empresa, Eslogan, RFC, Teléfono, Correo y Sitio Web.</li>
                        <li><strong>Logotipo de la Empresa:</strong> Sube tu logo (PNG o JPG). Este logotipo sustituirá de inmediato al logo genérico de la barra lateral y se mostrará en los encabezados.</li>
                        <li><strong>Impuestos:</strong> Configura el nombre del impuesto local (ej. IVA) y el porcentaje correspondiente (ej. 16.00%).</li>
                        <li><strong>Habilitar Función Dividida:</strong> Habilita esta opción para que el total se pueda dividir por un número determinado (por ejemplo, número de huéspedes, personas o días) directamente en el formulario de la cotización.</li>
                        <li><strong>Habilitar Descuento Unitario:</strong> Permite colocar descuentos individuales a cada partida o producto por separado, además del descuento general.</li>
                    </ul>
                </div>

                <!-- Plan de Suscripción -->
                <div class="manual-section">
                    <h4>Plan de Suscripción</h4>
                    <p>Controla las características de cobro e información de tu plan activo:</p>
                    <ul>
                        <li><strong>Plan Actual:</strong> Consulta el tipo de suscripción de tu cuenta y espacio de almacenamiento.</li>
                        <li><strong>Actualizar Plan (Upgrade):</strong> Cambia a planes superiores para añadir más funciones y espacio.</li>
                        <li><strong>Restricción de Downgrade:</strong> No se permite cambiar a un plan inferior de manera directa para evitar la pérdida o eliminación accidental de la información que ya excede la capacidad del plan menor.</li>
                        <li><strong>Facturación y Métodos de Pago:</strong> Visualiza tu próximo ciclo de cobro y actualiza la tarjeta de crédito o débito a través de Stripe de forma segura.</li>
                    </ul>
                </div>

                <!-- Perfiles de Cotización -->
                <div class="manual-section">
                    <h4>Perfiles de Cotización (Secuencias y Predeterminados)</h4>
                    <p>Crea múltiples perfiles si manejas diferentes marcas, líneas de negocio o tipos de clientes:</p>
                    <ul>
                        <li><strong>Nombre del Perfil:</strong> Nombre de referencia interna para el perfil.</li>
                        <li><strong>Prefijo de cotizaciones:</strong> Letras o códigos iniciales para la secuencia de folios. Cada perfil inicia su numeración automáticamente desde el 1.</li>
                        <li><strong>Plantillas Predeterminadas:</strong> Selecciona el Encabezado, Pie de Página y Términos predeterminados que se cargarán de manera automática al cotizar con este perfil.</li>
                    </ul>
                </div>

                <!-- Plantillas de Documentos -->
                <div class="manual-section">
                    <h4>Plantillas de Documentos</h4>
                    <p>Prepara secciones completas de textos libres para armar tus presupuestos rápidamente:</p>
                    <ul>
                        <li><strong>Formulario Unificado:</strong> Permite registrar plantillas especificando Nombre, Tipo (Encabezado, Pie o Términos y Condiciones) y Contenido.</li>
                        <li><strong>Editor Enriquecido:</strong> Agrega libremente textos, tablas, alineaciones o imágenes a tus documentos finales.</li>
                    </ul>
                </div>

                <!-- Gestión de Usuarios -->
                <div class="manual-section">
                    <h4>Gestión de Usuarios</h4>
                    <div class="info-box">
                        <strong>Nota importante:</strong> Esta sección solo está habilitada y visible si cuentas con el plan <strong>Empresarial (Cotizalo 80 / 80GB)</strong>.
                    </div>
                    <p>Administra los colaboradores con acceso a tu organización:</p>
                    <ul>
                        <li><strong>Administración Completa:</strong> Crea nuevos usuarios, edita su información, cambia contraseñas o deshabilita accesos.</li>
                        <li><strong>Asignación de Perfil:</strong> Vincula a cada colaborador un perfil de cotización predefinido.</li>
                        <li><strong>Seguridad:</strong> El usuario Administrador creador de la cuenta no se puede eliminar del sistema.</li>
                    </ul>
                </div>

                <!-- Zona de Peligro -->
                <div class="warning-box">
                    <h4><i class="fas fa-exclamation-triangle"></i> Zona de Peligro (Baja de la Cuenta)</h4>
                    <p>
                        Si decides dar de baja la cuenta de manera permanente, la acción se aplicará inmediatamente y tendrá las siguientes consecuencias irreversibles:
                    </p>
                    <ul>
                        <li>Bloqueo permanente de todos los accesos e información de la cuenta.</li>
                        <li>Cancelación inmediata de la suscripción de cobro recurrente en Stripe.</li>
                        <li>Bloqueo inmediato de todos los usuarios de la organización.</li>
                        <li><strong>Sin reembolsos:</strong> Los cargos ya realizados por mensualidades renovadas recientemente no serán reembolsados.</li>
                    </ul>
                </div>
            </div>

            <div class="animate-on-scroll fade-in-up delay-400">
                <a href="https://app.cotizalo.net/signup" class="btn btn-primary btn-lg">Empezar a cotizar ahora</a>
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
