<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class visit extends Model
{
    protected $fillable = [
        'ip','city','postal','region','loc','name','timezone',
    ];
}
