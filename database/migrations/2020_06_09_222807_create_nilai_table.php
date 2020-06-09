<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNilaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilai', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->bigInteger('id_user')->unsigned()->index();
          $table->foreign('id_user')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
          $table->bigInteger('id_mata_kuliah')->unsigned()->index();
          $table->foreign('id_mata_kuliah')->references('id')->on('mata_kuliah')->onUpdate('cascade')->onDelete('cascade');
          $table->bigInteger('nilai');
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
        Schema::dropIfExists('nilai');
    }
}
