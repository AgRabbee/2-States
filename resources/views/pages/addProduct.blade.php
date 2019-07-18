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
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="name" placeholder="Full name">
      </div>
      <div class="form-group has-feedback">
        <textarea name="description" rows="8" cols="80" class="form-control"></textarea>
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
