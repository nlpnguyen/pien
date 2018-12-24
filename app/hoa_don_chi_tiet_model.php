<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hoa_don_chi_tiet_model extends Model
{
    protected $table ='hoa_don_chi_tiet';
    protected $fillable = [
        'id',
        'id_san_pham',
        'unit_price',
        'so_luong',
        'trangthai',
    ];
}
