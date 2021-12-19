@extends('admin')
@section('content')
<div class="card">
    <div class="card-header">Contactus Page</div>
    <div class="card-body">
        
        <form action="{{ url('admin/' .$menu->id) }}" method="post">
            @csrf
            @method("PATCH")
            <input type="hidden" name="id" id="id" value="{{$menu->id}}" id="id" />
            <label>Name</label><br>
            <input type="text" name="name" id="name" value="{{$menu->name}}" class="form-control"><br>
            <label>Category</label><br>
            <input type="text" name="category" id="category" value="{{$menu->category}}" class="form-control"><br>
            <label>Price</label><br>
            <input type="number" name="price" id="price" value="{{$menu->price}}" class="form-control"><br>
            <label>Calories</label><br>
            <input type="number" name="calories" id="calories" value="{{$menu->calories}}" class="form-control"><br>
            <label>Description</label><br>
            <textarea name="descriptio" id="description" cols="50" rows="10" class="form-control">{{$menu->description}}</textarea><br>
            <input type="submit" value="Update" class="btn btn-success"><br>
        </form>
    
    </div>
    </div>
@stop