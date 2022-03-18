@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">
        @foreach ($products as $product )
        @if ($product->category_id == 3)
        <div class="col-lg-3 col-md-6 col-sm-12 mt-2">
            <div class="product-grid">
                <div class="product-image">
                    <a href="#" class="image">
                        <img class="pic-1" src="{{$product->image}}">
                        </a>
                    <div class="price"> {{$product->price}}  </div>
                    <form action="">
                        <a href="{{ url('add-to-cart/'.$product->id) }}" class="add-to-cart"> add to cart </a>
                    </form>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">{{$product->name}} </a></h3>
                    <ul class="rating">
                        <li class="fas fa-star"></li>
                        <li class="fas fa-star"></li>
                        <li class="fas fa-star"></li>
                        <li class="fas fa-star"></li>
                        <li class="fas fa-star"></li>
                    </ul>
                </div>
            </div>
        </div>
        @else
        @endif
        @endforeach
            </div>
    </div>

@endsection
