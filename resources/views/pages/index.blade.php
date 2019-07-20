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
                             <button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#exampleModal">
                                 Proceed to Subscribe
                             </button>

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
                                           <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                              <label class="form-check-label" for="inlineRadio1">1</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                              <label class="form-check-label" for="inlineRadio2">2</label>
                                            </div>
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
