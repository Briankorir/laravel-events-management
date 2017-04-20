@extends('admin.dashboard')

@section('content')
<div class="row">

    <div class="panel panel-body">
      <h1>Bookings</h1>
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

                    @foreach($bookings as $booking)

                            <tr>
                              <td>
                                {{$booking->id}}
                              </td>
                              <td>
                                {{ $booking->customer_name }}
                              </td>
                              <td>
                                {{$booking->event_type}}
                              </td>
                              <td>
                                {{$booking->event_date}}
                              </td>
                              <td>
                                {{$booking->event_package}}
                              </td>
                              <td>
                                <form class="success delete" action="/approve/{{ $booking->id }}" method="post">
                                  <input type="hidden" name="_method" value="delete">
                                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                  <button class="btn btn-primary" type="submit" value="Approve">Approve</button>
                                </form>
                              </td>
                            </tr>

                    @endforeach

              </table>
    </div>

  </div>
@endsection
