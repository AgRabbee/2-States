@extends('layouts.app')
@section('content')

        <form class="col-md-8 m-auto" action="{{ url('/subscriptions/create') }}" method="POST">
            {{ csrf_field() }}
            <h4>Your Desire Booty Box</h4>
            <hr>
            <div class="form-group row pt-2">
                <label for="box_name" class="col-sm-3 col-form-label">Booty Box Name</label>
                <div class="col-sm-9">
                    <input class="form-control" type="text" id="box_name" placeholder="{{ $box->name }}" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="price" class="col-sm-3 col-form-label">Price</label>
                <div class="col-sm-9">
                    <input class="form-control" type="text" id="price" placeholder="{{ $box->price }}" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Choose your delivery method</label>
                <br>
                <div class="col-sm-9">
                    @if (count($methods)>0)
                        @foreach ($methods as $method)
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="DeliveryMethod" id="btn{{$method->id}}" value="{{$method->id}}">
                                <label class="form-check-label" for="btn{{$method->id}}">{{ $method->method_name }}</label>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>

                <input type="hidden" name="box_id" value="{{ $box->id }}">
                <input type="submit" class="btn btn-primary btn-sm" name="submit" value="Subscribe">



        </form>
@endsection
