@extends('layouts.app')

@section('content')
    
<div class="flex-center position-ref full-height header-banner">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                <br>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="content">
        <p class="message">{{ session('message') }}</p>
        <a href="{{url('/pizzas/create') }}">Order a Pizza</a>
        
    </div>
</div>

@endsection