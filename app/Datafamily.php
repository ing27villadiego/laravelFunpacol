<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Datafamily extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'dokumenttyp_id',
        'document',
        'city_id',
        'address',
        'cell_phone',
        'date_birthday',
        'number_brothers',
        'name_brothers',
        'state'
    ];


    public function dokumenttyp()
    {
        return $this->belongsTo(Dokumenttyp::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function godchildrens()
    {
        return $this->hasMany(Godchildren::class);
    }


}
