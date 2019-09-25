<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atalgojums extends Model
{
    //
    public $timestamps = false;
    protected $fillable = [
        //'uznemums_id',
        //'lietotajs_id',
        //'profesija_id',
        'alga',
    ];
    
}
