<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zone extends Model
{
    protected $fillable = ['name', 'city_id'];

    public function city()
    {
        return $this->belongsTo(City::class);
    }


    public function postmens()
    {
        return $this->hasMany(Postmen::class);
    }


}
