@extends('admin')
@section('content')
<div class="card">
    <div class="card-body">
            <div class="card-body">
            <h5 class="card-title">{{ $menu->name }}</h5>
            <img src={{$menu->image}} alt="">
            <p class="card-text">Category : {{ $menu->category }}</p>
            <p class="card-text">Price : {{ $menu->price }}$</p>
            <p class="card-text">Calories : {{ $menu->calories }}</p>
            <p class="card-text">description : {{ $menu->description }}</p>
    </div>
        
    <hr>
    
    </div>
</div>