@extends('layouts.master')

@section('title', 'Home')

@section('content')

<div class="flex flex-col gap-10">
    <p class="font-bold text-4xl text-emerald-700 mx-auto mt-5">management</p>
 @foreach ($gebruikers as $gebruiker)
<div class="flex flex-row items-center border border-gray-500 w-[500px] min-h-34 mx-auto p-4 bg-emerald-50 rounded-lg shadow-sm">
    
    <div class="flex flex-col gap-1 font-medium">
        <p><span class="font-bold">Naam:</span> {{ $gebruiker->gebruikersnaam }}</p>
        <p><span class="font-bold">Klas:</span> {{ $gebruiker->klas }}</p>
        <p><span class="font-bold">Nummer:</span> {{ $gebruiker->nummer }}</p>
        <p><span class="font-bold">Keuzedeel:</span> {{ $gebruiker->keuzendeel ? $gebruiker->keuzendeel->naam : 'Nog niet ingeschreven' }}</p>
    </div>

    <div class="ml-auto flex flex-col gap-2">
        <form action="{{ route('gebruikers.destroy', $gebruiker->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button class="border border-gray-500 font-medium w-24 h-10 bg-red-400 rounded-lg hover:bg-red-500 shadow-sm" 
                    type="submit" 
                    onclick="return confirm('Weet je het zeker?')">
                Verwijder
            </button>
        </form>

        @if ($gebruiker->keuzendeel)
        <form action="{{ route('keuzedelen.uitschrijven', $gebruiker->keuzendeel->naam) }}" method="POST">
            @csrf
            <button class="border border-gray-500 font-medium w-24 h-10 bg-green-400 rounded-lg hover:bg-green-500 shadow-sm" 
                    type="submit" 
                    onclick="return confirm('Weet je het zeker?')">
                Uitschrijven
            </button>
        </form>
        @endif
    </div>
</div>
@endforeach
</div>
@endsection

