/**
 * COTÍZALO WEB — MAIN JAVASCRIPT
 * Framer-Inspired Micro-Interactions, 3D Perspective Tilt, Animated Metrics,
 * Live Mockup Calculations, Scroll-Linked Progress & WhatsApp Conversion Tracking.
 */
if (!window.__cotizaloMainInitialized) {
    window.__cotizaloMainInitialized = true;

    const initCotizalo = () => {
        const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

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
            const closeMobileMenu = () => {
                mobileBtn.classList.remove('open');
                mobileBtn.setAttribute('aria-expanded', 'false');
                header.classList.remove('menu-open');
                navContainer.classList.remove('menu-open');
                document.body.style.overflow = '';
            };

            const toggleMobileMenu = (e) => {
                if (e) {
                    e.preventDefault();
                    e.stopPropagation();
                }
                const willOpen = !header.classList.contains('menu-open');
                mobileBtn.classList.toggle('open', willOpen);
                mobileBtn.setAttribute('aria-expanded', String(willOpen));
                header.classList.toggle('menu-open', willOpen);
                navContainer.classList.toggle('menu-open', willOpen);
                document.body.style.overflow = willOpen ? 'hidden' : '';
            };

            mobileBtn.addEventListener('click', toggleMobileMenu);
            mobileBtn.addEventListener('keydown', (e) => {
                if (e.key === 'Enter' || e.key === ' ') {
                    e.preventDefault();
                    toggleMobileMenu();
                }
            });

            // Close when clicking nav links or buttons (excluding dropdown toggle accordion)
            navContainer.querySelectorAll('.nav-item:not(.nav-dropdown-toggle), .nav-dropdown-menu a, .btn-nav').forEach(link => {
                link.addEventListener('click', closeMobileMenu);
            });

            // Close on Escape key
            document.addEventListener('keydown', (e) => {
                if (e.key === 'Escape' && header.classList.contains('menu-open')) {
                    closeMobileMenu();
                }
            });

            // Auto-close when resizing to desktop (> 900px)
            window.addEventListener('resize', () => {
                if (window.innerWidth > 900 && header.classList.contains('menu-open')) {
                    closeMobileMenu();
                }
            }, { passive: true });
        }

        // -----------------------------------------------------
        // 3. Dropdown Menu (Desktop & Mobile)
        // -----------------------------------------------------
        document.querySelectorAll('.nav-dropdown-toggle').forEach(btn => {
            btn.addEventListener('click', (e) => {
                e.preventDefault();
                e.stopPropagation();
                const dropdown = btn.closest('.nav-dropdown');
                if (!dropdown) return;
                const isOpen = dropdown.classList.contains('open');

                // On desktop, close sibling dropdowns
                if (window.innerWidth > 900) {
                    document.querySelectorAll('.nav-dropdown').forEach(d => {
                        if (d !== dropdown) {
                            d.classList.remove('open');
                            const t = d.querySelector('.nav-dropdown-toggle');
                            if (t) t.setAttribute('aria-expanded', 'false');
                        }
                    });
                }

                dropdown.classList.toggle('open', !isOpen);
                btn.setAttribute('aria-expanded', String(!isOpen));

                // In Firefox, clear focus to prevent sticky hover/focus pseudo-classes
                btn.blur();
            });
        });

        document.addEventListener('click', (e) => {
            if (!e.target.closest('.nav-dropdown') && window.innerWidth > 900) {
                document.querySelectorAll('.nav-dropdown').forEach(d => {
                    d.classList.remove('open');
                    const t = d.querySelector('.nav-dropdown-toggle');
                    if (t) t.setAttribute('aria-expanded', 'false');
                });
            }
        });

        // -----------------------------------------------------
        // 4. FAQ Accordion (Smooth Expand/Collapse)
        // -----------------------------------------------------
        document.querySelectorAll('.faq-question').forEach(btn => {
            btn.addEventListener('click', () => {
                const item = btn.closest('.faq-item');
                const isOpen = item.classList.contains('open');

                const parentList = item.closest('.faq-list');
                if (parentList) {
                    parentList.querySelectorAll('.faq-item').forEach(other => {
                        if (other !== item) {
                            other.classList.remove('open');
                            const otherBtn = other.querySelector('.faq-question');
                            if (otherBtn) otherBtn.setAttribute('aria-expanded', 'false');
                        }
                    });
                }

                item.classList.toggle('open', !isOpen);
                btn.setAttribute('aria-expanded', String(!isOpen));
            });
        });

        // -----------------------------------------------------
        // 5. Framer Mouse Glow Tracking on All Cards (Bento, Plans, Benefits, Flows, Pipeline)
        // -----------------------------------------------------
        const glowCards = document.querySelectorAll('.bento-card, .plan-card, .step-card, .compare-card, .benefit-card, .support-card, .support-info-card, .legal-content-card, .lp-card, .flow-card, .use-case-card, .industry-card, .pipeline-card, .script-card');
        glowCards.forEach(card => {
            card.addEventListener('mousemove', (e) => {
                const rect = card.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;
                card.style.setProperty('--mouse-x', `${x}px`);
                card.style.setProperty('--mouse-y', `${y}px`);
            });
        });

        // -----------------------------------------------------
        // 6. Hero 3D Perspective Tilt on Mouse (Framer Showcase)
        // -----------------------------------------------------
        const heroWrapper = document.querySelector('.hero-image-wrapper');
        const mockupFrame = document.querySelector('.product-mockup-frame');
        if (heroWrapper && mockupFrame && !prefersReducedMotion) {
            let targetRotateX = 0;
            let targetRotateY = 0;
            let currentRotateX = 0;
            let currentRotateY = 0;
            let isHovered = false;

            heroWrapper.addEventListener('mousemove', (e) => {
                isHovered = true;
                const rect = heroWrapper.getBoundingClientRect();
                const centerX = rect.left + rect.width / 2;
                const centerY = rect.top + rect.height / 2;
                const offsetX = (e.clientX - centerX) / (rect.width / 2);
                const offsetY = (e.clientY - centerY) / (rect.height / 2);

                targetRotateX = -offsetY * 4.5; // Max 4.5deg pitch
                targetRotateY = offsetX * 4.5;   // Max 4.5deg yaw
            });

            heroWrapper.addEventListener('mouseleave', () => {
                isHovered = false;
                targetRotateX = 0;
                targetRotateY = 0;
            });

            const animateTilt = () => {
                currentRotateX += (targetRotateX - currentRotateX) * 0.12;
                currentRotateY += (targetRotateY - currentRotateY) * 0.12;

                if (isHovered || Math.abs(currentRotateX) > 0.05 || Math.abs(currentRotateY) > 0.05) {
                    mockupFrame.style.transform = `perspective(1200px) rotateX(${currentRotateX.toFixed(2)}deg) rotateY(${currentRotateY.toFixed(2)}deg) translateY(-2px)`;
                } else {
                    mockupFrame.style.transform = '';
                }
                requestAnimationFrame(animateTilt);
            };
            requestAnimationFrame(animateTilt);
        }

        // -----------------------------------------------------
        // 6b. App Mockup Window 3D Perspective Animation on Mouse Scroll & Movement
        // -----------------------------------------------------
        const appFrameWrappers = document.querySelectorAll('.lp-app-preview .app-frame-wrapper');
        appFrameWrappers.forEach(appFrame => {
            if (!prefersReducedMotion) {
                let targetScrollRotateX = 6;
                let targetScrollScale = 0.96;
                let targetScrollTranslateY = 25;
                let mouseRotateX = 0;
                let mouseRotateY = 0;
                let currentRotateX = 6;
                let currentRotateY = 0;
                let currentScale = 0.96;
                let currentTranslateY = 25;
                let scrollTicking = false;

                const calcScrollTilt = () => {
                    const rect = appFrame.getBoundingClientRect();
                    const winHeight = window.innerHeight || document.documentElement.clientHeight;
                    const elemCenter = rect.top + rect.height / 2;
                    const screenCenter = winHeight / 2;

                    // normalized distance from screen center: -1.2 to +1.2
                    const normalizedDist = (elemCenter - screenCenter) / (winHeight / 2);
                    const clamped = Math.max(-1.2, Math.min(1.2, normalizedDist));

                    targetScrollRotateX = clamped * 7;
                    targetScrollScale = Math.max(0.94, 1 - Math.abs(clamped) * 0.04);
                    targetScrollTranslateY = clamped * 20;
                };

                const renderFrame = () => {
                    const finalTargetX = targetScrollRotateX + mouseRotateX;
                    const finalTargetY = mouseRotateY;

                    currentRotateX += (finalTargetX - currentRotateX) * 0.1;
                    currentRotateY += (finalTargetY - currentRotateY) * 0.1;
                    currentScale += (targetScrollScale - currentScale) * 0.1;
                    currentTranslateY += (targetScrollTranslateY - currentTranslateY) * 0.1;

                    appFrame.style.transform = `perspective(1200px) rotateX(${currentRotateX.toFixed(2)}deg) rotateY(${currentRotateY.toFixed(2)}deg) scale(${currentScale.toFixed(3)}) translateY(${currentTranslateY.toFixed(1)}px)`;

                    requestAnimationFrame(renderFrame);
                };

                window.addEventListener('scroll', () => {
                    if (!scrollTicking) {
                        requestAnimationFrame(() => {
                            calcScrollTilt();
                            scrollTicking = false;
                        });
                        scrollTicking = true;
                    }
                }, { passive: true });

                appFrame.addEventListener('mousemove', (e) => {
                    const rect = appFrame.getBoundingClientRect();
                    const centerX = rect.left + rect.width / 2;
                    const centerY = rect.top + rect.height / 2;
                    const offsetX = (e.clientX - centerX) / (rect.width / 2);
                    const offsetY = (e.clientY - centerY) / (rect.height / 2);
                    mouseRotateX = -offsetY * 4;
                    mouseRotateY = offsetX * 4;
                });

                appFrame.addEventListener('mouseleave', () => {
                    mouseRotateX = 0;
                    mouseRotateY = 0;
                });

                calcScrollTilt();
                requestAnimationFrame(renderFrame);
            }
        });

        // -----------------------------------------------------
        // 6c. Interactive Commercial Pipeline Status Funnel (Seguimiento Page)
        // -----------------------------------------------------
        const pipelineStepsContainer = document.getElementById('pipelineSteps');
        if (pipelineStepsContainer) {
            const steps = pipelineStepsContainer.querySelectorAll('.pipeline-step');
            const rows = document.querySelectorAll('.pipeline-row');
            const totalBadge = document.querySelector('.pipeline-total-badge');

            const totalsByStatus = {
                'todas': '$184,500 MXN',
                'enviadas': '$41,658 MXN',
                'aceptadas': '$18,400 MXN',
                'anticipo': '$85,600 MXN',
                'borradores': '$34,900 MXN',
                'rechazadas': '$12,300 MXN'
            };

            steps.forEach(step => {
                step.addEventListener('click', () => {
                    const status = step.getAttribute('data-status');
                    steps.forEach(s => s.classList.remove('active'));
                    step.classList.add('active');

                    // Filter matching rows with smooth fade animation
                    rows.forEach(row => {
                        const rowStatus = row.getAttribute('data-status');
                        if (rowStatus === status) {
                            row.style.display = '';
                            row.style.animation = 'none';
                            void row.offsetWidth; // Reflow to re-trigger animation
                            row.style.animation = 'rowFadeIn 0.35s ease forwards';
                        } else {
                            row.style.display = 'none';
                        }
                    });

                    // Update total badge dynamically
                    if (totalBadge && totalsByStatus[status]) {
                        totalBadge.textContent = `Total cotizado: ${totalsByStatus[status]}`;
                    }
                });
            });
        }

        // -----------------------------------------------------
        // 7. Animated Number Counters (Framer Metrics)
        // -----------------------------------------------------
        const metricNumbers = document.querySelectorAll('.metric-number[data-count]');
        const animateCounter = (el) => {
            const target = parseInt(el.getAttribute('data-count'), 10);
            const prefix = el.getAttribute('data-prefix') || '';
            const suffix = el.getAttribute('data-suffix') || '';
            const duration = 1600; // ms
            const startTime = performance.now();

            const updateCount = (currentTime) => {
                const elapsed = currentTime - startTime;
                const progress = Math.min(elapsed / duration, 1);
                // Ease-out cubic
                const easeOut = 1 - Math.pow(1 - progress, 3);
                const currentVal = Math.round(target * easeOut);

                // Format with commas if > 999
                const formattedNum = target > 999 ? currentVal.toLocaleString('es-MX') : currentVal;
                el.textContent = `${prefix}${formattedNum}${suffix}`;

                if (progress < 1) {
                    requestAnimationFrame(updateCount);
                } else {
                    el.textContent = `${prefix}${target > 999 ? target.toLocaleString('es-MX') : target}${suffix}`;
                }
            };
            requestAnimationFrame(updateCount);
        };

        // -----------------------------------------------------
        // 8. Intersection Observer for Scroll Animations & Counters
        // -----------------------------------------------------
        const animatedElements = document.querySelectorAll('.animate-on-scroll');
        if ('IntersectionObserver' in window) {
            const observer = new IntersectionObserver((entries, obs) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                        // Trigger counters if inside this section
                        const counters = entry.target.querySelectorAll('.metric-number[data-count]');
                        counters.forEach(c => {
                            if (!c.dataset.counted) {
                                c.dataset.counted = 'true';
                                animateCounter(c);
                            }
                        });
                        obs.unobserve(entry.target);
                    }
                });
            }, { rootMargin: '0px 0px -6% 0px', threshold: 0.08 });

            animatedElements.forEach(el => observer.observe(el));

            // Metric strip direct observer
            const metricStrip = document.querySelector('.metrics-strip');
            if (metricStrip) {
                const metricObserver = new IntersectionObserver((entries, obs) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            metricNumbers.forEach(c => {
                                if (!c.dataset.counted) {
                                    c.dataset.counted = 'true';
                                    animateCounter(c);
                                }
                            });
                            obs.unobserve(entry.target);
                        }
                    });
                }, { threshold: 0.2 });
                metricObserver.observe(metricStrip);
            }
        } else {
            animatedElements.forEach(el => el.classList.add('visible'));
            metricNumbers.forEach(animateCounter);
        }

        // -----------------------------------------------------
        // 9. Interactive Hero Mockup Real-Time Recalculation
        // -----------------------------------------------------
        const addConceptBtn = document.querySelector('.mockup-add-concept-btn');
        const partidasTable = document.querySelector('.mockup-partidas-table tbody');
        const subtotalEl = document.querySelectorAll('.calc-row strong.tabular-nums')[0];
        const ivaEl = document.querySelectorAll('.calc-row strong.tabular-nums')[1];
        const totalEl = document.querySelector('.total-val');
        let extraRowAdded = false;

        const updateTotals = (subtotal, iva, total) => {
            if (subtotalEl) subtotalEl.textContent = `$${subtotal.toLocaleString('es-MX', { minimumFractionDigits: 2 })}`;
            if (ivaEl) ivaEl.textContent = `$${iva.toLocaleString('es-MX', { minimumFractionDigits: 2 })}`;
            if (totalEl) {
                totalEl.innerHTML = `$${total.toLocaleString('es-MX', { minimumFractionDigits: 2 })} <span class="currency">MXN</span>`;
                totalEl.parentElement.style.transition = 'box-shadow 0.3s ease, background 0.3s ease';
                totalEl.parentElement.style.boxShadow = '0 0 25px rgba(52, 211, 153, 0.45)';
                totalEl.parentElement.style.background = 'rgba(18, 58, 44, 0.4)';
                setTimeout(() => {
                    totalEl.parentElement.style.boxShadow = '';
                    totalEl.parentElement.style.background = '';
                }, 1200);
            }
        };

        if (addConceptBtn && partidasTable) {
            addConceptBtn.addEventListener('click', () => {
                if (!extraRowAdded) {
                    extraRowAdded = true;
                    const newRow = document.createElement('tr');
                    newRow.className = 'mockup-extra-row';
                    newRow.style.animation = 'navFadeIn 0.35s ease-out';
                    newRow.innerHTML = `
                      <td>
                        <div class="mockup-table-name">
                          <span class="mockup-drag-handle">:::</span>
                          <strong>Suministro e instalación de cancelería templada</strong>
                        </div>
                      </td>
                      <td style="text-align: center;" class="tabular-nums">1.00</td>
                      <td style="text-align: right;" class="tabular-nums">6,500.00</td>
                      <td style="text-align: right;" class="tabular-nums">0.00</td>
                      <td style="text-align: right;" class="tabular-nums"><span class="mockup-table-total-badge">$6,500.00</span></td>
                      <td style="text-align: center;">
                        <span class="mockup-delete-btn extra-del-btn">
                          <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <polyline points="3 6 5 6 21 6"></polyline>
                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                          </svg>
                          Eliminar
                        </span>
                      </td>
                    `;
                    partidasTable.appendChild(newRow);

                    // Recalculate: Subtotal $31,000, IVA $4,960, Total $35,960
                    updateTotals(31000, 4960, 35960);
                    addConceptBtn.textContent = '✓ Concepto Agregado';
                    addConceptBtn.style.background = 'rgba(52, 211, 153, 0.25)';

                    newRow.querySelector('.extra-del-btn').addEventListener('click', () => {
                        newRow.remove();
                        extraRowAdded = false;
                        updateTotals(24500, 3920, 28420);
                        addConceptBtn.textContent = '+ Agregar Producto / Concepto';
                        addConceptBtn.style.background = '';
                    });
                }
            });
        }

        // Mockup PDF and WhatsApp Micro-Actions
        const pdfBtn = document.querySelector('.mockup-action-btn.pdf');
        if (pdfBtn) {
            pdfBtn.addEventListener('click', () => {
                const prevText = pdfBtn.innerHTML;
                pdfBtn.innerHTML = '✓ Descargando PDF oficial...';
                pdfBtn.style.background = 'rgba(52, 211, 153, 0.3)';
                setTimeout(() => {
                    pdfBtn.innerHTML = prevText;
                    pdfBtn.style.background = '';
                }, 1800);
            });
        }

        // -----------------------------------------------------
        // 10. Scroll-Linked 3-Step Progress Line
        // -----------------------------------------------------
        const stepsSection = document.getElementById('how-it-works');
        const progressFill = document.querySelector('.steps-progress-fill');
        const stepCards = document.querySelectorAll('.step-card[data-step]');

        if (stepsSection && progressFill && stepCards.length > 0) {
            const updateStepsProgress = () => {
                const rect = stepsSection.getBoundingClientRect();
                const windowHeight = window.innerHeight;
                if (rect.top < windowHeight * 0.75 && rect.bottom > 0) {
                    const scrollProgress = Math.max(0, Math.min(1, (windowHeight * 0.75 - rect.top) / (rect.height + windowHeight * 0.25)));
                    const fillPercent = Math.max(33.33, Math.min(100, (scrollProgress * 100)));
                    progressFill.style.width = `${fillPercent}%`;

                    // Highlight active card based on progress
                    stepCards.forEach((card, index) => {
                        if (scrollProgress >= index / 3) {
                            card.classList.add('active');
                        } else {
                            card.classList.remove('active');
                        }
                    });
                }
            };
            window.addEventListener('scroll', updateStepsProgress, { passive: true });
            updateStepsProgress();
        }

        // -----------------------------------------------------
        // 11. Lead Generation Tracking for WhatsApp
        // -----------------------------------------------------
        document.addEventListener('click', (e) => {
            const waLink = e.target.closest('a[href*="wa.me"], a[href*="api.whatsapp.com"], .mockup-action-btn.whatsapp');
            if (!waLink) return;

            if (typeof window.dataLayer !== 'undefined') {
                window.dataLayer.push({
                    event: 'generate_lead',
                    lead_source: 'whatsapp_click',
                    page_location: window.location.href,
                    click_text: (waLink.textContent || '').trim().substring(0, 100),
                    click_classes: waLink.className || '',
                    click_url: waLink.href || 'mockup_action'
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
