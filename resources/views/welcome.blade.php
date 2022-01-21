@extends('layout')

@section('content')

<div class="bg-sky-200 flex-col py-5 px-5 rounded-lg font-alatsi shadow-lg shadow-cyan-500/50" id="app">

    <div class=" text-red-500 text-6xl font-fugaz-one px-5 py-5 hover:"><a href="{{ route('welcome') }}">Dreams</a>
    </div>
    
    <div class="grid grid-cols-3">
        <a class="hover:text-xl" href="{{ route('home') }}">·Home</a>
        <a class="hover:text-xl" href="{{ route('login') }}">·Login</a>
        <a class="hover:text-xl" href="{{ route('register') }}">·Register</a>
    </div>
   
    @endsection