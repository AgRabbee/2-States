@extends('layouts.admin')

@section('page_header')
    Subscriptions
@endsection

@section('box_header')
    All Subscriptions
@endsection

@section('box_body')
    @if(count($subscriptions) > 0)
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>User Name</th>
          <th>Box Name</th>
          <th>Price</th>
          <th>Delivery Method</th>
          <th>Status</th>
        </tr>
        </thead>
        <tbody>
    @foreach ($subscriptions as $subscription)
        <tr>
          <td class="text-capitalize">{{ $user->name }}</td>
          <td>{{ $box->name }}</td>
          <td>{{ $box->price }}</td>
          <td>{{ $method->method_name }}</td>
          <td>
              @if ( $subscription->status == 0)
                  {{ 'Active' }}
              @elseif ($subscription->status == 1)
                  {{ 'Paused' }}
              @elseif ($subscription->status == 1)
                  {{ 'Delivered' }}
              @endif
          </td>
        </tr>
    @endforeach
        </tbody>
        <tfoot>
        <tr>
            <th>User Name</th>
            <th>Box Name</th>
            <th>Price</th>
            <th>Delivery Method</th>
            <th>Status</th>
        </tr>
        </tfoot>
      </table>
    @else
        <p>No subscriptions yet.</p>
    @endif
@endsection

@section('box_footer')

@endsection
