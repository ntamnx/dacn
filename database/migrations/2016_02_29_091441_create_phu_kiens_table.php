<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhuKiensTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('phu_kien', function(Blueprint $table) {
            $table->increments('id');
            $table->string('tenphukien');
            $table->integer('gia');
            $table->integer('soluong');
            $table->integer('masp')->unsigned();
            $table->foreign('masp')->references('masp')->on('san_pham')->onDelete('cascade');
            $table->string('anh');
             $table->integer('mota');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('phu_kiens');
    }

}
