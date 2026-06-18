import Lenis from 'lenis';
import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

gsap.registerPlugin(ScrollTrigger);

const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
const isMobileDevice = window.innerWidth < 768;
let lenis;

function initSmoothScroll() {
    if (prefersReducedMotion) {
        return;
    }

    lenis = new Lenis({
        duration: 1.1,
        easing: (t) => Math.min(1, 1.001 - 2 ** (-10 * t)),
        smoothWheel: true,
        touchMultiplier: 2,
    });

    lenis.on('scroll', ScrollTrigger.update);

    gsap.ticker.add((time) => {
        lenis.raf(time * 1000);
    });
    gsap.ticker.lagSmoothing(0);

    document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
        anchor.addEventListener('click', (e) => {
            const id = anchor.getAttribute('href');
            if (!id || id === '#') {
                return;
            }

            const target = document.querySelector(id);
            if (!target) {
                return;
            }

            e.preventDefault();
            lenis.scrollTo(target, { offset: -96, duration: 1.4 });
        });
    });
}

function initNavbar() {
    const header = document.getElementById('site-header');
    const mobileBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');

    const lightSectionSelectors = ['#stats', '#segments', '#journey', '#esg', '#network'];
    const headerProbeOffset = 72;

    let cachedLightSections = null;
    const isOverLightSection = () => {
        const byId = lightSectionSelectors.some((selector) => {
            const section = document.querySelector(selector);
            if (!section) return false;
            const { top, bottom } = section.getBoundingClientRect();
            return top <= headerProbeOffset && bottom > headerProbeOffset;
        });
        if (byId) return true;

        if (!cachedLightSections) {
            cachedLightSections = Array.from(document.querySelectorAll('.section-tone-light, .section-tone-white'));
        }
        return cachedLightSections.some((section) => {
            const { top, bottom } = section.getBoundingClientRect();
            return top <= headerProbeOffset && bottom > headerProbeOffset;
        });
    };

    const getScrollY = () => (lenis ? lenis.scroll : window.scrollY);

    const updateHeaderState = (scrollY = getScrollY()) => {
        if (!header) {
            return;
        }

        header.classList.toggle('is-scrolled', scrollY > 24);
        header.classList.toggle('header-on-light', isOverLightSection());
    };

    ScrollTrigger.create({
        start: 0,
        end: 99999,
        onUpdate: (self) => updateHeaderState(self.scroll()),
    });

    updateHeaderState();
    window.addEventListener('resize', updateHeaderState, { passive: true });

    mobileBtn?.addEventListener('click', () => {
        const isOpen = mobileMenu?.classList.toggle('hidden') === false;
        mobileBtn.setAttribute('aria-expanded', String(isOpen));
    });

    mobileMenu?.querySelectorAll('a').forEach((link) => {
        link.addEventListener('click', () => {
            mobileMenu?.classList.add('hidden');
            mobileBtn?.setAttribute('aria-expanded', 'false');
        });
    });
}

function initHero() {
    const media = document.querySelector('.hero-media');
    const content = document.querySelector('.hero-content');

    if (!prefersReducedMotion && media && !isMobileDevice) {
        gsap.to(media, {
            yPercent: 18,
            ease: 'none',
            scrollTrigger: {
                trigger: '#hero',
                start: 'top top',
                end: 'bottom top',
                scrub: true,
            },
        });

        const heroOrbTween = gsap.to('.hero-gradient-orb', {
            x: 30,
            y: -20,
            duration: 6,
            ease: 'sine.inOut',
            yoyo: true,
            repeat: -1,
            stagger: { each: 1.2, from: 'random' },
        });

        const heroSweepTween = gsap.to('.hero-gradient-sweep', {
            opacity: 0.7,
            duration: 4,
            ease: 'sine.inOut',
            yoyo: true,
            repeat: -1,
        });

        ScrollTrigger.create({
            trigger: '#hero',
            start: 'top top',
            end: 'bottom top',
            onLeave: () => { heroOrbTween.pause(); heroSweepTween.pause(); },
            onEnterBack: () => { heroOrbTween.resume(); heroSweepTween.resume(); },
        });
    }

    if (prefersReducedMotion) {
        gsap.set(['.hero-word', '.hero-sub', '.hero-cta > *', '.hero-eyebrow', '.scroll-indicator'], {
            autoAlpha: 1,
            y: 0,
        });

        return;
    }

    const tl = gsap.timeline({ defaults: { ease: 'power4.out' } });

    tl.from('.hero-eyebrow > *', { autoAlpha: 0, y: 20, duration: 0.9, stagger: 0.08 })
        .from(
            '.hero-word',
            {
                autoAlpha: 0,
                y: 56,
                rotateX: -12,
                transformOrigin: '50% 100%',
                duration: 1.1,
                stagger: { each: 0.045, from: 'start' },
            },
            '-=0.5',
        )
        .from('.hero-line-accent', { autoAlpha: 0, scaleX: 0, duration: 0.8, ease: 'power3.inOut' }, '-=0.55')
        .from('.hero-sub', { autoAlpha: 0, y: 28, duration: 0.9 }, '-=0.5')
        .from('.hero-cta > *', { autoAlpha: 0, y: 20, duration: 0.7, stagger: 0.12 }, '-=0.5')
        .from('.scroll-indicator', { autoAlpha: 0, duration: 0.6 }, '-=0.3');

    const scrollDotTween = gsap.to('.scroll-dot', {
        y: 14,
        duration: 1.4,
        ease: 'power2.inOut',
        yoyo: true,
        repeat: -1,
    });

    ScrollTrigger.create({
        trigger: '#hero',
        start: 'top top',
        end: 'bottom top',
        onLeave: () => scrollDotTween.pause(),
        onEnterBack: () => scrollDotTween.resume(),
    });
}

function initHeroRotator() {
    const container = document.querySelector('.hero-rotator');
    if (!container || container._rotatorInit) return;
    container._rotatorInit = true;

    const phrases = Array.from(container.querySelectorAll('.hero-rotator-phrase'));
    if (phrases.length < 2) return;

    let current = 0;
    setInterval(() => {
        phrases[current].classList.remove('is-active');
        current = (current + 1) % phrases.length;
        phrases[current].classList.add('is-active');
    }, 5000);
}

function initParticles() {
    const container = document.getElementById('hero-particles');
    if (!container || prefersReducedMotion) {
        return;
    }

    const count = isMobileDevice ? 0 : 8;
    if (!count) return;

    for (let i = 0; i < count; i++) {
        const dot = document.createElement('span');
        dot.className = 'hero-particle absolute rounded-full bg-white';
        dot.style.cssText = `
            width: ${gsap.utils.random(1, 3)}px;
            height: ${gsap.utils.random(1, 3)}px;
            left: ${gsap.utils.random(0, 100)}%;
            top: ${gsap.utils.random(0, 100)}%;
            opacity: ${gsap.utils.random(0.15, 0.5)};
        `;
        container.appendChild(dot);

        gsap.to(dot, {
            y: gsap.utils.random(-80, -200),
            x: gsap.utils.random(-30, 30),
            duration: gsap.utils.random(8, 16),
            repeat: -1,
            yoyo: true,
            ease: 'sine.inOut',
            delay: gsap.utils.random(0, 4),
        });
    }
}

