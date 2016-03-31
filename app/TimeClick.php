<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TimeClick extends Model {

    protected $table = "time_click";
    protected $fillable = ['id', 'time_click'];
    public $timestamps = false;

}
