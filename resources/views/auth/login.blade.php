@extends('layout')

@section('content')  

<div class="bg-sky-200 flex-col py-5 px-5">
  
    <h1>Inicia Sesion</h1>

    <div>
            
            <form action="{{ route('login') }}" method="POST">
            @csrf
                <label>
            <input type="email" name="email" value="{{ old('email') }}" placeholder="Email...">

            @error('email') <div>{{ $message }}</div>  @enderror

            </label>
    </div>
    <div class="my-2">
            <label>
            <input type="password" name="password" placeholder="Password...">

            @error('password') <div>{{ $message }}</div> @enderror

            </label>

            
    </div>
    <div>
        <input type="submit" value="login">

            </form> 
    </div>

   

@endsection