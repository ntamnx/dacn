<?php namespace App;
use Illuminate\Database\Eloquent\Model;

class PhieuNhap extends Model {
    protected $table = "phieunhap";
    protected $fillable = ['id', 'ngaylap', 'mancc', 'manv'];
    public $timestamps = false;
}
