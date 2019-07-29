@extends('layouts.app')
@section('content')
    <div class="container">
        <h1 class="text-center">
            Welcome to <strong>Great Gifts for Geeks</strong>
        </h1>
        <h3 class="text-lg-center mt-5 mb-3">
            Subscribe to Get a Booty Box
        </h3>

        <div class="row">
        @if(count($subscriptionType) > 0)
            @foreach ($subscriptionType as $Type)
            <div class="col-md-3 my-3 text-center">
                <div class="card border- rounded " style="height:350px;">
                    <div class="card-body">
                        <h5 class="card-title my-5" >
                            {{ $Type->subscription_type_name }}
                        </h5>
                        <p class="card-text my-4">
                            <strong>Price : </strong>
                         </p>
                        <form action="{{ url('/subscriptions/create') }}" method="POST">
                            {{ csrf_field() }}
                            <input type="hidden" name="type_id" value="{{ $Type->id }}">

                            <input type="submit" name="submit" value="Try Now" class="btn btn-primary btn-sm float-center mt-5">
                        </form>


                    </div>
                </div>
            </div>
            @endforeach

        @endif
        </div>



















                <ul>
                    <li>
                        <a href=""></a>
                    </li>
                </ul>

    </div>
@endsection
