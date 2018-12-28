<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class anhctmodel extends Model
{
    protected $table ='image_san_pham';
    protected $fillable = [
        'id',
        'image',
        'san_pham.id',
    ];
}
