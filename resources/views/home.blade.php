@extends('layouts.layoutHome')

@section('content')

<x-nav-bar></x-nav-bar>

<div class="bg-sky-200 flex-col py-5 px-5 rounded-lg font-alatsi shadow-lg shadow-cyan-500/50 grid grid-cols-3" id="app" >

    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button class="bg-red-500 hover:bg-red-800 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">logout</button>
  </div>
</form>





<div>

    medio
</div>
{{ auth()->user() }}



    


  








@endsection


