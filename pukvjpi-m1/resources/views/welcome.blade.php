@extends('layouts.app')

@section('content')
<div class="container about">
    <h1>O нас:</h1>
    <div class="d-flex">
        <div class="">
            <h2>Copy Star</h2>
            <p>Мы занимаемся продажей копировального оборудования</p>
        </div>
        <img src="storage/logo.jpg" class="about__logo ms-auto" alt="">
    </div>



    <div class="slider d-flex justify-content-between mt-5">
        <div id="carouselExample" class="carousel slide w-100">
            <div class="carousel-inner w-100">
                <div class="carousel-item w-100">
                    <div class=" d-flex justify-content-between">
                        @foreach ($products as $product)
                            <a href="public/{{$product->id}}">
                                <picture><img src="storage/{{$product->photo}}" alt="image" class="catalog__product_image"></picture>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
@endsection
