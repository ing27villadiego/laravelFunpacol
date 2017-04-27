<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Godchildren extends Model
{
    protected $fillable = ['first_name', 'last_name', 'dokumenttyp_id', 'document', 'date_birthday', 'datafamily_id', 'city_id', 'state' ];

    public function dokumenttyp()
    {
        return $this->belongsTo(Dokumenttyp::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function datafamily()
    {
        return $this->belongsTo(Datafamily::class);
    }

    public function godfathers()
    {
        return $this->hasMany(Godfather::class);
    }


}
