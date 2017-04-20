<?php

namespace events;

use Illuminate\Database\Eloquent\Model;

class Approve extends Model
{
    protected $fillable =['customer_name', 'event_type', 'event_date', 'event_package'];
}
