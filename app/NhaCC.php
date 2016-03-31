<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NhaCC extends Model {

    protected $table = "nhacc";
    protected $fillable = ['id', 'name', 'diachi','dienthoai'];
    public $timestamps = false;
}
