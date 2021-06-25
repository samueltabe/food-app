@extends('layouts.app')

@section('content')

  <div class="wrapper create-pizza">
    <h1>Create a New Pizza</h1>
    <form action="/pizzas" method="POST">
      @csrf
      <label for="name">Your Name:</label>
      <input type="text" id="name" name="name">
      <label for="type">Choose Pizza Type:</label>
      <select name="type" id="type">
        <option value="margarita">margarita</option>
        <option value="hawaiian">hawaiian</option>
        <option value="veg supreme">veg supreme</option>
        <option value="volcano">volcano</option>
      </select>
      <label for="base">Choose Base Type:</label>
      <select name="base" id="base">
        <option value="cheesy crust">Cheesy crust</option>
        <option value="garlic crust">Garlic crust</option>
        <option value="thin & crispy">Thin & crispy</option>
        <option value="thick">Thick</option>
      </select>
      <fieldset>
        <label>Extra Toppings:</label>
        <input type="checkbox" name="toppings[]" value="muchrooms">Muchrooms<br/>
        <input type="checkbox" name="toppings[]" value="peppers">peppers<br/>
        <input type="checkbox" name="toppings[]" value="garlic">Garlic<br/>
        <input type="checkbox" name="toppings[]" value="olives">Olives<br/>
      </fieldset>
      <input type="submit" vaslue="Order Pizza">
    
    
    </form>
  
  </div>

@endsection