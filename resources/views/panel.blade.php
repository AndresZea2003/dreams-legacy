@extends('layouts.layoutHome')

@section('content')


<div class="bg-sky-200 flex-col py-5 px-5 rounded-lg font-alatsi shadow-lg shadow-cyan-500/50 grid grid-cols-3" id="app" >
    <div>
        <a  class="bg-red-500 hover:bg-red-800 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" href="{{ route('users.index') }}">Usuarios</a>
    </div>
    
</div>




<h1>Panel</h1>



    


  








@endsection