function initReveals() {
    if (prefersReducedMotion) {
        return;
    }

    gsap.utils.toArray('.reveal-up').forEach((el) => {
        gsap.from(el, {
            autoAlpha: 0,
            y: 48,
            duration: 1.1,
            ease: 'power3.out',
            scrollTrigger: {
                trigger: el,
                start: 'top 88%',
                toggleActions: 'play none none none',
            },
        });
    });

    gsap.utils.toArray('.reveal-fade').forEach((el) => {
        gsap.from(el, {
            autoAlpha: 0,
            duration: 1.2,
            ease: 'power2.out',
            scrollTrigger: {
                trigger: el,
                start: 'top 88%',
            },
        });
    });

    gsap.from('.segment-card', {
        autoAlpha: 0,
        y: 72,
        duration: 1,
        stagger: 0.14,
        ease: 'power3.out',
        scrollTrigger: {
            trigger: '#segments-grid',
            start: 'top 78%',
        },
    });

    const statsHeader = document.getElementById('stats-header');

    if (statsHeader) {
        gsap.from(statsHeader.children, {
            autoAlpha: 0,
            y: 28,
            duration: 0.95,
            stagger: 0.12,
            ease: 'power3.out',
            scrollTrigger: {
                trigger: '#stats',
                start: 'top 82%',
                toggleActions: 'play none none none',
            },
        });
    }

    gsap.from('.stat-item', {
        autoAlpha: 0,
        y: 24,
        scale: 0.98,
        duration: 0.8,
        stagger: 0.09,
        ease: 'power3.out',
        scrollTrigger: {
            trigger: '#stats-grid',
            start: 'top 85%',
            toggleActions: 'play none none none',
        },
    });

    gsap.from('.esg-milestone', {
        autoAlpha: 0,
        x: -32,
        duration: 0.75,
        stagger: 0.1,
        ease: 'power2.out',
        scrollTrigger: {
            trigger: '.esg-timeline',
            start: 'top 78%',
        },
    });

    gsap.from('.esg-line', {
        scaleY: 0,
        transformOrigin: 'top center',
        duration: 1.4,
        ease: 'power2.inOut',
        scrollTrigger: {
            trigger: '.esg-timeline',
            start: 'top 78%',
        },
    });

    if (!isMobileDevice) {
        const esgDotTween = gsap.to('.esg-dot', {
            boxShadow: '0 0 14px rgba(94, 179, 228, 0.85)',
            repeat: -1,
            yoyo: true,
            duration: 2,
            stagger: 0.35,
            ease: 'sine.inOut',
        });
        const esgEl = document.getElementById('esg');
        if (esgEl) {
            ScrollTrigger.create({
                trigger: esgEl,
                start: 'top bottom',
                end: 'bottom top',
                onLeave: () => esgDotTween.pause(),
                onLeaveBack: () => esgDotTween.pause(),
                onEnter: () => esgDotTween.resume(),
                onEnterBack: () => esgDotTween.resume(),
            });
        }
    }

    gsap.from('.network-reveal', {
        autoAlpha: 0,
        y: 40,
        duration: 1.05,
        stagger: 0.14,
        ease: 'power3.out',
        scrollTrigger: {
            trigger: '#network',
            start: 'top 82%',
            toggleActions: 'play none none none',
        },
    });

    gsap.from('#network-map-glass', {
        autoAlpha: 0,
        scale: 0.94,
        y: 24,
        duration: 1.1,
        ease: 'power3.out',
        scrollTrigger: {
            trigger: '#network-map-glass',
            start: 'top 85%',
            toggleActions: 'play none none none',
        },
    });

    gsap.from('.network-card', {
        autoAlpha: 0,
        y: 36,
        duration: 0.75,
        stagger: 0.1,
        ease: 'power3.out',
        scrollTrigger: {
            trigger: '#network-cards',
            start: 'top 88%',
            toggleActions: 'play none none none',
        },
    });

    if (!isMobileDevice) {
        gsap.utils.toArray('.section-glow').forEach((glow) => {
            gsap.to(glow, {
                y: -40,
                ease: 'none',
                scrollTrigger: {
                    trigger: glow.parentElement,
                    start: 'top bottom',
                    end: 'bottom top',
                    scrub: true,
                },
            });
        });
    }
}

function initCounters() {
    document.querySelectorAll('.stat-counter').forEach((counter) => {
        const target = Number(counter.dataset.value);

        if (prefersReducedMotion) {
            counter.textContent = String(target);

            return;
        }

        const obj = { value: 0 };

        gsap.to(obj, {
            value: target,
            duration: 2.4,
            ease: 'power2.out',
            scrollTrigger: {
                trigger: counter,
                start: 'top 85%',
                once: true,
            },
            onUpdate: () => {
                counter.textContent = String(Math.round(obj.value));
            },
        });
    });
}

function initRegionalNetwork() {
    const section = document.getElementById('network');

    if (!section) {
        return;
    }

    const map = document.getElementById('regional-map');
    const lines = section.querySelectorAll('.connection-line');
    const nodes = section.querySelectorAll('.map-node');
    const hub = section.querySelector('.map-hub');

    if (prefersReducedMotion) {
        lines.forEach((line) => {
            line.style.opacity = '1';
        });

        return;
    }

    const networkInfiniteTweens = [];

    lines.forEach((line) => {
        const length = line.getTotalLength?.() ?? 200;

        gsap.set(line, {
            strokeDasharray: length,
            strokeDashoffset: length,
            opacity: 0.5,
        });

        gsap.to(line, {
            strokeDashoffset: 0,
            opacity: 1,
            duration: 1.4,
            delay: Number(line.dataset.delay ?? 0),
            ease: 'power2.inOut',
            scrollTrigger: {
                trigger: '#network-map-glass',
                start: 'top 85%',
                once: true,
            },
        });

        if (!isMobileDevice) {
            networkInfiniteTweens.push(gsap.to(line, {
                opacity: 0.55,
                duration: 2.2,
                ease: 'sine.inOut',
                yoyo: true,
                repeat: -1,
                delay: 2.2 + Number(line.dataset.delay ?? 0),
            }));
        }
    });

    if (hub) {
        gsap.from(hub, {
            scale: 0,
            transformOrigin: 'center',
            duration: 0.65,
            ease: 'back.out(2)',
            scrollTrigger: { trigger: '#network-map-glass', start: 'top 85%', once: true },
        });
    }

    gsap.from(nodes, {
        scale: 0,
        transformOrigin: 'center',
        duration: 0.45,
        stagger: 0.07,
        ease: 'back.out(1.7)',
        delay: 0.35,
        scrollTrigger: { trigger: '#network-map-glass', start: 'top 85%', once: true },
    });

    gsap.from(section.querySelectorAll('.map-land'), {
        autoAlpha: 0,
        duration: 1,
        scrollTrigger: { trigger: '#network-map-glass', start: 'top 86%', once: true },
    });

    if (!isMobileDevice) {
        section.querySelectorAll('.map-node-group, .map-hub-group').forEach((group, i) => {
            networkInfiniteTweens.push(gsap.to(group, {
                y: gsap.utils.random(-3, 3),
                duration: 2.5 + i * 0.2,
                ease: 'sine.inOut',
                yoyo: true,
                repeat: -1,
            }));
        });

        if (map) {
            networkInfiniteTweens.push(gsap.to(map, {
                y: -6,
                duration: 3.5,
                ease: 'sine.inOut',
                yoyo: true,
                repeat: -1,
            }));
        }
    }

    initNetworkParticles(networkInfiniteTweens);
    initNetworkCards();

    if (networkInfiniteTweens.length) {
        ScrollTrigger.create({
            trigger: section,
            start: 'top bottom',
            end: 'bottom top',
            onLeave: () => networkInfiniteTweens.forEach((t) => t.pause()),
            onLeaveBack: () => networkInfiniteTweens.forEach((t) => t.pause()),
            onEnter: () => networkInfiniteTweens.forEach((t) => t.resume()),
            onEnterBack: () => networkInfiniteTweens.forEach((t) => t.resume()),
        });
    }
}

function initNetworkParticles(tweenCollection = []) {
    const container = document.getElementById('network-particles');

    if (!container || prefersReducedMotion || isMobileDevice) {
        return;
    }

    const count = 4;

    for (let i = 0; i < count; i++) {
        const dot = document.createElement('span');
        dot.className = 'network-particle absolute rounded-full bg-integrax-blue-light';
        dot.style.cssText = `
            width: ${gsap.utils.random(1, 2.5)}px;
            height: ${gsap.utils.random(1, 2.5)}px;
            left: ${gsap.utils.random(5, 95)}%;
            top: ${gsap.utils.random(10, 90)}%;
            opacity: ${gsap.utils.random(0.08, 0.35)};
        `;
        container.appendChild(dot);

        tweenCollection.push(gsap.to(dot, {
            y: gsap.utils.random(-40, -120),
            x: gsap.utils.random(-20, 20),
            duration: gsap.utils.random(10, 18),
            repeat: -1,
            yoyo: true,
            ease: 'sine.inOut',
            delay: gsap.utils.random(0, 5),
        }));
    }
}

function initNetworkCards() {
    const cards = document.querySelectorAll('.network-card');

    cards.forEach((card) => {
        const region = card.dataset.region;
        const mapNode = document.querySelector(`#regional-map [data-region="${region}"] .map-node`);

        const highlightNode = (active) => {
            if (!mapNode || prefersReducedMotion) {
                return;
            }

            gsap.to(mapNode, {
                scale: active ? 1.6 : 1,
                duration: 0.35,
                ease: 'power2.out',
                transformOrigin: 'center',
            });
        };

        card.addEventListener('mouseenter', () => {
            highlightNode(true);

            if (prefersReducedMotion) {
                return;
            }

            gsap.to(card, {
                y: -6,
                rotateX: 4,
                rotateY: -4,
                duration: 0.45,
                ease: 'power2.out',
                transformPerspective: 900,
            });
        });

        card.addEventListener('mouseleave', () => {
            highlightNode(false);

            gsap.to(card, {
                y: 0,
                rotateX: 0,
                rotateY: 0,
                duration: 0.5,
                ease: 'power3.out',
            });
        });

        let netCardRaf = null;
        card.addEventListener('mousemove', (e) => {
            if (prefersReducedMotion || netCardRaf) return;
            netCardRaf = requestAnimationFrame(() => {
                netCardRaf = null;
                const rect = card.getBoundingClientRect();
                const x = (e.clientX - rect.left) / rect.width - 0.5;
                const y = (e.clientY - rect.top) / rect.height - 0.5;
                gsap.to(card, {
                    rotateY: x * 8,
                    rotateX: -y * 6,
                    duration: 0.35,
                    ease: 'power2.out',
                    transformPerspective: 900,
                    overwrite: 'auto',
                });
            });
        });
    });
}

