@extends('layouts.app')

@section('content')
    
<div class="wrapper create-pizza">
    <h1>Create a new pizza</h1>
    <form action="{{ route('store') }}" method="post">
        @csrf
        <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon3">Your name:</span>
        </div>
        <input type="text" name="name" class="form-control" id="basic-url" aria-describedby="basic-addon3">
        </div>
        
        <div class="input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">Choose pizza type</label>
        </div>
        <select name="type" class="custom-select" id="inputGroupSelect01">
            <option selected>Choose...</option>
            <option value="cheese">Cheese</option>
            <option value="hawaiian">Hawaiian</option>
            <option value="veg supreme">veg supreme</option>
            <option value="volcano">volcano</option>
        </select>
        </div>

        <div class="input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">Choose pizza base</label>
        </div>
        <select name="base" class="custom-select" id="inputGroupSelect01">
            <option selected>Choose...</option>
            <option value="cheese">Cheese</option>
            <option value="hawaiian">Hawaiian</option>
            <option value="veg supreme">veg supreme</option>
            <option value="volcano">volcano</option>
        </select>
        </div>

        <br>

        <fieldset>
            <label for="">Extra toppings</label><br>
            <input type="checkbox" name="toppings[]" id="" value="extra mashrooms"> Extra Cheese <br>
            <input type="checkbox" name="toppings[]" id="" value="peppers"> Peppers <br>
            <input type="checkbox" name="toppings[]" id="" value="Garlic"> Garlic <br>
            <input type="checkbox" name="toppings[]" id="" value="chilli"> Chilli <br>
            
        </fieldset> 
        <br>
        <input type="submit" class="btn btn-primary" value="Order pizza">
    </form>
</div>
@endsection