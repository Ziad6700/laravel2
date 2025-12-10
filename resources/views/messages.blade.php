@extends('layouts.master')

@section('title', 'Home')

@section('header')
<h2> laravel </h2>
<a class="ml-10" href="/home">home</a>
<a class="ml-10" href="/about">about</a>
<a class="ml-10" href="/contactus">contact</a>
<a class="ml-10" href="/posts/create">post</a>
@endsection

@section('content')
    <h3>This is the messages page!</h3>

    @if($posts->count())
        @foreach ($posts as $post)
            <div class="post">
                <h2>{{ $post->title }}</h2>
                <p>{{ $post->body }}</p>
                <small>Gemaakt op: {{ $post->created_at->format('d M Y') }}</small>
            </div>
            <hr>
        @endforeach
    @else
        <p>Er zijn nog geen berichten geplaatst.</p>
    @endif
@endsection