function initSegmentCards() {
    document.querySelectorAll('.segment-card').forEach((card) => {
        const inner = card.querySelector('.segment-card-inner');
        const image = card.querySelector('.segment-image');

        if (!inner) {
            return;
        }

        let segCardRaf = null;
        const handleMove = (e) => {
            if (prefersReducedMotion || segCardRaf) return;
            segCardRaf = requestAnimationFrame(() => {
                segCardRaf = null;
                const rect = card.getBoundingClientRect();
                const x = (e.clientX - rect.left) / rect.width - 0.5;
                const y = (e.clientY - rect.top) / rect.height - 0.5;

                gsap.to(inner, {
                    rotateY: x * 10,
                    rotateX: -y * 8,
                    duration: 0.5,
                    ease: 'power2.out',
                    transformPerspective: 1200,
                    overwrite: 'auto',
                });

                gsap.to(image, {
                    scale: 1.1,
                    x: x * -12,
                    y: y * -12,
                    duration: 0.6,
                    ease: 'power2.out',
                    overwrite: 'auto',
                });
            });
        };

        const handleLeave = () => {
            gsap.to(inner, { rotateY: 0, rotateX: 0, duration: 0.7, ease: 'power3.out' });
            gsap.to(image, { scale: 1, x: 0, y: 0, duration: 0.7, ease: 'power3.out' });
        };

        card.addEventListener('mousemove', handleMove);
        card.addEventListener('mouseleave', handleLeave);
    });
}

function initButtons() {
    document.querySelectorAll('.btn-primary, .btn-ghost, .btn-nav-ghost').forEach((btn) => {
        btn.addEventListener('mouseenter', () => {
            if (prefersReducedMotion) {
                return;
            }

            gsap.to(btn, { scale: 1.03, duration: 0.35, ease: 'power2.out' });
        });

        btn.addEventListener('mouseleave', () => {
            gsap.to(btn, { scale: 1, duration: 0.35, ease: 'power2.out' });
        });
    });
}

function initJourneyTimeline() {
    const section = document.getElementById('journey');

    if (!section) {
        return;
    }

    const yearButtons = section.querySelectorAll('.journey-year-btn');
    const panels = section.querySelectorAll('.journey-panel');
    const content = document.getElementById('journey-content');
    const lineProgress = document.getElementById('journey-line-progress');
    const yearsScroll = document.getElementById('journey-years-scroll');
    const indicator = document.getElementById('journey-active-indicator');
    const totalYears = yearButtons.length;

    let activeYear = section.querySelector('.journey-year-btn.is-active')?.dataset.year ?? '1996';
    let contentTl = null;

    const lineProgressForIndex = (index) => (totalYears <= 1 ? 1 : index / (totalYears - 1));

    const updateLineProgress = (index, animate = true) => {
        if (!lineProgress) {
            return;
        }

        const scale = lineProgressForIndex(index);

        if (!animate || prefersReducedMotion) {
            gsap.set(lineProgress, { scaleX: scale, transformOrigin: 'left center' });

            return;
        }

        gsap.to(lineProgress, {
            scaleX: scale,
            duration: 0.65,
            ease: 'power2.out',
            transformOrigin: 'left center',
        });
    };

    const updateIndicator = (btn) => {
        if (!indicator || !btn || !yearsScroll || window.innerWidth < 768) {
            return;
        }

        const parentRect = yearsScroll.getBoundingClientRect();
        const btnRect = btn.getBoundingClientRect();

        gsap.to(indicator, {
            left: btnRect.left - parentRect.left + yearsScroll.scrollLeft,
            width: btnRect.width,
            duration: 0.45,
            ease: 'power3.out',
        });
    };

    const syncContentHeight = (panel) => {
        if (!content || !panel) {
            return;
        }

        const height = panel.offsetHeight;

        if (prefersReducedMotion) {
            content.style.height = `${height}px`;

            return;
        }

        gsap.to(content, {
            height,
            duration: 0.45,
            ease: 'power2.out',
        });
    };

    const scrollYearIntoView = (btn) => {
        if (!yearsScroll || window.innerWidth >= 768) {
            return;
        }

        btn.scrollIntoView({ behavior: 'smooth', inline: 'center', block: 'nearest' });
    };

    const selectYear = (year, animate = true) => {
        if (year === activeYear) {
            return;
        }

        const nextBtn = section.querySelector(`.journey-year-btn[data-year="${year}"]`);
        const nextPanel = section.querySelector(`#journey-panel-${year}`);
        const prevPanel = section.querySelector(`#journey-panel-${activeYear}`);

        if (!nextBtn || !nextPanel) {
            return;
        }

        yearButtons.forEach((btn) => {
            const isActive = btn.dataset.year === year;

            btn.classList.toggle('is-active', isActive);
            btn.setAttribute('aria-selected', String(isActive));
        });

        updateLineProgress(Number(nextBtn.dataset.index), animate);
        updateIndicator(nextBtn);
        scrollYearIntoView(nextBtn);

        contentTl?.kill();

        if (!animate || prefersReducedMotion) {
            panels.forEach((panel) => {
                const isActive = panel.dataset.year === year;

                panel.classList.toggle('is-active', isActive);
                panel.hidden = !isActive;
                gsap.set(panel, { autoAlpha: isActive ? 1 : 0, y: 0 });
            });

            activeYear = year;
            syncContentHeight(nextPanel);

            return;
        }

        nextPanel.hidden = false;
        gsap.set(nextPanel, {
            position: 'absolute',
            top: 0,
            left: 0,
            right: 0,
            autoAlpha: 0,
            y: 28,
            zIndex: 2,
        });

        if (prevPanel) {
            gsap.set(prevPanel, { zIndex: 1 });
        }

        contentTl = gsap.timeline({
            onComplete: () => {
                panels.forEach((panel) => {
                    const isActive = panel.dataset.year === year;

                    panel.classList.toggle('is-active', isActive);
                    panel.hidden = !isActive;

                    if (isActive) {
                        gsap.set(panel, {
                            autoAlpha: 1,
                            y: 0,
                            clearProps: 'position,top,left,right,zIndex',
                        });
                    } else {
                        gsap.set(panel, { autoAlpha: 0, y: 0 });
                    }
                });

                activeYear = year;
                syncContentHeight(nextPanel);
            },
        });

        if (prevPanel?.classList.contains('is-active')) {
            contentTl.to(prevPanel, {
                autoAlpha: 0,
                y: -18,
                duration: 0.32,
                ease: 'power2.in',
            });
        }

        contentTl.to(
            nextPanel,
            {
                autoAlpha: 1,
                y: 0,
                duration: 0.55,
                ease: 'power3.out',
            },
            '-=0.1',
        );

        const textBlocks = nextPanel.querySelectorAll('.journey-panel-text > *');

        if (textBlocks.length) {
            contentTl.from(
                textBlocks,
                {
                    autoAlpha: 0,
                    y: 14,
                    duration: 0.45,
                    stagger: 0.07,
                    ease: 'power2.out',
                },
                '-=0.3',
            );
        }

        if (nextPanel.dataset.keyMilestone && !prefersReducedMotion) {
            const badge = nextPanel.querySelector('.journey-strategic-badge');
            const keyDot = section.querySelector(`.journey-year-btn[data-year="${year}"] .journey-key-star`);

            if (badge) {
                contentTl.from(
                    badge,
                    { autoAlpha: 0, scale: 0.75, duration: 0.5, ease: 'back.out(2)' },
                    '-=0.4',
                );
            }

            if (keyDot) {
                contentTl
                    .to(keyDot, { scale: 1.7, duration: 0.22, ease: 'power2.out' }, '<0.1')
                    .to(keyDot, { scale: 1, duration: 0.55, ease: 'elastic.out(1.1, 0.4)' });
            }
        }
    };

    yearButtons.forEach((btn) => {
        btn.addEventListener('click', () => selectYear(btn.dataset.year));

        const node = btn.querySelector('.journey-year-node');

        btn.addEventListener('mouseenter', () => {
            if (prefersReducedMotion || !node) {
                return;
            }

            gsap.to(node, { scale: 1.2, duration: 0.3, ease: 'power2.out' });
        });

        btn.addEventListener('mouseleave', () => {
            if (!node) {
                return;
            }

            gsap.to(node, { scale: 1, duration: 0.3, ease: 'power2.out' });
        });
    });

    panels.forEach((panel) => {
        if (!panel.classList.contains('is-active')) {
            panel.hidden = true;
            gsap.set(panel, { autoAlpha: 0 });
        } else {
            gsap.set(panel, { autoAlpha: 1 });
        }
    });

    const initialBtn = section.querySelector('.journey-year-btn.is-active');
    const initialPanel = section.querySelector('.journey-panel.is-active');

    if (initialBtn) {
        updateLineProgress(Number(initialBtn.dataset.index), false);
        updateIndicator(initialBtn);
    }

    if (initialPanel && content) {
        content.style.height = `${initialPanel.offsetHeight}px`;
    }

    if (!prefersReducedMotion) {
        gsap.from('.journey-reveal', {
            autoAlpha: 0,
            y: 44,
            duration: 1.05,
            stagger: 0.14,
            ease: 'power3.out',
            scrollTrigger: {
                trigger: '#journey',
                start: 'top 82%',
                toggleActions: 'play none none none',
            },
        });

        gsap.from('.journey-year-btn', {
            autoAlpha: 0,
            y: 18,
            duration: 0.65,
            stagger: 0.035,
            ease: 'power2.out',
            scrollTrigger: {
                trigger: '.journey-timeline-wrap',
                start: 'top 86%',
                toggleActions: 'play none none none',
            },
        });

        if (lineProgress) {
            gsap.from(lineProgress, {
                scaleX: 0,
                duration: 1.4,
                ease: 'power2.inOut',
                transformOrigin: 'left center',
                scrollTrigger: {
                    trigger: '.journey-timeline-wrap',
                    start: 'top 86%',
                    toggleActions: 'play none none none',
                },
            });

            gsap.to(lineProgress, {
                scaleX: lineProgressForIndex(Number(initialBtn?.dataset.index ?? 0)),
                duration: 0.8,
                ease: 'power2.out',
                transformOrigin: 'left center',
                delay: 0.5,
                scrollTrigger: {
                    trigger: '.journey-timeline-wrap',
                    start: 'top 86%',
                    toggleActions: 'play none none none',
                },
            });
        }

        gsap.from('.journey-panel-card', {
            autoAlpha: 0,
            y: 32,
            duration: 0.9,
            ease: 'power3.out',
            scrollTrigger: {
                trigger: '#journey-content',
                start: 'top 88%',
                toggleActions: 'play none none none',
            },
        });
    }

    let resizeTimer;

    window.addEventListener('resize', () => {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(() => {
            const activeBtn = section.querySelector('.journey-year-btn.is-active');
            const activePanel = section.querySelector('.journey-panel.is-active');

            if (activeBtn) {
                updateIndicator(activeBtn);
            }

            if (activePanel) {
                syncContentHeight(activePanel);
            }

            ScrollTrigger.refresh();
        }, 150);
    });
}

