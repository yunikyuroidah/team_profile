/* ============================================================
   Kelompok 3 — Animations & Interactions
   ============================================================ */

document.addEventListener('DOMContentLoaded', () => {

    // ── 1. Floating star particles ──────────────────────────────
    const starsContainer = document.getElementById('stars');
    if (starsContainer) {
        const count = 60;
        for (let i = 0; i < count; i++) {
            const s = document.createElement('span');
            s.style.width  = s.style.height = Math.random() * 2.5 + 1 + 'px';
            s.style.left   = Math.random() * 100 + '%';
            s.style.top    = Math.random() * 100 + '%';
            s.style.setProperty('--dur', (Math.random() * 4 + 2) + 's');
            s.style.setProperty('--opa', (Math.random() * 0.5 + 0.2).toFixed(2));
            s.style.animationDelay = (Math.random() * 5) + 's';
            starsContainer.appendChild(s);
        }
    }

    // ── 2. Scroll-reveal (Intersection Observer) ────────────────
    const revealEls = document.querySelectorAll('.reveal, .reveal-left, .reveal-right, .reveal-scale');
    if (revealEls.length) {
        const obs = new IntersectionObserver((entries) => {
            entries.forEach(e => {
                if (e.isIntersecting) {
                    e.target.classList.add('visible');
                    obs.unobserve(e.target);
                }
            });
        }, { threshold: 0.1, rootMargin: '0px 0px -40px 0px' });

        revealEls.forEach(el => obs.observe(el));
    }

    // ── 3. Navbar scroll shadow ─────────────────────────────────
    const nav = document.getElementById('mainNav');
    if (nav) {
        let lastY = 0;
        window.addEventListener('scroll', () => {
            const y = window.scrollY;
            if (y > 20) {
                nav.classList.add('shadow-lg', 'shadow-black/20');
                nav.style.borderColor = 'rgba(255,255,255,0.08)';
            } else {
                nav.classList.remove('shadow-lg', 'shadow-black/20');
                nav.style.borderColor = 'rgba(255,255,255,0.05)';
            }
            // hide/show on scroll direction
            if (y > lastY && y > 200) {
                nav.style.transform = 'translateY(-100%)';
            } else {
                nav.style.transform = 'translateY(0)';
            }
            lastY = y;
        }, { passive: true });
    }

    // ── 4. Mobile nav toggle ────────────────────────────────────
    window.toggleMobileNav = function () {
        const mobileNav = document.getElementById('mobileNav');
        const icon = document.getElementById('menuIcon');
        if (!mobileNav) return;
        const open = mobileNav.style.maxHeight && mobileNav.style.maxHeight !== '0px';
        mobileNav.style.maxHeight = open ? '0px' : '300px';
        if (icon) {
            icon.classList.toggle('fa-bars', open);
            icon.classList.toggle('fa-times', !open);
        }
    };

    // ── 5. Smooth page transition on nav clicks ─────────────────
    document.querySelectorAll('nav a[href]').forEach(link => {
        link.addEventListener('click', function (e) {
            const href = this.getAttribute('href');
            if (href.startsWith('/') && !href.startsWith('//')) {
                e.preventDefault();
                document.querySelector('main').style.opacity = '0';
                document.querySelector('main').style.transform = 'translateY(10px)';
                setTimeout(() => { window.location.href = href; }, 250);
            }
        });
    });

    // ── 6. Wave hand animation keyframe injection ───────────────
    if (!document.getElementById('wave-keyframe')) {
        const style = document.createElement('style');
        style.id = 'wave-keyframe';
        style.textContent = `
            @keyframes wave {
                0%,100% { transform: rotate(0deg); }
                15% { transform: rotate(14deg); }
                30% { transform: rotate(-8deg); }
                40% { transform: rotate(14deg); }
                50% { transform: rotate(-4deg); }
                60% { transform: rotate(10deg); }
                70% { transform: rotate(0deg); }
            }
        `;
        document.head.appendChild(style);
    }

    // ── 7. Typed effect for hero (optional) ─────────────────────
    // If you want a typing effect on the gradient text, uncomment:
    // const gradText = document.querySelector('.gradient-text');
    // if (gradText) { /* ...typing logic... */ }

});
