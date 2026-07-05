# cotizalo-web 🌐

Sitio de marketing y landing page de **[Cotizalo](https://cotizalo.net)** — la plataforma SaaS de cotizaciones para microempresas. Este repositorio contiene la instalación de WordPress que sirve el sitio público `cotizalo.net`, hospedado en **Hostinger** y sincronizado con GitHub mediante una llave SSH.

---

## 🏗️ Stack tecnológico

| Capa | Tecnología |
|---|---|
| CMS | WordPress (última versión estable) |
| Servidor web | LiteSpeed (hosting Hostinger) |
| Base de datos | MySQL — host `127.0.0.1` |
| Tema activo | `cotizalo` (tema custom) |
| Caché | LiteSpeed Cache Plugin |
| Lenguaje | PHP 8.x |

---

## 🗂️ Estructura del proyecto

Solo se listan los archivos **activos y relevantes**. Los archivos core de WordPress (`wp-admin/`, `wp-includes/`, `wp-*.php`) son estándar y no se modifican.

```
cotizalo-web/
│
├── 📁 precios/
│   └── index.php                        # Loader físico: bootstrapea WP y carga page-precios.php
│                                        # (alternativa al routing de WP para /precios/)
│
├── 📁 wp-content/
│   │
│   ├── 📁 themes/
│   │   └── cotizalo/                    # ⭐ Tema personalizado (ACTIVO)
│   │       ├── style.css                # Metadatos del tema (requerido por WP)
│   │       ├── functions.php            # Setup, scripts encolados, customizer, routing /precios/
│   │       ├── front-page.php           # ✅ Landing page principal (cotizalo.net/)
│   │       ├── page-precios.php         # ✅ Página de precios (cotizalo.net/precios/)
│   │       ├── index.php                # Fallback requerido por WP (no es la página activa)
│   │       └── assets/
│   │           └── assets/              # ⚠️ Doble nivel assets/ (no renombrar, paths hardcodeados)
│   │               ├── css/
│   │               │   └── styles.css   # ✅ Sistema de diseño completo del tema
│   │               ├── js/
│   │               │   └── main.js      # ✅ JS: scroll sticky header + IntersectionObserver
│   │               └── logos/
│   │                   ├── ISOTIPO/
│   │                   │   └── Cotizalo-5.png   # ✅ Favicon PNG — usado en todos los templates
│   │                   └── LOGOTIPO3/
│   │                       └── Cotizalo-8.png   # ✅ Logo horizontal — nav y footer
│   │
│   ├── 📁 plugins/
│   │   ├── classic-editor               # Editor clásico de WordPress
│   │   ├── hostinger                    # Plugin base de Hostinger
│   │   ├── hostinger-ai-assistant       # Asistente IA de Hostinger
│   │   ├── hostinger-easy-onboarding    # Onboarding de Hostinger
│   │   ├── hostinger-reach              # Herramientas de alcance de Hostinger
│   │   └── litespeed-cache              # ✅ Caché de LiteSpeed (activo)
│   │
│   ├── 📁 mu-plugins/                   # Must-use plugins (Hostinger)
│   │   ├── hostinger-auto-updates.php
│   │   └── hostinger-preview-domain.php
│   │
│   └── 📁 uploads/                      # Media subido desde el admin de WP
│
├── favicon.ico                          # Favicon raíz del sitio (formato .ico)
├── wp-config.php                        # ⚠️ Configuración de WP (BD, claves — repo privado)
└── [archivos core de WordPress]         # wp-admin/, wp-includes/, wp-*.php — no modificar
```

---

## 🎨 Tema Custom: `cotizalo`

El tema fue desarrollado desde cero por **David Ramirez** para la plataforma Cotizalo.

### Páginas y templates activos

| Archivo | URL | Descripción |
|---|---|---|
| `front-page.php` | `cotizalo.net/` | Landing page principal: hero, características y CTA |
| `page-precios.php` | `cotizalo.net/precios/` | Página de planes y precios con toggle mensual/anual |
| `precios/index.php` | `cotizalo.net/precios/` | Loader físico alternativo que bootstrapea WP sin routing |
| `index.php` | fallback | Requerido por WP; se activa si WP no encuentra otro template |

### Assets del tema

> ⚠️ **Nota importante:** La ruta real de los assets tiene un doble nivel `assets/assets/`. No renombrar la carpeta exterior sin actualizar los paths en `functions.php`, `front-page.php`, `page-precios.php` e `index.php`.

| Archivo | Path en tema | Propósito |
|---|---|---|
| `styles.css` | `assets/assets/css/styles.css` | Sistema de diseño completo (encolado por `functions.php`) |
| `main.js` | `assets/assets/js/main.js` | Header sticky + animaciones scroll |
| `Cotizalo-5.png` | `assets/assets/logos/ISOTIPO/` | Favicon PNG — referenciado en todos los templates |
| `Cotizalo-8.png` | `assets/assets/logos/LOGOTIPO3/` | Logo horizontal (nav + footer) |
| `favicon.ico` | `/favicon.ico` (raíz del sitio) | Favicon principal formato ICO |

### Sistema de diseño (`styles.css`)

- **Colores de marca:** `--primary: #123A2C` (Verde PANTONE 303C), `--bg-dark: #0A0E1A`
- **Tipografía:** Montserrat (Google Fonts) — 400, 500, 600, 700
- **Layout:** Container máximo de 1200px, diseño responsivo mobile-first
- **Componentes:** Navbar fijo con blur al scroll, botones con hover, cards glassmorphism, animaciones `fade-in-up`, `scale-in`

### Planes de precios (`page-precios.php`)

| Plan | Precio/mes | Almacenamiento |
|---|---|---|
| Inicial | $199 MXN | 3 GB |
| Básico | $399 MXN | 10 GB |
| **Profesional** ⭐ | $599 MXN | 50 GB |
| Empresarial | $899 MXN | 80 GB |

> Todos los botones de contratación redirigen a → `https://app.cotizalo.net/signup`

### Funciones clave (`functions.php`)

- **`cotizalo_theme_setup`** — registra soporte para `title-tag`, miniaturas y logo custom
- **`cotizalo_scripts`** — encola `assets/assets/css/styles.css` (v1.0.5) y Montserrat de Google Fonts
- **`cotizalo_customize_register`** — panel de personalización en el Customizer de WP (hero, features, CTA)
- **`template_redirect` hook** — sirve `/precios/` sin necesitar una página en la base de datos

---

## 🔗 Conexión GitHub ↔ Hostinger (SSH)

El repositorio en GitHub está conectado al servidor de Hostinger mediante una **llave SSH**. El flujo de trabajo es:

### Configuración inicial (realizada una vez)

```bash
# 1. En el servidor Hostinger (via SSH terminal):
ssh-keygen -t ed25519 -C "tu@email.com"
cat ~/.ssh/id_ed25519.pub
# Copiar la clave pública y agregarla en:
# GitHub → Settings → SSH and GPG keys → New SSH key

# 2. Clonar el repositorio en el servidor:
git clone git@github.com:drg339orig/cotizalo-web.git /home/u299553167/domains/cotizalo.net/public_html
```

### Flujo de deploy (uso diario)

```bash
# ─── En local (Mac) ───────────────────────────────────────────
# 1. Editar archivos del tema en:
#    wp-content/themes/cotizalo/

# 2. Commit y push a GitHub
git add .
git commit -m "feat: descripción del cambio"
git push origin main

# ─── En el servidor Hostinger (SSH) ───────────────────────────
# 3. Conectarse al servidor
ssh u299553167@cotizalo.net

# 4. Ir al directorio raíz del sitio
cd /home/u299553167/domains/cotizalo.net/public_html

# 5. Hacer pull de los últimos cambios
git pull origin main
```

### Repositorio

```
https://github.com/drg339orig/cotizalo-web.git
```

---

## ⚙️ Configuración de WordPress (`wp-config.php`)

| Parámetro | Valor |
|---|---|
| `DB_NAME` | `u299553167_u6YfB` |
| `DB_USER` | `u299553167_oHuGc` |
| `DB_HOST` | `127.0.0.1` |
| `DB_CHARSET` | `utf8` |
| `table_prefix` | `wp_` |
| `WP_DEBUG` | `false` |
| `WP_CACHE` | `true` (LiteSpeed) |
| `FS_METHOD` | `direct` |
| `WP_AUTO_UPDATE_CORE` | `minor` |

> ⚠️ **Nunca subas `wp-config.php` a un repositorio público.** Actualmente está incluido porque el repo es privado.

---

## 🌐 URLs importantes

| Descripción | URL |
|---|---|
| Sitio público | https://cotizalo.net |
| Página de precios | https://cotizalo.net/precios/ |
| Admin WordPress | https://cotizalo.net/wp-admin/ |
| App (plataforma SaaS) | https://app.cotizalo.net |
| Registro / Signup | https://app.cotizalo.net/signup |
| Login | https://app.cotizalo.net/login |

---

## 🧹 Limpieza realizada (julio 2026)

Los siguientes archivos/carpetas fueron eliminados por estar **sin uso y no referenciados** en ningún template:

| Eliminado | Razón |
|---|---|
| `themes/cotizalo/assets/js/main.js` | Duplicado obsoleto del JS (versión corta, no referenciada) |
| `themes/cotizalo/assets/assets/logos/LOGOTIPO/` | 21 variantes de logo sin ninguna referencia en el código |
| `themes/cotizalo/assets/assets/logos/LOGOTIPO2/` | 16 variantes de logo sin ninguna referencia en el código |
| `themes/cotizalo/assets/assets/logos/ISOTIPO/Cotizalo-{1-4,6-14}.png` | 13 variantes del isotipo; solo se usa `Cotizalo-5.png` |
| `themes/cotizalo/assets/assets/logos/LOGOTIPO3/Cotizalo-{1-7,9-14}.png` | 13 variantes del logotipo; solo se usa `Cotizalo-8.png` |

Adicionalmente se corrigió un **bug de ruta en favicon** en `front-page.php` e `index.php`:
`/assets/logos/ISOTIPO/` → `/assets/assets/logos/ISOTIPO/` (path correcto que existe en disco).

---

## 🔒 Archivos ignorados por Git

```gitignore
.DS_Store
**/.DS_Store
```

> Los archivos `wp-config.php` **no están en `.gitignore`** ya que el repositorio es privado. Se recomienda agregarlo si el repositorio se hace público en el futuro.

---

## 👤 Autor

**David Ramirez** — DrG Labs CO.  
© 2025 Todos los derechos reservados.
