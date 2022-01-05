@extends('layouts.layout ')
       @section('content')
        <div class="wrapper pizza-detail">
            <h1>Order for {{$pizza ->name}}</h1> 
            <p class="type">Type-{{$pizza->type}}</p>
            <p class="base">Base-{{$pizza->base}}</p>
            <p class="toppings">Extra toppings:</p>
            <ul>
                @foreach($pizza->toppings as $topping)
                <li>{{$topping}}</li>
                @endforeach
            </ul>
            <form action="/pizzas/{{$pizza->id}}" method="Post">
                @csrf 
                @method('DELETE')
                <button>complete order</button>
            </form>
        </div>
        <a href="/pizzas" class="back">back to all pizzas</a>
        @endsection
 
