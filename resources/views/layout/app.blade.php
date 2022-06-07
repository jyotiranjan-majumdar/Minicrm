<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <title>Mini CRM Website</title>
</head>
<body class="bg-gray-100">

  <nav class="p-6 bg-white flex justify-between mb-3">
  <ul class="flex item-center">
    <li>
      <a href="/" class="p-3">Home</a>
    </li>
    @auth
    <li>
        <a href="{{route('dashboard')}}" class="p-3">Dashbord</a>
      </li>
      <li>
        <a href="{{route('posts')}}" class="p-3">CRM communications</a>
      </li>
      <li>
        <a href="{{route('city-distance')}}" class="p-3">City Distance</a>
      </li>
      <li>
        <a href="{{route('payment')}}" class="p-3">Stripe Payemnt Form</a>
      </li>
    @endauth
  </ul>

  <ul class="flex item-center">
    
    @auth
    <li>
      <a href="#" class="p-3">{{auth()->user()->username}}</a>
    </li>
    <li>
      <form action="{{route('logout')}}" method="post" class=" p-3 inline">
        @csrf
      <button type="submit">Logout</button>
      </form>
    </li>
    
    @endauth

    @guest
      <li>
        <a href="{{route('login')}}" class="p-3">Login</a>
      </li>  
      <li>
        <a href="{{ route('register') }}" class="p-3">Register</a>
      </li>
    @endguest
    
  </ul>
  </nav>
    
    @yield('content')
</body>
</html>