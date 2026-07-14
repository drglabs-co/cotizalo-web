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
        .page-hero {
            padding-top: calc(var(--nav-height) + 3rem);
            padding-bottom: 4rem;
        }

        /* Layout Grid */
        .manual-layout {
            display: grid;
            grid-template-columns: 280px 1fr;
            gap: 2.5rem;
            align-items: start;
            margin-top: 2rem;
        }

        /* Sidebar Navigation Menu */
        .manual-sidebar {
            background: #fff;
            border-radius: var(--radius-md);
            padding: 1.5rem;
            border: 1px solid var(--border-dark);
            box-shadow: var(--shadow-sm);
            position: sticky;
            top: calc(var(--nav-height) + 2rem);
            max-height: calc(100vh - var(--nav-height) - 4rem);
            overflow-y: auto;
            text-align: left;
        }

        .manual-sidebar::-webkit-scrollbar {
            width: 6px;
        }
        .manual-sidebar::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 3px;
        }

        .sidebar-section-title {
            font-size: 0.85rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            color: var(--text-dark-muted);
            margin-bottom: 0.75rem;
            padding-bottom: 0.5rem;
            border-bottom: 1px solid rgba(0, 0, 0, 0.06);
        }

        .sidebar-menu {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .sidebar-menu-item {
            margin-bottom: 0.25rem;
        }

        .sidebar-link {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            padding: 0.6rem 0.75rem;
            color: var(--text-dark-muted);
            font-weight: 500;
            font-size: 0.9rem;
            border-radius: var(--radius-sm);
            transition: all 0.2s ease;
        }

        .sidebar-link:hover, .sidebar-link.active {
            background: var(--primary-light);
            color: var(--primary);
            font-weight: 600;
        }

        /* Search input style */
        .search-container {
            margin-bottom: 1.5rem;
            position: relative;
        }

        .search-input {
            width: 100%;
            padding: 0.75rem 1rem 0.75rem 2.5rem;
            border: 1px solid #cbd5e1;
            border-radius: var(--radius-sm);
            font-size: 0.9rem;
            font-family: var(--font-main);
            color: var(--text-dark);
            outline: none;
            transition: border-color 0.2s;
        }

        .search-input:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 3px var(--primary-light);
        }

        .search-icon {
            position: absolute;
            left: 0.9rem;
            top: 50%;
            transform: translateY(-50%);
            color: #94a3b8;
            font-size: 0.95rem;
        }

        /* Content Areas */
        .content-box {
            background: var(--bg-light);
            border-radius: var(--radius-lg);
            padding: 3rem;
            border: 1px solid var(--border-light);
            color: var(--text-dark);
            box-shadow: var(--shadow-sm);
            text-align: left;
        }
        .content-box h2 {
            color: var(--primary);
            margin-top: 0;
            margin-bottom: 1.5rem;
            border-bottom: 2px solid var(--primary);
            padding-bottom: 0.5rem;
        }
        .content-box p {
            color: var(--text-dark-muted);
            line-height: 1.8;
            margin-bottom: 1rem;
        }

        /* Collapsible Section Layout */
        .collapsible-header {
            background: var(--bg-light-alt);
            padding: 1.25rem 1.5rem;
            border-radius: var(--radius-md);
            border-left: 5px solid var(--primary);
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: background 0.2s;
            margin-bottom: 1rem;
            user-select: none;
        }

        .collapsible-header:hover {
            background: #f1f5f9;
        }

        .collapsible-header.active {
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0;
            margin-bottom: 0;
        }

        .collapsible-header h4 {
            color: var(--primary);
            margin: 0;
            font-size: 1.15rem;
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .collapsible-icon {
            transition: transform 0.3s;
            color: var(--primary);
            font-size: 1rem;
        }

        .collapsible-header.active .collapsible-icon {
            transform: rotate(180deg);
        }

        .collapsible-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s cubic-bezier(0, 1, 0, 1);
            background: #fff;
            border: 1px solid #e2e8f0;
            border-top: none;
            border-bottom-left-radius: var(--radius-md);
            border-bottom-right-radius: var(--radius-md);
            margin-bottom: 1rem;
        }

        .collapsible-content-inner {
            padding: 1.5rem;
        }

        .collapsible-content-inner ul {
            list-style: disc;
            padding-left: 1.5rem;
            margin: 1rem 0;
        }
        .collapsible-content-inner li {
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
            margin-top: 1rem;
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

        /* Sticky header / navbar overrides on scroll */
        .scrolled .manual-sidebar {
            top: calc(var(--nav-height) + 1.5rem);
            max-height: calc(100vh - var(--nav-height) - 3rem);
        }

        /* Responsive Layout */
        @media (max-width: 991px) {
            .manual-layout {
                grid-template-columns: 1fr;
                gap: 1.5rem;
            }
            .manual-sidebar {
                position: static;
                max-height: none;
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
            <p class="text-muted" style="max-width: 700px; margin: 0 auto 1.5rem; font-size: 1.2rem;">
                Guía completa de funcionamiento y ayuda para configurar tu portal de cotizaciones paso a paso.
            </p>

            <div class="manual-layout">
                <!-- Sidebar Menu & Search -->
                <aside class="manual-sidebar">
                    <div class="search-container">
                        <i class="fa-solid fa-magnifying-glass search-icon"></i>
                        <input type="text" id="manual-search" class="search-input" placeholder="Buscar en el manual...">
                    </div>

                    <div class="sidebar-section-title">Manual de Ayuda</div>
                    <ul class="sidebar-menu">
                        <li class="sidebar-menu-item">
                            <a href="#preferencias" class="sidebar-link active" data-target="preferencias">
                                <i class="fa-solid fa-user-gear"></i> Preferencias de Usuario
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
                                <i class="fa-solid fa-file-lines"></i> Plantillas de Documentos
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

                <!-- Main Content Box -->
                <div class="content-box">
                    <h2>Configuración del Sistema</h2>
                    <p style="margin-bottom: 2rem;">
                        Aprende cómo personalizar tu cuenta, gestionar tu empresa y configurar los diferentes apartados dentro de la pestaña de Configuración.
                    </p>

                    <!-- Preferencia de Usuario -->
                    <div id="preferencias" class="collapsible-wrapper search-target">
                        <div class="collapsible-header active">
                            <h4><i class="fa-solid fa-user-gear"></i> Preferencia de Usuario</h4>
                            <i class="fa-solid fa-chevron-down collapsible-icon"></i>
                        </div>
                        <div class="collapsible-content" style="max-height: none;">
                            <div class="collapsible-content-inner">
                                <p>En este apartado puedes personalizar tu experiencia de usuario individual en el portal:</p>
                                <ul>
                                    <li><strong>Seleccionar Idioma:</strong> Elige entre inglés y español para toda la interfaz del panel.</li>
                                    <li><strong>Zona Horaria:</strong> Configura tu zona horaria para registrar correctamente las horas de creación y firmas.</li>
                                    <li><strong>Perfil de Cotización Predeterminado:</strong> Si tienes más de un perfil creado, define cuál se aplicará por defecto en cada cotización nueva.</li>
                                    <li><strong>Cambiar Contraseña:</strong> Actualiza de forma segura tu contraseña para acceder al portal.</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Configuración Global -->
                    <div id="config-global" class="collapsible-wrapper search-target">
                        <div class="collapsible-header">
                            <h4><i class="fa-solid fa-globe"></i> Configuración Global</h4>
                            <i class="fa-solid fa-chevron-down collapsible-icon"></i>
                        </div>
                        <div class="collapsible-content">
                            <div class="collapsible-content-inner">
                                <p>Permite configurar los datos del negocio que aparecerán públicamente en las cotizaciones y PDFs:</p>
                                <ul>
                                    <li><strong>Datos de Contacto:</strong> Agrega el Nombre de la Empresa, Eslogan, RFC, Teléfono, Correo y Sitio Web.</li>
                                    <li><strong>Logotipo de la Empresa:</strong> Sube tu logo (PNG o JPG). Este logotipo sustituirá de inmediato al logo genérico de la barra lateral y se mostrará en los encabezados.</li>
                                    <li><strong>Impuestos:</strong> Configura el nombre del impuesto local (ej. IVA) y el porcentaje correspondiente (ej. 16.00%).</li>
                                    <li><strong>Habilitar Función Dividida:</strong> Habilita esta opción para que el total se pueda dividir por un número determinado (por ejemplo, número de huéspedes, personas o días) directamente en el formulario de la cotización.</li>
                                    <li><strong>Habilitar Descuento Unitario:</strong> Permite colocar descuentos individuales a cada partida o producto por separado, además del descuento general.</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Plan de Suscripción -->
                    <div id="plan-suscripcion" class="collapsible-wrapper search-target">
                        <div class="collapsible-header">
                            <h4><i class="fa-solid fa-credit-card"></i> Plan de Suscripción</h4>
                            <i class="fa-solid fa-chevron-down collapsible-icon"></i>
                        </div>
                        <div class="collapsible-content">
                            <div class="collapsible-content-inner">
                                <p>Controla las características de cobro e información de tu plan activo:</p>
                                <ul>
                                    <li><strong>Plan Actual:</strong> Consulta el tipo de suscripción de tu cuenta y espacio de almacenamiento.</li>
                                    <li><strong>Actualizar Plan (Upgrade):</strong> Cambia a planes superiores para añadir más funciones y espacio.</li>
                                    <li><strong>Restricción de Downgrade:</strong> No se permite cambiar a un plan inferior de manera directa para evitar la pérdida o eliminación accidental de la información que ya excede la capacidad del plan menor.</li>
                                    <li><strong>Facturación y Métodos de Pago:</strong> Visualiza tu próximo ciclo de cobro y actualiza la tarjeta de crédito o débito a través de Stripe de forma segura.</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Perfiles de Cotización -->
                    <div id="perfiles" class="collapsible-wrapper search-target">
                        <div class="collapsible-header">
                            <h4><i class="fa-solid fa-id-card"></i> Perfiles de Cotización (Secuencias y Predeterminados)</h4>
                            <i class="fa-solid fa-chevron-down collapsible-icon"></i>
                        </div>
                        <div class="collapsible-content">
                            <div class="collapsible-content-inner">
                                <p>Crea múltiples perfiles si manejas diferentes marcas, líneas de negocio o tipos de clientes:</p>
                                <ul>
                                    <li><strong>Nombre del Perfil:</strong> Nombre de referencia interna para el perfil.</li>
                                    <li><strong>Prefijo de cotizaciones:</strong> Letras o códigos iniciales para la secuencia de folios. Cada perfil inicia su numeración automáticamente desde el 1.</li>
                                    <li><strong>Plantillas Predeterminadas:</strong> Selecciona el Encabezado, Pie de Página y Términos predeterminados que se cargarán de manera automática al cotizar con este perfil.</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Plantillas de Documentos -->
                    <div id="plantillas" class="collapsible-wrapper search-target">
                        <div class="collapsible-header">
                            <h4><i class="fa-solid fa-file-lines"></i> Plantillas de Documentos</h4>
                            <i class="fa-solid fa-chevron-down collapsible-icon"></i>
                        </div>
                        <div class="collapsible-content">
                            <div class="collapsible-content-inner">
                                <p>Prepara secciones completas de textos libres para armar tus presupuestos rápidamente:</p>
                                <ul>
                                    <li><strong>Formulario Unificado:</strong> Permite registrar plantillas especificando Nombre, Tipo (Encabezado, Pie o Términos y Condiciones) y Contenido.</li>
                                    <li><strong>Editor Enriquecido:</strong> Agrega libremente textos, tablas, alineaciones o imágenes a tus documentos finales.</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Gestión de Usuarios -->
                    <div id="usuarios" class="collapsible-wrapper search-target">
                        <div class="collapsible-header">
                            <h4><i class="fa-solid fa-users-gear"></i> Gestión de Usuarios</h4>
                            <i class="fa-solid fa-chevron-down collapsible-icon"></i>
                        </div>
                        <div class="collapsible-content">
                            <div class="collapsible-content-inner">
                                <div class="info-box">
                                    <strong>Nota importante:</strong> Esta sección solo está habilitada y visible si cuentas con el plan <strong>Empresarial (Cotizalo 80 / 80GB)</strong>.
                                </div>
                                <p>Administra los colaboradores con acceso a tu organización:</p>
                                <ul>
                                    <li><strong>Administración Completa:</strong> Crea nuevos usuarios, edita su información, cambia contraseñas o deshabilita accesos.</li>
                                    <li><strong>Asignación de Perfil:</strong> Vincula a cada colaborador un perfil de cotización predefinido.</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Zona de Peligro -->
                    <div id="zona-peligro" class="collapsible-wrapper search-target">
                        <div class="collapsible-header">
                            <h4><i class="fa-solid fa-triangle-exclamation"></i> Zona de Peligro</h4>
                            <i class="fa-solid fa-chevron-down collapsible-icon"></i>
                        </div>
                        <div class="collapsible-content">
                            <div class="collapsible-content-inner">
                                <div class="warning-box" style="margin-top: 0;">
                                    <h4><i class="fa-solid fa-triangle-exclamation"></i> Baja de la Cuenta</h4>
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
                        </div>
                    </div>

                </div>
            </div>

            <div class="animate-on-scroll fade-in-up delay-400" style="margin-top: 3rem;">
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

            // -----------------------------------------------------
            // Collapsible Sections Engine
            // -----------------------------------------------------
            const collapsibles = document.querySelectorAll('.collapsible-header');
            collapsibles.forEach(col => {
                col.addEventListener('click', () => {
                    const content = col.nextElementSibling;
                    const isActive = col.classList.contains('active');

                    // Close all others
                    collapsibles.forEach(c => {
                        c.classList.remove('active');
                        c.nextElementSibling.style.maxHeight = null;
                    });

                    // Toggle current
                    if (!isActive) {
                        col.classList.add('active');
                        content.style.maxHeight = content.scrollHeight + 'px';
                    }
                });
            });

            // -----------------------------------------------------
            // Sidebar Navigation & Highlighting
            // -----------------------------------------------------
            const sidebarLinks = document.querySelectorAll('.sidebar-link');
            sidebarLinks.forEach(link => {
                link.addEventListener('click', (e) => {
                    e.preventDefault();
                    const targetId = link.getAttribute('data-target');
                    const targetEl = document.getElementById(targetId);
                    
                    if (targetEl) {
                        // Open collapsible if closed
                        const colHeader = targetEl.querySelector('.collapsible-header');
                        const colContent = targetEl.querySelector('.collapsible-content');
                        
                        collapsibles.forEach(c => {
                            c.classList.remove('active');
                            c.nextElementSibling.style.maxHeight = null;
                        });

                        colHeader.classList.add('active');
                        colContent.style.maxHeight = colContent.scrollHeight + 'px';

                        // Set active sidebar class
                        sidebarLinks.forEach(l => l.classList.remove('active'));
                        link.classList.add('active');

                        // Scroll cleanly to target element
                        const offsetPosition = targetEl.getBoundingClientRect().top + window.pageYOffset - 120;
                        window.scrollTo({
                            top: offsetPosition,
                            behavior: 'smooth'
                        });
                    }
                });
            });

            // -----------------------------------------------------
            // Search / Filter System
            // -----------------------------------------------------
            const searchInput = document.getElementById('manual-search');
            searchInput.addEventListener('input', (e) => {
                const query = e.target.value.toLowerCase().trim();
                const wrappers = document.querySelectorAll('.search-target');

                wrappers.forEach(wrap => {
                    const textContent = wrap.textContent.toLowerCase();
                    const headerText = wrap.querySelector('.collapsible-header h4').textContent.toLowerCase();

                    // If matches, display wrap, otherwise hide
                    if (textContent.includes(query)) {
                        wrap.style.display = 'block';
                        
                        // If exact header match or query is non-empty, auto-expand matching wrappers
                        if (query.length > 2) {
                            const colHeader = wrap.querySelector('.collapsible-header');
                            const colContent = wrap.querySelector('.collapsible-content');
                            colHeader.classList.add('active');
                            colContent.style.maxHeight = colContent.scrollHeight + 'px';
                        }
                    } else {
                        wrap.style.display = 'none';
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
        });
    </script>
    <?php wp_footer(); ?>
</body>
</html>
