<footer class="bg-royal-950 text-royal-200 py-14">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="grid md:grid-cols-4 gap-10">

      <div class="md:col-span-1">
        <a href="{{ route('home') }}" class="flex items-center">
          <img src="{{ cms_image('branding.logo', 'images/logo.jpeg') }}" alt="AQ Wealth University" class="brand-logo" loading="lazy" />
        </a>
        <p class="mt-4 text-sm text-royal-300/80 italic font-display leading-relaxed">
          From knowledge to wisdom.<br/>From wisdom to wealth.
        </p>
        <div class="mt-5 flex gap-3">
          <a href="{{ route('community') }}" class="btn-gold text-xs py-2 px-4">Join Community →</a>
        </div>
      </div>

      <div>
        <div class="text-xs uppercase tracking-widest text-gold-400 mb-4 font-semibold">Services</div>
        <ul class="space-y-2.5 text-sm">
          <li><a href="/services" class="text-royal-300/80 hover:text-white transition">Credit Repair</a></li>
          <li><a href="/services" class="text-royal-300/80 hover:text-white transition">Business Credit</a></li>
          <li><a href="/business-setup" class="text-royal-300/80 hover:text-white transition">Business Setup</a></li>
          <li><a href="/funding" class="text-royal-300/80 hover:text-white transition">Funding</a></li>
          <li><a href="/mentorship" class="text-royal-300/80 hover:text-white transition">Mentorship</a></li>
        </ul>
      </div>

      <div>
        <div class="text-xs uppercase tracking-widest text-gold-400 mb-4 font-semibold">Company</div>
        <ul class="space-y-2.5 text-sm">
          <li><a href="/pricing" class="text-royal-300/80 hover:text-white transition">Pricing</a></li>
          <li><a href="/faq" class="text-royal-300/80 hover:text-white transition">FAQ</a></li>
          <li><a href="/community" class="text-royal-300/80 hover:text-white transition">Community</a></li>
          <li><a href="{{ route('funding') }}" class="text-royal-300/80 hover:text-white transition">Apply for Funding</a></li>
          <li><a href="{{ route('home') }}#contact" class="text-royal-300/80 hover:text-white transition">Free Credit Review</a></li>
        </ul>
      </div>

      <div>
        <div class="text-xs uppercase tracking-widest text-gold-400 mb-4 font-semibold">Contact</div>
        <ul class="space-y-2.5 text-sm">
          <li class="text-royal-300/80">
            <span class="text-royal-400/60 text-xs uppercase tracking-wide">Email</span><br/>
            <a href="mailto:{{ config('site.contact_email') }}" class="hover:text-white transition">{{ config('site.contact_email') }}</a>
          </li>
          <li class="text-royal-300/80">
            <span class="text-royal-400/60 text-xs uppercase tracking-wide">Hours</span><br/>
            {{ config('site.business_hours') }}
          </li>
        </ul>
        <div class="mt-5">
          <a href="{{ route('home') }}#contact" class="btn-outline text-xs py-2 px-4">Free Credit Review →</a>
        </div>
      </div>

    </div>

    <div class="mt-12 pt-6 border-t border-royal-800 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-royal-500">
      <span>© <span data-year></span> {{ config('app.name') }}. All rights reserved.</span>
      <div class="flex gap-6">
        <a href="/services" class="hover:text-royal-300 transition">Services</a>
        <a href="/pricing" class="hover:text-royal-300 transition">Pricing</a>
        <a href="/faq" class="hover:text-royal-300 transition">FAQ</a>
        <a href="/community" class="hover:text-royal-300 transition">Community</a>
      </div>
    </div>
  </div>
</footer>
