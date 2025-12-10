@extends('layouts.master')

@section('title', 'Home')

@section('header')
<h2> laravel </h2>
<a class="ml-10" href="/home">home</a>
<a class="ml-10" href="/about">about</a>
<a class="ml-10" href="/contactus">contact</a>
<a class="ml-10" href="/posts">messages</a>
@endsection

@section('content')
    <h3>This is the post page!</h3>

    <form action="/posts" method="POST">
    @csrf

    <label>Title:</label><br>
    <input type="text" name="title"><br><br>

    <label>Body:</label><br>
    <textarea name="body"></textarea><br><br>

    <button type="submit">Save</button>

</form>
@endsection

