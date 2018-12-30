<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hoa_don_model extends Model
{
    protected $table ='hoa_don';
    protected $fillable = [
        'id',
        'id_khach_hang',
        'tong_tien',
        'ngay_mua',
        'ghi_chu',
        'trangthai',
    ];
}
