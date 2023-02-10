@extends('layouts.app')
@section('content')
    <div class="container product">
        <img src="{{ $product->photo }}" alt="product-photo" class="product__photo">
        <h1>{{ $product->name }}</h1>
        <p>{{ $product->price }} рублей</p>
        <a href="" class="btn btn-primary">Добавить в корзину</a>
    </div>
@endsection
