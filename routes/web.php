<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/book/event', 'BookingCtrl@create');

Route::post('/book/event', 'BookingCtrl@postCreate');


// Admin Panel
Route::get('/system/bookings', 'BookingCtrl@view');

Route::get('/bookings/approved', 'ApproveCtrl@viewApproves');


Route::get('/events/gallery', function(){
  return view('gallery');
});

Route::resource('/approve', 'BookingCtrl');
