@extends('layouts.app')
@section('style')
    <link rel="stylesheet" href="/public/css/style.css">
@endsection
@section('content')
    <div class="container catalog">
        <header>
            <h1>Каталог</h1>
        </header>
        <div>
            <div class="categories d-flex justify-content-between w-25">
                <a href="?sort=year" class="">Год производства</a>
                <a href="?sort=name" class="">Name</a>
                <a href="?sort=price" class="">Price</a>
            </div>
            <div class="d-flex flex-wrap w-100 mt-3">
                @foreach ($products as $product)
                    <div class="m-auto mb-3 catalog-card p-3">
                        <a href="{{ route('product', $product->id) }}" class="none-underline catalog-card_link">
                            <img src="/public/img/{{ $product->photo }}" alt="image" class="catalog__product_image">
                            <div class="text">
                                <p class="text-start">{{ $product->name }}</p>
                                <p class="text-start">{{ intval($product->price) }}&#8381</p>
                            </div>
                        </a>
                        <a href="{{ route('cart.add', $product->id) }}" class="btn btn-primary">Add to Cart</a>
                    </div>
                @endforeach
            </div>
        </div>
    @endsection
