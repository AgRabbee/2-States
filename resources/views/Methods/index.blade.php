@extends('layouts.admin')

@section('page_header')
    Delivery Methods
@endsection

@section('box_header')
    All Delivery Methods
@endsection

@section('box_body')
    @if(count($methods) > 0)
        @foreach ($methods as $method)
            <ul>
                <li>
                    {{ $method->method_name }}
                </li>
            </ul>
        @endforeach

    @else
        <p>No available booty box.
            <a href="{{ url('/method/add') }}">Create one</a>
        </p>
    @endif
@endsection

@section('box_footer')

@endsection
