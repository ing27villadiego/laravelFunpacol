<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    protected $fillable = [
        'receipt_code',
        'godfather_id',
        'postmen_id',
        'date_collection',
        'value_collected'
    ];


    public function godfather()
    {
        return $this->belongsTo(Godfather::class);
    }

    public function postmen()
    {
        return $this->belongsTo(Postmen::class);
    }



}
