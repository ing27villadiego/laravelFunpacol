<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Godfather extends Model
{
    protected $fillable = [
        'code_godfather',
        'date_membership',
        'promoter_id',
        'adviser_id',
        'first_name',
        'last_name',
        'dokumenttyp_id',
        'document',
        'date_birthday',
        'email',
        'address_office',
        'district_office',
        'phone_office',
        'cell_phone_office',
        'whatsapp',
        'profesion',
        'charge',
        'business',
        'address_house',
        'district_house',
        'phone_house',
        'department_id',
        'city_id',
        'godchildren_id',
        'community',
        'paymenttype_id',
        'paymentperiod_id',
        'type_godfather',
        'value_donation',
        'day_colletion',
        'state',
    ];

    public function promoter()
    {
        return $this->belongsTo(Promoter::class);
    }

    public function adviser()
    {
        return $this->belongsTo(Adviser::class);
    }

    public function dokumenttyp()
    {
        return $this->belongsTo(Dokumenttyp::class);
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function godchildren()
    {
        return $this->belongsTo(Godchildren::class);
    }

    public function paymenttype()
    {
        return $this->belongsTo(Paymenttype::class);
    }

    public function paymentperiod()
    {
        return $this->belongsTo(Paymentperiod::class);
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
