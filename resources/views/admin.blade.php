@extends('layouts.master')

@section('title', 'Home')

@section('content')
hello, {{ session('username') }}!
@endsection

