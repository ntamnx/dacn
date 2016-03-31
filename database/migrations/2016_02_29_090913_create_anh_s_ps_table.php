<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnhSPsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('anhsp', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('masp')->unsigned();
            $table->foreign('masp')->references('masp')->on('san_pham')->onDelete('cascade');
            $table->string('anh');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('anh_s_ps');
    }

}
