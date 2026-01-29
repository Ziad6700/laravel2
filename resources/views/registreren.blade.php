@extends('layouts.master')

@section('title', 'Home')

@section('header')
<header class="bg-emerald-700 shadow-lg">
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
        </div>

        <nav class="flex items-center ml-auto text-sm">
            <a class="inline-flex items-center justify-center text-xs sm:text-sm font-semibold text-emerald-700 bg-white h-9 sm:h-10 px-4 sm:px-6 rounded-full shadow-md hover:bg-emerald-50 hover:text-emerald-800 transition-all duration-200"
               href="/home">
                <span class="mr-1.5 text-base">←</span>
                <span>Home</span>
            </a>
        </nav>
    </div>
</header>
@endsection

@section('content')
<div class="min-h-[calc(100vh-4rem)] flex items-center justify-center py-10">
    <div class="w-full max-w-md bg-white rounded-2xl shadow-xl border border-gray-100 px-8 py-8">
        <h2 class="text-2xl font-extrabold text-center text-green-950 mb-1 tracking-tight">
            Registreren
        </h2>
        <p class="text-center text-gray-500 text-sm mb-6">
            Maak een account om verder te gaan.
        </p>

        @if ($errors->any())
            <div class="mb-4 p-3 bg-red-50 border border-red-200 rounded-lg">
                <ul class="text-sm text-red-600 space-y-1">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="/form" method="POST" class="space-y-4">
            @csrf

            <div class="space-y-1.5">
                <label class="block text-sm font-medium text-gray-700">
                    Naam
                </label>
                <input
                    class="block w-full bg-gray-50 border border-gray-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-formHover-green-600 focus:border-formHover-green-600"
                    type="text"
                    name="gebruikersnaam"
                    value="{{ old('gebruikersnaam') }}"
                    placeholder="student90"
                    required
                >
            </div>

                <div class="space-y-1.5">
                <label class="block text-sm font-medium text-gray-700">
                    Wachtwoord
                </label>
                <input
                    class="block w-full bg-gray-50 border border-gray-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-formHover-green-600 focus:border-formHover-green-600"
                    type="password"
                    name="password"
                    placeholder="password90"
                    required
                >
                @if($errors->has('wachtwoord'))
                    <p class="text-xs text-red-600 mt-1">Wachtwoord moet minimaal 6 tekens lang zijn.</p>
                @endif
            </div>

            <div class="grid grid-cols-2 gap-4 mt-2">
                <div class="space-y-1.5">
                    <label class="block text-sm font-medium text-gray-700">
                        Studentnummer
                    </label>
                    <input
                        class="block w-full bg-gray-50 border border-gray-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-formHover-green-600 focus:border-formHover-green-600"
                        type="number"
                        name="nummer"
                        value="{{ old('nummer') }}"
                        max="9999999"
                        placeholder="902..."
                        required
                    >
                </div>

                <div class="space-y-1.5">
                    <label class="block text-sm font-medium text-gray-700">
                        Klas
                    </label>
                    <input
                        class="block w-full bg-gray-50 border border-gray-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-formHover-green-600 focus:border-formHover-green-600" 
                        maxlength="2"
                        type="text"
                        name="klas"
                        value="{{ old('klas') }}"
                        placeholder="1MB"
                        required
                    >
                </div>
            </div>

               <button type="submit" class="w-full bg-login-green-600 text-black font-bold mt-4 py-2.5 rounded-lg shadow-sm">
                Registreren
            </button>
        </form>

        <div class="mt-6 text-center text-sm text-gray-600">
            <p>Heb je al een account?</p>
            <a href="/login"  class="inline-flex items-center justify-center w-full h-12 mt-2 px-4 py-2 text-sm font-bold bg-sign-green-800 text-white rounded-lg hover:bg-hoverSign-green-800 ">
                Inloggen
            </a>
        </div>
    </div>
</div>
@endsection