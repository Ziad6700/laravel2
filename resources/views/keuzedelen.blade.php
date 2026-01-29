@extends('layouts.master')

@section('title', 'Home')

@section('content')


    <p class="font-bold text-4xl text-emerald-700 text-center mt-5">keuzedelen</p>
    <div class="flex flex-row flex-wrap mt-6 gap-28">
    @foreach ($keuzedelen as $keuzedeel)
    <div class="flex flex-col border border-gray-500 w-96 h-56 ml-10 bg-emerald-50 rounded-lg">
        <div class="flex flex-col mt-4 ml-4 font-medium">
    <h2 class="mx-auto text-2xl font-bold">{{ $keuzedeel->naam }}</h2>
    <p class="mt-2 mr-0.5">{{ $keuzedeel->description }}</p>
        </div>
         <form class="mx-auto mt-3" action="{{ route('keuzedelen.inschrijven', $keuzedeel->naam) }}" method="POST">
    @csrf
    <button class=" mt-8 border border-gray-500 font-medium w-24 h-10 bg-green-400 rounded-lg" type="submit" onclick="return confirm('Weet je het zeker?')">Inschrijven</button>
        </form>
</div>
    @endforeach
</div>
@endsection