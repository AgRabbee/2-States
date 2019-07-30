@extends('layouts.admin')

@section('page_header')
    The Booty Boxes
@endsection

@section('box_header')
    Add New boxes
@endsection

@section('box_body')
    <form action="{{ url('/box/add/product') }}" method="POST">
        {{ csrf_field() }}

        <div class="row">
            <div class="col-md-6">
                <div class="form-group has-feedback">
                  <label for="products">Select Box</label>
                  <select class="form-control" name="box_id" >
                      @if (count($boxes)>0)
                          @foreach ($boxes as $box)
                              <option value="{{ $box->id }}">{{ $box->box_name }}</option>
                          @endforeach
                      @else
                          <p>No available box.</p>
                      @endif
                  </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-check form-group has-feedback">
                    <label for="">Select Products</label> <br>
                      @if (count($products)>0)
                          @foreach ($products as $product)
                              <input class="form-check-input" type="checkbox" id="chk{{ $product->id }}" name="products_id[]" value="{{ $product->id }}">
                              <label class="form-check-label" for="chk{{ $product->id }}">{{ $product->product_name }}</label> <br>
                          @endforeach
                      @else
                          <p>No available box.</p>
                      @endif
                </div>
            </div>
        </div>








      <div class="row">
        <div class="col-md-12">
          <button type="submit" class="btn btn-primary btn-sm">Add Product</button>
        </div>
      </div>
    </form>
@endsection

@section('box_footer')

@endsection
