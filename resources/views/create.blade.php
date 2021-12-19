@extends('admin')
@section('content')
<div class="card">
    <div class="card-header">ADD NEW MEAL</div>
    <div class="card-body">
        
        <form action="{{ url('/admin') }}" method="post">
            @csrf
            <label>Name</label><br>
            <input type="text" name="name" id="name" class="form-control"><br>
            <label>Category</label><br>
            <input type="text" name="category" id="category" class="form-control"><br>
            <label>Price</label><br>
            <input type="text" name="price" id="price" class="form-control"><br>
            <label>Calories</label><br>
            <input type="number" name="calories" id="calories" class="form-control"><br>
            <label>Description</label>
            <textarea type="text" name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
            <input type="submit" value="Save" class="btn btn-success"><br>
        </form>
    
    </div>
</div>
@stop