<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Dreams</title>
</head>
<body>

<div class="text-red-200 , text-7xl, bg-gray-200 , bg-cover"> <a href="{{ route('welcome') }}">Dreams</a></div>
    <div>
        <ul>
         <li><a href="{{ route('home') }}">Home</a></li>
         <li><a href="{{ route('login') }}">Login</a></li>
         <li><a href="{{ route('register') }}">register</a></li>
        </ul>
    </div>
    <div>
       @yield('content')
    </div>
</body>
</html>