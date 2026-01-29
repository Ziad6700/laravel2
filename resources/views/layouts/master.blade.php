<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

     @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-green-100">
    <header class="bg-emerald-700 shadow-lg">
    <div class="w-full flex flex-row items-center justify-between h-20 px-4 sm:px-8">
        <!-- Links: logo + titel strak links -->
        <div class="flex items-center gap-3 sm:gap-4">
            <img class="h-9 sm:h-10 w-auto" src="{{ asset('images/techniek-college-rotterdam.webp') }}" alt="Techniek College Rotterdam logo"> 
            <div class="flex flex-col gap-0.5 leading-tight">
                <span class="text-[10px] sm:text-xs uppercase tracking-[0.25em] text-emerald-100 font-semibold">
                    Techniek College Rotterdam
                </span>
                <span class="text-lg sm:text-xl font-semibold text-white">
                    Student Portaal
                </span>
            </div>
        </div>

        <!-- Rechts: navigatie-links met button styling -->
        <nav class="flex items-center ml-auto space-x-6 text-xs sm:text-sm">
            @if(($rol === 'student'))
                <a href="/" class="text-white font-medium hover:text-emerald-100 transition-colors duration-200">Home</a>                
                <a href="keuzedelen" class="text-white font-medium hover:text-emerald-100 transition-colors duration-200" style="margin: 0px 24px 0px 0px;">Keuzedelen</a>
                <a href="account" class="text-white font-medium" style="margin: 0px 24px 0px 0px;">Account</a>
                <form action="{{ route('logout') }}" method="POST" class="inline">
                    @csrf
                    <button type="submit" class="inline-flex items-center justify-center font-semibold text-emerald-700 bg-white h-9 sm:h-10 px-4 sm:px-6 rounded-full shadow-md hover:bg-emerald-50 hover:text-emerald-800 transition-all duration-200">
                        Uitloggen
                    </button>
                </form>
            @elseif(($rol === 'admin'))
            <a href="/" class="text-white font-medium hover:text-emerald-100 transition-colors duration-200">Home</a>
            <a href="keuzedelen" class="text-white font-medium hover:text-emerald-100 transition-colors duration-200" style="margin: 0px 24px 0px 0px;">Keuzedelen</a>
            <a href="creëren" class="text-white font-medium hover:text-emerald-100 transition-colors duration-200" style="margin: 0px 24px 0px 0px;">creëren</a>
                <a href="account" class="text-white font-medium hover:text-emerald-100 transition-colors duration-200" style="margin: 0px 24px 0px 0px;">Account</a>
                <a href="admin" class="text-white font-medium hover:text-emerald-100 transition-colors duration-200" style="margin: 0px 24px 0px 0px;">Account management</a>
                <form action="{{ route('logout') }}" method="POST" class="inline">
                    @csrf
                    <button type="submit" class="inline-flex items-center justify-center font-semibold text-emerald-700 bg-white h-9 sm:h-10 px-4 sm:px-6 rounded-full shadow-md hover:bg-emerald-50 hover:text-emerald-800 transition-all duration-200">
                        Uitloggen
                    </button>
                </form>
                @elseif(($rol !== 'admin' && $rol !== 'student'))
                <a class="inline-flex items-center justify-center font-semibold text-emerald-700 bg-white h-9 sm:h-10 px-4 sm:px-6 rounded-full shadow-md hover:bg-emerald-50 hover:text-emerald-800 transition-all duration-200" href="/home">Home</a>
                <a class="inline-flex items-center justify-center font-semibold text-emerald-700 bg-white h-9 sm:h-10 px-4 sm:px-6 rounded-full shadow-md hover:bg-emerald-50 hover:text-emerald-800 transition-all duration-200" href="/registreren">Registreren</a>
                <a class="inline-flex items-center justify-center font-semibold text-emerald-700 bg-white h-9 sm:h-10 px-4 sm:px-6 rounded-full shadow-md hover:bg-emerald-50 hover:text-emerald-800 transition-all duration-200" href="/login">Inloggen</a>
            @endif
        </nav>
    </div>
</header>
 
<main class="min-h-screen">
  @yield('content')
</main>

<footer class="bg-emerald-700 shadow-lg">
    <footer class="bg-emerald-700 text-white/95 shadow-lg">
  <div class="max-w-7xl mx-auto px-4 py-8 sm:py-12">
    <div class="flex flex-col sm:flex-row sm:justify-between gap-6">
      <div class="flex items-start gap-3">
        <img src="{{ asset('images/techniek-college-rotterdam.webp') }}" alt="Techniek College Rotterdam" class="h-10 w-auto">
        <div>
          <p class="font-semibold">Techniek College Rotterdam</p>
          <p class="text-sm text-emerald-100">Student Portaal</p>
        </div>
      </div>

      <div class="grid grid-cols-2 sm:grid-cols-3 gap-6">
        <div>
          <h4 class="font-semibold mb-2">Menu</h4>
          <ul class="text-sm space-y-1">
            <li><a href="/" class="hover:underline">Home</a></li>            
            <li><a href="/keuzedelen" class="hover:underline">Keuzedelen</a></li>            
            <li><a href="/account" class="hover:underline">Account</a></li>
          </ul>
        </div>

        <div>
          <h4 class="font-semibold mb-2">Account</h4>
          <ul class="text-sm space-y-1">
            <li><a href="/login" class="hover:underline">Inloggen</a></li>
            <li><a href="/registreren" class="hover:underline">Registreren</a></li>
            <li><a href="/account" class="hover:underline">Mijn account</a></li>
          </ul>
        </div>

        <div>
          <h4 class="font-semibold mb-2">Contact</h4>
          <a href="mailto:info@tcrmbo.nl">info@tcrmbo.nl</a><br>
          <p class="text-sm">Tel: 088 945 45 00</p>
        </div>
      </div>
    </div>

    <hr class="border-emerald-600 my-6">

    <div class="flex flex-col sm:flex-row items-center justify-between text-sm text-emerald-100">
      <p>©2026 Techniek College Rotterdam — Alle rechten voorbehouden.</p>
      <div class="flex items-center gap-4 mt-3 sm:mt-0">
        <a href="https://www.techniekcollegerotterdam.nl/" class="hover:underline">Techniek College Rotterdam</a>
        <a href="https://www.techniekcollegerotterdam.nl/privacy" class="hover:underline">Privacy verklaring</a>
      </div>
    </div>
  </div>
</footer>
</body>
</html>
