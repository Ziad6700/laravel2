@extends('layouts.master')

@section('title', 'Home')

@section('content')
<div class="min-h-[calc(100vh-4rem)] flex items-center justify-center py-10">
    <div class="w-full max-w-md bg-white rounded-2xl shadow-xl border border-gray-100 px-8 py-8">

<form action="{{ route('keuzedelen.store') }}" method="POST" class="space-y-4">
    @csrf

    <h2 class="text-2xl font-extrabold text-center text-emerald-700 mb-1">
        Creëer Keuzedeel
    </h2>
    <p class="text-center text-gray-500 text-sm mb-6">
            Creëer hier een keuzedeel.
        </p>

    <div class="space-y-1.5">
        <label class="block text-sm font-medium text-gray-700">Naam keuzedeel</label>
        <input
            class="block w-full bg-gray-50 border border-gray-300 rounded-lg px-3 py-2 text-sm focus:ring-2 focus:ring-emerald-600"
            type="text"
            name="naam"
            placeholder="Bijv. Verdieping software"
            required
        >
    </div>

    <div class="space-y-1.5">
        <label class="block text-sm font-medium text-gray-700">Beschrijving</label>
        <textarea
            class="block w-full bg-gray-50 border border-gray-300 rounded-lg px-3 py-2 text-sm focus:ring-2 focus:ring-emerald-600"
            name="description"
            rows="4"
            placeholder="Beschrijf de inhoud van het keuzedeel..."
            required
        ></textarea>
    </div>

    <div class="space-y-1.5">
        <label class="block text-sm font-medium text-gray-700">Keuzendeel code</label>
        <input
            class="block w-full bg-gray-50 border border-gray-300 rounded-lg px-3 py-2 text-sm focus:ring-2 focus:ring-emerald-600"
            type="text"
            name="keuzedeel_code"
            placeholder="25604K0210"
            required
        >
    </div>    

    <button type="submit" class="w-full bg-sign-green-800 text-white font-bold mt-4 py-2.5 rounded-lg shadow-sm hover:bg-emerald-700">
        Keuzedeel Opslaan
    </button>
</form>

        </div>
    </div>
</div>
@endsection