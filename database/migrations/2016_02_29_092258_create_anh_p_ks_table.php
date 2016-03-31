<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnhPKsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('anh_PK', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('mapk')->unsigned();
            $table->foreign('mapk')->references('id')->on('phu_kien')->onDelete('cascade');
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
        Schema::drop('anh_p_ks');
    }

}
