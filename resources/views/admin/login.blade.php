<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Login · {{ config('app.name') }}</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = { theme: { extend: {
      colors: { royal:{50:'#f5f0fb',100:'#ead8f5',500:'#7a30bf',600:'#6322a3',700:'#4c1980',800:'#3a1463',900:'#260a44',950:'#1a0633'},
                gold:{300:'#dfb84a',400:'#cfa12a',500:'#b8860b'} },
      fontFamily: { sans:['Inter','sans-serif'] } }}}
  </script>
</head>
<body class="font-sans bg-gradient-to-br from-royal-900 to-royal-950 min-h-screen flex items-center justify-center p-4">
  <div class="w-full max-w-md">
    <div class="text-center mb-6">
      <h1 class="text-2xl font-bold text-white">{{ config('app.name') }}</h1>
      <p class="text-royal-200 text-sm mt-1">Owner Control Panel</p>
    </div>

    <div class="bg-white rounded-2xl shadow-2xl p-8">
      <h2 class="text-lg font-bold text-royal-900 mb-1">Sign in</h2>
      <p class="text-sm text-royal-500 mb-6">Enter your administrator credentials.</p>

      @if ($errors->any())
        <div class="mb-4 rounded-lg bg-red-50 border border-red-200 text-red-700 px-4 py-3 text-sm">
          @foreach ($errors->all() as $error)<div>{{ $error }}</div>@endforeach
        </div>
      @endif

      <form method="POST" action="{{ route('admin.login.attempt') }}" class="space-y-4">
        @csrf
        <div>
          <label class="block text-sm font-medium text-royal-800 mb-1">Email</label>
          <input type="email" name="email" value="{{ old('email') }}" required autofocus
                 class="w-full rounded-lg border border-royal-200 px-3 py-2.5 focus:ring-2 focus:ring-gold-400 focus:border-gold-400 outline-none" />
        </div>
        <div>
          <label class="block text-sm font-medium text-royal-800 mb-1">Password</label>
          <input type="password" name="password" required
                 class="w-full rounded-lg border border-royal-200 px-3 py-2.5 focus:ring-2 focus:ring-gold-400 focus:border-gold-400 outline-none" />
        </div>
        <label class="flex items-center gap-2 text-sm text-royal-600">
          <input type="checkbox" name="remember" class="rounded border-royal-300" /> Remember me
        </label>
        <button class="w-full bg-royal-700 hover:bg-royal-800 text-white font-semibold rounded-lg py-2.5 transition">
          Sign in
        </button>
      </form>
    </div>

    <p class="text-center text-royal-300 text-xs mt-6">← <a href="{{ url('/') }}" class="underline">Back to website</a></p>
  </div>
</body>
</html>
