<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BAPN extends Model {

    protected $table = "ba_phieunhap";
    protected $fillable = ['id', 'mapn', 'soluong', 'dongia'];
    public $timestamps = false;

}
