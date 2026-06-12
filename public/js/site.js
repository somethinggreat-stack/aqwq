// Shared site JS — nav scroll, mobile menu, reveal-on-scroll, lead submission helper.

(function () {
  'use strict';

  // Year in footer
  document.querySelectorAll('[data-year]').forEach((el) => {
    el.textContent = new Date().getFullYear();
  });

  // Announcement bar + nav scroll behavior
  const announceBar = document.getElementById('announceBar');
  const nav = document.getElementById('nav');
  function onScroll() {
    const y = window.scrollY;
    if (announceBar) {
      if (y > 30) announceBar.classList.add('hide', 'hide-bar');
      else announceBar.classList.remove('hide', 'hide-bar');
    }
    if (nav) {
      if (y > 30) nav.classList.add('scrolled-top');
      else nav.classList.remove('scrolled-top');
      if (y > 80) nav.classList.add('scrolled');
      else nav.classList.remove('scrolled');
    }
  }
  window.addEventListener('scroll', onScroll, { passive: true });
  onScroll();

  // Mobile menu toggle
  const menuBtn = document.getElementById('menuBtn');
  const mobileMenu = document.getElementById('mobileMenu');
  if (menuBtn && mobileMenu) {
    menuBtn.addEventListener('click', () => mobileMenu.classList.toggle('hidden'));
    mobileMenu.querySelectorAll('a').forEach((a) => {
      a.addEventListener('click', () => mobileMenu.classList.add('hidden'));
    });
  }

  // Reveal on scroll
  const revealObserver = new IntersectionObserver(
    (entries) => {
      entries.forEach((e) => {
        if (e.isIntersecting) {
          e.target.classList.add('in');
          if (e.target.classList.contains('service-card')) {
            e.target
              .querySelectorAll(
                '.service-icon svg path, .service-icon svg rect, .service-icon svg circle, .service-icon svg line'
              )
              .forEach((p) => {
                p.style.strokeDashoffset = '0';
              });
          }
          revealObserver.unobserve(e.target);
        }
      });
    },
    { threshold: 0.12, rootMargin: '0px 0px -50px 0px' }
  );
  document.querySelectorAll('[data-reveal]').forEach((el) => revealObserver.observe(el));
})();

// Public helper: POST a lead payload to a Laravel route. Returns true on success.
window.submitLead = async function submitLead(endpoint, payload) {
  const csrfMeta = document.querySelector('meta[name="csrf-token"]');
  const csrf = csrfMeta ? csrfMeta.getAttribute('content') : '';

  try {
    const res = await fetch(endpoint, {
      method: 'POST',
      credentials: 'same-origin',
      headers: {
        'Content-Type': 'application/json',
        Accept: 'application/json',
        'X-CSRF-TOKEN': csrf,
        'X-Requested-With': 'XMLHttpRequest',
      },
      body: JSON.stringify(payload),
    });

    if (res.ok) return true;

    if (res.status === 422) {
      try {
        const body = await res.json();
        const first = body && body.errors ? Object.values(body.errors)[0] : null;
        if (first && first[0]) console.warn('Validation:', first[0]);
      } catch (_) {}
    }
    return false;
  } catch (err) {
    console.error('Lead submission failed', err);
    return false;
  }
};
