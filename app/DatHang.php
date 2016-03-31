<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DatHang extends Model {

    protected $table = "hoadon";
    protected $fillable = ['id', 'ngaylap','manv','ten_kh','diachi','sdt','noinhan','tgnhan','trangthai'];
    public $timestamps = true;
}
