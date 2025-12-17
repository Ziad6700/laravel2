@extends('layouts.master')

@section('title', 'Home')

@section('header')
<div class=" flex flex-row justify-end bg-green-600 h-16">
    <img class="h-13 w-34 ml-2 mt-1" src="{{ asset('images/techniek-college-rotterdam.webp') }}"> 
    <div class="flex-grow"></div>
    <a class="flex items-center justify-center text-black tex-sm bg-yellow-400 mr-16 mt-3 h-10 w-24 rounded hover:bg-yellow-700" href="/home">home</a> </div>
@endsection

@section('content')
<div class="border border-black-500 w-72 w-96 h-96 mx-auto mt-32">
    <h2 class="text-xl text-green-400 font-black mb-2 mx-auto text-center"> registreren </h2>

    <div class="flex flex-col items-center justify-center gap-5"> 
    <form action="/registreren" mehtod="POST" class="flex flex-col gap-2">
    @csrf
   
    
    <label>kies een gebruikersnaam:</label>
    <input class="bg-gray-200 rounded" type="text" placeholder="student90">
   
    <label>kies een wachtwoord:</label>
    <input class="bg-gray-200 rounded" type="password" placeholder="password90">
    
    <div class="flex flex-row gap-1 mt-4">
    <label>student nummer: </label>
    <input class="bg-gray-200 rounded w-20" type="number" max="10" placeholder="902547">

    <label>klas: </label>
    <input class="bg-gray-200 rounded w-16" type="text" placeholder="1mb">
    </div>

       <button type="submit" class="bg-blue-500 mt-5 text-white font-bold py-2 px-4 rounded">
            Registreren
        </button>
            </form>

            <p>Heb je al een acount?</p>
            <a class="bg-blue-500  text-white font-bold py-2 px-4 rounded">login</a>
   </div>
</div>
@endsection