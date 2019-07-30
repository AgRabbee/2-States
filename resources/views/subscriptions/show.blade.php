@extends('layouts.admin')

@section('page_header')
    Subscription Types
@endsection

@section('box_header')
    All Subscription Types
@endsection

@section('box_body')
    @if(count($types) > 0)
        @foreach ($types as $type)
            <ul>
                <li>
                    {{ $type->subscription_type_name }}
                </li>
            </ul>
        @endforeach

    @else
        <p>No available booty box.
            <a href="{{ url('/type/add') }}">Create one</a>
        </p>
    @endif
@endsection

@section('box_footer')

@endsection
