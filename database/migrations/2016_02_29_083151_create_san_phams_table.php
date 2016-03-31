<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSanPhamsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('san_pham', function(Blueprint $table) {
            $table->increments('maSP');
            $table->string('tenSP');
            $table->integer('maloaisp')->unsigned();
            $table->foreign('maloaisp')->references('maloaisp')->on('loaisp')->onDelete('cascade');
            $table->integer('giaban');
            $table->string('tgbaohanh');
            $table->string('xuatsu');
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
        Schema::drop('san_phams');
    }

}