function initFloating() {
    if (prefersReducedMotion || isMobileDevice) {
        return;
    }

    gsap.utils.toArray('.float-subtle').forEach((el, i) => {
        gsap.to(el, {
            y: gsap.utils.random(-8, 8),
            duration: gsap.utils.random(3, 5),
            ease: 'sine.inOut',
            yoyo: true,
            repeat: -1,
            delay: i * 0.3,
        });
    });
}

function initAnnouncements() {
    const hub = document.getElementById('announcement-hub');
    if (!hub) return;

    const toasts = Array.from(hub.querySelectorAll('.announcement-toast'));
    if (!toasts.length) return;

    gsap.set(toasts, { x: 400, autoAlpha: 0 });

    toasts.forEach((toast) => {
        const slideDelay  = Number(toast.dataset.delay)    || 3;
        const autoHide    = Number(toast.dataset.autoHide) || 30;
        const annId       = toast.dataset.announcementId;
        const progressBar = toast.querySelector('.announcement-toast__progress-bar');
        const closeBtn    = toast.querySelector('.js-ann-close');
        const ctaLink     = toast.querySelector('.announcement-toast__cta');

        // Mutable refs so all handlers always point to current tweens
        const state = { floatTween: null, progressTl: null };

        gsap.set(progressBar, { scaleX: 1, transformOrigin: 'left center' });

        // — Entrance —
        const enterTl = gsap.timeline({ delay: slideDelay });
        if (!prefersReducedMotion) {
            enterTl
                .to(toast, { x: 0, autoAlpha: 1, duration: 0.8, ease: 'power3.out' })
                .from(toast.querySelector('.announcement-toast__card'), { scale: 0.94, duration: 0.65, ease: 'back.out(1.5)' }, '<');
        } else {
            enterTl.to(toast, { autoAlpha: 1, duration: 0.4, x: 0 });
        }

        // — Idle float (starts after entrance) —
        enterTl.eventCallback('onComplete', () => {
            if (!prefersReducedMotion && !isMobileDevice) {
                state.floatTween = gsap.to(toast, { y: -7, duration: 3, ease: 'sine.inOut', yoyo: true, repeat: -1 });
            }
        });

        // — Auto-hide progress bar (30 s) —
        state.progressTl = gsap.timeline({
            delay: slideDelay + 0.8,
            onComplete: () => hideToast(toast, annId, state),
        });
        state.progressTl.to(progressBar, { scaleX: 0, duration: autoHide, ease: 'none' });

        // — Hover: pause / resume —
        toast.addEventListener('mouseenter', () => {
            state.progressTl?.pause();
            state.floatTween?.pause();
            gsap.to(toast, { scale: 1.018, duration: 0.3, ease: 'power2.out' });
        });
        toast.addEventListener('mouseleave', () => {
            state.progressTl?.resume();
            if (!prefersReducedMotion) state.floatTween?.resume();
            gsap.to(toast, { scale: 1, duration: 0.3, ease: 'power2.out' });
        });

        // — Manual close: slide out, show remind button —
        closeBtn?.addEventListener('click', () => {
            state.progressTl?.kill();
            state.progressTl = null;
            hideToast(toast, annId, state);
        });

        // — CTA click: let link navigate, remove toast + remind button permanently —
        ctaLink?.addEventListener('click', () => {
            state.floatTween?.kill();
            state.progressTl?.kill();
            gsap.to(toast, {
                x: 400, autoAlpha: 0, duration: 0.35, ease: 'power3.in',
                onComplete: () => {
                    toast.remove();
                    if (!hub.querySelector('.announcement-toast')) hub.remove();
                    document.getElementById(`ann-remind-${annId}`)?.remove();
                },
            });
        });

        // — Remind button click: re-show toast without auto-hide —
        const remindBtn = document.getElementById(`ann-remind-${annId}`);
        remindBtn?.addEventListener('click', () => {
            gsap.to(remindBtn, {
                x: 80, opacity: 0, duration: 0.3, ease: 'power2.in',
                onComplete: () => { remindBtn.hidden = true; },
            });

            gsap.set(toast, { x: 400, y: 0, scale: 1, autoAlpha: 0, pointerEvents: 'auto' });
            const reEnterTl = gsap.timeline();
            if (!prefersReducedMotion) {
                reEnterTl
                    .to(toast, { x: 0, autoAlpha: 1, duration: 0.65, ease: 'power3.out' })
                    .from(toast.querySelector('.announcement-toast__card'), { scale: 0.94, duration: 0.5, ease: 'back.out(1.5)' }, '<');
            } else {
                reEnterTl.to(toast, { autoAlpha: 1, duration: 0.3, x: 0 });
            }
            reEnterTl.eventCallback('onComplete', () => {
                if (!prefersReducedMotion && !isMobileDevice) {
                    state.floatTween = gsap.to(toast, { y: -7, duration: 3, ease: 'sine.inOut', yoyo: true, repeat: -1 });
                }
            });
        });
    });
}

function hideToast(toast, annId, state) {
    state.floatTween?.kill();
    state.floatTween = null;

    gsap.to(toast, {
        x: 400, autoAlpha: 0, duration: 0.45, ease: 'power3.in',
        onComplete: () => {
            gsap.set(toast, { pointerEvents: 'none' });
            showRemindButton(annId);
        },
    });
}

function showRemindButton(annId) {
    const btn = document.getElementById(`ann-remind-${annId}`);
    if (!btn) return;
    btn.hidden = false;
    gsap.set(btn, { x: 80, opacity: 0 });
    gsap.to(btn, { x: 0, opacity: 1, duration: 0.55, ease: 'power3.out' });
}

function spawnAboutParticles() {
    const container = document.getElementById('about-particles');
    if (!container || prefersReducedMotion || isMobileDevice) return;

    const count = 20;

    for (let i = 0; i < count; i++) {
        const dot = document.createElement('span');
        dot.className = 'about-particle';
        const sz = gsap.utils.random(0.7, 2.4);
        dot.style.cssText = `
            width:${sz}px;height:${sz}px;
            left:${gsap.utils.random(2, 98)}%;
            top:${gsap.utils.random(10, 100)}%;
            opacity:${gsap.utils.random(0.07, 0.38)};
        `;
        container.appendChild(dot);

        gsap.to(dot, {
            y: gsap.utils.random(-160, -380),
            x: gsap.utils.random(-28, 28),
            opacity: 0,
            duration: gsap.utils.random(9, 20),
            delay: gsap.utils.random(0, 12),
            repeat: -1,
            ease: 'power1.out',
        });
    }
}

