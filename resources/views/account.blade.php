@extends('layouts.master')

@section('title', 'Home')

@section('header')
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
            @if(session('logged_in'))
                <span class="text-white font-medium">Account</span>
                <form action="{{ route('logout') }}" method="POST" class="inline">
                    @csrf
                    <button type="submit" class="inline-flex items-center justify-center font-semibold text-emerald-700 bg-white h-9 sm:h-10 px-4 sm:px-6 rounded-full shadow-md hover:bg-emerald-50 hover:text-emerald-800 transition-all duration-200">
                        Uitloggen
                    </button>
                </form>
            @else
                <a class="inline-flex items-center justify-center font-semibold text-emerald-700 bg-white h-9 sm:h-10 px-4 sm:px-6 rounded-full shadow-md hover:bg-emerald-50 hover:text-emerald-800 transition-all duration-200" href="/registreren">Registreren</a>
                <a class="inline-flex items-center justify-center font-semibold text-emerald-700 bg-white h-9 sm:h-10 px-4 sm:px-6 rounded-full shadow-md hover:bg-emerald-50 hover:text-emerald-800 transition-all duration-200" href="/login">Inloggen</a>
            @endif
        </nav>
    </div>
</header>
@endsection    

@section('content')
 @if (session('logged_in'))
            <div class="bg-white rounded-2xl shadow-xl border border-gray-100 p-8">
                <h1 class="text-3xl font-extrabold text-green-600 mb-4">
                Welkom, {{ session('username') }}!
                </h1>
                <div class="space-y-3 text-gray-700">
                    <p><span class="font-semibold">Naam:</span> {{ session('username') }}</p>
                    <p><span class="font-semibold">Klas:</span> {{ session('klas') }}</p>
                    <p><span class="font-semibold">Studentnummer:</span> {{ session('nummer') }}</p>
                </div>
            </div>
 @endif
@endsection

  @yield('footer')
</body>
</html>