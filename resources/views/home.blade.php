@extends('layouts.master')

@section('title', 'Home')

@section('header')
<h2> laravel </h2>
<a class="ml-10" href="/home">Home</a>
<a class="ml-10" href="/about">About</a>
<a class="ml-10" href="/contactus">Contact</a>
<a class="ml-10" href="/posts/create">Post</a>
<a class="ml-10" href="/registreren">Registreren</a>
<a class="ml-10" href="/login">Inloggen</a>
@endsection

@section('content')
    <h3>This is the home page!</h3>
@endsection

