// Home page JS — credit modal, projector, video testimonials, lightbox, credit forms.
// OPTIMIZED FOR PERFORMANCE — debounced scroll, passive listeners, RAF batching

(function () {
  'use strict';

  // ===== PERFORMANCE UTILITIES =====
  const debounce = (fn, ms) => {
    let timer;
    return function (...args) {
      clearTimeout(timer);
      timer = setTimeout(() => fn.apply(this, args), ms);
    };
  };

  const throttle = (fn, ms) => {
    let lastRun = 0;
    return function (...args) {
      const now = Date.now();
      if (now - lastRun >= ms) {
        lastRun = now;
        fn.apply(this, args);
      }
    };
  };

  // ===== AUTO-OPEN POPUP — optimized timing =====
  (function () {
    function openModalNow() {
      const modal = document.getElementById('creditModal');
      if (!modal) return;
      
      // Use requestAnimationFrame for smoother paint
      requestAnimationFrame(() => {
        modal.classList.add('open');
        modal.setAttribute('aria-hidden', 'false');
        document.body.classList.add('modal-open');
      });
    }
    
    if (document.readyState === 'loading') {
      document.addEventListener('DOMContentLoaded', () => {
        requestAnimationFrame(() => setTimeout(openModalNow, 5000));
      });
    } else {
      requestAnimationFrame(() => setTimeout(openModalNow, 5000));
    }
  })();

  // Prep service-icon SVG draw-in (batch DOM reads)
  requestAnimationFrame(() => {
    const paths = document.querySelectorAll('.service-icon svg path, .service-icon svg rect, .service-icon svg circle, .service-icon svg line');
    paths.forEach((p) => {
      try {
        const len = p.getTotalLength();
        if (len > 0) {
          p.style.strokeDasharray = len + 1;
          p.style.strokeDashoffset = len + 1;
        }
      } catch (_) {}
    });
  });

  // Count-up animation for stats (optimized RAF)
  function countUp(el) {
    const to = parseInt(el.dataset.countTo || el.textContent.replace(/\D/g, ''), 10);
    if (!to || isNaN(to)) return;
    const dur = 1400; // Slightly faster for snappier feel
    const start = performance.now();
    
    function frame(t) {
      const p = Math.min(1, (t - start) / dur);
      const eased = 1 - Math.pow(1 - p, 3);
      el.textContent = Math.round(to * eased).toLocaleString();
      if (p < 1) requestAnimationFrame(frame);
    }
    requestAnimationFrame(frame);
  }

  const countObserver = new IntersectionObserver(
    (entries) => {
      entries.forEach((e) => {
        if (e.isIntersecting) {
          countUp(e.target);
          countObserver.unobserve(e.target);
        }
      });
    },
    { threshold: 0.3, rootMargin: '50px' } // Earlier trigger for smoother experience
  );

  document.querySelectorAll('[data-count-to], .count[data-count-to]').forEach((el) => countObserver.observe(el));

  // Score before/after animation (optimized RAF)
  const animateScoreNum = (el, from, to) => {
    const dur = 1600;
    const start = performance.now();
    
    function frame(t) {
      const p = Math.min(1, (t - start) / dur);
      const eased = 1 - Math.pow(1 - p, 3);
      el.textContent = Math.round(from + (to - from) * eased);
      if (p < 1) requestAnimationFrame(frame);
    }
    requestAnimationFrame(frame);
  };

  const resultObserver = new IntersectionObserver(
    (entries) => {
      entries.forEach((e) => {
        if (e.isIntersecting) {
          const el = e.target;
          const from = Number(el.dataset.from || 0);
          const to = Number(el.dataset.to || el.textContent);
          animateScoreNum(el, from, to);
          resultObserver.unobserve(el);
        }
      });
    },
    { threshold: 0.3, rootMargin: '50px' }
  );

  document.querySelectorAll('.result-score-after').forEach((el) => resultObserver.observe(el));

  // Wealth projector (debounced for smooth slider interaction)
  (function () {
    const scoreInput = document.getElementById('scoreInput');
    if (!scoreInput) return;
    
    const debtInput = document.getElementById('debtInput');
    const scoreVal = document.getElementById('scoreVal');
    const debtVal = document.getElementById('debtVal');
    const projectedScore = document.getElementById('projectedScore');
    const projectedGain = document.getElementById('projectedGain');
    const savingsVal = document.getElementById('savingsVal');
    const fundingVal = document.getElementById('fundingVal');
    const rateVal = document.getElementById('rateVal');
    const pkgInputs = document.querySelectorAll('input[name="projectorPkg"]');

    function recalc() {
      const score = +scoreInput.value;
      const debt = +debtInput.value;
      const pkg = document.querySelector('input[name="projectorPkg"]:checked')?.value || 'standard';
      const lift = pkg === 'premium' ? 200 : pkg === 'expedited' ? 160 : 120;
      const newScore = Math.min(820, score + lift);
      const gain = newScore - score;
      
      // Batch DOM writes in RAF
      requestAnimationFrame(() => {
        scoreVal.textContent = score;
        debtVal.textContent = '$' + debt.toLocaleString();
        projectedScore.textContent = newScore;
        projectedGain.textContent = '+' + gain + ' points';
        
        const savings = Math.round(debt * (gain / 100) * 0.6);
        savingsVal.textContent = '$' + savings.toLocaleString();
        
        const funding = Math.round((newScore - 500) * 350);
        fundingVal.textContent = '$' + Math.round(funding / 1000) + 'K';
        
        const apr = Math.max(3.5, 12 - (newScore - 580) / 30);
        rateVal.textContent = apr.toFixed(1) + '%';
      });
    }

    // Throttle slider input for smooth 60fps feel
    const throttledRecalc = throttle(recalc, 16); // ~60fps
    
    [scoreInput, debtInput].forEach((i) => i.addEventListener('input', throttledRecalc, { passive: true }));
    pkgInputs.forEach((i) => i.addEventListener('change', recalc));
    
    recalc(); // Initial calc
  })();

  // Video testimonials — optimized playback control
  (function () {
    const cards = document.querySelectorAll('.video-card[data-video]');
    if (!cards.length) return;

    cards.forEach((card) => {
      const video = card.querySelector('video');
      const muteBtn = card.querySelector('.video-mute-toggle');
      if (!video) return;

      function play() {
        // Batch pause operations
        requestAnimationFrame(() => {
          cards.forEach((c) => {
            if (c !== card) {
              const v = c.querySelector('video');
              if (v && !v.paused) {
                v.pause();
                c.classList.remove('playing');
              }
            }
          });
        });

        video.play()
          .then(() => {
            requestAnimationFrame(() => card.classList.add('playing'));
          })
          .catch(() => {
            video.muted = true;
            video.play();
            requestAnimationFrame(() => card.classList.add('playing'));
          });
      }

      function pause() {
        video.pause();
        requestAnimationFrame(() => card.classList.remove('playing'));
      }

      card.addEventListener('click', (e) => {
        if (e.target.closest('.video-mute-toggle')) return;
        if (video.paused) {
          if (video.muted) video.muted = false;
          play();
        } else {
          pause();
        }
      }, { passive: true });

      muteBtn?.addEventListener('click', (e) => {
        e.stopPropagation();
        video.muted = !video.muted;
        const lines = muteBtn.querySelectorAll('line');
        requestAnimationFrame(() => {
          lines.forEach((l) => (l.style.display = video.muted ? '' : 'none'));
        });
      });

      video.addEventListener('ended', () => {
        requestAnimationFrame(() => card.classList.remove('playing'));
      }, { passive: true });

      video.addEventListener('pause', () => {
        if (!video.ended) return;
        requestAnimationFrame(() => card.classList.remove('playing'));
      }, { passive: true });
    });
  })();

  // Testimonial lightbox (optimized rendering)
  (function () {
    const lightbox = document.getElementById('lightbox');
    const lightboxImg = document.getElementById('lightboxImg');
    const closeBtn = document.getElementById('lightboxClose');
    const prevBtn = document.getElementById('lightboxPrev');
    const nextBtn = document.getElementById('lightboxNext');
    const counter = document.getElementById('lightboxCounter');
    const cards = Array.from(document.querySelectorAll('.testimonial-card'));
    if (!lightbox || cards.length === 0) return;

    const sources = cards.map((c) => c.getAttribute('data-full'));
    let currentIndex = 0;

    function show(i) {
      currentIndex = (i + sources.length) % sources.length;
      requestAnimationFrame(() => {
        lightboxImg.src = sources[currentIndex];
        if (counter) counter.textContent = currentIndex + 1 + ' / ' + sources.length;
      });
    }

    function open(i) {
      show(i);
      requestAnimationFrame(() => {
        lightbox.classList.add('open');
        lightbox.setAttribute('aria-hidden', 'false');
        document.body.classList.add('lightbox-open');
      });
    }

    function close() {
      requestAnimationFrame(() => {
        lightbox.classList.remove('open');
        lightbox.setAttribute('aria-hidden', 'true');
        document.body.classList.remove('lightbox-open');
      });
    }

    cards.forEach((card, i) => {
      card.addEventListener('click', (e) => {
        e.preventDefault();
        open(i);
      });
    });

    closeBtn?.addEventListener('click', close);
    prevBtn?.addEventListener('click', () => show(currentIndex - 1));
    nextBtn?.addEventListener('click', () => show(currentIndex + 1));
    
    lightbox.addEventListener('click', (e) => {
      if (e.target === lightbox) close();
    });

    document.addEventListener('keydown', (e) => {
      if (!lightbox.classList.contains('open')) return;
      if (e.key === 'Escape') close();
      if (e.key === 'ArrowLeft') show(currentIndex - 1);
      if (e.key === 'ArrowRight') show(currentIndex + 1);
    });
  })();

  // Endpoints come from data-* on <body data-routes-...>
  function endpoint(name) {
    return document.body.getAttribute('data-route-' + name) || '';
  }

  // ===== 5-step quiz (popup form) — optimized transitions =====
  (function () {
    const form = document.getElementById('creditFormModal');
    if (!form) return;

    const panels = form.querySelectorAll('.quiz-panel');
    const answers = {};
    let current = 1;
    const TOTAL = 5;

    function showStep(n) {
      requestAnimationFrame(() => {
        panels.forEach((p) => p.classList.remove('active'));
        const target = form.querySelector('.quiz-panel[data-step="' + n + '"]');
        if (target) target.classList.add('active');
        current = n;
        
        const modal = document.getElementById('creditModal');
        if (modal) {
          modal.scrollTo({ top: 0, behavior: 'smooth' });
        }
      });
    }

    form.querySelectorAll('.quiz-option').forEach((btn) => {
      btn.addEventListener('click', () => {
        const name = btn.dataset.name;
        const value = btn.dataset.value;
        answers[name] = value;
        
        requestAnimationFrame(() => {
          form.querySelectorAll('.quiz-option[data-name="' + name + '"]')
            .forEach((o) => o.classList.remove('selected'));
          btn.classList.add('selected');
        });

        // Faster transition for snappier feel
        setTimeout(() => {
          if (current < TOTAL) showStep(current + 1);
        }, 150);
      });
    });

    form.querySelectorAll('[data-quiz-back]').forEach((b) => {
      b.addEventListener('click', () => {
        if (current > 1) showStep(current - 1);
      });
    });

    form.addEventListener('submit', async (e) => {
      e.preventDefault();
      const fullName = form.querySelector('input[name="fullName"]').value.trim();
      const email = form.querySelector('input[name="email"]').value.trim();
      const phone = form.querySelector('input[name="phone"]').value.trim();
      
      if (!fullName || !email || !phone) {
        alert('Please fill out all fields.');
        return;
      }

      const payload = Object.assign({}, answers, { fullName, email, phone });
      const submitBtn = form.querySelector('button[type="submit"]');
      const original = submitBtn.innerHTML;
      
      submitBtn.disabled = true;
      submitBtn.innerHTML = 'Submitting…';

      const ok = await window.submitLead(endpoint('credit-popup'), payload);
      
      if (ok) {
        showStep('success');
      } else {
        alert('Sorry, we could not submit. Please try again or contact us directly.');
        submitBtn.disabled = false;
        submitBtn.innerHTML = original;
      }
    });

    window.resetCreditQuiz = function () {
      Object.keys(answers).forEach((k) => delete answers[k]);
      requestAnimationFrame(() => {
        form.querySelectorAll('.quiz-option.selected').forEach((o) => o.classList.remove('selected'));
        form.reset();
        showStep(1);
      });
    };
  })();

  // ===== Inline credit form — optimized =====
  (function () {
    const form = document.getElementById('creditForm');
    if (!form) return;

    form.addEventListener('submit', async (e) => {
      e.preventDefault();
      const fullName = form.querySelector('input[name="fullName"]').value.trim();
      const email = form.querySelector('input[name="email"]').value.trim();
      const phone = form.querySelector('input[name="phone"]').value.trim();
      
      if (!fullName || !email || !phone) {
        alert('Please fill out all fields.');
        return;
      }

      const submitBtn = form.querySelector('button[type="submit"]');
      const original = submitBtn.innerHTML;
      
      submitBtn.disabled = true;
      submitBtn.innerHTML = 'Submitting…';

      const ok = await window.submitLead(endpoint('credit-inline'), { fullName, email, phone });

      if (ok) {
        requestAnimationFrame(() => {
          form.querySelectorAll('.quiz-final-field, .quiz-submit').forEach((el) => (el.style.display = 'none'));
          const success = form.querySelector('.quiz-panel[data-step="success"]');
          if (success) success.classList.add('active');
        });
      } else {
        alert('Sorry, we could not submit. Please try again or contact us directly.');
        submitBtn.disabled = false;
        submitBtn.innerHTML = original;
      }
    });
  })();

  // ===== Modal open / close — optimized animations =====
  (function () {
    const modal = document.getElementById('creditModal');
    if (!modal) return;
    
    const closeBtn = document.getElementById('creditModalClose');
    const successClose = document.getElementById('creditModalSuccessClose');

    function openModal() {
      requestAnimationFrame(() => {
        modal.classList.add('open');
        modal.setAttribute('aria-hidden', 'false');
        document.body.classList.add('modal-open');
      });
    }

    function closeModal() {
      requestAnimationFrame(() => {
        modal.classList.remove('open');
        modal.setAttribute('aria-hidden', 'true');
        document.body.classList.remove('modal-open');
      });
    }

    window.openCreditModal = openModal;
    window.closeCreditModal = closeModal;

    closeBtn?.addEventListener('click', closeModal);
    successClose?.addEventListener('click', () => {
      closeModal();
      setTimeout(() => window.resetCreditQuiz?.(), 350);
    });

    modal.addEventListener('click', (e) => {
      if (e.target === modal) closeModal();
    });

    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && modal.classList.contains('open')) closeModal();
    });

    document.querySelectorAll('[data-open-credit-modal]').forEach((el) => {
      el.addEventListener('click', (e) => {
        e.preventDefault();
        openModal();
      });
    });
  })();
})();