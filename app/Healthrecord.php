<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Healthrecord extends Model
{
    protected $fillable = ['godchildren_id', 'date_entry', 'city_id', 'date_exit'];
}
