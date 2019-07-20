<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnggaranpoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anggaranpo', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('id_proposal');
            $table->string('namabarang');
            $table->double('jml1', 13, 0)->nullable()->default(0);;
            $table->double('jml2', 13, 0)->nullable()->default(0);
            $table->double('jml3', 13, 0)->nullable()->default(0);
            $table->double('harga', 13, 0)->nullable()->default(0);;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('anggaranpo');
    }
}
