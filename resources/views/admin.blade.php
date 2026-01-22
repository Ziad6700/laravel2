@extends('layouts.master')

@section('title', 'Home')

@section('content')
hello, {{ session('username') }}!

    @foreach ($gebruikers as $gebruiker)
    <p>Naam: {{ $gebruiker->gebruikersnaam }}</p>
    <p>Klas: {{ $gebruiker->klas }}</p>
    <p>Nummer: {{ $gebruiker->nummer }}</p>
    <form action="{{ route('gebruikers.destroy', $gebruiker->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" onclick="return confirm('Weet je het zeker?')">Verwijder</button>
</form>
    <hr>
    @endforeach
@endsection

