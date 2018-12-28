<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class khachhangmodel extends Model
{
    protected $table ='khachhang';
    protected $fillable = [
        'id',
        'ten_khach_hang',
        'phone',
        'email',
        'dia_chi',
    ];
}
