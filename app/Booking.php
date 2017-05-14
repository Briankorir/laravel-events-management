<?php

namespace events;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = ['customer_name', 'mobile', 'venue', 'email', 'event_type', 'county', 'tent100_quantity',
  'tent100_type', 'tent50_quantity', 'tent50_type', 'gazebo_quantity', 'bridal_quantity', 'armless_quantity', 'decorated_chairs',
  'bridal_bouquet', 'maid_corsage', 'maid_bouquet', 'men_buttonnaire', 'car_bouquet', 'archs', 'gift_table_drapery', 'gift_tent_drapery',
  'cake_table_drapery', 'high_table_drapery', 'carpet', 'public_address'];
}
