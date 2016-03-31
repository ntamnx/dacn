<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CT_PhieuNhap extends Model {

	protected $table	 = "ct_phieunhap";
	protected $fillable	 = ['mapn', 'id', 'soluong', 'gianhap'];
	public $timestamps	 = false;

}

