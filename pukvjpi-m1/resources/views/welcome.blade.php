@extends('layouts.app')

@section('content')
    <div class="container about">
        <h1>O нас:</h1>
        <div class="d-flex mb-5">
            <div class="me-auto">
                <h2>True Games</h2>
                <p>Мы занимаемся продажей игровых приставок и аксессуаров</p>
            </div>
            <img src="/public/img/logo.jpg" class="about__logo ms-auto" alt="">
        </div>
        <h2 class="text-center w-100 mt-5 mb-4">Новинки</h2>
        <div id="carouselExample" class="carousel slide mb-5">
            <div class="carousel-inner container">
                <div class="carousel-item active">
                    <div class="d-flex justify-content-around">
                        @foreach ($products as $product)
                            <div class="about-card p-3">
                                <a href="{{ route('product', $product->id) }}" class="slide-item item w-100 text-center none-underline">
                                    <div class="">
                                        <picture><img src="/public/img/{{ $product->photo }}" alt="image"
                                                class="catalog__product_image">
                                        </picture>
                                    </div>
                                    <div class="text">
                                        <p class="">{{ $product->name }}</p>
                                        <p class="">{{ intval($product->price)  }}&#8381</p>
                                    </div>

                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-flex justify-content-around">
                        @foreach ($products as $product)
                            <div class="about-card p-3">
                                <a href="{{ route('product', $product->id) }}" class="slide-item item w-100 text-center none-underline">
                                    <div class="">
                                        <picture><img src="/public/img/{{ $product->photo }}" alt="image"
                                                class="catalog__product_image">
                                        </picture>
                                    </div>
                                    <div class="text">
                                        <p class="">{{ $product->name }}</p>
                                        <p class="">{{ $product->price }}&#8381</p>
                                    </div>

                                </a>
                            </div>
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
    @endsection
