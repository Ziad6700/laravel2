@extends('layouts.master')

@section('title', 'Home')

@section('content')
 @if (session('logged_in'))
            <div class="bg-white rounded-2xl w-full max-w-xl mt-24 shadow-xl mx-auto border border-gray-100 p-8">
                <h1 class="text-3xl font-extrabold text-center text-green-600 mb-4">
                Welkom, {{ session('username') }}!
                </h1>
                <div class="space-y-3 text-center flex gap-0.5 flex-col text-gray-700">
                    <p><span class="font-semibold">Naam:</span> {{ session('username') }}</p>
                    <p><span class="font-semibold">Klas:</span> {{ session('klas') }}</p>
                    <p><span class="font-semibold">Student nummer:</span> {{ session('nummer') }}</p>
                    <p><span class="font-semibold">Rol:</span> {{ session('rol') }}</p>
                    @if (session('keuzendeel_naam'))
                    <p><span class="font-semibold">Keuzedeel:</span> {{ session('keuzendeel_naam') }}</p>
                    <form action="{{ route('keuzedelen.uitschrijven', session('keuzendeel_naam')) }}" method="POST">
                    @csrf
                    <button class=" mt-8 mx-auto border border-gray-500 font-medium w-24 h-10 bg-green-400 rounded-lg" type="submit" onclick="return confirm('Weet je het zeker?')">Uitschrijven</button>
                    </form>
                    @else
                    <p><span class="font-semibold">Keuzedeel:</span> Nog niet ingeschreven</p>
                    @endif
                </div>
            </div>
 @endif
@endsection

  @yield('footer')
</body>
</html>