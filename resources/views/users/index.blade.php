@extends('layouts.layoutHome')
@section('content')

<users-table :users="{{json_encode($users['data'])}}"></users-table>

{{-- <form action="{{ route('user.destroy', $users) }}" method="POST">
    @csrf @method('DELETE')
    <button class="bg-red-500 hover:bg-red-800 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">delete</button>
</form> --}}




@endsection