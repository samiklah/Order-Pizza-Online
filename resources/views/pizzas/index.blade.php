@extends('layouts.app')

@section('content')
   <div class="wrapper pizza-index">
       <h1>Pizza Orders</h1>
        @foreach ($pizzas as $pizza)
            <div class="pizza-item">
                <img src="/images/pizza.png" alt="">
                <h4><a href="{{url('/pizzas/'.$pizza->id) }}">{{ $pizza->name }}</a></h4>
            </div>  
        @endforeach

        <br>
        
        <a href="{{url('/pizzas/create') }}">
        <button class="btn btn-primary"> Order Pizza </button>
        
        </a>
    </div> 

@endsection