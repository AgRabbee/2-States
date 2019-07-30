@extends('layouts.admin')

@section('page_header')
    Subscriptions
@endsection

@section('box_header')
    All Subscriptions
@endsection

@section('box_body')


      <table id="example1" class="table table-bordered table-hover">
        <thead>
        <tr>
          <th>User Name</th>
          <th>Box Name</th>
          <th>Delivery Method</th>
          <th>Subscription Type</th>
          <th>Status</th>
        </tr>
        </thead>
        <tbody>

        @foreach ($subscriptions as $value)
            <tr>
                <td>{{ $value->users->name}}</td>
                <td>{{ $value->boxes->box_name}}</td>
                <td>{{ $value->delivery_methods->method_name}}</td>
                <td>{{ $value->subscription_types->subscription_type_name}}</td>
                <td>    @if ($value->status == 0)
                        <div class="p-1 bg-primary text-white text-center">Active</div>
                    @elseif ($value->status == 1)
                        <div class="p-1 bg-danger text-white text-center">Paused</div>
                    @elseif ($value->status == 2)
                        <div class="p-1 bg-secondary text-white text-center">Delivered</div>
                @endif
                </td>
            </tr>
        @endforeach

        </tbody>
        <tfoot>
        <tr>
            <th>User Name</th>
            <th>Box Name</th>
            <th>Delivery Method</th>
            <th>Delivery Method</th>
            <th>Status</th>
        </tr>
        </tfoot>
      </table>



@endsection

@section('box_footer')

@endsection
