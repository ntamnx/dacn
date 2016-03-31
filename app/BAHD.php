<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BAHD extends Model {
    protected $table = "ba_hd";
    protected $fillable = ['id', 'soluong', 'dongia','tensp'];
    public $timestamps = false;

}
