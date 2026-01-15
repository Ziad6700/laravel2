@extends('layouts.master')

@section('title', 'Home')

@section('content')
<div class="min-h-[calc(100vh-4rem)] bg-green-50">
    @if (session('success'))
        <div class="w-full max-w-6xl mx-auto px-4 pt-8">
            <div class="mb-6 p-4 bg-green-50 border border-green-200 rounded-lg shadow-sm">
                <p class="text-sm text-green-600 font-medium">
                    {{ session('success') }}
                </p>
            </div>
        </div>
    @endif

    <!-- Hero Sectie -->
    <section class="w-full max-w-6xl mx-auto px-4 py-12 sm:py-16">
        <div class="text-center mb-12">
            <h1 class="text-4xl sm:text-5xl font-extrabold text-emerald-700 mb-4">
                Welkom bij het Student Portaal
            </h1>
            <p class="text-lg sm:text-xl text-gray-700 max-w-3xl mx-auto">
                Het centrale platform voor studenten van Techniek College Rotterdam om keuzedelen en extra vakken te ontdekken en te selecteren.
            </p>
        </div>
    </section>

    <!-- Informatie Sectie -->
    <section class="w-full max-w-6xl mx-auto px-4 py-8">
        <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-8 sm:p-10 mb-8">
            <h2 class="text-2xl sm:text-3xl font-bold text-emerald-700 mb-6 text-center">
                Wat is het Student Portaal?
            </h2>
            <div class="prose prose-lg max-w-none text-gray-700">
                <p class="text-base sm:text-lg leading-relaxed mb-4">
                    Het Student Portaal is jouw digitale ruimte waar je eenvoudig kunt ontdekken welke keuzedelen en extra vakken beschikbaar zijn voor jouw opleiding. Of je nu je kennis wilt verbreden, je wilt specialiseren, of gewoon iets nieuws wilt leren - hier vind je alle mogelijkheden.
                </p>
                <p class="text-base sm:text-lg leading-relaxed">
                    Op dit platform kun je informatie vinden over alle beschikbare keuzedelen en extra vakken, zodat je een weloverwogen keuze kunt maken die past bij jouw interesses en carrièredoelen.
                </p>
            </div>
        </div>
    </section>

    <!-- Hoe werkt het Sectie -->
    <section class="w-full max-w-6xl mx-auto px-4 py-8">
        <h2 class="text-2xl sm:text-3xl font-bold text-emerald-700 mb-8 text-center">
            Hoe werkt het?
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <!-- Stap 1 -->
            <div class="bg-white rounded-xl shadow-md border border-gray-100 p-6 hover:shadow-lg transition-shadow duration-200">
                <div class="flex items-center justify-center w-12 h-12 bg-emerald-100 rounded-full mb-4">
                    <span class="text-2xl font-bold text-emerald-700">1</span>
                </div>
                <h3 class="text-xl font-semibold text-emerald-700 mb-3">Ontdek</h3>
                <p class="text-gray-600 leading-relaxed">
                    Bekijk alle beschikbare keuzedelen en extra vakken die aansluiten bij jouw opleiding.
                </p>
            </div>

            <!-- Stap 2 -->
            <div class="bg-white rounded-xl shadow-md border border-gray-100 p-6 hover:shadow-lg transition-shadow duration-200">
                <div class="flex items-center justify-center w-12 h-12 bg-emerald-100 rounded-full mb-4">
                    <span class="text-2xl font-bold text-emerald-700">2</span>
                </div>
                <h3 class="text-xl font-semibold text-emerald-700 mb-3">Lees</h3>
                <p class="text-gray-600 leading-relaxed">
                    Lees uitgebreide informatie over elk keuzedeel of extra vak, inclusief inhoud en leerdoelen.
                </p>
            </div>

            <!-- Stap 3 -->
            <div class="bg-white rounded-xl shadow-md border border-gray-100 p-6 hover:shadow-lg transition-shadow duration-200">
                <div class="flex items-center justify-center w-12 h-12 bg-emerald-100 rounded-full mb-4">
                    <span class="text-2xl font-bold text-emerald-700">3</span>
                </div>
                <h3 class="text-xl font-semibold text-emerald-700 mb-3">Kies</h3>
                <p class="text-gray-600 leading-relaxed">
                    Maak je keuze op de selectiepagina en meld je aan voor het keuzedeel of extra vak van jouw keuze.
                </p>
            </div>
        </div>
    </section>

    <!-- Voordelen Sectie -->
    <section class="w-full max-w-6xl mx-auto px-4 py-8">
        <div class="bg-emerald-50 rounded-2xl border border-emerald-100 p-8 sm:p-10 mb-8">
            <h2 class="text-2xl sm:text-3xl font-bold text-emerald-700 mb-6 text-center">
                Waarom het Student Portaal gebruiken?
            </h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <div class="flex items-start gap-4">
                    <div class="flex-shrink-0 w-6 h-6 bg-emerald-600 rounded-full mt-1 flex items-center justify-center">
                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-semibold text-emerald-700 mb-1">Overzichtelijk</h3>
                        <p class="text-gray-700 text-sm">Alle keuzedelen en extra vakken op één plek.</p>
                    </div>
                </div>
                <div class="flex items-start gap-4">
                    <div class="flex-shrink-0 w-6 h-6 bg-emerald-600 rounded-full mt-1 flex items-center justify-center">
                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-semibold text-emerald-700 mb-1">Gedetailleerde informatie</h3>
                        <p class="text-gray-700 text-sm">Uitgebreide beschrijvingen en leerdoelen per vak.</p>
                    </div>
                </div>
                <div class="flex items-start gap-4">
                    <div class="flex-shrink-0 w-6 h-6 bg-emerald-600 rounded-full mt-1 flex items-center justify-center">
                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-semibold text-emerald-700 mb-1">Eenvoudig proces</h3>
                        <p class="text-gray-700 text-sm">Meld je snel en eenvoudig aan voor je keuze.</p>
                    </div>
                </div>
                <div class="flex items-start gap-4">
                    <div class="flex-shrink-0 w-6 h-6 bg-emerald-600 rounded-full mt-1 flex items-center justify-center">
                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-semibold text-emerald-700 mb-1">Altijd up-to-date</h3>
                        <p class="text-gray-700 text-sm">Actuele informatie over beschikbaarheid en planning.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action Sectie -->
    <section class="w-full max-w-6xl mx-auto px-4 py-12">
        <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-8 sm:p-10 text-center">
            <h2 class="text-2xl sm:text-3xl font-bold text-emerald-700 mb-4">
                Klaar om te beginnen?
            </h2>
            <p class="text-gray-700 mb-6 text-lg">
                Bekijk alle beschikbare keuzedelen en extra vakken en maak je keuze.
            </p>
            @if(session('logged_in'))
                <a href="#" class="inline-flex items-center justify-center font-semibold text-white bg-emerald-700 h-12 px-8 rounded-full shadow-md hover:bg-emerald-800 transition-all duration-200 text-base">
                    Bekijk keuzedelen en extra vakken
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            @else
                <p class="text-gray-600 mb-4">
                    Log eerst in om keuzedelen en extra vakken te kunnen bekijken en selecteren.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="/login" class="inline-flex items-center justify-center font-semibold text-black bg-login-green-600 h-12 px-8 rounded-full shadow-md hover:bg-emerald-700 transition-all duration-200 text-base">
                Inloggen
            </button>
                    </a>
                    <a href="/registreren" class="inline-flex items-center justify-center font-semibold text-white bg-emerald-700 h-12 px-8 rounded-full shadow-md hover:bg-emerald-800 transition-all duration-200 text-base">
                        Registreren
                    </a>
                </div>
            @endif
        </div>
    </section>
</div>
@endsection

