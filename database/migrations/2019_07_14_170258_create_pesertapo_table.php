<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePesertapoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesertapo', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('id_proposal');
            $table->string('nama');
            $table->string('nip')->nullable();
            $table->string('peran')->nullable();
            $table->string('golongan')->nullable();
            $table->string('jabatan')->nullable();
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
        Schema::dropIfExists('pesertapo');
    }
}