function initAboutOverlay() {
    const overlay = document.getElementById('about-overlay');
    if (!overlay) return;

    const triggers  = Array.from(document.querySelectorAll('.js-about-trigger'));
    const hub       = document.getElementById('about-hub');
    const svg       = document.getElementById('about-svg');
    const nodes     = Array.from(overlay.querySelectorAll('.about-node'));
    const hintEl    = overlay.querySelector('.about-hint');
    const overlayBg = overlay.querySelector('.about-overlay-bg');

    let isOpen   = false;
    let lineEls  = [];
    let idleTls  = [];
    let closeTl  = null;

    spawnAboutParticles();

    // ── Draw SVG connection lines from hub-core centre → node centre ──
    function drawLines() {
        lineEls.forEach((l) => l.remove());
        lineEls = [];
        if (window.innerWidth < 768) return;

        const ns      = 'http://www.w3.org/2000/svg';
        const oRect   = overlay.getBoundingClientRect();
        const coreEl  = hub.querySelector('.about-hub-core');
        const cRect   = coreEl.getBoundingClientRect();
        const hx      = cRect.left - oRect.left + cRect.width  / 2;
        const hy      = cRect.top  - oRect.top  + cRect.height / 2;

        nodes.forEach((node, i) => {
            const nRect = node.getBoundingClientRect();
            const nx    = nRect.left - oRect.left + nRect.width  / 2;
            const ny    = nRect.top  - oRect.top  + nRect.height / 2;

            const line = document.createElementNS(ns, 'line');
            line.setAttribute('x1', hx);
            line.setAttribute('y1', hy);
            line.setAttribute('x2', nx);
            line.setAttribute('y2', ny);
            line.setAttribute('data-node', node.dataset.node);
            line.classList.add('about-line');
            svg.appendChild(line);
            lineEls.push(line);

            const len = line.getTotalLength();
            gsap.set(line, { strokeDasharray: len, strokeDashoffset: len, opacity: 0 });
        });
    }

    // ── Open ──────────────────────────────────────────────────────────
    function openOverlay() {
        if (isOpen) return;
        isOpen = true;
        closeTl?.kill();

        overlay.hidden = false;
        gsap.set(overlay, { opacity: 0, visibility: 'visible' });
        document.body.style.overflow = 'hidden';
        lenis?.stop();

        requestAnimationFrame(() => {
            const isMobile = window.innerWidth < 768;

            // Always wipe stale GSAP state before building the open animation,
            // including cases where the close timeline was killed mid-play.
            gsap.set([hub, ...nodes, hintEl].filter(Boolean), { clearProps: 'all' });

            drawLines();

            const tl = gsap.timeline();
            tl.to(overlay, { opacity: 1, duration: 0.45, ease: 'power2.out' });

            if (!prefersReducedMotion && overlayBg) {
                gsap.fromTo(
                    overlayBg,
                    { backgroundColor: '#06101c' },
                    { backgroundColor: '#ffffff', duration: 0.85, ease: 'power2.inOut' },
                );
            }

            if (!prefersReducedMotion) {
                // Use fromTo so both start and end states are explicit — no reliance
                // on GSAP snapshotting possibly-stale current values.
                tl.fromTo(
                    hub,
                    { scale: 0, autoAlpha: 0 },
                    { scale: 1, autoAlpha: 1, duration: 0.68, ease: 'back.out(1.7)' },
                    '-=0.2',
                );

                if (!isMobile && lineEls.length) {
                    tl.to(
                        lineEls,
                        { strokeDashoffset: 0, opacity: 0.42, duration: 0.7, stagger: 0.07, ease: 'power2.inOut' },
                        '-=0.28',
                    );
                }

                // Capture hub-core center once (before any per-node transforms are applied).
                const coreRect = isMobile ? null : hub.querySelector('.about-hub-core').getBoundingClientRect();

                nodes.forEach((node, i) => {
                    let fx = 0, fy = isMobile ? 22 : 0;

                    if (!isMobile && coreRect) {
                        const nRect = node.getBoundingClientRect();
                        const dx = nRect.left + nRect.width / 2 - (coreRect.left + coreRect.width / 2);
                        const dy = nRect.top  + nRect.height / 2 - (coreRect.top  + coreRect.height / 2);
                        const d  = Math.sqrt(dx * dx + dy * dy) || 1;
                        fx = -(dx / d) * 55;
                        fy = -(dy / d) * 55;
                    }

                    tl.fromTo(
                        node,
                        { x: fx, y: fy, autoAlpha: 0, scale: 0.85 },
                        { x: 0,  y: 0,  autoAlpha: 1, scale: 1,    duration: 0.52, ease: 'power3.out' },
                        (isMobile ? 0.28 : 0.32) + i * 0.07,
                    );
                });

                if (hintEl) {
                    tl.fromTo(
                        hintEl,
                        { autoAlpha: 0, y: 10 },
                        { autoAlpha: 1, y: 0, duration: 0.4, ease: 'power2.out' },
                        '-=0.15',
                    );
                }
            } else {
                gsap.set([hub, ...nodes, hintEl].filter(Boolean), { autoAlpha: 1 });
                if (lineEls.length) gsap.set(lineEls, { strokeDashoffset: 0, opacity: 0.42 });
            }

            tl.call(() => startIdle());
        });
    }

    // ── Close ─────────────────────────────────────────────────────────
    function closeOverlay() {
        if (!isOpen) return;
        isOpen = false;

        stopIdle();

        const allContent = [...nodes, hintEl].filter(Boolean);

        closeTl = gsap.timeline({
            onComplete: () => {
                overlay.hidden = true;
                gsap.set(overlay, { clearProps: 'opacity,visibility' });
                gsap.set([hub, ...nodes, hintEl].filter(Boolean), { clearProps: 'all' });
                document.body.style.overflow = '';
                lenis?.start();
            },
        });

        closeTl
            .to(allContent, { autoAlpha: 0, scale: 0.9, duration: 0.24, ease: 'power2.in', stagger: 0.025 })
            .to(lineEls,    { strokeDashoffset: (i, el) => -el.getTotalLength(), opacity: 0, duration: 0.24, ease: 'power2.in' }, '<')
            .to(hub,  { scale: 0, autoAlpha: 0, duration: 0.32, ease: 'power2.in' }, '-=0.1');

        if (!prefersReducedMotion && overlayBg) {
            closeTl.to(overlayBg, { backgroundColor: '#06101c', duration: 0.28, ease: 'power2.in' }, '-=0.2');
        }

        closeTl.to(overlay, { opacity: 0, duration: 0.28, ease: 'power1.in' }, '-=0.08');
    }

    // ── Idle float animations ──────────────────────────────────────────
    function startIdle() {
        if (prefersReducedMotion) return;

        idleTls.push(
            gsap.to(hub, { y: -10, duration: 3.8, ease: 'sine.inOut', yoyo: true, repeat: -1 }),
        );

        nodes.forEach((node, i) => {
            idleTls.push(
                gsap.to(node, {
                    y: gsap.utils.random(-6, 6),
                    x: gsap.utils.random(-3, 3),
                    duration: gsap.utils.random(3.5, 5.5),
                    ease: 'sine.inOut',
                    yoyo: true,
                    repeat: -1,
                    delay: i * 0.45,
                }),
            );
        });
    }

    function stopIdle() {
        idleTls.forEach((t) => t.kill());
        idleTls = [];
        gsap.set([hub, ...nodes], { x: 0, y: 0 });
    }

    // ── Node hover: highlight line, dim others ─────────────────────────
    nodes.forEach((node, i) => {
        node.addEventListener('mouseenter', () => {
            if (prefersReducedMotion || window.innerWidth < 768) return;

            gsap.to(node, { scale: 1.04, duration: 0.28, ease: 'power2.out', overwrite: 'auto' });
            if (lineEls[i]) gsap.to(lineEls[i], { opacity: 0.9, duration: 0.22, overwrite: 'auto' });

            nodes.forEach((other, j) => {
                if (j === i) return;
                gsap.to(other,     { autoAlpha: 0.35, duration: 0.22, overwrite: 'auto' });
                if (lineEls[j]) gsap.to(lineEls[j], { opacity: 0.08, duration: 0.22, overwrite: 'auto' });
            });
        });

        node.addEventListener('mouseleave', () => {
            if (prefersReducedMotion || window.innerWidth < 768) return;

            gsap.to(node, { scale: 1, duration: 0.35, ease: 'power2.out', overwrite: 'auto' });
            if (lineEls[i]) gsap.to(lineEls[i], { opacity: 0.42, duration: 0.3, overwrite: 'auto' });

            nodes.forEach((other, j) => {
                if (j === i) return;
                gsap.to(other,     { autoAlpha: 1,   duration: 0.3, overwrite: 'auto' });
                if (lineEls[j]) gsap.to(lineEls[j], { opacity: 0.42, duration: 0.3, overwrite: 'auto' });
            });
        });
    });

    // ── Event wiring ───────────────────────────────────────────────────
    triggers.forEach((t) => t.addEventListener('click', openOverlay));

    hub.addEventListener('click', closeOverlay);
    overlay.querySelectorAll('.js-about-close').forEach((btn) => btn.addEventListener('click', closeOverlay));

    overlay.addEventListener('click', (e) => {
        if (e.target === overlay) closeOverlay();
    });

    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && isOpen) closeOverlay();
    });

    // Redraw lines on resize
    let resizeTimer;
    window.addEventListener('resize', () => {
        if (!isOpen) return;
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(drawLines, 200);
    });
}

