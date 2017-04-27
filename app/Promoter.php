<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promoter extends Model
{
    protected $fillable  = ['first_name', 'last_name', 'dokumenttyp_id', 'document', 'address', 'cell_phone', 'date_birthday', 'email', 'city_id', 'zone_id', 'state'];


    public function dokumenttyp()
    {
        return $this->belongsTo(Dokumenttyp::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }


    public function adviser()
    {
        return $this->hasMany(Adviser::class);
    }

    public function godfathers()
    {
        return $this->hasMany(Godfather::class);
    }


}
