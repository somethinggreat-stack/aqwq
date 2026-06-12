<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <title>@yield('title', config('app.name'))</title>
  <meta name="description" content="@yield('description', '')" />

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;600;700;800&family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            royal: {50:'#f5f0fb',100:'#ead8f5',200:'#d3b1ec',300:'#b683df',400:'#9554cf',500:'#7a30bf',600:'#6322a3',700:'#4c1980',800:'#3a1463',900:'#260a44',950:'#1a0633'},
            gold:  {50:'#fbf6e6',100:'#f5e7b8',200:'#ecd17d',300:'#dfb84a',400:'#cfa12a',500:'#b8860b',600:'#9a6f08',700:'#7a5707',800:'#5a4106',900:'#3d2c04'},
          },
          fontFamily: {
            display: ['"Playfair Display"', 'serif'],
            sans: ['Inter', 'system-ui', 'sans-serif'],
          },
        }
      }
    }
  </script>

  <style>
    :root {
      --brand-primary: {{ cms('theme.color_primary', '#4c1980') }};
      --brand-accent:  {{ cms('theme.color_accent', '#b8860b') }};
    }
  </style>

  @stack('styles')
</head>
<body
  class="font-sans bg-white text-royal-900 antialiased"
  data-route-credit-inline="{{ route('leads.credit-inline') }}"
  data-route-credit-popup="{{ route('leads.credit-popup') }}"
  data-route-funding="{{ route('leads.funding') }}"
  data-route-intake="{{ route('leads.intake') }}"
  data-route-onboarding-signed="{{ route('leads.onboarding-signed') }}"
>

  @yield('content')

  <script src="{{ asset('js/site.js') }}" defer></script>
  @stack('scripts')
</body>
</html>
