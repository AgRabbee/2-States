@extends('layouts.app')

@section('content')


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

            @for ($i=0; $i < count($user_subscription->boxes); $i++)

            <tr>
                <td>{{ $user_subscription->boxes[$i]->box_name}}</td>
                <td>{{ $user_subscription->delivery_methods[$i]->method_name}}</td>
                <td>{{ $user_subscription->subscription_types[$i]->subscription_type_name}}</td>
                <td>    @if ($user_subscription->boxes[$i]->pivot->status == 0)
                        {{ 'Active' }}
                    @elseif ($user_subscription->boxes[$i]->pivot->status == 1)
                        {{ 'Paused' }}
                    @elseif ($user_subscription->boxes[$i]->pivot->status == 2)
                        {{ 'Delivered' }}
                @endif
                </td>
            </tr>
            @endfor


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


@endsection
