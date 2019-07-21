@extends('layouts.app')
@section('content')
    <div class="container">
        <h1 class="text-center">
            Welcome to <strong>Great Gifts for Geeks</strong>
        </h1>
        <h3>
            Our All booty boxes
        </h3>

        <div class="row">
        @if(count($boxes) > 0)
            @foreach ($boxes as $box)
            <div class="col-md-4 my-3">
                <div class="card" style="width:100%;">
                    <img class="card-img-top" src="{{ asset('images/no-product-image.png') }}" width="100" height="200" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">
                            {{ $box->name }}
                        </h5>
                        <p class="card-text">
                            <strong>Price : </strong>{{ $box->price }}
                         </p>

                         <a href="#" class="btn btn-primary btn-sm float-left">Show Details</a>

                         <a href="/subscriptions/create/{{ $box->id }}" class="btn btn-primary btn-sm float-right">Proceed to Subscribe</a>

                    </div>
                </div>
            </div>
            @endforeach
            {{ $boxes->links() }}
        @endif
        </div>



















                <ul>
                    <li>
                        <a href=""></a>
                    </li>
                </ul>

    </div>
@endsection
