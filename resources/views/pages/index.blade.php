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

                             <!-- Button trigger modal -->
                             <a href="#" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#exampleModal">Proceed to Subscribe</a>

                             <!-- Modal -->
                             <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                               <div class="modal-dialog" role="document">
                                 <div class="modal-content">
                                   <div class="modal-header">
                                     <h5 class="modal-title" id="exampleModalLabel">Subscribe Your Box</h5>
                                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                       <span aria-hidden="true">&times;</span>
                                     </button>
                                   </div>
                                    <form action="" method="post">
                                       <div class="modal-body">
                                           @if (count($methods) > 0)
                                               @foreach ($methods as $method)
                                                   <div class="form-check form-check-inline">
                                                      <input class="form-check-input" type="radio" name="method_id" id="btn{{$method->id}}" value="{{$method->id}}">
                                                      <label class="form-check-label" for="btn{{$method->id}}">{{ $method->method_name }}</label>
                                                    </div>

                                               @endforeach
                                           @else
                                               <p>No available delivery method. You need to collect your box from the storefront.</p>
                                           @endif


                                       </div>
                                       <div class="modal-footer">
                                             <div class="form-group">
                                                 <input type="hidden" name="" value="">
                                             </div>
                                             <button type="submit" class="btn btn-primary btn-sm">Subscription</button>
                                       </div>
                                   </form>
                                 </div>
                               </div>
                             </div>


















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
