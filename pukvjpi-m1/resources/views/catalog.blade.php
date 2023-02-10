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
            <div class="categories d-flex justify-content-between">
                <a href="?sort=year">Год производства</a>
                <a href="?sort=name">Name</a>
                <a href="?sort=price">Price</a>
            </div>
            <div class="d-flex flex-wrap w-100 mt-3">
                @foreach ($products as $product)
                    <a href="{{ route('product', $product->id) }}" class="mb-4 justify-content-between d-flex align-center flex-column">
                        <div class="d-flex flex-column m-auto align-center justify-content-center">
                            <picture><img src="{{ $product->photo }}" alt="image" class="catalog__product_image"></picture>
                            <p>{{ $product->name }}</p>
                            <p>{{ $product->price }} рублей</p>
                            <a href="" class="btn btn-primary">Добавить в корзину</a>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    @endsection
