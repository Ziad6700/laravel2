<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

     @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-green-50">
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
                <a href="account" class="text-white font-medium" style="margin: 0px 24px 0px 0px;">Account</a>
                <form action="{{ route('logout') }}" method="POST" class="inline">
                    @csrf
                    <button type="submit" class="inline-flex items-center justify-center font-semibold text-emerald-700 bg-white h-9 sm:h-10 px-4 sm:px-6 rounded-full shadow-md hover:bg-emerald-50 hover:text-emerald-800 transition-all duration-200">
                        Uitloggen
                    </button>
                </form>
            @elseif(($rol === 'admin'))
            <a href="/" class="text-white font-medium hover:text-emerald-100 transition-colors duration-200">Home</a>
                <a href="account" class="text-white font-medium" style="margin: 0px 24px 0px 0px;">Account</a>
                <a href="admin" class="text-white font-medium" style="margin: 0px 24px 0px 0px;">Admin</a>
                <form action="{{ route('logout') }}" method="POST" class="inline">
                    @csrf
                    <button type="submit" class="inline-flex items-center justify-center font-semibold text-emerald-700 bg-white h-9 sm:h-10 px-4 sm:px-6 rounded-full shadow-md hover:bg-emerald-50 hover:text-emerald-800 transition-all duration-200">
                        Uitloggen
                    </button>
                </form>
                @elseif(($rol !== 'admin'&& $rol !== 'student'))
                <a class="inline-flex items-center justify-center font-semibold text-emerald-700 bg-white h-9 sm:h-10 px-4 sm:px-6 rounded-full shadow-md hover:bg-emerald-50 hover:text-emerald-800 transition-all duration-200" href="/registreren">Registreren</a>
                <a class="inline-flex items-center justify-center font-semibold text-emerald-700 bg-white h-9 sm:h-10 px-4 sm:px-6 rounded-full shadow-md hover:bg-emerald-50 hover:text-emerald-800 transition-all duration-200" href="/login">Inloggen</a>
            @endif
        </nav>
    </div>
</header>
    
  @yield('content')

  @yield('footer')
</body>
</html>
