<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhuKien extends Model {

    protected $table = "phukien";
    protected $fillable = ['id', 'tenpk', 'masp', 'gia', 'baohanh', 'soluong', 'anh', 'mota'];
    public $timestamps = false;

}
