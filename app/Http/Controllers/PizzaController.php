<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;
class PizzaController extends Controller {
    
    public function index() {
        //$pizzas = Pizza::all();
        $pizzas = Pizza::orderBy('name')->get();
        return view('pizzas.index',['pizzas' => $pizzas]);
    }

    public function show($id) {
        $pizza = Pizza::findOrFail($id);
        return view('pizzas.show', ['pizza' => $pizza]);
    }

    public function create() {
        return view('pizzas.create');
    }

    public function store(Request $request) {

        $this->validate($request, [
            'name' => 'required',
            'number' => 'required|integer',
            'type' => 'required',
            'base' => 'required',
            'toppings' => 'required'
        ]
      );

        $pizza = new Pizza();
        $pizza->name        = request('name');
        $pizza->phone_number= request('number');
        $pizza->type        = request('type');
        $pizza->base        = request('base');
        $pizza->toppings    = request('toppings');
        $pizza->save();
        return redirect('/')->with('message', 'Thanks for your order!');
    }

    public function destroy($id) {
        $pizza = Pizza::findOrFail($id);
        $pizza->delete();
        return redirect('/pizzas');

    }
}
