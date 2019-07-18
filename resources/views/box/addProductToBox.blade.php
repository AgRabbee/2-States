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

      <div class="form-group has-feedback">
        <label for="products">Select Box</label>
        <select class="form-control" name="box_id" >
            @if (count($boxes)>0)
                @foreach ($boxes as $box)
                    <option value="{{ $box->id }}">{{ $box->name }}</option>
                @endforeach
            @else
                <p>No available box.</p>
            @endif
        </select>
      </div>

      <div class="form-group has-feedback">
        <label for="products">Select Products</label>
        <select multiple class="form-control" name="products_id[]" >
            @if (count($products)>0)
                @foreach ($products as $product)
                    <option value="{{ $product->id }}">{{ $product->name }}</option>
                @endforeach
            @else
                <p>No available box.</p>
            @endif
        </select>
      </div>

      <div class="row">
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Add Product</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
@endsection

@section('box_footer')

@endsection
