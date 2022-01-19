@extends('layout')

@section('content')


{{ auth()->user() }}

<form action="{{ route('logout') }}" method="POST">
 @csrf
 <button>logout</button>
</form>




@endsection


