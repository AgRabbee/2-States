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
            <td>{{ $box_details->box_name }}</td>
            <td>
                @if (count($box_details->products)>0)

                <ul>
                @foreach ($box_details->products as $value)
                    <li>{{ $value->product_name }}</li>
                @endforeach
                </ul>
                @else
                    <p>No available product yet..</p>
                @endif
            </td>
            <td>
                {{ $box_details->products->sum('price') }}
            </td>
        </tr>
    </table>
@endsection

@section('box_footer')

@endsection
