@extends('layouts.admin')
@section('content')
<h1 class="text-center">Edit {{$product->name}}'s Name </h1>
<div class="container">
        <form method="post" action="{{route('products.update',$product->id)}}">
        @csrf
        @method('PUT')
            <div class="mb-3">
                <label class="form-label">Product Name</label>
                <input type="text" class="form-control" name="name" value="{{$product->name}}">
            </div>
            <div class="mb-3">
                <label class="form-label">Product Price</label>
                <input type="text" class="form-control " name="price" value="{{$product->price}}">
            </div>
            <div class="mb-3">
                <label class="form-label">Product image</label>
                <input type="file" class="form-control " name="image" value="{{$product->image}}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection
