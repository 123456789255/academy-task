@extends('layouts.app')
@section('content')
    <div class="container product">
        <div class="product-page">
            <div class="">
                <img src="/public/img/{{ $product->photo }}" alt="product-photo" class="product__photo">
            </div>
            <div class="ms-5 d-flex flex-column">
                <h2>{{ $product->name }}</h2>
                <p>{{ intval($product->price) }} рублей</p>
                <a href="{{ route('cart.add', $product->id) }}" class="btn btn-primary">Add to Cart</a>
            </div>
        </div>

    </div>
@endsection
