document.addEventListener('DOMContentLoaded', function () {
    const btn = document.getElementById('mobileMenuBtn');
    const menu = document.getElementById('mobileMenu');

    if (btn && menu) {
        btn.addEventListener('click', function () {
            menu.classList.toggle('hidden');
        });
    }

    // Smooth-scroll for on-page anchor buttons (e.g. "Explore the platform")
    document.querySelectorAll('a[href^="#"]').forEach(function (link) {
        link.addEventListener('click', function (e) {
            const target = document.querySelector(link.getAttribute('href'));
            if (target) {
                e.preventDefault();
                target.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        });
    });

    // Scroll-reveal animations: fade + slide elements into view as user scrolls
    const revealTargets = document.querySelectorAll('.reveal, .reveal-group');
    if ('IntersectionObserver' in window && revealTargets.length) {
        const observer = new IntersectionObserver(function (entries, obs) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('in-view');
                    obs.unobserve(entry.target);
                }
            });
        }, { threshold: 0.15, rootMargin: '0px 0px -60px 0px' });

        revealTargets.forEach(function (el) { observer.observe(el); });
    } else {
        // Fallback: no IntersectionObserver support — just show everything
        revealTargets.forEach(function (el) { el.classList.add('in-view'); });
    }

    // Sticky header gets a subtle shadow once the page is scrolled
    const header = document.querySelector('.site-header');
    if (header) {
        window.addEventListener('scroll', function () {
            header.classList.toggle('scrolled', window.scrollY > 8);
        });
    }
});
