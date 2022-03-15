@extends('layouts.app')
@section('content')
{{-- Start Carousel --}}
<div id="carouselExampleControls" class="position-relative carousel slide" data-bs-ride="carousel">
    <div class="f-color text-center d-flex flex-column justify-content-center align-items-center position-absolute top-50 start-50 translate-middle"></div>
    <div class="f-text text-center d-flex flex-column justify-content-center align-items-center position-absolute top-50 start-50 translate-middle">
        <p>SOMTHING IS BETTER</p>
        <p><strong>Fashion Lorrem</strong> </p>

    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="{{URL::asset('Carousel/1.jpg')}}" class="d-block  h-50 w-100" alt="...">
        </div>
        <div class="carousel-item">
        <img src="{{URL::asset('Carousel/2.jpg')}}" class="d-block h-50 w-100" alt="...">
        </div>
        <div class="carousel-item">
        <img src="{{URL::asset('Carousel/3.jpg')}}" class="d-block h-50 w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>
    {{-- End Carousel --}}
{{-- Start Collection --}}
<div class="container mt-5 collection">
    <div class="row">
        <div class="col-lg-7  ">
        <div class="position-relative">
            <div class="desc text-center position-absolute top-50 start-50 translate-middle">
                <a href="" class="btn show-more position-absolute top-50 start-50 translate-middle">View Collection</a>
            </div>
            <img src="{{URL::asset('Collection/Women.jpg')}}" class=" w-100" alt="...">
        </div>
        <div class="t-collection mt-5 pe-5">
            <h2>
                Hot Collection
            </h2>
            <h3>
                New Trend For Women
            </h3>
            <P>
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veritatis, cum obcaecati? Modi, enim nam? Eum distinctio officiis, error eaque perferendis maiores, qui deleniti tempora excepturi labore dolorum. Dignissimos, obcaecati blanditiis.
            </P>
            <a href="" class="show-more btn btn-light"> Shop Now</a>

        </div>
        </div>
        <div class="col-lg-5">
            <div class="mb-3 position-relative">
                <div class="desc text-center position-absolute top-50 start-50 translate-middle">
                    <a href="" class="btn show-more position-absolute top-50 start-50 translate-middle">View Collection</a>
                </div>
            <img src="{{URL::asset('Collection/Accessories.jpg')}}" class="w-100" alt="...">
            </div>
            <div class="position-relative">
                <div class="desc text-center position-absolute top-50 start-50 translate-middle">
                    <a href="" class="btn show-more position-absolute top-50 start-50 translate-middle">View Collection</a>
                </div>
                <img src="{{URL::asset('Collection/Men.jpg')}}" class=" w-100" alt="...">
            </div>
        </div>
    </div>
</div>
{{-- End Collection --}}
{{-- Start Posters  --}}
    <div class="d-flex mt-5">
        <img src="{{URL::asset('Posters/Female.png')}}" class="w-50" alt="...">
        <img src="{{URL::asset('Posters/Male.png')}}" class="w-50" alt="...">
</div>
{{-- End Posters  --}}
{{-- Start Quote --}}
<div class="d-flex mt-5">
    <img src="{{URL::asset('Posters/Qoute.png')}}" class="w-100" alt="...">
</div>
{{-- End Quote --}}
{{-- Start Blog --}}

<div class="blog mt-5 container">
    <div>

        <h1 class="text-center w-100 mt-5 mb-5">Latest Blog</h1>

    </div>
    <div class="row">

@foreach ($posts as $post )
<div class="col-lg-4">
    <img src="{{URL::asset('posts')}}/{{$post->image}}" alt="">
    <h2 class=" mt-3">{{$post->title}}</h2>
    <p class=" mt-3">{{$post->desc}}</p>
    <a href="" class="btn btn-light">READ MORE</a>
</div>
@endforeach
</div>
</div>

{{-- End Blog --}}
{{-- Start Brands --}}
<div class="brands container mt-5">
    <h1 class="text-center  mt-5 mb-5">Shop By Brand</h1>

    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-12">
            <img src="{{URL::asset('Brands/Adidas.png')}}" class="w-100" alt="...">
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <img src="{{URL::asset('Brands/Nike.png')}}" class="w-100" alt="...">
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <img src="{{URL::asset('Brands/H&M.png')}}" class="w-100" alt="...">
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <img src="{{URL::asset('Brands/Zara.png')}}" class="w-100" alt="...">
        </div>
    </div>
</div>
{{-- End Brands --}}

@endsection
