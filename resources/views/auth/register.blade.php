@extends('layout')

@section('content')

<h1>Registrate</h1>

<form action="{{ route('register') }}" method="POST">
    @csrf
    <label>
        <input type="email" name="email" value="{{ old('email') }}" placeholder="Email...">

        @error('email') <div>{{ $message }}</div>  @enderror

    </label>
    <label>
        <input type="password" name="password" placeholder="Password...">

        @error('password') <div>{{ $message }}</div> @enderror

    </label>

        <input type="submit" value="login">

</form> 