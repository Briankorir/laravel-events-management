@extends('admin.dashboard')

@section('content')
<div class="row">

    <div class="panel panel-body">
      <h1>Approved Bookings</h1>
      <table class="table table-striped table-positive table-hover">

                <thead>
                <tr>
                    <th> Id.</th>
                    <th> Customer Name</th>
                    <th> Event Type</th>
                    <th> Event Date</th>
                    <th> Event Package</th>
                    <th> Approve Event</th>

                </tr>
                </thead>
                <tbody>

                    @foreach($approves as $approve)

                            <tr>
                              <td>
                                {{$approve->id}}
                              </td>
                              <td>
                                {{ $approve->customer_name }}
                              </td>
                              <td>
                                {{$approve->event_type}}
                              </td>
                              <td>
                                {{$approve->event_date}}
                              </td>
                              <td>
                                {{$approve->event_package}}
                              </td>
                              <td>

                              </td>
                            </tr>

                    @endforeach

              </table>
    </div>

  </div>
@endsection
