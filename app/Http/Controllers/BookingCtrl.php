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
      $bookings->mobile = $request->input('mobile');
      $bookings->venue = $request->input('venue');
      $bookings->email = $request->input('email');
      $bookings->event_type = $request->input('event_type');
      $bookings->county = $request->input('county');
      $bookings->tent100_quantity = $request->input('tent100_quantity');
      $bookings->tent100_type = $request->input('tent100_type');
      $bookings->tent50_quantity = $request->input('tent50_quantity');
      $bookings->tent50_type = $request->input('tent50_type');
      $bookings->gazebo_quantity = $request->input('gazebo_quantity');
      $bookings->bridal_quantity = $request->input('bridal_quantity');
      $bookings->armless_quantity = $request->input('armless_quantity');
      $bookings->decorated_chairs = $request->input('decorated_chairs');
      $bookings->bridal_bouquet = $request->input('bridal_bouquet');
      $bookings->maid_corsage = $request->input('maid_corsage');
      $bookings->maid_bouquet = $request->input('maid_bouquet');
      $bookings->men_buttonnaire = $request->input('men_buttonnaire');
      $bookings->car_bouquet = $request->input('car_bouquet');
      $bookings->archs = $request->input('archs');
      $bookings->gift_table_drapery = $request->input('gift_table_drapery');
      $bookings->gift_tent_drapery = $request->input('gift_tent_drapery');
      $bookings->cake_table_drapery = $request->input('cake_table_drapery');
      $bookings->high_table_drapery = $request->input('high_table_drapery');
      $bookings->carpet = $request->input('carpet');
      $bookings->public_address = $request->input('public_address');

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
