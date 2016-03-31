<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class CTHoaDon extends Model {

    protected $table = "ct_hoadon";
    protected $fillable = ['mahd', 'masp', 'soluong', 'dongia'];
    public $timestamps = true;
}
