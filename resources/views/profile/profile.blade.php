@extends('layouts.layoutHome')

@section('content')



<div class="bg-white  py-5 px-5 rounded-lg font-alatsi shadow-lg shadow-cyan-500/50 my-5 mx-5" id="app">
    <div>
          <span class="self-center font-semibold whitespace-nowrap text-sky-800 text-ms font-fugaz-one">Mi cuenta</span>

    </div>

    <div class=" text-black text-6xl font-fugaz-one px-5 py-5 text-center">Bienvenido {{ auth()->user()->name }}
    
    </div>
    <div>

            <div class="flex justify-center">
        <x-user-card></x-user-card>
    </div>

            <div class="bg-gray-100 flex-col-2 py-5 px-5 rounded-lg font-alatsi shadow-lg shadow-cyan-500/50 my-5 mx-5">

            <div class=" text-sky-800 text-4xl font-fugaz-one px-5 py-5 text-center">
                Mis datos
            </div>

            <div class="px-2 py-2 text-sky-800 text-4xl font-fugaz-one">
                <div>
                    Name:
                </div>
                <div>
                    Email:
                </div>
                <div>
                    contraseña:
                </div>
                <div>
                    Rol:
                </div>
            </div>
            
        </div>

    </div>



@endsection