@extends('layouts.app')

@section('content')
  <div class="imondbg">
    <h1 class="imondwhite">Book For An Event</h1>

    <form class="form-horizontal" action="/book/event" method="post">
      <input type="hidden" name="_token" value="{{csrf_token()}}">

      <div class="form-group">
        <label class="col-md-4">Name</label>
        <div class="">
          <input class="col-md-5" type="text" name="customer_name" value="{{old('customer_name')}}" placeholder="Your Name">
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-4">Type Of Event</label>
        <div class="">
          <input class="col-md-5" type="text" name="event_type" value="{{old('event_type')}}" placeholder="event_type">
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-4">Day of Event</label>
        <div class="">
          <input class="col-md-5" type="text" name="event_date" value="{{old('event_date')}}" placeholder="Day of Event">
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-4">Choose Your Package</label>
        <div class="">
          <select class="col-md-3" name="event_package">
            <option></option>
            <option>Executive</option>
            <option>Premier</option>
            <option>Middle Class</option>
            <option>Ordinary</option>
          </select>
        </div>
      </div>

      <div class="">
        <button type="submit" name="submit">Submit</button>
      </div>

    </form>

  </div>
@endsection
