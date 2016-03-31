<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class LoaiSP extends Model {
    protected $table = "loaisp";
    protected $fillable = ['id', 'name','thutu'];
    public $timestamps = false;

}
