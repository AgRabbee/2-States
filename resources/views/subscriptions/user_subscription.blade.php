@extends('layouts.app')

@section('content')

        @if (count($user_subscription)>0)
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>Box Name</th>
                <th>Delivery Method</th>
                <th>Subscription Type</th>
                <th>Status</th>
              </tr>
              </thead>
              <tbody>
          @foreach ($user_subscription as $value)
              <tr>
                <td class="text-capitalize">{{ $value->box_id }}</td>
                <td>{{ $value->delivery_method_id }}</td>
                <td>{{ $value->subscription_type_id }}</td>
                <td>{{ $value->status }}</td>
              </tr>
          @endforeach
              </tbody>
              <tfoot>
              <tr>
                  <th>Box Name</th>
                  <th>Delivery Method</th>
                  <th>Subscription Type</th>
                  <th>Status</th>
              </tr>
              </tfoot>
            </table>
        @endif

@endsection
