@extends('layouts.layoutForms')

@section('content')

<div class="bg-sky-200 flex-col py-5 px-5 rounded-lg font-alatsi shadow-lg shadow-cyan-500/50" id="app">

    <div class=" text-red-500 text-6xl font-fugaz-one px-5 py-5 hover:"><a href="{{ route('welcome') }}">Dreams</a>
    </div>
    
    <div class="px-5 py-5 ">
        <p>Gracias por registrarte , pero antes de comenzar <br> debes verificar tu direccion de correo electronico dandole clic al enlace
            que se ha enviado a tu direccion de correo, <br> si no recibiste el enlace puedes reenviarlo dandole clic al boton de reenviar 
        </p>
    </div>
    <form action="{{ route('verification.send') }}" method="POST">
        @csrf
      <div class="flex items-center justify-between px-5 py-5">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit" value="Resend Verification Email">Resend Verification Email</button>
    </form>

        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button class="bg-red-500 hover:bg-red-800 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">logout</button>
      </div>
    </form>
    <p class="text-center text-gray-500 text-xs">
     &copy; Dreams Corporation
    </p>
  </div>











@endsection
