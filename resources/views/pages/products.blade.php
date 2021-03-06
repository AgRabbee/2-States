@extends('layouts.admin')

@section('page_header')
    Products
@endsection

@section('box_header')
    All Products
@endsection

@section('box_body')
    @if(count($products) > 0)
        @foreach ($products as $product)
            <ul>
                <li>
                    <a href="/product/show/{{$product->id}}">{{ $product->product_name }}</a>
                </li>
            </ul>
        @endforeach

    @else
        <p>No products yet</p>
    @endif
@endsection

@section('box_footer')

@endsection
