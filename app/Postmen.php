<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Postmen extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'dokumenttyp_id',
        'document',
        'address',
        'cell_phone',
        'email',
        'date_birthday',
        'city_id',
        'zone_id',
        'state',
    ];

    public function dokumenttyp()
    {
        return $this->belongsTo(Dokumenttyp::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function zone()
    {
        return $this->belongsTo(Zone::class);
    }

    public function postmenporfolio()
    {
        return $this->hasMany(Postmenportfolio::class);
    }

    public function collection()
    {
        return $this->hasMany(Collection::class);
    }

}