function initLeadership() {
    const grid = document.getElementById('leadership-grid');
    if (!grid) return;

    const modal      = document.getElementById('ldg-bio-modal');
    const backdrop   = document.getElementById('ldg-modal-backdrop');
    const panel      = document.getElementById('ldg-modal-panel');
    const closeBtn   = document.getElementById('ldg-modal-close');
    const modalAvatar= document.getElementById('ldg-modal-avatar');
    const modalInit  = document.getElementById('ldg-modal-initials');
    const modalDept  = document.getElementById('ldg-modal-dept');
    const modalName  = document.getElementById('ldg-modal-name');
    const modalTitle = document.getElementById('ldg-modal-title');
    const modalBio   = document.getElementById('ldg-modal-bio');

    const dataScript = document.getElementById('ldg-exec-data');
    if (!dataScript) return;

    let execData;
    try {
        execData = JSON.parse(dataScript.textContent);
    } catch {
        return;
    }

    let isOpen   = false;
    let openTl   = null;
    let closeTl  = null;
    const isMobile = () => window.innerWidth < 768;

    // ── Card stagger reveal ────────────────────────────────────
    if (!prefersReducedMotion) {
        const cards = grid.querySelectorAll('.ldg-card');
        gsap.from(cards, {
            autoAlpha: 0,
            y: 56,
            duration: 0.9,
            stagger: 0.1,
            ease: 'power3.out',
            scrollTrigger: {
                trigger: '#leadership-grid',
                start: 'top 82%',
                toggleActions: 'play none none none',
            },
        });
    }

    // ── Populate and open modal ────────────────────────────────
    function openModal(index) {
        if (isOpen) return;
        const exec = execData[index];
        if (!exec) return;

        isOpen = true;
        closeTl?.kill();

        // Populate sidebar
        modalAvatar.className = `ldg-modal-avatar ${exec.avatarClass}`;
        modalInit.textContent  = exec.initials;
        modalDept.textContent  = exec.department;
        modalName.textContent  = exec.name;
        modalTitle.textContent = exec.title;

        // Populate bio content
        if (exec.hasBio && exec.bio) {
            modalBio.innerHTML = exec.bio;
        } else {
            modalBio.innerHTML = `
                <div class="ldg-modal-no-bio">
                    <div class="ldg-modal-no-bio-icon">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/>
                        </svg>
                    </div>
                    <p class="ldg-modal-no-bio-title">${exec.name}</p>
                    <p class="ldg-modal-no-bio-text">Full executive profile and biography coming soon.</p>
                    <a href="https://integrax.com.my/management-team/" target="_blank" rel="noopener noreferrer" class="ldg-modal-no-bio-link">
                        Official website
                        <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M7 17 17 7M7 7h10v10"/></svg>
                    </a>
                </div>`;
        }

        modal.hidden = false;
        document.body.style.overflow = 'hidden';
        lenis?.stop();

        const mobile = isMobile();

        if (prefersReducedMotion) {
            gsap.set(backdrop, { opacity: 1 });
            gsap.set(panel, { x: 0, y: 0 });
            return;
        }

        gsap.set(backdrop, { opacity: 0 });
        gsap.set(panel, mobile ? { y: '100%' } : { x: '100%' });

        openTl = gsap.timeline();
        if (mobile) {
            openTl
                .to(backdrop, { opacity: 1, duration: 0.35, ease: 'power2.out' })
                .to(panel, { y: 0, duration: 0.52, ease: 'power3.out' }, '-=0.2');
        } else {
            openTl
                .to(backdrop, { opacity: 1, duration: 0.35, ease: 'power2.out' })
                .to(panel, { x: 0, duration: 0.52, ease: 'power3.out' }, '-=0.2');
        }
    }

    function closeModal() {
        if (!isOpen) return;
        isOpen = false;
        openTl?.kill();

        if (prefersReducedMotion) {
            modal.hidden = true;
            gsap.set([backdrop, panel], { clearProps: 'all' });
            document.body.style.overflow = '';
            lenis?.start();
            return;
        }

        const mobile = isMobile();
        closeTl = gsap.timeline({
            onComplete() {
                modal.hidden = true;
                gsap.set([backdrop, panel], { clearProps: 'all' });
                document.body.style.overflow = '';
                lenis?.start();
            },
        });
        if (mobile) {
            closeTl
                .to(panel, { y: '100%', duration: 0.42, ease: 'power3.in' })
                .to(backdrop, { opacity: 0, duration: 0.3 }, '-=0.2');
        } else {
            closeTl
                .to(panel, { x: '100%', duration: 0.42, ease: 'power3.in' })
                .to(backdrop, { opacity: 0, duration: 0.3 }, '-=0.2');
        }
    }

    // ── Wire open buttons ──────────────────────────────────────
    document.querySelectorAll('.js-ldg-open').forEach((btn) => {
        btn.addEventListener('click', () => {
            const index = parseInt(btn.dataset.execIndex, 10);
            openModal(index);
        });
    });

    // ── Wire close handlers ────────────────────────────────────
    closeBtn?.addEventListener('click', closeModal);
    backdrop?.addEventListener('click', closeModal);

    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && isOpen) closeModal();
    });

    // ── Hover magnetic effect on cards ────────────────────────
    if (!prefersReducedMotion && !isMobileDevice) {
        grid.querySelectorAll('.ldg-card').forEach((card) => {
            let ldgCardRaf = null;
            card.addEventListener('mousemove', (e) => {
                if (ldgCardRaf) return;
                ldgCardRaf = requestAnimationFrame(() => {
                    ldgCardRaf = null;
                    const rect = card.getBoundingClientRect();
                    const x = (e.clientX - rect.left) / rect.width  - 0.5;
                    const y = (e.clientY - rect.top)  / rect.height - 0.5;
                    gsap.to(card, {
                        rotateY: x * 5,
                        rotateX: -y * 4,
                        duration: 0.4,
                        ease: 'power2.out',
                        transformPerspective: 900,
                        overwrite: 'auto',
                    });
                });
            });

            card.addEventListener('mouseleave', () => {
                gsap.to(card, {
                    rotateY: 0, rotateX: 0,
                    duration: 0.6, ease: 'power3.out',
                    overwrite: 'auto',
                });
            });
        });
    }
}

