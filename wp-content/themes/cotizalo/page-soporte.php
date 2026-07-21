<?php
/**
 * Template Name: Soporte
 * Template Post Type: page
 */

$form_success = false;
$form_error = '';

if ( $_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['cotizalo_support_submit_hidden']) ) {
    // 1. Verify nonce
    if ( ! isset( $_POST['cotizalo_support_nonce'] ) || ! wp_verify_nonce( $_POST['cotizalo_support_nonce'], 'cotizalo_support_submit' ) ) {
        $form_error = 'Error de seguridad. Por favor, intente de nuevo.';
    }
    // 2. Check honeypot (bots)
    elseif ( ! empty( $_POST['website_url'] ) ) {
        $form_error = 'Spam detectado.';
    }
    else {
        // 3. Retrieve and sanitize inputs
        $nombre = sanitize_text_field( $_POST['nombre'] );
        $email = sanitize_email( $_POST['email'] );
        $cuenta_email = isset($_POST['cuenta_email']) ? sanitize_email( $_POST['cuenta_email'] ) : '';
        $telefono = isset($_POST['telefono']) ? sanitize_text_field( $_POST['telefono'] ) : '';
        $asunto = sanitize_text_field( $_POST['asunto'] );
        $mensaje = esc_textarea( $_POST['mensaje'] );

        // 4. Validate required fields
        if ( empty($nombre) || empty($email) || empty($asunto) || empty($mensaje) ) {
            $form_error = 'Por favor, complete todos los campos requeridos.';
        } elseif ( ! is_email($email) ) {
            $form_error = 'El correo electrónico de contacto no es válido.';
        } elseif ( ! empty($cuenta_email) && ! is_email($cuenta_email) ) {
            $form_error = 'El correo de la cuenta Cotízalo no es válido.';
        } else {
            // 5. Construct and send email
            $to = 'support@cotizalo.net';
            $subject = '[' . $asunto . '] Soporte Web - ' . $nombre;
            
            $body = "Ha recibido una nueva solicitud de soporte desde el sitio web cotizalo.net:\n\n";
            $body .= "Nombre: " . $nombre . "\n";
            $body .= "Correo de contacto: " . $email . "\n";
            if ( ! empty($cuenta_email) ) {
                $body .= "Correo de la cuenta Cotízalo: " . $cuenta_email . "\n";
            }
            if ( ! empty($telefono) ) {
                $body .= "Teléfono: " . $telefono . "\n";
            }
            $body .= "Tipo de consulta: " . $asunto . "\n\n";
            $body .= "Mensaje:\n" . $mensaje . "\n\n";
            $body .= "---\nEste correo fue enviado automáticamente desde el formulario de soporte de cotizalo.net.";

            $headers = array(
                'Content-Type: text/plain; charset=UTF-8',
                'From: Cotízalo Web <noreply@cotizalo.net>',
                'Reply-To: ' . $nombre . ' <' . $email . '>'
            );

            $sent = wp_mail( $to, $subject, $body, $headers );

            if ( $sent ) {
                $form_success = true;
            } else {
                $form_error = 'Ocurrió un error al enviar su mensaje. Por favor, intente más tarde o escríbanos directamente a support@cotizalo.net.';
            }
        }
    }
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soporte Técnico y Contacto | Cotízalo México</title>
    <meta name="description"
        content="¿Tienes dudas o necesitas ayuda con tu portal de cotizaciones? Contacta al equipo de soporte de Cotízalo México. Estamos listos para ayudarte a digitalizar tus ventas.">
    <meta name="keywords" content="soporte cotizalo, contacto cotizalo, ayuda tecnica cotizalo, atencion a clientes cotizalo, ayuda cotizaciones, enviar cotizacion por whatsapp, alternativa a excel para cotizaciones, control de cotizaciones y clientes, cotizador para freelancers, cotizador para pymes">
    
    <!-- Open Graph / Facebook / WhatsApp -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo esc_url( home_url( $_SERVER['REQUEST_URI'] ) ); ?>">
    <meta property="og:title" content="Soporte Técnico y Contacto | Cotízalo México">
    <meta property="og:description" content="¿Tienes dudas o necesitas ayuda con tu portal de cotizaciones? Contacta al equipo de soporte de Cotízalo México. Estamos listos para ayudarte a digitalizar tus ventas.">
    <meta property="og:image" content="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/assets/logos/ISOTIPO/Cotizalo-5.png">
    <meta property="og:locale" content="es_MX">

    <!-- Twitter / X -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Soporte Técnico y Contacto | Cotízalo México">
    <meta name="twitter:description" content="¿Tienes dudas o necesitas ayuda con tu portal de cotizaciones? Contacta al equipo de soporte de Cotízalo México. Estamos listos para ayudarte a digitalizar tus ventas.">
    <meta name="twitter:image" content="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/assets/logos/ISOTIPO/Cotizalo-5.png">

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
        /* Custom Styles for Support Page */
        .page-hero {
            padding-top: calc(var(--nav-height) + 4rem);
            padding-bottom: 5rem;
            text-align: center;
        }

        .support-container {
            max-width: 650px;
            margin: 0 auto;
            background: rgba(28, 32, 41, 0.55);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border: 1px solid var(--border-light);
            border-radius: var(--radius-lg);
            padding: 3rem 2.5rem;
            text-align: left;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4);
        }

        @media (max-width: 576px) {
            .support-container {
                padding: 2rem 1.5rem;
                margin: 0 1rem;
            }
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1.5rem;
        }

        @media (max-width: 600px) {
            .form-row {
                grid-template-columns: 1fr;
                gap: 0;
            }
        }

        .form-label {
            display: block;
            font-size: 0.875rem;
            font-weight: 600;
            color: var(--text-light-muted);
            margin-bottom: 0.5rem;
        }

        .form-label span.required {
            color: #ef4444;
            margin-left: 2px;
        }

        .form-control {
            width: 100%;
            background: rgba(10, 14, 26, 0.4);
            border: 1px solid rgba(255, 255, 255, 0.15);
            border-radius: var(--radius-sm);
            padding: 0.85rem 1rem;
            color: var(--text-light);
            font-family: var(--font-main);
            font-size: 0.95rem;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
            outline: none;
        }

        .form-control:focus {
            border-color: var(--primary);
            box-shadow: 0 0 10px rgba(18, 58, 44, 0.4);
        }

        select.form-control {
            cursor: pointer;
            appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke='white'%3E%3Cpath stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M19 9l-7 7-7-7'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 1rem center;
            background-size: 1.2rem;
            padding-right: 2.5rem;
        }

        select.form-control option {
            background: var(--bg-surface);
            color: var(--text-light);
        }

        .btn-submit {
            width: 100%;
            padding: 1rem;
            font-size: 1rem;
            font-weight: 700;
            letter-spacing: 0.05em;
            text-transform: uppercase;
            margin-top: 1rem;
            cursor: pointer;
            border: none;
            border-radius: var(--radius-sm);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        .btn-submit i {
            transition: transform 0.3s ease;
        }

        .btn-submit:hover i {
            transform: translateX(4px);
        }

        .alert {
            padding: 1.25rem;
            border-radius: var(--radius-sm);
            margin-bottom: 2rem;
            font-size: 0.95rem;
            line-height: 1.6;
            display: flex;
            align-items: flex-start;
            gap: 12px;
        }

        .alert-success {
            background: rgba(16, 185, 129, 0.15);
            border: 1px solid rgba(16, 185, 129, 0.3);
            color: #34d399;
        }

        .alert-error {
            background: rgba(239, 68, 68, 0.15);
            border: 1px solid rgba(239, 68, 68, 0.3);
            color: #f87171;
        }

        .success-box {
            text-align: center;
            padding: 2rem 1rem;
        }

        .success-icon {
            font-size: 4.5rem;
            color: #10b981;
            margin-bottom: 1.5rem;
            animation: scaleIn 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        .success-box h2 {
            font-size: 1.75rem;
            color: var(--text-light);
            margin-bottom: 1rem;
        }

        .success-box p {
            color: var(--text-light-muted);
            margin-bottom: 2rem;
            font-size: 1.1rem;
        }

        @keyframes scaleIn {
            from { transform: scale(0); opacity: 0; }
            to { transform: scale(1); opacity: 1; }
        }

        /* Honey-pot style to hide from humans */
        .hp-field {
            display: none !important;
            visibility: hidden !important;
            height: 0 !important;
            width: 0 !important;
            overflow: hidden !important;
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
            <h1 class="display-title-sm" style="margin-bottom: 1rem;">Soporte Técnico y Contacto</h1>
            <p class="text-muted" style="max-width: 600px; margin: 0 auto 3rem; font-size: 1.2rem;">
                ¿Tienes dudas o necesitas ayuda con tu cuenta? Envíanos tus comentarios y nos pondremos en contacto contigo lo antes posible.
            </p>

            <div class="support-container animate-on-scroll fade-in-up delay-100">
                <?php if ( $form_success ) : ?>
                    <div class="success-box">
                        <div class="success-icon"><i class="fa-solid fa-circle-check"></i></div>
                        <h2>¡Mensaje enviado con éxito!</h2>
                        <p>Hemos recibido tus comentarios. Un miembro de nuestro equipo de soporte se pondrá en contacto contigo en tu correo de contacto lo antes posible.</p>
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-primary">Volver al Inicio</a>
                    </div>
                <?php else : ?>
                    <?php if ( ! empty($form_error) ) : ?>
                        <div class="alert alert-error">
                            <i class="fa-solid fa-triangle-exclamation" style="margin-top: 3px;"></i>
                            <div><?php echo esc_html($form_error); ?></div>
                        </div>
                    <?php endif; ?>

                    <form action="" method="POST" id="support-form">
                        <!-- Token de seguridad nonce -->
                        <?php wp_nonce_field( 'cotizalo_support_submit', 'cotizalo_support_nonce' ); ?>
                        <input type="hidden" name="cotizalo_support_submit_hidden" value="1">
                        
                        <!-- Honeypot Field (Anti-Spam) -->
                        <div class="hp-field">
                            <label for="website_url">No llenar este campo:</label>
                            <input type="text" name="website_url" id="website_url" tabindex="-1" autocomplete="off">
                        </div>

                        <!-- Name and Email -->
                        <div class="form-row">
                            <div class="form-group">
                                <label for="nombre" class="form-label">Nombre Completo <span class="required">*</span></label>
                                <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ej. Juan Pérez" required value="<?php echo isset($_POST['nombre']) ? esc_attr($_POST['nombre']) : ''; ?>">
                            </div>
                            <div class="form-group">
                                <label for="email" class="form-label">Correo de Contacto <span class="required">*</span></label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="Ej. juan@correo.com" required value="<?php echo isset($_POST['email']) ? esc_attr($_POST['email']) : ''; ?>">
                            </div>
                        </div>

                        <!-- Phone and App Account Email -->
                        <div class="form-row">
                            <div class="form-group">
                                <label for="telefono" class="form-label">Teléfono (Opcional)</label>
                                <input type="tel" name="telefono" id="telefono" class="form-control" placeholder="Ej. 5512345678" value="<?php echo isset($_POST['telefono']) ? esc_attr($_POST['telefono']) : ''; ?>">
                            </div>
                            <div class="form-group">
                                <label for="cuenta_email" class="form-label">Correo de Cuenta Cotízalo (Opcional)</label>
                                <input type="email" name="cuenta_email" id="cuenta_email" class="form-control" placeholder="El correo registrado en la app" value="<?php echo isset($_POST['cuenta_email']) ? esc_attr($_POST['cuenta_email']) : ''; ?>">
                            </div>
                        </div>

                        <!-- Subject -->
                        <div class="form-group">
                            <label for="asunto" class="form-label">Tipo de Consulta / Asunto <span class="required">*</span></label>
                            <select name="asunto" id="asunto" class="form-control" required>
                                <option value="" disabled selected>Selecciona una opción...</option>
                                <option value="Soporte Técnico" <?php echo (isset($_POST['asunto']) && $_POST['asunto'] === 'Soporte Técnico') ? 'selected' : ''; ?>>Soporte Técnico</option>
                                <option value="Facturación y Planes" <?php echo (isset($_POST['asunto']) && $_POST['asunto'] === 'Facturación y Planes') ? 'selected' : ''; ?>>Facturación y Planes</option>
                                <option value="Reportar un Problema" <?php echo (isset($_POST['asunto']) && $_POST['asunto'] === 'Reportar un Problema') ? 'selected' : ''; ?>>Reportar un Problema (Bug)</option>
                                <option value="Dudas Generales" <?php echo (isset($_POST['asunto']) && $_POST['asunto'] === 'Dudas Generales') ? 'selected' : ''; ?>>Dudas Generales / Ventas</option>
                            </select>
                        </div>

                        <!-- Message -->
                        <div class="form-group">
                            <label for="mensaje" class="form-label">Mensaje o Detalles <span class="required">*</span></label>
                            <textarea name="mensaje" id="mensaje" rows="6" class="form-control" placeholder="Describe detalladamente tu duda o problema aquí..." required><?php echo isset($_POST['mensaje']) ? esc_textarea($_POST['mensaje']) : ''; ?></textarea>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary btn-submit">
                            Enviar Mensaje <i class="fa-solid fa-paper-plane"></i>
                        </button>
                    </form>
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

            // Animations on scroll
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

            // Mobile menu
            const mobileBtn = document.querySelector('.mobile-menu-btn');
            const navContainer = document.querySelector('.nav-container');
            if (mobileBtn && navContainer) {
                mobileBtn.addEventListener('click', () => {
                    mobileBtn.classList.toggle('open');
                    header.classList.toggle('menu-open');
                    navContainer.classList.toggle('menu-open');
                });
            }

            // Client-side validations
            const form = document.getElementById('support-form');
            if (form) {
                form.addEventListener('submit', (e) => {
                    const nombre = document.getElementById('nombre').value.trim();
                    const email = document.getElementById('email').value.trim();
                    const asunto = document.getElementById('asunto').value;
                    const mensaje = document.getElementById('mensaje').value.trim();

                    if (!nombre || !email || !asunto || !mensaje) {
                        e.preventDefault();
                        alert('Por favor, completa todos los campos obligatorios.');
                    }
                });
            }
        });
    </script>
    <?php wp_footer(); ?>
</body>
</html>
