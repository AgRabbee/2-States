@extends('layouts.admin')

@section('page_header')
    The Booty Boxes
@endsection

@section('box_header')
    Add New boxes
@endsection

@section('box_body')
    <form action="{{ url('/box/add') }}" method="POST">
        {{ csrf_field() }}
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="name" placeholder="Booty Box name">
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="price" placeholder="Enter Your Price">
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
