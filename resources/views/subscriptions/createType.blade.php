@extends('layouts.admin')

@section('page_header')
    Subscription Types
@endsection

@section('box_header')
    Add New Subscription Type
@endsection

@section('box_body')
    <form action="{{ url('/type/add') }}" method="POST">
        {{ csrf_field() }}
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Subscription Type Name">
      </div>

      <div class="row">
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-sm">Add Type</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
@endsection

@section('box_footer')

@endsection
