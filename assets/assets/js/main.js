/**
 * COTÍZALO WEB — MAIN JAVASCRIPT
 * Modern, dependency-free interactive logic for header, pricing, accordion, and tracking.
 */
if (!window.__cotizaloMainInitialized) {
    window.__cotizaloMainInitialized = true;

    const initCotizalo = () => {
        // -----------------------------------------------------
        // 1. Sticky Header with Scroll Detection
        // -----------------------------------------------------
        const header = document.getElementById('navbar') || document.querySelector('header');
        if (header) {
            const updateHeader = () => {
                if (window.scrollY > 20) {
                    header.classList.add('scrolled');
                } else {
                    header.classList.remove('scrolled');
                }
            };
            window.addEventListener('scroll', updateHeader, { passive: true });
            updateHeader();
        }

        // -----------------------------------------------------
        // 2. Mobile Menu Toggle
        // -----------------------------------------------------
        const mobileBtn = document.querySelector('.mobile-menu-btn');
        const navContainer = document.querySelector('.nav-container');
        if (mobileBtn && navContainer && header) {
            mobileBtn.addEventListener('click', (e) => {
                e.preventDefault();
                const isOpen = header.classList.contains('menu-open');
                mobileBtn.classList.toggle('open', !isOpen);
                header.classList.toggle('menu-open', !isOpen);
                navContainer.classList.toggle('menu-open', !isOpen);
                document.body.style.overflow = !isOpen ? 'hidden' : '';
            });

            navContainer.querySelectorAll('.nav-item:not(.nav-dropdown-toggle), .nav-dropdown-menu a, .btn-nav').forEach(link => {
                link.addEventListener('click', () => {
                    mobileBtn.classList.remove('open');
                    header.classList.remove('menu-open');
                    navContainer.classList.remove('menu-open');
                    document.body.style.overflow = '';
                });
            });
        }

        // -----------------------------------------------------
        // 3. Dropdown Menu (Desktop & Mobile)
        // -----------------------------------------------------
        document.querySelectorAll('.nav-dropdown-toggle').forEach(btn => {
            btn.addEventListener('click', (e) => {
                e.preventDefault();
                e.stopPropagation();
                const dropdown = btn.closest('.nav-dropdown');
                const isOpen = dropdown.classList.contains('open');

                document.querySelectorAll('.nav-dropdown').forEach(d => {
                    d.classList.remove('open');
                    const t = d.querySelector('.nav-dropdown-toggle');
                    if (t) t.setAttribute('aria-expanded', 'false');
                });

                if (!isOpen) {
                    dropdown.classList.add('open');
                    btn.setAttribute('aria-expanded', 'true');
                }
            });
        });

        document.addEventListener('click', (e) => {
            if (!e.target.closest('.nav-dropdown')) {
                document.querySelectorAll('.nav-dropdown').forEach(d => {
                    d.classList.remove('open');
                    const t = d.querySelector('.nav-dropdown-toggle');
                    if (t) t.setAttribute('aria-expanded', 'false');
                });
            }
        });

        // -----------------------------------------------------
        // 4. FAQ Accordion (Expand/Collapse)
        // -----------------------------------------------------
        document.querySelectorAll('.faq-question').forEach(btn => {
            btn.addEventListener('click', () => {
                const item = btn.closest('.faq-item');
                const isOpen = item.classList.contains('open');

                // Close siblings for clean accordion
                const parentList = item.closest('.faq-list');
                if (parentList) {
                    parentList.querySelectorAll('.faq-item').forEach(other => {
                        if (other !== item) other.classList.remove('open');
                    });
                }

                item.classList.toggle('open', !isOpen);
            });
        });

        // -----------------------------------------------------
        // 5. Intersection Observer for Scroll Animations
        // -----------------------------------------------------
        const animatedElements = document.querySelectorAll('.animate-on-scroll');
        if ('IntersectionObserver' in window && animatedElements.length > 0) {
            const observer = new IntersectionObserver((entries, obs) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                        obs.unobserve(entry.target);
                    }
                });
            }, { rootMargin: '0px 0px -5% 0px', threshold: 0.05 });

            animatedElements.forEach(el => {
                // If already in viewport on load, show immediately
                const rect = el.getBoundingClientRect();
                if (rect.top < window.innerHeight && rect.bottom > 0) {
                    el.classList.add('visible');
                } else {
                    observer.observe(el);
                }
            });
        } else {
            animatedElements.forEach(el => el.classList.add('visible'));
        }

        // -----------------------------------------------------
        // 6. GTM / GA Lead Generation Tracking for WhatsApp
        // -----------------------------------------------------
        document.addEventListener('click', (e) => {
            const waLink = e.target.closest('a[href*="wa.me"], a[href*="api.whatsapp.com"]');
            if (!waLink) return;

            if (typeof window.dataLayer !== 'undefined') {
                window.dataLayer.push({
                    event: 'generate_lead',
                    lead_source: 'whatsapp_click',
                    page_location: window.location.href,
                    click_text: (waLink.textContent || '').trim().substring(0, 100),
                    click_classes: waLink.className || '',
                    click_url: waLink.href
                });
            }
        });
    };

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initCotizalo);
    } else {
        initCotizalo();
    }
}
