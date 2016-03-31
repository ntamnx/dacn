<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnhSP extends Model {

    protected $table = "anhsp";
    protected $fillable = ['id', 'masp', 'anh'];
    public $timestamps = false;

}
