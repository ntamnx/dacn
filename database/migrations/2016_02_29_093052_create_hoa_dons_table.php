<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHoaDonsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('hoa_don', function(Blueprint $table) {
            $table->increments('id');
            $table->date('ngaylap');
            $table->integer('manv')->unsigned();
            $table->foreign('manv')->references('id')->on('users')->onDelete('cascade');
            $table->string('tenKH');
            $table->string('diaChi');
            $table->string('sodt');
            $table->string('noinhan');
            $table->date('tgnhan');
            $table->string('trangthai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('hoa_dons');
    }

}
