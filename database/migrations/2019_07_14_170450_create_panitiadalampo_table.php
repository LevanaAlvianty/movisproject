<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePanitiadalampoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('panitiadalampo', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('id_proposal');
            $table->string('nama');
            $table->string('nip');
            $table->string('peran')->nullable();
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
        Schema::dropIfExists('panitiadalampo');
    }
}
