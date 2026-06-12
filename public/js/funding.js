// Funding page JS — multi-step funding form. Submits to Laravel; server proxies to GoHighLevel.

(function () {
  'use strict';

  function endpoint(name) {
    return document.body.getAttribute('data-route-' + name) || '';
  }

  function initFundingForm(form, opts) {
    if (!form) return;
    opts = opts || {};
    const TOTAL = 3;
    let current = 1;
    const panels = form.querySelectorAll('.form-panel');
    const stepEls = form.querySelectorAll('.stepper-step');
    const lines = form.querySelectorAll('.stepper-line');

    const getPanel = (n) => form.querySelector('.form-panel[data-panel="' + n + '"]');
    const getLine = (n) => form.querySelector('.stepper-line[data-line="' + n + '"]');

    function validatePanel(n) {
      const panel = getPanel(n);
      const required = panel.querySelectorAll('[required]');
      let valid = true;
      required.forEach((el) => {
        if (!el.value || (el.type === 'checkbox' && !el.checked)) {
          el.style.borderColor = '#ef4444';
          valid = false;
        } else {
          el.style.borderColor = '';
        }
      });
      if (n === 2) {
        const checked = panel.querySelectorAll('input[name="fundingType"]:checked');
        if (checked.length === 0) {
          const chipGroup = panel.querySelector('.chip-group');
          chipGroup.style.outline = '2px solid #ef4444';
          chipGroup.style.outlineOffset = '4px';
          chipGroup.style.borderRadius = '0.75rem';
          valid = false;
          setTimeout(() => {
            chipGroup.style.outline = '';
          }, 2500);
        }
      }
      return valid;
    }

    function show(n) {
      panels.forEach((p) => p.classList.remove('active'));
      const target = getPanel(n);
      if (target) target.classList.add('active');
      stepEls.forEach((el) => {
        const stepNum = parseInt(el.getAttribute('data-step'));
        el.classList.remove('active', 'done');
        if (stepNum < n) el.classList.add('done');
        if (stepNum === n) el.classList.add('active');
      });
      getLine(1)?.classList.toggle('active', n >= 2);
      getLine(2)?.classList.toggle('active', n >= 3);

      if (opts.scrollContainer) {
        opts.scrollContainer.scrollTo({ top: 0, behavior: 'smooth' });
      } else if (window.innerWidth < 768) {
        form.scrollIntoView({ behavior: 'smooth', block: 'start' });
      }
      current = n;
    }

    form.addEventListener('click', (e) => {
      const action = e.target.dataset.action;
      if (action === 'next') {
        if (validatePanel(current) && current < TOTAL) show(current + 1);
      }
      if (action === 'back' && current > 1) show(current - 1);
    });

    form.addEventListener('submit', async (e) => {
      e.preventDefault();
      if (!validatePanel(current)) return;
      const data = new FormData(form);
      const payload = {};
      data.forEach((v, k) => {
        if (payload[k]) {
          if (Array.isArray(payload[k])) payload[k].push(v);
          else payload[k] = [payload[k], v];
        } else {
          payload[k] = v;
        }
      });

      const submitBtn = form.querySelector('button[type="submit"]');
      const originalText = submitBtn ? submitBtn.innerHTML : '';
      if (submitBtn) {
        submitBtn.disabled = true;
        submitBtn.innerHTML = 'Submitting…';
      }

      const ok = await window.submitLead(endpoint('funding'), payload);

      if (ok) {
        panels.forEach((p) => p.classList.remove('active'));
        getPanel('success').classList.add('active');
        stepEls.forEach((el) => {
          el.classList.remove('active');
          el.classList.add('done');
        });
        lines.forEach((l) => l.classList.add('active'));

        if (opts.scrollContainer) opts.scrollContainer.scrollTo({ top: 0, behavior: 'smooth' });
        else if (window.innerWidth < 768) form.scrollIntoView({ behavior: 'smooth', block: 'start' });
      } else {
        alert('Sorry, we could not submit your application. Please try again or contact us directly.');
        if (submitBtn) {
          submitBtn.disabled = false;
          submitBtn.innerHTML = originalText;
        }
      }
    });
  }

  initFundingForm(document.getElementById('fundingForm'));
})();
