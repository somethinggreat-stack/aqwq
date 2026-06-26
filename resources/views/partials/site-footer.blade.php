<footer class="bg-royal-950 text-white py-14">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="grid md:grid-cols-4 gap-10">

      <div class="md:col-span-1">
        <a href="{{ route('home') }}" class="flex items-center">
          <img src="{{ cms_image('branding.logo', 'images/logo.jpeg') }}" alt="AQ Wealth University" class="brand-logo" loading="lazy" />
        </a>
        <p class="mt-4 text-sm text-white italic font-display leading-relaxed">
          From knowledge to wisdom.<br/>From wisdom to wealth.
        </p>
        <div class="mt-5 flex gap-3">
          <a href="{{ config('site.links.skool', '#contact') }}" target="_blank" rel="noopener" class="btn-gold text-xs py-2 px-4">Join Community →</a>
        </div>
      </div>

      <div>
        <div class="text-xs uppercase tracking-widest text-gold-400 mb-4 font-semibold">Services</div>
        <ul class="space-y-2.5 text-sm">
          <li><a href="/services" class="text-white hover:text-gold-300 transition">Credit Repair</a></li>
          <li><a href="/services" class="text-white hover:text-gold-300 transition">Business Credit</a></li>
          <li><a href="/business-setup" class="text-white hover:text-gold-300 transition">Business Setup</a></li>
          <li><a href="/funding" class="text-white hover:text-gold-300 transition">Funding</a></li>
          <li><a href="/mentorship" class="text-white hover:text-gold-300 transition">Mentorship</a></li>
        </ul>
      </div>

      <div>
        <div class="text-xs uppercase tracking-widest text-gold-400 mb-4 font-semibold">Company</div>
        <ul class="space-y-2.5 text-sm">
          <li><a href="/pricing" class="text-white hover:text-gold-300 transition">Pricing</a></li>
          <li><a href="/faq" class="text-white hover:text-gold-300 transition">FAQ</a></li>
          <li><a href="{{ config('site.links.skool', '#contact') }}" target="_blank" rel="noopener" class="text-white hover:text-gold-300 transition">Community</a></li>
          <li><a href="{{ route('funding') }}" class="text-white hover:text-gold-300 transition">Apply for Funding</a></li>
          <li><a href="#" data-open-credit-modal class="text-white hover:text-gold-300 transition">Free Credit Review</a></li>
        </ul>
      </div>

      <div>
        <div class="text-xs uppercase tracking-widest text-gold-400 mb-4 font-semibold">Contact</div>
        <ul class="space-y-2.5 text-sm">
          <li class="text-white">
            <span class="text-gold-400 text-xs uppercase tracking-wide">Email</span><br/>
            <a href="mailto:{{ config('site.contact_email') }}" class="hover:text-gold-300 transition">{{ config('site.contact_email') }}</a>
          </li>
          <li class="text-white">
            <span class="text-gold-400 text-xs uppercase tracking-wide">Phone</span><br/>
            <a href="tel:{{ preg_replace('/[^0-9]/', '', config('site.support.phone')) }}" class="hover:text-gold-300 transition">{{ config('site.support.phone') }}</a>
          </li>
          <li class="text-white">
            <span class="text-gold-400 text-xs uppercase tracking-wide">Hours</span><br/>
            {{ config('site.business_hours') }}
          </li>
        </ul>
        <div class="mt-5">
          <a href="#" data-open-credit-modal class="btn-outline text-xs py-2 px-4">Free Credit Review →</a>
        </div>
      </div>

    </div>

    {{-- Disclaimer --}}
    <div class="mt-10 pt-6 border-t border-royal-800 text-xs text-white/40 leading-relaxed text-center max-w-4xl mx-auto">
      AQ Wealth University provides credit education, credit report analysis, and dispute assistance guidance. We do not guarantee the removal of accurate information, specific credit score increases, or any particular financial outcome. Results vary based on each individual's credit profile and circumstances. We are not a law firm and do not provide legal advice. AQ Wealth University is not affiliated with or endorsed by Equifax, Experian, TransUnion, or any government agency. For SMS communications, reply <strong class="text-white/55">STOP</strong> to opt-out or <strong class="text-white/55">HELP</strong> for assistance. Message &amp; data rates may apply.
    </div>

    <div class="mt-6 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-white">
      <span>© <span data-year></span> {{ config('app.name') }}. All rights reserved.</span>
      <div class="flex flex-wrap justify-center gap-4">
        <a href="/privacy-policy" class="hover:text-gold-300 transition">Privacy Policy</a>
        <a href="/terms-of-service" class="hover:text-gold-300 transition">Terms of Service</a>
        <a href="/services" class="hover:text-gold-300 transition">Services</a>
        <a href="/pricing" class="hover:text-gold-300 transition">Pricing</a>
        <a href="/faq" class="hover:text-gold-300 transition">FAQ</a>
        <a href="{{ config('site.links.skool', '#contact') }}" target="_blank" rel="noopener" class="hover:text-gold-300 transition">Community</a>
      </div>
    </div>
  </div>
</footer>
