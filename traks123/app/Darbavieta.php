<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Darbavieta extends Model
{
    public $timestamps = false;
    protected $table = 'darbavieta';
    protected $fillable = [
        'uznemums',
        'adrese',
    ];
}
