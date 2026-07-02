import './bootstrap';

// ---------------------------------------------------------------------------
// Mobile navigation
// ---------------------------------------------------------------------------
const navToggle = document.getElementById('nav-toggle');
const navPanel = document.getElementById('nav-panel');

if (navToggle && navPanel) {
    navToggle.addEventListener('click', () => {
        const open = navPanel.classList.toggle('is-open');
        navToggle.setAttribute('aria-expanded', open ? 'true' : 'false');
        navToggle.querySelector('[data-icon="open"]')?.classList.toggle('hidden', open);
        navToggle.querySelector('[data-icon="close"]')?.classList.toggle('hidden', !open);
    });

    // Close the panel when a link inside it is clicked
    navPanel.querySelectorAll('a').forEach((link) =>
        link.addEventListener('click', () => {
            navPanel.classList.remove('is-open');
            navToggle.setAttribute('aria-expanded', 'false');
            navToggle.querySelector('[data-icon="open"]')?.classList.remove('hidden');
            navToggle.querySelector('[data-icon="close"]')?.classList.add('hidden');
        })
    );
}

// ---------------------------------------------------------------------------
// Header: elevate on scroll
// ---------------------------------------------------------------------------
const header = document.getElementById('site-header');

if (header) {
    const onScroll = () => {
        header.classList.toggle('is-scrolled', window.scrollY > 8);
    };
    onScroll();
    window.addEventListener('scroll', onScroll, { passive: true });
}

// ---------------------------------------------------------------------------
// Scroll-reveal animations
// ---------------------------------------------------------------------------
const revealables = document.querySelectorAll('.reveal');

if (revealables.length && 'IntersectionObserver' in window) {
    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    observer.unobserve(entry.target);
                }
            });
        },
        { threshold: 0.12, rootMargin: '0px 0px -40px 0px' }
    );
    revealables.forEach((el) => observer.observe(el));
} else {
    revealables.forEach((el) => el.classList.add('is-visible'));
}

// ---------------------------------------------------------------------------
// FAQ: allow only one open item per group
// ---------------------------------------------------------------------------
document.querySelectorAll('[data-faq-group]').forEach((group) => {
    const items = group.querySelectorAll('details.faq-item');
    items.forEach((item) => {
        item.addEventListener('toggle', () => {
            if (item.open) {
                items.forEach((other) => {
                    if (other !== item) other.open = false;
                });
            }
        });
    });
});

// ---------------------------------------------------------------------------
// Auto-hide flash messages after a few seconds
// ---------------------------------------------------------------------------
document.querySelectorAll('[data-flash]').forEach((flash) => {
    setTimeout(() => {
        flash.style.transition = 'opacity 0.6s ease';
        flash.style.opacity = '0';
        setTimeout(() => flash.remove(), 700);
    }, 6000);
});
