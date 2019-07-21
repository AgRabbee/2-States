@extends('layouts.admin')

@section('page_header')
    The Booty Boxes
@endsection

@section('box_header')
    <a href="/boxes" class="btn btn-success">All Booty Boxes</a>
@endsection

@section('box_body')
    <table class="table table-stripped">
        <tr>
            <th>Name</th>
            <th>Products</th>
            <th>Price</th>
        </tr>
        <tr>
            <td>{{ $box_details->name }}</td>
            <td>
                <ul>
                    @if(count($products) > 0)
                        @foreach ($products as $product)
                            <li>{{ $product->name }}</li>
                        @endforeach
                    @else
                        No available Products
                    @endif
                </ul>
            </td>
            <td>{{ $box_details->price }}</td>
        </tr>
    </table>
@endsection

@section('box_footer')

@endsection
