<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dokumenttyp extends Model
{
    protected $fillable = ['name'];


    public function employees()
    {
        return $this->hasMany(Employee::class);
    }

    public function promoters()
    {
        return $this->hasMany(Promoter::class);
    }

    public function advisers()
    {
        return $this->hasMany(Adviser::class);
    }

    public function datafamily()
    {
        return $this->hasMany(Datafamily::class);
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
