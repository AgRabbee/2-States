@extends('layouts.admin')

@section('page_header')
    The Booty Boxes
@endsection

@section('box_header')
    All Booty Boxes
@endsection

@section('box_body')
    @if(count($boxes) > 0)
        @foreach ($boxes as $box)
            <ul>
                <li>
                    <a href="/box/show/{{$box->id}}">{{ $box->name }}</a>
                </li>
            </ul>
        @endforeach
        {{ $boxes->links() }}
    @else
        <p>No available booty box.
            <a href="{{ url('/box/add') }}">Create one</a>
        </p>
    @endif
@endsection

@section('box_footer')

@endsection
