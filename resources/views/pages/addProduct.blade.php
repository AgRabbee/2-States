@extends('layouts.admin')

@section('page_header')
    Products
@endsection

@section('box_header')
    Add New Products
@endsection

@section('box_body')
    <form action="{{ url('/products/add') }}" method="POST">
        {{ csrf_field() }}

        <div class="row">
            <div class="col-md-6">
                <div class="form-group has-feedback">
                  <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Product name">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group has-feedback">
                  <input type="text" class="form-control" name="price" value="{{ old('price') }}" placeholder="Product price">
                </div>
            </div>
        </div>

        <div class="form-group has-feedback">
          <textarea name="description" rows="8" cols="80" class="form-control" value="{{ old('description') }}" placeholder="Product description"></textarea>
        </div>

        <div class="row">
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-sm">Add Product</button>
            </div>
        </div>
    </form>
@endsection

@section('box_footer')

@endsection
