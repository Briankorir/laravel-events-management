<?php

namespace events\Http\Controllers;


use Illuminate\Http\Request;
use events\Approve;
use events\Booking;

class BookingCtrl extends Controller
{
    public function create() {
      return view('bookevent');
    }

    public function postCreate(Request $request) {
      $bookings = new Booking;

      $bookings->customer_name = $request->input('customer_name');
      $bookings->event_type = $request->input('event_type');
      $bookings->event_date = $request->input('event_date');
      $bookings->event_package = $request->input('event_package');
      $bookings->save();

      return redirect('/book/event');
    }

    public function view() {
      $bookings = Booking::all();

      return view('admin.booking')->with('bookings', $bookings);
    }

    public function destroy($id) {
      $bookings = Booking::find($id);

      $books = array(
       'customer_name'=>$bookings->customer_name,
       'event_type'=>$bookings->event_type,
       'event_date'=>$bookings->event_date,
       'event_package'=>$bookings->event_package,
       );

      Approve::insert($books);

      $bookings->delete();

      return redirect('/home');
    }


}