function initFutureSplit() {
    const futureCard = document.querySelector('.segment-card[data-split-reveal]');
    const overlay = document.getElementById('future-split-overlay');

    if (!futureCard || !overlay) return;

    const backdrop = overlay.querySelector('.future-split-backdrop');
    const wrap = overlay.querySelector('.future-split-wrap');
    const leftPanel = overlay.querySelector('.future-split-panel--left');
    const rightPanel = overlay.querySelector('.future-split-panel--right');
    const connector = overlay.querySelector('.future-split-connector');
    const connectorNode = overlay.querySelector('.fsr-connector-node');
    const closeBtn = overlay.querySelector('.future-split-close');
    const contentEls = overlay.querySelectorAll('.fsr-content');
    const ctaLinks = overlay.querySelectorAll('.fsr-cta');

    let isOpen = false;
    let openTl = null;
    let closeTl = null;

    const mobile = () => window.innerWidth < 768;

    const openSplit = () => {
        if (isOpen) return;
        isOpen = true;
        closeTl?.kill();

        overlay.classList.add('is-open');
        overlay.removeAttribute('aria-hidden');
        document.body.style.overflow = 'hidden';

        gsap.set(backdrop, { opacity: 0 });
        gsap.set(wrap, { scale: 0.9, autoAlpha: 1 });
        gsap.set(contentEls, { autoAlpha: 0, y: 20 });
        gsap.set(connector, { autoAlpha: 0 });
        gsap.set(connectorNode, { scale: 0 });

        if (mobile()) {
            gsap.set(leftPanel, { autoAlpha: 0, yPercent: -8, filter: 'blur(10px)' });
            gsap.set(rightPanel, { autoAlpha: 0, yPercent: 8, filter: 'blur(10px)' });
        } else {
            gsap.set(leftPanel, { clipPath: 'inset(0% 0% 0% 100%)', filter: 'blur(14px)', autoAlpha: 1 });
            gsap.set(rightPanel, { clipPath: 'inset(0% 100% 0% 0%)', filter: 'blur(14px)', autoAlpha: 1 });
        }

        openTl = gsap.timeline();

        // Card flash
        openTl.to(futureCard, { scale: 1.03, duration: 0.15, ease: 'power2.out' });
        // Backdrop
        openTl.to(backdrop, { opacity: 1, duration: 0.38, ease: 'power2.out' }, '<0.05');
        // Card reset
        openTl.to(futureCard, { scale: 1, duration: 0.3, ease: 'power2.inOut' }, '<0.05');
        // Wrap scale in
        openTl.to(wrap, { scale: 1, duration: 0.55, ease: 'power3.out' }, '<0.05');

        if (mobile()) {
            openTl.to(leftPanel, { autoAlpha: 1, yPercent: 0, filter: 'blur(0px)', duration: 0.5, ease: 'power3.out' }, '<0.05');
            openTl.to(rightPanel, { autoAlpha: 1, yPercent: 0, filter: 'blur(0px)', duration: 0.5, ease: 'power3.out' }, '<0.12');
        } else {
            // Cinematic split from center
            openTl.to(leftPanel, {
                clipPath: 'inset(0% 0% 0% 0%)',
                filter: 'blur(0px)',
                duration: 0.65,
                ease: 'power3.out',
            }, '<0.08');
            openTl.to(rightPanel, {
                clipPath: 'inset(0% 0% 0% 0%)',
                filter: 'blur(0px)',
                duration: 0.65,
                ease: 'power3.out',
            }, '<');
            // Connector reveal
            openTl.to(connector, { autoAlpha: 1, duration: 0.3, ease: 'power2.out' }, '-=0.45');
            openTl.to(connectorNode, { scale: 1, duration: 0.45, ease: 'elastic.out(1.3, 0.5)' }, '-=0.3');
        }

        // Staggered content
        openTl.to(contentEls, {
            autoAlpha: 1,
            y: 0,
            duration: 0.4,
            stagger: 0.042,
            ease: 'power2.out',
        }, '-=0.3');
    };

    const closeSplit = () => {
        if (!isOpen) return;
        isOpen = false;
        openTl?.kill();

        closeTl = gsap.timeline({
            onComplete: () => {
                overlay.classList.remove('is-open');
                overlay.setAttribute('aria-hidden', 'true');
                document.body.style.overflow = '';
                if (!mobile()) {
                    gsap.set([leftPanel, rightPanel], { clearProps: 'clipPath,filter' });
                }
            },
        });

        closeTl.to(contentEls, { autoAlpha: 0, y: -10, duration: 0.2, stagger: 0.018, ease: 'power2.in' });

        if (mobile()) {
            closeTl.to([leftPanel, rightPanel], { autoAlpha: 0, yPercent: -6, filter: 'blur(8px)', duration: 0.32, ease: 'power2.in' }, '-=0.1');
        } else {
            closeTl.to(connector, { autoAlpha: 0, duration: 0.2, ease: 'power2.in' }, '<');
            closeTl.to(leftPanel, { clipPath: 'inset(0% 0% 0% 100%)', filter: 'blur(10px)', duration: 0.4, ease: 'power3.in' }, '-=0.05');
            closeTl.to(rightPanel, { clipPath: 'inset(0% 100% 0% 0%)', filter: 'blur(10px)', duration: 0.4, ease: 'power3.in' }, '<');
        }

        closeTl.to(wrap, { scale: 0.92, duration: 0.32, ease: 'power2.in' }, '-=0.15');
        closeTl.to(backdrop, { opacity: 0, duration: 0.3, ease: 'power2.in' }, '-=0.18');
    };

    futureCard.addEventListener('click', openSplit);
    futureCard.addEventListener('keydown', (e) => { if (e.key === 'Enter' || e.key === ' ') { e.preventDefault(); openSplit(); } });

    closeBtn?.addEventListener('click', (e) => { e.stopPropagation(); closeSplit(); });
    backdrop.addEventListener('click', closeSplit);

    ctaLinks.forEach((link) => {
        link.addEventListener('click', () => { setTimeout(closeSplit, 80); });
    });

    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && isOpen) closeSplit();
    });
}

function initAchievementPage() {
    if (!document.querySelector('.ach-hero-section')) return;

    if (prefersReducedMotion) return;

    if (!isMobileDevice) {
        gsap.to('.ach-orb', {
            x: 28,
            y: -20,
            duration: 7,
            ease: 'sine.inOut',
            yoyo: true,
            repeat: -1,
            stagger: { each: 1.5, from: 'random' },
        });
    }

    gsap.from('.ach-cert-card', {
        autoAlpha: 0,
        y: 64,
        duration: 1.05,
        stagger: 0.2,
        ease: 'power3.out',
        scrollTrigger: {
            trigger: '.ach-cards-section',
            start: 'top 78%',
        },
    });

    gsap.from('.ach-timeline-line', {
        scaleY: 0,
        transformOrigin: 'top center',
        duration: 1.6,
        ease: 'power3.out',
        scrollTrigger: {
            trigger: '.ach-timeline-section',
            start: 'top 75%',
        },
    });

    gsap.from('.ach-timeline-item', {
        autoAlpha: 0,
        y: 44,
        duration: 1,
        stagger: 0.3,
        ease: 'power3.out',
        scrollTrigger: {
            trigger: '.ach-timeline-section',
            start: 'top 72%',
        },
    });

    gsap.from('.ach-principle-card', {
        autoAlpha: 0,
        y: 36,
        duration: 0.9,
        stagger: 0.15,
        ease: 'power3.out',
        scrollTrigger: {
            trigger: '.ach-principle-card',
            start: 'top 82%',
        },
    });
}

