<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TinhNang extends Model {

    protected $table = "tinhnang";
    protected $fillable = ['id', 'masp', 'kichthuoc_khoiluong', 'manhinh_hienthi', 'luutru_bonho', 'dulieu_ketnoi', 'ungdung_trochoi', 'nguon'];
    public $timestamps = false;

}
