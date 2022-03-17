@extends('layouts.admin')
@section('content')
<h1 class="text-center">Edit {{$product->name}}'s Name </h1>
<div class="container">
        <form method="post" action="{{route('products.update',$product->id)}}">
        @csrf
        @method('PUT')
            <div class="mb-3">
                <label class="form-label">Product Name</label>
                <input type="text" class="form-control @error('name') is invalid @enderror" name="name" value="{{$product->name}}">
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Product Price</label>
                <input type="text" class="form-control  @error('price') is-invalid @enderror " name="price" value="{{$product->price}}">
                @error('price')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection
