@extends('layouts.admin')
@section('content')
<h1 class="text-center">Products Dashboard</h1>
<div class="container">
<table class="table text-center">
<thead>
<tr>
    <th scope="col">ID</th>
    <th scope="col">Product</th>
    <th scope="col">Price</th>
    <th scope="col">Category</th>
    <th scope="col">Image</th>
    <th scope="col">Controls</th>

</tr>
</thead>
<tbody>
@foreach ($products as $product)
<tr>
    <th scope="row">{{$product->id}}</th>
    <td>{{$product->name}}</td>
    <td>{{$product->price}}</td>
    <td>{{$product->category_id}}</td>
    <td><img style="width:5vw; hieght:5vh" src="{{URL::asset('products')}}/{{$product->image}}" alt=""></td>
    <td>
        <a href="{{route('products.show',$product->id)}}" class="btn btn-success">Show</a>
        @if (Auth::user()->role_id==1)
        <a href="{{route('products.edit',$product->id)}}" class="btn btn-warning">Edit</a>
        <form action="{{route('products.destroy',$product->id)}}" method="post" class="d-inline">
        @csrf
        @method('DELETE')
            <input type="submit" class="btn btn-danger" value="Delete" />
        </form>
@else
@endif

    </td>
</tr>
@endforeach
</tbody>
</table>
<a class="mt-3 btn btn-primary" href="{{route('products.create')}}">
Add Products
</a>
</div>
@endsection
