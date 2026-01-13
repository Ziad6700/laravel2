@extends('layouts.master')

@section('title', 'Home')

@section('header')
<header class="bg-gradient-to-r from-emerald-700 via-green-600 to-emerald-700 shadow-lg">
    <div class="w-full flex flex-row items-center justify-between h-24 px-4 sm:px-8">
    
        <div class="flex items-center gap-3">
            <img class="h-9 sm:h-10 w-auto" src="{{ asset('images/techniek-college-rotterdam.webp') }}" alt="Techniek College Rotterdam logo"> 
            <div class="flex flex-col gap-0.5 leading-tight">
                <span class="text-[10px] sm:text-xs uppercase tracking-[0.25em] text-emerald-100 font-semibold">
                    Techniek College Rotterdam
                </span>
                <span class="text-lg sm:text-xl font-semibold text-white">
                    Student Portaal
                </span>
            </div>
             <img class="h-24 w-84 ml-44 mb-1.5 brightness-100" src="{{ asset('images/slogantcr.png') }}" alt="Techniek College Rotterdam slogan"> 
        </div>

        <!-- Rechts: navigatie-links met button styling -->
        <nav class="flex items-center ml-auto space-x-6 text-xs sm:text-sm">
            @if(session('logged_in'))
                <span class="text-white font-medium">{{ session('username') }}</span>
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
<div class="min-h-[calc(100vh-4rem)] flex items-center justify-center bg-gradient-to-br from-gray-50 via-green-50 to-white py-10">
    <div class="w-full max-w-2xl px-4">
        @if (session('success'))
            <div class="mb-6 p-4 bg-green-50 border border-green-200 rounded-lg shadow-sm">
                <p class="text-sm text-green-600 font-medium">
                    {{ session('success') }}
                </p>
            </div>
        @endif

        @if (session('logged_in'))
            <div class="bg-white rounded-2xl shadow-xl border border-gray-100 p-8">
                <h1 class="text-3xl font-extrabold text-green-600 mb-4">
                Welkom terug, {{ session('username') }}!
                </h1>
                <div class="space-y-3 text-gray-700">
                    <p><span class="font-semibold">Naam:</span> {{ session('username') }}</p>
                    <p><span class="font-semibold">Klas:</span> {{ session('klas') }}</p>
                    <p><span class="font-semibold">Studentnummer:</span> {{ session('nummer') }}</p>
                </div>
            </div>
        @else
            <div class="bg-white rounded-2xl shadow-xl border border-gray-100 p-8 text-center">
                <h1 class="text-3xl font-extrabold text-green-600 mb-4">
                    Welkom bij het Student Portaal
            </div>
        @endif
    </div>
</div>
@endsection

