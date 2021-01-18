@extends('layouts.app')

@section('content')
    
<div class="wrapper pizza-details">
<h1>Order for {{ $pizza->name}}</h1>
    @if (\Auth::user()->level == 1)
    <h3>Phone number: {{ $pizza->phone_number}}</h3>
    @endif
<p class="type">type - {{$pizza->type}}</p>
<div class="base">base - {{$pizza->base}}</div>
<p class="toppings">
    <ul>
        @foreach ($pizza->toppings as $topping)
            <li>{{ $topping}}</li>
        @endforeach
    </ul>
    @if (\Auth::user()->level == 1)
    <form action="{{url('/pizzas/'.$pizza->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button class="btn btn-primary">Complete Order now!</button>
    </form>
    @endif
</p>
</div>
<a href="{{url('/pizzas') }}" class="btn btn-primary">Back to all pizzas</a>
@endsection