<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class loai_san_pham_model extends Model
{
    protected $table ='loai_san_pham';
    protected $fillable = [
        'id',
        'ten_loai_san_pham',
        'id_danh_muc_san_pham',
        'trangthai',
    ];
}