function initGovernancePage() {
    if (!document.querySelector('.gov-hero-section')) return;

    // ── Principle data ────────────────────────────────────────────
    const principles = [
        {
            name: 'Transparency',
            desc: 'Clear and timely disclosure of material information enables informed decision-making by all stakeholders and builds enduring trust in Integrax\'s operations and governance.',
            points: [
                'Timely disclosure of all material information',
                'Accessible and transparent financial reporting',
                'Open communication channels with all stakeholders',
            ],
        },
        {
            name: 'Accountability',
            desc: 'The Board and management are accountable for their decisions and outcomes to shareholders and all relevant stakeholders through well-defined responsibilities and oversight mechanisms.',
            points: [
                'Clear responsibilities for Board and management',
                'Defined performance metrics and Board oversight',
                'Regular and transparent reporting to shareholders',
            ],
        },
        {
            name: 'Responsibility',
            desc: 'Responsible conduct across all business activities, fully aligned with ethical standards, applicable regulatory frameworks, and the expectations of every stakeholder group.',
            points: [
                'Compliance with all applicable laws and regulations',
                'Responsible stewardship of company assets and resources',
                'Ethical conduct embedded in all business activities',
            ],
        },
        {
            name: 'Fairness',
            desc: 'Equitable and fair treatment of all shareholders and stakeholders, including minority shareholders and employees, in every governance decision and business interaction.',
            points: [
                'Equal treatment of minority and majority shareholders',
                'Fair consideration of all stakeholder interests',
                'Transparent and equitable governance processes',
            ],
        },
        {
            name: 'Independence',
            desc: 'Objective and independent judgment in all Board deliberations and management decisions, free from undue influence, conflicts of interest, or external pressures that could compromise integrity.',
            points: [
                'Independent Board judgment free from conflicts of interest',
                'Separation of executive and supervisory roles',
                'Objective risk assessment and independent oversight',
            ],
        },
    ];

    if (!prefersReducedMotion && !isMobileDevice) {
        // Ambient orb drift
        gsap.to('.gov-orb', {
            x: 22,
            y: -18,
            duration: 8,
            ease: 'sine.inOut',
            yoyo: true,
            repeat: -1,
            stagger: { each: 1.8, from: 'random' },
        });
    }

    // ── Desktop hub ───────────────────────────────────────────────
    const canvas = document.getElementById('gov-hub-canvas');
    const svg = document.getElementById('gov-hub-svg');
    const hubCenter = document.getElementById('gov-hub-center');
    const nodes = document.querySelectorAll('.gov-principle-node');
    const panelIdle = document.getElementById('gov-panel-idle');
    const panelContent = document.getElementById('gov-panel-content');

    if (canvas && svg && hubCenter && nodes.length) {
        // Draw lines after layout is stable
        requestAnimationFrame(() => {
            const canvasRect = canvas.getBoundingClientRect();
            const centerRect = hubCenter.getBoundingClientRect();
            const cx = centerRect.left - canvasRect.left + centerRect.width / 2;
            const cy = centerRect.top - canvasRect.top + centerRect.height / 2;

            nodes.forEach((node, i) => {
                const nodeRect = node.getBoundingClientRect();
                const nx = nodeRect.left - canvasRect.left + nodeRect.width / 2;
                const ny = nodeRect.top - canvasRect.top + nodeRect.height / 2;

                const path = document.createElementNS('http://www.w3.org/2000/svg', 'path');
                const d = `M ${cx},${cy} L ${nx},${ny}`;
                path.setAttribute('d', d);
                path.setAttribute('class', 'gov-hub-line');
                path.setAttribute('data-idx', i);
                path.setAttribute('filter', 'url(#gov-line-glow)');
                svg.appendChild(path);

                if (!prefersReducedMotion) {
                    const len = path.getTotalLength();
                    path.style.strokeDasharray = len;
                    path.style.strokeDashoffset = len;
                    gsap.to(path, {
                        strokeDashoffset: 0,
                        duration: 1.1,
                        delay: 0.4 + i * 0.12,
                        ease: 'power3.out',
                    });
                }
            });
        });

        // Node click handler
        let activeIdx = -1;

        nodes.forEach((node) => {
            node.addEventListener('click', () => {
                const idx = parseInt(node.dataset.idx, 10);
                const data = principles[idx];

                if (activeIdx === idx) {
                    // Deselect
                    activeIdx = -1;
                    nodes.forEach((n) => n.classList.remove('is-active'));
                    document.querySelectorAll('.gov-hub-line').forEach((l) => l.classList.remove('is-active'));

                    if (panelContent) {
                        gsap.to(panelContent, {
                            autoAlpha: 0,
                            y: 10,
                            duration: 0.25,
                            onComplete: () => {
                                panelContent.style.display = 'none';
                                if (panelIdle) {
                                    panelIdle.style.display = 'flex';
                                    gsap.fromTo(panelIdle, { autoAlpha: 0 }, { autoAlpha: 1, duration: 0.3 });
                                }
                            },
                        });
                    }
                    return;
                }

                activeIdx = idx;
                nodes.forEach((n) => n.classList.toggle('is-active', n.dataset.idx === String(idx)));
                document.querySelectorAll('.gov-hub-line').forEach((l) => {
                    l.classList.toggle('is-active', parseInt(l.dataset.idx, 10) === idx);
                });

                // Populate panel
                const titleEl = document.getElementById('gov-panel-title');
                const descEl = document.getElementById('gov-panel-desc');
                const pointsEl = document.getElementById('gov-panel-points');

                if (titleEl) titleEl.textContent = data.name;
                if (descEl) descEl.textContent = data.desc;
                if (pointsEl) {
                    pointsEl.innerHTML = data.points
                        .map((p) => `<li class="gov-panel-point">${p}</li>`)
                        .join('');
                }

                const showPanel = () => {
                    if (panelContent) {
                        panelContent.style.display = 'block';
                        gsap.fromTo(
                            panelContent,
                            { autoAlpha: 0, y: 20 },
                            { autoAlpha: 1, y: 0, duration: 0.45, ease: 'power3.out' }
                        );
                    }
                };

                if (panelIdle && panelIdle.style.display !== 'none') {
                    gsap.to(panelIdle, {
                        autoAlpha: 0,
                        duration: 0.2,
                        onComplete: () => {
                            panelIdle.style.display = 'none';
                            showPanel();
                        },
                    });
                } else if (panelContent) {
                    gsap.fromTo(
                        panelContent,
                        { autoAlpha: 0, y: 12 },
                        { autoAlpha: 1, y: 0, duration: 0.35, ease: 'power3.out' }
                    );
                    panelContent.style.display = 'block';
                    if (titleEl) titleEl.textContent = data.name;
                    if (descEl) descEl.textContent = data.desc;
                    if (pointsEl) {
                        pointsEl.innerHTML = data.points
                            .map((p) => `<li class="gov-panel-point">${p}</li>`)
                            .join('');
                    }
                }
            });
        });
    }

    // ── Mobile accordion ──────────────────────────────────────────
    document.querySelectorAll('.gov-accordion-btn').forEach((btn) => {
        btn.addEventListener('click', () => {
            const item = btn.closest('.gov-accordion-item');
            const body = item.querySelector('.gov-accordion-body');
            const isOpen = btn.getAttribute('aria-expanded') === 'true';

            // Close all
            document.querySelectorAll('.gov-accordion-item').forEach((otherItem) => {
                if (otherItem !== item) {
                    const otherBtn = otherItem.querySelector('.gov-accordion-btn');
                    const otherBody = otherItem.querySelector('.gov-accordion-body');
                    if (otherBtn && otherBtn.getAttribute('aria-expanded') === 'true') {
                        otherBtn.setAttribute('aria-expanded', 'false');
                        if (otherBody && !prefersReducedMotion) {
                            gsap.to(otherBody, {
                                height: 0,
                                opacity: 0,
                                duration: 0.28,
                                ease: 'power2.inOut',
                                onComplete: () => { otherBody.hidden = true; },
                            });
                        } else if (otherBody) {
                            otherBody.hidden = true;
                        }
                    }
                }
            });

            if (isOpen) {
                btn.setAttribute('aria-expanded', 'false');
                if (!prefersReducedMotion) {
                    gsap.to(body, {
                        height: 0,
                        opacity: 0,
                        duration: 0.28,
                        ease: 'power2.inOut',
                        onComplete: () => { body.hidden = true; },
                    });
                } else {
                    body.hidden = true;
                }
            } else {
                btn.setAttribute('aria-expanded', 'true');
                body.hidden = false;
                if (!prefersReducedMotion) {
                    gsap.fromTo(body, { height: 0, opacity: 0 }, { height: 'auto', opacity: 1, duration: 0.35, ease: 'power3.out' });
                }
            }
        });
    });

    // ── Policy card expand/collapse ───────────────────────────────
    document.querySelectorAll('.gov-policy-btn').forEach((btn) => {
        btn.addEventListener('click', () => {
            const card = btn.closest('.gov-policy-card');
            const body = card.querySelector('.gov-policy-expand');
            const isOpen = card.classList.contains('is-open');

            // Close all others
            document.querySelectorAll('.gov-policy-card.is-open').forEach((openCard) => {
                if (openCard !== card) {
                    openCard.classList.remove('is-open');
                    const openBtn = openCard.querySelector('.gov-policy-btn');
                    const openBody = openCard.querySelector('.gov-policy-expand');
                    if (openBtn) openBtn.setAttribute('aria-expanded', 'false');
                    if (openBody && !prefersReducedMotion) {
                        gsap.to(openBody, {
                            height: 0,
                            opacity: 0,
                            duration: 0.28,
                            ease: 'power2.inOut',
                            onComplete: () => { openBody.hidden = true; },
                        });
                    } else if (openBody) {
                        openBody.hidden = true;
                    }
                }
            });

            if (isOpen) {
                card.classList.remove('is-open');
                btn.setAttribute('aria-expanded', 'false');
                if (!prefersReducedMotion) {
                    gsap.to(body, {
                        height: 0,
                        opacity: 0,
                        duration: 0.28,
                        ease: 'power2.inOut',
                        onComplete: () => { body.hidden = true; },
                    });
                } else {
                    body.hidden = true;
                }
            } else {
                card.classList.add('is-open');
                btn.setAttribute('aria-expanded', 'true');
                body.hidden = false;
                if (!prefersReducedMotion) {
                    gsap.fromTo(body, { height: 0, opacity: 0 }, { height: 'auto', opacity: 1, duration: 0.38, ease: 'power3.out' });
                }
            }
        });
    });

    // ── Scroll-triggered reveals ──────────────────────────────────
    if (!prefersReducedMotion) {
        gsap.from('.gov-action-card', {
            autoAlpha: 0,
            y: 40,
            duration: 0.9,
            stagger: 0.15,
            ease: 'power3.out',
            scrollTrigger: {
                trigger: '.gov-action-section',
                start: 'top 78%',
            },
        });

        gsap.from('.gov-policy-card', {
            autoAlpha: 0,
            y: 32,
            duration: 0.85,
            stagger: 0.08,
            ease: 'power3.out',
            scrollTrigger: {
                trigger: '.gov-policies-section',
                start: 'top 76%',
            },
        });

        // Hub nodes stagger in on desktop
        if (!isMobileDevice && nodes.length) {
            gsap.from(nodes, {
                autoAlpha: 0,
                scale: 0.75,
                duration: 0.7,
                stagger: 0.12,
                ease: 'back.out(1.5)',
                delay: 0.6,
            });
        }
    }
}

document.addEventListener('DOMContentLoaded', () => {
    const runSafe = (name, fn) => {
        try {
            fn();
        } catch (e) {
            console.error(`[Init Error] Failed to initialize ${name}:`, e);
        }
    };

    runSafe('SmoothScroll', initSmoothScroll);
    runSafe('Navbar', initNavbar);
    runSafe('Particles', initParticles);
    runSafe('Hero', initHero);
    runSafe('HeroRotator', initHeroRotator);
    runSafe('Reveals', initReveals);
    runSafe('Counters', initCounters);
    runSafe('RegionalNetwork', initRegionalNetwork);
    runSafe('SegmentCards', initSegmentCards);
    runSafe('Buttons', initButtons);
    runSafe('Floating', initFloating);
    runSafe('JourneyTimeline', initJourneyTimeline);
    runSafe('Announcements', initAnnouncements);
    runSafe('AboutOverlay', initAboutOverlay);
    runSafe('Leadership', initLeadership);
    runSafe('FutureSplit', initFutureSplit);
    runSafe('AchievementPage', initAchievementPage);
    runSafe('GovernancePage', initGovernancePage);

    try {
        ScrollTrigger.refresh();
    } catch (e) {
        console.error('[Init Error] Failed to refresh ScrollTrigger:', e);
    }
});
