@extends('layouts.master')

@section('title', 'Home')

@section('header')
<h2> laravel </h2>
<a class="ml-10" href="/home">home</a>
<a class="ml-10" href="/about">about</a>
<a class="ml-10" href="/contactus">contact</a>
<a class="ml-10" href="/posts">post</a>

@endsection

@section('content')
    <h3>This is the home page!</h3>
@endsection

