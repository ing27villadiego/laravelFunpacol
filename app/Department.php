<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = ['name'];

    public function cities()
    {
        return $this->hasMany(City::class);
    }

    public function godfathers()
    {
        return $this->hasMany(Godfather::class);
    }

}
