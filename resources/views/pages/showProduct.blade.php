@extends('layouts.admin')

@section('page_header')
    Products
@endsection

@section('box_header')
    <a href="/products" class="btn btn-success">All Products</a>
@endsection

@section('box_body')
    <h2 class="text-uppercase">{{ $product->product_name }}</h2>
    <small><strong>Price: </strong>{{ $product->price }}</small>
    <hr>
    <p class="text-capitalize">{{ $product->description }}</p>

@endsection

@section('box_footer')

@endsection
