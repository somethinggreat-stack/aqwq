@php
  $navItems = \App\Models\NavItem::where('is_active', true)->orderBy('sort')->get();
  $currentPath = trim(request()->path(), '/');
@endphp

<header id="nav" class="fixed inset-x-0 z-50">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="flex items-center justify-between h-20">

      <a href="{{ route('home') }}" class="flex items-center">
        <img src="{{ cms_image('branding.logo', 'images/logo.jpeg') }}" alt="AQ Wealth University" class="brand-logo" loading="eager" />
      </a>

      <nav class="hidden lg:flex items-center gap-8 text-sm font-medium">
        @if($navItems->isNotEmpty())
          @foreach($navItems as $navItem)
            @php
              $urlPath = trim(parse_url($navItem->url, PHP_URL_PATH) ?? $navItem->url, '/');
              $isActive = $urlPath === $currentPath && !str_starts_with($navItem->url, '#');
            @endphp
            <a href="{{ $navItem->url }}" target="{{ $navItem->target }}"
               class="nav-link transition {{ $isActive ? 'active' : '' }}">{{ $navItem->label }}</a>
          @endforeach
        @else
          <a href="/services"       class="nav-link transition {{ $currentPath === 'services' ? 'active' : '' }}">Services</a>
          <a href="/pricing"        class="nav-link transition {{ $currentPath === 'pricing' ? 'active' : '' }}">Pricing</a>
          <a href="/mentorship"     class="nav-link transition {{ $currentPath === 'mentorship' ? 'active' : '' }}">Mentorship</a>
          <a href="/business-setup" class="nav-link transition {{ $currentPath === 'business-setup' ? 'active' : '' }}">Business Setup</a>
          <a href="/funding"        class="nav-link transition {{ $currentPath === 'funding' ? 'active' : '' }}">Funding</a>
          <a href="/faq"            class="nav-link transition {{ $currentPath === 'faq' ? 'active' : '' }}">FAQ</a>
        @endif
      </nav>

      <div class="flex items-center gap-3">
        <a href="{{ route('community') }}" class="hidden sm:inline-flex btn-gold text-sm">Join the Community</a>
        <button id="menuBtn" class="lg:hidden p-2" aria-label="Open menu">
          <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M4 6h16M4 12h16M4 18h16"/>
          </svg>
        </button>
      </div>

    </div>
  </div>

  <div id="mobileMenu" class="hidden lg:hidden bg-white/95 border-t border-royal-100">
    <nav class="px-6 py-4 flex flex-col gap-3 text-royal-800 font-medium">
      @if($navItems->isNotEmpty())
        @foreach($navItems as $navItem)
          <a href="{{ $navItem->url }}" target="{{ $navItem->target }}" class="py-2">{{ $navItem->label }}</a>
        @endforeach
      @else
        <a href="/services"       class="py-2">Services</a>
        <a href="/pricing"        class="py-2">Pricing</a>
        <a href="/mentorship"     class="py-2">Mentorship</a>
        <a href="/business-setup" class="py-2">Business Setup</a>
        <a href="/funding"        class="py-2">Funding</a>
        <a href="/faq"            class="py-2">FAQ</a>
      @endif
      <a href="{{ route('community') }}" class="btn-gold mt-2 text-center">Join the Community</a>
    </nav>
  </div>
</header>
