<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $fillable = [
        'title','description','cat_id', 'images', 'publication_status',
    ];
}
