<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatamasukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datamasuk', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('hero');
            $table->string('email');
            $table->text('deskripsi');
            $table->text('lokasi');
            //$table->date('dedline');
            $table->bigInteger('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('datamasuk');
    }
}
