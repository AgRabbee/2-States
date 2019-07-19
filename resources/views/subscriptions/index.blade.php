@extends('layouts.admin')

@section('page_header')
    Subscriptions
@endsection

@section('box_header')
    All Subscriptions
@endsection

@section('box_body')
    @if(count($subscriptions) > 0)
        @foreach ($subscriptions as $subscription)
            <ul>
                <li>
                    <a href="#/{{$subscription->id}}">{{ $subscription->id }}</a>
                </li>
            </ul>
        @endforeach
        {{ $subscriptions->links() }}
    @else
        <p>No subscriptions yet.</p>
    @endif
@endsection

@section('box_footer')

@endsection
