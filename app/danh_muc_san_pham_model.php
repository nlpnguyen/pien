<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class danh_muc_san_pham_model extends Model
{
    protected $table ='danh_muc_san_pham';
    protected $fillable = [
        'id',
        'ten_danh_muc_san_pham',
        'trangthai',
    ];
}
