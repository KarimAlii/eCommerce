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
            <a href="" class="btn btn-light"> Shop Now</a>

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
@endsection
