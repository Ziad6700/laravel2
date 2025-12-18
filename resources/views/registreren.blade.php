@extends('layouts.master')

@section('title', 'Home')

@section('header')
<header class="bg-gradient-to-r from-emerald-600 via-green-600 to-emerald-700 shadow-lg">
    <div class="w-full flex flex-row items-center justify-between h-20 px-4 sm:px-8">
        
        <div class="flex items-center gap-3 sm:gap-3">
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
<div class="min-h-[calc(100vh-4rem)] flex items-center justify-center bg-gradient-to-br from-gray-50 via-green-50 to-white py-10">
    <div class="w-full max-w-md bg-white rounded-2xl shadow-xl border border-gray-100 px-8 py-8">
        <h2 class="text-2xl font-extrabold text-center text-green-600 mb-1 tracking-tight">
            Registreren
        </h2>
        <p class="text-center text-gray-500 text-sm mb-6">
            Maak een account om verder te gaan.
        </p>

        <form action="/form" method="POST" class="space-y-4">
            @csrf

            <div class="space-y-1.5">
                <label class="block text-sm font-medium text-gray-700">
                    Kies een gebruikersnaam
                </label>
                <input
                    class="block w-full bg-gray-50 border border-gray-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500"
                    type="text"
                    name="gebruikersnaam"
                    placeholder="student90"
                >
            </div>

            <div class="space-y-1.5">
                <label class="block text-sm font-medium text-gray-700">
                    Kies een wachtwoord
                </label>
                <input
                    class="block w-full bg-gray-50 border border-gray-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500"
                    type="password"
                    name="wachtwoord"
                    placeholder="password90"
                >
            </div>

            <div class="grid grid-cols-2 gap-4 mt-2">
                <div class="space-y-1.5">
                    <label class="block text-sm font-medium text-gray-700">
                        Studentnummer
                    </label>
                    <input
                        class="block w-full bg-gray-50 border border-gray-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500"
                        type="number"
                        name="nummer"
                        placeholder="902547"
                    >
                </div>

                <div class="space-y-1.5">
                    <label class="block text-sm font-medium text-gray-700">
                        Klas
                    </label>
                    <input
                        class="block w-full bg-gray-50 border border-gray-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500"
                        type="text"
                        name="klas"
                        placeholder="1MB"
                    >
                </div>
            </div>

            <button
                type="submit"
                class="w-full bg-green-600 hover:bg-green-700 text-white font-semibold mt-4 py-2.5 rounded-lg shadow-sm transition-colors duration-200"
            >
                Registreren
            </button>
        </form>

        <div class="mt-6 text-center text-sm text-gray-600">
            <p>Heb je al een account?</p>
            <a href="/login" class="inline-flex items-center justify-center mt-2 px-4 py-2 text-sm font-semibold text-blue-600 hover:text-blue-700 hover:underline">
                Inloggen
            </a>
        </div>
    </div>
</div>
@endsection