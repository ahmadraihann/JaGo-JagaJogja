<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaporanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned();
            $table->string('hero');
            $table->string('lingkup');
            $table->text('deskripsi');
            $table->text('lokasi');
            $table->string('gambar');
            $table->integer('point');
            $table->string('email');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDeleted('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('laporan');
    }
}
