<?php
/**
 * Template Name: Soporte
 * Template Post Type: page
 */

$form_success = isset($_GET['enviado']) && $_GET['enviado'] === '1';
$form_error = '';
$field_errors = array();
$old = array('nombre' => '', 'email' => '', 'telefono' => '', 'cuenta_email' => '', 'asunto' => '', 'mensaje' => '');
$support_email = sanitize_email(get_theme_mod('soporte_email', 'support@cotizalo.net'));
$asuntos_validos = array('Soporte Técnico', 'Facturación y Planes', 'Reportar un Problema', 'Dudas Generales');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['cotizalo_support_submit_hidden'])) {
    // Read + sanitize inputs (safe against missing keys)
    $old['nombre'] = isset($_POST['nombre']) ? sanitize_text_field(wp_unslash($_POST['nombre'])) : '';
    $old['email'] = isset($_POST['email']) ? sanitize_email(wp_unslash($_POST['email'])) : '';
    $old['cuenta_email'] = isset($_POST['cuenta_email']) ? sanitize_email(wp_unslash($_POST['cuenta_email'])) : '';
    $old['telefono'] = isset($_POST['telefono']) ? sanitize_text_field(wp_unslash($_POST['telefono'])) : '';
    $old['asunto'] = isset($_POST['asunto']) ? sanitize_text_field(wp_unslash($_POST['asunto'])) : '';
    $old['mensaje'] = isset($_POST['mensaje']) ? sanitize_textarea_field(wp_unslash($_POST['mensaje'])) : '';

    $ip = isset($_SERVER['REMOTE_ADDR']) ? preg_replace('/[^0-9a-fA-F:\.]/', '', $_SERVER['REMOTE_ADDR']) : 'unknown';
    $rate_key = 'cotizalo_support_' . md5($ip);
    $started = isset($_POST['form_started']) ? (int) $_POST['form_started'] : 0;

    if (!isset($_POST['cotizalo_support_nonce']) || !wp_verify_nonce($_POST['cotizalo_support_nonce'], 'cotizalo_support_submit')) {
        $form_error = 'Tu sesión expiró. Recarga la página e inténtalo de nuevo.';
    } elseif (!empty($_POST['website_url']) || ($started > 0 && (time() - $started) < 3)) {
        // Honeypot filled or submitted unrealistically fast: pretend success, send nothing
        $form_success = true;
    } elseif (get_transient($rate_key)) {
        $form_error = 'Ya enviaste una solicitud hace un momento. Espera un minuto antes de enviar otra.';
    } else {
        // Field-level validation
        if (mb_strlen($old['nombre']) < 3) {
            $field_errors['nombre'] = 'Escribe tu nombre completo.';
        }
        if (empty($old['email']) || !is_email($old['email'])) {
            $field_errors['email'] = 'Ingresa un correo de contacto válido.';
        }
        if (!empty($old['cuenta_email']) && !is_email($old['cuenta_email'])) {
            $field_errors['cuenta_email'] = 'El correo de la cuenta no es válido.';
        }
        if (!empty($old['telefono']) && !preg_match('/^[0-9+\-\s().]{7,20}$/', $old['telefono'])) {
            $field_errors['telefono'] = 'Ingresa un teléfono válido (7 a 20 dígitos).';
        }
        if (!in_array($old['asunto'], $asuntos_validos, true)) {
            $field_errors['asunto'] = 'Selecciona el tipo de consulta.';
        }
        if (mb_strlen($old['mensaje']) < 10) {
            $field_errors['mensaje'] = 'Cuéntanos un poco más (mínimo 10 caracteres).';
        } elseif (mb_strlen($old['mensaje']) > 3000) {
            $field_errors['mensaje'] = 'El mensaje es demasiado largo (máximo 3000 caracteres).';
        }

        if (!empty($field_errors)) {
            $form_error = 'Revisa los campos marcados en rojo.';
        } else {
            $subject = '[' . $old['asunto'] . '] Soporte Web - ' . $old['nombre'];

            $body = "Nueva solicitud de soporte desde cotizalo.net:\n\n";
            $body .= "Nombre: " . $old['nombre'] . "\n";
            $body .= "Correo de contacto: " . $old['email'] . "\n";
            if (!empty($old['cuenta_email'])) {
                $body .= "Correo de la cuenta Cotízalo: " . $old['cuenta_email'] . "\n";
            }
            if (!empty($old['telefono'])) {
                $body .= "Teléfono: " . $old['telefono'] . "\n";
            }
            $body .= "Tipo de consulta: " . $old['asunto'] . "\n\n";
            $body .= "Mensaje:\n" . $old['mensaje'] . "\n\n";
            $body .= "---\nEnviado automáticamente desde el formulario de soporte de cotizalo.net.";

            $headers = array(
                'Content-Type: text/plain; charset=UTF-8',
                'From: Cotízalo Web <noreply@cotizalo.net>',
                'Reply-To: ' . $old['nombre'] . ' <' . $old['email'] . '>'
            );

            $sent = wp_mail($support_email, $subject, $body, $headers);

            if ($sent) {
                set_transient($rate_key, 1, 60);
                // Post/Redirect/Get: avoids duplicate emails on refresh
                $redirect = add_query_arg('enviado', '1', get_permalink());
                if (!headers_sent()) {
                    wp_safe_redirect($redirect);
                    exit;
                }
                $form_success = true;
            } else {
                $form_error = 'No pudimos enviar tu mensaje. Inténtalo más tarde o escríbenos a ' . $support_email . '.';
            }
        }
    }
}
$form_started = time();
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || []; w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            }); var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-NG2ZW6L3');</script>
    <!-- End Google Tag Manager -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <link rel="canonical" href="<?php echo esc_url(home_url('/soporte/')); ?>">
    <title>Soporte Técnico y Contacto | Cotízalo México</title>
    <meta name="description"
        content="¿Tienes dudas o necesitas ayuda con tu portal de cotizaciones? Contacta al equipo de soporte de Cotízalo México. Estamos listos para ayudarte a digitalizar tus ventas.">

    <!-- Open Graph / Facebook / WhatsApp -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo esc_url(home_url($_SERVER['REQUEST_URI'])); ?>">
    <meta property="og:title" content="Soporte Técnico y Contacto | Cotízalo México">
    <meta property="og:description"
        content="¿Tienes dudas o necesitas ayuda con tu portal de cotizaciones? Contacta al equipo de soporte de Cotízalo México. Estamos listos para ayudarte a digitalizar tus ventas.">
    <meta property="og:image"
        content="<?php echo esc_url(get_template_directory_uri()); ?>/assets/assets/og-social.jpg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:locale" content="es_MX">

    <!-- Twitter / X -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Soporte Técnico y Contacto | Cotízalo México">
    <meta name="twitter:description"
        content="¿Tienes dudas o necesitas ayuda con tu portal de cotizaciones? Contacta al equipo de soporte de Cotízalo México. Estamos listos para ayudarte a digitalizar tus ventas.">
    <meta name="twitter:image"
        content="<?php echo esc_url(get_template_directory_uri()); ?>/assets/assets/og-social.jpg">

    <!-- Fonts & Favicon -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" type="image/x-icon" href="<?php echo esc_url(home_url('/favicon.ico')); ?>">
    <link rel="icon" type="image/png"
        href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/assets/logos/ISOTIPO/Cotizalo-5.png?v=3">
    <link rel="shortcut icon"
        href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/assets/logos/ISOTIPO/Cotizalo-5.png?v=3">
    <link rel="apple-touch-icon"
        href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/assets/logos/ISOTIPO/Cotizalo-5.png?v=3">


    <!-- Structured Data (Schema.org JSON-LD) -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@graph": [
            {
                "@type": "ContactPage",
                "@id": "<?php echo esc_url(get_permalink()); ?>#webpage",
                "url": "<?php echo esc_url(get_permalink()); ?>",
                "name": "Soporte Técnico y Contacto | Cotízalo México",
                "description": "¿Tienes dudas o necesitas ayuda con tu portal de cotizaciones? Contacta al equipo de soporte de Cotízalo México. Estamos listos para ayudarte a digitalizar tus ventas.",
                "isPartOf": {
                    "@id": "<?php echo esc_url(home_url('/')); ?>#website"
                },
                "breadcrumb": {
                    "@id": "<?php echo esc_url(get_permalink()); ?>#breadcrumb"
                },
                "inLanguage": "es-MX"
            },
            {
                "@type": "BreadcrumbList",
                "@id": "<?php echo esc_url(get_permalink()); ?>#breadcrumb",
                "itemListElement": [
                    {
                        "@type": "ListItem",
                        "position": 1,
                        "name": "Inicio",
                        "item": "<?php echo esc_url(home_url('/')); ?>"
                    },
                    {
                        "@type": "ListItem",
                        "position": 2,
                        "name": "Soporte"
                    }
                ]
            }
        ]
    }
    </script>
    <link rel="preload" as="image"
        href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/assets/logos/LOGOTIPO3/Cotizalo-8.png?v=2"
        type="image/png">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NG2ZW6L3" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- Navigation Header -->
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
            <div class="mobile-menu-btn" aria-label="Abrir menú" role="button" tabindex="0">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </header>

    <!-- Support Section -->
    <main>
        <section class="page-hero support-hero">
            <div class="container animate-on-scroll">
                <h1>
                    <?php echo esc_html(get_theme_mod('soporte_title', 'Soporte Técnico y Contacto')); ?>
                </h1>
                <p>
                    <?php echo esc_html(get_theme_mod('soporte_subtitle', '¿Tienes dudas o necesitas ayuda con tu cuenta? Envíanos tus comentarios y nos pondremos en contacto contigo lo antes posible.')); ?>
                </p>
            </div>
        </section>

        <section class="support-section">
            <div class="container">
                <div class="support-layout">

                    <!-- Contact info -->
                    <aside class="support-aside animate-on-scroll" aria-label="Información de contacto">
                        <div class="support-info-card">
                            <span class="support-info-icon">
                                <svg viewBox="0 0 24 24" aria-hidden="true">
                                    <rect x="3" y="5" width="18" height="14" rx="2" />
                                    <path d="m3 7 9 6 9-6" />
                                </svg>
                            </span>
                            <div>
                                <h3>Escríbenos</h3>
                                <a
                                    href="mailto:<?php echo esc_attr($support_email); ?>"><?php echo esc_html($support_email); ?></a>
                            </div>
                        </div>
                        <div class="support-info-card">
                            <span class="support-info-icon">
                                <svg viewBox="0 0 24 24" aria-hidden="true">
                                    <circle cx="12" cy="12" r="9" />
                                    <path d="M12 7v5l3 2" />
                                </svg>
                            </span>
                            <div>
                                <h3>Tiempo de respuesta</h3>
                                <p>Menos de 24 horas hábiles, de lunes a viernes.</p>
                            </div>
                        </div>
                        <div class="support-info-card">
                            <span class="support-info-icon">
                                <svg viewBox="0 0 24 24" aria-hidden="true">
                                    <path d="M9.1 9a3 3 0 0 1 5.8 1c0 2-3 2.5-3 4" />
                                    <circle cx="12" cy="12" r="9" />
                                    <path d="M12 17h.01" />
                                </svg>
                            </span>
                            <div>
                                <h3>Respuestas rápidas</h3>
                                <p>Revisa las preguntas frecuentes de <a
                                        href="<?php echo esc_url(home_url('/precios/')); ?>#faq">planes y pagos</a> o la
                                    <a href="<?php echo esc_url(home_url('/')); ?>#faq">página principal</a>.</p>
                            </div>
                        </div>
                        <div class="support-info-card">
                            <span class="support-info-icon">
                                <svg viewBox="0 0 24 24" aria-hidden="true">
                                    <path d="M12 3 4 6v6c0 4.5 3.2 8 8 9 4.8-1 8-4.5 8-9V6z" />
                                    <path d="m9 12 2 2 4-4" />
                                </svg>
                            </span>
                            <div>
                                <h3>Tus datos están seguros</h3>
                                <p>Solo usamos tu información para responder tu solicitud. Consulta el <a
                                        href="<?php echo esc_url(home_url('/aviso-de-privacidad/')); ?>">aviso de
                                        privacidad</a>.</p>
                            </div>
                        </div>
                    </aside>

                    <!-- Form card -->
                    <div class="support-form-wrap animate-on-scroll delay-100">
                        <?php if ($form_success): ?>
                            <div class="support-card success-box" role="status">
                                <div class="success-icon support-success-icon">
                                    <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />
                                        <polyline points="22 4 12 14.01 9 11.01" />
                                    </svg>
                                </div>
                                <h2>¡Mensaje enviado con éxito!</h2>
                                <p>Recibimos tu solicitud. Nuestro equipo te responderá al correo que registraste en un
                                    lapso no mayor a 24 horas hábiles.</p>
                                <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-primary">Volver al inicio</a>
                            </div>
                        <?php else: ?>
                            <form action="<?php echo esc_url(get_permalink()); ?>" method="POST" id="support-form"
                                class="support-card" novalidate>
                                <div class="support-card-head">
                                    <h2>Envíanos tu solicitud</h2>
                                    <p>Los campos con <span class="required">*</span> son obligatorios.</p>
                                </div>

                                <?php if (!empty($form_error)): ?>
                                    <div class="alert alert-error" role="alert">
                                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            style="flex-shrink:0;margin-top:2px;" aria-hidden="true">
                                            <path
                                                d="M10.29 3.86 1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z" />
                                            <path d="M12 9v4M12 17h.01" />
                                        </svg>
                                        <div><?php echo esc_html($form_error); ?></div>
                                    </div>
                                <?php endif; ?>

                                <?php wp_nonce_field('cotizalo_support_submit', 'cotizalo_support_nonce'); ?>
                                <input type="hidden" name="cotizalo_support_submit_hidden" value="1">
                                <input type="hidden" name="form_started" value="<?php echo esc_attr($form_started); ?>">

                                <!-- Honeypot anti-spam -->
                                <div class="hp-field" aria-hidden="true">
                                    <label for="website_url">No llenar este campo:</label>
                                    <input type="text" name="website_url" id="website_url" tabindex="-1" autocomplete="off">
                                </div>

                                <div class="form-row">
                                    <div
                                        class="form-group<?php echo isset($field_errors['nombre']) ? ' has-error' : ''; ?>">
                                        <label for="nombre" class="form-label">Nombre completo <span
                                                class="required">*</span></label>
                                        <input type="text" name="nombre" id="nombre" class="form-control"
                                            autocomplete="name" placeholder="Ej. Roberto Sánchez" required minlength="3"
                                            maxlength="100" value="<?php echo esc_attr($old['nombre']); ?>"
                                            aria-describedby="err-nombre" <?php echo isset($field_errors['nombre']) ? ' aria-invalid="true"' : ''; ?>>
                                        <span class="field-error"
                                            id="err-nombre"><?php echo isset($field_errors['nombre']) ? esc_html($field_errors['nombre']) : ''; ?></span>
                                    </div>
                                    <div class="form-group<?php echo isset($field_errors['email']) ? ' has-error' : ''; ?>">
                                        <label for="email" class="form-label">Correo de contacto <span
                                                class="required">*</span></label>
                                        <input type="email" name="email" id="email" class="form-control"
                                            autocomplete="email" placeholder="roberto@empresa.com" required maxlength="120"
                                            value="<?php echo esc_attr($old['email']); ?>" aria-describedby="err-email"
                                            <?php echo isset($field_errors['email']) ? ' aria-invalid="true"' : ''; ?>>
                                        <span class="field-error"
                                            id="err-email"><?php echo isset($field_errors['email']) ? esc_html($field_errors['email']) : ''; ?></span>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div
                                        class="form-group<?php echo isset($field_errors['telefono']) ? ' has-error' : ''; ?>">
                                        <label for="telefono" class="form-label">Teléfono o WhatsApp <span
                                                class="optional">(opcional)</span></label>
                                        <input type="tel" name="telefono" id="telefono" class="form-control"
                                            autocomplete="tel" placeholder="Ej. 55 1234 5678" maxlength="20"
                                            value="<?php echo esc_attr($old['telefono']); ?>"
                                            aria-describedby="err-telefono" <?php echo isset($field_errors['telefono']) ? ' aria-invalid="true"' : ''; ?>>
                                        <span class="field-error"
                                            id="err-telefono"><?php echo isset($field_errors['telefono']) ? esc_html($field_errors['telefono']) : ''; ?></span>
                                    </div>
                                    <div
                                        class="form-group<?php echo isset($field_errors['cuenta_email']) ? ' has-error' : ''; ?>">
                                        <label for="cuenta_email" class="form-label">Correo de tu cuenta Cotízalo <span
                                                class="optional">(opcional)</span></label>
                                        <input type="email" name="cuenta_email" id="cuenta_email" class="form-control"
                                            placeholder="Si ya tienes cuenta activa" maxlength="120"
                                            value="<?php echo esc_attr($old['cuenta_email']); ?>"
                                            aria-describedby="err-cuenta_email" <?php echo isset($field_errors['cuenta_email']) ? ' aria-invalid="true"' : ''; ?>>
                                        <span class="field-error"
                                            id="err-cuenta_email"><?php echo isset($field_errors['cuenta_email']) ? esc_html($field_errors['cuenta_email']) : ''; ?></span>
                                    </div>
                                </div>

                                <div class="form-group<?php echo isset($field_errors['asunto']) ? ' has-error' : ''; ?>">
                                    <label for="asunto" class="form-label">Tipo de consulta <span
                                            class="required">*</span></label>
                                    <select name="asunto" id="asunto" class="form-control" required
                                        aria-describedby="err-asunto" <?php echo isset($field_errors['asunto']) ? ' aria-invalid="true"' : ''; ?>>
                                        <option value="" disabled selected>Selecciona una opción...</option>
                                        <option value="Soporte Técnico" <?php echo selected($old['asunto'], 'Soporte Técnico', false); ?>>Soporte técnico en la app</option>
                                        <option value="Facturación y Planes" <?php echo selected($old['asunto'], 'Facturación y Planes', false); ?>>Facturación y planes</option>
                                        <option value="Reportar un Problema" <?php echo selected($old['asunto'], 'Reportar un Problema', false); ?>>Reportar un incidente / bug</option>
                                        <option value="Dudas Generales" <?php echo selected($old['asunto'], 'Dudas Generales', false); ?>>Dudas generales / ventas</option>
                                    </select>
                                    <span class="field-error"
                                        id="err-asunto"><?php echo isset($field_errors['asunto']) ? esc_html($field_errors['asunto']) : ''; ?></span>
                                </div>

                                <div class="form-group<?php echo isset($field_errors['mensaje']) ? ' has-error' : ''; ?>">
                                    <label for="mensaje" class="form-label">Mensaje o detalles <span
                                            class="required">*</span></label>
                                    <textarea name="mensaje" id="mensaje" rows="6" class="form-control" required
                                        minlength="10" maxlength="3000"
                                        placeholder="Describe tu solicitud con el mayor detalle posible: qué intentabas hacer, qué ocurrió y, si aplica, el folio de la cotización."
                                        aria-describedby="err-mensaje" <?php echo isset($field_errors['mensaje']) ? ' aria-invalid="true"' : ''; ?>><?php echo esc_textarea($old['mensaje']); ?></textarea>
                                    <div class="field-meta">
                                        <span class="field-error"
                                            id="err-mensaje"><?php echo isset($field_errors['mensaje']) ? esc_html($field_errors['mensaje']) : ''; ?></span>
                                        <span class="char-counter" id="char-counter" aria-live="polite">0 / 3000</span>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary btn-submit" id="support-submit">
                                    <span class="btn-label">Enviar solicitud</span>
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                        <path d="m22 2-7 20-4-9-9-4z" />
                                        <path d="M22 2 11 13" />
                                    </svg>
                                </button>
                            </form>
                        <?php endif; ?>
                    </div>

                </div>
            </div>
        </section>
    </main>

    <!-- Global Footer -->
    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-brand">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/assets/logos/LOGOTIPO3/Cotizalo-8.png?v=2"
                            alt="Cotízalo Logo" id="footer-logo" width="223" height="60">
                    </a>
                    <p>
                        <?php echo esc_html(get_theme_mod('footer_brand_text', 'Transformando la forma en que los negocios y contratistas en México cotizan, envían y cierran propuestas.')); ?>
                    </p>
                </div>
                <div class="footer-column">
                    <h4>Producto</h4>
                    <ul class="footer-links-list">
                        <li><a href="<?php echo esc_url(home_url('/')); ?>#features">Características</a></li>
                        <li><a href="<?php echo esc_url(home_url('/precios/')); ?>">Planes y Precios</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h4>Recursos</h4>
                    <ul class="footer-links-list">
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
                <div class="footer-column">
                    <h4>Compañía</h4>
                    <ul class="footer-links-list">
                        <li><a href="<?php echo esc_url(home_url('/que-es-cotizalo/')); ?>">¿Qué es Cotízalo?</a></li>
                        <li><a href="<?php echo esc_url(home_url('/soporte/')); ?>">Soporte Técnico</a></li>
                        <li><a href="<?php echo esc_url(home_url('/aviso-de-privacidad/')); ?>">Aviso de Privacidad</a>
                        </li>
                        <li><a href="<?php echo esc_url(home_url('/terminos-y-condiciones/')); ?>">Términos y
                                Condiciones</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <div>&copy; <?php echo date('Y'); ?> Cotízalo.net — Todos los derechos reservados.</div>
                <div>Desarrollado con tecnología de PixelZero.mx.</div>
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var form = document.getElementById('support-form');
            if (!form) return;

            var submitBtn = document.getElementById('support-submit');
            var counter = document.getElementById('char-counter');
            var msg = document.getElementById('mensaje');
            var emailRe = /^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/;

            var rules = {
                nombre: function (v) { return v.trim().length >= 3 ? '' : 'Escribe tu nombre completo.'; },
                email: function (v) { return emailRe.test(v.trim()) ? '' : 'Ingresa un correo de contacto válido.'; },
                telefono: function (v) { return !v.trim() || /^[0-9+\-\s().]{7,20}$/.test(v.trim()) ? '' : 'Ingresa un teléfono válido (7 a 20 dígitos).'; },
                cuenta_email: function (v) { return !v.trim() || emailRe.test(v.trim()) ? '' : 'El correo de la cuenta no es válido.'; },
                asunto: function (v) { return v ? '' : 'Selecciona el tipo de consulta.'; },
                mensaje: function (v) { return v.trim().length >= 10 ? '' : 'Cuéntanos un poco más (mínimo 10 caracteres).'; }
            };

            function validateField(name) {
                var input = form.elements[name];
                var group = input.closest('.form-group');
                var errEl = document.getElementById('err-' + name);
                var error = rules[name](input.value);
                group.classList.toggle('has-error', !!error);
                if (error) { input.setAttribute('aria-invalid', 'true'); } else { input.removeAttribute('aria-invalid'); }
                errEl.textContent = error;
                return !error;
            }

            Object.keys(rules).forEach(function (name) {
                var input = form.elements[name];
                input.addEventListener('blur', function () { validateField(name); });
                input.addEventListener('input', function () {
                    if (input.closest('.form-group').classList.contains('has-error')) validateField(name);
                });
            });

            function updateCounter() {
                counter.textContent = msg.value.length + ' / 3000';
                counter.classList.toggle('near-limit', msg.value.length > 2700);
            }
            msg.addEventListener('input', updateCounter);
            updateCounter();

            form.addEventListener('submit', function (e) {
                var firstInvalid = null;
                Object.keys(rules).forEach(function (name) {
                    if (!validateField(name) && !firstInvalid) firstInvalid = form.elements[name];
                });
                if (firstInvalid) {
                    e.preventDefault();
                    firstInvalid.focus();
                    return;
                }
                // Prevent double submission
                submitBtn.disabled = true;
                submitBtn.classList.add('is-loading');
                submitBtn.querySelector('.btn-label').textContent = 'Enviando...';
            });
        });
    </script>
    <?php wp_footer(); ?>
</body>

</html>