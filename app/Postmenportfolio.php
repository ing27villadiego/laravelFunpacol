<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Postmenportfolio extends Model
{
    protected $fillable = ['godfather_id', 'postmen_id'];

    public function godfather()
    {
        return $this->belongsTo(Godfather::class);
    }

    public function postmen()
    {
        return $this->belongsTo(Postmen::class);
    }

}
