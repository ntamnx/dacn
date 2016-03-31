<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TinTuc extends Model {

    protected $table	 = "tintuc";
    protected $fillable	 = ['id', 'tieude', 'anh', 'mota', 'noidung', 'luot_xem'];
    public $timestamps	 = true;

}
