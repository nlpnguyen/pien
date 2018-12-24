<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class san_pham_model extends Model
{
    protected $table ='san_pham';
    protected $fillable = [
        'id',
        'ten_san_pham',
        'mo_ta',
        'mo_ta_ky_thuat',
        'id_loai_san_pham',
        'images_san_pham',
        'images_chi_tiet',
        'gia_ban',
        'gia_goc',
        'so_luong_nhap',
        'so_luong_con',
        'so_luong_da_ban',
        'trangthai',
    ];
}
