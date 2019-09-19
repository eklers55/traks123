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
    
    public static function boot()
    {
    parent::boot();

    static::deleted(function($atalgojums){
        $atalgojums->keywords()->delete();
    });
    }
}
