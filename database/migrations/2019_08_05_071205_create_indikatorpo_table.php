<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIndikatorpoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('indikatorpo', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('id_laporan')->nullable();
            $table->text('indikator')->nullable();
            $table->text('baseline')->nullable();
            $table->text('target')->nullable();
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
        Schema::dropIfExists('indikatorpo');
    }
}
