<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;

class PizzaController extends Controller
{
    public function index(){

        $pizzas = Pizza::all();
        //$pizzas = Pizza::OrderBy('name', 'desc')->get();
        //$pizzas = Pizza::where('base','thin & crispy')->get();
    
    
        return view('pizzas.index',[
            'pizzas'=>$pizzas, 
            'name' =>request('name'), 
            'age' =>request('age')
            ] );

    }

    public function show($id){

        $pizza = pizza::findorfail($id);

    return view('pizzas.show',['pizza'=>$pizza]);

    }

    public function create(){
        return view('pizzas.create');

    }


    public function store(){

        $pizza = new Pizza();

        $pizza->name = request('name');
        $pizza->type = request('type');
        $pizza->base = request('base');
        $pizza->toppings = request('toppings');

        $pizza->save();
        return redirect('/')->with('mssg', 'Thanks For Your order');
    }

    public function destroy($id){

        $pizza = pizza::findorfail($id);
        $pizza->delete();

        return redirect('/pizzas');

    }

    
}
