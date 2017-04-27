<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paymentperiod extends Model
{
    protected $fillable = ['name'];

    public function godfathers()
    {
        return $this->hasMany(Godfather::class);
    }

}
