@extends('layouts.admin')

@section('page_header')
    Delivery Methods
@endsection

@section('box_header')
    Add New Delivery Method
@endsection

@section('box_body')
    <form action="{{ url('/method/add') }}" method="POST">
        {{ csrf_field() }}
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Delivery Method Name">
      </div>

      <div class="row">
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-sm">Add Method</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
@endsection

@section('box_footer')

@endsection
