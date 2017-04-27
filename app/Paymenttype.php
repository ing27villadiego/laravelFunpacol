<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paymenttype extends Model
{

    protected $fillable = ['name'];

    public function godfathers()
    {
        return $this->hasMany(Godfather::class);
    }

}
