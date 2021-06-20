<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teams extends Model
{
    protected $fillable = [
        'name','skill','head','facebook','instagram','twitter','mail','images', 'publication_status',
    ];
}
