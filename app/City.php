<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = ['name'];


    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function zones()
    {
        return $this->hasMany(Zone::class);
    }

    public function employees()
    {
        return $this->hasMany(Employee::class);
    }

    public function promoters()
    {
        return $this->hasMany(Promoter::class);
    }

    public function godchildrens()
    {
        return $this->hasMany(Godchildren::class);
    }

    public function godfathers()
    {
        return $this->hasMany(Godfather::class);
    }

    public function postmens()
    {
        return $this->hasMany(Postmen::class);
    }

}
