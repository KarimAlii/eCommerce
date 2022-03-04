@extends('layouts.admin')
@section('content')
    <div class="container">
        <form method="post" action="{{route('products.store')}}" enctype="multipart/form-data">
        @csrf
            <div class="mb-3">
                <label class="form-label">Product Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name">
                        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Product Price</label>
                <input type="text" class="form-control @error('price') is-invalid @enderror" name="price">
                @error('price')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

            </div>
            <div class="mb-3">
                <label class="form-label">Image</label>
                <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">
                @error('image')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

            </div>
            <div class="mb-3">
                <label class="form-label">Categories</label>
                <select class="form-select" aria-label="Default select example" name="category_id">
                    @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->category}}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>

        </form>
    </div>
@endsection
