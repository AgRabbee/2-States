@extends('layouts.admin')

@section('page_header')
    Products
@endsection

@section('box_header')
    <a href="/products" class="btn btn-success">All Products</a>
@endsection

@section('box_body')
    <h2>{{ $product->name }}</h2>
    <hr>
    <p>{{ $product->description }}</p>
    <p><strong>Price: </strong>{{ $product->price }}</p>
@endsection

@section('box_footer')

@endsection
